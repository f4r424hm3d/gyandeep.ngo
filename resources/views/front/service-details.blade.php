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
            <h2 class="ul-service-details-title">Empowering Abilities</h2>
            <p class="ul-service-details-descr">At Gyandeep Welfare & Rehabilitation Society, we are committed to
              empowering individuals with disabilities through inclusive, compassionate, and personalized services. Our
              programs are designed to support growth in education, therapy, skill development, and community integration,
              enabling every individual to lead a life of dignity and independence.
            </p>

            <p class="ul-service-details-descr">We believe that inclusion starts with understanding. From children with
              learning challenges to adults seeking employment skills, our services cater to diverse needs with care and
              purpose. Every step we take is guided by a mission to create equal opportunities, break down barriers, and
              foster a society where everyone can thrive.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">Transforming Lives</h3>
              <p class="ul-service-details-descr">We measure success not just by milestones reached, but by the quiet
                victories—like a child saying their first words through speech therapy, or a parent finally feeling seen,
                heard, and supported. It's in the spark of confidence when a young adult learns a new skill or secures
                their first job. These moments of growth and dignity reflect the heart of our mission and the lives we’re
                privileged to impact every day.
              </p>
            </div>
          </div>

          <div class="ul-service-details-video-cover">
            <img src="{{ asset('front') }}/assets/img/donoting.jpeg" alt="Video Cover">
            <!-- <a href="https://youtu.be/C2FFe5FiAqc?si=8p0Skg8lyxgHQCpg" data-fslightbox="Video">Play Video</a> -->
          </div>

          <div class="ul-service-details-txt">
            <p class="ul-service-details-descr">At Gyandeep, each service represents a journey toward empowerment. Whether
              it's education, therapy, or vocational training, we focus on nurturing ability and inspiring hope. We
              believe that everyone, regardless of their challenges, deserves a chance to thrive. When you choose
              Gyandeep, you’re choosing more than support—you’re joining a community built on inclusion, compassion, and
              lifelong transformation.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">What You Can Expect</h3>
              <p class="ul-service-details-descr">At Gyandeep, we believe inclusion isn't a service—it's a way of life.
                Our programs are shaped with care, guided by purpose, and built to create lasting change. Whether through
                a child’s first step toward learning or a family’s first moment of relief, we stand by every journey.
              </p>

              <ul>
                <li>Creating pathways through personalized care
                </li>
                <li>Expert-led therapies, education, and training
                </li>
                <li>User & role-based administration and security</li>
                <li>Access made easy with subsidized services and support

                </li>
                <li>Safe, inclusive spaces designed for all abilities</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
