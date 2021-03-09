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
                        <h2>Account Settings</h2>
                        <div class="space"></div>

                        <div class="profile-image-section">
                            <div class="image-holder">
                                <img src="https://source.unsplash.com/140x140?girl" alt="" />
                                <div class="change-profile-image">
                                    <i class="fas fa-camera"></i>
                                </div>
                            </div>
                        </div>
                        <div class="profile-image-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-3"><p>First Name</p></div>
                                    <div class="col-md-9">
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder=" John Macline"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"><p>Last Name</p></div>
                                    <div class="col-md-9">
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder=" John Macline"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"><p>Email</p></div>
                                    <div class="col-md-9">
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder=" John************83@gmail.com"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"><p>Contact number</p></div>
                                    <div class="col-md-9">
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder="0772343456"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"><p>Your location</p></div>
                                    <div class="col-md-9">
                                        <select class="form-control">
                                            <option>Sri Lanka</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row-button">
                                    <button type="submit" class="btn" >Update Account Details</button>
                                </div>
                            </form>
                            <h2>Password and Security</h2>
                            <form action="" class="m-t-15">
                                <div class="row">
                                    <div class="col-md-3"><p>Old password</p></div>
                                    <div class="col-md-9">
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder="●●●●●●●●●●●"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"><p>New password</p></div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"><p>Confirm password</p></div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="row-button">
                                    <button type="submit" class="btn" >Update Password</button>
                                </div>
                            </form>

                            <h2>Terms and Conditions</h2>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    id="defaultCheck1"
                                />
                                <label class="form-check-label" for="defaultCheck1">
                                    I have read, and agree to the Ceylon Beats
                                    <a href=""> Terms and Conditions.</a>
                                </label>
                            </div>

                            <div class="account-diactivate-section space">
                                <h3>Deactivate my account</h3>
                                <p>What happens when you deactivate account</p>
                                <ul>
                                    <li>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempor orem ipsum dolor sit amet
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempororem ipsum dolor sit amet
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempor orem ipsum dolor sit amet
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempororem ipsum dolor sit amet
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempororem ipsum dolor sit amet
                                    </li>
                                </ul>
                                <a href="#">Deactivate account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

<script>


    function playAudio(id,icon) {
        var x = document.getElementById(id);
//            x.play();

        if (x.duration > 0 && !x.paused && !x.stopped) {
            var icondelemts = document.getElementById(icon);
            icondelemts.className = 'fa fa-play';
            console.log(icon);
            x.pause();
        } else {
            var icondelemts = document.getElementById(icon);

            icondelemts.className = 'fa fa-pause';
            x.play();
            //Not playing...maybe paused, stopped or never played.

        }

    }

    function pauseAudio(id,icon) {
        var x = document.getElementById(id);
        x.pause();
    }
</script>
