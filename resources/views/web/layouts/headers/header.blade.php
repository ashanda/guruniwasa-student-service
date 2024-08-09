<div class="container-fluid py-2 bg-light1 {{!isset($homeHeader) ? 'non_homePage':'homePage'}}">
    <div class="row justify-content-end align-items-center">
        <div class="col-lg-4 text-lg-end text-center">
             @if(session()->has('student_data'))

                        <a class="social-button text-white hvr-wobble-bottom" href="{{ route('web.home') }}" >
                <i class="fa  fa-home font-16"></i>
                </a>

                @else
                   <a class="social-button text-white hvr-wobble-bottom" href="{{ url('/') }}" >
                <i class="fa  fa-home font-16"></i>
                </a>
                @endif

                

                <a class="social-button text-white hvr-wobble-bottom" href=" " target="_blank">
                <i class="fa  fa-phone font-16"></i>
                </a>
                <a class="social-button text-white hvr-wobble-bottom" href="" target="_blank">
                <i class="fa fa-message font-16"></i>
                </a>
                <a class="social-button text-white hvr-wobble-bottom" href=" " target="_blank">
                <i class="fa  fa-bell font-16"></i>
                </a>
                <a class="social-button text-white hvr-wobble-bottom" href="{{ route('web.profile') }}"  >
                <i class="fa  fa-user font-16"></i>
                </a>
                @if(session()->has('student_data'))
                    <!-- Logout Link -->
                        <form id="logout-form" action="{{ route('web.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="social-button text-white hvr-wobble-bottom" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out font-16"></i>
                        </a>

                @else
                   
                @endif
                
        </div>
    </div>

</div>

