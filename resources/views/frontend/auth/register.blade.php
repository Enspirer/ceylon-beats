@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
    @include('frontend.includes.nav')


    <section id="login-section">
        <div class="container animscroll-init animscroll-animate" data-animscroll="fade-up">
            <div class="login-form-body animscroll-init animscroll-animate" data-animscroll="fade-up">
                <div class="row">
                    <div class="left-form-register col-md-5 animscroll-init animscroll-animate" data-animscroll="fade-right">
                        <h1>Create your account</h1>


                        <div class="form-register">
                            <form action="{{route('frontend.auth.register.post')}}">
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
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">By signing up a agree with <a href="#">Terms and conditions.</a> </label>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary btn-block">
                                    Register
                                </button>
                            </form>


                            <div class="bottumText">
                                <p>If You are Already Registerd? <a href="#">Sign in</a></p>
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


    {{--<div class="row justify-content-center align-items-center">--}}
        {{--<div class="col col-sm-8 align-self-center">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">--}}
                    {{--<strong>--}}
                        {{--@lang('labels.frontend.auth.register_box_title')--}}
                    {{--</strong>--}}
                {{--</div><!--card-header-->--}}

                {{--<div class="card-body">--}}
                    {{--{{ html()->form('POST', route('frontend.auth.register.post'))->open() }}--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-12 col-md-6">--}}
                            {{--<div class="form-group">--}}
                                {{--{{ html()->label(__('validation.attributes.frontend.first_name'))->for('first_name') }}--}}

                                {{--{{ html()->text('first_name')--}}
                                    {{--->class('form-control')--}}
                                    {{--->placeholder(__('validation.attributes.frontend.first_name'))--}}
                                    {{--->attribute('maxlength', 191)--}}
                                    {{--->required()}}--}}
                            {{--</div><!--col-->--}}
                        {{--</div><!--row-->--}}

                        {{--<div class="col-12 col-md-6">--}}
                            {{--<div class="form-group">--}}
                                {{--{{ html()->label(__('validation.attributes.frontend.last_name'))->for('last_name') }}--}}

                                {{--{{ html()->text('last_name')--}}
                                    {{--->class('form-control')--}}
                                    {{--->placeholder(__('validation.attributes.frontend.last_name'))--}}
                                    {{--->attribute('maxlength', 191)--}}
                                    {{--->required() }}--}}
                            {{--</div><!--form-group-->--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--row-->--}}

                    {{--<div class="row">--}}
                        {{--<div class="col">--}}
                            {{--<div class="form-group">--}}
                                {{--{{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}--}}

                                {{--{{ html()->email('email')--}}
                                    {{--->class('form-control')--}}
                                    {{--->placeholder(__('validation.attributes.frontend.email'))--}}
                                    {{--->attribute('maxlength', 191)--}}
                                    {{--->required() }}--}}
                            {{--</div><!--form-group-->--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--row-->--}}

                    {{--<div class="row">--}}
                        {{--<div class="col">--}}
                            {{--<div class="form-group">--}}
                                {{--{{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}--}}

                                {{--{{ html()->password('password')--}}
                                    {{--->class('form-control')--}}
                                    {{--->placeholder(__('validation.attributes.frontend.password'))--}}
                                    {{--->required() }}--}}
                            {{--</div><!--form-group-->--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--row-->--}}

                    {{--<div class="row">--}}
                        {{--<div class="col">--}}
                            {{--<div class="form-group">--}}
                                {{--{{ html()->label(__('validation.attributes.frontend.password_confirmation'))->for('password_confirmation') }}--}}

                                {{--{{ html()->password('password_confirmation')--}}
                                    {{--->class('form-control')--}}
                                    {{--->placeholder(__('validation.attributes.frontend.password_confirmation'))--}}
                                    {{--->required() }}--}}
                            {{--</div><!--form-group-->--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--row-->--}}

                    {{--@if(config('access.captcha.registration'))--}}
                        {{--<div class="row">--}}
                            {{--<div class="col">--}}
                                {{--@captcha--}}
                                {{--{{ html()->hidden('captcha_status', 'true') }}--}}
                            {{--</div><!--col-->--}}
                        {{--</div><!--row-->--}}
                    {{--@endif--}}

                    {{--<div class="row">--}}
                        {{--<div class="col">--}}
                            {{--<div class="form-group mb-0 clearfix">--}}
                                {{--{{ form_submit(__('labels.frontend.auth.register_button')) }}--}}
                            {{--</div><!--form-group-->--}}
                        {{--</div><!--col-->--}}
                    {{--</div><!--row-->--}}
                    {{--{{ html()->form()->close() }}--}}

                    {{--<div class="row">--}}
                        {{--<div class="col">--}}
                            {{--<div class="text-center">--}}
                                {{--@include('frontend.auth.includes.socialite')--}}
                            {{--</div>--}}
                        {{--</div><!--/ .col -->--}}
                    {{--</div><!-- / .row -->--}}
                {{--</div><!-- card-body -->--}}
            {{--</div><!-- card -->--}}
        {{--</div><!-- col-md-8 -->--}}
    {{--</div><!-- row -->--}}


@endsection

@push('after-scripts')
@if(config('access.captcha.login'))
    @captchaScripts
@endif
@endpush







