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
                        <h1 class="inner-title">TERMS AND CONDITIONS</h1>
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
                                <p dir="ltr">To kickstart our journey, it's essential for you to acquaint yourself with the following terms and conditions. Please read carefully before using our services. We are here to assist you with any questions or concerns you may have regarding these terms. Feel free to reach out to our customer support team for assistance: <a href="mailto:info@perupeoplevacations.com">info@perupeoplevacations.com</a></p>
                            </blockquote>
                        </div>
                        <div class="col-lg-12">
                            <h3>1. PERU PEOPLE VACATIONS GENERAL CONDITIONS:</h3>
                            <ul>
                                <li><strong>Travel Insurance:</strong> It is strongly recommended that users acquire suitable travel insurance to cover potential contingencies. Consider travel insurance is a valuable investment to protect both your health and your finances during your trips, giving you peace of mind and the ability to deal with unforeseen events more effectively.</li>
                                <li><strong>User Responsibility:</strong> It is the user's responsibility to provide accurate information when making reservations. We are not liable for losses, damages, or additional expenses arising from inaccurate information provided by the user.</li>
                                <li><strong>Itinerary Changes:</strong> We reserve the right to make changes to itineraries due to weather conditions, security issues, or other unforeseen events. Please note that force majeure encompasses unforeseeable circumstances beyond Peru People vacations’ control, including war, riot, terrorist activity, natural disasters, and more.&nbsp;</li>
                                <li><strong>Intellectual Property:</strong> All content on our website is protected by copyright and cannot be reproduced without our consent.</li>
                            </ul>

                            <h3>2. PAYMENT AND CANCELLATION POLICY:</h3>

                            <h4>2.1. PAYMENTS:</h4>

                            <p>Paying an upfront fee is necessary for the preparation of your travel arrangements. This covers not only the planning services but also various vendor expenses, including entrance fees, Inca Trail permits, and any costs associated with securing reservations for transportation (trains, flights, cruises) and specific accommodations and services. This advance payment ensures a smooth and timely arrangement of all the essential elements of your travel experience.</p>

                        </div>
                        <div class="col-lg-12">
                            <table class="table table-striped table-borderless table-responsive table-light mt-4">
                                <thead>
                                    <tr>
                                        <th style="width: 33.3333%;" class="text-center text-white">SERVICES BY GROUP TYPE</th>
                                        <th style="width: 33.3333%;" class="text-center text-white">DEPOSIT</th>
                                        <th style="width: 33.3333%;" class="text-center text-white">BALANCE DUE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SOLO JOURNEYS</td>
                                        <td>When booking, you'll need to make a non-refundable payment of 80% of the total cost per person.</td>
                                        <td>20% <br>Two months before the trip.</td>
                                    </tr>
                                    <tr>
                                        <td>FITS (COUPLES)</td>
                                        <td>When booking, you'll need to make a non-refundable payment of 60% of the total cost per person.</td>
                                        <td>40% <br>80 days before the trip.</td>
                                    </tr>
                                    <tr>
                                        <td>SMALL GROUPS (4+ rooms)(*)</td>
                                        <td>When booking, you'll need to make a non-refundable payment of 70% of the total cost per person.</td>
                                        <td>30% <br>Three months before the trip.</td>
                                    </tr>
                                    <tr>
                                        <td>FOR GROUP OF 9+(*)</td>
                                        <td>When booking, you'll need to make a non-refundable payment of 80% of the total cost per person.</td>
                                        <td>20% <br>Three months before the trip.</td>
                                    </tr>
                                    <tr>
                                        <td>TREKS &amp; HIKES(*)</td>
                                        <td>When booking, you'll need to make a non-refundable payment of 80% of the total cost per person.</td>
                                        <td>20% <br>Three months before the trip.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12">
                            <p><em>(*) It's crucial to provide the passenger list to initiate and proceed with bookings for sensitive services such as the Inca Trail, flights, and others. Additionally, please reconfirm this list with your Travel Director 60 days prior to departure. In case of any changes in passenger details, immediate review with your Travel Director is required, and it may be subject to additional charges.</em></p>
                        </div>
                        <div class="col-lg-12">
                            <h4>2.2. CANCELLATION POLICY AND IMPORTANT CHANGES.</h4>
                            <p>If you find yourself unable to join us, kindly let us know in advance. The total service fee will be lost in case of a no-show, and regrettably, canceling or withdrawing from the service won't allow for a refund. Your understanding is greatly appreciated, and it's important to communicate any changes ahead of time. Thank you!</p>
                        </div>
                        <div class="col-lg-12">
                            <h4>2.3. IMPORTANT CHANGES.</h4>
                            <p>If you find yourself unable to join us, kindly let us know in advance. The total service fee will be lost in case of a no-show, and regrettably, canceling or withdrawing from the service won't allow for a refund. Your understanding is greatly appreciated, and it's important to communicate any changes ahead of time. Thank you!</p>
                        </div>
                        <div class="col-lg-12">
                            <table class="table table-striped table-borderless table-responsive table-light">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;" class="text-center text-white">Before the departure date.</th>
                                        <th style="width: 25%;" class="text-center text-white">Over 60 days</th>
                                        <th style="width: 25%;" class="text-center text-white">59-30 days</th>
                                        <th style="width: 25%;" class="text-center text-white">29-0 days</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">SOLO JOURNEYS</td>
                                        <td class="text-center">Refundable, minus administrative fees and taxes from the deposited amount.</td>
                                        <td class="text-center">You'll get a 50% refund, but it's subject to supplier charges, administrative fees, and initial deposit taxes.</td>
                                        <td class="text-center">non-refundable</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">FITS (COUPLES)</td>
                                        <td class="text-center">Refundable, minus administrative fees and taxes from the deposited amount.</td>
                                        <td class="text-center">You'll get a 50% refund, but it's subject to supplier charges, administrative fees, and initial deposit taxes.</td>
                                        <td class="text-center">non-refundable</td>
                                    </tr>
                                    <tr>
                                        <td>SMALL GROUPS (4+ rooms)</td>
                                        <td class="text-center">Refundable, minus administrative fees and taxes from the deposited amount.</td>
                                        <td class="text-center">You'll get a 50% refund, but it's subject to supplier charges, administrative fees, and initial deposit taxes.</td>
                                        <td class="text-center">non-refundable</td>
                                    </tr>
                                    <tr>
                                        <td>FOR GROUP OF 9+</td>
                                        <td class="text-center">Refundable, minus administrative fees and taxes from the deposited amount.</td>
                                        <td class="text-center">You'll get a 50% refund, but it's subject to supplier charges, administrative fees, and initial deposit taxes.</td>
                                        <td class="text-center">non-refundable</td>
                                    </tr>
                                    <tr>
                                        <td>TREKS &amp; HIKES</td>
                                        <td class="text-center">Refundable, minus administrative fees and taxes from the deposited amount.</td>
                                        <td class="text-center">You'll get a 50% refund, but it's subject to supplier charges, administrative fees, and initial deposit taxes.</td>
                                        <td class="text-center">non-refundable</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12">
                            <p dir="ltr"><strong>Notes:</strong></p>
                            <ol>
                                <li>Keep in mind that Inca Trail reservations are non-refundable and non-transferable in case you need to cancel.</li>
                                <li>If some group members cancel before the trip, the cancellation policy will be applied according to the established timeframe. During the journey, if any member decides to cancel, no refunds will be issued for unused services or accommodation. Any changes within 30 days before the trip's start incur an administrative fee, which should be discussed with your travel director.</li>
                            </ol>
                            <p dir="ltr">We are committed to providing all the assistance you need to understand these terms and conditions. If you have any questions or concerns, feel free to contact us through our customer service. We are here to ensure you have the best possible experience when choosing Peru People Vacations for your journey.</p>
                            <p dir="ltr">These terms and conditions are subject to change without prior notice. By continuing to use our services, you accept the terms and conditions in effect at the time of booking.</p>
                            <p dir="ltr">Thank you for choosing Peru People Vacations for your trip! We hope you have an unforgettable experience!</p>
                        </div>
                        <div class="col-lg-12">
                            <blockquote>
                                <p dir="ltr"><strong>Last Updated:</strong> February 02, 2024</p>
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
