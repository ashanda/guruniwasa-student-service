@extends('web.layouts.app')
@section('content')
@if(session()->has('student_data'))
    @php
        $studentData = session('student_data');
        
    @endphp
@else
     <script>window.location = "{{ route('web.logout') }}";</script>
@endif

<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">STUDENT CERTIFICATES
         </h1>
         <p class="font-20 fw-500 text-purple">< {{ $studentData['full_name'] }} > - < {{ $studentData['grades']['gname'] }} >
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
      <div class="col-12 pb-4">
         <div class="row align-items-start">
            <div class="col-lg-3 col-sm-4">
               <p>
                  <a href="" class="font-16 text-white  py-2 px-3 bg-success fw-500 align-items-center  rounded-pill"  data-bs-toggle="modal" data-bs-target="#uploadCertificate"><i class="fa-solid fa-upload"></i>  Upload Certificate</a>
               </p>
            </div>


            <!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="uploadCertificate" tabindex="-1" aria-labelledby="uploadCertificate" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="{{ route('web.student.certificatesupload') }}" method="post" enctype="multipart/form-data">
         @csrf
        <div class="modal-body">

            <div class="mb-3">
                <label for="formFileMultiple" class="form-label font-20  fw-bolder text-purple">Upload Certificate  files  </label>
                <input type="hidden" name="student_id" value="{{ $studentData['id'] }}">
                <input class="form-control font-14 fw-500 text-dark" type="file" id="formFileMultiple" name="document" multiple="">
              </div>

        </div>
        <div class="modal-footer">

          <button type="submit" class="btn text-uppercase font-14 text-white rounded-pill py-2 px-4 bg-primary fw-500 align-items-center text-white hvr-shrink">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>
         </div>
      </div>
      @if(!empty($body['data']['certificate']))
      @foreach ($body['data']['certificate'] as $certifiacte)
          <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <div class="row justify-content-center pt-2 pb-3">
               <div class="col-lg-8">
                  <img class="d-block w-100 mx-auto border border-secondary" src="{{asset('themes/default/img/certifiacte.jpg')}}"
                     alt="Guru Niwasa LMS">
               </div>
            </div>
            <div class="row justify-content-center pt-3">
               <div class="col-lg-10 text-white e">
                  <a href="{{ env('AWS_USER_BUCKET').$certifiacte['certificate_link'] }}" target="_blank" title="Dowload Certificate" class=" w-100 text-uppercase font-13 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center text-white hvr-shrink" download> Dowload Certificate</a>
               </div>
            </div>
         </div>
      </div>
      @endforeach
      @endif

   </div>
</div>
@endsection
