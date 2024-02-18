<?php //This is essentially where all of our actions will be managed.
 include '../addon/Service_Room.php'; 
//define date and time 
$datetime = date("Y-m-d H:i:s");
$date = date("Y-m-d");

if(isset($_SESSION['user_id'])){ //chceck if user session is set
$userid = $_SESSION['user_id'];//get user whose session is on
}else{
$userid = 0;//get user whose session is on	
}


//handle account creation
//lets escape uninvited guest too o

if(isset($_POST['create_account'])) {
//check for empty fields

if (!empty($_POST['last_name']) && !empty($_POST['first_name']) && !empty($_POST['username']) && !empty($_POST['phone_number']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['password']) && !empty($_POST['password_confirmation'])){
	
	//capture input and play with them
$fullname = test_input($_POST['last_name'].' '.$_POST['first_name']);
$last_name = test_input($_POST['last_name']);
$first_name = test_input($_POST['first_name']);
$username = test_input($_POST['username']);
$phone_number  = test_input($_POST['phone_number']);
$email  = test_input($_POST['email']);
$address  = test_input($_POST['address']);
$password  = test_input($_POST['password']);
$password_confirmation  = test_input($_POST['password_confirmation']);

//prevent sql injection here
$fullname = $dbc->real_escape_string($fullname);
$username = $dbc->real_escape_string($username);
$phone_number = $dbc->real_escape_string($phone_number);
$email = $dbc->real_escape_string($email);
$address = $dbc->real_escape_string($address);
$password  = $dbc->real_escape_string($password);
$password_confirmation  = $dbc->real_escape_string($password_confirmation);
$hashpassword  = md5($password_confirmation);
$type = test_input($_POST['type']);
$registrar = test_input($_POST['registrar']);
$redirectlink = $_POST['redirectlink'];

//keep them in session here, you might need later
$_SESSION['last_name'] = $last_name;
$_SESSION['first_name'] = $first_name;
$_SESSION['username'] = $username;
$_SESSION['phone_number'] = $phone_number;
$_SESSION['email'] = $email;
$_SESSION['address'] = $address;
$_SESSION['password'] = $password;
$_SESSION['password_confirmation'] = $password_confirmation;


//$ip = getRealIpAddr();
//$browser = $_SERVER['HTTP_USER_AGENT'];

// do all queries
$check_ref = mysqli_query($dbc,"SELECT * FROM `users` WHERE email = '$email'"); //check if email already exist
$check_phone = mysqli_query($dbc,"SELECT * FROM `users` WHERE contact = '$phone'"); //check phone availability

//check password match
if($password != $password_confirmation){
	//keep error message in session
	$_SESSION['report'] = " <script>Swal.fire(
  'Password Mismatch!',
  'Password and confirm password does not match.',
  'error'
)</script>";	
	//redirect after
 header("location:".$redirectlink."");	
	
}
 //validation check begins
	elseif ($check_ref->num_rows > 0) { //if email already exist
	$_SESSION['report'] = " <script>Swal.fire(
  'OOps!',
  'Sorry! Member with email address already exist.',
  'error'
)</script>";	
	//redirect after
 header("location:".$redirectlink."");	
	}
	elseif ($check_phone->num_rows > 0) { //if phone number already exist too
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Oops!',
  'Sorry! Member with Phone Number already exist.',
  'error'
)</script>";
	//redirect after
  header("location:".$redirectlink."");			
	} 
	else{
	
	$doinsert = mysqli_query($dbc,"INSERT INTO `users`(`name`, `username`, `password`, `email`, `contact`, `address`, `type`) VALUES ('$fullname', '$username', '$hashpassword', '$email', '$phone_number', '$address', '$type')") or die(mysqli_error($dbc));

if($doinsert){
	$_SESSION['report'] = " <script>Swal.fire(
  'Success!',
  'You have successfully Created An Account',
  'success'
)</script>";

unset($_SESSION['last_name']);
unset($_SESSION['first_name']);
unset($_SESSION['username']);
unset($_SESSION['phone_number']);
unset($_SESSION['email']);
unset($_SESSION['address']);
unset($_SESSION['password']);
unset($_SESSION['password_confirmation']);

if($registrar == 'admin'){
	 header("location:".$redirectlink."");	
}else{
	  header("location:../login.php");
}
}else{
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'An Error Occured',
  'error'
)</script>";
	 header("location:".$redirectlink."");	
}	
	}
	
}else{
	//keep error message in session
	$_SESSION['report'] = " <script>Swal.fire(
  'Required',
  'All fields are required. Re-fill and try again',
  'error'
)</script>";	
	//redirect after
 header("location:".$redirectlink."");		
	
}

}
//handle user login
elseif(isset($_POST['user_login'])) {
	 extract($_POST);
	 
//check db if login details already exist or not
	 $sql = "SELECT * FROM `users` WHERE `email` = '$login' OR `username` = '$login'";
	 $result = $dbc->query($sql) or die(mysqli_error());
        // submit the query and capture the result
        $row = $result->fetch_assoc();

if ($result->num_rows > 0) 
        {
			
		if (md5($password)  == $row["password"]) {

            //$row = mysqli_fetch_array($data);
			  $_SESSION['user_id'] = $row['id'];
			   $_SESSION['login_id'] = $row['id'];
			  $_SESSION['login_email'] = $row['email'];
			   $_SESSION['login_name'] = $row['name'];
			 $_SESSION['login_username'] = $row['username'];
			$_SESSION['login_type'] = $row['type'];
			
			$today = date("Y-m-d H:i:s"); 
			
			
				header('Location: ../dashboard.php');	
           
			}
			else {   
	$_SESSION['report'] = " <script>Swal.fire(
  'Invalid!',
  'Invalid Password Combination.',
  'error'
)</script>";
	 header("location:../login.php");
				}
        }
        else {

          // The username/password are incorrect so set an error message
 
	$_SESSION['report'] = " <script>Swal.fire(
  'Invalid!',
  'Username or Password is incorrect',
  'error'
)</script>";
	 header("location:../login.php");
	 
        }	
		

}

