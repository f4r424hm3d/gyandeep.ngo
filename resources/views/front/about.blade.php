@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">About Us</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>About Us</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <!-- ABOUT SECTION START -->
    <section class="ul-about ul-section-spacing wow animate__fadeInUp">
      <div class="ul-container">
        <div class="row row-cols-md-2 row-cols-1 align-items-center gy-4 ul-about-row">
          <div class="col">
            <div class="ul-about-imgs">
              <div class="img-wrapper">
                <img src="{{ asset('front') }}/assets/img/about-img.webp" alt="Image">
              </div>
              <div class="ul-about-imgs-vectors">
                <img src="{{ asset('front') }}/assets/img/about-img-vector-1.svg" alt="Image" class="vector-1">
                <img src="{{ asset('front') }}/assets/img/about-img-vector-2.svg" alt="Image" class="vector-2">
              </div>
            </div>
          </div>

          <!-- txt -->
          <div class="col">
            <div class="ul-about-txt">
              <span class="ul-section-sub-title ul-section-sub-title--2">About US</span>
              <h2 class="ul-section-title">Gyandeep Welfare & Rehabilitation Society</h2>
              <p class="ul-section-descr">Gyandeep Welfare & Rehabilitation Society is a pioneering NGO dedicated to
                empowering children with cognitive impairments and special needs. As Punjab’s leading special education
                institution, we provide a nurturing environment where children receive inclusive education, therapy, and
                rehabilitation services tailored to their unique needs.</p>

              <div class="ul-about-block">
                <div class="block-left">
                  <div class="block-heading">
                    <div class="icon"><i class="flaticon-love"></i></div>
                    <h3 class="block-title">Start Helping Team</h3>
                  </div>

                  <ul class="block-list">
                    <li>There are many variations of solve</li>
                  </ul>
                </div>
                <!-- <div class="block-right"><img src="{{ asset('front') }}/assets/img/about-block-img.webp" alt="Image"></div> -->
              </div>

              <div class="ul-about-bottom">
                <a href="{{ route('about') }}" class="ul-btn"><i
                    class="flaticon-fast-forward-double-right-arrows-symbol"></i>
                  Explore More</a>

                <div class="ul-about-call">
                  <div class="icon"><i class="flaticon-telephone-call"></i></div>
                  <div class="txt">
                    <span class="call-title">Call Any Time</span>
                    <a href="tel:+919810974090">+91-9810974090</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- vector -->
      <div class="ul-about-vectors">
        <img src="{{ asset('front') }}/assets/img/about-vector-1.webp" alt="vector" class="vector-1">
      </div>
    </section>
    <!-- ABOUT SECTION END -->

    <!-- STATS SECTION START -->
    <div class="ul-stats ul-section-spacing">
      <div class="ul-container">
        <div class="ul-stats-wrapper wow animate__fadeInUp">
          <div class="row row-cols-md-4 row-cols-sm-3 row-cols-2 row-cols-xxs-1 ul-bs-row justify-content-center">
            <div class="col">
              <div class="ul-stats-item items-stats">
                <i class="flaticon-costumer"></i>
                <span class="number">500+</span>
                <span class="txt">Total Happy Children</span>
              </div>
            </div>

            <div class="col">
              <div class="ul-stats-item items-stats-one">
                <i class="flaticon-team"></i>
                <span class="number">110+</span>
                <span class="txt">Total Our Volunteer</span>
              </div>
            </div>

            <div class="col">
              <div class="ul-stats-item items-stats-two">
                <i class="flaticon-package"></i>
                <span class="number">190+</span>
                <span class="txt">Our Products & Gifts</span>
              </div>
            </div>

            <div class="col">
              <div class="ul-stats-item items-stats-three">
                <i class="flaticon-relationship"></i>
                <span class="number">560+</span>
                <span class="txt">Worldwide Donor</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- STATS SECTION END -->

    <!-- MISSION, VISION, HISTORY SECTION START -->
    <section class="ul-about-tabs ul-events ul-section-spacing pt-0">
      <div class="ul-container">
        <!-- heading -->
        <div class="ul-section-heading align-items-center wow animate__fadeInUp">
          <div class="left">
            <span class="ul-section-sub-title">Gyandeep NGO History</span>
            <h2 class="ul-section-title text-white">Gyandeep: The Heart Behind the Work.</h2>
          </div>
          <a href="{{ route('events') }}" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i>
            Donate Now</a>
        </div>

        <!-- tab group -->
        <div class="tab-group">
          <!-- tabs -->
          <div class="tab-navs ul-about-tabs-nav">
            <button class="tab-nav active" data-tab="tab-mission"> Our Mission </button>
            <button class="tab-nav" data-tab="tab-vision">Our Vision</button>
            <button class="tab-nav" data-tab="tab-history">Our History</button>
          </div>

          <div class="ul-about-tabs-wrapper ">
            <div id="tab-mission" class="ul-tab ul-about-tab active">
              <div class="ul-about-tab-img">
                <img src="{{ asset('front') }}/assets/img/missions.webp" alt="Image">
              </div>

              <div class="ul-about-tab-txt">
                <h3 class="ul-about-tab-title">Our Mission </h3>
                <p class="ul-about-tab-descr">Our mission is to empower differently-abled individuals by providing them
                  with special education, skill development, healthcare support, and social inclusion opportunities. We
                  work towards breaking societal barriers, spreading awareness, and advocating for equal rights to
                  ensure every individual receives the care, education, and opportunities they deserve.

                </p>
                <!-- <ul class="ul-about-tab-list">
                                                      <li>Therapeutic Services like speech, physiotherapy, and behavioral therapy.</li>
                                                      <li>Inclusive Special Education tailored to each child’s unique learning needs.</li>
                                                      <li>Skill Development Programs to prepare individuals for real-world jobs.</li>
                                                      <li>Family & Parental Support to strengthen homes and build awareness
                                                          .</li>
                                                  </ul> -->
                <!-- <p class="ul-about-tab-descr">Behind every child we help and every family we guide, there is a team committed to creating lasting impact. Gyandeep is where care meets action—and where every life matters.</p> -->
              </div>
            </div>

            <!-- tab 02 / vision -->
            <div id="tab-vision" class="ul-tab ul-about-tab">
              <div class="ul-about-tab-img">
                <img src="{{ asset('front') }}/assets/img/vissons.webp" alt="Image">
              </div>

              <div class="ul-about-tab-txt">
                <h3 class="ul-about-tab-title">Our Vision</h3>
                <p class="ul-about-tab-descr">We envision a world where every person, regardless of ability, has access
                  to education, employment, and a supportive community. Through our programs, we aim to enhance the
                  quality of life for individuals with disabilities and marginalized groups, fostering self-reliance and
                  confidence.

                </p>
                <!-- <ul class="ul-about-tab-list">
                                                      <li>Promoting inclusive education</li>
                    <li>Expanding access to therapies</li>
                    <li>Empowering through vocational skills</li>
                    <li>Supporting families and caregivers</li>
                    <li>Advocating for disability rights</li>
                    <li>Distributing assistive devices</li>
                    <li>Raising awareness to end stigma</li>
                    <li>Building accessible public spaces</li>
                                                  </ul> -->
              </div>
            </div>

            <!-- tab 03 /  -->
            <div id="tab-history" class="ul-tab ul-about-tab">
              <div class="ul-about-tab-img">
                <img src="{{ asset('front') }}/assets/img/deep-school.webp" alt="Image">
              </div>

              <div class="ul-about-tab-txt">
                <h3 class="ul-about-tab-title">Our History</h3>
                <p class="ul-about-tab-descr">
                  Gyandeep Welfare & Rehabilitation Society was founded in Dasuya, Punjab, with a heartfelt mission to
                  support individuals with disabilities—especially children who were often overlooked in traditional
                  education and healthcare systems. What began as a small initiative led by compassionate educators and
                  social workers soon transformed into a full-fledged movement for inclusion and empowerment.
                </p>

                <p class="ul-about-tab-descr">
                  In our early years, we focused on providing special education and basic therapies to children with
                  intellectual and physical disabilities. As we witnessed the life-changing impact of our work, we
                  expanded to include speech and occupational therapy, vocational training, parental counseling, and
                  assistive device support. Every service was developed with the belief that ability should never be
                  defined by limitation.
                </p>

                <p class="ul-about-tab-descr">
                  Today, Gyandeep stands as a trusted institution that has touched hundreds of lives across the region.
                  Through advocacy, education, and community engagement, we continue to grow—with the same passion and
                  purpose that inspired our journey from day one.
                </p>

              </div>
            </div>
          </div>

        </div>

        <!-- vectors -->
        <div class="ul-events-vectors">
          <img src="{{ asset('front') }}/assets/img/events-vector-2.svg" alt="Events Image" class="vector-2">
        </div>
      </div>
    </section>
    <!-- MISSION, VISION, HISTORY SECTION END -->

    <!-- TEAM SECTION START -->
    <section class="ul-team ul-section-spacing">
      <div class="ul-container">
        <!-- Heading -->
        <div class="ul-section-heading justify-content-between">
          <div class="left">
            <span class="ul-section-sub-title">Our Team</span>
            <h2 class="ul-section-title">Skilled Legal Professionals Dedicated to You</h2>
          </div>
          <div>
            <a href="{{ route('team') }}" class="ul-btn"><i
                class="flaticon-fast-forward-double-right-arrows-symbol"></i> Join
              With us</a>
          </div>
        </div>

        <!-- <div class="row row-cols-md-4 row-cols-sm-3 row-cols-2 row-cols-xxs-1 ul-team-row justify-content-center">
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
                    <h3 class="ul-team-member-name"><a href="#">Aman Ahlawat</a></h3>
                    <p class="ul-team-member-designation">General Secretary</p>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="ul-team-member">
                  <div class="ul-team-member-img">
                    <img src="{{ asset('front') }}/assets/img/puran-chand.webp" alt="Team Member Image">
                    <div class="ul-team-member-socials">
                      <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                      <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                      <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
                      <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                    </div>
                  </div>
                  <div class="ul-team-member-info">
                    <h3 class="ul-team-member-name"><a href="#">Puran Chand</a></h3>
                    <p class="ul-team-member-designation">President</p>
                  </div>
                </div>
              </div>

            </div> -->

        <!-- duplicate section start -->

        <div class="row ul-team-row justify-content-center">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="row ul-team-member main-member">
              <div class="col-12 col-sm-5 col-md-4 col-lg-6">
                <div class="ul-team-member-img">
                  <img src="{{ asset('front') }}/assets/img/aman-mam.webp" alt="Team Member Image">
                  <div class="ul-team-member-socials">
                    <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                    <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/gyandeep-ngo"><i
                        class="flaticon-linkedin-big-logo"></i></a>
                    <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-7 col-md-8 col-lg-6">
                <div class="ul-team-member-info">
                  <h3 class="ul-team-member-name"><a href="#">Aman Ahlawat</a></h3>
                  <p class="ul-team-memberd">General Secretary</p>
                  <p class="ul-team-member-designation">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia
                    dignissimos odio eum. Nostrum rem minima unde hic nobis provident explicabo culpa pariatur expedita
                    quam, fugit dolorum aliquam atque corrupti repellat.</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="row ul-team-member main-member">
              <div class="col-12 col-sm-5 col-md-4 col-lg-6">
                <div class="ul-team-member-img">
                  <img src="{{ asset('front') }}/assets/img/puran-chand.webp" alt="Team Member Image">
                  <div class="ul-team-member-socials">
                    <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                    <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/gyandeep-ngo"><i
                        class="flaticon-linkedin-big-logo"></i></a>
                    <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-7 col-md-8 col-lg-6">
                <div class="ul-team-member-info">
                  <h3 class="ul-team-member-name"><a href="#">Puran Chand</a></h3>
                  <p class="ul-team-memberd">President</p>
                  <p class="ul-team-member-designation">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia
                    dignissimos odio eum. Nostrum rem minima unde hic nobis provident explicabo culpa pariatur expedita
                    quam, fugit dolorum aliquam atque corrupti repellat.</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <!-- <section class="team-owner">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-6">
                  <div class="row">
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                    <div class="owner-team">
                    <img src="{{ asset('front') }}/assets/img/aman-mam.webp" alt="Team Member Image">
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                    <div class="owner-details">
                      <h4>Aman Alawat</h4>
                      <h6>General Secretary</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et suscipit, vitae ipsa tenetur pariatur voluptatibus expedita quibusdam vel saepe fugiat debitis aspernatur eveniet. Necessitatibus reprehenderit ipsum veniam facere sunt soluta.</p>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6">
                  <div class="row">
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                    <div class="owner-team">
                    <img src="{{ asset('front') }}/assets/img/aman-mam.webp" alt="Team Member Image">
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                    <div class="owner-details">
                      <h4>Aman Alawat</h4>
                      <h6>General Secretary</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et suscipit, vitae ipsa tenetur pariatur voluptatibus expedita quibusdam vel saepe fugiat debitis aspernatur eveniet. Necessitatibus reprehenderit ipsum veniam facere sunt soluta.</p>
                    </div>
                  </div>
                </div>
                  </div>
                </div>
             
              </div>
             </section> -->
        <!-- duplicate section end -->

      </div>
    </section>
    <!-- TEAM SECTION END -->

    <!-- CTA(CALL TO ACTION) SECTION START -->
    <section class="ul-cta">
      <div class="ul-container">
        <span class="ul-section-sub-title">Start Donating Poor People</span>
        <h2 class="ul-cta-title">Children Need Your Help By Donating Today</h2>
        <a href="#" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Get A
          Quote</a>
      </div>
      <img src="{{ asset('front') }}/assets/img/cta-vector.svg" alt="Vector" class="ul-cta-vector">
    </section>
    <!-- CTA(CALL TO ACTION) SECTION END -->

    <!-- TESTIMONIAL SECTION START -->
    <section class="ul-testimonial-2 ul-section-spacing">
      <div class="ul-container wow animate__fadeInUp">
        <div class="ul-section-heading">
          <div>
            <span class="ul-section-sub-title">Start donating poor people</span>
            <h2 class="ul-section-title">What People Say About us</h2>
          </div>
          <a href="#" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> All
            Testimonials</a>
        </div>

        <div class="row ul-testimonial-2-row gy-4">
          <!-- card -->
          <div class="col-md-4">
            <div class="ul-testimonial-2-overview">
              <span class="rating">4.9</span>
              <div class="ul-testimonial-2-overview-stars">
                <i class="flaticon-star"></i>
                <i class="flaticon-star"></i>
                <i class="flaticon-star"></i>
                <i class="flaticon-star"></i>
                <i class="flaticon-star-1"></i>
              </div>
              <span class="ul-testimonial-2-overview-title">5 Start Rating</span>
              <p class="ul-testimonial-2-overview-descr">Our inclusive mission and compassionate care have earned us
                the trust of families and communities we proudly serve.</p>
              <div class="ul-testimonial-2-overview-reviewers">
                <img src="{{ asset('front') }}/assets/img/user-profile-2.webp" alt="Reviewer">
                <img src="{{ asset('front') }}/assets/img/user-profile-2.webp" alt="Reviewer">
                <img src="{{ asset('front') }}/assets/img/user-profile-2.webp" alt="Reviewer">
                <img src="{{ asset('front') }}/assets/img/user-profile-2.webp" alt="Reviewer">
              </div>
            </div>
          </div>

          <!-- txt -->
          <div class="col-md-8">
            <div class="ul-testimonial-2-slider swiper">
              <div class="swiper-wrapper">
                <!-- single slide -->
                <div class="swiper-slide">
                  <div class="ul-review ul-review-2">
                    <span class="icon"><i class="flaticon-quote-1"></i></span>
                    <p class="ul-review-descr">“Gyandeep has been a blessing for our family. My son received speech
                      therapy and special education, and the progress he’s made is incredible. The team treats every
                      child with love and dignity. We are forever grateful for their support and care.”</p>
                    <div class="ul-review-bottom">
                      <div class="ul-review-reviewer">
                        <div class="reviewer-image"><img src="{{ asset('front') }}/assets/img/user-profile.webp"
                            alt="reviewer image">
                        </div>
                        <div>
                          <h3 class="reviewer-name">Harpreet Kaur
                          </h3>
                          <span class="reviewer-role">Parent & Homemaker, Dasuya</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- single slide -->
                <div class="swiper-slide">
                  <div class="ul-review ul-review-2">
                    <span class="icon"><i class="flaticon-quote-1"></i></span>
                    <p class="ul-review-descr">“I’ve referred many parents to Gyandeep, and the feedback is always
                      positive. Their dedication to special needs education, therapies, and vocational training is
                      commendable. They are truly transforming lives in our community.”</p>
                    <div class="ul-review-bottom">
                      <div class="ul-review-reviewer">
                        <div class="reviewer-image"><img src="{{ asset('front') }}/assets/img/user-profile.webp"
                            alt="reviewer image">
                        </div>
                        <div>
                          <h3 class="reviewer-name">Rajinder Singh </h3>
                          <span class="reviewer-role">Govt. School Teacher, Hoshiarpur
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="ul-testimonial-2-slider-nav">
                <button class="prev"><i class="flaticon-back"></i></button>
                <button class="next"><i class="flaticon-next"></i></button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- TESTIMONIAL SECTION END -->
  </main>
@endsection
