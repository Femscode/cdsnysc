<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from silicon.createx.studio/account-collections.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 15:00:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>NYSC-CDS | HOME</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="NYSC - Community Development Service">
    <meta name="keywords" content="Community Development Services">
    <meta name="author" content="NYSC CDS">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Theme switcher (color modes) -->
    <script src="assets/js/theme-switcher.js"></script>

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/nysclogo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/nysclogo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/nysclogo.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/img/nysclogo.png" color="#6366f1">
    <link rel="shortcut icon" href="assets/img/nysclogo.png">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" media="screen" href="assets/vendor/lightgallery/css/lightgallery-bundle.min.css">

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">

    <!-- Page loading styles -->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        [data-bs-theme="dark"] .page-loading {
            background-color: #0b0f19;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner>span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #9397ad;
        }

        [data-bs-theme="dark"] .page-loading-inner>span {
            color: #fff;
            opacity: .6;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #b4b7c9;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        [data-bs-theme="dark"] .page-spinner {
            border-color: rgba(255, 255, 255, .4);
            border-right-color: transparent;
        }

        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>

    <!-- Page loading scripts -->
    <script>
        (function () {
          window.onload = function () {
            const preloader = document.querySelector('.page-loading');
            preloader.classList.remove('active');
            setTimeout(function () {
              preloader.remove();
            }, 1000);
          };
        })();
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
</head>


<!-- Body -->

