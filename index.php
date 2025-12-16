<?php
$page_title = "SMT Skin Clinic Lucknow | Best Dermatologist & Laser Treatment Center";
$page_description = "Leading dermatology & aesthetic clinic in Lucknow by Dr. Shubhshree Misra (MD, 12+ yrs exp) at SMT Skin Clinic. Expert laser treatments, dermal fillers, chemical peels, anti-aging & skin rejuvenation. Windsor Place, The Mall Avenue. Book: +91-8864877133";
$page_keywords = "dermatologist lucknow, skin clinic lucknow, laser treatment lucknow, dermal fillers lucknow, chemical peel lucknow, best skin doctor lucknow, cosmetic dermatology lucknow, aesthetic clinic lucknow, anti-aging treatment lucknow, acne treatment lucknow, skin specialist near me, Dr Shubhshree Misra, dermatologist mall avenue lucknow, microneedling lucknow, botox lucknow, skin rejuvenation lucknow, pigmentation treatment lucknow, laser hair removal lucknow, morpheus8 lucknow, SMT Skin Clinic";
?>
<!doctype html>
<html class="no-js" lang="zxx">
<?php include 'header-links.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const attachContactForm = (formId, statusId, submitBtnId) => {
            const form = document.getElementById(formId);
            const statusBox = document.getElementById(statusId);
            const submitBtn = document.getElementById(submitBtnId);

            if (!form || !statusBox || !submitBtn) return;

            const showStatus = (message, type) => {
                statusBox.textContent = message;
                statusBox.classList.remove('success', 'error');
                statusBox.classList.add(type);
                statusBox.style.display = 'block';
            };

            const validateEmail = (email) => {
                if (!email) return true;
                const pattern = /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,}$/;
                return pattern.test(email);
            };

            const validateMobile = (mobile) => {
                const digits = mobile.replace(/\D/g, '');
                return /^\d{10}$/.test(digits);
            };

            form.addEventListener('submit', async (e) => {
                e.preventDefault();

                statusBox.style.display = 'none';

                const name = form.name?.value.trim();
                const age = form.age?.value.trim();
                const city = form.city_locality?.value.trim();
                const mobile = form.mobile?.value.trim();
                const email = form.email?.value.trim();
                const primaryConcern = form.primary_concern?.value.trim();
                const otherConcernField = form.concern_other_text;
                const mathAnswer = form.math_answer?.value.trim();

                if (!name || !age || !city || !mobile || !primaryConcern || !mathAnswer) {
                    showStatus('Please complete all required fields.', 'error');
                    return;
                }

                if (Number(age) < 16 || Number(age) > 80) {
                    showStatus('Please enter a valid age (16-80).', 'error');
                    form.age.focus();
                    return;
                }

                if (!validateMobile(mobile)) {
                    showStatus('Please enter a valid 10-digit mobile number.', 'error');
                    form.mobile.focus();
                    return;
                }

                if (!validateEmail(email)) {
                    showStatus('Please enter a valid email address.', 'error');
                    form.email.focus();
                    return;
                }

                if (primaryConcern === 'Other' && otherConcernField && !otherConcernField.value.trim()) {
                    showStatus('Please specify your concern.', 'error');
                    otherConcernField.focus();
                    return;
                }

                if (parseInt(mathAnswer, 10) !== 8) {
                    showStatus('Please solve the math check correctly (5 + 3 = 8).', 'error');
                    form.math_answer.focus();
                    return;
                }

                submitBtn.disabled = true;
                submitBtn.textContent = 'Sending...';

                const formData = new FormData(form);

                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        body: formData
                    });

                    const data = await response.json();

                    if (data.success) {
                        showStatus('Thank you! Your enquiry has been sent. Our team will contact you shortly.', 'success');
                        form.reset();
                    } else {
                        throw new Error(data.message || 'Form submission failed.');
                    }
                } catch (error) {
                    showStatus('Oops! Something went wrong. Please try again or call us at +91 88648 77133.', 'error');
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Send Enquiry';
                }
            });
        };

        // Attach only to the modal form; the on-page form has its own handler.
        attachContactForm('modalContactForm', 'contactModalStatus', 'contactModalSubmitBtn');

        const concernSelect = document.getElementById('modal_primary_concern');
        const otherConcernWrapper = document.getElementById('modal_other_concern_wrapper');
        const otherConcernInput = document.getElementById('modal_concern_other_text');

        if (concernSelect && otherConcernWrapper && otherConcernInput) {
            concernSelect.addEventListener('change', () => {
                if (concernSelect.value === 'Other') {
                    otherConcernWrapper.style.display = 'block';
                    otherConcernInput.required = true;
                } else {
                    otherConcernWrapper.style.display = 'none';
                    otherConcernInput.required = false;
                    otherConcernInput.value = '';
                }
            });
        }

        const modal = document.getElementById('contactModal');
        if (modal) {
            const closeBtn = modal.querySelector('.smt-fresh-modal__close');
            let dismissed = false;

            const openModal = () => {
                if (dismissed) return;
                modal.classList.add('is-open');
                modal.setAttribute('aria-hidden', 'false');
                document.body.classList.add('modal-open');
                const firstField = modal.querySelector('input, textarea');
                if (firstField) {
                    firstField.focus();
                }
            };

            const closeModal = () => {
                modal.classList.remove('is-open');
                modal.setAttribute('aria-hidden', 'true');
                document.body.classList.remove('modal-open');
                dismissed = true;
            };

            setTimeout(openModal, 5000);

            modal.addEventListener('click', (event) => {
                if (event.target === modal) {
                    closeModal();
                }
            });

            closeBtn?.addEventListener('click', closeModal);

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape' && modal.classList.contains('is-open')) {
                    closeModal();
                }
            });
        }
    });
</script>

<style>
    .quiz-pattern-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            repeating-linear-gradient(45deg, transparent, transparent 40px, rgba(201, 171, 129, 0.03) 40px, rgba(201, 171, 129, 0.03) 80px),
            repeating-linear-gradient(-45deg, transparent, transparent 40px, rgba(201, 171, 129, 0.02) 40px, rgba(201, 171, 129, 0.02) 80px);
        pointer-events: none;
        opacity: 0.6;
    }

    .quiz-shape-left,
    .quiz-shape-right {
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(201, 171, 129, 0.1) 0%, transparent 70%);
        pointer-events: none;
    }

    .quiz-shape-left {
        top: -150px;
        left: -150px;
    }

    .quiz-shape-right {
        bottom: -150px;
        right: -150px;
    }

    .quiz-content {
        position: relative;
        z-index: 2;
    }

    .quiz-icon {
        display: inline-block;
        margin-bottom: 0 !important;
        flex-shrink: 0;
    }

    .quiz-icon i {
        font-size: 28px;
        color: #c9ab81;
        animation: pulseIcon 2s ease-in-out infinite;
    }

    @keyframes pulseIcon {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.1);
            opacity: 0.8;
        }
    }

    .quiz-heading {
        font-size: 20px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 0;
        font-family: 'Marcellus', serif;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        line-height: 1.2;
    }

    .quiz-subtitle {
        font-size: 13px;
        color: #e0e0e0;
        margin-bottom: 0;
        line-height: 1.3;
    }

    .quiz-cta-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #c9ab81 0%, #b89968 100%);
        color: #fff;
        padding: 8px 24px;
        font-size: 14px;
        font-weight: 600;
        border-radius: 25px;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(201, 171, 129, 0.3);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .quiz-cta-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.6s ease;
        z-index: -1;
    }

    .quiz-cta-btn:hover::before {
        left: 100%;
    }

    .quiz-cta-btn:hover {
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 15px 40px rgba(201, 171, 129, 0.6);
        background: linear-gradient(135deg, #d4b78e 0%, #c9ab81 100%);
        color: #fff;
    }

    .quiz-cta-btn i {
        transition: transform 0.3s ease;
    }

    .quiz-cta-btn:hover i {
        transform: translateX(5px);
    }

    /* Responsive Styles for Quiz CTA */
    @media (max-width: 991px) {
        .quiz-cta-section {
            padding: 16px 0;
        }

        .quiz-heading {
            font-size: 18px;
        }

        .quiz-subtitle {
            font-size: 12px;
        }

        .quiz-icon i {
            font-size: 26px;
        }
    }

    @media (max-width: 767px) {
        .quiz-cta-section {
            padding: 15px 0;
        }

        .quiz-content {
            display: block !important;
            text-align: center;
        }

        .quiz-icon {
            margin-bottom: 8px !important;
            margin-right: 0 !important;
        }

        .quiz-heading {
            font-size: 17px;
        }

        .quiz-subtitle {
            font-size: 11px;
        }

        .quiz-cta-btn {
            padding: 7px 20px;
            font-size: 13px;
        }

        .quiz-icon i {
            font-size: 24px;
        }
    }

    @media (max-width: 575px) {
        .quiz-cta-section {
            padding: 14px 0;
        }

        .quiz-heading {
            font-size: 16px;
        }

        .quiz-subtitle {
            font-size: 11px;
        }

        .quiz-cta-btn {
            padding: 7px 18px;
            font-size: 12px;
        }

        .quiz-icon i {
            font-size: 22px;
        }

        .quiz-shape-left,
        .quiz-shape-right {
            width: 200px;
            height: 200px;
        }

        .quiz-shape-left {
            top: -100px;
            left: -100px;
        }

        .quiz-shape-right {
            bottom: -100px;
            right: -100px;
        }
    }
</style>

<body>

    <?php include 'header.php'; ?>



    <!-- Video Banner Section -->
    <section class="video-banner-section">
        <div class="video-banner-container">
            <a href="contact.php" class="d-block text-decoration-none">
                <!-- Desktop Video -->
                <video class="video-banner-video d-none d-md-block" autoplay muted loop playsinline
                    poster="assets/img/hero.webp">
                    <source src="assets/img/hero-video.mp4" type="video/mp4">

                </video>

                <!-- Mobile Video -->
                <video class="video-banner-video d-block d-md-none" autoplay muted loop playsinline
                    poster="assets/img/hero.webp">
                    <source src="assets/img/hero-video-mobile.mp4" type="video/mp4">

                </video>
            </a>
        </div>
    </section>

    <!-- Lead Capture Modal -->
    <div class="smt-fresh-modal" id="contactModal" aria-hidden="true">
        <div class="smt-fresh-modal__panel" role="dialog" aria-modal="true" aria-labelledby="contactModalTitle">
            <button class="smt-fresh-modal__close" type="button" aria-label="Close contact form">
                <i class="fal fa-times"></i>
            </button>
            <div class="smt-fresh-modal__header">
                <p class="smt-fresh-modal__eyebrow">Send Us a Message</p>
                <h2 class="smt-fresh-modal__title" id="contactModalTitle">We’re Here to Help</h2>
                <p class="smt-fresh-modal__subtitle">Tell us about your skin goals and we’ll reach out with tailored
                    next steps.</p>
            </div>
            <form id="modalContactForm" class="smt-fresh-form" action="https://api.web3forms.com/submit" method="POST"
                novalidate>
                <input type="hidden" name="access_key" value="8896dde3-76b7-4bc0-8a62-68a07cb4a523">
                <input type="hidden" name="subject" value="New Consultation Request - SMT Skin Clinic">
                <input type="hidden" name="from_name" value="SMT Skin Clinic Website">
                <input type="text" name="botcheck" class="hidden" style="display: none;">

                <div class="smt-fresh-form__grid">
                    <label class="smt-fresh-field">
                        <span class="smt-fresh-field__label">Full Name *</span>
                        <input type="text" id="modal_contact_name" name="name" placeholder="Enter your full name"
                            aria-label="Full Name" required minlength="3">
                    </label>

                    <label class="smt-fresh-field">
                        <span class="smt-fresh-field__label">Age *</span>
                        <input type="number" id="modal_age" name="age" placeholder="Your age" aria-label="Age" required
                            min="16" max="80">
                    </label>

                    <label class="smt-fresh-field">
                        <span class="smt-fresh-field__label">Gender (Optional)</span>
                        <select id="modal_gender" name="gender" aria-label="Gender">
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Prefer not to say">Prefer not to say</option>
                            <option value="Other">Other</option>
                        </select>
                    </label>

                    <label class="smt-fresh-field smt-fresh-field--full">
                        <span class="smt-fresh-field__label">City & Locality *</span>
                        <input type="text" id="modal_city_locality" name="city_locality"
                            placeholder="e.g., Lucknow - Gomti Nagar" aria-label="City and locality" required>
                    </label>

                    <label class="smt-fresh-field">
                        <span class="smt-fresh-field__label">Mobile Number * (10 digits)</span>
                        <input type="tel" id="modal_mobile" name="mobile" placeholder="10-digit mobile"
                            aria-label="Mobile number" required pattern="[6-9]\d{9}"
                            title="Enter a valid 10-digit Indian mobile number">
                    </label>

                    <label class="smt-fresh-field">
                        <span class="smt-fresh-field__label">Email (Optional)</span>
                        <input type="email" id="modal_email" name="email" placeholder="email@example.com"
                            aria-label="Email">
                    </label>

                    <label class="smt-fresh-field smt-fresh-field--full">
                        <span class="smt-fresh-field__label">What brings you to SMT Skin Clinic? *</span>
                        <select id="modal_primary_concern" name="primary_concern" aria-label="Primary concern" required>
                            <option value="">Select a concern</option>
                            <option value="Acne or acne scars">Acne or acne scars</option>
                            <option value="Anti-aging / fine lines & wrinkles">Anti-aging / fine lines & wrinkles
                            </option>
                            <option value="Pigmentation / uneven skin tone">Pigmentation / uneven skin tone</option>
                            <option value="Hair fall or hair thinning">Hair fall or hair thinning</option>
                            <option value="Laser hair removal">Laser hair removal</option>
                            <option value="Body contouring / weight loss">Body contouring / weight loss</option>
                            <option value="Skin glow / maintenance">Skin glow / maintenance</option>
                            <option value="Other">Other (Please specify below)</option>
                        </select>
                    </label>

                    <label class="smt-fresh-field smt-fresh-field--full" id="modal_other_concern_wrapper"
                        style="display:none;">
                        <span class="smt-fresh-field__label">Please specify your concern *</span>
                        <input type="text" id="modal_concern_other_text" name="concern_other_text"
                            placeholder="Describe your concern" aria-label="Other concern">
                    </label>

                    <!-- <label class="smt-fresh-field">
                        <span class="smt-fresh-field__label">Security Check: 5 + 3 *</span>
                        <input type="number" id="modal_math_answer" name="math_answer" placeholder="Enter the answer"
                            aria-label="Enter the answer" required>
                    </label> -->
                </div>

                <div class="smt-fresh-form__actions">
                    <div id="contactModalStatus" class="smt-fresh-status" role="alert" aria-live="polite"></div>
                    <button class="smt-fresh-button" type="submit" id="contactModalSubmitBtn">Send Enquiry</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Quiz CTA Strip -->
    <section class="quiz-cta-section">
        <div class="quiz-pattern-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="quiz-content d-flex align-items-center">
                        <div class="quiz-icon me-3">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div>
                            <h2 class="quiz-heading mb-1">Find Your Perfect Skin Solution</h2>
                            <p class="quiz-subtitle mb-0">Take our personalized skin assessment quiz and discover the
                                ideal treatments tailored just for you</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 text-md-end text-center mt-3 mt-md-0">
                    <a href="quiz.php" class="quiz-cta-btn">
                        <span>Start Quiz</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="quiz-shape-left"></div>
        <div class="quiz-shape-right"></div>
    </section>


    <!-- New Banner Slider Section (Commented Out) -->
    <!-- <section class="banner-slider-section">
        <div class="banner-slider-wrapper">
            <div class="banner-slider" id="bannerSlider">
                <div class="banner-slide">
                    <img src="assets/img/banner/2.png" alt="SMT Skin Clinic Banner 1" class="banner-img">
                </div>
                <div class="banner-slide">
                    <img src="assets/img/banner/1.png" alt="SMT Skin Clinic Banner 2" class="banner-img">
                </div>
            </div>

            <div class="banner-cta-strip">
                <div class="cta-pattern-bg"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-7">
                            <div class="cta-content">
                                <h3 class="cta-title">Transform Your Skin with Expert Care</h3>
                                <p class="cta-text">Experience advanced dermatology treatments by Dr. Shubhshree Misra.
                                    Book your consultation today!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 text-md-end text-center mt-3 mt-md-0">
                            <a href="quiz.php" class="vs-btn cta-btn">
                                <i class="fas fa-calendar-check me-2 pb-1"></i>Take Quiz
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Hero Area (Hidden) -->
    <div class="hero-layout3" style="display: none;">
        <div class="vs-carousel" data-arrows="true" data-slide-show="1" data-lg-slide-show="1" data-center-mode="true"
            data-xl-center-mode="true" data-ml-center-mode="true" data-lg-center-mode="true" data-md-center-mode="true"
            data-center-padding="475px" data-xl-center-padding="350px" data-ml-center-padding="300px"
            data-lg-center-padding="250px" data-md-center-padding="180px" data-sm-center-padding="150px"
            data-xs-center-padding="100px" id="heroimg" data-asnavfor="#herocontent">
            <div>
                <div class="hero-img"><img src="assets/img/home/Artboard 1-1.webp" alt="Dermatology Clinic"
                        class="w-100">
                </div>
            </div>
            <div>
                <div class="hero-img"><img src="assets/img/banner/2.webp" alt="Skin Care Treatments" class="w-100">
                </div>
            </div>
            <div>
                <div class="hero-img"><img src="assets/img/banner/3.webp" alt="Cosmetic Procedures" class="w-100">
                </div>
            </div>
            <div>
                <div class="hero-img"><img src="assets/img/banner/4.webp" alt="Advanced Dermatology" class="w-100">
                </div>
            </div>
        </div>
        <div class="media-slider">
            <div class="circle-btn">
                <a href="service.php" class="btn-icon"><i class="far fa-arrow-right"></i></a>
                <div class="btn-text">
                    <svg viewBox="0 0 150 150">
                        <text>
                            <textPath href="#textPath">discover your best skin today</textPath>
                        </text>
                    </svg>
                </div>
            </div>
            <div class="vs-carousel" data-asnavfor="#heroimg" id="herocontent" data-slide-show="3"
                data-center-mode="true" data-xl-center-mode="true" data-ml-center-mode="true" data-lg-center-mode="true"
                data-md-center-mode="true" data-md-center-padding="120px">
                <div>
                    <div class="media-style2">
                        <div class="media-shape"></div>
                        <span class="media-label">Healthy Skin Focus</span>
                        <p class="media-title">Acne Treatment</p>
                        <div class="media-line"></div>
                    </div>
                </div>
                <div>
                    <div class="media-style2">
                        <div class="media-shape"></div>
                        <span class="media-label">Rejuvenation</span>
                        <p class="media-title">Anti-Aging Solutions</p>
                        <div class="media-line"></div>
                    </div>
                </div>
                <div>
                    <div class="media-style2">
                        <div class="media-shape"></div>
                        <span class="media-label">Specialized Care</span>
                        <p class="media-title">Psoriasis & Eczema</p>
                        <div class="media-line"></div>
                    </div>
                </div>
                <div>
                    <div class="media-style2">
                        <div class="media-shape"></div>
                        <span class="media-label">Cosmetic Procedures</span>
                        <p class="media-title">Botox & Fillers</p>
                        <div class="media-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Area -->
    <section class=" overflow-hidden mt-5 mb-5 bg-gradient-2">
        <div class="shape-mockup jump-reverse-img d-none d-xxl-block" data-top="22%" data-left="-7%">
            <div class="curb-shape1"></div>
        </div>

        <div class="container">
            <div class="row gx-55">
                <div class="col-lg-5 col-xxl-auto align-self-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="px-xxl-4 mx-xxl-3 pb-md-4 pb-lg-0">
                        <div class="img-box3">
                            <div class="shape-line">
                                <svg viewBox="0 0 442 357">
                                    <path class="shape-line"
                                        d="M220.6 3C339.98 3 437.1 100.12 437.1 219.5V351.99H440.1V219.5C440.1 160.87 417.27 105.75 375.81 64.29C334.35 22.83 279.23 0 220.6 0C161.97 0 106.85 22.83 65.39 64.29C28.67 101.01 6.57 148.46 2 199.56H5.02C15.12 89.5 107.94 3 220.6 3Z" />
                                    <path class="shape-dot"
                                        d="M7 198.5C7 200.433 5.433 202 3.5 202C1.567 202 0 200.433 0 198.5C0 196.567 1.567 195 3.5 195C5.433 195 7 196.567 7 198.5Z" />
                                    <path class="shape-dot"
                                        d="M442 353.5C442 355.433 440.433 357 438.5 357C436.567 357 435 355.433 435 353.5C435 351.567 436.567 350 438.5 350C440.433 350 442 351.567 442 353.5Z" />
                                </svg>
                            </div>
                            <div class="text-shape">
                                <svg viewBox="0 0 408 579">
                                    <path id="textboxpath"
                                        d="M0 204C0 91.3339 91.3339 0 204 0V0C316.666 0 408 91.3339 408 204V316.879V375C408 487.666 316.666 579 204 579V579C91.3339 579 0 487.666 0 375V204Z">
                                    </path>
                                    <text>
                                        <textPath href="#textboxpath" startOffset="720">Rediscover your Radiance
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                            <div class="img-1"><img src="assets/img/about/about-image (2).jpeg" alt="about"></div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xxl align-self-center wow fadeInUp" data-wow-delay="0.3s">
                    <span class="sec-subtitle">Welcome to <span class="sec-subtext">SMT Skin Clinic</span></span>
                    <h1 class="sec-title2">Best Skin Clinic in Lucknow</h1>


                    <p class="quote-text fs-6 lh-sm">
                        The best skin clinic in Lucknow is led by an experienced dermatologist who understands your
                        skin’s unique needs—and at SMT Skin Clinic, Dr. Shubhshree brings expertise, precision and
                        compassionate care to every treatment. With a strong focus on medical accuracy and modern
                        aesthetic science, our clinic offers safe, effective and personalized solutions for all skin and
                        hair concerns.
                    </p>
                    <p>SMT Skin Clinic provides customized treatments for acne and acne scars, pigmentation, melasma,
                        anti-aging, open pores, hair fall, scalp conditions and advanced laser hair reduction. Every
                        procedure is performed using US-FDA approved technology to ensure visible, long-lasting results
                        with complete safety.
                    <p>Under the guidance of Dr. Shubhshree, the clinic has become a trusted destination for individuals
                        seeking clear, healthy and naturally radiant skin. Experience premium care, advanced technology
                        and expert dermatology—discover why SMT Skin Clinic is counted among the best skin clinics in
                        Lucknow.</p>
                    </p>
                    <!-- <div class="row">
                        <div class="col-md-6">
                            <div class="feature-style1">
                                <div class="vs-icon"><img src="assets/img/icon/ab-f-2-1.png" alt="icon"></div>
                                <h3 class="feature-title h5"><a class="text-inherit"
                                        href="service-details.html">Clinical
                                        Dermatology</a></h3>
                                <div class="arrow-shape"><i class="arrow"></i><i class="arrow"></i><i
                                        class="arrow"></i><i class="arrow"></i></div>
                                <p class="feature-text">
                                    Specialized treatment for various skin conditions including acne, eczema, psoriasis,
                                    and fungal
                                    infections, ensuring healthy and clear skin.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-style1">
                                <div class="vs-icon"><img src="assets/img/icon/ab-f-2-2.png" alt="icon"></div>
                                <h3 class="feature-title h5"><a class="text-inherit"
                                        href="service-details.html">Aesthetic & Laser
                                        Services</a></h3>
                                <div class="arrow-shape"><i class="arrow"></i><i class="arrow"></i><i
                                        class="arrow"></i><i class="arrow"></i></div>
                                <p class="feature-text">
                                    Advanced laser treatments, anti-aging solutions, and cosmetic procedures designed to
                                    enhance your
                                    natural beauty and rejuvenate your skin.
                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Area -->
    <div class="position-relative space-extra-bottom">
        <div class="gallery-shape1"></div>
        <div class="container-fluid">
            <div class="row gallery-slider1 vs-carousel" data-slide-show="1" data-center-mode="true"
                data-xl-center-mode="true" data-ml-center-mode="true" data-lg-center-mode="true"
                data-md-center-mode="true" data-center-padding="477px" data-xl-center-padding="320px"
                data-ml-center-padding="200px" data-lg-center-padding="150px" data-md-center-padding="80px">
                <div class="col">
                    <div class="gallery-style2">
                        <div class="gallery-img"><img src="assets/img/before-after/b-a1.webp" alt="gallery"></div>
                        <div class="circle-btn style2">
                            <a href="/service.php" class="btn-icon"><i class="far fa-arrow-right"></i></a>
                            <div class="btn-text">
                                <svg viewBox="0 0 150 150">
                                    <text>
                                        <textPath href="#textPath">how to make your makeup last all day</textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="gallery-style2">
                        <div class="gallery-img"><img src="assets/img/before-after/b-a2.webp" alt="gallery"></div>
                        <div class="circle-btn style2">
                            <a href="/service.php" class="btn-icon"><i class="far fa-arrow-right"></i></a>
                            <div class="btn-text">
                                <svg viewBox="0 0 150 150">
                                    <text>
                                        <textPath href="#textPath">how to make your makeup last all day</textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="gallery-style2">
                        <div class="gallery-img"><img src="assets/img/before-after/b-a3.webp" alt="gallery"></div>
                        <div class="circle-btn style2">
                            <a href="/service.php" class="btn-icon"><i class="far fa-arrow-right"></i></a>
                            <div class="btn-text">
                                <svg viewBox="0 0 150 150">
                                    <text>
                                        <textPath href="#textPath">how to make your makeup last all day</textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="gallery-style2">
                        <div class="gallery-img"><img src="assets/img/before-after/b-a4.webp" alt="gallery"></div>
                        <div class="circle-btn style2">
                            <a href="/service.php" class="btn-icon"><i class="far fa-arrow-right"></i></a>
                            <div class="btn-text">
                                <svg viewBox="0 0 150 150">
                                    <text>
                                        <textPath href="#textPath">how to make your makeup last all day</textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrows-style1">
                <button data-slick-prev=".gallery-slider1"><i class="arrow"></i>Prev</button>
                <button data-slick-next=".gallery-slider1"><i class="arrow"></i>Next</button>
            </div>
        </div>
    </div>

    <!-- Service Area -->
    <section class="mt-5 mb-5">
        <div class="title-area text-center wow fadeInUp" data-wow-delay="0.2s">
            <span class="sec-subtitle">Our Specializations at <span class="sec-subtext">SMT Skin Clinic</span></span>
            <h2 class="sec-title">Expert Dermatology Services</h2>
            <div class="sec-shape mb-5 pb-1"><img src="assets/img/shape/sec-shape-1.png" alt="shape"></div>
        </div>
        <div class="service-inner1">
            <div class="shape-mockup jump d-none d-xxl-block" data-top="-25%" data-right="1%"><img
                    src="assets/img/hero/hero-leaf-5.png" alt="shape"></div>
            <div class="container-xl">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-lg-5 col-xxl-auto">
                        <div class="service-style1 reverse">
                            <div class="vs-icon"><img src="assets/img/icon/sr-i-1-1.png" alt="icon"></div>
                            <div class="service-content">
                                <h3 class="service-title"><a href="service-details.html" class="text-inherit">Acne &
                                        Acne
                                        Scar Treatment</a></h3>
                                <p class="service-text">Comprehensive solutions for active acne and effective methods to
                                    reduce the appearance of old scars.</p>
                            </div>
                        </div>
                        <div class="service-style1 reverse">
                            <div class="vs-icon"><img src="assets/img/icon/sr-i-1-2.png" alt="icon"></div>
                            <div class="service-content">
                                <h3 class="service-title"><a href="service-details.html"
                                        class="text-inherit">Pigmentation &
                                        Melasma</a></h3>
                                <p class="service-text">Targeted treatments for dark spots, uneven skin tone, and
                                    stubborn
                                    melasma for clearer skin.</p>
                            </div>
                        </div>
                        <div class="service-style1 reverse">
                            <div class="vs-icon"><img src="assets/img/icon/sr-i-1-3.png" alt="icon"></div>
                            <div class="service-content">
                                <h3 class="service-title"><a href="service-details.html" class="text-inherit">Anti-Aging
                                        &
                                        Wrinkle Reduction</a></h3>
                                <p class="service-text">Advanced procedures to diminish fine lines, wrinkles, and
                                    restore
                                    youthful skin elasticity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xxl-auto text-center d-none d-lg-block">
                        <img src="assets/img/home/center-img.png" alt="shape" class="mt-n4">
                    </div>
                    <div class="col-md-6 col-lg-5 col-xxl-auto">
                        <div class="service-style1">
                            <div class="vs-icon"><img src="assets/img/icon/sr-i-1-4.png" alt="icon"></div>
                            <div class="service-content">
                                <h3 class="service-title"><a href="service-details.html" class="text-inherit">Hair
                                        Restoration & Management</a></h3>
                                <p class="service-text">Solutions for hair fall, thinning hair, and scalp conditions,
                                    promoting healthier hair growth.</p>
                            </div>
                        </div>
                        <div class="service-style1">
                            <div class="vs-icon"><img src="assets/img/icon/sr-i-1-5.png" alt="icon"></div>
                            <div class="service-content">
                                <h3 class="service-title"><a href="service-details.html" class="text-inherit">Laser
                                        Treatments</a></h3>
                                <p class="service-text">State-of-the-art laser technology for hair removal, skin
                                    resurfacing, and tattoo removal.</p>
                            </div>
                        </div>
                        <div class="service-style1">
                            <div class="vs-icon"><img src="assets/img/icon/sr-i-1-6.png" alt="icon"></div>
                            <div class="service-content">
                                <h3 class="service-title"><a href="service-details.html" class="text-inherit">Chemical
                                        Peels
                                        & Facials</a></h3>
                                <p class="service-text">Customized peels and medical-grade facials to rejuvenate,
                                    brighten,
                                    and improve skin texture.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Price Plan Area -->
    <section class=" ">
        <div class="parallax" data-parallax-image="assets/img/home/sec5-bg.webp"></div>
        <div class="container">
            <div class="row justify-content-center"></div>
            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 wow fadeInUp text-center mb-5" data-wow-delay="0.3s">
                <div class="title-area text-center"></div>
                <span class="text-white sec-subtitle">Tailored For Your Needs <span class="sec-subtext bg-theme">SMT
                        Skin Clinic</span></span>
                <h2 class="text-white sec-title">Our Service Packages</h2>
            </div>
            <div class="price-inner2">
                <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="2">
                    <div class="col-lg-3">
                        <div class="package-style1">
                            <div class="package-top">
                                <div class="package-left">
                                    <p class="package-price">2999<span class="currency">₹</span></p>
                                    <p class="package-duration">Per Session</p>
                                </div>
                                <h3 class="package-name">Basic Skin Renewal</h3>
                            </div>
                            <div class="package-shape"><img src="assets/img/shape/price-shape-2.png" alt="shape">
                            </div>
                            <div class="package-list">
                                <ul class="list-unstyled">
                                    <li><span class="text-title">Initial Skin Consultation</span></li>
                                    <li>Basic Cleanse & Tone</li>
                                    <li>Hydrating Facial</li>
                                    <li>Post-Procedure Care Advice</li>
                                    <li>Suitable for First-Timers</li>
                                    <li>Expert Guidance</li>
                                </ul>
                            </div>
                            <div class="package-btn">
                                <a href="contact.php" class="vs-btn style3">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="package-style1">
                            <div class="package-top">
                                <div class="package-left">
                                    <p class="package-price">4999<span class="currency">₹</span></p>
                                    <p class="package-duration">Per Session</p>
                                </div>
                                <h3 class="package-name">Advanced Derma-Care</h3>
                            </div>
                            <div class="package-shape"><img src="assets/img/shape/price-shape-2.png" alt="shape">
                            </div>
                            <div class="package-list">
                                <ul class="list-unstyled">
                                    <li><span class="text-title">Comprehensive Skin Analysis</span></li>
                                    <li>Targeted Laser Treatment (Small Area)</li>
                                    <li>Chemical Peel (Basic)</li>
                                    <li>Follow-up Session Included</li>
                                    <li>Premium Product Recommendations</li>
                                    <li>Personalized Treatment Plan</li>
                                </ul>
                            </div>
                            <div class="package-btn">
                                <a href="contact.php" class="vs-btn style3">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="package-style1">
                            <div class="package-top">
                                <div class="package-left">
                                    <p class="package-price">4999<span class="currency">₹</span></p>
                                    <p class="package-duration">Per Session</p>
                                </div>
                                <h3 class="package-name">Advanced Derma-Care</h3>
                            </div>
                            <div class="package-shape"><img src="assets/img/shape/price-shape-2.png" alt="shape">
                            </div>
                            <div class="package-list">
                                <ul class="list-unstyled">
                                    <li><span class="text-title">Comprehensive Skin Analysis</span></li>
                                    <li>Targeted Laser Treatment (Small Area)</li>
                                    <li>Chemical Peel (Basic)</li>
                                    <li>Follow-up Session Included</li>
                                    <li>Premium Product Recommendations</li>
                                    <li>Personalized Treatment Plan</li>
                                </ul>
                            </div>
                            <div class="package-btn">
                                <a href="contact.php" class="vs-btn style3">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- Testimonial Area -->
    <section class=" space-top space-extra-bottom">
        <div class="parallax" data-parallax-image="assets/img/bg/testi-bg-2-1.jpg"></div>
        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-top="12%" data-right="6%"><img
                src="assets/img/shape/leaf-1-1.png" alt="shape"></div>
        <div class="shape-mockup jump  d-none d-xxl-block" data-top="35%" data-left="17.5%"><img
                src="assets/img/shape/leaf-1-8.png" alt="shape"></div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sec-subtitle">Our Valued Clients</span>
                <h2 class="sec-title">What <span class="text-theme">SMT Skin Clinic</span> Patients Say</h2>
            </div>
            <div class="pb-1px"></div>
            <div class="testi-style2">
                <span class="vs-icon"><img src="assets/img/icon/quote-1-1.png" alt="icon"></span>
                <div class="vs-carousel" data-slide-show="1" data-fade="true" data-arrows="true" data-ml-arrows="true"
                    data-xl-arrows="true" data-lg-arrows="true" data-prev-arrow="fal fa-long-arrow-left"
                    data-next-arrow="fal fa-long-arrow-right">
                    <div>
                        <p class="testi-text">"Dr. Shubhshree ki clinic aakar meri skin problem theek ho gayi. Pehle
                            bohot
                            tension hoti thi, but now I feel so confident! Best clinic in Lucknow."</p>
                        <div class="arrow-shape"><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i
                                class="arrow"></i></div>
                        <h3 class="testi-name h5">Priya Sharma</h3>
                        <span class="testi-degi">Happy Patient</span>
                    </div>
                    <div>
                        <p class="testi-text">"The laser treatment at SMT Skin Clinic was painless and effective. My
                            skin
                            looks so much better. Highly recommend Dr. Shubhshree and her team!"</p>
                        <div class="arrow-shape"><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i
                                class="arrow"></i></div>
                        <h3 class="testi-name h5">Rahul Verma</h3>
                        <span class="testi-degi">Client</span>
                    </div>
                    <div>
                        <p class="testi-text">"SMT Skin Clinic mein experience kamaal ka tha. Staff bahut friendly hai
                            aur
                            Dr. Shubhshree khud bahut detail mein explain karti hain. My skin has never felt better."
                        </p>
                        <div class="arrow-shape"><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i
                                class="arrow"></i></div>
                        <h3 class="testi-name h5">Anjali Singh</h3>
                        <span class="testi-degi">Regular Visitor</span>
                    </div>
                    <div>
                        <p class="testi-text">"I tried chemical peels here, and the results are fantastic. My
                            pigmentation
                            issues have significantly reduced. Thank you, SMT Skin Clinic!"</p>
                        <div class="arrow-shape"><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i
                                class="arrow"></i></div>
                        <h3 class="testi-name h5">Arjun Kapoor</h3>
                        <span class="testi-degi">Satisfied Patient</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Area -->
    <section style="display: none;" class=" mt-5 mb-5">
        <div class="container">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.2s">
                <span class="sec-subtitle">From Our Experts</span>
                <h2 class="sec-title">Latest <span class="text-theme">Skin Care Insights</span></h2>
                <div class="sec-shape"><img src="assets/img/shape/sec-shape-1.png" alt="shape"></div>
            </div>
            <div class="row vs-carousel arrow-margin wow fadeInUp" data-wow-delay="0.3s" data-slide-show="3"
                data-md-slide-show="2" data-arrows="true">

                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <a href="blogs/chemical-peels-dark-spots.php"><img src="assets/img/blog/blog-5-1.jpg"
                                    alt="Chemical Peels for Dark Spots" class="w-100"></a>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title h5"><a href="blogs/chemical-peels-dark-spots.php">5 Advantages of
                                    Using Chemical Peels for Dark Spots</a></h3>
                            <div class="blog-meta">
                                <a href="blogs/chemical-peels-dark-spots.php">By Dr. Shubhshree</a>
                                <a href="blogs/chemical-peels-dark-spots.php">January 15, 2025</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <a href="blogs/remove-dark-circles.php"><img src="assets/img/blog/blog-d-1-1.jpg"
                                    alt="Remove Dark Circles Under Eyes" class="w-100"></a>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title h5"><a href="blogs/remove-dark-circles.php">How to Remove Dark Circles
                                    Under Eyes</a></h3>
                            <div class="blog-meta">
                                <a href="blogs/remove-dark-circles.php">By Dr. Shubhshree</a>
                                <a href="blogs/remove-dark-circles.php">January 12, 2025</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <a href="blogs/remove-acne-scars-naturally.php"><img src="assets/img/blog/blog-s-1-1.jpg"
                                    alt="Remove Acne Scars Naturally" class="w-100"></a>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title h5"><a href="blogs/remove-acne-scars-naturally.php">Naturally Acne
                                    Scar Removal for Radiant Skin</a></h3>
                            <div class="blog-meta">
                                <a href="blogs/remove-acne-scars-naturally.php">By Dr. Shubhshree</a>
                                <a href="blogs/remove-acne-scars-naturally.php">January 10, 2025</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Area -->
    <section class="vs-cart-wrapper  ">
        <div class="parallax" data-parallax-image="assets/img/home/contact-bg.webp"></div>
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-auto wow fadeInUp" data-wow-delay="0.2s">
                    <div class="info-box" data-overlay="theme" data-opacity="8">
                        <h3 class="sec-title text-uppercase">Our Timing</h3>
                        <div class="info-item">
                            <h4 class="info-title">MONDAY - SATURDAY</h4>
                            <p class="info-text">11:00 - 19:00</p>
                        </div>
                        <div class="info-item">
                            <h4 class="info-title"> SUNDAY</h4>
                            <p class="info-text mb-2">Appointment Only</p><a href="/contact.php"
                                class="btn btn-outline-light btn-sm btn-appointment d-inline-flex align-items-center"
                                aria-label="Make an Appointment">
                                <i class="far fa-calendar-alt me-2" aria-hidden="true"></i>
                                Make an Appointment
                            </a>
                        </div>
                        <a href="tel:+918864877133" class="vs-btn style6"><i class="fal fa-headset"></i>+91 88648
                            77133</a>
                    </div>
                </div>
                <div class="col wow fadeInUp" data-wow-delay="0.3s">
                    <form action="https://api.web3forms.com/submit" method="POST" class="form-style4" id="contactForm">
                        <!-- Web3Forms Access Key -->
                        <input type="hidden" name="access_key" value="8896dde3-76b7-4bc0-8a62-68a07cb4a523">

                        <!-- Optional: Subject -->
                        <input type="hidden" name="subject" value="New Consultation Request - SMT Skin Clinic">

                        <!-- Optional: From Name -->
                        <input type="hidden" name="from_name" value="SMT Skin Clinic Website">

                        <!-- Honeypot Spam Protection (must be a text input, not checkbox) -->
                        <input type="text" name="botcheck" class="hidden" style="display: none;">

                        <span class="sec-subtitle2">Book Your Consultation</span>
                        <h2 class="sec-title text-uppercase">get in <span class="text-theme">touch</span></h2>

                        <!-- Section 1: About You -->
                        <div class="form-group">
                            <input type="text" name="name" id="full_name" placeholder="FULL NAME*" required
                                minlength="3">
                            <i class="far fa-user-circle"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="age" id="age" placeholder="AGE*" required min="16"
                                        max="80">
                                    <i class="far fa-calendar"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="">Gender (Optional)</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Prefer not to say">Prefer not to say</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <i class="far fa-venus-mars"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="city_locality" id="city_locality"
                                placeholder="CITY & LOCALITY* (e.g., Lucknow - Gomti Nagar)" required>
                            <i class="far fa-map-marker-alt"></i>
                        </div>

                        <div class="form-group">
                            <input type="tel" name="mobile" id="mobile" placeholder="MOBILE NUMBER* (10 digits)"
                                required pattern="[6-9]\d{9}" title="Enter a valid 10-digit Indian mobile number">
                            <i class="far fa-phone"></i>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="EMAIL (Optional)">
                            <i class="fal fa-envelope"></i>
                        </div>

                        <!-- Section 2: Your Skin/Hair Concern -->
                        <div class="form-group">
                            <select name="primary_concern" id="primary_concern" class="form-control" required>
                                <option value="">What brings you to SMT Skin Clinic?*</option>
                                <option value="Acne or acne scars">Acne or acne scars</option>
                                <option value="Anti-aging / fine lines & wrinkles">Anti-aging / fine lines & wrinkles
                                </option>
                                <option value="Pigmentation / uneven skin tone">Pigmentation / uneven skin tone</option>
                                <option value="Hair fall or hair thinning">Hair fall or hair thinning</option>
                                <option value="Laser hair removal">Laser hair removal</option>
                                <option value="Body contouring / weight loss">Body contouring / weight loss</option>
                                <option value="Skin glow / maintenance">Skin glow / maintenance</option>
                                <option value="Other">Other (Please specify below)</option>
                            </select>
                            <i class="far fa-heart-pulse"></i>
                        </div>

                        <div class="form-group" id="otherConcernGroup" style="display: none;">
                            <input type="text" name="concern_other_text" id="concernOtherText"
                                placeholder="PLEASE SPECIFY YOUR CONCERN*">
                            <i class="far fa-comment-dots"></i>
                        </div>

                        <div class="form-group mt-4">
                            <button class="vs-btn" type="submit" id="submitBtn">Book Consultation</button>
                        </div>

                        <div id="formMessage"
                            style="margin-top: 15px; padding: 10px; border-radius: 5px; display: none;"></div>
                    </form>

                    <script>
                        // Show/hide "Other" text field based on dropdown selection
                        document.getElementById('primary_concern').addEventListener('change', function () {
                            const otherGroup = document.getElementById('otherConcernGroup');
                            const otherText = document.getElementById('concernOtherText');

                            if (this.value === 'Other') {
                                otherGroup.style.display = 'block';
                                otherText.required = true;
                            } else {
                                otherGroup.style.display = 'none';
                                otherText.required = false;
                                otherText.value = '';
                            }
                        });

                        // Form validation and submission
                        document.getElementById('contactForm').addEventListener('submit', async function (e) {
                            e.preventDefault();

                            // Validate concern is selected
                            const concern = document.getElementById('primary_concern').value;
                            if (!concern) {
                                alert('Please select what brings you to SMT Skin Clinic.');
                                document.getElementById('primary_concern').focus();
                                return false;
                            }

                            // If "Other" is selected, validate text field
                            const otherText = document.getElementById('concernOtherText');
                            if (concern === 'Other' && !otherText.value.trim()) {
                                alert('Please specify your concern in the text field.');
                                otherText.focus();
                                return false;
                            }

                            const submitBtn = document.getElementById('submitBtn');
                            const formMessage = document.getElementById('formMessage');
                            const form = this;

                            // Disable submit button and show loading
                            submitBtn.disabled = true;
                            submitBtn.textContent = 'Sending...';

                            const formData = new FormData(form);

                            try {
                                const response = await fetch('https://api.web3forms.com/submit', {
                                    method: 'POST',
                                    body: formData
                                });

                                const data = await response.json();

                                if (data.success) {
                                    // Show success message
                                    formMessage.style.display = 'block';
                                    formMessage.style.backgroundColor = '#d4edda';
                                    formMessage.style.color = '#155724';
                                    formMessage.style.border = '1px solid #c3e6cb';
                                    formMessage.style.padding = '15px';
                                    formMessage.style.borderRadius = '5px';
                                    formMessage.textContent = '✓ Thank you! Your consultation request has been received. We will contact you shortly.';

                                    // Reset form
                                    form.reset();

                                    // Hide other concern field
                                    document.getElementById('otherConcernGroup').style.display = 'none';

                                    // Auto-hide success message after 10 seconds
                                    setTimeout(() => {
                                        formMessage.style.display = 'none';
                                    }, 10000);
                                } else {
                                    // Show error from API
                                    throw new Error(data.message || 'Form submission failed');
                                }
                            } catch (error) {
                                // Show error message
                                formMessage.style.display = 'block';
                                formMessage.style.backgroundColor = '#f8d7da';
                                formMessage.style.color = '#721c24';
                                formMessage.style.border = '1px solid #f5c6cb';
                                formMessage.style.padding = '15px';
                                formMessage.style.borderRadius = '5px';
                                formMessage.textContent = '✕ Oops! Something went wrong. Please try again or call us at +91-8864877133';
                            } finally {
                                // Re-enable submit button
                                submitBtn.disabled = false;
                                submitBtn.textContent = 'Book Consultation';
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <?php include 'footer-scripts.php'; ?>

</body>

</html>