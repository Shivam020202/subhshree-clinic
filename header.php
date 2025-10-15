<?php
// Set base path - can be overridden by including file
if (!isset($base_path)) {
    $base_path = '';
}
?>
<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<!-- Preloader -->
<div class="preloader  ">
    <button class="vs-btn preloaderCls">Cancel Preloader </button>
    <div class="preloader-inner">
        <div class="loader"></div>
    </div>
</div><svg viewBox="0 0 150 150" class="svg-hidden">
    <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
</svg>

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
                            <a href="#">SKIN</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo $base_path; ?>chemical-peels.php">Chemical Peel</a></li>
                                <li><a href="<?php echo $base_path; ?>collagen-stimulators.php">Collagen Stimulators</a></li>
                                <li><a href="<?php echo $base_path; ?>cosmelan-peel.php">Cosmelan Peel</a></li>
                                <li><a href="<?php echo $base_path; ?>dermal-fillers.php">Dermal Fillers</a></li>
                                <li><a href="<?php echo $base_path; ?>dermaplanning.php">Dermaplaning</a></li>
                                <li><a href="<?php echo $base_path; ?>hand-rejuvenation.php">Hand Rejuvenation</a></li>
                                <li><a href="<?php echo $base_path; ?>led-light-therapy.php">LED Light Therapy</a></li>
                                <li><a href="<?php echo $base_path; ?>microneedling.php">Microneedling</a></li>
                                <li><a href="<?php echo $base_path; ?>morpheus8.php">Morpheus8</a></li>
                                <li><a href="<?php echo $base_path; ?>skin-tightening.php">Skin Tightening</a></li>
                                <li><a href="<?php echo $base_path; ?>forma.php">Forma</a></li>
                                <li><a href="<?php echo $base_path; ?>skinpen.php">Skinpen</a></li>
                                <li><a href="<?php echo $base_path; ?>rosacea-treatment.php">Rosacea Treatment</a></li>
                                <li><a href="<?php echo $base_path; ?>glo2facial.php">GLO2FACIAL</a></li>
                                <li><a href="<?php echo $base_path; ?>hydrafacial.php">Hydrafacial Syndeo</a></li>
                                <li><a href="<?php echo $base_path; ?>microchannel-infusion-therapy.php">Microchannel Infusion Therapy</a></li>
                                <li><a href="<?php echo $base_path; ?>melasma.php">Melasma</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">LASER</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo $base_path; ?>acne-scar.php">Acne Scar Treatment</a></li>
                                <li><a href="<?php echo $base_path; ?>aging-skin.php">Aging Skin</a></li>
                                <li><a href="<?php echo $base_path; ?>hyperpigmentation.php">Hyperpigmentation</a></li>
                                <li><a href="<?php echo $base_path; ?>laser-hair-reduction.php">Laser Hair Reduction</a>
                                </li>
                                <li><a href="<?php echo $base_path; ?>moles-removal.php">Mole Removal</a></li>
                                <li><a href="<?php echo $base_path; ?>pores.php">Pores</a></li>
                                <li><a href="<?php echo $base_path; ?>stretch-marks.php">Stretch Marks</a></li>
                                <li><a href="<?php echo $base_path; ?>laser-radio-frequency.php">Laser & Radio-frequency</a></li>
                                <li><a href="<?php echo $base_path; ?>tattoo-removal.php">Tattoo Removal</a></li>

                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">FACE</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo $base_path; ?>aging-skin.php">Aging Skin</a></li>
                                <li><a href="<?php echo $base_path; ?>cheek-augmentation.php">Cheek Augmentation</a></li>
                                <li><a href="<?php echo $base_path; ?>facial-sculpting.php">Facial Sculpting</a></li>
                                <li><a href="<?php echo $base_path; ?>dermal-fillers.php">Dermal Fillers</a></li>
                                <li><a href="<?php echo $base_path; ?>lip-augmentation.php">Lip Augmentation</a></li>
                                <li><a href="<?php echo $base_path; ?>juvederm.php">Juvederm</a></li>
                                <li><a href="<?php echo $base_path; ?>ultherapy.php">Ultherapy</a></li>
                                <li><a href="<?php echo $base_path; ?>threads.php">Threads</a></li>
                                <li><a href="<?php echo $base_path; ?>lumecca.php">Lumecca</a></li>
                                <li><a href="<?php echo $base_path; ?>zo-professional-treatment.php">Zo Professional Treatment</a></li>
                                <li><a href="<?php echo $base_path; ?>fire-ice-facial.php">Fire & Ice Facial Treatment</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">BODY</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo $base_path; ?>cellulite-reduction.php">Cellulite Reduction</a></li>
                                <li><a href="<?php echo $base_path; ?>morpheus8.php">Morpheus8 Body</a></li>
                                <li><a href="<?php echo $base_path; ?>forma-plus.php">Forma Plus</a></li>
                                <li><a href="<?php echo $base_path; ?>breast-augmentation.php">Breast Augmentation</a></li>
                                <li><a href="<?php echo $base_path; ?>hip-augmentation.php">Hip Augmentation</a></li>
                                <li><a href="<?php echo $base_path; ?>non-surgical-butt-lift.php">Non-Surgical Butt Lift</a></li>
                                <li><a href="<?php echo $base_path; ?>ballancer-pro.php">Ballancer Pro</a></li>
                                <li><a href="<?php echo $base_path; ?>emerald-laser.php">Emerald Laser</a></li>
                                <li><a href="<?php echo $base_path; ?>emsculpt-neo.php">Emsculpt Neo</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo $base_path; ?>blogs.php">Blog</a>
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
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-auto text-center py-2 py-md-0">
                    <div class="header-links style-white">
                        <ul>
                            <li class="d-none d-xxl-inline-block"><i class="far fa-map-marker-alt"></i>SMT Skin
                                Clinic, Windsor Place, 17/2, behind Yojna Bhawan, The Mall
                                Avenue, Lucknow, Uttar Pradesh 226001</li>
                            <li><i class="far fa-phone-alt"></i><a href="tel:8864877133">+91 88648 77133</a></li>
                            <li><i class="far fa-envelope"></i><a
                                    href="mailto:smtskinclinic@gmail.com">smtskinclinic@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="social-style1">
                        <a href="https://www.facebook.com/SMTSkinclinic" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                        <a href="https://www.instagram.com/smt.skin.clinic_dr.shubhshree" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://share.google/OUlgLyEYYaQFtlTJD" target="_blank"><i
                                class="fab fa-google"></i></a>
                        <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
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
                            <div class="d-flex flex-column ms-2 mt-4">
                                <p class="h4 mb-0">SMT Skin Clinic</p>
                                <p class="italic small">The aesthectic excellence</p>
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
                                                            <h4 class="smt-service-category-title">SKIN</h4>
                                                            <ul class="smt-service-links-list">
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>chemical-peels.php">Chemical
                                                                        Peel</a>
                                                                </li>
                                                                <li><a href="<?php echo $base_path; ?>collagen-stimulators.php">Collagen
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
                                                                        href="<?php echo $base_path; ?>skinpen.php">Skinpen</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>rosacea-treatment.php">Rosacea
                                                                        Treatment</a></li>
                                                                <li><a href="<?php echo $base_path; ?>glo2facial.php">GLO2FACIAL</a></li>
                                                                <li><a href="<?php echo $base_path; ?>hydrafacial.php">Hydrafacial
                                                                        Syndeo</a></li>
                                                                <li><a href="<?php echo $base_path; ?>microchannel-infusion-therapy.php">Microchannel Infusion
                                                                        Therapy</a>
                                                                </li>
                                                                <li><a href="<?php echo $base_path; ?>melasma.php">Melasma</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="smt-service-category-block">
                                                            <h4 class="smt-service-category-title">LASER</h4>
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
                                                                <li><a href="<?php echo $base_path; ?>laser-radio-frequency.php">Laser & Radio-frequency</a>
                                                                </li>
                                                                <li><a href="<?php echo $base_path; ?>resurfacing.php">Resurfacing</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>tattoo-removal.php">Tattoo
                                                                        Removal</a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="smt-service-category-block">
                                                            <h4 class="smt-service-category-title">FACE</h4>
                                                            <ul class="smt-service-links-list">
                                                                <li><a href="<?php echo $base_path; ?>aging-skin.php">Aging
                                                                        Skin</a></li>
                                                                <li><a href="<?php echo $base_path; ?>cheek-augmentation.php">Cheek
                                                                        Augmentation</a></li>
                                                                <li><a href="<?php echo $base_path; ?>facial-sculpting.php">Facial Sculpting</a>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $base_path; ?>dermal-fillers.php">Dermal
                                                                        Fillers</a></li>
                                                                <li><a href="<?php echo $base_path; ?>lip-augmentation.php">Lip Augmentation</a>
                                                                </li>
                                                                <li><a href="<?php echo $base_path; ?>juvederm.php">Juvederm</a></li>
                                                                <li><a href="<?php echo $base_path; ?>ultherapy.php">Ultherapy</a></li>
                                                                <li><a href="<?php echo $base_path; ?>threads.php">Threads</a></li>
                                                                <li><a href="<?php echo $base_path; ?>lumecca.php">Lumecca</a></li>
                                                                <li><a href="<?php echo $base_path; ?>zo-professional-treatment.php">Zo Professional
                                                                        Treatment</a></li>
                                                                <li><a href="<?php echo $base_path; ?>fire-ice-facial.php">Fire & Ice Facial
                                                                        Treatment</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="smt-service-category-block">
                                                            <h4 class="smt-service-category-title">BODY</h4>
                                                            <ul class="smt-service-links-list">
                                                                <li><a href="<?php echo $base_path; ?>cellulite-reduction.php">Cellulite
                                                                        Reduction</a></li>
                                                                <li><a href="<?php echo $base_path; ?>morpheus8.php">Morpheus8
                                                                        Body</a></li>
                                                                <li><a href="<?php echo $base_path; ?>forma-plus.php">Forma Plus</a></li>
                                                                <li><a href="<?php echo $base_path; ?>breast-augmentation.php">Breast
                                                                        Augmentation</a></li>
                                                                <li><a href="<?php echo $base_path; ?>hip-augmentation.php">Hip Augmentation</a>
                                                                </li>
                                                                <li><a href="<?php echo $base_path; ?>non-surgical-butt-lift.php">Non-Surgical Butt
                                                                        Lift</a></li>
                                                                <li><a href="<?php echo $base_path; ?>ballancer-pro.php">Ballancer Pro</a>
                                                                </li>
                                                                <li><a href="<?php echo $base_path; ?>emerald-laser.php">Emerald Laser</a>
                                                                </li>
                                                                <li><a href="<?php echo $base_path; ?>emsculpt-neo.php">Emsculpt Neo</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="<?php echo $base_path; ?>blogs.php">Blog</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_path; ?>contact.php">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto">
                        <div class="header-icons">
                            <a href="#" class="vs-btn style2 d-none d-xl-inline-block">Book</a>
                            <button class="bar-btn sideMenuToggler d-none d-xl-inline-block">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </button>
                            <button class="vs-menu-toggle d-inline-block d-lg-none" type="button"><i
                                    class="fal fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>