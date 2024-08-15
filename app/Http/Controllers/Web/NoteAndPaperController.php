<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NoteAndPaperController extends Controller
{
   
    public function notePaper(Request $request)
    {
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/student-subjects';
        $accessToken = $request->cookie('access_token');

       
       //try {
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
    //    } catch (\Exception $e) {
    //         // Log the error if needed and handle exceptions
    //                 Alert::toast($e->getMessage(), 'error');
    //                 return redirect()->back();
    //     }

       
        
    }

    public function notePaperList()
    {
        try{

            return view('web.note-paper.list_view');

        }catch(\Exception $exception){

            return;
        }
    }

    
}
