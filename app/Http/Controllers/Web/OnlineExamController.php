<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OnlineExamController extends Controller
{
    
    public function onlineExam()
    {
        try{

            return view('web.online_exam.view');

        }catch(\Exception $exception){

            return;
        }
    }
    public function onlineExamMonthly()
    {
        try{

            return view('web.online_exam.monthly_view');

        }catch(\Exception $exception){

            return;
        }
    }
}
