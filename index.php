<?php
//     if ( !has_term( 'custom product', 'product_tag' ) ){
//         get_header();
//     }else{
//         get_header('custom');
//     }
	get_header();
    global $post;
    global $product;
    $current_post_id = get_queried_object_id();
?>
<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<!-- ScrollTrigger Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<style>
	header{
		background: #012c44;
	}
	.top-header {
		background-color: #012c44;
	}
	header p,header a{
		color: #fff !important;
	}
	.mid-header .col-lg-3 a{
		background: #cf0001 !important
	}
	.mid-header .col-lg-5 input{
		border-color: #fff !important;
		color: #fff !important;
	}
	.read-more-box{
		margin-bottom: 0;
		font-size: 14px;
	}
	.read-more-box.sp-short-desc-full {
		display: -webkit-box;
		-webkit-line-clamp: 3 !important;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}
	.read-more-box.sp-long-desc-full {
		display: -webkit-box;
		-webkit-line-clamp: 10 !important;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}
	.read-text{
		font-weight: 700;
		cursor: pointer;
		display: flex;
		font-size: 14px;
	}
	.sp-short-desc-full ~ .read-text{
    	place-content: end;
	}
	.sp-long-desc-full ~ .read-text{
    	place-content: center;
	}
	.product-gallery{
		background: #ced4dac7;
		padding: 20px 0;
	}
	#breadcrumbs{
		text-align: center;
	}
	#breadcrumbs span span:first-child a{
		color: #1c2023;
	}
	.sp-title{
		padding-top: 20px;
	}
	.sp-title h1{
		font-size:28px;
		font-weight: 700 !important;
		color: #cf0001;
	}
	.product-main-img-container img{
		width: unset !important;
		height: auto !important;
		display: inline-block !important;
	}
	.sp-gallery-thumbnail{
		display: flex;
		place-content: center;
		gap: 10px;
		margin-top: 10px;
	}
	.sp-icons-wrap{
		display: flex;
		place-content: center;
	}
	.sp-icons-wrap img,.sp-icons-wrap span{
		display: flex;
		place-content: center;
	}
	.three-sec-wrap .col-md-7{
		align-self: center;
		
	}
	.three-sec-wrap .col-md-7 img{
		width: 100%;
		height: auto;
		border-radius: 18px;
		background: #e9f3ff;
	}
	.three-sec-wrap .first-sec{
		padding-bottom: 30px;
	}
	.three-sec-wrap .second-sec{
		padding-bottom: 30px;
	}
	.three-sec-wrap .third-sec{
		padding-bottom: 30px;
	}
	.three-sec-wrap .four-sec{
		padding-bottom: 50px;
	}
	.sp-tabs-wrap ul{
		display: flex;
		box-shadow: none !important;
	}
	.sp-tabs-wrap img{
		width: 100%;
	}
	.sp-single-tab-bottom div img{
		width: 40px;
	}
	.cat-p-sec{
		padding: 50px 0;
	}
	.sp-tabs .sp-single-tab:not(.active){
		display: none;
	}
	.sample-kit-sec img{
		width: 100%;
	}
	.faq-sec-wrap{
		padding: 50px 0;
	}
	.faq-sec-wrap h2{
		font-size: 42px;
	}
	.card,.card-header{
		border: 0;
		background-color: transparent;
	}
	.card-header{
		border-bottom: 1px solid #000;
	}
	#accordion .btn-link{
		color: #000;
	}
	.testimonial-slide{
		height: 100%;
	}
	.testimonial-slide .read-more-box {
		display: -webkit-box;
		-webkit-line-clamp: 7;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}
	.testimonial-slide {
		border-radius: 20px;
		display: flex !important;
		flex-direction: column;
		gap: 10px;
		height: 100%;
		margin-right: 20px;
		padding: 30px;
	}
	.testimonial-slider .owl-item:nth-child(1n) .testimonial-slide {
		background: #ffeae9
	}

	.testimonial-slider .owl-item:nth-child(2n) .testimonial-slide {
		background: #fff3e9
	}

	.testimonial-slider .owl-item:nth-child(3n) .testimonial-slide {
		background: #d9d2ff
	}

	.testimonial-slider .owl-item:nth-child(4n) .testimonial-slide {
		background: #e9f3ff
	}

	.testimonial-slider .owl-item:nth-child(5n) .testimonial-slide {
		background: #fbc4ab
	}

	.testimonial-slider .owl-item:nth-child(6n) .testimonial-slide {
		background: #ffccd5
	}

	.testimonial-slider .owl-item:nth-child(7n) .testimonial-slide {
		background: #caf0f8
	}

	.testimonial-slider .owl-item:nth-child(8n) .testimonial-slide {
		background: #e0fbfc
	}

	.testimonial-slider .owl-item:nth-child(9n) .testimonial-slide {
		background: #f5ecfd
	}

	.testimonial-slider .owl-item:nth-child(10n) .testimonial-slide {
		background: #caf0f8
	}

	.testimonial-slider .owl-item:nth-child(11n) .testimonial-slide {
		background: #c7f9cc
	}

	.testimonial-slider .owl-item:nth-child(12n) .testimonial-slide {
		background: #d2badc
	}
	section.sample-kit-sec > div > div > div:nth-child(3){
		align-self: center;
	}
	.sp-single-tab-bottom{
		padding: 20px;
	}
	.sp-single-tab-bottom h5{
		font-size: 16px;
	}
	.sp-single-tab-bottom p{
		font-size: 14px;
	}
	.cat-tabs-sec{
		padding: 50px 0;
	}
	.sp-tabs-wrap > div > ul{
		width: 100%;
		border: none;
		display: flex;
		align-items: center;
		border-radius: 10px;
		padding: 0;
		list-style: none;
		box-shadow: 0 0 12px 4px #f5f5f5;
	}
	.sp-tabs .sp-single-tab:not(.active){
		display: none;
	}
	.sp-tabs-wrap > div > ul li{
		width: 100%;
	}
	.sp-tabs-wrap > div > ul li{
		color: #000;
		font-weight: 500;
		margin: 0 1px;
		background-color:#f0f3f7;
		padding: 10px;
		cursor: pointer;
		text-align: center;
	}
	.sp-tabs-wrap > div > ul li.active,.sp-tabs-wrap > div > ul li:hover {
		background-color:#cf0001;
		color: #fff;
	}
	#pdetails .sp-tabs-wrap > div > ul li{
		width: 100px;
	}
	.cat-tabs-sec .cat-tabs-sec  ul li{
		width: 150px;
	}
	.sample-kit-sec{
		padding: 50px 0;
	}
	.reviews-wrap{
		padding: 50px 0;
	}
	.related-products-wrap{
		padding: 50px 0;
	}
	.related-products-wrap .col-md-3 
	.three-sec-wrap{
		padding: 50px 0;
	}
	.sp-icons-sec{
		padding: 50px 0;
	}
	.single-product-cats .pro-cat {
		padding: 6px 12px;
		background: #f2f2f2;
		font-size: 10px;
		font-weight: 600;
		border-radius: 24px;
		border: 0 solid #e5e7eb;
		color: #111;
	}
	.long-desc-wrap{
		padding: 50px 0;
	}
	.three-sec-content{
		padding: 20px;
	}
	.three-sec-wrap h3{
		font-weight: 600 !important;
/* 		line-height: 1.4 !important; */
		color: #0f2557;
		font-size: 24px;
	}
	.three-sec-wrap p{
		font-size: 16px !important;
/* 		line-height: 1.86 !important; */
		color: #0f2557;
		text-align: left;
	}
	.product-main-img-container{
		text-align: center;
	}
	.quantity-table__wrapper p.order-more-text, .quantity-table__wrapper p.quantity-step-text {
	  font-family: 'Chivo', sans-serif;
	  font-weight: 700;
	  font-size: 12px;
	  color: #2F1F4D;
	  text-transform: uppercase;
	}
	.quantity-table__wrapper p.quantity-step-text {
	  line-height: 1.5;
	  margin-top: 15px;
	}
	.quantity-table__wrapper p.order-more-text span {
	font-family: 'Chivo', sans-serif;
	font-weight: 700;
	font-size: 12px;
	color: #2F1F4D;
	text-transform: uppercase;
	}
	.quantity-table__wrapper p.pro_desc_note_discount {
	  font-size: 14px;
	  text-align: left;
	  color: #2E204D;
	  line-height: 24px;
	  letter-spacing: 0;
	}

	#quantity-table {
	  width: 100%;
	  background: #fff;
	  border-left: 1px solid #DDDDDD;
	  border-right: 1px solid #DDDDDD;
	  border-radius: 4px;
	  border-collapse: collapse;
	  table-layout: fixed;
		margin-top: 10px;
	}
	#custom-quantity-table {
	  width: 100%;
	  margin-top: 16px;
	  table-layout: fixed;
	}

	.custom-quantity__table--show {
	  display: table !important;
	}

	.custom-quantity__table--hide {
	  display: none !important;
	}

	#custom-quantity-table .custom-quantity-table-row {
	  background: #fff;
	}
	#quantity-table, #quantity-table tr{
	  border-top: 1px solid #DDDDDD;
	  border-bottom: 1px solid #DDDDDD;
	}
	.selector-wrapper{
		border: 1px solid #DDDDDD;
		padding: 15px;
	}
	#custom-quantity-table .custom-quantity-table-row {
	  border: 1px solid #DDDDDD;
	}

	#quantity-table .table-row-hide {
	  visibility: hidden;
	  display: none;
	}
	#quantity-table.show-more__active tr:nth-child(n + 5) {
	  visibility: visible;
	  display: table-row;
	}

	#quantity-table th {
	  white-space: nowrap;
	}

	#quantity-table td, #quantity-table th, .show-more-dropdow,  #custom-quantity-table td {
	  font-size: 16px;
	  color: #2E204D;
	  letter-spacing: -0.51px;
	  padding: 10px;
	  font-weight: normal;
	}

	#custom-quantity-table th {
	  font-size: 14px;
	  font-weight: normal;
	  color: #2E204D;
	  letter-spacing: -0.45px;
	  padding: 0;
	  white-space: nowrap;
	}

	#quantity-table .quantity-table--select, .custom-quantity-table--select {
	  height: 20px;
	  width: 20px;
	  border: 1px solid #DDDDDD;
	  border-radius: 50%;
	  margin: 0 auto;
	  display: flex;
	  justify-content: center;
	  align-items: center;
	  padding: 2px;
	  cursor: pointer;
	}
	#quantity-table .quantity-table--select span, .custom-quantity-table--select span {
	  height: 50%;
	  width: 50%;
	  background: transparent;
	  border-radius: 50%;
	  display: flex;
	  justify-content: center;
	  align-items: center;
	  transition: all 0.1s ease-in;
	}
	#quantity-table tr.selected .quantity-table--select span, tr.selected .custom-quantity-table--select span {
	  height: 100%;
	  width: 100%;
	  display: block;
	  background: #000066;
	  display: flex;
	  justify-content: center;
	  align-items: center;
	}

	#quantity-table td.quantity-table--total, #custom-quantity-table td.quantity-table--total {
	  font-weight: bold;
	}
	#quantity-table .quantity-table--select.selected span, .custom-quantity-table--select.selected span {
		height: 100%;
		width: 100%;
		display: block;
		background: #6A2C8E;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	 .selector-wrapper {
		margin: 20px 0;
		position: relative;
	}
	span#productPrice {
		font-family: Chivo, sans-serif;
		font-weight: 700;
		font-size: 24px;
		color: #2f1f4d;
	}
	.unitPricee span {
		display: inline-block;
		padding-left: 0;
		font-family: Chivo, sans-serif;
		font-weight: 400;
		font-size: 16px;
		color: #2f1f4d66;
		text-align: right;
		padding-top: 0;
	}
	.price {
		display: flex;
		justify-content: space-around;
		align-items: center;
	}
	.pricePadd-left {
		width: 100%;
	}
	#buyNowLink{
		font-size: 14px;
		line-height: 1.35;
		padding: 12px 35px;
		border: 1px solid #000066;
		border-radius: 9999px;
		background: #000066;
		color: #fff;
		width: 100%;
	}
	.related-products-wrap img{
		border-radius: 18px;
	}
	.related-products-wrap h6{
		color: #2c1847;
	}
	.related-products-wrap-img{
		height: 300px;
	}
	.related-products-wrap-img img{
		height: 100% !important;
	}
	div[data-tab-contentt]:not(.active){
		display: none;
	}
	.sp-form-wrap ul{
		display: flex;
		padding: 0;
		list-style: none;
		gap: 20px;
		margin-top: 10px;
		margin-bottom: 10px;
	}
	.sp-form-wrap ul li{
		padding: 10px;
	}
	.sp-form-wrap ul li {
		padding: 10px;
		width: 100%;
		text-align: center;
		border-radius: 50px;
		border: 1px solid #DDDDDD;
		cursor: pointer;
	}
	.sp-form-wrap ul li.active{
		background: #000066;
		border: none;
		color: #fff;
	}
	table tbody{
		display: none;
	}
	table tbody.d-block{
		display: table-footer-group !important;
	}
	.sticky-form{
		position: sticky;
        top: 0px;
	}
	.three-sec-wrap{
		margin-top: 40px;
	}
	.sp-data-wrap{
		border-right: 1px solid #8383831f;
		padding: 0 20px;
	}
	.sp-nav-reach{
		margin: 50px 0;
		position: sticky;
		left: 0;
		top: 0;
		width: 100%;
		background: #fff;
		z-index: 1;
	}
	.sp-nav-reach ul{
		list-style: none;
		padding: 0;
		padding: 15px 0;
		display: flex;
		gap: 40px;
		place-content: center;
		border-top: 1px solid #8383831f;
		border-bottom: 1px solid #8383831f;
		margin: 0;
	}
	.sp-nav-reach ul li a{
		color: #838383;
		font-weight: 500;
		padding: 15px 10px;
	}
	.sp-nav-reach ul li:hover a,.sp-nav-reach ul li.active a{
		color: #cf0001;
		border-bottom: 1px solid #cf0001;
	}
	table{
		border: 1px solid #dee2e6;
	}
	.table-striped tbody tr:nth-of-type(odd){
		background-color: transparent !important;
	}
	.shipping-time-sec{
		margin: 20px 0;
	}
	.shipping-time-sec h6{
		margin-bottom: 10px;
		font-size:14px;
	}
	.shipping-time-single{
		background: #e9f3ff;
		display: flex;
		gap: 10px;
		padding: 10px;
		margin: 8px 0px;
		align-items: center;
	}
	.shipping-time-single h6{
		margin-bottom: 0;
		font-size: 14px;
	}
	#wpcf7-f407-o1 p{
		margin-bottom: 0;
		padding-bottom: 0;
	}
	.cta-sec h4{
		font-size: 20px
	}
	.cta-sec .col-lg-4{
		text-align: right;
	}
	.Specification-wrap{
		padding-top: 50px;
	}
	.form-group{
		margin-bottom: 0px;
	}
	.product-main-img-container .owl-nav{
		position: absolute;
		top: 50%;
		width: 95%;
		left: 2.5%;
		z-index: 99;
		display: block !important;
	}
	.owl-nav button{
		background: #ffffff !important;
    	color: #000 !important;
		width: 40px !important;
    	height: 40px !important;
		border-radius: 50% !important;
	}
	.owl-nav button svg{
		width: 20px;
		height: 20px;
		margin: 0 !important;
	}
	.owl-nav button.owl-prev{
		float: left;
		transform: rotate(180deg)
	}
	.owl-nav button.owl-next{
		float: right;
	}
	.owl-nav button img{
		width: 20px !important;
		height: 20px !important;
	}
	.table td, .table th{
		padding: 6px;
	}
	@media only screen and (min-width: 992px) and (max-width: 1365px){
		.faq-sec-wrap h2 {
			font-size: 30px;
		}
	}
	@media only screen and (min-width: 992px){
		.d-mobile{
			display: none;
		}
		.sp-gallery-wrap .col-lg-8{
			padding: 0;
		}
	}
	@media only screen and (max-width: 991px){
		.d-desktop{
			display: none;
		}
		.sticky-form{
			position: unset;
		}
		.product-gallery{
			margin: 20px -15px;
		}
		.sp-gallery-wrap > .container-fluid > .row{
			flex-direction: column-reverse;
		}
		.sp-data-wrap{
			padding: 0;
		}
		.sp-nav-reach{
			top: 199px;
		}
		.sp-nav-reach ul{
			gap: 5px;
			place-content: normal;
		}
		.sp-nav-reach ul li a{
			padding: 5px;
			font-size: 14px;
		}
		.sp-nav-reach{
			margin: 20px 0;
		}
		.Uploadfile{
			margin-bottom: 20px;
		}
		.single-product-cats{
			padding-bottom: 20px;
		}
		.sp-gallery-wrap .col-lg-5{
			margin-top: 30px;
		}
		.sp-icons-wrap{
			flex-wrap: wrap;
		}
		.second-sec .row,.four-sec .row{
			flex-flow: column-reverse;
		}
		.related-products-wrap,.related-products-wrap img{
			border-radius: 16px;
		}
		.three-sec-wrap .col-md-6 img{
			border-radius: 16px;
		}
		.sp-gallery-thumbnail a{
			display: block;
			height: 80px;
		}
		.sp-gallery-thumbnail img{
			height: 100%;
			width: 100%;
		}
		.img-wrap img{
			height: auto !important;
		}
		.sp-nav-reach ul{
			overflow: scroll;
			white-space: pre;
		}
		.sp-nav-reach ul li{
			display: flex;
		}
		.sp-nav-reach ul li a{
			width: 100%;
        	display: flex;
			font-size: 12px;
		}
		.cta-sec .col-lg-4{
			text-align: center;
		}
		#pdp_form_page .form-group{
			width: 50%;
		}
		#pdp_form_page .form-group:first-child,#pdp_form_page .form-group:nth-child(12),#pdp_form_page .form-group:last-of-type{
			width: 100%;
		}
		body form .wpcf7-submit{
			width: 100%;
			display: block;
		}
		.product-main-img-container .owl-nav{
			width: 90% !important;
			left: 5% !important;
		}
		.cat-tabs-sec{
			display: block !important;
		}
	}
