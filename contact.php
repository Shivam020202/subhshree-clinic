<?php
$page_title = "Contact SMT Skin Clinic Lucknow | Book Appointment +91-8864877133";
$page_description = "Visit SMT Skin Clinic at Windsor Place, The Mall Avenue, Lucknow. Book consultation with Dr. Shubhshree Misra for laser treatments, dermal fillers & skin care. Timings: 11AM-2PM, 2:30PM-8PM. Call: +91-8864877133 | Email: smtskinclinic@gmail.com";
$page_keywords = "contact dermatologist lucknow, book appointment skin clinic lucknow, dr shubhshree contact number, skin clinic mall avenue lucknow, skin clinic near me lucknow, aesthetic clinic contact lucknow, SMT skin clinic address, skin specialist appointment lucknow, SMT Skin Clinic";
?>
<!doctype html>
<html class="no-js" lang="zxx">
<?php include 'header-links.php'; ?>

<body>

    <?php include 'header.php'; ?>

    <div class="breadcumb-wrapper " data-bg-src="assets/img/banner/smt-left-banners/3-contact-us.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact <span class="inner-text">Us</span></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact <span class="inner-text">Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Contact Form Area-->
    <section class=" space">
        <div class="container">
            <div class="row gx-70">
                <div class="col-lg-6 mb-40 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="text-center text-lg-start">
                        <span class="sec-subtitle">Experience</span>
                        <h2 class="sec-title3 h1 text-uppercase mb-xxl-2 pb-xxl-1">Get in <span
                                class="text-theme">Touch</span></h2>
                        <div class="col-xxl-10 pb-xl-3">
                            <p class="pe-xxl-4">We think your skin should look and refshed matter Nourish your outer
                                inner beauty with our essential</p>
                        </div>
                    </div>
                    <form action="https://api.web3forms.com/submit" method="POST" class="form-style6" id="contactForm">
                        <!-- Web3Forms Access Key -->
                        <input type="hidden" name="access_key" value="8896dde3-76b7-4bc0-8a62-68a07cb4a523">

                        <!-- Optional: Subject -->
                        <input type="hidden" name="subject" value="New Contact Message - SMT Skin Clinic">

                        <!-- Optional: From Name -->
                        <input type="hidden" name="from_name" value="SMT Skin Clinic Website">

                        <!-- Honeypot Spam Protection -->
                        <input type="text" name="botcheck" class="hidden" style="display: none;">

                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="FULL NAME*" required minlength="3">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="age" id="age" placeholder="AGE*" required min="16"
                                        max="80">
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
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="city_locality" id="city_locality"
                                placeholder="CITY & LOCALITY* (e.g., Lucknow - Gomti Nagar)" required>
                        </div>

                        <div class="form-group">
                            <input type="tel" name="mobile" id="mobile" placeholder="MOBILE NUMBER* (10 digits)"
                                required pattern="[6-9]\d{9}" title="Enter a valid 10-digit Indian mobile number">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="EMAIL (Optional)">
                        </div>

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
                        </div>

                        <div class="form-group" id="otherConcernGroup" style="display: none;">
                            <input type="text" name="concern_other_text" id="concernOtherText"
                                placeholder="PLEASE SPECIFY YOUR CONCERN*">
                        </div>

                        <button class="vs-btn" type="submit" id="submitBtn">Send Message</button>
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
                                    formMessage.textContent = '✓ Thank you! Your message has been sent successfully. We will get back to you soon.';

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
                                submitBtn.textContent = 'Send Message';
                            }
                        });
                    </script>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="contact-map"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.048329818502!2d80.94158057548985!3d26.838415076691547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd3d20ae689f%3A0x140284f01710875e!2sSMT%20Skin%20Clinic%20by%20Dr.Shubhshree!5e0!3m2!1sen!2sin!4v1756839836265!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    <div class="contact-table">
                        <div class="tr">
                            <div class="tb-col">
                                <span class="th">Address :</span>
                                <span class="td">SMT Skin Clinic, Windsor Place, 17/2, behind Yojna Bhawan, The Mall
                                    Avenue, Lucknow, Uttar Pradesh 226001
                                </span>
                            </div>
                        </div>
                        <div class="tr">
                            <div class="tb-col">
                                <span class="th">email :</span>
                                <span class="td"><a href="mailto:info@example.com"
                                        class="text-inherit">smtskinclinic@gmail.com</a></span>
                            </div>
                            <div class="tb-col">
                                <span class="th">time : </span>
                                <span class="td">11 : 00 - 19 : 00</span>
                            </div>
                        </div>
                    </div>
                    <span class="h1">
                        <a href="tel:+918864877133" class="text-inherit"><i
                                class="fal fa-headset me-3 text-theme"></i>+91 88648 77133</a>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <?php include 'footer-scripts.php'; ?>

</body>

</html>