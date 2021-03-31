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
                            <form action="" method="post">
                                {{csrf_field()}}
                                @foreach($cartDetails as $cartDetail)
                                    @include('frontend.user.my_cart.music_item')
                                @endforeach
                                <div class="row my-cart-bottum">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col col-md-6"><h3>Total</h3></div>
                                            <div class="col col-md-6"><h3>{{number_format($cart_total,2)}} USD</h3></div>
                                            <input type="hidden" value="{{number_format($cart_total,2)}}" name="total">
                                        </div>
                                        <div class="m-t-15"></div>

                                        <div class="space"></div>
                                        <div class="row bottum-button">
                                            <a href="{{route('frontend.explorer',['genres','author_name','duration','price','music_name'])}}" class="btn-continue">Continue Browsing</a>
                                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Checkout Now</a>

                                        </div>
                                    </div>
                                </div>
                            </form>




                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 1000px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Check Out</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
                        <input type="hidden" name="merchant_id" value="1217011">    <!-- Replace your Merchant ID -->
                        <input type="hidden" name="return_url" value="{{route('frontend.user.checkout_finish')}}">
                        <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
                        <input type="hidden" name="notify_url" value="http://sample.com/notify">
                        <input type="hidden" name="order_id" value="ItemNo12345">
                        <input type="hidden" name="items" value="AudioMusic"><br>
                        <input type="hidden" name="currency" value="USD">
                        <input type="hidden" name="amount" value="{{$cart_total}}">
                        <input type="hidden" name="first_name" value="{{auth()->user()->first_name}}">
                        <input type="hidden" name="last_name" value="{{auth()->user()->last_name}}"><br>
                        <input type="hidden" name="email" value="{{auth()->user()->email}}">
                        <div class="" style="padding: 10px;text-align: left">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" value="0771234567"><br>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="No.1, Galle Road">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="city" value="Colombo">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <select class="form-control" name="country" style="text-align: left !important;max-width:none;">
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="USA">USA</option>
                                </select>
                            </div>
                            <input type="submit" value="Buy Now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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