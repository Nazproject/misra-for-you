@extends('shop.commons.master')
@section('title')
    {{ $title ?? 'Astrology' }}
@endsection
@section('content')


<!-- Start Search Popup -->
<div class="brown--color box-search-content search_active block-bg close__top" >
	<form id="search_mini_form" class="minisearch" action="#">
		<div class="field__search">
			<input type="text" placeholder="Search entire store here...">
			<div class="action">
				<a href="#"><i class="zmdi zmdi-search"></i></a>
			</div>
		</div>
	</form>
	<div class="close__wrap">
		<span>close</span>
	</div>
</div>
<!-- End Search Popup -->
<!-- Start Slider area -->
<!-- <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
	
    <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
        <div class="container">
        	<div class="row">
        		<div class="col-lg-12">
        			<div class="slider__content">
            			<div class="contentbox">
            				<h2>Buy <span>your </span></h2>
            				<h2>favourite <span>Book </span></h2>
            				<h2>from <span>Here </span></h2>
		                   	<a class="shopbtn" href="#">shop now</a>
            			</div>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
   
    <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
        <div class="container">
        	<div class="row">
        		<div class="col-lg-12">
        			<div class="slider__content">
            			<div class="contentbox">
            				<h2>Buy <span>your </span></h2>
            				<h2>favourite <span>Book </span></h2>
            				<h2>from <span>Here </span></h2>
		                   	<a class="shopbtn" href="#">shop now</a>
            			</div>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
    
</div>!-->
<!-- End Slider area -->
<!-- Start BEst Seller Area -->


<!-- Start BEst Seller Area -->
<!-- Start NEwsletter Area -->
<section class="wn__newsletter__area bg-image--2">
	<div class="container">
		<br>
		<br>
	</div>
</section>
<br>
<br>
<section>
	<h3 align="center"> Astrologiacal Remedies </h3>
	<br>
	<br>
	<div class="container">
		<div class="row">
			@foreach($product_list as $pro)
			<div class="col-md-3 col-lg-3 col-xs-12">
				<div style="border: 1px solid #545454; width: 250px; height: 250px; box-shadow: 5px 5px 5px 5px #9c9c9c;">
					<img src="{{ asset('dist/img/product/'.$pro->image) }}">
				</div>
				<br>
				<center> <button>BUY NOW</button></center>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- End NEwsletter Area -->
<!-- Start Best Seller Area -->

<!-- Start BEst Seller Area -->
<!-- Start Recent Post Area -->

<!-- End Recent Post Area -->
<!-- Best Sale Area -->
<section class="best-seel-area pt--80 pb--60">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section__title text-center pb--50">
					<h2 class="title__be--2">Best <span class="color--theme">Seller </span></h2>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
				</div>
			</div>
		</div>
	</div>
	<div class="slider center">
		<!-- Single product start -->
		<div class="product product__style--3">
			<div class="product__thumb">
				<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/best-sell-product/1.jpg') }}" alt="product image"></a>
			</div>
			<div class="product__content content--center">
				<div class="action">
					<div class="actions_inner">
						<ul class="add_to_links">
							<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
							<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
							<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
							<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product__hover--content">
					<ul class="rating d-flex">
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Single product end -->
		<!-- Single product start -->
		<div class="product product__style--3">
			<div class="product__thumb">
				<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/best-sell-product/2.jpg') }}" alt="product image"></a>
			</div>
			<div class="product__content content--center">
				<div class="action">
					<div class="actions_inner">
						<ul class="add_to_links">
							<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
							<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
							<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
							<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product__hover--content">
					<ul class="rating d-flex">
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Single product end -->
		<!-- Single product start -->
		<div class="product product__style--3">
			<div class="product__thumb">
				<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/best-sell-product/3.jpg') }}" alt="product image"></a>
			</div>
			<div class="product__content content--center">
				<div class="action">
					<div class="actions_inner">
						<ul class="add_to_links">
							<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
							<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
							<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
							<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product__hover--content">
					<ul class="rating d-flex">
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Single product end -->
		<!-- Single product start -->
		<div class="product product__style--3">
			<div class="product__thumb">
				<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/best-sell-product/4.jpg') }}" alt="product image"></a>
			</div>
			<div class="product__content content--center">
				<div class="action">
					<div class="actions_inner">
						<ul class="add_to_links">
							<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
							<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
							<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
							<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product__hover--content">
					<ul class="rating d-flex">
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Single product end -->
		<!-- Single product start -->
		<div class="product product__style--3">
			<div class="product__thumb">
				<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/best-sell-product/5.jpg') }}" alt="product image"></a>
			</div>
			<div class="product__content content--center">
				<div class="action">
					<div class="actions_inner">
						<ul class="add_to_links">
							<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
							<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
							<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
							<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product__hover--content">
					<ul class="rating d-flex">
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Single product end -->
		<!-- Single product start -->
		<div class="product product__style--3">
			<div class="product__thumb">
				<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/best-sell-product/6.jpg') }}" alt="product image"></a>
			</div>
			<div class="product__content content--center">
				<div class="action">
					<div class="actions_inner">
						<ul class="add_to_links">
							<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
							<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
							<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
							<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product__hover--content">
					<ul class="rating d-flex">
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Single product end -->
		<!-- Single product start -->
		<div class="product product__style--3">
			<div class="product__thumb">
				<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/best-sell-product/7.jpg') }}" alt="product image"></a>
			</div>
			<div class="product__content content--center">
				<div class="action">
					<div class="actions_inner">
						<ul class="add_to_links">
							<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
							<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
							<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
							<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product__hover--content">
					<ul class="rating d-flex">
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Single product end -->
		<!-- Single product start -->
		<div class="product product__style--3">
			<div class="product__thumb">
				<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/best-sell-product/8.jpg') }}" alt="product image"></a>
			</div>
			<div class="product__content content--center">
				<div class="action">
					<div class="actions_inner">
						<ul class="add_to_links">
							<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
							<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
							<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
							<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product__hover--content">
					<ul class="rating d-flex">
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li class="on"><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Single product end -->
	</div>
</section>
<!-- Best Sale Area Area -->
@endsection