//handle report
elseif(isset($_POST['report'])) {
	 extract($_POST);
	 
  $doinsert = mysqli_query($dbc,"INSERT INTO `reports`(`reporter_id`, `productid`, `subject`, `explanation`) VALUES ('$reporter_id', '$productid', '$subject', '$explanation')") or die(mysqli_error($dbc));

if($doinsert){
	$_SESSION['report'] = " <script>Swal.fire(
  'Success!',
  'You have successfully Reported this product',
  'success'
)</script>";



	  header("location:../product-bidding.php?product=$productid&prodname=$productname");
}else{
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'An Error Occured. Try again later',
  'error'
)</script>";
  header("location:../product-bidding.php?product=$productid&prodname=$productname");
}	  

}//handle bidding
elseif(isset($_POST['place_bid'])) {
	 extract($_POST);

if($amount > $currentbid) { //check if bid amount is greater than the current higerst bid
  $doinsert = mysqli_query($dbc,"INSERT INTO `bids`(`user_id`, `product_id`, `bid_amount`) VALUES ('$userid', '$product_id', '$amount')") or die(mysqli_error($dbc));

if($doinsert){
	$_SESSION['report'] = " <script>Swal.fire(
  'Success!',
  'You have successfully Bid for this product',
  'success'
)</script>";



	  header("location:../product-bidding.php?product=$product_id&prodname=$product_name");
}else{
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'An Error Occured. Try again later',
  'error'
)</script>";
header("location:../product-bidding.php?product=$product_id&prodname=$product_name");
}	  


}else{


	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'Your Bid must be higher than the Current Bid Amount',
  'info'
)</script>";
 header("location:../product-bidding.php?product=$product_id&prodname=$product_name");
	
}

}//handle contact us form
elseif(isset($_POST['contactus'])) {
	 extract($_POST);

  $doinsert = mysqli_query($dbc,"INSERT INTO `contactus_form`(`name`, `email`, `phone`, `subject`, `message`) VALUES ('$name', '$email', '$phone', '$subject', '$message')") or die(mysqli_error($dbc));

if($doinsert){
	$_SESSION['report'] = " <script>Swal.fire(
  'Thank You!',
  'We have recieved your message.',
  'success'
)</script>";



	  header("location:$url");
}else{
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'An Error Occured. Try again later',
  'error'
)</script>";
header("location:$url");
}	  




}//handle profile update
elseif(isset($_POST['update_profile'])) {
	 extract($_POST);

  $doupdate = mysqli_query($dbc,"UPDATE `users` SET `name` = '$name', `contact` = '$contact', `email` = '$email', `address` = '$address' WHERE `users`.`id` = '$id';") or die(mysqli_error($dbc));

if($doupdate){
	$_SESSION['report'] = " <script>Swal.fire(
  'Success!',
  'Your Profile has been Updated Successfully.',
  'success'
)</script>";



	  header("location: ../profile.php");
}else{
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'An Error Occured. Try again later',
  'error'
)</script>";
header("location: ../profile.php");
}	  

}//handle category creation
elseif(isset($_POST['create_category'])) {
	 extract($_POST);


if($_FILES['image']['tmp_name'] != ''){
			$ftype= explode('.',$_FILES['image']['name']);
			$ftype= end($ftype);
			$fname =$name.'.'.$ftype;
			if(is_file('../uploads/category/'. $fname))
				unlink('../uploads/category/'. $fname);
			$move = move_uploaded_file($_FILES['image']['tmp_name'],'../uploads/category/'. $fname);
			 $doinsert = mysqli_query($dbc,"INSERT INTO `categories`(`name`, `icon`) VALUES ('$name', '$fname')") or die(mysqli_error($dbc));
			
			}
			
			
if($doinsert){
			
	$_SESSION['report'] = " <script>Swal.fire(
  'Success!',
  'Category Added Successfully',
  'success'
)</script>";



	  header("location: ../admin/category");
}else{
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'An Error Occured. Try again later',
  'error'
)</script>";
header("location:  ../admin/category");
}	  

}//handle product searchbar
elseif(isset($_POST['search'])) {
	//keep user search in session
	$_SESSION['search'] = $_POST['search'];

	  header("location: ../search.php");
}

