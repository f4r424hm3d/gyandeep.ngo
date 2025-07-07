@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Blog Details</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Blog Details</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <!-- BLOG SECTION START -->
    <div class="ul-section-spacing">
      <div class="ul-container">
        <div class="row ul-bs-row gy-5 flex-column-reverse flex-md-row">
          <!-- sidebar -->
          <div class="col-lg-4 col-md-5">
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

          <!-- left/blog details -->
          <div class="col-lg-8 col-md-7">
            <div class="ul-blog-details ul-blog-inner mb-0">
              <div class="ul-blog-2 ul-blog-inner">
                <div class="ul-blog-img"><img src="{{ asset('front') }}/assets/img/mobilitys.webp" alt="Blog Image">
                </div>
                <div class="ul-blog-txt">
                  <div class="ul-blog-infos">
                    <!-- single info -->
                    <div class="ul-blog-info">
                      <span class="icon"><i class="flaticon-account"></i></span>
                      <span class="text">By Admin</span>
                    </div>
                    <!-- single info -->
                    <div class="ul-blog-info">
                      <span class="icon"><i class="flaticon-price-tag"></i></span>
                      <span class="text">Donation</span>
                    </div>
                  </div>
                  <h2 class="ul-blog-title">Why Assistive Devices Truly Matter</h2>
                  <div class="ul-donation-details-summary-txt ul-blog-details-txt">
                    <p>Behind every movement, gesture, or word is a desire—to connect, to belong, to live fully. For
                      individuals with disabilities, assistive devices are not luxuries—they're bridges to independence,
                      confidence, and dignity. At Gyandeep Welfare & Rehabilitation Society, we’ve seen firsthand how a
                      simple wheelchair, hearing aid, or Braille kit can transform an entire life.</p>
                    <p>Through initiatives like our “Sparsh” Assistive Devices Drive, Gyandeep has distributed hundreds of
                      mobility aids, communication tools, and sensory kits to children and adults who need them most. But
                      beyond distribution, we ensure education, accessibility, and emotional support follow hand in hand.
                    </p>
                    <blockquote>“I used to carry my 12-year-old son everywhere. He never had the chance to move freely.
                      After Gyandeep gave us a wheelchair, he started going to school independently. It changed both our
                      lives.”
                      — Sunita Rani, Parent</blockquote>
                    <p>In a world designed for the able-bodied, assistive technology levels the playing field. It restores
                      agency. It says: “You matter. Your participation matters.”</p>
                    <!-- <div class="ul-donation-details-summary-imgs">
                                                <img src="{{ asset('front') }}/assets/img/donation-details-inner-1.webp" alt="image">
                                                <img src="{{ asset('front') }}/assets/img/donation-details-inner-2.webp" alt="image">
                                            </div> -->
                    <p>Assistive devices aren’t just tools—they are lifelines of hope that bring about profound
                      psychosocial change. More than functionality, they restore a sense of independence and self-worth,
                      empowering individuals to navigate the world with dignity.</p>
                  </div>
                </div>
              </div>

              <!-- actions -->
              <!-- <div class="ul-blog-details-actions">
                                    tags
                                    <div class="tags-wrapper">
                                        <h4 class="actions-title">Tags: </h4>
                                        <div class="ul-blog-sidebar-tags tags">
                                            <a href="#">Reseller</a>
                                            <a href="#">Hosting</a>
                                            <a href="#">WP Hosting</a>
                                        </div>
                                    </div>

                                    share
                                    <div class="shares-wrapper">
                                        <h4 class="actions-title">Share: </h4>
                                        <div class="share-options">
                                           <a href="https://www.facebook.com/www.gyandeep.ngo"><i class="flaticon-facebook"></i></a>
                                <a href="https://x.com/Gyandeepngo"><i class="flaticon-twitter"></i></a>
                                <a href="https://www.linkedin.com/company/gyandeep-ngo"><i class="flaticon-linkedin-big-logo"></i></a>
                                <a href="https://www.instagram.com/gyan.deepngo"><i class="flaticon-instagram"></i></a>
                                        </div>
                                    </div>
                                </div> -->

              <!-- <div class="ul-blog-details-bottom">

                                    <div class="ul-blog-details-reviews">
                                        <h3 class="ul-blog-details-inner-title ul-donation-details-summary-title">02 Comments</h3>


                                        <div class="ul-blog-details-review">
                                            <div class="main-comment">

                                                <div class="ul-blog-details-review-reviewer-img">
                                                    <img src="{{ asset('front') }}/assets/img/commenter-1.webp" alt="Reviewer Image">
                                                </div>

                                                <div class="ul-blog-details-review-txt">
                                                    <p>Before Gyandeep, we struggled to find a school that truly understood our child’s needs. The inclusive environment here has made such a difference—he’s more confident, social, and actually enjoys going to school. Thank you for breaking these barriers for kids like mine.</p>
                                                    <div class="reviewer">
                                                        <h4 class="reviewer-name">Harpreet Singh</h4>
                                                        <h5 class="review-date">March 20, 2025 at 10:12 am</h5>
                                                    </div>
                                                    <button class="ul-blog-details-review-reply-btn"><i class="flaticon-reply"></i> Reply</button>
                                                </div>
                                            </div>

                                            <div class="ul-blog-details-review-replies">
                                                <div class="ul-blog-details-review-reply">
                                                    <div class="main-comment">
                                                        <div class="ul-blog-details-review-reviewer-img">
                                                            <img src="{{ asset('front') }}/assets/img/commenter-2.webp" alt="Reviewer Image">
                                                        </div>

                                                        <div class="ul-blog-details-review-txt">
                                                            <p>"Thank you, Harpreet ji! It’s been a joy watching your son grow and thrive. We’re honored to support every child’s journey with care and dignity."</p>
                                                            <div class="reviewer">
                                                                <h4 class="reviewer-name">Ravleen Kaur</h4>
                                                                <h5 class="review-date">March 20, 2025 at 11:25 am</h5>
                                                            </div>
                                                            <button class="ul-blog-details-review-reply-btn"><i class="flaticon-reply"></i> Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ul-blog-details-review-form-wrapper">
                                        <h3 class="ul-blog-details-inner-title ul-donation-details-summary-title">Leave a Comment</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <form action="#" class="ul-contact-form ul-form">
                                            <div class="row row-cols-2 row-cols-xxs-1 ul-bs-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="text" name="name" id="ul-blog-comment-name" placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="ul-blog-comment-email" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input type="text" name="subject" id="ul-blog-comment-subject" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea name="message" id="ul-blog-comment-msg" placeholder="Type your message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="ul-btn"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i> Get in Touch</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- BLOG SECTION END -->
  </main>
@endsection
