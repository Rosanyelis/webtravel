@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url({{ asset('assets/images/inner-banner.png') }});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{ __('site.experience.title') }}</h1>
                    </div>
                </div>
            </div>
            <div class="inner-shape"></div>
        </section>
        <!-- Inner Banner html end-->

        <!-- Home activity section html start -->
        <section class="activity-section" style="padding-bottom: 0px;">
            <div class="container">
                <div class="section-heading text-center">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h5 class="dash-style">{{ __('site.experience.dash') }}</h5>
                            <h2>{{ __('site.experience.theme.title') }}</h2>
                            <p>{{ __('site.experience.theme.description') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- activity html end -->

        <div class="package-section">
            <div class="container">
                <div class="package-inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ route('pages.experienceone', app()->getLocale()) }}">
                                        <img src="{{ asset('assets/images/by-theme/wellnes-trip.avif') }}" alt="{{ __('site.experience.themes.wellness_trip') }}">
                                    </a>
                                </figure>
                                
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center p-2">
                                        <h5 class="m-0" >
                                            <a href="{{ route('pages.experienceone', app()->getLocale()) }}" 
                                            class="text-white">{{ __('site.experience.themes.wellness_trip') }}</a>
                                        </h5>
                                    </div>
                                    <div class="package-content">
                                        <div class="btn-wrap justify-content-center ">
                                            <a href="{{ route('pages.experienceone', app()->getLocale()) }}" 
                                            class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ route('pages.experiencetwo', app()->getLocale()) }}">
                                        <img src="{{ asset('assets/images/by-theme/food-travel.avif') }}" alt="{{ __('site.experience.themes.food_travel') }}">
                                    </a>
                                </figure>
                                
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center p-2">
                                        <h5 class="m-0" >
                                            <a href="{{ route('pages.experiencetwo', app()->getLocale()) }}" class="text-white">{{ __('site.experience.themes.food_travel') }}</a>
                                        </h5>
                                    </div>
                                    <div class="package-content">
                                        <div class="btn-wrap justify-content-center ">
                                            <a href="{{ route('pages.experiencetwo', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ route('pages.experiencethree', app()->getLocale()) }}">
                                        <img src="{{ asset('assets/images/by-theme/family-tours.avif') }}" alt="{{ __('site.experience.themes.family_tours') }}">
                                    </a>
                                </figure>
                                
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center p-2">
                                        <h5 class="m-0" >
                                            <a href="{{ route('pages.experiencethree', app()->getLocale()) }}" class="text-white">{{ __('site.experience.themes.family_tours') }}</a>
                                        </h5>
                                    </div>
                                    <div class="package-content">
                                        <div class="btn-wrap justify-content-center ">
                                            <a href="{{ route('pages.experiencethree', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ route('pages.experiencefour', app()->getLocale()) }}">
                                        <img src="{{ asset('assets/images/by-theme/sightseeing-tours.avif') }}" alt="{{ __('site.experience.themes.sightseeing_tours') }}">
                                    </a>
                                </figure>
                                
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center p-2">
                                        <h5 class="m-0" >
                                            <a href="{{ route('pages.experiencefour', app()->getLocale()) }}" class="text-white">{{ __('site.experience.themes.sightseeing_tours') }}</a>
                                        </h5>
                                    </div>
                                    <div class="package-content">
                                        <div class="btn-wrap justify-content-center ">
                                            <a href="{{ route('pages.experiencefour', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ route('pages.experiencefive', app()->getLocale()) }}">
                                        <img src="{{ asset('assets/images/by-theme/walking-tours.avif') }}" alt="{{ __('site.experience.themes.walking_tours') }}">
                                    </a>
                                </figure>
                                
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center p-2">
                                        <h5 class="m-0" >
                                            <a href="{{ route('pages.experiencefive', app()->getLocale()) }}" class="text-white">{{ __('site.experience.themes.walking_tours') }}</a>
                                        </h5>
                                    </div>
                                    <div class="package-content">
                                        <div class="btn-wrap justify-content-center ">
                                            <a href="{{ route('pages.experiencefive', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ route('pages.experiencesix', app()->getLocale()) }}">
                                        <img src="{{ asset('assets/images/by-theme/romantic-vacations-honeymoom.avif') }}" alt="{{ __('site.experience.themes.romantic_vacations') }}">
                                    </a>
                                </figure>
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center p-2">
                                        <h5 class="m-0" >
                                            <a href="{{ route('pages.experiencesix', app()->getLocale()) }}" class="text-white">{{ __('site.experience.themes.romantic_vacations') }}</a>
                                        </h5>
                                    </div>
                                    <div class="package-content">
                                        <div class="btn-wrap justify-content-center ">
                                            <a href="{{ route('pages.experiencesix', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Home activity section html start -->
        <section class="activity-section" style="padding-bottom: 0px;">
            <div class="container">
                <div class="section-heading text-center">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">{{ __('site.experience.dash') }}</h5>
                            <h2>{{ __('site.experience.group.title') }}</h2>
                            <p>{{ __('site.experience.group.description') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- activity html end -->

        <div class="package-section">
            <div class="container">
                <div class="package-inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ route('pages.experienceseven', app()->getLocale()) }}">
                                        <img src="{{ asset('assets/images/by-group/travel-together1.avif') }}" alt="{{ __('site.experience.groups.travel_together') }}">
                                    </a>
                                </figure>
                                
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center p-2">
                                        <h5 class="m-0" >
                                            <a href="{{ route('pages.experienceseven', app()->getLocale()) }}" class="text-white">{{ __('site.experience.groups.travel_together') }}</a>
                                        </h5>
                                    </div>
                                    <div class="package-content">
                                        <div class="btn-wrap justify-content-center ">
                                            <a href="{{ route('pages.experienceseven', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ route('pages.experienceeight', app()->getLocale()) }}">
                                        <img src="{{ asset('assets/images/by-group/empowering-solo-journeys.avif') }}" alt="{{ __('site.experience.groups.solo_journeys') }}">
                                    </a>
                                </figure>
                                
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center p-2">
                                        <h5 class="m-0" >
                                            <a href="{{ route('pages.experienceeight', app()->getLocale()) }}" class="text-white">{{ __('site.experience.groups.solo_journeys') }}</a>
                                        </h5>
                                    </div>
                                    <div class="package-content">
                                        <div class="btn-wrap justify-content-center ">
                                            <a href="{{ route('pages.experienceeight', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ route('pages.experiencenine', app()->getLocale()) }}">
                                        <img src="{{ asset('assets/images/by-group/tailor-made-travel.avif') }}" alt="{{ __('site.experience.groups.tailor_made') }}">
                                    </a>
                                </figure>
                                
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center p-2">
                                        <h5 class="m-0" >
                                            <a href="{{ route('pages.experiencenine', app()->getLocale()) }}" class="text-white">{{ __('site.experience.groups.tailor_made') }}</a>
                                        </h5>
                                    </div>
                                    <div class="package-content">
                                        <div class="btn-wrap justify-content-center ">
                                            <a href="{{ route('pages.experiencenine', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ route('pages.experienceten', app()->getLocale()) }}">
                                        <img src="{{ asset('assets/images/by-group/small-group-adventures.avif') }}" alt="{{ __('site.experience.groups.small_group') }}">
                                    </a>
                                </figure>
                                
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center p-2">
                                        <h5 class="m-0" >
                                            <a href="{{ route('pages.experienceten', app()->getLocale()) }}" class="text-white">{{ __('site.experience.groups.small_group') }}</a>
                                        </h5>
                                    </div>
                                    <div class="package-content">
                                        <div class="btn-wrap justify-content-center ">
                                            <a href="{{ route('pages.experienceten', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ route('pages.experienceeleven', app()->getLocale()) }}">
                                        <img src="{{ asset('assets/images/by-group/cherished-moments.avif') }}" alt="{{ __('site.experience.groups.couples') }}">
                                    </a>
                                </figure>
                                
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center p-2">
                                        <h5 class="m-0" >
                                            <a href="{{ route('pages.experienceeleven', app()->getLocale()) }}" class="text-white">{{ __('site.experience.groups.couples') }}</a>
                                        </h5>
                                    </div>
                                    <div class="package-content">
                                        <div class="btn-wrap justify-content-center ">
                                            <a href="{{ route('pages.experienceeleven', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 text-center">
                            <a href="{{ route('pages.contact', app()->getLocale()) }}" class="button-primary mt-5 ">{{ __('site.experience.button.title') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <blockquote>
        {{ __('site.experience.contact.assistance') }}
        </blockquote>
    </main>
    @include('layouts.footer')

    <!-- header html end -->
</div>
@endsection
