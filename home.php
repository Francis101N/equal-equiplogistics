<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - equipandlogistics</title>
    <link rel="icon" href="IMAGES/equal-icon.png">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        upsteamRed: '#601000',
                        upsteamGray: '#7a7a7a',
                    },
                    keyframes: {
                        slideInLeft: {
                            '0%': { transform: 'translateX(-100%)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' }
                        }
                    },
                    animation: {
                        slideInLeft: 'slideInLeft 1s ease-out forwards'
                    }
                }
            }
        }
    </script>
</head>

<body>
    <?php
    include('inc/header.php');
    ?>

    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <!-- Text Content -->
                <div class="space-y-6">
                    <span class="text-sm uppercase tracking-widest text-red-500 font-semibold">
                        About Our Company
                    </span>

                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                        Delivering Excellence in Logistics & Supply Chain Solutions
                    </h2>

                    <p class="text-gray-600 text-lg leading-relaxed">
                        We offer a Global Logistics Network with our worldwide offices and also high quality
                        distribution facilities which are staffed by dedicated teams of the top of experts. We have more
                        than 30 years of experiences in this field.
                    </p>

                    <div>
                        <a href="#"
                            class="inline-block bg-black text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-500 transition duration-300 shadow-md">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="relative">
                    <img src="IMAGES/logistics1.jpg" alt="Logistics"
                        class="rounded-xl shadow-xl object-cover w-full h-[400px]">

                    <!-- Decorative Accent -->
                    <div class="absolute -bottom-6 -right-6 bg-blue-600 w-32 h-32 rounded-xl -z-10"></div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">

            <div class="grid md:grid-cols-3 gap-10">

                <!-- Card 1 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group">

                    <!-- Icon -->
                    <div class="mb-6 flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-14 h-14 text-red-600 group-hover:scale-110 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">

                            <!-- Lightning / Fast Service Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900 text-center">Fast Service</h3>

                    <p class="text-gray-600 leading-relaxed">
                        EQUAL takes full advantage of the diversity of our portfolio of services,
                        worldwide partnerships, resources and expertise to deliver integrated
                        solutions that result in time and cost efficiency.
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group">

                    <!-- Icon -->
                    <div class="mb-6 flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-14 h-14 text-red-600 group-hover:scale-110 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">

                            <!-- Truck Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17h6m-8 0a2 2 0 11-4 0 2 2 0 014 0zm14 0a2 2 0 11-4 0 2 2 0 014 0zM3 13V6a1 1 0 011-1h11v8H3zm13 0h3l2 3v1h-5v-4z" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold mb-4 text-gray-900 text-center">Safe Delivery</h3>

                    <p class="text-gray-600 leading-relaxed">
                        Multinational and blue-chip companies benefit from our tailor-made
                        service packages covering global cargo consolidations and end-to-end
                        supply chain management.
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group">

                    <!-- Icon -->
                    <div class="mb-6 flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-14 h-14 text-red-600 group-hover:scale-110 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">

                            <!-- Headset Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 12a8 8 0 0116 0v4a2 2 0 01-2 2h-1v-6h3M4 12v4a2 2 0 002 2h1v-6H4m5 6h6" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold mb-4 text-gray-900 text-center">24/7 Support</h3>

                    <p class="text-gray-600 leading-relaxed">
                        We continuously strive for product and service innovation to provide
                        real-time, world-class support while strengthening and stabilizing
                        our service delivery.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="bg-red-600 py-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-12">

            <!-- Tab Buttons -->
            <div class="flex flex-col md:flex-row justify-center md:space-x-6 space-y-4 md:space-y-0 mb-12">
                <button class="tab-btn px-6 py-3 font-semibold rounded-lg transition-colors duration-300"
                    data-tab="csr">OUR CORPORATE SOCIAL RESPONSIBILITY</button>
                <button class="tab-btn px-6 py-3 font-semibold rounded-lg transition-colors duration-300"
                    data-tab="strategy">OUR STRATEGIC APPROACH</button>
                <button class="tab-btn px-6 py-3 font-semibold rounded-lg transition-colors duration-300"
                    data-tab="warehousing">WAREHOUSING</button>
            </div>

            <!-- Tab Content -->
            <div class="tab-content space-y-6 text-gray-700 text-center">
                <div id="csr" class="hidden p-20 bg-black text-white rounded-lg">
                    <p>
                        As an industry pacesetter, we are committed to our community, services, employees and business
                        principles consistently.

                        Community:

                        We are committed to sustaining best business practices and leadership examples that continually
                        work towards improving the quality of lives of our people and impact positively on our society
                        and nation.
                    </p>
                </div>
                <div id="strategy" class="hidden p-20 bg-black text-white rounded-lg">
                    <p>
                        Our overarching strategy is to leverage our organizational competencies and wide network of
                        resources to meet our customers’ varying needs. Our products and services are aimed at
                        complementing operational aspirations, making us the ﬁrst and preferred option for our
                        customers.
                        We commit ourselves to maintaining and, wherever applicable, growing our dedication to
                        operational safety and efficiency, social and environmental responsibility in both local and
                        int’l logistics operations, and complementary alliances with public and private entities.
                    </p>
                </div>
                <div id="warehousing" class="hidden p-20 bg-black text-white rounded-lg">
                    <p>
                        Our warehousing and distribution services are regularly audited and analyzed to ensure that it
                        meets the contemporary business models, and our services continue to help our clients meet their
                        logistic requirements efficiently.

                        Our supply chain management experts would design a logistic process especially for you to align
                        with your business in an integrated fashion.

                        Our warehousing services, includes a wide range of services that includes inventory control and
                        management, load building, yard management, static and dynamic replenishment, kitting, order
                        processing, vendor performance, cross docking, supply chain management, logistic integration,
                        bar coding, quality control,
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid md:grid-cols-2 gap-12 items-start">

                <!-- Left: Tabs List -->
                <div class="space-y-6">
                    <h4 class="text-red-600 font-semibold uppercase tracking-wide">Why Choose Us</h4>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">What Makes Us Different</h2>

                    <ul class="space-y-4 mt-6">
                        <li class="cursor-pointer p-3 rounded-lg bg-gray-200 hover:bg-gray-300 transition-colors duration-300 tab-item"
                            data-tab="operational">OPERATIONAL FOCUS</li>
                        <li class="cursor-pointer p-3 rounded-lg bg-gray-200 hover:bg-gray-300 transition-colors duration-300 tab-item"
                            data-tab="dynamics">OPERATIONS DYNAMICS AND DIVERSIFICATION</li>
                        <li class="cursor-pointer p-3 rounded-lg bg-gray-200 hover:bg-gray-300 transition-colors duration-300 tab-item"
                            data-tab="safety">HEALTH AND SAFETY (HSE)</li>
                        <li class="cursor-pointer p-3 rounded-lg bg-gray-200 hover:bg-gray-300 transition-colors duration-300 tab-item"
                            data-tab="advantage">WE TAKE FULL ADVANTAGE</li>
                    </ul>
                </div>

                <!-- Right: Tab Content -->
                <div class="tab-content space-y-8 text-gray-700">

                    <div id="operational"
                        class="hidden p-8 bg-white rounded-xl shadow-lg animate-fadeIn transition-all duration-500">
                        <h5 class="text-red-600 font-semibold uppercase tracking-widest mb-2">Why customers love us</h5>
                        <h2
                            class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 border-b-2 border-red-600 inline-block pb-2">
                            OPERATIONAL FOCUS
                        </h2>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            With our team of seasoned professionals and ongoing expansion plans of the fleet, we are
                            poised
                            to deliver excellent services using industry best practices while remaining socially
                            responsible.
                            Aqua Logistics presents a unique mix of services in marine transportation, logistics, and
                            supply
                            chain operations management.
                        </p>
                    </div>

                    <div id="dynamics"
                        class="hidden p-8 bg-white rounded-xl shadow-lg animate-fadeIn transition-all duration-500">
                        <h5 class="text-red-600 font-semibold uppercase tracking-widest mb-2">Why customers love us</h5>
                        <h2
                            class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 border-b-2 border-red-600 inline-block pb-2">
                            OPERATIONS DYNAMICS AND DIVERSIFICATION
                        </h2>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Logistics planning and scheduling for client’s transportation of liquid bulk within
                            principles.
                            Warehousing arrangements and management nationwide. Prompt online responses to client
                            queries and
                            intermodal transportation planning and execution. Dry bulk movement and handling. Gift
                            coverage
                            for all movements.
                        </p>
                    </div>

                    <div id="safety"
                        class="hidden p-8 bg-white rounded-xl shadow-lg animate-fadeIn transition-all duration-500">
                        <h5 class="text-red-600 font-semibold uppercase tracking-widest mb-2">Why customers love us</h5>
                        <h2
                            class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 border-b-2 border-red-600 inline-block pb-2">
                            HEALTH AND SAFETY (HSE)
                        </h2>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            The greatest concern in the workplace is the health and safety of its workforce, our
                            clients,
                            and the environment. We have made safety our number one concern, with strict compliance on
                            the safe and environmentally responsible operation of oil tankers and terminals, whilst
                            promoting
                            continuous improvement in our standards of operation.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            We recognize the need for continuous steps towards the development of a comprehensive
                            structure,
                            designed to create a safety policy for the company, a “safe company.” Safety is our number
                            one core
                            value and we operate a system that puts SAFETY FIRST.
                        </p>
                    </div>

                    <div id="advantage"
                        class="hidden p-8 bg-white rounded-xl shadow-lg animate-fadeIn transition-all duration-500">
                        <h5 class="text-red-600 font-semibold uppercase tracking-widest mb-2">Why customers love us</h5>
                        <h2
                            class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 border-b-2 border-red-600 inline-block pb-2">
                            WE TAKE FULL ADVANTAGE
                        </h2>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            EQUAL takes full advantage of the diversity of our portfolio of services, worldwide
                            partnerships,
                            resources, and expertise to deliver integrated solutions that result in time and cost
                            efficiency.
                            Sectors such as multinational and blue-chip companies benefit from our tailor-made service
                            packages
                            covering global cargo consolidation, bulk and ODC (over-dimensional cargo), end-to-end
                            supply,
                            marine logistics, and advisory services.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Other sectors that can benefit from our wide range of services include technology,
                            healthcare,
                            sports, entertainment/events, projects, offshore, manufacturing, etc.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-12 text-center">

            <h2
                class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 border-b-4 border-red-600 pb-2 inline-block animate-fadeIn">
                Equal Logistics Site
            </h2>
            <p class="text-gray-700 mb-10">We deliver on point</p>

            <div class="relative overflow-hidden rounded-xl shadow-lg">
                <video id="operationVideo" class="w-full h-auto rounded-xl" controls muted playsinline
                    poster="IMAGES/drone_site_VISCO_EQUAL.png">
                    <source src="IMAGES/drone site VISCO _ EQUAL.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-12 grid md:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div
                class="relative rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('IMAGES/85a497d5abc5827a17e0cb6644dbd173.jpg');"></div>

                <div class="absolute inset-0 bg-red-100/60 hover:bg-black/60 transition-all duration-300"></div>

                <div class="relative p-6 text-center">
                    <h3 class="text-xl font-bold mb-3 text-gray-900 hover:text-white transition">SPECIAL TRANSPORTATION
                    </h3>
                    <p class="text-gray-700 hover:text-white transition">
                        Marine Vessels Supply and Operation Offshore Operation Support Services (e.g Marine Security &
                        Escort,
                        Mooring Services, House Boats, Barges).
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="relative rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 cursor-pointer">
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('IMAGES/85a497d5abc5827a17e0cb6644dbd173.jpg');"></div>
                <div class="absolute inset-0 bg-red-100/60 hover:bg-black/60 transition-all duration-300"></div>
                <div class="relative p-6 text-center">
                    <h3 class="text-xl font-bold mb-3 text-gray-900 hover:text-white transition">HAULAGE SERVICES</h3>
                    <p class="text-gray-700 hover:text-white transition">
                        Petroleum Products Haulage (Gas) Goods/Materials Road Haulage
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="relative rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 cursor-pointer">
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('IMAGES/85a497d5abc5827a17e0cb6644dbd173.jpg');"></div>
                <div class="absolute inset-0 bg-red-100/60 hover:bg-black/60 transition-all duration-300"></div>
                <div class="relative p-6 text-center">
                    <h3 class="text-xl font-bold mb-3 text-gray-900 hover:text-white transition">MARINE SUPPORT SERVICES
                    </h3>
                    <p class="text-gray-700 hover:text-white transition">
                        Supply, Installation and Maintenance of Marine Navigational/Communication Equipment. Marine
                        Logistics
                    </p>
                </div>
            </div>

        </div>
    </section>

    <article class="text-center p-5 text-2xl md:text-3xl font-bold text-gray-900 ">
        Equal Logistics drives innovation through cutting-edge networks.
    </article>

    <section class="py-20 ">
        <div class=" flex flex-col md:flex-row items-stretch gap-6">

            <div class="md:flex-1 h-full">
                <img src="IMAGES/truck.jpg" alt="About Us" class="w-full h-full object-cover rounded-xl shadow-lg">
            </div>

            <div
                class="md:flex-1 bg-red-600 text-white p-10 rounded-xl shadow-lg flex flex-col justify-center space-y-6">
                <h4 class="text-lg font-semibold tracking-wide uppercase">KNOW US MORE</h4>
                <h2 class="text-3xl md:text-4xl font-bold">More About Us</h2>
                <p class="text-lg leading-relaxed">
                    EQUAL is an indigenous company positioned and poised at delivering world-class Marine logistics
                    services in Nigeria.
                </p>
                <p class="text-lg leading-relaxed">
                    We have a pre-designed operational strategy on services delivery and sequence to suit customers
                    needs for vessels that are either waiting at the anchorage or out on voyage within Nigerian or
                    Cotonou waters.
                </p>
                <a href="#"
                    class="inline-block bg-white text-red-600 font-semibold px-6 py-3 rounded-lg hover:bg-gray-200 transition">
                    MORE DETAIL
                </a>
            </div>

        </div>
    </section>

    <section>
        <div class=" flex flex-col md:flex-row items-stretch gap-6">

            <div
                class="md:flex-1 bg-red-600 text-white p-10 rounded-xl shadow-lg flex flex-col justify-center space-y-6">

                <h4 class="text-lg font-semibold tracking-wide uppercase">we are an advanced company</h4>
                <h2 class="text-3xl md:text-4xl font-bold">Using High Technology</h2>

                <div class="flex items-start space-x-4">

                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-3-3v6m4-7a9 9 0 11-8 0 9 9 0 018 0z" />
                        </svg>
                    </div>
                    <div>
                        <h5>We Use AI In The Line</h5>
                        <p>That’s why customers trust us — we have more than 80 years of experience in the logistics and
                            transportation.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">

                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10l9-6 9 6v8a2 2 0 01-2 2h-2v-6h-4v6H5a2 2 0 01-2-2v-8z" />
                        </svg>
                    </div>
                    <div>
                        <h5>Smart Warehouse</h5>
                        <p>That’s why customers trust us — we have more than 80 years of experience in the logistics and
                            transportation.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">

                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m0 0a9 9 0 11-9-9 9 9 0 019 9z" />
                        </svg>
                    </div>
                    <div>
                        <h5>100% Accuracy</h5>
                        <p>That’s why customers trust us — we have more than 80 years of experience in the logistics and
                            transportation.</p>
                    </div>
                </div>

            </div>
            <div class="md:flex-1 h-full">
                <img src="IMAGES/equip image.jpg" alt="About Us"
                    class="w-full h-full object-cover rounded-xl shadow-lg">
            </div>

        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-12 text-center space-y-6">
            <!-- Heading -->
            <h5 class="text-lg font-semibold text-red-600 uppercase tracking-wide">We are experts in many industries
            </h5>
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900">Industry Solutions</h3>
            <p class="text-gray-700 max-w-3xl mx-auto">
                As one of the leading providers of logistics solutions across the globe, Logisco has an immense
                portfolio of
                transport and contract logistics solutions that spans multiple industries.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="max-w-6xl mx-auto px-6 lg:px-12 mt-12 grid sm:grid-cols-2 md:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg transition transform hover:-translate-y-1 hover:shadow-2xl hover:border-2 hover:border-red-600 h-80 flex flex-col">
                <div class="flex items-center justify-center w-12 h-12 bg-red-100 rounded-full mb-4">
                    <!-- Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7h18M3 12h18M3 17h18" />
                    </svg>
                </div>
                <h4 class="text-xl font-semibold mb-2">Supply Chain Management</h4>
                <p class="text-gray-600 text-sm flex-1">
                    EQUAL can manage your entire supply chain from marine logistics, freight and warehousing to
                    transport logistics, with value-added services that enhance your business. We are a one-stop
                    clearing agent in Nigeria.
                </p>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg transition transform hover:-translate-y-1 hover:shadow-2xl hover:border-2 hover:border-red-600 h-80 flex flex-col">
                <div class="flex items-center justify-center w-12 h-12 bg-red-100 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10l9-6 9 6v8a2 2 0 01-2 2h-2v-6H7v6H5a2 2 0 01-2-2v-8z" />
                    </svg>
                </div>
                <h4 class="text-xl font-semibold mb-2">Multi-Modal Freight</h4>
                <p class="text-gray-600 text-sm flex-1">
                    We offer a full suite of quality and cost-effective services by Air, Ocean and Road, for global
                    import and export.
                </p>
            </div>

            <!-- Card 3 -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg transition transform hover:-translate-y-1 hover:shadow-2xl hover:border-2 hover:border-red-600 h-80 flex flex-col">
                <div class="flex items-center justify-center w-12 h-12 bg-red-100 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 21h18M6 21V10h3v11M15 21V4h3v17M9 10h6M12 4v6" />
                    </svg>
                </div>
                <h4 class="text-xl font-semibold mb-2">Oil & Gas</h4>
                <p class="text-gray-600 text-sm flex-1">
                    When it comes to managing the logistics of oil and gas, safety and efficiency are the greatest
                    concerns.
                </p>
            </div>

            <!-- Card 4 -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg transition transform hover:-translate-y-1 hover:shadow-2xl hover:border-2 hover:border-red-600 h-80 flex flex-col">
                <div class="flex items-center justify-center w-12 h-12 bg-red-100 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h4 class="text-xl font-semibold mb-2">Dedicated Support</h4>
                <p class="text-gray-600 text-sm flex-1">
                    Through an established set of processes, our dedicated team provides a single point of contact for
                    all customers.
                </p>
            </div>

            <!-- Card 5 -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg transition transform hover:-translate-y-1 hover:shadow-2xl hover:border-2 hover:border-red-600 h-80 flex flex-col">
                <div class="flex items-center justify-center w-12 h-12 bg-red-100 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c1.38 0 2.5 1.12 2.5 2.5S13.38 13 12 13 9.5 11.88 9.5 10.5 10.62 8 12 8z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 12h20" />
                    </svg>
                </div>
                <h4 class="text-xl font-semibold mb-2">Client Based Reporting</h4>
                <p class="text-gray-600 text-sm flex-1">
                    Our reporting and feedback tools are a key part of our account management process and guarantee
                    quality service.
                </p>
            </div>

            <!-- Card 6 -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg transition transform hover:-translate-y-1 hover:shadow-2xl hover:border-2 hover:border-red-600 h-80 flex flex-col">
                <div class="flex items-center justify-center w-12 h-12 bg-red-100 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4h14V3M5 7h14v14H5V7z" />
                    </svg>
                </div>
                <h4 class="text-xl font-semibold mb-2">Consumer</h4>
                <p class="text-gray-600 text-sm flex-1">
                    Logisco has an in-depth understanding of the consumer industry and offers innovative solutions.
                </p>
            </div>

        </div>
        <br><br>
        <p class="text-center italic text-gray-700 text-lg md:text-xl tracking-wide">
            Our global logistics network, cutting-edge IT systems, in-house expertise and excellent customer service.
        </p>
    </section>

    <section class="bg-gray-50">
        <div class="mx-auto px-6 lg:px-12 flex flex-col md:flex-row items-stretch gap-10">

            <div class="md:w-1/2 flex items-center justify-center">
                <img src="IMAGES/Equal.jpeg" alt="Contact Us" class="w-full h-full object-cover rounded-xl shadow-lg">
            </div>

            <form class="md:w-1/2 bg-white p-10 rounded-xl shadow-lg flex flex-col space-y-5">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Talk to Us</h3>
                <p class="text-gray-600 text-sm mb-6">
                    We will get back to you within 24 hours, Monday – Friday / 09:00 – 18:00<br>
                    <b> Or call us:</b> <span class="font-semibold text-red-600">+234-803-4507-101</span>
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <input type="text" name="fullname" placeholder="Full Name"
                        class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 transition">
                    <input type="email" name="email" placeholder="Email"
                        class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 transition">
                    <input type="text" name="phone" placeholder="Phone"
                        class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 transition">
                    <input type="text" name="cargo-type" placeholder="Cargo Type"
                        class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 transition">
                    <input type="text" name="country" placeholder="Country"
                        class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 transition">
                    <input type="text" name="destination" placeholder="Destination"
                        class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 transition">
                    <input type="text" name="quantity" placeholder="Quantity"
                        class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 transition">
                    <input type="text" name="weight" placeholder="Weight"
                        class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 transition">
                    <input type="text" name="width" placeholder="Width"
                        class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 transition">
                    <input type="text" name="height" placeholder="Height"
                        class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 transition">
                </div>

                <button type="submit"
                    class="bg-red-600 text-white font-semibold py-3 rounded-lg hover:bg-red-700 transition mt-4">
                    Submit
                </button>
            </form>
        </div>
    </section>

    <?php
    include('inc/footer.php');
    ?>

