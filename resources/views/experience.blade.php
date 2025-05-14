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
                        <h1 class="inner-title">EXPERIENCES</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->

        <!-- Home activity section html start -->
        <section class="activity-section">
            <div class="container">
                <div class="section-heading text-center">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h5 class="dash-style">OUR EXPERIENCES</h5>
                            <h2>SEARCH BY TYPE OR ACTIVITY</h2>
                            <p>Find the perfect experience for you. Filter by tour type or activity and start planning
                                your next
                                adventure in Peru. See you soon!</p>
                        </div>
                    </div>
                </div>
                <div class="activity-inner row justify-content-center">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <a href="#">
                                    <img src="{{ asset('assets/images/icono-15.png') }}" alt="">
                                </a>
                            </div>
                            <div class="activity-content">
                                <h4>
                                    <a href="#">Landscapes</a>
                                </h4>
                                <p>6 Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <a href="#">
                                    <img src="{{ asset('assets/images/icono-16.png') }}" alt="">
                                </a>
                            </div>
                            <div class="activity-content">
                                <h4>
                                    <a href="#">Long Trekking</a>
                                </h4>
                                <p>4 Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <a href="#">
                                    <img src="{{ asset('assets/images/icono-18.png') }}" alt="">
                                </a>
                            </div>
                            <div class="activity-content">
                                <h4>
                                    <a href="#">Adrenaline</a>
                                </h4>
                                <p>4 Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <a href="#">
                                    <img src="{{ asset('assets/images/icono-19.png') }}" alt="">
                                </a>
                            </div>
                            <div class="activity-content">
                                <h4>
                                    <a href="#">In the City</a>
                                </h4>
                                <p>2 Experience</p>
                            </div>
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
                                    <a href="#">
                                        <img src="assets/images/img5.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="package-price">
                                    <h6>
                                        <span>$649 / </span> per person
                                    </h6>
                                </div>
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center">
                                        <ul>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                1 Day
                                            </li>
                                            <li>
                                                <i class="fas fa-user-friends"></i>
                                                People: 4
                                            </li>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Cusco
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="package-content">
                                        <h3>
                                            <a href="#">Sunset view of beautiful lakeside resident</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut
                                            elit tellus, luctus nec ullam elit tellpus.</p>
                                        <div class="btn-wrap justify-content-center ">
                                            <a href="#" class="button-text width-6 mx-auto">Book Now<i
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
    </main>
    @include('layouts.footer')

    <!-- header html end -->
</div>
@endsection
