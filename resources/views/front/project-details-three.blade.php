@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main class="overflow-hidden">
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Project Details</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Project Details</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <div class="ul-container ul-section-spacing">
      <div class="ul-project-details-img-slider swiper">
        <div class="swiper-wrapper">
          <!-- single slide -->
          <div class="swiper-slide">
            <div>
              <img src="{{ asset('front') }}/assets/img/Festive-c.jpg" alt="Image">
            </div>
          </div>
          <!-- single slide -->
          <!-- <div class="swiper-slide">
                              <div>
                                  <img src="{{ asset('front') }}/assets/img/project-details-img-1.jpg" alt="Image">
                              </div>
                          </div> -->
          <!-- single slide -->
          <!-- <div class="swiper-slide">
                              <div>
                                  <img src="{{ asset('front') }}/assets/img/project-details-img-1.jpg" alt="Image">
                              </div>
                          </div> -->
        </div>

        <!-- <div class="ul-project-details-slider-nav ul-slider-nav">
                          <button class="prev"><i class="flaticon-back"></i></button>
                          <button class="next"><i class="flaticon-next"></i></button>
                      </div> -->
      </div>

      <div class="row gx-5 gy-4 flex-column-reverse flex-lg-row">
        <!-- event details content -->
        <div class="col-md-8">
          <div class="ul-event-details">
            <h2 class="ul-event-details-title">Festive Celebration – Inclusive Community Event</h2>
            <p class="ul-event-details-descr">
              Gyandeep Welfare and Rehabilitation Society believes in celebrating every moment of joy with inclusivity
              and togetherness. Our festive celebrations bring children with disabilities, their families, and the wider
              community together in a spirit of unity, culture, and shared happiness.
            </p>
            <p>
              These events feature music, dance, traditional rituals, art activities, and performances by our students,
              creating an environment where everyone feels seen, valued, and connected. Festivals like Diwali, Holi,
              Independence Day, and Christmas are celebrated with equal enthusiasm and accessibility.
            </p>

            <h3 class="ul-event-details-inner-title">Celebration Highlights</h3>
            <p class="ul-event-details-descr">
              Each event is thoughtfully designed to be sensory-friendly and inclusive. From rangoli-making and fancy
              dress competitions to group performances and interactive games, every child participates according to
              their ability, with encouragement from volunteers, staff, and families.
            </p>

            <h3 class="ul-event-inner-title">Impact on Community Bonding</h3>
            <p>
              These celebrations foster empathy, break social barriers, and promote awareness about disability
              inclusion. By creating joyful shared experiences, Gyandeep nurtures a stronger, more compassionate
              community where differences are embraced and celebrated together.
            </p>
          </div>
        </div>

        <!-- sidebar -->
        <div class="col-md-4">
          <div class="ul-project-details-infos">
            <h4 class="ul-project-details-infos-title">Project Information</h4>
            <ul class="ul-project-details-infos-list">
              <li><span class="key">CATEGORY</span>:<span class="value">Business, Marketing</span></li>
              <li><span class="key">AUTHOR</span>:<span class="value">Athena Jones</span></li>
              <li><span class="key">TAGS</span>:<span class="value">Data Masters</span></li>
              <li><span class="key">COST</span>:<span class="value">USD 1,50,499</span></li>
              <li><span class="key">DATE</span>:<span class="value">25 February, 2024</span></li>
            </ul>

            <div class="ul-footer-socials ul-project-details-infos-shares">
              <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
              <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
              <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
              <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="ul-project-details-nav">
        <a href="#"><i class="flaticon-back"></i> <span>Previous Project</span></a>
        <a href="#"><i class="flaticon-next"></i> <span>Next Project</span></a>
      </div>
    </div>
  </main>
@endsection
