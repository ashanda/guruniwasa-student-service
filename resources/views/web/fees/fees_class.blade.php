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
         <h1 class="font-36 fw-bold text-uppercase text-purple">CLASS FEES
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row  justify-content-center middle-hight">
      <div class="col-12">
         <div class="row justify-content-end">
            <div class="col-lg-2 text-center pb-3">
               <a href="{{ route('web.subject-cart')}}"
                  class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center text-white hvr-shrink"><i
                  class="fa-solid fa-cart-shopping me-2"></i> View CART
               </a>
            </div>
         </div>
      </div>
      <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <div class="row justify-content-center pt-2 pb-3">
               <div class="col-6">
                  <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
            </div>
            <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade 6</span></p>
            <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> Mathematics Theory |
               English
               Medium | Shehan Sir
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Month - <span class="fw-bolder text-dark"> January
               </span>
            </p>
            <p class="font-18 fw-bolder text-success text-center pt-4">LKR 1200.00
            </p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white e">
                  <a href="{{ route('web.subject-cart')}}"
                     class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center text-white hvr-shrink">
                  ADD TO CART
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
        <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
           <div class="row justify-content-center pt-2 pb-3">
              <div class="col-6">
                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                    alt="Guru Niwasa LMS">
              </div>
           </div>
           <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade 6</span></p>
           <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> Mathematics Theory |
              English
              Medium | Shehan Sir
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Month - <span class="fw-bolder text-dark"> January
              </span>
           </p>
           <p class="font-18 fw-bolder text-success text-center pt-4">LKR 1200.00
           </p>
           <div class="row justify-content-center pt-4">
              <div class="col-lg-10 text-white e">
                 <a href="{{ route('web.subject-cart')}}"
                    class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center text-white hvr-shrink">
                 ADD TO CART
                 </a>
              </div>
           </div>
        </div>
     </div>
     <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
        <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
           <div class="row justify-content-center pt-2 pb-3">
              <div class="col-6">
                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                    alt="Guru Niwasa LMS">
              </div>
           </div>
           <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade 6</span></p>
           <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> Mathematics Theory |
              English
              Medium | Shehan Sir
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Month - <span class="fw-bolder text-dark"> January
              </span>
           </p>
           <p class="font-18 fw-bolder text-success text-center pt-4">LKR 1200.00
           </p>
           <div class="row justify-content-center pt-4">
              <div class="col-lg-10 text-white e">
                 <a href="{{ route('web.video.set.monthly') }}"
                    class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center text-white hvr-shrink">
                 ADD TO CART
                 </a>
              </div>
           </div>
        </div>
     </div>
     <div class="row justify-content-center ">
        <div class="col-lg-3 col-10 text-center pt-4">
            <a href="{{ route('web.subject-cart')}}" class=" w-100 text-uppercase font-15  rounded-pill p-3 bg-secondary fw-500 align-items-center text-white hvr-shrink">PAYMENT HISTORY
            </a>
        </div>

        <div class="col-lg-3 col-10 text-center pt-4">
            <a href="{{ route('web.teacher.subject') }}" class=" w-100 text-uppercase font-15  rounded-pill p-3 bg-info fw-500 align-items-center text-dark hvr-shrink">Add New Subject
            </a>
        </div>
      </div>

    </div>
   </div>
</div>
@endsection
