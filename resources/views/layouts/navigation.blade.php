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
                                <li class="menu-item-has-children ">
                                    <a href="javascript:void(0)">{{ __('site.nav.destinations') }}</a>
                                    <ul>
                                        <li><a href="{{ route('pages.peru', ['locale' => App::getLocale()]) }}">{{ __('site.nav.peru') }}</a></li>
                                        <li><a href="{{ route('pages.colombia', ['locale' => App::getLocale()]) }}">{{ __('site.nav.colombia') }}</a></li>
                                        <li><a href="{{ route('pages.bolivia', ['locale' => App::getLocale()]) }}">{{ __('site.nav.bolivia') }}</a></li>
                                        <li><a href="{{ route('pages.ecuador', ['locale' => App::getLocale()]) }}">{{ __('site.nav.ecuador') }}</a></li>
                                        <li><a href="{{ route('pages.chile', ['locale' => App::getLocale()]) }}">{{ __('site.nav.chile') }}</a></li>
                                        <li><a href="{{ route('pages.brasil', ['locale' => App::getLocale()]) }}">{{ __('site.nav.brasil') }}</a></li>
                                        <li><a href="{{ route('pages.argentina', ['locale' => App::getLocale()]) }}">{{ __('site.nav.argentina') }}</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item @if(Route::currentRouteName() == 'pages.blog') current-menu-item @endif">
                                    <a href="{{ route('pages.blog', ['locale' => App::getLocale()]) }}">{{ __('site.nav.blog') }}</a>
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