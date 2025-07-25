@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Team Member Details</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Team Member Details</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <div class="ul-section-spacing">
      <div class="ul-container">
        <div class="ul-team-details">
          <div class="row justify-content-between gx-0 gy-3">
            <div class="col-md-5">
              <div class="ul-team-details-img wow animate__fadeInUp">
                <img src="{{ asset('front') }}/assets/img/team-details-img.webp" alt="team member image">
              </div>
            </div>

            <div class="col-md-6">
              <!-- txt -->
              <div class="txt wow animate__fadeInUp">
                <h3 class="ul-team-details-name ul-section-title">Danial Frankie</h3>
                <h6 class="ul-team-details-role">Co-Founder</h6>
                <p class="ul-team-details-descr">Adipiscing elit. Mauris viverra nisl quis mollis laoreet. Ut eget lacus a
                  felis accumsan pharetra in dignissim enim. In amet odio mollis urna aliquet volutpat. Sed bibendum nisl
                  vehicula imperdiet imperdiet, augue massa fringilla.</p>

                <ul class="ul-team-details-infos">
                  <li class="ul-team-details-info"><a href="tel:2085550112"><i class="flaticon-telephone-call"></i>
                      +208-555-0112</a></li>
                  <li class="ul-team-details-info"><a href="mailto:thomas.tatum@example.com"><i
                        class="flaticon-email"></i> thomas.tatum@example.com</a></li>
                </ul>

                <!-- social links -->
                <div class="ul-team-details-socials">
                  <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                  <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                  <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
                  <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                </div>

                <div class="ul-team-details-experiences">
                  <h3 class="ul-donation-details-summary-title">Experience Area</h3>

                  <div class="experiences-wrapper">
                    <div class="ul-team-details-experience">
                      <h6 class="experience-title">Productivity</h6>
                      <div class="ul-donation-progress-2">
                        <div class="ul-progress-container">
                          <div class="skill-progressbar ul-progressbar" data-ul-progress-value="90">
                            <div class="skill-progress-label ul-progress-label">00%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ul-team-details-experience">
                      <h6 class="experience-title">Digital Marketing</h6>
                      <div class="ul-donation-progress-2">
                        <div class="ul-progress-container">
                          <div class="skill-progressbar ul-progressbar" data-ul-progress-value="87">
                            <div class="skill-progress-label ul-progress-label">00%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ul-team-details-experience">
                      <h6 class="experience-title">Technology</h6>
                      <div class="ul-donation-progress-2">
                        <div class="ul-progress-container">
                          <div class="skill-progressbar ul-progressbar" data-ul-progress-value="65">
                            <div class="skill-progress-label ul-progress-label">00%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="ul-team-details-contact">
                  <h3 class="ul-donation-details-summary-title">Message With Me</h3>
                  <form action="#" class="ul-contact-form ul-form">
                    <div class="row row-cols-2 row-cols-xxs-1 ul-bs-row">
                      <div class="col">
                        <div class="form-group">
                          <input type="text" name="name" id="ul-contact-name" placeholder="Your Name">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <input type="email" name="email" id="ul-contact-email" placeholder="Email Address">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <input type="tel" name="phone" id="ul-contact-phone" placeholder="Phone Number">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <textarea name="message" id="ul-contact-msg" placeholder="Type your message"></textarea>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Get in
                          Touch</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>
@endsection