</style>

<section class="sp-gallery-wrap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-lg-8">
				<div class="product-gallery">
					<?php
						if ( function_exists('yoast_breadcrumb') ) {
						  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
					?>
				    <div class="product-main-img-container new-product owl-carousel gallery  your-section-class" id="gallery">
						<?php
                        function get_single_product_gallery_images_urlss($post) {
							if (empty($post) || 'product' !== $post->post_type) {
								return [];
							}
    						$featured_image_url = get_the_post_thumbnail_url($post->ID, 'full');
							$attachment_ids = get_post_meta($post->ID, '_product_image_gallery', true);
							$image_urls = [];
							if (!empty($attachment_ids)) {
								$attachment_ids = explode(',', $attachment_ids);

								foreach ($attachment_ids as $attachment_id) {
									$image_url = wp_get_attachment_url($attachment_id);
									if ($image_url) {
										$image_urls[] = $image_url;
									}
								}
							}
							if ($featured_image_url) {
								array_unshift($image_urls, $featured_image_url);
							}

							return $image_urls;
						}
						global $post;
						$gallery_image_urls = get_single_product_gallery_images_urlss($post);
						$limited_gallery_image_urls = array_slice($gallery_image_urls, -3);
						if (!empty($limited_gallery_image_urls)) {
							foreach ($limited_gallery_image_urls as $image_url) { ?>
								<div>
									<img src="<?php echo esc_url($image_url); ?>" class="img-fluid lazy-load" width="800" height="800" alt="">
								</div>
							<?php }
						}
						?>
                    </div>
                </div>
				<div class="sticky-form d-mobile">
					<div class="sp-title">
						<h1>
							<?php echo get_the_title($current_post_id); ?>
						</h1>
					</div>
					<?php
						if ( !has_term( 'custom product', 'product_tag' ) ){ ?>
							<div class="sp-short-desc sp-short-desc-wrap">
								<p class="sp-short-desc-full text-full read-more-box">
									<?php
										$ftext = $product->get_short_description(); 
										$fwords = 200000000000000; 
										$fmore = '<span>Read Less</span>';
										echo $fpost_post_excerpt = wp_trim_words($ftext, $fwords, $fmore);
									?>
								</p>
								<span class="read-text">Read More...</span>
							</div>
					<?php } ?>
				<?php 
					if ( has_term( 'custom product', 'product_tag' ) ){  ?>
						<style>
							#customSizes select{
								margin: 0;
								width: 49%;
								display: inline-block;
								margin-bottom: 5px;
							}
							#customSizes #lamination{
								width: 100% !important;
								margin-bottom: 0;
							}
						</style>
                        <div class="sp-form-wrap">
                            <ul>
                                <li data-tab-targett="#customSizes" class="active">Standard Sizes</li>
                                <li data-tab-targett="#standardSizes">Custom Sizes</li>
                            </ul>
                            <div class="sp-form-tabs">
                                <div class="sp-price-wrap active" id="customSizes" data-tab-contentt>
									<select class="form-control" name="Printing" class="Printing" id="Printing">
										<?php if ( have_rows( 'Printing' ) ) : ?>
											<?php while ( have_rows( 'Printing' ) ) : the_row(); ?>
												<option name="<?php echo the_sub_field( 'printing' ); ?>"><?php echo the_sub_field( 'printing' ); ?></option>
										<?php endwhile; ?>
										<?php endif; ?>
										
									</select>
									<select class="form-control" name="size" class="size" id="size">
										<?php if ( have_rows( 'size' ) ) : ?>
											<?php while ( have_rows( 'size' ) ) : the_row(); ?>
												<option name="<?php the_sub_field( 'Size' ); ?>"><?php the_sub_field( 'Size' ); ?></option>
										<?php endwhile; ?>
										<?php endif; ?>
										
									</select>
									<select class="form-control" name="style" class="style" id="style">
										<?php if ( have_rows( 'style' ) ) : ?>
											<?php while ( have_rows( 'style' ) ) : the_row(); ?>
												<option name="<?php the_sub_field( 'style' ); ?>"><?php the_sub_field( 'style' ); ?></option>
										<?php endwhile; ?>
										<?php endif; ?>
										
									</select>
									<select class="form-control" name="stock" class="stock" id="stock">
										<?php if ( have_rows( 'stockkk' ) ) : ?>
											<?php while ( have_rows( 'stockkk' ) ) : the_row(); ?>
												<option name="<?php echo the_sub_field( 'stockk' ); ?>"><?php echo the_sub_field( 'stockk' ); ?></option>
										<?php endwhile; ?>
										<?php endif; ?>
									</select>
									<select class="form-control" name="lamination" class="lamination" id="lamination">
										<?php if ( have_rows( 'lamination' ) ) : ?>
											<?php while ( have_rows( 'lamination' ) ) : the_row(); ?>
												<option name="<?php echo the_sub_field( 'Lamination' ); ?>"><?php echo the_sub_field( 'Lamination' ); ?></option>
										<?php endwhile; ?>
										<?php endif; ?>
									</select>
                                    <table id="quantity-table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Quantity</th>
                                                <th>Unit Price</th>
                                                <th>Total</th>
                                            </tr>
										</thead>
											<?php if ( have_rows( 'prices_one' ) ) : ?>
												<?php while ( have_rows( 'prices_one' ) ) : the_row(); ?>
													<tbody id="myTbody">
		
															<?php if ( have_rows( 'priceee' ) ) : ?>
															<?php while ( have_rows( 'priceee' ) ) : the_row(); ?>
														
																<?php if ( have_rows( 'prices_1' ) ) : ?>
																	<?php while ( have_rows( 'prices_1' ) ) : the_row(); ?>
																		<tr>
																			<td data-value="10">
																				<div class="quantity-table--select">
																					<span>
																						<svg
																							 xmlns="http://www.w3.org/2000/svg"
																							 width="11.532"
																							 height="9.634"
																							 viewBox="0 0 11.532 9.634"
																							 >
																							<path
																								  id="check-icon"
																								  d="M16,26l3.438,4L26,22"
																								  transform="translate(-15.242 -21.366)"
																								  fill="none"
																								  stroke="#fff"
																								  stroke-linejoin="round"
																								  stroke-width="2"
																								  ></path>
																						</svg>
																					</span>
																				</div>
																			</td>
																			<td class="qtyValue"><?php the_sub_field( 'quantity' ); ?></td>
																			<td class="quantity-table--unit"><?php the_sub_field( 'unit' ); ?>$</td>
																			<td class="quantity-table--total"><?php the_sub_field( 'price' ); ?>$</td>
																					<!-- <td class="savings-cell saving-hidden">
																				<span class="saving-percentage saving-hidden">- 0%</span>
																			</td> -->
																		</tr>
																	<?php endwhile; ?>
																<?php endif; ?>
															
														<?php endwhile; ?>
														<?php else : ?>
														<?php // No rows found ?>
														<?php endif; ?>
														<?php endwhile; ?>
														
												</tbody>
												<?php else : ?>
												<?php // No rows found ?>
												<?php endif; ?>
                                    </table>
                                    <div class="description-section desc_blk_bot clearfix productBottomprice">
                                        <div class="sticky-selector-wrapper">
                                            <div class="selector-wrapper">
                                                <div class="pricePadd-left">
                                                    <div class="price ">
                                                        <div class="productPricee">
                                                            <span id="productPrice" class="money" content="17.10">0</span>
                                                        </div>
                                                        <div class="unitPricee">
                                                            <span class="unitPrice small-text">0</span>
                                                            <span>/unit</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xs-4 pricePadd-right" style="display: none">
                                                    <span id="qtyValue" class="small-text"></span>
                                                </div>
                                            </div>
                                            <input id="current_post_id" type="hidden" value="<?php echo $current_post_id; ?>">
                                            <div class="product-buttons mb-0">
                                                <a id="buyNowLink" href="#" class="btn">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sp-form" id="standardSizes" data-tab-contentt>
                                    <?php echo do_shortcode('[contact-form-7 id="90e9184" title="Single Product"]'); ?>
                                </div>
                            </div>
                        </div>
					<?php
						} elseif (!$product || !$product->is_type('variable')) { ?>
						<div class="sp-form">
							<?php echo do_shortcode('[contact-form-7 id="90e9184" title="Single Product"]'); ?>
						</div>
					<?php } ?>
					<div class="single-product-cats">
						<?php
						$product_categories = get_the_terms($post->ID, 'product_cat');
						if ($product_categories && !is_wp_error($product_categories)) {
							$category_links = array();

							// Limit to 2 categories
							$limited_categories = array_slice($product_categories, 0, 2);

							foreach ($limited_categories as $product_category) {
								$category_links[] = '<a class="pro-cat" href="/product-category/' . esc_html($product_category->slug) . '/">' . esc_html($product_category->name) . '</a>';
							}

							echo implode(' ', $category_links);
						}
						?>
					</div>
				</div>
				<div class="sp-data-wrap">
					<div class="sp-nav-reach">
						<ul>
							<li class="active gallery"><a href="#gallery">Gallery</a></li>
							<li class="pdetails"><a href="#pdetails">Product Details</a></li>
							<li class="specification"><a href="#specification">Specification</a></li>
							<li class="faq"><a href="#faq">FAQs</a></li>
							<li class="rproducts"><a href="#rproducts">Related Products</a></li>
						</ul>
					</div>
					<?php
                        if ( !has_term( 'custom product', 'product_tag' ) ){
                            $section_1_title = get_field('section_1_title' , $current_post_id);
                            if(!empty($section_1_title)){ ?>

					<section class="three-sec-wrap pdetails  your-section-class">
						<div class="containerr">
							<?php
								$section_1_title = get_field('section_1_title' , $current_post_id);
								if(!empty($section_1_title)){ ?>
                                <div class="first-sec">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="three-sec-content">
                                                <h3>
                                                    <?php echo $section_1_title;?>
                                                </h3>
                                                <p>
                                                    <?php echo $section_1_description = get_field('section_1_description' , $current_post_id);?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <?php
                                                $section_1_image_val = get_field('section_1_image', $current_post_id);
                                                $section_1_image = str_replace('http://thepremierpackaging.com', '', $section_1_image_val);
                                                $section_1_image = str_replace('01', '11', $section_1_image);
                                                $section_1_image = str_replace('10', '11', $section_1_image);
                                                $section_1_image = str_replace('23', '24', $section_1_image);
                                            ?>
                                            <img src="<?php echo esc_url($section_1_image); ?>" alt="Image 1" width="" height="">
                                        </div>
                                    </div>
                                </div>
                                <?php }
                                    $section_2_title = get_field('section_2_title' , $current_post_id);
                                    if(!empty($section_2_title)){
                                ?>
                                <div class="second-sec">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <?php
                                                $section_2_image_val = get_field('section_2_image', $current_post_id);
                                                $section_2_image = str_replace('http://thepremierpackaging.com', '', $section_2_image_val);
                                                $section_2_image = str_replace('01', '11', $section_2_image);
                                                $section_2_image = str_replace('10', '11', $section_2_image);
                                                $section_2_image = str_replace('23', '24', $section_2_image);
                                            ?>
                                            <img src="<?php echo $section_2_image = get_field('section_2_image' , $current_post_id); ?>" alt="Image 2" width="" height="">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="three-sec-content">
                                                <h3>
                                                    <?php echo $section_2_title = get_field('section_2_title' , $current_post_id);?>
                                                </h3>
                                                <p>
                                                    <?php echo $section_2_description = get_field('section_2_description_1' , $current_post_id);?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                                    $section_3_title = get_field('section_3_title' , $current_post_id);
                                    if(!empty($section_3_title)){
                                ?>
                                <div class="third-sec">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="three-sec-content">
                                                <h3>
                                                    <?php echo $section_3_title = get_field('section_3_title' , $current_post_id);?>
                                                </h3>
                                                <p>
                                                    <?php echo $section_3_description = get_field('section_3_description_1' , $current_post_id);?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <?php
                                                $section_3_image_val = get_field('section_3_image', $current_post_id);
                                                $section_3_image = str_replace('http://thepremierpackaging.com', '', $section_3_image_val);
                                                $section_3_image = str_replace('01', '11', $section_3_image);
                                                $section_3_image = str_replace('10', '11', $section_3_image);
                                                $section_3_image = str_replace('23', '24', $section_3_image);
                                            ?>
                                            <img src="<?php echo $section_3_image = get_field('section_3_image' , $current_post_id); ?>" alt="Image 3" width="" height="">
                                        </div>
                                    </div>
                                </div>
                                <?php }
                                    $section_4_title = get_field('section_4_title' , $current_post_id);
                                    if(!empty($section_4_title)){
                                ?>
                                <div class="four-sec">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <?php
                                                $section_4_image_val = get_field('section_4_image', $current_post_id);
                                                $section_4_image = str_replace('http://thepremierpackaging.com', '', $section_4_image_val);
                                                $section_4_image = str_replace('01', '11', $section_4_image);
                                                $section_4_image = str_replace('10', '11', $section_4_image);
                                                $section_4_image = str_replace('23', '24', $section_4_image);
                                            ?>
                                            <img src="<?php echo $section_4_image = get_field('section_4_image' , $current_post_id); ?>" alt="Image 4" width="" height="">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="three-sec-content">
                                                <h3>
                                                    <?php echo $section_4_title = get_field('section_4_title' , $current_post_id);?>
                                                </h3>
                                                <p>
                                                    <?php echo $section_4_description = get_field('section_4_description_1' , $current_post_id);?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							<?php } ?>
						</div>
					</section>
					<?php }
					}?>
					<section class="cta-sec">
						<div class="container">
							<div class="row">
								<div class="col-lg-8">
									<h4>
										Need more this year?
										<stron>Get The Most Accurate Quotation</stron>
									</h4>
								</div>
								<div class="col-lg-4">
									<a href="/get-a-quote/">Get Free Quote</a>
								</div>
							</div>
						</div>	
					</section>
					<div class="Specification-wrap specification  your-section-class" id="specification">
						<table class="table table-striped">
							<tbody class="d-block">
								<tr>
									<th>Type</th>
									<th>Specifications</th>
								</tr>
								<tr>
									<td>Dimensions</td>
									<td>All Custom Sizes &amp; Shapes</td>
								</tr>
								<tr>
									<td>Printing</td>
									<td>CMYK, PMS, No Printing</td>
								</tr>
								<tr>
									<td>Paper Stock</td>
									<td>10pt to 28pt (60lb to 400lb) Eco-Friendly Kraft, E-flute Corrugated, Bux Board,
										Cardstock</td>
								</tr>
								<tr>
									<td>Quantities</td>
									<td>100 – 500,000</td>
								</tr>
								<tr>
									<td>Coating</td>
									<td>Gloss, Matte, Spot UV</td>
								</tr>
								<tr>
									<td>Default Process</td>
									<td>Die Cutting, Gluing, Scoring, Perforation</td>
								</tr>
								<tr>
									<td>Options</td>
									<td>Custom Window Cut Out, Gold/Silver Foiling, Embossing, Raised Ink, PVC Sheet.
									</td>
								</tr>
								<tr>
									<td>Proof</td>
									<td>Flat View, 3D Mock-up, Physical Sampling (On request)</td>
								</tr>
								<tr>
									<td>Turn Around Time</td>
									<td>4-6 Business Days, Rush</td>
								</tr>
							</tbody>
						</table>
					</div>
					<section class="cat-tabs-sec pdetails" id="pdetails">
						<div class="row">
							<div class="col-md-12">
								<div class="sp-tabs-wrap">
									<div>
										<ul>
											<li data-tab-targett="#faq" class="active faq your-section-class">
												FAQ
											</li>
											<li data-tab-targett="#description" class="pdetails your-section-class">
												Description
											</li>
										</ul>
									</div>
									<div class="sp-tabs">
										<?php
										$sp_long_desc = get_the_content();
										if(!empty($sp_long_desc)){ ?>
										<div id="description" class="sp-single-tab" data-tab-contentt>
											<div class="sp-long-desc-full text-full read-more-box">
												<?php echo $sp_long_desc; ?>
											</div>
											<span class="read-text">Read More...</span>
										</div>
										<?php
																 }
										?>
										<div id="faq" class="sp-single-tab active faq your-section-class" data-tab-contentt>
											<section class="faq-sec-wrap">
												<div class="row">
													<div class="col-lg-3 col-md-6 col-sm-12">
														<h2>
															Frequently Asked Questions
														</h2>
													</div>
													<div class="col-lg-9 col-md-6 col-sm-12">
														<div id="accordion">
															<div class="card-header active">
																<strong class="btn-link">
																	Q: <?php
																	$question_1 = get_field('question_1');
																	if(empty($question_1)){
																		echo "Can I order custom packaging with my brand's design?";
																	}else{
																		echo $question_1;
																	}
																	?>
																</strong>
															</div>
															<div class="collapse">
																<div class="card-body">
																	<p>
																		A: <?php
																		$answer_1  = get_field('answer_1');
																		if(empty($answer_1)){
																			echo "Yes, The Premier Packaging specializes in creating custom boxes tailored to your brand and product specifications.";
																		}else{
																			echo $answer_1;
																		}
																		?>
																	</p>
																</div>
															</div>
														</div>
														<div id="accordion">
															<div class="card">
																<div class="card-header">
																	<strong class="btn-link">
																		Q: <?php
																		$question_2 = get_field('question_2');
																		if(empty($question_2)){
																			echo "What's the typical delivery time for custom packaging?";
																		}else{
																			echo $question_2;
																		}
																		?>
																	</strong>
																</div>
																<div class="collapse">
																	<div class="card-body">
																		<p>
																			A: <?php
																			$answer_2 = get_field('answer_2');
																			if(empty($answer_2)){
																				echo "Our production and delivery times may vary depending on the complexity of your order, but we strive to provide fast and efficient service. Contact our team for more details.";
																			}else{
																				echo $answer_2;
																			}
																			?>
																		</p>
																	</div>
																</div>
															</div>
															<div class="card">
																<div class="card-header">
																	<strong class="btn-link">
																		Q: <?php
																		$question_3 = get_field('question_3');
																		if(empty($question_3)){
																			echo "Do you offer sustainable packaging choices?";
																		}else{
																			echo $question_3;
																		}
																		?>
																	</strong>
																</div>
																<div class="collapse">
																	<div class="card-body">
																		<p>
																			A: <?php
																			$answer_3 = get_field('answer_3');
																			if(empty($answer_3)){
																				echo "A: Absolutely! We understand the importance of sustainability. The Premier Packaging offers a range of eco-friendly packaging solutions. Just let us know your preferences, and we’ll find the right fit for you.";
																			}else{
																				echo $answer_3;
																			}
																			?>
																		</p>
																	</div>
																</div>
															</div>
															<div class="card">
																<div class="card-header">
																	<strong class="btn-link">
																		Q: <?php
																		$question_4 = get_field('question_4');
																		if(empty($question_4)){
																			echo "Can I store excess packaging materials with you?";
																		}else{
																			echo $question_4;
																		}
																		?>
																	</strong>
																</div>
																<div class="collapse">
																	<div class="card-body">
																		<p>
																			A: <?php
																			$answer_4 = get_field('answer_4');
																			if(empty($answer_4)){
																				echo "Yes, we offer warehousing solutions for your packaging needs. This allows you to order in larger quantities and manage storage more efficiently.";
																			}else{
																				echo $answer_4;
																			}
																			?>
																		</p>
																	</div>
																</div>
															</div>
															<div class="card">
																<div class="card-header">
																	<strong class="btn-link">
																		Q: <?php
																		$question_5 = get_field('question_5');
																		if(empty($question_5)){
																			echo "Which industries do you serve with custom packaging?";
																		}else{
																			echo $question_5;
																		}
																		?>
																	</strong>
																</div>
																<div class="collapse">
																	<div class="card-body">
																		<p>
																			A: <?php
																			$answer_5 = get_field('answer_5');
																			if(empty($answer_5)){
																				echo "We cater to a wide range of industries, including food and beverages, cosmetics, electronics, and more. Our solutions are versatile and adaptable to various businesses.";
																			}else{
																				echo $answer_5;
																			}
																			?>
																		</p>
																	</div>
																</div>
															</div>
															<div class="card">
																<div class="card-header">
																	<strong class="btn-link">
																		Q: <?php
																		$question_6 = get_field('question_6');
																		if(empty($question_6)){
																			echo "How can I get in touch to discuss my packaging needs?";
																		}else{
																			echo $question_6;
																		}
																		?>
																	</strong>
																</div>
																<div class="collapse">
																	<div class="card-body">
																		<p>
																			A: <?php
																			$answer_6 = get_field('answer_6');
																			if(empty($answer_6)){
																				echo "You can easily reach out to us through our contact page, where you’ll find various ways to connect with our knowledgeable team. We’re here to assist you with any questions or requests you may have.";
																			}else{
																				echo $answer_6;
																			}
																			?>
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</section>
				
					<section class="reviews-wrap">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-wrap">
									<h2 class="all-heading m-0">Customer Reviews</h2>
									<hr>
									<p>In today’s highly competitive market, how you present your product is as important as the product itself. That’s where The Premier Packaging steps in, offering you a variety of custom boxes, custom boxes with logo, product boxes, custom packaging, printed boxes, and comprehensive packaging services. Our expertise and passion for excellence set us apart.</p>
								</div>
								<div class="testimonial-slider owl-carousel owl-theme">
									<div class="testimonial-slide">
										<p class="testi-text text-full read-more-box">“Excellent customer service and superb quality boxes! Previously, we had our product boxes printed in China due to cost considerations. The Premier Packaging provided us with better pricing, and the boxes arrived quickly after ordering. They even sent us samples at no extra charge. We are now loyal customers. Thank you!”</p>
										<span class="read-text">Read More...</span>
										<span>Kevin Parker</span>
									</div>
									<div class="testimonial-slide">
										<p class="testi-text text-full read-more-box">“The Premier Packaging is top-notch! I chose them for their competitive pricing. Sean Smith, our project representative, provided invaluable help and suggestions. Despite some initial miscalculations, Sean quickly resolved the issues. The quality and service were exceptional!”</p>
										<span class="read-text">Read More...</span>
										<span>James Johnson</span>
									</div>
									<div class="testimonial-slide">
										<p class="testi-text text-full read-more-box">“The Premier Packaging exceeded our expectations with the display boxes they created for Farmer Dan's Honey. Their attention to our needs and creative input resulted in boxes that surpassed what we imagined. Their promised turnaround time was met, and we look forward to working with them again. Thank you!”</p>
										<span class="read-text">Read More...</span>
										<span>David Smith</span>
									</div>
									<div class="testimonial-slide">
										<p class="testi-text text-full read-more-box">“Samuel from The Premier Packaging created stunning boxes for my products. Their prices, customer service, and quality are incredible. Highly recommended for enhancing product materials and design!”</p>
										<span class="read-text">Read More...</span>
										<span>Hanry Garza</span>
									</div>
									<div class="testimonial-slide">
										<p class="testi-text text-full read-more-box">“Sean from The Premier Packaging was incredible. Patient, innovative, quick, and fair pricing. My best experience with a packaging group. Thank you!”</p>
										<span class="read-text">Read More...</span>
										<span>Chad Hoekstra</span>
									</div>
									<div class="testimonial-slide">
										<p class="testi-text text-full read-more-box">“Excellent customer service and superb quality boxes! Previously, we had our product boxes printed in China due to cost considerations. The Premier Packaging provided us with better pricing, and the boxes arrived quickly after ordering. They even sent us samples at no extra charge. We are now loyal customers. Thank you!”</p>
										<span class="read-text">Read More...</span>
										<span>Kimberlyn Harris</span>
									</div>
									<div class="testimonial-slide">
										<p class="testi-text text-full read-more-box">“Bryan Woods from The Premier Packaging went above and beyond helping us with our boxes. Great customer service and very persistent.”</p>
										<span class="read-text">Read More...</span>
										<span>Carmelo Parasiliti</span>
									</div>
									<div class="testimonial-slide">
										<p class="testi-text text-full read-more-box">“Bryan Woods from The Premier Packaging went above and beyond helping us with our boxes. Great customer service and very persistent.”</p>
										<span class="read-text">Read More...</span>
										<span>Carmelo Parasiliti</span>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="related-products-wrap your-section-class rproducts" id="rproducts">
						<div class="row">
							<div class="col-md-12 heading-wrap">
								<h2 class="all-heading m-0">
									Related Products
								</h2>
								<hr>
								<p>
									Don't just imagine – experience excellence up close, as you can check our superior craftsmanship before making your decision by ordering your sample kit.
								</p>
							</div>
							<div class="col-md-12">
								<div class="">
									<div class="item">
										<?php
										// 							$product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
										// 							$category_slugs = array();
										// 							foreach ( $product_cats as $product_cat ) {
										// 								$category_slugs[] = $product_cat->slug;
										// 							}
										$args = array(
											'post_type'      => 'product',
											'posts_per_page' => 8,
											'post_status'    => 'publish',
											//'post__not_in'   => array( get_the_ID() ),
											// 								'tax_query'      => array(
											// 									array(
											// 										'taxonomy' => 'product_cat',
											// 										'field'    => 'slug',
											// 										'terms'    => $category_slugs,
											// 									),
											// 								),
										);
										$loop = new WP_Query( $args );
										if ( $loop->have_posts() ) : ?>
										<div class="row">
											<div class="col-md-3">
												<?php if ( $loop->have_posts() ) : $loop->the_post(); ?>
												<a href="<?php echo esc_url(get_the_permalink()); ?>">
													<div class="related-products-wrap-img">
														<img
															 src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
															 class="img-fluid mx-auto d-block frist-last"
															 style="max-width: 100%; height: auto;"
															 alt="<?php echo get_the_title(); ?>" width="" height="400">
													</div>
													<div class="text-center cate"> 
														<h6 class="mt-3"><?php echo get_the_title(); ?></h6>
													</div>
												</a>
												<?php endif; ?>
											</div>
											<div class="col-md-6">
												<div class="row">
													<?php for ( $i = 0; $i < 6; $i++ ) : if ( $loop->have_posts() ) : $loop->the_post(); ?>
													<div class="col-md-4">
														<a href="<?php echo esc_url(get_the_permalink()); ?>">
															<div class="text-center cate">
																<img
																	 src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
																	 class="img-fluid mx-auto d-block frist-last"
																	 style="max-width: 100%; height: auto;"
																	 alt="<?php echo get_the_title(); ?>"
																	 >
																<h6 class="mt-3"><?php echo get_the_title(); ?></h6>
															</div>
														</a>
													</div>
													<?php endif; endfor; ?>
												</div>
											</div>
											<div class="col-md-3">
												<?php if ( $loop->have_posts() ) : $loop->the_post(); ?>
												<a href="<?php echo esc_url(get_the_permalink()); ?>">
													<div class="related-products-wrap-img">
														<img
															 src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
															 class="img-fluid mx-auto d-block frist-last"
															 style="max-width: 100%; height: auto;"
															 alt="<?php echo get_the_title(); ?>" width="" height="400">
													</div>
													<div class="text-center cate"> 
														<h6 class="mt-3"><?php echo get_the_title(); ?></h6>
													</div>
												</a>
												<?php endif; ?>
											</div>
										</div>
										<?php wp_reset_postdata(); ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
				    </section>
                </div>
			</div>
			<!-------------------------------------------- STICKY FORM(Desktop) -------------------------------------------->
			<div class="col-sm-12 col-lg-4" style="padding:0px 30px;">
				<div class="sticky-form d-desktop">
					<div class="sp-title">
						<h1 style="margin-bottom: 16px;">
							<?php echo get_the_title($current_post_id); ?>
						</h1>
					</div>
							<div class="sp-short-desc sp-short-desc-wrap">
								<p class="sp-short-desc-full text-full read-more-box">
								Custom custom shipping boxes are made from recycled, FSC-certified paper and compostable or curbside recyclable after use.
								</p>
							</div>
							
					<div class="shipping-time-sec">
						<h6>
							Estimated arrival:
						</h6>
						<div class="shipping-time-srap">
							<div class="shipping-time-single">
								<img src="/wp-content/uploads/2024/11/shipping-icon.svg" width="24" height="24" alt="ShippingIcon">
								<h6>
									Standard: <b>14 to 16 Business Days</b>
								</h6>
							</div>
						</div>
					</div>
					<div class="single-product-cats">
						<?php
						$product_categories = get_the_terms($post->ID, 'product_cat');
						if ($product_categories && !is_wp_error($product_categories)) {
							$category_links = array();

							// Limit to 2 categories
							$limited_categories = array_slice($product_categories, 0, 2);

							foreach ($limited_categories as $product_category) {
								$category_links[] = '<a class="pro-cat" href="/product-category/' . esc_html($product_category->slug) . '/">' . esc_html($product_category->name) . '</a>';
							}

							echo implode(' ', $category_links);
						}
						?>
					</div>
					<hr width="100%" size="2">
				<?php 
					if ( has_term( 'custom product', 'product_tag' ) ){  ?>
						<style>
							#customSizes select{
								margin: 0;
								width: 49%;
								display: inline-block;
								margin-bottom: 5px;
							}
							#customSizes #lamination{
								width: 100% !important;
								margin-bottom: 0;
							}
							.btn:not(:disabled):not(.disabled) {
								cursor: pointer;
								margin-top: 30px;
							}
						</style>
					<?php
						} elseif (!$product || !$product->is_type('variable')) { ?>
						<div class="sp-form">
							<?php echo do_shortcode('[contact-form-7 id="90e9184" title="Single Product"]'); ?>
						</div>
					<?php } ?>
					
				</div>
			</div>
		</div>
	</div>
