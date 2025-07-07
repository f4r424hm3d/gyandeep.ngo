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
            <h2 class="ul-service-details-title">Vocational Skill Training
            </h2>
            <p class="ul-service-details-descr">At Gyandeep Welfare & Rehabilitation Society, we believe that every
              individual deserves the chance to lead a self-reliant, fulfilling life. Our Vocational Skill Training
              program empowers people with disabilities through practical, hands-on courses that build not just
              skills—but confidence, creativity, and independence.

            </p>

            <p class="ul-service-details-descr">From traditional crafts to modern technology, our training covers a
              wide range of areas tailored to different abilities and interests. Whether it’s stitching a garment,
              baking a cake, creating digital art, or learning to use a computer, we equip our learners with tools they
              can use for employment or self-employment.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">Transforming Lives</h3>
              <p class="ul-service-details-descr">There is something deeply powerful about the first product made by
                hand, the first order sold, or the first salary earned. For many of our learners, these milestones mark
                a turning point—from dependence to empowerment.

              </p>
            </div>
          </div>

          <div class="ul-service-details-video-cover">
            <img src="{{ asset('front') }}/assets/img/donoting.webp" alt="Video Cover">
            <!-- <a href="https://youtu.be/C2FFe5FiAqc?si=8p0Skg8lyxgHQCpg" data-fslightbox="Video">Play Video</a> -->
          </div>

          <div class="ul-service-details-txt">
            <p class="ul-service-details-descr">At Gyandeep, we’ve seen lives change through vocational training. A
              young woman who once felt invisible now supports her family by tailoring. A boy with autism finds calm and
              focus in painting. Another student discovers joy in cooking and dreams of opening his own café. These
              aren’t just stories—they’re new beginnings.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">What You Can Expect</h3>
              <p class="ul-service-details-descr">Our vocational programs are inclusive, practical, and designed for
                real-world application. With supportive trainers and flexible methods, we make learning accessible and
                meaningful for every individual.

              </p>

              <ul>
                <li>Hands-on workshops in tailoring, cooking, and handicrafts

                </li>
                <li>Digital literacy and basic IT skills for modern careers

                </li>
                <li>Focus on self-employment and small business opportunities
                </li>
                <li>Confidence-building and social skill development

                </li>
                <li>Ongoing mentorship and family involvement
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
