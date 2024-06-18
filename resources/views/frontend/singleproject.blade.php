<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from silicon.createx.studio/portfolio-single-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 14:59:58 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>Corper's CDS | CDSProject</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="NYSC - Community Development Service">
    <meta name="keywords" content="Community Development Services">
    <meta name="author" content="NYSC CDS">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Theme switcher (color modes) -->
    <script src="{{ asset('assets/js/theme-switcher.js')}}"></script>

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/nysclogo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/nysclogo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/nysclogo.png')}}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{ asset('assets/img/nysclogo.png')}}" color="#6366f1">
    <link rel="shortcut icon" href="{{ asset('assets/img/nysclogo.png')}}">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}">

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/theme.min.css')}}">

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


        <header class="header navbar navbar-expand-lg bg-light navbar-sticky">
            <div class="container px-3">
                <a href="#" class="navbar-brand pe-3">
                    <img src="{{ asset('assets/img/nysclogocds.png')}}" width="400" alt="NYSC">
                    {{-- <img src="{{ asset('assets/img/nyscbiglogo.png')}}" width="400" alt="NYSC"> --}}
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
                        <a href="/login"
                            class="btn btn-primary w-100" target="_blank" rel="noopener">
                            <i class="bx bx-cart fs-4 lh-1 me-1"></i>
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
                <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/"
                    class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank" rel="noopener">
                    <i class="bx bx-cart fs-5 lh-1 me-1"></i>
                    &nbsp;Buy now
                </a>
            </div>
        </header>
        <!-- Breadcrumb -->
        <nav class="container py-4 mb-lg-2 mt-lg-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="#"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/cdsprojects">CDS Projects</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Single Project</li>
            </ol>
        </nav>


        <!-- Page title -->
        <section class="container pb-4 mb-2 mb-lg-3">
            <h1>{{ $project->title }}</h1>
            <p class="text-muted mb-0">{{ $project->state }} / {{ $project->lga }} / {{ $project->cdsname->name ?? "" }} / {{
                $project->batch }} / {{ $project->year }} </p>
        </section>


        <!-- Hero image (Parallax) -->
        <section class="jarallax" data-jarallax data-speed="0.4">
            <div class="jarallax-img"
                style="background-image: url({{ asset('corpersfiles/public/project_display_image/'. $project->image)}});"></div>
            <div class="d-none d-xxl-block" style="height: 800px;"></div>
            <div class="d-none d-lg-block d-xxl-none" style="height: 600px;"></div>
            <div class="d-none d-md-block d-lg-none" style="height: 450px;"></div>
            <div class="d-md-none" style="height: 400px;"></div>
        </section>


        <!-- About project -->
        <section class="container py-5 my-1 my-md-4 my-lg-5">
            <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                        <h2 class="h1 mb-4">About Project</h2>
                        <p class="fs-lg mb-0">
                            {!! $project->description !!}
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 offset-xl-1 border-start-lg">
                    <div class="ps-lg-4 ms-lg-3">
                        {{-- <h3 class="h5 d-flex align-items-center">
                            <i class="bx bx-help-circle text-primary fs-4 me-2"></i>
                            Challenge
                        </h3>
                        <p class="pb-4 mb-0 mb-lg-3">Ultricies massa iaculis vestibulum egestas vestibulum, cursus. Leo
                            non arcu ultricies senectus a purus sed.</p> --}}
                        <h3 class="h5 d-flex align-items-center">
                            <i class="bx bx-bulb text-primary fs-4 me-2"></i>
                            What is CDS?
                        </h3>
                        <p class="mb-0">
                            CDS is an important aspect of the National Youth Service Corps. It is a compulsory activity
                            aimed at encouraging community development, promoting national unity, and improving the
                            skills and expertise of all corps members.

                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Image grid (Parallax) -->
       


        <!-- Testimonial -->
        <section class="bg-secondary py-5">
            <div class="container py-2 py-md-4 py-lg-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="position-relative d-flex h-100">
                            <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 bg-size-cover bg-repeat-0 bg-position-center"
                                style="background-image: url({{ asset('assets/img/testimonials/03.jpg')}});"></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <figure class="card position-relative border-0 shadow-sm py-3 p-0 p-lg-4 mt-4 mb-0 ms-xl-5">
                            <span
                                class="btn btn-icon btn-primary btn-lg shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4 ms-lg-5">
                                <i class="bx bxs-quote-left"></i>
                            </span>
                            <div class="col-md-12 offset-lg-1">
                                <h2>Meet The Supervisor In Charge</h2>
                            </div>
                            <blockquote class="card-body mt-2 mb-0">
                                <p class="fs-lg">The Supervisor in charge made sure that this project is carried out effectively.</p>
                            </blockquote>
                            <figcaption class="card-footer border-0 d-sm-flex pt-0 mt-n3 mt-lg-0">
                                <div class="d-flex align-items-center border-end-sm pe-sm-4 me-sm-4">
                                    <img src="{{ asset('assets/img/avatar/05.jpg')}}" width="48" class="d-md-none rounded-circle"
                                        alt="Ralph Edwards">
                                    <div class="ps-3 ps-md-0">
                                        <h5 class="fw-semibold lh-base mb-0">Mrs Joyce</h5>
                                        <span class="fs-sm text-muted">Supervisor, Drug Free & Quality Control</span>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/img/nysclogocds.png')}}" width="160"
                                    class="d-block mt-2 ms-5 mt-sm-0 ms-sm-0" alt="Company logo">
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>


        <!-- Related projects (Carousel on narrow screens) -->
        <section class="container py-5 mt-2 mt-md-4 mt-lg-5 mb-xl-2">
            <h2 class="h1 text-center pt-2 pt-md-3 pb-4 mb-2 mb-lg-3">Project Additional Images</h2>
            <div class="swiper" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 24,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "560": {
              "slidesPerView": 2
            },
            "1000": {
              "slidesPerView": 3
            }
          }
        }'>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    @foreach($additionalimages as $img)
                    <div class="swiper-slide h-auto">
                        <div class="card card-portfolio">
                            <div class="card-img">
                                <img src="{{ asset("corpersfiles/public/project_additional_image/".$img->image) }}" alt="Image">
                            </div>
                           
                        </div>
                    </div>
                    @endforeach

                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative pt-sm-2 mt-4"></div>
            </div>
        </section>


    </main>


    <footer class="footer pt-5 pb-4 pb-lg-5 mt-2 mt-md-0 bg-secondary">
        <div class="container pt-lg-4">
            <div class="row pb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                        <img src="{{ asset('assets/img/nyscbiglogo.png')}}" width="400" alt="NYSC">
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
                            <a href="mailto:support@corperscds.com" class="fw-medium">support@corperscds.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
                &copy; All rights reserved
                <a class="nav-link d-inline-block p-0" href="#" target="_blank" rel="noopener">Corper's CDS</a>
            </p>
        </div>
    </footer>




    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    <script src="{{ asset('assets/vendor/jarallax/dist/jarallax.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/rellax/rellax.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main Theme Script -->
    <script src="{{ asset('assets/js/theme.min.js')}}"></script>
</body>

<!-- Mirrored from silicon.createx.studio/portfolio-single-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 15:00:00 GMT -->

</html>