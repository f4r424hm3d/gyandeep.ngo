<form class="ul-contact-form ul-form" method="POST" action="{{ route('contact.en') }}" enctype="multipart/form-data">
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
        <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
        @error('email')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile" value="{{ old('mobile') }}">
        @error('mobile')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <input type="text" name="subject" id="ul-contact-subject" placeholder="Subject" value="{{ old('subject') }}">
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
        <div class="input-group-text input-icon"><span class="ti-captcha_answer">
            <label for="captcha_question">{{ $question['text'] }}</label>
          </span></div>
        <input type="number" name="captcha_answer" class="form-control" placeholder="Enter Captcha Value">
      </div>
      @error('captcha_answer')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-12 text-center mt-2">
      <button class="ul-btn" type="submit"><i class="flaticon-fast-forward-double-right-arrows-symbol"></i>
        Get in Touch</button>
    </div>
  </div>
</form>
