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
         <h1 class="font-36 fw-bold text-uppercase text-purple">PAPER ANSWER
         </h1>
         <p class="font-20 fw-500 text-purple">GRADE 6 SCIENCE THEORY ENGLISH MEDIUM ABHIMAN SIR
            JANUARY - MONTHLY TEST
         </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="row justify-content-between pb-3">
            <div class="col-6 ">
               <p class="font-20 fw-bolder text-purple">TOTAL MARKS - 85</p>
            </div>
            <div class="col-lg-3 text-end">
               <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
               <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
            </div>
         </div>
       



         <div class="row justify-content-center pb-3 mb-2 border-bottom">
            <div class="col-11">
               <p class="font-15 fw-500 text-dark">01. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries ?</p>
               <div class="row align-items-center pt-2">
                  <div class="col-lg-6 pb-2">
                     <div class="row align-items-center">
                        <div class="col-10">
                           <p class="font-14 fw-bolder text-dark">
                              01. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                           </p>
                           
                        </div>
                        <div class="col-1">
                           <i class="fa-solid fa-circle-check text-success fs-4"></i>
                        </div>
                        <div class="col-1">
                        </div>
                        <div class="col-10 pt-2">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                              </div>
                           </div>
                     </div>
                  </div>
                  <div class="col-lg-6 pb-2">
                     <div class="row align-items-center">
                        <div class="col-10">
                           <p class="font-14 fw-bolder text-dark">
                              02. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                           </p>
                        </div>
                        <div class="col-1">
                           <i class="fa-solid fa-circle-xmark text-danger fs-4"></i>
                        </div>
                        <div class="col-1">
                        </div>
                        <div class="col-10 pt-2">
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                              </div>
                           </div>
                     </div>
                     
                  </div>
                  <div class="col-lg-6 pb-2">
                    <div class="row align-items-center">
                       <div class="col-10">
                          <p class="font-14 fw-bolder text-dark">
                             03. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          </p>
                       </div>
                       <div class="col-1">
                          <i class="fa-solid fa-circle-check text-success fs-4"></i>
                       </div>
                       <div class="col-1">
                       </div>
                       <div class="col-10 pt-2">
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6 pb-2">
                    <div class="row align-items-center">
                       <div class="col-10">
                          <p class="font-14 fw-bolder text-dark">
                             04. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          </p>
                       </div>
                       <div class="col-1">
                          <i class="fa-solid fa-circle-xmark text-danger fs-4"></i>
                       </div>
                       <div class="col-1">
                       </div>

                       <div class="col-10 pt-2">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                          </div>
                       </div>
                    </div>
                 </div>
               </div>

 

               <div class="row justify-content-end">
                <div class="col-2 text-center">
                    <p class="font-17 fw-bolder text-purple border border-2 rounded-pill border-secondary  py-2 px-3 bg-light">Score 2/2
                    </p>
                </div>
                
              </div>

            </div>
         </div>














      </div>
   </div>
</div>
@endsection