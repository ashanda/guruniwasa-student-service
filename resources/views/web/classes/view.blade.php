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
         <h1 class="font-36 fw-bold text-uppercase text-purple">TODAY LIVE CLASSES
         </h1>
         @php
         $currentDateTime = Carbon::now('Asia/Colombo');
         @endphp
         <p class="font-20 fw-500 text-purple">{{ $currentDateTime->format('d.m.Y | l | h.i A') }}
         </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
          @foreach($body['data']['current_lessons'] as $lesson)
        <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
                <h3 class="font-20 fw-bold pb-2">
                    {{ \Carbon\Carbon::parse($lesson['start_time'])->format('g:i A') }} - {{ \Carbon\Carbon::parse($lesson['end_time'])->format('g:i A') }}
                </h3>
                <div class="row justify-content-center pt-2 pb-3">
                    <div class="col-6">
                        <img class="d-block w-100 rounded-circle" src="{{ asset('themes/default/img/place-holder.png') }}" alt="Guru Niwasa LMS">
                    </div>
                </div>
                <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade {{ $lesson['grade_id'] }}</span></p>
                <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder">{{ $lesson['lesson_title'] }}</span></p>
                <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success">{{ $lesson['status']}}</span></p>
                <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">{{ $lesson['special_note'] }}</span></p>
                <p class="font-14 fw-500 text-dark text-start">Zoom Password - <span class="fw-bolder">{{ $lesson['password'] }}</span></p>
                <div class="row justify-content-center pt-4">
                    <div class="col-lg-10 text-white e">
                        @if($lesson['status'] == 0)
                            <button class="border-0 btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center text-white hvr-shrink" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                CLICK TO JOIN <br>
                                <span class="font-9">FIRST WEEK PASS</span>
                            </button>
                        @elseif($lesson['status'] == 1)
                            <button class="border-0 btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-danger fw-500 align-items-center text-white hvr-shrink" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                YOU CAN'T WATCH <br>
                                <span class="font-9">Class Fees Pending</span>
                            </button>
                        @else
                        @php
                           $currentTime = Carbon::now()->format('H:i:s');
                        @endphp
                            @if( $lesson['end_time'] < $currentTime)
                            <button class="border-0 btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-warning fw-500 align-items-center text-white hvr-shrink" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                ENDED
                            </button>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach



<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content border-new1 bg-danger">
        <div class="modal-header">
            <h5 class="modal-title font-15 fw-bold text-white e" id="exampleModalLabel">Subject - <span class="fw-500"> Mathematics Theory  | Shehan Sir</h5>
          <button type="button" class="btn-close text-white e" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
       <p class="font-14 fw-500 text-white e">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

       </p>
       <button type="button" class=" my-3 btn btn-secondary border-0 btn-cus 0 text-uppercase font-14 text-white rounded-pill py-2 px-5 bg-success fw-500  float-end" data-bs-dismiss="modal">CLICK TO JOIN</button>
        </div>
        <div class="modal-footer py-5 border-0">


        </div>
      </div>
    </div>
  </div>












      {{-- <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
            </h3>
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
            <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
            <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white e">
                  <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                     CLICK TO JOIN <br>
                     <span class="font-9">NEW STUDENT PASS
                     </span>
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
            </h3>
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
            <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
            <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white e">
                  <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-danger fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                     YOU CAN’T JOIN <br>
                     <span class="font-9">HAVE TO PAY CLASS FEES
                     </span>
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
            </h3>
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
            <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
            <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white e">
                  <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                     CLICK TO JOIN <br>
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
            </h3>
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
            <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
            <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white e">
                  <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-warning fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                     Ended <br>
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
            </h3>
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
            <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
            <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white e">
                  <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-warning fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                     Holiday <br>
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
            </h3>
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
            <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
            <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white e">
                  <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-warning fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                     Still Not Scheduled
                     <br>
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
            </h3>
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
            <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
            <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white e">
                  <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-warning fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                     Postponed
                     <br>
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div> --}}
   </div>
</div>
@endsection
