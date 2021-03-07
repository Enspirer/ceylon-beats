<nav class="navbar-top navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="curency col-md-2">
            <div class="row">
                <img src="assets/image/Image 15@2x.png" alt="" srcset="" />
                <select class="form-select" aria-label="Default select example">
                    <option selected>LKR</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="menu col-md-7">
            <div class="row">
                <div class="menu-item col-md-2">
                    <a href="{{url('/')}}" class="active">Home</a>
                </div>
                <div class="menu-item col-md-2"><a href="{{route('frontend.explorer',['null','null','null','null'])}}">Music</a></div>
                <div class="menu-item col-md-3">
                    <img
                            class="default-logo"
                            src="assets/image/Group 57@2x.png"
                            alt=""
                    />
                    <img
                            class="sticky-logo d-none"
                            src="assets/image/Group 57@2x.png"
                            alt=""
                    />
                </div>
                <div class="menu-item col-md-2"><a href="">About Us</a></div>
                <div class="menu-item col-md-3"><a href="">Contact Us</a></div>
            </div>
        </div>
        <div class="cart col-md-3">
            <div class="row">

                <a href="#" id="cart">
                    <div id="ex" class="ex-icon-group">
                        @if(count($cartDetails) == 0)

                        @else
                            <span class="badge badge-pill badge-danger">{{count($cartDetails)}}</span>
                        @endif
                        <i class="fa fa-shopping-cart"></i>

                    </div>
                </a>

                <a href="#">
                    <div id="ex" class="ex-icon-group">
                        <!-- <span class="p1 fa-stack has-badge" data-count="10"> -->
                        <i class="fa fa-user" aria-hidden="true"></i>

                    </div>
                </a>
                <a href="#" type="button" class="button-signup">Sign Up</a>
            </div>

            <!-- ------------------- cart -------------------------------------  -->
            <div class="shopping-cart" style="transition-delay: 50ms;">
                <div class="shopping-cart-header">
                    <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">{{count($cartDetails)}}</span>
                    <div class="shopping-cart-total">
                        <span class="lighter-text">Total:</span>
                        <span class="main-color-text total">70€</span>
                    </div>
                </div>
                <!--end shopping-cart-header -->

                <ul class="shopping-cart-items">
                    @foreach($cartDetails as $cartDetail)
                        <li class="clearfix">
                            <img src="https://www.qispackaging.com.au/getmetafile/fefe4afb-dd4d-495e-ad59-209f29b47052/XMREDTREE.aspx" alt="item1">
                            <span class="item-name">XMREDTREE</span>
                            <span class="item-detail">Pack 100</span>
                            <span class="item-price">45€</span>
                            <span class="item-quantity">Quantity: 01</span>
                        </li>
                    @endforeach
                </ul>

                <a href="#" class="button">Checkout <i class="fa fa-chevron-right"></i></a>
            </div>
            <!--end shopping-cart -->
            <!-- ----------------------- cart ------------------------  -->
        </div>
    </div>
</nav>