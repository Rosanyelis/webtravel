@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.png);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">CRAFTED FOR YOU</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->
        <!-- about section html start -->
        <section class="about-section about-page-section">
            <div class="about-service-wrap">
                <div class="container">
                    <div class="section-heading">
                        <div class="row align-items-end">
                            <div class="col-lg-6">
                                <h5 class="dash-style">OUR WAY</h5>
                                <h2>MORE THAN A
                                    JOURNEY, A STORY
                                    JUST FOR YOU.</h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="section-disc">
                                    <p>Every traveler carries a dream, at Perú People Vacations, we craft
                                        soulful experiences inspired by you, the land, and its people.
                                        From sacred valleys to quiet conversations with locals, your path
                                        unfolds with meaning, this is travel with intention. This is your story.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-service-container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="about-service">
                                    <div class="about-service-icon">
                                        <img src="assets/images/icon15.png" alt="">
                                    </div>
                                    <div class="about-service-content">
                                        <h4>BUILT AROUND YOU</h4>
                                        <p>Your time, your style, your rhythm. We adapt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="about-service">
                                    <div class="about-service-icon">
                                        <img src="assets/images/icon16.png" alt="">
                                    </div>
                                    <div class="about-service-content">
                                        <h4>LOCALLY DESIGNED</h4>
                                        <p>We work hand in hand with local experts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="about-service">
                                    <div class="about-service-icon">
                                        <img src="assets/images/icon17.png" alt="">
                                    </div>
                                    <div class="about-service-content">
                                        <h4>MADE WITH SOUL</h4>
                                        <p>Every detail is shaped with care and heart.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-video-wrap" style="background-image: url(assets/images/img25.jpg);"></div>
                </div>
            </div>
            <!-- client section html start -->
            <div class="faq-page-section">
                <div class="container">
                    <div class="faq-page-container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="faq-testimonial">
                                    <figure class="faq-image">
                                        <img src="assets/images/img37.png" alt="">
                                    </figure>
                                    <div class="testimonial-content">
                                        <span class="quote-icon">
                                            <i class="fas fa-quote-left"></i>
                                        </span>
                                        <p>Because the best journeys aren’t rushed,
                                            they’re shaped with intention, inspired by you,
                                            and lived deeply.”</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-content-wrap pl-20">
                                    <div class="section-heading">
                                        <h5 class="dash-style">QUESTIONS / ANSWERS</h5>
                                        <h2>BENEFITS & WHAT WE DO?</h2>
                                    </div>
                                    <div class="accordion" id="accordionTwo">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h4 class="mb-0">
                                                    <button class="btn btn-link " type="button" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        IS TRANSPORTATION AND ACCOMMODATION INCLUDED IN THE PACKAGE?
                                                    </button>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionTwo">
                                                <div class="card-body">
                                                    Yes, from the moment you arrive, we take care of your transport and
                                                    stays, so you can just enjoy the journey without worry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h4 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        WILL SOMEONE GUIDE US THROUGHOUT THE EXPERIENCE?
                                                    </button>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordionTwo">
                                                <div class="card-body">
                                                    Absolutely. You’ll be accompanied by local hosts and guides who know
                                                    every corner, and love sharing their stories.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h4 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        WHAT SHOULD I DO IN CASE OF AN EMERGENCY?
                                                    </button>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordionTwo">
                                                <div class="card-body">
                                                    We’ve got your back. You’ll have 24/7 support and clear instructions
                                                    from the beginning, so you’ll never feel alone.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h4 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        CAN I PERSONALIZE MY TRIP TO MATCH WHAT I LOVE?
                                                    </button>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                data-parent="#accordionTwo">
                                                <div class="card-body">
                                                    Of course. Every trip is designed with your interests, energy and
                                                    pace in
                                                    mind, it’s your story, we just help you live it.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="#" class="button-primary mt-5">COMPLETE FAQ PAGE</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- client html end -->
            <!-- callback section html start -->
            <div class="fullwidth-callback" style="background-image: url(assets/images/img26.png);">
                <div class="container">
                    <div class="section-heading section-heading-white text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h5 class="dash-style">CONTACT US FOR MORE</h5>
                                <h2>YOUR JOURNEY BEGINS WITH A CONVERSATION</h2>
                                <p>Tell us what’s calling you, a feeling, a place, a dream.
                                    We’ll help you shape it into something unforgettable, crafted just for you.</p>
                            </div>
                        </div>
                        <a href="#" class="button-white text-center mt-5">START YOUR PATH</a>
                    </div>

                </div>
            </div>
            <!-- callback html end -->
        </section>
        <!-- about html end -->
    </main>
    @include('layouts.footer')

    <!-- header html end -->
</div>
@endsection
