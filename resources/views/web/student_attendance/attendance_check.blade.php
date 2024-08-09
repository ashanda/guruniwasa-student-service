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
        <p class="font-17 fw-bold text-purple text-uppercase ">SCIENCE - ABHIMAN SIR
        </p>
         <h1 class="font-30 fw-bold text-uppercase text-purple">STUDENT ATTENDANCE - JANUARY
         </h1>

         <p class="font-20 fw-500 text-purple">< STUDENT NAME > - < GRADE >
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
                 

                      <th>07.01.2023</th>
                      <th>14.01.2023</th>
                      <th>21.01.2023</th>
                      <th>28.01.2023</th>
                      <th>28.01.2023</th>
                   </tr>
                </thead>
                <tbody class="t align-items-center">
                   <tr>
                      <td><button type="button" class="btn btn-success font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">PHYSICAL</button>
                        <button type="button" class="btn btn-warning font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">VIDEO</button>
                    </td>
                      <td><button type="button" class="btn btn-danger font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">ABSENT</button></td>
                      <td><button type="button" class="btn btn-danger font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">POSTPONED</button></td>
                      <td><button type="button" class="btn btn-danger font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">HOLIDAY</button></td>
                      <td><button type="button" class="btn btn-danger font-12 px-3 fw-bolder rounded-pill text-uppercase mb-2">ABSENT</button></td>
                   </tr>
                </tbody>
             </table>
          </div>
 
 
 
 
 
 
     </div>
 
 
 
    </div>
</div>
@endsection
