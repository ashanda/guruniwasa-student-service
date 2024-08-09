@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-2 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-8 col-sm-8 text-center">
         <h1 class="font-27 fw-bold text-uppercase text-purple">GURU NIWASA MONTHLY TEST AND TERM TEST RESULTS
         </h1>
         <p class="font-20 fw-500 text-purple">< STUDENT NAME > - < GRADE >
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
            <table id="onlinTestResultTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                     <th>MONTH</th>
                     <th>SUBJECT</th>
                     <th>EXAM TYPE</th>
                     <th>RESULT</th>
                     <th>RANK</th>
                     <th>VIEW PAPER</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr>
                     <td>JANUARY</td>
                     <td>Grade 6 - Science Theory  - Abhiman Sir </td>
                     <td>MONTHLY TEST</td>
                     <td>95</td>

                     <td  >

                        <span class="text-center"> 05 </span>
                        <p>
                           <a  class="  text-uppercase text-center font-10 text-white rounded-pill py-1 px-3 bg-success fw-bolder align-items-center text-white hvr-shrink   "  data-bs-toggle="modal" data-bs-target="#resultRank">  View </a>
                        </p>


  <!-- Modal -->
  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="resultRank" tabindex="-1" aria-labelledby="tableModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-24 text-uppercase fw-bold   text-purple pt-lg-0 pt-1"  >EXAM RESULTS
            </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="font-15 fw-bolder text-purple text-uppercase">GRADE 6 SCIENCE THEORY ENGLISH MEDIUM ABHIMAN SIR
                JANUARY - MONTHLY TEST
             </p>
             <div class="row py-3">
                <div class="col-7 ">
                   <h4 class="  font-20 fw-bold   text-dak"  >
                      Your Rank - 01
                   </h4>
                </div>
                <div class="col-5 text-end">
                   <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
                   <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
                </div>
             </div>
             <div class="row justify-content-center">
                <div class="col-lg-11">

             <table id="rankTable" class="table table-striped table-hover table-bordered text-start">
                <thead class="text-white gradient-background text-uppercase fw-light font-14">
                   <tr>
                      <th>RANK</th>
                      <th>STUDENT NAME</th>
                      <th>MARKS (100)</th>


                   </tr>
                </thead>
                <tbody class="font-14 align-items-center fw-500">
                   <tr>
                      <td>1</td>
                      <td>PATHUM SHANAKA
                    </td>
                      <td><p class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                        95</p></td>

                   </tr>
                </tbody>
             </table>
            </div>
        </div>
        </div>

      </div>
    </div>
  </div>







                     <td>
                        <a href="{{  route('web.paper.answer') }}" class="w-100 text-uppercase text-center font-12 text-white rounded-pill py-2 px-3 bg-success fw-bolder align-items-center text-white hvr-shrink   "   >
                       <i class="fa-solid fa-eye"></i> View More
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
