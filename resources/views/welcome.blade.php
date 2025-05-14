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
                            style="background-image: url(assets/images/slider-banner-1.jpg);"></div>
                        <div class="banner-content-wrap">
                            <div class="container">
                                <div class="banner-content text-center">
                                    <h2 class="banner-title">EXPLORE, CONNECT, EXPERIENCE</h2>
                                    <p>Discover Peru in a whole new way, authentic experiences, real connections, and 
                                    unforgettable moments that feel made just for you.</p>
                                    <a href="#" class="button-primary">DISCOVER US</a>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="home-banner-items">
                        <div class="banner-inner-wrap"
                            style="background-image: url(assets/images/slider-banner-2.jpg);"></div>
                        <div class="banner-content-wrap">
                            <div class="container">
                                <div class="banner-content text-center">
                                    <h2 class="banner-title">EXPERIENCE THE NATURE'S BEAUTY</h2>
                                    <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam,
                                        eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat
                                        sodales! Mollit. Minus exercitationem wisi.</p>
                                    <a href="#" class="button-primary">CONTINUE READING</a>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
            </section>
            <!-- slider html start -->
            <!-- Home search field html start -->
            <div class="trip-search-section shape-search-section">
                <div class="slider-shape"></div>
                <div class="container">
                    <div class="trip-search-inner white-bg d-flex">
                        <div class="input-group">
                            <label> Search Destination* </label>
                            <input type="text" name="s" placeholder="Enter Destination">
                        </div>
                        <div class="input-group">
                            <label> Pax Number* </label>
                            <input type="text" name="s" placeholder="No.of People">
                        </div>
                        <div class="input-group width-col-3">
                            <label> Checkin Date* </label>
                            <i class="far fa-calendar"></i>
                            <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY"
                                autocomplete="off" readonly="readonly">
                        </div>
                        <div class="input-group width-col-3">
                            <label> Checkout Date* </label>
                            <i class="far fa-calendar"></i>
                            <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY"
                                autocomplete="off" readonly="readonly">
                        </div>
                        <div class="input-group width-col-3">
                            <label class="screen-reader-text"> Search </label>
                            <input type="submit" name="travel-search" value="INQUIRE NOW">
                        </div>
                    </div>
                </div>
            </div>
            <!-- search search field html end -->
            <section class="destination-section">
                <div class="container">
                    <div class="section-heading">
                        <div class="row align-items-end">
                            <div class="col-lg-7">
                                <h5 class="dash-style">TOP PICKS</h5>
                                <h2>GUEST FAVORITES</h2>
                            </div>
                            <div class="col-lg-5">
                                <div class="section-disc">
                                    From breathtaking landscapes to hidden gems, these 
                                    are the places travelers love the most. Explore the 
                                    must-visit spots that make every trip unforgettable.
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
                                                <img src="{{ asset('assets/images/img1.png') }}" 
                                                alt="Rainbow Mountain">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">CUSCO</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3><a href="#">Rainbow Mountain</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="{{ asset('assets/images/img2.png') }}" 
                                                alt="Sacred Valley">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">CUSCO</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="#">Sacred Valley</a>
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
                                                <img src="{{ asset('assets/images/img3.png') }}" 
                                                alt="Maras">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">CUSCO</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="#">Maras</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="{{ asset('assets/images/img4.png') }}" 
                                                alt="City Tour">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">CUSCO</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="#">City Tour</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap text-center">
                            <a href="#" class="button-primary">MORE PLACES</a>
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
                            style="background-image: url({{ asset('assets/images/img8.png') }});"></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="callback-inner">
                                <div class="section-heading section-heading-white">
                                    <h5 class="dash-style">OUR WAY</h5>
                                    <h2>MORE THAN PLACES. <br>ALL ABOUT PEOPLE.</h2>
                                    <p>We connect you with people, culture, and unforgettable 
                                        moments. Travel isn’t just about seeing, it’s about feeling 
                                        and truly experiencing every step.
                                    </p>
                                </div>
                                <div class="callback-counter-wrap">
                                    <div class="counter-item">
                                        <div class="counter-icon">
                                            <img src="{{ asset('assets/images/icono-01.png') }}" 
                                             alt="Authentic Connections">
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter-text">
                                                Authentic <br> Connections
                                            </span>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="counter-icon">
                                            <img src="{{ asset('assets/images/icono-02.png') }}" 
                                            alt="Unforgettable Experiences">
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter-text">
                                                Unforgettable <br> Experiences
                                            </span>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="counter-icon">
                                            <img src="{{ asset('assets/images/icono-03.png') }}" 
                                            alt="Personalized Travel">
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter-text">
                                                Personalized <br> Travel
                                            </span>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="counter-icon">
                                            <img src="{{ asset('assets/images/icono-04.png') }}" 
                                            alt="Responsible Tourism">
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter-text">
                                                Responsible <br> Tourism
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="support-area">
                                    <div class="support-icon">
                                        <img src="{{ asset('assets/images/icono-05.png') }}" 
                                        alt="Contact us for further Information">
                                    </div>
                                    <div class="support-content">
                                        <h4>Contact us for further Information</h4>
                                        <h3>
                                            <a href="#">+51 959 164 739</a>
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
            <section class="best-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="section-heading">
                                <h5 class="dash-style">OUR GALLERY</h5>
                                <h2>BEST TRAVELER’S PHOTOS</h2>
                                <p>Every photo is a real moment from our journeys, 
                                    captured by those who make them possible. 
                                    Authentic, close, and full of Peru’s magic.</p>
                            </div>
                            <figure class="gallery-img">
                                <img src="{{ asset('assets/images/img12.jpg') }}" 
                                alt="Best Traveler’s Photos">
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <figure class="gallery-img">
                                        <img src="{{ asset('assets/images/img13.jpg') }}" 
                                        alt="Best Traveler’s Photos">
                                    </figure>
                                </div>
                                <div class="col-sm-6">
                                    <figure class="gallery-img">
                                        <img src="{{ asset('assets/images/img14.jpg') }}" 
                                        alt="Best Traveler’s Photos">
                                    </figure>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <figure class="gallery-img">
                                        <img src="{{ asset('assets/images/img15.jpg') }}" 
                                        alt="Best Traveler’s Photos">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- best html end -->
            <!-- Home testimonial section html start -->
            <div class="testimonial-section" 
            style="background-image: url({{ asset('assets/images/img23.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="testimonial-inner testimonial-slider">
                                <div class="testimonial-item text-center">
                                    <figure class="testimonial-img">
                                        <img src="{{ asset('assets/images/img20.jpg') }}" 
                                        alt="Testimonial">
                                    </figure>
                                    <div class="testimonial-content">
                                        <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis
                                            fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute
                                            facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!?
                                            Corporis condi mentum acpri! "</p>
                                        <cite>
                                            Johny English
                                            <span class="company">Travel Agent</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonial-item text-center">
                                    <figure class="testimonial-img">
                                        <img src="{{ asset('assets/images/img21.jpg') }}" 
                                        alt="Testimonial">
                                    </figure>
                                    <div class="testimonial-content">
                                        <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis
                                            fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute
                                            facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!?
                                            Corporis condi mentum acpri! "</p>
                                        <cite>
                                            William Housten
                                            <span class="company">Travel Agent</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonial-item text-center">
                                    <figure class="testimonial-img">
                                        <img src="{{ asset('assets/images/img22.jpg') }}" 
                                        alt="Testimonial">
                                    </figure>
                                    <div class="testimonial-content">
                                        <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis
                                            fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute
                                            facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!?
                                            Corporis condi mentum acpri! "</p>
                                        <cite>
                                            Alison Wright
                                            <span class="company">Travel Guide</span>
                                        </cite>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial html end -->
            <!-- Home contact details section html start -->
            <section class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact-img" 
                            style="background-image: url({{ asset('assets/images/img24.png') }});">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="contact-details-wrap">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="contact-details">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-phone-alt mr-2"></i>
                                                        +51 959 164 739
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-envelope mr-2"></i>
                                                        perupeoplevacations.vip@gmail.com
                                                    </a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                                    Calle Mariano Castro 364, San Sebastián, Cusco - Perú
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-btn-wrap">
                                <h3>LEAVE US A MESSAGE!</h3>
                                <a href="#" class="button-white">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  contact details html end -->
        </main>
        @include('layouts.footer')
        <!-- footer html end -->
        
        
        <!-- header html end -->
    </div>
</div>
@endsection
