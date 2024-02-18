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
                <h4>Ticket &amp; Support</h4>
            </div>
        </div>
            </div>
   
    <div class="row">
        <div class="col-12">
            <div class="table-wrapper">
                <table class="eg-table table ticket-table">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Reported on</th>
                            <th>Product</th>
                            <th>Report</th>
                          
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
					
					
							 
<?php
	$result3 = mysqli_query($dbc,"SELECT * FROM `reports` ORDER BY `report_date` DESC");
										if ($result3->num_rows > 0) 
										{
									
    while($report = mysqli_fetch_array($result3)){	


	echo '

                                                                                    <tr>
<td data-label="Date"><b>'.$report['subject'].'</b></td>

                                    <td data-label="Date"><b>'.date('M j, Y', strtotime($report['report_date'])).'</b></td>

                                    <td data-label="Bidding">
                                        <a href="#" target="_blank">
                                            <b>
                                                '.valueOfid2($report['productid'], 'name', 'products').'</b></a>
                                    </td>
                                  
                                    <td data-label="Product">'.$report['explanation'].'</td>

                                    <td data-label="Payment Status">
                                                                                    <button class="eg-btn green-light--btn">--</button>
                                                                            </td>

                                </tr>


								
								
								
				';

	}
	
										}else {
		echo'
                                                                            <tr>
                                <td colspan="6" data-label="Not Found">
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
