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
              <img src="{{ asset('front') }}/assets/img/cre.png" alt="Image">
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
                          </div>
                      </div> -->

          <!-- <div class="ul-project-details-slider-nav ul-slider-nav">
                          <button class="prev"><i class="flaticon-back"></i></button>
                          <button class="next"><i class="flaticon-next"></i></button>
                      </div> -->
        </div>

        <div class="row gx-5 gy-4 mt-5 flex-column-reverse flex-lg-row">
          <!-- event details content -->
          <div class="col-md-8">
            <div class="ul-event-details">
              <h2 class="ul-event-details-title">CRE Program – Feb 2023</h2>
              <p class="ul-event-details-descr">
                In February 2023, Gyandeep Welfare and Rehabilitation Society hosted a Continuing Rehabilitation
                Education (CRE) Program aimed at enhancing professional skills and awareness among special educators,
                therapists, and caregivers. The program was certified by the Rehabilitation Council of India (RCI) and
                attracted active participation from across the region.
              </p>
              <p>
                Through expert-led sessions, the CRE initiative focused on the latest trends, techniques, and policies
                in disability education and rehabilitation. It created a collaborative learning environment, encouraging
                knowledge sharing, innovation, and a deeper understanding of inclusive practices.
              </p>

              <h3 class="ul-event-details-inner-title">Program Highlights</h3>
              <p class="ul-event-details-descr">
                The program included workshops on assistive technology, inclusive classroom strategies, behavioral
                interventions, and family-centered care. Renowned speakers and field experts led interactive modules,
                ensuring participants left with actionable insights and updated skills relevant to their work.
              </p>

              <h3 class="ul-event-inner-title">Impact & Outcomes</h3>
              <p>
                The CRE Program strengthened the capacity of professionals working in disability services and reinforced
                Gyandeep’s commitment to quality education and care. Participants reported increased confidence,
                improved strategies, and a renewed passion for serving the special needs community.
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
