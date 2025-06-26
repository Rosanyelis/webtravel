@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url('{{ asset('assets/images/colombia.jpg') }}');">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{ __('site.country.colombia.title') }}</h1>
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
                        <div class="row align-items-end">
                            
                            <div class="col-lg-12">
                                <div class="section-disc">
                                    <h2 class="text-center mb-4">{{ __('site.country.colombia.info_title') }}</h2>
                                    <p>{{ __('site.country.colombia.intro') }}</p>

                                    <p>{{ __('site.country.colombia.description') }}</p>

                                    <p>{{ __('site.country.colombia.conclusion') }}</p>

                                    <h3>{{ __('site.country.colombia.overview_title') }}</h3>

                                    <blockquote>

                                        <p>{{ __('site.country.colombia.overview_quote') }}</p>
                                    </blockquote>

                                    <ul>
                                        <li>

                                            <h4>Cartagena Colonial Charm: Explore the Walled City</h4>Discover the enchanting colonial architecture of Cartagena's historic center, a UNESCO World Heritage Site. Walk through colorful streets, visit ancient churches, and experience the vibrant culture of this Caribbean gem.</li>
                                        <li>

                                            <h4>Coffee Region Adventure: Journey Through the Coffee Triangle</h4>Explore Colombia's famous Coffee Triangle, where you can learn about coffee production, visit traditional fincas, and enjoy the beautiful landscapes of the Andean mountains.</li>
                                        <li>

                                            <h4>Amazon Rainforest Expedition: Discover Colombia's Wild Side</h4>Venture into the Colombian Amazon and experience one of the most biodiverse regions on Earth. Spot exotic wildlife, learn about indigenous cultures, and explore the pristine rainforest.</li>
                                        <li>

                                            <h4>Bogotá Cultural Immersion: Experience Colombia's Capital</h4>Discover the rich cultural heritage of Bogotá, from the historic La Candelaria neighborhood to world-class museums and vibrant street art. Experience the city's dynamic food scene and nightlife.</li>
                                        <li>

                                            <h4>Caribbean Coast Discovery: Relax on Pristine Beaches</h4>Unwind on Colombia's beautiful Caribbean coast, from the pristine beaches of Tayrona National Park to the vibrant city of Santa Marta. Enjoy water sports, snorkeling, and beach relaxation.</li>
                                    </ul>

                                    <h3>Discover Colombia's Cultural Treasures: Top Museums to Explore</h3>

                                    <p>Colombia hosts a variety of museums that provide visitors with the opportunity to delve into the country's rich history, culture, and natural heritage. Some of the best museums in Colombia include:</p>

                                    <ul>
                                        <li aria-level="1">

                                            <p><strong>Gold Museum (Bogotá):</strong> This world-renowned museum houses the largest collection of pre-Columbian gold artifacts in the world, showcasing the artistic and cultural achievements of Colombia's indigenous peoples.</p>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>National Museum (Bogotá):</strong> Colombia's oldest museum, featuring exhibits on the country's history, from pre-Columbian times to the present day.</p>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Botero Museum (Bogotá):</strong> Dedicated to the works of Colombia's most famous artist, Fernando Botero, this museum showcases his distinctive style and other international artists.</p>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Museum of Modern Art (Bogotá):</strong> Features contemporary Colombian and international art, with rotating exhibitions and a focus on emerging artists.</p>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Emerald Museum (Bogotá):</strong> Learn about Colombia's famous emerald industry and see some of the world's finest emeralds on display.</p>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Museum of Caribbean Culture (Cartagena):</strong> Explores the rich cultural heritage of Colombia's Caribbean region, including African, indigenous, and European influences.</p>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Coffee Museum (Armenia):</strong> Located in the heart of the Coffee Triangle, this museum tells the story of Colombia's coffee industry and its cultural significance.</p>
                                        </li>
                                    </ul>

                                    <p>These museums offer a fascinating look into Colombia's cultural, historical, and natural diversity, making each visit an educational and enriching experience.</p>

                                    <h3>The Finest Food Experiences in Colombia</h3>

                                    <p>Colombia boasts a rich variety of delicious dishes that reflect its cultural and geographical diversity. Some of the best foods in Colombia include:</p>

                                    <ul>
                                        <li>Bandeja Paisa: Colombia's national dish, featuring beans, rice, ground beef, chorizo, plantains, avocado, and a fried egg.</li>
                                        <li>Arepas: Corn cakes that are a staple of Colombian cuisine, served with various fillings or as a side dish.</li>
                                        <li>Sancocho: A hearty soup made with meat, vegetables, and plantains, popular throughout Colombia.</li>
                                        <li>Empanadas: Savory pastries filled with meat, potatoes, and spices, a popular street food.</li>
                                        <li>Ajiaco: A traditional soup from Bogotá made with chicken, potatoes, corn, and herbs.</li>
                                        <li>Lechona: A whole roasted pig stuffed with rice and peas, a specialty from the Tolima region.</li>
                                        <li>Chicharron: Crispy fried pork belly, often served with arepas and lime.</li>
                                        <li>Buñuelos: Sweet fried dough balls, especially popular during Christmas.</li>
                                        <li>Natilla: A traditional dessert made with milk, sugar, and cinnamon, similar to custard.</li>
                                        <li>Coffee: Colombia is famous for its high-quality coffee, and a cup of freshly brewed Colombian coffee is a must-try.</li>
                                    </ul>

                                    <p>These culinary delights offer a taste of Colombia's rich gastronomic heritage and are a must-try for any visitor.</p>

                                    <h3>Essentials for Your Colombian Adventure: Packing Tips and Must-Haves</h3>

                                    <h4>Clothing:</h4>

                                    <ul>
                                        <li>Light and comfortable clothing: For warm weather in most regions of Colombia.</li>
                                        <li>Warm clothing: For cooler temperatures in Bogotá and the Andean highlands.</li>
                                        <li>Rain gear: Essential for the rainy season and Amazon visits.</li>
                                        <li>Swimming attire: For beach visits and hot springs.</li>
                                    </ul>

                                    <h4>Footwear:</h4>

                                    <ul>
                                        <li>Comfortable walking shoes: For exploring cities and tourist attractions.</li>
                                        <li>Hiking boots: For trekking in the mountains and national parks.</li>
                                        <li>Water-resistant shoes: For rainforest excursions.</li>
                                    </ul>

                                    <h4>Accessories:</h4>

                                    <ul>
                                        <li>Hat and sunscreen: To protect yourself from the sun, especially at high altitudes.</li>
                                        <li>Sunglasses: To protect your eyes from intense sunlight.</li>
                                        <li>Insect repellent: Essential for Amazon visits and coastal areas.</li>
                                    </ul>

                                    <h4>Luggage:</h4>

                                    <ul>
                                        <li>Small backpack: Perfect for day trips and carrying your essential belongings.</li>
                                        <li>Plug adapter: Colombia uses Type A and B electrical outlets with a voltage of 110V and a frequency of 60Hz.</li>
                                    </ul>

                                    <h4>Personal Hygiene Items:</h4>

                                    <ul>
                                        <li>Sunscreen and insect repellent: Important for all regions.</li>
                                        <li>Personal hygiene items and essential medications: Make sure to bring what you need.</li>
                                    </ul>

                                    <h4>Documents:</h4>

                                    <ul>
                                        <li>Passport and copies: Make sure to have your passport and copies of important documents.</li>
                                        <li>Credit/debit cards: Widely accepted, but be aware that some areas may have limited ATM availability.</li>
                                        <li>Travel insurance: Ensure you have comprehensive travel insurance coverage.</li>
                                    </ul>

                                    <h4>Others:</h4>

                                    <ul>
                                        <li>Camera and chargers: To capture unforgettable moments.</li>
                                        <li>Travel guide and maps: Can be helpful for independent exploration.</li>
                                        <li>Remember to check the weather forecast before packing and adjust your luggage according to the season and activities you plan to engage in. Enjoy your trip to Colombia!</li>
                                    </ul>
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
