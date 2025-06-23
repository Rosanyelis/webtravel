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
                            style="background-image: url('assets/images/slider-banner-1.jpg');"></div>
                        <div class="banner-content-wrap">
                            <div class="container">
                                <div class="banner-content text-center">
                                    <h2 class="banner-title">{{ __('site.home.title') }}</h2>
                                    <p>{{ __('site.home.description') }}</p>
                                    <a href="#" class="button-primary">{{ __('site.home.button') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                        <div class="inner-shape"></div>
                    </div>
                    <div class="home-banner-items">
                        <div class="banner-inner-wrap"
                            style="background-image: url('assets/images/slider-banner-2.jpg');"></div>
                        <div class="banner-content-wrap">
                            <div class="container">
                                <div class="banner-content text-center">
                                    <h2 class="banner-title">{{ __('site.home.slider2.title') }}</h2>
                                    <p>{{ __('site.home.slider2.description') }}</p>
                                    <a href="#" class="button-primary">{{ __('site.home.slider2.button') }}</a>
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
                                                <img src="{{ asset('assets/images/img1.png') }}" 
                                                alt="{{ __('site.home.destinations.rainbow_mountain') }}">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">{{ __('site.home.destinations.cusco') }}</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3><a href="#">{{ __('site.home.destinations.rainbow_mountain') }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="{{ asset('assets/images/img2.png') }}" 
                                                alt="{{ __('site.home.destinations.sacred_valley') }}">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">{{ __('site.home.destinations.cusco') }}</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="#">{{ __('site.home.destinations.sacred_valley') }}</a>
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
                                                alt="{{ __('site.home.destinations.maras') }}">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">{{ __('site.home.destinations.cusco') }}</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="#">{{ __('site.home.destinations.maras') }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="{{ asset('assets/images/img4.png') }}" 
                                                alt="{{ __('site.home.destinations.city_tour') }}">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">{{ __('site.home.destinations.cusco') }}</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="#">{{ __('site.home.destinations.city_tour') }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap text-center">
                            <a href="#" class="button-primary">{{ __('site.home.top_picks.more_button') }}</a>
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
                                            <a href="#">{{ __('site.home.support.phone') }}</a>
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
                                <h5 class="dash-style">{{ __('site.home.gallery.dash') }}</h5>
                                <h2>{{ __('site.home.gallery.title') }}</h2>
                                <p>{{ __('site.home.gallery.description') }}</p>
                            </div>
                            <figure class="gallery-img">
                                <img src="{{ asset('assets/images/img12.jpg') }}" 
                                alt="{{ __('site.home.gallery.title') }}">
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <figure class="gallery-img">
                                        <img src="{{ asset('assets/images/img13.jpg') }}" 
                                        alt="{{ __('site.home.gallery.title') }}">
                                    </figure>
                                </div>
                                <div class="col-sm-6">
                                    <figure class="gallery-img">
                                        <img src="{{ asset('assets/images/img14.jpg') }}" 
                                        alt="{{ __('site.home.gallery.title') }}">
                                    </figure>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <figure class="gallery-img">
                                        <img src="{{ asset('assets/images/img15.jpg') }}" 
                                        alt="{{ __('site.home.gallery.title') }}">
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
                                        <p>" Todo fue espectacular. El tour está perfectamente coordinado y el guía Darío en Machu Pichu fue 
                                            particular genial, conocía muy bien todo, cuido los tiempos, nos dio muy buenos consejos, muy paciente y
                                             nos tomó unas fotos increíbles en varios puntos, parecía fotógrafo profesional, fue realmente muy amable y 
                                             se nota que tiene demasiada experiencia, el mejor guía!!"</p>
                                        <cite>
                                            Carolina S.
                                            <a href="https://www.tripadvisor.com.ve/ShowUserReviews-g294314-d17409231-r1005662108-Machupicchu_Inka_Trek-Cusco_Cusco_Region.html" 
                                            target="_blank" class="company">Tripadvisor</a>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonial-item text-center">
                                    <figure class="testimonial-img">
                                        <img src="{{ asset('assets/images/img21.jpg') }}" 
                                        alt="Testimonial">
                                    </figure>
                                    <div class="testimonial-content">
                                        <p>"¡Uno de los tours profesionales que hemos hecho!

                                            José, nuestro guía, fue fenomenal - proporcionó el equilibrio perfecto de contexto histórico de las ruinas y permitió un tiempo más que suficiente para explorar los sitios visitados. Era muy amable y un guía apasionado. Nuestro piloto Richard también fue fantástico.

                                            Nos recogieron directamente en el hotel, y debido a que éramos la única reserva para ese espacio, nos proporcionaron un tour personal para solo nosotros dos. Realmente apreciamos la personalización adicional y la atención!

                                            Gracias José y Richard! "
                                        </p>
                                        <cite>
                                            Rochelle R.
                                            <a href="https://www.tripadvisor.com.ve/ShowUserReviews-g294314-d14135789-r1012623174-Andes_Peru_Tour_Adventure-Cusco_Cusco_Region.html" 
                                            target="_blank" class="company">Tripadvisor</a>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonial-item text-center">
                                <figure class="testimonial-img">
                                        <img src="{{ asset('assets/images/img22.jpg') }}" 
                                        alt="Testimonial">
                                    </figure>
                                    <div class="testimonial-content">
                                        <p>" Muy bonito tour, todo es muy interesante, el guía estuvo siempre atento a nuestras preguntas, 
                                            se ofreció a sacarnos fotos e hizo todo lo posible por cumplir con los horarios, 
                                            debido a que el tránsito en Ollaytantambo estaba atascado, por las fiestas. 
                                            Resolvió y logramos llegar a todos los puntos mencionados en el itinerario. 
                                            Los lugares visitados, sin duda, valen la pena."</p>
                                        <cite>
                                            Alejandro Yañez
                                            <a href="https://www.tripadvisor.com.ve/ShowUserReviews-g294314-d19781844-r1013331361-Mega_Expeditions-Cusco_Cusco_Region.html" 
                                            target="_blank" class="company">Tripadvisor</a>
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
                                                        {{ __('site.home.contact.phone') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-envelope mr-2"></i>
                                                        {{ __('site.home.contact.email') }}
                                                    </a>
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
                                <a href="#" class="button-white">{{ __('site.home.contact.learn_more') }}</a>
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
