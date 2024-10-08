@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp

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
         <h1 class="font-30 fw-bold text-uppercase text-purple">STUDENT NOTES AND PAPER ANSWERS 
         </h1>
         {{-- <p class="font-20 fw-500 text-purple">GRADE 6 - SCIENCE --}}
         </p>
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
            <table id="notePaperTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>MONTH</th>
                  <th>TOPIC</th>
                  <th>DOCUMENT</th>
                  <th>STATUS</th>
                  <th>TEACHER COMMENt</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  @foreach($body['data']['notes'] as $note)
                  <tr>
                     @php
                        // Parse the given date string using Carbon
                        $date = \Carbon\Carbon::parse($note['created_at']);
                        // Format the date to display the month in uppercase
                        $month = strtoupper($date->format('F'));
                     @endphp
                     <td>{{ $month }}</td>
                     <td>{{ $note['grade']['gname'] }} - {{ $note['title'] }}</td>
                     
                     @if(!empty($note['student_uploads']))
                     @foreach ($note['student_uploads'] as $upload)
                     @if($upload['status'] == 0)
                     <td>{{ 'Wait for teacher approval' }}</td>

                     @elseif($upload['status'] == 1 || $upload['status'] == null)
                     <td>{{ 'Teacher approved' }}</td>
                     @else
                     <form action="{{ route('web.note.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <td><input class="form-control font-14 fw-500 text-dark" type="file" id="formFileMultiple" name="document" multiple="">
                           <input type="hidden" name="student_id" value="{{ $studentData['id'] }}">
                           <input type="hidden" name="note_id" value="{{ $note['id'] }}">
                           <input type="hidden" name="teacher_id" value="{{ $note['teacher_id'] }}">
                           <input type="hidden" name="grade_id" value="{{ $note['grade_id'] }}">
                           <input type="hidden" name="subject_id" value="{{ $note['subject_id'] }}">
                           <button type="submit" class="btn btn-primary mt-2">Upload</button>
                        </td>
                        
                     </form>
                     @endif
                     @endforeach
                     @else

                     <form action="{{ route('web.note.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <td><input class="form-control font-14 fw-500 text-dark" type="file" id="formFileMultiple" name="document" multiple="">
                           <input type="hidden" name="student_id" value="{{ $studentData['id'] }}">
                           <input type="hidden" name="note_id" value="{{ $note['id'] }}">
                           <input type="hidden" name="teacher_id" value="{{ $note['teacher_id'] }}">
                           <input type="hidden" name="grade_id" value="{{ $note['grade_id'] }}">
                           <input type="hidden" name="subject_id" value="{{ $note['subject_id'] }}">
                           <button type="submit" class="btn btn-primary mt-2">Upload</button>
                        </td>
                        
                     </form>
                     @endif
                     <td>
                    @if(!empty($note['student_uploads']))    
                  @foreach ($note['student_uploads'] as $upload)
                     @if($upload['status'] == 0)
                     <button type="button" class="btn btn-warning px-3 fw-bolder rounded-pill text-uppercase font-12"> TEACHER NOT APPROVED
                        </button>

                     @elseif($upload['status'] == 1)
                    <button type="button" class="btn btn-success px-3 fw-bolder rounded-pill text-uppercase font-12"> TEACHER APPROVED
                        </button>
                     @else
                     <button type="button" class="btn btn-danger px-3 fw-bolder rounded-pill text-uppercase font-12"> TEACHER REJECTED
                        </button>
                     @endif
                        
                     </td>
                  @endforeach
                  @endif
                  @if(!empty($note['student_uploads'])) 
                     <td>Very Good</td>
                  @endif   
                  </tr>
                 
               @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection