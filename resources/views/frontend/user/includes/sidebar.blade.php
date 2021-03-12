<div class="left-filter">
    <div class="container container-dashboard">
        <div class="profile-dashboard-row row">
            <img src="{{$logged_in_user->picture}}" alt="" />
            <h6>{{auth()->user()->first_name}} <br/>{{auth()->user()->last_name}}</h6>
        </div>
        <div class="menu-item-dashboard">
            <a href="{{route('frontend.user.my_cart')}}">
                <div class="menu-item row {{ Request::segment(1) === 'my_cart' ? 'active-menu' : null }}">

                    <div class="col-md-2">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="col-md-9"><h5>My Cart</h5></div>
                </div>
            </a>

            <a href="{{route('frontend.user.purchase_history')}}">
            <div class="menu-item row {{ Request::segment(1) === 'purchase_history' ? 'active-menu' : null }}">
                <div class="col-md-2">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="col-md-9"><h5>Purchase History</h5></div>
            </div>
            </a>


            <a href="{{route('frontend.user.account')}}">
                <div class="menu-item row {{ Request::segment(1) === 'account' ? 'active-menu' : null }}">
                    <div class="col-md-2">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="col-md-9"><h5>Account Settings</h5></div>
                </div>
            </a>

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

            <a href="{{route('frontend.auth.logout')}}">
                <div class="menu-item row">
                    <div class="col-md-2">
                        <i class="fas fa-sign-out-alt"></i>
                    </div>
                    <div class="col-md-9"><h5>Sign Out</h5></div>
                </div>
            </a>

        </div>
    </div>
    <div class="space"></div>
</div>
