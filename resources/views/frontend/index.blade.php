<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<!-- Mirrored from NYSC.createx.studio/landing-digital-agency.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 14:59:31 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <title>Corper's CDS | HOME</title>

  <!-- SEO Meta Tags -->
  <meta name="description" content="NYSC - Community Development Service">
  <meta name="keywords"
    content="Community Development Services">
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
      
      <img src='assets/img/nysclogo.png'/><br>
      <div class="page-spinner">
      </div>
      <span>Loading...</span>
    </div>
  </div>


  <!-- Page wrapper for sticky footer -->
  <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
  <main class="page-wrapper">


    <!-- Navbar -->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
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


    <!-- Hero -->
    <section class="jarallax position-relative d-flex align-items-center min-vh-100 bg-light mb-5 py-lg-5 pt-5"
      style="background-image: url(assets/img/landing/digital-agency/hero-bg.svg);" data-jarallax
      data-img-position="0% 100%" data-speed="0.5">
      <div class="container position-relative zindex-5 py-5">
        <div class="row justify-content-md-start justify-content-center">
          <div
            class="col-md-6 col-sm-8 order-md-1 order-2 d-flex flex-column justify-content-between mt-4 pt-2 text-md-start text-center">
            <div class="mb-md-5 pb-xl-5 mb-4">

              <!-- Video popup btn -->
              <div class="d-inline-flex align-items-center position-relative mb-3">
                <a href="https://www.youtube.com/watch?v=Ot3uBPwkmYo"
                  class="btn btn-video btn-icon btn-lg flex-shrink-0 me-3 stretched-link" data-bs-toggle="video"
                  aria-label="Play video">
                  <i class="bx bx-play"></i>
                </a>
                <h4 class="mb-0">What Is CDS?</h4>
              </div>

              <!-- Text -->

              <h1 class="display-4 mb-md-5 mb-3 pb-3">
                NYSC - <span class="text-gradient-primary"> Community Development Service.</span>

              </h1>
              <div class="d-md-flex align-items-md-start">
                <a href="/register" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Register As A Corp Member</a>
                <a href="/cdsprojects" class="btn btn-lg btn-success flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">View Past CDS Projects</a>
                {{-- <p class="d-lg-block d-none mb-0 ps-md-3">CDS is an important aspect of the National Youth Service Corps. It is a compulsory activity aimed at encouraging community development, promoting national unity, and improving the skills and expertise of all corps members.</p> --}}
              </div>
            </div>

            <!-- Scroll down btn -->
            <div
              class="d-inline-flex align-items-center justify-content-center justify-content-md-start position-relative">
              <a href="#benefits" data-scroll data-scroll-offset="100"
                class="btn btn-video btn-icon rounded-circle shadow-sm flex-shrink-0 stretched-link me-3"
                aria-label="Scroll for more">
                <i class="bx bx-chevron-down"></i>
              </a>
              <span class="fs-sm">Discover more</span>
            </div>
          </div>

          <!-- Animated gfx -->
          <div class="col-sm-6 col-9 order-md-2 order-1">
            
            <img class="mx-auto" src='/assets/img/cdsproject4.jpg' style='width:100%;border-radius:20px'/>
            {{-- <lottie-player class="mx-auto" src="assets/json/animation-digital-agency.json" background="transparent.html"
              speed="1" loop autoplay>
            </lottie-player> --}}
          </div>
        </div>
      </div>
    </section>

    <section class="container pt-4 pt-lg-0 pb-4 pb-lg-5">
      <h2 class="h1 text-center pb-3 pb-md-0 mb-md-5">CDS Project Management Simplified!</h2>
      <div class="steps">
        <div class="step pt-0 pt-md-3 pb-5">
          <div class="step-number">
            <div class="step-number-inner">1</div>
          </div>
          <div class="step-body d-flex align-items-center ps-xl-5">
            <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5"
              data-rellax-speed="-0.3" data-disable-parallax-down="lg" style="transform: translate3d(15px, 33px, 0px);">
              <img src="assets/img/landing/online-courses/steps/01-dark.svg" class="d-dark-mode-none" width="306"
                alt="Illustration">
              <img src="assets/img/landing/online-courses/steps/01-light.svg" class="d-none d-dark-mode-block"
                width="306" alt="Illustration">
            </div>
            <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.4"
              data-disable-parallax-down="lg" style="transform: translate3d(3px, -5px, 0px);">
              <h3 class="h4">CDS Group Management.</h3>
              <p class="mb-0">Manage every CDS group of every year and every batch, making it easier to pass general and specific informations to every CDS group.
              </p>
            </div>
          </div>
        </div>
        <div class="step pt-0 pt-md-4 pb-5">
          <div class="step-number">
            <div class="step-number-inner">2</div>
          </div>
          <div class="step-body d-flex align-items-center ps-xl-5">
            <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5"
              data-rellax-speed="-0.5" data-disable-parallax-down="lg" style="transform: translate3d(25px, 54px, 0px);">
              <img src="assets/img/landing/online-courses/steps/02-dark.svg" class="d-dark-mode-none" width="306"
                alt="Illustration">
              <img src="assets/img/landing/online-courses/steps/02-light.svg" class="d-none d-dark-mode-block"
                width="306" alt="Illustration">
            </div>
            <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.5"
              data-disable-parallax-down="lg" style="transform: translate3d(4px, 8px, 0px);">
              <h3 class="h4">CDS Project Management</h3>
              <p class="mb-0">Here, you can find and manage the CDS project of every year and batch corp members, both personal and general CDS project.
              </p>
              <a href='/cdsprojects' class='btn btn-primary btn-sm'>See previous CDS projects</a>
                </div>
          </div>
        </div>
        <div class="step pt-0 pt-md-4 pb-5">
          <div class="step-number">
            <div class="step-number-inner">3</div>
          </div>
          <div class="step-body d-flex align-items-center ps-xl-5">
            <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5"
              data-rellax-speed="-0.3" data-disable-parallax-down="lg" style="transform: translate3d(15px, 33px, 0px);">
              <img src="assets/img/landing/online-courses/steps/03-dark.svg" class="d-dark-mode-none" width="306"
                alt="Illustration">
              <img src="assets/img/landing/online-courses/steps/03-light.svg" class="d-none d-dark-mode-block"
                width="306" alt="Illustration">
            </div>
            <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.4"
              data-disable-parallax-down="lg" style="transform: translate3d(3px, 17px, 0px);">
            
              <h3 class="h4">CDS Group Payments & Notifications</h3>
              <p class="mb-0">CDS members can now make payment stressfree, and have records of every payment. Also a notification system that notify each corp members about any payment or vital information that needs to be attended to.</p>
       
            </div>
          </div>
        </div>
        <div class="step pt-0 pt-md-4 pb-5">
          <div class="step-number">
            <div class="step-number-inner">4</div>
          </div>
          <div class="step-body d-flex align-items-center ps-xl-5">
            <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5"
              data-rellax-speed="-0.5" data-disable-parallax-down="lg" style="transform: translate3d(25px, 54px, 0px);">
              <img src="assets/img/landing/online-courses/steps/04-dark.svg" class="d-dark-mode-none" width="306"
                alt="Illustration">
              <img src="assets/img/landing/online-courses/steps/04-light.svg" class="d-none d-dark-mode-block"
                width="306" alt="Illustration">
            </div>
            <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.6"
              data-disable-parallax-down="lg" style="transform: translate3d(5px, 42px, 0px);">
              <h3 class="h4">CDS Group Certification.</h3>
              <p class="mb-0">Generate certificate of CDS involvement and verify certificate.</p>
              <a href='#' class='btn btn-primary btn-sm'>Print Certificate</a>
              <a href='#' class='btn btn-success btn-sm'>Verify CDS Certificate</a>
            </div>
          </div>
        </div>
        {{-- <div class="step pt-0 pt-md-4 pb-5">
          <div class="step-number">
            <div class="step-number-inner">5</div>
          </div>
          <div class="step-body d-flex align-items-center ps-xl-5">
            <div class="rellax d-none d-lg-block flex-shrink-0 mx-4 mx-xl-5" data-rellax-percentage="0.5"
              data-rellax-speed="-0.5" data-disable-parallax-down="lg" style="transform: translate3d(25px, 54px, 0px);">
              <img src="assets/img/landing/online-courses/steps/01-dark.svg" class="d-dark-mode-none" width="306"
                alt="Illustration">
              <img src="assets/img/landing/online-courses/steps/01-light.svg" class="d-none d-dark-mode-block"
                width="306" alt="Illustration">
            </div>
            <div class="rellax ps-md-4 ps-xl-5" data-rellax-percentage="0.5" data-rellax-speed="0.6"
              data-disable-parallax-down="lg" style="transform: translate3d(5px, 42px, 0px);">
              <h3 class="h4">Payment Disbursement.</h3>
              <p class="mb-0">Following buyer approval, NYSC-CDS takes action by promptly disbursing the agreed-upon payment to the seller for the delivered goods.</p>
            </div>
          </div>
        </div> --}}
      </div>
    </section>






    <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
      <div class="bg-secondary rounded-3 py-5 px-3 px-md-0">
        <div class="row justify-content-center mb-2 py-md-2 py-lg-4">
          <div class="col-lg-10 col-md-11">
            <h2 class="pb-3">Four Cardinal Programmes of NYSC?</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">

              <!-- Item -->
              <div class="col">
                <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-4">
                  <div class="card-body d-flex align-items-center">
                    <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24"/>
                            <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#FFFFFF" opacity="0.3"/>
                            <path d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z" id="check-path" fill="#FFFFFF"/>
                        </g>
                    </svg>
                     
                    </div>
                    <div class="ps-4 ms-lg-3">
                      <h3 class="display-10 mb-1">Orientation Camp</h3>
                      <a href='' class="mb-0">View Camp Images/Videos</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col">
                <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-4">
                  <div class="card-body d-flex align-items-center">
                    <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                      <img src="assets/img/about/icons/chat-light.svg" class="d-block m-1" width="40" alt="Icon">
                    </div>
                    <div class="ps-4 ms-lg-3">
                      <h3 class="display-10 mb-1">Primary Assignment</h3>
                      <a href='' class="mb-0">View Various PPA</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col">
                <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-4">
                  <div class="card-body d-flex align-items-center">
                    <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                      <img src="assets/img/about/icons/add-group-light.svg" class="d-block m-1" width="40" alt="Icon">
                    </div>
                    <div class="ps-4 ms-lg-3">
                      <h3 class="display-10 mb-1">Community Development Service</h3>
                      <a href='/cdsprojects' class="mb-0">View present and past CDS Projects</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col">
                <div class="card h-100 border-0 shadow-sm p-md-2 p-lg-4">
                  <div class="card-body d-flex align-items-center">
                    <div class="bg-primary shadow-primary rounded-3 flex-shrink-0 p-3">
                      <img src="assets/img/about/icons/location-light.svg" class="d-block m-1" width="40" alt="Icon">
                    </div>
                    <div class="ps-4 ms-lg-3">
                      <h3 class="display-10 mb-1">Passing Out Parade</h3>
                      <a href='#' class="mb-0">View Previous POP pictures/videos</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services -->

    {{-- <section class="container pb-5 mb-2 mb-md-4 mb-lg-5 mt-n3 mt-lg-0">
      <div class="row pt-xl-2 pb-md-3">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <h2 class="h2 text-center text-sm-start mb-4">Are you aware that, on average, 2,500 individuals fall victim to online scams every day?</h2>
          <p class="pb-2 pb-lg-4 pb-xl-5 mb-3">With 75% attributed to fake sellers/buyers. In the vast space of e-commerce, risks abound. NYSC-CDS prioritize security, offering a safe haven for your transactions, combating fraud and ensuring peace of mind.</p>
         
        </div>
        <div class="col-xl-6 col-lg-7 offset-xl-1 position-relative">

          <!-- Ticket card -->
          <div class="position-relative">
            <div class="position-relative overflow-hidden bg-gradient-primary rounded-3 zindex-5 py-5 px-4 p-sm-5">
              <span class="position-absolute top-50 start-0 translate-middle bg-light rounded-circle p-4"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 bg-repeat-0 bg-position-center-end bg-size-cover" style="background-image: url(assets/img/landing/conference/price-card-pattern.png);"></span>
              <div class="px-md-4 position-relative zindex-5">
                <div class="d-sm-flex align-items-start justify-content-between">
                  <div class="text-center text-sm-start me-sm-4">
                    <div class="lead fw-semibold text-light text-uppercase mb-2">Dear Vendor,</div>
                    <h3 class="h1 text-light">DO NOT GET SCAMMED!</h3>
                  </div>
                  <div class="d-table bg-white rounded-3 p-4 flex-shrink-0 mx-auto mx-sm-0">
                  </div>
                </div>
              
              </div>
              <span class="position-absolute top-50 end-0 translate-middle-y bg-light rounded-circle p-4 me-n4"></span>
            </div>
            <span class="position-absolute bg-gradient-primary opacity-60 bottom-0 mb-n2 d-dark-mode-none" style="left: 1.5rem; width: calc(100% - 3rem); height: 5rem; filter: blur(.625rem);"></span>
          </div>

          <!-- Arrow -->
          <div class="position-absolute bottom-0 text-primary d-none d-lg-block ms-xl-n5 mb-lg-5 mb-xl-4 pb-3">
            <div class="ms-xl-n4">
              <svg width="95" height="100" viewBox="0 0 95 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M78.8361 25.0939C91.1514 40.6379 81.8802 63.3086 61.7212 64.3539C60.7119 64.447 59.5832 64.3477 58.6105 64.2848C58.7669 50.9978 52.4534 36.5276 41.6324 32.847C31.8669 29.5776 26.5235 39.0204 30.5663 47.0383C35.4083 56.5589 43.9198 64.4699 54.2628 67.3808C53.4517 75.7446 49.4008 83.1867 40.4191 85.693C25.2817 89.8859 9.48935 75.832 7.25928 61.4938C7.12064 59.981 4.79 60.0942 4.92864 61.607C5.83171 80.8987 28.9103 96.1621 46.7792 87.3441C53.6867 83.8595 57.3887 76.5003 58.3558 68.173C69.2212 69.5612 79.5859 63.2659 85.1681 54.2081C91.5844 43.7002 88.5763 31.9764 81.257 23.1926C80.1091 21.7727 77.8441 23.7109 78.8361 25.0939ZM39.1221 52.6568C36.2753 49.3596 33.1435 45.1733 32.7276 40.635C32.275 36.2527 38.2211 36.1619 40.7539 36.5897C43.9108 37.163 46.2067 40.0025 47.9151 42.5401C51.7632 47.8805 54.3289 55.8821 54.5172 63.4926C48.5423 61.6026 43.3094 57.2542 39.1221 52.6568Z" fill="currentColor"></path><path d="M75.1096 15.0312C74.0848 19.3973 73.3354 23.9923 73.4392 28.4577C73.5047 30.2821 76.0279 30.0497 76.1186 28.2613C76.2997 24.6849 77.2976 21.1349 78.2588 17.7408C80.2501 18.3708 82.3978 19.0372 84.3528 19.8231C85.8397 20.4997 87.9238 22.1382 89.7035 21.5672C90.5937 21.2818 90.7767 20.5022 90.6474 19.6495C90.3065 17.596 87.0302 16.8302 85.3872 16.1172C82.6885 14.993 80.073 14.2174 77.2645 13.561C76.3289 13.3423 75.3292 14.0956 75.1096 15.0312Z" fill="currentColor"></path></svg>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    {{-- <section class="container mb-5 pb-lg-5 pb-md-4 pb-3">
      
      <!-- Project item -->
      <div class="row gy-4 mb-4 pb-md-3 pb-2">
        <div class="col-md-6 rellax" data-rellax-percentage="0.5" data-rellax-speed="0.5" data-disable-parallax-down="md" style="transform: translate3d(0px, 5px, 0px);">
          <div class="bg-secondary rounded-3">
            <img src="assets/img/landing/software-agency-3/projects/01.png" alt="Project image">
          </div>
        </div>
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 offset-lg-1 d-flex rellax" data-rellax-percentage="0.5" data-rellax-speed="-0.5" data-disable-parallax-down="md" style="transform: translate3d(0px, -20px, 0px);">
          <div class="align-self-center ps-lg-0 ps-md-4">
            <h4 class="mb-lg-4 mb-3 fs-base fw-normal text-body">NYSC-CDS</h4>
            <h3 class="h2 mb-lg-4 mb-3">Don't be the next victim!</h3>
            <p class="mb-lg-4 mb-3">Protect your money/goods today!</p>
         
            <ul class="mb-lg-4 mb-3 fs-sm text-muted list-inline" style="max-width: 19.125rem;">
              <li class="list-inline-item me-1">
                Funds Protection
                <span class="ms-1">/</span>
              </li>
              <li class="list-inline-item me-1">
                Goods Protection
                <span class="ms-1">/</span>
              </li>
              <li class="list-inline-item me-1">
                Buyer Protection
                <span class="ms-1">/</span>
              </li>
              <li class="list-inline-item me-1">
                Seller Protection
              </li>
            </ul>
            <a href="#" class="btn btn-lg btn-outline-primary">Learn More</a>
          </div>
        </div>
      </div>

    </section> --}}
    
    <section class="container mb-5 pb-2 pb-md-4 pb-lg-5">
      <div class="card border-0 bg-secondary p-md-5 px-sm-2 pt-4 pb-3">
        <div class="card-body mx-auto" style="max-width: 860px;">
          <h2 class="h1 mb-4 text-center">Knowledge Base</h2>

          <!-- Accordion: Alternative style -->
          <div class="accordion" id="accordion-services">

            <!-- Item -->
            <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
              <h3 class="accordion-header" id="heading-1">
                <button class="accordion-button fs-xl shadow-none rounded-3" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Can I get the pictures of the CDS Project executed during my service year?</button>
              </h3>
              <div class="accordion-collapse collapse show" id="collapse-1" aria-labelledby="heading-1"
                data-bs-parent="#accordion-services">
                <div class="accordion-body pt-0">
                  <div class="d-flex flex-md-row flex-column align-items-md-center">
                    <img src="assets/img/landing/digital-agency/services/01.png" width="200" alt="Digital Marketing"
                      class="me-md-4 mb-md-0 mb-3">
                    <div class="ps-md-3">
                      <p class="mb-0">Yes, you definately can, we keep records of every CDS project.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
              <h3 class="accordion-header" id="heading-2">
                <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true"
                  aria-controls="collapse-2">What if I lost my CDS Group certificate?</button>
              </h3>
              <div class="accordion-collapse collapse" id="collapse-2" aria-labelledby="heading-2"
                data-bs-parent="#accordion-services">
                <div class="accordion-body pt-0">
                  <div class="d-flex flex-md-row flex-column align-items-md-center">
                    <img src="assets/img/landing/digital-agency/services/02.png" width="200" alt="Web Development"
                      class="me-md-4 mb-md-0 mb-3">
                    <div class="ps-md-3">
                      <p class="mb-0">You can always retrieve your CDS group lost certificates here.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
              <h3 class="accordion-header" id="heading-3">
                <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true"
                  aria-controls="collapse-3">How can I be sure that my CDS Group are not extauting me?</button>
              </h3>
              <div class="accordion-collapse collapse" id="collapse-3" aria-labelledby="heading-3"
                data-bs-parent="#accordion-services">
                <div class="accordion-body pt-0">
                  <div class="d-flex flex-md-row flex-column align-items-md-center">
                    <img src="assets/img/landing/digital-agency/services/03.png" width="200"
                      alt="Application Development" class="me-md-4 mb-md-0 mb-3">
                    <div class="ps-md-3">
                      <p class="mb-0">For every CDS group, all levies are being specified in your dashboard, and a direct link to make payment, and for every of your payments, there is a record for future reference.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
              <h3 class="accordion-header" id="heading-4">
                <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="true"
                  aria-controls="collapse-4">What if my current employee wants to verify the authencity of my certificate?</button>
              </h3>
              <div class="accordion-collapse collapse" id="collapse-4" aria-labelledby="heading-4"
                data-bs-parent="#accordion-services">
                <div class="accordion-body pt-0">
                  <div class="d-flex flex-md-row flex-column align-items-md-center">
                    <img src="assets/img/landing/digital-agency/services/04.png" width="200" alt="Strategy"
                      class="me-md-4 mb-md-0 mb-3">
                    <div class="ps-md-3">
                      <p class="mb-0">Our portal will display the authenticity of every certificate generated by every CDS Group.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
              <h3 class="accordion-header" id="heading-5">
                <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="true"
                  aria-controls="collapse-5">What if I am doing a personal CDS?</button>
              </h3>
              <div class="accordion-collapse collapse" id="collapse-5" aria-labelledby="heading-5"
                data-bs-parent="#accordion-services">
                <div class="accordion-body pt-0">
                  <div class="d-flex flex-md-row flex-column align-items-md-center">
                    <img src="assets/img/landing/digital-agency/services/05.png" width="200" alt="Digital Advertising"
                      class="me-md-4 mb-md-0 mb-3">
                    <div class="ps-md-3">
                      <p class="mb-0">You can upload your personal CDS project pictures and videos here on our portal, and it will be accessible anytime you want it.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="container mt-2 mb-lg-2 mb-xl-4 pt-3 pt-lg-5 pb-5">
      <h2 class="text-center pb-md-2">Our Partners</h2>
      <div class="swiper mx-n2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
        data-swiper-options="{
          &quot;slidesPerView&quot;: 2,
          &quot;pagination&quot;: {
            &quot;el&quot;: &quot;.swiper-pagination&quot;,
            &quot;clickable&quot;: true
          },
          &quot;breakpoints&quot;: {
            &quot;500&quot;: {
              &quot;slidesPerView&quot;: 3,
              &quot;spaceBetween&quot;: 8
            },
            &quot;650&quot;: {
              &quot;slidesPerView&quot;: 4,
              &quot;spaceBetween&quot;: 8
            },
            &quot;900&quot;: {
              &quot;slidesPerView&quot;: 5,
              &quot;spaceBetween&quot;: 8
            },
            &quot;1100&quot;: {
              &quot;slidesPerView&quot;: 6,
              &quot;spaceBetween&quot;: 8
            }
          }
        }">
        <div class="swiper-wrapper" id="swiper-wrapper-9c1e2f59b51026414" aria-live="polite"
          style="transform: translate3d(0px, 0px, 0px);">

          <!-- Item -->
          <div class="swiper-slide py-3 swiper-slide-active" role="group" aria-label="1 / 6" style="width: 176px;">
            <a href="#" class="card card-body card-hover px-2 mx-2">
              <img src="assets/img/brands/01.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
            </a>
          </div>

          <!-- Item -->
          <div class="swiper-slide py-3 swiper-slide-next" role="group" aria-label="2 / 6" style="width: 176px;">
            <a href="#" class="card card-body card-hover px-2 mx-2">
              <img src="assets/img/brands/02.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
            </a>
          </div>

          <!-- Item -->
          <div class="swiper-slide py-3" role="group" aria-label="3 / 6" style="width: 176px;">
            <a href="#" class="card card-body card-hover px-2 mx-2">
              <img src="assets/img/brands/03.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
            </a>
          </div>

          <!-- Item -->
          <div class="swiper-slide py-3" role="group" aria-label="4 / 6" style="width: 176px;">
            <a href="#" class="card card-body card-hover px-2 mx-2">
              <img src="assets/img/brands/04.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
            </a>
          </div>

          <!-- Item -->
          <div class="swiper-slide py-3" role="group" aria-label="5 / 6" style="width: 176px;">
            <a href="#" class="card card-body card-hover px-2 mx-2">
              <img src="assets/img/brands/05.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
            </a>
          </div>

          <!-- Item -->
          <div class="swiper-slide py-3" role="group" aria-label="6 / 6" style="width: 176px;">
            <a href="#" class="card card-body card-hover px-2 mx-2">
              <img src="assets/img/brands/06.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
            </a>
          </div>
        </div>

        <!-- Pagination (bullets) -->
        <div
          class="swiper-pagination position-relative pt-2 mt-4 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
          <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
            aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 5"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
    </section>



    <!-- Blog + Contact cta -->
    <div class="bg-secondary mb-5 pt-5">


      <!-- Contact CTA -->
      <section class="container pt-3 pb-4 pb-md-5"
        style="margin-top: -156px; margin-bottom: 120px; transform: translateY(156px);">
        <div class="card border-0 bg-gradient-primary">
          <div class="card-body p-md-5 p-4 bg-size-cover"
            style="background-image: url(assets/img/landing/digital-agency/contact-bg.png);">
            <div class="py-md-5 py-4 text-center">
              <h3 class="h4 fw-normal text-light opacity-75">Want to know more? Let's talk!</h3>
              <a href="mailto:email@example.com" class="display-6 text-light">support@corperscds.com</a>
              <div class="pt-md-5 pt-4 pb-md-2">
                <a href="contacts-v1.html" class="btn btn-lg btn-light">Contact us</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>


  <!-- Footer -->
  <footer class="footer pt-5 pb-4 pb-lg-5 mt-2 mt-md-0 bg-secondary">
    <div class="container pt-lg-4">
      <div class="row pb-5">
        <div class="col-lg-4 col-md-6">
          <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
            <img src="{{ asset('assets/img/nysclogocds.png')}}" width="300" alt="NYSC">
            {{-- NYSC --}}
          </div>
          {{-- <p class="fs-sm pb-lg-3 mb-4">NYSC-CDS protects your online transaction from fraudulent activities.</p> --}}
          <form class="needs-validation" novalidate>
            <label for="subscr-email" class="form-label">Subscribe to our newsletter</label>
            <div class="input-group">
              <input type="email" id="subscr-email" class="form-control rounded-start ps-5" placeholder="Your email"
                required>
              <i
                class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
              <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email address.</div>
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
                  <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Home</a></li>
                  <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Services</a></li>
                  <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">About</a></li>
                  <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Login</a></li>
                  <li class="nav-item"><a href="/register" class="nav-link d-inline-block px-0 pt-1 pb-2">Corp Member Registration</a>
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
                  <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Facebook</a></li>
                  <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">LinkedIn</a></li>
                  <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Twitter</a></li>
                  <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Instagram</a></li>
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
  <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
  <script src="assets/vendor/%40lottiefiles/lottie-player/dist/lottie-player.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/lightgallery/lightgallery.min.js"></script>
  <script src="assets/vendor/lightgallery/plugins/video/lg-video.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/shufflejs/dist/shuffle.min.js"></script>

  <script src="assets/vendor/rellax/rellax.min.js"></script>
  <script src="assets/vendor/parallax-js/dist/parallax.min.js"></script>
  <!-- Main Theme Script -->
  <script src="assets/js/theme.min.js"></script>

</body>

<!-- Mirrored from NYSC.createx.studio/landing-digital-agency.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 14:59:38 GMT -->

</html>