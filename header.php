<?php
// Set base path - can be overridden by including file
if (!isset($base_path)) {
    $base_path = '';
}
?>

<style>
    /* SMT Services Mega Menu Styling - Full Width */
    .smt-services-mega-wrapper {
        position: static !important;
    }

    .smt-services-mega-dropdown {
        position: absolute;
        left: 0 !important;
        right: 0 !important;
        width: 100vw !important;
        margin-left: calc(-50vw + 50%) !important;
        background: #ffffff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transform: translateY(20px);
        transition: all 0.3s ease;
        padding: 40px 0;
    }

    .smt-services-mega-wrapper:hover .smt-services-mega-dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .smt-services-mega-content {
        max-width: 1320px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .smt-service-category-block {
        margin-bottom: 30px;
    }

    .smt-service-category-title {
        font-size: 18px;
        font-weight: 700;
        color: #c9ab81;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #c9ab81;
        text-transform: uppercase;
    }

    .smt-service-category-title a {
        color: #c9ab81;
        text-decoration: none;
    }

    .smt-service-category-title a:hover {
        color: #b39872;
    }

    .smt-service-links-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .smt-service-links-list li {
        margin-bottom: 4px;
    }

    .smt-service-links-list li a {
        color: #333333;
        text-decoration: none;
        font-size: 13px;
        transition: all 0.3s ease;
        display: block;
        padding: 3px 0;
    }
        padding: 5px 0;
    }

    .smt-service-links-list li a:hover {
        color: #c9ab81;
        padding-left: 10px;
    }

    /* Desktop Navigation Fixes - Only target top level menu */
    @media (min-width: 992px) {
        .main-menu>ul {
            display: flex !important;
            flex-wrap: nowrap !important;
            align-items: center !important;
            justify-content: flex-start !important;
        }

        .main-menu>ul>li {
            flex-shrink: 0 !important;
        }

        .main-menu>ul>li>a {
            white-space: nowrap !important;
        }

        /* Ensure mega menu content wraps normally */
        .smt-services-mega-dropdown .row {
            flex-wrap: wrap !important;
        }

        .smt-service-links-list {
            display: block !important;
        }

        .smt-service-links-list li {
            display: block !important;
            white-space: normal !important;
        }
        
        /* Reduce mega menu spacing */
        .smt-services-mega-dropdown {
            padding: 25px 0 !important;
        }
        
        .smt-service-category-block {
            margin-bottom: 20px !important;
        }
        
        .smt-service-category-title {
            font-size: 16px !important;
            margin-bottom: 12px !important;
            padding-bottom: 8px !important;
        }
    }

    /* Mobile mega menu - keep as dropdown */
    @media (max-width: 991px) {
        .smt-services-mega-dropdown {
            position: relative !important;
            width: 100% !important;
            margin-left: 0 !important;
            opacity: 1 !important;
            visibility: visible !important;
            transform: none !important;
            box-shadow: none;
            padding: 15px 0;
        }

        .smt-service-category-block {
            margin-bottom: 20px;
        }
    }
</style>

<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



