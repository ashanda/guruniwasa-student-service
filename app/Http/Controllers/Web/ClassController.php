<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClassController extends Controller
{
      public function classView(Request $request)
    {
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/live-lessons';
        $accessToken = $request->cookie('access_token');

       
       try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'query' => [
                    'grade' => session('student_data')['grade']
                ]
            ]);
       
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);

                if (isset($body['status']) && $body['status'] === 200) {
                   
                    return view('web.classes.view',compact('body'));
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

}
