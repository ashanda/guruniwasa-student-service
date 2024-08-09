@extends('web.layouts.app')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <div class="row justify-content-center">
         {{--
         <div class="col-lg-2 col-4">
            <img class="d-block w-100 mx-auto" src="{{asset('themes/default/img/hd_dp.png')}}"
               alt="Guru Niwasa LMS">
         </div>
         --}}
         <div class="col-12 text-center">
            <h2 class="fst-italic font-18 fw-bolder pb-3">STEP 05
               පස්වන  පියවර
            </h2>
            <h1 class="font-18 fw-bold text-uppercase text-purple text-dark  pt-1">
               Fill in all the information asked here in English only.            
            </h1>
            <h1 class="font-18 fw-bold text-uppercase text-purple   pt-2">✅ මෙහි අසන සියලු තොරතුරු ඉංග්‍රීසි අකුරෙන් පමණක් පුරවන්න.
            </h1>
         </div>
         @php
         $prefix = 'GNI';
         $randomNumber = mt_rand(1000, 9999); // Generate a random 3-digit number
         $uniqueCode = $prefix .'-'. $randomNumber;   
         @endphp
         <div class="col-12 pt-4">
            <form  action="{{ route('web.register.data') }}" method="POST" >
               @csrf
               <div class="row justify-content-center  ">
                  <div class="col-lg-6 col-sm-10 col-12">
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">Student Number</label>
                        <input type="hidden" name="grade" value="{{ $grade }}">
                        <input type="hidden" name="subjectList" value="{{ $subjectList }}">
                        <input type="hidden" name="phone" value="{{ $phone }}">
                        <input type="hidden" name="unique_code" value="{{ $uniqueCode }}">
                        <input type="text" class="form-control fw-500 rounded-3 border-dark font-14" value="{{ $uniqueCode }}" required  readonly>
                     </div>
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">Date Of Birth </label>
                        <input type="date" name="dob" class="form-control fw-500 rounded-3 border-dark font-14" required>
                     </div>
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">Address </label>
                        <input type="text" name="address" class="form-control fw-500 rounded-3 border-dark font-14" placeholder="Enter Your Address" required>
                     </div>
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">District </label>
                        <select class="form-select fw-500 rounded-3 border-dark font-14" aria-label="Default select example" name="district" required>
                           <option selected="">Select District</option>
                          <option value="Ampara">Ampara</option>
                                      <option value="Anuradhapura">Anuradhapura</option>
                                      <option value="Badulla">Badulla</option>
                                      <option value="Batticaloa">Batticaloa</option>
                                      <option value="Colombo">Colombo</option>
                                      <option value="Galle">Galle</option>
                                      <option value="Gampaha">Gampaha</option>
                                      <option value="Hambantota">Hambantota</option>
                                      <option value="Jaffna">Jaffna</option>
                                      <option value="Kalutara">Kalutara</option>
                                      <option value="Kandy">Kandy</option>
                                      <option value="Kegalle">Kegalle</option>
                                      <option value="Kilinochchi">Kilinochchi</option>
                                      <option value="Kurunegala">Kurunegala</option>
                                      <option value="Mannar">Mannar</option>
                                      <option value="Matale">Matale</option>
                                      <option value="Matara">Matara</option>
                                      <option value="Monaragala">Monaragala</option>
                                      <option value="Mullaitivu">Mullaitivu</option>
                                      <option value="Nuwara-Eliya">Nuwara Eliya</option>
                                      <option value="Polonnaruwa">Polonnaruwa</option>
                                      <option value="Puttalam">Puttalam</option>
                                      <option value="Ratnapura">Ratnapura</option>
                                      <option value="Trincomalee">Trincomalee</option>
                                      <option value="Vavuniya">Vavuniya</option>
                        </select>
                     </div>
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0" >Parent Phone Number </label>
                        <input type="text" name="parent_phone" class="form-control fw-500 rounded-3 border-dark font-14" placeholder="Enter Parent Phone Number" required pattern="[0-9]{10}">
                     </div>
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">Confirm Password </label>
                        <input type="password"  class="form-control fw-500 rounded-3 border-dark font-14" placeholder="Enter your Confirm Password" id="confirmPassword" required>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-10 col-12">
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple mb-0">Full Name </label>
                        <input type="text" name="full_name" class="form-control fw-500 rounded-3 border-dark font-14" placeholder="Type your full name in English only; don't use initials." required>
                     </div>
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">Gender </label>
                        <select class="form-select fw-500 rounded-3 border-dark font-14" aria-label="Default select example" name="gender" required>
                           <option value="1">Male</option>
                           <option value="2">Female</option>
                        </select>
                     </div>
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">School </label>
                        <input type="text" name="school" class="form-control fw-500 rounded-3 border-dark font-14" placeholder="Enter your School" required>
                     </div>
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">Town/City</label>
                        <input type="text" name="town" class="form-control fw-500 rounded-3 border-dark font-14" placeholder="Enter your Town/City" required>
                     </div>
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple  mb-0">Password </label>
                        <input type="password" name="password" class="form-control fw-500 rounded-3 border-dark font-14" placeholder="Enter your Password" id="password" required>
                     </div>
                     <div id="message" class="error text-danger font-12 fw-500"></div>
                  </div>
               </div>




               <div class="row justify-content-center pt-4">
                <div class="col-lg-5 col-sm-10 col-12">
                    <h3 class="text-center font-12">
                        <button type="submit" class="hvr-shrink text-white bg-success py-3 px-2 justify-content-around  rounded-35 font-13 w-100">
                            CLICK TO SUBMIT YOUR DETAILS. <br>ඔබගේ තොරතුරු ඇතුලත් කිරීමට CLICK කර
                        </button>
                    </h3>
                </div>

             </div>





            </form>
         </div>
      </div>
   </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   document.addEventListener('DOMContentLoaded', (event) => {
       const password = document.getElementById('password');
       const confirmPassword = document.getElementById('confirmPassword');
       const message = document.getElementById('message');
   
       function validatePassword() {
         const passwordValue = password.value;
         const confirmPasswordValue = confirmPassword.value;
   
         let errorMessage = '';
   
         if (passwordValue !== confirmPasswordValue) {
           errorMessage = "Passwords do not match!";
         } else if (!/[a-z]/.test(passwordValue)) {
           errorMessage = "Password must contain at least one lowercase letter!";
         } else if (!/[A-Z]/.test(passwordValue)) {
           errorMessage = "Password must contain at least one uppercase letter!";
         } else {
           errorMessage = '';
         }
   
         message.textContent = errorMessage;
       }
   
       password.addEventListener('focus', validatePassword);
       confirmPassword.addEventListener('focus', validatePassword);
   
       password.addEventListener('keyup', validatePassword);
       confirmPassword.addEventListener('keyup', validatePassword);
   
       password.addEventListener('change', validatePassword);
       confirmPassword.addEventListener('change', validatePassword);
     });
   
   
   
   
   
   
   
   
   
   
   
</script>