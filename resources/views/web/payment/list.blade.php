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
         <h1 class="font-36 fw-bold text-uppercase text-purple">PAYMENT HISTORY


         </h1>
         <p class="font-20 fw-500 text-purple">JANUARY

         </p>
      </div>
   </div>




</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">





       <div class="col-12">

               




          <div class="table-responsive">
            <table id="paymentHistoryTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                     <th>Payment Date</th>
                     <th>Subject</th>
                     <th>Teacher</th>
                     <th>Payment Type</th>
                     <th>Payment Status</th>
                     <th>Amount</th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr>
                     
                     <td>01.01.2024</td>
                     <td>English</td>
                     <td>Teacher Name</td>
                     <td>Cash</td>
                     <td>APPROVED/PENDING/
                        REJECTED</td>
                        <td>LKR 5000.00</td>
                  </tr>
               </tbody>
            </table>
         </div>






    </div>



   </div>
</div>
@endsection

