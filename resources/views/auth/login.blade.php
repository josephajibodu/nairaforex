@extends('layouts.guest')

@section('content')

<!-- section content begin -->
<div class="uk-section uk-padding-remove-vertical">
  <div class="uk-container uk-container-expand">
    <div class="uk-grid" data-uk-height-viewport="expand: true">
      <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
        style="background-image: url(img/in-signin-image.jpg);">
      </div>
      <div class="uk-width-expand@m uk-flex uk-flex-middle">
        <div class="uk-grid uk-flex-center">
          <div class="uk-width-3-5@m">
            <div class="in-padding-horizontal@s">
              <!-- module logo begin -->
              <a class="uk-logo" href="/">
                <img class="uk-margin-small-right in-offset-top-10" src="{{ asset('img/logo/nairaforex-1.png') }}"
                  data-src="{{ asset('img/logo/nairaforex-1.png') }}" alt="wave" width="134" height="23" data-uk-img>
              </a>
              <!-- module logo begin -->
              <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Log into your account</p>
              <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Don't have an account? <a
                  href="{{ route('register') }}">Register here</a></p>
              <!-- login form begin -->

              <form class="uk-grid uk-form" action="{{ route('login') }}" method="post">
                @csrf
                <div class="uk-margin-small uk-width-1-1 uk-inline">
                  <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                  <input class="uk-input uk-border-rounded @error('username') uk-form-danger @enderror" id="username"
                    value="{{ old('username') }}" name="username" type="text" placeholder="Username" required
                    autocomplete="username" autofocus>
                  @error('username')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
                <div class="uk-margin-small uk-width-1-1 uk-inline">
                  <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                  <input class="uk-input uk-border-rounded" name="password" id="password" value="{{ old('password') }}"
                    type="password" placeholder="Password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="uk-margin-small uk-width-auto uk-text-small">
                  <label><input class="uk-checkbox uk-border-rounded" type="checkbox" name="remember"
                      {{ old('remember') ? 'checked' : '' }}> Remember me</label>
                </div>
                @if (Route::has('password.request'))
                <!-- <div class="uk-margin-small uk-width-expand uk-text-small">
                  <label class="uk-align-right"><a class="uk-link-reset"
                      href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></label>
                </div> -->
                @endif
                <div class="uk-margin-small uk-width-1-1">
                  <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit"
                    name="submit">Sign in</button>
                </div>
              </form>
              <!-- login form end -->
              <!-- <p class="uk-heading-line uk-text-center"><span>Or sign in with</span></p>
              <div class="uk-margin-medium-bottom uk-text-center">
                <a class="uk-button uk-button-small uk-border-rounded in-brand-google" href="#"><i
                    class="fab fa-google uk-margin-small-right"></i>Google</a>
                <a class="uk-button uk-button-small uk-border-rounded in-brand-facebook" href="#"><i
                    class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- section content end -->
@endsection