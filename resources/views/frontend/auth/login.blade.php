@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
    @include('frontend.includes.nav')

    <section id="login-section">
        <div class="container animscroll-init animscroll-animate" data-animscroll="fade-up">
            <div class="login-form-body animscroll-init animscroll-animate" data-animscroll="fade-up">
                <div class="row">
                    <div class="left-form-login col-md-5 animscroll-init animscroll-animate" data-animscroll="fade-right">
                        <h1>Log In</h1>
                        <!-- <div class="login-buttons-section">
                            <a href="" class="button button--facebook">Continue With Facebook</a>
                            <a href="" class="button button--google">Continue With Google</a>
                        </div> -->
                        <!-- <div class="separator">or</div> -->
                        <div class="form-login" style="margin-top: 50px;">
                            <form action="{{route('frontend.auth.login.post')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email / Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">
                                    Continue
                                </button>
                            </form>
                            <div class="row d-flex justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                <a href="{{route('frontend.auth.password.email')}}" class="text-right">Forget Password?</a>
                            </div>

                            <div class="bottumText">
                                <p>Not a member yet? <a href="{{route('frontend.auth.register')}}">Register Now</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="right-side-body col-md-7 animscroll-init animscroll-animate" data-animscroll="fade-left">
                        <h1>Welcome to Cross Tunes Global,</h1>
                        <p>Get access to thousands of <br> beats instantly</p>
                        <div class="row">
                            <div class="image col-sm-3 col-6 col-md-3 animscroll-init animscroll-animate" data-animscroll="fade-up" data-animscroll-delay="100">
                                <img src="{{url('ceylon_beats_theme/assets/image/thumbnail-01.jpg')}}" alt="">
                            </div>
                            <div class="image col-sm-3 col-6 col-md-3 animscroll-init animscroll-animate" data-animscroll="fade-up" data-animscroll-delay="200">
                                <img src="{{url('ceylon_beats_theme/assets/image/thumbnail-02.jpg')}}" alt="">
                            </div>
                            <div class="image col-sm-3 col-6 col-md-3 animscroll-init animscroll-animate" data-animscroll="fade-up" data-animscroll-delay="300">
                                <img src="{{url('ceylon_beats_theme/assets/image/thumbnail-03.jpg')}}" alt="">
                            </div>
                            <div class="image col-sm-3 col-6 col-md-3 animscroll-init animscroll-animate" data-animscroll="fade-up" data-animscroll-delay="400">
                                <img src="{{url('ceylon_beats_theme/assets/image/thumbnail-04.jpg')}}" alt="">
                            </div>
                        </div>
                        <p>and more...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection

@push('after-scripts')
    @if(config('access.captcha.login'))
        @captchaScripts
    @endif
@endpush
