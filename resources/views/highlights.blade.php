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
                        <h1 class="inner-title">{{ __('site.highlights.title') }}</h1>
                    </div>
                </div>
            </div>
            <div class="inner-shape"></div>
        </section>
        <!-- Inner Banner html end-->
        <div class="gallery-section">
            <div class="container">
                <div class="gallery-outer-wrap">
                    <div class="gallery-inner-wrap gallery-container grid" style="position: relative; height: 957.422px;">
                    <div class="single-gallery grid-item" style="position: absolute; left: 0px; top: 0px;">
                        <figure class="gallery-img">
                            <img src="{{ asset('assets/images/highligths/IMG_9816.avif') }}" alt="">
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 383.953px; top: 0px;">
                        <figure class="gallery-img">
                            <img src="{{ asset('assets/images/highligths/IMG_9635.avif') }}" alt="">
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 767.906px; top: 0px;">
                        <figure class="gallery-img">
                            <img src="{{ asset('assets/images/highligths/IMG_9828.avif') }}" alt="">
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 383.953px; top: 307.188px;">
                        <figure class="gallery-img">
                            <img src="{{ asset('assets/images/highligths/IMG_9658.avif') }}" alt="">
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 0px; top: 476.938px;">
                        <figure class="gallery-img">
                            <img src="{{ asset('assets/images/highligths/IMG_9884.avif') }}" alt="">
                            
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 767.906px; top: 476.938px;">
                        <figure class="gallery-img">
                            <img src="{{ asset('assets/images/highligths/IMG_9671.avif') }}" alt="">
                            
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 383.953px; top: 588.954px;">
                        <figure class="gallery-img">
                            <img src="{{ asset('assets/images/highligths/IMG_9733.avif') }}" alt="">
                            
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 767.906px; top: 687.688px;">
                        <figure class="gallery-img">
                            <img src="{{ asset('assets/images/highligths/IMG_9757.avif') }}" alt="">
                            
                        </figure>
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