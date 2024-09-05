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
        <p class="font-17 fw-bold text-purple text-uppercase ">{{ request('subject_name') }} - {{ request('teacher_name') }}
        </p>
         <h1 class="font-30 fw-bold text-uppercase text-purple">STUDENT ATTENDANCE - {{ request('month_name') }}
         </h1>

         <p class="font-20 fw-500 text-purple text-uppercase">< {{ $studentData['full_name'] }} > - < {{ $studentData['grades']['gname'] }} >
         </p>
      </div>

      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
       
     </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="row middle-hight">





        <div class="col-12">
 
         <div class="row justify-content-end">
             <div class="col-lg-3 col-sm-5 col-8 text-end pb-lg-0 pb-2">
                 <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
                <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
             </div>
 
           </div>
 
 
 
 
            <div class="table-responsive  ">
             <table id="attendanceTable" class="table table-striped table-hover table-bordered">
                <thead class="text-white gradient-background text-uppercase fw-light font-14">
                 

                      <th>Class Type</th>
                      <th>Attendance Status</th>
                      <th>Lesson Date</th>
                   </tr>
                </thead>
                <tbody class="t align-items-center">
                   @foreach ($body['data']['attendence'] as $student_attendances)
                    <tr>
                      <td><button type="button" class="btn btn-success font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">{{ $student_attendances['class_type'] }}</button></td>
                      <td><button type="button" class="btn btn-danger font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">{{ $student_attendances['attendence'] }}</button></td>
                      <td><button type="button" class="btn btn-danger font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">{{ $student_attendances['lesson_date'] }}</button></td>
                   </tr>
                   @endforeach
                   
                </tbody>
             </table>
          </div>
 
 
 
 
 
 
     </div>
 
 
 
    </div>
</div>
@endsection
