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
        <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s; animation-name: fadeInLeft;">Bidding History
        </h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./"> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bidding History</li>
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
                    <!-- table title-->
                    <div class="table-title-area">
                        <h3>Bidding History</h3>
                        <form action="#" method="get">
                            <select name="filter" onchange="this.form.submit()" style="display: none;">
                                <option value="5">Show: Last 05 Order</option>
                                <option value="10">Show: Last 10 Order</option>
                                <option value="15">Show: Last 15 Order</option>
                                <option value="20">Show: Last 20 Order</option>
                            </select><div class="nice-select" tabindex="0"><span class="current">Show: Last 05 Order</span><ul class="list"><li data-value="5" class="option selected">Show: Last 05 Order</li><li data-value="10" class="option">Show: Last 10 Order</li><li data-value="15" class="option">Show: Last 15 Order</li><li data-value="20" class="option">Show: Last 20 Order</li></ul></div>
                        </form>
                    </div>

                    <!-- table -->
                    <div class="table-wrapper">
                        <table class="eg-table order-table table mb-0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Bidding Product</th>
                                    <th>Bid Amount</th>
                                    <th>Highest Bid</th>
									 <th>Ending Date</th>
									 <th>Date</th>
                                    <th>Status</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
							
	
<?php
	$result3 = mysqli_query($dbc,"SELECT * FROM `bids` WHERE `user_id` = '".$_SESSION['user_id']."' ORDER BY `date_created` DESC");
										if ($result3->num_rows > 0) 
										{
									
    while($bids = mysqli_fetch_array($result3)){	
	
	if($bids['status'] == 1){
		$bidstat = 'Processing';
	}elseif($bids['status'] == 2){
	$bidstat = 'Won';	
	}else{
	$bidstat = 'cancelled';		
	}

	echo ' <tr><td>   <img alt="image" src="uploads/products/gallery/'.valueOfid2($bids['product_id'], 'img_fname', 'products').' " onerror="this.onerror=null;this.src="uploads/placeholder.jpg";" class="img-fluid"> </td>
					<td>'.valueOfid2($bids['product_id'], 'name', 'products').'</td>
						<td>'.$bids['bid_amount'].'</td>
						<td>'.getHighestBid($bids['product_id'], valueOfid2($bids['product_id'], 'start_bid', 'products'), $dbc).'</td>
						<td>'.date('M j, Y H:i:s', strtotime(valueOfid2($bids['product_id'], 'bid_end_datetime', 'products'))).'</td>
						<td>'.date('M j, Y H:i:s', strtotime($bids['date_created'])).'</td>
					<td>'.$bidstat.'</td>
				
			</tr>
';

	}
	
										}else {
		echo'
                                                                    <tr>
                                        <td colspan="7">
                                            <h5 class="data-not-found">No Data Found</h5>
                                        </td>
                                    </tr>';									
										}
?>

                                                            </tbody>
                        </table>
                    </div>

                    <!-- pagination area -->
                    <div class="table-pagination">
                        <p> Showing  to 
                            of total
                            0 entries</p>
                        
                    </div>
                </div>
				
				
            </div>
        </div>
    </div>



<!-- =============== counter-section end =============== -->
                    </div>

        <!-- =============== counter-section end =============== -->

      <?php include 'addon/footer.php'; ?>