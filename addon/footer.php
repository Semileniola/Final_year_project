  <!-- =============== Footer-action-section start =============== -->

        <footer class="mt-120">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-5">
                

                
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <a href="index">
                                                                    <img alt="Footer Logo" src="assets/logo/footer-logo-1692027705.png">
                                                            </a>
                                                            <p>Bidout is A web application on the Design and Implementation of a Bid-Based Functioning Platform.</p>
                            
                                                    
                                                    </div>
                    </div>
                

                
                                    <div class="col-lg-3 col-md-6 d-flex justify-content-lg-center">
                        <div class="footer-item">
                            <h5>Nevigation</h5>

                                                            <ul class="footer-list">
                                                                            <li><a target=""
                                                href="products">
                                                                                                    All Product
                                                
                                            </a>
                                        </li>
                                                                            <li><a target=""
                                                href="how-we-work">
                                                                                                    How It Works
                                                
                                            </a>
                                        </li>
                                                                            <li><a target=""
                                                href="dashboard">
                                                                                                    My Account
                                                
                                            </a>
                                        </li>
                                                                            <li><a target=""
                                                href="about-us">
                                                                                        About Us
                                                
                                            </a>
                                        </li>
                                                                    </ul>
                                                    </div>
                    </div>
                
                
                                    <div class="col-lg-3 col-md-6 d-flex justify-content-lg-center">
                        <div class="footer-item">

                            <h5>Help and Support</h5>

                                                            <ul class="footer-list">
                                                                            <li><a target="__blank"
                                                href="help-center">
                                                                                                    Help Center
                                                                                            </a>
                                        </li>
                                                                            <li><a target="__blank"
                                                href="faqs">
                                                                                                    Customer FAQs
                                                                                            </a>
                                        </li>
                                                                            <li><a target="__blank"
                                                href="terms-and-conditions">
                                                                                                    Terms and Conditions
                                                                                            </a>
                                        </li>
                                                                            <li><a target="__blank"
                                                href="#">
                                                                                                    Security Information
                                                                                            </a>
                                        </li>
                                                                            <li><a target="__blank"
                                                href="#">
                                                                                                    Merchant Add Policy
                                                                                            </a>
                                        </li>
                                                                    </ul>
                                                    </div>
                    </div>
                
                                                        <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                                                        <h5>Categories</h5>
                                                               
                                                            <ul class="footer-list">
															
				
<?php
	$result3 = mysqli_query($dbc,"SELECT * FROM `categories` ORDER BY rand() DESC limit 5");
										if ($result3->num_rows > 0) 
										{
									
    while($row = mysqli_fetch_array($result3)){	
	$catname = $row['name'];
	$catid = $row['id'];

	echo '                            <li><a target="__blank"
                                                href="browse_category?category='.$catname.'&categoryid='.$catid.'">
                                                                                                    '.$catname.' 
                                                                                            </a>
                                        </li>';

	}
	
										}else {
		echo"<li>
		<a href='#'>No category Found!</a>
		</li>";									
										}
?>

                                                
                                                                    </ul>
                                                             
                                                    </div>
                    </div>
                            </div>
        </div>
    </div>
            <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex align-items-center g-4">
                    <div class="col-lg-6 d-flex justify-content-lg-start justify-content-center">

                        <p class="footer-copyright"><p><font><span style="font-size:14px;">Copyright 2024</span></font><a href="index" style="font-family:Inter, sans-serif;font-size:14px;"><font color="#397b21"><b>Bid Out</b></font></a><font><span style="font-size:14px;">| Design By <font color="#397b21"><b><a href="<?php echo $url; ?>">Y</a></b></font></span></font><a href="<?php echo $url; ?>"><font color="#397b21"><b>OUR GROUP NAME</b></font></a>.</p></p>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center align-items-center flex-sm-nowrap flex-wrap">
                        <p class="d-sm-flex d-none"><!--Leave blank or put whateve you like here--></p>
                       
                    </div>
                </div>
            </div>
        </div>
    
</footer>

        <!-- =============== Footer-action-section end =============== -->
    </div>
    <!-- js file link -->
    <script src="frontend/js/jquery-3.7.1.min.js"></script>
    <script src="frontend/js/jquery-ui.js"></script>
    <script src="frontend/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/wow.min.js"></script>
    <script src="frontend/js/swiper-bundle.min.js"></script>
    <script src="frontend/js/slick.js"></script>
    <script src="backend/libraries/cutealert/js/cute-alert.js"></script>
    <script src="frontend/js/jquery.nice-select.js"></script>
    <script src="frontend/js/odometer.min.js"></script>
    <script src="frontend/js/range-slider.js"></script>
    <script src="frontend/js/viewport.jquery.js"></script>
    <script src="frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="frontend/js/main.js"></script>
    <!--Start of Tawk.to Script-->

<!--if you want your visitors to tawkto you in realtime. lOL-->


    <!--End of Tawk.to Script-->
    <script>
        var successAlertImage = "backend/libraries/cutealert/img/success.svg";
        var errorAlertImage = "backend/libraries/cutealert/img/error.svg";

        
            </script>

    


<p class="d-none cookie"></p>
</body>


<!--   05:24:12 GMT -->
</html>
