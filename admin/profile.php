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
            <h4>Admin Profile</h4>
            <a href="https://www.bidout-app.egenslab.com/dashboard" class="eg-btn btn--primary back-btn"> <img
                    src="https://www.bidout-app.egenslab.com/backend/images/icons/back.svg" alt="Go Dashboard">
                Go Dashboard</a>
        </div>
    </div>

    <div class="eg-card product-card">
        <div class="eg-card-title">
            <h4>Bidout Apps</h4>
        </div>
        <form action="https://www.bidout-app.egenslab.com/dashboard/profile/1/update" method="post" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
            
            <input type="hidden" name="_token" value="iR4yvsHXaN1MSfD4GlQPjgSYeqFw9l3WyGi40NkP" autocomplete="off">            <h4 class="form-box-title">Profile Details</h4>
            <div class="form-box mb-35">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-inner mb-35">
                            <label>First Name <span class="text-danger">*</span></label>
                            <input type="text" name="fname" value="Bidout"
                                class="username-input" placeholder="Enter First Name">
                                                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-inner mb-35">
                            <label>Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="lname" value="Apps"
                                class="username-input" placeholder="Enter Last Name">
                                                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-inner mb-35">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" value="super.bidout@gmail.com"
                                class="username-input" placeholder="Enter Email" readonly>
                                                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-inner mb-35">
                            <label>Mobile Number <span class="text-danger">*</span></label>
                            <input type="text" name="phone" value="01790224045"
                                class="username-input" placeholder="Enter Mobile Number">
                                                    </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-inner mb-35">
                            <label>Address <span class="text-danger">*</span></label>
                            <input type="text" name="address" value="House#168/170, Road 02, Avenue 01, Mirpur DOHS"
                                class="username-input" placeholder="Enter Address">
                                                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="form-inner mb-35">
                            <label>Country <span class="text-danger">*</span></label>
                            <select class="js-example-basic-single country_id" name="country_id">
                                <option value="">Select Option</option>
                                                                    <option value="1"
                                        selected>
                                        Bangladesh</option>
                                                                    <option value="9"
                                        >
                                        United States</option>
                                                                    <option value="20"
                                        >
                                        India</option>
                                                                    <option value="30"
                                        >
                                        gfg</option>
                                                            </select>
                                                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="form-inner mb-35">
                            <label>State <span class="text-danger">*</span></label>
                            <select class="js-example-basic-single state_id" name="state_id">
                                <option value="">Select Option</option>
                                                                    <option value="2" selected>Dhaka
                                    </option>
                                                            </select>
                                                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="form-inner mb-35">
                            <label>City <span class="text-danger">*</span></label>
                            <select class="js-example-basic-single city_id" name="city_id">
                                <option value="">Select Option</option>
                                                                    <option value="3" selected>Mohammadpur
                                    </option>
                                                            </select>
                                                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="form-inner mb-35">
                            <label>Zip/Postal <span class="text-danger">*</span></label>
                            <input type="text" name="zip_code" value="1216"
                                class="username-input" placeholder="Zip/Postal">
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
                            <input type="text" name="username" value="Egens Lab"
                                class="username-input" placeholder="Enter Username" readonly>
                                                    </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-inner">
                            <label>Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="username-input" placeholder="**********"
                                autocomplete="new-password">
                                                    </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-inner">
                            <label>Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" name="password_confirmation" class="username-input"
                                placeholder="**********" autocomplete="new-password">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-inner file-upload">
                            <label>Profile Photo</label>
                            <div class="dropzone-wrapper">
                                <div class="dropzone-desc">
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                    <p>Choose an image file or drag it here</p>
                                </div>
                                <input type="file" name="image" class="dropzone featues_image">
                                                            </div>

                            <div class="preview-zone hidden">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-danger btn-xs remove-preview"
                                                style="display:none;">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                                                                    <img src="https://www.bidout-app.egenslab.com/uploads/users/eg-logo-1702294552.png"
                                                alt="Egens Lab" width="100">
                                                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="button-group mt-15 text-end">
                <input type="submit" class="eg-btn btn--green medium-btn me-3" value="Update">
                <button type="button" class="eg-btn btn--red cancel-btn"
                    onClick="window.location.reload()">Cancel</button>
            </div>
        </form>
    </div>

            </div>
<?php include 'inc/footer.php'; ?>
