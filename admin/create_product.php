<?php include 'inc/header.php'; ?>

        <!-- main-container -->

        <div class="main-container">
            <!-- sidebar-area -->
<?php include 'inc/sidebar.php'; ?>
     
            <!-- main-content -->
             <div class="main-content">
                <!-- page-content -->
                    <div class="row mb-35">
        <div class="page-title d-flex justify-content-between align-items-center">
            <h4>Create Product</h4>
            <a href="products" class="eg-btn btn--primary back-btn"> <img
                    src="https://www.bidout-app.egenslab.com/backend/images/icons/back.svg" alt="Go Back">
                Go Back</a>
        </div>
    </div>
    <form action="../forms/action_handler.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="userid" value="<?php echo $_SESSION['user_id']; ?>" autocomplete="off">        
	
	<div class="row">

            <div class="col-lg-7">
                <div class="eg-card product-card">

                    <div class="form-inner mb-35">
                        <label>Name <span class="text-danger">*</span></label>
                        <input type="text" class="username-input" value="" name="name"
                            placeholder="Enter Name" required>
                                            </div>
                    <div class="form-inner mb-25">
                        <label>Long Descriptions <span class="text-danger">*</span></label>
                        <textarea id="summernote" name="description" required></textarea>
                                            </div>
              


                </div>
            </div>
            <div class="col-lg-5">
                <div class="eg-card product-card">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-inner file-upload mb-35">
                                <div id="drag-drop-area">
                                    <h3 class="text-danger">NEED TO ADD IMAGE UPLOAD DRAG & DROP</h3>
                                </div>


                            </div>
                                                    </div>

                        <div class="col-12">
                            <div class="form-inner img-upload mb-35">

                                <label class="control-label">Image Gallery</label>

                                <div class="dropzone-wrapper">
                                    <div class="dropzone-desc">
                                        <i class="glyphicon glyphicon-download-alt"></i>
                                        <p>Choose image files or drag it here</p>
                                    </div>
                                    <input type="file" id="files" name="img[]" class="dropzone image_gal"
                                        multiple required>

                                </div>

                                <div class="gallery-preview-zone hidden">
                                    <div class="box box-solid">
                                        <div class="box-body"></div>
                                    </div>
                                </div>
                            </div>
                                                    </div>
                                                   
                                                <div class="col-12">
                            <div class="form-inner mb-35">
                                <label>Category <span class="text-danger">*</span></label>
                                <select class="js-example-basic-single" name="category_id" required>
                                    <option value="">Select Option</option>
									<?php echo select_option2_desc('name', 'id', 'categories', $dbc); ?>
                                                                    </select>
                                                            </div>
                        </div>
                      
                       
                        <div class="col-12">
                       
                                <div class="col-xl-12 auction_type">
                                    <div class="form-inner mb-35">
                                        <label>Minimum Bid Price <span
                                                class="text-danger">*</span></label>
                                        <div class="input-with-btn style2 d-flex jusify-content-start align-items-strech">
                                            <input type="number" placeholder="0.00" name="min_bid_price"
                                                value="" required>
                                            <button
                                                type="button">&#8358;</button>
                                        </div>
                                    </div>
                                </div>
                          
						  
						         <div class="col-xl-12 auction_type">
                                    <div class="form-inner mb-35">
                                        <label>Regular Price <span
                                                class="text-danger">*</span></label>
                                        <div class="input-with-btn style2 d-flex jusify-content-start align-items-strech">
                                            <input type="number" placeholder="0.00" name="regular_price"
                                                value="" required>
                                            <button
                                                type="button">&#8358;</button>
                                        </div>
                                    </div>
                                </div>
								
								
                                <div class="col-xl-12 auction_type schedule_start_date">
                                    <div class="form-inner mb-35 position-relative">
                                        <label>Start Date <span class="text-danger">*</span></label>
                                        <input id="datepicker" name="start_date" placeholder="Select Date & Time"
                                            value="" required>
                                        <img src="../backend/images/icons/calendar.svg"
                                            class="datepicker-icon" alt="Calender">
                                    </div>
                                </div>
                                <div class="col-xl-12 auction_type">
                                    <div class="form-inner mb-35 position-relative">
                                        <label>End Date <span class="text-danger">*</span></label>
                                        <input id="datepicker2" name="end_date" placeholder="Select Date & Time"
                                            value="" required>
                                        <img src="../backend/images/icons/calendar.svg"
                                            class="datepicker-icon" alt="Calender">
                                    </div>
                                </div>
                            </div>




                        <div class="col-12 text-center">
                            <div class="button-group mt-15">

                                <button type="submit" class="radio-button">
                                    <input type="radio" id="status1" name="create_product" value="1" />
                                    <label class="eg-btn btn--green medium-btn"
                                        for="status1">Publish</label>
                                </button>
                            </div>
                        </div>
                    </div>
					
					
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </form>


            </div>
<?php include 'inc/footer.php'; ?>
