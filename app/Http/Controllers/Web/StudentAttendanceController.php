<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudentAttendanceController extends Controller
{
  

    public function studentAttendance()
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
            return view('web.student_attendance.view',compact('months', 'currentMonth'));

        }catch(\Exception $exception){

            return;
        }
    }
    public function studentAttendanceMonthly(Request $request)
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
                   
                    return view('web.student_attendance.monthly_view',compact('body','months','currentMonth'));
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

    public function studentAttendanceCheck(Request $request)
    {
            $client = new Client();
            // Fetch the API Gateway URL from the environment variables
            $url = env('API_GETWAY_URL') . '/api/v1/student-attendances-data';
            $accessToken = $request->cookie('access_token');
         
            try {
                $response = $client->get($url, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $accessToken,
                    ],
                    'json' => [
                        'month' => $request->month,
                        'student_id' => session('student_data')['id'],
                        'subject_id' => $request->subject_id,
                        'teacher_id' => $request->teacher_id,
                    ]
                ]);
            
                if ($response->getStatusCode() == 200) {
                    
                    $body = json_decode($response->getBody(), true);
                    
                    if (isset($body['status']) && $body['status'] === 200) {
                       
                        // Alert::toast($body['message'], 'success');
                         return view('web.student_attendance.attendance_check',compact('body'));
                    }else{
                        Alert::toast('Something went wrong with the request', 'error');
                        return redirect()->back();
                        
                    }
                }
                   }
            catch (\Exception $e) {
                // Log the error if needed and handle exceptions
                Alert::toast($e->getMessage(), 'error');
                return redirect()->back();
                       
            }
            


    }

   public function studentAttendancestore(Request $request){
    
           $client = new Client();

            // Fetch the API Gateway URL from the environment variables
            $url = env('API_GETWAY_URL') . '/api/v1/student-attendances';
            $accessToken = $request->cookie('access_token');

            try {
                $response = $client->post($url, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $accessToken,
                    ],
                    'json' => [
                        'lesson_id' => $request->lesson_id,
                        'teacher_id' => $request->teacher_id,
                        'subject' => $request->subject,
                        'auth_id' => $request->auth_id,
                        'type' => $request->type,
                        'lesson_date' => $request->lesson_date
                    ]
                ]);
            
                if ($response->getStatusCode() == 200) {
                    
                    $body = json_decode($response->getBody(), true);
                    
                    if (isset($body['status']) && $body['status'] === 200) {
                       
                        //Alert::toast($body['message'], 'success');
                         
                    }else{
                        //Alert::toast('Something went wrong with the request', 'error');
                        
                    }
                }
                   }
            catch (\Exception $e) {
                // Log the error if needed and handle exceptions
                       // Alert::toast($e->getMessage(), 'error');
                       
            }
    }


    
}
