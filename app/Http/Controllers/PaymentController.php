<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentController extends Controller
{



    public function bankPayment(Request $request){
         $months = [
            ["english" => "JANUARY", "local" => "ජනවාරි"],
            ["english" => "FEBRUARY", "local" => "පෙබරවාරි"],
            ["english" => "MARCH", "local" => "මාර්තු"],
            ["english" => "APRIL", "local" => "අප්‍රේල්"],
            ["english" => "MAY", "local" => "මැයි"],
            ["english" => "JUNE", "local" => "ජූනි"],
            ["english" => "JULY", "local" => "ජූලි"],
            ["english" => "AUGUST", "local" => "අගෝස්තු"],
            ["english" => "SEPTEMBER", "local" => "සැප්තැම්බර්"],
            ["english" => "OCTOBER", "local" => "ඔක්තෝබර්"],
            ["english" => "NOVEMBER", "local" => "නොවැම්බර්"],
            ["english" => "DECEMBER", "local" => "දෙසැම්බර්"]
        ];

        $currentMonth = date('n'); 

        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/student-bank-payment';
        $accessToken = $request->cookie('access_token');
        
        $inputMonth = $request->pay_month; // Input like '8', '10', '11', '4'
        $year = now()->year; // You can change this to any specific year
        $day = '01'; // Default to the first day of the month

        // Convert month to two-digit format if needed
        $formattedMonth = str_pad($inputMonth, 2, '0', STR_PAD_LEFT);

        // Combine year, month, and day to form a date
        $payMonth = "{$year}-{$formattedMonth}-{$day}";

        $multipartData = [
        [
            'name'     => 'student_id',
            'contents' => session('student_data')['id'],
        ],
        [
            'name'     => 'dateTime',
            'contents' => $request->dateTime,
        ],
        [
            'name'     => 'cartData',
            'contents' => $request->cartData,
        ],
        [
            'name'     => 'bank',
            'contents' => $request->bank,
        ],
        [
            'name'     => 'transferSlip',
            'contents' => $request->transferSlip,
        ],
        [
            'name'     => 'pay_month',
            'contents' => $payMonth,
        ],
    ];

    // If you have a file (e.g., transferSlip), add it to the multipart data like this:
    if ($request->hasFile('transferSlip')) {
        $multipartData[] = [
            'name'     => 'transferSlip',  // Add file field name
            'contents' => fopen($request->file('transferSlip')->getPathname(), 'r'),
            'filename' => $request->file('transferSlip')->getClientOriginalName(),
            'headers'  => [
                'Content-Type' => $request->file('transferSlip')->getMimeType(),
            ],
        ];
    }


        

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'multipart' => $multipartData,
            ]);
            
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                    session()->flash('showModal', true);
                    session()->forget('cart');
                    return view('web.fees.all_fees',compact('body','months','currentMonth'));
                }else{
                    Alert::toast($body['message'], 'error');
                    return redirect()->back();
                }
            }
       } catch (\Exception $e) {
            // Log the error if needed and handle exceptions
                    Alert::toast($e->getMessage(), 'error');
                    return redirect()->back();
        }

       
    }

    public function cardPayment(Request $request){
         $months = [
            ["english" => "JANUARY", "local" => "ජනවාරි"],
            ["english" => "FEBRUARY", "local" => "පෙබරවාරි"],
            ["english" => "MARCH", "local" => "මාර්තු"],
            ["english" => "APRIL", "local" => "අප්‍රේල්"],
            ["english" => "MAY", "local" => "මැයි"],
            ["english" => "JUNE", "local" => "ජූනි"],
            ["english" => "JULY", "local" => "ජූලි"],
            ["english" => "AUGUST", "local" => "අගෝස්තු"],
            ["english" => "SEPTEMBER", "local" => "සැප්තැම්බර්"],
            ["english" => "OCTOBER", "local" => "ඔක්තෝබර්"],
            ["english" => "NOVEMBER", "local" => "නොවැම්බර්"],
            ["english" => "DECEMBER", "local" => "දෙසැම්බර්"]
        ];

        $inputMonth = $request->pay_month; // Input like '8', '10', '11', '4'
        $year = now()->year; // You can change this to any specific year
        $day = '01'; // Default to the first day of the month

        // Convert month to two-digit format if needed
        $formattedMonth = str_pad($inputMonth, 2, '0', STR_PAD_LEFT);

        // Combine year, month, and day to form a date
        $payMonth = "{$year}-{$formattedMonth}-{$day}";
        
        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/student-card-payment';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'pay_month' => $payMonth,
                    'amount' => $request->amount,
                    'student_id' => session('student_data')['id'],
                    'cartData' => $request->cartData,
                ]
            ]);
            
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    $payment_url = $body['data']; 
                   return view('web.fees.card_payment', compact('payment_url'));  
                }else{
                    Alert::toast($body['message'], 'error');
                    return redirect()->back();
                }

                   
            }
       } catch (\Exception $e) {
            // Log the error if needed and handle exceptions
                    Alert::toast($e->getMessage(), 'error');
                    return redirect()->back();
        }
    }
}
