<?php get_header(); ?>
<?php global $woocommerce;
global $post;
?>
<style>
	.product-img--main-postion{
		width: fit-content;
		margin: 0 auto;
	}
	.slider.slider-nav,.slick-track{
		width: 400px;
	}
	.slick-slide{
		width: 150px;
		height: 100px;
	}
	.slider.slider-for{
		height: 500px;
	}
	body .product-img--main__image{
		position: unset !important;
	}
    /* 	body .product-img--main,.product-img--main{
		height: 675px !important;
	} */
	.product-img--main,.product-img--main img{
		padding-bottom: 0 !important;
		height: 100%;
		width: 100%;
	}
	.product-img--main-postion .slider{
		display: flex;
	}
	.product-img--main-postion .slider img{
		border-radius: 8px;
	}
	.product-img--main-postion .slider a{
		margin: 0 6px;
		display: block;
		height: 60px;
	}
	.ibex_packaging{
		margin-top: 20px;
	}
	.tab-content>.active{
		opacity: 1 !important;
	}
	.product-faq-right .accordion-item.active .accordion-collapse{
		display: block !important;
		opacity: 1 !important;
	}
	.slick-slide{
		height: 100% !important;
	}
	.zoom_box{
		display: flex;
		place-content: center;
	}
	.custom-collection{
		background: transparent !important;
	}
	.sp_desc_wrap.full_text{
		display: -webkit-box;
		-webkit-line-clamp: 9;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}
	p#show_full_text{
		color: #1e725e;
		font-weight: 700;
		cursor: pointer;
	}
	header:not(.fixed){
		box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) !important;
		position: relative !important;
	}
	.navbar-expand-lg .navbar-nav .nav-link.dropdown-toggle::after {
		border-left: 2px solid #0F372E;
		border-bottom: 2px solid #0F372E;
	}
	header:not(.fixed) .searchbar_mb .btn.btn-primary {
		color: #0F372E;
	}
	header:not(.fixed) .navbar-nav li:not(.getQuoteBtn) a {
		color: #0F372E !important;
	}
	body header:not(.fixed):hover .navbar-nav li.getQuoteBtn a{
		color: #fff !important;
	}
	header:not(.fixed) .logo-white{
		display: none !important;
	}
	header:not(.fixed) .logo-blank {
		display: block !important;
	}
	@media only screen and (max-width: 991px){
		.my-arrows {
			display: block !important;
		}
	}
	@media only screen and (max-width: 767px){
		.product-faq{
			margin-bottom: 30px !important;
		}
	}
</style>
<style>
	.slider.slider-nav {
		display: flex;
	}
	.product-img--main-postion img{
		height: 100%;
		width: 100%;
	}
	.tick-div {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
        margin-top: 20px;
        align-items : center;
    }
    .tick-p{
        margin-bottom: 0px !important;
        font-weight: 600;
        font-size: 12px;
    }
	/* Quantity Selector CSS Add to cart */
	.quantity-cart-container {
    display: flex;
    align-items: center;
    margin-top: 20px;
	}
	.quantity-buttons {
    display: flex;
    align-items: center;
	}
	.quantity input.qty {
    width: 60px !important;
    height: 40px;
    text-align: center;
	border: 0px;
    padding: 0 5px;
    -webkit-appearance: none;
    -moz-appearance: textfield;
    margin: 0 0px;
	}
	.quantity-buttons button {
    width: 30px;
    height: 40px;
    background: #000000;
	color: white;
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
	}
	/* Hide number input arrows */
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
	}
	label.screen-reader-text {
		display: none !important;
	}
    .btn-cart {
    border: 1px solid #1E725E;
    color: white;
    padding: 10px 30px;
    background-color: #1E725E;
    }
</style>

<section class="product_banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
				<?php
					function get_featured_image_url($post) {
						if (empty($post) || 'product' !== $post->post_type) {
							return '';
						}

						$featured_image_id = get_post_thumbnail_id($post->ID);

						if (empty($featured_image_id)) {
							return '';
						}

						$image_url = wp_get_attachment_url($featured_image_id);

						return $image_url ? $image_url : '';
					}

					global $post;
					$featured_image_url = get_featured_image_url($post);

				?>
				<div class="zoom_box">
					<div class="">
						<div class="product-img--main">
							<img id="mymainImage3" class="e" src="<?php echo $featured_image_url; ?>" style="transform: scale(1);" width="675" height="675">
						</div>
					</div>
					<div class="product-img--main-postion">
						<div class="slider">
							<?php
								function get_single_product_gallery_images_urlss($post) {
									if (empty($post) || 'product' !== $post->post_type) {
										return [];
									}

									$attachment_ids = get_post_meta($post->ID, '_product_image_gallery', true);

									if (empty($attachment_ids)) {
										return [];
									}

									$attachment_ids = explode(',', $attachment_ids);
									$image_urls = [];

									foreach ($attachment_ids as $attachment_id) {
										$image_url = wp_get_attachment_url($attachment_id);
										if ($image_url) {
											$image_urls[] = $image_url;
										}
									}

									return $image_urls;
								}
								global $post;
								$gallery_image_urls = get_single_product_gallery_images_urlss($post);
								if (!empty($gallery_image_urls)) {
									foreach ($gallery_image_urls as $image_url) {
							?>
								<a href="javascript:void(0);" class="nav_thumb" data-image="<?php echo $image_url; ?>" tabindex="-1">
									<img  onmouseover="changeImage3('<?php echo $image_url; ?>')" data-src="<?php echo $image_url; ?>" class="img-fluid ls-is-cached lazy-load" width="150" height="150">
								</a>
							<?php
									}
								}
							?>
						</div>
					</div>
				</div>

                <div class="ibex_packaging">
                    <div class="ibex_packaging-ico">
                        <a href="#">
                            <img data-src="/wp-content/uploads/2024/06/icon-custom-design-and-size.webp"
                                class="img-fluid lazy-load" width="35" height="35">
                            <h6>Custom Layouts <br>&amp; Sizes </h6>
                        </a>
                    </div>
                    <div class="ibex_packaging-ico">
                        <a href="#">
                            <img data-src="/wp-content/uploads/2024/06/icon-free-shipping-1.webp"
                                class="img-fluid lazy-load" width="35" height="35">
                            <h6>Free Shipping <br> All Over USA </h6>
                        </a>
                    </div>
                    <div class="ibex_packaging-ico">
                        <a href="#">
                            <img data-src="/wp-content/uploads/2024/06/icon-boxes.webp"
                                class="img-fluid lazy-load" width="35" height="35">
                            <h6>Starting From <br>50 Boxes </h6>
                        </a>
                    </div>
                </div>

                <div class="product-specifications">
                    <div class="product_details_list">
                        <div class="col-sm-6">
                            <div>
                                <h3>Material</h3>
                                <p>Cardboard, Corrugated board, Thick Cardboard</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div>
                                <h3>Quantity</h3>
                                <p>Custom Number</p>
                            </div>
                        </div>

                    </div>


                    <div class="product_details_list">
                        <div class="col-sm-6">
                            <div>
                                <h3>Printing </h3>
                                <p>Digital Printing, Offset Printing</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div>
                                <h3>Dimensions</h3>
                                <p>All Custom Sizes</p>
                            </div>

                        </div>

                    </div>


                    <div class="product_details_list">
                        <div class="col-sm-6">
                            <div>
                                <h3>Lamination</h3>
                                <p>No-Scratch Lamination, Soft Touch Lamination </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div>
                                <h3>Additional Feature</h3>
                                <p>Window Closure, Hinged</p>
                            </div>
                        </div>

                    </div>


                    <div class="product_details_list">
                        <div class="col-sm-6">
                            <div>
                                <h3>Coating</h3>
                                <p>Aqueous Coating, UV Coating
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div>
                                <h3>Other Special Options</h3>
                                <p>Hot Foil Stamping, Embossing, Debossing </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6 product-info">
                <h1 class="h2 product-title"><?php echo get_the_title($current_post_id); ?></h1>
				<h3 style="font-size: 18px;font-weight: 600;margin-top: 15px;">$0.50/unit</h3>
					<div class="tick-div">
                        <i class="fa-solid fa-check"></i><p class="tick-p">Price as low as</p>
                        <i class="fa-solid fa-check"></i><p class="tick-p">instock</p>
                        <i class="fa-solid fa-check"></i><p class="tick-p">Warranty</p>
                    </div>
					<div style="background-color: #ffeb3b; padding: 10px; text-align: center; font-weight: bold; margin-bottom: 10px;">
						� Get $30 off on orders over $300! Use code <span style="color: #d32f2f;">PRB2025</span> at checkout. 🎉
					</div>
                <h3 class="h3size">Key Features:</h3>
                <ul class="mb-4">
                    <li>
						<?php
							echo $feature_1 = get_field('feature_1');
						?>
					</li>
                    <li>
						<?php
							echo $feature_2 = get_field('feature_2');
						?>
					</li>
                    <li>
						<?php
							echo $feature_3 = get_field('feature_3');
						?>
					</li>
					<li>
						<?php
							echo $feature_4 = get_field('feature_4');
						?>
					</li>
                </ul>

                <div id="success_notification" style="display:none;">
                    <div class="alert alert-success" role="alert">
                        Thanks for contact us, Our representative will come back very soon!
                    </div>
                </div>
                <div class="product_get_instant">
                    <h4>Get Instant Quote</h4>

                    <?php echo do_shortcode('[contact-form-7 id="2669aca" title="Single Product"]'); ?>

                </div>
				<div class="payment">
					<img src="/wp-content/uploads/2025/04/Pyment.png" alt="img-payment">
				</div>
                <div class="quantity-cart-container">
						<!-- Quantity Selector -->
						<div class="quantity" style="display: inline-block; margin-right: 10px;">
							<div class="quantity-buttons">
								<button type="button" class="qty-minus">-</button>
								<?php
								woocommerce_quantity_input([
									'min_value' => 1,
									'max_value' => $product->get_max_purchase_quantity(),
									'input_value' => 1
								]);
								?>
								<button type="button" class="qty-plus">+</button>
							</div>
						</div>
							<!-- Add to Cart Button -->
							<a href="<?php echo esc_url($product->add_to_cart_url()); ?>" 
							data-quantity="1"
							class="add_to_cart_button ajax_add_to_cart"
							data-product_id="<?php echo esc_attr($product->get_id()); ?>"
							data-product_sku="<?php echo esc_attr($product->get_sku()); ?>"
							style="display: inline-block;">
								<input type="submit" class="btn-cart" value="<?php echo esc_html($product->add_to_cart_text()); ?>">
							</a>
					</div>
