@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url({{ asset('assets/images/inner-banner-2.png') }});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{ __('site.peru.cities.cusco.title') }}</h1>
                    </div>
                </div>
            </div>
            <div class="inner-shape"></div>
        </section>

        <div class="single-post-section">
            <div class="single-post-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 primary right-sidebar">
                            <!-- single blog post html start -->
                            <figure class="feature-image">
                                <img src="{{ asset('assets/images/cusco2.webp') }}" alt="">
                            </figure>
                            <article class="single-content-wrap">
                                <h3 class="text-center">{{ __('site.peru.cities.cusco.page_title') }}</h3>
                                <p>{{ __('site.peru.cities.cusco.subtitle') }}</p>

                                <p>{{ __('site.peru.cities.cusco.description') }}</p>
                            </article>

                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image mb-3">
                                            <img src="{{ asset('assets/images/cusco/city-tour.avif') }}" alt="{{ __('cusco.city-tour') }}">
                                        </figure>
                                        
                                        <div class="package-content-wrap ">
                                            <div class="package-content px-3 pb-3">
                                                <h4 class="mb-2" >{{ __('cusco.city-tour') }}</h4>
                                                <p style="font-size: 14px; line-height: 1.5; text-align: justify;">
                                                    {{ __('cusco.city-tour-description') }}
                                                </p>
                                                <div class="btn-wrap justify-content-center "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image mb-3">
                                            <img src="{{ asset('assets/images/cusco/sacred-valley.avif') }}" 
                                             alt="{{ __('cusco.tour-valle-sagrado') }}">
                                        </figure>
                                        
                                        <div class="package-content-wrap ">
                                            <div class="package-content px-3 pb-3">
                                                <h4 class="mb-2" >{{ __('cusco.tour-valle-sagrado') }}</h4>
                                                <p style="font-size: 14px; line-height: 1.5; text-align: justify;">
                                                    {{ __('cusco.tour-valle-sagrado-description') }}
                                                </p>
                                                <div class="btn-wrap justify-content-center "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image mb-3">
                                            <img src="{{ asset('assets/images/cusco/machu-picchu.avif') }}" 
                                             alt="{{ __('cusco.machu-picchu') }}">
                                        </figure>
                                        
                                        <div class="package-content-wrap ">
                                            <div class="package-content px-3 pb-3">
                                                <h4 class="mb-2" >{{ __('cusco.machu-picchu') }}</h4>
                                                <p style="font-size: 14px; line-height: 1.5; text-align: justify;">
                                                    {{ __('cusco.machu-picchu-description') }}
                                                </p>
                                                <div class="btn-wrap justify-content-center "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image mb-3">
                                            <img src="{{ asset('assets/images/cusco/rainbow-mountain.avif') }}" 
                                             alt="{{ __('cusco.rainbow-mountain') }}">
                                        </figure>
                                        
                                        <div class="package-content-wrap ">
                                            <div class="package-content px-3 pb-3">
                                                <h4 class="mb-2" >{{ __('cusco.rainbow-mountain') }}</h4>
                                                <p style="font-size: 14px; line-height: 1.5; text-align: justify;">
                                                    {{ __('cusco.rainbow-mountain-description') }}
                                                </p>
                                                <div class="btn-wrap justify-content-center "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image mb-3">
                                            <img src="{{ asset('assets/images/cusco/humantay-lake.avif') }}" 
                                             alt="{{ __('cusco.laguna-humantay') }}">
                                        </figure>
                                        
                                        <div class="package-content-wrap ">
                                            <div class="package-content px-3 pb-3">
                                                <h4 class="mb-2" >{{ __('cusco.laguna-humantay') }}</h4>
                                                <p style="font-size: 14px; line-height: 1.5; text-align: justify;">
                                                    {{ __('cusco.laguna-humantay-description') }}
                                                </p>
                                                <div class="btn-wrap justify-content-center "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image mb-3">
                                            <img src="{{ asset('assets/images/cusco/maras.avif') }}" 
                                             alt="{{ __('cusco.maras') }}">
                                        </figure>
                                        
                                        <div class="package-content-wrap ">
                                            <div class="package-content px-3 pb-3">
                                                <h4 class="mb-2" >{{ __('cusco.maras') }}</h4>
                                                <p style="font-size: 14px; line-height: 1.5; text-align: justify;">
                                                    {{ __('cusco.maras-description') }}
                                                </p>
                                                <div class="btn-wrap justify-content-center "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image mb-3">
                                            <img src="{{ asset('assets/images/cusco/inca-trail.avif') }}" 
                                             alt="{{ __('cusco.camino-inca') }}">
                                        </figure>
                                        
                                        <div class="package-content-wrap ">
                                            <div class="package-content px-3 pb-3">
                                                <h4 class="mb-2" >{{ __('cusco.camino-inca') }}</h4>
                                                <p style="font-size: 14px; line-height: 1.5; text-align: justify;">
                                                    {{ __('cusco.camino-inca-description') }}
                                                </p>
                                                <div class="btn-wrap justify-content-center "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image mb-3">
                                            <img src="{{ asset('assets/images/cusco/south-valley.avif') }}" 
                                             alt="{{ __('cusco.tour-valle-sur') }}">
                                        </figure>
                                        
                                        <div class="package-content-wrap ">
                                            <div class="package-content px-3 pb-3">
                                                <h4 class="mb-2" >{{ __('cusco.tour-valle-sur') }}</h4>
                                                <p style="font-size: 14px; line-height: 1.5; text-align: justify;">
                                                    {{ __('cusco.tour-valle-sur-description') }}
                                                </p>
                                                <div class="btn-wrap justify-content-center "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image mb-3">
                                            <img src="{{ asset('assets/images/cusco/choquequirao.avif') }}" 
                                             alt="{{ __('cusco.choquequirao') }}">
                                        </figure>
                                        
                                        <div class="package-content-wrap ">
                                            <div class="package-content px-3 pb-3">
                                                <h4 class="mb-2" >{{ __('cusco.choquequirao') }}</h4>
                                                <p style="font-size: 14px; line-height: 1.5; text-align: justify;">
                                                    {{ __('cusco.choquequirao-description') }}
                                                </p>
                                                <div class="btn-wrap justify-content-center "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 secondary">
                            <div class="sidebar">
                            <div class="widget-bg information-content text-center">
                                <h5>{{ __('site.experience.sidebar.dash') }}</h5>
                                <h3>{{ __('site.experience.sidebar.title') }}</h3>
                                <p>{{ __('site.experience.sidebar.description') }}</p>
                                <a href="{{ route('pages.contact', app()->getLocale()) }}" class="button-primary">{{ __('site.experience.sidebar.button') }}</a>
                            </div>
                           </div>
                        </div>  
                    </div>

                    
                    
                            
                </div>
            </div>
        </div>

    </main>

    @include('layouts.footer')
    <!-- header html end -->
</div>
@endsection