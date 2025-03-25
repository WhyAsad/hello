<?php 
/* 
Template Name: Home Template
*/
get_header();
?>
    <!-- ============================ Banner Section start =============================== -->
    <div class="banner">
    <div class="container container-lg">
        <div class="banner-item rounded-24 overflow-hidden position-relative arrow-center">
            <a href="#featureSection" class="scroll-down w-84 h-84 text-center flex-center bg-main-600 rounded-circle border border-5 text-white border-white position-absolute start-50 translate-middle-x bottom-0 hover-bg-main-800">
                <span class="icon line-height-0"><i class="ph ph-caret-double-down"></i></span> 
            </a>
            
            <img src="wp-content/uploads/Top-Banners-01-scaled.webp" alt="" class="banner-img position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 z-n1 object-fit-cover rounded-24">

            <div class="flex-align">
                <button type="button" id="banner-prev" class="slick-prev slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                    <i class="ph ph-caret-left"></i>
                </button>
                <button type="button" id="banner-next" class="slick-next slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                    <i class="ph ph-caret-right"></i>
                </button>
            </div>

            <div class="banner-slider">
                <div class="banner-slider__item">   
                    <div class="banner-slider__inner flex-between position-relative">
                        <div class="banner-item__content">
                            <h1 class="banner-item__title wow bounceInDown mt-3"  data-wow-duration="1s">Design Your Perfect Mailer Box!</h1>
                            <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 wow bounceInUp"  data-wow-duration="1s">
                                Explore Shop <span class="icon text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i>   </span> 
                            </a>
                        </div>
                        <div class="banner-item__thumb wow bounceIn" data-wow-duration="1s" data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-scale="1.06">
                            <img src="/wp-content/uploads/Banner_Image_1-01-removebg-preview.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="banner-slider__item">   
                    <div class="banner-slider__inner flex-between position-relative">
                        <div class="banner-item__content">
                            <h1 class="banner-item__title wow bounceInDown"  data-wow-duration="1s">Custom Mailer Boxes Delivered Fast!</h1>
                            <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 wow bounceIn"  data-wow-duration="1s">
                                Explore Shop... <span class="icon text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i>   </span> 
                            </a>
                        </div>
                        <div class="banner-item__thumb wow bounceIn" data-wow-duration="1s" data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-scale="1.06">
                            <img src="/wp-content/uploads/Banner-Image.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
<!-- ============================ Banner Section End =============================== -->

    <!-- ============================ Feature Section start =============================== -->
<div class="feature" id="featureSection">
    <div class="container container-lg">
        <div class="position-relative arrow-center">
            <div class="flex-align">
                <button type="button" id="feature-item-wrapper-prev" class="slick-prev slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1" >
                    <i class="ph ph-caret-left"></i>
                </button>
                <button type="button" id="feature-item-wrapper-next" class="slick-next slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1" >
                    <i class="ph ph-caret-right"></i>
                </button>
            </div>
            <div class="feature-item-wrapper">
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="400">
                    <div class="">
                        <a href="product-category/rigid-boxes/" class="w-100 h-100 flex-center">
                            <img src="/wp-content/uploads/Apparel-Boxes.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Apparel Boxes</a></h6>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="600">
                    <div class="">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="/wp-content/uploads/Candle-Boxes.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Candle Boxes</a></h6>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="800">
                    <div class="">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="/wp-content/uploads/CBD-Packaging.png" alt="CBD">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">CBD Packaging</a></h6>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1000">
                    <div class="">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="/wp-content/uploads/Custom-Bath-Bomb-Boxes.png" alt="Bath Bomb Boxes">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Bath Bomb Boxes</a></h6>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1200">
                    <div class="">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="/wp-content/uploads/Custom-Beverage-Boxes.png" alt="Beverage Boxes">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Beverage Boxes</a></h6>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1400">
                    <div class="">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="/wp-content/uploads/Custom-Branded-Packaging.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Branded Packaging</a></h6>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1600">
                    <div class="">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="/wp-content/uploads/Custom-Display-Boxes.png" alt="Display Boxes">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Display Boxes</a></h6>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1800">
                    <div class="">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="/wp-content/uploads/Digital-Booklet.png" alt="Booklet">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Booklet</a></h6>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2000">
                    <div class="">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="/wp-content/uploads/Retail-Boxes.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Retail Boxes</a></h6>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2200">
                    <div class="">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="/wp-content/uploads/Mailer-Boxes.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Mailer Boxes</a></h6>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2400">
                    <div class="">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="/wp-content/uploads/Rigid-Boxes.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Rigid Boxes</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Feature Section End =============================== -->

    <!-- ======================== promotional banner Start ============================== -->
