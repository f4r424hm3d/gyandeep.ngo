@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Blog Standard</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Blog Standard</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <div class="ul-section-spacing">
      <div class="ul-container">
        <div class="row ul-bs-row gy-5 flex-column-reverse flex-md-row">
          <!-- sidebar -->
          <div class="col-lg-4 col-md-5">
            <div class="ul-inner-sidebar">
              <!-- single widget /search -->
              <div class="ul-inner-sidebar-widget ul-inner-sidebar-search">
                <h3 class="ul-inner-sidebar-widget-title">Search</h3>
                <div class="ul-inner-sidebar-widget-content">
                  <form action="#" class="ul-blog-search-form">
                    <input type="search" name="blog-search" id="ul-blog-search" placeholder="Search Here">
                    <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
                  </form>
                </div>
              </div>

              <!-- single widget / Categories -->
              <div class="ul-inner-sidebar-widget categories">
                <h3 class="ul-inner-sidebar-widget-title">Categories</h3>
                <div class="ul-inner-sidebar-widget-content">
                  <div class="ul-inner-sidebar-categories">
                    <a href="donations.html">Charity <span>(08)</span></a>
                    <a href="donations.html">Crowdfunding <span>(11)</span></a>
                    <a href="donations.html">Industries <span>(18)</span></a>
                    <a href="donations.html">Innovations <span>(11)</span></a>
                    <a href="donations.html">Technology <span>(07)</span></a>
                  </div>
                </div>
              </div>

              <!-- single widget / Recent Posts -->
              <!-- <div class="ul-inner-sidebar-widget posts">
                                                  <h3 class="ul-inner-sidebar-widget-title">Recent Posts</h3>
                                                  <div class="ul-inner-sidebar-widget-content">
                                                      <div class="ul-inner-sidebar-posts">
                                                          single post
                                                          <div class="ul-inner-sidebar-post">
                                                              <div class="img">
                                                                  <img src="{{ asset('front') }}/assets/img/blog-2.jpeg" alt="Post Image">
                                                              </div>

                                                              <div class="txt">
                                                                  <h4 class="title"><a href="blog-details.html">There are many vario ns of passages of</a></h4>
                                                                  <span class="date"> <span>May 12, 2025</span></span>
                                                              </div>
                                                          </div>

                                                          single post
                                                          <div class="ul-inner-sidebar-post">
                                                              <div class="img">
                                                                  <img src="{{ asset('front') }}/assets/img/blog-1.jpg" alt="Post Image">
                                                              </div>

                                                              <div class="txt">
                                                                  <h4 class="title"><a href="blog-details.html">There are many vario ns of passages of</a></h4>
                                                                  <span class="date"> <span>May 12, 2025</span></span>
                                                              </div>
                                                          </div>

                                                          single post
                                                          <div class="ul-inner-sidebar-post">
                                                              <div class="img">
                                                                  <img src="{{ asset('front') }}/assets/img/blog-3.jpg" alt="Post Image">
                                                              </div>

                                                              <div class="txt">
                                                                  <h4 class="title"><a href="blog-details.html">There are many vario ns of passages of</a></h4>
                                                                  <span class="date"> <span>May 12, 2025</span></span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div> -->

              <!-- single widget / Tags -->
              <div class="ul-inner-sidebar-widget tags">
                <h3 class="ul-inner-sidebar-widget-title">Tag Cloud</h3>
                <div class="ul-inner-sidebar-widget-content">
                  <div class="ul-inner-sidebar-tags">
                    <a href="donations.html">Crowdfunding</a>
                    <a href="donations.html">Innovations</a>
                    <a href="donations.html">Justice</a>
                    <a href="donations.html">Lead</a>
                    <a href="donations.html">Startup</a>
                    <a href="donations.html">Technology</a>
                    <a href="donations.html">Market</a>
                    <a href="donations.html">Court</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- left/blogs -->
          <div class="col-lg-8 col-md-7">
            <!-- blogs -->
            <div>
              <!-- single blog -->
              <div class="ul-blog ul-blog-2 ul-blog-inner">
                <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/blog-b-1.jpg" alt="Blog Image"></div>
                <div class="ul-blog-txt">
                  <div class="ul-blog-infos">
                    <!-- single info -->
                    <div class="ul-blog-info">
                      <span class="icon"><i class="flaticon-account"></i></span>
                      <span class="text">By Admin</span>
                    </div>
                    <!-- single info -->
                    <div class="ul-blog-info">
                      <span class="icon"><i class="flaticon-price-tag"></i></span>
                      <span class="text">Donation</span>
                    </div>
                  </div>
                  <a href="blog-details.html" class="ul-blog-title">Outstanding entrepreneurs and develop your
                    skills.</a>
                  <p class="ul-blog-excerpt">When to Use Lorem Ipsum generally, lorem ipsum is best suited to keeping
                    template fo looking bare or minimizing the distractions of the draft copy. Second, use lorem ipsum
                    if you think placeholder text will distracting. in voluptate velit esse. Cursus libero viverra.</p>
                  <a href="blog-details.html" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Read More</a>
                </div>
              </div>

              <!-- single blog -->
              <div class="ul-blog ul-blog-2 ul-blog-inner">
                <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/blog-b-2.jpg" alt="Blog Image"></div>
                <div class="ul-blog-txt">
                  <div class="ul-blog-infos">
                    <!-- single info -->
                    <div class="ul-blog-info">
                      <span class="icon"><i class="flaticon-account"></i></span>
                      <span class="text">By Admin</span>
                    </div>
                    <!-- single info -->
                    <div class="ul-blog-info">
                      <span class="icon"><i class="flaticon-price-tag"></i></span>
                      <span class="text">Donation</span>
                    </div>
                  </div>
                  <a href="blog-details.html" class="ul-blog-title">Best outstanding and develop your personal
                    skills.</a>
                  <p class="ul-blog-excerpt">When to Use Lorem Ipsum generally, lorem ipsum is best suited to keeping
                    template fo looking bare or minimizing the distractions of the draft copy. Second, use lorem ipsum
                    if you think placeholder text will distracting. in voluptate velit esse. Cursus libero viverra.</p>
                  <a href="blog-details.html" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Read More</a>
                </div>
              </div>

              <!-- single blog -->
              <div class="ul-blog ul-blog-2 ul-blog-inner">
                <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/blog-b-3.jpg" alt="Blog Image">
                </div>
                <div class="ul-blog-txt">
                  <div class="ul-blog-infos">
                    <!-- single info -->
                    <div class="ul-blog-info">
                      <span class="icon"><i class="flaticon-account"></i></span>
                      <span class="text">By Admin</span>
                    </div>
                    <!-- single info -->
                    <div class="ul-blog-info">
                      <span class="icon"><i class="flaticon-price-tag"></i></span>
                      <span class="text">Donation</span>
                    </div>
                  </div>
                  <a href="blog-details.html" class="ul-blog-title">Money markets rates finding the best account</a>
                  <p class="ul-blog-excerpt">When to Use Lorem Ipsum generally, lorem ipsum is best suited to keeping
                    template fo looking bare or minimizing the distractions of the draft copy. Second, use lorem ipsum
                    if you think placeholder text will distracting. in voluptate velit esse. Cursus libero viverra.</p>
                  <a href="blog-details.html" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Read More</a>
                </div>
              </div>
            </div>

            <!-- pagination -->
            <div class="ul-pagination">
              <ul>
                <li><a href="#"><i class="flaticon-back"></i></a></li>
                <li class="pages">
                  <a href="#" class="active">1</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                </li>
                <li><a href="#"><i class="flaticon-next"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER SECTION START -->
  <footer class="ul-footer">
    <div class="ul-footer-top">
      <div class="ul-footer-container">
        <div class="ul-footer-top-contact-infos">
          <!-- single info -->
          <div class="ul-footer-top-contact-info">
            <!-- icon -->
            <div class="ul-footer-top-contact-info-icon">
              <div class="ul-footer-top-contact-info-icon-inner">
                <i class="flaticon-pin"></i>
              </div>
            </div>
            <!-- txt -->
            <div class="ul-footer-top-contact-info-txt">
              <span class="ul-footer-top-contact-info-label">Address</span>
              <h5 class="ul-footer-top-contact-info-address">H.No. 538/1, Ward 7, Kirpal Colony, Dasuya, District
                Hoshiarpur, Punjab – 144205</h5>
            </div>
          </div>

          <!-- single info -->
          <div class="ul-footer-top-contact-info">
            <!-- icon -->
            <div class="ul-footer-top-contact-info-icon">
              <div class="ul-footer-top-contact-info-icon-inner">
                <i class="flaticon-email"></i>
              </div>
            </div>
            <!-- txt -->
            <div class="ul-footer-top-contact-info-txt">
              <span class="ul-footer-top-contact-info-label">Send Email</span>
              <h5 class="ul-footer-top-contact-info-address"><a href="mailto:info@gyandeep.ngo">info@gyandeep.ngo</a>
              </h5>
            </div>
          </div>

          <!-- single info -->
          <div class="ul-footer-top-contact-info">
            <!-- icon -->
            <div class="ul-footer-top-contact-info-icon">
              <div class="ul-footer-top-contact-info-icon-inner">
                <i class="flaticon-telephone-call-1"></i>
              </div>
            </div>
            <!-- txt -->
            <div class="ul-footer-top-contact-info-txt">
              <span class="ul-footer-top-contact-info-label">Call Emergency</span>
              <h5 class="ul-footer-top-contact-info-address"><a href="tel:919711908590">+919711908590</a></h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="ul-footer-middle">
      <div class="ul-footer-container">
        <div class="ul-footer-middle-wrapper wow animate__fadeInUp">
          <div class="ul-footer-about">
            <a href="{{ route('home') }}">
              <h5 class="main-logo"> <img src="{{ asset('front') }}/assets/img/plant.png" alt=""></h5>
            </a>
            <p class="ul-footer-about-txt">A registered non-profit organization committed to the welfare, education,
              and rehabilitation of differently-abled individuals</p>
            <div class="ul-footer-socials">
              <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
              <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
              <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
              <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
            </div>
          </div>

          <div class="ul-footer-widget">
            <h3 class="ul-footer-widget-title">Quick Links</h3>

            <div class="ul-footer-widget-links">
              <a href="{{ route('about') }}">About Us</a>
              <a href="{{ route('services') }}">Our Services</a>
              <a href="{{ route('blog') }}">Our Blogs</a>
              <a href="{{ route('faq') }}">FAQ’S</a>
              <a href="{{ route('contact') }}">Contact Us</a>
            </div>
          </div>

          <div class="ul-footer-widget ul-footer-recent-posts">
            <h3 class="ul-footer-widget-title">Recent Posts</h3>

            <div class="ul-blog-sidebar-posts">
              <!-- single post -->
              <div class="ul-blog-sidebar-post ul-footer-post">
                <div class="img">
                  <img src="{{ asset('front') }}/assets/img/donation-1.png" alt="Post Image">
                </div>

                <div class="txt">
                  <span class="date">
                    <span class="icon"><i class="flaticon-calendar"></i></span>
                    <span>May 12, 2025</span>
                  </span>

                  <h4 class="title"><a href="blog-details.html">Breaking Barriers with Inclusive Education.
                    </a></h4>
                </div>
              </div>

              <!-- single post -->
              <div class="ul-blog-sidebar-post ul-footer-post">
                <div class="img">
                  <img src="{{ asset('front') }}/assets/img/donation-2.jpeg" alt="Post Image">
                </div>

                <div class="txt">
                  <span class="date">
                    <span class="icon"><i class="flaticon-calendar"></i></span>
                    <span>May 12, 2025</span>
                  </span>

                  <h4 class="title"><a href="blog-details.html">How Therapy Transforms Young Lives</a></h4>
                </div>
              </div>
            </div>
          </div>

          <div class="ul-footer-widget ul-nwsltr-widget">
            <h3 class="ul-footer-widget-title">Contact Us</h3>
            <div class="ul-footer-widget-links ul-footer-contact-links">
              <a href="mailto:info@gyandeep.ngo"><i class="flaticon-mail"></i> info@gyandeep.ngo</a>
              <a href="tel:98704 06867"><i class="flaticon-telephone-call"></i> 98704 06867</a>
            </div>
            <form action="#" class="ul-nwsltr-form">
              <div class="top">
                <input type="email" name="email" id="nwsltr-email" placeholder="Your Email Address"
                  class="ul-nwsltr-input">
                <button type="submit"><i class="flaticon-next"></i></button>
              </div>

              <div class="agreement">
                <label for="nwsltr-agreement" class="ul-checkbox-wrapper">
                  <input type="checkbox" name="agreement" id="nwsltr-agreement" hidden>
                  <span class="ul-checkbox"><i class="flaticon-tick"></i></span>
                  <span class="ul-checkbox-txt">I agree with the <a href="#">Privacy Policy</a></span>
                </label>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- footer bottom -->
    <div class="ul-footer-bottom">
      <div class="ul-footer-container">
        <div class="ul-footer-bottom-wrapper">
          <p class="copyright-txt">&copy;
            <span id="footer-copyright-year"></span>Gyandeep NGO. All rights reserved
          </p>
          <div class="ul-footer-bottom-nav"><a href="#">Terms & Conditions</a> <a href="#">Privacy
              Policy</a></div>
        </div>
      </div>
    </div>

    <!-- vector -->
    <div class="ul-footer-vectors">
      <img src="{{ asset('front') }}/assets/img/footer-vector-img.png" alt="Footer Image" class="ul-footer-vector-1">
    </div>
  </footer>
  <!-- FOOTER SECTION END -->
@endsection
