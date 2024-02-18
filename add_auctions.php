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
        <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s; animation-name: fadeInLeft;">My Auctions
        </h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./"> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Auctions</li>
            </ol>
        </nav>
        <img class="breadcumb-img d-lg-flex d-none" src="./Dashboard - Bidout_files/image (4)-1702369167.png" alt="">
    </div>


</div>

<!-- ========== inner-page-banner end ============= -->
    <div class="dashboard-section pt-120">
      
        <div class="container">
            <div class="row g-4">
 <?php include 'addon/dashboard_menu.php'; ?>
                
			 <div class="col-lg-9">
                
			
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="form-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="form-title">
                            <h3>Add Auction</h3>
                            
                        </div>
                        <form class="w-100 auction-form" action="forms/action_handler.php" method="post" enctype="multipart/form-data">
						 <input type="hidden" name="redirectlink" value="<?php echo $actual_link; ?>">
						  <input type="hidden" name="userid" value="<?php echo $_SESSION['user_id']; ?>" autocomplete="off">   
						
                            <input type="hidden" name="type" value="2" autocomplete="off">                            
						<div class="row">
						
						
						   <div class="form-inner mb-35">
                        <label>Product Name <span class="text-danger">*</span></label>
                        <input type="text" class="username-input" value="" name="name"
                            placeholder="Enter Name" required>
                                            </div>
                    <div class="form-inner mb-25">
                        <label> Descriptions <span class="text-danger">*</span></label>
                        <textarea id="summernote" name="description" required></textarea>
                                            </div>
											
											
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
                                    <input type="file" name="image[]"
                                        multiple required>

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
                                        <input id="datepicker" type="datetime-local" name="start_date" placeholder="Select Date & Time"
                                            value="" required>
                                        <img src="backend/images/icons/calendar.svg"
                                            class="datepicker-icon" alt="Calender">
                                    </div>
                                </div>
                                <div class="col-xl-12 auction_type">
                                    <div class="form-inner mb-35 position-relative">
                                        <label>End Date <span class="text-danger">*</span></label>
                                        <input id="datepicker2" type="datetime-local"  name="end_date" placeholder="Select Date & Time"
                                            value="" required>
                                        <img src="backend/images/icons/calendar.svg"
                                            class="datepicker-icon" alt="Calender">
                                    </div>
                                </div>
                            </div>

                    </div>
					
					
                        </div>						
											
						
                            </div>

                                                           
                                                            
                            <button type="submit" name="create_product2" class="account-btn">Create Auction</button>
                        </form>

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