//handledeleting category
elseif(isset($_POST['deletecat'])) {
	extract($_POST);
 $doinsert = mysqli_query($dbc,"DELETE FROM categories where id = ".$category."") or die(mysqli_error($dbc));		
if($doinsert){
	unlink('../uploads/category/'.$icon);		
	$_SESSION['report'] = " <script>Swal.fire(
  'Success!',
  'Category Deleted Successfully',
  'success'
)</script>";



	  header("location: ../admin/category");
}else{
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'An Error Occured. Try again later',
  'error'
)</script>";
header("location:  ../admin/category");
}	
}	 
 //handle winner crowning
elseif(isset($_POST['crown_winner'])) {
	extract($_POST);

  $doupdate = mysqli_query($dbc,"UPDATE `bids` SET `status` = '2' WHERE `bids`.`id` = '$bid';") or die(mysqli_error($dbc));
	
if($doupdate){
	unlink('../uploads/category/'.$icon);		
	$_SESSION['report'] = " <script>Swal.fire(
  'Success!',
  'You have successfull Crowned the winner',
  'success'
)</script>";



	  header("location: ../admin/bidding_details.php?product=$getproduct&prodname=$getprodname");
}else{
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'An Error Occured. Try again later',
  'error'
)</script>";
 header("location: ../admin/bidding_details.php?product=$getproduct&prodname=$getprodname");
}	
}	 	 
 //handle product deletion
elseif(isset($_POST['delete_product'])) {
	extract($_POST);

  $doupdate = mysqli_query($dbc,"DELETE FROM products WHERE `id` = '$prodid'") or die(mysqli_error($dbc));
	
if($doupdate){
	//unlink('../uploads/product/'.$icon);		
	$_SESSION['report'] = " <script>Swal.fire(
  'Success!',
  'Product Deleted Successfully',
  'success'
)</script>";



	  header("location: ../admin/products");
}else{
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'An Error Occured. Try again later',
  'error'
)</script>";
 header("location: ../admin/products");
}	
}

//handle product creation
elseif(isset($_POST['create_product'])) {
	extract($_POST);

$formatedstrtdate = date('Y-m-d H:i:s', strtotime($start_date));
$formatedstpdate = date('Y-m-d H:i:s', strtotime($end_date));
 $filenames = $_FILES['img']['name'];
    $tmp_names = $_FILES['img']['tmp_name'];
    $folder = [];
    $flagUnsupportedFormat = false; // Flag to track unsupported formats
    // Loop through each file and move it to the respective folder
    foreach ($filenames as $key => $filename) {
        $tmp_name = $tmp_names[$key];
      $folder[] = "../uploads/products/features/" . $filename;
	   $folder2[] = $filename;
        // Check if the file is an image
        $check = getimagesize($tmp_name);
        if ($check === false) {
            echo "File '$filename' is not an image.<br>";
            continue; // Skip this file and move to the next
        }
        // Check file format
        $allowedFormats = ["jpg", "jpeg", "png", "gif","webp"];
        $imageFileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if (!in_array($imageFileType, $allowedFormats)) {
            echo "File '$filename' has an unsupported format. Only JPG, JPEG, PNG, and GIF files are allowed.<br>";
            $flagUnsupportedFormat = true; // Set the flag
            continue; // Skip this file and move to the next
        }
        // Check file size (optional, set your desired size)
        $maxFileSize = 5 * 1024 * 1024; // 5MB
        if ($_FILES['img']['size'][$key] > $maxFileSize) {
            echo "File '$filename' is too large. Maximum size allowed is 5MB.<br>";
            continue; // Skip this file and move to the next
        }
        move_uploaded_file($tmp_name, $folder[$key]);
    }
    if (!$flagUnsupportedFormat) {
        // Insert data only if no unsupported formats were encountered

 $doinsert = mysqli_query($dbc,"INSERT INTO `products`(`category_id`, `name`, `description`, `userid`, `img_fname`, `start_bid`, `regular_price`, `bid_start_datetime`, `bid_end_datetime`) VALUES ('$category_id', '$name','$description', '$userid','" . implode(",", $folder2) . "', '$min_bid_price', '$regular_price','$formatedstrtdate', '$formatedstpdate')") or die(mysqli_error($dbc));

    }
	
	
if($doinsert){
	//unlink('../uploads/product/'.$icon);		
	$_SESSION['report'] = " <script>Swal.fire(
  'Success!',
  'Product Added Successfully',
  'success'
)</script>";



	  header("location: ../admin/products");
}else{
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'An Error Occured. Try again later',
  'error'
)</script>";
 header("location: ../admin/products");
}	
}	

