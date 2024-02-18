<?php include 'addon/head.php'; ?>
<body>

    
    <div class="layout-wrapper">
   
<?php include 'addon/topbar.php'; ?>

  
     

<?php include 'addon/header.php'; ?>

        <!-- ===============  Hero area end=============== -->

        <!-- main-container -->
        
        <div class="main-content">
            

                  <!-- ========== inner-page-banner start ============= -->




<div class="inner-banner">
    <div class="container">
        <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">Luxury Leather Bag
        </h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index"> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Luxury Leather Bag</li>
            </ol>
        </nav>
        <img class="breadcumb-img d-lg-flex d-none" src="assets/logo/image%20(4)-1702369167.png"
            alt="">
    </div>


</div>

<!-- ========== inner-page-banner end ============= -->


    <div class="auction-details-section pt-120">
        <img alt="image" src="frontend/images/bg/section-bg.png" class="img-fluid section-bg-top">
        <img alt="image" src="frontend/images/bg/section-bg.png" class="img-fluid section-bg-bottom">
        <div class="container">
            <div class="row g-lg-4 gy-5 mb-50">
                <div class="col-xl-6 col-lg-7">
                    <div class="swiper thumb-big">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img alt="image"
                                    src="uploads/products/features/product-img1-1704259711.jpg"
                                    class="img-fluid">
                            </div>
                                                            <div class="swiper-slide">
                                    <img alt="image" src="uploads/products/gallery/product-img3-1704259711.jpg"
                                        class="img-fluid">
                                </div>
                                                            <div class="swiper-slide">
                                    <img alt="image" src="uploads/products/gallery/product-img4-1704259711.jpg"
                                        class="img-fluid">
                                </div>
                                                            <div class="swiper-slide">
                                    <img alt="image" src="uploads/products/gallery/product-img4%20(1)-1704259711.jpg"
                                        class="img-fluid">
                                </div>
                                                    </div>
                    </div>
                    <div thumbsSlider="" class="swiper slider-thumb">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="uploads/products/features/product-img1-1704259711.jpg" />
                            </div>
                                                            <div class="swiper-slide">
                                    <img src="uploads/products/gallery/product-img3-1704259711.jpg" />
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="uploads/products/gallery/product-img4-1704259711.jpg" />
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="uploads/products/gallery/product-img4%20(1)-1704259711.jpg" />
                                </div>
                                                    </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="product-details-right  wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <h3>Luxury Leather Bag</h3>
                        <p class="para">Experience the perfect blend of fashion and function – choose our Leather Bags and redefine the way you carry your essentials. Elevate your everyday style with a touch of timeless elegance and the enduring quality of genuine leather.</p>
                                                    <div class="purchase-form">
                                <form action="'.$url.'/checkout" method="POST">
                                    <input type="hidden" name="_token" value="RtroTkybwAIj8nyq22k9izgBREvHf6Tly9nPsBCN" autocomplete="off">                                    <div class="price-area">
                                        <h4>Price:                                                 <del class="opacity-50 me-3">$<span
                                                        class="rprice">280</span></del>
                                                                                        <span>$<span
                                                    class="sprice">230</span></span>
                                        </h4>
                                        <input type="hidden" class="mainPrice" name="price"
                                            value="230">
                                        <input type="hidden" name="product_id" value="20">
                                        <input type="hidden" class="psale_price"
                                            value="230">
                                        <input type="hidden" class="pregular_price" value="280">
                                    </div>
                                    <div class="qty-and-buy-btn d-flex flex-wrap align-items-end gap-4 ">
                                        <div class="quantity-area">
                                            <h6>Quantity</h6>
                                            <div class="quantity-counter">
                                                <a href="#" class="quantity__minus"><i class="bx bx-minus"></i></a>
                                                <input name="quantity" type="text" class="quantity__input"
                                                    value="01">
                                                <a href="#" class="quantity__plus"><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="shop-details-btn">
                                                                                            <button class="eg-btn btn--primary btn-lg border-0"
                                                    type="submit">Buy Now</button>
                                                                                    </div>
                                    </div>
                                </form>
                            </div>
                                                <div class="product-info">
                            <ul class="product-info-list">
                                                                    <li> <span>SKU:</span> 98524100</li>
                                                                                                    <li> <span>Category:</span> <a
                                            href="category/fashion.php">Fashion</a>
                                    </li>
                                                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4 mb-3">
                <div class="col-lg-8">
                    <ul class="nav nav-pills d-flex flex-row justify-content-start gap-sm-2 gap-3 mb-45 wow fadeInDown"
                        data-wow-duration="1.5s" data-wow-delay=".2s" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active details-tab-btn" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Description</button>
                        </li>

                                                    <li class="nav-item" role="presentation">
                                <button class="nav-link details-tab-btn" id="pills-specification-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-specification" type="button"
                                    role="tab" aria-controls="pills-specification"
                                    aria-selected="false">Specifications</button>
                            </li>
                        

                                                                                                    <li class="nav-item" role="presentation">
                                <button class="nav-link details-tab-btn" id="pills-review-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-review" type="button" role="tab"
                                    aria-controls="pills-review" aria-selected="false"> Reviews
                                    (0)</button>
                            </li>
                                            </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s"
                            id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="describe-content">

                                                        <p>Experience the perfect blend of fashion and function – choose our Leather Bags and redefine the way you carry your essentials. Elevate your everyday style with a touch of timeless elegance and the enduring quality of genuine leather.</p><div><p>Experience the perfect blend of fashion and function – choose our Leather Bags and redefine the way you carry your essentials. Elevate your everyday style with a touch of timeless elegance and the enduring quality of genuine leather.</p></div><div><p>Experience the perfect blend of fashion and function – choose our Leather Bags and redefine the way you carry your essentials. Elevate your everyday style with a touch of timeless elegance and the enduring quality of genuine leather.</p></div><div><p>Experience the perfect blend of fashion and function – choose our Leather Bags and redefine the way you carry your essentials. Elevate your everyday style with a touch of timeless elegance and the enduring quality of genuine leather.</p></div><div><br></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-specification" role="tabpanel"
                            aria-labelledby="pills-specification-tab">
                            <div class="bid-list-area">
                                <table class="table table-bordered table-striped mt-3" style="width:100%;">
                                    <tbody>
                                                                                    <tr>
                                                <td>Category</td>
                                                <td>Equipment</td>
                                            </tr>
                                                                                    <tr>
                                                <td>Tags</td>
                                                <td>Galss</td>
                                            </tr>
                                                                                    <tr>
                                                <td>Type</td>
                                                <td>Cap</td>
                                            </tr>
                                                                                    <tr>
                                                <td>Category</td>
                                                <td>Backpack</td>
                                            </tr>
                                                                            </tbody>
                                </table>
                            </div>
                        </div>
                                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row d-flex justify-content-center g-4">
                                <input type="hidden" id="live_limit" value="2">
                                                                    <div class="col-lg-6 col-md-6 col-sm-10 ">
                                        <div data-wow-duration="1.5s" data-wow-delay="0.2s"
    class="eg-card auction-card1 style-2 wow fadeInDown">
    <div class="auction-img">
                    <span class="product-type">Auction</span>
                
                    <img alt="Acution image" src="uploads/products/features/Mask%20group-1705242266.png">
        
                                <div class="auction-timer">
                <div class="countdown" id="timer0"
                    data-live-end-date="November 30, 2024 00:00:00">
                    <h4><span id="days0"></span>D : <span id="hours0"></span>H :
                        <span id="minutes0"></span>M : <span id="seconds0"></span>S
                    </h4>
                </div>
            </div>
                <div class="author-area">
            <div class="author-emo">
                                    <img src="uploads/shop/f3404b1c3ee2878ebfd3d4c8b7acc510-1704801343.jpg" alt="Shop Logo">
                
            </div>
            <div class="author-name">
                <span><a href="shop/xyz-tread.php"> by
                        @XYZ Tread</a></span>
            </div>
        </div>
    </div>
    <div class="auction-content">
        <h4><a
                href="poutsicle-hydrating-lip-stain-2.php">Poutsicle Hydrating Lip Stain.</a>
        </h4>
        
            
                            <p>Current bid:
                    <span>$52</span>
                </p>
                            <div class="auction-card-bttm">
                            <a href="poutsicle-hydrating-lip-stain-2.php"
                    class="eg-btn btn--primary btn--sm">Place a Bid</a>
                        <div class="share-area">
                <ul class="social-icons d-flex">
                    <li><a target="_blank"
                            href="https://www.facebook.com/sharer.php?u='.$url.'/product/poutsicle-hydrating-lip-stain-2"><i
                                class="bx bxl-facebook"></i></a></li>
                    <li><a target="_blank"
                            href="https://twitter.com/intent/tweet?url='.$url.'/product/poutsicle-hydrating-lip-stain-2&amp;text=Poutsicle%20Hydrating%20Lip%20Stain."><i
                                class="bx bxl-twitter"></i></a></li>
                    <li><a target="_blank"
                            href="https://www.linkedin.com/shareArticle?url='.$url.'/product/poutsicle-hydrating-lip-stain-2&amp;title=Poutsicle%20Hydrating%20Lip%20Stain."><i
                                class="bx bxl-linkedin"></i></a></li>
                    <li><a target="_blank"
                            href="https://www.pinterest.com/pin/create/bookmarklet/?url=='.$url.'/product/poutsicle-hydrating-lip-stain-2"><i
                                class="bx bxl-pinterest"></i></a></li>
                </ul>
                <div>
                    <a href="#" class="share-btn"><i class='bx bxs-share-alt'></i></a>
                </div>
            </div>
        </div>
    </div>

