@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Our Team</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Our Team</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <!-- TEAM SECTION START -->
    <section class="ul-team ul-inner-team ul-section-spacing">
      <div class="ul-container">
        <div class="row row-cols-md-4 row-cols-sm-3 row-cols-2 row-cols-xxs-1 ul-team-row justify-content-center">
          <!-- single member -->
          <div class="col">
            <div class="ul-team-member">
              <div class="ul-team-member-img">
                <img src="{{ asset('front') }}/assets/img/aman-mam.webp" alt="Team Member Image">
                <div class="ul-team-member-socials">
                  <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                  <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                  <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
                  <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                </div>
              </div>
              <div class="ul-team-member-info">
                <h3 class="ul-team-member-name"><a href="team-details.html">Aman Ahlawat</a></h3>
                <p class="ul-team-member-designation">General Secretary</p>
              </div>
            </div>
          </div>

          <!-- single member -->
          <div class="col">
            <div class="ul-team-member">
              <div class="ul-team-member-img">
                <img src="{{ asset('front') }}/assets/img/rahul-sharma.webp" alt="Team Member Image">
                <div class="ul-team-member-socials">
                  <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                  <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                  <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
                  <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                </div>
              </div>
              <div class="ul-team-member-info">
                <h3 class="ul-team-member-name"><a href="team-details.html">Rahul-Sharma</a></h3>
                <p class="ul-team-member-designation">President</p>
              </div>
            </div>
          </div>

          <!-- single member -->
          <!-- <div class="col">
                                  <div class="ul-team-member">
                                      <div class="ul-team-member-img">
                                          <img src="{{ asset('front') }}/assets/img/member-3.webp" alt="Team Member Image">
                                          <div class="ul-team-member-socials">
                                              <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                                              <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                                              <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
                                              <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                                          </div>
                                      </div>
                                      <div class="ul-team-member-info">
                                          <h3 class="ul-team-member-name"><a href="team-details.html">John Doe</a></h3>
                                          <p class="ul-team-member-designation">Attorney</p>
                                      </div>
                                  </div>
                              </div> -->

          <!-- single member -->
          <!-- <div class="col">
                                  <div class="ul-team-member">
                                      <div class="ul-team-member-img">
                                          <img src="{{ asset('front') }}/assets/img/member-4.webp" alt="Team Member Image">
                                          <div class="ul-team-member-socials">
                                              <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                                              <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                                              <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
                                              <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                                          </div>
                                      </div>
                                      <div class="ul-team-member-info">
                                          <h3 class="ul-team-member-name"><a href="team-details.html">John Doe</a></h3>
                                          <p class="ul-team-member-designation">Attorney</p>
                                      </div>
                                  </div>
                              </div> -->

          <!-- single member -->
          <!-- <div class="col">
                                  <div class="ul-team-member">
                                      <div class="ul-team-member-img">
                                          <img src="{{ asset('front') }}/assets/img/member-5.webp" alt="Team Member Image">
                                          <div class="ul-team-member-socials">
                                              <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                                              <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                                              <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
                                              <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                                          </div>
                                      </div>
                                      <div class="ul-team-member-info">
                                          <h3 class="ul-team-member-name"><a href="team-details.html">John Doe</a></h3>
                                          <p class="ul-team-member-designation">Attorney</p>
                                      </div>
                                  </div>
                              </div> -->

          <!-- single member -->
          <!-- <div class="col">
                                  <div class="ul-team-member">
                                      <div class="ul-team-member-img">
                                          <img src="{{ asset('front') }}/assets/img/member-6.webp" alt="Team Member Image">
                                          <div class="ul-team-member-socials">
                                              <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                                              <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                                              <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
                                              <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                                          </div>
                                      </div>
                                      <div class="ul-team-member-info">
                                          <h3 class="ul-team-member-name"><a href="team-details.html">John Doe</a></h3>
                                          <p class="ul-team-member-designation">Attorney</p>
                                      </div>
                                  </div>
                              </div> -->

          <!-- single member -->
          <!-- <div class="col">
                                  <div class="ul-team-member">
                                      <div class="ul-team-member-img">
                                          <img src="{{ asset('front') }}/assets/img/member-7.webp" alt="Team Member Image">
                                          <div class="ul-team-member-socials">
                                              <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                                              <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                                              <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
                                              <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                                          </div>
                                      </div>
                                      <div class="ul-team-member-info">
                                          <h3 class="ul-team-member-name"><a href="team-details.html">John Doe</a></h3>
                                          <p class="ul-team-member-designation">Attorney</p>
                                      </div>
                                  </div>
                              </div> -->

          <!-- single member -->
          <!-- <div class="col">
                                  <div class="ul-team-member">
                                      <div class="ul-team-member-img">
                                          <img src="{{ asset('front') }}/assets/img/member-8.webp" alt="Team Member Image">
                                          <div class="ul-team-member-socials">
                                              <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                                              <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                                              <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
                                              <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                                          </div>
                                      </div>
                                      <div class="ul-team-member-info">
                                          <h3 class="ul-team-member-name"><a href="team-details.html">John Doe</a></h3>
                                          <p class="ul-team-member-designation">Attorney</p>
                                      </div>
                                  </div>
                              </div> -->
        </div>
      </div>
    </section>
    <!-- TEAM SECTION END -->
  </main>
@endsection
