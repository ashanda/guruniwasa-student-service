@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">FEES
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
<div class="container">
   <div class="row middle-hight">

      <div class="col-12">
         <div class="fees-Carousel owl-carousel">
            <div class="border-new py-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <p
                  class="font-16 border-2 text-uppercase fw-bold text-purple py-3 rounded-35  border border-primary text-center bg-light-blue">
                  PAY
                  CURRENT
                  MONTH
               </p>
               <div class="row justify-content-center pt-4">
                  <div class="col-lg-10 text-white e">
                     <a href="{{ route('web.fees.class') }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">Pay</a>
                  </div>
               </div>
               <h3 class="font-27 fw-bold text-uppercase text-purple pt-3">FEBRUARY</h3>
            </div>

            <div class="border-new py-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
                <p
                   class="font-16 border-2 text-uppercase fw-bold text-purple py-3 rounded-35  border border-primary text-center bg-light-blue">
                   PAY
                   CURRENT
                   MONTH
                </p>
                <div class="row justify-content-center pt-4">
                   <div class="col-lg-10 text-white e">
                      <a href="{{ route('web.fees.class') }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">Pay</a>
                   </div>
                </div>
                <h3 class="font-27 fw-bold text-uppercase text-purple pt-3">March</h3>
             </div>
         </div>


         <div class="row justify-content-center">
            <div class="col-lg-3 col-10 text-center">
                <a href="{{ route('web.payment.month') }}" class=" w-100 text-uppercase font-15 text-white rounded-pill p-3 bg-secondary fw-500 align-items-center text-white hvr-shrink">PAYMENT HISTORY
                </a>
            </div>

          </div>

        </div>

      </div>
   </div>


</div>
@endsection
