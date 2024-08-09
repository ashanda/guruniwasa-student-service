<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //


    public function myProfile()
    {
        try{

            return view('web.profile.view');

        }catch(\Exception $exception){

            return;
        }
    }
    
}
