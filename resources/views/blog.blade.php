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
                            style="background-image: url('assets/images/slider-banner-1.avif');"></div>
                        <div class="banner-content-wrap">
                            <div class="container">
                                <div class="banner-content text-center">
                                    <h2 class="banner-title">En Construcción</h2>
                                    <p>Estamos trabajando en esta sección. Por favor, revisa más tarde.</p>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                        <div class="inner-shape"></div>
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
