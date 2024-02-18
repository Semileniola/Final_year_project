<?php //begin the session if it hasn't already
if(!isset($_SESSION)){
	session_start(); 
	}
//All of our application's settings, database configuration and functions are stored here.

//--------------------------------------------------main application function-------------------------------------------------------------------->
date_default_timezone_set("Africa/Lagos");
//let us set today's date, we will need it in the future
$today = date("Y-m-d H:i:s"); 

//for sending mails, we have invited brother PHPmailer to do that, you can use other mail function tho, but this is my favourite
use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
  //server cofiguration setting
  $host = 'localhost'; //usually localhost but when live, you might want to change to your host 
 $user = 'root'; //our database user
   $password = ''; //set password when going  live, i have left blank because we are in a local environment
   $database = 'bidding_db'; //your database name gangan, where all your data are kept	 	

  // we establish connection to server and database. if you going live, pleaae use PDO abeg
  $dbc = mysqli_connect($host, $user, $password, $database)or die(
      $dbc_error = '<div id="serverstatus"><div class="alert2 alert-danger">Unable to connect to database.</div></div>');
  
if($dbc){
   $dbc_success =  '<div class="alert2 alert-success">Connnetion to database Successful.</div>';
  }

//------------------------------------------------------------------------------------------------------------------------------------------------//
//*---------------FREE ADVICE: IF YOU DONT KNOW WHAT YOU'RE DOING DO NOT EDIT BEYOND THIS LINE. IT IS VERY IMPORTANT PLEASE----------------------*//
//------------------------------------------------------------------------------------------------------------------------------------------------//

 // C.I - FUNCTIONS LIBRARY III
//GENRAL FUNCTIONS

//Because of time, i might have the chance to explain all of this functions but will still try to explain some briefly

$hosturl = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$directoryURI =basename($_SERVER['SCRIPT_NAME']);

    $page = basename($_SERVER["PHP_SELF"]);	

 function url(){
 $appfolder ="/"; ///app folder
	return $url = 	$home_url = 'http://' . $_SERVER['HTTP_HOST'] . $appfolder;
  }
$url =   url();  


//a simple filtering function to sanitize user's input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$csession_id = 0;



function checklogin(){ // Redirect user to login  if not logged in
global $url;  
        if(!isset($_SESSION['user_id'])){
        header("location:./login");
        }elseif($_SESSION['login_type'] == 1){
		   header("location:./admin");	
		}
} 


function checkadminlogin(){ // check if user has admin access
global $url;  
        if(!isset($_SESSION['user_id']) || $_SESSION['login_type'] != 1){
        header("location:../login");
        }
} 

function checkLoginUser(){ // Redirect user to index if logged in 
global $url; 
        if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null){
        header("location:./dashboard");
        }
}

//geting user value
function getuser($column, $id, $dbc)
{
$query = "SELECT `$column` FROM `users` WHERE `id` = '$id'";
$sql = mysqli_query($dbc, $query) or die(mysqli_error());
        while($row = mysqli_fetch_array($sql))
        {
                $display = $row["$column"];
                
                echo $display;
        }

}

//get product highest bid
function getHighestBid($prodid, $bidstart, $dbc)
{
$query = "SELECT * FROM bids WHERE `product_id` = '$prodid' ORDER BY `bid_amount` desc limit 1";
$sql = mysqli_query($dbc, $query) or die(mysqli_error());
if ($sql->num_rows > 0) {
       $row = mysqli_fetch_array($sql);
        
                $highestbid = $row["bid_amount"];
		$display = $highestbid;
}else{
	
	$display = $bidstart;
}
		
                return number_format($display);
       

}



//get value of id
  function valueOfid2($id, $field,$table){
global $dbc;
	 $query = "SELECT $field
                FROM $table WHERE id = '$id'"; 
    $data = mysqli_query($dbc, $query);
    //$seerow = mysqli_fetch_array($data);
 $seerow = mysqli_fetch_array($data);
                $name1 = $seerow["$field"];
                //echo $name1;
    return $name1;
}



//do date difference

function getdatedifference($enddatetime){
					
$old_date = new DateTime($enddatetime);
$now = new DateTime(Date('Y-m-d H:i:s'));
$interval = $old_date->diff($now);
if($old_date >= $now){	
return $interval->d.'D : '.$interval->h.'H : '.$interval->i.'M : '.$interval->s.'S';
}else{
return 'Ended';	
}

// you can also get years, month, hours, minutes, and seconds
//echo $interval->y.' years<br>';
//echo $interval->m.' months<br>';
//echo $interval->h.' hours<br>';
//echo $interval->i.' minutes<br>';
//echo $interval->s.' seconds<br>';

	
}