<!-- Mobile Menu -->
<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="<?php echo $base_path; ?>index.php"><img
                    src="<?php echo $base_path; ?>assets/img/logo-subhshree.png" alt="SMT Skin Clinic"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li>
                    <a href="<?php echo $base_path; ?>index.php">Home</a>
                </li>
                <li>
                    <a href="<?php echo $base_path; ?>about.php">About Us</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="<?php echo $base_path; ?>service.php">Services</a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="<?php echo $base_path; ?>service.php#skin">SKIN</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo $base_path; ?>chemical-peels.php">Chemical Peel</a></li>
                                <li><a href="<?php echo $base_path; ?>collagen-stimulators.php">Collagen Stimulators</a>
                                </li>
                                <li><a href="<?php echo $base_path; ?>cosmelan-peel.php">Cosmelan Peel</a></li>
                                <li><a href="<?php echo $base_path; ?>dermal-fillers.php">Dermal Fillers</a></li>
                                <li><a href="<?php echo $base_path; ?>dermaplanning.php">Dermaplaning</a></li>
                                <li><a href="<?php echo $base_path; ?>hand-rejuvenation.php">Hand Rejuvenation</a></li>
                                <li><a href="<?php echo $base_path; ?>led-light-therapy.php">LED Light Therapy</a></li>
                                <li><a href="<?php echo $base_path; ?>microneedling.php">Microneedling</a></li>
                                <li><a href="<?php echo $base_path; ?>morpheus8.php">Morpheus8</a></li>
                                <li><a href="<?php echo $base_path; ?>skin-tightening.php">Skin Tightening</a></li>
                                <li><a href="<?php echo $base_path; ?>forma.php">Forma</a></li>
                                <li><a href="<?php echo $base_path; ?>rosacea-treatment.php">Rosacea Treatment</a></li>
                                <li><a href="<?php echo $base_path; ?>glo2facial.php">GLO2FACIAL</a></li>
                                <li><a href="<?php echo $base_path; ?>hydrafacial.php">Hydrafacial Elite</a></li>
                                <li><a href="<?php echo $base_path; ?>microchannel-infusion-therapy.php">Microchannel
                                        Infusion Therapy</a></li>
                                <li><a href="<?php echo $base_path; ?>melasma.php">Melasma</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo $base_path; ?>service.php#laser">LASER</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo $base_path; ?>acne-scar.php">Acne Scar Treatment</a></li>
                                <li><a href="<?php echo $base_path; ?>aging-skin.php">Aging Skin</a></li>
                                <li><a href="<?php echo $base_path; ?>hyperpigmentation.php">Hyperpigmentation</a></li>
                                <li><a href="<?php echo $base_path; ?>laser-hair-reduction.php">Laser Hair Reduction</a>
                                </li>
                                <li><a href="<?php echo $base_path; ?>moles-removal.php">Mole Removal</a></li>
                                <li><a href="<?php echo $base_path; ?>pores.php">Pores</a></li>
                                <li><a href="<?php echo $base_path; ?>stretch-marks.php">Stretch Marks</a></li>
                                <li><a href="<?php echo $base_path; ?>laser-radio-frequency.php">Laser &
                                        Radio-frequency</a></li>
                                <li><a href="<?php echo $base_path; ?>tattoo-removal.php">Tattoo Removal</a></li>

                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo $base_path; ?>service.php#face">FACE</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo $base_path; ?>aging-skin.php">Aging Skin</a></li>
                                <li><a href="<?php echo $base_path; ?>cheek-augmentation.php">Cheek Augmentation</a>
                                </li>
                                <li><a href="<?php echo $base_path; ?>facial-sculpting.php">Facial Sculpting</a></li>
                                <li><a href="<?php echo $base_path; ?>dermal-fillers.php">Dermal Fillers</a></li>
                                <li><a href="<?php echo $base_path; ?>lip-augmentation.php">Lip Augmentation</a></li>
                                <li><a href="<?php echo $base_path; ?>juvederm.php">Juvederm</a></li>
                                <li><a href="<?php echo $base_path; ?>threads.php">Threads</a></li>
                                <li><a href="<?php echo $base_path; ?>lumecca.php">Lumecca</a></li>
                                <li><a href="<?php echo $base_path; ?>fire-ice-facial.php">Fire & Ice Facial
                                        Treatment</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo $base_path; ?>service.php#body">BODY</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo $base_path; ?>cellulite-reduction.php">Cellulite Reduction</a>
                                </li>
                                <li><a href="<?php echo $base_path; ?>morpheus8.php">Morpheus8 Body</a></li>
                                <li><a href="<?php echo $base_path; ?>forma-plus.php">Forma Plus</a></li>
                                <li><a href="<?php echo $base_path; ?>breast-augmentation.php">Breast Augmentation</a>
                                </li>
                                <li><a href="<?php echo $base_path; ?>hip-augmentation.php">Hip Augmentation</a></li>
                                <li><a href="<?php echo $base_path; ?>non-surgical-butt-lift.php">Non-Surgical Butt
                                        Lift</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo $base_path; ?>blogs">Blog</a>
                </li>
                <li>
                    <a href="<?php echo $base_path; ?>contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Side Menu -->
