<!DOCTYPE html>
<html lang="en">
<head>
	<!-- New -->
  <title>{{ get_phrase('Parent').' | '.get_settings('system_title') }}</title>
    <!-- all the meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- all the css files -->
    <link rel="shortcut icon" href="{{ asset('assets/uploads/logo/'.get_settings('favicon')) }}" />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/vendors/bootstrap-5.1.3/css/bootstrap.min.css') }}"
    />

    <!--Custom css-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/css/swiper-bundle.min.css') }}"
    />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <!-- Datepicker css -->
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}" />
    <!-- Select2 css -->
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />

    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/vendors/bootstrap-icons-1.8.1/bootstrap-icons.css') }}"
    />

    <!--Toaster css-->
    <link 
      rel="stylesheet" 
      type="text/css" 
      href="{{ asset('assets/css/toastr.min.css') }}"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- Calender css -->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/calender/main.css') }}"
    />

</head>
<body>

	<div class="sidebar">
		<div class="logo-details mt-4 mb-3">
      <div class="img_wrapper">
          <img height="40px" class="" src="{{ asset('frontend/assets/image/education.png') }}" alt="" />
      </div>
    </div>
		<div class="closeIcon">
			<span>{{ get_phrase('Close') }}</span>
		</div>
		<ul class="nav-links">
			<!-- sidebar title -->
      <li class="nav-links-li {{ request()->is('parent/dashboard') ? 'showMenu':'' }}">
        <div class="iocn-link">
          <a href="{{ route('parent.dashboard') }}">
             <div class="sidebar_icon left-icon">
               <i class="fas fa-tachometer-alt "></i>
                  <span class="link_name">{{ get_phrase('Dashboard') }}</span>
                </div>
          </a>
        </div>
      </li>
			<!-- Sidebar menu -->

			<li class="nav-links-li {{ request()->is('parent/teacherlist*')||request()->is('parent/childlist*') ? 'showMenu':'' }}">
				<div class="iocn-link">
					<a href="#">
				<div class="sidebar_icon left-icon">
                                        <i class="fas fa-users "></i> <!-- FontAwesome icon for Users -->
                     <span class="link_name">{{ get_phrase('Users') }}</span>
                    </div>
					</a>
					<span class="arrow">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="4.743"
              height="7.773"
              viewBox="0 0 4.743 7.773"
            >
              <path
                id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                fill="#fff"
                opacity="1"
              />
            </svg>
          </span>
				</div>
				<ul class="sub-menu">
					<li><a class="{{ (request()->is('parent/teacherlist*')) ? 'active' : '' }}" href="{{ route('parent.teacherlist') }}"><span>{{ get_phrase('Teacher') }}</span></a></li>
          <li><a class="{{ (request()->is('parent/childlist*')) ? 'active' : '' }}" href="{{ route('parent.childlist') }}"><span>{{ get_phrase('Child') }}</span></a></li>
				</ul>
			</li>

			<li class="nav-links-li {{ request()->is('parent/attendence/list*') || request()->is('parent/routine*') || request()->is('parent/child/syllabus*')|| request()->is('parent/child/subjects*') || request()->is('student/syllabus*') ? 'showMenu':'' }}">
				<div class="iocn-link">
					<a href="#">
				 <div class="sidebar_icon left-icon">
                     <i class="fas fa-chalkboard "></i> 
                       <span class="link_name">
                        {{ get_phrase('Class') }}
                    </span>
                    </div>
					</a>
					<span class="arrow">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="4.743"
              height="7.773"
              viewBox="0 0 4.743 7.773"
            >
              <path
                id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                fill="#fff"
                opacity="1"
              />
            </svg>
          </span>
				</div>
				<ul class="sub-menu">


					<li><a class="{{ (request()->is('parent/routine*')) ? 'active' : '' }}" href="{{ route('parent.routine') }}"><span>{{ get_phrase('Class Routine') }}</span></a></li>
          <li><a class="{{ (request()->is('parent/child/subjects*')) ? 'active' : '' }}" href="{{ route('parent.subject_list') }}"><span>{{ get_phrase('Subjects') }}</span></a></li>
          <li><a class="{{ (request()->is('parent/child/syllabus*')) ? 'active' : '' }}" href="{{ route('parent.syllabus_list') }}"><span>{{ get_phrase('Syllabus') }}</span></a></li>
        </ul>
			</li>


        <li class="nav-links-li {{ (request()->is('parent/attendence/list*')) ? 'active' : '' }}">
    <div class="iocn-link">
        <a href="{{ route('parent.list_of_attendence') }}">
            <div class="sidebar_icon left-icon">
                <i class="fas fa-user-clock"></i> <!-- FontAwesome icon for Attendance -->
                <span class="link_name">
                    {{ get_phrase('Daily Attendance') }}
                </span>
            </div>
        </a>
    </div>
