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
                <div class="text-center">
                    <p class="font-18 fw-bold   text-dark">Or</p>
                    <button class="btn btn-warning fw-500 font-13 text-white" data-bs-toggle="modal"
                        data-bs-target="#paymentView">Card Payment</button>
                    <div class="mt-2">
                        <img class="w-100 mx-auto" src="{{ asset('themes/default/img/credit-cards.png') }}"
                            alt="Guru Niwasa LMS">
                    </div>
                </div>
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