<section id="head-section">
    <div class="mask">
        <div class="search">
            <h1 data-animscroll="fade-up" class="animscroll-init animscroll-animate">
                Find the perfect music for your next project
            </h1>
            <div class="wrapper animscroll-init animscroll-animate" data-animscroll="fade-up">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="22.154" height="22.16" viewBox="0 0 22.154 22.16">
                        <path id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search" d="M26.395,25.049,20.233,18.83A8.781,8.781,0,1,0,18.9,20.18l6.121,6.179a.948.948,0,0,0,1.338.035A.954.954,0,0,0,26.395,25.049ZM13.333,20.255a6.934,6.934,0,1,1,4.9-2.031A6.891,6.891,0,0,1,13.333,20.255Z" transform="translate(-4.5 -4.493)" fill="#ccc"></path>
                    </svg>
                </i>

                <form action="{{route('frontend.search_query.index')}}" method="post">
                    {{csrf_field()}}
                    <input class="search" id="seachInputs" name="search" type="text" id="search">
                    <input class="submit" type="submit" value="Search">
                </form>

            </div>
        </div>
        <div class="music animscroll-init" data-animscroll="fade-up">
            <div class="container">
                <h1 data-animscroll="fade-up" class="animscroll-init">Trending Tracks</h1>
                <div class="swiper-container animscroll-init" data-animscroll="fade-up">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-swiper-container col-md-10 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" style="overflow: hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-c8e8c2212346de109" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                @if(count($feature_music) == 0)

                                @else
                                    @foreach($feature_music as $feature_musirc)
                                        @include('frontend.home_page.includes.music_item')
                                    @endforeach
                                @endif

                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-c8e8c2212346de109" aria-disabled="false"></div>
                    <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-c8e8c2212346de109" aria-disabled="true"></div>
                </div>
                <div class="btn-view-all animscroll-init" data-animscroll="fade-up">
                    <a href="{{route('frontend.explorer',['genres','author_name','duration','price','music_name'])}}" type="button" class="black">View All</a>
                </div>
                <div class="new-release">
                    <div class="background-wave"></div>
                    <div class="text-new-releases animscroll-init" data-animscroll="fade-up">
                        <h1>New Releases</h1>
                    </div>
                    <div class="new-release-container">
                        <div class="row">
                            @if(count($latest_music) == 0)

                            @else
                                @foreach($latest_music as $lastestMusic)
                                    @include('frontend.includes.homepage_last_music_item_cart_dialog')
                                @endforeach
                            @endif
                                                    </div>
                        <div class="btn-view-all animscroll-init" data-animscroll="fade-up">
                            <a href="{{route('frontend.explorer',['genres','author_name','duration','price','music_name'])}}" type="button" class="black">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