</section>

<section class="sp-icons-sec d-none">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="sp-icons-wrap">
					<div class="sp-single-icon">
						<img
							 width="152"
							 height="105"
							 src="/wp-content/uploads/2024/08/Free-Shipping-Feature.webp"
							 class=""
							 alt="Free Shipping"
							 >
						<span>Free Shipping</span>
					</div>
					<div class="sp-single-icon">
						<img
							 width="152"
							 height="105"
							 src="/wp-content/uploads/2024/08/Online-Orders-Feature.webp"
							 class=""
							 alt="Online Order"
							 >
						<span>Online Order</span>
					</div>
					<div class="sp-single-icon">
						<img
							 width="152"
							 height="105"
							 src="/wp-content/uploads/2024/08/Save-Money-Feature.webp"
							 class=""
							 alt="Save Money"
							 >
						<span>Save Money</span>
					</div>
					<div class="sp-single-icon">
						<img
							 width="152"
							 height="105"
							 src="/wp-content/uploads/2024/08/Promotions-Feature.webp"
							 class=""
							 alt="Promotions"
							 >
						<span>Promotions</span>
					</div>
					<div class="sp-single-icon">
						<img
							 width="152"
							 height="105"
							 src="/wp-content/uploads/2024/08/Happy-Sell-Feature.webp"
							 class=""
							 alt="Happy Sell"
							 >
						<span>Happy Sell</span>
					</div>
					<div class="sp-single-icon">
						<img
							 width="152"
							 height="105"
							 src="/wp-content/uploads/2024/08/247-Free-Support.webp"
							 class=""
							 alt="24/7 Support">
						<span>24/7 Support</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> 

