@extends('web.layouts.app')
@section('content')
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
                < STUDENT NAME> - < GRADE>
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
                        <tr>
                            <td>Grade 6 - Science - ENGLISH MEDIUM
                                <br>
                                SUPPORTED GURU NIWASA TEACHER
                                ABHIMAN WITHAKSHNA
                                <br>
                                SUPPORTED SCHOOL -Lyceum International School
                            </td>
                            <td>
                                <a class="w-100"
                                    data-bs-toggle="modal" data-bs-target="#uploadPaperMark"> 
                                    <ul class="d-flex justify-content-center font-13 text-white my-3 py-2 px-3 bg-success fw-500 align-items-center  rounded-pill">
                                        <li><i
                                            class="fa-solid fa-upload"></i></li>
                                        <li class="d-none tab-d-none d-sm-block ps-2"> Upload Paper & Mark </li>
                                        
                                    </ul>
                                    
                                    </a>
                                <!-- Modal -->
                                <div class="modal fade" id="uploadPaperMark" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1"
                                                    id="staticBackdropLabel">Upload Paper & Mark</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="modal-body ">
                                                        <div class="mb-3">
                                                            <input class="form-control font-14 fw-500 text-dark"
                                                                type="file" id="formFileMultiple" multiple="">
                                                        </div>
                                                        <input class="form-control font-14 fw-500 text-dark" type="text"
                                                            id="formFileMultiple" placeholder="Your Mark">
                                                    </div>
                                                    <button type="button"
                                                        class="btn text-uppercase font-12 text-white rounded-pill py-2 px-4 bg-primary fw-500   text-white hvr-shrink ">Submit</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
            </div>
            </td>
            <td>
                <div class="row align-items-center">
                    <div class="col-lg-6"><a data-bs-toggle="modal" data-bs-target="#viewPaper"
                        class=" w-100 text-uppercase   text-white rounded-pill py-2 px-3 bg-secondary fw-bolder align-items-center text-center font-13   hvr-shrink">Paper</a></div>
                    <div class="col-lg-6">
                        <div class="p-2 bg-warning    border border-3 rounded-3">
                            <p class="text-white font-13 fw-500 text-center">MARKS <br>
                                50%</p>
                        </div>
                    </div>
                </div>
                
                <br>
               
                <!-- Modal -->
                <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="viewPaper" tabindex="-1"
                    aria-labelledby="viewPaper" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1">Paper View </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="d-block w-100  " src="{{asset('themes/default/img/6.webp')}}"
                                    alt="Guru Niwasa LMS">
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <a class="w-100"
                    data-bs-toggle="modal" data-bs-target="#uploadPaperMark"> 
                    <ul class="d-flex justify-content-center font-13 text-white my-3 py-2 px-3 bg-success fw-500 align-items-center  rounded-pill">
                        <li><i
                            class="fa-solid fa-upload"></i></li>
                        <li class="d-none tab-d-none d-sm-block ps-2"> Upload Paper & Mark </li>
                        
                    </ul>
                    
                    </a>
                <!-- Modal -->
                <div class="modal fade" id="uploadPaperMark" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1"
                                    id="staticBackdropLabel">Upload Paper & Mark</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="modal-body ">
                                        <div class="mb-3">
                                            <input class="form-control font-14 fw-500 text-dark"
                                                type="file" id="formFileMultiple" multiple="">
                                        </div>
                                        <input class="form-control font-14 fw-500 text-dark" type="text"
                                            id="formFileMultiple" placeholder="Your Mark">
                                    </div>
                                    <button type="button"
                                        class="btn text-uppercase font-12 text-white rounded-pill py-2 px-4 bg-primary fw-500   text-white hvr-shrink ">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
</div>
</td>
        </tr>
        <tr>
            <td>Grade 6 - Science - ENGLISH MEDIUM
                <br>
                SUPPORTED GURU NIWASA TEACHER
                ABHIMAN WITHAKSHNA
                <br>
                SUPPORTED SCHOOL -Lyceum International School
            </td>
            <td>
                <a class="w-100"
                    data-bs-toggle="modal" data-bs-target="#uploadPaperMark"> 
                    <ul class="d-flex justify-content-center font-13 text-white my-3 py-2 px-3 bg-success fw-500 align-items-center  rounded-pill">
                        <li><i
                            class="fa-solid fa-upload"></i></li>
                        <li class="d-none tab-d-none d-sm-block ps-2"> Upload Paper & Mark </li>
                        
                    </ul>
                    
                    </a>
                <!-- Modal -->
                <div class="modal fade" id="uploadPaperMark" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1"
                                    id="staticBackdropLabel">Upload Paper & Mark</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="modal-body ">
                                        <div class="mb-3">
                                            <input class="form-control font-14 fw-500 text-dark"
                                                type="file" id="formFileMultiple" multiple="">
                                        </div>
                                        <input class="form-control font-14 fw-500 text-dark" type="text"
                                            id="formFileMultiple" placeholder="Your Mark">
                                    </div>
                                    <button type="button"
                                        class="btn text-uppercase font-12 text-white rounded-pill py-2 px-4 bg-primary fw-500   text-white hvr-shrink ">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
</div>
</td>
<td>
<div class="row align-items-center">
    <div class="col-lg-6"><a data-bs-toggle="modal" data-bs-target="#viewPaper"
        class=" w-100 text-uppercase   text-white rounded-pill py-2 px-3 bg-secondary fw-bolder align-items-center text-center font-13   hvr-shrink">Paper</a></div>
    <div class="col-lg-6">
        <div class="p-2 bg-warning    border border-3 rounded-3">
            <p class="text-white font-13 fw-500 text-center">MARKS <br>
                50%</p>
        </div>
    </div>
</div>

<br>

<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="viewPaper" tabindex="-1"
    aria-labelledby="viewPaper" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1">Paper View </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="d-block w-100  " src="{{asset('themes/default/img/6.webp')}}"
                    alt="Guru Niwasa LMS">
            </div>
        </div>
    </div>
</div>
</td>
<td>
<a class="w-100"
    data-bs-toggle="modal" data-bs-target="#uploadPaperMark"> 
    <ul class="d-flex justify-content-center font-13 text-white my-3 py-2 px-3 bg-success fw-500 align-items-center  rounded-pill">
        <li><i
            class="fa-solid fa-upload"></i></li>
        <li class="d-none tab-d-none d-sm-block ps-2"> Upload Paper & Mark </li>
        
    </ul>
    
    </a>
<!-- Modal -->
<div class="modal fade" id="uploadPaperMark" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1"
                    id="staticBackdropLabel">Upload Paper & Mark</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="modal-body ">
                        <div class="mb-3">
                            <input class="form-control font-14 fw-500 text-dark"
                                type="file" id="formFileMultiple" multiple="">
                        </div>
                        <input class="form-control font-14 fw-500 text-dark" type="text"
                            id="formFileMultiple" placeholder="Your Mark">
                    </div>
                    <button type="button"
                        class="btn text-uppercase font-12 text-white rounded-pill py-2 px-4 bg-primary fw-500   text-white hvr-shrink ">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</td>
</tr>
   
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection