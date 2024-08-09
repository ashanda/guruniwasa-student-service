@extends('web.layouts.app')

@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12">
            <h2 class="fst-italic font-18 fw-bolder text-center pb-3">STEP 04
               හතරවන පියවර
            </h2>
            <p class="font-12 fw-500 text-dark pt-1 pb-2">
               🔢 Enter the phone number that you are going to use to create the LMS account here, and definitely click the Send OTP button. Then confirm your phone number using the 4 digits mentioned in the text message you received on your phone.
               <br>
               🔢 මෙහි LMS ගිණුම සෑදීම සඳහා යොදා ගන්නා දුරකථන අංකය ඇතුලත් කර අනිවාර්යයෙන්ම Send OTP බොත්තම ක්ලික් කරන්න. පසුව ඔබගේ දුරකථනයට ලැබෙන කෙටි පණිවිඩයේ සඳහන් ඉලක්කම් 4 යොදා ඔබගේ දුරකථන අංකය තහවුරු කරන්න.
            </p>
            <p class="font-12 fw-500 text-dark pt-1 pb-2">
               💻📱The phone number used here is used to identify your identity, and after creating the LMS account, you can access your LMS system by entering the phone number and password you used from any phone or computer in the world.
               <br>
               💻📱මෙහිදී යොදා ගන්නා දුරකථන අංකය ඔබගේ අනන්‍යතාය හඳුනා ගැනීම සඳහා යොදාගනු ලබන අතර , LMS ගිණුම සෑදීමෙන් පසුව ලෝකයේ ඇති ඕනෑම දුරකථනයකින් හෝ පරිඝනකයකින් ඔබ යොදන ලද දුරකථන අංකය සහ මුරපදය ඇතුලත් කර ඔබගේ LMS පද්ධතියට පිවිසිය හැක.
            </p>
            <p class="font-12 fw-500 text-dark pt-1 pb-2">
               📲 Only one phone number can be used to create one LMS account. If there is another student, another LMS account should be created, and use a different phone number for that.
               <br>
               📲 එක් LMS ගිණුමක් සෑදීම සඳහා භාවිතා කළ හැක්කේ එක් දුරකථන අංකයක් පමණි. තවත් දරුවෙකු සිටීනම් තවත් LMS ගිණුමක් සෑදිය යුතු අතර ඒ සඳහා වෙනත් දුරකථන අංකයක් භාවිතා කරන්න.                            
            </p>
         </div>
         <div class="col-12 pt-4">
            <div class="row justify-content-between align-items-center">
               <div class="col-lg-4 col-sm-6 col-12">
                  <form action="{{  route('web.register.step4Post') }}" method="POST">
                     @csrf
                     <div class="mb-2">
                        <label class="form-label font-14 fw-bold text-purple mb-0">Phone Number </label>
                        <div class="input-group">
                           <span class="input-group-text">+94</span>
                           <input type="text" name="phone_number" id="phoneNumber" class="form-control fw-500 rounded-3 border-dark" oninput="validatePhoneNumber(this)" maxlength="10" placeholder="07XXXXXXXX">
                        </div>

                        <input type="hidden" name="grade" value="{{ $grade }}">
                        <input type="hidden" name="subject_list" value="{{ json_encode($subjectList) }}">
                        <small id="phoneError" class="text-danger d-none">Phone number must start with 7 and be 9 digits long.</small>
                     </div>
                     <button type="submit" id="sendOtpBtn" class="btn font-13 text-white gradient-background-1 py-2 px-5">Send OTP</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('phoneNumber').addEventListener('input', function() {
      validatePhoneNumber(this);
    });
  });

  function validatePhoneNumber(input) {
    // Remove non-numeric characters
    input.value = input.value.replace(/[^0-9]/g, '');

    const phoneNumber = input.value;
    const pattern = /^07[0-9]{8}$/;

    const errorElement = document.getElementById('phoneError');

    if (pattern.test(phoneNumber)) {
      errorElement.classList.add('d-none');
    } else {
      errorElement.classList.remove('d-none');
    }
  }
</script>
@endsection