<section class="cat-tabs-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sp-tabs-wrap">
					<div>
						<ul>
							<li data-tab-target="#coatingLaminations" class="active">
								Coating Laminations
							</li>
							<li data-tab-target="#printingOptions">
								Printing Options
							</li>
							<li data-tab-target="#materials">
								Materials
							</li>
							<li data-tab-target="#specialFinishes">
								Special Finishes
							</li>
							<li data-tab-target="#specialFinishes">
								Paper Weight
							</li>
						</ul>
					</div>
					<div class="sp-tabs">
						<div id="coatingLaminations" class="sp-single-tab active" data-tab-content>
							<div class="row">
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/Aqueous-Coating.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Aqueous Coating
											</h5>
											<p>
												Clear, fast-drying, water-based, and eco-friendly coating. Available in gloss or matte finish.  
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/UV-Coating.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												UV Coating
											</h5>
											<p>
												Fast-drying coating cured with ultraviolet light. Available in gloss or matte finish.  
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/Soft-Touch-Coating.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Soft Touch Coating
											</h5>
											<p>
												UV coating that is applied to a specified area and cured using ultraviolet light.  
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/Soft-Touch-Coating_2.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Soft Touch Coating
											</h5>
											<p>
												Soft to the touch coating that creates a velvety texture for a more tactile appeal.   
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/Varnish.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Varnish
											</h5>
											<p>
												Clear coating applied using the CMYK printing method. Available in gloss, satin, or matte.  
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/Lamination.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Lamination
											</h5>
											<p>
												Laminated protective film that adheres to the surface of packaging materials to maximize durability.   
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/Anti-scratch-Lamination.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Anti-scratch Lamination
											</h5>
											<p>
												Laminated BOPP film that is scratch, scuff, and fingerprint resistant. Cost-effective option.  
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/Soft-Touch_Silk-Lamination.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Soft Touch / Silk Lamination
											</h5>
											<p>
												Soft to the touch lamination similar to peach skin. Available in a satin or matte finish.   
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="printingOptions" class="sp-single-tab" data-tab-content>
							<div class="row">
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/printer-1.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Offset Print
											</h5>
											<p>
												High-quality printing method that utilizes a printing plate and rubber blanket to transfer designs on paper. Best for large runs.
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/printer-4.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Digital Print
											</h5>
											<p>
												Digital printing method that requires no printing plate. Designs are transferred electronically, making it cost-effective for small runs.
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/printer-6.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												UV Print
											</h5>
											<p>
												Fast-drying printing method using ultraviolet lights to cure inks which results in a gloss finish. 
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/ink-1.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Water-based Ink
											</h5>
											<p>
												Comprised of water and pigment that provides high-quality color output and is 100% eco friendly.   
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/ink-2.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Soy / Vegetable Ink
											</h5>
											<p>
												100% eco friendly and comprised of soy/vegetable oil and pigment to provide a vibrant color output.
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/ink-1.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Oil Base Ink
											</h5>
											<p>
												Non-eco-friendly ink comprised of oil and pigment that provides high-quality color output.
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/ink-5.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Pantone
											</h5>
											<p>
												Pure color based on specific ink formulas to consistenly and precisely print color. 
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/ink-6.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Pantone Metallic
											</h5>
											<p>
												Metallic color based on specific ink formulas to consistenly and precisely print color.   
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="materials" class="sp-single-tab" data-tab-content>
							<div class="row">
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/01-c1s.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												SBS C1S
											</h5>
											<p>
												Premium-grade bleached white paperboard coated on one side for high-quality printing and finishes.
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/sustainably-made.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/02-c2s.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												SBS C2S
											</h5>
											<p>
												Premium-grade bleached white paperboard coated on two sides for high-quality printing and finishes.
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/sustainably-made.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/03-ccnb.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												CCNB
											</h5>
											<p>
												Duplex paperboard made from 90% recycled paper pulp with a white surface for high-quality printing. 
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/sustainably-made.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/04-ccnb-fr.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Fully Recycled CCNB
											</h5>
											<p>
												Duplex paperboard coated on one side and made from 90% recycled paper pulp.  
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/sustainably-made.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/05-kraft.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Natural Brown Kraft
											</h5>
											<p>
												Kraft paper made from a mix of virgin and recycled paper pulp, coated on both sides for printing.
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/sustainably-made.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/06-white-kraft.webpp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												White Kraft
											</h5>
											<p>
												Bleached kraft paper made from a mix of virgin and recycled pulp with coating on both sides for printing.
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/sustainably-made.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/07-black-kraft.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Black Kraft
											</h5>
											<p>
												Black dyed kraft paper made from a mix of virgin and recycled pulp, coated on both sides for printing.
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/sustainably-made.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/08-uuk-1.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Uncoated Unbleached Kraft
											</h5>
											<p>
												Unbleached kraft paper with no coating. Made from a mixture of virgin and recycled paper pulp.   
											</p>
											<div class="">
												<img src="/wp-content/uploads/2024/08/recyclable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/biodegradable.svg" alt="" width="" height="">
												<img src="/wp-content/uploads/2024/08/sustainably-made.svg" alt="" width="" height="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="specialFinishes" class="sp-single-tab" data-tab-content>
							<div class="row">
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/finishing-6.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Hot Foil Stamping
											</h5>
											<p>
												Form of relief printing in which foil is transferred to a surface at high temperatures.
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/finishing-7.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Cold Foil Printing
											</h5>
											<p>
												Form of relief printing in which foil is transferred to a surface by pressing onto UV curable adhesives.
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/finishing-11.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Blind Embossing
											</h5>
											<p>
												Form of relief printing in which dies is pressed on the back of the material to form a raised motif.
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/finishing-8.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Blind Debossing
											</h5>
											<p>
												Form of relief printing in which dies is pressed on the front of the material to form a raised motif.
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/finishing-9.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Registered Embossing
											</h5>
											<p>
												Form of relief printing in which a die is pressed on the back of the material to form a raised motif.
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/finishing-10.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Combination Embossing
											</h5>
											<p>
												Combination between embossing and foil stamping. It creates a 3D motif that features a foil finish. 
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/finishing-12.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Window Patching
											</h5>
											<p>
												Die-cut shape is layered with plastic film to feature a window showcasing the product inside.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="paperWeight" class="sp-single-tab" data-tab-content>
							<div class="row">
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/gsm.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												GSM
											</h5>
											<p>
												Measurement for the density of the paper stock.
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/pt.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												PT
											</h5>
											<p>
												Measurement for the thickness of the paper stock.
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="sp-single-tab-wrap">
										<div class="sp-single-tab-top">
											<img src="/wp-content/uploads/2024/08/flute.webp" alt="" width="" height="">
										</div>
										<div class="sp-single-tab-bottom">
											<h5>
												Flute
											</h5>
											<p>
												Fiberboard arches sandwiched between two linerboards.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	

