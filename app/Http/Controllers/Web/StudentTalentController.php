<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class StudentTalentController extends Controller
{
    //
    public function studentTalent()
    {
        try{

            return view('web.student_talents.view');

        }catch(\Exception $exception){

            return;
        }
    }
    public function onlineExamResult()
    {
        try{

            return view('web.student_talents.online_exam_result');

        }catch(\Exception $exception){

            return;
        }
    }

    public function paperAnswer()
    {
        try{

            return view('web.student_talents.paper_answer');

        }catch(\Exception $exception){

            return;
        }
    }


    public function studentCertificate(Request $request)
    {

        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/student-certificate';
        $accessToken = $request->cookie('access_token');

       
       try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'student_id' => session('student_data')['id'],
                ]
            ]);
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    return view('web.student_talents.student_certificate',compact('body'));
                }
                else{
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

    public function studentCertificateUpload(Request $request)
    {
        $client = new Client();

            // Fetch the API Gateway URL from the environment variables
            $url = env('API_GETWAY_URL') . '/api/v1/student-certificate-upload';
            $accessToken = $request->cookie('access_token');

            // Prepare the multipart form data
            $multipartData = [
               
                [
                    'name'     => 'student_id',
                    'contents' => $request->student_id,  // Assuming 'lesson_title' holds the lesson title
                ],
                [
                    'name'     => 'document',
                    'contents' => fopen($request->file('document')->getPathname(), 'r'),
                    'filename' => $request->file('document')->getClientOriginalName(),
                    'headers'  => [
                        'Content-Type' => $request->file('document')->getMimeType(),
                    ],
                ],
                
            ];

            try {
                // Make the POST request
                $response = $client->post($url, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $accessToken,
                    ],
                    'multipart' => $multipartData,
                ]);

                // Check the response status
                if ($response->getStatusCode() == 200) {
                    $body = json_decode($response->getBody(), true);

                    if (isset($body['status']) && $body['status'] === 200) {
                        Alert::toast($body['message'], 'success');
                        return redirect()->back();
                    } else {
                        Alert::toast('Something went wrong with the request', 'error');
                        return redirect()->back();
                    }
                 } else {
                    Alert::toast('Failed to upload the tute. Please try again.', 'error');
                    return redirect()->back();
                }
            } catch (\Exception $e) {
                // Log the error for further analysis
                Log::error('Certificate error: ' . $e->getMessage());

                Alert::toast('File not uploaded', 'error');
                return redirect()->back();
             }


        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/student-certificate-upload';
        $accessToken = $request->cookie('access_token');

       
    }

    public function talentVideos()
    {
        try{

            return view('web.student_talents.talent-videos');

        }catch(\Exception $exception){

            return;
        }
    }


    public function talentVideosView()
    {
        try{

            return view('web.student_talents.talent_videos_view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function talentVideosLesson()
    {
        try{

            return view('web.student_talents.talent_videos_lesson');

        }catch(\Exception $exception){

            return;
        }
    }




  public function myTalentVideos()
    {
        try{

            return view('web.student_talents.my_talent_videos');

        }catch(\Exception $exception){

            return;
        }
    }





    public function otherTalentVideos()
    {
        try{

            return view('web.student_talents.other_talent_videos');

        }catch(\Exception $exception){

            return;
        }
    }


    public function reviweTeacher(Request $request)
    {
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/student-reviwe-teacher';
        $accessToken = $request->cookie('access_token');

       
      //try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'subject_id' => session('student_data')['subjects'][0]['subject_ids'],
                ]
            ]);
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    return view('web.student_talents.reviwe_teacher',compact('body'));
                }
                // else{
                //     Alert::toast('Something went wrong with the request', 'error');
                //     return redirect()->back();
                // }
            }
    //    } catch (\Exception $e) {
    //         // Log the error if needed and handle exceptions
    //                 Alert::toast($e->getMessage(), 'error');
    //                 return redirect()->back();
    //     }

    }
    public function reviweTeacherPost(Request $request)
    {
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/student-reviwe-teacher-post';
        $accessToken = $request->cookie('access_token');

       
       try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'subject_id' => session('student_data')['subjects'][0]['subject_ids'],
                    'teacher_id' => $request->teacher_id,
                    'student_id' => $request->student_id,
                    'rate' => $request->rate,
                    'comment' => $request->comment
                ]
            ]);
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    return view('web.student_talents.reviwe_teacher',compact('body'));
                }
                else{
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


    public function termTest(Request $request)
    {
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/student-subjects-term';
        $accessToken = $request->cookie('access_token');

       
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
                   
                    return view('web.student_talents.term_test',compact('body'));
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

        public function termTestUpload (Request $request){
            
            $client = new Client();

            // Fetch the API Gateway URL from the environment variables
            $url = env('API_GETWAY_URL') . '/api/v1/term-test-upload';
            $accessToken = $request->cookie('access_token');

            // Prepare the multipart form data
            $multipartData = [
                [
                    'name'     => 'teacher_id',
                    'contents' => $request->teacher_id,  // Assuming 'teacher_id' holds the teacher_id
                ],
                [
                    'name'     => 'student_id',
                    'contents' => $request->student_id,  // Assuming 'lesson_title' holds the lesson title
                ],
                [
                    'name'     => 'grade_id',
                    'contents' => $request->grade_id,  // Assuming 'lesson_title' holds the lesson title
                ],
                [
                    'name'     => 'subject_id',
                    'contents' => $request->subject_id,  // Assuming 'lesson_title' holds the lesson title
                ],
                [
                    'name'     => 'first_marks',
                    'contents' => $request->first_marks,  // Assuming 'lesson_title' holds the lesson title
                ],
                [
                    'name'     => 'second_marks',
                    'contents' => $request->second_marks,  // Assuming 'lesson_title' holds the lesson title
                ],
                [
                    'name'     => 'third_marks',
                    'contents' => $request->third_marks,  // Assuming 'lesson_title' holds the lesson title
                ]];
                if ($request->hasFile('first_document')) {
                    $multipartData[] = [
                        'name'     => 'first_document',
                        'contents' => fopen($request->file('first_document')->getPathname(), 'r'),
                        'filename' => $request->file('first_document')->getClientOriginalName(),
                        'headers'  => [
                            'Content-Type' => $request->file('first_document')->getMimeType(),
                        ],
                    ];
                }

                if ($request->hasFile('second_document')) {
                    $multipartData[] = [
                        'name'     => 'second_document',
                        'contents' => fopen($request->file('second_document')->getPathname(), 'r'),
                        'filename' => $request->file('second_document')->getClientOriginalName(),
                        'headers'  => [
                            'Content-Type' => $request->file('second_document')->getMimeType(),
                        ],
                    ];
                }

                if ($request->hasFile('third_document')) {
                    $multipartData[] = [
                        'name'     => 'third_document',
                        'contents' => fopen($request->file('third_document')->getPathname(), 'r'),
                        'filename' => $request->file('third_document')->getClientOriginalName(),
                        'headers'  => [
                            'Content-Type' => $request->file('third_document')->getMimeType(),
                        ],
                    ];
                }
                

            try {
                // Make the POST request
                $response = $client->post($url, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $accessToken,
                    ],
                    'multipart' => $multipartData,
                ]);

                // Check the response status
                if ($response->getStatusCode() == 200) {
                    $body = json_decode($response->getBody(), true);
                    Log::alert($body);
                    if (isset($body['status']) && $body['status'] === 200) {
                        Alert::toast($body['message'], 'success');
                        return redirect()->back();
                    } else {
                        Alert::toast('Something went wrong with the request', 'error');
                        return redirect()->back();
                    }
                 } else {
                    Alert::toast('Failed to upload the tute. Please try again.', 'error');
                    return redirect()->back();
                }
            } catch (\Exception $e) {
                // Log the error for further analysis
                Log::error('Tutesstore error: ' . $e->getMessage());

                Alert::toast('File not uploaded', 'error');
                return redirect()->back();
             }
        }


 




















}
