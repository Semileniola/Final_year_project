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
        <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s; animation-name: fadeInLeft;">Profile
        </h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./"> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
        <img class="breadcumb-img d-lg-flex d-none" src="./Dashboard - Bidout_files/image (4)-1702369167.png" alt="">
    </div>


</div>

<!-- ========== inner-page-banner end ============= -->
    <div class="dashboard-section pt-120">
        <img alt="image" src="./Dashboard - Bidout_files/section-bg.png" class="img-fluid section-bg-top">
        <img alt="image" src="./Dashboard - Bidout_files/section-bg.png" class="img-fluid section-bg-bottom">
        <div class="container">
            <div class="row g-4">
 <?php include 'addon/dashboard_menu.php'; ?>
                <div class="col-lg-9">

                    <div class="dashboard-profile">
                        <form action="forms/action_handler.php" method="post" enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PATCH">
                            <input type="hidden" name="id" value="<?php echo $_SESSION['user_id']; ?>">                            <div class="owner">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type="file" name="image" id="imageUpload" accept=".png, .jpg, .jpeg">
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                                                                        <div id="imagePreview" style="background-image: url(uploads/users/testimonial-author2-1704801343.png);">
                                                                            </div>
                                </div>
                            </div>
                            <div class="content">
                                <h3><?php getuser('name', $_SESSION['user_id'], $dbc); ?></h3>
                                <p class="para">@<?php getuser('username', $_SESSION['user_id'], $dbc); ?></p>
                            </div>
                    </div>
                    <div class="form-wrapper">

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-inner">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="" value="<?php getuser('name', $_SESSION['user_id'], $dbc); ?>" name="name" placeholder="First Name">
                                                                    </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="form-inner">
                                    <label>Contact Number</label>
                                    <input type="text" class="" value="<?php getuser('contact', $_SESSION['user_id'], $dbc); ?>" name="contact" placeholder="+8801">
                                                                    </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="form-inner">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" class="" value="<?php getuser('email', $_SESSION['user_id'], $dbc); ?>" name="email" placeholder="Email">
                                                                    </div>
                            </div>
                            <div class="col-12">
                                <div class="form-inner">
                                    <label>Address</label>
                                    <input type="text" class="" value="<?php getuser('address', $_SESSION['user_id'], $dbc); ?>" name="address" placeholder="Address">
                                                                    </div>
                            </div>
                            
                          

                          <!--  <div class="col-12">
                                <div class="form-inner">
                                    <label>Password</label>
                                    <input type="password" class="" name="password_confirmation" id="password" placeholder="Password" autocomplete="new-password">
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                                                    </div>
                            </div>
                            <div class="col-12">
                                <div class="form-inner mb-0">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password2" placeholder="Confirm Password" autocomplete="new-password">
                                    <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                </div>
                            </div>-->
                            <div class="col-12">
                                <div class="button-group">
                                    <button type="submit" name="update_profile" class="eg-btn profile-btn">Update Profile</button>
                                    <button type="button" class="eg-btn cancel-btn" onclick="window.location.reload()">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </div>
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