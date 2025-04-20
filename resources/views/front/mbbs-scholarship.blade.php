@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main class="overflow-hidden">
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">MBBS Scholorship Details</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>MBBS Scholorship Details</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <div class="ul-container ul-section-spacing">
      <div class="ul-project-details-img-slider swiper">
        <div class="swiper-wrapper">
          <!-- single slide -->
          <div class="swiper-slide">
            <div>
              <img src="{{ asset('front') }}/assets/img/scholorship.jpg" alt="Image">
            </div>
          </div>
          <!-- single slide -->
          <!-- <div class="swiper-slide">
                                                                                                                            <div>
                                                                                                                                <img src="{{ asset('front') }}/assets/img/project-details-img-1.jpg" alt="Image">
                                                                                                                            </div>
                                                                                                                        </div> -->
          <!-- single slide -->
          <!-- <div class="swiper-slide">
                                                                                                                            <div>
                                                                                                                                <img src="{{ asset('front') }}/assets/img/project-details-img-1.jpg" alt="Image">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div> -->

          <!-- <div class="ul-project-details-slider-nav ul-slider-nav">
                                                                                                                        <button class="prev"><i class="flaticon-back"></i></button>
                                                                                                                        <button class="next"><i class="flaticon-next"></i></button>
                                                                                                                    </div> -->
        </div>

        <div class="row gx-5 gy-4 mt-5 flex-column-reverse flex-lg-row">
          <!-- event details content -->
          <div class="col-md-12">
            <div class="ul-event-details">
              <h2 class="ul-section-title text-center">Why This Scholarship?</h2>
              <p class="ul-blog-title  text-center mb-4">
                The Gyandeep Welfare & Rehabilitation Society is offering *full MBBS scholarships* to deserving
                international students. This initiative, in collaboration with the *Kyrgyzstan Embassy in India, is
                aimed at supporting global access to quality medical education at **top Kyrgyzstan medical
                universities*.
              </p>

              <section class="ul-contactd">
                <div class="ul-container">
                  <div class="row ">
                    <div class="col-lg-6">
                      <div class="ul-contact-imgd">
                        <img src="{{ asset('front') }}/assets/img/Scholarship-Benefits.jpeg" alt="Image">
                      </div>
                    </div>

                    <!-- form -->
                    <div class="col-lg-6">
                      <div class="ul-contact-form-wrapper p-5">
                        <h2 class="ul-section-title">Scholarship Benefits</h2>

                        <ul class="fee-userslists">
                          <li>100% Tuition Fee Waiver</li>
                          <li>Study in MCI/NMC-approved universities</li>
                          <li>Embassy-verified Admission Process</li>
                          <li>Hostel Accommodation Assistance</li>
                          <li>Visa & Travel Support</li>
                          <li>Free Books & Study Material (Year 1)</li>
                          <li>Post-education Career Guidance</li>
                        </ul>

                      </div>
                    </div>
                  </div>
                </div>
              </section>

              <section class="creiteria my-5">
                <h3 class="text-center">Eligibility Criteria</h3>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dd">
                      <tr>
                        <th>Criteria</th>
                        <th>Requirements</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Age</td>
                        <td>17-25 years</td>
                      </tr>
                      <tr>
                        <td>Educational Qualification</td>
                        <td>12th Pass with Physics, Chemistry & Biology (Min 50% for General, 40% for Reserved)</td>
                      </tr>
                      <tr>
                        <td>Nationality</td>
                        <td>International Students (India + SAARC countries preferred)</td>
                      </tr>
                      <tr>
                        <td>Passport</td>
                        <td>Must have a valid passport (or ready to apply immediately)</td>
                      </tr>
                      <tr>
                        <td>NEET Qualification (for Indian)</td>
                        <td>Mandatory for Indian students</td>
                      </tr>
                      <tr>
                        <td>Income Certificate (Preferred)</td>
                        <td>For need-based priority</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </section>

              <section class="ul-contactd">
                <div class="ul-container">
                  <div class="row ">
                    <!-- form -->
                    <div class="col-lg-6">
                      <div class="ul-contact-form-wrapper wrappers p-5 ">
                        <h2 class="ul-section-title">Documentation Process</h2>

                        <p class="ul-event-details-descr">*All documentation is processed through the Kyrgyzstan
                          Embassy in India.*</p>
                        <ul class="fee-userslists">
                          <li>Valid Passport Copy</li>
                          <li>10th & 12th Marksheet</li>
                          <li>NEET Scorecard (for Indian nationals)</li>
                          <li>Birth Certificate</li>
                          <li>Recent Passport Size Photos (10)</li>
                          <li>Police Clearance Certificate</li>
                          <li>Medical Fitness Certificate</li>
                          <li>Income Certificate (if applying for need-based category)</li>
                          <li>Scholarship Application Form (downloadable)</li>

                        </ul>

                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="ul-contact-imgd">
                        <img src="{{ asset('front') }}/assets/img/documentation-process.jpeg" alt="Image">
                      </div>
                    </div>

                  </div>
                </div>
              </section>
              <div class="ul-section-spacing">
                <div class="ul-container">
                  <div class="ul-donate-form-section ">
                    <div class="row justify-content-between align-items-center">
                      <!-- donate form -->
                      <div class="col-lg-6 position-relative">
                        <div class="ul-donate-form-wrapper vs-hidden">

                        </div>
                        <img src="{{ asset('front') }}/assets/img/donate-form-vector.svg" alt="vector"
                          class="ul-donate-form-vector">
                      </div>

                      <!-- donate form  -->
                      <div class="col-lg-6">
                        <div class="para-white pe-4">
                          <h3 class="ul-event-details-inner-title">How to Apply ?</h3>
                          <p class="ul-event-details-descr">Simple 3-Step Process:</p>
                          <ul class="fee-userslists">
                            <li>*Fill Online Application Form* (includes passport yes/no question)</li>
                            <li>*Upload Required Documents*</li>
                            <li>*Wait for Embassy Interview Slot*</li>

                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <section class="ul-contactd">
                <div class="ul-container">
                  <div class="row ">
                    <!-- form -->

                    <div class="col-lg-6">
                      <div class="ul-contact-imgd">
                        <img src="{{ asset('front') }}/assets/img/Embassy-Mediation.png" alt="Image">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="ul-contact-form-wrapper wrappers p-5 ">
                        <h2 class="ul-section-title">Embassy Mediation</h2>

                        <p class="ul-event-details-descr">The *Kyrgyzstan Embassy in India* ensures a transparent,
                          legal, and verified scholarship admission process.</p>
                        <ul class="fee-userslists">
                          <li>Verification of Documents</li>
                          <li>Student Interview Scheduling</li>
                          <li>Visa Processing</li>
                          <li>Legalization of Education Offer Letter</li>
                          <li>Issuance of Travel Permission</li>

                        </ul>

                      </div>
                    </div>

                  </div>
                </div>
              </section>

              <div class="Application-mbbs">
                <h2 class="mb-4">Application Form</h2>
                <form class="row" method="POST" action="{{ route('mbbs.scholarship.en') }}"
                  enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="source" value="MBBS Scholarship">
                  <input type="hidden" name="source_path" value="{{ url()->previous() }}">
                  <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                      placeholder="Enter your full name" value="{{ old('name') }}">
                    @error('name')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email ID</label>
                    <input type="email" class="form-control" id="email" name="email"
                      placeholder="Enter your email" value="{{ old('email') }}">
                    @error('email')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="mobile" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="mobile" name="mobile"
                      placeholder="Enter your phone number" value="{{ old('mobile') }}">
                    @error('mobile')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="nationality" class="form-label">Nationality</label>
                    <input type="text" class="form-control" id="nationality" name="nationality"
                      placeholder="Enter your nationality" value="{{ old('nationality') }}">
                    @error('nationality')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="city" class="form-label">City & Country</label>
                    <input type="text" class="form-control" id="city" name="city"
                      placeholder="Enter your city and country" value="{{ old('city') }}">
                    @error('city')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="have_passport" class="form-label">Do you have a valid passport?</label>
                    <select class="form-select" id="have_passport" name="have_passport">
                      <option value="">Choose...</option>
                      <option value="1" {{ old('have_passport') == '1' ? 'selected' : '' }}>Yes</option>
                      <option value="0" {{ old('have_passport') == '0' ? 'selected' : '' }}>No</option>
                    </select>
                    @error('have_passport')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="neet_qualified" class="form-label">NEET Qualified?</label>
                    <select class="form-select" id="neet_qualified" name="neet_qualified">
                      <option value="">Choose...</option>
                      <option value="1" {{ old('neet_qualified') == '1' ? 'selected' : '' }}>Yes</option>
                      <option value="0" {{ old('neet_qualified') == '0' ? 'selected' : '' }}>No</option>
                    </select>
                    @error('neet_qualified')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="marksheet" class="form-label">Upload 10th & 12th Marksheet</label>
                    <input class="form-control" type="file" id="marksheet" name="marksheet">
                    @error('marksheet')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="passportCopy" class="form-label">Upload Passport Copy (if available)</label>
                    <input class="form-control" type="file" id="passportCopy" name="passport">
                    @error('passport')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="incomeCert" class="form-label">Upload Income Certificate (optional)</label>
                    <input class="form-control" type="file" id="incomeCert" name="income_certificate">
                    @error('income_certificate')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-md-12 mb-3 mx-auto">
                    <label for="message" class="form-label">Message / Queries</label>
                    <textarea class="form-control" id="message" name="message" rows="4"
                      placeholder="Enter any questions or notes...">{{ old('message') }}</textarea>
                    @error('message')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">

                    <div class="input-group">
                      <div class="input-icon"><span class="ti-captcha_answer">
                          <label for="captcha_question">{{ $question['text'] }}</label>
                        </span></div>
                      <input type="number" name="captcha_answer" class="form-control"
                        placeholder="Enter Captcha Value">
                    </div>
                    @error('captcha_answer')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-12 mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                  </div>

                </form>
              </div>

            </div>

            <section class="ul-why-join ul-section-spacing">
              <div class="ul-container">
                <div class="row row-cols-md-2 row-cols-1 gy-4 align-items-center">
                  <div class="col">
                    <div class="ul-why-join-img">
                      <!-- <img src="{{ asset('front') }}/assets/img/why-join.jpg" alt="Image"> -->
                      <img src="{{ asset('front') }}/assets/img/faq-details.jpeg" alt="Image">
                    </div>
                  </div>

                  <!-- txt -->
                  <div class="col">
                    <div class="ul-why-join-txt">
                      <span class="ul-section-sub-title">(FAQ)</span>
                      <h2 class="ul-section-title">Frequently Asked Questions
                      </h2>

                      <div class="ul-accordion">
                        <div class="ul-single-accordion-item open">
                          <div class="ul-single-accordion-item__header">
                            <div class="left">
                              <h3 class="ul-single-accordion-item__title">Is the MBBS degree valid in India? </h3>
                            </div>
                            <span class="icon"><i class="flaticon-next"></i></span>
                          </div>

                          <div class="ul-single-accordion-item__body">
                            <p> Yes, degrees from listed universities are NMC approved.</p>
                          </div>
                        </div>

                        <div class="ul-single-accordion-item">
                          <div class="ul-single-accordion-item__header">
                            <div class="left">
                              <h3 class="ul-single-accordion-item__title">Can I apply without a passport? </h3>
                            </div>
                            <span class="icon"><i class="flaticon-next"></i></span>
                          </div>

                          <div class="ul-single-accordion-item__body">
                            <p>Yes, but you must initiate the passport application immediately.</p>
                          </div>
                        </div>

                        <div class="ul-single-accordion-item">
                          <div class="ul-single-accordion-item__header">
                            <div class="left">
                              <h3 class="ul-single-accordion-item__title">Is NEET mandatory? </h3>
                            </div>
                            <span class="icon"><i class="flaticon-next"></i></span>
                          </div>

                          <div class="ul-single-accordion-item__body">
                            <p> Only for Indian applicants.</p>
                          </div>
                        </div>
                        <div class="ul-single-accordion-item">
                          <div class="ul-single-accordion-item__header">
                            <div class="left">
                              <h3 class="ul-single-accordion-item__title">Will the embassy help with the visa? </h3>
                            </div>
                            <span class="icon"><i class="flaticon-next"></i></span>
                          </div>

                          <div class="ul-single-accordion-item__body">
                            <p>Yes, the Kyrgyzstan Embassy will assist in the full process.</p>
                          </div>
                        </div>
                        <div class="ul-single-accordion-item">
                          <div class="ul-single-accordion-item__header">
                            <div class="left">
                              <h3 class="ul-single-accordion-item__title">Is this scholarship need-based or
                                merit-based? </h3>
                            </div>
                            <span class="icon"><i class="flaticon-next"></i></span>
                          </div>

                          <div class="ul-single-accordion-item__body">
                            <p> A combination of both. Income certificate is not mandatory but preferred.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

          </div>

        </div>

      </div>
  </main>
@endsection
