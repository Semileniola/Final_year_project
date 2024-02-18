 <!-- =============== search-area start =============== -->

      <div class="mobile-search">
        <div class="container">
            <form action="forms/action_handler.php" method="post">
                <input type="hidden" name="_token" value="RtroTkybwAIj8nyq22k9izgBREvHf6Tly9nPsBCN" autocomplete="off">            <div class="row d-flex justify-content-center">
                <div class="col-md-11">
                    <label>What are you lookking for?</label>
                    <input type="text" name="search" placeholder="Search Products, Category">
                </div>
                <div class="col-1 d-flex justify-content-end align-items-center">
                    <div class="search-cross-btn">
                        <i class="bi bi-x"></i>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
        <!-- =============== search-area end  =============== -->
		
		
		<!-- ========== topbar ============= -->
        <div class="topbar">
    <div class="topbar-left d-flex flex-row align-items-center">
        <h6>Follow Us</h6>
        <ul class="topbar-social-list gap-2">
                            <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                        <li><a href="https://twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class='bx bxl-linkedin'></i></a></li>
                                        <li><a href="https://www.youtube.com/"><i class='bx bxl-youtube'></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                        <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest-alt'></i></a></li>
                    </ul>
    </div>
            <div class="email-area">
            <h6>Email: <a
                    href="mailto:info@yourmail.com">info@yourmail.com</a></h6>
        </div>
        

    <div class="topbar-right">
        <ul class="topbar-right-list">
                        <li><span class="langName">en</span><img
                    src="assets/img/flags/en.png" alt="Language">
                <ul class="topbar-sublist" id="change-lang">
                                            <li><a class="dropdown-item" href="javascript:void(0)" data-flag="en"
                                class="dropdown-item  active "><span>English</span><img
                                    src="assets/img/flags/en.png"
                                    alt="image"></a>
                        </li>
                                    </ul>
            </li>
			
					  		<?php
	if(isset($_SESSION['user_id'])){ //chceck if user session is set
echo '  <li><a href="logout">Log Out</a></li>';
}else{
 echo '  
      <li><a href="register">Become a Merchant</a> </li>
                <li><a href="register">Sign Up</a></li>';
}		
			
			?>

                    </ul>
    </div>
</div>