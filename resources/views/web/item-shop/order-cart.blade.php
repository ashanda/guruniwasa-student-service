@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-4 col-sm-4 pb-lg-0 pb-3">
         <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-4 col-sm-4 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">ITEM SHOP CART
         </h1>
      </div>
      <div class="col-lg-4 col-sm-4 pt-lg-0 pt-3">
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="container">
      <div class="row middle-hight ">
         <div class="col-lg-6">
            <ul class="nav nav-tabs justify-content-center " id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                  <input class="form-check-input" type="radio" name="deliveryOption" id="pickup" value="pickup">
                  <label class="form-check-label font-17 fw-500 text-purple" for="pickup ">Pickup</label>
                  </button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> <input class="form-check-input" type="radio" name="deliveryOption" id="delivery" value="delivery">
                  <label class="form-check-label font-17 fw-500 text-purple" for="delivery">Delivery</label></button>
               </li>
            </ul>
            <div class="tab-content mt-4" id="myTabContent">
               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <form>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 ">දරුවාගේ නම</label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Student Name</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="studentName" placeholder="Enter student name">
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 ">ශ්‍රේණිය</label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Grade</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter grade">
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 ">ලිපිනය </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Address</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter address">
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 ">දිස්ත්‍රික්කය </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">District</label>
                           </div>
                           <div class="col-lg-9">
                              <select class="form-select  fw-500 rounded-0 border-dark text-dark" id="district">
                                 <option selected>Select district</option>
                                 <!-- Add district options here -->
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 "> නගරය </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 "> Town</label>
                           </div>
                           <div class="col-lg-9">
                              <select class="form-select  fw-500 rounded-0 border-dark text-dark" id="district">
                                 <option selected>Select nearest town</option>
                                 <!-- Add district options here -->
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 "> දුරකතන අංක 01 </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Phone  01</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter phone numbers 01">
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 "> දුරකතන අංක 02 </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Phone  02</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter phone numbers 02">
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">



                  <form>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 ">දරුවාගේ නම</label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Student Name</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="studentName" placeholder="Enter student name">
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 ">ශ්‍රේණිය</label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Grade</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter grade">
                           </div>
                        </div>
                     </div>

                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 "> දුරකතන අංක 01 </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Phone  01</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter phone numbers 01">
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 "> දුරකතන අංක 02 </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Phone  02</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter phone numbers 02">
                           </div>
                        </div>
                     </div>
                  </form>

               </div>
            </div>
         </div>
         <div class="col-lg-1"></div>
         <div class="col-lg-5">
            <div class="item-list mb-3">
          <div class="row">
            <div class="col-lg-6">
                <p class="font-16 fw-bolder text-purple ">SUBJECT</p>
            </div>
            <div class="col-lg-6">
                <p class="font-16 text-end fw-bolder text-purple "> AMOUNT </p>
            </div>
          </div>
               <ul class="list-group fopnt-14 text-dark fw-500">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Item 1 <span class="badge bg-primary rounded-pill">1200.00</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Item 2 <span class="badge bg-primary rounded-pill">1200.00</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Item 3 <span class="badge bg-primary rounded-pill">1200.00</span>
                  </li>
               </ul>
            </div>
            <div class="total-box text-end fopnt-14 text-dark fw-500 bd-blue-100 p-3 rounded-3">
               <p>Total: 3600.00</p>
               <p>Discount: -600.00</p>
               <p>Delivery Fee: +300.00</p>
               <p><strong>Grand Total: 3300.00</strong></p>
            </div>
            <form class="mt-3">
               <div class="mb-3">
                  <label for="dateTime" class="form-label font-14 fw-bold text-purple  ">Date and Time on the Slip</label>
                  <input type="text" class="form-control fw-500 rounded-3 border-dark" id="dateTime" placeholder="Enter date and time">
               </div>
               <div class="mb-3">
                  <label for="selectBank" class="form-label font-14 fw-bold text-purple  ">Select the Bank</label>
                  <select class="form-select fw-500 rounded-3 border-dark text-dark" id="selectBank">
                     <option selected>Choose the bank</option>
                     <!-- Add bank options here -->
                  </select>
               </div>
               <div class="mb-3">
                  <label for="transferSlip" class="form-label font-14 fw-bold text-purple  ">Choose the Transfer Slip</label>
                  <input type="file" class="form-control fw-500 rounded-3 border-dark" id="transferSlip">
               </div>
            </form>
            <div class="d-flex justify-content-between align-items-center">
               <button class="btn btn-primary fw-500 font-11 px-2 rounded-pill text-white" data-bs-toggle="modal" data-bs-target="#accountBankView">View Bank Account Details</button>





               <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="accountBankView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="exampleModalLabel"> Bank Account View</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="d-block w-100  " src="{{asset('themes/default/img/account-bank.png')}}"
                        alt="Guru Niwasa LMS">
                    </div>

                  </div>
                </div>
              </div>















               <button class="btn btn-secondary fw-500 font-11 px-2 rounded-pill text-white" data-bs-toggle="modal" data-bs-target="#slipUpdate">Click to Update the Bank Slip</button>


               <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="slipUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">

                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center py-5">

                        <div class="success-checkmark">
                            <div class="check-icon">
                              <span class="icon-line line-tip"></span>
                              <span class="icon-line line-long"></span>
                              <div class="icon-circle"></div>
                              <div class="icon-fix"></div>
                            </div>
                          </div>

                        <h3 class="font-16 fw-bold  text-purple pt-4">
                              ඔබගේ ඇණවුම සාර්ථකව LMS පද්ධතියට ඇතුලත් කරන ලදී. එය අනුමත වූ වහාම ඔබ හට පණිවිඩයක් ලබා දෙනු ලබයි. !!
                        </h3>
                        <h3 class="font-16 fw-bold  text-purple pb-4">
                            ස්තුතියි !!!</h3>

                        <h3 class="font-16 fw-bold  text-purple">
                              Your order has been successfully placed in the LMS. You will receive a message once the order gets approved!

                                                    </h3>
                                                    <h3 class="font-16 fw-bold   text-purple">
                                                        Thank you !!!</h3>
                    </div>

                  </div>
                </div>
              </div>


            </div>
            <hr>


























           <style>
                    .custom-checkbox {
                    width: 20px; /* Adjust the width */
                    height: 20px; /* Adjust the height */
                    accent-color: #007bff; /* Optional: Change the checkbox color */
                     }
                </style>

                <div class="text-center">
                    <p class="font-18 fw-bold   text-dark">Or</p>
                    <input type="checkbox" name="check" id="check" class="custom-checkbox"> I Agreed <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms & Conditions</a><br>
               <button class="btn btn-warning fw-500 font-13 text-white mt-2" id="paymentButton" data-bs-toggle="modal" data-bs-target="#paymentView">Card Payment</button>
               <div class="mt-2">
                <img class="w-100 mx-auto" src="{{ asset('themes/default/img/credit-cards.png') }}"
                alt="Guru Niwasa LMS"  >
               </div>
            </div>
         </div>
      </div>
