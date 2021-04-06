@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    @include('frontend.includes.nav')

    <section id="about-section">
      @include('frontend.about_page.hero_image')
        <div class="bottum-content-all">
            @include('frontend.about_page.about')
            @include('frontend.about_page.team')
            @include('frontend.about_page.equipments')
        </div>
    </section>


    @push('after-scripts')
        <script>
            var swiper = new Swiper(".swiper-container", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
            });

            // ------------------- About --------------
            $( "#img1" ).click(function() {
                $("#blur-image").attr("src","{{url('/ceylon_beats_theme/assets/Mask Group 30@2x.png')}}");
                $('#member-name').text("aaaaaaaaa");
                $('#member-designation').text("aaaaaaaaa");
                $('#member-description').text("aaaaaaaaa");
                $("#facebook").attr("href","https://www.facebook.com/?ref=tn_tnmn");
                $("#linkedin").attr("href","https://www.facebook.com/?ref=tn_tnmn");
                $("#mail").attr("href","https://www.facebook.com/?ref=tn_tnmn");
                $("#insta").attr("href","https://www.facebook.com/?ref=tn_tnmn");
            });
            $( "#img2" ).click(function() {
                $("#blur-image").attr("src","{{url('/ceylon_beats_theme/assets/Mask Group 27@2x.png')}}");
                $('#member-name').text("Delaine Silva");
                $('#member-designation').text("STUDIO ENGINEER");
                $('#member-description').text(" Delaine is a fantastic musician hailing from the city of Kandy. He holds a unique identity as one of the most creative guitarists on the island with over 10 years in the industry. His solos are only secondary to his ear & accuracy in musicality and articulation. He is a team player with a skill to see your potential.");
                $("#facebook").attr("href","https://www.facebook.com/?ref=tn_tnmn");
                $("#linkedin").attr("href","https://www.facebook.com/?ref=tn_tnmn");
                $("#mail").attr("href","https://www.facebook.com/?ref=tn_tnmn");
                $("#insta").attr("href","https://www.facebook.com/?ref=tn_tnmn");
            });
            $( "#img3" ).click(function() {
                $("#blur-image").attr("src","{{url('/ceylon_beats_theme/assets/Mask Group 28@2x.png')}}");
                $('#member-name').text("Rukshan S Subasinghe");
		$('#member-designation').text("MUSIC COMPOSER");
		$('#member-description').text("Ruskshan is a Visharad in Violin and is a graduate in Art specialized in Performance Art - Music from the University of Kelaniya. He has worked on numerous commercials in leading brands locally and internationally. He is a hard-working, creative genius with a sheer sense of originality.");
                $("#facebook").attr("href","https://www.facebook.com/?ref=tn_tnmn");
                $("#linkedin").attr("href","https://www.facebook.com/?ref=tn_tnmn");
                $("#mail").attr("href","https://www.facebook.com/?ref=tn_tnmn");
                $("#insta").attr("href","https://www.facebook.com/?ref=tn_tnmn");
            });
            $( "#img4" ).click(function() {
                $("#blur-image").attr("src","{{url('/ceylon_beats_theme/assets/Mask Group 29@2x.png')}}");
                $('#member-name').text("Lasitha Gunawardana");
		$('#member-designation').text("MUSIC DIRECTOR");
		$('#member-description').text("Lasitha Sangeeth Visharadha graduated from Bhathkhande Music University India and was the former Orchestra Instructor at Ananda College. His notable work includes many recordings in the Sri Lanka Rupervahini Corporation, National Youth Corporation and Dusit Thani in the Maldives. He is a passionate, academic in music as well as a visionary in tunes.");
                $("#facebook").attr("href","https://www.facebook.com/?ref=tn_tnmn");
                $("#linkedin").attr("href","https://www.facebook.com/?ref=tn_tnmn");
                $("#mail").attr("href","https://www.facebook.com/?ref=tn_tnmn");
                $("#insta").attr("href","https://www.facebook.com/?ref=tn_tnmn");
            });
        </script>

    @endpush




@endsection
