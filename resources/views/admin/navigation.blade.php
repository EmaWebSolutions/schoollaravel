<!DOCTYPE html>
<html lang="en">

<head>
    <!-- New -->
    <title>{{ get_phrase('Admin').' | '.get_settings('system_title') }}</title>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" />
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

    <!-- Calender css -->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/calender/main.css') }}"
    />

    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>

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
        <li class="nav-links-li {{ request()->is('admin/dashboard') ? 'showMenu':'' }}">
            <div class="iocn-link">
              <a href="{{ route('admin.dashboard') }}">
                <div class="sidebar_icon left-icon">
               <i class="fas fa-tachometer-alt "></i>
                  <span class="link_name">{{ get_phrase('Dashboard') }}</span>
                </div>
              
              </a>
            </div>
        </li>
        <!-- Sidebar menu -->
        <li class="nav-links-li {{ request()->is('admin/department*') ? 'active' : '' }}">
    <div class="iocn-link">
        <a href="{{ route('admin.department_list') }}">
            <div class="sidebar_icon left-icon">
                <i class="fas fa-building "></i> 
                <span class="link_name">{{ get_phrase('Department') }}</span>
            </div>
        </a>
    </div>
</li>

        
         
         <li class="nav-links-li {{request()->is('admin/class_list*') || request()->is('admin/routine*') || request()->is('admin/subject*') || request()->is('admin/syllabus*') ||  request()->is('admin/class_room*') ? 'showMenu':'' }}">
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
                <li><a class="{{ (request()->is('admin/class_list*')) ? 'active' : '' }}" href="{{ route('admin.class_list') }}"><span>
                            {{ get_phrase('Class List') }}
                        </span></a></li>
              
                <li><a class="{{ (request()->is('admin/subject*')) ? 'active' : '' }}" href="{{ route('admin.subject_list') }}"><span>
                            {{ get_phrase('Subjects') }}
                        </span></a></li>
                  <li><a class="{{ (request()->is('admin/class_room*')) ? 'active' : '' }}" href="{{ route('admin.class_room_list') }}"><span>
                            {{ get_phrase('Class Room') }}
                        </span></a></li>
                  <li><a class="{{ (request()->is('admin/routine*')) ? 'active' : '' }}" href="{{ route('admin.routine') }}"><span>
                            {{ get_phrase('Class Routine') }}
                        </span></a></li>
             
                <li><a class="{{ (request()->is('admin/syllabus*')) ? 'active' : '' }}" href="{{ route('admin.syllabus') }}"><span>
                            {{ get_phrase('Syllabus') }}
                        </span></a></li>
              
              
            </ul>
        </li>

        <li class="nav-links-li {{ request()->is('admin/admin*') || request()->is('admin/teacher*') || request()->is('admin/accountant*') || request()->is('admin/librarian*') || request()->is('admin/parent*') || request()->is('admin/student') || request()->is('admin/permission*') ? 'showMenu':'' }}">
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
                <li><a class="{{ (request()->is('admin/admin*')) ? 'active' : '' }}" href="{{ route('admin.admin') }}"><span>
                            {{ get_phrase('Admin') }}
                        </span></a></li>
                <li><a class="{{ (request()->is('admin/teacher*')) ? 'active' : '' }}" href="{{ route('admin.teacher') }}"><span>
                            {{ get_phrase('Teacher') }}
                        </span></a></li>
                <li><a class="{{ (request()->is('admin/accountant*')) ? 'active' : '' }}" href="{{ route('admin.accountant') }}"><span>
                            {{ get_phrase('Accountant') }}
                        </span></a></li>
                <li><a class="{{ (request()->is('admin/librarian*')) ? 'active' : '' }}" href="{{ route('admin.librarian') }}"><span>
                            {{ get_phrase('Librarian') }}
                        </span></a></li>
                  <li><a class="{{ (request()->is('admin/student')) ? 'active' : '' }}" href="{{ route('admin.student') }}"><span>
                            {{ get_phrase('Student') }}
                        </span></a></li>
                <li><a class="{{ (request()->is('admin/parent*')) ? 'active' : '' }}" href="{{ route('admin.parent') }}"><span>
                            {{ get_phrase('Parent') }}
                        </span></a></li>
              
                <li><a class="{{ (request()->is('admin/permission*')) ? 'active' : '' }}" href="{{ route('admin.teacher.permission') }}"><span>
                            {{ get_phrase('Teacher Permission') }}
                        </span></a></li>
            </ul>
        </li>


        <li class="nav-links-li {{ request()->is('admin/exam_category*') || request()->is('admin/offline_exam*') || request()->is('admin/marks') || request()->is('admin/grade') || request()->is('admin/promotion*') ? 'showMenu':'' }}">
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
                    <a class="{{ (request()->is('admin/exam_category*')) ? 'active' : '' }}" href="{{ route('admin.exam_category') }}"><span>{{ get_phrase('Exam Category') }}</span></a>
                </li>
                <li>
                    <a class="{{ (request()->is('admin/offline_exam*')) ? 'active' : '' }}" href="{{ route('admin.offline_exam') }}"><span>{{ get_phrase('Offline Exam') }}</span></a>
                </li>
                     <li>
                    <a class="{{ (request()->is('admin/grade')) ? 'active' : '' }}" href="{{ route('admin.grade_list') }}"><span>{{ get_phrase('Grades') }}</span></a>
                </li>
                <li>
                    <a class="{{ (request()->is('admin/marks')) ? 'active' : '' }}" href="{{ route('admin.marks') }}"><span>{{ get_phrase('Marks') }}</span></a>
                </li>
           
                <li>
                    <a class="{{ (request()->is('admin/promotion*')) ? 'active' : '' }}" href="{{ route('admin.promotion') }}"><span>{{ get_phrase('Promotion') }}</span></a>
                </li>
            </ul>
        </li>


        <li class="nav-links-li {{ request()->is('admin/offline_admission*') ? 'showMenu':'' }}">
            <div class="iocn-link">
                <a class="{{ (request()->is('admin/offline_admission*')) ? 'active' : '' }}" href="{{ route('admin.offline_admission.single', ['type' => 'single']) }}">
                    <div class="sidebar_icon left-icon">
                          <i class="fas fa-user-plus "></i> 
                           <span class="link_name">
                        {{ get_phrase('Admissions') }}
                    </span>
                    </div>
                   
                </a>
            </div>
        </li>

        <li class="nav-links-li {{ request()->is('admin/attendance*') ? 'active' : '' }}">
    <div class="iocn-link">
        <a href="{{ route('admin.daily_attendance') }}">
            <div class="sidebar_icon left-icon">
                <i class="fas fa-user-clock"></i> <!-- FontAwesome icon for Attendance -->
                <span class="link_name">
                    {{ get_phrase('Daily Attendance') }}
                </span>
            </div>
        </a>
    </div>