<div class="col-md-12">
            <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
                <div class="modal-dialog custom-width">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="termsModalLabel">Terms & Conditions</h5>
                            <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <style>
                            .policy-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
    color: #333;
}

.policy-section {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    color: #555;
}

.policy-section h4 {
    font-size: 18px;
    font-weight: bold;
    color: #444;
    margin-top: 20px;
    margin-bottom: 10px;
}

.policy-section p {
    margin-bottom: 15px;
}

.policy-section ul {
    list-style-type: disc;
    margin-left: 20px;
}

.policy-section li {
    margin-bottom: 10px;
}

.policy-section strong {
    color: #333;
}
.custom-width {
    max-width: 800px; /* You can adjust this value as needed */
}

@media (max-width: 768px) {
    .custom-width {
        max-width: 100%; /* Adjust for smaller screens */
    }
}
                         </style>   
                        <div class="modal-body">
                            <!-- Your Terms & Conditions content goes here -->
                            <div class="policy-section">
    <h4>1.Purchase Options</h4>
    <p>Pick-Up Location: Students can collect their items directly from our designated pick-up point, paying only the item value.</p>
    <p>Doorstep Delivery: Students can opt for delivery, which requires payment for both the item value and delivery charges. Delivery charges vary based on parcel weight and must be paid in advance along with the item value.</p>

    <h4>2.Payment Methods</h4>
    <p>Students can choose from the following payment options:</p>
    <ul>
        <li>Card Payment</li>
        <li>Bank Transfer (with slip upload)</li>
        <li>Cash or Card Payment at the Office</li>
    </ul>

    <h4>3.Shipping and Delivery</h4>
    <p>We will dispatch parcels within 14 days of the order date. For doorstep delivery, the delivery charges are determined by the parcel's weight and must be prepaid.</p>

    <h4>4.Refund and Exchange Conditions</h4>
    <ul>
        <li>Refund for Ordered Items: If a student wants a refund after payment (including delivery if applicable), they must request a refund within two days of the payment date before the ready-to-dispatch status. This can be done by contacting our office.</li>
        <li>Wrong or Damaged Items: If a student receives the wrong parcel, incorrect items, or damaged items due to a mistake by our printing unit, they should return the parcel to our office without paying the return delivery charges. The item(s) must be in their original condition, and unused. We will cover the cost of the return delivery. A replacement parcel will be sent within five days, free of charge.</li>
        <li>Exchanges for Incorrect Orders: If a student orders the wrong item and wishes to exchange it, they must return the parcel to us. The student is responsible for both the return delivery charge and the delivery charge for sending the new parcel. We will dispatch the correct items within 10 days of receiving the return. The returned items must be in the same condition as when sent (no damage accepted).</li>
    </ul>

    <h4>5.Contact Information</h4>
    <p>For any inquiries or refund requests, please contact our office at 077 287 9970.</p>
    <p>Guru Niwasa Institute<br>
    077 287 9970<br>
    <a href="mailto:guruniwasafinance@gmail.com">guruniwasafinance@gmail.com</a></p>
</div>

                        </div>


                    </div>
                </div>
            </div>

            <p class="policy-title mt-5">Item Shop Refund Policy</p>
                                <div class="policy-section">
    <h4>1.Purchase Options</h4>
    <p>Pick-Up Location: Students can collect their items directly from our designated pick-up point, paying only the item value.</p>
    <p>Doorstep Delivery: Students can opt for delivery, which requires payment for both the item value and delivery charges. Delivery charges vary based on parcel weight and must be paid in advance along with the item value.</p>

    <h4>2.Payment Methods</h4>
    <p>Students can choose from the following payment options:</p>
    <ul>
        <li>Card Payment</li>
        <li>Bank Transfer (with slip upload)</li>
        <li>Cash or Card Payment at the Office</li>
    </ul>

    <h4>3.Shipping and Delivery</h4>
    <p>We will dispatch parcels within 14 days of the order date. For doorstep delivery, the delivery charges are determined by the parcel's weight and must be prepaid.</p>

    <h4>4.Refund and Exchange Conditions</h4>
    <ul>
        <li>Refund for Ordered Items: If a student wants a refund after payment (including delivery if applicable), they must request a refund within two days of the payment date before the ready-to-dispatch status. This can be done by contacting our office.</li>
        <li>Wrong or Damaged Items: If a student receives the wrong parcel, incorrect items, or damaged items due to a mistake by our printing unit, they should return the parcel to our office without paying the return delivery charges. The item(s) must be in their original condition, and unused. We will cover the cost of the return delivery. A replacement parcel will be sent within five days, free of charge.</li>
        <li>Exchanges for Incorrect Orders: If a student orders the wrong item and wishes to exchange it, they must return the parcel to us. The student is responsible for both the return delivery charge and the delivery charge for sending the new parcel. We will dispatch the correct items within 10 days of receiving the return. The returned items must be in the same condition as when sent (no damage accepted).</li>
    </ul>

    <h4>5.Contact Information</h4>
    <p>For any inquiries or refund requests, please contact our office at 077 287 9970.</p>
    <p>Guru Niwasa Institute<br>
    077 287 9970<br>
    <a href="mailto:guruniwasafinance@gmail.com">guruniwasafinance@gmail.com</a></p>
</div>

        </div>




       <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="paymentView" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
         <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title modal-title font-18 fw-bold   text-purple" id="exampleModalToggleLabel">Card Payment</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body py-2 text-center">
               <p class="font-14 fw-bolder  text-purple  ">
                  කාඩ්පතෙන් මුදල් ගෙවීම සාර්ථකව සිදු කිරීමට දෙවතා වක් ඔබ සාර්ථකව මුදල් ගෙවූ බවට තිරයේ දිස්වන තුරු රැදී සිටින්න. එනම්, payment gateway එකෙහි "Payment Approved" ලෙස දිස්වූ පසු ඉන් ඉවත් නොවී තවත් මද වේලාවක් රැදී සිටින්න. ඉන්පසු නැවත LMS ගිණුම විවෘත වන අතර එහි "කාඩ්පත් ගෙවීමක් මගින් ඔබ සාර්ථකව පන්ති ගාස්තු ගෙවා ඇත" ලෙස සටහන් වූ පසු ඔබගේ පන්ති ගාස්තු ගෙවීම සාර්ථක ලෙස සිදුවී ඇත. (මෙසේ දෙවතාවක් වැටෙනතෙක් අනිවාර්යයෙන්ම රැදී සිටින්න)

               </p>
               <p class="font-14 fw-bolder  text-purple pt-4">
                  To successfully pay through the card, you must wait until you see the "You have successfully paid the
                  total amount" message twice on the screen. This means you must wait until you see "Payment
                  Approved" message from the payment gateway and after waiting a bit the LMS will automatically pop up
                  and display "You have successfully conducted a card payment" message. Only after that the payment has
                  been recorded successfully so please be cautious until you see both these messages.
               </p>
             </div>
             <div class="modal-footer">
               <button class="btn btn-info fw-500 font-13 text-white" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
                  Click to Continue</button>
             </div>
           </div>
         </div>
       </div>
       <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
         <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
             <div class="modal-header">

               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body text-center py-5">

               <div class="success-checkmark">
                   <div class="check-icon">
                     <span class="icon-line line-tip"></span>
                     <span class="icon-line line-long"></span>
                     <div class="icon-circle"></div>
                     <div class="icon-fix"></div>
                   </div>
                 </div>

               <h3 class="font-16 fw-bold  text-purple pt-4">
                     ඔබගේ ඇණවුම සාර්ථකව LMS පද්ධතියට ඇතුලත් කරන ලදී. එය අනුමත වූ වහාම ඔබ හට පණිවිඩයක් ලබා දෙනු ලබයි. !!
               </h3>
               <h3 class="font-16 fw-bold  text-purple pb-4">
                   ස්තුතියි !!!</h3>

               <h3 class="font-16 fw-bold  text-purple">
                     Your order has been successfully placed in the LMS. You will receive a message once the order gets approved!

                                           </h3>
                                           <h3 class="font-16 fw-bold   text-purple">
                                               Thank you !!!</h3>
           </div>

           </div>
         </div>
       </div>











      <div class="row justify-content-center pt-5">



















<div class="col-lg-8">
    <p class="font-14 fw-bolder text-purple text-center">
        ඔබගේ ඇණවුම ඔබ ඇණවුම් කල දිනයේ සිට සති දෙකක් ඇතුලත හෝ ඊට පෙර සූදානම් කර ඔබවෙත දැනුම් දේ . එවිට ආයතනය වෙත පැමිණ ඔබගේ ඇණවුම රැගෙනයා හැක. (ආයතනය දැනුම් දීමට පෙර ආයතනය වෙත නොපැමිණෙන්න.) ස්තූතියි !!!
    </p>
</div>

      </div>
   </div>
</div>
@endsection
@section('scripts')
<script>
    // Get the checkbox and button elements
    const checkbox = document.getElementById('check');
    const paymentButton = document.getElementById('paymentButton');

    // Ensure the button is disabled by default when the page loads
    paymentButton.disabled = true;

    // Add an event listener to the checkbox
    checkbox.addEventListener('change', function() {
        // Enable the button if the checkbox is checked, disable if unchecked
        paymentButton.disabled = !this.checked;
    });
</script>
@endsection
