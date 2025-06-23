@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url('{{ asset('assets/images/inner-banner.png') }}');">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{ __('site.crafted.title') }}</h1>
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
                            <div class="col-lg-6">
                                <h5 class="dash-style">{{ __('site.crafted.dash') }}</h5>
                                <h2>{{ __('site.crafted.title') }}</h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="section-disc">
                                    <p>{{ __('site.crafted.description') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-service-container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="about-service">
                                    <div class="about-service-icon">
                                        <img src="{{ asset('assets/images/icon15.png') }}" alt="">
                                    </div>
                                    <div class="about-service-content">
                                        <h4>{{ __('site.crafted.service1.title') }}</h4>
                                        <p>{{ __('site.crafted.service1.description') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="about-service">
                                    <div class="about-service-icon">
                                        <img src="{{ asset('assets/images/icon16.png') }}" alt="">
                                    </div>
                                    <div class="about-service-content">
                                        <h4>{{ __('site.crafted.service2.title') }}</h4>
                                        <p>{{ __('site.crafted.service2.description') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="about-service">
                                    <div class="about-service-icon">
                                        <img src="{{ asset('assets/images/icon17.png') }}" alt="">
                                    </div>
                                    <div class="about-service-content">
                                        <h4>{{ __('site.crafted.service3.title') }}</h4>
                                        <p>{{ __('site.crafted.service3.description') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-video-wrap" style="background-image: url('{{ asset('assets/images/img25.jpg') }}');"></div>
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
                                        <img src="{{ asset('assets/images/img37.png') }}" alt="">
                                    </figure>
                                    <div class="testimonial-content">
                                        <span class="quote-icon">
                                            <i class="fas fa-quote-left"></i>
                                        </span>
                                        <p>{{ __('site.crafted.testimonial') }}</p>
                                    </div>
                                    <figure class="faq-image">
                                        <img src="{{ asset('assets/images/certificacion.jpg') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="faq-content-wrap pl-20">
                                    <div class="section-heading">
                                        <h5 class="dash-style">{{ __('site.crafted.faq.dash') }}</h5>
                                        <h2>{{ __('site.crafted.faq.title') }}</h2>
                                    </div>
                                    <div class="accordion" id="accordionTwo">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h4 class="mb-0">
                                                    <button class="btn btn-link " type="button" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        {{ __('site.crafted.faq.q1') }}
                                                    </button>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionTwo">
                                                <div class="card-body">
                                                    {{ __('site.crafted.faq.a1') }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h4 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        {{ __('site.crafted.faq.q2') }}
                                                    </button>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                                data-parent="#accordionTwo">
                                                <div class="card-body">  
                                                    {{ __('site.crafted.faq.a2') }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h4 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        {{ __('site.crafted.faq.q3') }}
                                                    </button>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                                                data-parent="#accordionTwo">
                                                <div class="card-body">
                                                    {{ __('site.crafted.faq.a3') }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h4 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        {{ __('site.crafted.faq.q4') }}
                                                    </button>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour"
                                                data-parent="#accordionTwo">
                                                <div class="card-body">
                                                    {{ __('site.crafted.faq.a4') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="{{ route('pages.faq', ['locale' => App::getLocale()]) }}" class="button-primary mt-5">{{ __('site.crafted.faq.complete_button') }}</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- client html end -->
            <!-- callback section html start -->
            <div class="fullwidth-callback" style="background-image: url('{{ asset('assets/images/img26.png') }}');">
                <div class="container">
                    <div class="section-heading section-heading-white text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h5 class="dash-style">{{ __('site.crafted.contact.dash') }}</h5>
                                <h2>{{ __('site.crafted.contact.title') }}</h2>
                                <p>{{ __('site.crafted.contact.description') }}</p>
                            </div>
                        </div>
                        <a href="#" class="button-white text-center mt-5">{{ __('site.crafted.contact.button') }}</a>
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
