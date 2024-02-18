<?php include 'inc/header.php'; ?>

        <!-- main-container -->

        <div class="main-container">
            <!-- sidebar-area -->
<?php include 'inc/sidebar.php'; ?>
     
            <div class="main-content">
                <!-- page-content -->
                    <div class="row mb-35">
        <div class="page-title d-flex justify-content-between align-items-center">
            <h4>Categories</h4>
            <button type="button" class="eg-btn btn--primary back-btn" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop"><img src="https://www.bidout-app.egenslab.com/backend/images/icons/add-icon.svg" alt="Add New">
                Add New</button>
        </div>
    </div>
        <div class="row">
        <div class="col-12">
            <div class="table-wrapper">
                <table class="eg-table table category-table">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Product</th>
                            <th>Status</th>
                           
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
 
	
<?php
	$result3 = mysqli_query($dbc,"SELECT * FROM `categories` ORDER BY `id` DESC");
										if ($result3->num_rows > 0) 
										{
			 $n = 1;						
    while($row = mysqli_fetch_array($result3)){	
	//shortening notice text
	$catname = $row['name'];
$catid = $row['id'];

	echo '
 <tr>
                                <td data-label="S.N">
                                    '.$n.'</td>
                                <td data-label="Image">
                                                                            <img src="../uploads/category/'.$row['icon'].'"
                                            alt="'.$catname.'">
                                                                    </td>
                                <td data-label="Category Name">'.$catname.'</td>
                                <td data-label="Product">'.countdata('category_id', $catid,'products').'</td>
                                <td data-label="Status">
                                    <span id="statusBlock7">
                                                                                    <button class="eg-btn green-light--btn">Active</button>
                                                                            </span>
                                </td>
                             
                                <td data-label="Option">
                                    <div
                                        class="d-flex flex-row justify-content-md-center justify-content-end align-items-center gap-2">
                                        <!-- <button class="eg-btn add--btn"><i class="bi bi-pencil-square"></i></button> -->
                                        <a class="eg-btn add--btn"
                                            href="#edit_category?categoryid='.$catid.'"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form method="POST" action="../forms/action_handler.php">
                                            <input type="hidden" name="category" value="'.$catid.'"> 
											<input type="hidden" name="icon" value="'.$row['icon'].'"> 
											<input name="deletecat" type="hidden" value="DELETE">
                                            <button type="submit" name="deletecat" class="eg-btn delete--btn show_confirm"
                                                data-toggle="tooltip" title="Delete"><i class="bi bi-trash"></i></button>
                                        </form>
                                        <!-- <button class="eg-btn delete--btn"><i class="bi bi-trash"></i></button> -->
                                    </div>
                                </td>
                            </tr>';
$n++; 
	}
	
										}else {
		echo'<tr>
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

    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Add New Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form action="../forms/action_handler.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="7RIzjpUoK28YZB6QSuJMhCZXK5j1596Bn7AHdjQ8" autocomplete="off">                            <div class="modal-body">
                                    <div class="form-inner mb-35">
                                        <label>Name*</label>
                                        <input type="text" name="name" id="category_name" value="" class="username-input" placeholder="Enter Name" required>
                                                                            </div>
                                    <div class="form-inner mb-25">
                                        <label>Image*</label>
                                        <input type="file" name="image" class="password" accept="image/*">
                                                                            </div>
                            </div>
                            <div class="modal-footer border-white">
                                <button type="button" class="eg-btn btn--red py-1 px-3 rounded" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="create_category" class="eg-btn btn--primary py-1 px-3 rounded">Save</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
    
            </div>
<?php include 'inc/footer.php'; ?>
