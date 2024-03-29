<nav class="navbar-top navbar navbar-expand-lg navbar-dark bg-dark" style="z-index: 9999999999999;">
    <div class="container">

    <div class="mob-user-ic col-md-2 col-2 d-none" id="stack_arm" data-toggle="modal" data-target="#exampleModalTEECenter2" style="padding-top: 10px;padding-bottom: 10px;">
          <i class="fa fa-user"  type="button" data-toggle="modal" data-target="#exampleModalTEECenter2" style="color: #fff;font-size: 30px;" aria-hidden="true"></i>
        </div>

        <div class="curency cur-lan col-2 col-md-2">
            <div class="row">
                <img src="{{url('/ceylon_beats_theme/assets/image/Image 15@2x.png')}}" alt="" srcset="" />
                <select class="form-select" aria-label="Default select example">
                    <option selected>{{settings('currency')}}</option>
                </select>



            </div>


        </div>
        <div class="mob-user-ic d-none" id="stack_armqs" data-toggle="modal" data-target="#exampleModalTEECenter2" style="padding-top: 10px;padding-bottom: 10px;">
            <i class="fa fa-user"  type="button" data-toggle="modal" data-target="#exampleModalTEECenter2" style="color: #fff;font-size: 30px;" aria-hidden="true"></i>
        </div>

        
        <div class="menu col-md-8">
            <div class="row">
                <div class="menu-item col-md-2">
                   <a href="{{url('/')}}" class="{{ Request::segment(1) === null ? 'active' : null }}">Home</a>
                </div>
                <div class="menu-item col-md-2">
                    <a class="{{ Request::segment(1) === 'explore' ? 'active' : null }}" href="{{route('frontend.explorer',['genres','author_name','duration','price','music_name'])}}">Music</a>
                </div>
                <div class="menu-item col-md-3">
                   <a href="{{url('/')}}" class="d-contain">
                       <img class="default-logo" style="z-index: 12" src="{{url('/ceylon_beats_theme/assets/image/logo.png')}}" alt="">
                        <img class="sticky-logo d-none" src="{{url('/ceylon_beats_theme/assets/image/logo.png')}}" alt="">
                   </a>
                </div>
                <div class="menu-item col-md-2">
                    <a class="{{ Request::segment(1) === 'about_us' ? 'active' : null }}"  href="{{route('frontend.about_us')}}">About Us</a>
                </div>
                <div class="menu-item col-md-3">
                    <a class="{{ Request::segment(1) === 'contact' ? 'active' : null }}"   href="{{route('frontend.contact')}}">Contact Us</a>
                </div>




            </div>
        </div>
        
        <div class="menu-mob-logo-center d-none col-8">
          <img
          class="default-logo"
          src="{{url('/ceylon_beats_theme/assets/image/logo.png')}}"
          alt=""/>
        <img
        class="sticky-logo d-none"
        src="{{url('/ceylon_beats_theme/assets/image/logo.png')}}"
        alt=""/>
        </div>

        <div class="col-md-1 d-none menu-mob col-1">
          <input type="checkbox" id="overlay-input" />
          <label for="overlay-input" id="overlay-button"><span></span></label>
          <div id="overlay">
            <ul>
              <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{route('frontend.explorer',['genres','author_name','duration','price','music_name'])}}">Music</a></li>
              <li><a href="{{route('frontend.about_us')}}">About Us</a></li>
              <li><a  href="{{route('frontend.contact')}}">Contact Us</a></li>

              @auth

                <li>
                    <a style="background-color: #d88c00;padding: 10px;border-radius: 10px;font-size: 20px;color: white;" href="{{route('frontend.user.my_cart')}}" class="button">Checkout <i class="fa fa-shopping-cart"></i> ({{count($cartDetails)}})</a>
                </li>

              @else
                  <li>
                      <a href="{{route('frontend.auth.login')}}" class="button">Checkout <i class="fa fa-chevron-right"></i></a>
                  </li>
              @endauth
            </ul>
          </div>
        </div>

        <div class="cart col-md-2">
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
                            <a class="mini-photo-wrapper" onclick="myFunction2(event)" href="#"><img class="mini-photo" src="{{$logged_in_user->picture}}" width="36" height="36"/></a>
                            <div class="menu-container" id="menu-container">
                                <ul class="user-menu">
                                    <div class="profile-highlight">
                                        <img src="{{$logged_in_user->picture}}" alt="profile-img" width=36 height=36>
                                        <div class="details">
                                            <div id="profile-name">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                                        </div>
                                    </div>
                                    <li class="user-menu__item">
                                        <a class="user-menu-link" href="{{route('frontend.user.my_cart')}}">
                                            <i class="fas fa-shopping-cart"></i>
                                            <div>My Cart</div>
                                        </a>
                                    </li>

                                    <li class="user-menu__item">
                                        <a class="user-menu-link" href="{{route('frontend.user.purchase_history')}}">
                                            <i class="fa fa-history" aria-hidden="true"></i>
                                            <div>Purchased History</div>
                                        </a>
                                    </li>
                                    <li class="user-menu__item">
                                        <a class="user-menu-link" href="{{route('frontend.user.account')}}">
                                            <i class="fa fa-cog" aria-hidden="true"></i>
                                            <div>Settings</div>
                                        </a>
                                    </li>
                                    <li class="user-menu__item">
                                        <a class="user-menu-link" href="{{route('frontend.auth.logout')}}">
                                            <i style="color: #F44336 !important;" class="fa fa-sign-out" aria-hidden="true"></i>
                                            <div style="color: #F44336;">Logout</div>
                                        </a>
                                    </li>
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
            <div class="shopping-cart" style="transition-delay: 50ms;right: 80px">
                <div class="shopping-cart-header">
                    <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">{{count($cartDetails)}}</span>
                    <div class="shopping-cart-total">
                        <span class="lighter-text">Total:</span>
                        <span class="main-color-text total">{{settings('currency')}} {{number_format($cart_total,2)}}</span>
                    </div>
                </div>
                <!--end shopping-cart-header -->

                <ul class="shopping-cart-items">
                    @if(count($cartDetails) == 0)
                        <p>Your Cart Is Empty.</p>
                    @else
                        @foreach($cartDetails as $cartDetail)
                            <li class="clearfix" style="list-style-type: none;">
                                <img src="{{url('ceylon_beats_theme/assets/albumart.png')}}" alt="item1">
                                <span class="item-name">{{$cartDetail->name}}</span>
                                <span class="item-detail">
                                {{$cartDetail->attributes->license_name}}
                            </span>

                                <span class="item-price">{{settings('currency')}} {{number_format($cartDetail->price,2)}}</span>

                                <span class="item-quantity">
                                    <a>
                                        <i style="cursor: pointer" data-toggle="modal" data-target="#exampleModalCenter2{{$cartDetail->id}}" class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </span>
                            </li>
                        @endforeach
                    @endif


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

@foreach($cartDetails as $cartDetail)
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter2{{$cartDetail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;">Are You Sure Delete Music?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span style="color: #fff;" aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{route('frontend.cart.remove',$cartDetail->id)}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

@endforeach
