@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">TUTES & BOOKS -JANUARY

         </h1>

         <p class="font-20 fw-500 text-purple">SCIENCE - THEORY - ENGLISH MEDIUM - ABHIMAN SIR

         </p>
      </div>

      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
        <div class="row justify-content-end">
            <div class="col-lg-11">
                <form action=" " method="get">
                    <input class="border border-info rounded-pill font-15 fw-500 text-dark py-2 form-control " type="search" name="searchKey" id="search" placeholder="Search" aria-label="Search" style=" outline: none;">
                    <button type="submit " class="border-0 serch-btn">
                        <i class="fa-solid fa-magnifying-glass fs-4"></i>
                    </button>
                    </form>
            </div>

          </div>
     </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">

            <div class="row justify-content-center pt-2 pb-3">
               <div class="col-lg-8">
                  <img class="d-block w-100 mx-auto rounded-circle" src="{{asset('themes/default/img/tute-book.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
            </div>

            <p class="font-14 fw-500 text-dark text-start">Topic - <span class="fw-bolder">   - Grade 6 - English Medium Science -
                Work Book

               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder">  Science Theory | English Medium |
                Abhiman Sir

               </span>
            </p>

            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white e">

                <a href="https://get.adobe.com/reader/" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center text-white hvr-shrink" target="_blank"> Click to View</a>



               </div>
            </div>
         </div>
      </div>






   </div>
</div>
@endsection
