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
                        @if(count($invoice_detaials) == 0)
                            <h2>Purchase History</h2>
                            <div class="space"></div>
                            @include('frontend.user.my_cart.cart_item not_found',
                           [
                               'error_title'=>'Hmmm, Seems no purchases yet',
                               'error_description'=>'Go to our music section for find the best tracks for your next projectt',
                               'error_button_link'=> route('frontend.explorer',['genres','author_name','duration','price','music_name']),
                               'error_button_name'=>'Go to Music',
                           ])

                        @else
                            <h2>Purchase History</h2>
                            <div class="space"></div>
                            <div class="table-dashboard">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col">Invoice ID</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Purchased Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>






                                    @foreach($invoice_detaials as $invoice_detail)
                                        <tr  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <th scope="row">{{$invoice_detail['invoice_id']}}</th>
                                            <td>{{settings('currency')}} {{number_format($invoice_detail['total'],2)}}</td>
                                            <td>{{$invoice_detail['date']}}</td>
                                            <td>{{$invoice_detail['status']}}</td>
                                            <td>
                                                <a href="{{route('frontend.user.view_invoice',$invoice_detail['invoice_id'])}}" target="_blank" class="btn btn-primary" >View Invoice</a>
                                            </td>
                                        </tr>

                                    @endforeach


                                    </tbody>
                                </table>
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
