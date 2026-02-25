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

    <!-- Floating Info Box (Hidden Initially) -->
    <div id="floatingBox"
        class="fixed bottom-6 right-6 z-50 bg-white/70 backdrop-blur-md shadow-lg rounded-xl p-4 w-64 opacity-0 transition-opacity duration-500">
        <h4 class="text-gray-900 font-bold text-lg mb-2">Contact & Working Hours</h4>
        <p class="text-gray-700 flex items-center mb-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-red-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l4 4m-4-4l4-4" />
            </svg>
            info@equipandlogistics.com
        </p>
        <p class="text-gray-700 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-red-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Mon - Fri: 8:00 AM - 6:00 PM
        </p>
    </div>

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
                            HAULAGE SERVICES
                        </h2>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Within Nigeria and sub region, we offer road haulage in conjunction with approved suppliers
                            and our trusted and reputable overseas network. EQUAL LOGISTICS offers high-quality road
                            freight forwarding on all haulage services with GIT (Goods In Transit) Insurance cover. We
                            operate a highly effcient maintenance schedule for our trucks with a standby recovery truck
                            to aid/facilitate service delivery. This also includes an ultra-modern truck/vehicle
                            workshop staffed with dedicated and well-trained technical staff designed to cater for the
                            various needs of the present fleet.
                        </p>
                    </div>

                    <div id="ferry"
                        class="hidden p-8 bg-white rounded-xl shadow-lg animate-fadeIn transition-all duration-500">
                        <h5 class="text-red-600 font-semibold uppercase tracking-widest mb-2">Why customers love us</h5>
                        <h2
                            class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 border-b-2 border-red-600 inline-block pb-2">
                            FERRY SERVICES
                        </h2>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Our ferry services provide seamless water transportation for goods and passengers.
                            Safety, punctuality, and efficiency are our top priorities.
                            With experienced crews and modern vessels, Aqua Logistics ensures every journey is reliable
                            and stress-free.
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
                            LOCAL INLAND MARINE SERVICES
                        </h2>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Our inland marine solutions connect rivers, ports, and local waterways for efficient cargo
                            movement.
                            We combine expertise, local knowledge, and modern vessels to deliver a seamless supply chain
                            experience.
                            Aqua Logistics ensures your goods reach inland destinations safely and on schedule.
                        </p>

                    </div>
                    <div id="terminal"
                        class="hidden p-8 bg-white rounded-xl shadow-lg animate-fadeIn transition-all duration-500">
                        <h5 class="text-red-600 font-semibold uppercase tracking-widest mb-2">Why customers love us</h5>
                        <h2
                            class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 border-b-2 border-red-600 inline-block pb-2">
                            PORT TERMINAL SERVICES
                        </h2>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Our port terminal operations offer fast, secure, and professional handling of all cargo
                            types.
                            From loading and unloading to storage and documentation, every process is managed with
                            precision.
                            Aqua Logistics helps you minimize turnaround times while maximizing efficiency at the
                            terminal.
                        </p>

                    </div>
                    <div id="shipping"
                        class="hidden p-8 bg-white rounded-xl shadow-lg animate-fadeIn transition-all duration-500">
                        <h5 class="text-red-600 font-semibold uppercase tracking-widest mb-2">Why customers love us</h5>
                        <h2
                            class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 border-b-2 border-red-600 inline-block pb-2">
                            LOCAL & INTERNATIONAL SHIPPING
                        </h2>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            We provide end-to-end shipping solutions for domestic and international clients.
                            With expertise in customs, documentation, and freight management, your cargo moves
                            efficiently across borders.
                            Aqua Logistics ensures your shipments arrive safely, on time, and in compliance with global
                            standards.
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

    // Show the floating box after scrolling down 100px
    const floatingBox = document.getElementById("floatingBox");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 100) {  // scroll threshold
            floatingBox.classList.remove("opacity-0");
            floatingBox.classList.add("opacity-100");
        } else {
            floatingBox.classList.remove("opacity-100");
            floatingBox.classList.add("opacity-0");
        }
    });
</script>

</html>