@extends('web.layouts.app')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <div class="row justify-content-center">
         {{-- 
         <div class="col-lg-2 col-4">
            <img class="d-block w-100 mx-auto" src="{{asset('themes/default/img/hd_dp.png')}}"
               alt="Guru Niwasa LMS">
         </div>
         --}}
         <div class="col-12 text-center">
            <h2 class="fst-italic font-18 fw-bolder pb-3">STEP 02
                දෙවන පියවර
            </h2>
            <h1 class="font-18 fw-bold text-uppercase text-purple text-dark  pt-1">
                WATCH THIS ENTIRE VIDEO WHICH CONTAINS DETAILS ABOUT OUR CLASSES, DETAILS ABOUT THE CLASS FEES, HOW TO REGISTER FOR THE CLASSES AND ANSWERS TO ALL THE PROBLEMS THAT A NEW STUDENT MAY FACE WHEN JOINING THE CLASSES FOR THE VERY FIRST TIME.
            </h1>
            <h1 class="font-18 fw-bold text-uppercase text-purple   pt-2">පන්ති පිලිබදව විස්තර,පන්ති ගාස්තු පලිබදව විස්තර, පන්ති සමඟ ලියාපදිංචි වන අකාරය සහ නවක සිසුවෙක් පන්ති සමඟ අලුතෙන් සම්බන්ධ විමෙදි පැනනැගෙන සියලුම ගැටලු සඳහා පිලිතුරු ඇතුලත් මෙමෙ විඩියෝව සම්පුර්ණයෙන්ම නරඹන්න.

            </h1>
         </div>
         <div class="col-12 pt-4">
            <div class="row justify-content-center align-items-center">
               <div class="col-lg-8 col-sm-10 col-12">
                  <iframe width="100%" height="350" src="https://www.youtube.com/embed/Rhb7-f_C6Zk?si=K6KzRVzMIWpuYZel" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
               </div>
               <div class="col-lg-4 col-sm-10 col-12 pt-lg-0 pt-3">
                  <h3 class="text-center font-13">
                     <a href="{{  route('web.register.step3') }}" class="hvr-shrink text-white  bg-success px-2 py-3 justify-content-around w-100 rounded-3">
                        <div class="row align-items-center  ">
                           <div class="col-9">
                              CLICK TO VIEW STEP 03<br>තෙවන පියවර සඳහා පිවිසෙන්න.
                           </div>
                           <div class="col-2">
                              <i class="fa-solid fa-right-long fs-4 "></i>
                           </div>
                        </div>
                     </a>
                  </h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection