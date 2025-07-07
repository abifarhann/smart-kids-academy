<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SmartKids Academy</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo/web-logo-2.png') }}">
    <link href="{{ asset('tailadmin/build/style.css') }}" rel="stylesheet">
    <!-- Tambahkan di <head> atau sebelum </body> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<style>
    body,
    html {
        margin: 0;
        padding: 0;
        scroll-behavior: smooth;
    }

    header img {
        width: 100vw;
        height: auto;
        display: block;
    }

    .navbar {
        font-size: medium;
        color: white;
        background-color: transparent;
        backdrop-filter: blur(0px);
        padding: 16px 32px 16px;
        box-shadow: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        margin: 0;
        border-radius: 0;
        width: 100%;
        z-index: 999;
        transition: all 0.3s ease;
    }

    .navbar.scrolled {
        background-color: #0047A0;
    }

    .gradient-bg {
        background: linear-gradient(135deg, #1e1e1e 0%, #2d2d2d 100%);
    }

    .hover-lift {
        transition: all 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .icon-bounce {
        animation: bounce 2s infinite;
    }


    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }


    /* program section */
    #program p {
        text-align: center;
    }

    /* footer */
    .hover-lift {
        transition: all 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-2px);
    }

    .star-rating {
        display: flex;
        gap: 2px;
        align-items: center;
    }

    .star {
        width: 20px;
        height: 20px;
        color: #fbbf24;
        fill: currentColor;
    }

    .review-card {
        transition: all 0.3s ease;
    }

    .review-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .fade-in {
        animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .testimonial-section {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }

    .review-header {
        border-bottom: 1px solid #e2e8f0;
        padding-bottom: 1rem;
        margin-bottom: 1.5rem;
    }

    .reviewer-name {
        font-weight: 600;
        color: #1f2937;
        font-size: 1.1rem;
    }

    .review-date {
        color: #6b7280;
        font-size: 0.9rem;
    }

    .responsive-grid-container {
        display: grid;
        grid-template-columns: repeat(1, minmax(0, 1fr));
        /* Default: 1 kolom (untuk mobile) */
        gap: 1.5rem;
        /* gap-6 */
    }

    .card-item {
        background-color: #eff5ff;
        /* Warna latar belakang kartu */
        border-radius: 0.5rem;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        color: #333333;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card-item:hover {
        transform: scale(1.03);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .icon-box {
        background-color: white;
        padding: 0.75rem;
        border-radius: 0.375rem;
        margin-bottom: 1rem;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }

    .icon-box svg {
        width: 1.5rem;
        height: 1.5rem;
        color: #1456ff;
        /* Warna ikon biru */
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .card-description {
        font-size: 0.875rem;
        color: #666666;
    }

    /* General section styling */
    .section-container {
        max-width: 1280px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 1rem;
        padding-right: 1rem;
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

    .section-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    /* =================================== RESPONSIVE ========================================== */
    /* Mobile responsive adjustments */
    @media (min-width: 767px) {
        .footer-grid {
            display: grid !important;
            grid-template-columns: repeat(4, 1fr) !important;
        }

        .responsive-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        }

        .responsive-grid-container {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            /* Laptop: 2 kolom */
        }
    }

    @media (max-width: 768px) {
        .navbar {
            padding: 12px 20px;
        }

        .navbar img {
            width: 40px !important;
            height: 40px !important;
        }

        .hero-title {
            font-size: 2.5rem !important;
        }

        .hero-subtitle {
            font-size: 1.2rem !important;
        }

        .hero-content {
            padding-top: 100px !important;
        }

        .img-bg {
            width: 100vw;
            position: absolute;
            height: 100vh;
            display: block;
            top: 0;
            bottom: 0;
        }

        .review-card {
            margin-bottom: 1rem;
        }

        #welcome-card img {
            width: 100vh;
            height: 100vh;
        }

        #welcome-card h2 {
            font-size: 18px;
        }

        #welcome-card p {
            font-size: 14px;
        }

    }

    @media (max-width: 480px) {
        .navbar {
            padding: 10px 16px;
        }

        .hero-title {
            font-size: 3rem !important;
            padding: 10px;
            text-align: center;
        }

        .hero-subtitle {
            font-size: 1.2rem !important;
        }

        #about,
        #program {
            padding: 30px;
        }

        #about,
        #program,
        #faq,
        #diskon,
        #testimoni h1 {
            font-size: 18px;
        }

        #about,
        #program,
        #faq,
        #diskon,
        #testimoni p {
            font-size: 16px;
        }

        #program h1 {
            text-align: center;
        }

        #program p {
            text-align: justify;
        }

        #diskon {
            margin-top: -100px;
        }


    }

    /* Mobile menu styles */
    .mobile-menu {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background-color: #0047A0;
        transform: translateY(-100%);
        transition: transform 0.3s ease;
        z-index: 998;
        padding-top: 80px;
    }

    .mobile-menu.open {
        transform: translateY(0);
    }

    .mobile-menu a {
        display: block;
        padding: 16px 32px;
        color: white;
        text-decoration: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        transition: background-color 0.3s ease;
    }

    .mobile-menu a:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    /* Hamburger animation */
    .hamburger {
        display: flex;
        flex-direction: column;
        cursor: pointer;
        padding: 4px;
    }

    .hamburger span {
        width: 25px;
        height: 3px;
        background-color: white;
        margin: 3px 0;
        transition: 0.3s;
        border-radius: 2px;
    }

    .hamburger.active span:nth-child(1) {
        transform: rotate(-45deg) translate(-5px, 6px);
    }

    .hamburger.active span:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active span:nth-child(3) {
        transform: rotate(45deg) translate(-5px, -6px);
    }

    header {
        background-color: #0047A0;
        min-height: 100vh;
        position: relative;
    }

    .container {
        padding-top: 150px;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }

    .brochure-container {
        flex-direction: column !important;
        gap: 24px !important;
    }

    .brochure-card img {
        max-width: 90vw !important;
    }

    /* Overlay for mobile menu */
    .menu-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 997;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .menu-overlay.open {
        opacity: 1;
        visibility: visible;
    }

    /* CSS untuk rotasi ikon panah dan menyembunyikan/menampilkan konten akordeon */
    .accordion-content {
        transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
        overflow: hidden;
        max-height: 0;
        opacity: 0;
    }

    .accordion-content.show {
        max-height: 500px;
        /* Nilai ini harus cukup besar untuk menampung konten */
        opacity: 1;
    }

    .accordion-icon.rotate-180 {
        transform: rotate(180deg);
    }
</style>


<body class="w-full p-0 bg-white">

    @yield('content')

    <button onclick="scrollToTop()" id="backToTopBtn"
        style="position: fixed; bottom: 30px; right: 30px; z-index: 999; background-color: #2563EB; color: white; border: none; border-radius: 50%; width: 50px; height: 50px; font-size: 24px; cursor: pointer; display: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        ↑
    </button>

    <script src="{{ asset('tailadmin/build/bundle.js') }}"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuOverlay = document.getElementById('menuOverlay');

        function toggleMenu() {
            const isOpen = mobileMenu.classList.contains('open');

            if (isOpen) {
                // Close menu
                mobileMenu.classList.remove('open');
                menuOverlay.classList.remove('open');
                menuToggle.classList.remove('active');
                document.body.style.overflow = '';
            } else {
                // Open menu
                mobileMenu.classList.add('open');
                menuOverlay.classList.add('open');
                menuToggle.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        }

        menuToggle.addEventListener('click', toggleMenu);
        menuOverlay.addEventListener('click', toggleMenu);

        // Close menu when clicking on menu items
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', toggleMenu);
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                const offset = 80; // Ubah sesuai tinggi navbar
                const bodyRect = document.body.getBoundingClientRect().top;
                const elementRect = targetElement.getBoundingClientRect().top;
                const elementPosition = elementRect - bodyRect;
                const offsetPosition = elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            });
        });


        // FAQ
        function toggleAccordion(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('.accordion-icon'); // Menggunakan kelas untuk ikon

            // Menutup semua akordeon lain yang terbuka
            document.querySelectorAll('.accordion-content').forEach(item => {
                if (item !== content && item.classList.contains('show')) {
                    item.classList.remove('show');
                    item.previousElementSibling.querySelector('.accordion-icon').classList.remove('rotate-180');
                }
            });

            // Meng-toggle akordeon yang diklik
            content.classList.toggle('show');
            icon.classList.toggle('rotate-180');
        }

        // Show/hide button on scroll
        window.onscroll = function() {
            const btn = document.getElementById("backToTopBtn");
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
        };

        // Smooth scroll to top
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>
