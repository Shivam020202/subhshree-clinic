<?php
$page_title = "Hand Rejuvenation - SMT Skin Clinic - Advanced Hand Anti-Aging Treatment";
$page_description = "SMT Clinic - Your Health, Our Priority";
$page_keywords = "clinic, health, wellness, medical, treatment, care, therapy, doctor, hospital, healthcare";
?>
<!doctype html>
<html class="no-js" lang="zxx">
<?php include 'header-links.php'; ?>
<!-- Added testimonial slider section -->
<style>
    .testimonial-section {
        padding: 60px 0;
        background: #f8f9fa;
        margin: 40px 0;
        border-radius: 10px;
    }

    .testimonial-section .section-title {
        text-align: center;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 40px;
        color: #333;
    }

    .testimonial-slider {
        position: relative;
        max-width: 900px;
        margin: 0 auto;
        padding: 0 60px;
    }

    .testimonial-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .testimonial-slide {
        min-width: 100%;
        padding: 40px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .rating {
        margin-bottom: 20px;
    }

    .rating i {
        color: #ffc107;
        font-size: 20px;
        margin: 0 2px;
    }

    .testimonial-text {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 25px;
        font-style: italic;
    }

    .testimonial-author {
        margin-top: 20px;
    }

    .author-name {
        font-size: 18px;
        font-weight: 700;
        color: #333;
        margin-bottom: 5px;
    }

    .author-details {
        font-size: 14px;
        color: #777;
    }

    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: white;
        border: 2px solid #ddd;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        z-index: 10;
    }

    .slider-nav:hover {
        background: #007bff;
        border-color: #007bff;
        color: white;
    }

    .slider-nav.prev {
        left: 0;
    }

    .slider-nav.next {
        right: 0;
    }

    .slider-nav i {
        font-size: 18px;
        color: inherit;
    }

    .slider-indicators {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 30px;
    }

    .indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #ddd;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .indicator.active {
        background: #007bff;
        width: 30px;
        border-radius: 6px;
    }

    @media (max-width: 768px) {
        .testimonial-slider {
            padding: 0 50px;
        }

        .testimonial-slide {
            padding: 30px 20px;
        }

        .testimonial-section .section-title {
            font-size: 24px;
        }

        .slider-nav {
            width: 35px;
            height: 35px;
        }

        .slider-nav i {
            font-size: 14px;
        }
    }
</style>

