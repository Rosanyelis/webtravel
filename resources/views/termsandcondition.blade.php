@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url({{ asset('assets/images/terms.png') }});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{ __('site.terms.title') }}</h1>
                    </div>
                </div>
            </div>
            <div class="inner-shape"></div>
        </section>
        <!-- Inner Banner html end-->

        <!-- Home activity section html start -->
        <section class="activity-section">
            <div class="container">
                <div class="section-heading">
                    <div class="row">
                        <div class="col-lg-12">
                            <blockquote>
                                <p dir="ltr">{{ __('site.terms.intro') }}</p>
                            </blockquote>
                        </div>
                        <div class="col-lg-12">
                            <h3>{{ __('site.terms.general_title') }}</h3>
                            <ul>
                                <li><strong>{{ __('site.terms.insurance_title') }}</strong> {{ __('site.terms.insurance_content') }}</li>
                                <li><strong>{{ __('site.terms.responsibility_title') }}</strong> {{ __('site.terms.responsibility_content') }}</li>
                                <li><strong>{{ __('site.terms.changes_title') }}</strong> {{ __('site.terms.changes_content') }}</li>
                                <li><strong>{{ __('site.terms.intellectual_title') }}</strong> {{ __('site.terms.intellectual_content') }}</li>
                            </ul>

                            <h3>{{ __('site.terms.payment_title') }}</h3>

                            <h4>{{ __('site.terms.payments_title') }}</h4>

                            <p>{{ __('site.terms.payments_content') }}</p>

                        </div>
                        <div class="col-lg-12">
                            <table class="table table-striped table-borderless table-responsive table-light mt-4">
                                <thead>
                                    <tr>
                                        <th style="width: 33.3333%;" class="text-center text-white">{{ __('site.terms.table_title') }}</th>
                                        <th style="width: 33.3333%;" class="text-center text-white">{{ __('site.terms.table_deposit') }}</th>
                                        <th style="width: 33.3333%;" class="text-center text-white">{{ __('site.terms.table_balance') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ __('site.terms.solo_journeys') }}</td>
                                        <td>{{ __('site.terms.solo_deposit') }}</td>
                                        <td>{{ __('site.terms.solo_balance') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('site.terms.fits') }}</td>
                                        <td>{{ __('site.terms.fits_deposit') }}</td>
                                        <td>{{ __('site.terms.fits_balance') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('site.terms.small_groups') }}</td>
                                        <td>{{ __('site.terms.small_deposit') }}</td>
                                        <td>{{ __('site.terms.small_balance') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('site.terms.group_9') }}</td>
                                        <td>{{ __('site.terms.group_9_deposit') }}</td>
                                        <td>{{ __('site.terms.group_9_balance') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('site.terms.treks') }}</td>
                                        <td>{{ __('site.terms.treks_deposit') }}</td>
                                        <td>{{ __('site.terms.treks_balance') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12">
                            <p><em>{{ __('site.terms.important_note') }}</em></p>
                        </div>
                        <div class="col-lg-12">
                            <h4>{{ __('site.terms.cancellation_title') }}</h4>
                            <p>{{ __('site.terms.cancellation_content') }}</p>
                        </div>
                        <div class="col-lg-12">
                            <h4>{{ __('site.terms.important_changes_title') }}</h4>
                            <p>{{ __('site.terms.important_changes_content') }}</p>
                        </div>
                        <div class="col-lg-12">
                            <table class="table table-striped table-borderless table-responsive table-light">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;" class="text-center text-white">{{ __('site.terms.table_departure') }}</th>
                                        <th style="width: 25%;" class="text-center text-white">{{ __('site.terms.table_over_60') }}</th>
                                        <th style="width: 25%;" class="text-center text-white">{{ __('site.terms.table_59_30') }}</th>
                                        <th style="width: 25%;" class="text-center text-white">{{ __('site.terms.table_29_0') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{ __('site.terms.solo_journeys') }}</td>
                                        <td class="text-center">{{ __('site.terms.refundable') }}</td>
                                        <td class="text-center">{{ __('site.terms.fifty_percent') }}</td>
                                        <td class="text-center">{{ __('site.terms.non_refundable') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ __('site.terms.fits') }}</td>
                                        <td class="text-center">{{ __('site.terms.refundable') }}</td>
                                        <td class="text-center">{{ __('site.terms.fifty_percent') }}</td>
                                        <td class="text-center">{{ __('site.terms.non_refundable') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('site.terms.small_groups') }}</td>
                                        <td class="text-center">{{ __('site.terms.refundable') }}</td>
                                        <td class="text-center">{{ __('site.terms.fifty_percent') }}</td>
                                        <td class="text-center">{{ __('site.terms.non_refundable') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('site.terms.group_9') }}</td>
                                        <td class="text-center">{{ __('site.terms.refundable') }}</td>
                                        <td class="text-center">{{ __('site.terms.fifty_percent') }}</td>
                                        <td class="text-center">{{ __('site.terms.non_refundable') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('site.terms.treks') }}</td>
                                        <td class="text-center">{{ __('site.terms.refundable') }}</td>
                                        <td class="text-center">{{ __('site.terms.fifty_percent') }}</td>
                                        <td class="text-center">{{ __('site.terms.non_refundable') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12">
                            <p dir="ltr"><strong>{{ __('site.terms.notes_title') }}</strong></p>
                            <ol>
                                <li>{{ __('site.terms.note1') }}</li>
                                <li>{{ __('site.terms.note2') }}</li>
                            </ol>
                            <p dir="ltr">{{ __('site.terms.commitment') }}</p>
                            <p dir="ltr">{{ __('site.terms.changes_notice') }}</p>
                            <p dir="ltr">{{ __('site.terms.thank_you') }}</p>
                        </div>
                        <div class="col-lg-12">
                            <blockquote>
                                <p dir="ltr"><strong>{{ __('site.terms.last_updated') }}</strong></p>
                            </blockquote>
                        </div>
                        
                        
                    </div>
                </div>

            </div>
        </section>
        <!-- activity html end -->

      
    </main>
    @include('layouts.footer')

    <!-- header html end -->
</div>
@endsection
