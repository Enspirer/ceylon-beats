@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <body>
        @include('frontend.includes.nav')

        <div id="demo">
            <section id="explore-music">

                <div class="mask">
                    <div class="row">
                        @include('frontend.includes.filter_pane')

                        <div class="right-result">

                            <div class="container">
                                @include('frontend.includes.filter_topbar')

                                <div class="list-group" id="playlist">
                                    @foreach($sound_item as $key=>$soundItem)
                                        <div class="list-item">
                                            @include('frontend.includes.music_item')
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="pagination-explore">
                                <div class="pagination d-flex justify-content-center flex-wrap">
                                    <a href="#"><i class="fa fa-angle-left"></i></a>
                                    <a href="#">1</a>
                                    <a href="#">2</a>
                                    <a href="#" class="active">3</a>
                                    <a href="#">4</a>
                                    <a href="#">5</a>
                                    <a href="#">6</a>
                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('frontend.includes.music_player')
                </div>
            </section>
        </div>

    </body>





            <div class="col-sm-2" style="display: none">
                            <span id="play">
                                <i class="glyphicon glyphicon-play"></i>
                                Play
                            </span>

                    <span id="pause" style="display: none">
                                <i class="glyphicon glyphicon-pause"></i>
                                Pause
                            </span>
            </div>



@endsection
