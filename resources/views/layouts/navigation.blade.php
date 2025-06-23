<header id="masthead" class="site-header header-primary">
            <!-- header html start -->
            <div class="top-header"></div>
            <div class="bottom-header">
                <div class="container d-flex justify-content-between align-items-center">
                    <div class="site-identity">
                        <h1 class="site-title">
                            <a href="{{ route('pages.index', ['locale' => App::getLocale()]) }}">
                                <img class="white-logo" src="{{ asset('assets/images/ppv-logo-05.png') }}" alt="logo">
                                <img class="black-logo" src="{{ asset('assets/images/ppv-logo-black-06.png') }}" alt="logo">
                            </a>
                        </h1>
                    </div>
                    <div class="main-navigation d-none d-lg-block">
                        <nav id="navigation" class="navigation">
                            <ul>
                                <li class="menu-item @if(Route::currentRouteName() == 'pages.index') current-menu-item @endif ">
                                    <a href="{{ route('pages.index', ['locale' => App::getLocale()]) }}" >{{ __('site.nav.home') }}</a>
                                </li>
                                <li class="menu-item @if(Route::currentRouteName() == 'pages.craftedforyou') current-menu-item @endif">
                                    <a href="{{ route('pages.craftedforyou', ['locale' => App::getLocale()]) }}">{{ __('site.nav.crafted_for_you') }}</a>
                                </li>
                                <li class="menu-item @if(Route::currentRouteName() == 'pages.experience') current-menu-item @endif">
                                    <a href="{{ route('pages.experience', ['locale' => App::getLocale()]) }}">{{ __('site.nav.experiences') }}</a>
                                </li>
                                <li class="menu-item @if(Route::currentRouteName() == 'pages.highlights') current-menu-item @endif">
                                    <a href="{{ route('pages.highlights', ['locale' => App::getLocale()]) }}">{{ __('site.nav.highlights') }}</a>
                                </li>
                                <li class="menu-item @if(Route::currentRouteName() == 'pages.faq') current-menu-item @endif">
                                    <a href="{{ route('pages.faq', ['locale' => App::getLocale()]) }}">{{ __('site.faq') }}</a>
                                </li>
                                <li class="menu-item">
                                    @php
                                        $currentLocale = App::getLocale();
                                        $otherLocale = ($currentLocale == 'es') ? 'en' : 'es';
                                        $otherLocaleName = strtoupper($otherLocale);
                                    @endphp
                                    <a href="{{ route('lang.change', $otherLocale) }}" >
                                        {{ $otherLocaleName }}
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-actions d-flex align-items-center">
                        
                        <div class="header-btn">
                            <a href="{{ route('pages.contact', ['locale' => App::getLocale()]) }}" class="button-primary">{{ __('site.nav.start_journey') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-container"></div>
        </header>