<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAttendanceController extends Controller
{
  

    public function studentAttendance()
    {
        try{

            return view('web.student_attendance.view');

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
