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
         <h1 class="font-36 fw-bold text-uppercase text-purple">VIDEO RECORDINGS

         </h1>
         <p class="font-20 fw-500 text-purple">{{ $data['subject']['sname'] }} - {{ $data['subject']['sname'] }} - {{ $data['teacher_name'] }}

         </p>
      </div>

      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
        <div class="row justify-content-end">
            <div class="col-lg-11">
                <form action=" " method="get">
                    <input class="border border-info rounded-pill font-15 fw-500 text-dark py-2 form-control " type="search" name="searchKey" id="search" placeholder="Search" aria-label="Search" style=" outline: none;">
                    <button type="submit " class="border-0 serch-btn">
                        <i class="fa-solid fa-magnifying-glass fs-4"></i>
                    </button>
                    </form>
            </div>
            
          </div>
     </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
           
            <div class="row justify-content-center pt-2 pb-3">
               <div class="col-12">
                  @if($data['status'] == 'Still Not Added')
                  @php
                     $status = 0;
                  @endphp
                  <h3>{{ 'Video Not Added Yet' }}</h3>

                  @elseif($data['status'] == 'Publish')
                     @if (!empty($data['video_thumb']) )
                         <img class="d-block w-100 rounded-3" src="https://img.youtube.com/vi/{{ $data['video_thumb'] }}/maxresdefault.jpg" alt="Guru Niwasa LMS"> 
                     @else
                         <img class="d-block w-100 rounded-3" src="https://img.youtube.com/vi/abcd1234/maxresdefault.jpg" alt="Guru Niwasa LMS"> 
                     @endif
                  @php
                     $status = 1;
                  @endphp  
                  @else
                  <h3>{{ 'Video Not Published' }}</h3>
                  @php
                     $status = 2;
                  @endphp
                  @endif
                  
               </div>
            </div>
            <p class="font-14 fw-500 text-dark text-start">Class Date - <span class="fw-bolder">{{ \Carbon\Carbon::parse($data['created_at'])->format('Y-m-d') }}</span></p>
            <p class="font-14 fw-500 text-dark text-start">Topic - <span class="fw-bolder"> {{ $data['lesson_title'] }}
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> {{ $data['subject']['sname'] }} 
               </span>
            </p>

            <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">{{ $data['grade'] }} 
            </span></p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white e">
               @if ($status == 0)
                  <button type="button" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-info fw-500 align-items-center text-white hvr-shrink" disabled> Wait for teacher upload</button>
               @elseif ($status == 1)
                   <a href="https://www.youtube.com/watch?v=tQTfF4FRA2k&list=PLMrrM6QnSnHwCdEQ7IAgFe0WDn21Dua5T" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center text-white hvr-shrink" target="_blank"> Click to watch</a>
               @else
                   <button type="button" class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-info fw-500 align-items-center text-white hvr-shrink" disabled> Wait for teacher Publish</button>
               @endif
               

                   

               </div>
            </div>
         </div>
      </div>


 


 
   </div>
</div>
@endsection
