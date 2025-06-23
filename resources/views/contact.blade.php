@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url({{ asset('assets/images/contact.png') }});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{ __('site.contact.title') }}</h1>
                    </div>
                </div>
            </div>
            <div class="inner-shape"></div>
        </section>
        <!-- Inner Banner html end-->
        <div class="contact-page-section">
            <div class="contact-form-inner">
                <div class="container">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="contact-from-wrap">
                            <div class="section-heading">
                                <h5 class="dash-style">{{ __('site.contact.dash') }}</h5>
                                <h2>{{ __('site.contact.subtitle') }}</h2>
                                <p>{{ __('site.contact.description') }}</p>
                            </div>
                            <form class="contact-from">
                                <p><input type="text" name="name" placeholder="{{ __('site.contact.form.name_placeholder') }}"></p>
                                <p><input type="email" name="email" placeholder="{{ __('site.contact.form.email_placeholder') }}"></p>
                                <p><textarea rows="8" placeholder="{{ __('site.contact.form.message_placeholder') }}"></textarea></p>
                                <p><input type="submit" name="submit" value="{{ __('site.contact.form.submit') }}"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="contact-detail-wrap ">
                            <div class="details-list ">
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </span>
                                        <div class="details-content">
                                            <h4>{{ __('site.contact.phone_title') }}</h4>
                                            <span>{{ __('site.home.contact.phone') }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <div class="details-content">
                                            <h4>{{ __('site.contact.email_title') }}</h4>
                                            <span>{{ __('site.home.contact.email') }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                        <div class="details-content">
                                            <h4>{{ __('site.contact.location_title') }}</h4>
                                            <span>{{ __('site.home.contact.address') }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contct-social social-links">
                                <h3>{{ __('site.contact.social_title') }}</h3>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="map-section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317838.95217734354!2d-0.27362819527326965!3d51.51107287614788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c7c7eb9be3%3A0x3918653583725b56!2sRiverside%20Building%2C%20County%20Hall%2C%20Westminster%20Bridge%20Rd%2C%20London%20SE1%207JA%2C%20UK!5e0!3m2!1sen!2snp!4v1632135241093!5m2!1sen!2snp" height="400" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </main>

    @include('layouts.footer')
    <!-- header html end -->
</div>
@endsection