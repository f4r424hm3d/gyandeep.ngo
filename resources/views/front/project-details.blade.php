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
              <img src="{{ asset('front') }}/assets/img/Therapy-Sessions.webp" alt="Image">
            </div>
          </div>
          <!-- single slide -->
          <!-- <div class="swiper-slide">
                              <div>
                                  <img src="{{ asset('front') }}/assets/img/project-details-img-1.webp" alt="Image">
                              </div>
                          </div> -->
          <!-- single slide -->
          <!-- <div class="swiper-slide">
                              <div>
                                  <img src="{{ asset('front') }}/assets/img/project-details-img-1.webp" alt="Image">
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
            <h2 class="ul-event-details-title">Therapy Sessions at Gyandeep</h2>
            <p class="ul-event-details-descr">
              At Gyandeep Welfare and Rehabilitation Society, therapy sessions are a cornerstone of our holistic
              approach to supporting children and individuals with disabilities. Our expert team offers personalized
              therapies that promote physical, cognitive, emotional, and social development, helping participants gain
              independence and confidence in daily life.
            </p>
            <p>
              These sessions are conducted in a supportive and inclusive environment, ensuring comfort and trust.
              Whether a child needs help with speech, motor skills, behavior regulation, or sensory integration, our
              tailored therapies address individual challenges and foster meaningful progress.
            </p>

            <h3 class="ul-event-details-inner-title">Types of Therapy Offered</h3>
            <p class="ul-event-details-descr">
              We provide a wide range of therapies including Speech Therapy, Occupational Therapy, Physiotherapy, and
              Behavioral Therapy. Each therapy plan is customized to the individual's specific needs, incorporating
              evidence-based methods such as ABA, sensory integration, and play-based learning to ensure optimal
              outcomes.
            </p>

            <h3 class="ul-event-inner-title">Impact of Our Therapy Programs</h3>
            <p>
              Our therapy sessions significantly enhance communication, mobility, self-care abilities, and emotional
              regulation. Many of our participants achieve greater independence and improved quality of life, empowering
              them to engage more actively with their families, schools, and communities.
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
