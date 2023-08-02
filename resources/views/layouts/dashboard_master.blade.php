
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title> Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/backend')}}/img/favicon/favicon.ico" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/backend')}}/vendor/fonts/boxicons.css" />

    <!-- font awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/backend')}}/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/backend')}}/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/backend')}}/css/demo.css" />

       <!--DATA TABLES--->
       <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
       <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
       <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/backend')}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="{{asset('assets/backend')}}/vendor/libs/apex-charts/apex-charts.css" />


    <!--Toaster.js Cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('assets/backend')}}/vendor/js/helpers.js"></script>


    <script src="{{asset('assets/backend')}}/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{route('dashboard')}}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            {{-- <li class="{{ (request()->is('admin/cities')) ? 'active' : '' }}"> --}}
            <li class="menu-item  {{(request()->is('dashboard')) ? 'active' : ' '}}">
              <a href="{{route('dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>



            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Settings Corner</div>
              </a>
              <ul class="menu-sub">
                @if (Auth::user()->role == 'admin')
                <li class="menu-item {{(request()->is('category')) ? 'active' : ' '}}">
                    <a href="{{route('category')}}" class="menu-link">
                      <div data-i18n="Account">Upload Category</div>
                    </a>
                  </li>
                @endif

                <li class="menu-item {{(request()->is('course')) ? 'active' : ' '}}">
                  <a href="{{route('course')}}" class="menu-link ">
                    <div data-i18n="Account">Upload Course</div>
                  </a>
                </li>
                @if (Auth::user()->role == 'admin')
                <li class="menu-item {{(request()->is('trainer')) ? 'active' : ' '}}">
                    <a href="{{route('trainer')}}" class="menu-link">
                      <div data-i18n="Notifications">Upload Trainers</div>
                    </a>
                  </li>


                <li class="menu-item {{(request()->is('success/student')) ? 'active' : ' '}}">
                  <a href="{{route('success.student')}}" class="menu-link">
                    <div data-i18n="Connections">Upload Success Students</div>
                  </a>
                </li>
                <li class="menu-item {{(request()->is('partner/form')) ? 'active' : ' '}}">
                  <a href="{{route('partner.form')}}" class="menu-link">
                    <div data-i18n="Connections">Upload Partners</div>
                  </a>
                </li>
                @endif
              </ul>
            </li>


            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">All Uploaded List</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item {{(request()->is('category/list')) ? 'active' : ' '}}">
                    <a href="{{route('category.list')}}" class="menu-link">
                      <div data-i18n="Account">Category list</div>
                    </a>
                  </li>


                @if (Auth::user()->role == 'admin')
                <li class="menu-item {{(request()->is('course/list')) ? 'active' : ' '}}">
                    <a href="{{route('course.list')}}" class="menu-link">
                      <div data-i18n="Account">Course list</div>
                    </a>
                  </li>
                @else
                <li class="menu-item {{(request()->is('course/list')) ? 'active' : ' '}}">
                    <a href="{{route('course.list')}}" class="menu-link">
                      <div data-i18n="Account">Your Course list</div>
                    </a>
                  </li>
                @endif

                <li class="menu-item {{(request()->is('trainer/list')) ? 'active' : ' '}}">
                  <a href="{{route('trainer.list')}}" class="menu-link">
                    <div data-i18n="Notifications">Trainers List</div>
                  </a>
                </li>
                <li class="menu-item {{(request()->is('partner/list')) ? 'active' : ' '}}">
                  <a href="{{route('partner.list')}}" class="menu-link">
                    <div data-i18n="Notifications">Partners List</div>
                  </a>
                </li>
                <li class="menu-item {{request()->is('success/student/list') ? 'active' : ' '}}">
                  <a href="{{route('success.student.list')}}" class="menu-link">
                    <div data-i18n="Connections">Students List</div>
                  </a>
                </li>
                @if (Auth::user()->role == 'admin')
                <li class="menu-item {{(request()->is('user/list')) ? 'active' : ' '}}">
                    <a href="{{route('user.list')}}" class="menu-link">
                      <div data-i18n="Connections">Users List</div>
                    </a>
                  </li>
                @endif


              </ul>
            </li>

            <!---Notice Corner--->
            <li class="menu-item">
                <a href="" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                  <div data-i18n="Misc">Notice Corner</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item {{request()->is('notice/form') ? 'active' : ' ' }}">
                    <a href="{{route('notice.form')}}" class="menu-link">
                      <div data-i18n="Under Maintenance">Upload Notice</div>
                    </a>
                  </li>
                <li class="menu-item {{request()->is('notice/all') ? 'active' : ' ' }}">
                    <a href="{{route('notice.all')}}" class="menu-link">
                      <div data-i18n="Under Maintenance">All Notice List</div>
                    </a>
                  </li>
                  <li class="menu-item {{request()->is('notice/recyclebin/all') ? 'active' : ' ' }}">
                    <a href="{{route('notice.recyclebin.all')}}" class="menu-link">
                      <div data-i18n="Under Maintenance">Recycle Bin Notice</div>
                    </a>
                  </li>
                </ul>
              </li>
            <!---Notice Corner--->

            <!--Admin Corner-->
            @if (Auth::user()->role == 'admin')
            <li class="menu-item">
                <a href="" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                  <div data-i18n="Misc">Admin Corner</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item {{request()->is('user/add') ? 'active' : ' ' }}">
                    <a href="{{route('user.add')}}" class="menu-link">
                      <div data-i18n="Under Maintenance">Add User</div>
                    </a>
                  </li>

                  <li class="menu-item {{request()->is('user/all/post/list') ? 'active' : ' ' }}">
                    <a href="{{route('user.all.post.list')}}" class="menu-link">
                      <div data-i18n="Under Maintenance">All Course Post List</div>
                    </a>
                  </li>
                  <li class="menu-item {{request()->is('user/pending/post/list') ? 'active' : ' ' }}">
                    <a href="{{route('user.pending.post.list')}}" class="menu-link">
                      <div data-i18n="Under Maintenance">Pending Post</div>
                    </a>
                  </li>
                  <li class="menu-item {{request()->is('user/approve/post/list') ? 'active' : ' ' }}">
                    <a href="{{route('user.approve.post.list')}}" class="menu-link">
                      <div data-i18n="Under Maintenance">Approve Post</div>
                    </a>
                  </li>

                  <li class="menu-item">
                    <hr> <hr>
                  </li>
                  <li class="menu-item {{request()->is('notice/all/admin') ? 'active' : ' ' }}">
                    <a href="{{route('notice.all.admin')}}" class="menu-link">
                      <div data-i18n="Under Maintenance">All Notice List</div>
                    </a>
                  </li>
                  <li class="menu-item {{request()->is('notice/approve/list') ? 'active' : ' ' }}">
                    <a href="{{route('notice.approve.list')}}" class="menu-link">
                      <div data-i18n="Under Maintenance">Approve Notice</div>
                    </a>
                  </li>
                  <li class="menu-item {{request()->is('notice/pending/list') ? 'active' : ' ' }}">
                    <a href="{{route('notice.pending.list')}}" class="menu-link">
                      <div data-i18n="Under Maintenance">Pending Notice</div>
                    </a>
                  </li>
                  {{-- <li class="menu-item {{request()->is('notice/reject/list') ? 'active' : ' ' }}">
                    <a href="{{route('notice.reject.list')}}" class="menu-link">
                      <div data-i18n="Under Maintenance">Reject Notice</div>
                    </a>
                  </li> --}}




                </ul>
              </li>
            @endif
            <!--Admin Corner-->





            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
            <!-- Cards -->
            <li class="menu-item">
              <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Cards</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">




                <div class="btn-group">
                    {{-- <button type='button' class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell text-primary" aria-hidden="true"></i>
                    </button> --}}
                    <button type="button" class="btn btn-primary position-relative dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell text-white" aria-hidden="true"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                          10
                          <span class="visually-hidden">unread messages</span>
                        </span>
                      </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Registration.... <sup class="text-danger">2</sup></a></li>
                    </ul>
                  </div>
              <!-- Search -->
              {{-- <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div> --}}
              <!-- /Search -->



              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                {{-- <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li> --}}








                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ Avatar::create(Auth()->user()->name)->toBase64() }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                                <img src="{{ Avatar::create(Auth()->user()->name)->toBase64() }}" class="w-px-40 h-auto rounded-circle" />
                              {{-- <img src="{{asset('assets/backend')}}/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" /> --}}
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{Auth()->user()->name}}</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle" id="status"><b></b></span> <!----check online--->
                      </a>
                    </li>
                     {{-- <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        @if ($user->isOnline())
                        <span class="align-middle text-primary" id="">Online</span>
                        @else
                        <span class="align-middle text-danger" id="">Offline</span>
                        @endif
                      </a>
                    </li> --}}

                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>

                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                              </a>
                        </form>

                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->

          @yield('content')

  <!-- Footer -->
  <footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">
        ©
        <script>
          document.write(new Date().getFullYear());
        </script>
        , Develop ❤️ by
        <a href="#" target="_blank" class="footer-link fw-bolder">Sanjoy Kundu</a>
      </div>
      <div>
      </div>
    </div>
  </footer>
  <!-- / Footer -->

  <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->
{{--
<div class="buy-now">
<a
href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
target="_blank"
class="btn btn-danger btn-buy-now"
>Upgrade to Pro</a
>
</div> --}}

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->



<script src="{{asset('assets')}}/custom.js"></script>
<script src="{{asset('assets')}}/customdatatable.js"></script>
<script src="{{asset('assets/backend')}}/vendor/libs/jquery/jquery.js"></script>
<script src="{{asset('assets/backend')}}/vendor/libs/popper/popper.js"></script>
<script src="{{asset('assets/backend')}}/vendor/js/bootstrap.js"></script>
<script src="{{asset('assets/backend')}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{asset('assets/backend')}}/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('assets/backend')}}/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{asset('assets/backend')}}/js/main.js"></script>

<!-- Page JS -->
<script src="{{asset('assets/backend')}}/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script> --}}



<!---Toaster.js Cdn link----->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