<section class="sample-kit-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading-wrap">
				<h2 class="all-heading m-0">
					Order a Sample Kit
				</h2>
				<hr>
				<p>
					Don't just imagine – experience excellence up close, as you can check our superior craftsmanship before making your decision by ordering your sample kit.
				</p>
			</div>
			<div class="col-md-6">
				<img src="/wp-content/uploads/2024/08/Sleeve-Box-05-1.webp" alt="Order a Sample Kit">
			</div>
			<div class="col-md-6">
				<?php echo do_shortcode('[contact-form-7 id="e311067" title="Sample Kit"]'); ?>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function () {
  gsap.registerPlugin(ScrollTrigger);

  let navItems = $(".sp-nav-reach li");
  let sections = $("div.your-section-class"); // Target specific sections

  sections.each(function (index, section) {
    let sectionClass = $(section).attr("class").split(" "); // Get the class list of the section

    ScrollTrigger.create({
      trigger: section,
      start: "top center", // Adjust as needed
      end: "bottom center", // Adjust as needed
      onEnter: () => {
        // Find and activate the matching nav item
        navItems.each(function () {
          let navItem = $(this);
          let navClass = navItem.attr("class").split(" ");

          // Check if the classes overlap
          if (sectionClass.some(cls => navClass.includes(cls))) {
            navItems.removeClass("active"); // Remove active from all
            navItem.addClass("active"); // Add active to the matching one
          }
        });
      },
      onLeaveBack: () => {
        // Same logic as `onEnter` to handle scrolling back
        navItems.each(function () {
          let navItem = $(this);
          let navClass = navItem.attr("class").split(" ");

          if (sectionClass.some(cls => navClass.includes(cls))) {
            navItems.removeClass("active");
            navItem.addClass("active");
          }
        });
      }
    });
  });
});



