<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>@yield('page_title')</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png')}}" />


  <!-- Custom CSS -->
  <link href="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/extra-libs/calendar/calendar.css')}}" rel="stylesheet" />


  <link href="{{ asset('dist/css/style.min.css')}}" rel="stylesheet" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@300;700&family=Moul&family=Moulpali&family=Suwannaphum:wght@300;700&display=swap" rel="stylesheet">

  @yield('style')

  <style>
    @font-face {
      font-family: font_hanuman;
      src: url('{{asset("fonts/Hanuman Version 2.00.ttf")}}');
    }

    .font-moul {
      font-family: 'Moul', cursive;
    }

    .font-moulpoli {
      font-family: 'Moulpali', cursive;
    }

    .font-sidebar {
      font-family: font_hanuman;
    }

    .font-hanuman {
      font-family: font_hanuman;
    }

    .font-size-sidebar {
      font-size: 14px;
    }

    .tb-header {
      background-color: #C0C0C0;
    }
  </style>
</head>

<body>

  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <form action="">
    <input id="getLocale" type="hidden" value="{{app()->getLocale()}}">
  </form>


  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
          <a class="navbar-brand d-none d-md-block" href="index.html">
            <b class="logo-icon ps-2">
              <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" width="25" />
            </b>
            <span class="logo-text ms-2">
              <img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="light-logo" />
            </span>
          </a>
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          <ul class=" navbar-nav float-end d-block d-md-none d-flex">
            <!-- ============================================================== -->
            <!-- Comment -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle selected-lang" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                <img style="width: 30px;" src="" alt="flag">
                <span>
                  <i class="mdi mdi-chevron-down"></i>
                </span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item second-lang" href="#">
                    <img style="width: 30px;" src="" alt="Flag"> <span class="px-2 lang-title">English</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31" />
              </a>
              <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                <a class="dropdown-item font-hanuman px-10 py-0" href="javascript:void(0)"><i class="mdi mdi-account me-1 ms-1"></i> {{__('My Profile')}}</a>
                <a class=" dropdown-item font-hanuman px-10 py-0" href="javascript:void(0)"><i class="mdi mdi-email me-1 ms-1"></i> {{__('Inbox')}}</a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout',app()->getLocale()) }}">
                  @csrf
                  <a class="dropdown-item font-hanuman" href="{{ route('logout',app()->getLocale()) }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <i class="fa fa-power-off me-1 ms-1"></i>
                    {{__('Logout')}}
                  </a>
                </form>
              </ul>
            </li>
          </ul>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div id="navbarSupportedContent" class="navbar-collapse collapse" style="background-color: blue;" data-navbarbg="skin5">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-start me-auto">
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
            </li>

            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <li class="nav-item search-box pt-1">
              <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-magnify fs-4"></i></a>
              <form class="app-search position-absolute">
                <input type="text" class="form-control" placeholder="Search &amp; enter" />
                <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
              </form>
            </li>
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-end">
            <!-- ============================================================== -->
            <!-- Comment -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle selected-lang" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img style="width: 30px;" src="" alt="flag">
                <span>
                  <i class="mdi mdi-chevron-down"></i>
                </span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li> -->
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item second-lang" href="#">
                    <img style="width: 30px;" src="" alt="Flag"> <span class="px-2 lang-title">English</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- ============================================================== -->
            <!-- End Comment -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Messages -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="font-24 mdi mdi-comment-processing"></i>
              </a>
              <ul class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    animated
                    bounceInDown
                  " aria-labelledby="2">
                <ul class="list-style-none">
                  <li>
                    <div class="">
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="
                                btn btn-success btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-calendar text-white fs-4"></i></span>
                          <div class="ms-2">
                            <h5 class="mb-0">Event today</h5>
                            <span class="mail-desc">Just a reminder that event</span>
                          </div>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="
                                btn btn-info btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-settings fs-4"></i></span>
                          <div class="ms-2">
                            <h5 class="mb-0">Settings</h5>
                            <span class="mail-desc">You can customize this template</span>
                          </div>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="
                                btn btn-primary btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-account fs-4"></i></span>
                          <div class="ms-2">
                            <h5 class="mb-0">Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                          </div>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="
                                btn btn-danger btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-link fs-4"></i></span>
                          <div class="ms-2">
                            <h5 class="mb-0">Luanch Admin</h5>
                            <span class="mail-desc">Just see the my new admin!</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
              </ul>
            </li>
            <!-- ============================================================== -->
            <!-- End Messages -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31" />
              </a>
              <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                <a class="dropdown-item font-hanuman" href="javascript:void(0)"><i class="mdi mdi-account me-1 ms-1"></i> {{__('My Profile')}}</a>
                <a class="dropdown-item font-hanuman" href="javascript:void(0)"><i class="mdi mdi-email me-1 ms-1"></i> {{__('Inbox')}}</a>
                <div class="dropdown-divider"></div>

                <form method="POST" action="{{ route('logout',app()->getLocale()) }}">
                  @csrf
                  <a class="dropdown-item font-hanuman" href="{{ route('logout',app()->getLocale()) }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="fa fa-power-off me-1 ms-1"></i> {{__('Logout')}}</a>
                </form>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>


    <aside class="left-sidebar" data-sidebarbg="skin5">
      <div class="scroll-sidebar">
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link " href="{{route('home',app()->getLocale())}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu font-hanuman font-size-sidebar">{{__('Dashboard')}}</span></a>
            </li>



            <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cards"></i><span class="hide-menu font-hanuman font-size-sidebar">កម្ចី</span></a>
              <ul aria-expanded="false" class="collapse first-level">
                <!-- <li class="sidebar-item">
                  <a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-library-plus"></i><span class="hide-menu font-hanuman font-size-sidebar">បញ្ចូលថ្មី</span></a>
                </li> -->
                <li class="sidebar-item">
                  <a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-format-list-numbers"></i><span class="hide-menu font-hanuman font-size-sidebar">បញ្ជីកម្ចី</span></a>
                </li>
                <li class="sidebar-item">
                  <a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-calendar-question"></i><span class="hide-menu font-hanuman font-size-sidebar">កម្ចីផុតកំណត់</span></a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu font-hanuman font-size-sidebar">{{ __('Books') }}</span></a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="{{route('book.index',app()->getLocale())}}" class="sidebar-link"><i class="mdi mdi-format-list-numbers"></i><span class="hide-menu font-hanuman font-size-sidebar">{{__('Books List')}}</span></a>
                </li>
                <li class="sidebar-item">
                  <a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-poll-box"></i><span class="hide-menu font-hanuman font-size-sidebar">{{__('Category')}}</span></a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item {{ ((Request::is('en/user*')) || (Request::is('kh/user*')) ? 'selected' : ' ')}}">
              <a class="sidebar-link has-arrow waves-effect waves-dark {{ ((Request::is('en/user*')) || (Request::is('kh/user*')) ? 'active' : ' ')}}" href=" javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu font-hanuman font-size-sidebar">{{ __('Members') }}</span></a>
              <ul aria-expanded="false" class="collapse first-level {{ ((Request::is('en/user*')) || (Request::is('kh/user*')) ? 'in' : ' ')}}">
                <li class="sidebar-item">
                  <a href="{{route('user.index',app()->getLocale())}}" class="sidebar-link"><i class="mdi mdi-format-list-numbers"></i><span class="hide-menu font-hanuman font-size-sidebar">{{__('Members List')}}</span></a>
                </li>
                <li class="sidebar-item">
                  <a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-poll-box"></i><span class="hide-menu font-hanuman font-size-sidebar">{{__('Department')}}</span></a>
                </li>
              </ul>
            </li>
            <!-- 
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('user.index',app()->getLocale())}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu font-hanuman font-size-sidebar">បញ្ជីសមាជិក</span></a>
            </li> -->


            <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu font-hanuman font-size-sidebar">{{__('Setting')}}</span></a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-account-settings-variant"></i><span class="hide-menu font-hanuman font-size-sidebar">{{__('Role-Permission')}}</span></a>
                </li>
                <li class="sidebar-item">
                  <a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-message-settings-variant"></i><span class="hide-menu font-hanuman font-size-sidebar">{{__('System')}}</span></a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-elements.html" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu font-hanuman font-size-sidebar">{{__('Reports')}}</span></a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <div class="page-wrapper">

      @yield('content')

      <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by
        <a href="https://www.wrappixel.com">WrapPixel</a>.
      </footer>
    </div>

  </div>


  <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <!-- <script src="{{asset('dist/js/jquery.ui.touch-punch-improved.js')}}"></script> -->
  <script src="{{asset('dist/js/jquery-ui.min.js')}}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
  <!--Wave Effects -->
  <script src="{{asset('dist/js/waves.js')}}"></script>
  <!--Menu sidebar -->
  <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
  <!--Custom JavaScript -->
  <script src="{{asset('dist/js/custom.min.js')}}"></script>
  <!-- this page js -->
  <script src="{{asset('assets/libs/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>
  <script src="{{asset('dist/js/pages/calendar/cal-init.js')}}"></script>
  <script>
    var locale = $("#getLocale").val();
    var main_url = window.location.origin;
    var flag_path = main_url + "/assets/images/" + locale + ".png";
    $('.selected-lang').find('img').attr('src', flag_path);
    if (locale == 'en') {
      $('.second-lang').find('img').attr('src', main_url + "/assets/images/kh.png");
      $('.lang-title').text('Khmer');
    } else {
      $('.second-lang').find('img').attr('src', main_url + "/assets/images/en.png");
      $('.lang-title').text('English');
    }
    $(document).ready(function() {
      $('.second-lang').click(function() {
        if (locale == 'en') {
          location.replace("{{ route(Route::currentRouteName(),'kh') }}");
        } else {
          location.replace("{{ route(Route::currentRouteName(),'en') }}");
        }
      });
    });
  </script>
  @yield('script')
</body>

</html>