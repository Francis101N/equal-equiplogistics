<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Equip & Logistics</title>
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

<body class="pt-[80px] md:pt-[100px]">

    <?php
    include('inc/nav.php');
    ?>

    <!-- Banner Section -->
    <section class="bg-black relative w-full h-[60vh] md:h-[70vh] overflow-hidden flex items-center justify-center">

        <!-- Background Image -->
        <img src="IMAGES/logistics-banner.jpg" alt="Logistics Banner"
            class="absolute w-full h-full object-cover opacity-40">


        <!-- Banner Content -->
        <div class="text-center px-4 md:px-12">
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-4 drop-shadow-lg">
                Equip & Logistics Services
            </h1>
            <p class="text-white text-lg md:text-xl max-w-3xl mx-auto drop-shadow-md">
                Equip & Logistics delivers dependable and efficient logistics solutions nationwide. From freight
                forwarding to comprehensive supply chain management, we ensure your cargo is handled with care and
                delivered safely, securely, and on schedule.
            </p>
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
                        <li class="cursor-pointer p-3 rounded-lg bg-gray-200 text-gray-900 hover:bg-gray-300 transition-all duration-300 tab-btn"
                            data-tab="warehousing">WARE HOUSING</li>

                        <li class="cursor-pointer p-3 rounded-lg bg-gray-200 text-gray-900 hover:bg-gray-300 transition-all duration-300 tab-btn"
                            data-tab="haulage">HAULAGE SERVICES</li>

                        <li class="cursor-pointer p-3 rounded-lg bg-gray-200 text-gray-900 hover:bg-gray-300 transition-all duration-300 tab-btn"
                            data-tab="ferry">FERRY SERVICES</li>

                        <li class="cursor-pointer p-3 rounded-lg bg-gray-200 text-gray-900 hover:bg-gray-300 transition-all duration-300 tab-btn"
                            data-tab="marine">LOCAL INLAND MARINE SERVICES</li>

                        <li class="cursor-pointer p-3 rounded-lg bg-gray-200 text-gray-900 hover:bg-gray-300 transition-all duration-300 tab-btn"
                            data-tab="terminal">PORT TERMINAL SERVICES</li>

                        <li class="cursor-pointer p-3 rounded-lg bg-gray-200 text-gray-900 hover:bg-gray-300 transition-all duration-300 tab-btn"
                            data-tab="shipping">LOCAL & INTERNATIONAL SHIPPING AGENT</li>
                    </ul>
                </div>

                <!-- Right: Tab Content -->
                <div class="tab-content space-y-8 text-gray-700">

                    <div id="warehousing"
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

                    <div id="haulage"
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

                    <div id="ferry"
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

                    <div id="marine"
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
                    <div id="terminal"
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
                    <div id="shipping"
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

    <div class="w-full">
        <img src="IMAGES/services.jpg" alt="Our Logistics Services" class="w-full h-[400px] object-cover">
    </div>

    <?php
    include('inc/footer.php');
    ?>


</body>
<script>
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
</script>

</html>