</script>

<script>
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

</script>
<script>
	const tabbs = document.querySelectorAll('[data-tab-targett]')
	const tabContentts = document.querySelectorAll('[data-tab-contentt]')
	tabbs.forEach(tabb => {
		tabb.addEventListener('click', () => {
			const targett = document.querySelector(tabb.dataset.tabTargett)
			tabContentts.forEach(tabContentt => {
				tabContentt.classList.remove('active')
			})
			tabbs.forEach(tabb => {
				tabb.classList.remove('active')
			})
			tabb.classList.add('active')
			targett.classList.add('active')
		})
	});
</script>
<script>
jQuery( document ).ready(function($) {
	$(".read-text").click(function() {
		var $this = jQuery(this);
		var $spShortDescFull = $this.siblings(".text-full");
		$spShortDescFull.toggleClass("read-more-box");
		$(".read-text").text("Read More...");
		if ($spShortDescFull.hasClass("read-more-box")) {
			$(".read-more-box .read-text").text("Read More...");
		} else if ($spShortDescFull.siblings().not('.read-more-box')) {
			$(".read-text").text("Read Less...");
		}else{
			$(".read-text").text("Read More...");
		}
		$(".read-more-box ~ .read-text").text("Read More...");

	});
});

</script>
<script>
	function changeImage3(newSrc, altText) {
		document.getElementById("mymainImage3").src = newSrc;
		document.getElementById("mymainImage3").alt = altText;
	}
