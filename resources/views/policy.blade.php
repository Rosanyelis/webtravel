@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url({{ asset('assets/images/policy.png') }});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{ __('site.privacy.title') }}</h1>
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
                        <div class="row  align-items-end">
                            <div class="col-lg-12 text-center">
                                <h5 class="dash-style">{{ __('site.privacy.dash') }}</h5>
                                <h2>{{ __('site.privacy.title') }}</h2>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="section-disc">
                                    <ol>
                                        <li dir="ltr">{{ __('site.privacy.content') }}</li>
                                        <li dir="ltr">{{ __('site.privacy.confidentiality') }}</li>
                                        <li dir="ltr">{{ __('site.privacy.purposes') }}

                                            <ol>
                                                <li dir="ltr">{{ __('site.privacy.purpose1') }}</li>
                                                <li dir="ltr">{{ __('site.privacy.purpose2') }}</li>
                                                <li dir="ltr">{{ __('site.privacy.purpose3') }}</li>
                                            </ol>
                                        </li>
                                        <li dir="ltr">{{ __('site.privacy.no_other_purpose') }}</li>
                                        <li dir="ltr">{{ __('site.privacy.no_disclosure') }}</li>
                                        <li dir="ltr">{{ __('site.privacy.security') }}</li>
                                        <li dir="ltr">{{ __('site.privacy.rights') }}</li>
                                    </ol>
                                    <p class="text-right"><strong>{{ __('site.privacy.agency') }}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- about html end -->
    </main>
    @include('layouts.footer')

    <!-- header html end -->
</div>
@endsection
