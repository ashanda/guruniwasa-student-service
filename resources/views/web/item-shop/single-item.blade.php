@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="container-fluid">
<div class="row align-items-center pt-2">
   <div class="col-lg-4 col-sm-4 pb-lg-0 pb-3">
      <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
      <i class="fa-regular fa-circle-left hvr-icon"></i>
      BACK TO HOME
      </a>
      <p class="pt-3">
         <a href="{{ route('web.order-cart')}}" class="py-2 px-4 font-14 fw-bolder text-white hvr-grow rounded-pill  bg-warning">
         <i class="fa-solid fa-cart-shopping me-2"></i>  View Cart
         </a>
         <a href="{{ route('web.order-history')}}" class="ms-lg-3 mt-sm-2 hvr-grow py-2 px-4 font-14 fw-bolder text-white  rounded-pill  bg-secondary">
         <i class="fa-solid fa-file-invoice me-2"></i>  Order History
         </a>
      </p>
   </div>
   <div class="col-lg-4 col-sm-4 text-center">
      <h1 class="font-36 fw-bold text-uppercase text-purple">ITEM SHOP
      </h1>
   </div>
   <div class="col-lg-4 col-sm-4 pt-lg-0 pt-3">
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="container">
      <div class="row middle-hight justify-content-center align-items-center">
         <div class="col-lg-4 col-sm-6  border border-info border-2 pt-4 px-5 rounded-3 bd-blue-100">
            <div id="sync1" class="owl-carousel ">
               <div class="item">
                  <div class="row justify-content-center">
                     <div class="col-lg-10 col-sm-7 col-9">
                        <img class="w-100 mx-auto" src="{{asset('themes/default/img/OIP.jpg')}}"
                           alt="Guru Niwasa LMS"  >
                     </div>
                  </div>
               </div>
            </div>
            <div id="sync2" class="owl-carousel owl-theme pt-3">
               <div class="item bg-white rounded-3 shadow-sm">
                  <img class="w-100 mx-auto" src="{{ asset('themes/default/img/OIP.jpg') }}"
                     alt="Guru Niwasa LMS"  >
               </div>
               <div class="item bg-white rounded-3 shadow-sm">
                  <img class="w-100 mx-auto" src="{{ asset('themes/default/img/OIP.jpg') }}"
                     alt="Guru Niwasa LMS"  >
               </div>
               <div class="item bg-white rounded-3 shadow-sm">
                  <img class="w-100 mx-auto" src="{{ asset('themes/default/img/OIP.jpg') }}"
                     alt="Guru Niwasa LMS"  >
               </div>
               <div class="item bg-white rounded-3 shadow-sm">
                  <img class="w-100 mx-auto" src="{{ asset('themes/default/img/OIP.jpg') }}"
                     alt="Guru Niwasa LMS"  >
               </div>
               <div class="item bg-white rounded-3 shadow-sm">
                  <img class="w-100 mx-auto" src="{{ asset('themes/default/img/OIP.jpg') }}"
                     alt="Guru Niwasa LMS"  >
               </div>
            </div>
         </div>
         <div class="col-lg-1"></div>
         <div class="col-lg-3 pt-lg-0 pt-3">
            <p class="font-16 fw-bolder text-dark pb-2">Grade 6 Science - Provincial Past Papers -
                English Medium
            </p>

            <p class="font-13 fw-500 text-dark">PUBLISHER - GURU NIWASA INSTITUTE
            </p>

            <h3 class="font-36 fw-bolder text-success py-3">
                LKR 1200.00

            </h3>
            <div class="quantity-widget mb-3">
                <button id="minus">-</button>
                <input type="text" id="quantity" value="0" readonly>
                <button id="plus">+</button>
            </div>

            <p>
                <a href="" class=" hvr-shrink font-16 text-white gradient-background-1 py-2 px-5 justify-content-around rounded-35">
                    <i class="fa-solid fa-cart-shopping me-2"></i>  Add to Cast
                    </a>
            </p>
         </div>
      </div>
   </div>
</div>
@endsection
