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
                        <h1 class="inner-title">{{ __('site.wellness.title') }}</h1>
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
                                <img src="{{ asset('assets/images/wellnes-trip.png') }}" alt="">
                            </figure>
                            <article class="single-content-wrap">
                                <h3 class="text-center">{{ __('site.wellness.page_title') }}</h3>
                                <p>{{ __('site.wellness.intro') }}</p>

                                <p>{{ __('site.wellness.peru_overview') }}</p>

                                <p>{{ __('site.wellness.essence') }}</p>

                                <p><strong>{{ __('site.wellness.cusco.title') }}</strong></p>

                                <p>{{ __('site.wellness.cusco.description') }}</p>

                                <p>{{ __('site.wellness.cusco.additional') }}</p>

                                <p><strong>{{ __('site.wellness.arequipa.title') }}</strong></p>

                                <p>{{ __('site.wellness.arequipa.description') }}</p>

                                <p>{{ __('site.wellness.arequipa.additional') }}</p>

                                <p><strong>{{ __('site.wellness.ancash.title') }}</strong></p>

                                <p>{{ __('site.wellness.ancash.description') }}</p>

                                <p><strong>{{ __('site.wellness.san_martin.title') }}</strong></p>

                                <p>{{ __('site.wellness.san_martin.description') }}</p>

                                <p>{{ __('site.wellness.san_martin.establishments') }}</p>

                            </article>
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