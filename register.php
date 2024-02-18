<?php include 'addon/head.php'; ?>
<body>

    
    <div class="layout-wrapper">
        <!-- =============== search-area start =============== -->

 
     

<?php include 'addon/topbar.php'; ?>

  
     

<?php include 'addon/header.php'; ?>

        <!-- ===============  Hero area end=============== -->

        <!-- main-container -->
        
        <div class="main-content">
            

                  <!-- ========== inner-page-banner start ============= -->


<div class="inner-banner">
    <div class="container">
        <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">Sign Up
        </h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index"> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
            </ol>
        </nav>
        <img class="breadcumb-img d-lg-flex d-none" src="assets/logo/image%20(4)-1702369167.png"
            alt="">
    </div>


</div>

<!-- ========== inner-page-banner end ============= -->
    <div class="signup-section pt-120 pb-120">
        <img alt="image" src="frontend/images/bg/section-bg.png" class="section-bg-top">
        <img alt="image" src="frontend/images/bg/section-bg.png" class="section-bg-bottom">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="form-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="form-title">
                            <h3>Sign Up</h3>
                            <p>Do you already have an account? <a
                                    href="login.php">Log in here</a></p>
                        </div>
                        <form class="w-100 register-form" action="forms/action_handler.php" method="post">
						 <input type="hidden" name="redirectlink" value="<?php echo $actual_link; ?>">
						  <input type="hidden" name="registrar" value="register">
                            <input type="hidden" name="type" value="2" autocomplete="off">                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input type="text" value="<?php if(isset($_SESSION['first_name'])){ echo $_SESSION['first_name']; } ?>"
                                            class="" name="first_name"
                                            placeholder="First Name">
                                                                            </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                        <input type="text" value="<?php if(isset($_SESSION['last_name'])){ echo $_SESSION['last_name']; } ?>"
                                            class="" name="last_name"
                                            placeholder="Last Name">
                                                                            </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input type="text" value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ?>"
                                            class="" name="username"
                                            placeholder="Username">
                                                                            </div>
                                </div>
                                    <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Phone Number <span class="text-danger">*</span></label>
                                        <input type="number" value="<?php if(isset($_SESSION['phone_number'])){ echo $_SESSION['phone_number']; } ?>"
                                            class="" name="phone_number"
                                            placeholder="Phone Number">
                                                                            </div>
                                </div>
                               
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Enter your email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } ?>"
                                            class="" name="email"
                                            placeholder="Enter your email">
                                                                            </div>
                                </div>
								
								
								     <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input type="text" value="<?php if(isset($_SESSION['address'])){ echo $_SESSION['address']; } ?>"
                                            class="" name="address"
                                            placeholder="Contact Address">
                                                                            </div>
                                </div>
								
								
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input type="password" class=""
                                            name="password" id="password" placeholder="Password" />
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                                                            </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Confirm Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" name="password_confirmation" id="password2"
                                            placeholder="Confirm Password" />
                                        <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <input type="checkbox" name="terms_policy" value="1" id="terms_policy"
                                                 required>
                                            <label for="terms_policy"> I agree to the Terms &amp; Policy</label>
                                            <br>
                                            <span class="terms_policy" style="display:none;">
                                                <strong
                                                    class="text-danger">The Terms &amp; Policy field is required.</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                            <div class="g-recaptcha mb-3" data-sitekey="6LfjPE0pAAAAAD2HW8Xo9Z8UFO-Ceg5YW57cJUre"></div>
                                                            
                            <button type="submit" name="create_account" class="account-btn">Create Account</button>
                        </form>

                        <div class="form-poicy-area mt-3">
                            <p>By clicking the &quot;signup&quot; button, you create a Customer account, and you agree to Customers
                                <a href="terms-and-conditions.php"
                                    target="_blank">Terms &amp; Conditions</a> &
                                <a href="#privacy-policy.php"
                                    target="_blank">Privacy Policy.</>
                            </p>
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