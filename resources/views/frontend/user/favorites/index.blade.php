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

                            <h2>My Favorites</h2>
                            <div class="space-double"></div>

                            @foreach($favorite_details as $favoriteDetail)

                                @include('frontend.user.favorites.favorite_item')

                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Modal -->


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