</li>


       

       
<li class="nav-links-li {{ request()->is('admin/gradebook*') ? 'active' : '' }}">
    <div class="iocn-link">
        <a href="{{ route('admin.gradebook') }}">
            <div class="sidebar_icon left-icon">
                <i class="fas fa-book-open "></i> <!-- FontAwesome icon for Gradebooks -->
                <span class="link_name">
                    {{ get_phrase('Gradebooks') }}
                </span>
            </div>
        </a>
    </div>
</li>







        <li class="nav-links-li {{ request()->is('admin/fee_manager*') || request()->is('admin/offline_payment/pending*')|| request()->is('admin/expense_category*') || request()->is('admin/expenses*') ? 'showMenu':'' }}">
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
                <li><a class="{{ (request()->is('admin/fee_manager')) ? 'active' : '' }}" href="{{ route('admin.fee_manager.list') }}"><span>
                            {{ get_phrase('Student Fee Manager') }}
                        </span></a></li>
                <li><a class="{{ (request()->is('admin/offline_payment/pending*')) ? 'active' : '' }}" href="{{ route('admin.offline_payment_pending') }}"><span>
                            {{ get_phrase('Offline Payment Request') }}
                        </span></a></li>
                  <li><a class="{{ (request()->is('admin/expense_category*')) ? 'active' : '' }}" href="{{ route('admin.expense.category_list') }}"><span>
                            {{ get_phrase('Expense Category') }}
                        </span></a></li>
                <li><a class="{{ (request()->is('admin/expenses*')) ? 'active' : '' }}" href="{{ route('admin.expense.list') }}"><span>
                            {{ get_phrase('Expense Manager') }}
                        </span></a></li>
              
            </ul>
        </li>

        @if(addon_status('online_bundles')==1 && addon_status('online_courses')==1)
        <li class="nav-links-li {{ request()->is('admin/addons/courses*') ? 'showMenu':'' }}">
            <div class="iocn-link">
                <a class="{{ (request()->is('admin/addons/courses*')) ? 'active' : '' }}" href="{{ route('admin.addons.courses') }}">
                    <div class="sidebar_icon left-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Isolation_Mode" data-name="Isolation Mode" viewBox="0 0 24 24" width="48" height="48"><path d="M11,14H5a5.006,5.006,0,0,0-5,5v5H3V19a2,2,0,0,1,2-2h6a2,2,0,0,1,2,2v5h3V19A5.006,5.006,0,0,0,11,14Z"/><path d="M8,12A6,6,0,1,0,2,6,6.006,6.006,0,0,0,8,12ZM8,3A3,3,0,1,1,5,6,3,3,0,0,1,8,3Z"/><polygon points="21 10 21 7 18 7 18 10 15 10 15 13 18 13 18 16 21 16 21 13 24 13 24 10 21 10"/></svg>
                    </div>
                    <span class="link_name">
                        {{ get_phrase('Online Courses') }}
                    </span>
                </a>
            </div>
        </li>
        @endif

        @if(addon_status('hr_management')==1)

        <?php

        $to=strtotime(date("m/d/Y"))+8600;

        $f= date('m/d/Y', strtotime("-31 days"));
        $form=strtotime(date('m/d/Y'),strtotime($f));
        ?>

        <li class="nav-links-li {{ request()->is('hr/leave_list*') || request()->is('payroll/create/payslip*') || request()->is('attendence/list*') || request()->is('payroll/list*') || request()->is('hr/user/roles*') || request()->is('hr/user/list*')  ? 'showMenu':'' }}">
            <div class="iocn-link">
                <a href="#">
                    <div class="sidebar_icon left-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 14.991 17.164">
                            <path id="Exam_Icon" data-name="Exam Icon" d="M6.331,13.015h5.83v1.716H6.331Zm0-3.433H14.66V11.3H6.331Zm0-3.433H14.66V7.866H6.331Zm9.994-3.433H12.844a2.465,2.465,0,0,0-4.7,0H4.666a1.417,1.417,0,0,0-.333.034,1.659,1.659,0,0,0-.841.472,1.723,1.723,0,0,0-.358.549A1.7,1.7,0,0,0,3,4.433V16.448a1.766,1.766,0,0,0,.491,1.219,1.659,1.659,0,0,0,.841.472,2.1,2.1,0,0,0,.333.026h11.66a1.7,1.7,0,0,0,1.666-1.716V4.433A1.7,1.7,0,0,0,16.325,2.716ZM10.5,2.5a.644.644,0,1,1-.625.644A.639.639,0,0,1,10.5,2.5Zm5.83,13.946H4.666V4.433h11.66Z" transform="translate(-3 -1)" />
                        </svg>
                    </div>
                    <span class="link_name">
                        {{ get_phrase('Human Resource') }}
                    </span>
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
                    <a class="{{ (request()->is('hr/user/roles*')) ? 'active' : '' }}" href="{{ route('hr.user_role_index') }}">
                        <span>
                            {{ get_phrase('User Roles') }}
                        </span>
                        <!-- <span class="badge bg-success m-1" style="">{{ get_phrase('Addon') }}</span> -->
                    </a>
                </li>

                <li>
                    <a class="{{ (request()->is('hr/user/list*')) ? 'active' : '' }}" href="{{ route('hr.userlist_index') }}">
                        <span>
                            {{ get_phrase('User List') }}
                        </span>
                        <!-- <span class="badge bg-success m-1" style="">{{ get_phrase('Addon') }}</span> -->
                    </a>
                </li>


                <li>
                    <a class="{{ (request()->is('attendence/list*')) ? 'active' : '' }}" href="{{ route('hr.list_of_attendence') }}">
                        <span>
                            {{ get_phrase('Take Attendence'); }}
                        </span>
                        <!-- <span class="badge bg-success m-1" style="">{{ get_phrase('Addon') }}</span> -->
                    </a>
                </li>

                <li>
                    <a class="{{ (request()->is('hr/leave_list*')) ? 'active' : '' }}" href="{{ route('hr.list_of_leaves') }}">
                        <span>
                            {{ get_phrase('Leave'); }}
                        </span>
                        <!-- <span class="badge bg-success m-1" style="">{{ get_phrase('Addon') }}</span> -->
                    </a>
                </li>
                <li>
                    <a class="{{ (request()->is('payroll/list*')) ? 'active' : '' }}" href="{{ route('hr.list_of_payrolls') }}">
                        <span>
                            {{ get_phrase('Payroll'); }}
                        </span>
                        <!-- <span class="badge bg-success m-1" style="">{{ get_phrase('Addon') }}</span> -->
                    </a>
                </li>

            </ul>
        </li>

        @endif


        <li class="nav-links-li {{ request()->is('admin/book*') || request()->is('admin/book_issue*')  ? 'showMenu':'' }}">
            <div class="iocn-link">
                <a href="#">
                     <div class="sidebar_icon left-icon">
                <i class="fas fa-book "></i> <!-- Replace with the FontAwesome icon for Library -->
                   <span class="link_name">
                        {{ get_phrase('Library') }}
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
                <li><a class="{{ (request()->is('admin/book/list')) ? 'active' : '' }}" href="{{ route('admin.book.book_list') }}"><span>
                            {{ get_phrase('Book List Manager') }}
                        </span></a></li>
                <li><a class="{{ (request()->is('admin/book_issue')) ? 'active' : '' }}" href="{{ route('admin.book_issue.list') }}"><span>
                            {{ get_phrase('Book Issue Report') }}
                        </span></a></li>
           
            </ul>
        </li>
