<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class NoteAndPaperController extends Controller
{
   
    public function notePaper(Request $request)
    {
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/student-subjects';
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
                   
                    return view('web.note-paper.list',compact('body'));
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

    public function notePaperList(Request $request,$id)
    {


         $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/note-paper-list';
        $accessToken = $request->cookie('access_token');

       
       try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'subject_id' => $id,
                    'student_id' => session('student_data')['id']
                ]
            ]);
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    return view('web.note-paper.list_view',compact('body'));
                }
            }
       } catch (\Exception $e) {
            // Log the error if needed and handle exceptions
                    Alert::toast($e->getMessage(), 'error');
                    return redirect()->back();
        }

        
    }

    public function notePaperUpload(Request $request){
          $client = new Client();

            // Fetch the API Gateway URL from the environment variables
            $url = env('API_GETWAY_URL') . '/api/v1/class-note-paper-upload';
            $accessToken = $request->cookie('access_token');

            // Prepare the multipart form data
            $multipartData = [
                [
                    'name'     => 'note_id',
                    'contents' => $request->note_id,  // Assuming 'grade_subject' holds the subject_id
                ],
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
                Log::error('Tutesstore error: ' . $e->getMessage());

                Alert::toast('File not uploaded', 'error');
                return redirect()->back();
             }

    }

    
}