<section class="promotional-banner pt-80">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="400">
                <div class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1">
                    <img src="/wp-content/uploads/1-Bammers.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="promotional-banner-item__content">
                        <h6 class="promotional-banner-item__title text-32">Custom Cone Sleeve</h6>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="600">
                <div class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1">
                    <img src="/wp-content/uploads/2-Bammers.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="promotional-banner-item__content">
                        <h6 class="promotional-banner-item__title text-32">Custom Mylar Bags</h6>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="800">
                <div class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1">
                    <img src="/wp-content/uploads/3-Bammers.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="promotional-banner-item__content">
                        <h6 class="promotional-banner-item__title text-32">Custom Rigid Boxes</h6>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="1000">
                <div class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1">
                    <img src="/wp-content/uploads/4-Bammers.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="promotional-banner-item__content">
                        <h6 class="promotional-banner-item__title text-32">Custom Food Boxes</h6>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================== promotional banner End ============================== -->
    
    <!-- ========================= flash sales Start ================================ -->
<section class="flash-sales pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0 wow bounceInLeft">Flash Sales Today</h5>
                <div class="flex-align gap-16 wow bounceInRight">
                    <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                    <div class="flex-align gap-8">
                        <button type="button" id="flash-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="flash-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flash-sales__slider arrow-style-two">
            <div class="" data-aos="fade-up" data-aos-duration="600">
                <div class="flash-sales-item rounded-16 overflow-hidden z-1 position-relative flex-align flex-0 justify-content-between gap-8">
                    <img src="/wp-content/uploads/flash-sale.jpg" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1 flash-sales-item__bg">
                    <div class="flash-sales-item__thumb d-sm-block d-none">
                        <img src="/wp-content/uploads/Pizza-Box.webp" alt="">
                    </div>
                    <div class="flash-sales-item__content ms-sm-auto">
                        <h6 class="text-32 mb-20">Fresh Vegetables</h6>
                        <div class="countdown" id="countdown1">
                            <ul class="countdown-list flex-align flex-wrap">
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                        <a href="/shop" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="" data-aos="fade-up" data-aos-duration="1000">
                <div class="flash-sales-item rounded-16 overflow-hidden z-1 position-relative flex-align flex-0 justify-content-between gap-8">
                    <img src="/wp-content/uploads/Banners_2.jpg" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1 flash-sales-item__bg">
                    <div class="flash-sales-item__thumb d-sm-block d-none">
                        <img src="/wp-content/uploads/Ice-Cream-Cup.png" alt="">
                    </div>
                    <div class="flash-sales-item__content ms-sm-auto">
                        <h6 class="text-32 mb-20">Top Product</h6>
                        <div class="countdown" id="countdown2">
                            <ul class="countdown-list flex-align flex-wrap">
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= flash sales End ================================ -->

    <div class="product mt-24">
    <div class="container container-lg">
        <div class="row gy-4 g-12">
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                   
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img1.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img2.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img3.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img1.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img5.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img6.png" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- =========================== Offer Section Start =============================== -->
 <section class="offer pt-80 pb-80">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="offer-card position-relative rounded-16 bg-main-600 overflow-hidden p-16 flex-align gap-16 flex-wrap z-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/offer-shape.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
                    <div class="offer-card__thumb d-lg-block d-none">
                        <img src="/wp-content/uploads/Mailer-Box.webp" alt="">
                    </div>
                    <div class="py-xl-4">
                        <div class="offer-card__logo mb-16 w-80 h-80 flex-center bg-white rounded-circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/offer-logo.png" alt=""> 
                        </div>
                        <h4 class="text-white mb-8">$5 off your first order</h4>
                        <div class="flex-align gap-8">
                            <span class="text-sm text-white">Delivery by 6:15am</span>
                            <span class="text-sm text-main-two-600">expired Aug 5</span>
                        </div>
                        <a href="shop.html" class="mt-16 btn bg-white hover-text-white hover-bg-main-800 text-heading fw-medium d-inline-flex align-items-center rounded-pill gap-8" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="offer-card position-relative rounded-16 bg-main-600 overflow-hidden p-16 flex-align gap-16 flex-wrap z-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/offer-shape.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
                    <div class="offer-card__thumb d-lg-block d-none">
                        <img src="/wp-content/uploads/Apparel.webp" alt="">
                    </div>
                    <div class="py-xl-4">
                        <div class="offer-card__logo mb-16 w-80 h-80 flex-center bg-white rounded-circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/offer-logo.png" alt=""> 
                        </div>
                        <h4 class="text-white mb-8">$5 off your first order</h4>
                        <div class="flex-align gap-8">
                            <span class="text-sm text-white">Delivery by 6:15am</span>
                            <span class="text-sm text-main-two-600">expired Aug 5</span>
                        </div>
                        <a href="shop.html" class="mt-16 btn bg-white hover-text-white hover-bg-main-800 text-heading fw-medium d-inline-flex align-items-center rounded-pill gap-8" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- =========================== Offer Section End =============================== -->
    
    <!-- ========================= Recommended Start ================================ -->