<li class="nav-links-li {{ request()->is('admin/events/list*') ? 'active' : '' }}">
    <div class="iocn-link">
        <a href="{{ route('admin.events.list') }}">
            <div class="sidebar_icon left-icon">
                <i class="fas fa-calendar-alt "></i> <!-- FontAwesome icon for Events -->
                <span class="link_name">
                {{ get_phrase('Events') }}
            </span>
            </div>
            
        </a>
    </div>
</li>
<li class="nav-links-li {{ request()->is('admin/noticeboard*') ? 'active' : '' }}">
    <div class="iocn-link">
        <a href="{{ route('admin.noticeboard.list') }}">
            <div class="sidebar_icon left-icon ">
                <i class="fas fa-bullhorn" ></i> <!-- FontAwesome icon for Noticeboard -->
                <span class="link_name">
                {{ get_phrase('Noticeboard') }}
            </span>
            </div>
            
        </a>
    </div>
</li>



        <li class="nav-links-li {{ request()->is('admin/settings/school*') || request()->is('admin/session_manager*') || request()->is('admin/settings/payment*') || request()->is('admin/live_class_settings*') || request()->is('admin/profile*') ? 'showMenu':'' }}">
            <div class="iocn-link">
                <a href="#">
                    <div class="sidebar_icon left-icon">
                        <i class="fas fa-cog "></i>
                        <span class="link_name">
                        {{ get_phrase('Settings') }}
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
                    <a class="{{ (request()->is('admin/settings/school*')) ? 'active' : '' }}" href="{{ route('admin.settings.school') }}">
                        <span>
                            {{ get_phrase('School Settings') }}
                        </span>
                    </a>
                </li>

                   <li>
                    <a class="{{ (request()->is('admin/session_manager*')) ? 'active' : '' }}" href="{{ route('admin.settings.session_manager') }}">
                        <span>
                            {{ get_phrase('Session Manager') }}
                        </span>
                    </a>
                </li>


                <li>
                    <a class="{{ (request()->is('admin/settings/payment*')) ? 'active' : '' }}" href="{{ route('admin.settings.payment') }}">
                        <span>
                            {{ get_phrase('Payment Settings') }}
                        </span>
                    </a>
                </li>

                @if(addon_status('online_bundles')==1 && addon_status('online_live_class')==1)
                <li>
                    <a class="{{ (request()->is('admin/live_class_settings*')) ? 'active' : '' }}" href="{{ route('admin.live_class_key') }}">
                        <span>
                            {{ get_phrase('Live class'); }}
                        </span>
                        <!-- <span class="badge bg-success m-1" style="">{{ get_phrase('Addon') }}</span> -->
                    </a>
                </li>
                @endif

                <li><a class="{{ (request()->is('admin/profile*')) ? 'active' : '' }}" href="{{ route('admin.profile') }}"><span>
                        {{ get_phrase('My Account') }}
                </span></a></li>

            </ul>
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
            <!-- Include "Notification" section before "Admin" -->
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
                            <span class="user-title">{{ get_phrase('Admin') }}</span>
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
                                    <span class="user-title">{{ get_phrase('Admin') }}</span>
                                </div>
                            </button>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{route('admin.profile')}}">
                                <span>
                                    <!-- SVG Icon for My Account -->
                                </span>
                                {{ get_phrase('My Account') }}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('admin.password', ['edit'])}}">
                                <span>
                                    <!-- SVG Icon for Change Password -->
                                </span>
                                {{ get_phrase('Change Password') }}
                            </a>
                        </li>
                        
                        <li>
                            <hr class="my-0">
                        </li>

                        <!-- Logout Button -->
                        <li>
                            <a class="btn eLogut_btn" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span>
                                    <!-- SVG Icon for Logout -->
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