</li>


			<li class="nav-links-li {{ request()->is('parent/marks') || request()->is('parent/grade') ? 'showMenu':'' }}">
        <div class="iocn-link">
          <a href="#">
        <div class="sidebar_icon left-icon">
                       <i class="fas fa-graduation-cap "></i>
                         <span class="link_name">
                        {{ get_phrase('Exam') }}
                    </span>
                    </div>
          </a>
          <span class="arrow">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="4.743"
              height="7.773"
              viewBox="0 0 4.743 7.773"
            >
              <path
                id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                fill="#fff"
                opacity="1"
              />
            </svg>
          </span>
        </div>
        <ul class="sub-menu">
            <li>
                <a class="{{ (request()->is('parent/marks')) ? 'active' : '' }}" href="{{ route('parent.marks') }}"><span>{{ get_phrase('Marks') }}</span></a>
            </li>
            <li>
                <a class="{{ (request()->is('parent/grade')) ? 'active' : '' }}" href="{{ route('parent.grade_list') }}"><span>{{ get_phrase('Grades') }}</span></a>
            </li>
        </ul>
      </li>


      <li class="nav-links-li {{ request()->is('parent/fee_manager*')  ? 'showMenu':'' }}">
        <div class="iocn-link">
          <a href="#">
       <div class="sidebar_icon left-icon">
                        <i class="fas fa-money-check "></i>
                       <span class="link_name">
                        {{ get_phrase('Accounting') }}
                    </span>
                    </div>
          </a>
          <span class="arrow">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="4.743"
              height="7.773"
              viewBox="0 0 4.743 7.773"
            >
              <path
                id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                fill="#fff"
                opacity="1"
              />
            </svg>
          </span>
        </div>
        <ul class="sub-menu">
            <li>
              <a class="{{ (request()->is('parent/fee_manager*')) ? 'active' : '' }}" href="{{ route('parent.fee_manager.list') }}">
                <span>{{ get_phrase('Fee Manager') }}</span>
              </a>
            </li>
        </ul>
      </li>



      <li class="nav-links-li {{ (request()->is('parent/events/list*')) ? 'active' : '' }}">
    <div class="iocn-link">
        <a href="{{ route('parent.events.list') }}">
            <div class="sidebar_icon left-icon">
                <i class="fas fa-calendar-alt "></i> <!-- FontAwesome icon for Events -->
                <span class="link_name">
                {{ get_phrase('Events') }}
            </span>
            </div>
            
        </a>
    </div>
</li>
<li class="nav-links-li {{ (request()->is('parent/noticeboard*')) ? 'active' : '' }}">
    <div class="iocn-link">
        <a href="{{ route('parent.noticeboard.list') }}">
            <div class="sidebar_icon left-icon ">
                <i class="fas fa-bullhorn" ></i> <!-- FontAwesome icon for Noticeboard -->
                <span class="link_name">
                {{ get_phrase('Noticeboard') }}
            </span>
            </div>
            
        </a>
    </div>