<script>
jQuery(document).ready(function($) {
    // Handle plus button click
    $('.quantity-buttons').on('click', '.qty-plus', function() {
        var container = $(this).closest('.quantity-buttons');
        var input = container.find('.qty');
        var max = parseFloat(input.attr('max')) || Infinity;
        var value = parseFloat(input.val()) || 0;
        
        if (value < max) {
            input.val(value + 1).trigger('change');
        }
    });

    // Handle minus button click
    $('.quantity-buttons').on('click', '.qty-minus', function() {
        var container = $(this).closest('.quantity-buttons');
        var input = container.find('.qty');
        var min = parseFloat(input.attr('min')) || 0;
        var value = parseFloat(input.val()) || 0;
        
        if (value > min) {
            input.val(value - 1).trigger('change');
        }
    });

    // Update quantity data when quantity changes
    $('.quantity').on('change', 'input.qty', function() {
        var newQty = $(this).val();
        $(this).closest('.quantity-cart-container').find('.add_to_cart_button')
            .attr('data-quantity', newQty);
    });
});
</script>
            </div>
        </div>
    </div>
</section>


<section class="our_customers_sec pd_110 lazy-div d-none">
    <div>
        <div class="container">
            <div class="header-title">
                <div class="text-left">
                    <h2>Do not let us persuade you; rather, pay attention to our clients!</h2>
                </div>
                <div class="my-arrows my-arrows-review">
                    <button type="button" data-role="none"
                        class="slick-prev slick-arrow slick-disabled" aria-label="Previous" role="button"
                        aria-disabled="true" style="display: block;">Previous</button><button type="button"
                        data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button"
                        style="display: block;" aria-disabled="false">Next</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="our_customers_slider">
            <div class="our_customers_content d-flex">
                <div class="contentarea">
                    <div class="ratting_reviews" data-rating="4.2">
                        <svg width="144" height="24" viewBox="0 0 144 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z" fill="#36B37E"></path>
							<path d="M42 0L44.6942 8.2918H53.4127L46.3593 13.4164L49.0534 21.7082L42 16.5836L34.9466 21.7082L37.6407 13.4164L30.5873 8.2918H39.3058L42 0Z" fill="#36B37E"></path>
							<path d="M72 0L74.6942 8.2918H83.4127L76.3593 13.4164L79.0534 21.7082L72 16.5836L64.9466 21.7082L67.6407 13.4164L60.5873 8.2918H69.3058L72 0Z" fill="#36B37E"></path>
							<path d="M102 0L104.694 8.2918H113.413L106.359 13.4164L109.053 21.7082L102 16.5836L94.9466 21.7082L97.6407 13.4164L90.5873 8.2918H99.3058L102 0Z" fill="#36B37E"></path>
							<path d="M132 0L134.694 8.2918H143.413L136.359 13.4164L139.053 21.7082L132 16.5836L124.947 21.7082L127.641 13.4164L120.587 8.2918H129.306L132 0Z" fill="#36B37E"></path>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M134 18.0366L139.053 21.7081L136.359 13.4163L143.413 8.2917H134.694L134 6.15527V18.0366Z" fill="#CFCFCF"></path>
						</svg>
                    </div>
                    <p>Working with them was a terrific experience! We had some particular needs for  magnetic closure rigid boxes, and they were always prepared to work with us to find solutions. The boxes came out to be wonderful, beyond our expectations. We strongly suggest them to anyone looking for premium packaging and a hassle-free journey!</p>
                </div>
                <div class="user_id d-flex align-items-center">
                    <span>
                        <h3>Jude Robert John</h3>
                        <p>Manager</p>
                    </span>
                </div>
            </div>
            <div class="our_customers_content d-flex">
                <div class="contentarea">
                    <div class="ratting_reviews" data-rating="4.1">
                        <svg width="144" height="24" viewBox="0 0 144 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z" fill="#36B37E"></path>
							<path d="M42 0L44.6942 8.2918H53.4127L46.3593 13.4164L49.0534 21.7082L42 16.5836L34.9466 21.7082L37.6407 13.4164L30.5873 8.2918H39.3058L42 0Z" fill="#36B37E"></path>
							<path d="M72 0L74.6942 8.2918H83.4127L76.3593 13.4164L79.0534 21.7082L72 16.5836L64.9466 21.7082L67.6407 13.4164L60.5873 8.2918H69.3058L72 0Z" fill="#36B37E"></path>
							<path d="M102 0L104.694 8.2918H113.413L106.359 13.4164L109.053 21.7082L102 16.5836L94.9466 21.7082L97.6407 13.4164L90.5873 8.2918H99.3058L102 0Z" fill="#36B37E"></path>
							<path d="M132 0L134.694 8.2918H143.413L136.359 13.4164L139.053 21.7082L132 16.5836L124.947 21.7082L127.641 13.4164L120.587 8.2918H129.306L132 0Z" fill="#36B37E"></path>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M134 18.0366L139.053 21.7081L136.359 13.4163L143.413 8.2917H134.694L134 6.15527V18.0366Z" fill="#CFCFCF"></path>
						</svg>
                    </div>
                    <p>Doing business with Premier Rigid Boxes was one of my most enjoyable experiences. From start to finish, the level of craftsmanship was unparalleled in the industry. They fixed my problems and tailored every aspect of  magnetic closure rigid boxes. The attention to detail is excellent. They made certain that each box was so clearly labeled that restocking my packaging took only a few minutes.</p>
                </div>
                <div class="user_id d-flex align-items-center">
                    <span>
                        <h3>Sean Emmanuel</h3>
                        <p>Handcrafter</p>
                    </span>
                </div>
            </div>
            <div class="our_customers_content d-flex">
                <div class="contentarea">
                    <div class="ratting_reviews" data-rating="4.8">
                        <svg width="144" height="24" viewBox="0 0 144 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z" fill="#36B37E"></path>
							<path d="M42 0L44.6942 8.2918H53.4127L46.3593 13.4164L49.0534 21.7082L42 16.5836L34.9466 21.7082L37.6407 13.4164L30.5873 8.2918H39.3058L42 0Z" fill="#36B37E"></path>
							<path d="M72 0L74.6942 8.2918H83.4127L76.3593 13.4164L79.0534 21.7082L72 16.5836L64.9466 21.7082L67.6407 13.4164L60.5873 8.2918H69.3058L72 0Z" fill="#36B37E"></path>
							<path d="M102 0L104.694 8.2918H113.413L106.359 13.4164L109.053 21.7082L102 16.5836L94.9466 21.7082L97.6407 13.4164L90.5873 8.2918H99.3058L102 0Z" fill="#36B37E"></path>
							<path d="M132 0L134.694 8.2918H143.413L136.359 13.4164L139.053 21.7082L132 16.5836L124.947 21.7082L127.641 13.4164L120.587 8.2918H129.306L132 0Z" fill="#36B37E"></path>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M134 18.0366L139.053 21.7081L136.359 13.4163L143.413 8.2917H134.694L134 6.15527V18.0366Z" fill="#CFCFCF"></path>
						</svg>
                    </div>
                    <p>If I could rate higher, I would! They have exceeded my expectations for professionalism and job quality. Their team has answered every inquiry and resolved every issue in the most effective schedule.</p>
                </div>
                <div class="user_id d-flex align-items-center">
                    <span>
                        <h3>Marc Jacob</h3>
                        <p>College student</p>
                    </span>
                </div>
            </div>
            <div class="our_customers_content d-flex">
                <div class="contentarea">
                    <div class="ratting_reviews" data-rating="4.8">
                        <svg width="144" height="24" viewBox="0 0 144 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z" fill="#36B37E"></path>
							<path d="M42 0L44.6942 8.2918H53.4127L46.3593 13.4164L49.0534 21.7082L42 16.5836L34.9466 21.7082L37.6407 13.4164L30.5873 8.2918H39.3058L42 0Z" fill="#36B37E"></path>
							<path d="M72 0L74.6942 8.2918H83.4127L76.3593 13.4164L79.0534 21.7082L72 16.5836L64.9466 21.7082L67.6407 13.4164L60.5873 8.2918H69.3058L72 0Z" fill="#36B37E"></path>
							<path d="M102 0L104.694 8.2918H113.413L106.359 13.4164L109.053 21.7082L102 16.5836L94.9466 21.7082L97.6407 13.4164L90.5873 8.2918H99.3058L102 0Z" fill="#36B37E"></path>
							<path d="M132 0L134.694 8.2918H143.413L136.359 13.4164L139.053 21.7082L132 16.5836L124.947 21.7082L127.641 13.4164L120.587 8.2918H129.306L132 0Z" fill="#36B37E"></path>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M134 18.0366L139.053 21.7081L136.359 13.4163L143.413 8.2917H134.694L134 6.15527V18.0366Z" fill="#CFCFCF"></path>
						</svg>
                    </div>
                    <p>Premier Rigid Boxes did an excellent job on our  magnetic closure rigid boxes. It was difficult to find someone to make these unique boxes, but Premier Rigid Boxes outperformed expectations.</p>
                </div>
                <div class="user_id d-flex align-items-center">
                    <span>
                        <h3>M. Jason</h3>
                        <p>Purchasing Manager</p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="options_materials_sec pd_110 lazy-div d-none">
    <div class="container">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item" role="presentation">
                <button class="nav-link active" data-tab-target="#options_materials_tab_id1" bs-toggle="tab"  type="button">
					Description
				</button>
            </li>
			<li class="nav-item" role="presentation">
                <button class="nav-link" data-tab-target="#options_materials_tab_id2" bs-toggle="tab"  type="button">
					Specification
				</button>
            </li>
			<li class="nav-item" role="presentation">
                <button class="nav-link" data-tab-target="#options_materials_tab_id3" bs-toggle="tab" type="button">
					Coating
				</button>
            </li>
			<li class="nav-item" role="presentation">
                <button class="nav-link " data-tab-target="#options_materials_tab_id4" bs-toggle="tab" bs-target="#options_materials_tab_id4" type="button">
					Lamination
				</button>
            </li>
			<li class="nav-item" role="presentation">
                <button class="nav-link " data-tab-target="#options_materials_tab_id5" bs-toggle="tab" type="button" role="tab">
					Special Finish
				</button>
            </li>
        </ul>
        <div class="tab-content" id="options_materials_tabbox">
			<div class="tab-pane show active" id="options_materials_tab_id1" data-tab-content>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
						<div class="sp_desc_wrap full_text">
							<?php echo the_content(); ?>
						</div>
						<p id="show_full_text" onclick="changeTxt()">
							Read More...
						</p>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="options_materials_tab_id2" data-tab-content>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
						<?php echo $product_specification = get_field('product_specification'); ?>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="options_materials_tab_id3" data-tab-content>
                <div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
						<div class="popular_product_items">
							<img alt="aqueous coating" data-src="/wp-content/uploads/2024/06/aqueous-coating.webp" class="img-fluid lazy-load" height="326" width="326">
							<div class="product_contant">
								<h3>Aqueous Coating</h3>
								<p>Water-based protection and attractive coating available in glossy or matte textures. Quickly dries and improves durability.</p>
							</div>
						</div>
                    </div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
						<div class="popular_product_items">
							<img alt="varnish" data-src="/wp-content/uploads/2024/06/varnish.webp" class="img-fluid lazy-load" height="326" width="326">
							<div class="product_contant">
								<h3>Varnish</h3>
								<p>Clear coating that protects against scratches, fading, wear and tear. Available in gloss, silk, and matte finishes, adds a luxury feel.</p>
							</div>
						</div>
                    </div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
						<div class="popular_product_items">
							<img alt="special finish-soft touch coating" data-src="/wp-content/uploads/2024/06/soft-touch-coating.webp" class="img-fluid lazy-load" height="326" width="326">
							<div class="product_contant">
								<h3>Soft-Touch Coating</h3>
								<p>Soft touch coating can make practically any product surface feel soft. It dries rapidly and is simple for consumers to understand.
