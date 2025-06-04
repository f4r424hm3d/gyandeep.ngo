@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Our Services</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Our Services</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <!-- SERVICES SECTION START -->
    <section class=" ul-section-spacing overflow-hidden">
      <div class="ul-container">
        <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
          <!-- single slide -->
          <div class="col">
            <div class="ul-service ul-service--inner">
              <div class="ul-service-img">
                <img src="{{ asset('front') }}/assets/img/Inclusive-Special-Education.jpeg" alt="Service Image">
              </div>
              <div class="ul-service-txt">
                <h3 class="ul-service-title"><a
                    href="{{ route('service.detail', ['service_slug' => 'service-details-one']) }}">Inclusive Special
                    Education
                  </a></h3>
                <p class="ul-service-descr">Customized learning for children with disabilities to grow academically and
                  socially.</p>
                <a href="{{ route('service.detail', ['service_slug' => 'service-details-one']) }}"
                  class="ul-service-btn"><i class="flaticon-up-right-arrow"></i> View
                  Details</a>
              </div>
            </div>
          </div>

          <!-- single slide -->
          <div class="col">
            <div class="ul-service ul-service--inner">
              <div class="ul-service-img">
                <img src="{{ asset('front') }}/assets/img/child-playing.jpeg" alt="Service Image">
              </div>
              <div class="ul-service-txt">
                <h3 class="ul-service-title"><a
                    href="{{ route('service.detail', ['service_slug' => 'service-details-two']) }}">Therapy &
                    Rehabilitation
                  </a></h3>
                <p class="ul-service-descr">Speech, physio, and occupational therapies that support physical and emotional
                  growth .</p>
                <a href="{{ route('service.detail', ['service_slug' => 'service-details-two']) }}"
                  class="ul-service-btn"><i class="flaticon-up-right-arrow"></i> View
                  Details</a>
              </div>
            </div>
          </div>

          <!-- single slide -->
          <div class="col">
            <div class="ul-service ul-service--inner">
              <div class="ul-service-img">
                <img src="{{ asset('front') }}/assets/img/skills.jpeg" alt="Service Image">
              </div>
              <div class="ul-service-txt">
                <h3 class="ul-service-title"><a
                    href="{{ route('service.detail', ['service_slug' => 'service-details-three']) }}">Vocational Skill
                    Training
                  </a></h3>
                <p class="ul-service-descr">Practical courses in art, tailoring, cooking, and tech for employment and
                  confidence.
                </p>
                <a href="{{ route('service.detail', ['service_slug' => 'service-details-three']) }}"
                  class="ul-service-btn"><i class="flaticon-up-right-arrow"></i> View
                  Details</a>
              </div>
            </div>
          </div>

          <!-- single slide -->
          <div class="col">
            <div class="ul-service ul-service--inner">
              <div class="ul-service-img">
                <img src="{{ asset('front') }}/assets/img/counselling.jpeg" alt="Service Image">
              </div>
              <div class="ul-service-txt">
                <h3 class="ul-service-title"><a
                    href="{{ route('service.detail', ['service_slug' => 'service-details-four']) }}">Parental Counseling
                    Help
                  </a></h3>
                <p class="ul-service-descr">Support for parents through guidance, emotional care, legal aid, and
                  workshops.
                </p>
                <a href="{{ route('service.detail', ['service_slug' => 'service-details-four']) }}"
                  class="ul-service-btn"><i class="flaticon-up-right-arrow"></i> View
                  Details</a>
              </div>
            </div>
          </div>

          <!-- single slide -->
          <div class="col">
            <div class="ul-service ul-service--inner">
              <div class="ul-service-img">
                <img src="{{ asset('front') }}/assets/img/aid.jpeg" class="aid-services"
                  alt="Service Image">
              </div>
              <div class="ul-service-txt">
                <h3 class="ul-service-title"><a
                    href="{{ route('service.detail', ['service_slug' => 'service-details-five']) }}">Assistive Aid
                    Services
                  </a></h3>
                <p class="ul-service-descr">Free mobility aids, hearing tools, and adaptive learning devices for better
                  access.
                </p>
                <a href="{{ route('service.detail', ['service_slug' => 'service-details-five']) }}"
                  class="ul-service-btn"><i class="flaticon-up-right-arrow"></i> View
                  Details</a>
              </div>
            </div>
          </div>

          <!-- single slide -->
          <div class="col">
            <div class="ul-service ul-service--inner">
              <div class="ul-service-img">
                <img src="{{ asset('front') }}/assets/img/deep-school.jpeg" alt="Service Image">
              </div>
              <div class="ul-service-txt">
                <h3 class="ul-service-title"><a
                    href="{{ route('service.detail', ['service_slug' => 'service-details-six']) }}">Awareness & Advocacy
                    Work
                  </a></h3>
                <p class="ul-service-descr">Promoting inclusion via campaigns, rights education, and accessible spaces.
                </p>
                <a href="{{ route('service.detail', ['service_slug' => 'service-details-six']) }}"
                  class="ul-service-btn"><i class="flaticon-up-right-arrow"></i> View
                  Details</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- SERVICES SECTION END -->

    <!-- WHY JOIN SECTION START -->
    <section class="ul-why-join ul-section-spacing pt-0">
      <div class="ul-why-join-wrapper ul-section-spacing">
        <div class="ul-container">
          <div class="row row-cols-md-2 row-cols-1 gy-4 align-items-center">
            <div class="col">
              <div class="ul-why-join-img">
                <img src="{{ asset('front') }}/assets/img/Volunteer-2.jpg" alt="Image">
              </div>
            </div>

            <!-- txt -->
            <div class="col">
              <div class="ul-why-join-txt">
                <span class="ul-section-sub-title">Join us</span>
                <h2 class="ul-section-title">Become a Volunteer – Support Special Children & Transform Lives!
                </h2>
                <p class="ul-section-descr">Join our mission of empowering differently-abled and special needs children.
                  Your time and efforts can make a world of difference in their lives.</p>

                <div class="ul-accordion">
                  <div class="ul-single-accordion-item open">
                    <div class="ul-single-accordion-item__header">
                      <div class="left">
                        <h3 class="ul-single-accordion-item__title">We need Special Educators & Therapists</h3>
                      </div>
                      <span class="icon"><i class="flaticon-next"></i></span>
                    </div>

                    <div class="ul-single-accordion-item__body">
                      <p>Help children develop essential life skills through tailored speech, occupational, and
                        physiotherapy sessions.</p>
                    </div>
                  </div>

                  <div class="ul-single-accordion-item">
                    <div class="ul-single-accordion-item__header">
                      <div class="left">
                        <h3 class="ul-single-accordion-item__title">We need Teachers & Braille Instructors</h3>
                      </div>
                      <span class="icon"><i class="flaticon-next"></i></span>
                    </div>

                    <div class="ul-single-accordion-item__body">
                      <p>Educate and empower children with disabilities by enhancing literacy, numeracy, and communication
                        skills.</p>
                    </div>
                  </div>

                  <div class="ul-single-accordion-item">
                    <div class="ul-single-accordion-item__header">
                      <div class="left">
                        <h3 class="ul-single-accordion-item__title">We need Medical & Healthcare Professionals </h3>
                      </div>
                      <span class="icon"><i class="flaticon-next"></i></span>
                    </div>

                    <div class="ul-single-accordion-item__body">
                      <p> Provide medical care, counselling, and rehabilitation support to ensure the well-being of the
                        children.</p>
                    </div>
                  </div>
                  <div class="ul-single-accordion-item">
                    <div class="ul-single-accordion-item__header">
                      <div class="left">
                        <h3 class="ul-single-accordion-item__title">We need Students & Young Professionals </h3>
                      </div>
                      <span class="icon"><i class="flaticon-next"></i></span>
                    </div>

                    <div class="ul-single-accordion-item__body">
                      <p> Assist in mentorship, creative workshops, and classroom activities while gaining valuable
                        experience.</p>
                    </div>
                  </div>
                  <div class="ul-single-accordion-item">
                    <div class="ul-single-accordion-item__header">
                      <div class="left">
                        <h3 class="ul-single-accordion-item__title">We need Artists & Musicians </h3>
                      </div>
                      <span class="icon"><i class="flaticon-next"></i></span>
                    </div>

                    <div class="ul-single-accordion-item__body">
                      <p> Use art, music, and creative expression to boost confidence and emotional well-being in
                        children.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- WHY JOIN SECTION END -->
  </main>
@endsection
