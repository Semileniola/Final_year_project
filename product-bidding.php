<?php include 'addon/head.php'; ?>

<body>

    
    <div class="layout-wrapper">
        

<?php include 'addon/topbar.php'; ?>

  
     

<?php include 'addon/header.php'; ?>

        <!-- ===============  Hero area end=============== -->

        <!-- main-container -->
        
        <div class="main-content">
<?php
//have sent some variables through GET method to this brother,
//lets cactch them and assign them
if(isset($_GET['product']) && isset($_GET['prodname']) && !empty($_GET['product'])){
$getproduct =  $dbc->real_escape_string($_GET['product']);
$getprodname =  $dbc->real_escape_string($_GET['prodname']);

$query = mysqli_query($dbc,"SELECT * FROM `products` WHERE id = '$getproduct'");
	if ($query->num_rows > 0) 
		{
			$number = 1;
    while($row = mysqli_fetch_array($query)){	
	$prodcatid = $row['category_id'];
	
	



?>            

                  <!-- ========== inner-page-banner start ============= -->



<div class="inner-banner">
    <div class="container">
        <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s"><?php echo strtoupper($row['name']); ?>
        </h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php"> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo strtolower($row['name']); ?></li>
            </ol>
        </nav>
        <img class="breadcumb-img d-lg-flex d-none" src="assets/logo/image%20(4)-1702369167.png"
            alt="">
    </div>


</div>

<!-- ========== inner-page-banner end ============= -->


    <div class="auction-details-section pt-120">
        <img alt="image" src="frontend/images/bg/section-bg.png" class="img-fluid section-bg-top">
        <img alt="image" src="frontend/images/bg/section-bg.png" class="img-fluid section-bg-bottom">
        <div class="container">
            <div class="row g-lg-4 gy-5 mb-50">
                <div class="col-xl-6 col-lg-7">
                    <div class="swiper thumb-big">
                        <div class="swiper-wrapper">
	<?php
	
	// Split the image paths by comma
        $imagePaths = explode(",", $row["img_fname"]);
        // Loop through the image paths and display the images
        foreach ($imagePaths as $imagePath) {
            echo '<div class="swiper-slide">
                                <img alt="image"
                                    src="uploads/products/features/'.$imagePath.'" onerror="this.onerror=null;this.src="uploads/placeholder.jpg";"
                                    class="img-fluid">
                            </div>';
        }
        echo "";
        $i++;

?>	


									   </div>
                    </div>
                    <div thumbsSlider="" class="swiper slider-thumb">
                        <div class="swiper-wrapper">
			<?php
	
	// Split the image paths by comma
        $imagePaths = explode(",", $row["img_fname"]);
        // Loop through the image paths and display the images
        foreach ($imagePaths as $imagePath) {
            echo ' <div class="swiper-slide">
                                <img src="uploads/products/features/'.$imagePath.'" onerror="this.onerror=null;this.src="uploads/placeholder.jpg";" />
                            </div>';
        }
        echo "";
        $i++;

?>	

                                                    </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="product-details-right  wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <h3><?php echo $row['name']; ?></h3>
                        <p class="para"><?php test_excerpt($row['description'],300); ?></p>
                                                    
                                                            <h4>Current bid:
                                    <span>&#8358;<?php echo getHighestBid($row['id'], $row['start_bid'], $dbc); ?></span>
                                </h4>
                            

     
			

                            <div class="countdown-timer">
                                <ul data-countdown="<?php echo date('M j, Y H:i:s', strtotime($row['bid_end_datetime'])); ?>">
                                    <li data-days="00">00 </li><b>Days</b>
                                    <li data-hours="00">00</li><b>Hours</b>
                                    <li data-minutes="00">00</li><b>Mins</b>
                                    <li data-seconds="00">00</li><b>Secs</b>
                                </ul>
                            </div>
<?php $b = str_replace( ',', '', getHighestBid($row['id'], $row['start_bid'], $dbc));  ?>
<?php if($row['bid_start_datetime'] <= $today){ ?>
                            <div class="bid-form">
                                <div class="form-title">
                                                                            <h5>Bid Now</h5>
                                                                        <p>Bid Amount : Minimum Bid
                                        &#8358;<?php echo number_format($b+1);?>
                                    </p>
                                </div>
                                                                    <form action="forms/action_handler.php" method="POST">
                                        <input type="hidden" name="_token" value="RtroTkybwAIj8nyq22k9izgBREvHf6Tly9nPsBCN" autocomplete="off">                                        <div class="form-inner gap-2">
                                            <input type="hidden" name="currentbid" value="<?php echo $b; ?>">
                                            <input type="hidden" name="product_id" value="<?php echo $getproduct; ?>">
                                            <input type="hidden" name="product_name" value="<?php echo $getprodname; ?>">
											<input type="hidden" name="userid" value="<?php echo $_SESSION['user_id']; ?>">
                                            <input type="number" step="any"
                                                min="<?php echo number_format($b+1); ?>"
                                                name="amount"
                                                placeholder="<?php echo number_format($b+1); ?>"
                                                required>
												
								<?php if(isset($_SESSION['user_id'])){ ?>
								
						<?php if($row['userid'] == $_SESSION['user_id']){ ?>	
                                            <button disabled class="eg-btn btn--primary btn--sm"
                                                type="submit">Place Bid</button><br>
								
												
						<?php }else{ ?>
						
						   <button name="place_bid" class="eg-btn btn--primary btn--sm"
                                                type="submit">Place Bid</button>
						
						<?php } ?>
												
<?php }else{ ?>
  <a  href="login.php" class="eg-btn btn--primary header-btn">Place Bid</a>   

<? } ?>
                                        </div><br>
	<?php if(isset($_SESSION['user_id']) && $row['userid'] == $_SESSION['user_id']){ ?>	
<font color="red"><b>You cannot place a bid for your own product!</b></font>
	<?php } ?>
                                    </form>
                                                            </div>
															
<?php }else{ ?>

<div class="bid-form">
                                <div class="form-title">
                                                                            <h5>Bid is coming soon</h5>
                                                                        <p>Bid Amount : Minimum Bid
                                       &#8358;<?php echo number_format($b+1);?>
                                    </p>
                                </div>
                                                            </div>

<?php } ?>														
															
															
															
															
                                                <div class="product-info">
                            <ul class="product-info-list">
                                                                    <!--<li> <span>SKU:</span> 9852410</li>-->
                                                                                                    <li> <span>Category:</span> <a
                                            href="browse_category.php?categoryid=<?php echo $row['category_id']; ?>&category=<?php echo valueOfid2($row['category_id'], 'name', 'categories'); ?>"><?php echo valueOfid2($row['category_id'], 'name', 'categories'); ?></a>
                                    </li>
                                                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4 mb-3">
                <div class="col-lg-8">
                    <ul class="nav nav-pills d-flex flex-row justify-content-start gap-sm-2 gap-3 mb-45 wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".2s" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active details-tab-btn" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Description</button>
                        </li>

                                       
                        

                                                    <li class="nav-item" role="presentation">
                                <button class="nav-link details-tab-btn" id="pills-bid-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-bid" type="button" role="tab" aria-controls="pills-bid"
                                    aria-selected="false">Biding History</button>
                            </li>
                                                                            <li class="nav-item" role="presentation">
                                <button class="nav-link details-tab-btn" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact"
                                    aria-selected="false">Other Auction</button>
                            </li>
                                                                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s"
                            id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="describe-content">

                                                        <p><?php echo $row['description']; ?></p>
                            </div>
                        </div>
                   
                                                    <div class="tab-pane fade" id="pills-bid" role="tabpanel" aria-labelledby="pills-bid-tab">
                                <div class="bid-list-area">
                                    <ul class="bid-list">
                                                                             
   
<?php
	$result3 = mysqli_query($dbc,"SELECT * FROM `bids` WHERE `product_id` = '".$row['id']."' ORDER BY `date_created` DESC");
										if ($result3->num_rows > 0) 
										{
									
    while($bids = mysqli_fetch_array($result3)){	

	echo '<li>
  <div class="row d-flex align-items-center">
    <div class="col-7">
      <div class="bidder-area">
        <div class="bidder-img">
          <img src="uploads/users/T1%20(1)-1702374050.png">
        </div>
        <div class="bidder-content">
          <a href="#">
            <h6>
              '.valueOfid2($bids['user_id'], 'name', 'users').'                                                                        
            </h6>
          </a>
          <p>&#8358;'.number_format($bids['bid_amount']).'</p>
        </div>
      </div>
    </div>
    <div class="col-5 text-end">
      <div class="bid-time">
        <p>'.$bids['date_created'].'</p>
      </div>
    </div>
  </div>
</li>
';

	}
	
										}else {
		echo"<tr>
		<td colspan='4'>No Biddings yet!</td>
		</tr>";									
										}
?>

                                                         
                                                                                    
                                    </ul>
                                </div>
                            </div>
                                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row d-flex justify-content-center g-4">
                                <input type="hidden" id="live_limit" value="2">
                                  



<?php
	$result3 = mysqli_query($dbc,"SELECT * FROM `products` WHERE `bid_end_datetime` > '$today' AND `bid_start_datetime` <= '$today' AND `category_id` = '$prodcatid' AND `id` != '$getproduct'  ORDER BY `date_created`");
										if ($result3->num_rows > 0) 
										{
									
    while($auction = mysqli_fetch_array($result3)){	
	//shortening notice text
	$prodname = $auction['name'];

	echo '
                                                <div class="col-lg-6 col-md-6 col-sm-10">
                        <div data-wow-duration="1.5s" data-wow-delay="0.2s"
    class="eg-card auction-card1 style-2 wow fadeInDown">
    <div class="auction-img">
                    <span class="product-type"><i class="fa fa-tag"></i> &#8358;'.number_format($auction['start_bid']).'</span>
                
                    <img alt="Acution image" src="uploads/products/features/'.$auction['img_fname'].'" onerror="this.onerror=null;this.src="uploads/placeholder.jpg";">
        
                                    <div class="auction-timer">
                <div class="countdown" id="timer'.$auction['id'].'"
                    data-live-end-date="'.date('M j, Y H:i:s', strtotime($auction['bid_end_datetime'])).'">
                    <h4><span id="days'.$auction['id'].'"></span>D : <span id="hours'.$auction['id'].'"></span>H :
                        <span id="minutes'.$auction['id'].'"></span>M : <span id="seconds'.$auction['id'].'"></span>S
                    </h4>
                </div>
            </div>
                <div class="author-area">
            <div class="author-emo">
                                    <img src="uploads/shop/f3404b1c3ee2878ebfd3d4c8b7acc510-1704801343.jpg" alt="Shop Logo">
                
            </div>
            <div class="author-name">
                <span><a href="#"> by
                        @'.$auction['userid'].'</a></span>
            </div>
        </div>
    </div>
    <div class="auction-content">
        <h4><a
                href="product-bidding.php?product='.$auction['id'].'&prodname='.$auction['name'].'">'.$prodname.'</a>
        </h4>
        
            
                            <p>Current bid:
                    <span>&#8358;'.getHighestBid($auction['id'], $auction['start_bid'], $dbc).'</span>
                </p>
                            <div class="auction-card-bttm">
                            <a href="product-bidding.php?product='.$auction['id'].'&prodname='.$auction['name'].'"
                    class="eg-btn btn--primary btn--sm">Place a Bid</a>
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

	}
	
										}else {
		echo"<tr>
		<td colspan='4'>No other live auction in this category!</td>
		</tr>";									
										}
?>





                                                     
																   
																   
																   
																   
																   
                                                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="reviews-area">

                                <div class="row gy-5">
                                    <div class="col-lg-12">
                                        <div class="number-of-review">
                                            <h4>Review (0) :</h4>
                                        </div>
                                        <div class="review-list-area">
                                            <ul class="comment">
                                                                                                    <li>
                                                        <h4 class="text-center">No Review Found</h4>
                                                    </li>
                                                                                            </ul>
                                        </div>
                                    </div>
                                                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                                                    <div class="merchant-card">
                                <div class="merchant-image-and-name">
                                    <div class="marchant-img">
                                                                                    <img src="uploads/users/testimonial-author2-1704801343.png"
                                                alt="pro-pic">
                                                                                <div class="varify-batch">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14"
                                                viewBox="0 0 15 14">
                                                <path
                                                    d="M5.21591 14L3.92045 11.8333L1.34659 11.3167L1.63636 8.86667L0 7L1.63636 5.15L1.34659 2.7L3.92045 2.18333L5.21591 0L7.5 1.03333L9.78409 0L11.0966 2.18333L13.6534 2.7L13.3636 5.15L15 7L13.3636 8.86667L13.6534 11.3167L11.0966 11.8333L9.78409 14L7.5 12.9667L5.21591 14ZM5.67614 12.6833L7.5 11.9333L9.375 12.6833L10.517 11.0167L12.5114 10.5167L12.3068 8.53333L13.6875 7L12.3068 5.43333L12.5114 3.45L10.517 2.98333L9.34091 1.31667L7.5 2.06667L5.625 1.31667L4.48295 2.98333L2.48864 3.45L2.69318 5.43333L1.3125 7L2.69318 8.53333L2.48864 10.55L4.48295 11.0167L5.67614 12.6833ZM6.76705 9.21667L10.6364 5.46667L9.86932 4.78333L6.76705 7.78333L5.14773 6.13333L4.36364 6.88333L6.76705 9.21667Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="maechent-name">
                                        <h6><?php echo valueOfid2($row['userid'], 'name', 'users'); ?>
                                        </h6>
                                        <a
                                            href="mailto:<?php echo valueOfid2($row['userid'], 'email', 'users'); ?>"><?php echo valueOfid2($row['userid'], 'email', 'users'); ?></a>
                                    </div>
                                </div>
                                <ul class="maechent-info">
                                    <li><span
                                            class="title">Member Since:</span><?php
											$created_dt = valueOfid2($row['userid'], 'date_created', 'users');
$today = date("Y-m-d H:i:s"); 
$createDate = DateTime::createFromFormat("Y-m-d H:i:s", $created_dt);
$endDate = DateTime::createFromFormat("Y-m-d H:i:s", $today);
$interval = $createDate->diff($endDate);
echo $interval->format('%a day(s) ago');


?>
                                    </li>
                                                                   <!--     <li><span class="title">Total Item:</span>
                                        <span>2 <a
                                                href="shop/xyz-tread.html">View All</a></span>
                                    </li>
                                    <li><span
                                            class="title">Total Sale:</span>0
                                    </li>-->
                                </ul>
                                <div class="rating-wrap text-center">
                                    <h6>Report An Issue Or Fraudulent Act</h6>
                                    <div class="review-and-review-number">
									
									<?php if(isset($_SESSION['user_id'])){ ?>
                                       <a  href="#" class="eg-btn btn--primary header-btn"  data-toggle="modal" data-target="#replyModal">Report Now</a>
									<?php }else{?>  
									   
                                      <a  href="login.php" class="eg-btn btn--primary header-btn">Report Now</a>   
									   
									<?php } ?>
                                    </div>
                                </div>
                            </div>
                                                                  
                                            </div>


                </div>
            </div>
        </div>
    </div>
<!-- =============== counter-section end =============== -->





  <!-- Report Modal -->
<div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="replyModalLabel">Report An Issue</h1>
              
				   <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="forms/action_handler.php" method="POST">
                <input type="hidden" name="productid" value="<?php echo $getproduct; ?>">                
				<input type="hidden" name="reporter_id" value="<?php echo $_SESSION['user_id']; ?>">
               <input type="hidden" name="productname" value="<?php echo $getprodname; ?>">
                <div class="modal-body">
                    <div class="comment-form mt-0">
                        <div class="row">
                                                            <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="form-inner">
                                        <input type="text" name="subject"
                                            placeholder="Topic Of Issue :" required>
                                    </div>
                                </div>
                            
                                                        <div class="col-12">
                                <div class="form-inner">
                                    <textarea name="explanation" placeholder="Explanation :" rows="6" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="report" class="btn btn-primary">Send Report</button>
            </form>
        </div>
    </div>
</div>
</div>
<?php 
		}
		
		}
		
}

?>
                    </div>

        <!-- =============== counter-section end =============== -->

      <?php include 'addon/footer.php'; ?>