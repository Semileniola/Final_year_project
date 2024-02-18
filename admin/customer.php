<?php include 'inc/header.php'; ?>

        <!-- main-container -->

        <div class="main-container">
            <!-- sidebar-area -->
<?php include 'inc/sidebar.php'; ?>
     
            <!-- main-content -->
             <div class="main-content">
                <!-- page-content -->
                             
                <div class="row mb-35 g-4">
                    <div class="col-md-4">
                        <div class="page-title text-md-start text-center">
                            <h4>Customer List</h4>
                        </div>
                    </div>
                    <div class="col-md-8 text-md-end text-center d-flex justify-content-md-end justify-content-center flex-row align-items-center flex-wrap gap-4">
                        <form action="" method="get">
                            <div class="input-with-btn d-flex jusify-content-start align-items-strech">
                                <input type="text" name="search" placeholder="Customer Name, Email & ID...">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                        <a href="create_customer" class="eg-btn btn--primary back-btn"><img src="https://www.bidout-app.egenslab.com/backend/images/icons/add-icon.svg" alt="Add New"> Add New</a>
                    </div>
                </div>


                <div class="row">
                           
				 
<?php
	$result3 = mysqli_query($dbc,"SELECT * FROM `users`  ORDER BY `type` ASC");
										if ($result3->num_rows > 0) 
										{
									
    while($customer = mysqli_fetch_array($result3)){	
	if($customer['type'] == 1){
		$type = '<button class="eg-btn primary-light--btn">Admin</button>';
	}elseif($customer['type'] == 2){
	$type = '<button style="color:;"class="eg-btn green-light--btn">Customer</button>';	
	}else{
	$type = '<button  style="color:red;"class="eg-btn red-light--btn">Undefine</button>';		
	}

	echo ' <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="eg-profile-card text-center">
                            <div class="profile-img">
                                                                <img class="rounded-circle" src="https://www.bidout-app.egenslab.com/uploads/users/user.png" alt="super.bidout@gmail.com">
                                                                                                <span id="statusCustomer48">
                                                               '.$type.'
                                                                </span>
                            </div>
                            <div class="profile-bio">
                                <h4>'.$customer['name'].'</h3>
                                <h6>Customer ID: BID0000'.$customer['id'].'</h5>
                            </div>
                            <div class="card-action d-flex justify-content-sm-between">
                                <div class="d-flex flex-row justify-content-md-center justify-content-end align-items-center gap-2">
                                    <a href="#" title="Edit" class="eg-btn add--btn"><i class="bi bi-pencil-square"></i></a>

                                    <form method="POST" action="../forms/action_handler.php">
                                        <input type="hidden" name="customer" value="'.$customer['id'].'" autocomplete="off">
										<input name="delete_customer" type="hidden" value="DELETE">
                                        <button type="submit" class="eg-btn delete--btn show_confirm" data-toggle="tooltip" title="Delete"><i class="bi bi-trash"></i></button>
                                    </form>
                                    <a href="#" title="Profile" class="eg-btn account--btn"><i class="far fa-user"></i></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
					
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
						   
						
                                       
                                     
									 
									 
									 
									 
                                                        </div>
            </div>


            </div>
<?php include 'inc/footer.php'; ?>