</div>
                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-10 ">
                                        <div data-wow-duration="1.5s" data-wow-delay="0.4s"
    class="eg-card auction-card1 style-2 wow fadeInDown">
    <div class="auction-img">
                    <span class="product-type">Auction</span>
                
                    <img alt="Acution image" src="uploads/products/features/Mask%20group1-1705242436.png">
        
                                <div class="auction-timer">
                <div class="countdown" id="timer1"
                    data-live-end-date="October 31, 2024 00:00:00">
                    <h4><span id="days1"></span>D : <span id="hours1"></span>H :
                        <span id="minutes1"></span>M : <span id="seconds1"></span>S
                    </h4>
                </div>
            </div>
                <div class="author-area">
            <div class="author-emo">
                                    <img src="uploads/shop/download%20(2)-1703591615.jpg" alt="Shop Logo">
                
            </div>
            <div class="author-name">
                <span><a href="shop/artgroup.php"> by
                        @artgroup</a></span>
            </div>
        </div>
    </div>
    <div class="auction-content">
        <h4><a
                href="swimmers-original-painting-by-phillip-hui-2.php">Swimmers Original Painting by Phillip Hui</a>
        </h4>
        
            
                            <p>Current bid:
                    <span>$600</span>
                </p>
                            <div class="auction-card-bttm">
                            <a href="swimmers-original-painting-by-phillip-hui-2.php"
                    class="eg-btn btn--primary btn--sm">Place a Bid</a>
                        <div class="share-area">
                <ul class="social-icons d-flex">
                    <li><a target="_blank"
                            href="https://www.facebook.com/sharer.php?u='.$url.'/product/swimmers-original-painting-by-phillip-hui-2"><i
                                class="bx bxl-facebook"></i></a></li>
                    <li><a target="_blank"
                            href="https://twitter.com/intent/tweet?url='.$url.'/product/swimmers-original-painting-by-phillip-hui-2&amp;text=Swimmers%20Original%20Painting%20by%20Phillip%20Hui"><i
                                class="bx bxl-twitter"></i></a></li>
                    <li><a target="_blank"
                            href="https://www.linkedin.com/shareArticle?url='.$url.'/product/swimmers-original-painting-by-phillip-hui-2&amp;title=Swimmers%20Original%20Painting%20by%20Phillip%20Hui"><i
                                class="bx bxl-linkedin"></i></a></li>
                    <li><a target="_blank"
                            href="https://www.pinterest.com/pin/create/bookmarklet/?url=='.$url.'/product/swimmers-original-painting-by-phillip-hui-2"><i
                                class="bx bxl-pinterest"></i></a></li>
                </ul>
                <div>
                    <a href="#" class="share-btn"><i class='bx bxs-share-alt'></i></a>
                </div>
            </div>
        </div>
    </div>

