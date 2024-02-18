<?php include 'addon/head.php'; ?>
<body>

    
    <div class="layout-wrapper">

<?php include 'addon/topbar.php'; ?>


<?php include 'addon/header.php'; ?>

        <!-- ===============  Hero area end=============== -->

        <!-- main-container -->
        
        <div class="main-content">
   <?php if(isset($_GET['category']) && isset($_GET['categoryid']) && !empty($_GET['category'])){
$category =  $dbc->real_escape_string($_GET['category']);
$categoryid =  $dbc->real_escape_string($_GET['categoryid']);

?>        
                  <!-- ========== inner-page-banner start ============= -->

<div class="inner-banner">
    <div class="container">
        <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s"><?php echo $category; ?>
        </h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index"> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $category; ?></li>
            </ol>
        </nav>
        <img class="breadcumb-img d-lg-flex d-none" src="assets/logo/image%20(4)-1702369167.png"
            alt="">
    </div>


</div>




       <div class="live-auction-section pt-120">
    <img alt="image" src="frontend/images/bg/section-bg.png" class="img-fluid section-bg-top">
    <img alt="image" src="frontend/images/bg/section-bg.png" class="img-fluid section-bg-bottom">
    <div class="container">
        <div class="row gy-4">

            
              
            <div class="col-xl-12">
                <div id="productPage" class="row g-4 justify-content-center product-page">
                    <input type="hidden" value="all-product" id="widget_name">
                    <input type="hidden" value="9" id="item_show">
                    <div class="col-lg-12">
                        <div class="show-item-and-filte">
                            <p>Showing <strong class="show_count">
                                   <?php echo countdata('category_id', $categoryid,'products'); ?></strong> result</p>
                                                           
                                                    </div>
                    </div>
                    <div class="circle-loader"></div>
                    <div class="row g-4" id="loadProducts">
                        <input type="hidden" id="live_limit" value="9">
        
	


	
<?php
	$result3 = mysqli_query($dbc,"SELECT * FROM `products` WHERE `category_id` = '$categoryid' ORDER BY `date_created`");
										if ($result3->num_rows > 0) 
										{
									
    while($row = mysqli_fetch_array($result3)){	
	//shortening notice text
	$prodname = $row['name'];
	if($row['bid_end_datetime'] > $today && $row['bid_start_datetime'] <= $today ){ $bidstat = ' <a href="product-bidding.php?product='.$row['id'].'&prodname='.$row['name'].'"
                    class="eg-btn btn--primary btn--sm">Place a Bid</a>';
$timecountdown = '       <div class="auction-timer">
                <div class="countdown" id="timer'.$row['id'].'"
                    data-live-end-date="'.date('M j, Y H:i:s', strtotime($row['bid_end_datetime'])).'">
                    <h4><span id="days'.$row['id'].'"></span>D : <span id="hours'.$row['id'].'"></span>H :
                        <span id="minutes'.$row['id'].'"></span>M : <span id="seconds'.$row['id'].'"></span>S
                    </h4>
                </div>
            </div>';					}
					
	elseif($row['bid_start_datetime'] <= $today) { $bidstat = ' <a href="#?product='.$row['id'].'&prodname='.$row['name'].'"
                    class="eg-btn btn-danger btn--sm">Ended</a>';

$timecountdown = '       <div class="auction-timer">
                <div class="countdown" id="timer'.$row['id'].'"
                    data-live-end-date="0">
                    <h4><span id="days'.$row['id'].'">0</span>00D : <span id="hours'.$row['id'].'">00</span>00H :
                        <span id="minutes'.$row['id'].'">0</span>00M : <span id="seconds'.$row['id'].'">0</span>00S
                    </h4>
                </div>
            </div>';					}
	else{  $bidstat = ' <a href="product-bidding.php?product='.$row['id'].'&prodname='.$row['name'].'"
                    class="eg-btn btn-info btn--sm">Coming Soon</a>';
$timecountdown = '       <div class="auction-timer">
                <div class="countdown" id="timer'.$row['id'].'"
                    data-live-end-date="'.date('M j, Y H:i:s', strtotime($row['bid_end_datetime'])).'">
                    <h4><span id="days'.$row['id'].'"></span>D : <span id="hours'.$row['id'].'"></span>H :
                        <span id="minutes'.$row['id'].'"></span>M : <span id="seconds'.$row['id'].'"></span>S
                    </h4>
                </div>
            </div>';					}

	echo '
                                                <div class="col-lg-4 col-md-6 col-sm-10">
                        <div data-wow-duration="1.5s" data-wow-delay="0.2s"
    class="eg-card auction-card1 style-2 wow fadeInDown">
    <div class="auction-img">
                    <span class="product-type"><i class="fa fa-tag"></i> &#8358;'.number_format($row['start_bid']).'</span>
                
                    <img alt="Acution image" src="uploads/products/features/'.$row['img_fname'].'" onerror="this.onerror=null;this.src="uploads/placeholder.jpg";">
        
                             '.$timecountdown.'
                <div class="author-area">
            <div class="author-emo">
                                    <img src="uploads/shop/f3404b1c3ee2878ebfd3d4c8b7acc510-1704801343.jpg" alt="Shop Logo">
                
            </div>
            <div class="author-name">
                <span><a href="#"> by
                        @'.$row['userid'].'</a></span>
            </div>
        </div>
    </div>
    <div class="auction-content">
        <h4><a
                href="product-bidding.php?product='.$row['id'].'&prodname='.$row['name'].'">'.$prodname.'</a>
        </h4>
        
            
                            <p>Current bid:
                    <span>&#8358;'.getHighestBid($row['id'], $row['start_bid'], $dbc).'</span>
                </p>
                            <div class="auction-card-bttm">
                           '.$bidstat.'
					
                        <div class="share-area">
                <ul class="social-icons d-flex">
                    <li><a target="_blank"
                            href="https://www.facebook.com/sharer.php?u='.$url.'/product/poutsicle-hydrating-lip-stain-2"><i
                                class="bx bxl-facebook"></i></a></li>
                    <li><a target="_blank"
                            href="https://twitter.com/intent/tweet?url='.$url.'/product/poutsicle-hydrating-lip-stain-2&amp;text=Poutsicle%20Hydrating%20Lip%20Stain."><i
                                class="bx bxl-twitter"></i></a></li>
                    <li><a target="_blank"
                            href="https://www.linkedin.com/shareArticle?url='.$url.'/product/poutsicle-hydrating-lip-stain-2&amp;title=Poutsicle%20Hydrating%20Lip%20Stain."><i
                                class="bx bxl-linkedin"></i></a></li>
                    <li><a target="_blank"
                            href="https://www.pinterest.com/pin/create/bookmarklet/?url=='.$url.'/product/poutsicle-hydrating-lip-stain-2"><i
                                class="bx bxl-pinterest"></i></a></li>
                </ul>
                <div>
                    <a href="#" class="share-btn"><i class="bx bxs-share-alt"></i></a>
                </div>
            </div>
        </div>
    </div>

</div>
                    </div>';

	} ?>
	
	
        <div class="row">
        <nav class="pagination-wrap pt-60">
                    <ul class="pagination custom-pagination d-flex justify-content-center gap-md-3 gap-2">
                    
                                          <li class="page-item disabled">
                        <span class="page-link" tabindex="-1" >&laquo; Previous</span>
                      </li>
                    
                    
                            
                
                
                                                                                    <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                      </li>
                                                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                        
            
                        <li class="page-item"><a class="page-link" href="#">Next &raquo;</a></li>
                                </ul>
                </nav>
                
    </div>	
	
	
	<?php
	
										}else {
		echo'
<div class="live-auction-section pt-120">
      
        <div class="container">
            <div class="row gy-4 mb-60 d-flex justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <h2 class="text-center">No Data Found</h2>
                </div>
                            </div>
        </div>
    </div>';									
										}
?>


	
		
          
	
	
	

                    </div>
                  
                </div>

            </div>
        </div>
    </div>
</div>














	
   <?php }  ?>

<!-- =============== counter-section end =============== -->


                    </div>

        <!-- =============== counter-section end =============== -->

      <?php include 'addon/footer.php'; ?>