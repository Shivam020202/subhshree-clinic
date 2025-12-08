<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>Free Skin Type Analysis | SMT Skin Clinic Lucknow | Dr. Shubhshree</title>
    <meta name="description"
        content="Discover your true skin type in 2 minutes. AI-powered analysis by Dr. Shubhshree Misra.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class', // Enable class-based dark mode
            theme: {
                extend: {
                    colors: {
                        smt: {
                            dark: '#2C3E50',
                            navy: '#3C4858',
                            gold: '#C9A961',
                            brown: '#A67C52',
                            light: '#F9FAFB',
                            card: '#FFF9F5',
                            glass: 'rgba(30, 41, 59, 0.7)', // For dark mode cards
                        }
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- React & ReactDOM -->
    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>

    <!-- Babel -->
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

    <!-- Lucide Icons (Preloaded but referenced via custom object for simplicity) -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php echo isset($page_title) ? $page_title : 'SMT Skin Clinic Lucknow | Best Dermatologist & Aesthetic Treatments'; ?>
    </title>
    <meta name="author" content="Dr. Shubhshree Misra">
    <meta name="description"
        content="<?php echo isset($page_description) ? $page_description : 'Premier dermatology & aesthetic clinic in Lucknow. Dr. Shubhshree Misra at SMT Skin Clinic offers laser treatments, dermal fillers, anti-aging solutions. 12+ years experience. Book consultation: +91-8864877133'; ?>">
    <meta name="keywords"
        content="<?php echo isset($page_keywords) ? $page_keywords : 'dermatologist lucknow, skin clinic lucknow, laser treatment lucknow, dermal fillers lucknow, best skin doctor lucknow, aesthetic clinic lucknow, cosmetic dermatology lucknow, skin specialist lucknow, Dr Shubhshree Misra'; ?>">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">



    <meta name="google-site-verification" content="5asG5iOuk3rII-vI4V0gJ6V-qwU9YQqepVFewlN7CJc" />
    <!-- Geo Tags for Local SEO
        <meta name="geo.region" content="IN-UP">
        <meta name="geo.placename" content="Lucknow">
        <meta name="geo.position" content="26.8467;80.9462">
        <meta name="ICBM" content="26.8467, 80.9462"> -->

    <!-- Language and Location
        <meta name="language" content="en-IN">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="audience" content="all">
        <meta name="rating" content="general"> -->

    <!-- Open Graph / Facebook
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
        <meta property="og:title"
            content="<?php echo isset($page_title) ? $page_title : 'SMT Skin Clinic Lucknow | Best Dermatologist'; ?>">
        <meta property="og:description"
            content="<?php echo isset($page_description) ? $page_description : 'Premier dermatology clinic in Lucknow offering laser treatments, dermal fillers & aesthetic services by Dr. Shubhshree Misra at SMT Skin Clinic'; ?>">
        <meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/img/logo-subhshree.png">
        <meta property="og:locale" content="en_IN">
        <meta property="og:site_name" content="SMT Skin Clinic"> -->

    <!-- Twitter
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
        <meta property="twitter:title"
            content="<?php echo isset($page_title) ? $page_title : 'SMT Skin Clinic Lucknow'; ?>">
        <meta property="twitter:description"
            content="<?php echo isset($page_description) ? $page_description : 'Best dermatology & aesthetic clinic in Lucknow'; ?>">
        <meta property="twitter:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/img/logo-subhshree.png"> -->

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#C9AB81">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Canonical URL -->
    <link rel="canonical"
        href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?'); ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logo-subhshree.png" type="image/x-icon">
    <link rel="icon" href="assets/img/logo-subhshree.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/logo-subhshree.png">

    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Marcellus&display=swap"
        rel="stylesheet">

    <!-- Preload important local font (Font Awesome) to avoid FOIT and improve FCP -->
    <link rel="preload" href="assets/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Schema.org markup for Google+
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "MedicalClinic",
                    "@id": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/#organization",
                    "name": "SMT Skin Clinic",
                    "alternateName": "Dr. Shubhshree Skin Clinic",
                    "url": "https://<?php echo $_SERVER['HTTP_HOST']; ?>",
                    "logo": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/img/logo-subhshree.png",
                    "image": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/img/logo-subhshree.png",
                    "description": "Premier dermatology and aesthetic clinic in Lucknow offering advanced laser treatments, dermal fillers, anti-aging solutions, and medical-grade skincare.",
                    "telephone": "+91-8864877133",
                    "email": "smtskinclinic@gmail.com",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "Windsor Place, 17/2, Behind Yojana Bhawan, The Mall Avenue",
                        "addressLocality": "Lucknow",
                        "addressRegion": "Uttar Pradesh",
                        "postalCode": "226001",
                        "addressCountry": "IN"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": "26.8467",
                        "longitude": "80.9462"
                    },
                    "openingHoursSpecification": [
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                            "opens": "11:00",
                            "closes": "14:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                            "opens": "14:30",
                            "closes": "20:00"
                        }
                    ],
                    "priceRange": "$$-$$$",
                    "areaServed": {
                        "@type": "City",
                        "name": "Lucknow"
                    },
                    "medicalSpecialty": ["Dermatology", "Cosmetic Dermatology", "Aesthetic Medicine"],
                    "availableService": [
                        {
                            "@type": "MedicalProcedure",
                            "name": "Laser Hair Removal"
                        },
                        {
                            "@type": "MedicalProcedure",
                            "name": "Dermal Fillers"
                        },
                        {
                            "@type": "MedicalProcedure",
                            "name": "Chemical Peels"
                        },
                        {
                            "@type": "MedicalProcedure",
                            "name": "Microneedling"
                        },
                        {
                            "@type": "MedicalProcedure",
                            "name": "Anti-Aging Treatments"
                        }
                    ]
                },
                {
                    "@type": "Physician",
                    "@id": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/#physician",
                    "name": "Dr. Shubhshree Misra",
                    "honorificPrefix": "Dr.",
                    "givenName": "Shubhshree",
                    "familyName": "Misra",
                    "jobTitle": "Dermatologist & Aesthetic Medicine Specialist",
                    "worksFor": {
                        "@id": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/#organization"
                    },
                    "medicalSpecialty": ["Dermatology", "Venereology", "Leprology", "Aesthetic Medicine"],
                    "alumniOf": {
                        "@type": "EducationalOrganization",
                        "name": "Padmashri Dr. D.Y. Patil Medical College, Navi Mumbai"
                    },
                    "knowsAbout": ["Laser Treatments", "Dermal Fillers", "Anti-Aging", "Skin Rejuvenation", "Cosmetic Dermatology"],
                    "yearsOfExperience": "12",
                    "telephone": "+91-8864877133"
                },
                {
                    "@type": "WebSite",
                    "@id": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/#website",
                    "url": "https://<?php echo $_SERVER['HTTP_HOST']; ?>",
                    "name": "SMT Skin Clinic",
                    "inLanguage": "en-IN",
                    "publisher": {
                        "@id": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/#organization"
                    },
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/?s={search_term_string}",
                        "query-input": "required name=search_term_string"
                    }
                },
                {
                    "@type": "LocalBusiness",
                    "@id": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/#localbusiness",
                    "name": "SMT Skin Clinic",
                    "image": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/img/logo-subhshree.png",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "Windsor Place, 17/2, Behind Yojana Bhawan, The Mall Avenue",
                        "addressLocality": "Lucknow",
                        "addressRegion": "UP",
                        "postalCode": "226001",
                        "addressCountry": "IN"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": "26.8467",
                        "longitude": "80.9462"
                    },
                    "url": "https://<?php echo $_SERVER['HTTP_HOST']; ?>",
                    "telephone": "+91-8864877133",
                    "priceRange": "$$-$$$",
                    "openingHoursSpecification": [
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                            "opens": "11:00",
                            "closes": "14:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                            "opens": "14:30",
                            "closes": "20:00"
                        }
                    ]
                }
            ]
        }
        </script> -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <!-- Fontawesome Icon (preload CSS non-blocking) -->
    <link rel="preload" href="assets/css/fontawesome.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    </noscript>
    <!-- Layerslider (non-critical for initial LCP) -->
    <link rel="preload" href="assets/css/layerslider.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/layerslider.min.css">
    </noscript>
    <!-- jQuery DatePicker (non-critical) -->
    <link rel="preload" href="assets/css/jquery.datetimepicker.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    </noscript>
    <!-- Magnific Popup (non-critical) -->
    <link rel="preload" href="assets/css/magnific-popup.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    </noscript>
    <!-- Slick Slider (non-critical) -->
    <link rel="preload" href="assets/css/slick.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/slick.min.css">
    </noscript>
    <!-- Theme Custom CSS (kept render-blocking as it contains critical layout styles) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Epic footer and additional custom styles -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Breadcrumb Banner Full Width Styles -->
    <link rel="stylesheet" href="assets/css/breadcrumb-banner.css">

    <!-- Custom Styles for Disabled Menu Links -->
    <style>
        /* Desktop menu disabled links */
        .smt-service-links-list .disabled-link,
        .sub-menu .disabled-link {
            color: #c0c0c0 !important;
            cursor: not-allowed;
            pointer-events: none;
            opacity: 0.6;
        }

        /* Mobile menu disabled links */
        .vs-mobile-menu .disabled-link,
        .smt-mobile-category-services .disabled-link {
            color: #c0c0c0 !important;
            cursor: not-allowed;
            pointer-events: none;
            opacity: 0.6;
        }

        /* Hover state for disabled links (no effect) */
        .disabled-link:hover {
            color: #c0c0c0 !important;
            text-decoration: none;
        }
    </style>

    <!-- Banner Slider Styles -->
    <link rel="stylesheet" href="assets/css/banner-slider.css">


    <!-- Import Map for Three.js (Background Feature) -->
    <script type="importmap">
        {
            "imports": {
                "three": "https://cdnjs.cloudflare.com/ajax/libs/three.js/0.160.0/three.module.js",
                "three/addons/": "https://cdn.jsdelivr.net/npm/three@0.160.0/examples/jsm/"
            }
        }
    </script>

    <style>
        :root {
            --smt-primary-dark: #2C3E50;
            --smt-primary-navy: #3C4858;
            --smt-accent-gold: #C9A961;
            --smt-accent-brown: #A67C52;
            --smt-bg-light: #F9FAFB;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            /* Background transition */
            transition: background-color 0.8s ease, color 0.5s ease;
            background-color: var(--smt-bg-light);
            /* Light mode default */
            color: var(--smt-primary-dark);
            overflow-x: hidden;
        }

        /* Dark mode overrides for body */
        html.dark body {
            background-color: #0f172a;
            /* Dark slate */
            color: #f1f5f9;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
        }

        #bg-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: all;
            opacity: 1;
            transition: opacity 0.5s ease;
        }

        /* Improved Theme Transition Overlay */
        #theme-transition-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 9999;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            background-color: transparent;
            transition: background-color 0.5s ease;
            overflow: hidden;
        }

        #theme-icon {
            font-size: 5rem;
            opacity: 0;
            /* UPDATED: Start from TOP (-100vh) instead of bottom */
            transform: translateY(-100vh) rotate(180deg);
            transition: all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        /* Animation Classes */
        .animate-rise {
            opacity: 1 !important;
            transform: translateY(0) rotate(0deg) scale(1.5) !important;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: var(--smt-accent-brown);
            border-radius: 3px;
        }

        .spinner {
            border: 4px solid rgba(166, 124, 82, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border-left-color: var(--smt-accent-brown);
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Improved Response Styling for AI content */
        .ai-response {
            font-size: 0.95rem;
        }

        .ai-response h4 {
            font-weight: 700;
            color: #A67C52;
            /* smt-brown */
            margin-top: 10px;
            margin-bottom: 5px;
            font-family: 'Playfair Display', serif;
        }

        .ai-response ul {
            list-style-type: disc;
            padding-left: 20px;
            margin-bottom: 10px;
        }

        .ai-response li {
            margin-bottom: 4px;
        }

        .ai-response strong {
            font-weight: 600;
            color: #A67C52;
            /* smt-brown for emphasis */
        }

        .ai-response p {
            margin-bottom: 8px;
        }

        /* Dark mode adjustments for AI text */
        .dark .ai-response {
            color: #e2e8f0;
        }

        .dark .ai-response strong {
            color: #C9A961;
            /* smt-gold */
        }

        .dark .ai-response h4 {
            color: #C9A961;
            /* smt-gold */
        }

        /* Responsive Mobile Menu */
        .mobile-menu {
            display: none;
            background-color: white;
            padding: 20px;
            border-top: 1px solid #eee;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            z-index: 49;
        }

        .dark .mobile-menu {
            background-color: #1e293b;
            border-top: 1px solid #334155;
        }

        .mobile-menu.active {
            display: block;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .header-top .container {
                flex-direction: column;
                gap: 5px;
                text-align: center;
            }

            .contact-info a {
                margin-right: 0 !important;
                margin: 0 10px;
                display: inline-block;
            }

            .main-nav {
                display: none;
                /* Hide desktop nav */
            }

            .mobile-toggle {
                display: block !important;
            }

            .footer-grid {
                grid-template-columns: 1fr !important;
                gap: 30px !important;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }

            .cta-badge {
                display: none;
            }
        }
    </style>
</head>