<!-- <div class="sidemenu-wrapper d-none d-lg-block  ">
            <div class="sidemenu-content">
                <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
                <div class="widget  ">
                    <div class="footer-logo">
                        <img src="<?php echo $base_path; ?>assets/img/logo-subhshree.png" alt="logo">
                    </div>
                    <div class="info-media1">
                        <div class="media-icon"><i class="fal fa-map-marker-alt"></i></div>
                        <span class="media-label">Centerl Park West La, New York</span>
                    </div>
                    <div class="info-media1">
                        <div class="media-icon"><i class="far fa-phone-alt "></i></div>
                        <span class="media-label"><a href="tel:+01234567890" class="text-inherit">+0 123 456 7890</a></span>
                    </div>
                    <div class="info-media1">
                        <div class="media-icon"><i class="fal fa-envelope"></i></div>
                        <span class="media-label"><a class="text-inherit"
                                href="mailto:info@example.com">info@example.com</a></span>
                    </div>
                </div>
                <div class="widget  ">
                    <h3 class="widget_title">Latest post</h3>
                    <div class="recent-post-wrap">
                        <div class="recent-post">
                            <div class="media-img">
                                <a href="blog-details.html"><img src="assets/img/widget/recent-post-1-1.jpg"
                                        alt="Blog Image"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Skinscent Experience
                                        Oskarsson</a></h4>
                                <div class="recent-post-meta">
                                    <a href="blog.html"><i class="fas fa-calendar-alt"></i>march 10, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="media-img">
                                <a href="blog-details.html"><img src="assets/img/widget/recent-post-1-2.jpg"
                                        alt="Blog Image"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Lorem ipsum is
                                        placeholder recent popular</a></h4>
                                <div class="recent-post-meta">
                                    <a href="blog.html"><i class="fas fa-calendar-alt"></i>Augest 10, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="media-img">
                                <a href="blog-details.html"><img src="assets/img/widget/recent-post-1-3.jpg"
                                        alt="Blog Image"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="post-title"><a class="text-inherit" href="blog-details.html">From its medieval
                                        origins health custom</a></h4>
                                <div class="recent-post-meta">
                                    <a href="blog.html"><i class="fas fa-calendar-alt"></i>July 11, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="media-img">
                                <a href="blog-details.html"><img src="assets/img/widget/recent-post-1-4.jpg"
                                        alt="Blog Image"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Letraset's
                                        dry-transfer sheets later</a></h4>
                                <div class="recent-post-meta">
                                    <a href="blog.html"><i class="fas fa-calendar-alt"></i>March 05, 2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

