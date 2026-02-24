<!-- Navbar -->
<nav class="fixed top-0 left-0 w-full text-white shadow-md z-50" style="background-color: #953834;">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 md:px-12 py-4">

        <!-- Logo -->
        <div class="flex items-center">
            <img src="IMAGES/animation-logo-Trim-ezgif.com-video-to-gif-converter.gif" alt="Logo" class="object-contain"
                style="width:100px;">
        </div>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-10 font-medium">
            <li><a href="home" class="hover:text-gray-200 transition-colors duration-300">HOME</a></li>
            <li><a href="about" class="hover:text-gray-200 transition-colors duration-300">ABOUT US</a></li>
            <li><a href="services" class="hover:text-gray-200 transition-colors duration-300">OUR SERVICES</a></li>
            <li><a href="contact" class="hover:text-gray-200 transition-colors duration-300">CONTACT</a></li>
        </ul>

        <button id="menuBtn" class="md:hidden flex flex-col justify-center items-center space-y-1.5 focus:outline-none">
            <span class="block w-8 h-0.5 bg-white transition-all duration-300"></span>
            <span class="block w-8 h-0.5 bg-white transition-all duration-300"></span>
            <span class="block w-8 h-0.5 bg-white transition-all duration-300"></span>
        </button>

    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden bg-red-700 overflow-hidden max-h-0 transition-all duration-500">
        <ul class="flex flex-col text-center space-y-4 py-6 font-medium text-lg">
            <li><a href="home" class="hover:text-gray-200 transition-colors duration-300">HOME</a></li>
            <li><a href="about" class="hover:text-gray-200 transition-colors duration-300">ABOUT US</a></li>
            <li><a href="#" class="hover:text-gray-200 transition-colors duration-300">OUR SERVICES</a></li>
            <li><a href="#" class="hover:text-gray-200 transition-colors duration-300">CONTACT</a></li>
        </ul>
    </div>
</nav>