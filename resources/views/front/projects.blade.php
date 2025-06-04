@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Projects</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Projects</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <!-- PROJECTS SECTION START -->
    <section class="ul-projects ul-section-spacing">
      <div class="ul-container">
        <div class="row ul-bs-row justify-content-center">
          <div class="col-lg-8 col-md-6 col-10 col-xxs-12">
            <div class="ul-project ">
              <div class="ul-project-img">
                <img src="{{ asset('front') }}/assets/img/abc.png" alt="Project Image">
              </div>
              <div class="ul-project-txt">
                <div>
                  <h3 class="ul-project-title"><a
                      href="{{ route('project.detail', ['project_slug' => 'project-details']) }}">Therapy Sessions
                    </a></h3>
                  <p class="ul-project-descr"> Healing Begins
                  </p>
                </div>
                <a href="{{ route('project.detail', ['project_slug' => 'project-details']) }}" class="ul-project-btn"><i
                    class="flaticon-up-right-arrow"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-10 col-xxs-12">
            <div class="ul-project ul-project--sm">
              <div class="ul-project-img">
                <img src="{{ asset('front') }}/assets/img/vocationalss.jpeg" alt="Project Image">
              </div>
              <div class="ul-project-txt">
                <div>
                  <h3 class="ul-project-title"><a
                      href="{{ route('project.detail', ['project_slug' => 'project-details-one']) }}">Vocational Training

                    </a></h3>
                  <p class="ul-project-descr"> Training & Jobs
                  </p>
                </div>
                <a href="{{ route('project.detail', ['project_slug' => 'project-details-one']) }}"
                  class="ul-project-btn"><i class="flaticon-up-right-arrow"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-10 col-xxs-12">
            <div class="ul-project ul-project--sm">
              <div class="ul-project-img">
                <img src="{{ asset('front') }}/assets/img/fab-program.jpeg" alt="Project Image">
              </div>
              <div class="ul-project-txt">
                <div>
                  <h3 class="ul-project-title"><a
                      href="{{ route('project.detail', ['project_slug' => 'project-details-two']) }}">CRE Program
                    </a></h3>
                  <p class="ul-project-descr">Feb 2023
                  </p>
                </div>
                <a href="{{ route('project.detail', ['project_slug' => 'project-details-two']) }}"
                  class="ul-project-btn"><i class="flaticon-up-right-arrow"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-8 col-md-6 col-10 col-xxs-12">
            <div class="ul-project ">
              <div class="ul-project-img">
                <img src="{{ asset('front') }}/assets/img/saksham-3.jpeg" alt="Project Image">
              </div>
              <div class="ul-project-txt">
                <div>
                  <h3 class="ul-project-title"><a
                      href="{{ route('project.detail', ['project_slug' => 'project-details-three']) }}">Festive
                      celebration
                    </a></h3>
                  <p class="ul-project-descr">Inclusive Community Event
                  </p>
                </div>
                <a href="{{ route('project.detail', ['project_slug' => 'project-details-three']) }}"
                  class="ul-project-btn"><i class="flaticon-up-right-arrow"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- PROJECTS SECTION END -->
  </main>
@endsection