<body>

    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;" title="Google Tag Manager"></iframe>
    </noscript>

    <!-- Page loading spinner -->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div><span>Loading...</span>
        </div>
    </div>


    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">

        <header class="header navbar navbar-expand-lg position-absolute navbar-sticky">
            <div class="container px-3">
                <a href="#" class="navbar-brand pe-3">
                    <img src="{{ asset('assets/img/nysclogocds.png')}}" width="300" alt="NYSC">
                    {{-- NYSC --}}
                </a>
                <div id="navbarNav" class="offcanvas offcanvas-end">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Legal Terms</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="#" class="nav-link">Terms & Conditions</a>
                            </li> --}}
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/register" class="dropdown-item">Corp Member Registration</a></li>
                                    <li><a href="/login" class="dropdown-item">Sign In</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas-header border-top">
                        <a href="/login" class="btn btn-primary w-100" target="_blank" rel="noopener">
                            <i class="bx bx-user fs-4 lh-1 me-1"></i>
                            &nbsp;Login
                        </a>
                    </div>
                </div>
                <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
                    <input type="checkbox" class="form-check-input" id="theme-mode">
                    <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
                    <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
                </div>
                <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="/login" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank"
                    rel="noopener">
                    <i class="bx bx-user fs-5 lh-1 me-1"></i>
                    &nbsp;Login
                </a>
            </div>
        </header>


        <!-- Page content -->
        <section class="container pt-5">
            <div class="row">


                <!-- Sidebar (User info + Account menu) -->
                <aside class="col-lg-3 col-md-4 border-end pb-5 mt-n5">
                    <div class="position-sticky top-0">
                        <div class="text-center pt-5">
                            <div class="d-table position-relative mx-auto mt-2 mt-lg-4 pt-5 mb-3">
                                <img src="assets/img/nysc1.jpeg" class="d-block rounded-circle" width="120" alt="NYSC">
                                <button type="button"
                                    class="btn btn-icon btn-light bg-white btn-sm border rounded-circle shadow-sm position-absolute bottom-0 end-0 mt-4"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Change picture"
                                    aria-label="Change picture">
                                    <i class="bx bx-refresh"></i>
                                </button>
                            </div>
                            <h2 class="h5 mb-1">Past CDS Projects</h2>
                            <p class="mb-3 pb-3">Check For CDS Project</p>
                            <button type="button" class="btn btn-secondary w-100 d-md-none mt-n2 mb-3"
                                data-bs-toggle="collapse" data-bs-target="#account-menu">
                                <i class="bx bxs-user-detail fs-xl me-2"></i>
                                Account menu
                                <i class="bx bx-chevron-down fs-lg ms-1"></i>
                            </button>
                            <form method='post' action='fetchCDSProject'>@csrf
                                <div class='row'>
                                    <div class='col'>
                                        <label>Select Year</label>
                                        <select class='form-control' name='year'>
                                            <option value='2024'>2024</option>
                                            <option value='2025'>2025</option>
                                            <option value='2026'>2026</option>
                                            <option value='2027'>2027</option>
                                            <option value='2028'>2028</option>
                                        </select>
                                    </div>
                                    <div class='col'>
                                        <label>Select Batch</label>
                                        <select class='form-control' name='batch'>
                                            <option value='Batch A'>Batch A</option>
                                            <option value='Batch B'>Batch B</option>
                                            <option value='Batch C'>Batch C</option>

                                        </select>
                                    </div>
                                </div>
                                <label>Select CDS Group</label>
                                <select name='cdsgroup' class="form-control form-control-lg" required>
                                    @foreach(\App\Models\CdsGroup::all() as $cds)
                                    <option value='{{ $cds->id }}'>{{ $cds->name }}</option>

                                    @endforeach
                                </select>
                                <input type='submit' value='Search' class='btn btn-primary' />
                            </form>
                        </div>
                    </div>
                </aside>


                <!-- Account collections -->
                <div class="col-md-8 offset-lg-1 pb-5 mb-lg-2 pt-md-5 mt-n3 mt-md-0">
                    <div class="ps-md-3 ps-lg-0 mt-md-2 pt-md-4 pb-md-2">
                        <div class="d-sm-flex align-items-center justify-content-between pt-xl-1 mb-3 pb-3">
                            <h1 class="h2 mb-sm-0">CDS Project Collections</h1>
                          
                        </div>

                        <!-- Item -->
                        @foreach($projects as $project)
                        <div class="card border-0 shadow-sm overflow-hidden mb-4">
                            <div class="row g-0">
                                <a href="#" class="col-sm-4 bg-repeat-0 bg-position-center bg-size-cover"
                                    style="background-image: url(project_display_image/{{ $project->image}}); min-height: 13rem;"
                                    aria-label="Cover image"></a>
                                <div class="col-sm-8">
                                    <div class="card-body">
                                        <div class="fs-sm text-muted mb-1">{{ $project->date }} | {{ $project->state }} | {{ $project->lga }}</div>
                                        <h2 class="h4 pb-1 mb-2">
                                            <a href="#">{{ $project->title }}</a>
                                        </h2>
                                        <p class="mb-4 mb-lg-5">{!! $project->description !!}</p>
                                        <div class="d-flex">
                                            <a href='/cdsproject/{{ $project->id }}' type="button"
                                                class="btn btn-outline-primary px-3 px-lg-4 me-3">
                                                <i class="bx bx-edit fs-xl me-xl-2"></i>
                                                <span class="d-none d-xl-inline">View Project</span>
                                            </a>
                                            <a type="button" class="btn btn-outline-secondary px-3 px-lg-4 me-3">
                                                <i class="bx bx-chat fs-xl me-xl-2"></i>
                                                <span class="d-none d-xl-inline">Message Supervisor In Charge</span>
                                            </a>
                                            {{-- <button type="button" class="btn btn-outline-danger px-3 px-lg-4">
                                                <i class="bx bx-trash-alt fs-xl me-xl-2"></i>
                                                <span class="d-none d-xl-inline">Message CDS President</span>
                                            </button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    </main>


    <footer class="footer pt-5 pb-4 pb-lg-5 mt-2 mt-md-0 bg-secondary">
        <div class="container pt-lg-4">
            <div class="row pb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                        <img src="{{ asset('assets/img/nysclogocds.png')}}" width="300" alt="NYSC">
                        {{-- NYSC --}}
                    </div>
                    {{-- <p class="fs-sm pb-lg-3 mb-4">NYSC-CDS protects your online transaction from fraudulent
                        activities.</p> --}}
                    <form class="needs-validation" novalidate>
                        <label for="subscr-email" class="form-label">Subscribe to our newsletter</label>
                        <div class="input-group">
                            <input type="email" id="subscr-email" class="form-control rounded-start ps-5"
                                placeholder="Your email" required>
                            <i
                                class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                            <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email
                                address.</div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
                    <div id="footer-links" class="row">
                        <div class="col-lg-4">
                            <h6 class="mb-2">
                                <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2"
                                    data-bs-toggle="collapse">Useful Links</a>
                            </h6>
                            <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                                <ul class="nav flex-column pb-lg-1 mb-lg-3">
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Home</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Services</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">About</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Login</a></li>
                                    <li class="nav-item"><a href="/register"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Corp Member Registration</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3">
                            <h6 class="mb-2">
                                <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2"
                                    data-bs-toggle="collapse">Socials</a>
                            </h6>
                            <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                                <ul class="nav flex-column mb-2 mb-lg-0">
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Facebook</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">LinkedIn</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Twitter</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link d-inline-block px-0 pt-1 pb-2">Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
                            <h6 class="mb-2">Contact Us</h6>
                            <a href="mailto:email@example.com" class="fw-medium">support@NYSC-CDS.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
                &copy; All rights reserved
                <a class="nav-link d-inline-block p-0" href="#" target="_blank" rel="noopener">NYSC-CDS</a>
            </p>
        </div>
    </footer>



    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Main Theme Script -->
    <script src="assets/js/theme.min.js"></script>
</body>

<!-- Mirrored from silicon.createx.studio/account-collections.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 15:00:19 GMT -->

</html>