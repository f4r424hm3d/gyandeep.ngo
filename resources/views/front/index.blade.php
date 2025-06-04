@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main class="overflow-hidden">
    <!-- BANNER SECTION START -->
    <section class="ul-banner">
      <div class="ul-banner-container">
        <div class="row gy-4 row-cols-lg-2 row-cols-1 align-items-center flex-column-reverse flex-lg-row">
          <!-- banner text -->
          <div class="col">
            <div class="ul-banner-txt">
              <div class="wow animate__fadeInUp">
                <span class="ul-banner-sub-title ul-section-sub-title">Change The World Together</span>
                <h1 class="ul-banner-title">Bright Futures Begin with Your Support</h1>
                <p class="ul-banner-descr">Providing education, therapy, and skill development to help children with
                  disabilities lead independent and fulfilling lives.</p>
                <div class="ul-banner-btns">
                  <a href="{{ route('donation.details') }}" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Make Donation</a>

                  <div class="ul-banner-stat">
                    <div class="imgs">
                      <img src="{{ asset('front') }}/assets/img/user-profile-2.png" alt="Person">
                      <img src="{{ asset('front') }}/assets/img/user-profile-2.png" alt="Person">
                      <img src="{{ asset('front') }}/assets/img/user-profile-2.png" alt="Person">
                      <span class="number">2.M</span>
                    </div>
                    <span class="txt">Active donors</span>
                  </div>
                </div>
              </div>

              <img src="{{ asset('front') }}/assets/img/vector-img.png" alt="Vector" class="ul-banner-txt-vector">
            </div>
          </div>

          <!-- img -->
          <div class="col align-self-start">
            <div class="ul-banner-img">
              <div class="img-wrapper">
                <img src="{{ asset('front') }}/assets/img/gn-front.jpeg" alt="Banner Image">
                <!-- <div class="ul-banner-video-btn">
                                                          <a href=""></a>
                                                      </div> -->
              </div>
              <div class="ul-banner-img-vectors">
                <img src="{{ asset('front') }}/assets/img/banner-img-vector-1.png" alt="vector"
                  class="vector-1 wow animate__fadeInRight">
                <img src="{{ asset('front') }}/assets/img/banner-img-vector-2.png" alt="vector"
                  class="vector-2 wow animate__fadeInDown">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BANNER SECTION END -->

    <!-- ABOUT SECTION START -->
    <section class="ul-about ul-section-spacing wow animate__fadeInUp">
      <div class="ul-container">
        <div class="row row-cols-md-2 row-cols-1 align-items-center gy-4 ul-about-row">
          <div class="col">
            <div class="ul-about-imgs">
              <div class="img-wrapper">
                <img src="{{ asset('front') }}/assets/img/about-img.png" alt="Image">
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
              <h2 class="ul-section-title ">Helping Each Other can Make World Better</h2>
              <!-- <p class="ul-section-descr">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit The aspernaturaut odit aut fugit, sed quia consequuntur. Nonprofits around the world apply and join us to access more funding.</p> -->
              <p class="ul-section-descr mb-1"> At Gyandeep Welfare and Rehabilitation Society, we are committed to
                empowering disabled children through education, therapy, and skill development.</p>

              <ul class="details-ngo">
                <li> <img src="{{ asset('front') }}/assets/img/placeholder.png" alt=""> <b>Location</b>: Dasuya,
                  Punjab</li>
                <li><img src="{{ asset('front') }}/assets/img/online-registration.png" alt=""> <b>Reg. No.</b>:
                  92/2014-15</li>
                <li><img src="{{ asset('front') }}/assets/img/home.png" alt=""> <b>Address</b>: H.No. 538/1, Ward
                  7, Kirpal Colony,
                  Dasuya,
                  District Hoshiarpur, Punjab – 144205</li>
                <li><img src="{{ asset('front') }}/assets/img/phone-call.png" alt=""><b>Contact No</b> +91
                  9870406867</li>
              </ul>

              <p class="ul-section-descr mb-1">Join us in making a difference! Support our mission to create a more
                inclusive and brighter future for children with disabilities.
              </p>

              <div class="ul-about-block">
                <div class="block-left">
                  <div class="block-heading">
                    <div class="icon"><i class="flaticon-love"></i></div>
                    <h3 class="block-title">Start Helping Team</h3>
                  </div>

                </div>
                <!-- <div class="block-right"><img src="{{ asset('front') }}/assets/img/about-block-img.jpg" alt="Image"></div> -->
              </div>

              <div class="ul-about-bottom">
                <a href="{{ route('about') }}" class="ul-btn"><i
                    class="flaticon-fast-forward-double-right-arrows-symbol"></i>
                  Explore More</a>

                <div class="ul-about-call">
                  <div class="icon"><i class="flaticon-telephone-call"></i></div>
                  <div class="txt">
                    <span class="call-title">Call Any Time</span>
                    <a href="tel:+919711908590">+91 9711908590</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- vector -->
      <div class="ul-about-vectors">
        <img src="{{ asset('front') }}/assets/img/about-vector-1.png" alt="vector" class="vector-1">
      </div>
    </section>
    <!-- ABOUT SECTION END -->

    <!-- DONTATIONS SECTION START -->
    <section class="ul-donations ul-section-spacing overflow-hidden">
      <!-- heading -->
      <div class="ul-container">
        <div class="ul-section-heading ul-donations-heading justify-content-between text-center">
          <div class="left">
            <span class="ul-section-sub-title"><span class="txt">Help & Donate us</span></span>
            <h2 class="ul-section-title">Active Fundraising Campaigns</h2>
          </div>

          <div class="flex-shrink-0">
            <div class="ul-banner-stat">
              <div class="imgs">
                <img src="{{ asset('front') }}/assets/img/user-profile-2.png" alt="Person">
                <img src="{{ asset('front') }}/assets/img/user-profile-2.png" alt="Person">
                <img src="{{ asset('front') }}/assets/img/user-profile-2.png" alt="Person">
                <span class="number">2.M</span>
              </div>
              <span class="txt text-white">Active donors</span>
            </div>
          </div>
          <div class="ul-slider-nav ul-donations-slider-nav">
            <button class="prev"><i class="flaticon-back"></i></button>
            <button class="next"><i class="flaticon-next"></i></button>
          </div>
        </div>
      </div>

      <!-- DONTATIONS slider -->
      <div class="ul-container wow animate__fadeInUp">
        <div class="ul-donations-slider swiper overflow-visible">
          <div class="swiper-wrapper">
            <!-- single item -->
            <div class="swiper-slide">
              <div class="ul-donation">
                <div class="ul-donation-img">
                  <img src="{{ asset('front') }}/assets/img/education-based.jpeg" alt="donation Image">
                </div>
                <div class="ul-donation-txt">
                  <div class="ul-donation-progress">
                    <div class="donation-progress-container ul-progress-container">
                      <div class="donation-progressbar ul-progressbar" data-ul-progress-value="55">
                        <div class="donation-progress-label ul-progress-label"></div>
                      </div>
                    </div>
                    <div class="ul-donation-progress-labels">
                      <span class="ul-donation-progress-label">Raised : ₹16,500</span>
                      <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                    </div>
                  </div>
                  <a href="{{ route('donation.details') }}" class="ul-donation-title">Keep Education Accessible for
                    Disabled
                    Children</a>
                  <p class="ul-donation-descr">Your generous donation provides essential books, tools, and teacher
                    training for inclusive education.</p>
                  <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                      class="flaticon-up-right-arrow"></i></a>
                </div>
              </div>
            </div>

            <!-- single item -->
            <div class="swiper-slide">
              <div class="ul-donation">
                <div class="ul-donation-img">
                  <img src="{{ asset('front') }}/assets/img/therapy-stude.jpeg" alt="donation Image">
                </div>
                <div class="ul-donation-txt">
                  <div class="ul-donation-progress">
                    <div class="donation-progress-container ul-progress-container">
                      <div class="donation-progressbar ul-progressbar" data-ul-progress-value="85">
                        <div class="donation-progress-label ul-progress-label"></div>
                      </div>
                    </div>
                    <div class="ul-donation-progress-labels">
                      <span class="ul-donation-progress-label">Raised : ₹25,000</span>
                      <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                    </div>
                  </div>
                  <a href="{{ route('donation.details') }}" class="ul-donation-title">Fund Therapy for Children with
                    Disabilities</a>
                  <p class="ul-donation-descr">Help kids receive speech, physical, and occupational therapy to improve
                    their lives.</p>
                  <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                      class="flaticon-up-right-arrow"></i></a>
                </div>
              </div>
            </div>

            <!-- single item -->
            <div class="swiper-slide">
              <div class="ul-donation">
                <div class="ul-donation-img">
                  <img src="{{ asset('front') }}/assets/img/support-skill.jpeg" alt="donation Image">
                </div>
                <div class="ul-donation-txt">
                  <div class="ul-donation-progress">
                    <div class="donation-progress-container ul-progress-container">
                      <div class="donation-progressbar ul-progressbar" data-ul-progress-value="50">
                        <div class="donation-progress-label ul-progress-label"></div>
                      </div>
                    </div>
                    <div class="ul-donation-progress-labels">
                      <span class="ul-donation-progress-label">Raised : ₹15,000</span>
                      <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                    </div>
                  </div>
                  <a href="{{ route('donation.details') }}" class="ul-donation-title">Support Skill Training for
                    Disabled
                    Youth</a>
                  <p class="ul-donation-descr">We train youth in sewing, IT, and crafts—empowering them with job
                    opportunities.</p>
                  <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                      class="flaticon-up-right-arrow"></i></a>
                </div>
              </div>
            </div>

            <!-- single item -->
            <div class="swiper-slide">
              <div class="ul-donation">
                <div class="ul-donation-img">
                  <img src="{{ asset('front') }}/assets/img/mobilitys.jpeg" alt="donation Image">
                </div>
                <div class="ul-donation-txt">
                  <div class="ul-donation-progress">
                    <div class="donation-progress-container ul-progress-container">
                      <div class="donation-progressbar ul-progressbar" data-ul-progress-value="65">
                        <div class="donation-progress-label ul-progress-label"></div>
                      </div>
                    </div>
                    <div class="ul-donation-progress-labels">
                      <span class="ul-donation-progress-label">Raised : ₹20,000</span>
                      <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                    </div>
                  </div>
                  <a href="{{ route('donation.details') }}" class="ul-donation-title">Provide Mobility Aids to Those in
                    Need</a>
                  <p class="ul-donation-descr">Your support provides wheelchairs, hearing aids, and walkers to those who
                    need them.</p>
                  <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                      class="flaticon-up-right-arrow"></i></a>
                </div>
              </div>
            </div>

            <!-- single item -->
            <div class="swiper-slide">
              <div class="ul-donation">
                <div class="ul-donation-img">
                  <img src="{{ asset('front') }}/assets/img/donation-5.jpeg" alt="donation Image">
                </div>
                <div class="ul-donation-txt">
                  <div class="ul-donation-progress">
                    <div class="donation-progress-container ul-progress-container">
                      <div class="donation-progressbar ul-progressbar" data-ul-progress-value="80">
                        <div class="donation-progress-label ul-progress-label"></div>
                      </div>
                    </div>
                    <div class="ul-donation-progress-labels">
                      <span class="ul-donation-progress-label">Raised : ₹24,000</span>
                      <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                    </div>
                  </div>
                  <a href="{{ route('donation.details') }}" class="ul-donation-title">Help Parents Support Their
                    Special
                    Children</a>
                  <p class="ul-donation-descr">We offer guidance and counseling to parents—ensuring they get the right
                    resources.</p>
                  <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                      class="flaticon-up-right-arrow"></i></a>
                </div>
              </div>
            </div>

            <!-- single item -->
            <div class="swiper-slide">
              <div class="ul-donation">
                <div class="ul-donation-img">
                  <img src="{{ asset('front') }}/assets/img/school-donations.jpeg" alt="donation Image">
                </div>
                <div class="ul-donation-txt">
                  <div class="ul-donation-progress">
                    <div class="donation-progress-container ul-progress-container">
                      <div class="donation-progressbar ul-progressbar" data-ul-progress-value="85">
                        <div class="donation-progress-label ul-progress-label"></div>
                      </div>
                    </div>
                    <div class="ul-donation-progress-labels">
                      <span class="ul-donation-progress-label">Raised : ₹25,000</span>
                      <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                    </div>
                  </div>
                  <a href="{{ route('donation.details') }}" class="ul-donation-title">Make Schools Inclusive for Every
                    Child</a>
                  <p class="ul-donation-descr">We build ramps, train teachers, and provide tools to make schools
                    accessible for all.</p>
                  <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                      class="flaticon-up-right-arrow"></i></a>
                </div>
              </div>
            </div>

            <!-- single item -->
            <div class="swiper-slide">
              <div class="ul-donation">
                <div class="ul-donation-img">
                  <img src="{{ asset('front') }}/assets/img/deep-school.jpeg" alt="donation Image">
                </div>
                <div class="ul-donation-txt">
                  <div class="ul-donation-progress">
                    <div class="donation-progress-container ul-progress-container">
                      <div class="donation-progressbar ul-progressbar" data-ul-progress-value="50">
                        <div class="donation-progress-label ul-progress-label"></div>
                      </div>
                    </div>
                    <div class="ul-donation-progress-labels">
                      <span class="ul-donation-progress-label">Raised : ₹15,000</span>
                      <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                    </div>
                  </div>
                  <a href="{{ route('donation.details') }}" class="ul-donation-title">Raise Awareness for Disability
                    Inclusion</a>
                  <p class="ul-donation-descr">Your donation helps run workshops and campaigns to promote disability
                    acceptance.</p>
                  <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                      class="flaticon-up-right-arrow"></i></a>
                </div>
              </div>
            </div>

            <!-- single item -->
            <div class="swiper-slide">
              <div class="ul-donation">
                <div class="ul-donation-img">
                  <img src="{{ asset('front') }}/assets/img/donation-8.jpeg" alt="donation Image">
                </div>
                <div class="ul-donation-txt">
                  <div class="ul-donation-progress">
                    <div class="donation-progress-container ul-progress-container">
                      <div class="donation-progressbar ul-progressbar" data-ul-progress-value="65">
                        <div class="donation-progress-label ul-progress-label"></div>
                      </div>
                    </div>
                    <div class="ul-donation-progress-labels">
                      <span class="ul-donation-progress-label">Raised : ₹20,000</span>
                      <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                    </div>
                  </div>
                  <a href="{{ route('donation.details') }}" class="ul-donation-title">Fund Healthcare for Disabled
                    Children</a>
                  <p class="ul-donation-descr">We provide food, therapy, and financial aid—helping struggling families
                    care for their children.</p>
                  <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                      class="flaticon-up-right-arrow"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="ul-dontations-slider-pagination d-none"></div>
        </div>
      </div>
    </section>
    <!-- DONTATIONS SECTION END -->

    <!-- DONATE SECTION START -->
    <div class="ul-section-spacing">
      <div class="ul-container">
        <div class="ul-donate-form-section">
          <div class="row justify-content-between align-items-center">
            <!-- donate form -->
            <div class="col-lg-6 position-relative">
              <div class="ul-donate-form-wrapper">
                <h3 class="ul-donate-form-title">Custome Donate Now</h3>
                <form action="#" class="ul-donate-form">
                  <div>
                    <input type="radio" name="donate-amount" id="donate-amount-1" checked hidden>
                    <label for="donate-amount-1" class="ul-donate-form-label">₹10</label>
                  </div>

                  <div>
                    <input type="radio" name="donate-amount" id="donate-amount-2" hidden>
                    <label for="donate-amount-2" class="ul-donate-form-label">₹20</label>
                  </div>

                  <div>
                    <input type="radio" name="donate-amount" id="donate-amount-3" hidden>
                    <label for="donate-amount-3" class="ul-donate-form-label">₹30</label>
                  </div>

                  <div>
                    <input type="radio" name="donate-amount" id="donate-amount-4" hidden>
                    <label for="donate-amount-4" class="ul-donate-form-label">₹40</label>
                  </div>

                  <div>
                    <input type="radio" name="donate-amount" id="donate-amount-5" hidden>
                    <label for="donate-amount-5" class="ul-donate-form-label">₹50</label>
                  </div>

                  <div class="custom-amount-wrapper">
                    <input type="radio" name="donate-amount" id="custom-amount">
                    <label for="donate-amount-custom" class="ul-donate-form-label">
                      <input type="number" name="custom-amount" id="donate-amount-custom" placeholder="Custom Amount"
                        class="ul-donate-form-custom-input">
                    </label>
                  </div>

                  <div>
                    <button type="submit" class="ul-btn"><i
                        class="flaticon-fast-forward-double-right-arrows-symbol"></i>
                      Donate Now</button>
                  </div>
                </form>
              </div>
              <img src="{{ asset('front') }}/assets/img/donate-form-vector.svg" alt="vector"
                class="ul-donate-form-vector">
            </div>

            <!-- donate form  -->
            <div class="col-xl-5 col-lg-6">
              <div class="ul-donate-form-section-txt">
                <span class="ul-section-sub-title text-white">Donate Now</span>
                <h2 class="ul-section-title text-white">No gift is too small or too big – donate as much as you can!
                </h2>

                <div class="ul-donation-progress">
                  <div class="donation-progress-container ul-progress-container">
                    <div class="donation-progressbar ul-progressbar" data-ul-progress-value="65">
                      <div class="donation-progress-label ul-progress-label"></div>
                    </div>
                  </div>
                  <div class="ul-donation-progress-labels">
                    <span class="ul-donation-progress-label">Raised : ₹20,000</span>
                    <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- DONATE SECTION END -->

    <!-- STATS SECTION START -->
    <div class="ul-stats ul-section-spacing">
      <div class="ul-container">
        <div class="ul-stats-wrapper wow animate__fadeInUp">
          <div class="row row-cols-md-4 row-cols-sm-3 row-cols-2 row-cols-xxs-1 ul-bs-row justify-content-center">
            <div class="col">
              <div class="ul-stats-item items-stats">
                <i class="flaticon-costumer"></i>
                <span class="number">260+</span>
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

    <!-- EVENTS SECTION START -->
    <section class="ul-events ul-section-spacing pt-0">
      <div class="ul-container">
        <!-- heading -->
        <div class="ul-section-heading align-items-center wow animate__fadeInUp">
          <div class="left">
            <span class="ul-section-sub-title">Upcoming Events</span>
            <h2 class="ul-section-title text-white">Together We Rise: Events by Gyandeep</h2>
          </div>
          <a href="{{ route('events') }}" class="ul-btn"><i
              class="flaticon-fast-forward-double-right-arrows-symbol"></i> Explore
            More</a>
        </div>

        <!-- events -->
        <div class="ul-events-wrapper">
          <div class="row ul-bs-row row-cols-lg-2 row-cols-1">
            <!-- single event -->
            <div class="col wow animate__fadeInUp">
              <div class="ul-event">
                <div class="ul-event-img">
                  <img src="{{ asset('front') }}/assets/img/sparashs.jpeg" alt="Event Image">
                  <span class="date">18 <span>Aug</span></span>
                </div>
                <div class="ul-event-txt">
                  <h3 class="ul-event-title"><a href="event-details.html">Sparsh 2024 – Devices That Empower.</a></h3>
                  <p class="ul-event-descr">Aids like wheelchairs & hearing tools shared with 300+ people.</p>
                  <div class="ul-event-info">
                    <span class="ul-event-info-title">Venue</span>
                    <p class="ul-event-info-descr">Dasuya Community Hall Punjab, India</p>
                  </div>
                  <a href="event-details.html" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Event Details</a>
                </div>
              </div>
            </div>

            <!-- single event -->
            <div class="col wow animate__fadeInUp">
              <div class="ul-event">
                <div class="ul-event-img">
                  <img src="{{ asset('front') }}/assets/img/udaan-2.jpeg" alt="Event Image">
                  <span class="date">15 <span>Dec</span></span>
                </div>
                <div class="ul-event-txt">
                  <h3 class="ul-event-title"><a href="event-details-one.html">Udaan – Vocational Training Showcase</a>
                  </h3>
                  <p class="ul-event-descr">Udaan showcased skills & certified trainees for self-employment.</p>
                  <div class="ul-event-info">
                    <span class="ul-event-info-title">Venue</span>
                    <p class="ul-event-info-descr">Gyandeep Vocational Training Center
                      Dasuya, Punjab</p>
                  </div>
                  <a href="event-details-one.html" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Event Details</a>
                </div>
              </div>
            </div>

            <!-- single event -->
            <div class="col wow animate__fadeInUp">
              <div class="ul-event">
                <div class="ul-event-img">
                  <img src="{{ asset('front') }}/assets/img/asaha.jpg" alt="Event Image">
                  <span class="date">20 <span>May</span></span>
                </div>
                <div class="ul-event-txt">
                  <h3 class="ul-event-title"><a href="event-details-two.html">Aasha 2023 – Healing Minds Together</a>
                  </h3>
                  <p class="ul-event-descr">Support camp with therapy, yoga & guidance for parents of special kids.</p>
                  <div class="ul-event-info">
                    <span class="ul-event-info-title">Venue</span>
                    <p class="ul-event-info-descr">Gyandeep School
                      Dasuya, Punjab</p>
                  </div>
                  <a href="event-details-two.html" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Event Details</a>
                </div>
              </div>
            </div>

            <!-- single event -->
            <div class="col wow animate__fadeInUp">
              <div class="ul-event">
                <div class="ul-event-img">
                  <img src="{{ asset('front') }}/assets/img/Saksham.png" alt="Event Image">
                  <span class="date">25 <span>Nov</span></span>
                </div>
                <div class="ul-event-txt">
                  <h3 class="ul-event-title"><a href="event-details-three.html">Saksham Bal Mela – Inclusive Fun
                      Fair.</a></h3>
                  <p class="ul-event-descr">Inclusive fair with sensory games, art & disability awareness booths</p>
                  <div class="ul-event-info">
                    <span class="ul-event-info-title">Venue</span>
                    <p class="ul-event-info-descr">Public Grounds, Hoshiarpur Road, Dasuya.</p>
                  </div>
                  <a href="event-details-three.html" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Event Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- vectors -->
      <div class="ul-events-vectors">
        <img src="{{ asset('front') }}/assets/img/events-vector-1.png" alt="Events Image" class="vector-1">
        <img src="{{ asset('front') }}/assets/img/events-vector-2.svg" alt="Events Image" class="vector-2">
      </div>
    </section>
    <!-- EVENTS SECTION END -->

    <!-- WHY JOIN SECTION START -->
    <section class="ul-why-join ul-section-spacing">
      <div class="ul-why-join-wrapper ul-section-spacing">
        <div class="ul-container">
          <div class="row row-cols-md-2 row-cols-1 gy-4 align-items-center">
            <div class="col">
              <div class="ul-why-join-img">
                <!-- <img src="{{ asset('front') }}/assets/img/why-join.jpg" alt="Image"> -->
                <img src="{{ asset('front') }}/assets/img/Volunteer-2.jpg" alt="Image">
              </div>
            </div>

            <!-- txt -->
            <div class="col">
              <div class="ul-why-join-txt">
                <span class="ul-section-sub-title">Join us</span>
                <h2 class="ul-section-title">Become a Volunteer – Support Special Children & Transform Lives!
                </h2>
                <p class="ul-section-descr">Join our mission of empowering differently-abled and special needs children.
                  Your time and efforts can make a world of difference in their lives.</p>

                <div class="ul-accordion">
                  <div class="ul-single-accordion-item open">
                    <div class="ul-single-accordion-item__header">
                      <div class="left">
                        <h3 class="ul-single-accordion-item__title">We need Special Educators & Therapists</h3>
                      </div>
                      <span class="icon"><i class="flaticon-next"></i></span>
                    </div>

                    <div class="ul-single-accordion-item__body">
                      <p>Help children develop essential life skills through tailored speech, occupational, and
                        physiotherapy sessions.</p>
                    </div>
                  </div>

                  <div class="ul-single-accordion-item">
                    <div class="ul-single-accordion-item__header">
                      <div class="left">
                        <h3 class="ul-single-accordion-item__title">We need Teachers & Braille Instructors</h3>
                      </div>
                      <span class="icon"><i class="flaticon-next"></i></span>
                    </div>

                    <div class="ul-single-accordion-item__body">
                      <p>Educate and empower children with disabilities by enhancing literacy, numeracy, and
                        communication skills.</p>
                    </div>
                  </div>

                  <div class="ul-single-accordion-item">
                    <div class="ul-single-accordion-item__header">
                      <div class="left">
                        <h3 class="ul-single-accordion-item__title">We need Medical & Healthcare Professionals </h3>
                      </div>
                      <span class="icon"><i class="flaticon-next"></i></span>
                    </div>

                    <div class="ul-single-accordion-item__body">
                      <p> Provide medical care, counselling, and rehabilitation support to ensure the well-being of the
                        children.</p>
                    </div>
                  </div>
                  <div class="ul-single-accordion-item">
                    <div class="ul-single-accordion-item__header">
                      <div class="left">
                        <h3 class="ul-single-accordion-item__title">We need Students & Young Professionals </h3>
                      </div>
                      <span class="icon"><i class="flaticon-next"></i></span>
                    </div>

                    <div class="ul-single-accordion-item__body">
                      <p> Assist in mentorship, creative workshops, and classroom activities while gaining valuable
                        experience.</p>
                    </div>
                  </div>
                  <div class="ul-single-accordion-item">
                    <div class="ul-single-accordion-item__header">
                      <div class="left">
                        <h3 class="ul-single-accordion-item__title">We need Artists & Musicians </h3>
                      </div>
                      <span class="icon"><i class="flaticon-next"></i></span>
                    </div>

                    <div class="ul-single-accordion-item__body">
                      <p> Use art, music, and creative expression to boost confidence and emotional well-being in
                        children.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- WHY JOIN SECTION END -->

    <!-- TEAM SECTION START -->
    <!-- <section class="ul-team ul-section-spacing pt-0">
                                  <div class="ul-container">
                                      Heading
                                      <div class="ul-section-heading justify-content-between">
                                          <div class="left">
                                              <span class="ul-section-sub-title">Our Team</span>
                                              <h2 class="ul-section-title">Skilled Legal Professionals Dedicated to You</h2>
                                          </div>
                                          <div>
                                              <a href="{{ route('team') }}" class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Join With us</a>
                                          </div>
                                      </div>

                                      <div class="row row-cols-md-4 row-cols-sm-3 row-cols-2 row-cols-xxs-1 ul-team-row justify-content-center">
                                          single member
                                          <div class="col">
                                              <div class="ul-team-member">
                                                  <div class="ul-team-member-img">
                                                      <img src="{{ asset('front') }}/assets/img/aman-mam.jpeg" alt="Team Member Image">
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

                                          single member
                                          <div class="col">
                                              <div class="ul-team-member">
                                                  <div class="ul-team-member-img">
                                                      <img src="{{ asset('front') }}/assets/img/rahul-sharma.jpeg" alt="Team Member Image">
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

                                          single member
                                          <div class="col">
                                              <div class="ul-team-member">
                                                  <div class="ul-team-member-img">
                                                      <img src="{{ asset('front') }}/assets/img/member-3.jpg" alt="Team Member Image">
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
                                          </div>

                                          single member
                                           <div class="col">
                                              <div class="ul-team-member">
                                                  <div class="ul-team-member-img">
                                                      <img src="{{ asset('front') }}/assets/img/member-4.jpg" alt="Team Member Image">
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
                                          </div>
                                      </div>
                                  </div>
                              </section> -->
    <!-- TEAM SECTION END -->

    <!-- TESTIMONIAL SECTION START -->
    <section class="ul-testimonial ul-section-spacing">
      <div class="ul-testimonial-container">
        <div class="ul-section-heading text-center">
          <div>
            <span class="ul-section-sub-title">Testimonials</span>
            <h2 class="ul-section-title">What They Are Talking About Charitics</h2>
          </div>
        </div>

        <div class="ul-testimonial-slider swiper new-swiper">
          <div class="swiper-wrapper">
            <!-- single slide -->
            <div class="swiper-slide">
              <div class="ul-review">
                <div class="ul-review-rating">
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star-1"></i>
                </div>
                <p class="ul-review-descr">Gyandeep Welfare Association is doing an amazing job. They help kids become
                  more confident and disciplined. It’s great to see children learning in such a positive environment!.
                </p>
                <div class="ul-review-bottom">
                  <div class="ul-review-reviewer">
                    <div class="reviewer-image"><img src="{{ asset('front') }}/assets/img/user-profile.png"
                        alt="reviewer image"></div>
                    <div>
                      <h3 class="reviewer-name">Amanpreet Singh</h3>
                      <span class="reviewer-role">Parent</span>
                    </div>
                  </div>

                  <!-- icon -->
                  <div class="ul-review-icon"><i class="flaticon-left"></i></div>
                </div>
              </div>
            </div>

            <!-- single slide -->
            <div class="swiper-slide">
              <div class="ul-review">
                <div class="ul-review-rating">
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star-1"></i>
                </div>
                <p class="ul-review-descr">This organization teaches children important life skills, not just studies.
                  Kids learn how to be responsible and kind. I have seen a big change in them. Truly a great initiative!
                </p>
                <div class="ul-review-bottom">
                  <div class="ul-review-reviewer">
                    <div class="reviewer-image"><img src="{{ asset('front') }}/assets/img/user-profile.png"
                        alt="reviewer image"></div>
                    <div>
                      <h3 class="reviewer-name">Simran Kaur</h3>
                      <span class="reviewer-role">Social Worker</span>
                    </div>
                  </div>

                  <!-- icon -->
                  <div class="ul-review-icon"><i class="flaticon-left"></i></div>
                </div>
              </div>
            </div>

            <!-- single slide -->
            <div class="swiper-slide">
              <div class="ul-review">
                <div class="ul-review-rating">
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star-1"></i>
                </div>
                <p class="ul-review-descr">It’s hard to find an organization that focuses on the overall well-being of
                  children. Gyandeep Welfare Association supports kids in every way, not just in education. I really
                  appreciate their efforts!</p>
                <div class="ul-review-bottom">
                  <div class="ul-review-reviewer">
                    <div class="reviewer-image"><img src="{{ asset('front') }}/assets/img/user-profile.png"
                        alt="reviewer image"></div>
                    <div>
                      <h3 class="reviewer-name">Rajesh Sharma</h3>
                      <span class="reviewer-role">Parent</span>
                    </div>
                  </div>

                  <!-- icon -->
                  <div class="ul-review-icon"><i class="flaticon-left"></i></div>
                </div>
              </div>
            </div>

            <!-- single slide -->
            <div class="swiper-slide">
              <div class="ul-review">
                <div class="ul-review-rating">
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star-1"></i>
                </div>
                <p class="ul-review-descr">Gyandeep Welfare Association teaches children real-world skills, not just
                  school subjects. This has helped many kids gain confidence and knowledge. A great initiative!</p>
                <div class="ul-review-bottom">
                  <div class="ul-review-reviewer">
                    <div class="reviewer-image"><img src="{{ asset('front') }}/assets/img/user-profile.png"
                        alt="reviewer image"></div>
                    <div>
                      <h3 class="reviewer-name">Navjot Bansal</h3>
                      <span class="reviewer-role">Parent</span>
                    </div>
                  </div>

                  <!-- icon -->
                  <div class="ul-review-icon"><i class="flaticon-left"></i></div>
                </div>
              </div>
            </div>

            <!-- single slide -->
            <div class="swiper-slide">
              <div class="ul-review">
                <div class="ul-review-rating">
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star"></i>
                  <i class="flaticon-star-1"></i>
                </div>
                <p class="ul-review-descr">This organization is helping children become not just smart but also good
                  human beings. They teach kindness, responsibility, and confidence. Their work is truly inspiring!</p>
                <div class="ul-review-bottom">
                  <div class="ul-review-reviewer">
                    <div class="reviewer-image"><img src="{{ asset('front') }}/assets/img/user-profile.png"
                        alt="reviewer image"></div>
                    <div>
                      <h3 class="reviewer-name">Harpreet Singh</h3>
                      <span class="reviewer-role">Parent</span>
                    </div>
                  </div>

                  <!-- icon -->
                  <div class="ul-review-icon"><i class="flaticon-left"></i></div>
                </div>
              </div>
            </div>
          </div>

          <div class="ul-testimonial-slider-pagination"></div>
        </div>
      </div>
    </section>
    <!-- TESTIMONIAL SECTION END -->

    <!-- BLOG SECTION START -->
    <section class="ul-blogs ul-section-spacing">
      <div class="ul-blogs-container wow animate__fadeInUp">
        <div class="row gy-3">
          <!-- section heading -->
          <div class="col-sm-5">
            <div class="ul-section-heading">
              <div class="left">
                <span class="ul-section-sub-title"> Latest Blog </span>
                <h2 class="ul-section-title">Read Our Latest News</h2>
                <p class="ul-section-descr">Stay updated with Gyandeep’s latest events, initiatives, and success stories
                  empowering lives across communities.</p>
                <div class="ul-blogs-slider-nav ul-slider-nav">
                  <button class="prev"><i class="flaticon-back"></i></button>
                  <button class="next"><i class="flaticon-next"></i></button>
                </div>
              </div>
            </div>
          </div>

          <!-- blog slider -->
          <div class="col-sm-7">
            <div class="ul-blogs-slider swiper">
              <div class="swiper-wrapper">
                <!-- single blog -->
                <div class="swiper-slide">
                  <div class="ul-blog">
                    <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/donation-1.png" alt="Blog Image">
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
                  Barriers with Inclusive Education.</a>
                      <a href="{{ route('blog.detail', ['blog_slug' => 'blog-details']) }}" class="ul-blog-btn">Read More <span
                    class="icon"><i class="flaticon-next"></i></span></a>
                    </div>
                  </div>
                </div>

                <!-- single blog -->
                <div class="swiper-slide">
                  <div class="ul-blog">
                    <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/donation-2.jpeg" alt="Blog Image">
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
                <div class="swiper-slide">
                  <div class="ul-blog">
                    <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/donation-5.jpeg" alt="Blog Image">
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
                <div class="swiper-slide">
                  <div class="ul-blog">
                    <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/blog-child.jpeg" alt="Blog Image">
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
                <div class="swiper-slide">
                  <div class="ul-blog">
                    <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/mobilitys.jpeg" alt="Blog Image">
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
                <div class="swiper-slide">
                  <div class="ul-blog">
                    <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/donation-7.jpeg" alt="Blog Image">
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
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BLOG SECTION END -->

    <!-- GALLERY SECTION START -->
    <div class="ul-gallery overflow-hidden ul-section-spacing mx-auto pt-0">
      <div class="ul-gallery-slider swiper">
        <div class="swiper-wrapper">
          <!-- single gallery item -->
          <div class="ul-gallery-item swiper-slide">
            <img src="{{ asset('front') }}/assets/img/donation-1.png" alt="Gallery Image">
            <div class="ul-gallery-item-btn-wrapper">
              <a href="https://www.instagram.com/gyan.deepngo/"><i class="flaticon-instagram"></i></a>
            </div>
          </div>

          <!-- single gallery item -->
          <div class="ul-gallery-item swiper-slide">
            <img src="{{ asset('front') }}/assets/img/asaha.jpg" alt="Gallery Image">
            <div class="ul-gallery-item-btn-wrapper">
              <a href="https://www.instagram.com/gyan.deepngo/"><i class="flaticon-instagram"></i></a>
            </div>
          </div>

          <!-- single gallery item -->
          <div class="ul-gallery-item swiper-slide">
            <img src="{{ asset('front') }}/assets/img/donation-3.jpeg" alt="Gallery Image">
            <div class="ul-gallery-item-btn-wrapper">
             <a href="https://www.instagram.com/gyan.deepngo/"><i class="flaticon-instagram"></i></a>
            </div>
          </div>

          <!-- single gallery item -->
          <div class="ul-gallery-item swiper-slide">
            <img src="{{ asset('front') }}/assets/img/mobilitys.jpeg" alt="Gallery Image">
            <div class="ul-gallery-item-btn-wrapper">
              <a href="https://www.instagram.com/gyan.deepngo/"><i class="flaticon-instagram"></i></a>
            </div>
          </div>

          <!-- single gallery item -->
          <div class="ul-gallery-item swiper-slide">
            <img src="{{ asset('front') }}/assets/img/donation-5.jpeg" alt="Gallery Image">
            <div class="ul-gallery-item-btn-wrapper">
             <a href="https://www.instagram.com/gyan.deepngo/"><i class="flaticon-instagram"></i></a>
            </div>
          </div>

          <!-- single gallery item -->
          <div class="ul-gallery-item swiper-slide">
            <img src="{{ asset('front') }}/assets/img/donation-6.jpeg" alt="Gallery Image">
            <div class="ul-gallery-item-btn-wrapper">
             <a href="https://www.instagram.com/gyan.deepngo/"><i class="flaticon-instagram"></i></a>
            </div>
          </div>

          <!-- single gallery item -->
          <div class="ul-gallery-item swiper-slide">
            <img src="{{ asset('front') }}/assets/img/sparashs.jpeg" alt="Gallery Image">
            <div class="ul-gallery-item-btn-wrapper">
             <a href="https://www.instagram.com/gyan.deepngo/"><i class="flaticon-instagram"></i></a>
            </div>
          </div>

          <!-- single gallery item -->
          <div class="ul-gallery-item swiper-slide">
            <img src="{{ asset('front') }}/assets/img/saksham-3.jpeg" alt="Gallery Image">
            <div class="ul-gallery-item-btn-wrapper">
              <a href="https://www.instagram.com/gyan.deepngo/"><i class="flaticon-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- GALLERY SECTION END -->
  </main>
@endsection
