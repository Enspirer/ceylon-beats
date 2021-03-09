<nav class="navbar-top navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="curency col-md-2">
            <div class="row">
                <img src="{{url('/ceylon_beats_theme/assets/image/Image 15@2x.png')}}" alt="" srcset="" />
                <select class="form-select" aria-label="Default select example">
                    <option selected>LKR</option>
                </select>
            </div>
        </div>
        <div class="menu col-md-7">
            <div class="row">
                <div class="menu-item col-md-2">
                    <a href="{{url('/')}}" class="">Home</a>
                </div>
                <div class="menu-item col-md-2"><a href="{{route('frontend.explorer',['null','null','null','null','null'])}}">Music</a></div>
                <div class="menu-item col-md-3">
                    <img
                            class="default-logo"
                            src="{{url('/ceylon_beats_theme/assets/image/Group 57@2x.png')}}"
                            alt=""
                    />
                    <img
                            class="sticky-logo d-none"
                            src="{{url('/ceylon_beats_theme/assets/image/Group 57@2x.png')}}"
                            alt=""
                    />
                </div>
                <div class="menu-item col-md-2"><a href="">About Us</a></div>
                <div class="menu-item col-md-3"><a href="">Contact Us</a></div>
            </div>
        </div>
        <div class="cart col-md-3">
            <div class="row">



                @auth

                @endauth

                <a href="#" id="cart">
                    <div id="ex" class="ex-icon-group">
                        @if(count($cartDetails) == 0)

                        @else
                            <span class="badge badge-pill badge-danger">{{count($cartDetails)}}</span>
                        @endif
                        <i class="fa fa-shopping-cart"></i>

                    </div>
                </a>

                @auth
                        <div class="user-menu-wrap">

                            <a class="mini-photo-wrapper" onclick="myFunction2(event)" href="#"><img class="mini-photo" src="https://images.unsplash.com/photo-1578976563986-fb8769ab695e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" width="36" height="36"/></a>


                            <div class="menu-container" id="menu-container">
                                <ul class="user-menu">
                                    <div class="profile-highlight">
                                        <img src="https://images.unsplash.com/photo-1578976563986-fb8769ab695e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="profile-img" width=36 height=36>
                                        <div class="details">
                                            <div id="profile-name">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                                        </div>
                                    </div>
                                    <li class="user-menu__item">
                                        <a class="user-menu-link" href="#">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1604623/trophy.png" alt="trophy_icon" width=20 height=20>
                                            <div>My Cart</div>
                                        </a>
                                    </li>

                                    <li class="user-menu__item">
                                        <a class="user-menu-link" href="#">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1604623/book.png" alt="team_icon" width=20 height=20 >
                                            <div>Purchased History</div>
                                        </a>
                                    </li>
                                    <div class="footer">
                                        <li class="user-menu__item"><a class="user-menu-link" href="{{route('frontend.auth.logout')}}" style="color: #F44336;">Logout</a></li>
                                        <li class="user-menu__item"><a class="user-menu-link" href="{{route('frontend.user.account')}}">Settings</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>

                @else
                    <a href="{{route('frontend.auth.login')}}">
                        <div id="ex" class="ex-icon-group">
                            <!-- <span class="p1 fa-stack has-badge" data-count="10"> -->
                            <i class="fa fa-user" aria-hidden="true"></i>

                        </div>
                    </a>
                    <a href="{{route('frontend.auth.register')}}" type="button" class="button-signup">Sign Up</a>
                @endauth


            </div>

            <!-- ------------------- cart -------------------------------------  -->
            <div class="shopping-cart" style="transition-delay: 50ms;">
                <div class="shopping-cart-header">
                    <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">{{count($cartDetails)}}</span>
                    <div class="shopping-cart-total">
                        <span class="lighter-text">Total:</span>
                        <span class="main-color-text total">LKR {{number_format($cart_total,2)}}</span>
                    </div>
                </div>
                <!--end shopping-cart-header -->

                <ul class="shopping-cart-items">
                    @foreach($cartDetails as $cartDetail)
                        <li class="clearfix" style="list-style-type: none;">
                            <img src="{{url('ceylon_beats_theme/assets/dummy_music.png')}}" alt="item1">
                            <span class="item-name">{{$cartDetail->name}}</span>
                            <span class="item-detail">
                                {{$cartDetail->attributes->license_name}}
                            </span>

                            <span class="item-price">LKR {{number_format($cartDetail->price,2)}}</span>

                            <span class="item-quantity">QTY: 1</span>
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </li>
                    @endforeach
                </ul>

                @auth
                    <a href="{{route('frontend.user.my_cart')}}" class="button">Checkout <i class="fa fa-chevron-right"></i></a>

                @else
                    <a href="{{route('frontend.auth.login')}}" class="button">Checkout <i class="fa fa-chevron-right"></i></a>
                @endauth

            </div>
            <!--end shopping-cart -->
            <!-- ----------------------- cart ------------------------  -->
        </div>
    </div>
</nav>
