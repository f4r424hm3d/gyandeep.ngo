@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Error</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Error</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <section class="ul-404 ul-section-spacing text-center">
      <div class="ul-404-container">
        <div class="ul-404-img">
          <img src="{{ asset('front') }}/assets/img/404-img.webp" alt="Image">
        </div>
        <h2 class="ul-section-title">Oops! Somethings Went Wrong Please Try Again Later</h2>
        <p>Sorry about that, but the page you looking is not available now</p>
        <a href="{{ route('home') }}" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Back
          to
          Home</a>
      </div>
    </section>
  </main>
@endsection