</body>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const closeBtn = document.getElementById('closeBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const overlay = document.getElementById('overlay');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
    });

    function closeMenu() {
        mobileMenu.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    }

    closeBtn.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);

    const tabs = document.querySelectorAll(".tab-btn");
    const contents = document.querySelectorAll(".tab-content > div");

    tabs.forEach(tab => {
        tab.addEventListener("click", () => {
            // Reset all tabs
            tabs.forEach(t => t.classList.remove("bg-black", "text-white"));
            tabs.forEach(t => t.classList.add("bg-gray-200", "text-gray-900"));

            // Hide all contents
            contents.forEach(c => c.classList.add("hidden"));

            // Activate clicked tab
            tab.classList.add("bg-black", "text-white");
            tab.classList.remove("bg-gray-200", "text-gray-900");

            const tabId = tab.dataset.tab;
            document.getElementById(tabId).classList.remove("hidden");
        });
    });

    // Optional: Activate first tab by default
    tabs[0].click();

    const tabItems = document.querySelectorAll(".tab-item");
    const tabContents = document.querySelectorAll(".tab-content > div");

    tabItems.forEach(item => {
        item.addEventListener("click", () => {
            // Reset all tabs
            tabItems.forEach(i => i.classList.remove("bg-black", "text-white"));
            tabItems.forEach(i => i.classList.add("bg-gray-200", "text-gray-900"));

            // Hide all contents
            tabContents.forEach(c => c.classList.add("hidden"));

            // Activate clicked tab
            item.classList.add("bg-black", "text-white");
            item.classList.remove("bg-gray-200", "text-gray-900");

            const tabId = item.dataset.tab;
            const activeContent = document.getElementById(tabId);

            activeContent.classList.remove("hidden");
        });
    });

    // Activate first tab by default
    tabItems[0].click();

    // Get the video element
    const video = document.getElementById("operationVideo");

    // Use Intersection Observer to play video when in viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                video.play().catch(() => {
                    // Sometimes autoplay is blocked, ensure muted
                    video.muted = true;
                    video.play();
                });
            } else {
                video.pause(); // Optional: pause when out of view
            }
        });
    }, { threshold: 0.5 }); // Play when 50% visible

    observer.observe(video);

</script>

</html>