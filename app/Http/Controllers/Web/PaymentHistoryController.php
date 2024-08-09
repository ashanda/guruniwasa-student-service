<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentHistoryController extends Controller
{
    

    public function paymentHistoryMonth()
    {
        try{

            return view('web.payment.month_list');

        }catch(\Exception $exception){

            return;
        }
    }

    public function paymentHistoryList()
    {
        try{

            return view('web.payment.list');

        }catch(\Exception $exception){

            return;
        }
    }

    

    
}
