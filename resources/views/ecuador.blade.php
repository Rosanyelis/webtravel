@extends('layouts.app')
@section('title', '')
@section('content')
@include('layouts.loader')
<div id="page" class="full-page">
    @include('layouts.navigation')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url('{{ asset('assets/images/ecuador.jpg') }}');">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{ __('site.country.ecuador.title') }}</h1>
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
                                    <h2 class="text-center mb-4">{{ __('site.country.ecuador.info_title') }}</h2>
                                    <p>{{ __('site.country.ecuador.intro') }}</p>

                                    <p>{{ __('site.country.ecuador.description') }}</p>

                                    <p>{{ __('site.country.ecuador.conclusion') }}</p>

                                    <h3>{{ __('site.country.ecuador.overview_title') }}</h3>

                                    <blockquote>

                                        <p>{{ __('site.country.ecuador.overview_quote') }}</p>
                                    </blockquote>

                                    <ul>
                                        <li>

                                            <h4>Galápagos Islands Exploration: Dive into a Unique Marine Wonderland</h4>Embark on an extraordinary journey to the Galápagos Islands, a unique archipelago that promises an unparalleled encounter with remarkable marine life. Marvel at the iconic giant tortoises and discover the diverse ecosystem that inspired Charles Darwin's theory of evolution.</li>
                                        <li>

                                            <h4>Trekking Adventure in Cotopaxi National Park: Discover the Majesty of Ecuador's Highest Active Volcano</h4>Embark on an exhilarating adventure as you traverse the enchanting trails of Cotopaxi National Park, a pristine wilderness that cradles the world's highest active volcano. Immerse yourself in the awe-inspiring landscapes and experience the raw power of nature.</li>
                                        <li>

                                            <h4>Embark on an Amazon Adventure: Immerse Yourself in the Enchanting Wonders of the Rainforest</h4>Embark on a captivating journey into the heart of the Ecuadorian Amazon, where an immersive experience awaits. Delve into the rich tapestry of biodiversity as you explore the lush rainforest, encountering exotic wildlife and learning about indigenous cultures.</li>
                                        <li>

                                            <h4>Step into the Past: A Guided Tour of Quito's Historic City Center</h4>Take a leisurely stroll through the meticulously preserved historic center of Quito, a UNESCO World Heritage Site that unfolds like a living tapestry of Ecuador's rich past. Wander amidst the cobblestone streets and colonial architecture.</li>
                                        <li>

                                            <h4>Journey Through Nature's Grandeur: Explore the Spectacular Avenue of the Volcanoes in Ecuador</h4>Embark on a captivating journey through the illustrious 'Avenue of the Volcanoes' nestled in the heart of the Ecuadorian Andes. As you traverse this scenic route, be prepared to be mesmerized by the majestic peaks that line this extraordinary corridor.</li>
                                    </ul>

                                    <h3>Discover Ecuador's Cultural Treasures: Top Museums to Explore</h3>

                                    <p>Ecuador hosts a variety of museums that provide visitors with the opportunity to delve into the country's rich history, culture, and biodiversity. Some of the best museums in Ecuador</p>

                                    <ul>
                                        <li aria-level="1">

                                            <p><strong>National Museum of the Central Bank of Ecuador (Quito):</strong> Located in the capital, Quito, this museum features a comprehensive collection of pre-Columbian art, colonial art, and contemporary works. Exhibits highlight Ecuador's cultural and geographical diversity.</li>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Museum of the City (Quito):</strong> Situated in Quito's historic center, this museum offers a fascinating insight into the city's history from pre-Inca times to the present day. Exhibits include historical artifacts and recreations of colonial life.</li>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Mindalae Museum (Quito):</strong> Focused on Ecuador's ethnic and cultural diversity, the Mindalae Museum showcases exhibitions highlighting the traditions of indigenous and Afro-descendant communities. It provides a unique window into Ecuador's multicultural heritage.</li>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Anthropological and Contemporary Art Museum (Guayaquil):</strong> Known as MAAC, this museum in Guayaquil combines contemporary art with anthropological exhibits. It offers a comprehensive view of Ecuador's cultural diversity and its evolution over time.</li>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Fray Pedro Gocial Museum (Cuenca):</strong> Located in the city of Cuenca, this museum houses an impressive collection of colonial religious art. Exhibits include paintings, sculptures, and liturgical objects illustrating the influence of the Catholic Church in Ecuador.</li>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>Ethnohistorical Museum of Crafts of Ecuador (Cuenca):</strong> This museum celebrates Ecuador's rich craft tradition, showcasing a variety of handmade objects representing the country's cultural diversity.</li>
                                        </li>
                                        <li aria-level="1">

                                            <p><strong>YAKU Water Museum (Quito):</strong> Focused on the importance of water, this interactive museum in Quito explores themes related to water conservation and its vital role in everyday life.</li>
                                        </li>
                                    </ul>

                                    <p>These museums offer a fascinating look into Ecuador's cultural, historical, and natural diversity, making each visit an educational and enriching experience.</p>

                                    <h3>The Finest Food Experiences in Ecuador</h3>

                                    <p>Ecuador boasts a rich variety of delicious dishes that reflect its cultural and geographical diversity. Some of the best foods in Ecuador include:</p>

                                    <ul>
                                        <li>Llapingachos: These potato patties stuffed with cheese are commonly served with chorizo, fried egg, and avocado, creating a feast of traditional flavors.</li>
                                        <li>Ceviche: Ecuadorian ceviche is typically made with shrimp or fish, marinated in lime juice and served with popcorn, plantain chips, and various accompaniments.</li>
                                        <li>Encebollado: A hearty fish soup made with albacore tuna, yuca, and pickled onions, often considered Ecuador's national dish.</li>
                                        <li>Seco de Chivo: A traditional goat stew slow-cooked with beer and spices, served with rice and plantains.</li>
                                        <li>Fanesca: A rich soup traditionally served during Easter, made with 12 different grains and dried fish.</li>
                                        <li>Hornado: Slow-roasted pork served with llapingachos, corn, and various sides.</li>
                                        <li>Churrasco: A grilled beef dish served with rice, fried eggs, avocado, and plantains.</li>
                                        <li>Empanadas de Viento: Light, airy empanadas filled with cheese and sprinkled with sugar.</li>
                                        <li>Chocolate: Ecuador is famous for its high-quality chocolate, made from locally grown cacao beans.</li>
                                        <li>Chicha: A traditional fermented corn drink that has been consumed for centuries.</li>
                                    </ul>

                                    <p>These culinary delights offer a taste of Ecuador's rich gastronomic heritage and are a must-try for any visitor.</p>

                                    <h3>Essentials for Your Ecuadorian Adventure: Packing Tips and Must-Haves</h3>

                                    <h4>Clothing:</h4>

                                    <ul>
                                        <li>Light and comfortable clothing: For warm and sunny days, especially in coastal areas and the Amazon.</li>
                                        <li>Warm clothing: For cooler nights in the highlands and mountain regions.</li>
                                        <li>Rain gear: Essential for the Amazon rainforest and during the rainy season.</li>
                                        <li>Swimming attire: For beach visits and thermal baths.</li>
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
                                        <li>Insect repellent: Essential for Amazon visits.</li>
                                    </ul>

                                    <h4>Luggage:</h4>

                                    <ul>
                                        <li>Small backpack: Perfect for day trips and carrying your essential belongings.</li>
                                        <li>Plug adapter: Ecuador uses Type A and B electrical outlets with a voltage of 120V and a frequency of 60Hz.</li>
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
                                        <li>Remember to check the weather forecast before packing and adjust your luggage according to the season and activities you plan to engage in. Enjoy your trip to Ecuador!</li>
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
