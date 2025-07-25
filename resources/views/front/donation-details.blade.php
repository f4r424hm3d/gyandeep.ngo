@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Donation Details</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Donation Details</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <div class="ul-container ul-section-spacing">
      <div class="row gx-0 gy-4 flex-column-reverse flex-lg-row">
        <!-- left sidebar -->
        <div class="col-lg-4">
          <div class="ul-inner-sidebar">
            <!-- single widget /search -->
            <div class="ul-inner-sidebar-widget ul-inner-sidebar-search">
              <h3 class="ul-inner-sidebar-widget-title">Search</h3>
              <div class="ul-inner-sidebar-widget-content">
                <form action="#" class="ul-blog-search-form">
                  <input type="search" name="blog-search" id="ul-blog-search" placeholder="Search Here">
                  <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
                </form>
              </div>
            </div>

            <!-- single widget / Categories -->
            <div class="ul-inner-sidebar-widget categories">
              <h3 class="ul-inner-sidebar-widget-title">Categories</h3>
              <div class="ul-inner-sidebar-widget-content">
                <div class="ul-inner-sidebar-categories">
                  <a href="{{ route('donation.details') }}">Charity <span>(08)</span></a>
                  <a href="{{ route('donation.details') }}">Crowdfunding <span>(11)</span></a>
                  <a href="{{ route('donation.details') }}">Industries <span>(18)</span></a>
                  <a href="{{ route('donation.details') }}">Innovations <span>(11)</span></a>
                  <a href="{{ route('donation.details') }}">Technology <span>(07)</span></a>
                </div>
              </div>
            </div>

            <!-- single widget / Recent Posts -->
            <!-- <div class="ul-inner-sidebar-widget posts">
                                      <h3 class="ul-inner-sidebar-widget-title">Recent Posts</h3>
                                      <div class="ul-inner-sidebar-widget-content">
                                          <div class="ul-inner-sidebar-posts">
                                              single post
                                              <div class="ul-inner-sidebar-post">
                                                  <div class="img">
                                                      <img src="{{ asset('front') }}/assets/img/blog-2.webp" alt="Post Image">
                                                  </div>

                                                  <div class="txt">
                                                      <h4 class="title"><a href="blog-details.html">There are many vario ns of passages of</a></h4>
                                                      <span class="date"> <span>May 12, 2025</span></span>
                                                  </div>
                                              </div>

                                              single post
                                              <div class="ul-inner-sidebar-post">
                                                  <div class="img">
                                                      <img src="{{ asset('front') }}/assets/img/blog-1.webp" alt="Post Image">
                                                  </div>

                                                  <div class="txt">
                                                      <h4 class="title"><a href="blog-details.html">There are many vario ns of passages of</a></h4>
                                                      <span class="date"> <span>May 12, 2025</span></span>
                                                  </div>
                                              </div>

                                              single post
                                              <div class="ul-inner-sidebar-post">
                                                  <div class="img">
                                                      <img src="{{ asset('front') }}/assets/img/blog-3.webp" alt="Post Image">
                                                  </div>

                                                  <div class="txt">
                                                      <h4 class="title"><a href="blog-details.html">There are many vario ns of passages of</a></h4>
                                                      <span class="date"> <span>May 12, 2025</span></span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div> -->

            <!-- single widget / Tags -->
            <div class="ul-inner-sidebar-widget tags">
              <h3 class="ul-inner-sidebar-widget-title">Tag Cloud</h3>
              <div class="ul-inner-sidebar-widget-content">
                <div class="ul-inner-sidebar-tags">
                  <a href="{{ route('donation.details') }}">Crowdfunding</a>
                  <a href="{{ route('donation.details') }}">Innovations</a>
                  <a href="{{ route('donation.details') }}">Justice</a>
                  <a href="{{ route('donation.details') }}">Lead</a>
                  <a href="{{ route('donation.details') }}">Startup</a>
                  <a href="{{ route('donation.details') }}">Technology</a>
                  <a href="{{ route('donation.details') }}">Market</a>
                  <a href="{{ route('donation.details') }}">Court</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- donation details content -->
        <div class="col-lg-8">
          <div class="ul-donation-details">
            <div class="ul-donation-details-img"><img src="{{ asset('front') }}/assets/img/stat-bg.webp" alt="Image">
            </div>
            <h2 class="ul-donation-details-raised">₹69,000 <span class="target">of ₹100,000 raised</span></h2>
            <div class="ul-donation-progress ul-donation-progress-2">
              <div class="donation-progress-container ul-progress-container">
                <div class="donation-progressbar ul-progressbar" data-ul-progress-value="95">
                  <div class="donation-progress-label ul-progress-label"></div>
                </div>
              </div>
            </div>

            <div class="ul-donation-details-notice">
              <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M14.0003 20.6667C14.3781 20.6667 14.695 20.5387 14.951 20.2827C15.207 20.0267 15.3345 19.7103 15.3337 19.3334C15.3328 18.9565 15.2048 18.6401 14.9497 18.3841C14.6945 18.1281 14.3781 18.0001 14.0003 18.0001C13.6225 18.0001 13.3061 18.1281 13.051 18.3841C12.7959 18.6401 12.6679 18.9565 12.667 19.3334C12.6661 19.7103 12.7941 20.0272 13.051 20.2841C13.3079 20.541 13.6243 20.6685 14.0003 20.6667ZM14.0003 15.3334C14.3781 15.3334 14.695 15.2054 14.951 14.9494C15.207 14.6934 15.3345 14.377 15.3337 14.0001V8.66675C15.3337 8.28897 15.2057 7.97253 14.9497 7.71741C14.6937 7.4623 14.3772 7.3343 14.0003 7.33341C13.6234 7.33253 13.307 7.46053 13.051 7.71741C12.795 7.9743 12.667 8.29075 12.667 8.66675V14.0001C12.667 14.3779 12.795 14.6947 13.051 14.9507C13.307 15.2067 13.6234 15.3343 14.0003 15.3334ZM14.0003 27.3334C12.1559 27.3334 10.4226 26.9832 8.80033 26.2827C7.17811 25.5823 5.76699 24.6325 4.56699 23.4334C3.36699 22.2343 2.41722 20.8232 1.71766 19.2001C1.01811 17.577 0.667883 15.8436 0.666994 14.0001C0.666105 12.1565 1.01633 10.4232 1.71766 8.80008C2.41899 7.17697 3.36877 5.76586 4.56699 4.56675C5.76522 3.36764 7.17633 2.41786 8.80033 1.71741C10.4243 1.01697 12.1577 0.666748 14.0003 0.666748C15.843 0.666748 17.5763 1.01697 19.2003 1.71741C20.8243 2.41786 22.2354 3.36764 23.4337 4.56675C24.6319 5.76586 25.5821 7.17697 26.2843 8.80008C26.9865 10.4232 27.3363 12.1565 27.3337 14.0001C27.331 15.8436 26.9808 17.577 26.283 19.2001C25.5852 20.8232 24.6354 22.2343 23.4337 23.4334C22.2319 24.6325 20.8208 25.5827 19.2003 26.2841C17.5799 26.9854 15.8465 27.3352 14.0003 27.3334Z"
                  fill="var(--ul-primary)" />
              </svg>
              <p>
                <strong>Notice</strong>: Test mode is enabled. While in test mode no live donations are processed.
              </p>
            </div>

            <form action="#" class="ul-donation-details-form">
              <!-- selct amount -->
              <div class="ul-donation-details-donate-form-wrapper">
                <div class="selected-amount"><span class="currency">₹</span> <span class="number">10.00</span></div>
                <div class="ul-donate-form">
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
                </div>
              </div>

              <!-- select payment methods -->
              <div class="ul-donation-details-payment-methods">
                <h3 class="ul-donation-details-payment-methods-title">Select Payment Method</h3>
                <div class="ul-donation-details-payment-methods-form">
                  <div class="ul-radio">
                    <label for="method-1">
                      <input type="radio" name="payment-method" id="method-1" checked>
                      <span class="checkmark"></span>
                      <span>Test donation</span>
                    </label>
                  </div>
                  <div class="ul-radio">
                    <label for="method-2">
                      <input type="radio" name="payment-method" id="method-2" checked>
                      <span class="checkmark"></span>
                      <span>Offline Donation</span>
                    </label>
                  </div>
                  <div class="ul-radio">
                    <label for="method-3">
                      <input type="radio" name="payment-method" id="method-3" checked>
                      <span class="checkmark"></span>
                      <span>Credit Card</span>
                    </label>
                  </div>
                </div>
              </div>

              <!-- enter personal info -->
              <div class="ul-donation-details-personal-info">
                <h3 class="ul-donation-details-personal-info-title">Personal Info</h3>
                <p class="ul-donation-details-personal-info-sub-title">Your email address will not be published.
                  Required fields are marked *</p>
                <div class="ul-donation-details-personal-info-form">
                  <div class="row row-cols-2 row-cols-xxs-1 ul-bs-row">
                    <div class="col">
                      <div class="form-group">
                        <input type="text" name="first-name" placeholder="First Name">
                      </div>
                    </div>

                    <div class="col">
                      <div class="form-group">
                        <input type="text" name="last-name" placeholder="Last Name">
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <input type="email" name="email" placeholder="Email Address">
                      </div>
                    </div>
                  </div>

                </div>
                <div class="ul-donation-details-form-bottom">
                  <button type="submit" class="ul-btn"><i
                      class="flaticon-fast-forward-double-right-arrows-symbol"></i> Donate Now</button>
                  <span class="donation-total">Donation Total: <span class="number">₹10</span></span>
                </div>
              </div>
            </form>

            <div class="ul-donation-details-summary">
              <h3 class="ul-donation-details-summary-title">Summary</h3>
              <div class="ul-donation-details-summary-txt">
                <p>At Gyandeep, every donation plants the seed of transformation. As a dedicated force in disability
                  empowerment, we work to deliver long-term impact through inclusive education, therapy, skill training,
                  and accessibility support. From a child receiving their first speech device to a mother watching her
                  son gain confidence through vocational skills—your support helps us create real, lasting change. We
                  believe that no barrier should stand in the way of potential, and your generosity fuels our mission to
                  uplift lives with dignity and hope.</p>
                <ul>
                  <li>Educate Every Child
                  </li>
                  <li>Therapy That Transforms
                  </li>
                  <li>Empower Through Skills
                  </li>
                  <li>Support Their Steps
                  </li>
                  <li>Strengthen Families
                  </li>
                  <li>Compassion in Action</li>
                  <li>Advocate for Rights </li>
                  <li>Care Beyond Clinics</li>
                </ul>
                <!-- <div class="ul-donation-details-summary-imgs">
                                              <img src="{{ asset('front') }}/assets/img/donation-details-inner-1.webp" alt="image">
                                              <img src="{{ asset('front') }}/assets/img/donation-details-inner-2.webp" alt="image">
                                          </div> -->
                <p>Your donation fuels everything—from therapy sessions and hearing aids to digital literacy and
                  emotional wellness. Each contribution helps break the silence of isolation, spark confidence, and
                  nurture independence. You’re not just giving support—you’re inspiring potential and shaping futures
                  that once felt distant or impossible for many.</p>
                <blockquote>“Gyandeep is truly changing lives. Supporting them isn’t just charity—it feels like standing
                  beside real people with real hopes and dreams. Their work with children and families is heartfelt,
                  impactful, and deeply needed.” – Meena Sharma, Social Worker, Punjab</blockquote>
                <p>Join hands with Gyandeep Welfare & Rehabilitation Society and turn your compassion into real, lasting
                  impact. With your support, we can educate, empower, and uplift individuals with disabilities through
                  inclusive services. Together, we’re not just changing lives—we’re building a world that celebrates
                  every ability, every dream, and every voice that deserves to be heard.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
