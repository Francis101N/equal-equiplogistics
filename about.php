<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Equip & Logistics</title>
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
                About Equip & Logistics
            </h1>
            <p class="text-white text-lg md:text-xl max-w-3xl mx-auto drop-shadow-md">
                We provide reliable and efficient logistics solutions across the country. From freight forwarding to
                supply
                chain management, we ensure your cargo reaches its destination safely and on time.
            </p>
        </div>

    </section>

    <main class="bg-white ">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            <div
                class="max-w-xl mx-auto my-12 p-8 bg-white/70 backdrop-blur-md rounded-2xl shadow-xl flex flex-col md:flex-row items-center md:items-start space-y-4 md:space-y-0 md:space-x-6">

                <div class="flex-shrink-0">
                    <img src="IMAGES/WhatsApp Image 2026-02-24 at 10.03.21 PM.jpeg" alt="Quote Icon"
                        class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-full shadow-lg">
                </div>

                <div class="text-center md:text-left">
                    <p class="text-gray-900 font-extrabold text-2xl md:text-2xl leading-snug">
                        "FEAR IS PERCEPTION..<br>
                        DON'T ENTERTAIN IT"
                    </p>
                    <span class="mt-2 block text-red-600 text-sm md:text-base"> Chairman</span>
                    <span class="block text-gray-600 text-sm md:text-base"> ~ Equip&Equal Logistics ~</span>
                </div>
            </div><br>

            <!-- Section Header -->
            <div class="mb-10 md:mb-14 text-center">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 relative inline-block">
                    Who We Are
                    <span class="block w-16 h-1 bg-red-600 mx-auto mt-4 rounded"></span>
                </h3>
            </div>

            <!-- Content Card -->
            <div class="bg-gray-50 shadow-xl rounded-2xl p-8 md:p-12 leading-relaxed text-gray-700 text-lg md:text-xl">

                <p class="mb-6">
                    <span class="font-semibold text-gray-900">EQUAL Logistics Ltd</span> is a global company with its
                    operations
                    spanning specialized offshore logistics, supply chain management (FMCG), agro-goods export, ship
                    chartering,
                    haulage services, and international trade.
                </p>

                <p class="mb-6">
                    Established in <span class="font-semibold text-gray-900">2005</span>, EQUAL is widely recognized as
                    one of
                    the most professionally managed marine logistics service providers in Nigeria. Our leadership team
                    consists
                    of seasoned Directors and Senior Executives who are experts in their respective fields.
                </p>

                <p>
                    With a highly competent technical and support workforce, we are committed to delivering sustainable,
                    high-quality services that not only meet but consistently exceed client expectations.
                </p>

            </div>

        </div>
    </main>

    <section class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-6xl mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-10">

            <!-- Vision Card -->
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10 hover:shadow-2xl transition duration-300">

                <div class="flex items-center space-x-4 mb-6">

                    <!-- Eye Icon (Vision) -->
                    <div class="bg-red-600 p-3 rounded-xl text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12s3.75-6.75 9.75-6.75S21.75 12 21.75 12 18 18.75 12 18.75 2.25 12 2.25 12z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 15.75A3.75 3.75 0 1112 8.25a3.75 3.75 0 010 7.5z" />
                        </svg>
                    </div>

                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900">
                        Our Vision
                    </h2>
                </div>

                <p class="text-gray-600 text-lg leading-relaxed">
                    Equal’s vision is to be among the world’s leading providers of logistics services,
                    delivering excellence, innovation, and reliability across global markets.
                </p>

            </div>

            <!-- Mission Card -->
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10 hover:shadow-2xl transition duration-300">

                <div class="flex items-center space-x-4 mb-6">

                    <!-- Globe/Transport Icon (Mission) -->
                    <div class="bg-red-600 p-3 rounded-xl text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />
                        </svg>
                    </div>

                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900">
                        Our Mission
                    </h2>
                </div>

                <p class="text-gray-600 text-lg leading-relaxed">
                    Our mission is to provide reliable logistics services across water, land, and air —
                    ensuring safe, efficient, and timely delivery for every client we serve.
                </p>

            </div>

        </div>
    </section>

    <br><br>
    <section class="bg-white">
        <div class="max-w-6xl mx-auto px-6 md:px-12">

            <!-- Section Header -->
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 inline-block relative">
                    Why Choose Us
                    <span class="block w-20 h-1 bg-red-600 mx-auto mt-4 rounded"></span>
                </h3>
                <p class="mt-6 text-gray-600 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                    Delivering trusted, compliant, and industry-specific logistics solutions
                    across West Africa and beyond.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- Card -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl shadow-lg border-2 border-transparent hover:border-red-600 hover:shadow-2xl transition-all duration-300">
                    <h4 class="text-xl font-semibold text-gray-900 mb-4">
                        Integrated End-to-End Solutions
                    </h4>
                    <p class="text-gray-600 leading-relaxed">
                        We provide global integrated logistics solutions tailored to meet our
                        clients’ supply chain management needs.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl shadow-lg border-2 border-transparent hover:border-red-600 hover:shadow-2xl transition-all duration-300">
                    <h4 class="text-xl font-semibold text-gray-900 mb-4">
                        Global Compliance & Standards
                    </h4>
                    <p class="text-gray-600 leading-relaxed">
                        We strictly adhere to global operational standards and regulatory frameworks.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl shadow-lg border-2 border-transparent hover:border-red-600 hover:shadow-2xl transition-all duration-300">
                    <h4 class="text-xl font-semibold text-gray-900 mb-4">
                        Strong West African Presence
                    </h4>
                    <p class="text-gray-600 leading-relaxed">
                        Our operations extend across key West African markets with expert teams.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="bg-gray-50 p-8 rounded-2xl shadow-lg border-2 border-transparent hover:border-red-600 hover:shadow-2xl transition-all duration-300">
                    <h4 class="text-xl font-semibold text-gray-900 mb-4">
                        Safety & Time Efficiency
                    </h4>
                    <p class="text-gray-600 leading-relaxed">
                        We prioritize safety and precision in every logistics operation.
                    </p>
                </div>

            </div>
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