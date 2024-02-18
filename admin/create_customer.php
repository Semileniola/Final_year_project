<?php include 'inc/header.php'; ?>

        <!-- main-container -->

        <div class="main-container">
            <!-- sidebar-area -->
<?php include 'inc/sidebar.php'; ?>
     
            <!-- main-content -->
           <div class="main-content">
                <!-- page-content -->
                                <div class="row mb-35 g-4">
                        <div class="page-title d-flex justify-content-between align-items-center">
                            <h4>Create Customer</h4>
                            <a href="customer" class="eg-btn btn--primary back-btn"> <img src="https://www.bidout-app.egenslab.com/backend/images/icons/back.svg" alt="Go Back"> Go Back</a>
                        </div>    
                </div>
                <div class="eg-card product-card">
                    <form action="../forms/action_handler.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="redirectlink" value="<?php echo $actual_link; ?>">
 <input type="hidden" name="registrar" value="admin">
 <h4 class="form-box-title">Profile Details</h4>
                        <div class="form-box mb-35">
						
						
						
						  <div class="col-xl-3 col-lg-6">
                                    <div class="form-inner mb-35">
                                    <label>User Type <span class="text-danger">*</span></label>
                                        <select class="js-example-basic-single country_id" name="type" required>
                                            <option value="">Select Option</option>
                                                                                        <option value="1">Admin</option>
                                                                                        <option value="2">User</option>
                                                                                    </select>
                                                                            </div>
                                </div>
								
								
								
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-inner mb-35">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input type="text" name="first_name" value="" class="username-input" placeholder="Enter First Name" required>
                                                                            </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-inner mb-35">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                        <input type="text" name="last_name" value="" class="username-input" placeholder="Enter Last Name" required>
                                                                            </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-inner mb-35">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" value="" class="username-input" placeholder="Enter Email" required>
                                                                            </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-inner mb-35">
                                        <label>Mobile Number <span class="text-danger">*</span></label>
                                        <input type="text" name="phone_number" value="" class="username-input" placeholder="Enter Mobile Number" required>
                                                                            </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner mb-35">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input type="text" name="address" value="" class="username-input" placeholder="Enter Address" required>
                                                                            </div>
                                </div>
                             
                            </div>
                        </div>
                        <h4 class="form-box-title">Password</h4>
                        <div class="form-box mb-35">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="form-inner">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input type="text" name="username" value="" class="username-input" placeholder="Enter Username" required>
                                                                            </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-inner">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input type="password" name="password" class="username-input" placeholder="**********" required>
                                                                            </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-inner">
                                        <label>Confirm Password <span class="text-danger">*</span></label>
                                        <input type="password" name="password_confirmation" class="username-input" placeholder="**********" required>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
						
						
                        <div class="button-group mt-15 text-end">
                            <input type="submit" name= "create_account" class="eg-btn btn--green medium-btn me-3" value="Save">
                            <button type="button" class="eg-btn btn--red cancel-btn" onClick="window.location.reload()">Cancel</button>
                        </div>
                    </form>
                </div>
 
            </div>
<?php include 'inc/footer.php'; ?>
