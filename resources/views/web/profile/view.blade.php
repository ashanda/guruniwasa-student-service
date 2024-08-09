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
      <div class="col-lg-6 col-sm-6 text-center pt-lg-0 pt-3">
         <p class="font-17 fw-bolder text-purple">Hello, <span class="fst-italic">< Nadishan Chathuranga ></span>
         </p>
         <h1 class="font-36 fw-bold text-uppercase text-purple pt-lg-0 pt-1">MY PROFILE

         </h1>
      </div>
      <div class="col-lg-3 col-sm-3">

      </div>
   </div>
</div>




<div class="container-fluid pt-4 pb-5 px-lg-5 ">
    <div class="col-12">
       <div class="row justify-content-center">
          <div class="col-5">
             <div class="row align-items-center">
                <div class="col-3">
                   <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                      alt="Guru Niwasa LMS">
                </div>
                <div class="col-9">
                   <h3 class="font-20 fw-bold text-purple pb-1">Sadaru Nimesh (GNI00001)</h3>
                   <h3 class="font-17 fw-bold text-purple pb-1">Grade 6</h3>
                   <a href="http://localhost:8000/class/view" class="hvr-shrink text-white gradient-background-1 py-2 px-5 justify-content-around rounded-35" data-bs-toggle="modal" data-bs-target="#editProfile">
                   Edit Profile
                   </a>
                </div>
             </div>
          </div>
       </div>




<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="editProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-27 fw-bold   text-purple pt-lg-0 pt-1" >
       Edit Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">

                <div class="mb-2">
                    <label   class="form-label font-14 fw-bold text-purple  mb-0">User ID </label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark"  >
                  </div>
                <div class="mb-2">
                    <label   class="form-label font-14 fw-bold text-purple  mb-0">Name </label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark"  >
                  </div>

                <div class="mb-2">
                    <label   class="form-label font-14 fw-bold text-purple  mb-0">Grade </label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark"  >
                  </div>

                <div class="mb-2">
                    <label   class="form-label font-14 fw-bold text-purple  mb-0">Subjects </label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark"  >
                  </div>
                <div class="mb-2">
                    <label   class="form-label font-14 fw-bold text-purple  mb-0">School </label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark"  >
                  </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-2">
                    <label   class="form-label font-14 fw-bold text-purple mb-0">Address </label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark"  >
                  </div>

                  <div class="mb-2">
                    <label   class="form-label font-14 fw-bold text-purple  mb-0">District </label>

                    <select class="form-select fw-500 rounded-3 border-dark" aria-label="Default select example">
                        <option selected>Select District</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                  </div>
                  <div class="mb-2">
                    <label   class="form-label font-14 fw-bold text-purple  mb-0">Town </label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark"  >
                  </div>
                  <div class="mb-2">
                    <label   class="form-label font-14 fw-bold text-purple  mb-0">Contact No </label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark"  >
                  </div>
                  <div class="mb-2">
                    <label   class="form-label font-14 fw-bold text-purple  mb-0">Parent Contact No </label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark"  >
                  </div>


            </div>
          </div>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn   text-white gradient-background-1 py-2 px-5  ">Update Profile</button>
        </div>
      </div>
    </div>
  </div>














       <div class="row justify-content-around bg-white rounded-35 px-lg-5 py-3 mt-3 border-new">
        <div class="col-lg-6 pt-3">
        <p class="font-18 fw-500 text-purple pb-2">User ID - <b>GNI 00001</b>
        </p>
        <p class="font-18 fw-500 text-purple pb-2">Name -
            <b>Sadaru Nimesh</b>
        </p>
        <p class="font-18 fw-500 text-purple pb-2">Grade -
             <b>Grade 6</b>
        </p>
        <p class="font-18 fw-500 text-purple pb-2">Subjects -

             <a href="{{ route('web.teacher.subject')}}" class="font-14 text-dark text-decoration-underline">
                <b> CLICK TO VIEW AND EDIT SUBJECTS</b>
             </a>



        </p>

        <p class="font-18 fw-500 text-purple pb-2">School -
            <b>St. John‘s College - Nugegoda</b>
        </p>

        </div>
        <div class="col-lg-6 pt-3">

            <p class="font-18 fw-500 text-purple pb-2">Address -
                 <b>295, Nugegoda Rd, Kohuwala</b>
            </p>
            <p class="font-18 fw-500 text-purple pb-2">District -
                 <b>Colombo</b>
            </p>
            <p class="font-18 fw-500 text-purple pb-2">Town -
                <b>Kohuwala</b>
            </p>

            <p class="font-18 fw-500 text-purple pb-2">Contact No - <b>0772879970</b>
            </p>
            <p class="font-18 fw-500 text-purple pb-2">Parent Contact No - <b>0772879970</b>
            </p>
        </div>

        <div class="col-12 py-4">

            <p>
                <ins> <a data-bs-toggle="modal" data-bs-target="#changePassword"  class="text-danger font-15 fw-bolder text-uppercase">CHANGE PASSWORD</a>
                </ins>
            </p>

        </div>
      </div>
    </div>
 </div>
 </div>



<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="changePassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-27 fw-bold   text-purple pt-lg-0 pt-1" id="exampleModalLabel">Change Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label font-15 fw-500 text-purple mb-1">
                    Current Password</label>
                  <input type="email" class="form-control border-1 font-14 "  >
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label font-15 fw-500 text-purple mb-1"> Password</label>
                  <input type="password" class="form-control  border-1 font-14" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label font-15 fw-500 text-purple mb-1"> Confirm Password</label>
                    <input type="password" class="form-control  border-1 font-14" >
                  </div>

                <button type="submit" class="btn hvr-shrink text-white gradient-background-1 py-2 px-5 justify-content-around rounded-35 font-14 fw-500">Submit</button>
              </form>
        </div>

      </div>
    </div>
  </div>

@endsection
