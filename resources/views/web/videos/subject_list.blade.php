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
         <h1 class="font-36 fw-bold text-uppercase text-purple">VIDEO RECORDINGS


         </h1>
         <p class="font-20 fw-500 text-purple">SCIENCE

         </p>
      </div>
   </div>




</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">





       <div class="col-12">

        <div class="row justify-content-end">
            <div class="col-lg-3 text-end">
                <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
               <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
            </div>

          </div>




          <div class="table-responsive">
            <table id="videoRecTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                     <th>MONTH</th>
                     <th>CLASS  Date</th>
                     <th>GRADE</th>
                     <th>TOPIC</th>
                     <th>VIDEO</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr>
                     
                     <td>JANUARY</td>
                     <td>01.01.2024</td>
                     <td>GRADE 6</td>
                     <td >Grade 6 - Unit 08 - Electricity for a Comfortable
                        Life - Part 01 (English Medium) - 2023.07.19
                     </td>
                     <td>
                        <a class="w-100 text-uppercase text-center font-10 text-white rounded-pill py-1 px-3 bg-success fw-bolder align-items-center text-white hvr-shrink   "  href="https://www.youtube.com/watch?v=tQTfF4FRA2k&list=PLMrrM6QnSnHwCdEQ7IAgFe0WDn21Dua5T" target="_blank">
                        View More
                        </a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>






    </div>



   </div>
</div>
@endsection

