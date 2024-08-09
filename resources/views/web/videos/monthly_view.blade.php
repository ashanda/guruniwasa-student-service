@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;

@endphp
<div class="container-fluid">
    <div class="row align-items-center pt-2">
        <div class="col-lg-3 col-sm-3">
            <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
                <i class="fa-regular fa-circle-left hvr-icon"></i>
                BACK TO HOME
            </a>
        </div>
        <div class="col-lg-6 col-sm-6 text-center">
            <h1 class="font-36 fw-bold text-uppercase text-purple">VIDEO RECORDINGS

            </h1>
            @php
         $currentDateTime = Carbon::now('Asia/Colombo');
         @endphp
          <p class="font-20 fw-500 text-purple">{{ $currentDateTime->format('d.m.Y | l | h.i A') }}
            </p>
        </div>
    </div>
</div>


<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="row  justify-content-center middle-hight">

            @php $x = 1; @endphp
    @for ($i = 0; $i < $currentMonth; $i++)
        <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
                <h3 class="font-20 fw-bold pb-3">
                    <i class="fa-solid fs-5 text-danger fa-circle"></i> REC
                </h3>
                <p class="font-18 border-2 text-uppercase fw-bold text-purple py-3 rounded-35 border border-primary text-center bg-light-blue">
                    {{ $months[$i]['english'] }}<br>
                    {{ $months[$i]['local'] }}
                </p>
                <div class="row justify-content-center pt-4">
                    <div class="col-lg-10 text-white e">
                        <a href="{{ route('web.video.list.monthly', ['month' => $x]) }}" class="w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center hvr-shrink">
                            See more
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @php $x++; @endphp
    @endfor


    </div>
</div>















@endsection
