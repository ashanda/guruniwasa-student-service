@extends('web.layouts.app')
@section('content')
@if(session()->has('student_data'))
    @php
        $studentData = session('student_data');
        
    @endphp
@else
     <script>window.location = "{{ route('web.logout') }}";</script>
@endif
{{-- {{ dd($body) }} --}}
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple"> TEACHERS AND NEW SUBJECTS
         </h1>
         <p class="font-20 fw-500 text-purple">{{ $studentData['grades']['gname'] }}
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
    <div class="row pb-4">
        <div class="col-lg-4">
            <a href="{{  route('web.teacher.request-subject') }}" class="font-12 border-1   fw-500 text-white py-3 rounded-3  border border-primary text-center bg-light-blue rounded-pill px-3 hvr-shrink">
                <i class="fa-solid fa-medal"></i>     Request for other Grades and Subjects
            </a>
        </div>
    </div>
   <div class="row middle-hight">
      @foreach ($body['subjects'] as $subject)
      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <div class="row justify-content-center pt-2 pb-3">
               <div class="col-6">
                  <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
            </div>
            <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">{{ $subject['grade']['gname'] }}</span></p>
            <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> {{ $subject['sname'] }} | {{ $subject['teacher']['name'] }}
               </span>
            </p>
            <p class="font-12 fw-500 text-dark text-start"> ({{ $subject['day_normal'] .' @ '.$subject['start_normal'] }})
            </p>
            <div class="row justify-content-center">
               <div class="col-12 text-white">
                  <a  data-bs-toggle="modal" data-bs-target="#introVideo" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-2 bg-warning fw-500 align-items-center  mt-3 hvr-shrink">  THE INTRO VIDEO
                  </a>
                  <!-- Modal -->
                  <div class="modal fade" id="introVideo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title font-20  fw-bolder text-purple" id="staticBackdropLabel">WATCH THE INTRO VIDEO</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <iframe width="100%" height="350" src="https://www.youtube.com/embed/DLAtJs61w48?si=oXT6bFfyc4NC8yJI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a  data-bs-toggle="modal" data-bs-target="#teacherTimeTable" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-2 bg-secondary fw-500 align-items-center  mt-3 hvr-shrink"> TEACHER TIME TABLE
                  </a>
                  <!-- Modal -->
                  <div class="modal fade" id="teacherTimeTable" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title font-20  fw-bolder text-purple" id="staticBackdropLabel">TEACHER TIME TABLE</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <img class="d-block w-100  " src="{{asset('themes/default/img/time-table.png')}}"
                                 alt="Guru Niwasa LMS">
                           </div>
                        </div>
                     </div>
                  </div>
                  @if($subject['subject_status'] == 'all ready get')
                  <a href="tel:{{ $subject['whats_app']}}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 mt-3 bg-success fw-500 align-items-center   hvr-shrink"> <i class="fa-brands fa-whatsapp me-2"></i> WHATSAPP GROUP
                  </a>
                  <p class="w-100 text-uppercase font-12 text-success rounded-pill py-2 px-3 mt-3  fw-bolder align-items-center  bd-cyan-100 "> ALREADY ACTIVATED</p>
                     <form action="{{ route('web.remove.subject') }}" method="POST" class="mt-3">
                        @csrf <!-- This is important for CSRF protection in Laravel forms -->
                        
                        <!-- Hidden input to pass the subject ID or other necessary data -->
                        <input type="hidden" name="subject_id" value="{{ $subject['id'] }}">
                        <input type="hidden" name="student_id" value="{{ $studentData['id'] }}">
                        <!-- Message -->
                        

                        <!-- Submit button -->
                        <button type="submit" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 mt-3 bg-danger fw-500 align-items-center   hvr-shrink">Remove Subject</button>
                     </form>
                  <a href="{{ route('web.review.teacher') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 mt-3 bg-primary fw-500 align-items-center   hvr-shrink">RATE YOUR TEACHER
                  </a>
                  @else
                   <form action="{{ route('web.add.subject') }}" method="POST" class="mt-3">
                        @csrf 
                        <!-- Hidden input to pass the subject ID or other necessary data -->
                        <input type="hidden" name="subject_id" value="{{ $subject['id'] }}"> 
                        <input type="hidden" name="student_id" value="{{ $studentData['id'] }}">                     
                        <!-- Submit button -->
                        <button type="submit" class="w-100 text-uppercase font-12 text-dark rounded-pill py-2 px-3 mt-3  fw-bolder align-items-center bg-light-blue ">*FIRST CLASS FREE!</button>
                     </form>

                  
                  @endif
               </div>
            </div>
         </div>
      </div>
     @endforeach
   </div>
</div>
@endsection
