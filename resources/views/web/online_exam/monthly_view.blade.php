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
         <h1 class="font-36 fw-bold text-uppercase text-purple">ONLINE EXAMS - JANUARY



         </h1>
         <p class="font-20 fw-500 text-purple">< STUDENT NAME > - < GRADE >

         </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">

            <div class="row justify-content-center pt-2 pb-3">
               <div class="col-6">
                  <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
            </div>
            <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade 6</span></p>
            <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> Mathematics Theory | English
               Medium | Shehan Sir
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Month - <span class="fw-bolder text-dark"> January
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Exam Type - <span class="fw-bolder text-dark"> Monthly Test
            </span>
         </p>

            <div class="row justify-content-center pt-4">
               <div class="col-lg-11 text-white  ">


                <a href="{{ route('web.paper.answer') }}" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-primary fw-500 align-items-center text-white mb-3 hvr-shrink"> YOUR ANSWERS</a>

                <a data-bs-toggle="modal" data-bs-target="#resultRank" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center text-white  hvr-shrink">EXAM RESULTS</a>





               </div>
            </div>
         </div>

      </div>

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







   </div>
</div>
@endsection
