<?php include 'inc/header.php'; ?>

        <!-- main-container -->

        <div class="main-container">
            <!-- sidebar-area -->
<?php include 'inc/sidebar.php'; ?>
     
            <!-- main-content -->
            <div class="main-content">
                <!-- page-content -->
                  
    <div class="row mb-35 g-4">
        <div class=" col-md-3">
            <div class="page-title text-md-start text-center">
                <h4>All Products</h4>
            </div>
        </div>
        <div
            class=" col-md-9 text-md-end text-center d-flex justify-content-md-end justify-content-center flex-row align-items-center flex-wrap gap-4">
            <form action="" method="get">
                <div class="input-with-btn d-flex jusify-content-start align-items-strech">
                    <input type="text" name="search" placeholder="Product Name & Price...">
                    <button type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
            <a href="create_product" class="eg-btn btn--primary back-btn"><img
                    src="https://www.bidout-app.egenslab.com/backend/images/icons/add-icon.svg" alt="Add New">
                Add New</a>
        </div>
    </div>
        <div class="row">
        <div class="col-12">
            <div class="table-wrapper">
                <table class="eg-table table customer-table">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Image</th>
                            <th>Name</th>
                                                            <th>Merchant Name</th>
                                                        <th>Bid Start</th>
                            <th>Current Bid</th>
                            <th>Status</th>
                           
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
					
					
						
<?php
	$result3 = mysqli_query($dbc,"SELECT * FROM `products` ORDER BY `id` DESC");
										if ($result3->num_rows > 0) 
										{
			 $n = 1;						
    while($row = mysqli_fetch_array($result3)){	


if($row['bid_end_datetime'] > $today && $row['bid_start_datetime'] <= $today ){ $bidstat = ' <a href="../product-bidding.php?product='.$row['id'].'&prodname='.$row['name'].'"
                    class="eg-btn btn--primary btn--sm">Place a Bid</a>'; }
					
	elseif($row['bid_start_datetime'] <= $today) { $bidstat = ' <a href="#?product='.$row['id'].'&prodname='.$row['name'].'"
                    class="eg-btn btn-danger btn--sm">Ended</a>'; }
	else{  $bidstat = ' <a href="../product-bidding.php?product='.$row['id'].'&prodname='.$row['name'].'"
                    class="eg-btn btn-info btn--sm">Coming Soon</a>';
	}
			
			
	$prodname = $row['name'];
$prodid = $row['id'];
$getimages = $row['img_fname'];
// Use substr() and strpos() function to remove portion of string after comma
$featureimage = substr($getimages, 0, strpos($getimages, ",")); 
	echo '<tr>
                                    <td data-label="S.N">
                                         '.$n.'</td>
                                    <td data-label="Image">
                                                                                    <img src="../uploads/products/features/'.$featureimage.'"
                                                alt="IMG">
                                                                            </td>
                                    <td data-label="Name" class="text-start"> <a href="../product-bidding.php?product='.$row['id'].'&prodname='.$row['name'].'" target="_blank">'.$prodname.'</a></td>
                                                                            <td data-label="Author Name">'.valueOfid2($row['userid'], 'name', 'users').'</td>
                                                                        <td data-label="Type">
                                                                                    <button
                                            class="eg-btn primary-light--btn">	&#8358;'.number_format($row['start_bid']).'</button>                                    </td>
									
									 <td data-label="Price">
                                                                                    <button
                                            class="eg-btn success-light--btn">    	&#8358;'.getHighestBid($row['id'], $row['start_bid'], $dbc).'</button>                                    </td>
											
											
                                 
                                    <td data-label="Status">
                                        '.$bidstat.'
                                    </td>
                                  
                                    <td data-label="Action">
                                        <div class="d-flex flex-row justify-content-md-center justify-content-end align-items-center gap-2">
                                                                                                                                                                                
                                            <a class="eg-btn account--btn"
                                                href="bidding_details.php?product='.$row['id'].'&prodname='.$row['name'].'""
                                                title="Details"><i class="bi bi-eye"></i></a>
                                            <a class="eg-btn add--btn"
                                                href="#"
                                                title="Edit"><i class="bi bi-pencil-square"></i></a>
                                            <form method="POST" action="../forms/action_handler.php">
                                                <input type="hidden" name="prodid" value="'.$row['id'].'" autocomplete="off">                                                
												<input name="delete_product" type="hidden" value="DELETE">
                                                <button type="submit" class="eg-btn delete--btn show_confirm"
                                                    data-toggle="tooltip" title="Delete"><i
                                                        class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>';
$n++; 
	}
	
										}else {
		echo'<tr>
                                <td colspan="8" data-label="Not Found">
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
