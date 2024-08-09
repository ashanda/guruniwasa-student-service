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
         <h1 class="font-30 fw-bold text-uppercase text-purple">DETAILED REPORT OF JANUARY

         </h1>
         <p class="font-18 fw-500 text-purple">< STUDENT NAME > - < GRADE >

         </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight justify-content-center">
      <div class="col-lg-5 col-sm-8">
        <div>
            <canvas id="timeMgtChart"></canvas>
          </div>
          
      </div>

    
   </div>
</div>
 
@endsection