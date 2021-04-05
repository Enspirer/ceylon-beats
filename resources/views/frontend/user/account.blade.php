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
                            <form action="{{route('frontend.user.account.updateUserDetails')}}" method="post">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-3"><p>First Name</p></div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" name="first_name" placeholder=" John Macline" value="{{auth()->user()->first_name}}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"><p>Last Name</p></div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" name="last_name" placeholder=" John Macline" value="{{auth()->user()->last_name}}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"><p>Email</p></div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="email" name="email" placeholder=" John************83@gmail.com" value="{{auth()->user()->email}}" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3"><p>Contact number</p></div>
                                    <div class="col-md-9">
                                        <input name="contact_number" value="{{auth()->user()->contact_number}}" class="form-control" type="text" placeholder="077********" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"><p>Address</p></div>
                                    <div class="col-md-9">
                                       <textarea class="form-control" name="address" rows="10" style="color:grey;background: #6a364f;border: aliceblue;">{{auth()->user()->address}}</textarea>
                                    </div>
                                </div>
                                <div class="row-button">
                                    <button type="submit" class="btn" >Update Account Details</button>
                                </div>
                            </form>
                            <h2>Password and Security</h2>

                            {{ html()->form('PATCH', route('frontend.auth.password.update'))->class('form-horizontal')->open() }}

                                        <div class="row">
                                            <div class="col-md-3"><p>{{ html()->label(__('validation.attributes.frontend.old_password'))->for('old_password') }}</p></div>
                                            <div class="col-md-9">
                                                {{ html()->password('old_password')->class('form-control')->placeholder(__('validation.attributes.frontend.old_password'))->autofocus()->required() }}
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-3"><p>{{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}</p></div>
                                            <div class="col-md-9">
                                                {{ html()->password('password')->class('form-control')->placeholder(__('validation.attributes.frontend.password'))->autofocus()->required() }}
                                            </div>
                                        </div>

                            <div class="row">
                                <div class="col-md-3"><p>{{ html()->label(__('validation.attributes.frontend.password_confirmation'))->for('password_confirmation') }}</p></div>
                                <div class="col-md-9">
                                    {{ html()->password('password_confirmation')->class('form-control')->placeholder(__('validation.attributes.frontend.password_confirmation'))->autofocus()->required() }}
                                </div>
                            </div>



                            <div class="row">
                                <div class="col">
                                    <div class="form-group">

                                    </div><!--form-group-->
                                </div><!--col-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-0 clearfix">

                                        {{ form_submit(__('labels.general.buttons.update') . ' ' . __('validation.attributes.frontend.password')) }}
                                    </div><!--form-group-->
                                </div><!--col-->
                            </div><!--row-->
                            {{ html()->form()->close() }}

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
