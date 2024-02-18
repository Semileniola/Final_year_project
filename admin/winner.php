<?php include 'inc/header.php'; ?>

        <!-- main-container -->

        <div class="main-container">
            <!-- sidebar-area -->
<?php include 'inc/sidebar.php'; ?>
     
            <!-- main-content -->
            <div class="main-content">
                <!-- page-content -->
                    <div class="row mb-35">
        <div class="col-md-3">
            <div class="page-title text-md-start text-center">
                <h4>Winner List</h4>
            </div>
        </div>
        <div
            class="col-md-9 text-md-end text-center d-flex justify-content-md-end justify-content-center flex-row align-items-center flex-wrap gap-4">
            <form action="" method="get">
                <div class="input-with-btn d-flex jusify-content-start align-items-strech">
                    <input type="text" name="search" placeholder="Product Name...">
                    <button type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-wrapper">
                <table class="eg-table table category-table">
                    <thead>
                        <tr>
                          
                            <th>Date</th>
                            <th>Customer Name</th>
                            <th>Email / Phone</th>
                            <th>Product</th>
                            <th>Bid Amount</th>
                            <th>Payment Status</th>
                            <th>Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
					
						 
<?php
	$result3 = mysqli_query($dbc,"SELECT * FROM `bids` WHERE `status` = '2' ORDER BY `date_created` DESC");
										if ($result3->num_rows > 0) 
										{
									
    while($bids = mysqli_fetch_array($result3)){	
	if($bids['status'] == 1){
		$bidstat = '<button class="eg-btn primary-light--btn">Processing</button>';
	}elseif($bids['status'] == 2){
	$bidstat = '<button style="color:;"class="eg-btn green-light--btn">Won</button>';	
	}else{
	$bidstat = '<button  style="color:red;"class="eg-btn red-light--btn">cancelled</button>';		
	}

	echo '

                                                                                    <tr>
                                    <td data-label="Date"><b>'.date('M j, Y', strtotime($bids['date_created'])).'</b></td>

                                    <td data-label="Bidding">
                                        <a href="#" target="_blank">
                                            <b>
                                                '.valueOfid2($bids['user_id'], 'name', 'users').'</b></a>
                                    </td>
                                    <td data-label="Email / Phone">
                                        <a href="mailto:'.valueOfid2($bids['user_id'], 'email', 'users').'"> '.valueOfid2($bids['user_id'], 'email', 'users').'</a><br>
                                        <a href="tel:'.valueOfid2($bids['user_id'], 'contact', 'users').'"
                                            class="phone">'.valueOfid2($bids['user_id'], 'contact', 'users').'</a>
                                    </td>
                                    <td data-label="Product"><a
                                            href="#"
                                            target="_blank">'.valueOfid2($bids['product_id'], 'name', 'products').'</a></td>
                                    <td data-label="Bid Amount">$300</td>

                                    <td data-label="Payment Status">
                                                                                    <button class="eg-btn green-light--btn">'.$bidstat.'</button>
                                                                            </td>

                                    <td data-label="Action">
                                        <form action="#" method="post">
                                            <input type="hidden" name="_token" value="7RIzjpUoK28YZB6QSuJMhCZXK5j1596Bn7AHdjQ8" autocomplete="off">                                            <input type="hidden" name="order_id" value="3">
                                                                                            <button class="eg-btn green-light--btn"
                                                    disabled>Delivered</button>
                                            
                                        </form>
                                    </td>
                                </tr>


								
								
								
				';

	}
	
										}else {
		echo'
                                                                            <tr>
                                <td colspan="7" data-label="Not Found">
                                    <h5 class="data-not-found">No Data Found</h5>
                                </td>
                            </tr>';									
										}
?>

                                                         
                                                                        </tbody>
                </table>
            </div>
        </div>
    </div>


    
            </div>
<?php include 'inc/footer.php'; ?>
