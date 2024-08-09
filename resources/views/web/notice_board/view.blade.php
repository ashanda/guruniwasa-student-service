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
         <h1 class="font-36 fw-bold text-uppercase text-purple">NOTICE BOARD
         </h1>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div  class="col-lg-4 col-sm-6 mb-3 align-items-center">
         <div class=" border border-info border-2 py-4 px-3 rounded-3 bd-blue-100">
            <div class="row align-items-center pt-2 pb-3">
               <div class="col-3">
                  <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
               <div class="col-9">
                  <h3 class="font-18 fw-bold  text-purple">Abhiman Withakshana
                  </h3>
                  <p class="font-14 fw-500 text-dark">Managing Director
                  </p>
               </div>
            </div>
            <p class="font-14 fw-500 text-dark pb-2">2024.01.13 වන දින ඔබ LMS
               පද්ධතියට ඇතුලත් කල , 2024
               පෙ බරවා රි මා සයේ පන්ති සදහා
               සිදුකල මුදල් තැ න්පතුවේ බැං කු
               රිසිට්පත අනුමත වී ඇත. දැ න් ඔබගේ
               LMS පද්ධතිය අදා ල විෂයන් සදහා
               සක්‍රීය වී ඇත.
            </p>
            <p class="font-12 fw-bolder text-dark pb-3">
               ස්තූතියි !
               ගිණුම් අං ශය
               ගුරු නිවස
            </p>
            <p class="font-12 fw-bolder text-dark">
               (Date and Time)
            </p>
         </div>
      </div>
      <div  class="col-lg-4 col-sm-6 mb-3 align-items-center">
        <div class=" border border-info border-2 py-4 px-3 rounded-3 bd-blue-100">
           <div class="row align-items-center pt-2 pb-3">
              <div class="col-3">
                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                    alt="Guru Niwasa LMS">
              </div>
              <div class="col-9">
                 <h3 class="font-18 fw-bold  text-purple">Abhiman Withakshana
                 </h3>
                 <p class="font-14 fw-500 text-dark">Managing Director
                 </p>
              </div>
           </div>
           <p class="font-14 fw-500 text-dark pb-2">2024.01.13 වන දින ඔබ LMS
              පද්ධතියට ඇතුලත් කල , 2024
              පෙ බරවා රි මා සයේ පන්ති සදහා
              සිදුකල මුදල් තැ න්පතුවේ බැං කු
              රිසිට්පත අනුමත වී ඇත. දැ න් ඔබගේ
              LMS පද්ධතිය අදා ල විෂයන් සදහා
              සක්‍රීය වී ඇත.
           </p>
           <p class="font-12 fw-bolder text-dark pb-3">
              ස්තූතියි !
              ගිණුම් අං ශය
              ගුරු නිවස
           </p>
           <p class="font-12 fw-bolder text-dark">
              (Date and Time)
           </p>
        </div>
     </div>

     <div  class="col-lg-4 col-sm-6 mb-3 align-items-center">
        <div class=" border border-info border-2 py-4 px-3 rounded-3 bd-blue-100">
           <div class="row align-items-center pt-2 pb-3">
              <div class="col-3">
                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                    alt="Guru Niwasa LMS">
              </div>
              <div class="col-9">
                 <h3 class="font-18 fw-bold  text-purple">Abhiman Withakshana
                 </h3>
                 <p class="font-14 fw-500 text-dark">Managing Director
                 </p>
              </div>
           </div>
           <p class="font-14 fw-500 text-dark pb-2">2024.01.13 වන දින ඔබ LMS
              පද්ධතියට ඇතුලත් කල , 2024
              පෙ බරවා රි මා සයේ පන්ති සදහා
              සිදුකල මුදල් තැ න්පතුවේ බැං කු
              රිසිට්පත අනුමත වී ඇත. දැ න් ඔබගේ
              LMS පද්ධතිය අදා ල විෂයන් සදහා
              සක්‍රීය වී ඇත.
           </p>
           <p class="font-12 fw-bolder text-dark pb-3">
              ස්තූතියි !
              ගිණුම් අං ශය
              ගුරු නිවස
           </p>
           <p class="font-12 fw-bolder text-dark">
              (Date and Time)
           </p>
        </div>
     </div>
     <div  class="col-lg-4 col-sm-6 mb-3 align-items-center">
        <div class=" border border-info border-2 py-4 px-3 rounded-3 bd-blue-100">
           <div class="row align-items-center pt-2 pb-3">
              <div class="col-3">
                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                    alt="Guru Niwasa LMS">
              </div>
              <div class="col-9">
                 <h3 class="font-18 fw-bold  text-purple">Abhiman Withakshana
                 </h3>
                 <p class="font-14 fw-500 text-dark">Managing Director
                 </p>
              </div>
           </div>
           <p class="font-14 fw-500 text-dark pb-2">2024.01.13 වන දින ඔබ LMS
              පද්ධතියට ඇතුලත් කල , 2024
              පෙ බරවා රි මා සයේ පන්ති සදහා
              සිදුකල මුදල් තැ න්පතුවේ බැං කු
              රිසිට්පත අනුමත වී ඇත. දැ න් ඔබගේ
              LMS පද්ධතිය අදා ල විෂයන් සදහා
              සක්‍රීය වී ඇත.
           </p>
           <p class="font-12 fw-bolder text-dark pb-3">
              ස්තූතියි !
              ගිණුම් අං ශය
              ගුරු නිවස
           </p>
           <p class="font-12 fw-bolder text-dark">
              (Date and Time)
           </p>
        </div>
     </div>


      <div class="col-12 pt-4">
        <div class="row">
<div class="col-12">
    <p class="font-13 fw-bolder text-danger text-uppercase">
        EDITORS NOTE: MESSAGES WILL BE ERASED AFTER A WEEK. NEWEST MESSAGES WILL BE SHOWN FIRST
    </p>
</div>
        </div>
      </div>
   </div>
</div>
@endsection