<body>

    <?php include 'header.php'; ?>


    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper" style="background-image: url('assets/img/banner/Skin/hand-rejuvenation.png');">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Hand <span class="inner-text">Rejuvenation</span></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Hand <span class="inner-text">Rejuvenation</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Service Details
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse gx-50">
                <div class="col-lg-8 col-xl mb-30 mb-lg-0">
                    <!-- <div class="mb-30">
                        <div class="mega-hover"><img src="assets/img/service/s-d-1-1.jpg"
                                alt="Hand Rejuvenation Treatment"></div>
                    </div> -->
                    <h2 class="text-uppercase">Hand Rejuvenation Treatment</h2>
                    <p>Restore the youthful appearance of your hands with our comprehensive Hand Rejuvenation treatments
                        at SMT Skin Clinic. Our hands often show the first signs of aging, developing age spots,
                        wrinkles, and volume loss that can make them appear older than our face. Our advanced hand
                        rejuvenation procedures combine multiple techniques to address these concerns effectively.</p>
                    <p>Our hand rejuvenation treatments include dermal fillers to restore volume, laser therapy to
                        remove age spots, and skin tightening procedures to improve texture and firmness. The result is
                        smoother, more youthful-looking hands that match your facial appearance. <strong>Experience the
                            confidence that comes with beautiful, rejuvenated hands.</strong></p>

                    <!-- What is Hand Rejuvenation Section -->
                    <div class="mt-40 mb-30">
                        <h3 class="h4">What is Hand Rejuvenation?</h3>
                        <p>Hand rejuvenation is a comprehensive cosmetic treatment designed to reverse the visible signs
                            of aging on the hands. This multi-modal approach combines various advanced techniques
                            including dermal fillers, laser treatments, chemical peels, and skin tightening procedures
                            to restore volume, improve skin texture, and eliminate age spots and wrinkles.</p>
                        <div class="list-style2">
                            <ul class="list-unstyled">
                                <li>Dermal fillers to restore lost volume and plumpness</li>
                                <li>Laser therapy to remove age spots and sun damage</li>
                                <li>Skin tightening treatments for improved firmness</li>
                                <li>Chemical peels to enhance skin texture and tone</li>
                            </ul>
                        </div>
                    </div>

                    <!-- What Causes Hand Aging Section -->
                    <div class="mt-40 mb-30">
                        <h3 class="h4">What Causes Hand Aging?</h3>
                        <p>Hand aging is caused by a combination of intrinsic and extrinsic factors that affect the
                            skin's appearance and structure over time. Understanding these causes helps us develop
                            targeted treatment approaches for optimal results.</p>
                        <div class="list-style2">
                            <ul class="list-unstyled">
                                <li><strong>Sun Exposure:</strong> UV radiation breaks down collagen and causes age
                                    spots</li>
                                <li><strong>Volume Loss:</strong> Natural decrease in fat and collagen leads to visible
                                    veins and tendons</li>
                                <li><strong>Repetitive Use:</strong> Daily activities cause wear and contribute to
                                    wrinkle formation</li>
                                <li><strong>Genetics:</strong> Inherited factors influence skin aging patterns and speed
                                </li>
                                <li><strong>Environmental Damage:</strong> Pollution and harsh chemicals accelerate
                                    aging</li>
                            </ul>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-6 mb-30">
                            <div class="mega-hover"><img src="assets/img/service/s-d-1-2.jpg"
                                    alt="Before Hand Treatment" class="w-100">
                            </div>
                        </div>
                        <div class="col-6 mb-30">
                            <div class="mega-hover"><img src="assets/img/service/s-d-1-3.jpg" alt="After Hand Treatment"
                                    class="w-100">
                            </div>
                        </div>
                    </div> -->



                    <section class="testimonial-section">
                        <div class="container ">
                            <h2 class="section-title ">What Our Patients Say</h2>

                            <div class="testimonial-slider" style="overflow: hidden;">
                                <button class="slider-nav prev" onclick="prevSlide()">
                                    <i class="fas fa-chevron-left"></i>
                                </button>

                                <div class="testimonial-track" id="testimonialTrack">
                                    <div class="testimonial-slide">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="testimonial-text">
                                            "After struggling with acne scars for years, I finally found hope at SMT
                                            Skin
                                            Clinic. The combination of fractional laser and microneedling treatments has
                                            dramatically improved my skin texture. My ice pick scars are barely visible
                                            now,
                                            and I feel so much more confident. Dr. Sharma's expertise made all the
                                            difference!"
                                        </p>
                                        <div class="testimonial-author">
                                            <div class="author-name">Ananya Verma</div>
                                            <div class="author-details">Age 28, Software Developer, Lucknow</div>
                                        </div>
                                    </div>

                                    <div class="testimonial-slide">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="testimonial-text">
                                            "I had severe boxcar scarring from teenage acne that affected my self-esteem
                                            for
                                            over a decade. The personalized treatment plan at SMT Skin Clinic, including
                                            TCA
                                            CROSS and laser resurfacing, has transformed my skin. The results exceeded
                                            my
                                            expectations. Highly recommend their acne scar treatments!"
                                        </p>
                                        <div class="testimonial-author">
                                            <div class="author-name">Rohit Singh</div>
                                            <div class="author-details">Age 34, Business Owner, Kanpur</div>
                                        </div>
                                    </div>

                                    <div class="testimonial-slide">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="testimonial-text">
                                            "The rolling scars on my cheeks made me avoid cameras and social gatherings.
                                            After completing my treatment series at SMT Skin Clinic, my skin is smoother
                                            than
                                            it's been in years. The team was professional, the treatments were
                                            comfortable,
                                            and the progressive improvements kept me motivated. Thank you!"
                                        </p>
                                        <div class="testimonial-author">
                                            <div class="author-name">Priyanka Dubey</div>
                                            <div class="author-details">Age 31, Teacher, Allahabad</div>
                                        </div>
                                    </div>
                                </div>

                                <button class="slider-nav next" onclick="nextSlide()">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>

                            <div class="slider-indicators">
                                <button class="indicator active" onclick="goToSlide(0)"></button>
                                <button class="indicator" onclick="goToSlide(1)"></button>
                                <button class="indicator" onclick="goToSlide(2)"></button>
                            </div>
                        </div>
                    </section>

                    <script>
                        (function () {
                            const track = document.getElementById('testimonialTrack');
                            if (!track) {
                                return;
                            }

                            const slides = Array.from(track.children);
                            const indicators = Array.from(document.querySelectorAll('.slider-indicators .indicator'));
                            let currentIndex = 0;

                            function updateSlider(index) {
                                const clampedIndex = (index + slides.length) % slides.length;
                                track.style.transform = `translateX(-${clampedIndex * 100}%)`;
                                indicators.forEach((indicator, idx) => {
                                    indicator.classList.toggle('active', idx === clampedIndex);
                                });
                                currentIndex = clampedIndex;
                            }

                            window.goToSlide = function (index) {
                                updateSlider(index);
                            };

                            window.nextSlide = function () {
                                updateSlider(currentIndex + 1);
                            };

                            window.prevSlide = function () {
                                updateSlider(currentIndex - 1);
                            };
                        })();
                    </script>

                    <h3 class="h4">Treatment Benefits</h3>
                    <p class="pb-1">Our hand rejuvenation treatments offer comprehensive anti-aging benefits that
                        restore the natural beauty of your hands. The combination of advanced techniques ensures optimal
                        results with minimal downtime, giving you the confidence to show off your hands again.</p>
                </div>
                
                <?php include 'service-sidebar.php'; ?>

            </div>
        </div>
    </section>

    <!--==============================
            Footer Area
    ==============================-->

    <?php include 'footer.php'; ?>

    <?php include 'footer-scripts.php'; ?>

</body>

</html>
