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
        <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">Log In
        </h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index"> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Log In</li>
            </ol>
        </nav>
        <img class="breadcumb-img d-lg-flex d-none" src="assets/logo/image%20(4)-1702369167.png"
            alt="">
    </div>


</div>

<!-- ========== inner-page-banner end ============= -->
    <div class="login-section pt-120 pb-120">
        <img alt="imges" src="frontend/images/bg/section-bg.png" class="img-fluid section-bg-top">
        <img alt="imges" src="frontend/images/bg/section-bg.png" class="img-fluid section-bg-bottom">
        <div class="container">
            <div class="row d-flex justify-content-center g-4">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="form-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="form-title">
                            <h3>Log In</h3>
                            <p>New Customer? <a
                                    href="register.php">signup here</a></p>
                                                    </div>

                        <form class="w-100" method="POST" id="loginForm" action="forms/action_handler.php">
                            <input type="hidden" name="_token" value="RtroTkybwAIj8nyq22k9izgBREvHf6Tly9nPsBCN" autocomplete="off">                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Enter your email <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value=""
                                            class="" name="login"
                                            placeholder="Enter Username or Email" required>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input type="password" class=""
                                            name="password" id="password" placeholder="Password" required />
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>

                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                >

                                            <label class="form-check-label" for="remember">
                                                Remember Me
                                            </label>
                                        </div>
                                                                                    <a href="password_reset.php"
                                                class="forgot-pass">Forgotten Password</a>
                                                                            </div>
                                </div>
                                                                    <div class="g-recaptcha mb-3" data-sitekey="6LfjPE0pAAAAAD2HW8Xo9Z8UFO-Ceg5YW57cJUre"></div>
                                                                                                </div>
                            <button type="submit" name="user_login" class="account-btn mt-3">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!-- =============== counter-section end =============== -->
                    </div>

        <!-- =============== counter-section end =============== -->

      <?php include 'addon/footer.php'; ?>