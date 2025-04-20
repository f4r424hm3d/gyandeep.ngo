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
            <h2 class="ul-service-details-title">Awareness & Advocacy Work
            </h2>
            <p class="ul-service-details-descr">At Gyandeep Welfare & Rehabilitation Society, we know that true
              inclusion begins with awareness—and grows through action. Our Awareness & Advocacy Work aims to change
              mindsets, break social barriers, and create environments where individuals with disabilities are not just
              accepted, but celebrated.

            </p>

            <p class="ul-service-details-descr">Through disability awareness campaigns, rights-based education, and
              advocacy for accessible spaces, we engage with schools, communities, workplaces, and policymakers to build
              a more inclusive world. Every poster, every workshop, and every conversation is a step toward a society
              that sees ability before disability.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">Transforming Lives</h3>
              <p class="ul-service-details-descr">Inclusion happens when a school adapts its teaching methods. When an
                employer creates a barrier-free workspace. When a parent speaks up for their child’s rights with
                confidence. We see transformation in these quiet shifts—in attitudes, in systems, in policies.

              </p>
            </div>
          </div>

          <div class="ul-service-details-video-cover">
            <img src="{{ asset('front') }}/assets/img/donoting.jpeg" alt="Video Cover">
            <!-- <a href="https://youtu.be/C2FFe5FiAqc?si=8p0Skg8lyxgHQCpg" data-fslightbox="Video">Play Video</a> -->
          </div>

          <div class="ul-service-details-txt">
            <p class="ul-service-details-descr">Through our advocacy, children with disabilities find a place in
              mainstream classrooms. Adults with challenges find fair opportunities at work. Public spaces become
              accessible to all. Every voice we amplify, every policy we help influence, leads to lives changed for the
              better.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">What You Can Expect</h3>
              <p class="ul-service-details-descr">Our Awareness & Advocacy efforts are bold, inclusive, and rooted in
                justice. We work across sectors and communities to educate, empower, and evolve how society views
                disability.

              </p>

              <ul>
                <li>Public campaigns in schools, colleges, and communities

                </li>
                <li>Legal awareness and disability rights workshops

                </li>
                <li>Sensitization sessions for employers and public officials
                </li>
                <li>Collaboration with policymakers and rights organizations

                </li>
                <li>Promotion of accessible infrastructure and inclusive education</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
