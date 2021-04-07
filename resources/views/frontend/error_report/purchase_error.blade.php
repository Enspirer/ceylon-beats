@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    @include('frontend.includes.nav')


    <section id="explore-music">
        <div class="mask mask-free">
            <div class="row">
                @include('frontend.user.includes.sidebar')
                <div class="right-result">
                    <div class="container" style="padding-top: 100px;">

                        @include('frontend.user.my_cart.cart_item not_found',
                                                  [
                                                      'error_title'=>'Ops..Something Wrong',
                                                      'error_description'=>'Payment not accepted, please check payment card details',
                                                      'error_button_link'=> route('frontend.explorer',['genres','author_name','duration','price','music_name']),
                                                      'error_button_name'=>'Go to Music',
                                                  ])

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Modal -->


@endsection