</p>
							</div>
						</div>
                    </div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
						<div class="popular_product_items">
							<img alt="UV coating" data-src="/wp-content/uploads/2024/06/UV-coating-2.webp" class="img-fluid lazy-load" height="326" width="326">
							<div class="product_contant">
								<h3>UV Coating</h3>
								<p>UV coating is a process that uses an ultraviolet light machine to dry an opaque liquid, producing a gloss on the outer layer of the packaging.</p>
							</div>
						</div>
					</div>
				</div>
            </div>
			<div class="tab-pane fade" id="options_materials_tab_id4" data-tab-content>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
						<div class="popular_product_items">
							<img alt="matte lamination" data-src="/wp-content/uploads/2024/06/matte.webp" class="img-fluid lazy-load" height="326" width="326">
							<div class="product_contant">
                                <h3>Matte Lamination</h3>
                                <p>A non-reflective finish that provides a smooth, velvety texture. Ideal for designs that require a softer look.</p>
                            </div>
                        </div>
                    </div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
						<div class="popular_product_items">
							<img alt="gloss lamination" data-src="/wp-content/uploads/2024/06/gloss.webp" class="img-fluid lazy-load" height="326" width="326">
							<div class="product_contant">
								<h3>Gloss Lamination</h3>
								<p>A shiny, reflective finish that gives a high-gloss or mirror-like appearance. It reflects light and makes colors and images appear more vibrant.</p>
							</div>
						</div>
                    </div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
						<div class="popular_product_items">
							<img alt="soft touch lamination" data-src="/wp-content/uploads/2024/06/soft-touch-lamination-1.webp" class="img-fluid lazy-load" height="326" width="326">
							<div class="product_contant">
								<h3>Soft Touch Lamination</h3>
								<p>Soft touch lamination is an ultra-matte finish with a silky soft feel. It is the first choice of luxury goods and designers.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
						<div class="popular_product_items">
							<img alt="no-scratch lamination" data-src="/wp-content/uploads/2024/06/no-scratch-lamination.webp" class="img-fluid lazy-load" height="326" width="326">
							<div class="product_contant">
								<h3>No-Scratch Lamination</h3>
								<p>No-scratch laminate is generally used to protect matt products from scratches. It is a practical and durable laminate type.</p>
							</div>
						</div>
					</div>
				</div>
            </div>
			<div class="tab-pane fade" id="options_materials_tab_id5" data-tab-content>
                <div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
						<div class="popular_product_items">
                    		<img alt="window patching" data-src="/wp-content/uploads/2024/06/window-patching.webp" class="img-fluid lazy-load" height="326" width="326">
                            <div class="product_contant">
                                <h3>Window Patching</h3>
                                <p>Stick a thin layer of plastic film on the die-cut window to increase the visibility.</p>
                            </div>
                        </div>
                    </div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
						<div class="popular_product_items">
							<img alt="debossing" data-src="/wp-content/uploads/2024/06/printing-method-debossing.webp" class="img-fluid lazy-load" height="326" width="326">
							<div class="product_contant">
								<h3>Debossing</h3>
								<p>Press a design or text into the surface, creating a sunken, indented effect.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
						<div class="popular_product_items">
							<img alt="embossing" data-src="/wp-content/uploads/2024/06/printing-method-embossing.webp" class="img-fluid lazy-load" height="326" width="326">
							<div class="product_contant">
								<h3>Embossing</h3>
								<p>Raise a design or text off the surface, creating a three-dimensional, raised effect.</p>
							</div>
						</div>
					</div>
				  <div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
					<div class="popular_product_items">
						<img alt="hot foil stamping" data-src="/wp-content/uploads/2024/06/hot-foil-stamping.webp" class="img-fluid lazy-load" height="326" width="326">
								<div class="product_contant">
									<h3>Hot Foil Stamping</h3>
									<p>Apply metal foil or hologram to paper, carton board by using heat and pressure.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<section class="faqsec lazy-div d-none">
    <div class="container">
        <div class="row " style="justify-content: space-between;align-items: center;">
            <div class="col-sm-12 col-md-5 product-faq">
                <h2>Custom Packaging FAQs</h2>
                <p>The layout of the boxes is vital in enticing consumers and affecting their purchasing decisions. As an online store owner, you have to comprehend the many methods and techniques used in efficient product boxes. At Premier Rigid Boxes, we want to assist businesses in creating custom rigid boxes that are specific to their brand's appearance and practical demands. Ensure that you make an informed selection, here are some frequently asked questions concerning custom boxes, along with the answers you want.</p>
                <a href="/faq/">Ask Question</a>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="product-faq-right">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#questions0" aria-expanded="false" aria-controls="collapseOne">
                                <?php
									echo $cat_q1 = get_field('cat_q1');
								?>
							</button>
                        </h2>
                        <div id="questions0" class="accordion-collapse collapse" aria-labelledby="heading1"
                            data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                <p>
									<?php
										echo $cat_a1 = get_field('cat_a1');
									?>
								</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#questions1" aria-expanded="true" aria-controls="collapseOne">
                               <?php
									echo $cat_q2 = get_field('cat_q2');
								?>
							</button>
                        </h2>
                        <div id="questions1" class="accordion-collapse collapse" aria-labelledby="heading1"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
									<?php
										echo $cat_a2 = get_field('cat_a2');
									?>
								</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#questions2" aria-expanded="true" aria-controls="collapseOne">
                                <?php
									echo $cat_q3 = get_field('cat_q3');
								?>
							</button>
                        </h2>
                        <div id="questions2" class="accordion-collapse collapse" aria-labelledby="heading1"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
									<?php
										echo $cat_a3 = get_field('cat_a3');
									?>
								</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#questions3" aria-expanded="true" aria-controls="collapseOne">
                                <?php
									echo $cat_q4 = get_field('cat_q4');
								?>
							</button>
                        </h2>
                        <div id="questions3" class="accordion-collapse collapse" aria-labelledby="heading1"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
									<?php
										echo $cat_a4 = get_field('cat_a4');
									?>
								</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="popular_product_sec pd_mb lazy-div d-none">
    <div class="container">
        <div class="text-center" style="max-width:800px;margin: 0 auto;">
            <h2>Customers Also Discover </h2>
            <p>Premier Rigid Boxes provides a variety of box choices to meet your specific needs. From robust rigid paper tubes to circular boxes, we have you covered! Check out our other custom boxes and give your goods the proper wrapping.