</div>
                                    </div>
                                                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="reviews-area">

                                <div class="row gy-5">
                                    <div class="col-lg-12">
                                        <div class="number-of-review">
                                            <h4>Review (0) :</h4>
                                        </div>
                                        <div class="review-list-area">
                                            <ul class="comment">
                                                                                                    <li>
                                                        <h4 class="text-center">No Review Found</h4>
                                                    </li>
                                                                                            </ul>
                                        </div>
                                    </div>
                                                                                                                                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                                                    <div class="merchant-card">
                                <div class="merchant-image-and-name">
                                    <div class="marchant-img">
                                                                                    <img src="uploads/users/testimonial-author2-1704801343.png"
                                                alt="pro-pic">
                                                                                <div class="varify-batch">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14"
                                                viewBox="0 0 15 14">
                                                <path
                                                    d="M5.21591 14L3.92045 11.8333L1.34659 11.3167L1.63636 8.86667L0 7L1.63636 5.15L1.34659 2.7L3.92045 2.18333L5.21591 0L7.5 1.03333L9.78409 0L11.0966 2.18333L13.6534 2.7L13.3636 5.15L15 7L13.3636 8.86667L13.6534 11.3167L11.0966 11.8333L9.78409 14L7.5 12.9667L5.21591 14ZM5.67614 12.6833L7.5 11.9333L9.375 12.6833L10.517 11.0167L12.5114 10.5167L12.3068 8.53333L13.6875 7L12.3068 5.43333L12.5114 3.45L10.517 2.98333L9.34091 1.31667L7.5 2.06667L5.625 1.31667L4.48295 2.98333L2.48864 3.45L2.69318 5.43333L1.3125 7L2.69318 8.53333L2.48864 10.55L4.48295 11.0167L5.67614 12.6833ZM6.76705 9.21667L10.6364 5.46667L9.86932 4.78333L6.76705 7.78333L5.14773 6.13333L4.36364 6.88333L6.76705 9.21667Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="maechent-name">
                                        <h6>Galib Al Nahian
                                        </h6>
                                        <a
                                            href="mailto:galib802862@gmail.com">galib802862@gmail.com</a>
                                    </div>
                                </div>
                                <ul class="maechent-info">
                                    <li><span
                                            class="title">Member Since:</span>3 weeks ago
                                    </li>
                                                                        <li><span class="title">Total Item:</span>
                                        <span>2 <a
                                                href="shop/xyz-tread.php">View All</a></span>
                                    </li>
                                    <li><span
                                            class="title">Total Sale:</span>0
                                    </li>
                                </ul>
                                <div class="rating-wrap text-center">
                                    <h6>Marchant Rating</h6>
                                    <div class="review-and-review-number">
                                        <ul class="maechent-review d-flex flex-row align-items-center mb-25">

                                                                                                <li><i class="bi bi-star"></i></li>
                                                    <li><i class="bi bi-star"></i></li>
                                                    <li><i class="bi bi-star"></i></li>
                                                    <li><i class="bi bi-star"></i></li>
                                                    <li><i class="bi bi-star"></i></li>
                                                                                        <li><a href="#"
                                                    class="review-no">(0)</a></li>
                                        </ul>
                                        <span>0 Reviews</span>
                                    </div>
                                </div>
                            </div>
                                                                            <div class="sidebar-banner wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s"
                                style="background-image: linear-gradient(90deg, rgba(31, 34, 48, 0.75), rgba(31, 34, 48, 0.75)), url(uploads/blog/4-1702297849.jpg);">
                                <div class="banner-content">
                                    <span>Antiques</span>
                                    <h3>Unveiling the Charms of Antique Splendors</h3>
                                    <a href="blog/unveiling-the-charms-of-antique-splendors.php"
                                        class="eg-btn btn--primary card--btn">Details</a>
                                </div>
                            </div>
                                            </div>


                </div>
            </div>
        </div>
    </div>

<!-- =============== counter-section end =============== -->
                    </div>

        <!-- =============== counter-section end =============== -->

      <?php include 'addon/footer.php'; ?>