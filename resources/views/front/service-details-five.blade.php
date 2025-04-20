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
            <h2 class="ul-service-details-title">Assistive Aid Services
            </h2>
            <p class="ul-service-details-descr">At Gyandeep Welfare & Rehabilitation Society, we believe that
              accessibility should never be a privilege—it should be a right. Our Assistive Aid Services provide
              essential mobility tools, communication devices, and adaptive learning aids to individuals with
              disabilities, ensuring they can move, speak, and learn with dignity and ease.

            </p>

            <p class="ul-service-details-descr">We offer free and subsidized support to children and adults who may
              otherwise go without due to financial barriers. Whether it’s a wheelchair for a child with cerebral palsy,
              a hearing aid for a student struggling to follow lessons, or a Braille book for someone with vision
              loss—these tools do more than assist; they empower.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">Transforming Lives</h3>
              <p class="ul-service-details-descr">For someone who’s been waiting to walk on their own, a walker is more
                than metal—it’s freedom. For a child who’s never heard their parents' voices, a hearing aid brings the
                world to life. For a non-verbal child using a communication board, it’s a first chance to say “I love
                you.”

              </p>
            </div>
          </div>

          <div class="ul-service-details-video-cover">
            <img src="{{ asset('front') }}/assets/img/donoting.jpeg" alt="Video Cover">
            <!-- <a href="https://youtu.be/C2FFe5FiAqc?si=8p0Skg8lyxgHQCpg" data-fslightbox="Video">Play Video</a> -->
          </div>

          <div class="ul-service-details-txt">
            <p class="ul-service-details-descr">At Gyandeep, we witness these transformations every day. A wheelchair
              brings a child back to school. A speech device gives a young girl her voice. These are not just tools—they
              are bridges to independence, confidence, and belonging.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">What You Can Expect</h3>
              <p class="ul-service-details-descr">Our Assistive Aid Services are built around care, access, and impact.
                We ensure that no one is left behind because of a missing device or lack of support.

              </p>

              <ul>
                <li>Free and subsidized mobility aids: wheelchairs, walkers, and orthotic supports

                </li>
                <li>Hearing tools: hearing aids, speech-generating devices, and communication boards

                </li>
                <li>Adaptive learning resources: Braille books, sensory kits, and educational software
                </li>
                <li>Guidance for families on using and maintaining devices

                </li>
                <li>Support with subsidies, donations, and training</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