</li>


      <li class="nav-links-li {{ request()->is('parent/profile*') ? 'showMenu':'' }}">
        <div class="iocn-link">
          <a href="{{ route('parent.profile') }}">
              <div class="sidebar_icon left-icon">
             <i class="fas fa-user"></i>
              <span class="link_name">{{ get_phrase('Profile') }}</span>
            </div>
          </a>
        </div>
      </li>
		</ul>
	</div>

	<section class="home-section">
      <div class="home-content">
        <div class="home-header">
          <div class="row w-100 justify-content-between align-items-center">
            <div class="col-auto">
              <div class="sidebar_menu_icon">
                <div class="menuList">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="15"
                    height="12"
                    viewBox="0 0 15 12"
                  >
                    <path
                      id="Union_5"
                      data-name="Union 5"
                      d="M-2188.5,52.5v-2h15v2Zm0-5v-2h15v2Zm0-5v-2h15v2Z"
                      transform="translate(2188.5 -40.5)"
                      fill="#6e6f78"
                    />
                  </svg>
                </div>
              </div>
            </div>


            
            <div class="col-auto">
              <div class="header-menu">
                <ul>
                               <li class="header_notification d-flex align-items-center">
                <div class="notification_icon">
                    <i class="fas fa-bell "></i>
                </div>
                <p>
                    {{ DB::table('schools')->where('id', auth()->user()->school_id)->value('title') }}
                </p>
            </li>
                  <li class="user-profile">
                    <div class="btn-group">
                      <button
                        class="btn btn-secondary dropdown-toggle"
                        type="button"
                        id="defaultDropdown"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="true"
                        aria-expanded="false"
                      >
                        <div class="">
                          <img src="{{ get_user_image(auth()->user()->id) }}" height="42px" />
                        </div>
                        <div class="px-2 text-start">
                          <span class="user-name">{{ auth()->user()->name }}</span>
                          <span class="user-title">{{ get_phrase('Parent') }}</span>
                        </div>
                      </button>
                      <ul
                        class="dropdown-menu dropdown-menu-end eDropdown-menu"
                        aria-labelledby="defaultDropdown"
                      >
                        <li class="user-profile user-profile-inner">
                          <button
                            class="btn w-100 d-flex align-items-center"
                            type="button"
                          >
                            <div class="">
                              <img
                                class="radious-5px"
                                src="{{ get_user_image(auth()->user()->id) }}"
                                height="42px"
                              />
                            </div>
                            <div class="px-2 text-start">
                              <span class="user-name">{{ auth()->user()->name }}</span>
                              <span class="user-title">{{ get_phrase('Parent') }}</span>
                            </div>
                          </button>
                        </li>

                        <li>
                          <a class="dropdown-item" href="{{route('parent.profile')}}">
                            <span>
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="13.275"
                                height="14.944"
                                viewBox="0 0 13.275 14.944"
                              >
                                <g
                                  id="user_icon"
                                  data-name="user icon"
                                  transform="translate(-1368.531 -147.15)"
                                >
                                  <g
                                    id="Ellipse_1"
                                    data-name="Ellipse 1"
                                    transform="translate(1370.609 147.15)"
                                    fill="none"
                                    stroke="#181c32"
                                    stroke-width="2"
                                  >
                                    <ellipse
                                      cx="4.576"
                                      cy="4.435"
                                      rx="4.576"
                                      ry="4.435"
                                      stroke="none"
                                    />
                                    <ellipse
                                      cx="4.576"
                                      cy="4.435"
                                      rx="3.576"
                                      ry="3.435"
                                      fill="none"
                                    />
                                  </g>
                                  <path
                                    id="Path_41"
                                    data-name="Path 41"
                                    d="M1485.186,311.087a5.818,5.818,0,0,1,5.856-4.283,5.534,5.534,0,0,1,5.466,4.283"
                                    transform="translate(-115.686 -149.241)"
                                    fill="none"
                                    stroke="#181c32"
                                    stroke-width="2"
                                  />
                                </g>
                              </svg>
                            </span>
                            {{ get_phrase('My Account') }}
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{route('parent.password', ['edit'])}}">
                            <span>
                              <svg id="Layer_1" width="13.275" height="14.944" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m6.5 16a1.5 1.5 0 1 1 -1.5 1.5 1.5 1.5 0 0 1 1.5-1.5zm3 7.861a7.939 7.939 0 0 0 6.065-5.261 7.8 7.8 0 0 0 .32-3.85l.681-.689a1.5 1.5 0 0 0 .434-1.061v-2h.5a2.5 2.5 0 0 0 2.5-2.5v-.5h1.251a2.512 2.512 0 0 0 2.307-1.52 5.323 5.323 0 0 0 .416-2.635 4.317 4.317 0 0 0 -4.345-3.845 5.467 5.467 0 0 0 -3.891 1.612l-6.5 6.5a7.776 7.776 0 0 0 -3.84.326 8 8 0 0 0 2.627 15.562 8.131 8.131 0 0 0 1.475-.139zm-.185-12.661a1.5 1.5 0 0 0 1.463-.385l7.081-7.08a2.487 2.487 0 0 1 1.77-.735 1.342 1.342 0 0 1 1.36 1.149 2.2 2.2 0 0 1 -.08.851h-1.409a2.5 2.5 0 0 0 -2.5 2.5v.5h-.5a2.5 2.5 0 0 0 -2.5 2.5v1.884l-.822.831a1.5 1.5 0 0 0 -.378 1.459 4.923 4.923 0 0 1 -.074 2.955 5 5 0 1 1 -6.36-6.352 4.9 4.9 0 0 1 1.592-.268 5.053 5.053 0 0 1 1.357.191z"/></svg>
                            </span>
                            {{ get_phrase('Change Password') }}
                          </a>
                        </li>
                        <!-- Logout Button -->
                        <li>
                            <a class="btn eLogut_btn" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span>
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14.046"
                                    height="12.29"
                                    viewBox="0 0 14.046 12.29"
                                  >
                                    <path
                                      id="Logout"
                                      d="M4.389,42.535H2.634a.878.878,0,0,1-.878-.878V34.634a.878.878,0,0,1,.878-.878H4.389a.878.878,0,0,0,0-1.756H2.634A2.634,2.634,0,0,0,0,34.634v7.023A2.634,2.634,0,0,0,2.634,44.29H4.389a.878.878,0,1,0,0-1.756Zm9.4-5.009-3.512-3.512a.878.878,0,0,0-1.241,1.241l2.015,2.012H5.267a.878.878,0,0,0,0,1.756H11.05L9.037,41.036a.878.878,0,1,0,1.241,1.241l3.512-3.512A.879.879,0,0,0,13.788,37.525Z"
                                      transform="translate(0 -32)"
                                      fill="#fff"
                                    />
                                  </svg>
                                </span>
                                {{ get_phrase('Log out') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="main_content">
            @yield('content')
            <!-- Start Footer -->
            <div class="copyright-text">
              <?php $active_session = DB::table('sessions')->where('id',  get_settings('running_session'))->value('session_title'); ?>
                <p>{{ $active_session }} &copy; <span><a class="text-info" target="_blank" href="{{ get_settings('footer_link') }}">{{ get_settings('footer_text') }}</a></span></p>
            </div>
            <!-- End Footer -->
        </div>
      </div>
      @include('modal')
    </section>


    <!--Main Jquery-->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <!--Bootstrap bundle with popper-->
    <script src="{{ asset('assets/vendors/bootstrap-5.1.3/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Datepicker js -->
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.min.js') }}"></script>
    <!-- Select2 js -->
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>

    <!--Custom Script-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Calender js -->
    <script src="{{ asset('assets/calender/main.js') }}"></script>
    <script src="{{ asset('assets/calender/locales-all.js') }}"></script>

    <!--Toaster Script-->
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>

    <!--pdf Script-->
    <script src="{{ asset('assets/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/html2pdf.bundle.min.js') }}"></script>

    <!--html2canvas Script-->
    <script src="{{ asset('assets/js/html2canvas.min.js') }}"></script>

    <script>

    "use strict";
		@if(Session::has('message'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
				toastr.success("{{ session('message') }}");
		@endif

		@if(Session::has('error'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
				toastr.error("{{ session('error') }}");
		@endif

		@if(Session::has('info'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
				toastr.info("{{ session('info') }}");
		@endif

		@if(Session::has('warning'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true
		}
				toastr.warning("{{ session('warning') }}");
		@endif
	</script>

	<script>

    "use strict";

    jQuery(document).ready(function(){
      $('input[name="datetimes"]').daterangepicker({
          timePicker: true,
          startDate: moment().startOf('day').subtract(30, 'day'),
          endDate: moment().startOf('day'),
          locale: {
         format: 'M/DD/YYYY '
        }

      });
    });

    </script>

</body>
</html>
