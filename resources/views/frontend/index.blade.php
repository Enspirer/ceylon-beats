@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    @include('frontend.includes.nav')


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
                    <input class="search" type="text" id="search">
                    <input class="submit" type="submit" value="Search">
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
                                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 8" style="width: 250.5px; margin-right: 20px;">
                                        <div class="top-image">
                                            <img src="assets/image/Mask Group 2@2x.png" alt="">
                                        </div>

                                        <div class="bottum-details">
                                            <i class="play-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40.833" height="49" viewBox="0 0 40.833 49">
                                                    <path id="Icon_ionic-md-pause" data-name="Icon ionic-md-pause" d="M6.75,53.5H20.365V4.5H6.75Zm27.218-49v49H47.583V4.5Z" transform="translate(-6.75 -4.5)" fill="#fff"></path>
                                                </svg>
                                            </i>
                                            <div class="row">
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" viewBox="0 0 30 21">
                                                        <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="19.619" height="18" viewBox="0 0 19.619 18">
                                                        <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M14.951,24.427l-1.422-1.29c-5.052-4.586-8.387-7.612-8.387-11.315a5.337,5.337,0,0,1,5.4-5.4,5.887,5.887,0,0,1,4.414,2.045,5.887,5.887,0,0,1,4.414-2.045,5.337,5.337,0,0,1,5.4,5.4c0,3.7-3.335,6.729-8.387,11.315Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                            </div>
                                            <h3>Light Up the Way</h3>
                                            <div class="type-time">
                                                <p class="type">Rock</p>
                                                <p class="time">02:34</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 8" style="width: 250.5px; margin-right: 20px;">
                                        <div class="top-image">
                                            <img src="assets/image/Mask Group 3@2x.png" alt="">
                                        </div>

                                        <div class="bottum-details">
                                            <i class="play-icon"><svg xmlns="http://www.w3.org/2000/svg" width="41.42" height="47.341" viewBox="0 0 41.42 47.341">
                                                    <path id="Icon_awesome-play" data-name="Icon awesome-play" d="M39.239,19.85,6.694.61A4.413,4.413,0,0,0,0,4.428V42.9a4.434,4.434,0,0,0,6.694,3.819L39.239,27.487A4.433,4.433,0,0,0,39.239,19.85Z" transform="translate(0 -0.002)" fill="#fff"></path>
                                                </svg>
                                            </i>
                                            <div class="row">
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" viewBox="0 0 30 21">
                                                        <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="19.619" height="18" viewBox="0 0 19.619 18">
                                                        <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M14.951,24.427l-1.422-1.29c-5.052-4.586-8.387-7.612-8.387-11.315a5.337,5.337,0,0,1,5.4-5.4,5.887,5.887,0,0,1,4.414,2.045,5.887,5.887,0,0,1,4.414-2.045,5.337,5.337,0,0,1,5.4,5.4c0,3.7-3.335,6.729-8.387,11.315Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                            </div>
                                            <h3>Light Up the Way</h3>
                                            <div class="type-time">
                                                <p class="type">Rock</p>
                                                <p class="time">02:34</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="3 / 8" style="width: 250.5px; margin-right: 20px;">
                                        <div class="top-image">
                                            <img src="assets/image/Mask Group 4@2x.png" alt="">
                                        </div>

                                        <div class="bottum-details">
                                            <i class="play-icon"><svg xmlns="http://www.w3.org/2000/svg" width="41.42" height="47.341" viewBox="0 0 41.42 47.341">
                                                    <path id="Icon_awesome-play" data-name="Icon awesome-play" d="M39.239,19.85,6.694.61A4.413,4.413,0,0,0,0,4.428V42.9a4.434,4.434,0,0,0,6.694,3.819L39.239,27.487A4.433,4.433,0,0,0,39.239,19.85Z" transform="translate(0 -0.002)" fill="#fff"></path>
                                                </svg>
                                            </i>
                                            <div class="row">
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" viewBox="0 0 30 21">
                                                        <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="19.619" height="18" viewBox="0 0 19.619 18">
                                                        <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M14.951,24.427l-1.422-1.29c-5.052-4.586-8.387-7.612-8.387-11.315a5.337,5.337,0,0,1,5.4-5.4,5.887,5.887,0,0,1,4.414,2.045,5.887,5.887,0,0,1,4.414-2.045,5.337,5.337,0,0,1,5.4,5.4c0,3.7-3.335,6.729-8.387,11.315Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                            </div>
                                            <h3>Light Up the Way</h3>
                                            <div class="type-time">
                                                <p class="type">Rock</p>
                                                <p class="time">02:34</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="4 / 8" style="width: 250.5px; margin-right: 20px;">
                                        <div class="top-image">
                                            <img src="assets/image/Mask Group 5@2x.png" alt="">
                                        </div>

                                        <div class="bottum-details">
                                            <i class="play-icon"><svg xmlns="http://www.w3.org/2000/svg" width="41.42" height="47.341" viewBox="0 0 41.42 47.341">
                                                    <path id="Icon_awesome-play" data-name="Icon awesome-play" d="M39.239,19.85,6.694.61A4.413,4.413,0,0,0,0,4.428V42.9a4.434,4.434,0,0,0,6.694,3.819L39.239,27.487A4.433,4.433,0,0,0,39.239,19.85Z" transform="translate(0 -0.002)" fill="#fff"></path>
                                                </svg>
                                            </i>
                                            <div class="row">
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" viewBox="0 0 30 21">
                                                        <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="19.619" height="18" viewBox="0 0 19.619 18">
                                                        <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M14.951,24.427l-1.422-1.29c-5.052-4.586-8.387-7.612-8.387-11.315a5.337,5.337,0,0,1,5.4-5.4,5.887,5.887,0,0,1,4.414,2.045,5.887,5.887,0,0,1,4.414-2.045,5.337,5.337,0,0,1,5.4,5.4c0,3.7-3.335,6.729-8.387,11.315Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                            </div>
                                            <h3>Light Up the Way</h3>
                                            <div class="type-time">
                                                <p class="type">Rock</p>
                                                <p class="time">02:34</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="5 / 8" style="width: 250.5px; margin-right: 20px;">
                                        <div class="top-image">
                                            <img src="assets/image/Mask Group 6@2x.png" alt="">
                                        </div>

                                        <div class="bottum-details">
                                            <i class="play-icon"><svg xmlns="http://www.w3.org/2000/svg" width="41.42" height="47.341" viewBox="0 0 41.42 47.341">
                                                    <path id="Icon_awesome-play" data-name="Icon awesome-play" d="M39.239,19.85,6.694.61A4.413,4.413,0,0,0,0,4.428V42.9a4.434,4.434,0,0,0,6.694,3.819L39.239,27.487A4.433,4.433,0,0,0,39.239,19.85Z" transform="translate(0 -0.002)" fill="#fff"></path>
                                                </svg>
                                            </i>
                                            <div class="row">
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" viewBox="0 0 30 21">
                                                        <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="19.619" height="18" viewBox="0 0 19.619 18">
                                                        <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M14.951,24.427l-1.422-1.29c-5.052-4.586-8.387-7.612-8.387-11.315a5.337,5.337,0,0,1,5.4-5.4,5.887,5.887,0,0,1,4.414,2.045,5.887,5.887,0,0,1,4.414-2.045,5.337,5.337,0,0,1,5.4,5.4c0,3.7-3.335,6.729-8.387,11.315Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                            </div>
                                            <h3>Light Up the Way</h3>
                                            <div class="type-time">
                                                <p class="type">Rock</p>
                                                <p class="time">02:34</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="6 / 8" style="width: 250.5px; margin-right: 20px;">
                                        <div class="top-image">
                                            <img src="assets/image/Mask Group 7@2x.png" alt="">
                                        </div>

                                        <div class="bottum-details">
                                            <i class="play-icon"><svg xmlns="http://www.w3.org/2000/svg" width="41.42" height="47.341" viewBox="0 0 41.42 47.341">
                                                    <path id="Icon_awesome-play" data-name="Icon awesome-play" d="M39.239,19.85,6.694.61A4.413,4.413,0,0,0,0,4.428V42.9a4.434,4.434,0,0,0,6.694,3.819L39.239,27.487A4.433,4.433,0,0,0,39.239,19.85Z" transform="translate(0 -0.002)" fill="#fff"></path>
                                                </svg>
                                            </i>
                                            <div class="row">
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" viewBox="0 0 30 21">
                                                        <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="19.619" height="18" viewBox="0 0 19.619 18">
                                                        <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M14.951,24.427l-1.422-1.29c-5.052-4.586-8.387-7.612-8.387-11.315a5.337,5.337,0,0,1,5.4-5.4,5.887,5.887,0,0,1,4.414,2.045,5.887,5.887,0,0,1,4.414-2.045,5.337,5.337,0,0,1,5.4,5.4c0,3.7-3.335,6.729-8.387,11.315Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                            </div>
                                            <h3>Light Up the Way</h3>
                                            <div class="type-time">
                                                <p class="type">Rock</p>
                                                <p class="time">02:34</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="7 / 8" style="width: 250.5px; margin-right: 20px;">
                                        <div class="top-image">
                                            <img src="assets/image/Mask Group 2@2x.png" alt="">
                                        </div>

                                        <div class="bottum-details">
                                            <i class="play-icon"><svg xmlns="http://www.w3.org/2000/svg" width="41.42" height="47.341" viewBox="0 0 41.42 47.341">
                                                    <path id="Icon_awesome-play" data-name="Icon awesome-play" d="M39.239,19.85,6.694.61A4.413,4.413,0,0,0,0,4.428V42.9a4.434,4.434,0,0,0,6.694,3.819L39.239,27.487A4.433,4.433,0,0,0,39.239,19.85Z" transform="translate(0 -0.002)" fill="#fff"></path>
                                                </svg>
                                            </i>
                                            <div class="row">
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" viewBox="0 0 30 21">
                                                        <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="19.619" height="18" viewBox="0 0 19.619 18">
                                                        <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M14.951,24.427l-1.422-1.29c-5.052-4.586-8.387-7.612-8.387-11.315a5.337,5.337,0,0,1,5.4-5.4,5.887,5.887,0,0,1,4.414,2.045,5.887,5.887,0,0,1,4.414-2.045,5.337,5.337,0,0,1,5.4,5.4c0,3.7-3.335,6.729-8.387,11.315Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                            </div>
                                            <h3>Light Up the Way</h3>
                                            <div class="type-time">
                                                <p class="type">Rock</p>
                                                <p class="time">02:34</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="8 / 8" style="width: 250.5px; margin-right: 20px;">
                                        <div class="top-image">
                                            <img src="assets/image/Mask Group 2@2x.png" alt="">
                                        </div>

                                        <div class="bottum-details">
                                            <i class="play-icon"><svg xmlns="http://www.w3.org/2000/svg" width="41.42" height="47.341" viewBox="0 0 41.42 47.341">
                                                    <path id="Icon_awesome-play" data-name="Icon awesome-play" d="M39.239,19.85,6.694.61A4.413,4.413,0,0,0,0,4.428V42.9a4.434,4.434,0,0,0,6.694,3.819L39.239,27.487A4.433,4.433,0,0,0,39.239,19.85Z" transform="translate(0 -0.002)" fill="#fff"></path>
                                                </svg>
                                            </i>
                                            <div class="row">
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" viewBox="0 0 30 21">
                                                        <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="19.619" height="18" viewBox="0 0 19.619 18">
                                                        <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M14.951,24.427l-1.422-1.29c-5.052-4.586-8.387-7.612-8.387-11.315a5.337,5.337,0,0,1,5.4-5.4,5.887,5.887,0,0,1,4.414,2.045,5.887,5.887,0,0,1,4.414-2.045,5.337,5.337,0,0,1,5.4,5.4c0,3.7-3.335,6.729-8.387,11.315Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                    </svg>
                                                </i>
                                            </div>
                                            <h3>Light Up the Way</h3>
                                            <div class="type-time">
                                                <p class="type">Rock</p>
                                                <p class="time">02:34</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-c8e8c2212346de109" aria-disabled="false"></div>
                        <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-c8e8c2212346de109" aria-disabled="true"></div>
                    </div>
                    <div class="btn-view-all animscroll-init" data-animscroll="fade-up">
                        <a href="#" type="button" class="black">View All</a>
                    </div>
                    <div class="new-release">
                        <div class="background-wave"></div>
                        <div class="text-new-releases animscroll-init" data-animscroll="fade-up">
                            <h1>New Releases</h1>
                        </div>
                        <div class="new-release-container">
                            <div class="row">
                                <div class="player-margin col-md-4 animscroll-init" data-animscroll="fade-up">
                                    <div class="player">
                                        <div class="play-button">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                        <div class="row">
                                            <h4>Light Up the Way</h4>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="15.569" height="14.119" viewBox="0 0 17.569 16.119">
                                                    <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M13.926,22.546l-1.274-1.155c-4.524-4.107-7.511-6.817-7.511-10.133A4.779,4.779,0,0,1,9.973,6.427a5.271,5.271,0,0,1,3.953,1.832,5.271,5.271,0,0,1,3.953-1.832,4.779,4.779,0,0,1,4.831,4.831c0,3.316-2.987,6.026-7.511,10.133Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 30 21">
                                                    <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                        </div>
                                        <div class="type-time">
                                            <p class="type">Family music /calm</p>
                                            <p class="time">02:34</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="player-margin col-md-4 animscroll-init" data-animscroll="fade-up">
                                    <div class="player">
                                        <div class="play-button">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                        <div class="row">
                                            <h4>Light Up the Way</h4>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="15.569" height="14.119" viewBox="0 0 17.569 16.119">
                                                    <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M13.926,22.546l-1.274-1.155c-4.524-4.107-7.511-6.817-7.511-10.133A4.779,4.779,0,0,1,9.973,6.427a5.271,5.271,0,0,1,3.953,1.832,5.271,5.271,0,0,1,3.953-1.832,4.779,4.779,0,0,1,4.831,4.831c0,3.316-2.987,6.026-7.511,10.133Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 30 21">
                                                    <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                        </div>
                                        <div class="type-time">
                                            <p class="type">Family music /calm</p>
                                            <p class="time">02:34</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="player-margin col-md-4 animscroll-init" data-animscroll="fade-up">
                                    <div class="player">
                                        <div class="play-button">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                        <div class="row">
                                            <h4>Light Up the Way</h4>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="15.569" height="14.119" viewBox="0 0 17.569 16.119">
                                                    <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M13.926,22.546l-1.274-1.155c-4.524-4.107-7.511-6.817-7.511-10.133A4.779,4.779,0,0,1,9.973,6.427a5.271,5.271,0,0,1,3.953,1.832,5.271,5.271,0,0,1,3.953-1.832,4.779,4.779,0,0,1,4.831,4.831c0,3.316-2.987,6.026-7.511,10.133Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 30 21">
                                                    <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                        </div>
                                        <div class="type-time">
                                            <p class="type">Family music /calm</p>
                                            <p class="time">02:34</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="player-margin col-md-4 animscroll-init" data-animscroll="fade-up">
                                    <div class="player">
                                        <div class="play-button">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                        <div class="row">
                                            <h4>Light Up the Way</h4>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="15.569" height="14.119" viewBox="0 0 17.569 16.119">
                                                    <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M13.926,22.546l-1.274-1.155c-4.524-4.107-7.511-6.817-7.511-10.133A4.779,4.779,0,0,1,9.973,6.427a5.271,5.271,0,0,1,3.953,1.832,5.271,5.271,0,0,1,3.953-1.832,4.779,4.779,0,0,1,4.831,4.831c0,3.316-2.987,6.026-7.511,10.133Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 30 21">
                                                    <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                        </div>
                                        <div class="type-time">
                                            <p class="type">Family music /calm</p>
                                            <p class="time">02:34</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="player-margin col-md-4 animscroll-init" data-animscroll="fade-up">
                                    <div class="player">
                                        <div class="play-button">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                        <div class="row">
                                            <h4>Light Up the Way</h4>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="15.569" height="14.119" viewBox="0 0 17.569 16.119">
                                                    <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M13.926,22.546l-1.274-1.155c-4.524-4.107-7.511-6.817-7.511-10.133A4.779,4.779,0,0,1,9.973,6.427a5.271,5.271,0,0,1,3.953,1.832,5.271,5.271,0,0,1,3.953-1.832,4.779,4.779,0,0,1,4.831,4.831c0,3.316-2.987,6.026-7.511,10.133Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 30 21">
                                                    <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                        </div>
                                        <div class="type-time">
                                            <p class="type">Family music /calm</p>
                                            <p class="time">02:34</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="player-margin col-md-4 animscroll-init" data-animscroll="fade-up">
                                    <div class="player">
                                        <div class="play-button">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                        <div class="row">
                                            <h4>Light Up the Way</h4>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="15.569" height="14.119" viewBox="0 0 17.569 16.119">
                                                    <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M13.926,22.546l-1.274-1.155c-4.524-4.107-7.511-6.817-7.511-10.133A4.779,4.779,0,0,1,9.973,6.427a5.271,5.271,0,0,1,3.953,1.832,5.271,5.271,0,0,1,3.953-1.832,4.779,4.779,0,0,1,4.831,4.831c0,3.316-2.987,6.026-7.511,10.133Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 30 21">
                                                    <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                        </div>
                                        <div class="type-time">
                                            <p class="type">Family music /calm</p>
                                            <p class="time">02:34</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="player-margin col-md-4 animscroll-init" data-animscroll="fade-up">
                                    <div class="player">
                                        <div class="play-button">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                        <div class="row">
                                            <h4>Light Up the Way</h4>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="15.569" height="14.119" viewBox="0 0 17.569 16.119">
                                                    <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M13.926,22.546l-1.274-1.155c-4.524-4.107-7.511-6.817-7.511-10.133A4.779,4.779,0,0,1,9.973,6.427a5.271,5.271,0,0,1,3.953,1.832,5.271,5.271,0,0,1,3.953-1.832,4.779,4.779,0,0,1,4.831,4.831c0,3.316-2.987,6.026-7.511,10.133Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 30 21">
                                                    <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                        </div>
                                        <div class="type-time">
                                            <p class="type">Family music /calm</p>
                                            <p class="time">02:34</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="player-margin col-md-4 animscroll-init" data-animscroll="fade-up">
                                    <div class="player">
                                        <div class="play-button">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                        <div class="row">
                                            <h4>Light Up the Way</h4>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="15.569" height="14.119" viewBox="0 0 17.569 16.119">
                                                    <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M13.926,22.546l-1.274-1.155c-4.524-4.107-7.511-6.817-7.511-10.133A4.779,4.779,0,0,1,9.973,6.427a5.271,5.271,0,0,1,3.953,1.832,5.271,5.271,0,0,1,3.953-1.832,4.779,4.779,0,0,1,4.831,4.831c0,3.316-2.987,6.026-7.511,10.133Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 30 21">
                                                    <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                        </div>
                                        <div class="type-time">
                                            <p class="type">Family music /calm</p>
                                            <p class="time">02:34</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="player-margin col-md-4 animscroll-init" data-animscroll="fade-up">
                                    <div class="player">
                                        <div class="play-button">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                        <div class="row">
                                            <h4>Light Up the Way</h4>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="15.569" height="14.119" viewBox="0 0 17.569 16.119">
                                                    <path id="Icon_metro-favorite" data-name="Icon metro-favorite" d="M13.926,22.546l-1.274-1.155c-4.524-4.107-7.511-6.817-7.511-10.133A4.779,4.779,0,0,1,9.973,6.427a5.271,5.271,0,0,1,3.953,1.832,5.271,5.271,0,0,1,3.953-1.832,4.779,4.779,0,0,1,4.831,4.831c0,3.316-2.987,6.026-7.511,10.133Z" transform="translate(-5.141 -6.427)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 30 21">
                                                    <path id="Icon_material-playlist-add" data-name="Icon material-playlist-add" d="M21,15H3v3H21Zm0-6H3v3H21Zm6,12V15H24v6H18v3h6v6h3V24h6V21ZM3,24H15V21H3Z" transform="translate(-3 -9)" fill="#8f8f8f"></path>
                                                </svg>
                                            </i>
                                        </div>
                                        <div class="type-time">
                                            <p class="type">Family music /calm</p>
                                            <p class="time">02:34</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-view-all animscroll-init" data-animscroll="fade-up">
                                <a href="#" type="button" class="black">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('after-scripts')



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
                    $(".shopping-cart").stop(true, true).addClass("active");
                },
                function () {
                    $(".shopping-cart").stop(true, true).removeClass("active");
                }
            );
        })();
    </script>

    @endpush




@endsection
