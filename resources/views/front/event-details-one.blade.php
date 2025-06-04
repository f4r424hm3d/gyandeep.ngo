@extends('front.layouts.main')
@push('seo_meta_tag')
  {{-- @include('front.layouts.static_page_meta_tag') --}}
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Event Details</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Event Details</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <div class="ul-container ul-section-spacing">
      <div class="row gx-0 gy-4 flex-column-reverse flex-lg-row">
        <!-- left sidebar -->
        <div class="col-lg-4">
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
                  <a href="{{ route('donation.details') }}">Charity <span>(08)</span></a>
                  <a href="{{ route('donation.details') }}">Crowdfunding <span>(11)</span></a>
                  <a href="{{ route('donation.details') }}">Industries <span>(18)</span></a>
                  <a href="{{ route('donation.details') }}">Innovations <span>(11)</span></a>
                  <a href="{{ route('donation.details') }}">Technology <span>(07)</span></a>
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
                  <a href="{{ route('donation.details') }}">Crowdfunding</a>
                  <a href="{{ route('donation.details') }}">Innovations</a>
                  <a href="{{ route('donation.details') }}">Justice</a>
                  <a href="{{ route('donation.details') }}">Lead</a>
                  <a href="{{ route('donation.details') }}">Startup</a>
                  <a href="{{ route('donation.details') }}">Technology</a>
                  <a href="{{ route('donation.details') }}">Market</a>
                  <a href="{{ route('donation.details') }}">Court</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- event details content -->
        <div class="col-lg-8">
          <div class="ul-event-details ul-donation-details">
            <div class="ul-event-details-img">
              <img src="{{ asset('front') }}/assets/img/udaan-2.jpeg" alt="Image">
            </div>
            <div class="ul-event-details-infos">
              <!-- single info -->
              <div class="ul-event-details-info">
                <span class="icon"><i class="flaticon-account"></i></span>
                <span class="text">By Admin</span>
              </div>
              <!-- single info -->
              <div class="ul-event-details-info">
                <span class="icon"><i class="flaticon-price-tag"></i></span>
                <span class="text">Donation</span>
              </div>
            </div>
            <h2 class="ul-event-details-title">Udaan 2024 – Vocational Training Showcase
            </h2>
            <p class="ul-event-details-descr">On December 15, 2024, Gyandeep Welfare and Rehabilitation Society proudly
              hosted Udaan at the Gyandeep Vocational Training Center, Dasuya, Punjab. This inspiring event celebrated
              the achievements of individuals with disabilities who completed specialized training in various skill
              areas. Udaan, meaning "flight," symbolized their journey toward self-reliance and economic independence.
            </p>
            <p>The event highlighted the importance of skill development for empowerment. Trainees demonstrated their
              talents in areas such as tailoring, handicrafts, digital literacy, and home-based entrepreneurship. With
              friends, families, and community members in attendance, the showcase was a celebration of potential,
              resilience, and the power of inclusive education.
            </p>
            <h3 class="ul-event-details-inner-title">Highlights of the Event
            </h3>
            <p class="ul-event-details-descr">Udaan was more than a showcase—it was a launchpad for a better future.
              Certified trainees were encouraged to start their own ventures and were connected with resources for
              self-employment.
            </p>
            <ul class="ul-event-details-list">
              <li>50+ participants received skill certifications
              </li>
              <li>Live demonstrations in tailoring, arts, baking, and IT skills
              </li>
              <li>Exhibition of handmade products by trainees
              </li>
              <li>Motivational talks and success stories from alumni
              </li>
              <li>Support provided for setting up micro-businesses</li>
            </ul>
            <h3 class="ul-event-inner-title">See Our Locations</h3>
            <div class="ul-event-details-map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1057.8175978636361!2d75.661293058148!3d31.810757559194258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391ba100492ce5f1%3A0x128811915fe4dffe!2sDeep%20Special%20School%20Dasua%20Gyandeep%20Welfare%20%26%20Rehabilitation%20Society!5e0!3m2!1sen!2sin!4v1741442864013!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <h3 class="ul-event-inner-title">Contact us</h3>
            <p>Your email address will not be published. Required fields are marked *</p>
            <form action="#" class="ul-contact-form ul-form">
              <div class="row row-cols-2 row-cols-xxs-1 ul-bs-row">
                <div class="col">
                  <div class="form-group">
                    <input type="text" name="name" id="ul-contact-name" placeholder="Your Name">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <input type="email" name="email" id="ul-contact-email" placeholder="Email Address">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <input type="tel" name="phone" id="ul-contact-phone" placeholder="Phone Number">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <input type="text" name="subject" id="ul-contact-subject" placeholder="Subject">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <textarea name="message" id="ul-contact-msg" placeholder="Type your message"></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <button class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Get in
                    Touch</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
