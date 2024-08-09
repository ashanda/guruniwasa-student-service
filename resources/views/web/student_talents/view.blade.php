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
         <h1 class="font-36 fw-bold text-uppercase text-purple">STUDENT TALENTS
         </h1>
         <p class="font-20 fw-500 text-purple">< STUDENT NAME > - < GRADE >
         </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="container">
      <div class="row middle-hight">
         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <p
                  class="font-20 text-uppercase fw-bold text-purple py-3 rounded-35  mh-6  ">
                  GURU NIWASA
                  ONLINE EXAM
                  RESULTS
               </p>
               <div class="row justify-content-center ">
                  <div class="col-lg-10 text-white e">
                     <a href="{{ route('web.online.exam_result') }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">See More</a>
                  </div>
               </div>
            </div>
         </div>


         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <p
                  class="font-20 text-uppercase fw-bold text-purple py-3 rounded-35 mh-6    ">
                  SCHOOL TERM TEST
                  PAPER MARKS
               </p>
               <div class="row justify-content-center ">
                  <div class="col-lg-10 text-white e">
                     <a href="{{ route('web.term.test') }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">See More</a>
                  </div>
               </div>
            </div>
         </div>



         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <p
                  class="font-20 text-uppercase fw-bold text-purple py-3 rounded-35 mh-6   ">
                  STUDENT
                  CERTIFICATES
               </p>
               <div class="row justify-content-center ">
                  <div class="col-lg-10 text-white e">
                     <a href="{{ route('web.student.certificates') }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">See More</a>
                  </div>
               </div>
            </div>
         </div>




         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <p
                  class="font-20 text-uppercase fw-bold text-purple py-3 rounded-35  mh-6  ">
                  SUBJECTWISE
                  TALENT VIDEOS
               </p>
               <div class="row justify-content-center ">
                  <div class="col-lg-10 text-white e">
                     <a href="{{ route('web.talent.videos') }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">See More</a>
                  </div>
               </div>
            </div>
         </div>







         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <p
                  class="font-20 text-uppercase fw-bold text-purple py-3 rounded-35 mh-6 ">
                  MY TALENT VIDEOS

               </p>
               <div class="row justify-content-center ">
                  <div class="col-lg-10 text-white e">
                     <a href="{{ route('web.my_talent') }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">See More</a>
                  </div>
               </div>
            </div>
         </div>


         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <p
                  class="font-20 text-uppercase fw-bold text-purple py-3 rounded-35  mh-6  ">
                  OTHER TALENT
                  VIDEOS

               </p>
               <div class="row justify-content-center ">
                  <div class="col-lg-10 text-white e">
                     <a href="{{ route('web.other_talent') }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">See More</a>
                  </div>
               </div>
            </div>
         </div>







      </div>
   </div>
</div>
@endsection
