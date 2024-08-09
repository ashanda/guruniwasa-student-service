<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CheckAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
      public function handle(Request $request, Closure $next): Response
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
                    
                     $request->session()->put('student_data', $body['data']);
                    return $next($request);
                }
            }
        } catch (\Exception $e) {
            // Log the error if needed and handle exceptions
            Log::error('Authorization check failed: ' . $e->getMessage());
        }

        // If unauthorized, redirect to the home route
        return redirect()->route('web.index');
    }
}
