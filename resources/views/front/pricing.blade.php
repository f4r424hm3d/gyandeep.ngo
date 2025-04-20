@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Pricing</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Pricing</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <section class="ul-pricing ul-section-spacing">
      <div class="ul-container">
        <div class="row ul-bs-row row-cols-lg-3 row-cols-sm-2 row-cols-1">
          <!-- single plan -->
          <div class="col">
            <div class="ul-pricing-package">
              <!-- heading -->
              <div class="ul-pricing-package-heading">
                <span class="ul-pricing-package-name">Basic</span>
                <div class="ul-pricing-package-heading-bottom">
                  <h3 class="ul-pricing-package-price">₹19</h3>
                  <div class="right">
                    <span class="ul-pricing-package-duration"><span class="divider">/</span>Month</span>
                  </div>
                </div>
                <p class="ul-pricing-package-descr">We care about their success. For us real We care about their
                  success. For us real relationship.</p>
              </div>

              <!-- body -->
              <div class="ul-pricing-package-body">
                <ul class="ul-pricing-package-body-list">
                  <li>Providing solutions</li>
                  <li>Service that matters</li>
                  <li>Giving our best</li>
                  <li>24/7 Skilled Support</li>
                  <li>We serve differently</li>
                </ul>

                <a href="#" class="ul-pricing-package-btn">Choose a Plan</a>
              </div>
            </div>
          </div>

          <!-- single plan -->
          <div class="col">
            <div class="ul-pricing-package">
              <!-- heading -->
              <div class="ul-pricing-package-heading">
                <span class="ul-pricing-package-name">Standard</span>
                <div class="ul-pricing-package-heading-bottom">
                  <h3 class="ul-pricing-package-price">₹59</h3>
                  <div class="right">
                    <span class="ul-pricing-package-duration"><span class="divider">/</span>Month</span>
                  </div>
                </div>
                <p class="ul-pricing-package-descr">We care about their success. For us real We care about their
                  success. For us real relationship.</p>
              </div>

              <!-- body -->
              <div class="ul-pricing-package-body">
                <ul class="ul-pricing-package-body-list">
                  <li>Providing solutions</li>
                  <li>Service that matters</li>
                  <li>Giving our best</li>
                  <li>24/7 Skilled Support</li>
                  <li>We serve differently</li>
                </ul>

                <a href="#" class="ul-pricing-package-btn">Choose a Plan</a>
              </div>
            </div>
          </div>

          <!-- single plan -->
          <div class="col">
            <div class="ul-pricing-package">
              <!-- heading -->
              <div class="ul-pricing-package-heading">
                <span class="ul-pricing-package-name">Premium</span>
                <div class="ul-pricing-package-heading-bottom">
                  <h3 class="ul-pricing-package-price">₹110</h3>
                  <div class="right">
                    <span class="ul-pricing-package-duration"><span class="divider">/</span>Month</span>
                  </div>
                </div>
                <p class="ul-pricing-package-descr">We care about their success. For us real We care about their
                  success. For us real relationship.</p>
              </div>

              <!-- body -->
              <div class="ul-pricing-package-body">
                <ul class="ul-pricing-package-body-list">
                  <li>Providing solutions</li>
                  <li>Service that matters</li>
                  <li>Giving our best</li>
                  <li>24/7 Skilled Support</li>
                  <li>We serve differently</li>
                </ul>

                <a href="#" class="ul-pricing-package-btn">Choose a Plan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
