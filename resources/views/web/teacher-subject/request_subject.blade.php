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
         <h1 class="font-24 fw-bold text-uppercase text-purple">Requesting for other Grades and Subjects
         </h1>
         <p class="font-20 fw-500 text-purple">< STUDENT NAME > - < GRADE >
         </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div  class="col-12 mb-3 align-items-center">
         <div class="border-new py-3 px-3 rounded-3 bg-white text-center">
            <h2 class="font-18 pb-3 fw-bold text-purple">Are you sure to proceed on requesting for other Grades and Subjects?</h2>
            <div class="row text-start justify-content-center">
               <div class="col-lg-4 ">
                  <div class="mb-2">
                     <label class="form-label font-14 fw-bold text-purple  mb-0">Grade </label>
                     <select class="form-select fw-500 rounded-0 border-dark" aria-label="Default select example">
                        <option selected="">Select Grade</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
               <div class="col-lg-4 ">
                  <div class="mb-2">
                     <label class="form-label font-14 fw-bold text-purple  mb-0">Subject</label>
                     <select class="form-select fw-500 rounded-0 border-dark" aria-label="Default select example">
                        <option selected="">Select Subject</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="row justify-content-lg-center">
               <div class="col-4 pt-2">
                  <button type="button" class="btn   text-white gradient-background-1 py-2 px-5  ">Request</button>
               </div>
            </div>
         </div>
      </div>

      <div class="col-12">
        <div class="table-responsive">
            <table id="requestSubjectTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>

                     <th>Subject</th>
                     <th>Teacher Approval
                    </th>
                     <th>Abhiman Sir’s Approval</th>
                     <th>#</th>
                     <th>#</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr>

                     <td>
                        <span class="py-2 px-4 bg-primary text-white font-13 text-center rounded-pill">Science</span>
                     </td>
                   
                     
                     <td>
                        <span class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                            Approved</span>
                     </td>
                     <td>
                        <span class="py-2 px-4 bg-warning text-white font-13 text-center rounded-pill">
                            Pending</span>
                     </td>
                     <td>
                        <span class="py-2 px-4 bg-warning text-white font-13 text-center rounded-pill">
                            Cash</span>
                     </td>
                     <td>
                        <span class="py-2 px-4 bg-danger text-white font-13 text-center rounded-pill">
                            Requested</span>
                     </td>
                     
                  
                  </tr>
               </tbody>
            </table>
         </div>
      </div>



   </div>
</div>
@endsection
