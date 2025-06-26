@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url('{{ asset('assets/images/peru.jpg') }}');">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{ __('site.country.peru.title') }}</h1>
                    </div>
                </div>
            </div>
            <div class="inner-shape"></div>
        </section>
        <!-- Inner Banner html end-->
        <!-- about section html start -->
        <section class="about-section about-page-section">
            <div class="about-service-wrap">
                <div class="container">
                    <div class="section-heading">
                        <div class="row align-items-end">
                            
                            <div class="col-lg-12">
                                <div class="section-disc">
                                    <h2 class="text-center mb-4">{{ __('site.country.peru.info_title') }}</h2>

                                    <h3>{{ __('site.country.peru.visa_title') }}</h3>

                                    <p>{{ __('site.country.peru.visa_content') }}</p>

                                    <p>{{ __('site.country.peru.visa_indian') }}</p>

                                    <p>{{ __('site.country.peru.passport_validity') }}</p>

                                    <h3>{{ __('site.country.peru.weather_title') }}</h3>

                                    <p>{{ __('site.country.peru.weather_content') }}</p>

                                    <ol>
                                        <li aria-level="1">{{ __('site.country.peru.spring') }}</li>
                                        <li aria-level="1">{{ __('site.country.peru.summer') }}</li>
                                        <li aria-level="1">{{ __('site.country.peru.autumn') }}</li>
                                        <li aria-level="1">{{ __('site.country.peru.winter') }}</li>
                                    </ol>

                                    <h3>{{ __('site.country.peru.vaccinations_title') }}</h3>

                                    <p>{{ __('site.country.peru.vaccinations_content') }}</p>

                                    <h3>{{ __('site.country.peru.mam_title') }}</h3>

                                    <p>{{ __('site.country.peru.mam_content') }}</p>

                                    <p>{{ __('site.country.peru.mam_description') }}</p>

                                    <p>{{ __('site.country.peru.mam_tips') }}</p>

                                    <p>{{ __('site.country.peru.mam_hydration') }}</p>

                                    <h3>{{ __('site.country.peru.currency_title') }}</h3>

                                    <p>{{ __('site.country.peru.currency_content') }}</p>

                                    <h3>{{ __('site.country.peru.adapter_title') }}</h3>

                                    <p>{{ __('site.country.peru.adapter_content') }}</p>

                                    <h3>{{ __('site.country.peru.language_title') }}</h3>

                                    <p>{{ __('site.country.peru.language_content') }}</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="package-section">
                        <div class="container">
                            <div class="package-inner">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="package-wrap">
                                            <figure class="feature-image">
                                                <a href="{{ route('pages.peru-machupichu', app()->getLocale()) }}">
                                                    <img src="{{ asset('assets/images/machupichu.webp') }}" alt="">
                                                </a>
                                            </figure>
                                            
                                            <div class="package-content-wrap">
                                                <div class="package-meta text-center p-2">
                                                    <h5 class="m-0" >
                                                        <a href="{{ route('pages.peru-machupichu', app()->getLocale()) }}" 
                                                        class="text-white">Machu Picchu</a>
                                                    </h5>
                                                </div>
                                                <div class="package-content">
                                                    <div class="btn-wrap justify-content-center ">
                                                        <a href="{{ route('pages.peru-machupichu', app()->getLocale()) }}" 
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
                                                <a href="{{ route('pages.peru-lima', app()->getLocale()) }}">
                                                    <img src="{{ asset('assets/images/lima.webp') }}" alt="">
                                                </a>
                                            </figure>
                                            
                                            <div class="package-content-wrap">
                                                <div class="package-meta text-center p-2">
                                                    <h5 class="m-0" >
                                                        <a href="{{ route('pages.peru-lima', app()->getLocale()) }}" class="text-white">Lima</a>
                                                    </h5>
                                                </div>
                                                <div class="package-content">
                                                    <div class="btn-wrap justify-content-center ">
                                                        <a href="{{ route('pages.peru-lima', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                                class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="package-wrap">
                                            <figure class="feature-image">
                                                <a href="{{ route('pages.peru-puno', app()->getLocale()) }}">
                                                    <img src="{{ asset('assets/images/puno.webp') }}" alt="">
                                                </a>
                                            </figure>
                                            
                                            <div class="package-content-wrap">
                                                <div class="package-meta text-center p-2">
                                                    <h5 class="m-0" >
                                                        <a href="{{ route('pages.peru-puno', app()->getLocale()) }}" class="text-white">Puno</a>
                                                    </h5>
                                                </div>
                                                <div class="package-content">
                                                    <div class="btn-wrap justify-content-center ">
                                                        <a href="{{ route('pages.peru-puno', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                                class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="package-wrap">
                                            <figure class="feature-image">
                                                <a href="{{ route('pages.peru-trujillo', app()->getLocale()) }}">
                                                    <img src="{{ asset('assets/images/trujillo.webp') }}" alt="">
                                                </a>
                                            </figure>
                                            
                                            <div class="package-content-wrap">
                                                <div class="package-meta text-center p-2">
                                                    <h5 class="m-0" >
                                                        <a href="{{ route('pages.peru-trujillo', app()->getLocale()) }}" class="text-white">Trujillo</a>
                                                    </h5>
                                                </div>
                                                <div class="package-content">
                                                    <div class="btn-wrap justify-content-center ">
                                                        <a href="{{ route('pages.peru-trujillo', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                                class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="package-wrap">
                                            <figure class="feature-image">
                                                <a href="{{ route('pages.peru-cusco', app()->getLocale()) }}">
                                                    <img src="{{ asset('assets/images/cusco.webp') }}" alt="">
                                                </a>
                                            </figure>
                                            
                                            <div class="package-content-wrap">
                                                <div class="package-meta text-center p-2">
                                                    <h5 class="m-0" >
                                                        <a href="{{ route('pages.peru-cusco', app()->getLocale()) }}" class="text-white">Cusco</a>
                                                    </h5>
                                                </div>
                                                <div class="package-content">
                                                    <div class="btn-wrap justify-content-center ">
                                                        <a href="{{ route('pages.peru-cusco', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
                                                                class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="package-wrap">
                                            <figure class="feature-image">
                                                <a href="{{ route('pages.peru-arequipa', app()->getLocale()) }}">
                                                    <img src="{{ asset('assets/images/arequipa.webp') }}" alt="">
                                                </a>
                                            </figure>
                                            <div class="package-content-wrap">
                                                <div class="package-meta text-center p-2">
                                                    <h5 class="m-0" >
                                                        <a href="{{ route('pages.peru-arequipa', app()->getLocale()) }}" class="text-white">Arequipa</a>
                                                    </h5>
                                                </div>
                                                <div class="package-content">
                                                    <div class="btn-wrap justify-content-center ">
                                                        <a href="{{ route('pages.peru-arequipa', app()->getLocale()) }}" class="button-text width-6 mx-auto">{{ __('site.package.book_now') }}<i
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
                </div>
            </div>
            
        </section>
        <!-- about html end -->
    </main>
    @include('layouts.footer')

    <!-- header html end -->
</div>
@endsection
