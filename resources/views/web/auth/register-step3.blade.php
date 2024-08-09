@extends('web.layouts.app')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <style>
        /* Styling for the custom checkbox */
        .custom-checkbox {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            cursor: default; /* Disable cursor for non-interactive */
            position: relative;
        }

        .custom-checkbox::after {
            content: ''; /* Empty content */
            display: block;
            width: 10px;
            height: 5px;
            border-left: 2px solid transparent;
            border-bottom: 2px solid transparent;
            transform: rotate(-45deg);
            position: absolute;
            top: 5px;
            left: 4px;
        }

        /* Styling for the checked state */
        .custom-checkbox.checked::after {
            border-left-color: #3c8dbc; /* Adjust color as needed */
            border-bottom-color: #3c8dbc; /* Adjust color as needed */
        }
        .non_homePage{
              position: relative!important;
        }
      </style>
      <div class="row justify-content-center align-items-center">
         <div class="col-12 text-center pb-4">
            <h2 class="fw-bold font-18 fw-bolder pt-2">
               STEP 03 - CHOOSE YOUR DESIRED SUBJECTS
            </h2>
            <h2 class="fw-bold font-18 fw-bolder pt-2">
               තුන්වන පියවර - ඔබට අවශ්‍ය විෂයන් තෝරා ගන්න
            </h2>
         </div>
         <div class="col-lg-5">
            <img class="d-block w-100 mx-auto" src="{{ asset('themes/default/img/subject1.jpg') }}" alt="Guru Niwasa LMS">
         </div>
         <div class="col-lg-7 pt-lg-0 pt-3">
            <h1 class="font-16 fw-bold text-uppercase text-purple text-center pt-1">
               THERE ARE TWO METHODS TO CONDUCT CLASSES WITHIN THE INSTITUTE
            </h1>
            <h1 class="font-16 fw-bold text-uppercase text-purple text-center pt-2">
               ආයතනය තුල පන්ති මෙහෙයවන ප්‍රධාන ක්‍රමවේ ද 2ක් ඇත.
            </h1>
            <div class="bg-success-subtle rounded-3 my-3 py-3 px-4">
               <h2 class="font-15 fw-bold text-uppercase text-purple text-center">
                  01. <span class="text-danger"> ONLINE & PHYSICAL</span> - THESE CLASSES CAN BE JOINED THROUGH ZOOM AS WELL AS BY PHYSICALLY ATTENDING THEM AT THE SAME TIME.
                  <br>මෙම පන්ති සඳහා zoom ඔස්සේ මෙන්ම එම වේලාවටම ආයතනයට පැමිණ ද සම්බන්ධ විය හැක.
               </h2>
               <h2 class="font-15 fw-bold text-uppercase text-purple text-center pt-2">
                  02. ONLINE ONLY <span class="text-danger"> ONLINE & PHYSICAL</span> - ONLINE THROUGH ZOOM IS THE ONLY WAY TO JOIN.
                  මෙම පන්ති සදහා zoom ඔස්සේ පමණක් සම්බන්ධ විය හැක.
               </h2>
            </div>
            <p class="font-13 fw-500 text-dark text-center">
               THE PARTICULAR TIMETABLE WILL BE DISPLAYED AFTER SELECTING THE GRADE AND PLEASE PUT A "✅" SIGN IN FRONT OF YOUR DESIRED SUBJECT. YOU CAN ALSO WATCH THE INTRODUCTION VIDEO OF EACH TEACHER BY CLICKING THE “CLICK TO WATCH CLASS INTRO” BUTTON.
            </p>
            <p class="font-13 fw-500 text-dark text-center pt-2">
               ඔබට අදාල ශ්‍රේණිය තෝරා ගත් පසු එම ශ්‍රේණියට අදාල කාලසටහන දිස්වන අතර ඔබට අවශ්‍ය විෂයන් ඉදිරියේ "✅" ලකුණ යොදන්න. එහි ඇති CLICK TO WATCH CLASS INTRO බොත්තම ඔබා අදාල පන්තිය පිලිබඳව ගුරුවරයා විසින් සිදුකරන හඳුන්වා දීමේ වීඩියෝව නැරඹිය හැක.
            </p>
         </div>
         <form id="subjectsForm" method="POST" action="{{ route('web.register.step4') }}">
            @csrf
            <div class="row pt-4">
               <div class="col-lg-4 col-sm-6">
                  <div class="mb-2">
                     <label class="form-label font-14 fw-bold text-purple mb-0">ENTER YOUR GRADE</label>
                     <label class="form-label font-14 fw-bold text-purple mb-0">ඔබගේ ශ්‍රේණිය ඇතුලත් කරන්න</label>
                     <select class="form-select fw-500 rounded-3 border-dark font-14" aria-label="Default select example" id="gradeDropdown" required name="grade">
                        <option selected="">Grade Select</option>
                        @foreach ($grades as $grade)
                           <option value="{{ $grade['id'] }}">{{ $grade['gname'] }}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
            </div>
            <div id="subjectSec" class="d-none">
               <div id="subjectsPaidContainer"></div>
               
              <div class="row justify-content-between align-items-center pt-4 pb-3">
                  <div class="col-12">
                     <p class="font-16 fw-bold   text-dark ">
                        Free Class
                     </p>
                     <p class="font-13 fw-bold   text-dark ">
                        මෙම පන්ති ඉදිරියේ හරි ළකුණ යෙදීමට අවශ්‍ය නැත. ස්වයංක්‍රීයවම හරි ළකුණ යෙදී ඇත.
                     </p>
                     <p class="font-13 fw-bold   text-dark ">
                        මෙම පන්ති ඔබ තෝරා ගත්තද නොගත්තද ඔබ හට මෙම පන්ති වලට අදාල සියලු තොරතුරු LMS පද්ධති මඟින් පෙන්වනු ලබයි. මෙම Free Class සඳහා අවුරුද්ද මුළුල්ලේම කිසිඳු ගාස්තුවක් අයකර ගනු නොලබයි. මේ පිළිබඳ පැහැදිලි විස්තරයක් LMS ගිණුමට පිවිසුන පසු එහි මුල් පිටුවේ පහළම දක්වා ඇත.
                     </p>
                  </div>
               </div>

               <div id="subjectsFreeContainer"></div>
               <div class="row justify-content-center pt-3">
                  <div class="col-4">
                     <h3 class="text-center font-13">
                        <button type="submit" class="hvr-shrink text-white bg-success px-2 py-3 justify-content-around w-100 rounded-3">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 CLICK TO VIEW STEP 04<br>හතරවන පියවර සඳහා පිවිසෙන්න.
                              </div>
                              <div class="col-2">
                                 <i class="fa-solid fa-right-long fs-4"></i>
                              </div>
                           </div>
                        </button>
                     </h3>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection
