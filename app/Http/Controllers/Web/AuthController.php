<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    private $serverApiKey;
    public function __construct()
    {
        $this->serverApiKey = env('CLIENT_KEY');
       
    }
    public function index()
    {
        try{
            $homeHeader = 1;
            $homeFooter= 1;
            return view('web.auth.login',compact('homeHeader','homeFooter'));

        }catch(\Exception $exception){

            return;
        }
    }

    public function loginView(Request $request)
    {
        
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/students-check-auth';
        $accessToken = $request->cookie('access_token');

        try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ]
            ]);
            
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    
                    return redirect()->route('web.home')->with('success', $body['message']);
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
    public function registerView()
    {
        try{

            return view('web.auth.register');

        }catch(\Exception $exception){

            return;
        }
    }


    public function registerStep1()
    {
        try{

            return view('web.auth.register-step1');

        }catch(\Exception $exception){

            return;
        }
    }


    
    public function registerStep2()
    {
        try{

            return view('web.auth.register-step2');

        }catch(\Exception $exception){

            return;
        }
    }


      
    public function registerStep3()
    {
        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/grades';
        
        try {
            $response = $client->get($url, [
                'headers' => [
                     'CLIENT_KEY' => $this->serverApiKey
                ]
            ]);
            
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    $grades = $body['data']; // Extracting grades data from response
                    return view('web.auth.register-step3', ['grades' => $grades]);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
        } catch (\Exception $e) {
            
            return back()->with('error', $e);
        }

        
    }



    public function registerStep4(Request $request)
    {
       
        
       

        try{
            $grade = $request->grade;
            $subjectList = $request->selectedSubjects;
            return view('web.auth.register-step4',compact('grade','subjectList'));

        }catch(\Exception $e){

            return back()->with('error', $e);
        }
    }

    public function registerStep4back(){

        return redirect()->route('web.register.step3');
    }

   public function registerStep4Post(Request $request)
{
    if(!isset($request->grade)){
        Alert::toast('Time Out', 'error')->position('top-end')->autoClose(5000)->timerProgressBar();
        return redirect()->route('web.register.step3');
    }

    $client = new Client();
    $url = env('API_GETWAY_URL') . '/api/v1/send-otp';

    try {
        // Make POST request to API endpoint
        $response = $client->post($url, [
            'headers' => [
                'CLIENT_KEY' => $this->serverApiKey,
            ],
            'form_params' => [
                'phone' => $request->phone_number,
            ]
        ]);

        if ($response->getStatusCode() == 200) {
            $body = json_decode($response->getBody(), true);

            if (isset($body['status']) && $body['status'] === 200) {
                $otp = $body['data']; // Extract OTP from response data
                $subjectList = $request->subject_list;
                $grade = $request->grade;
                $phone = $request->phone_number;

                // Redirect to view with OTP and subject list
                session(['otp' => $otp, 'subjectList' => $subjectList, 'phone_number' => $phone, 'grade' => $grade]);
                return redirect()->route('web.register.stepOTP');
            } else {
                return back()->with('error', $body['message']);
            }
        } else {
            return back()->with('error', 'Failed to send OTP. Please try again later.');
        }
    } catch (\Exception $e) {
        return back()->with('error', $e->getMessage());
    }
}


    public function registerStepOTP (Request $request){
       
        try{
             $otp = session('otp');
             $grade = session('grade');
             $subjectList = session('subjectList');
             $phone = session('phone_number');
            return view('web.auth.register-stepOTP', compact('otp', 'subjectList','phone','grade'));
            

        }catch(\Exception $exception){

            return;
        }
    } 


    public function otpVerify(Request $request)
    {
        
        if(!isset($request->grade)){

        Alert::toast('Time Out', 'error')->position('top-end')->autoClose(5000)->timerProgressBar();
        return redirect()->route('web.register.step3');
        }
        
        try {
            $user_otp = $request->user_otp;
            $otp = $request->otp;
            $subjectList = session('subjectList');
            $grade = session('grade');
            $phone = session('phone_number');

            if ($user_otp == $otp) {
                $status = 'success';
                $message = 'OTP verified successfully!';

            } else {
                $status = 'error';
                $message = 'OTP verification failed. Please try again.';
            }

            return view('web.auth.register-stepOTP', compact('status', 'message', 'otp', 'subjectList', 'phone', 'grade'));

        } catch (\Exception $exception) {
            return;
        }
    }
   public function registerStep5(Request $request)
{
    if(!isset($request->grade)){

        Alert::toast('Time Out', 'error')->position('top-end')->autoClose(5000)->timerProgressBar();
        return redirect()->route('web.register.step3');
        }

    try {
        // Retrieve data from the request
        $otp = $request->input('otp');
        $phone = $request->input('phone_number');
        $grade = $request->input('grade');
        $subjectList = json_decode($request->input('subject_list'));

        // Return view with necessary data
        return view('web.auth.register-step5', [
            'otp' => $otp,
            'phone' => $phone,
            'grade' => $grade,
            'subjectList' => $subjectList,
        ]);

    } catch(\Exception $exception) {
        // Handle exceptions, e.g., redirect to a previous step
        return redirect()->route('web.register.step3');
    }
}

