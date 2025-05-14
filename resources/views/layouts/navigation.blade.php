<header id="masthead" class="site-header header-primary">
            <!-- header html start -->
            <div class="top-header"></div>
            <div class="bottom-header">
                <div class="container d-flex justify-content-between align-items-center">
                    <div class="site-identity">
                        <h1 class="site-title">
                            <a href="{{ route('pages.index') }}">
                                <img class="white-logo" src="{{ asset('assets/images/ppv-logo-05.png') }}" alt="logo">
                                <img class="black-logo" src="{{ asset('assets/images/ppv-logo-black-06.png') }}" alt="logo">
                            </a>
                        </h1>
                    </div>
                    <div class="main-navigation d-none d-lg-block">
                        <nav id="navigation" class="navigation">
                            <ul>
                                <li class="menu-item @if(Route::currentRouteName() == 'pages.index') current-menu-item @endif ">
                                    <a href="{{ route('pages.index') }}" >Home</a>
                                </li>
                                <li class="menu-item @if(Route::currentRouteName() == 'pages.CraftedForYou') current-menu-item @endif">
                                    <a href="{{ route('pages.CraftedForYou') }}">Crafted for You</a>
                                </li>
                                <li class="menu-item @if(Route::currentRouteName() == 'pages.experience') current-menu-item @endif">
                                    <a href="{{ route('pages.experience') }}">Experiences</a>
                                </li>
                                <li class="menu-item @if(Route::currentRouteName() == 'pages.highlights') current-menu-item @endif">
                                    <a href="{{ route('pages.highlights') }}">Highlights</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-btn">
                        <a href="{{ route('pages.contact') }}" class="button-primary">Start your Journey</a>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-container"></div>
        </header>