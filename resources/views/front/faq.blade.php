@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">FAQS</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>FAQS</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <!-- FAQ SECTION START -->
    <section class="ul-why-join ul-section-spacing">
      <div class="ul-container">
        <div class="row row-cols-md-2 row-cols-1 gy-4 align-items-center">
          <div class="col">
            <div class="ul-why-join-img">
              <!-- <img src="{{ asset('front') }}/assets/img/why-join.webp" alt="Image"> -->
              <img src="{{ asset('front') }}/assets/img/Volunteer-2.webp" alt="Image">
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
    </section>
    <!-- FAQ SECTION END -->
  </main>
@endsection
