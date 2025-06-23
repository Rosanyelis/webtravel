@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.png);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Privacy Policy</h1>
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
                                <h5 class="dash-style">Privacy Policy</h5>
                                <h2>Privacy Policy</h2>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="section-disc">
                                    <ol>
                                        <li dir="ltr">PERU PEOPLE VACATIONS, hereinafter referred to as THE AGENCY, in accordance with the provisions of Law No. 29733 – Personal Data Protection Law and its Regulation, states the following:</li>
                                        <li dir="ltr">THE AGENCY, as the owner of the personal data banks under its responsibility, undertakes to maintain the utmost confidentiality and protection of personal data provided by users, suppliers, collaborators, visitors, strategic allies, and the general public.</li>
                                        <li dir="ltr">The personal data provided will be stored in THE AGENCY's data banks and will be processed, as appropriate, to carry out the purposes inherent to the organization's activities, such as:

                                            <ol>
                                                <li dir="ltr">Promotion of our services.</li>
                                                <li dir="ltr">Contactability to provide information requested by the user.</li>
                                                <li dir="ltr">Customer management.</li>
                                            </ol>
                                        </li>
                                        <li dir="ltr">The personal data is collected for the purposes previously stated and will not be used for any other purpose that has not been unequivocally established at the time of collection.</li>
                                        <li dir="ltr">The personal data provided will not be disclosed to third parties outside of THE AGENCY, unless it is a third party responsible for processing, as indicated in paragraph 10 of Article 2 of the Law, under conditions of information security and confidentiality, or when, by mandate of the Law or court resolution, THE AGENCY is obliged to communicate such information to public entities, judicial authorities, and/or law enforcement, and other authorized third parties.</li>
                                        <li dir="ltr">In compliance with current regulations, THE AGENCY has adopted appropriate technical measures of security and confidentiality to prevent alteration, loss, unauthorized processing, or access that may affect the integrity, confidentiality, and availability of personal data.</li>
                                        <li dir="ltr">In accordance with the Law, the owner of the personal data may exercise their rights of access, rectification, cancellation, and opposition by sending their request via email to the address <a href="mailto:info@perupeoplevacations.com">info@perupeoplevacations.com</a>.</li>
                                    </ol>
                                    <p class="text-right"><strong>THE AGENCY</strong></p>
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
