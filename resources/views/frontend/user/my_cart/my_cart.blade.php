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

                        @if(count($cartDetails) == 0)
                            @include('frontend.user.my_cart.cart_item not_found')
                        @else
                            @foreach($cartDetails as $cartDetail)
                                @include('frontend.user.my_cart.music_item')
                            @endforeach
                                <div class="row my-cart-bottum">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col col-md-6"><h3>Total</h3></div>
                                            <div class="col col-md-6"><h3>LKR {{number_format($cart_total,2)}}</h3></div>
                                        </div>
                                        <div class="m-t-15"></div>

                                        <div class="space"></div>
                                        <div class="row bottum-button">
                                            <a href="{{route('frontend.explorer',['genres','author_name','duration','price','music_name'])}}" class="btn-continue">Continue Browsing</a>
                                            <a href="#" class="btn-checkout">Checkout Now</a>

                                        </div>
                                    </div>
                                </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
<script>
    function playAudio(id,icon) {
        var x = document.getElementById(id);
        var getallicon = $('.fa-pause');
        getallicon.attr('class','fa fa-play');
        console.log(getallicon);
//            x.play();
        if (x.duration > 0 && !x.paused) {
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
        document.addEventListener('play', function(e){
            var audios = document.getElementsByTagName('audio');
            for(var i = 0, len = audios.length; i < len;i++){
                if(audios[i] != e.target){
                    audios[i].pause();
                }
            }
        }, true);
    }
    function pauseAudio(id,icon) {
        var x = document.getElementById(id);
        x.pause();
    }
</script>