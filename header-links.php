<head>
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

    <!-- Geo Tags for Local SEO -->
    <meta name="geo.region" content="IN-UP">
    <meta name="geo.placename" content="Lucknow">
    <meta name="geo.position" content="26.8467;80.9462">
    <meta name="ICBM" content="26.8467, 80.9462">

    <!-- Language and Location -->
    <meta name="language" content="en-IN">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="target" content="all">
    <meta name="audience" content="all">
    <meta name="rating" content="general">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title"
        content="<?php echo isset($page_title) ? $page_title : 'SMT Skin Clinic Lucknow | Best Dermatologist'; ?>">
    <meta property="og:description"
        content="<?php echo isset($page_description) ? $page_description : 'Premier dermatology clinic in Lucknow offering laser treatments, dermal fillers & aesthetic services by Dr. Shubhshree Misra at SMT Skin Clinic'; ?>">
    <meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/img/logo-subhshree.png">
    <meta property="og:locale" content="en_IN">
    <meta property="og:site_name" content="SMT Skin Clinic">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="twitter:title"
        content="<?php echo isset($page_title) ? $page_title : 'SMT Skin Clinic Lucknow'; ?>">
    <meta property="twitter:description"
        content="<?php echo isset($page_description) ? $page_description : 'Best dermatology & aesthetic clinic in Lucknow'; ?>">
    <meta property="twitter:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/img/logo-subhshree.png">

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

    <!-- Schema.org markup for Google+ -->
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
    </script>

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

</head>

<!-- Small, safe CSS to reserve aspect ratios and prevent layout shifts for hero and decorative images -->
<style>
    /* Reserve space for hero images to avoid CLS while JS initializes carousels */
    .hero-layout3 .hero-img img {
        aspect-ratio: 16/9;
        width: 100%;
        height: auto;
        display: block;
    }

    /* Decorative shapes — reserve a reasonable aspect ratio */
    .img-box3 .img-2 img {
        aspect-ratio: 4/3;
        max-width: 100%;
        height: auto;
        display: block;
    }

    /* img-1 should display at its original (intrinsic) size but remain responsive if container is smaller */
    .img-box3 .img-1 img {
        width: auto;
        max-width: 100%;
        height: auto;
        display: block;
    }

    /* Ensure carousel images don't collapse before JS runs */
    .vs-carousel img {
        display: block;
        width: 100%;
        height: auto;
    }
</style>