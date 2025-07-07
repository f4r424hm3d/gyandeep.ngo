@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Events</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Events</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <!-- EVENTS SECTION START -->
    <section class="ul-section-spacing">
      <div class="ul-container">
        <!-- events -->
        <div class="ul-events-wrapper">
          <div class="row ul-bs-row row-cols-lg-2 row-cols-1">
            <!-- single event -->
            <div class="col wow animate__fadeInUp">
              <div class="ul-event ul-event--inner">
                <div class="ul-event-img">
                  <img src="{{ asset('front') }}/assets/img/sparashs.webp" alt="Event Image">
                  <span class="date">18 <span>Aug</span></span>
                </div>
                <div class="ul-event-txt">
                  <h3 class="ul-event-title"><a
                      href="{{ route('event.detail', ['event_slug' => 'event-details']) }}">Sparsh 2024 – Devices That
                      Empower.</a></h3>
                  <p class="ul-event-descr">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                    aspernaturaut</p>
                  <div class="ul-event-info">
                    <span class="ul-event-info-title">Venue</span>
                    <p class="ul-event-info-descr">Dasuya Community Hall Punjab, India</p>
                  </div>
                  <a href="{{ route('event.detail', ['event_slug' => 'event-details']) }}" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Event Details</a>
                </div>
              </div>
            </div>

            <!-- single event -->
            <div class="col wow animate__fadeInUp">
              <div class="ul-event ul-event--inner">
                <div class="ul-event-img">
                  <img src="{{ asset('front') }}/assets/img/udaan-2.webp" alt="Event Image">
                  <span class="date">29 <span>July</span></span>
                </div>
                <div class="ul-event-txt">
                  <h3 class="ul-event-title"><a
                      href="{{ route('event.detail', ['event_slug' => 'event-details-one']) }}">Udaan – Vocational
                      Training Showcase</a>
                  </h3>
                  <p class="ul-event-descr">daan showcased skills & certified trainees for self-employment.</p>
                  <div class="ul-event-info">
                    <span class="ul-event-info-title">Venue</span>
                    <p class="ul-event-info-descr">Gyandeep Vocational Training Center
                      Dasuya, Punjab</p>
                  </div>
                  <a href="{{ route('event.detail', ['event_slug' => 'event-details-one']) }}" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Event Details</a>
                </div>
              </div>
            </div>

            <!-- single event -->
            <div class="col wow animate__fadeInUp">
              <div class="ul-event ul-event--inner">
                <div class="ul-event-img">
                  <img src="{{ asset('front') }}/assets/img/asaha.webp" alt="Event Image">
                  <span class="date">29 <span>July</span></span>
                </div>
                <div class="ul-event-txt">
                  <h3 class="ul-event-title"><a
                      href="{{ route('event.detail', ['event_slug' => 'event-details-two']) }}">Aasha 2023 – Healing Minds
                      Together</a>
                  </h3>
                  <p class="ul-event-descr">Support camp with therapy, yoga & guidance for parents of special kids.</p>
                  <div class="ul-event-info">
                    <span class="ul-event-info-title">Venue</span>
                    <p class="ul-event-info-descr">Gyandeep School
                      Dasuya, Punjab</p>
                  </div>
                  <a href="{{ route('event.detail', ['event_slug' => 'event-details-two']) }}" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Event Details</a>
                </div>
              </div>
            </div>

            <!-- single event -->
            <div class="col wow animate__fadeInUp">
              <div class="ul-event ul-event--inner">
                <div class="ul-event-img">
                  <img src="{{ asset('front') }}/assets/img/saksham-3.webp" alt="Event Image">
                  <span class="date">29 <span>July</span></span>
                </div>
                <div class="ul-event-txt">
                  <h3 class="ul-event-title"><a
                      href="{{ route('event.detail', ['event_slug' => 'event-details-three']) }}">Saksham Bal Mela –
                      Inclusive Fun
                      Fair.</a></h3>
                  <p class="ul-event-descr">Inclusive fair with sensory games, art & disability awareness booths</p>
                  <div class="ul-event-info">
                    <span class="ul-event-info-title">Venue</span>
                    <p class="ul-event-info-descr">Public Grounds, Hoshiarpur Road, Dasuya.</p>
                  </div>
                  <a href="{{ route('event.detail', ['event_slug' => 'event-details-three']) }}" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Event Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="ul-pagination">
        <ul>
          <li><a href="#"><i class="flaticon-back"></i></a></li>
          <li class="pages">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
          </li>
          <li><a href="#"><i class="flaticon-next"></i></a></li>
        </ul>
      </div>
    </section>
    <!-- EVENTS SECTION END -->
  </main>
@endsection
