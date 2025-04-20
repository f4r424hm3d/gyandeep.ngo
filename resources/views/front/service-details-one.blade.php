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
            <h2 class="ul-service-details-title">Inclusive Special Education</h2>
            <p class="ul-service-details-descr">At Gyandeep Welfare & Rehabilitation Society, we believe every child
              deserves the right to learn, grow, and thrive—no matter their abilities. Our Inclusive Special Education
              program offers customized learning experiences for children with disabilities, ensuring academic growth,
              social development, and emotional well-being in a nurturing, respectful environment.
            </p>

            <p class="ul-service-details-descr">We recognize that no two learners are the same. That’s why we develop
              Individualized Education Plans (IEPs) tailored to each child’s strengths, challenges, and goals. Our
              educators, therapists, and caregivers work hand-in-hand to create a space where learning is joyful,
              accessible, and empowering.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">Transforming Lives</h3>
              <p class="ul-service-details-descr">The real beauty of inclusive education lies in the breakthroughs—when a
                child learns to write their name for the first time, or finds a friend who understands them without words.
                It’s in the growing confidence of a student with autism who can now express emotions, or the excitement of
                a child with cerebral palsy who navigates their classroom independently.

              </p>
            </div>
          </div>

          <div class="ul-service-details-video-cover">
            <img src="{{ asset('front') }}/assets/img/donoting.jpeg" alt="Video Cover">
            <!-- <a href="https://youtu.be/C2FFe5FiAqc?si=8p0Skg8lyxgHQCpg" data-fslightbox="Video">Play Video</a> -->
          </div>

          <div class="ul-service-details-txt">
            <p class="ul-service-details-descr">At Gyandeep, we focus on more than academics. We nurture life skills,
              communication, independence, and emotional growth. With sensory-friendly methods, assistive technologies,
              and inclusive classrooms, we ensure every child feels valued, capable, and seen.</p>

            <div class="ul-service-details-inner-block">
              <h3 class="ul-service-details-inner-title">What You Can Expect</h3>
              <p class="ul-service-details-descr">Our Inclusive Special Education program is more than teaching—it’s about
                creating belonging. It’s about helping every child build a future full of possibilities, one lesson, one
                smile, and one milestone at a time.

              </p>

              <ul>
                <li>Multi-sensory, technology-assisted learning </li>
                <li>Expert-led therapies, education, and training</li>
                <li>Inclusive environments promoting peer interaction </li>
                <li>Therapies integrated within the school day</li>
                <li>Support and training for parents and families</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
