@extends('layouts.app')
@section('title', '')
@section('content')
<div class="home">
    @include('layouts.loader')
    <div id="page" class="full-page">
        @include('layouts.navigation')

        <main id="content" class="site-main">
            <!-- Home slider html start -->
            <section class="home-slider-section">
                <div class="home-slider">
                    <div class="home-banner-items">
                        <div class="banner-inner-wrap"
                            style="background-image: url('assets/images/slider-banner-1.avif');"></div>
                        <div class="banner-content-wrap">
                            <div class="container">
                                <div class="banner-content text-center">
                                    <h2 class="banner-title">{{ __('site.home.title') }}</h2>
                                    <p>{{ __('site.home.description') }}</p>
                                    <a href="" class="button-primary">{{ __('site.home.button') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                        <div class="inner-shape"></div>
                    </div>
                </div>
            </section>
            <!-- slider html start -->
            
            <!-- search search field html end -->
            <section class="destination-section">
                <div class="container">
                    <div class="section-heading">
                        <div class="row align-items-end">
                            <div class="col-lg-7">
                                <h5 class="dash-style">{{ __('site.home.top_picks.dash') }}</h5>
                                <h2>{{ __('site.home.top_picks.title') }}</h2>
                            </div>
                            <div class="col-lg-5">
                                <div class="section-disc">
                                    {{ __('site.home.top_picks.description') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination-inner destination-three-column">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="{{ asset('assets/images/img1.avif') }}" 
                                                alt="{{ __('site.home.destinations.rainbow_mountain') }}">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="javascript:void(0)" style="pointer-events: none;">{{ __('site.home.destinations.cusco') }}</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3><a href="javascript:void(0)" style="pointer-events: none;">{{ __('site.home.destinations.rainbow_mountain') }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="{{ asset('assets/images/img2.avif') }}" 
                                                alt="{{ __('site.home.destinations.sacred_valley') }}">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="javascript:void(0)" style="pointer-events: none;">{{ __('site.home.destinations.cusco') }}</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="javascript:void(0)" style="pointer-events: none;">{{ __('site.home.destinations.sacred_valley') }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="{{ asset('assets/images/img3.avif') }}" 
                                                alt="{{ __('site.home.destinations.maras') }}">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="javascript:void(0)" style="pointer-events: none;">{{ __('site.home.destinations.cusco') }}</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="javascript:void(0)" style="pointer-events: none;">{{ __('site.home.destinations.maras') }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="{{ asset('assets/images/img4.avif') }}" 
                                                alt="{{ __('site.home.destinations.city_tour') }}">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="javascript:void(0)" style="pointer-events: none;">{{ __('site.home.destinations.cusco') }}</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="javascript:void(0)" style="pointer-events: none;">{{ __('site.home.destinations.city_tour') }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap text-center">
                            <a href="{{ route('pages.peru', app()->getLocale()) }}" class="button-primary">{{ __('site.home.top_picks.more_button') }}</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Home callback section html start -->
            <section class="callback-section">
                <div class="container">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-5">
                            <div class="callback-img" 
                            style="background-image: url({{ asset('assets/images/img8.avif') }});"></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="callback-inner">
                                <div class="section-heading section-heading-white">
                                    <h5 class="dash-style">{{ __('site.home.callback.dash') }}</h5>
                                    <h2>{{ __('site.home.callback.title') }}</h2>
                                    <p>{{ __('site.home.callback.description') }}
                                    </p>
                                </div>
                                <div class="callback-counter-wrap">
                                    <div class="counter-item">
                                        <div class="counter-icon">
                                            <img src="{{ asset('assets/images/icono-01.png') }}" 
                                             alt="{{ __('site.home.counter.authentic_connections') }}">
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter-text">
                                                {{ __('site.home.counter.authentic_connections') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="counter-icon">
                                            <img src="{{ asset('assets/images/icono-02.png') }}" 
                                            alt="{{ __('site.home.counter.unforgettable_experiences') }}">
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter-text">
                                                {{ __('site.home.counter.unforgettable_experiences') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="counter-icon">
                                            <img src="{{ asset('assets/images/icono-03.png') }}" 
                                            alt="{{ __('site.home.counter.personalized_travel') }}">
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter-text">
                                                {{ __('site.home.counter.personalized_travel') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="counter-icon">
                                            <img src="{{ asset('assets/images/icono-04.png') }}" 
                                            alt="{{ __('site.home.counter.responsible_tourism') }}">
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter-text">
                                                {{ __('site.home.counter.responsible_tourism') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="support-area">
                                    <div class="support-icon">
                                        <img src="{{ asset('assets/images/icono-05.png') }}" 
                                        alt="{{ __('site.home.support.title') }}">
                                    </div>
                                    <div class="support-content">
                                        <h4>{{ __('site.home.support.title') }}</h4>
                                        <h3>
                                            <a href="https://wa.me/+51959164739" target="_blank">{{ __('site.home.support.phone') }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- callback html end -->
            
            
            <!-- Home special section html start -->
            <section class="best-section mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="section-heading">
                                <h5 class="dash-style">{{ __('site.home.gallery.dash') }}</h5>
                                <h2>{{ __('site.home.gallery.title') }}</h2>
                                <p>{{ __('site.home.gallery.description') }}</p>
                            </div>
                            <figure class="gallery-img">
                                <img src="{{ asset('assets/images/highligths/IMG_9671.avif') }}" 
                                alt="{{ __('site.home.gallery.title') }}">
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <figure class="gallery-img">
                                        <img src="{{ asset('assets/images/highligths/IMG_9757.avif') }}" 
                                        alt="{{ __('site.home.gallery.title') }}">
                                    </figure>
                                </div>
                                <div class="col-sm-6">
                                    <figure class="gallery-img">
                                        <img src="{{ asset('assets/images/highligths/IMG_9767.avif') }}" 
                                        alt="{{ __('site.home.gallery.title') }}">
                                    </figure>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <figure class="gallery-img">
                                        <img src="{{ asset('assets/images/highligths/home1.avif') }}" 
                                        alt="{{ __('site.home.gallery.title') }}">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- best html end -->
           
            <!-- Home contact details section html start -->
            <section class="contact-section mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact-img" 
                            style="background-image: url({{ asset('assets/images/img24.avif') }});">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="contact-details-wrap">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="contact-details">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-phone-alt mr-2"></i>
                                                    {{ __('site.home.contact.phone') }}
                                                </li>
                                                <li>
                                                    <i class="fas fa-envelope mr-2"></i>
                                                    {{ __('site.home.contact.email') }}
                                                </li>
                                                <li>
                                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                                    {{ __('site.home.contact.address') }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-btn-wrap">
                                <h3>{{ __('site.home.contact.message_title') }}</h3>
                                <a href="{{ route('pages.contact', app()->getLocale()) }}" class="button-white">{{ __('site.home.contact.learn_more') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  contact details html end -->
        </main>
        @include('layouts.footer')
        <!-- footer html end -->
    </div>
</div>
@endsection
