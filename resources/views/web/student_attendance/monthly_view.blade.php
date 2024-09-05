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
         <h1 class="font-36 fw-bold text-uppercase text-purple">STUDENT ATTENDANCE

         </h1>
         <p class="font-20 fw-500 text-purple text-uppercase">{{ $months[0]['english']}} / {{ $studentData['grades']['gname']  }}

         </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      @foreach ($body['data']['student_subject'] as $studentsubject)
      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
         
            <div class="row justify-content-center pt-2 pb-3">
               
               <div class="col-6">
                  <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
            </div>
            <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">{{ $studentsubject['data']['student_subjects']['grade']['gname'] }}</span></p>
                 <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder">{{ $studentsubject['data']['student_subjects']['sname'] }} | {{ $studentsubject['data']['student_subjects']['teacher']['data']['name'] ?? ' ' }}</span></p>
            <p class="font-14 fw-500 text-dark text-start">Month - <span class="fw-bolder text-dark"> {{ $months[0]['english']}}
               </span>
            </p>

            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white e">
                <a href="{{ route('web.student_attendance.check', ['month' => $currentMonth, 'month_name'=> $months[0]['english'], 'subject_id' => $studentsubject['data']['student_subjects']['id'], 'subject_name'=> $studentsubject['data']['student_subjects']['sname'], 'teacher_id' => $studentsubject['data']['student_subjects']['tid'],'teacher_name'=>$studentsubject['data']['student_subjects']['teacher']['data']['name'] ] ) }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">CLICK TO Check</a>
               </div>
            </div>        
         </div>
      </div>
   @endforeach






   </div>
</div>
@endsection
