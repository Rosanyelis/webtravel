@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url({{ asset('assets/images/contact.avif') }});">
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
                            <form class="contact-from" action="{{ route('contact.send', ['locale' => app()->getLocale()]) }}" method="POST">
                                @csrf
                                <p><input type="text" name="name" placeholder="{{ __('site.contact.form.name_placeholder') }}" required></p>
                                <p><input type="email" name="email" placeholder="{{ __('site.contact.form.email_placeholder') }}" required></p>
                                <p><textarea rows="8" name="message" placeholder="{{ __('site.contact.form.message_placeholder') }}" required></textarea></p>
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
                                    <li><a href="https://fb.me/perupeoplevacations" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="https://instagram.com/perupeoplevacations" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="https://wa.me/+51959164739" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                                    <li><a href="mailto:info@perupeoplevacations.com" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
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