<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearningManagementController extends Controller
{
    public function learningManagement()
    {
        try{

            return view('web.learning-management.view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function timeManagement()
    {
        try{

            return view('web.learning-management.time_mgt_view');

        }catch(\Exception $exception){

            return;
        }
    }






    public function timeManagementTable()
    {
        try{

            return view('web.learning-management.time_mgt_table');

        }catch(\Exception $exception){

            return;
        }
    }






    public function timeManagementReport()
    {
        try{

            return view('web.learning-management.time_mgt_report');

        }catch(\Exception $exception){

            return;
        }
    }


    public function revisingPlane()
    {
        try{

            return view('web.learning-management.revising_plane');

        }catch(\Exception $exception){

            return;
        }
    }











}
