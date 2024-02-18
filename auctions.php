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
        <img alt="image" src="./Dashboard - Bidout_files/section-bg.png" class="img-fluid section-bg-top">
        <img alt="image" src="./Dashboard - Bidout_files/section-bg.png" class="img-fluid section-bg-bottom">
        <div class="container">
            <div class="row g-4">
 <?php include 'addon/dashboard_menu.php'; ?>
                
			 <div class="col-lg-9">
                    <!-- table title-->
                    <div class="table-title-area">
                        <a href="add_auctions" type="button" class="eg-btn add-new-btn border-0" ><i class="bi bi-wallet2"></i>
                            Add Auctions</a>

                        <form action="" method="get">
                            <select id="order-category" class="paginate_filter" name="search">
                                <option value="5">Show: Last 05 Order</option>
                                <option value="10">Show: Last 10 Order</option>
                                <option value="15">Show: Last 15 Order</option>
                                <option value="20">Show: Last 20 Order</option>
                            </select>
                        </form>
                    </div>	
				
                    <!-- table -->
                    <div class="table-wrapper">
                        <table class="eg-table order-table table mb-0">
                            <thead>
                                <tr>
                                    <th>Image</th>
									 
                                    <th>Product Name</th>
                                    <th>Start Bid</th>
                                    <th>Highest Bid</th>
									 <th>End Date</th>
                                    <th>Status</th>
									  <th>Biddings</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
							
	
