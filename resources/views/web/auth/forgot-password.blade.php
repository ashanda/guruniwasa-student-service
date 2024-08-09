@extends('web.layouts.app')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-2 col-4">
            <img class="d-block w-100 mx-auto" src="{{asset('themes/default/img/hd_dp.png')}}"
               alt="Guru Niwasa LMS">
         </div>
         <div class="col-12 pt-2 text-center">
            <h1 class="font-27 fw-bold  text-purple   pt-1">
                FORGOT YOUR PASSWORD? DO NOT WORRY!
            </h1>
         
            <p class="font-12 fw-bolder  text-dark text-start  pt-2">
                * ENTER YOUR REGISTER MOBILE NUMBER TO THE LMS BELOW AND CLICK SEND OTP TO MOBILE BUTTON TO GET A 04 DIGIT CODE WHICH WILL RESET YOUR PASSWORD.
            </p>
            <p class="font-12 fw-bolder  text-dark text-start  pt-2">
                * ඔබ LMS පද්ධතියට log වීමට භා විතා කරන Phone number එක මෙහි ඇතුලත් කර SEND OTP TO MOBILE බො ත්තම ක්ලික් කරන්න. එවිට ඔබට ඉලක්කම් 4 කින් යුතු අංකයක් ලැ බෙන අතර එය මෙහි ඇතුලත් කර , ඔබගේ LMS ගිණුමට නව මුරපදයක් ලබා දිය හැක.
            </p>
         </div>
         <div class="col-12 pt-4">
            <div class="row justify-content-center align-items-center">
               <div class="col-lg-6 col-sm-6">
                  <div class="card border-5  border-info  rounded-3 bg-white  ">
                     <div class="card-body align-items-center">
                        <form action="">
                           <div class="mb-2">
                              <label class="form-label font-12 fw-bold text-purple  mb-0">Phone Number<span class="text-danger">*</span> </label>
                              <input type="text" class="form-control font-13  fw-500 rounded-3 border-dark" placeholder="Enter Phone Number">
                           </div>
                           
                           <div class="row align-items-center mt-3">
                            <div class="col-lg-7">
                                 <a href=" " class="hvr-shrink text-white gradient-background-1 py-2 px-5 justify-content-around rounded-35 font-13"  >
                                    SEND OTP TO MOBILE
                                 </a>
                              </div>
                             
                              <div class="col-lg-5 pt-lg-0 pt-3">
                                 <a href=" " class="hvr-shrink text-white bg-success  py-2 px-5 justify-content-around rounded-35  font-13"  >
                                    Go Back Login
                                 </a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-6 pt-lg-0 pt-sm-0 pt-3">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/wsRQ12gygAc?si=bvySd2tMMUptN-4v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
               </div>
            </div>
         </div>

         <div class="col-12 pt-3">
            <p class="font-13 fw-bolder  text-dark text-start  pt-2">🔢 ඔබ ඇතුලත් කළ ජංගම දුරකථනයට SMS මඟින් ලැබී ඇති ඉලක්කම් 4 ඇතුලත් කර Veryfy බොත්තම ක්ලික් කරන්න.
             </p>
             <p class="font-13 fw-bolder  text-dark text-start  pt-2">🔢 Enter the 4 digits received via SMS to your entered mobile phone and click on the Veryfy button.
            </p>
            <p class="font-13 fw-bolder  text-dark text-start  pt-2">📲 යම් ගැටලුවක් වේ නම් කාර්යාලය අමතන්න. 
                0772879970 / 0767681431
            </p>
            <p class="font-13 fw-bolder  text-dark text-start  pt-2">  
                📲 Call the office if there is a problem.
                0772879970 / 0767681431
            </p>
         </div>
      </div>
   </div>
</div>
@endsection