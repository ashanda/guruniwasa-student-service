<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeesController extends Controller
{
    public function feesView()
    {
        try{
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
            return view('web.fees.all_fees',compact('months', 'currentMonth'));

        }catch(\Exception $exception){

            return;
        }
    }
    public function feesClass( Request $request)
    {

        $client = new Client();
        $currentMonth = $request->input('month');
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/student-subjects';
        $accessToken = $request->cookie('access_token');
        $request_month = $request->input('month');

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
        $filtered_months = array_filter($months, function($month, $index) use ($request_month) {
            // Match the month number (1-based index) with the array key (0-based index)
            return $index + 1 == $request_month;
        }, ARRAY_FILTER_USE_BOTH);

        

        // Finally, compact the result
        $months = array_values($filtered_months);

       try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'student_id' => session('student_data')['id'],
                    'subject_id' => session('student_data')['subjects'][0]['subject_ids']
                ]
            ]);
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    return view('web.fees.fees_class',compact('body','months','currentMonth'));
                }else{
                    Alert::toast('Something went wrong with the request', 'error');
                    return redirect()->back();
                }
            }
       } catch (\Exception $e) {
            // Log the error if needed and handle exceptions
                    Alert::toast($e->getMessage(), 'error');
                    return redirect()->back();
        }

    }

    public function subjectCart()
    {
        try{

            return view('web.fees.subject_cart');

        }catch(\Exception $exception){

            return;
        }
    }


    
}
