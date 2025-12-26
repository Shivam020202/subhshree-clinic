<!-- Footer Area -->
<?php
// Set base path if not already set
if (!isset($base_path)) {
    $base_path = '';
}
?>
<footer class="epic-footer">
    <div class="container">
        <div class="epic-footer__top">
            <div class="row g-4 g-lg-5 align-items-stretch epic-footer__row">
                <div class="col-lg-4">
                    <div class="epic-footer__column">
                        <div class="epic-footer__logo">
                            <img src="<?php echo $base_path; ?>assets/img/logo-subhshree.png"
                                alt="SMT Skin Clinic Logo">
                        </div>
                        <p class="epic-footer__intro">SMT Skin Clinic blends clinical dermatology with bespoke aesthetic
                            artistry, creating radiant, healthy skin with advanced care in the heart of Lucknow.</p>
                        <ul class="epic-footer__contact-list">
                            <li class="epic-footer__contact-item">
                                <span class="epic-footer__contact-icon"><i class="fal fa-map-marker-alt"></i></span>
                                <span class="epic-footer__contact-text">SMT Skin Clinic, Windsor Place, 17/2, beside
                                    Yojna
                                    Bhawan, The Mall Avenue, Lucknow, Uttar Pradesh 226001</span>
                            </li>
                            <li class="epic-footer__contact-item">
                                <span class="epic-footer__contact-icon"><i class="far fa-phone-alt"></i></span>
                                <span class="epic-footer__contact-text"><a href="tel:+918864877133">+91 88648
                                        77133</a></span>
                            </li>
                            <li class="epic-footer__contact-item">
                                <span class="epic-footer__contact-icon"><i class="fal fa-envelope"></i></span>
                                <span class="epic-footer__contact-text"><a
                                        href="mailto:smtskinclinic@gmail.com">smtskinclinic@gmail.com</a></span>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="epic-footer__column">
                        <h4 class="epic-footer__section-title">Quick Links</h4>
                        <ul class="epic-footer__links">
                            <li class="epic-footer__link"><a href="<?php echo $base_path; ?>service.php">Services</a>
                            </li>
                            <li class="epic-footer__link"><a href="<?php echo $base_path; ?>about.php">About Us</a></li>
                            <li class="epic-footer__link"><a href="<?php echo $base_path; ?>contact.php">Contact Us</a>
                            </li>
                            <li class="epic-footer__link"><a href="<?php echo $base_path; ?>blogs">Our Blog</a></li>
                            <li class="epic-footer__link"><a href="<?php echo $base_path; ?>privacy-policy.php">Privacy
                                    Policy</a></li>
                            <li class="epic-footer__link"><a
                                    href="<?php echo $base_path; ?>terms-and-conditions.php">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                        <h5 class="epic-footer__hours-title mb-0">Clinic Hours</h5>
                        <ul class="epic-footer__hours-list">
                            <li class="epic-footer__hours-item"><span>Monday to Saturday</span><span>10 AM - 7
                                    PM</span></li>
                            <li class="epic-footer__hours-item"><span>Sunday</span><span>Closed</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="epic-footer__column">
                        <h4 class="epic-footer__section-title">Stay Connected</h4>
                        <p class="epic-footer__newsletter-copy">Subscribe to our newsletter for the latest updates on
                            skin health,
                            transformative treatments, and exclusive offers curated by our specialists.</p>
                        <form class="epic-footer__newsletter" action="#" method="post">
                            <div class="epic-footer__newsletter-field">
                                <input type="email" name="email" class="form-control" placeholder="Your email address"
                                    required>
                                <button type="submit" class="btn epic-footer__newsletter-btn">Subscribe</button>
                            </div>
                        </form>

                        <div class="footer-social-section">
                            <h5 class="text-white mb-3">Follow Us</h5>
                            <div class="smt-unique-footer-social-links">
                                <a href="https://www.facebook.com/SMTSkinclinic" target="_blank"
                                    class="smt-unique-footer-social-link"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://share.google/OFXZFlI9g6HuaDCa8" target="_blank"
                                    class="smt-unique-footer-social-link"><i class="fab fa-google"></i></a>
                            </div>

                            <a href="https://www.instagram.com/smt.skin.clinic_dr.shubhshree" target="_blank"
                                class="smt-unique-instagram-highlight">
                                <div class="smt-unique-insta-profile me-2">
                                    <i class="fab fa-instagram smt-unique-insta-icon"></i>
                                    <div class="smt-unique-insta-details">
                                        <span class="smt-unique-insta-name">SMT Skin Clinic</span>
                                        <span class="smt-unique-insta-handle">@smt.skin.clinic_dr.shubhshree</span>
                                    </div>
                                </div>
                                <span class="smt-unique-insta-follow-btn ml-5">Follow</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="epic-footer__bottom">
            <div class="row gy-3 align-items-center">
                <div class="col-md text-center text-md-start">
                    <p class="epic-footer__legal mb-0">Copyright <i class="fal fa-copyright"></i> 2025 <a href="/">SMT
                            Skin Clinic</a>. All Rights
                        Reserved 2025</p>
                </div>
                <div class="col-md text-center text-md-end">
                    <div class="epic-footer__policies">
                        <a href="<?php echo $base_path; ?>privacy-policy.php">Privacy Policy</a>
                        <span>|</span>
                        <a href="<?php echo $base_path; ?>terms-and-conditions.php">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="https://wa.me/918864877133" class="smt-unique-whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
</a>

<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>