</script>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		document.querySelectorAll('#accordion .card-header').forEach(function(element) {
			element.addEventListener('click', function(e) {
				e.preventDefault();
				var parent = this.parentElement;
				if (parent.classList.contains('collapse')) {
					parent.parentElement.classList.add('active');
				} else {
					document.querySelectorAll('#accordion .card-header').forEach(function(item) {
						item.classList.remove('active');
					});
					this.classList.add('active');
				}
			});
		});
	});
</script>

<script>
	$('customselect').change(function() {
    //Use $option (with the "$") to see that the variable is a jQuery object
    var $option = $(this).find('option:selected');

    //Added with the EDIT
    var customselectvalue = $option.val();
    var customselecttext = $option.text();
});
	$("tr").click(function(){
		$('tr').removeClass('selected');
		$(this).addClass('selected');
		var productPrice = $(this).find('.quantity-table--total').text();
		var unitPrice = $(this).find('.quantity-table--unit').text();
		var qtyValue = $(this).find('.qtyValue').text();
		var current_post_id = $('#current_post_id').val();
		var printing= document.getElementById('Printing');
		printingg = printing.options[printing.selectedIndex].text;
		var style= document.getElementById('style');
		stylee = style.options[style.selectedIndex].text;
		var size= document.getElementById('size');
		sizee = size.options[size.selectedIndex].text;
		var size= document.getElementById('size');
		sizee = size.options[size.selectedIndex].text;
		var stock= document.getElementById('stock');
		stockk = stock.options[stock.selectedIndex].text;
		var lamination= document.getElementById('lamination');
		laminationn = lamination.options[lamination.selectedIndex].text;
        $('#productPrice').text(productPrice);
		$('.unitPrice').text(unitPrice);
		$('#qtyValue').text(qtyValue);
		$('a#buyNowLink').attr('href', `/cart?add-to-cart=${current_post_id}&productPrice=${productPrice}&unitPrice=${unitPrice}&product_id=${current_post_id}&printing=${printingg}&style=${stylee}&size=${sizee}&stock=${stockk}&lamination=${laminationn}&quantity=${qtyValue}`);
	});
