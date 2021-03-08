@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    @include('frontend.includes.nav')


    <section id="explore-music">
        <div class="mask mask-free">
            <div class="row">
                <div class="left-filter">
                    <div class="container container-dashboard">
                        <div class="profile-dashboard-row row">
                            <img src="https://source.unsplash.com/100x100" alt="" />
                            <h6>John <br />Mccallister</h6>
                        </div>
                        <div class="menu-item-dashboard">
                            <div class="menu-item row active-menu">
                                <div class="col-md-2">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="col-md-9"><h5>My Cart</h5></div>
                            </div>

                            <div class="menu-item row">
                                <div class="col-md-2">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                                <div class="col-md-9"><h5>Purchase History</h5></div>
                            </div>

                            <div class="menu-item row">
                                <div class="col-md-2">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="col-md-9"><h5>Account Settings</h5></div>
                            </div>

                            <div class="menu-item row">
                                <div class="col-md-2">
                                    <i class="far fa-credit-card"></i>
                                </div>
                                <div class="col-md-9"><h5>Payment Method</h5></div>
                            </div>

                            <div class="menu-item row">
                                <div class="col-md-2">
                                    <i class="fas fa-history"></i>
                                </div>
                                <div class="col-md-9"><h5>Activity Log</h5></div>
                            </div>

                            <div class="menu-item row">
                                <div class="col-md-2">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="col-md-9"><h5>Licence</h5></div>
                            </div>

                            <div class="menu-item row">
                                <div class="col-md-2">
                                    <i class="far fa-question-circle"></i>
                                </div>
                                <div class="col-md-9"><h5>Inquiries</h5></div>
                            </div>

                            <div class="menu-item row">
                                <div class="col-md-2">
                                    <i class="fas fa-sign-out-alt"></i>
                                </div>
                                <div class="col-md-9"><h5>Sign Out</h5></div>
                            </div>
                        </div>
                    </div>

                    <div class="space"></div>
                </div>
                <div class="right-result">
                    <div class="container">
                        <h2>My Cart</h2>
                        <div class="space-double"></div>
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
                                        <h6>Ready for This</h6>
                                        <p>R&B</p>
                                    </div>
                                </div>
                                <div class="col col-md-2 m-auto">
                                    <div class="text-group-two">
                                        <div class="duration">
                                            <div class="row">
                                                <p>Standard Licence</p>
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
                                        <h1>299.50 LKR</h1>
                                    </div>
                                </div>
                                <div class="col-md-1 m-auto">
                                    <a href="#"><i class="fas fa-trash"></i></a>
                                </div>
                            </div>
                        </div>

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
                                        <h6>Ready for This</h6>
                                        <p>R&B</p>
                                    </div>
                                </div>
                                <div class="col col-md-2 m-auto">
                                    <div class="text-group-two">
                                        <div class="duration">
                                            <div class="row">
                                                <p>Standard Licence</p>
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
                                        <h1>299.50 LKR</h1>
                                    </div>
                                </div>
                                <div class="col-md-1 m-auto">
                                    <a href="#"><i class="fas fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row my-cart-bottum">
                            <div class="col-md-5"><p>Have a coupon code?</p></div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col col-md-6"><h3>Sub Total</h3></div>
                                    <div class="col col-md-6"><h3>4199.00 LKR</h3></div>
                                </div>
                                <div class="m-t-15"></div>
                                <div class="row">
                                    <div class="col col-md-6"><h3>Sub Total</h3></div>
                                    <div class="col col-md-6"><h3>4199.00 LKR</h3></div>
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
