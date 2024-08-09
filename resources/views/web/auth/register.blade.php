@extends('web.layouts.app')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <div class="row justify-content-center">
         {{-- <div class="col-lg-2 col-4">
            <img class="d-block w-100 mx-auto" src="{{asset('themes/default/img/hd_dp.png')}}"
               alt="Guru Niwasa LMS">
         </div> --}}
         <div class="col-12 text-center">
            <h1 class="font-20 fw-bold text-uppercase text-purple   pt-1">IN THE AIM FOR A SUCCESSFUL ONLINE/PHYSICAL EDUCATIONAL JOURNEY
                , ALL THE NEW STUDENTS MUST FOLLOW 5 MAIN STEPS FOR THE CLASS DETAILS AND CREATE A LMS ACCOUNT
            </h1>
            <h1 class="font-20 fw-bold text-uppercase text-purple   pt-2">සාර්ථක ONLINE / PHYSICAL අධ්‍යාපනයක් සදහා වූ අප ආයතනයේ පන්ති
                වැඩපිළිවෙල ඇතුළු සියලු විස්තර සහ LMS ගිණුමක් සාදා ගැනීම සඳහා සියලුම නවක සිසුන් ප්‍රධාන පියවර 05 ක් අනුගමනය කල යුතුය
            </h1>
         </div>
         <div class="col-12 pt-4">
            <div class="row justify-content-center">
               <div class="col-lg-6 col-sm-10 col-12">
                  <div class="card border-5  border-success  rounded-3 bg-white text-center">
                     <div class="card-body min-height-card align-items-center">

                        <h3 class="font-16 fw-bold text-secondary pt-2">
                            ALL THE NEW STUDENTS CLICK HERE TO START THE
                            5 MAIN STEPS.
                        </h3>
                        <h3 class="font-16 fw-bold text-secondary pt-2">
                           පන්ති පිලිබඳව විස්තර සඳහා සහ
                           ලියාපදිංචි වීම සඳහා පිවිසෙන්න.
                        </h3>
                        <a href="{{ route('web.register.step1')}}" class="hvr-shrink text-white gradient-background-1 py-2 px-5 justify-content-around rounded-35 mt-3"  >
                        Click Here
                        </a>
                     </div>
                  </div>
               </div>

            </div>




            <div class="row justify-content-center pt-4">
                <div class="col-lg-6 col-sm-10 col-12">
                    <h3 class="text-center font-12">
                        <a href="{{  route('web.login') }}" class="hvr-shrink text-white bg-success py-3 px-2 justify-content-around  rounded-3">
                            IF YOU HAVE ALREADY CREATED AN LMS ACCOUNT, ACCESS YOUR ACCOUNT HERE.<br>

                            ඔබ දැනටමත් LMS ගිණුමක් සාදා ඇතිනම් ඔබගේ ගිණුමට මෙතනින් පිවිසෙන්න.
                              </a>
                    </h3>
                </div>

             </div>






         </div>
      </div>
   </div>
</div>
@endsection
