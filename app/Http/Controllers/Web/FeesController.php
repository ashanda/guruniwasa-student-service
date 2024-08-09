<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    public function feesView()
    {
        try{

            return view('web.fees.all_fees');

        }catch(\Exception $exception){

            return;
        }
    }
    public function feesClass()
    {
        try{

            return view('web.fees.fees_class');

        }catch(\Exception $exception){

            return;
        }
    }

    public function subjectCart()
    {
        try{

            return view('web.fees.subject_cart');

        }catch(\Exception $exception){

            return;
        }
    }


    
}
