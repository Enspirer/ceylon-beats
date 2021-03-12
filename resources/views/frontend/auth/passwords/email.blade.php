@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
    @include('frontend.includes.nav')

    <section id="login-section">
        <div class="container animscroll-init animscroll-animate" data-animscroll="fade-up">
            <div class="login-form-body animscroll-init animscroll-animate" data-animscroll="fade-up">
                <div class="row">
                    <div class="left-form-login col-md-5 animscroll-init animscroll-animate" data-animscroll="fade-right">
                        <h1>Reset Your Password</h1>

                        <div class="form-login">
                            <form action="{{route('frontend.auth.password.email.post')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email / Username">
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">
                                    Continue
                                </button>
                            </form>

                        </div>
                    </div>
                    <div class="right-side-body col-md-7 animscroll-init animscroll-animate" data-animscroll="fade-left">
                        <h1>Welcome to Ceylon Beatz,</h1>
                        <p>Get access to thousands of <br> beats instantly</p>
                        <div class="row">
                            <div class="image col-md-3 animscroll-init animscroll-animate" data-animscroll="fade-up" data-animscroll-delay="100">
                                <img src="{{url('ceylon_beats_theme/assets/image/Mask Group 2@2x.png')}}" alt="">
                            </div>
                            <div class="image col-md-3 animscroll-init animscroll-animate" data-animscroll="fade-up" data-animscroll-delay="200">
                                <img src="{{url('ceylon_beats_theme/assets/image/Mask Group 3@2x.png')}}" alt="">
                            </div>
                            <div class="image col-md-3 animscroll-init animscroll-animate" data-animscroll="fade-up" data-animscroll-delay="300">
                                <img src="{{url('ceylon_beats_theme/assets/image/Mask Group 4@2x.png')}}" alt="">
                            </div>
                            <div class="image col-md-3 animscroll-init animscroll-animate" data-animscroll="fade-up" data-animscroll-delay="400">
                                <img src="{{url('ceylon_beats_theme/assets/image/Mask Group 5@2x.png')}}" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection






