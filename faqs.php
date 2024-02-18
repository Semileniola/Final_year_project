<?php include 'addon/head.php'; ?>
<body>

    
    <div class="layout-wrapper">
     

<?php include 'addon/topbar.php'; ?>

  
     

<?php include 'addon/header.php'; ?>

        <!-- ===============  Hero area end=============== -->

        <!-- main-container -->
        
        <div class="main-content">
            

                  <!-- ========== inner-page-banner start ============= -->



<div class="inner-banner">
    <div class="container">
        <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">FAQ&#039;S
        </h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index"> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQ&#039;S</li>
            </ol>
        </nav>
        <img class="breadcumb-img d-lg-flex d-none" src="assets/logo/image%20(4)-1702369167.png"
            alt="">
    </div>


</div>

<!-- ========== inner-page-banner end ============= -->
           
                                    <div class="faq-section pt-120 ">
    <div class="container">
        <div class="row d-flex justify-content-center gy-5">
            <div class="col-lg-4 col-md-12 order-lg-1 order-2">
                <div class="faq-form-area wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                    <h5>Ask Any Question?</h5>
                    <p class="para">
                        Your email address will not be published. Required fields are marked *</p>
                    <form class="faq-form" action="forms/action_handler.php" method="POST">
                        <input type="hidden" name="url" value="<?php echo $actual_link; ?>" autocomplete="off">                        <div class="form-inner">
                            <label>Your Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class=""
                                value="" placeholder="Enter your name" required>
                                                    </div>
                        <div class="form-inner">
                            <label>Your Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class=""
                                value="" placeholder="Enter your email" required>
                                                    </div>
                        <div class="form-inner">
                            <label>Subject <span class="text-danger">*</span></label>
                            <input type="text" name="subject" class=""
                                value="" placeholder="Subject" required>
                                                    </div>
                        <div class="form-inner">
                            <label>Your Message <span class="text-danger">*</span></label>
                            <textarea name="message" class="" placeholder="Your Message"
                                rows="5" required></textarea>
                                                    </div>
                        <button type="submit" name="contactus"
                            class="eg-btn btn--primary btn--md mt-1 border-0">Send Now</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 text-center order-lg-2 order-1">
                <h2 class="section-title3">Frequently Asked Questions</h2>
                <div class="faq-wrap wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                                            <div class="accordion" id="accordionFaq">
                                                            <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse1"
                                            aria-expanded="true" aria-controls="collapse1">
                                            How can I place a bid on an item?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse"
                                        aria-labelledby="heading1" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                                                                        <p>
                                                First, you have to select your product and go to the details page of that product. You will see the last bid and you have a place higher than this and after that click the place bid button. Your bid will be taken.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse2"
                                            aria-expanded="true" aria-controls="collapse2">
                                            What payment methods are accepted?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse"
                                        aria-labelledby="heading2" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                                                                        <p>
                                                We accept various secure payment methods, including major credit cards and digital payment options. Payment details will be provided at the end of a successful auction. Rest assured, all transactions are encrypted for your security.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse3"
                                            aria-expanded="true" aria-controls="collapse3">
                                            Can I track the status of my bids?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse"
                                        aria-labelledby="heading3" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                                                                        <p>
                                                Yes, you can track your bids in real-time. Visit the "My Bids" section in your account to view the items you've bid on, their current status, and whether you are the highest bidder.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse4"
                                            aria-expanded="true" aria-controls="collapse4">
                                            How can I ensure the authenticity of items?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse"
                                        aria-labelledby="heading4" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                                                                        <p>
                                                We prioritize transparency and authenticity. Each item is accompanied by detailed descriptions and, when available, provenance information. Our team thoroughly vets items to ensure their legitimacy and quality.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse5"
                                            aria-expanded="true" aria-controls="collapse5">
                                            Is my personal information secure?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse"
                                        aria-labelledby="heading5" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                                                                        <p>
                                                <p><b>Yes</b>, we take the security of your information seriously. Our website employs encryption protocols to safeguard your personal and payment details. Refer to our Privacy Policy for more details on data protection measures.</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                                    </div>
                                    </div>
            </div>
        </div>
    </div>
</div>


<!-- =============== counter-section end =============== -->
                    </div>

        <!-- =============== counter-section end =============== -->

      <?php include 'addon/footer.php'; ?>