<header class="vs-header header-layout1">
    <div class="smt-unique-header-top d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="smt-unique-header-links">
                        <ul>
                            <li><i class="far fa-map-marker-alt"></i><a href="https://maps.app.goo.gl/OUlgLyEYYaQFtlTJD"
                                    target="_blank">SMT Skin Clinic, Windsor Place, Lucknow</a></li>
                            <li><i class="far fa-phone-alt"></i><a href="tel:+918864877133">+91 88648 77133</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="smt-unique-social-links">
                        <a href="https://www.facebook.com/SMTSkinclinic" target="_blank" title="Facebook"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/smt.skin.clinic_dr.shubhshree" target="_blank"
                            title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://g.page/r/CS-0a2KAd6BiEBM/review" target="_blank" title="Google"><i
                                class="fab fa-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrap">
        <div class="sticky-active">
            <div class="container">
                <div class="row justify-content-between align-items-center gx-60">
                    <div class="col">
                        <div class="nav-logo d-flex align-items-center">
                            <a href="<?php echo $base_path; ?>index.php"><img
                                    src="<?php echo $base_path; ?>assets/img/logo-subhshree.png" alt="logo"></a>
                            <div class="d-flex flex-column ms-2 mt-2">
                                <p class="h4 mb-0">SMT Skin Clinic</p>
                                <p class="italic small mb-2">The aesthectic excellence</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu menu-style1 d-none d-lg-block">
                            <ul>
                                <li class="mega-menu-wrap">
                                    <a href="<?php echo $base_path; ?>index.php">Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_path; ?>about.php">About Us</a>
                                </li>
                                <li class="menu-item-has-children smt-services-mega-wrapper">
                                    <a href="<?php echo $base_path; ?>service.php"
                                        style="position: relative; z-index: 10000;">Service</a>
                                    <div class="smt-services-mega-dropdown">
                                        <div class="container">
                                            <div class="smt-services-mega-content">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="smt-service-category-block">
                                                            <h4 class="smt-service-category-title"><a
                                                                    href="<?php echo $base_path; ?>service.php#skin">SKIN</a>
                                                            </h4>
                                                            <ul class="smt-service-links-list">
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>chemical-peels.php">Chemical
                                                                        Peel</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>collagen-stimulators.php">Collagen
                                                                        Stimulators</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>cosmelan-peel.php">Cosmelan
                                                                        Peel</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>dermal-fillers.php">Dermal
                                                                        Fillers</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>dermaplanning.php">Dermaplaning</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>hand-rejuvenation.php">Hand
                                                                        Rejuvenation</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>led-light-therapy.php">LED
                                                                        Light
                                                                        Therapy</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>microneedling.php">Microneedling</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>morpheus8.php">Morpheus8</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>skin-tightening.php">Skin
                                                                        Tightening</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>forma.php">Forma</a>
                                                                </li>

                                                                <li><a
                                                                        href="<?php echo $base_path; ?>rosacea-treatment.php">Rosacea
                                                                        Treatment</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>glo2facial.php">GLO2FACIAL</a>
                                                                </li>
                                                                <li><a href="<?php echo $base_path; ?>hydrafacial.php">Hydrafacial
                                                                        Elite</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>microchannel-infusion-therapy.php">Microchannel
                                                                        Infusion
                                                                        Therapy</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>melasma.php">Melasma</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="smt-service-category-block">
                                                            <h4 class="smt-service-category-title"><a
                                                                    href="<?php echo $base_path; ?>service.php#laser">LASER</a>
                                                            </h4>
                                                            <ul class="smt-service-links-list">
                                                                <li><a href="<?php echo $base_path; ?>acne-scar.php">Acne
                                                                        Scar Treatment</a></li>
                                                                <li><a href="<?php echo $base_path; ?>aging-skin.php">Aging
                                                                        Skin</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>hyperpigmentation.php">Hyperpigmentation</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>laser-hair-reduction.php">Laser
                                                                        Hair
                                                                        Reduction</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>moles-removal.php">Mole
                                                                        Removal</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>pores.php">Pores</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>stretch-marks.php">Stretch
                                                                        Marks</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>laser-radio-frequency.php">Laser
                                                                        & Radio-frequency</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>tattoo-removal.php">Tattoo
                                                                        Removal</a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="smt-service-category-block">
                                                            <h4 class="smt-service-category-title"><a
                                                                    href="<?php echo $base_path; ?>service.php#face">FACE</a>
                                                            </h4>
                                                            <ul class="smt-service-links-list">
                                                                <li><a href="<?php echo $base_path; ?>aging-skin.php">Aging
                                                                        Skin</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>cheek-augmentation.php">Cheek
                                                                        Augmentation</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>facial-sculpting.php">Facial
                                                                        Sculpting</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>dermal-fillers.php">Dermal
                                                                        Fillers</a></li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>lip-augmentation.php">Lip
                                                                        Augmentation</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>juvederm.php">Juvederm</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>threads.php">Threads</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>lumecca.php">Lumecca</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>fire-ice-facial.php">Fire
                                                                        & Ice Facial
                                                                        Treatment</a></li>
                                </li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="smt-service-category-block">
                        <h4 class="smt-service-category-title"><a
                                href="<?php echo $base_path; ?>service.php#body">BODY</a>
                        </h4>
                        <ul class="smt-service-links-list">
                            <li><a href="<?php echo $base_path; ?>cellulite-reduction.php">Cellulite
                                    Reduction</a></li>
                            <li><a href="<?php echo $base_path; ?>morpheus8.php">Morpheus8
                                    Body</a></li>
                            <li><a href="<?php echo $base_path; ?>forma-plus.php">Forma
                                    Plus</a></li>
                            <li><a href="<?php echo $base_path; ?>breast-augmentation.php">Breast
                                    Augmentation</a></li>
                            <li><a href="<?php echo $base_path; ?>hip-augmentation.php">Hip
                                    Augmentation</a>
                            </li>
                            <li><a href="<?php echo $base_path; ?>non-surgical-butt-lift.php">Non-Surgical
                                    Butt
                                    Lift</a></li>
                            <!-- <li><a href="<?php echo $base_path; ?>ballancer-pro.php">Ballancer
                                    Pro</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </li>
    <li>
        <a href="<?php echo $base_path; ?>blogs">Blog</a>
    </li>
    <li>
        <a href="<?php echo $base_path; ?>contact.php">Contact Us</a>
    </li>
    </ul>
    </nav>
    <button class="vs-menu-toggle d-inline-block d-lg-none" type="button"><i class="fal fa-bars"></i></button>
    </div>
    <div class="col-auto">
        <div class="header-btns d-flex gap-2">
            <a href="<?php echo $base_path; ?>contact.php" class="vs-btn style2 d-none d-xl-inline-block">Book</a>
            <a href="tel:+918864877133" class="vs-btn style2 d-none d-xl-inline-block">Call Now</a>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</header>