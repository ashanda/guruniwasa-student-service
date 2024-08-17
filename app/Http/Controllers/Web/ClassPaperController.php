<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClasspaperController extends Controller
{
    public function classPaper()
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
            return view('web.class_paper.view',compact('months', 'currentMonth'));

        }catch(\Exception $exception){

            return;
        }
    }
    public function classPaperMonthly(Request $request)
    {
         $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/class-paper';
        $accessToken = $request->cookie('access_token');

       
       //try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'grade' => session('student_data')['grade'],
                    'month'=> $request->month
                ]
            ]);
            
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
    
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    return view('web.class_paper.monthly_view',compact('body'));
                }else{

                    return view('web.class_paper.monthly_view',compact('body'));
                }
            }
    //    } catch (\Exception $e) {
    //         // Log the error if needed and handle exceptions
    //                 $homeHeader = 1;
    //                 $homeFooter= 1;
    //                 return view('web.auth.login',compact('homeHeader','homeFooter'));
    //     }

        
    }

    public function classPaperView()
    {
        try{

            return view('web.class_paper.paper_view');

        }catch(\Exception $exception){

            return;
        }
    }


}


