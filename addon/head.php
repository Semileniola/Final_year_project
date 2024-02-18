<?php include 'Service_Room.php'; ?> <!--include where all functions are kept -->
<?php
if($hosturl == 'dashboard.php' || $hosturl == 'orders.php' || $hosturl == 'profile.php' || $hosturl == 'auctions.php' || $hosturl == 'biddings.php'|| $hosturl == 'add_auctions.php'){
	checklogin();
	
}elseif($hosturl == 'login.php' || $hosturl == 'register.php'){
checkLoginUser();	
}
?>
<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="RtroTkybwAIj8nyq22k9izgBREvHf6Tly9nPsBCN">
            <title> <?php echo strtoupper(substr($page, 0, -4));?> </title>
    

            <link rel="icon" href="assets/logo/sm-logo-1704965338.png" type="image/gif"
            sizes="20x20">
    
    <!-- Meta -->
            <meta name="robots" content="index, follow">
        <meta name="googlebot-news" content="index, follow">
        <meta name="msnbot" content="index, follow">
    




    <meta name="description" content="&lt;p&gt;&lt;br&gt;&lt;/p&gt;">
    <meta name="keywords" content="">

    <meta name="author" content="Bidout">
    <meta name="resource-type" content="document">
    <meta name="contact" content="+support@example.com">

    <meta property="og:site_name" content="Bidout">
    <meta property="og:title" content="Home">
    <meta property="og:description" content="&lt;p&gt;&lt;br&gt;&lt;/p&gt;">
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="index">

    <meta name="twitter:site" content="@Bidout">
    <meta name="brand_name" content="Bidout">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Home">
    <meta name="twitter:description" content="&lt;p&gt;&lt;br&gt;&lt;/p&gt;">
    <meta name="twitter:domain" content="index">
            <meta property="og:image" content="assets/logo/header-logo-1702369353-1704963045.png">
        <meta name="twitter:image" content="assets/logo/header-logo-1702369353-1704963045.png">
    

    <link rel="stylesheet" href="frontend/css/animate.css">
    <!-- css file link -->
    <link rel="stylesheet" href="frontend/css/all.css">

    <!-- bootstrap 5 -->

    <link rel="stylesheet" href="frontend/css/bootstrap.rtl.min.css">

    <!-- box-icon -->
    <link rel="stylesheet" href="frontend/css/boxicons.min.css">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="frontend/css/bootstrap-icons.css">

    <!-- jquery ui -->
    <link rel="stylesheet" href="frontend/css/jquery-ui.css">

    <!-- swiper-slide -->
    <link rel="stylesheet" href="frontend/css/swiper-bundle.min.css">

    <!-- slick-slide -->
    <link rel="stylesheet" href="frontend/css/slick-theme.css">
    <link rel="stylesheet" href="frontend/css/slick.css">
    <link rel="stylesheet" type="text/css" href="backend/libraries/cutealert/css/style.css">
    <!-- select 2 -->
    <link rel="stylesheet" href="frontend/css/nice-select.css">

    <!-- animate css -->
    <link rel="stylesheet" href="frontend/css/magnific-popup.css">

    <!-- odometer css -->
    <link rel="stylesheet" href="frontend/css/odometer.css">

    <!-- style css -->
    <link rel="stylesheet" href="frontend/css/style.css">

    <link rel="stylesheet" href="frontend/css/modify.css">
    
    
    <style>
        :root {
            --primary: #32C36C;
            --secondary: #1F2230;
        }

        .inner-banner {
            background: rgba(,,, .9);
        }
		
		
    </style>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

