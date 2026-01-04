<?php
$page_title = "Thread Lift - SMT Skin Clinic";
$page_description = "SMT Clinic - Your Health, Our Priority";
$page_keywords = "thread lift, PDO threads, facial lifting, non-surgical facelift, skin tightening";
?>
<!doctype html>
<html class="no-js" lang="zxx">
<?php include 'header-links.php'; ?>

<body>

    <?php include 'header.php'; ?>


    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper" style="background-image: url('assets/img/banner/Face/PDO-threads.png');">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Thread <span class="inner-text">Lift</span></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="service.php">Services</a></li>
                        <li>Thread <span class="inner-text">Lift</span></li>
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
                        <div class="mega-hover"><img
                                src="https://images.pexels.com/photos/7581580/pexels-photo-7581580.jpeg?auto=compress&cs=tinysrgb&w=895&h=499&fit=crop"
                                alt="Thread Lift Treatment"></div>
                    </div> -->

                    <h2 class="text-uppercase">Premium PDO Thread Lift Treatments</h2>
                    <p>Achieve a lifted, more youthful appearance without surgery using PDO (Polydioxanone) thread lift
                        treatments
                        at SMT Skin Clinic. This innovative procedure uses absorbable surgical threads to lift and
                        tighten sagging
                        skin while stimulating natural collagen production for long-lasting rejuvenation and facial
                        contouring.</p>

                    <p>Our experienced practitioners specialize in advanced thread placement techniques to deliver
                        natural-looking
                        lift and definition. Whether you're looking to lift sagging cheeks, define your jawline, or
                        smooth neck
                        bands, our customized thread lift treatments provide immediate results with continued
                        improvement over time.</p>

                    <div class="list-style2">
                        <ul class="list-unstyled">
                            <li>FDA-approved absorbable PDO threads</li>
                            <li>Immediate visible lifting results</li>
                            <li>Minimal downtime (3-5 days)</li>
                            <li>Natural collagen stimulation</li>
                            <li>Long-lasting effects (12-18 months)</li>
                        </ul>
                    </div>

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
                                            and I feel so much more confident. Dr. Shubhshree Misra's expertise made all the
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

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
                        let currentSlide = 0;
                        const totalSlides = 3;
                        let autoSlideInterval;
                        function updateSlider() {
                            const track = document.getElementById('testimonialTrack');
                            const indicators = document.querySelectorAll('.indicator');
                            track.style.transform = `translateX(-${currentSlide * 100}%)`;
                            indicators.forEach((indicator, index) => {
                                indicator.classList.toggle('active', index === currentSlide);
                            });
                        }
                        function nextSlide() {
                            currentSlide = (currentSlide + 1) % totalSlides;
                            updateSlider();
                            resetAutoSlide();
                        }
                        function prevSlide() {
                            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                            updateSlider();
                            resetAutoSlide();
                        }
                        function goToSlide(index) {
                            currentSlide = index;
                            updateSlider();
                            resetAutoSlide();
                        }
                        function startAutoSlide() {
                            autoSlideInterval = setInterval(nextSlide, 5000);
                        }
                        function resetAutoSlide() {
                            clearInterval(autoSlideInterval);
                            startAutoSlide();
                        }
                        startAutoSlide();
                        const slider = document.querySelector('.testimonial-slider');
                        slider.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
                        slider.addEventListener('mouseleave', startAutoSlide);
                    </script>
                    <h3 class="h4">Treatment Experience &amp; Aftercare</h3>
                    <p class="pb-1">Your thread lift treatment begins with a comprehensive facial assessment and
                        customized treatment plan.
                        The procedure typically takes 45-60 minutes under local anesthesia. You'll see immediate lifting
                        results, with
                        continued improvement over 2-3 months as collagen production increases. Minimal downtime of 3-5
                        days is expected,
                        with some temporary swelling or bruising. We provide detailed aftercare instructions to ensure
                        optimal results.</p>
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