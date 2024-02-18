<?php //This is essentially where all of our actions will be managed.
 include '../addon/Service_Room.php'; 
//define date and time 
$datetime = date("Y-m-d H:i:s");
$date = date("Y-m-d");

if(isset($_POST['create_product2'])) {
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
?>