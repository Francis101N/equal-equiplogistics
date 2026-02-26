<!-- Navbar -->
<nav class="fixed top-0 left-0 w-full text-white shadow-md z-50" style="background-color: black;">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 md:px-12 py-4">

        <!-- Logo -->
        <div class="flex items-center">
            <img src="IMAGES/animation-logo-Trim-ezgif.com-video-to-gif-converter.gif"
                 alt="Logo"
                 class="object-contain"
                 style="width:100px;">
        </div>

        <!-- Desktop Menu -->
       <ul class="hidden md:flex space-x-10 font-medium">
  <li>
    <a href="home" class="relative inline-block text-white font-medium transition-all duration-300
       before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-red-600 before:transition-all hover:before:w-full">
       HOME
    </a>
  </li>
  <li>
    <a href="about" class="relative inline-block text-white font-medium transition-all duration-300
       before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-red-600 before:transition-all hover:before:w-full">
       ABOUT US
    </a>
  </li>
  <li>
    <a href="services" class="relative inline-block text-white font-medium transition-all duration-300
       before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-red-600 before:transition-all hover:before:w-full">
       OUR SERVICES
    </a>
  </li>
  <li>
    <a href="contact" class="relative inline-block text-white font-medium transition-all duration-300
       before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-red-600 before:transition-all hover:before:w-full">
       CONTACT
    </a>
  </li>
</ul>

        <!-- Hamburger -->
        <button id="menuBtn" class="md:hidden focus:outline-none">
            <div class="space-y-2">
                <span class="block w-8 h-0.5 bg-white"></span>
                <span class="block w-8 h-0.5 bg-white"></span>
                <span class="block w-8 h-0.5 bg-white"></span>
            </div>
        </button>

    </div>
</nav>

<!-- Overlay -->
<div id="overlay"
     class="fixed inset-0 bg-black bg-opacity-60 hidden transition-opacity duration-300 z-40">
</div>

<!-- Mobile Sidebar -->
<div id="mobileMenu"
     class="fixed top-0 left-0 h-full w-72 bg-[#953834] text-white transform -translate-x-full transition-transform duration-300 ease-in-out z-50 shadow-2xl">

    <div class="p-6 flex justify-between items-center border-b border-white/20">
        <h2 class="text-xl font-bold">Menu</h2>
        <button id="closeBtn" class="text-2xl">&times;</button>
    </div>

    <ul class="flex flex-col space-y-6 p-6 text-lg font-medium">
        <li><a href="home" class="hover:text-gray-300 transition">HOME</a></li>
        <li><a href="about" class="hover:text-gray-300 transition">ABOUT US</a></li>
        <li><a href="services" class="hover:text-gray-300 transition">OUR SERVICES</a></li>
        <li><a href="contact" class="hover:text-gray-300 transition">CONTACT</a></li>
    </ul>
</div>