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
         <h1 class="font-24 fw-bold text-uppercase text-purple">
            LESSON REVISING PLAN

         </h1>
         <p class="font-20 fw-500 text-purple">< STUDENT NAME > - < GRADE >
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
   <div class="row middle-hight">

   <div class="col-12">
    <div class="row justify-content-center">
        <div  class="col-lg-6 col-sm-8 mb-3  align-items-center">
            <div class="border-new py-3 px-3 rounded-3 bg-white text-center">
               <h2 class="font-18 pb-3 fw-bold text-purple">ENTER YOUR LESSON
   
               </h2>
               <div class="row text-start justify-content-center">
                 
                  <div class="col-12">
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">TOPIC</label>
                        <input type="text" class="form-control fw-500 rounded-3 border-dark">
                     </div>
                  </div>
               </div>
               <div class="row justify-content-lg-center">
                  <div class="col-4 pt-2">
                     <button type="button" class="btn   text-white gradient-background-1 py-2 px-5  ">Submit</button>
                  </div>
               </div>
            </div>
         </div>
    </div>
   </div>
    

      <div class="col-12">
        <h2 class="font-17 pb-3 fw-bold text-purple">01.01.2023 - MONDAY

   
        </h2>

        <div class="table-responsive">
            <table id="revisionTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                      

                     <th>REVISED</th>
                     <th>COUNT TOPIC
                    </th>
                     <th>STATUS</th>
                     
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr>

                     <td>
                      01
                     </td>
                   
                     
                     <td>
                        HUMAN BRAIN
                     </td>
                     
                    
                     <td>
                        <span class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                            Done</span>
                     </td>
                     
                  
                  </tr>
                  <tr>

                    <td>
                     05
                    </td>
                  
                    
                    <td>
                       HUMAN HEART
                    </td>
                    
                   
                    <td>
                       <span class="py-2 px-4 bg-danger text-white font-13 text-center rounded-pill">
                        PENDING</span>
                    </td>
                    
                 
                 </tr>
               </tbody>
            </table>
         </div>
         <div class="col-12 mt-3">
            <div class="timeline">
                <div class="timeline-step">
                  <strong>STUDIED DATE</strong>
                </div>
                <div class="timeline-step">
                  <span>(+ 1 Day)</span>
                  <strong>1st Revise</strong>
                </div>
                <div class="timeline-step">
                  <span>(+ 3 Days)</span>
                  <strong>2nd Revise</strong>
                </div>
                <div class="timeline-step">
                  <span>(+ 3 Days)</span>
                  <strong>3rd Revise</strong>
                </div>
                <div class="timeline-step">
                  <span>(+ 7 Days)</span>
                  <strong>4th Revise</strong>
                </div>
                <div class="timeline-step">
                  <span>(+ 7 Days)</span>
                  <strong>5th Revise</strong>
                </div>
                <div class="timeline-step">
                  <span>(+ 7 Days)</span>
                  <strong>6th Revise</strong>
                </div>
              </div>
         </div>
      </div>



   </div>
</div>
@endsection
