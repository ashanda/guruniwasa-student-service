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
         <h1 class="font-36 fw-bold text-uppercase text-purple">FINAL ANALYSIS REPORT
         </h1>
         <p class="font-20 fw-500 text-purple">< STUDENT NAME > - < GRADE >
         </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive">
            {{-- <table id=" " class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                     <th>Subject</th>
                     <th>ATTENDANCE</th>
                     <th>ONLINE
                        TEST
                     </th>
                     <th>SCHOOL
                        TERM
                        TEST
                     </th>
                     <th>NOTE / PAPER
                     </th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr>
                     <td>SCIENCE</td>
                     <td>English</td>
                     <td>
                        <p class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                           95
                        </p>
                     </td>
                     <td>
                        <p class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                           80
                        </p>
                     </td>
                     <td>
                        Grade 7 - Unit 01 -
                        Plant Diversity
                     </td>
                  </tr>
               </tbody>
            </table> --}}

                <table class="table table-striped table-hover table-bordered">
                    <thead class="text-white gradient-background text-uppercase fw-light font-14">
                        <tr>
                            <th class="table-header" rowspan="2">Subject</th>
                            <th class="table-header" colspan="5">Attendance</th>
                            <th class="table-header" rowspan="2">G.N Online Test</th>
                            <th class="table-header" rowspan="2">School Term Test</th>
                            <th class="table-header" rowspan="2">Note / Paper</th>
                        </tr>
                        <tr>
                            <th class="table-header">7</th>
                            <th class="table-header">14</th>
                            <th class="table-header">21</th>
                            <th class="table-header">28</th>
                            <th class="table-header">-</th>
                        </tr>
                    </thead>
                    <tbody class="font-13 align-items-center fw-500">
                        <tr>
                            <td>Science</td>
                            <td class="zoom">ZOOM</td>
                            <td class="physical">PHYSICAL</td>
                            <td class="zoom">ZOOM</td>
                            <td class="absent">ABSENT</td>
                            <td></td>
                            <td class="physical"> <p class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                                95
                             </p> </td>
                            <td>
                                <p class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                                   70
                                 </p>
                            </td>
                            <td>
                                <div>Grade 7 - Unit 01 - Plant Diversity <br><div class="text-white bg-success font-11   fw-500 px-3 py-1 rounded-pill m-2  text-center">UPLOADED</div></div>

                            </td>
                        </tr>


                        <tr>
                            <td>Science</td>
                            <td class="zoom">ZOOM</td>
                            <td class="physical">PHYSICAL</td>
                            <td class="zoom">ZOOM</td>
                            <td class="absent">ABSENT</td>
                            <td></td>
                            <td class="physical"> <p class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                                95
                             </p> </td>
                            <td>
                                <p class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                                   70
                                 </p>
                            </td>
                            <td>

                                <div>Grade 7 - Unit 08 - The Nature of the earth <br><div class="text-white bg-danger font-11 fw-500 px-3 py-1 rounded-pill m-2  text-center">NOT UPLOADED</div></div>
                            </td>
                        </tr>
                    </tbody>
                </table>


         </div>
      </div>
   </div>
</div>
@endsection
