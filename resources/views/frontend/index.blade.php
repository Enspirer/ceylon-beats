@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    @include('frontend.includes.nav')


 @include('frontend.home_page.head')
    @include('frontend.home_page.diffrence')
    @include('frontend.home_page.populer')

   @include('frontend.includes.homepage_treanding_item_cart_dialog')

    @push('after-scripts')

    <script src="{{url('ceylon_beats_theme/js/auto_complete.js')}}"></script>
    <script>

        var countries = [
            @foreach($feature_music as $featureM)
                "{{$featureM->music_name}}",
            @endforeach
        ];
        autocomplete(document.getElementById("seachInputs"), countries);
    </script>



    <script>
        function playAudio(id,icon) {
            console.log(id);
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



<script>
      var swiper = new Swiper(".col-swiper-container", {
        slidesPerView: 4,
        spaceBetween: 20,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          320: {
          slidesPerView: 1,
        },
          480: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
      }
      });
    </script>
    <script>
        ANIMSCROLL.init({
            easing: "ease-in-out-sine",
        });
    </script>


    @endpush




@endsection
