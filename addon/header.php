        <!-- ========== header============= -->
        <header class="header-area style-1">
          <div class="header-logo">
            <a href="index">
              <img src="assets/logo/header-logo-1702369353-1704963045.png" alt="Logo">
            </a>
          </div>
          <div class="main-menu">
            <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
              <div class="mobile-logo-wrap ">
                <a href="index">
                  <img src="assets/logo/header-logo-1702369353-1704963045.png" alt="Logo">
                </a>
              </div>
              <div class="menu-close-btn">
                <i class="bi bi-x-lg"></i>
              </div>
            </div>
            <ul class="menu-list">
              <li>
                <a class=" active " target="" href="index"> Home </a>
              </li>
              <li>
                <a class="  " target="" href="about-us"> About Us </a>
              </li>
			  
			  
              <li class="menu-item-has-children">
                <a target="" href="all-products" class="drop-down"> Browse Products </a>
                <i class='bx bx-plus dropdown-icon'></i>
                <ul class="submenu">
                  <li>
                    <a class="   " href="all-products" target=""> All Products </a>
                  </li>
				  
		
<?php
	$result3 = mysqli_query($dbc,"SELECT * FROM `categories` ORDER BY `id` DESC limit 7");
										if ($result3->num_rows > 0) 
										{
									
    while($row = mysqli_fetch_array($result3)){	
	//shortening notice text
	$catname = $row['name'];
	$catid = $row['id'];

	echo ' <li>
                    <a class="   "href="browse_category?category='.$catname.'&categoryid='.$catid.'" target=""> '.$catname.' </a>
                  </li>';

	}
	
										}else {
		echo"<li>
		<a href='#'>No category Found!</a>
		</li>";									
										}
?>
                </ul>
              </li>
			  
			  
            <!--  <li>
                <a class="  " target="" href="store-list"> Store List </a>
              </li>-->   
			   <li>
                <a class="  " target=""  href="how-we-work" >How It Works </a>
              </li> 
			   <li>
                 <a class="   " href="faqs" target=""> FAQ&#039;S </a>
              </li>
             <!-- <li class="menu-item-has-children">
                <a target="" href="pages" class="drop-down"> Pages </a>
                <i class='bx bx-plus dropdown-icon'></i>
                <ul class="submenu">
                
                  <li>
                    <a class="   " href="faqs" target=""> FAQ&#039;S </a>
                  </li>
                  <li>
                    <a class="   " href="terms-and-conditions" target=""> Terms and Conditions </a>
                  </li>
                  <li>
                    <a class="   " href="help-center" target=""> Help Center </a>
                  </li>
                </ul>
              </li>-->
             <!-- <li>
                <a class="  " target="" href="blogs"> Blog </a>
              </li>-->
              <li>
                <a class="  " target="" href="contact-us"> Contact Us </a>
              </li>
            </ul>
            <!-- mobile-search-area -->
            <div class="d-lg-none d-block">
            
			  
			  		<?php
	if(isset($_SESSION['user_id'])){ //chceck if user session is set
echo '<div>
                <a class="eg-btn btn--primary header-btn2" href="logout">Log Out</a>
              </div>';
}else{
 echo '  
              <ul class="authontication-btn-group">
                <li>
                  <a class="eg-btn btn--primary sign-up" href="register">Sign Up</a>
                </li>
                <li>
                  <a class="eg-btn btn--primary marchant-btn" href="register">Become a Merchant</a>
                </li>
              </ul>';
}		
			
			?>
              <form class="mobile-menu-form mb-5" action="#" method="post">
                <input type="hidden" name="_token" value="RtroTkybwAIj8nyq22k9izgBREvHf6Tly9nPsBCN" autocomplete="off">
                <div class="input-with-btn d-flex">
                  <input type="text" name="search" placeholder="Search Here...">
                  <button type="submit" class="eg-btn btn--primary btn--sm">
                    <i class="bi bi-search"></i>
                  </button>
                </div>
              </form>
              <div class="hotline two">
                <div class="hotline-info">
                  <span>Click To Call</span>
                  <h6>
                    <a href="tel:+347-274-8816">+347-274-8816</a>
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-right d-flex align-items-center">
            <div class="hotline d-xxl-flex d-none">
              <div class="hotline-icon">
                <img alt="image" src="frontend/images/icons/header-phone.svg">
              </div>
              <div class="hotline-info">
                <span>Click To Call</span>
                <h6>
                  <a href="tel:+347-274-8816">+347-274-8816</a>
                </h6>
              </div>
            </div>
            <div class="search-btn">
              <i class="bi bi-search"></i>
            </div>
            <div>
			
			<?php
	if(isset($_SESSION['user_id'])){ //chceck if user session is set
echo '<a class="eg-btn btn--primary header-btn" href="dashboard">My Account</a>';
}else{
 echo '<a class="eg-btn btn--primary header-btn" href="login">Log In</a>';
}		
			
			?>
           
            </div>
            <div class="mobile-menu-btn d-lg-none d-block">
              <i class='bx bx-menu'></i>
            </div>
          </div>
        </header>

        <!-- ========== header end============= -->
		
		<?php
    
      if(isset($_SESSION['report'])){
        echo "
         
            <p>".$_SESSION['report']."</p> 
        
        ";
        unset($_SESSION['report']);
      }
    ?>