public function registerStep5back(Request $request)
{
     Alert::toast('Old Data Clear', 'error')->position('top-end')->autoClose(5000)->timerProgressBar();
    return redirect()->route('web.register.step3');
}

public function registerData(Request $request){
    $client = new Client();
    $url = env('API_GETWAY_URL') . '/api/v1/register-student';

    try {
        // Make POST request to API endpoint
        $response = $client->post($url, [
            'headers' => [
                'CLIENT_KEY' => $this->serverApiKey,
            ],
            'form_params' => [
                'username' => $request->phone,
                'subject' => $request->subjectList,
                'password' => $request->password,
                'full_name' => $request->full_name,
                'student_code' => $request->unique_code,
                'birthday' => $request->dob,
                'gender' => $request->gender,
                'address' => $request->address,
                'school' => $request->school,
                'district' => $request->district,
                'city' => $request->town,
                'parent_phone' => $request->parent_phone,
                'grade' => $request->grade,
                'subject_list' => $request->subjectList
            ]
        ]);

        if ($response->getStatusCode() == 200) {
            $body = json_decode($response->getBody(), true);

            if (isset($body['status']) && $body['status'] === 201) {
                $body = json_decode($response->getBody(), true);
              
                if (isset($body['status']) && $body['status'] === 201) {
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return redirect()->route('web.login')->with('homeHeader','homeFooter');
                }else{
                     return redirect()->route('web.login')->with('homeHeader','homeFooter');
                }
            } else {
               
                return back()->with('error', $body['message']);
            }
        } else {
            return $response->getBody();
            
        }
    } catch (\Exception $e) {
       
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
    }
}










    public function forgotPassword()
    {
        try{
            $homeHeader = 1;
            $homeFooter= 1;
            return view('web.auth.forgot-password',compact('homeHeader','homeFooter'));

        }catch(\Exception $exception){

            return;
        }
    }


    

     public function login(Request $request)
    {
        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/students-login';
        
        
        

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'CLIENT_KEY' => $this->serverApiKey
                ],
                'form_params' => [
                    'username' => $request->phone_number,
                    'password' => $request->password,
                ]
            ]);

           if ($response->getStatusCode() == 200) {
            $body = json_decode($response->getBody(), true);
            if (isset($body['status']) && $body['status'] === 200) {
                // Store token in a secure cookie
                Cookie::queue('access_token', $body['data']['access_token'], 360); // 360 minutes (6 hours)
               
                return redirect()->route('web.home')->with('success', $body['message']);
            } else {
                return back()->with('error', $body['message']);
            }
        }
    } catch (\Exception $e) {
        Log::error('Login failed: ' . $e->getMessage());
        return back()->with('error', 'An error occurred while trying to log in.');
    }
    }



    public function logout(Request $request)
    {
        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/students-logout';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                     'CLIENT_KEY' => $this->serverApiKey
                ]
            ]);
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    Cookie::queue(Cookie::forget('access_token'));
                    return redirect()->route('web.home')->with('success', $body['message']);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
        } catch (\Exception $e) {
            Log::error('Logout failed: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while trying to log out.');
        }
    }






}
