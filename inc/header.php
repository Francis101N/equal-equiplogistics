<header class="relative h-screen bg-cover bg-center"
    style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d');">

    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <div class="relative z-10">

        <!-- Navbar -->
        <nav class="flex justify-between items-center px-8 py-6 text-white">

            <!-- Logo -->
            <h1 class="text-2xl font-bold">
                <img src="IMAGES/animation-logo-Trim-ezgif.com-video-to-gif-converter.gif" alt="" style="width:120px;">
            </h1>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-8 font-medium">
                <li><a href="./" class="hover:text-gray-300 transition">HOME</a></li>
                <li><a href="about" class="hover:text-gray-300 transition">ABOUT US</a></li>
                <li><a href="services" class="hover:text-gray-300 transition">OUR SERVICES</a></li>
                <li><a href="contact" class="hover:text-gray-300 transition">CONTACT</a></li>
            </ul>

            <!-- Mobile Hamburger -->
            <button id="menuBtn" class="md:hidden focus:outline-none">
                <div class="space-y-2">
                    <span class="block w-8 h-0.5 bg-white transition"></span>
                    <span class="block w-8 h-0.5 bg-white transition"></span>
                    <span class="block w-8 h-0.5 bg-white transition"></span>
                </div>
            </button>

        </nav>

        <!-- Banner -->
        <div class="flex flex-col justify-center items-center text-center text-white h-[80vh] px-6">
            <h2 class="text-4xl md:text-6xl font-bold mb-6">
                Global Logistics Solution
            </h2>
            <p class="text-lg md:text-xl mb-8">
                Streamlining Logistics, Anywhere, Anytime
            </p>
            <a href="#" class="bg-white text-black px-8 py-3 rounded-lg font-semibold hover:bg-red-500 transition">
                Discover
            </a>
        </div>

    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-60 hidden transition-opacity duration-300 z-40">
    </div>

    <!-- Mobile Sidebar -->
    <div id="mobileMenu"
        class="fixed top-0 left-0 h-full w-72 bg-black text-white transform -translate-x-full transition-transform duration-300 ease-in-out z-50 shadow-2xl">

        <div class="p-6 flex justify-between items-center border-b border-gray-700">
            <h2 class="text-xl font-bold">Menu</h2>
            <button id="closeBtn" class="text-2xl">✕</button>
        </div>

        <ul class="flex flex-col space-y-6 p-6 text-lg font-medium">
            <li><a href="./" class="hover:text-gray-400 transition">HOME</a></li>
            <li><a href="about" class="hover:text-gray-400 transition">ABOUT US</a></li>
            <li><a href="services" class="hover:text-gray-400 transition">OUR SERVICES</a></li>
            <li><a href="contact" class="hover:text-gray-400 transition">CONTACT</a></li>
        </ul>
    </div>
</header>