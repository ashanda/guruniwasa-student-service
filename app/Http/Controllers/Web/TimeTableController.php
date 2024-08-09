<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    //
    public function timeTable()
    {
        try{

            return view('web.time_table.tutes_view');

        }catch(\Exception $exception){

            return;
        }
    }



}