@section('scripts')
<script>
   $(document).ready(function() {
      $('#gradeDropdown').change(function() {
         var gradeId = $(this).val();
         fetchSubjects(gradeId);
         fetchFreeSubjects(gradeId);
      });

      function fetchSubjects(gradeId) {
         $.ajax({
            url: '{{ env('API_GETWAY_URL') }}/api/v1/subjects?gid=' + gradeId + '&classType=paid',
            type: 'GET',
            success: function(response) {
               var subjects = response.data;
               var subjectsHtml = '';
               console.log(response);
               subjects.forEach(function(subject) {
                  var classType = subject.class_type === 'Online' ? 'bg-success-subtle' : 'bg-info-subtle';
                  subjectsHtml += `
                     <div class="row align-items-center pb-3">
                        <div class="col-lg-1 col-1 text-center">
                           <input class="form-check-input" style="width: 20px; height: 20px;" type="checkbox" value="${subject.id}" id="flexCheckDefault" name="selectedSubjects[]">
                        </div>
                        <div class="col-lg-2 col-sm-2 col-4">
                           <img class="d-block w-100 mx-auto rounded-circle" src="{{ asset('themes/default/img/1672228385Achintha_Sir.jpg') }}" alt="Guru Niwasa LMS">
                        </div>
                        <div class="col-lg-6 col-sm-5 col-7">
                           <p class="font-14 fw-bold pb-2 text-dark">${subject.sname} - ${subject.class_type} - ${subject.tname}</p>
                           <a href="https://youtu.be/dHltMMWmoMc" target="_blank" class="py-2 border border-danger text-dark rounded-3 px-lg-3 px-1 font-12 fw-bolder hvr-shrink">
                              <i class="fas fa-play text-danger me-2"></i> Click to Watch Intro
                           </a>
                        </div>
                        <div class="col-lg-3 col-sm-4 text-center pt-lg-0 pt-2">
                           <div class="${classType} rounded-3 py-2 px-1">
                              <p class="font-14 fw-bold pb-1 text-dark">${subject.day_normal}</p>
                              <p class="font-13 fw-500 pb-1 text-secondary">${subject.start_normal} - ${subject.end_normal}</p>
                              <p class="font-13 fw-500 pb-1 text-secondary">${subject.class_type}</p>
                           </div>
                        </div>
                     </div>
                  `;
               });
               $('#subjectsPaidContainer').html(subjectsHtml);
               $('#subjectSec').removeClass('d-none');
            },
            error: function(xhr, status, error) {
               console.error('Error fetching subjects:', error);
            }
         });
      }

      function fetchFreeSubjects(gradeId) {
         $.ajax({
            url: '{{ env('API_GETWAY_URL') }}/api/v1/subjects?gid=' + gradeId + '&classType=free',
            type: 'GET',
            success: function(response) {
               var freeSubjects = response.data;
               var freeSubjectsHtml = '';
               console.log(response);
               freeSubjects.forEach(function(subject) {
                  freeSubjectsHtml += `
                     <div class="row align-items-center pb-3">
                        <div class="col-lg-1 col-1 text-center">
                           <span class="custom-checkbox checked"></span>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-4">
                           <img class="d-block w-100 mx-auto rounded-circle" src="{{ asset('themes/default/img/1672228385Achintha_Sir.jpg') }}" alt="Guru Niwasa LMS">
                        </div>
                        <div class="col-lg-6 col-sm-5 col-7">
                           <p class="font-14 fw-bold pb-2 text-dark">${subject.sname} - ${subject.class_type} - ${subject.tname}</p>
                           <a href="https://youtu.be/dHltMMWmoMc" target="_blank" class="py-2 border border-danger text-dark rounded-3 px-lg-3 px-1 font-12 fw-bolder hvr-shrink">
                              <i class="fas fa-play text-danger me-2"></i> Click to Watch Intro
                           </a>
                        </div>
                        <div class="col-lg-3 col-sm-4 text-center pt-lg-0 pt-2">
                           <div class="bg-warning-subtle rounded-3 py-2 px-1">
                              <p class="font-14 fw-bold pb-1 text-dark">${subject.day_normal}</p>
                              <p class="font-13 fw-500 pb-1 text-secondary">${subject.start_normal} - ${subject.end_normal}</p>
                              <p class="font-13 fw-500 pb-1 text-secondary">${subject.class_type}</p>
                           </div>
                        </div>
                     </div>
                  `;
               });
               $('#subjectsFreeContainer').html(freeSubjectsHtml);
               $('#subjectSec').removeClass('d-none');
            },
            error: function(xhr, status, error) {
               console.error('Error fetching free subjects:', error);
            }
         });
      }
   });
</script>
@endsection
