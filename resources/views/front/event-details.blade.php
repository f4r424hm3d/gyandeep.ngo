@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Event Details</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Event Details</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <div class="ul-container ul-section-spacing">
      <div class="row gx-0 gy-4 flex-column-reverse flex-lg-row">
        <!-- left sidebar -->
        <div class="col-lg-4">
          <div class="ul-inner-sidebar">
            <!-- single widget /search -->
            <div class="ul-inner-sidebar-widget ul-inner-sidebar-search">
              <h3 class="ul-inner-sidebar-widget-title">Search</h3>
              <div class="ul-inner-sidebar-widget-content">
                <form action="#" class="ul-blog-search-form">
                  <input type="search" name="blog-search" id="ul-blog-search" placeholder="Search Here">
                  <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
                </form>
              </div>
            </div>

            <!-- single widget / Categories -->
            <div class="ul-inner-sidebar-widget categories">
              <h3 class="ul-inner-sidebar-widget-title">Categories</h3>
              <div class="ul-inner-sidebar-widget-content">
                <div class="ul-inner-sidebar-categories">
                  <a href="{{ route('donation.details') }}">Charity <span>(08)</span></a>
                  <a href="{{ route('donation.details') }}">Crowdfunding <span>(11)</span></a>
                  <a href="{{ route('donation.details') }}">Industries <span>(18)</span></a>
                  <a href="{{ route('donation.details') }}">Innovations <span>(11)</span></a>
                  <a href="{{ route('donation.details') }}">Technology <span>(07)</span></a>
                </div>
              </div>
            </div>

            <div class="ul-inner-sidebar-widget tags">
              <h3 class="ul-inner-sidebar-widget-title">Tag Cloud</h3>
              <div class="ul-inner-sidebar-widget-content">
                <div class="ul-inner-sidebar-tags">
                  <a href="{{ route('donation.details') }}">Crowdfunding</a>
                  <a href="{{ route('donation.details') }}">Innovations</a>
                  <a href="{{ route('donation.details') }}">Justice</a>
                  <a href="{{ route('donation.details') }}">Lead</a>
                  <a href="{{ route('donation.details') }}">Startup</a>
                  <a href="{{ route('donation.details') }}">Technology</a>
                  <a href="{{ route('donation.details') }}">Market</a>
                  <a href="{{ route('donation.details') }}">Court</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- event details content -->
        <div class="col-lg-8">
          <div class="ul-event-details ul-donation-details">
            <div class="ul-event-details-img">
              <img src="{{ asset('front') }}/assets/img/sparsh-2.webp" alt="Image">
            </div>
            <div class="ul-event-details-infos">
              <!-- single info -->
              <div class="ul-event-details-info">
                <span class="icon"><i class="flaticon-account"></i></span>
                <span class="text">By Admin</span>
              </div>
              <!-- single info -->
              <div class="ul-event-details-info">
                <span class="icon"><i class="flaticon-price-tag"></i></span>
                <span class="text">Donation</span>
              </div>
            </div>
            <h2 class="ul-event-details-title">Sparsh 2024 – Devices That Empower
            </h2>
            <p class="ul-event-details-descr">On August 18, 2024, Gyandeep Welfare and Rehabilitation Society organized
              Sparsh 2024 at Dasuya Community Hall, Punjab, with a heartfelt mission to support individuals with
              disabilities. The event focused on the free distribution of assistive devices such as wheelchairs,
              walkers, and hearing aids, positively impacting the lives of over 300 beneficiaries. Each device
              distributed was a step toward independence and dignity for those who have long faced mobility and
              communication barriers.
            </p>
            <p>Sparsh 2024 wasn’t just about giving tools—it was about giving hope. Many of the recipients were
              children, elders, and individuals from underprivileged backgrounds who could not afford such aids. The
              event created a space of care, empathy, and empowerment, where every person was treated with respect and
              provided the tools to navigate life with confidence.
            </p>
            <h3 class="ul-event-details-inner-title">Highlights of the Event
            </h3>
            <p class="ul-event-details-descr">The event brought together healthcare professionals, volunteers, and
              community members to ensure a smooth, respectful distribution process. Beyond the physical devices, Sparsh
              2024 focused on education and awareness for long-term impact.
            </p>
            <ul class="ul-event-details-list">
              <li>300+ individuals received assistive devices at no cost
              </li>
              <li>Wheelchairs, walkers, and hearing aids distributed based on medical need
              </li>
              <li>On-site guidance provided for using and maintaining the aids
              </li>
              <li>Family counseling and disability awareness sessions held
              </li>
              <li>Support for accessing future benefits and government schemes</li>
            </ul>
            <h3 class="ul-event-inner-title">See Our Locations</h3>
            <div class="ul-event-details-map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1057.8175978636361!2d75.661293058148!3d31.810757559194258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391ba100492ce5f1%3A0x128811915fe4dffe!2sDeep%20Special%20School%20Dasua%20Gyandeep%20Welfare%20%26%20Rehabilitation%20Society!5e0!3m2!1sen!2sin!4v1741442864013!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <h3 class="ul-event-inner-title">Contact us</h3>
            <p>Your email address will not be published. Required fields are marked *</p>
            @include('front.forms.event-inquiry-form')
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
