<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TutesAndBookController extends Controller
{
    //
    public function tutesBook()
    {
        try{

            return view('web.tutes_books.view');

        }catch(\Exception $exception){

            return;
        }
    }
    public function tutesBookMonthly()
    {
        try{

            return view('web.tutes_books.monthly_view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function tutesView()
    {
        try{

            return view('web.tutes_books.tutes_view');

        }catch(\Exception $exception){

            return;
        }
    }





}
