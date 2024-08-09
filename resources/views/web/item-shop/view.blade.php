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
      <div class="row justify-content-end">
         <div class="col-lg-9">
            <form action=" " method="get">
               <input class="border border-info rounded-pill font-15 fw-500 text-dark py-2 form-control " type="search" name="searchKey" id="search" placeholder="Search" aria-label="Search" style=" outline: none;">
               <button type="submit " class="border-0 serch-btn">
               <i class="fa-solid fa-magnifying-glass fs-4"></i>
               </button>
            </form>
         </div>
      </div>
      <div class="row justify-content-end mt-3">
         <div class="col-lg-9">
            <select class="form-select form-select-lg border border-info rounded-pill font-15 fw-500 text-dark py-2 " aria-label=".form-select-lg example">
               <option selected>Category</option>
               <option value="1">One</option>
               <option value="2">Two</option>
               <option value="3">Three</option>
            </select>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="container">
      <div class="row middle-hight">
         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-4 px-2 rounded-35 bg-white text-center">
               <div class="row justify-content-center pt-2 pb-3">
                  <div class="col-8">
                     <img class="d-block w-100 rounded-3" src="{{asset('themes/default/img/OIP.jpg')}}"
                        alt="Guru Niwasa LMS">
                  </div>
               </div>
               <p class="font-12 fw-bolder text-dark text-center">Grade 6 Science - Work Book - English Medium
               </p>
               <p class="font-16 fw-bold text-success text-center pt-3">
                  LKR 800.00
               </p>
               <div class="row justify-content-center pt-2">
                  <div class="col-lg-10 text-white e">
                     <a href="{{ route('web.single-item') }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">See More</a>
                  </div>
               </div>
            </div>
         </div>
         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-4 px-2 rounded-35 bg-white text-center">
               <div class="row justify-content-center pt-2 pb-3">
                  <div class="col-8">
                     <img class="d-block w-100 rounded-3" src="{{asset('themes/default/img/OIP.jpg')}}"
                        alt="Guru Niwasa LMS">
                  </div>
               </div>
               <p class="font-12 fw-bolder text-dark text-center">Grade 6 Science - Work Book - English Medium
               </p>
               <p class="font-16 fw-bold text-success text-center pt-3">
                  LKR 800.00
               </p>
               <div class="row justify-content-center pt-2">
                  <div class="col-lg-10 text-white e">
                     <a href="{{ route('web.single-item') }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">See More</a>
                  </div>
               </div>
            </div>
         </div>
         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-4 px-2 rounded-35 bg-white text-center">
               <div class="row justify-content-center pt-2 pb-3">
                  <div class="col-8">
                     <img class="d-block w-100 rounded-3" src="{{asset('themes/default/img/OIP.jpg')}}"
                        alt="Guru Niwasa LMS">
                  </div>
               </div>
               <p class="font-12 fw-bolder text-dark text-center">Grade 6 Science - Work Book - English Medium
               </p>
               <p class="font-16 fw-bold text-success text-center pt-3">
                  LKR 800.00
               </p>
               <div class="row justify-content-center pt-2">
                  <div class="col-lg-10 text-white e">
                     <a href="{{ route('web.single-item') }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">See More</a>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</div>
@endsection
