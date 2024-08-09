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
         <h1 class="font-36 fw-bold text-uppercase text-purple">TIME TABLES

         </h1>

      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
    <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
        <div class="border-new py-5 px-3 rounded-35 bg-white text-center">

            <p
                class="font-24 border-2 text-uppercase fw-bold text-purple py-3 rounded-35  border border-primary text-center bg-light-blue">
                GRADE 6
<br>6 ශ්‍රේණිය
            </p>



            <div class="row justify-content-center pt-4">
                <div class="col-lg-10 text-white e">



                    <a data-bs-toggle="modal" data-bs-target="#englishTimeTable" class=" w-100 text-uppercase font-14  rounded-pill py-2 px-3 bd-yellow-300 fw-bolder align-items-center text-purple hvr-shrink">ENGLISH MEDIUM</a>



<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="englishTimeTable" tabindex="-1" aria-labelledby="englishTimeTable" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" >English Medium Grade 06 -Time Table </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img class="d-block w-100  " src="{{asset('themes/default/img/time-table.png')}}"
            alt="Guru Niwasa LMS">


        </div>

      </div>
    </div>
  </div>






                </div>
                <div class="col-lg-10 text-white pt-3">



                    <a data-bs-toggle="modal" data-bs-target="#sinhalaTimeTable" class=" w-100 text-uppercase font-14  text-purple rounded-pill py-2 px-3 bd-cyan-100 fw-bolder align-items-center   hvr-shrink">සිංහල මාධ්‍ය</a>



                    <!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="sinhalaTimeTable" tabindex="-1" aria-labelledby="sinhalaTimeTable" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" >Sinhala Medium Grade 06 -Time Table </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img class="d-block w-100  " src="{{asset('themes/default/img/time-table.png')}}"
            alt="Guru Niwasa LMS">


        </div>

      </div>
    </div>
  </div>


                </div>
            </div>
        </div>
    </div>







   </div>
</div>
@endsection
