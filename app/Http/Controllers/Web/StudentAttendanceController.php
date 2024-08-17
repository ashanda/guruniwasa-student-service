<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    public function studentAttendanceMonthly()
    {
        try{

            return view('web.student_attendance.monthly_view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function studentAttendanceCheck()
    {
        try{

            return view('web.student_attendance.attendance_check');

        }catch(\Exception $exception){

            return;
        }
    }




    
}
