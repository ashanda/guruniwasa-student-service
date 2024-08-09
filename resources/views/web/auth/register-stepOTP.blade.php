@extends('web.layouts.app')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12">
            <h2 class="fst-italic font-18 fw-bolder text-center pb-3">STEP 04
               හතරවන පියවර
            </h2>
            <p class="font-12 fw-500   text-dark   pt-1 pb-2">
               🔢 Enter the phone number that you are going to use to create the LMS account here, and definitely click the Send OTP button. Then confirm your phone number using the 4 digits mentioned in the text message you received on your phone.
               <br>
               🔢 මෙහි LMS ගිණුම සෑදීම සඳහා යොදා ගන්නා දුරකථන අංකය ඇතුලත් කර අනිවාර්යයෙන්ම Send OTP බොත්තම ක්ලික් කරන්න. පසුව ඔබගේ දුරකථනයට ලැබෙන කෙටි පණිවිඩයේ සඳහන් ඉලක්කම් 4 යොදා ඔබගේ දුරකථන අංකය තහවුරු කරන්න.
            </p>
            <p class="font-12 fw-500   text-dark   pt-1 pb-2">
               💻📱The phone number used here is used to identify your identity, and after creating the LMS account, you can access your LMS system by entering the phone number and password you used from any phone or computer in the world.
               <br>
               💻📱මෙහිදී යොදා ගන්නා දුරකථන අංකය ඔබගේ අනන්‍යතාය හඳුනා ගැනීම සඳහා යොදාගනු ලබන අතර , LMS ගිණුම සෑදීමෙන් පසුව ලෝකයේ ඇති ඕනෑම දුරකථනයකින් හෝ පරිඝනකයකින් ඔබ යොදන ලද දුරකථන අංකය සහ මුරපදය ඇතුලත් කර ඔබගේ LMS පද්ධතියට පිවිසිය හැක.
            </p>
            <p class="font-12 fw-500   text-dark   pt-1 pb-2">
               📲 Only one phone number can be used to create one LMS account. If there is another student, another LMS account should be created, and use a different phone number for that.
               <br>
               📲 එක් LMS ගිණුමක් සෑදීම සඳහා භාවිතා කළ හැක්කේ එක් දුරකථන අංකයක් පමණි. තවත් දරුවෙකු සිටීනම් තවත් LMS ගිණුමක් සෑදිය යුතු අතර ඒ සඳහා වෙනත් දුරකථන අංකයක් භාවිතා කරන්න.                            
            </p>
         </div>
         <div class="col-12 pt-4">
           
                @if(isset($status) && $status == 'error')
                 <div class="row justify-content-between align-items-center">
               <div class="col-lg-4 col-sm-6 col-12">
            

         <form action="{{ route('web.otp_verify') }}" method="POST">
               @csrf
                  <div class="mb-2">
                    <label class="form-label font-14 fw-bold text-purple  mb-0">OTP</label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark" name="user_otp" pattern="[0-9]{4}" maxlength="4">
                  </div>

               <div id="verifyOTP"> 
                <input type="hidden" name="otp" value={{ $otp }}>
                <input type="hidden" name="grade" value={{ $grade }}>
                <input type="hidden" name="subject_list" value="{{ $subjectList }}">
                <input type="hidden" name="phone_number" value="{{ $phone }}">
                <button type="submit" class="btn font-13   text-white gradient-background-1 py-2 px-5 " >
                    Verify OTP</button>

                    <p class="font-12 fw-500   text-dark   pt-1 pb-2">⚠️ OTP ඉලක්කම් 4 ඇතුලත් කර මෙහි දැක්වෙන Verify OTP බොත්තම අනිවාර්යයෙන්ම Click කරන්න.</p>
                    <p class="font-12 fw-500   text-dark   pt-1 pb-2">⚠️ Enter the 4 OTP digits and definitely click the Verify OTP button shown here.</p>
               </div>


               </form>
               
                  <form action="{{  route('web.register.step4Post') }}" method="POST">
                  @csrf
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple mb-0">Phone Number </label>
                        <div class="input-group">
                           <span class="input-group-text">+94</span>
                           <input type="text" name="phone_number" value="{{ $phone }}" id="phoneNumber" class="form-control fw-500 rounded-3 border-dark" oninput="validatePhoneNumber(this)" maxlength="10" placeholder="07XXXXXXXX">
                        </div>
                        
                        <input type="hidden" name="subject_list" value="{{ $subjectList }}">
                        <small id="phoneError" class="text-danger d-none">Phone number must start with 7 and be 9 digits long.</small>
                     </div>
                     <button type="submit" id="sendOtpBtn" class="btn font-13 text-white gradient-background-1 py-2 px-5">Resend OTP</button>
                </form>
               </div>

               @elseif(isset($status) && $status == 'success')
            <div class="row justify-content-center align-items-center">
               <div class="col-lg-4 col-sm-10 col-12 pt-lg-0 pt-sm-0 pt-3">
                 
                  <h3 class="text-center font-13">
                     <a href="{{  route('web.register.step5') }}" class="hvr-shrink text-white  bg-success px-2 py-3 justify-content-around w-100 rounded-3">
                        <div class="row align-items-center  ">
                           <div class="col-9">
                              CLICK TO VIEW STEP 05<br>පස්වන  පියවර සඳහා පිවිසෙන්න.
                           </div>
                           <div class="col-2">
                              <i class="fa-solid fa-right-long fs-4 "></i>
                           </div>
                        </div>
                     </a>
                  </h3>
               @else
                            <div class="row justify-content-between align-items-center">
               <div class="col-lg-4 col-sm-6 col-12">
            

              <form action="{{ route('web.otp_verify') }}" method="POST">
               @csrf
                  <div class="mb-2">
                    <label class="form-label font-14 fw-bold text-purple  mb-0">OTP </label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark" name="user_otp" pattern="[0-9]{4}" maxlength="4">
                  </div>

               <div id="verifyOTP"> 
                <input type="hidden" name="otp" value={{ $otp }}>
                <input type="hidden" name="grade" value={{ $grade }}>
                <input type="hidden" name="subject_list" value="{{ $subjectList }}">
                <input type="hidden" name="phone_number" value="{{ $phone }}"> 
                <button type="submit" class="btn font-13   text-white gradient-background-1 py-2 px-5 " name="user_otp" pattern="[0-9]{4}" maxlength="4">
                    Verify OTP</button>

                    <p class="font-12 fw-500   text-dark   pt-1 pb-2">⚠️ OTP ඉලක්කම් 4 ඇතුලත් කර මෙහි දැක්වෙන Verify OTP බොත්තම අනිවාර්යයෙන්ම Click කරන්න.</p>
                    <p class="font-12 fw-500   text-dark   pt-1 pb-2">⚠️ Enter the 4 OTP digits and definitely click the Verify OTP button shown here.</p>
               </div>
               </form>

               <form action="{{ route('web.register.step5') }}" method="POST">
               @csrf
               <div id="verifyOTP"> 
                 <input type="hidden" name="otp" value={{ $otp }}>
                <input type="hidden" name="grade" value={{ $grade }}>
                <input type="hidden" name="subject_list" value="{{ $subjectList }}">
                <input type="hidden" name="phone_number" value="{{ $phone }}">   
               </div>
               </form>
               
                  <form action="{{  route('web.register.step4Post') }}" method="POST">
                  @csrf
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple mb-0">Phone Number </label>
                        <div class="input-group">
                           <span class="input-group-text">+94</span>
                           <input type="text" name="phone_number" value="{{ $phone }}" id="phoneNumber" class="form-control fw-500 rounded-3 border-dark" oninput="validatePhoneNumber(this)" maxlength="10" placeholder="07XXXXXXXX">
                        </div>
                        
                        <input type="hidden" name="subject_list" value="{{ $subjectList }}">
                        <small id="phoneError" class="text-danger d-none">Phone number must start with 7 and be 9 digits long.</small>
                     </div>
                     <button type="submit" id="sendOtpBtn" class="btn font-13 text-white gradient-background-1 py-2 px-5">Resend OTP</button>
                </form>
               </div>
 
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('scripts')
{{ session('otp') }}