//handle product creation on members page
elseif(isset($_POST['create_product2'])) {
	extract($_POST);

$formatedstrtdate = date('Y-m-d H:i:s', strtotime($start_date));
$formatedstpdate = date('Y-m-d H:i:s', strtotime($end_date));
 $filenames = $_FILES['image']['name'];
    $tmp_names = $_FILES['image']['tmp_name'];
    $folder = [];
    $flagUnsupportedFormat = false; // Flag to track unsupported formats
    // Loop through each file and move it to the respective folder
    foreach ($filenames as $key => $filename100) {
        $tmp_name = $tmp_names[$key];
      $folder[] = "../uploads/products/features/" . $filename100;
	   $folder2[] = $filename100;
        // Check if the file is an image
        $check = getimagesize($tmp_name);
        if ($check === false) {
            echo "File '$filename100' is not an image.<br>";
            continue; // Skip this file and move to the next
        }
        // Check file format
        $allowedFormats = ["jpg", "jpeg", "png", "gif","webp"];
        $imageFileType = strtolower(pathinfo($filename100, PATHINFO_EXTENSION));
        if (!in_array($imageFileType, $allowedFormats)) {
            echo "File '$filename100' has an unsupported format. Only JPG, JPEG, PNG, and GIF files are allowed.<br>";
            $flagUnsupportedFormat = true; // Set the flag
            continue; // Skip this file and move to the next
        }
        // Check file size (optional, set your desired size)
        $maxFileSize = 5 * 1024 * 1024; // 5MB
        if ($_FILES['image']['size'][$key] > $maxFileSize) {
            echo "File '$filename100' is too large. Maximum size allowed is 5MB.<br>";
            continue; // Skip this file and move to the next
        }
        move_uploaded_file($tmp_name, $folder[$key]);
    }
    if (!$flagUnsupportedFormat) {
        // Insert data only if no unsupported formats were encountered

 $doinsert = mysqli_query($dbc,"INSERT INTO `products`(`category_id`, `name`, `description`, `userid`, `img_fname`, `start_bid`, `regular_price`, `bid_start_datetime`, `bid_end_datetime`) VALUES ('$category_id', '$name','$description', '$userid','" . implode(",", $folder) . "', '$min_bid_price', '$regular_price','$formatedstrtdate', '$formatedstpdate')") or die(mysqli_error($dbc));

    }
	
	
if($doinsert){
	//unlink('../uploads/product/'.$icon);		
	$_SESSION['report'] = " <script>Swal.fire(
  'Success!',
  'Product Added Successfully',
  'success'
)</script>";



	  header("location: ../add_auctions");
}else{
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'An Error Occured. Try again later',
  'error'
)</script>";
 header("location: ../add_auctions");
}	
}	  

//handle deleting customer
elseif(isset($_POST['delete_customer'])) {
	extract($_POST);
 $dodelete = mysqli_query($dbc,"DELETE FROM users where id = ".$customer."") or die(mysqli_error($dbc));		
if($dodelete){
		
	$_SESSION['report'] = " <script>Swal.fire(
  'Success!',
  'Customer Deleted Successfully',
  'success'
)</script>";



	 header("location:  ../admin/customer");
}else{
	
	$_SESSION['report'] = " <script>Swal.fire(
  'Error!',
  'An Error Occured. Try again later',
  'error'
)</script>";
header("location:  ../admin/customer");
}	
}
?>