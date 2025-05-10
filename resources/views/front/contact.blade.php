@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb ul-section-spacing">
      <div class="ul-container">
        <h2 class="ul-breadcrumb-title">Contact us</h2>
        <ul class="ul-breadcrumb-nav">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><span class="separator"><i class="flaticon-right"></i></span></li>
          <li>Contact us</li>
        </ul>
      </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <!-- CONTACT INFOS SECTION START -->
    <div class="ul-contact-infos">
      <div class="ul-section-spacing ul-container">
        <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
          <!-- single info -->
          <div class="col">
            <div class="ul-contact-info">
              <div class="icon"><i class="flaticon-phone-call"></i></div>
              <div class="txt">
                <span class="title">Phone number</span>
                <a href="tel:919711908590">+919711908590</a>
              </div>
            </div>
          </div>
          <!-- single info -->
          <div class="col">
            <div class="ul-contact-info">
              <div class="icon"><i class="flaticon-comment"></i></div>
              <div class="txt">
                <span class="title">Email address</span>
                <a href="mailto:info@gyandeep.ngo">info@gyandeep.ngo</a>
              </div>
            </div>
          </div>
          <!-- single info -->
          <div class="col">
            <div class="ul-contact-info">
              <div class="icon"><i class="flaticon-location"></i></div>
              <div class="txt">
                <span class="title">Office Address</span>
                <span class="descr">H.No. 538/1, Ward 7, Kirpal Colony, Dasuya, District Hoshiarpur, Punjab –
                  144205</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CONTACT INFOS SECTION END -->

    <!-- MAPS SECTION START -->
    <div class="ul-contact-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1057.8175978636361!2d75.661293058148!3d31.810757559194258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391ba100492ce5f1%3A0x128811915fe4dffe!2sDeep%20Special%20School%20Dasua%20Gyandeep%20Welfare%20%26%20Rehabilitation%20Society!5e0!3m2!1sen!2sin!4v1741442864013!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4273.369923927683!2d89.24843545559786!3d25.755317550773302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e32e0754341e5f%3A0xa50209e1e2d5aed5!2sRangpur%20Zoo!5e0!3m2!1sen!2sbd!4v1736854209235!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    </div>
    <!-- MAPS SECTION END -->

    <!-- CONTACT SECTION START -->
    <section class="ul-inner-contact ul-section-spacing">
      <div class="ul-section-heading justify-content-center text-center">
        <div>
          <span class="ul-section-sub-title">Contact us</span>
          <h2 class="ul-section-title">Feel Free To Write Us Anytime</h2>
        </div>
      </div>

      <div class="ul-inner-contact-container">
        <form class="ul-contact-form ul-form" method="POST" action="{{ route('contact.en') }}"
          enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="source" value="Contact Us">
          <input type="hidden" name="source_path" value="{{ url()->previous() }}">
          <div class="row row-cols-2 row-cols-xxs-1 ul-bs-row">
            <div class="col">
              <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Enter your full name"
                  value="{{ old('name') }}">
                @error('name')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Enter your email"
                  value="{{ old('email') }}">
                @error('email')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input type="text" name="subject" id="ul-contact-subject" placeholder="Subject"
                  value="{{ old('subject') }}">
                @error('subject')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea name="message" id="ul-contact-msg" placeholder="Type your message">{{ old('message') }}</textarea>
                @error('message')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
<div class="col-12">
<div class="form-group">

</div>
              <div class="input-group mb-3">
                <div class="input-group-text input-icon" ><span class="ti-captcha_answer">
                    <label for="captcha_question">{{ $question['text'] }}</label>
                  </span></div>
                <input type="number" name="captcha_answer" class="form-control" placeholder="Enter Captcha Value">
              </div>
              @error('captcha_answer')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-12 text-center">
              <button class="ul-btn" type="submit"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i>
                Get
                in
                Touch</button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- CONTACT SECTION END -->
  </main>
@endsection
