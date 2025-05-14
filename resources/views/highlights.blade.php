@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner-2.png);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">HIGHLIGHTS</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->
        <div class="gallery-section">
            <div class="container">
                <div class="gallery-outer-wrap">
                    <div class="gallery-inner-wrap gallery-container grid" style="position: relative; height: 957.422px;">
                    <div class="single-gallery grid-item" style="position: absolute; left: 0px; top: 0px;">
                        <figure class="gallery-img">
                            <img src="{{ asset('assets/images/gallery-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 383.953px; top: 0px;">
                        <figure class="gallery-img">
                            <img src="{{ asset('assets/images/gallery-2.jpg') }}" alt="">
                            <div class="gallery-title">
                                <h3>
                                <a href="assets/images/gallery-2.jpg" data-lightbox="lightbox-set">
                                    Malaysia Beach
                                </a>
                                </h3>
                            </div>
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 767.906px; top: 0px;">
                        <figure class="gallery-img">
                            <img src="assets/images/gallery-3.jpg" alt="">
                            <div class="gallery-title">
                                <h3>
                                <a href="assets/images/gallery-3.jpg" data-lightbox="lightbox-set">
                                    Tibet Mountain
                                </a>
                                </h3>
                            </div>
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 383.953px; top: 307.188px;">
                        <figure class="gallery-img">
                            <img src="assets/images/gallery-4.jpg" alt="">
                            <div class="gallery-title">
                                <h3>
                                <a href="assets/images/gallery-4.jpg" data-lightbox="lightbox-set">
                                    Arizona Desert
                                </a>
                                </h3>
                            </div>
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 0px; top: 476.938px;">
                        <figure class="gallery-img">
                            <img src="assets/images/gallery-5.jpg" alt="">
                            <div class="gallery-title">
                                <h3>
                                <a href="assets/images/gallery-5.jpg" data-lightbox="lightbox-set">
                                    Burj Khalifa (Dubai)
                                </a>
                                </h3>
                            </div>
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 767.906px; top: 476.938px;">
                        <figure class="gallery-img">
                            <img src="assets/images/gallery-6.jpg" alt="">
                            <div class="gallery-title">
                                <h3>
                                <a href="assets/images/gallery-6.jpg" data-lightbox="lightbox-set">
                                    Oxolotan Island
                                </a>
                                </h3>
                            </div>
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 383.953px; top: 588.954px;">
                        <figure class="gallery-img">
                            <img src="assets/images/gallery-7.jpg" alt="">
                            <div class="gallery-title">
                                <h3>
                                <a href="assets/images/gallery-7.jpg" data-lightbox="lightbox-set">
                                    Narita Airport
                                </a>
                                </h3>
                            </div>
                        </figure>
                    </div>
                    <div class="single-gallery grid-item" style="position: absolute; left: 767.906px; top: 687.688px;">
                        <figure class="gallery-img">
                            <img src="assets/images/gallery-8.jpg" alt="">
                            <div class="gallery-title">
                                <h3>
                                <a href="assets/images/gallery-8.jpg" data-lightbox="lightbox-set">
                                    Thailand Temple
                                </a>
                                </h3>
                            </div>
                        </figure>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-color-callback">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-9 col-md-8">
                    <div class="callback-content">
                        <h2>SUBMIT YOUR TRIP PHOTOS!</h2>
                        <p>Send us your best shots from your tour with us — they might be featured on our website!</p>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                    <div class="button-wrap">
                        <a href="#" class="button-white">SUBMIT</a>
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