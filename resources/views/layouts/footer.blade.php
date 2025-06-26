<footer id="colophon" class="site-footer footer-primary">
            <div class="top-footer">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <aside class="widget widget_text">
                                
                                <div class="award-img">
                                    <a href="{{ route('pages.index', ['locale' => App::getLocale()]) }}">
                                        <img src="{{ asset('assets/images/ppv-logo-05.png') }}" alt="Perú People Vacations">
                                    </a>
                                </div>
                              
                                <div class="textwidget widget-text mt-2" style="font-size: 13px; line-height: 1.7;">
                                    {{ __('site.footer.description') }}
                                </div>
                                <div class="textwidget widget-text mt-2" style="font-size: 13px; line-height: 1.7;">
                                    <strong>{{ __('site.footer.business_name') }}:</strong> {{ __('site.footer.business_name') }} <br>
                                    <strong>{{ __('site.footer.company_name') }}:</strong> {{ __('site.footer.company_name') }} <br>
                                    <strong>RUC:</strong> {{ __('site.footer.ruc') }} <br>
                                    <strong>{{ __('site.contact.location_title') }}:</strong> {{ __('site.footer.address') }} <br>
                                    <strong>{{ __('site.footer.city') }}:</strong> {{ __('site.footer.city') }}
                                </div>
                            </aside>
                            <div class="d-flex justify-content-between mt-2 mb-5 text-center">
                                <a href="https://fb.me/perupeoplevacations" target="_blank" class="m-0 p-0"><i class="fab fa-facebook text-white fa-2x"></i></a>
                                <a href="https://instagram.com/perupeoplevacations" target="_blank" class="m-0 p-0"><i class="fab fa-instagram text-white fa-2x"></i></a>
                                <a href="https://wa.me/+51959164739" target="_blank" class="m-0 p-0"><i class="fab fa-whatsapp text-white fa-2x"></i></a>
                                <a href="mailto:info@perupeoplevacations.com" target="_blank"><i class="fas fa-envelope text-white fa-2x"></i></a>
                                <a href="tel:+51959164739" target="_blank" class="m-0 p-0"><i class="fas fa-phone-alt text-white fa-2x"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <aside class="widget widget_text">
                                <h3 class="widget-title">{{ __('site.footer.links_title') }}</h3>
                                <div class="textwidget widget-text">
                                    <ul>
                                        <li>
                                            <a href="{{ route('pages.index', ['locale' => App::getLocale()]) }}">
                                                {{ __('site.nav.home') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.craftedforyou', ['locale' => App::getLocale()]) }}">
                                                {{ __('site.nav.crafted_for_you') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.experience', ['locale' => App::getLocale()]) }}">
                                                {{ __('site.nav.experiences') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.highlights', ['locale' => App::getLocale()]) }}">
                                                {{ __('site.nav.highlights') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.contact', ['locale' => App::getLocale()]) }}">
                                                {{ __('site.nav.contact_us') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <aside class="widget widget_text">
                                <h3 class="widget-title">{{ __('site.footer.information_title') }}</h3>
                                <div class="textwidget widget-text">
                                    <ul>
                                        <li>
                                            <a href="{{ route('pages.policy', ['locale' => App::getLocale()]) }}">
                                                {{ __('site.nav.privacy_policy') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.termandcondition', ['locale' => App::getLocale()]) }}">
                                                {{ __('site.nav.terms_and_conditions') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.faq', ['locale' => App::getLocale()]) }}">
                                                {{ __('site.nav.faq') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="buttom-footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 text-center">
                            <div class="footer-logo">
                                <div class="copy-right">{{ __('site.footer.copyright') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>