<?php
	$result3 = mysqli_query($dbc,"SELECT * FROM `products`
	WHERE `products`.`userid` = '".$_SESSION['user_id']."' ");
										if ($result3->num_rows > 0) 
										{
									
    while($bids = mysqli_fetch_array($result3)){	
	$getimages = $bids['img_fname'];
// Use substr() and strpos() function to remove portion of string after comma
$featureimage = substr($getimages, 0, strpos($getimages, ",")); 
if($bids['bid_end_datetime'] > $today){ $auctstat = '<font color="blue">Live</font>'; }else{ $auctstat = '<font color="red">Ended</font>'; }

	echo ' <tr><td>   <img alt="image" src="uploads/products/gallery/'.$featureimage.' " onerror="this.onerror=null;this.src="uploads/placeholder.jpg";" class="img-fluid"> </td>

					<td>'.$bids['name'].'</td>
						<td>'.number_format($bids['start_bid']).'</td>
						<td>'.getHighestBid($bids['id'],$bids['start_bid'], $dbc).'</td>
						
						<td>'.date('M j, Y H:i:s', strtotime($bids['bid_end_datetime'])).'</td>
					<td>'.$auctstat.'</td>
					<td> <a href="orders.php?auction='.$bids['id'].'" class="eg-btn btn--primary btn-sm">View</a>  </td>
				
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






    <!-- Modal -->
<div class="modal specification-modal fade" id="paymentModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                                    <div class="currency-icon">
                        <span><i class="bi bi-currency-dollar"></i></span>
                    </div>
                    <h4 class="modal-title" id="paymentModalLabel">Add Balance Your Account</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x"></i></button>
            </div>
                            <div class="modal-body">

                    <form action="https://www.bidout-app.egenslab.com/customer/payment/method" method="POST"
                        class="modal-require-validation" data-cc-on-file-modal="false"
                        data-modal-stripe-publishable-key="pk_test_51N9Od9F3CQDKJ6qSMvCGZ6XdDlIrBGclMufDQuIbymerhdfxdjEaGUxpeu227OrXAJkHpAdvQxEHzYI09Wa0IPrZ00kksiCgK2"
                        id="modal-payment-form">
                        <input type="hidden" name="_token" value="SGEY0rt6RPbhHyr1q5bhkFojNj8WlPAdIv6Ofuq4" autocomplete="off">                        <input type="hidden" name="current_url" value="https://www.bidout-app.egenslab.com/customer/deposit">
                        <div class="choose-amount-area">
                            <h5>Choose the amount</h5>
                            <ul>
                                <li>
                                    <input class="form-check-input" type="radio" id="amount10" name="fixed_price"
                                        value="10" checked>
                                    <label for="amount10">10</label><br>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" id="amount25" name="fixed_price"
                                        value="25">
                                    <label for="amount25">25</label><br>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" id="amount50" name="fixed_price"
                                        value="50">
                                    <label for="amount50">50</label><br>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" id="amount100" name="fixed_price"
                                        value="100">
                                    <label for="amount100">100</label><br>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" id="amount250" name="fixed_price"
                                        value="250">
                                    <label for="amount250">250</label><br>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" id="amount500" name="fixed_price"
                                        value="500">
                                    <label for="amount500">500</label><br>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" id="amount1000" name="fixed_price"
                                        value="1000">
                                    <label for="amount1000">1000</label><br>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" data-amount="$2000" id="amount2000"
                                        name="fixed_price" value="2000">
                                    <label for="amount2000">2000</label><br>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" id="amount-other" name="fixed_price"
                                        value="other_amount">
                                    <label for="amount-other">Other</label><br>
                                </li>
                            </ul>
                            <div id="OtherPrice" class="payment-option-hide">
                                <div class="input-area">
                                    <input type="number" id="modal_other_amount" name="other_amount"
                                        placeholder="Input Balance" />
                                </div>
                            </div>
                        </div>
                        <div class="choose-payment-mathord">
                            <h5>Select Your Payment Method</h5>
                            <div class="payment-option">
                                <div class="payment-method-section d-flex gap-3 align-items-center flex-wrap">

                                                                                                                                                                                                                                                                                                                            <div
                                                class="custom-control custom-radio custom-control-inline paypal active">
                                                <input type="radio" id="payment_method_modal2"
                                                    name="payment_method" class="custom-control-input" value="paypal"
                                                    checked>
                                                <label class="custom-control-label" for="payment_method_modal2">
                                                                                                            <img src="https://www.bidout-app.egenslab.com/uploads/payment_methods/paypal.png"
                                                            alt="Paypal" height="20">
                                                                                                        <div class="checked"><i class="bi bi-check"></i></div>
                                                </label>
                                            </div>
                                                                                                                                                                                                        <div class="custom-control custom-radio custom-control-inline stripe">
                                                <input type="radio" id="payment_method_modal1" name="payment_method"
                                                    class="custom-control-input" value="stripe">
                                                <label class="custom-control-label" for="payment_method_modal1">
                                                                                                            <img src="https://www.bidout-app.egenslab.com/uploads/payment_methods/stripe.png"
                                                            alt="Stripe" height="20">
                                                                                                        <div class="checked"><i class="bi bi-check"></i></div>
                                                </label>
                                            </div>
                                                                                                                                                            

                                </div>

                            </div>
                            <div class="pt-25 payment-option-hide mt-30" id="StripePayment">
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <div class="input-area">
                                            <label>Card Number</label>
                                            <input type="number" class="modal_stripe_card_number"
                                                maxlength="16" placeholder="1234 1234 1234 1234" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-area">
                                            <label>Expiry</label>
                                            <input type="text" class="modal_stripe_card_expiry"
                                                id="modal_stripe_card_expiry" placeholder="MM/YY" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-area">
                                            <label>CVC</label>
                                            <input type="text" class="modal_stripe_cvc"
                                                placeholder="CVC" />
                                        </div>
                                    </div>
                                </div>
                                <div class='form-row row pt-3'>
                                    <div class='col-md-12 modal-error form-group d-none'>
                                        <div class='alert-danger alert'>
                                            Please correct the errors and try again.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" class="modal_amount_main_val" name="amount" value="10">
                        <input type="hidden" class="modal_tax_amount_val" name="tax_amount" value="0">
                        <input type="hidden" class="modal_total_amount_val" name="total_amount" value="10">

                        <div class="pay-btn">
                            <input type="hidden" name="type" value="1">
                            <button class="btn-hover" type="submit">Pay
                                $<span class="modal_total_amount">10</span></button>
                        </div>
                    </form>


                </div>
                    </div>
    </div>
</div>

        <!-- =============== counter-section end =============== -->

      <?php include 'addon/footer.php'; ?>