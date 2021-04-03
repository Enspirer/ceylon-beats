
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ceylon Beatz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://wavesurfer-js.org/example/css/style.css" />
    <link rel="stylesheet" href="https://wavesurfer-js.org/example/css/ribbon.css" /> -->
    <!-- Material Icon  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<!-- <link rel='stylesheet' href='https://unpkg.com/tailwindcss@1.8.9/dist/tailwind.min.css'> -->
    <link rel="stylesheet" href="{{url('ceylon_beats_theme/styles/css/styles.css')}}" />
    <link rel="stylesheet" href="{{url('ceylon_beats_theme/styles/css/tailwind.css')}}" />

    <link rel="stylesheet" href="{{url('ceylon_beats_theme/plugin/AnimTrap/css/animtrap.css')}}" />

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font: 16px Arial;
        }

        /*the container must be positioned relative:*/
        .autocomplete {
            position: relative;
            display: inline-block;
        }

        input {
            border: 1px solid transparent;
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 16px;
        }

        input[type=text] {
            background-color: #f1f1f1;
            width: 100%;
        }

        input[type=submit] {
            background-color: DodgerBlue;
            color: #fff;
            cursor: pointer;
        }

        .autocomplete-items {
            /* position: absolute; */
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 1000;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
            text-align: center;
            margin-left: 20px;
            margin-right: 120px;
            margin-top: 3px;
            font-size: 18px;
            text-align: left;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>

    <script src="{{url('ceylon_beats_theme/plugin/wave/wave.js')}}"></script>
</head>

    <body>

        <div id="app">

            <div class="">
                <body>
                @yield('content')
            </div><!-- container -->
        </div><!-- #app -->





        <!-- ----------------- footer ------------------------ -->

        <!-- <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fa fa-chevron-up"
          aria-hidden="true"></i></i></a> -->

        <footer class="footer" style="padding-bottom: 220px">
            <div class="container bottom_border">
                <div class="row">
                    <div class="col-sm-4 col-md col-sm-4 col-12 col" data-animscroll="fade-up">
                        <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                        <p><i class="fa fa-location-arrow"></i> &nbsp; 387/C, Kalalgoda, Pannipitiya</p>
                        <p><i class="fa fa-phone"></i>&nbsp; 077 261 7424</p>
                        <p><i class="fa fa fa-envelope"></i>&nbsp; jnsstuiolk@gmail.com</p>
                    </div>

                    <div class="col-sm-4 col-md col-6 col" data-animscroll="fade-up">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="{{route('frontend.explorer',['genres','author_name','duration','price','blues'])}}">Blues</a></li>
                            <li><a href="{{route('frontend.explorer',['genres','author_name','duration','price','classic'])}}">Classic</a></li>
                            <li><a href="{{route('frontend.explorer',['genres','author_name','duration','price','indian'])}}">Indian</a></li>
                            <li><a href="{{route('frontend.explorer',['genres','author_name','duration','price','rap'])}}">Rap</a></li>
                            <li><a href="{{route('frontend.explorer',['genres','author_name','duration','price','rock'])}}">Rock</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-md col-6 col" data-animscroll="fade-up">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                        <ul class="footer_ul_amrc">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.about_us')}}" >About</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.explorer',['genres','author_name','duration','price','music_name'])}}">Music</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-md col-12 col" data-animscroll="fade-up">
                        <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                        <ul class="footer_ul2_amrc">
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter fleft padding-right"></i>
                                </a>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing...
                                    <a href="#">https://www.lipsum.com/</a>
                                </p>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter fleft padding-right"></i>
                                </a>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing...
                                    <a href="#">https://www.lipsum.com/</a>
                                </p>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter fleft padding-right"></i>
                                </a>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing...
                                    <a href="#">https://www.lipsum.com/</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <ul class="foote_bottom_ul_amrc">
                </ul>
                <!--foote_bottom_ul_amrc ends here-->
                <p class="text-center">
                    Copyright @2021 | Powered by <a style="color: #fff;font-weight: bold" href="https://www.enspirer.com/">Enspirer</a>
                </p>

                <ul class="social_footer_ul">
                    <li>
                        <a href="http://webenlance.com">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://webenlance.com">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://webenlance.com">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://webenlance.com">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="{{url('ceylon_beats_theme/plugin/AnimTrap/js/anim-trap.js')}}"></script>
        <script src="{{url('ceylon_beats_theme/plugin/AnimTrap/js/anim-scroll.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <script src="{{url('ceylon_beats_theme/js/main.js')}}"></script>

        <script>
            var swiper = new Swiper(".col-swiper-container", {
                slidesPerView: 4,
                spaceBetween: 20,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
        <script>
            ANIMSCROLL.init({
                easing: "ease-in-out-sine",
            });

        </script>
        <script>
            function range() {
                return {
                    minprice: 0,
                    maxprice: 10000,
                    min: 0,
                    max: 10000,
                    minthumb: 0,
                    maxthumb: 0,
                    mintrigger() {
                        this.validation();
                        this.minprice = Math.min(this.minprice, this.maxprice - 500);
                        this.minthumb =
                            ((this.minprice - this.min) / (this.max - this.min)) * 100;
                    },
                    maxtrigger() {
                        this.validation();
                        this.maxprice = Math.max(this.maxprice, this.minprice + 200);
                        this.maxthumb =
                            100 - ((this.maxprice - this.min) / (this.max - this.min)) * 100;
                    },
                    validation() {
                        if (/^\d*$/.test(this.minprice)) {
                            if (this.minprice > this.max) {
                                this.minprice = 9500;
                            }
                            if (this.minprice < this.min) {
                                this.minprice = this.min;
                            }
                        } else {
                            this.minprice = 0;
                        }
                        if (/^\d*$/.test(this.maxprice)) {
                            if (this.maxprice > this.max) {
                                this.maxprice = this.max;
                            }
                            if (this.maxprice < this.min) {
                                this.maxprice = 200;
                            }
                        } else {
                            this.maxprice = 10000;
                        }
                    },
                };
            }
        </script>
        <script>
            // 'use strict';
            @stack('before-scripts')
             let wavesurfer;
             function soundMute() {
                 wavesurfer.toggleMute();
             }

             function backwordFunction() {
                 wavesurfer.skipBackward()
             }

            function forwordFunction() {
                wavesurfer.skipForward()
            }

            function playFunction()
            {
                wavesurfer.play();
            }

            function pauseFunction() {
                wavesurfer.pause();
            }

            var formatTime = function (time) {
                return [
                    Math.floor((time % 3600) / 60), // minutes
                    ('00' + Math.floor(time % 60)).slice(-2) // seconds
                ].join(':');
            };
            // Bind controls


            wavesurfer = WaveSurfer.create({
                container: '#waveform',
                waveColor: '#e9ba1f',
                progressColor: '#31708f',
                height: 120,
                weight: 170,
                fillParent: false,
                minPxPerSec: 13
            });


            document.addEventListener('DOMContentLoaded', function() {

                // Toggle play/pause text
                wavesurfer.on('play', function() {
                    document.querySelector('#play').style.display = 'none';
                    document.querySelector('#pause').style.display = '';
                    $('#playerduration').text(formatTime(wavesurfer.getDuration()));
                    $('#play_button').hide();
                    $('#pause_button').show();
                    $('#media-player').show();
//                    getCurrentTime()
                    timett=setInterval(function(){
                        $('#playercurrentduration').text(formatTime(wavesurfer.getCurrentTime()));
                    },1000);

                });
                wavesurfer.on('pause', function() {
                    document.querySelector('#play').style.display = '';
                    document.querySelector('#pause').style.display = 'none';
                    $('#play_button').show();
                    $('#pause_button').hide();
                    $('#media-player').show();
                });
                // The playlist links
                let links = document.querySelectorAll('#playlist a');
                let currentTrack = 0;
                let setCurrentSong = function(index) {
//                    links[currentTrack].classList.remove('active');
                    currentTrack = index;
//                    links[currentTrack].classList.add('active');
                    console.log(links[currentTrack].href);
                    wavesurfer.load(links[currentTrack].href);
                    $('#play_button').show();
                    $('#playerduration').text(formatTime(wavesurfer.getDuration()));
                };
                console.log(currentTrack);

                // Load the track on click

                Array.prototype.forEach.call(links, function(link, index,currentPlayingTack) {
                    link.addEventListener('click', function(e) {
                        var iconselctor =  document.querySelector('#'+link.id+' i');
                        e.preventDefault();
                        if (wavesurfer.isPlaying()){
                            if(currentPlayingTack === link)
                            {
                                $('#playerduration').text(formatTime(wavesurfer.getDuration()));
                                iconselctor.className  = "fa fa-play";
                                console.log(iconselctor);
                                wavesurfer.stop();
                            }else {
                                $(".fa-stop").attr('class', 'fa fa-play');
                                var enplime = $('#'+link.id).attr('playeritemname');
                                $('#player_item_name').text(enplime);
                                iconselctor.className = "fa fa-stop";
                                setCurrentSong(index);
                                $('#playerduration').text(formatTime(wavesurfer.getDuration()));
                            }
//

                        }else{

                            $(".fa-stop").attr('class', 'fa fa-play');

                            var enplime = $('#'+link.id).attr('playeritemname');
                            $('#player_item_name').text(enplime);

                            iconselctor.className = "fa fa-stop";
                            setCurrentSong(index);
                            currentPlayingTack = link;
                            $('#playerduration').text(formatTime(wavesurfer.getDuration()));
                        }
                    });
                    wavesurfer.on('finish', function(link) {
                        var iconselctor =  document.querySelector('#'+link.id+' i');
                        link.addEventListener('click', function(e) {
                            wavesurfer.play();
                            iconselctor.className = "fa fa-play";
                        });
//                        $('#'+links[currentTrack].id).show();
                    });
                });
                // Play on audio load
                wavesurfer.on('ready', function() {
                    wavesurfer.play();
                });
                wavesurfer.on('error', function(e) {
                    console.warn(e);
                });
                // Go to the next track on finish
                wavesurfer.on('finish', function() {
                    setCurrentSong((currentTrack + 1) % links.length);
                });
                // Load the first track
            });
        </script>








        @stack('after-scripts')
        <script>
            function selectPackage(music_id,secltor_id,price_id) {
                console.log(price_id);
               var selelect_element =  $('#'+secltor_id).val();
                $.get("{{url('/api/music_price')}}/"+ music_id +"/" + selelect_element, function(data, status){
                    var obj = JSON.parse(data);
                   // alert("Data: " + obj.price + "\nStatus: " + status);
                    $('#'+price_id).text(obj.price);
                    $('#pricedetails'+music_id).val(obj.price);
                    $('#submit_cores'+music_id).attr("disabled",false);
                });
            }
        </script>

        <script>
            (function () {
                $(".shopping-cart").each(function () {
                    var delay = $(this).index() * 50 + "ms";
                    $(this).css({
                        "-webkit-transition-delay": delay,
                        "-moz-transition-delay": delay,
                        "-o-transition-delay": delay,
                        "transition-delay": delay,
                    });
                });
                $("#cart, .shopping-cart").hover(
                    function (e) {
                        $(".shopping-cart").addClass("active");
                    },
                    function () {
                        $(".shopping-cart").removeClass("active");
                    }
                );
            })();
        </script>
        @include('includes.partials.ga')
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>

        <!-- Scripts -->


