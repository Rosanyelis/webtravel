@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url('{{ asset('assets/images/brasil.jpg') }}');">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{ __('site.country.brasil.title') }}</h1>
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
                                    <h2 class="text-center mb-4">{{ __('site.country.brasil.info_title') }}</h2>
                                    <p>{{ __('site.country.brasil.intro') }}</p>

                                    <p>{{ __('site.country.brasil.description') }}</p>

                                    <p>{{ __('site.country.brasil.conclusion') }}</p>

                                    <h3>{{ __('site.country.brasil.overview_title') }}</h3>

                                    <blockquote>

                                        <p>{{ __('site.country.brasil.overview_quote') }}</p>
                                    </blockquote>

                                    <ul>
                                        <li>

                                            <h4>Rio de Janeiro Adventure: Discover the Marvelous City</h4>Experience the vibrant energy of Rio de Janeiro, from the iconic Christ the Redeemer statue to the stunning beaches of Copacabana and Ipanema. Explore the historic neighborhoods, enjoy samba music, and take in breathtaking views from Sugarloaf Mountain.</li>
                                        <li>

                                            <h4>Amazon Rainforest Expedition: Explore the World's Largest Rainforest</h4>Venture into the heart of the Brazilian Amazon and discover one of the most biodiverse regions on Earth. Experience guided tours through the jungle, spot exotic wildlife, and learn about indigenous cultures and their sustainable way of life.</li>
                                        <li>

                                            <h4>Iguazu Falls Discovery: Witness Nature's Majesty</h4>Marvel at the spectacular Iguazu Falls, one of the most impressive natural wonders in the world. Walk along the catwalks for close-up views of the cascading waterfalls and experience the power of nature in this UNESCO World Heritage Site.</li>
                                        <li>

                                            <h4>Salvador Cultural Immersion: Experience Afro-Brazilian Heritage</h4>Discover the rich cultural heritage of Salvador, the capital of Bahia, where African, Portuguese, and indigenous influences blend together. Explore the historic Pelourinho district, enjoy traditional music and dance, and savor authentic Bahian cuisine.</li>
                                        <li>

                                            <h4>Pantanal Wildlife Safari: Encounter Brazil's Diverse Wildlife</h4>Embark on a wildlife safari in the Pantanal, the world's largest tropical wetland. Spot jaguars, capybaras, giant otters, and hundreds of bird species in their natural habitat, making it a paradise for nature lovers and photographers.</li>
                                    </ul>

                                    <h3>Discover Brazil's Cultural Treasures: Top Museums to Explore</h3>

                                    <p>Brazil hosts a variety of museums that provide visitors with the opportunity to delve into the country's rich history, culture, and natural heritage. Some of the best museums in Brazil include:</p>

                                    <ul>
                                        <li aria-level="1">

                                            <p><strong>Museum of Modern Art (Rio de Janeiro):</strong> Located in Flamengo Park, this museum features an impressive collection of Brazilian and international modern art, with a focus on contemporary works.</p>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>National Museum (Rio de Janeiro):</strong> This museum houses extensive collections of natural history, anthropology, and archaeology, including the famous Luzia fossil.</p>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Museum of Tomorrow (Rio de Janeiro):</strong> A cutting-edge science museum that explores sustainability, climate change, and the future of humanity through interactive exhibits.</p>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Pinacoteca do Estado (São Paulo):</strong> One of Brazil's most important art museums, featuring Brazilian art from the 19th century to contemporary works.</p>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Museum of Afro-Brazilian Culture (Salvador):</strong> This museum celebrates Brazil's African heritage through art, artifacts, and cultural exhibits.</p>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Oscar Niemeyer Museum (Curitiba):</strong> Designed by the famous architect, this museum showcases contemporary art and architecture in a stunning building.</p>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Museum of the Portuguese Language (São Paulo):</strong> An interactive museum dedicated to the Portuguese language and its evolution in Brazil.</p>
                                        </li>
                                    </ul>

                                    <p>These museums offer a fascinating look into Brazil's cultural, historical, and natural diversity, making each visit an educational and enriching experience.</p>

                                    <h3>The Finest Food Experiences in Brazil</h3>

                                    <p>Brazil boasts a rich variety of delicious dishes that reflect its cultural and geographical diversity. Some of the best foods in Brazil include:</p>

                                    <ul>
                                        <li>Feijoada: Brazil's national dish, a hearty black bean stew with various cuts of pork, served with rice, collard greens, and farofa.</li>
                                        <li>Churrasco: Brazilian barbecue featuring various cuts of meat grilled on skewers, served with chimichurri sauce.</li>
                                        <li>Moqueca: A traditional fish stew from Bahia, made with coconut milk, palm oil, and various spices.</li>
                                        <li>Pão de Queijo: Delicious cheese bread balls made with cassava flour and cheese, a popular snack throughout Brazil.</li>
                                        <li>Brigadeiro: Sweet chocolate truffles made with condensed milk, cocoa powder, and butter, rolled in chocolate sprinkles.</li>
                                        <li>Acarajé: Deep-fried black-eyed pea fritters filled with shrimp, a traditional dish from Bahia.</li>
                                        <li>Caipirinha: Brazil's national cocktail made with cachaça, lime, sugar, and ice.</li>
                                        <li>Vatapá: A creamy dish made with bread, shrimp, coconut milk, and palm oil, popular in the northeast.</li>
                                        <li>Caruru: A traditional dish made with okra, shrimp, and various spices, often served during religious festivals.</li>
                                        <li>Coffee: Brazil is the world's largest coffee producer, and Brazilian coffee is known for its smooth, mild flavor.</li>
                                    </ul>

                                    <p>These culinary delights offer a taste of Brazil's rich gastronomic heritage and are a must-try for any visitor.</p>

                                    <h3>Essentials for Your Brazilian Adventure: Packing Tips and Must-Haves</h3>

                                    <h4>Clothing:</h4>

                                    <ul>
                                        <li>Light and comfortable clothing: For warm and humid weather throughout most of Brazil.</li>
                                        <li>Swimming attire: Essential for Brazil's beautiful beaches and coastal areas.</li>
                                        <li>Light rain gear: For the rainy season in different regions.</li>
                                        <li>Comfortable walking shoes: For exploring cities and tourist attractions.</li>
                                    </ul>

                                    <h4>Footwear:</h4>

                                    <ul>
                                        <li>Comfortable walking shoes: For exploring cities and tourist attractions.</li>
                                        <li>Hiking boots: For trekking in national parks and the Amazon.</li>
                                        <li>Sandals: For beach visits and casual wear.</li>
                                    </ul>

                                    <h4>Accessories:</h4>

                                    <ul>
                                        <li>Hat and sunscreen: To protect yourself from the strong Brazilian sun.</li>
                                        <li>Sunglasses: To protect your eyes from intense sunlight.</li>
                                        <li>Insect repellent: Essential for Amazon visits and other tropical areas.</li>
                                    </ul>

                                    <h4>Luggage:</h4>

                                    <ul>
                                        <li>Small backpack: Perfect for day trips and carrying your essential belongings.</li>
                                        <li>Plug adapter: Brazil uses Type N electrical outlets with a voltage of 127V and a frequency of 60Hz.</li>
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
                                        <li>Remember to check the weather forecast before packing and adjust your luggage according to the season and activities you plan to engage in. Enjoy your trip to Brazil!</li>
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
