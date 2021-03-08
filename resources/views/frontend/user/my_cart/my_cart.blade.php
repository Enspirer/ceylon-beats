@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    @include('frontend.includes.nav')


    <section id="explore-music">
        <div class="mask mask-free">
            <div class="row">
                @include('frontend.user.includes.sidebar')
                <div class="right-result">
                    <div class="container">
                        <h2>My Cart</h2>
                        <div class="space-double"></div>
                        @foreach($cartDetails as $cartDetail)
                            <div class="list-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div
                                                id="player-pop-up"
                                                onclick="Onplaye('http://localhost/cb/assets/demo.wav')"
                                                class="play-button"
                                        >
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col col-md-3">
                                        <div class="text-group-one">
                                            <h6>{{$cartDetail->name}}</h6>
                                            <p> {{$cartDetail->attributes->author_name}}</p>
                                        </div>
                                    </div>
                                    <div class="col col-md-2 m-auto">
                                        <div class="text-group-two">
                                            <div class="duration">
                                                <div class="row">
                                                    <p>{{$cartDetail->attributes->license_name}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-md-1 m-auto">
                                        <div class="text-group-two">
                                            <div class="duration">
                                                <div class="row">
                                                    <p>24.28 MB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 m-auto">
                                        <div class="text-group-four">
                                            <h1>LKR {{number_format($cartDetail->price,2)}}</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-1 m-auto">
                                        <a href="#"><i class="fas fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                        <div class="row my-cart-bottum">
                            <div class="col-md-5"><p>Have a coupon code?</p></div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col col-md-6"><h3>Sub Total</h3></div>
                                    <div class="col col-md-6"><h3>LKR {{number_format($cart_total,2)}}</h3></div>
                                </div>
                                <div class="m-t-15"></div>
                                <div class="row">
                                    <div class="col col-md-6"><h3>Sub Total</h3></div>
                                    <div class="col col-md-6"><h3>LKR {{number_format($cart_total,2)}}</h3></div>
                                </div>
                                <div class="space"></div>
                                <div class="row bottum-button">
                                    <a href="#" class="btn-continue">Continue Browsing</a>
                                    <a href="#" class="btn-checkout">Checkout Now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