<section class="recommended overflow-hidden"> 
    <div class="container container-lg">
        <div class="section-heading flex-between flex-wrap gap-16">
            <h5 class="mb-0 wow bounceInLeft">Recommended for you</h5>
            <ul class="nav common-tab nav-pills wow bounceInRight" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-grocery-tab" data-bs-toggle="pill" data-bs-target="#pills-grocery" type="button" role="tab" aria-controls="pills-grocery" aria-selected="false">Grocery</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-fruits-tab" data-bs-toggle="pill" data-bs-target="#pills-fruits" type="button" role="tab" aria-controls="pills-fruits" aria-selected="false">Fruits</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-juices-tab" data-bs-toggle="pill" data-bs-target="#pills-juices" type="button" role="tab" aria-controls="pills-juices" aria-selected="false">Juices</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-vegetables-tab" data-bs-toggle="pill" data-bs-target="#pills-vegetables" type="button" role="tab" aria-controls="pills-vegetables" aria-selected="false">Vegetables</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-snacks-tab" data-bs-toggle="pill" data-bs-target="#pills-snacks" type="button" role="tab" aria-controls="pills-snacks" aria-selected="false">Snacks</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-organic-tab" data-bs-toggle="pill" data-bs-target="#pills-organic" type="button" role="tab" aria-controls="pills-organic" aria-selected="false">Organic Foods</button>
                </li>
            </ul>
        </div>
        
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
            </div>
            <div class="tab-pane fade" id="pills-grocery" role="tabpanel" aria-labelledby="pills-grocery-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-fruits" role="tabpanel" aria-labelledby="pills-fruits-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-juices" role="tabpanel" aria-labelledby="pills-juices-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-vegetables" role="tabpanel" aria-labelledby="pills-vegetables-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-snacks" role="tabpanel" aria-labelledby="pills-snacks-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-organic" role="tabpanel" aria-labelledby="pills-organic-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img7.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img8.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img9.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img10.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img11.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img12.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img13.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img14.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img15.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img16.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img17.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img18.png" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= Recommended End ================================ -->

    <!-- ============================== Top Vendors Section Start ================================= -->
    <section class="top-vendors py-80">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0">Weekly Top Vendors</h5>
                <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">All Vendors</a>
            </div>
        </div>

        <div class="row gy-4 vendor-card-wrapper">
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="200">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-logo1.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Organic Market</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-logo2.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Safeway</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-logo3.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Food Max</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-logo4.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">HRmart</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="200">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-logo5.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Lucky Supermarket</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-logo6.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Arico Farmer</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-logo7.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Farmer Market</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-logo8.png" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Foodsco</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">$5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img1.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img2.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img3.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img4.png" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/vendor-img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ============================== Top Vendors Section End ================================= -->

    <!-- ========================= Delivery Section Start ================================ -->
<div class="delivery-section">
    <div class="container container-lg">
        <div class="delivery position-relative rounded-16 bg-main-600 p-16 flex-align gap-16 flex-wrap z-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/delivery-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100">
            <div class="row align-items-center">
                <div class="col-md-3 d-md-block d-none">
                    <div class="delivery__man text-center" data-aos="fade-down-right">
                        <img src="/wp-content/uploads/delivary-2.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-sm-7">
                    <div class="text-center">
                        <h4 class="text-white mb-8" data-aos="fade-down">We Delivery on Next Day from 10:00 AM to 08:00 PM</h4>
                        <p class="text-white" data-aos="zoom-in">For Orders starts from $100</p>
                        <a href="shop.html" class="mt-16 btn btn-main-two fw-medium d-inline-flex align-items-center rounded-pill gap-8" data-aos="fade-up" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 d-sm-block d-none" data-aos="zoom-out" data-aos-duration="800">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/special-snacks-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========================= Delivery Section End ================================ -->

<?php get_template_part('template-parts/clientslogo', 'featured'); ?>

    <!-- ========================== New Arrival Section Start ============================= -->
 <section class="new-arrival pb-80">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0">New Arrivals</h5>
                <div class="flex-align gap-16">
                    <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                    <div class="flex-align gap-8">
                        <button type="button" id="new-arrival-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1" >
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="new-arrival-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1" >
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="new-arrival__slider arrow-style-two">-->
        <!--    <div data-aos="fade-up" data-aos-duration="200">-->
        <!--        <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">-->
        <!--            <a href="product-details.html" class="product-card__thumb flex-center">-->
        <!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img20.png" alt="">-->
        <!--            </a>-->
        <!--            <div class="product-card__content mt-12">-->
        <!--                <div class="flex-align gap-6">-->
        <!--                    <span class="text-xs fw-bold text-gray-500">4.8</span>-->
        <!--                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>-->
        <!--                    <span class="text-xs fw-bold text-gray-500">(17k)</span>-->
        <!--                </div>-->
        <!--                <h6 class="title text-lg fw-semibold mt-12 mb-8">-->
        <!--                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>-->
        <!--                </h6>-->
        <!--                <div class="flex-align gap-4">-->
        <!--                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>-->
        <!--                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>-->
        <!--                </div>-->

        <!--                <div class="flex-between gap-8 mt-24 flex-wrap">-->
        <!--                    <div class="product-card__price">-->
        <!--                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>-->
        <!--                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>-->
        <!--                    </div>-->
        <!--                    <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">-->
        <!--                        Add <i class="ph ph-shopping-cart"></i> -->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div data-aos="fade-up" data-aos-duration="400">-->
        <!--        <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">-->
        <!--            <a href="product-details.html" class="product-card__thumb flex-center">-->
        <!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img21.png" alt="">-->
        <!--            </a>-->
        <!--            <div class="product-card__content mt-12">-->
        <!--                <div class="flex-align gap-6">-->
        <!--                    <span class="text-xs fw-bold text-gray-500">4.8</span>-->
        <!--                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>-->
        <!--                    <span class="text-xs fw-bold text-gray-500">(17k)</span>-->
        <!--                </div>-->
        <!--                <h6 class="title text-lg fw-semibold mt-12 mb-8">-->
        <!--                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>-->
        <!--                </h6>-->
        <!--                <div class="flex-align gap-4">-->
        <!--                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>-->
        <!--                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>-->
        <!--                </div>-->

        <!--                <div class="flex-between gap-8 mt-24 flex-wrap">-->
        <!--                    <div class="product-card__price">-->
        <!--                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>-->
        <!--                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>-->
        <!--                    </div>-->
        <!--                    <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">-->
        <!--                        Add <i class="ph ph-shopping-cart"></i> -->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div data-aos="fade-up" data-aos-duration="600">-->
        <!--        <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">-->
        <!--            <a href="product-details.html" class="product-card__thumb flex-center">-->
        <!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img22.png" alt="">-->
        <!--            </a>-->
        <!--            <div class="product-card__content mt-12">-->
        <!--                <div class="flex-align gap-6">-->
        <!--                    <span class="text-xs fw-bold text-gray-500">4.8</span>-->
        <!--                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>-->
        <!--                    <span class="text-xs fw-bold text-gray-500">(17k)</span>-->
        <!--                </div>-->
        <!--                <h6 class="title text-lg fw-semibold mt-12 mb-8">-->
        <!--                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>-->
        <!--                </h6>-->
        <!--                <div class="flex-align gap-4">-->
        <!--                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>-->
        <!--                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>-->
        <!--                </div>-->

        <!--                <div class="flex-between gap-8 mt-24 flex-wrap">-->
        <!--                    <div class="product-card__price">-->
        <!--                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>-->
        <!--                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>-->
        <!--                    </div>-->
        <!--                    <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">-->
        <!--                        Add <i class="ph ph-shopping-cart"></i> -->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div data-aos="fade-up" data-aos-duration="800">-->
        <!--        <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">-->
        <!--            <a href="product-details.html" class="product-card__thumb flex-center">-->
        <!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img23.png" alt="">-->
        <!--            </a>-->
        <!--            <div class="product-card__content mt-12">-->
        <!--                <div class="flex-align gap-6">-->
        <!--                    <span class="text-xs fw-bold text-gray-500">4.8</span>-->
        <!--                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>-->
        <!--                    <span class="text-xs fw-bold text-gray-500">(17k)</span>-->
        <!--                </div>-->
        <!--                <h6 class="title text-lg fw-semibold mt-12 mb-8">-->
        <!--                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>-->
        <!--                </h6>-->
        <!--                <div class="flex-align gap-4">-->
        <!--                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>-->
        <!--                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>-->
        <!--                </div>-->

        <!--                <div class="flex-between gap-8 mt-24 flex-wrap">-->
        <!--                    <div class="product-card__price">-->
        <!--                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>-->
        <!--                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>-->
        <!--                    </div>-->
        <!--                    <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">-->
        <!--                        Add <i class="ph ph-shopping-cart"></i> -->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div data-aos="fade-up" data-aos-duration="1000">-->
        <!--        <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">-->
        <!--            <a href="product-details.html" class="product-card__thumb flex-center">-->
        <!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img24.png" alt="">-->
        <!--            </a>-->
        <!--            <div class="product-card__content mt-12">-->
        <!--                <div class="flex-align gap-6">-->
        <!--                    <span class="text-xs fw-bold text-gray-500">4.8</span>-->
        <!--                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>-->
        <!--                    <span class="text-xs fw-bold text-gray-500">(17k)</span>-->
        <!--                </div>-->
        <!--                <h6 class="title text-lg fw-semibold mt-12 mb-8">-->
        <!--                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>-->
        <!--                </h6>-->
        <!--                <div class="flex-align gap-4">-->
        <!--                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>-->
        <!--                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>-->
        <!--                </div>-->

        <!--                <div class="flex-between gap-8 mt-24 flex-wrap">-->
        <!--                    <div class="product-card__price">-->
        <!--                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>-->
        <!--                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>-->
        <!--                    </div>-->
        <!--                    <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">-->
        <!--                        Add <i class="ph ph-shopping-cart"></i> -->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div data-aos="fade-up" data-aos-duration="1200">-->
        <!--        <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">-->
        <!--            <a href="product-details.html" class="product-card__thumb flex-center">-->
        <!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img25.png" alt="">-->
        <!--            </a>-->
        <!--            <div class="product-card__content mt-12">-->
        <!--                <div class="flex-align gap-6">-->
        <!--                    <span class="text-xs fw-bold text-gray-500">4.8</span>-->
        <!--                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>-->
        <!--                    <span class="text-xs fw-bold text-gray-500">(17k)</span>-->
        <!--                </div>-->
        <!--                <h6 class="title text-lg fw-semibold mt-12 mb-8">-->
        <!--                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>-->
        <!--                </h6>-->
        <!--                <div class="flex-align gap-4">-->
        <!--                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>-->
        <!--                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>-->
        <!--                </div>-->

        <!--                <div class="flex-between gap-8 mt-24 flex-wrap">-->
        <!--                    <div class="product-card__price">-->
        <!--                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>-->
        <!--                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>-->
        <!--                    </div>-->
        <!--                    <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">-->
        <!--                        Add <i class="ph ph-shopping-cart"></i> -->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div data-aos="fade-up" data-aos-duration="1400">-->
        <!--        <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">-->
        <!--            <a href="product-details.html" class="product-card__thumb flex-center">-->
        <!--                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/product-img21.png" alt="">-->
        <!--            </a>-->
        <!--            <div class="product-card__content mt-12">-->
        <!--                <div class="flex-align gap-6">-->
        <!--                    <span class="text-xs fw-bold text-gray-500">4.8</span>-->
        <!--                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>-->
        <!--                    <span class="text-xs fw-bold text-gray-500">(17k)</span>-->
        <!--                </div>-->
        <!--                <h6 class="title text-lg fw-semibold mt-12 mb-8">-->
        <!--                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>-->
        <!--                </h6>-->
        <!--                <div class="flex-align gap-4">-->
        <!--                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>-->
        <!--                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>-->
        <!--                </div>-->

        <!--                <div class="flex-between gap-8 mt-24 flex-wrap">-->
        <!--                    <div class="product-card__price">-->
        <!--                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> $28.99</span>-->
        <!--                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>-->
        <!--                    </div>-->
        <!--                    <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">-->
        <!--                        Add <i class="ph ph-shopping-cart"></i> -->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="new-arrival__slider arrow-style-two">
            <?php 
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 7, 
            );
            $loop = new WP_Query($args);
        
            if ($loop->have_posts()) :
                $aos_duration = 200; 
                while ($loop->have_posts()) : $loop->the_post();
                    global $product;
            ?>
            <div data-aos="fade-up" data-aos-duration="<?php echo $aos_duration; ?>">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="<?php the_permalink(); ?>" class="product-card__thumb flex-center">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('woocommerce_thumbnail', ['alt' => get_the_title()]); ?>
                        <?php else : ?>
                            <img src="<?php echo wc_placeholder_img_src(); ?>" alt="Placeholder">
                        <?php endif; ?>
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500"><?php echo $product->get_average_rating(); ?></span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(<?php echo $product->get_rating_count(); ?>)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="<?php the_permalink(); ?>" class="link text-line-2"><?php the_title(); ?></a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By <?php echo get_bloginfo('name'); ?></span>
                        </div>
    
                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <?php if ($product->is_on_sale()) : ?>
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block">
                                        <?php echo wc_price($product->get_regular_price()); ?>
                                    </span>
                                <?php endif; ?>
                                <span class="text-heading text-md fw-semibold">
                                    <?php echo wc_price($product->get_price()); ?>
                                    <span class="text-gray-500 fw-normal">/Qty</span>
                                </span>
                            </div>
                            <a href="?add-to-cart=<?php echo $product->get_id(); ?>" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                    $aos_duration += 200;
                endwhile;
                wp_reset_postdata();
            else : 
                echo '<p>No products found</p>';
            endif;
            ?>
        </div>

    </div>
 </section>
<!-- ========================== New Arrival Section End ============================= -->
    
<?php get_template_part('template-parts/shipping', 'featured'); ?>

    <!-- =============================== Newsletter Section Start ============================ -->
<div class="newsletter">
    <div class="container container-lg">
        <div class="newsletter-box position-relative rounded-16 flex-align gap-16 flex-wrap z-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/newsletter-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="">
                        <h1 class="text-white mb-12" data-aos="fade-down" data-aos-duration="800">Don't Miss Out on Grocery Deals</h1>
                        <p class="text-white h5 mb-0" data-aos="fade-up" data-aos-duration="800">SING UP FOR THE UPDATE NEWSLETTER</p>
                        <form action="#" class="position-relative mt-40" data-aos="zoom-in" data-aos-duration="800">
                            <input type="text" class="form-control common-input rounded-pill text-white py-22 px-16 pe-144" placeholder="Your email address...">
                            <button type="submit" class="btn btn-main-two rounded-pill position-absolute top-50 translate-middle-y inset-inline-end-0 me-10">Subscribe </button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 text-center d-xl-block d-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbs/newsletter-img.png" alt="" data-aos="zoom-in" data-aos-duration="800">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =============================== Newsletter Section End ============================ -->

<?php get_footer(); ?>