</script>
<script>
	const tabbs = document.querySelectorAll('[data-tab-targett]')
	const tabContentts = document.querySelectorAll('[data-tab-contentt]')
	tabbs.forEach(tabb => {
		tabb.addEventListener('click', () => {
			const targett = document.querySelector(tabb.dataset.tabTargett)
			tabContentts.forEach(tabContentt => {
				tabContentt.classList.remove('active')
			})
			tabbs.forEach(tabb => {
				tabb.classList.remove('active')
			})
			tabb.classList.add('active')
			targett.classList.add('active')
		})
	});
</script>

<script>
	var select1 = document.getElementById('Printing');
	var select2 = document.getElementById('size');
	var tbody = document.querySelector('#myTbody');
	jQuery("table tbody:nth-of-type(1)").addClass("d-block");
	function getSelectedName(select) {
  var selectedOption = select.options[select.selectedIndex];
  return selectedOption.getAttribute('name');
	}
	function checkAndAddClass() {
  var select1Name = getSelectedName(select1);
  var select2Name = getSelectedName(select2);
	document.querySelectorAll('tbody').forEach(function(tbody) {
    tbody.classList.remove('d-block');
  });
  if (select1Name === 'Full colors' && select2Name === '4x1.75x1.75') {
    document.querySelector('tbody:first-of-type').classList.add('d-block');
  }else if(select1Name === 'None' && select2Name === '4x1.75x1.75'){
	  document.querySelector('tbody:nth-of-type(2)').classList.add('d-block');
  }else if(select1Name === 'Full colors' && select2Name === '3x2x2'){
	  document.querySelector('tbody:nth-of-type(3)').classList.add('d-block');
  }else if(select1Name === 'None' && select2Name === '3x2x2'){
	  document.querySelector('tbody:nth-of-type(4)').classList.add('d-block');
  }else if(select1Name === 'Full colors' && select2Name === '5x1.5x1.5'){
	  document.querySelector('tbody:nth-of-type(5)').classList.add('d-block');
  }else if(select1Name === 'None' && select2Name === '5x1.5x1.5'){
	  document.querySelector('tbody:nth-of-type(6)').classList.add('d-block');
  }else if(select1Name === 'Full colors' && select2Name === '4x2x2'){
	  document.querySelector('tbody:nth-of-type(7)').classList.add('d-block');
  }else if(select1Name === 'None' && select2Name === '4x2x2'){
	  document.querySelector('tbody:nth-of-type(8)').classList.add('d-block');
  }else if(select1Name === 'Full colors' && select2Name === '6x3x3'){
	  document.querySelector('tbody:nth-of-type(9)').classList.add('d-block');
  }else if(select1Name === 'None' && select2Name === '6x3x3'){
	  document.querySelector('tbody:nth-of-type(10)').classList.add('d-block');
  }else {
    tbody.classList.remove('d-block');
  }
}

select1.addEventListener('change', checkAndAddClass);
select2.addEventListener('change', checkAndAddClass);

</script>
<?php get_footer(); ?>