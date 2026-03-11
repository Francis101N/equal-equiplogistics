<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Equip & Logistics</title>
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
        <img src="IMAGES/logistics1.jpg" alt="Logistics Banner"
            class="absolute w-full h-full object-cover opacity-40">


        <!-- Banner Content -->
        <div class="text-center px-4 md:px-12">
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-4 drop-shadow-lg">
                Contact Equip & Logistics
            </h1>
            <p class="text-white text-lg md:text-xl max-w-3xl mx-auto drop-shadow-md">
                Get in touch with Equip & Logistics for reliable logistics solutions across the country. From freight
                forwarding to complete supply chain management, we handle your cargo with care and ensure it reaches its
                destination safely, securely, and on time.
            </p>
        </div>

    </section>

    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 grid md:grid-cols-3 gap-10">

            <!-- Phone -->
            <div
                class="bg-white p-6 rounded-xl shadow-md flex flex-col items-start gap-4 hover:shadow-xl transition-shadow duration-300">
                <div class="w-12 h-12 bg-red-600 text-white flex items-center justify-center rounded-full">
                    <!-- You can replace this with an icon -->
                    📞
                </div>
                <h4 class="text-xl font-semibold text-gray-900">Phone</h4>
                <p class="text-gray-600">Call us today for updates on any of our services.</p>
                <p class="text-red-600 font-medium text-lg">+234-803-4507-101</p>
            </div>

            <!-- Email -->
            <div
                class="bg-white p-6 rounded-xl shadow-md flex flex-col items-start gap-4 hover:shadow-xl transition-shadow duration-300">
                <div class="w-12 h-12 bg-red-600 text-white flex items-center justify-center rounded-full">
                    <!-- You can replace this with an icon -->
                    ✉️
                </div>
                <h4 class="text-xl font-semibold text-gray-900">Email</h4>
                <p class="text-gray-600">Email us for updates on our services.</p>
                <p class="text-red-600 font-medium text-lg">info@equipandlogistics.com</p>
            </div>

            <!-- Location -->
            <div
                class="bg-white p-6 rounded-xl shadow-md flex flex-col items-start gap-4 hover:shadow-xl transition-shadow duration-300">
                <div class="w-12 h-12 bg-red-600 text-white flex items-center justify-center rounded-full">
                    <!-- You can replace this with an icon -->
                    📍
                </div>
                <h4 class="text-xl font-semibold text-gray-900">Location</h4>
                <p class="text-gray-600 space-y-2 text-sm">
                    <span class="font-medium">Head Office:</span> 11a, Tokunbo Omisore Street, Off Admiralty Way, Lekki
                    Phase 1, Lagos.<br>
                    <span class="font-medium">Tango Terminal:</span> NPA Honeywell Jetty, KLT1, Apapa, Lagos.<br>
                    <span class="font-medium">Operational Base:</span> Plot 4, Fiddil Commercial Avenue, Off Ordinance
                    Road, Trans – Amadi, Port–Harcourt.<br>
                    <span class="font-medium">Bravo Terminal:</span> Ganvo Jetty, Ganho Jetty, EbuteMarina, Badagry,
                    Lagos.<br>
                    <span class="font-medium">Abuja Office:</span> Shippers Plaza
                </p>
            </div>

        </div>
    </section>

    <form class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-6">
        <h3 class="text-2xl font-bold text-gray-900 text-center">Leave Us Your Info</h3>
        <p class="text-center">and we will get back to you.</p><br>

        <!-- Full Name -->
        <div class="flex flex-col">
            <label for="fullname" class="text-gray-700 font-medium mb-2">Full Name</label>
            <input type="text" name="fullname" id="fullname" placeholder="Full Name"
                class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent transition">
        </div>

        <!-- Email -->
        <div class="flex flex-col">
            <label for="email" class="text-gray-700 font-medium mb-2">Email</label>
            <input type="email" name="email" id="email" placeholder="Email"
                class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent transition">
        </div>

        <!-- Subject -->
        <div class="flex flex-col">
            <label for="subject" class="text-gray-700 font-medium mb-2">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Subject"
                class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent transition">
        </div>

        <!-- Message -->
        <div class="flex flex-col">
            <label for="message" class="text-gray-700 font-medium mb-2">Message</label>
            <textarea name="message" id="message" placeholder="Message" rows="5"
                class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent transition resize-none"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full bg-red-600 text-white font-semibold py-3 rounded-lg hover:bg-red-700 transition-colors duration-300">
            SUBMIT NOW
        </button>
    </form><br><br>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5807951203706!2d3.4556478!3d6.447831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4f992514771%3A0x17f7cac52653e0d!2s11A%20Tokunbo%20Omisore%20St%2C%20Lekki%20Phase%201%2C%20Lagos%20101001%2C%20Lagos!5e0!3m2!1sen!2sng!4v1771927522842!5m2!1sen!2sng"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <br>
    <div class="flex justify-center items-center gap-6 py-6">

        <!-- Email -->
        <a href="mailto:info@equipandlogistics.com"
            class="w-12 h-12 flex items-center justify-center rounded-full bg-red-600 text-white hover:bg-red-700 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                <path d="M3 7l9 6 9-6"></path>
            </svg>
        </a>

        <!-- Facebook -->
        <a href="#"
            class="w-12 h-12 flex items-center justify-center rounded-full bg-red-600 text-white hover:bg-red-700 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path
                    d="M22 12.07C22 6.48 17.52 2 12 2S2 6.48 2 12.07C2 17.09 5.66 21.2 10.44 22v-7H7.9v-2.93h2.54V9.41c0-2.5 1.49-3.89 3.78-3.89 1.1 0 2.25.2 2.25.2v2.48h-1.27c-1.25 0-1.64.78-1.64 1.58v1.9h2.8l-.45 2.93h-2.35v7C18.34 21.2 22 17.09 22 12.07z" />
            </svg>
        </a>

        <!-- X -->
        <a href="#"
            class="w-12 h-12 flex items-center justify-center rounded-full bg-red-600 text-white hover:bg-red-700 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path
                    d="M18.244 2H21.5l-7.19 8.21L22 22h-6.828l-5.35-6.997L3.5 22H.244l7.698-8.79L.5 2h6.828l4.845 6.36L18.244 2z" />
            </svg>
        </a>

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