</p>
        </div>
        <div class="row">
			<?php
				$product_categories = get_the_terms($post->ID, 'product_cat');
				if ($product_categories && !is_wp_error($product_categories)) {
					$product_category = $product_categories[0];
					$loop = new WP_Query(array(
						'post_type'      => 'product',
						'posts_per_page' => 4,
						'post_status'    => 'publish',
						'tax_query'      => array(
							array(
								'taxonomy'         => 'product_cat',
								'field'            => 'slug',
								'terms'            => $product_category->slug,
								'include_children' => false,
							),
						),
						'post__not_in'   => array($post->ID), // Exclude the current product
					));

					if ($loop->have_posts()) :
						while ($loop->have_posts()) : $loop->the_post(); ?>
							<div class="col-xs-12 col-sm-6 col-md-6 col-xl-3">
								<a href="<?php echo esc_url(get_the_permalink()); ?>">
									<div class="popular_product_items">
										<img data-src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" class="img-fluid lazy-load" alt="<?php echo esc_attr(get_the_title()); ?>" height="326" width="326">
										<div class="product_contant">
											<h3><?php echo esc_html(get_the_title()); ?></h3>
											<p></p>
										</div>
									</div>
								</a>
							</div>
						<?php endwhile;
						wp_reset_postdata();
					endif;
				}
			?>
         </div>
    </div>
