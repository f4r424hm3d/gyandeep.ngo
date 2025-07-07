@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Service Details</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Service Details</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <section class="ul-service-details ul-section-spacing">
      <div class="ul-container">
        <div>
          <div class="ul-service-details-img">
            <img src="{{ asset('front') }}/assets/img/Empowering-Abilities.webp" alt="Image">
          </div>
          <div class="ul-service-details-txt">
            <h2 class="ul-service-details-title">Therapy & Rehabilitation
            </h2>
            <p class="ul-service-details-descr">At Gyandeep Welfare & Rehabilitation Society, we believe true progress
              begins with support that reaches both the body and the mind. Our Therapy & Rehabilitation services are
              designed to help individuals with disabilities grow stronger—physically, emotionally, and socially—through a
              blend of expert care and compassionate guidance.
            </p>

            <p class="ul-service-details-descr">From early childhood to adulthood, our therapies address a wide range of
              developmental needs. Whether it’s helping a child form their first words, improving mobility, or mastering
              daily tasks, our speech, physiotherapy, and occupational therapy sessions are personalized to meet each
              individual’s unique challenges and strengths.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">Transforming Lives</h3>
              <p class="ul-service-details-descr">Progress isn't always loud. Sometimes it’s the quiet moment when a child
                makes eye contact for the first time, or when a young adult stands with confidence after months of
                physiotherapy. It's the spark of connection in a therapy session, or the relief on a parent’s face as
                their child begins to thrive.

              </p>
            </div>
          </div>

          <div class="ul-service-details-video-cover">
            <img src="{{ asset('front') }}/assets/img/donoting.webp" alt="Video Cover">
            <!-- <a href="https://youtu.be/C2FFe5FiAqc?si=8p0Skg8lyxgHQCpg" data-fslightbox="Video">Play Video</a> -->
          </div>

          <div class="ul-service-details-txt">
            <p class="ul-service-details-descr">At Gyandeep, therapy means more than treatment—it means trust, patience,
              and progress. We use proven techniques like sensory integration, speech exercises, muscle training, and
              behavior-based interventions, always guided by empathy and respect for each individual's pace.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">What You Can Expect</h3>
              <p class="ul-service-details-descr">Our Therapy & Rehabilitation programs are holistic, evidence-based, and
                rooted in care. We offer flexible, individualized support that meets children and adults where they
                are—and helps them reach where they want to be.

              </p>

              <ul>
                <li>Speech Therapy for communication, language, and expression

                </li>
                <li>Physiotherapy for posture, balance, strength, and mobility

                </li>
                <li>User & role-based administration and security</li>
                <li>Occupational Therapy for fine motor skills and daily living activities

                </li>
                <li>Behavior Therapy for emotional regulation and social development
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
