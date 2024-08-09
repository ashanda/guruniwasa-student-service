@extends('web.layouts.app')
@section('content')

@if(session()->has('student_data'))
    @php
        $studentData = session('student_data');
        
    @endphp
@else
     <script>window.location = "{{ route('web.logout') }}";</script>
@endif

<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-2">
         <h2 class="font-24 fw-bold text-purple">{{ $studentData['grades']['gname'] }}</h2>
      </div>
      <div class="col-lg-6 col-sm-6 text-center pt-lg-0 pt-3">
         <p class="font-17 fw-bolder text-purple">Hello, <span class="fst-italic">< {{ $studentData['full_name'] }} ></span>
         </p>
         <h1 class="font-36 fw-bold text-uppercase text-purple pt-lg-0 pt-1">WELCOME TO GURU NIWASA LMS
         </h1>
      </div>
      <div class="col-lg-3 col-sm-4">
         <div class="row  justify-content-center">
            <div class="col-12 pe-lg-5 pt-lg-0 pt-3">
               <div class="form-check form-switch cus-switch ">
                  <div class="row align-items-end">
                     <div class="col-lg-4 col-sm-3 col-2"> <label class="form-check-label font-12 fw-bolder text-uppercase text-purple" for="flexSwitchCheckDefault">BASIC</label>
                     </div>
                     <div class="col-lg-4 col-sm-4  col-3"><input class="form-check-input font-14  w-100 pt-3 pb-2 text-uppercase text-purple ms-0" type="checkbox" id="flexSwitchCheckDefault">
                     </div>
                     <div class="col-lg-4 col-sm-2 col-4"><label class="form-check-label font-12 fw-bolder text-uppercase text-purple" for="flexSwitchCheckDefault">ADVANCED</label>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row  justify-content-center">
            <div class="col-12   pt-lg-0 pt-3">
               <div class="form-check form-switch ">
                  <div class="row align-items-end">
                    <div class="col-lg-4 col-sm-5 col-3">   <label class="form-check-label font-12 fw-bolder text-uppercase text-purple" for="flexSwitchCheckDefault">Grade 06</label>
                     </div>
                     <div class="col-lg-4 col-sm-4  col-3">  <input class="form-check-input font-14  w-100 pt-3 pb-2 text-uppercase text-purple ms-0" type="checkbox" id=" ">
                     </div>
                     <div class="col-lg-4 col-sm-3 col-4">   <label class="form-check-label font-12 fw-bolder text-uppercase text-purple" for="flexSwitchCheckDefault">Grade 11</label>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div   id="basicMenuList">
      <div class="row justify-content-around align-items-center mx-auto">
         <div class="col-lg-1"></div>
         <div class="col-lg-3 col-sm-5  col-10 ">
            <a href="{{ route('web.class.view') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-2 py-1">
                     <i class="fa fa-video fs-3 text-white e"></i>
                  </div>
                  <div class="col-lg-8 col-9 py-1">
                     <p class="font-14 text-white fw-500">Live Class</p>
                     <p class="font-14 text-white fw-500">සජිවි පන්ති</p>
                  </div>
               </div>
            </a>

         </div>
         <div class="col-lg-3 col-sm-5  col-10 pt-lg-0 pt-sm-0 pt-3">
            <a href="{{ route('web.video.view') }}"  class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-2 py-1">
                     <i class="fab fa-youtube fs-3 text-white e"></i>
                  </div>
                  <div class="col-lg-8 col-9 py-1">
                     <p class="font-14 text-white fw-500">Video Recoding</p>
                     <p class="font-14 text-white fw-500">වීඩියෝ පටිගත කිරිම්</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-1"></div>
      </div>
      <div class="row justify-content-around pt-lg-5 mx-auto">
         <div class="col-lg-1"></div>
         <div class="col-lg-3 col-sm-5  col-10 pt-lg-0 pt-3">
            <a href="{{  route('web.fees.view') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-2 py-1">
                     <i class="fa-solid fa-money-bill-1-wave fs-3 text-white e"></i>
                  </div>
                  <div class="col-lg-8 col-9 py-1">
                     <p class="font-14 text-white fw-500">Class Fees</p>
                     <p class="font-14 text-white fw-500">පන්ති ගාස්තු</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-10 pt-lg-0 pt-3">
            <a href="{{ route('web.tutes.book') }}"  class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-2 py-1">
                     <i class="fa fa-book fs-3 text-white e"></i>
                  </div>
                  <div class="col-lg-9 col-9 py-1">
                     <p class="font-14 text-white fw-500">Class Tutes & Books</p>
                     <p class="font-14 text-white fw-500">පන්ති නිබන්දන සහ පොත්</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-1"></div>
      </div>
      <div class="row justify-content-around pt-lg-5 mx-auto">
         <div class="col-lg-3 col-sm-5  col-10 pt-lg-0 pt-3">
            <a href="{{  route('web.time.table') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-2 py-1">
                     <i class="fa fa-clock fs-3 text-white e"></i>
                  </div>
                  <div class="col-lg-8 col-9 py-1">
                     <p class="font-14 text-white fw-500">Time Tables</p>
                     <p class="font-14 text-white fw-500">කාල සටහන්</p>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
   <div class="d-none" id="advaceMenuList">
      <div class="row align-items-center">
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.class.view') }}"  class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa fa-video fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Live Class</p>
                     <p class="font-13 text-white fw-500">සජිවි පන්ති</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.video.view') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fab fa-youtube fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Video Recoding</p>
                     <p class="font-13 text-white fw-500">වීඩියෝ පටිගත කිරිම්</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.tutes.book') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa fa-book fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Class Tutes and Books</p>
                     <p class="font-13 text-white fw-500">පන්ති නිබන්දන සහ පොත්</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.class.paper') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa fa-book-open fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Class Paper</p>
                     <p class="font-13 text-white fw-500">පන්ති ප්‍රශ්නපත්‍ර</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.student.talents') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-brands fa-digital-ocean fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Talents</p>
                     <p class="font-13 text-white fw-500">දක්ෂතා</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.note-paper.ansewer')}}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-newspaper fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Notes & Paper Answers</p>
                     <p class="font-13 text-white fw-500">සටහන් සහ ප්‍රශ්නපත්‍ර පිලිතුරු</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.learning.management')}}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-graduation-cap fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Learning Management</p>
                     <p class="font-13 text-white fw-500">ඉගෙනුම් කළමනාකරණය</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.online.exam')}}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-globe fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Online Exams</p>
                     <p class="font-13 text-white fw-500">සජිවි පන්ති</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.student.attendance')}}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-clipboard-user fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Attendance</p>
                     <p class="font-13 text-white fw-500">දරුවාගේ පැමිණිම</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.teacher.subject')}}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-chalkboard-user fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Teachers & New Subjects</p>
                     <p class="font-13 text-white fw-500">ගුරුවරුන් සහ නව විෂයන් </p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{  route('web.notice.board') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-circle-exclamation fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Notice Board</p>
                     <p class="font-13 text-white fw-500">දැන්වීම් පුවරුව</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{  route('web.fees.view') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-money-bill fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Class Fees</p>
                     <p class="font-13 text-white fw-500">පන්ති ගාස්තු</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.review.teacher') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-regular fa-comment  fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Teacher Review</p>
                     <p class="font-13 text-white fw-500">ගුරුවරුන් ගැන ඔබේ අදහස්</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{ route('web.analysis.report')}}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-magnifying-glass-chart fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Final Analysis Report</p>
                     <p class="font-13 text-white fw-500">විශ්ලේෂණ වාර්තා</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{  route('web.time.table') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1 py-1">
                     <i class="fa-solid fa-table fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-13 text-white fw-500">Time Tables</p>
                     <p class="font-13 text-white fw-500">කාල සටහන්</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-4  col-10  px-3  mb-3 mx-auto">
            <a href="{{  route('web.item-shop') }}" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35 w-100">
                  <div class="col-1  py-1">
                     <i class="fa-solid fa-cart-shopping fs-3 text-white e"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-18 text-white fw-500">Items Shop</p>
                  </div>
               </div>
            </a>
         </div>
         
      </div>
   </div>
</div>
<style>


.centered {
  
  height: auto;
  display: flex;
  align-items: center;
  justify-content: center;
}

#qrcode {
  padding: 15px;
  background-color: white;
  text-align: center;
  border-radius: 5%;
}

.scan-text{
  width: 100%;
  flex-direction: column;
  text-align: center;
  font-family: 'Poppins', sans-serif;
  font-size: 18px;
  color: #0f0f0f;
  margin-top: 10px;
}

#one {
  font-weight: 700;
  font-size: 25px;
  color: #101b39;
}

#two {
  margin-top: -7px;
}
</style>

<div class="container text-center">
  <div id="qrCodeSquareFrame">
    <div class="centered">
      <div id="qrcode">
        {!! generateQrCode('http://127.0.0.1:8000/api/v1/student-attendence','0', $studentData['id']) !!}
        <div class="scan-text">SCAN ME</div>
      </div>
    </div>
  </div>
</div>

@endsection
