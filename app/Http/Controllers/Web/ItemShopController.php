<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemShopController extends Controller
{
    public function itemShop()
    {
        try{

            return view('web.item-shop.view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function orderHistory()
    {
        try{

            return view('web.item-shop.order-history');

        }catch(\Exception $exception){

            return;
        }
    }


    public function singleItem()
    {
        try{

            return view('web.item-shop.single-item');

        }catch(\Exception $exception){

            return;
        }
    }


    public function orderCart()
    {
        try{

            return view('web.item-shop.order-cart');

        }catch(\Exception $exception){

            return;
        }
    }












}