//shorten item description
function excerpt($title, $cutOffLength) {

    $charAtPosition = "";
    $titleLength = strlen($title);

    do {
        $cutOffLength++;
        $charAtPosition = substr($title, $cutOffLength, 1);
    } while ($cutOffLength < $titleLength && $charAtPosition != " ");

    return substr($title, 0, $cutOffLength) . '...';

}

function test_excerpt($content, $length) {

    echo excerpt($content, $length);
    echo "
";


}



function countall($field,$table){
global $dbc; global $csession_id;
	 $query = "SELECT `$field`
                FROM `$table`"; 
    $data = mysqli_query($dbc, $query);
    $count = mysqli_num_rows($data);
    return $count;
}


function countdata($field, $id,$table){
global $dbc; global $csession_id;
	 $query = "SELECT `$field`
                FROM `$table` 
                WHERE `$field` = '$id'"; 
    $data = mysqli_query($dbc, $query);
    $count = mysqli_num_rows($data);
    return $count;
}


function select_option2_desc($name, $id, $table, $dbc){ //Select name and id
  $sql = "SELECT * FROM $table ORDER BY $id DESC";
  $result = $dbc->query($sql) or die(mysqli_error());
  $options = "";

  while($row= $result->fetch_assoc()){
    $name2 = $row ["$name"];
    $id2 = $row ["$id"];
    $options .= "<option value='$id2' >".$name2.'</option>';
  }
   return $options;
}


function countsearchdata($field){
global $dbc; global $today;
$query = "SELECT * FROM `products` WHERE `bid_end_datetime` >  '$today' AND `bid_start_datetime` <= '$today' AND `name` LIKE '%$field%' ORDER BY `date_created`"; 
    $data = mysqli_query($dbc, $query);
    $count = mysqli_num_rows($data);
    return $count;
}


function countdata2($field, $id, $field2, $id2, $cond, $table){
global $dbc; global $csession_id;
	 $query = "SELECT `$field`
                FROM `$table`
                WHERE `$field` = '$id' AND `$field2` $cond '$id2'"; 
    $data = mysqli_query($dbc, $query);
    $count = mysqli_num_rows($data);
    return $count;
}



//mail sender using PHPMailer for success
function successMail($fullname, $email, $phone, $subject, $msg){
	global $url;
	$message = '<html><body>
			<table style="height: 156px;" width="607" cellspacing="0" cellpadding="0" align="center"><tbody><tr>
			<td style="width: 600px;" colspan="2"><h1 style="background: #ffffff none repeat scroll 0% 0%; border: 1px solid #ffffff; padding: 5px 10px;"><center><img src="https://www.bidout.com/img/logo.png" alt="logo url" width="150" height="150" /></center></h1></td>
</tr>
</tbody>
</table>

<h4 style="color: #ff0000;"><span class="example1" style="color: #000000;">YOu can put your message here... </span></h4>



<td style="width: 600px;" colspan="2"><style="background: #d4d8d8 none repeat scroll 0% 0%; border: 1px solid #198752; padding: 5px 10px;"><b>Thank You,</b><br><br><br> </b><br>Bidout.org <br><br></td></body></html>';

					//Load phpmailer
		    		require 'vendor/autoload.php';

		    		$mail = new PHPMailer(true);                             
				    {
				        //Server settings
				        $mail->isSMTP();                                     
				        $mail->Host = 'gmail.com';                      
				        $mail->SMTPAuth = true;                               
				        $mail->Username = 'yourmail@gmail.com';     
				        $mail->Password = 'YOURPASSWORD';                    
				        $mail->SMTPOptions = array(
				            'ssl' => array(
				            'verify_peer' => false,
				            'verify_peer_name' => false,
				            'allow_self_signed' => true
				            )
				        );                         
				        $mail->SMTPSecure = 'ssl';                           
				        $mail->Port = 465;                                   

				        $mail->setFrom('noreply@bidout.com', 'Bidout.com');
				        
				        //Recipients
				        //$mail->addAddress($email);    
						$mail->addAddress('horlymansoft@gmail.com'); 						
				        $mail->addReplyTo('norepl@bidout.com');
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = 'Bidout - '.$subject;
				        $mail->Body    = $message;

				        $mail->send();


					}
}


function generateRandomString($length = 11) {
    $characters = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


  
if (!function_exists("GetSQLValueString")) {
    function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
    { 
        if (PHP_VERSION < 6) {
            $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
        }

        $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
        


        switch ($theType) {
          case "text":
            $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
            break;    
          case "long":
          case "int":
            $theValue = ($theValue != "") ? intval($theValue) : "NULL";
            break;
          case "double":
            $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
            break;
          case "date":
            $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
            break;
          case "defined":
            $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
            break;
        }
        return $theValue;
    }
}



?>