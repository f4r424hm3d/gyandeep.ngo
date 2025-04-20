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
            <h2 class="ul-service-details-title">Parental Counseling Help
            </h2>
            <p class="ul-service-details-descr">At Gyandeep Welfare & Rehabilitation Society, we understand that when a
              child has special needs, the entire family walks the journey. That’s why our Parental Counseling Help
              program is designed to support, guide, and uplift the caregivers who stand behind every milestone and
              breakthrough.

            </p>

            <p class="ul-service-details-descr">Raising a child with disabilities comes with unique challenges—and
              emotional strength is just as vital as practical knowledge. Through personalized counseling, legal aid,
              and interactive workshops, we equip parents with the tools, resources, and emotional support they need to
              navigate this journey with confidence and hope.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">Transforming Lives</h3>
              <p class="ul-service-details-descr">Support often begins with being heard. For many parents, Gyandeep is
                the first place where their fears are understood, their questions are answered, and their role is
                honored. A mother learning how to advocate for her child’s rights. A father finding peace after years of
                quiet worry. A sibling understanding how to be a friend and ally.

              </p>
            </div>
          </div>

          <div class="ul-service-details-video-cover">
            <img src="{{ asset('front') }}/assets/img/donoting.jpeg" alt="Video Cover">
            <!-- <a href="https://youtu.be/C2FFe5FiAqc?si=8p0Skg8lyxgHQCpg" data-fslightbox="Video">Play Video</a> -->
          </div>

          <div class="ul-service-details-txt">
            <p class="ul-service-details-descr">These quiet moments of healing and learning create a ripple
              effect—improving the well-being of not just the child, but the entire family. We help parents transform
              uncertainty into strength, isolation into connection, and stress into resilience. Because when families
              are supported, children thrive.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">What You Can Expect</h3>
              <p class="ul-service-details-descr">Our Parental Counseling Help program is more than advice—it’s a
                partnership rooted in empathy, knowledge, and care. We create a safe space for families to ask, learn,
                heal, and grow—together.

              </p>

              <ul>
                <li>One-on-one counseling for emotional and mental health </li>
                <li>Legal aid and disability rights awareness </li>
                <li>Workshops on education, caregiving, and stress management </li>
                <li>Sibling support and family therapy sessions </li>
                <li>Guidance on school selection, government schemes, and assistive tools</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
