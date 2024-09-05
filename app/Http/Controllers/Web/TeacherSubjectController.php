<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherSubjectController extends Controller
{
    public function teacherSubject(Request $request)
    {
        $studentData = session('student_data');

        $client = new Client();
            // Fetch the API Gateway URL from the environment variables
            $url = env('API_GETWAY_URL') . '/api/v1/student-subjects-get';
            $accessToken = $request->cookie('access_token');
         
            try {
                $response = $client->get($url, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $accessToken,
                    ],
                    'json' => [
                        'grade_id' => $studentData['grades']['id'],
                        'current_subjects' => $studentData['subjects'][0]['subject_ids'],
                    ]
                ]);
            
                if ($response->getStatusCode() == 200) {
                    
                    $body = json_decode($response->getBody(), true);
                    
                    if (isset($body['status']) && $body['status'] === 200) {
                       
                        // Alert::toast($body['message'], 'success');
                         return view('web.teacher-subject.view',compact('body'));
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
        //dd($studentData = session('student_data'));

    }

    public function requestSubject()
    {
        try{

            return view('web.teacher-subject.request_subject');

        }catch(\Exception $exception){

            return;
        }
    }


    public function removeSubject(Request $request){
        $studentData = session('student_data');

        $client = new Client();
            // Fetch the API Gateway URL from the environment variables
            $url = env('API_GETWAY_URL') . '/api/v1/remove-subject';
            $accessToken = $request->cookie('access_token');
         
            try {
                $response = $client->post($url, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $accessToken,
                    ],
                    'json' => [
                        'subject_id' => $request->subject_id,
                        'student_id' => $studentData['id'],
                    ]
                ]);
            
                if ($response->getStatusCode() == 200) {
                    
                    $body = json_decode($response->getBody(), true);
                    
                    if (isset($body['status']) && $body['status'] === 200) {
                       
                        Alert::toast($body['message'], 'success');
                        return redirect()->back();
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

    public function addSubject(Request $request){
        $studentData = session('student_data');

        $client = new Client();
            // Fetch the API Gateway URL from the environment variables
            $url = env('API_GETWAY_URL') . '/api/v1/add-subject';
            $accessToken = $request->cookie('access_token');
         
           // try {
                $response = $client->post($url, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $accessToken,
                    ],
                    'json' => [
                        'subject_id' => $request->subject_id,
                        'student_id' => $studentData['id'],
                    ]
                ]);
            
                if ($response->getStatusCode() == 200) {
                    
                    $body = json_decode($response->getBody(), true);
                    
                    if (isset($body['status']) && $body['status'] === 200) {
                       
                        Alert::toast($body['message'], 'success');
                        return redirect()->back();
                    }else{
                        Alert::toast('Something went wrong with the request', 'error');
                        return redirect()->back();
                        
                    }
                }
            //        }
            // catch (\Exception $e) {
            //     // Log the error if needed and handle exceptions
            //     Alert::toast($e->getMessage(), 'error');
            //     return redirect()->back();
                       
            // }
    }

}
