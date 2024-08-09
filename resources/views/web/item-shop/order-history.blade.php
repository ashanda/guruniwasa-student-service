@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-30 fw-bold text-uppercase text-purple">ORDER HISTORY
 
         </h1>
          
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         
         <div class="table-responsive  ">
            <table id="orderHistoryTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>Payment Date</th>
                  <th>Item</th>
                  <th>Order Type</th>
                  <th>Payment Type</th>
                  <th>Payment Status</th>
                  <th>Amount</th>
                        

                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr>
                     <td>2024-05-23</td>
                     <td>Grade 6 - Unit 05 
                     </td>
                     <td>Pickup / Delivery

                    </td>
                      
                     <td>CASH PAYMENTS /
                        POS PAYMENTS /
                        BANK PAYMENTS /
                        CARD PAYMENTS /
                        ONLINE PAYMENT ERRORS /
                        REJECTED PAYMENTS
                     </td>
                     <td>Pending / Order
                        Processing /
                        Dispatched /
                        Delivered
                     </td>
                     <td>LKR 850.00
                     </td>
                  </tr>
                  
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection