@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Blogs</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Blogs</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <!-- BLOG SECTION START -->
    <section class="ul-blogs-2 ul-section-spacing">
      <div class="ul-container wow animate__fadeInUp">
        <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row justify-content-center">
          <!-- single blog -->
          <div class="col">
            <div class="ul-blog ul-blog-2">
              <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/donation-1.webp" alt="Blog Image">
                <div class="date">
                  <span class="number">15</span>
                  <span class="txt">Dec</span>
                </div>
              </div>
              <div class="ul-blog-txt">
                <div class="ul-blog-infos">
                  <!-- single info -->
                  <div class="ul-blog-info">
                    <span class="icon"><i class="flaticon-account"></i></span>
                    <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                  </div>
                  <!-- single info -->
                  <div class="ul-blog-info">
                    <span class="icon"><i class="flaticon-price-tag"></i></span>
                    <span class="text font-normal text-[14px] text-etGray">Donation</span>
                  </div>
                </div>
                <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details']) }}" class="ul-blog-title">Breaking
                  Barriers with Inclusive Education.

                </a>
                <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details']) }}" class="ul-blog-btn">Read More <span
                    class="icon"><i class="flaticon-next"></i></span></a>
              </div>
            </div>
          </div>

          <!-- single blog -->
          <div class="col">
            <div class="ul-blog ul-blog-2">
              <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/donation-2.webp" alt="Blog Image">
                <div class="date">
                  <span class="number">15</span>
                  <span class="txt">Dec</span>
                </div>
              </div>
              <div class="ul-blog-txt">
                <div class="ul-blog-infos">
                  <!-- single info -->
                  <div class="ul-blog-info">
                    <span class="icon"><i class="flaticon-account"></i></span>
                    <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                  </div>
                  <!-- single info -->
                  <div class="ul-blog-info">
                    <span class="icon"><i class="flaticon-price-tag"></i></span>
                    <span class="text font-normal text-[14px] text-etGray">Donation</span>
                  </div>
                </div>
                <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details-one']) }}" class="ul-blog-title">How
                  Therapy Transforms Young Lives
                </a>
                <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details-one']) }}" class="ul-blog-btn">Read More
                  <span class="icon"><i class="flaticon-next"></i></span></a>
              </div>
            </div>
          </div>

          <!-- single blog -->
          <div class="col">
            <div class="ul-blog ul-blog-2">
              <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/donation-5.webp" alt="Blog Image">
                <div class="date">
                  <span class="number">15</span>
                  <span class="txt">Dec</span>
                </div>
              </div>
              <div class="ul-blog-txt">
                <div class="ul-blog-infos">
                  <!-- single info -->
                  <div class="ul-blog-info">
                    <span class="icon"><i class="flaticon-account"></i></span>
                    <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                  </div>
                  <!-- single info -->
                  <div class="ul-blog-info">
                    <span class="icon"><i class="flaticon-price-tag"></i></span>
                    <span class="text font-normal text-[14px] text-etGray">Donation</span>
                  </div>
                </div>
                <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details-two']) }}" class="ul-blog-title">Empowering
                  Parents of Special Needs Kids. </a>
                <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details-two']) }}" class="ul-blog-btn">Read More
                  <span class="icon"><i class="flaticon-next"></i></span></a>
              </div>
            </div>
          </div>

          <!-- single blog -->
          <div class="col">
            <div class="ul-blog ul-blog-2">
              <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/blog-child.webp" alt="Blog Image">
                <div class="date">
                  <span class="number">15</span>
                  <span class="txt">Dec</span>
                </div>
              </div>
              <div class="ul-blog-txt">
                <div class="ul-blog-infos">
                  <!-- single info -->
                  <div class="ul-blog-info">
                    <span class="icon"><i class="flaticon-account"></i></span>
                    <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                  </div>
                  <!-- single info -->
                  <div class="ul-blog-info">
                    <span class="icon"><i class="flaticon-price-tag"></i></span>
                    <span class="text font-normal text-[14px] text-etGray">Donation</span>
                  </div>
                </div>
                <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details-three']) }}" class="ul-blog-title">Skill
                  Training for a Dignified Tomorrow
                </a>
                <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details-three']) }}" class="ul-blog-btn">Read
                  More <span class="icon"><i class="flaticon-next"></i></span></a>
              </div>
            </div>
          </div>

          <!-- single blog -->
          <div class="col">
            <div class="ul-blog ul-blog-2">
              <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/mobilitys.webp" alt="Blog Image">
                <div class="date">
                  <span class="number">15</span>
                  <span class="txt">Dec</span>
                </div>
              </div>
              <div class="ul-blog-txt">
                <div class="ul-blog-infos">
                  <!-- single info -->
                  <div class="ul-blog-info">
                    <span class="icon"><i class="flaticon-account"></i></span>
                    <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                  </div>
                  <!-- single info -->
                  <div class="ul-blog-info">
                    <span class="icon"><i class="flaticon-price-tag"></i></span>
                    <span class="text font-normal text-[14px] text-etGray">Donation</span>
                  </div>
                </div>
                <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details-four']) }}" class="ul-blog-title">Why
                  Assistive Devices Truly Matter. </a>
                <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details-four']) }}" class="ul-blog-btn">Read
                  More <span class="icon"><i class="flaticon-next"></i></span></a>
              </div>
            </div>
          </div>

          <!-- single blog -->
          <div class="col">
            <div class="ul-blog ul-blog-2">
              <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/donation-7.webp" alt="Blog Image">
                <div class="date">
                  <span class="number">15</span>
                  <span class="txt">Dec</span>
                </div>
              </div>
              <div class="ul-blog-txt">
                <div class="ul-blog-infos">
                  <!-- single info -->
                  <div class="ul-blog-info">
                    <span class="icon"><i class="flaticon-account"></i></span>
                    <span class="text font-normal text-[14px] text-etGray">By Admin</span>
                  </div>
                  <!-- single info -->
                  <div class="ul-blog-info">
                    <span class="icon"><i class="flaticon-price-tag"></i></span>
                    <span class="text font-normal text-[14px] text-etGray">Donation</span>
                  </div>
                </div>
                <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details-five']) }}"
                  class="ul-blog-title">Creating Awareness, Changing Attitudes</a>
                <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details-five']) }}" class="ul-blog-btn">Read
                  More <span class="icon"><i class="flaticon-next"></i></span></a>
              </div>
            </div>
          </div>
        </div>

        <!-- pagination -->
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
      </div>
    </section>
    <!-- BLOG SECTION END -->
  </main>
@endsection
