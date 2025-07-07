@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Donation Listing</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Donation Listing</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <!-- DONTATIONS SECTION START -->
    <section class="ul-section-spacing overflow-hidden">
      <!-- DONTATIONS Grid -->
      <div class="ul-container wow animate__fadeInUp">
        <div class="row ul-bs-row row-cols-xl-4 row-cols-md-3 row-cols-2 row-cols-xxs-1">
          <!-- single item -->
          <div class="col">
            <div class="ul-donation ul-donation--inner h-100">
              <div class="ul-donation-img">
                <img src="{{ asset('front') }}/assets/img/donation-1.webp" alt="donation Image">
                <span class="tag">Foods</span>
              </div>
              <div class="ul-donation-txt">
                <div class="ul-donation-progress">
                  <div class="donation-progress-container ul-progress-container">
                    <div class="donation-progressbar ul-progressbar" data-ul-progress-value="55">
                      <div class="donation-progress-label ul-progress-label"></div>
                    </div>
                  </div>
                  <div class="ul-donation-progress-labels">
                    <span class="ul-donation-progress-label">Raised : ₹25,000</span>
                    <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                  </div>
                </div>
                <a href="{{ route('donation.details') }}" class="ul-donation-title">Build a Future: Donate School
                  Furniture for
                  Disabled Kids</a>
                <p class="ul-donation-descr locoate">Help us create a comfortable learning environment for children
                  with disabilities by donating desks, chairs, and classroom essentials. Your support ensures that every
                  child learns with dignity.</p>
                <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                    class="flaticon-up-right-arrow"></i></a>
              </div>
            </div>
          </div>

          <!-- single item -->
          <div class="col">
            <div class="ul-donation ul-donation--inner h-100">
              <div class="ul-donation-img">
                <img src="{{ asset('front') }}/assets/img/donation-2.webp" alt="donation Image">
                <span class="tag">Foods</span>
              </div>
              <div class="ul-donation-txt">
                <div class="ul-donation-progress">
                  <div class="donation-progress-container ul-progress-container">
                    <div class="donation-progressbar ul-progressbar" data-ul-progress-value="95">
                      <div class="donation-progress-label ul-progress-label"></div>
                    </div>
                  </div>
                  <div class="ul-donation-progress-labels">
                    <span class="ul-donation-progress-label">Raised : ₹25,000</span>
                    <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                  </div>
                </div>
                <a href="{{ route('donation.details') }}" class="ul-donation-title">A Book, A New Beginning" – Donate
                  Books &
                  Learning Materials</a>
                <p class="ul-donation-descr locoate">Empower children with disabilities by providing books, braille
                  materials, and educational aids. Your contribution helps them unlock knowledge and opportunities.</p>
                <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                    class="flaticon-up-right-arrow"></i></a>
              </div>
            </div>
          </div>

          <!-- single item -->
          <div class="col">
            <div class="ul-donation ul-donation--inner h-100">
              <div class="ul-donation-img">
                <img src="{{ asset('front') }}/assets/img/donation-3.webp" alt="donation Image">
                <span class="tag">Foods</span>
              </div>
              <div class="ul-donation-txt">
                <div class="ul-donation-progress">
                  <div class="donation-progress-container ul-progress-container">
                    <div class="donation-progressbar ul-progressbar" data-ul-progress-value="50">
                      <div class="donation-progress-label ul-progress-label"></div>
                    </div>
                  </div>
                  <div class="ul-donation-progress-labels">
                    <span class="ul-donation-progress-label">Raised : ₹25,000</span>
                    <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                  </div>
                </div>
                <a href="{{ route('donation.details') }}" class="ul-donation-title">Nourish to Flourish" – Sponsor Mid-Day
                  Meals</a>
                <p class="ul-donation-descr locoate">Many children with disabilities come from underprivileged
                  backgrounds. Your donation towards healthy, nutritious and wholesome meals ensures they stay well-fed,
                  focused, energized and ready to learn.</p>
                <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                    class="flaticon-up-right-arrow"></i></a>
              </div>
            </div>
          </div>

          <!-- single item -->
          <div class="col">
            <div class="ul-donation ul-donation--inner h-100">
              <div class="ul-donation-img">
                <img src="{{ asset('front') }}/assets/img/donation-4.webp" alt="donation Image">
                <span class="tag">Foods</span>
              </div>
              <div class="ul-donation-txt">
                <div class="ul-donation-progress">
                  <div class="donation-progress-container ul-progress-container">
                    <div class="donation-progressbar ul-progressbar" data-ul-progress-value="64">
                      <div class="donation-progress-label ul-progress-label"></div>
                    </div>
                  </div>
                  <div class="ul-donation-progress-labels">
                    <span class="ul-donation-progress-label">Raised : ₹25,000</span>
                    <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                  </div>
                </div>
                <a href="{{ route('donation.details') }}" class="ul-donation-title">Skills for Independence" – Donate
                  Vocational
                  Training Kits</a>
                <p class="ul-donation-descr locoate">Support skill development for differently-abled students by
                  donating sewing machines, craft materials, computers, and digital tools. Help them build a
                  self-reliant future.</p>
                <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                    class="flaticon-up-right-arrow"></i></a>
              </div>
            </div>
          </div>

          <!-- single item -->
          <div class="col">
            <div class="ul-donation ul-donation--inner h-100">
              <div class="ul-donation-img">
                <img src="{{ asset('front') }}/assets/img/donation-1.webp" alt="donation Image">
                <span class="tag">Foods</span>
              </div>
              <div class="ul-donation-txt">
                <div class="ul-donation-progress">
                  <div class="donation-progress-container ul-progress-container">
                    <div class="donation-progressbar ul-progressbar" data-ul-progress-value="80">
                      <div class="donation-progress-label ul-progress-label"></div>
                    </div>
                  </div>
                  <div class="ul-donation-progress-labels">
                    <span class="ul-donation-progress-label">Raised : ₹25,000</span>
                    <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                  </div>
                </div>
                <a href="{{ route('donation.details') }}" class="ul-donation-title">Step Towards Mobility" – Provide
                  Assistive
                  Devices</a>
                <p class="ul-donation-descr locoate">Your donation can fund wheelchairs, hearing aids, adaptive
                  learning tools, and orthopedic devices, ensuring children with disabilities can move, learn, and
                  communicate better.</p>
                <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                    class="flaticon-up-right-arrow"></i></a>
              </div>
            </div>
          </div>

          <!-- single item -->
          <div class="col">
            <div class="ul-donation ul-donation--inner h-100">
              <div class="ul-donation-img">
                <img src="{{ asset('front') }}/assets/img/donation-1.webp" alt="donation Image">
                <span class="tag">Foods</span>
              </div>
              <div class="ul-donation-txt">
                <div class="ul-donation-progress">
                  <div class="donation-progress-container ul-progress-container">
                    <div class="donation-progressbar ul-progressbar" data-ul-progress-value="55">
                      <div class="donation-progress-label ul-progress-label"></div>
                    </div>
                  </div>
                  <div class="ul-donation-progress-labels">
                    <span class="ul-donation-progress-label">Raised : ₹25,000</span>
                    <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                  </div>
                </div>
                <a href="{{ route('donation.details') }}" class="ul-donation-title">Light Up a Life" – Sponsor Therapy
                  Sessions</a>
                <p class="ul-donation-descr locoate">Help children with disabilities get access to speech therapy,
                  physiotherapy, and occupational therapy to improve their abilities and provide them with a sence of
                  independence.</p>
                <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                    class="flaticon-up-right-arrow"></i></a>
              </div>
            </div>
          </div>

          <!-- single item -->
          <div class="col">
            <div class="ul-donation ul-donation--inner h-100">
              <div class="ul-donation-img">
                <img src="{{ asset('front') }}/assets/img/donation-2.webp" alt="donation Image">
                <span class="tag">Foods</span>
              </div>
              <div class="ul-donation-txt">
                <div class="ul-donation-progress">
                  <div class="donation-progress-container ul-progress-container">
                    <div class="donation-progressbar ul-progressbar" data-ul-progress-value="95">
                      <div class="donation-progress-label ul-progress-label"></div>
                    </div>
                  </div>
                  <div class="ul-donation-progress-labels">
                    <span class="ul-donation-progress-label">Raised : ₹25,000</span>
                    <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                  </div>
                </div>
                <a href="{{ route('donation.details') }}" class="ul-donation-title">Express & Create" – Support Art &
                  Music
                  Therapy</a>
                <p class="ul-donation-descr locoate">Your donation will help us provide the kids with art supplies,
                  musical instruments, and therapy sessions, giving them the opportunity to explore themselves.</p>
                <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                    class="flaticon-up-right-arrow"></i></a>
              </div>
            </div>
          </div>

          <!-- single item -->
          <div class="col">
            <div class="ul-donation ul-donation--inner h-100">
              <div class="ul-donation-img">
                <img src="{{ asset('front') }}/assets/img/donation-3.webp" alt="donation Image">
                <span class="tag">Foods</span>
              </div>
              <div class="ul-donation-txt">
                <div class="ul-donation-progress">
                  <div class="donation-progress-container ul-progress-container">
                    <div class="donation-progressbar ul-progressbar" data-ul-progress-value="50">
                      <div class="donation-progress-label ul-progress-label"></div>
                    </div>
                  </div>
                  <div class="ul-donation-progress-labels">
                    <span class="ul-donation-progress-label">Raised : ₹25,000</span>
                    <span class="ul-donation-progress-label">Goal : ₹30,000</span>
                  </div>
                </div>
                <a href="{{ route('donation.details') }}" class="ul-donation-title">Joy of Play" – Build Inclusive
                  Playgrounds</a>
                <p class="ul-donation-descr locoate">Play is essential for every child’s growth. Your contribution will
                  allow us to create disability-friendly playgrounds with adaptive swings, ramps, and sensory play
                  areas,</p>
                <a href="{{ route('donation.details') }}" class="ul-donation-btn">Donate now <i
                    class="flaticon-up-right-arrow"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- pagination -->
      <div class="ul-pagination">
        <ul>
          <li><a href="#"><i class="flaticon-back"></i></a></li>
          <li class="pages">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
          </li>
          <li><a href="#"><i class="flaticon-next"></i></a></li>
        </ul>
      </div>
    </section>
    <!-- DONTATIONS SECTION END -->
  </main>
@endsection