@if(isset($status) && isset($message))

<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: '{{ $status }}',
            title: '{{ $message }}',
            confirmButtonText: '{{ session('status') == 'success' ? 'Proceed to Step 5' : 'Try Again' }}',
            allowOutsideClick: false,
            showConfirmButton: true,

        }).then(function(result) {
            if (result.isConfirmed && '{{ $status }}' === 'success') {
                // Create a hidden form and submit it with POST method
                var form = document.createElement('form');
                form.setAttribute('method', 'POST');
                form.setAttribute('action', '{{ route('web.register.step5') }}');
                form.setAttribute('style', 'display: none;'); // Optional: Hide the form

                // Add CSRF token field
                var csrfTokenField = document.createElement('input');
                csrfTokenField.setAttribute('type', 'hidden');
                csrfTokenField.setAttribute('name', '_token');
                csrfTokenField.setAttribute('value', '{{ csrf_token() }}');
                form.appendChild(csrfTokenField);

                

                // Convert PHP array $subjectList to JavaScript array and then to JSON
                var subjectList = {!! json_encode($subjectList) !!};
                var subjectListJson = JSON.stringify(subjectList);

                var subjectListField = document.createElement('input');
                subjectListField.setAttribute('type', 'hidden');
                subjectListField.setAttribute('name', 'subject_list');
                subjectListField.setAttribute('value', subjectListJson);
                form.appendChild(subjectListField);

                var gradeField = document.createElement('input');
                gradeField.setAttribute('type', 'hidden');
                gradeField.setAttribute('name', 'grade');
                gradeField.setAttribute('value', '{{ $grade }}');
                form.appendChild(gradeField);

                

                var phoneNumberField = document.createElement('input');
                phoneNumberField.setAttribute('type', 'hidden');
                phoneNumberField.setAttribute('name', 'phone_number');
                phoneNumberField.setAttribute('value', '{{ $phone }}');
                form.appendChild(phoneNumberField);

                // Append the form to the body and submit it
                document.body.appendChild(form);
                form.submit();
            }
        });
    });
</script>



@endif
@endsection