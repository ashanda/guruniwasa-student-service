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
        <div class="col-lg-2 col-sm-3">
            <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
                <i class="fa-regular fa-circle-left hvr-icon"></i>
                BACK TO HOME
            </a>
        </div>
        <div class="col-lg-8 col-sm-8 text-center">
            <h1 class="font-36 fw-bold text-uppercase text-purple">
                SCHOOL TERM TEST PAPERS
            </h1>
            <p class="font-20 fw-500 text-purple">
                < {{ $studentData['full_name'] }} > - < {{ $studentData['grades']['gname'] }} >
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
                <table id="termTestTable" class="table table-striped table-hover table-bordered">
                    <thead class="text-white gradient-background text-uppercase fw-light font-14">
                        <tr>
                            <th>SUBJECT</th>
                            <th>FIRST TERM</th>
                            <th>SECOND TERM</th>
                            <th>THIRD TERM</th>
                        </tr>
                    </thead>
                    <tbody class="font-13 align-items-center fw-500">
                        @foreach ($body['data']['student_subject'] as $student_subject)
    @php
        // Generate unique modal IDs based on the student_subject ID or some other unique identifier
        $modalId1 = 'uploadPaperMark1_' . $student_subject['data']['student_subjects']['id'];
        $modalId2 = 'uploadPaperMark2_' . $student_subject['data']['student_subjects']['id'];
        $modalId3 = 'uploadPaperMark3_' . $student_subject['data']['student_subjects']['id'];
    @endphp

    <tr>
        <td>{{ $student_subject['data']['student_subjects']['grade']['gname'] }} - {{ $student_subject['data']['student_subjects']['sname'] }}
            <br>
            SUPPORTED GURU NIWASA TEACHER
            {{ $student_subject['data']['student_subjects']['teacher']['data']['name'] }}
            <br>
            SUPPORTED SCHOOL - {{ $studentData['school'] }}
        </td>
        <td>
             @if ($student_subject['data']['student_subjects']['term'] == null || $student_subject['data']['student_subjects']['term']['first_term'] == null)
            <a class="w-100"
                data-bs-toggle="modal" data-bs-target="#{{ $modalId1 }}">
                <ul class="d-flex justify-content-center font-13 text-white my-3 py-2 px-3 bg-success fw-500 align-items-center rounded-pill">
                    <li><i class="fa-solid fa-upload"></i></li>
                    <li class="d-none tab-d-none d-sm-block ps-2">Upload Paper & Mark</li>
                </ul>
            </a>
            <!-- Modal -->
            <div class="modal fade" id="{{ $modalId1 }}" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-18 fw-bold text-purple pt-lg-0 pt-1"
                                id="staticBackdropLabel">Upload Paper & Mark </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           
                               <form action="{{ route('web.term.testupload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="hidden" name="student_id" value="{{ $studentData['id'] }}">
                                        <input type="hidden" name="grade_id" value="{{$student_subject['data']['student_subjects']['gid'] }}">
                                        <input type="hidden" name="teacher_id" value="{{ $student_subject['data']['student_subjects']['tid'] }}">
                                        <input type="hidden" name="subject_id" value="{{ $student_subject['data']['student_subjects']['id'] }}">
                                        <input class="form-control font-14 fw-500 text-dark" type="file" id="formFileMultiple" name="first_document" multiple>
                                    </div>
                                    <input class="form-control font-14 fw-500 text-dark" type="text" id="markInput" name="first_marks" placeholder="Your Mark">
                                </div>
                                <button type="submit" class="btn text-uppercase font-12 text-white rounded-pill py-2 px-4 bg-primary fw-500 text-white hvr-shrink">Submit</button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
            @else
                                <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <a href="{{ env('AWS_USER_BUCKET').$student_subject['data']['student_subjects']['term']['first_term'] }}" target="_blank" class="w-100 text-uppercase text-white rounded-pill py-2 px-3 bg-secondary fw-bolder align-items-center text-center font-13 hvr-shrink">Paper</a>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="p-2 bg-warning border border-3 rounded-3">
                                                <p class="text-white font-13 fw-500 text-center">MARKS <br> {{ $student_subject['data']['student_subjects']['term']['first_marks'] }}%</p>
                                            </div>
                                        </div>
                                    </div>
            @endif
        </td>

        <td>
            @if ($student_subject['data']['student_subjects']['term'] == null || $student_subject['data']['student_subjects']['term']['second_term'] == null)
              <a class="w-100"
                data-bs-toggle="modal" data-bs-target="#{{ $modalId2 }}">
                <ul class="d-flex justify-content-center font-13 text-white my-3 py-2 px-3 bg-success fw-500 align-items-center rounded-pill">
                    <li><i class="fa-solid fa-upload"></i></li>
                    <li class="d-none tab-d-none d-sm-block ps-2">Upload Paper & Mark</li>
                </ul>
            </a>
            <!-- Modal -->
            <div class="modal fade" id="{{ $modalId2 }}" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-18 fw-bold text-purple pt-lg-0 pt-1"
                                id="staticBackdropLabel">Upload Paper & Mark </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                               <form action="{{ route('web.term.testupload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="hidden" name="student_id" value="{{ $studentData['id'] }}">
                                        <input type="hidden" name="grade_id" value="{{$student_subject['data']['student_subjects']['gid'] }}">
                                        <input type="hidden" name="teacher_id" value="{{ $student_subject['data']['student_subjects']['tid'] }}">
                                        <input type="hidden" name="subject_id" value="{{ $student_subject['data']['student_subjects']['id'] }}">
                                        <input class="form-control font-14 fw-500 text-dark" type="file" id="formFileMultiple" name="second_document" multiple>
                                    </div>
                                    <input class="form-control font-14 fw-500 text-dark" type="text" id="markInput" name="second_marks" placeholder="Your Mark">
                                </div>
                                <button type="submit" class="btn text-uppercase font-12 text-white rounded-pill py-2 px-4 bg-primary fw-500 text-white hvr-shrink">Submit</button>
                            </form> 
                            
                            

                        </div>
                    </div>
                </div>
            </div>
            @else
                                <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <a href="{{ env('AWS_USER_BUCKET').$student_subject['data']['student_subjects']['term']['second_term'] }}" target="_blank"
                                                class="w-100 text-uppercase text-white rounded-pill py-2 px-3 bg-secondary fw-bolder align-items-center text-center font-13 hvr-shrink">Paper</a>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="p-2 bg-warning border border-3 rounded-3">
                                                <p class="text-white font-13 fw-500 text-center">MARKS <br> {{ $student_subject['data']['student_subjects']['term']['second_marks'] }}%</p>
                                            </div>
                                        </div>
                                    </div>
                            @endif
        </td>

        <td>
            @if ($student_subject['data']['student_subjects']['term'] == null || $student_subject['data']['student_subjects']['term']['third_term'] == null)
            <a class="w-100"
                data-bs-toggle="modal" data-bs-target="#{{ $modalId3 }}">
                <ul class="d-flex justify-content-center font-13 text-white my-3 py-2 px-3 bg-success fw-500 align-items-center rounded-pill">
                    <li><i class="fa-solid fa-upload"></i></li>
                    <li class="d-none tab-d-none d-sm-block ps-2">Upload Paper & Mark</li>
                </ul>
            </a>
            <!-- Modal -->
            <div class="modal fade" id="{{ $modalId3 }}" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-18 fw-bold text-purple pt-lg-0 pt-1"
                                id="staticBackdropLabel">Upload Paper & Mark</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('web.term.testupload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="hidden" name="student_id" value="{{ $studentData['id'] }}">
                                        <input type="hidden" name="grade_id" value="{{$student_subject['data']['student_subjects']['gid'] }}">
                                        <input type="hidden" name="teacher_id" value="{{ $student_subject['data']['student_subjects']['tid'] }}">
                                        <input type="hidden" name="subject_id" value="{{ $student_subject['data']['student_subjects']['id'] }}">
                                        <input class="form-control font-14 fw-500 text-dark" type="file" id="formFileMultiple" name="third_document" multiple>
                                    </div>
                                    <input class="form-control font-14 fw-500 text-dark" type="text" id="markInput" name="third_marks" placeholder="Your Mark">
                                </div>
                                <button type="submit" class="btn text-uppercase font-12 text-white rounded-pill py-2 px-4 bg-primary fw-500 text-white hvr-shrink">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @else
                                <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <a href="{{ env('AWS_USER_BUCKET').$student_subject['data']['student_subjects']['term']['third_term'] }}" target="_blank"
                                                class="w-100 text-uppercase text-white rounded-pill py-2 px-3 bg-secondary fw-bolder align-items-center text-center font-13 hvr-shrink">Paper</a>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="p-2 bg-warning border border-3 rounded-3">
                                                <p class="text-white font-13 fw-500 text-center">MARKS <br> {{ $student_subject['data']['student_subjects']['term']['third_marks'] }}%</p>
                                            </div>
                                        </div>
                                    </div>
                            @endif

        </td>
    </tr>
@endforeach

  
   
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection