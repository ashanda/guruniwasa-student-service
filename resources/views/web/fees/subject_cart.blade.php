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
            <h1 class="font-36 fw-bold text-uppercase text-purple">SUBJECT CART

            </h1>
        </div>
        <div class="col-lg-4 col-sm-4 pt-lg-0 pt-3">
        </div>
    </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
    <div class="container">
        <div class="row middle-hight ">

            <div class="col-lg-6 col-sm-6">
                <div class="item-list mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="font-16 fw-bolder text-purple ">SUBJECT</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="font-16 text-end fw-bolder text-purple "> AMOUNT </p>
                        </div>
                    </div>
                    <ul class="list-group fopnt-13 text-dark fw-500">
                        <li class="list-group-item d-flex justify-content-between align-items-center ">
                            Science Theory | English Medium | Abhiman Sir
                            <span class="badge bg-primary rounded-pill">1200.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Science Theory | English Medium | Abhiman Sir
                            <span class="badge bg-primary rounded-pill">1200.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Science Theory | English Medium | Abhiman Sir
                            <span class="badge bg-primary rounded-pill">1200.00</span>
                        </li>
                    </ul>
                </div>
                <div class="total-box text-end fopnt-14 text-dark fw-500 bd-blue-100 p-3 rounded-3">
                    <p>Total: 3600.00</p>
                    <p>Discount: -600.00</p>

                    <p><strong>Grand Total: 3300.00</strong></p>
                </div>
               

                <div class=" text-center mt-5">
                    <div class="discount-banner">
                      <span class="discount-text">ADD 6 SUBJECTS FOR GET</span>
                      <span class="discount-percentage">25% OFF</span>
                    </div>
                  </div>


            </div>

            <div class="col-lg-5 col-sm-6 pt-lg-0 pt-sm-0 pt-3">
                <form class=" ">
                    <div class="mb-3">
                        <label for="dateTime" class="form-label font-14 fw-bold text-purple  ">Date and Time on the
                            Slip</label>
                        <input type="text" class="form-control fw-500 rounded-3 border-dark" id="dateTime"
                            placeholder="Enter date and time">
                    </div>
                    <div class="mb-3">
                        <label for="selectBank" class="form-label font-14 fw-bold text-purple  ">Select the Bank</label>
                        <select class="form-select fw-500 rounded-3 border-dark text-dark" id="selectBank">
                            <option selected>Choose the bank</option>
                            <!-- Add bank options here -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="transferSlip" class="form-label font-14 fw-bold text-purple  ">Choose the Transfer
                            Slip</label>
                        <input type="file" class="form-control fw-500 rounded-3 border-dark" id="transferSlip">
                    </div>
                </form>
                <div class="d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary fw-500 font-11 px-2 rounded-pill text-white" data-bs-toggle="modal"
                        data-bs-target="#accountBankView">View Bank Account Details</button>
                    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="accountBankView"
                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1"
                                        id="exampleModalLabel"> Bank Account View</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img class="d-block w-100  " src="{{asset('themes/default/img/account-bank.png')}}"
                                        alt="Guru Niwasa LMS">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-secondary fw-500 font-11 px-2 rounded-pill text-white" data-bs-toggle="modal"
                        data-bs-target="#slipUpdate">Click to Update the Bank Slip</button>
                    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="slipUpdate"
                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
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
                                        ඔබගේ ඇණවුම සාර්ථකව LMS පද්ධතියට ඇතුලත් කරන ලදී. එය අනුමත වූ වහාම ඔබ හට පණිවිඩයක්
                                        ලබා දෙනු ලබයි. !!
                                    </h3>
                                    <h3 class="font-16 fw-bold  text-purple pb-4">
                                        ස්තුතියි !!!
                                    </h3>
                                    <h3 class="font-16 fw-bold  text-purple">
                                        Your order has been successfully placed in the LMS. You will receive a message
                                        once the order gets approved!
                                    </h3>
                                    <h3 class="font-16 fw-bold   text-purple">
                                        Thank you !!!
                                    </h3>
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
                    <button id="paymentButton" class="btn btn-warning fw-500 font-13 text-white mt-2" data-bs-toggle="modal"
                        data-bs-target="#paymentView">Card Payment</button>
                    <div class="mt-2">
                        <img class="w-100 mx-auto" src="{{ asset('themes/default/img/credit-cards.png') }}"
                            alt="Guru Niwasa LMS">
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            <p class="policy-title">Class Fees Refund Policy</p>
                                <div class="policy-section">
                                    <h4>1. Overview</h4>
                                    <p>At Guru Niwasa Institute, we strive to provide a high-quality educational experience for all our students. 
                                    To ensure fairness and transparency, we have established the following refund policy for class fees.</p>

                                    <h4>2. Trial Period</h4>
                                    <p>Students are granted a 7-day trial period upon registration, during which they can access classes and 
                                    evaluate teachers without any fee. This trial allows students to select the teacher and classes best suited 
                                    to their needs.</p>

                                    <h4>3. Class Fees</h4>
                                    <ul>
                                        <li>Theory Class: Rs.1,200 per class</li>
                                        <li>Paper Revision Class: Rs.800 per class</li>
                                    </ul>
                                    <p>For students enrolling in six classes (any combination):</p>
                                    <ul>
                                        <li>Theory Class: Rs.900 per class</li>
                                        <li>Paper Revision Class: Rs.600 per class</li>
                                    </ul>

                                    <h4>4. Payment Methods</h4>
                                    <p>Students can choose from the following payment options:</p>
                                    <ul>
                                        <li>Card Payment</li>
                                        <li>Bank Transfer or CDM Deposit (with slip upload)</li>
                                        <li>Cash or Card Payment at the Office</li>
                                    </ul>

                                    <h4>5. Class Recording Access</h4>
                                    <p>Class recordings are available in the LMS. The first class video of each month is available for free to all 
                                    students. Recordings for the paid classes will be accessible from January onwards, contingent on the 
                                    payment of class fees.</p>
                                    <p><strong>Example 1:</strong> A student registering in August and paying for August will have access to recordings from January.</p>
                                    <p><strong>Example 2:</strong> If a student pays for August, misses the payment for September, and then pays for October, 
                                    they must pay for September to access September’s recordings.</p>

                                    <h4>6. Refund Policy</h4>
                                    <ul>
                                        <li>No refunds will be issued after the class fees have been paid.</li>
                                        <li>This policy is in place because students have access to a 7-day trial period and class recordings to 
                                        evaluate the teacher and classes before making a payment.</li>
                                    </ul>

                                    <h4>7. Transfer of Fees</h4>
                                    <ul>
                                        <li>If a student wishes to withdraw from a class or change subjects, the paid amount may be transferred to 
                                        another subject or teacher of their choice.</li>
                                        <li>This transfer must be requested within the same month (e.g., within the month of the original 
                                        payment) and is subject to availability and approval.</li>
                                    </ul>

                                    <h4>8. Procedure for Fee Transfer</h4>
                                    <p>To request a transfer of fees, students must contact the institute’s administration team. Transfers are 
                                    processed within 5 days, and students will be notified once the transfer is complete.</p>

                                    <h4>9. Contact Information</h4>
                                    <p>For any queries regarding the refund or fee transfer process, please contact our administrative team at 
                                    077 287 9970 or visit our office.</p>

                                    <p>Thank you for understanding and adhering to our refund policy. We are committed to providing a 
                                    valuable educational experience and are here to support your learning journey.</p>
                                </div>
                        </div>


                    </div>
                </div>
            </div>

            <p class="policy-title mt-5">Class Fees Refund Policy</p>
                                <div class="policy-section">
                                    <h4>1. Overview</h4>
                                    <p>At Guru Niwasa Institute, we strive to provide a high-quality educational experience for all our students. 
                                    To ensure fairness and transparency, we have established the following refund policy for class fees.</p>

                                    <h4>2. Trial Period</h4>
                                    <p>Students are granted a 7-day trial period upon registration, during which they can access classes and 
                                    evaluate teachers without any fee. This trial allows students to select the teacher and classes best suited 
                                    to their needs.</p>

                                    <h4>3. Class Fees</h4>
                                    <ul>
                                        <li>Theory Class: Rs.1,200 per class</li>
                                        <li>Paper Revision Class: Rs.800 per class</li>
                                    </ul>
                                    <p>For students enrolling in six classes (any combination):</p>
                                    <ul>
                                        <li>Theory Class: Rs.900 per class</li>
                                        <li>Paper Revision Class: Rs.600 per class</li>
                                    </ul>

                                    <h4>4. Payment Methods</h4>
                                    <p>Students can choose from the following payment options:</p>
                                    <ul>
                                        <li>Card Payment</li>
                                        <li>Bank Transfer or CDM Deposit (with slip upload)</li>
                                        <li>Cash or Card Payment at the Office</li>
                                    </ul>

                                    <h4>5. Class Recording Access</h4>
                                    <p>Class recordings are available in the LMS. The first class video of each month is available for free to all 
                                    students. Recordings for the paid classes will be accessible from January onwards, contingent on the 
                                    payment of class fees.</p>
                                    <p><strong>Example 1:</strong> A student registering in August and paying for August will have access to recordings from January.</p>
                                    <p><strong>Example 2:</strong> If a student pays for August, misses the payment for September, and then pays for October, 
                                    they must pay for September to access September’s recordings.</p>

                                    <h4>6. Refund Policy</h4>
                                    <ul>
                                        <li>No refunds will be issued after the class fees have been paid.</li>
                                        <li>This policy is in place because students have access to a 7-day trial period and class recordings to 
                                        evaluate the teacher and classes before making a payment.</li>
                                    </ul>

                                    <h4>7. Transfer of Fees</h4>
                                    <ul>
                                        <li>If a student wishes to withdraw from a class or change subjects, the paid amount may be transferred to 
                                        another subject or teacher of their choice.</li>
                                        <li>This transfer must be requested within the same month (e.g., within the month of the original 
                                        payment) and is subject to availability and approval.</li>
                                    </ul>

                                    <h4>8. Procedure for Fee Transfer</h4>
                                    <p>To request a transfer of fees, students must contact the institute’s administration team. Transfers are 
                                    processed within 5 days, and students will be notified once the transfer is complete.</p>

                                    <h4>9. Contact Information</h4>
                                    <p>For any queries regarding the refund or fee transfer process, please contact our administrative team at 
                                    077 287 9970 or visit our office.</p>

                                    <p>Thank you for understanding and adhering to our refund policy. We are committed to providing a 
                                    valuable educational experience and are here to support your learning journey.</p>
                                </div>
        </div>   
        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="paymentView" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title modal-title font-18 fw-bold   text-purple" id="exampleModalToggleLabel">
                            Card Payment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-2 text-center">
                        <p class="font-14 fw-bolder  text-purple  ">
                            කාඩ්පතෙන් මුදල් ගෙවීම සාර්ථකව සිදු කිරීමට දෙවතා වක් ඔබ සාර්ථකව මුදල් ගෙවූ බවට තිරයේ දිස්වන
                            තුරු රැදී සිටින්න. එනම්, payment gateway එකෙහි "Payment Approved" ලෙස දිස්වූ පසු ඉන් ඉවත්
                            නොවී තවත් මද වේලාවක් රැදී සිටින්න. ඉන්පසු නැවත LMS ගිණුම විවෘත වන අතර එහි "කාඩ්පත් ගෙවීමක්
                            මගින් ඔබ සාර්ථකව පන්ති ගාස්තු ගෙවා ඇත" ලෙස සටහන් වූ පසු ඔබගේ පන්ති ගාස්තු ගෙවීම සාර්ථක ලෙස
                            සිදුවී ඇත. (මෙසේ දෙවතාවක් වැටෙනතෙක් අනිවාර්යයෙන්ම රැදී සිටින්න)
                        </p>
                        <p class="font-14 fw-bolder  text-purple pt-4">
                            To successfully pay through the card, you must wait until you see the "You have successfully
                            paid the
                            total amount" message twice on the screen. This means you must wait until you see "Payment
                            Approved" message from the payment gateway and after waiting a bit the LMS will
                            automatically pop up
                            and display "You have successfully conducted a card payment" message. Only after that the
                            payment has
                            been recorded successfully so please be cautious until you see both these messages.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info fw-500 font-13 text-white" data-bs-target="#exampleModalToggle2"
                            data-bs-toggle="modal" data-bs-dismiss="modal">
                            Click to Continue</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModalToggle2"
            aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
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
                            ඔබගේ ඇණවුම සාර්ථකව LMS පද්ධතියට ඇතුලත් කරන ලදී. එය අනුමත වූ වහාම ඔබ හට පණිවිඩයක් ලබා දෙනු
                            ලබයි. !!
                        </h3>
                        <h3 class="font-16 fw-bold  text-purple pb-4">
                            ස්තුතියි !!!
                        </h3>
                        <h3 class="font-16 fw-bold  text-purple">
                            Your order has been successfully placed in the LMS. You will receive a message once the
                            order gets approved!
                        </h3>
                        <h3 class="font-16 fw-bold   text-purple">
                            Thank you !!!
                        </h3>
                    </div>
                </div>
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