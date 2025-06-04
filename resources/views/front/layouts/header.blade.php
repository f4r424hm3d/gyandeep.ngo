<!DOCTYPE html>
<html lang="en">

<head>
  <!--Meta Tag Seo-->
  @stack('seo_meta_tag')
  @stack('pagination_tag')

  <!-- libraries CSS -->
  <link rel="stylesheet" href="{{ url('front') }}/assets/icon/flaticon_charitics.css">
  <link rel="stylesheet" href="{{ url('front') }}/assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('front') }}/assets/vendor/splide/splide.min.css">
  <link rel="stylesheet" href="{{ url('front') }}/assets/vendor/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="{{ url('front') }}/assets/vendor/slim-select/slimselect.css">
  <link rel="stylesheet" href="{{ url('front') }}/assets/vendor/animate-wow/animate.min.css">
  <link rel="stylesheet" href="{{ url('front') }}/assets/vendor/flatpickr/flatpickr.min.css">

  <!-- custom CSS -->
  <link rel="stylesheet" href="{{ url('front') }}/assets/css/style.css">
  @stack('breadcrumb_schema')
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5Z6TXLDR');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5Z6TXLDR" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="preloader" id="preloader">
    <div class="loader"></div>
  </div>

  <!-- SIDEBAR SECTION START -->
  <div class="ul-sidebar">
    <!-- header -->
    <div class="ul-sidebar-header">
      <div class="ul-sidebar-header-logo">
        <a href="{{ route('home') }}">
          <img src="{{ asset('front') }}/assets/img/updated-logo.png" alt="logo" class="logo">
        </a>
      </div>
      <!-- sidebar closer -->
      <button class="ul-sidebar-closer"><i class="flaticon-close"></i></button>
    </div>

    <div class="ul-sidebar-header-nav-wrapper d-block d-lg-none"></div>

    <!-- sidebar footer -->
    <div class="ul-sidebar-footer">
      <span class="ul-sidebar-footer-title">Follow us</span>

      <div class="ul-sidebar-footer-social">
        <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
        <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
        <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
        <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
      </div>
    </div>
  </div>
  <!-- SIDEBAR SECTION END -->

  <!-- SEARCH MODAL SECTION START -->
  <div class="ul-search-form-wrapper flex-grow-1 flex-shrink-0">
    <button class="ul-search-closer"><i class="flaticon-close"></i></button>

    <form action="#" class="ul-search-form">
      <div class="ul-search-form-right">
        <input type="search" name="search" id="ul-search" placeholder="Search Here">
        <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
      </div>
    </form>
  </div>
  <!-- SEARCH MODAL SECTION END -->

  <!-- HEADER SECTION START -->
  <header class="ul-header">
    <div class="ul-header-bottom to-be-sticky">
      <div class="ul-header-bottom-wrapper ul-header-container">
        <div class="logo-container">
          <a href="{{ route('home') }}" class="d-inline-block">
            <h5 class="main-logo"> <img src="{{ asset('front') }}/assets/img/plant.png" alt=""></h5>
          </a>
        </div>

        <!-- header nav -->
        <div class="ul-header-nav-wrapper">
          <div class="to-go-to-sidebar-in-mobile">
            <nav class="ul-header-nav">
              <a href="{{ route('home') }}" role="button">Home</a>
              <a href="{{ route('about') }}">About</a>
              <!-- <div class="has-sub-menu">
                <a href="{{ route('about') }}">About</a>

                <div class="ul-header-submenu">
                  <ul>
                    <li><a href="{{ route('team') }}">Team</a></li>

                  </ul>
                </div>
              </div> -->

              <div class="has-sub-menu">
                <a href="{{ route('services') }}">Services</a>

                <div class="ul-header-submenu">
                  <ul>
                    <li><a href="{{ url('services') }}/service-details-one">Inclusive Special Education</a></li>
                    <li><a href="{{ url('services') }}/service-details-two">Therapy & Rehabilitation</a></li>
                    <li><a href="{{ url('services') }}/service-details-three">Vocational Skill Training</a></li>
                    <li><a href="{{ url('services') }}/service-details-four">Parental Counseling Help</a></li>
                    <li><a href="{{ url('services') }}/service-details-five">Assistive Aid Services</a></li>
                    <li><a href="{{ url('services') }}/service-details-six">Awareness & Advocacy Work</a></li>
                  </ul>
                </div>
              </div>
              <a href="{{ route('donation.details') }}">Donation</a>

              <div class="has-sub-menu">
                <a href="{{ route('events') }}">Events</a>

                <div class="ul-header-submenu">
                  <ul>

                    <li><a href="{{ route('projects') }}">Activities</a></li>
                  </ul>
                </div>
              </div>

              <!-- <a href="{{ route('mbbs.scholarship') }}">MBBS Scholorship</a> -->
              <a href="https://scholarship.gyandeep.ngo/">MBBS Scholorship</a>
              <a href="{{ route('blog') }}">Blog</a>

              <a href="{{ route('contact') }}">Contact</a>
            </nav>
          </div>
        </div>

        <!-- actions -->
        <div class="ul-header-actions">
          <button class="ul-header-search-opener"><i class="flaticon-search"></i></button>
          <a href="{{ route('contact') }}" class="ul-btn d-sm-inline-flex d-none"><i
              class="flaticon-fast-forward-double-right-arrows-symbol"></i> Join With us </a>
          <button class="ul-header-sidebar-opener d-lg-none d-inline-flex"><i class="flaticon-menu"></i></button>
        </div>
      </div>
    </div>
  </header>
  <!-- HEADER SECTION END -->
