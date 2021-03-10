signing u@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
    @include('frontend.includes.nav')




    <section id="login-section">

        <div class="container animscroll-init animscroll-animate" data-animscroll="fade-up">
            <div class="login-form-body animscroll-init animscroll-animate" data-animscroll="fade-up">
                <div class="row">
                    <div class="left-form-register col-md-5 animscroll-init animscroll-animate" data-animscroll="fade-right">
                        <h1>Create your account</h1>
                        @include('includes.partials.messages')


                        <div class="form-register">
                            <form action="{{route('frontend.auth.register.post')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="First Nmae">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Nmae">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="●●●●●●●●●">
                                </div>
                                <div class="form-group">
                                    <label>Password Confirmation</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="●●●●●●●●●">
                                </div>


                                <div class="row d-flex justify-content-between">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkme">
                                        <label class="form-check-label" for="exampleCheck1">By signing up a agree with <a href="#">Terms and conditions.</a> </label>
                                    </div>
                                </div>
                                <button disabled="disabled" id="sendNewSms" type="submit" class="btn btn-primary btn-block">
                                    Register
                                </button>
                            </form>


                            <div class="bottumText">
                                <p>If You are Already Registerd? <a href="{{route('frontend.auth.login')}}">Sign in</a></p>
                            </div>
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

@push('after-scripts')
@if(config('access.captcha.login'))
    @captchaScripts
@endif

    <script>
        var checker = document.getElementById('checkme');
        var sendbtn = document.getElementById('sendNewSms');
        checker.onchange = function(){
            if(this.checked){
                sendbtn.disabled = false;
            } else {
                sendbtn.disabled = true;
            }

        }
    </script>
@endpush