</section>

<script>
	function changeImage3(newSrc, altText) {
		document.getElementById("mymainImage3").src = newSrc;
		document.getElementById("mymainImage3").alt = altText;
	}
</script>
 <script>
	 document.querySelector("#options_materials_tab_id1 p#show_full_text").addEventListener("click", function() {
		document.querySelector(".sp_desc_wrap").classList.toggle("full_text");
	});

	 
	 const tabs = document.querySelectorAll('[data-tab-target]')
	 const tabContents = document.querySelectorAll('[data-tab-content]')
	 tabs.forEach(tab => {
		 tab.addEventListener('click', () => {
			 const target = document.querySelector(tab.dataset.tabTarget)
			 tabContents.forEach(tabContent => {
				 tabContent.classList.remove('active')
			 })
			 tabs.forEach(tab => {
				 tab.classList.remove('active')
			 })
			 tab.classList.add('active')
			 target.classList.add('active')
		 })
	 });
	 document.querySelectorAll('.product-faq-right .accordion-item').forEach(function(item) {
		 item.addEventListener('click', function() {
			 document.querySelectorAll('.product-faq-right .accordion-item').forEach(function(item) {
				 item.classList.remove('active');
			 });
			 this.classList.add('active');
    });
});
jQuery( document ).ready(function($) {
		$(".our_customers_slider .slick-track").addClass("transform");
		$(".our_customers_sec .slick-arrow").click(function(){
			$(".our_customers_slider .slick-track").removeClass("transform");
		});
	});
    </script>
<?php get_footer(); ?>