<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function videoView()
    {
        try{

            return view('web.videos.view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function videoMonthlyView()
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

            return view('web.videos.monthly_view',compact('months', 'currentMonth'));

        }catch(\Exception $exception){

            return;
        }
    }

    public function videoMonthlyListView(Request $request)
    {
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/video-recordings';
        $accessToken = $request->cookie('access_token');

       
       try {
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
                   
                    return view('web.videos.monthly_list',compact('body'));
                }else{
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
                }
            }
       } catch (\Exception $e) {
            // Log the error if needed and handle exceptions
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
        }

       
    }

    
    public function videoMonthlySet()
    {
        try{

            return view('web.videos.monthly_set');

        }catch(\Exception $exception){

            return;
        }
    }


    


    public function videoSubjectView(Request $request)
{
    $client = new Client();
    
    // Fetch the API Gateway URL from the environment variables
    $url = env('API_GETWAY_URL') . '/api/v1/get-subject';
    $accessToken = $request->cookie('access_token');
    $studentData = session('student_data');

    $subjectIds = [];
    if (isset($studentData['subjects'])) {
        foreach ($studentData['subjects'] as $subject) {
            if (isset($subject['subject_ids'])) {
                $subjectIds = array_merge($subjectIds, $subject['subject_ids']);
            }
        }
    }

    // Encode the subject IDs as a JSON string
    $subjectIdsJson = json_encode($subjectIds);

    try {
        $response = $client->post($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
            'query' => [
               'subjects' => $subjectIdsJson, // Pass JSON encoded string in query
            ]
        ]);

        if ($response->getStatusCode() == 200) {
            $body = json_decode($response->getBody(), true);
            
            if (isset($body['status']) && $body['status'] === 200) {
                return view('web.videos.subject_view', compact('body'));
            } else {
                $homeHeader = 1;
                $homeFooter = 1;
                return view('web.auth.login', compact('homeHeader', 'homeFooter'));
            }
        }
    } catch (\Exception $e) {
        // Log the error if needed and handle exceptions
        $homeHeader = 1;
        $homeFooter = 1;
        return view('web.auth.login', compact('homeHeader', 'homeFooter'));
    }
}


    public function videoSubjectList(Request $request)
    {
        $client = new Client();
    
    // Fetch the API Gateway URL from the environment variables
    $url = env('API_GETWAY_URL') . '/api/v1/get-subject';
    $accessToken = $request->cookie('access_token');
   

   $subjectIdsJson =  $request->input('id');
   if (is_string($subjectIdsJson)) {
        $subjectIdsJson = [$subjectIdsJson];
    }
    // Encode the subject IDs as a JSON string


    try {
        $response = $client->post($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
            'query' => [
               'subjects' => $subjectIdsJson, // Pass JSON encoded string in query
            ]
        ]);

        if ($response->getStatusCode() == 200) {
            $body = json_decode($response->getBody(), true);
            
            if (isset($body['status']) && $body['status'] === 200) {
                return view('web.videos.subject_list', compact('body'));
            } else {
                $homeHeader = 1;
                $homeFooter = 1;
                return view('web.auth.login', compact('homeHeader', 'homeFooter'));
            }
        }
    } catch (\Exception $e) {
        // Log the error if needed and handle exceptions
        $homeHeader = 1;
        $homeFooter = 1;
        return view('web.auth.login', compact('homeHeader', 'homeFooter'));
    }

       
    }


}
