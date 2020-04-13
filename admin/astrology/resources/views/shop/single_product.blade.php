@extends('shop.commons.master')
@section('title')
    {{ $title ?? 'Astrology' }}
@endsection
@section('content')
<br><br>
<div class="maincontent bg--white pt--80 pb--55">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-12">
				<div class="wn__single__product">
					<h2>{{$product_list->title}}</h2>
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="wn__fotorama__wrapper">
    							<div class="fotorama wn__fotorama__action" data-nav="thumbs">
        							  <a href="{{ asset('dist/img/product/'.$product_list->image) }}"><img src="{{ asset('dist/img/product/'.$product_list->image) }}" alt=""></a>
        							   <!-- <a href="2.jpg"><img src="images/product/2.jpg" alt=""></a>
        							  <a href="3.jpg"><img src="images/product/3.jpg" alt=""></a>
        							  <a href="4.jpg"><img src="images/product/4.jpg" alt=""></a>
        							  <a href="5.jpg"><img src="images/product/5.jpg" alt=""></a>
        							  <a href="6.jpg"><img src="images/product/6.jpg" alt=""></a>
        							  <a href="7.jpg"><img src="images/product/7.jpg" alt=""></a>
        							  <a href="8.jpg"><img src="images/product/8.jpg" alt=""></a> -->
    							</div>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="product__info__main">
								
								<!-- <div class="product-reviews-summary d-flex">
									<ul class="rating-summary d-flex">
										<li><i class="zmdi zmdi-star-outline"></i></li>
										<li><i class="zmdi zmdi-star-outline"></i></li>
										<li><i class="zmdi zmdi-star-outline"></i></li>
										<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
										<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
									</ul>
								</div> -->
								<div class="price-box">
									<span>${{$product_list->price}}</span>
								</div>
								<div class="product__overview">
									<p>{!!$product_list->first_description!!}</p>
									
								</div>
								<!-- <div class="product__overview">
									<p>Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth <strong>DESCRIPTION-2</strong>   blocks out the wind as ribbed cuffs and bottom band seal in body heat.</p>
									
								</div> -->
								<form action="{{asset('/shop/addToCart')}}" method="POST">
                    			@csrf
                    			<input type="hidden" name="slug" value="{{$product_list->slug}}">
								<div class="box-tocart d-flex">
									<span>Qty</span>
									<input id="qty" class="input-text qty" name="qty" min="1" value="1" title="Qty" type="number">
									<div class="addtocart__actions">
										<button class="tocart" type="submit" title="Add to Cart">Add To Cart</button>
									</div>
									<!-- <div class="product-addto-links clearfix">
										<a class="wishlist" href="#"></a>
										<a class="compare" href="#"></a>
									</div> -->
								</div>
								</form>
								<div class="box-tocart d-flex">
									<div class="addtocart__actions">
										<button class="tocart" type="submit" title="Add to Cart">Buy Now</button>
									</div>
									<!-- <div class="product-addto-links clearfix">
										<a class="wishlist" href="#"></a>
										<a class="compare" href="#"></a>
									</div> -->
								</div>
								
								<!-- <div class="product_meta">
									<span class="posted_in">Categories: 
										<a href="#">Adventure</a>, 
										<a href="#">Kids' Music</a>
									</span>
								</div> -->
								<div class="product-share">
									<ul>
										<li class="categories-title">Choose Carat :</li>
										<li style="border: 1px solid orange; width: 50px; height: 30px;">
											1
										</li>
										<li style="border: 1px solid orange; width: 50px; height: 30px;">
											2
										</li>
										<li style="border: 1px solid orange; width: 50px; height: 30px;">
											3
										</li>
										<li style="border: 1px solid orange; width: 50px; height: 30px;">
											4
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="product__info__detailed">
					<div class="pro_details_nav nav justify-content-start" role="tablist">
                        <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">FAQ</a>
                    </div>
                    <div class="tab__container">
                    	<!-- Start Single Tab Content -->
                    	<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
							<div class="description__attribute">
								<p>{!!$product_list->second_description!!}</p>
								<!-- <ul>
									<li>• Two-tone gray heather hoodie.</li>
									<li>• Drawstring-adjustable hood. </li>
									<li>• Machine wash/dry.</li>
								</ul> -->
							</div>
                    	</div>
                    	<!-- End Single Tab Content -->
                    	<!-- Start Single Tab Content -->
                    	<div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
                    		<p>{!!$product_list->faq!!}</p>
							<!-- <div class="review__attribute">
								<h1>Customer Reviews</h1>
								<h2>Hastech</h2>
								<div class="review__ratings__type d-flex">
									<div class="review-ratings">
										<div class="rating-summary d-flex">
											<span>Quality</span>
	    									<ul class="rating d-flex">
												<li><i class="zmdi zmdi-star"></i></li>
												<li><i class="zmdi zmdi-star"></i></li>
												<li><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
	    									</ul>
										</div>

										<div class="rating-summary d-flex">
											<span>Price</span>
	    									<ul class="rating d-flex">
												<li><i class="zmdi zmdi-star"></i></li>
												<li><i class="zmdi zmdi-star"></i></li>
												<li><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
	    									</ul>
										</div>
										<div class="rating-summary d-flex">
											<span>value</span>
	    									<ul class="rating d-flex">
												<li><i class="zmdi zmdi-star"></i></li>
												<li><i class="zmdi zmdi-star"></i></li>
												<li><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
	    									</ul>
										</div>
									</div>
									<div class="review-content">
										<p>Hastech</p>
										<p>Review by Hastech</p>
										<p>Posted on 11/6/2018</p>
									</div>
								</div>
							</div>
							<div class="review-fieldset">
								<h2>You're reviewing:</h2>
								<h3>Chaz Kangeroo Hoodie</h3>
								<div class="review-field-ratings">
									<div class="product-review-table">
										<div class="review-field-rating d-flex">
											<span>Quality</span>
											<ul class="rating d-flex">
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
	    									</ul>
										</div>
										<div class="review-field-rating d-flex">
											<span>Price</span>
											<ul class="rating d-flex">
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
	    									</ul>
										</div>
										<div class="review-field-rating d-flex">
											<span>Value</span>
											<ul class="rating d-flex">
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
												<li class="off"><i class="zmdi zmdi-star"></i></li>
	    									</ul>
										</div>
									</div>
								</div>
								<div class="review_form_field">
									<div class="input__box">
										<span>Nickname</span>
										<input id="nickname_field" type="text" name="nickname">
									</div>
									<div class="input__box">
										<span>Summary</span>
										<input id="summery_field" type="text" name="summery">
									</div>
									<div class="input__box">
										<span>Review</span>
										<textarea name="review"></textarea>
									</div>
									<div class="review-form-actions">
										<button>Submit Review</button>
									</div>
								</div>
							</div> -->
                    	</div>
                    	<!-- End Single Tab Content -->
                    </div>
				</div>
				<div class="wn__related__product pt--80 pb--50">
					<div class="section__title text-center">
						<h2 class="title__be--2">Related Products</h2>
					</div>
					<div class="row mt--60">
						<div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
							<!-- Start Single Product -->
							@foreach($related_product as $prod)
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="single-product.html"><img src="{{ asset('dist/img/product/'.$prod->image) }}" alt="product image"></a>
									<a class="second__img animation1" href="single-product.html"><img src="{{ asset('dist/img/product/'.$prod->image) }}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALLER</span>
									</div>
								</div>
								<div class="product__content content--center">
									<h4><a href="single-product.html" style="display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$prod->title}}</a></h4>
									<ul class="prize d-flex">
										<li>${{$prod->mrp_price}}</li>
										<li class="old_prize">${{$prod->price}}</li>
									</ul>
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
									<!-- <div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div> -->
								</div>
							</div>
							@endforeach
							<!-- Start Single Product -->
							<!-- Start Single Product -->
							<!-- <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/books/3.jpg') }}" alt="product image"></a>
									<a class="second__img animation1" href="single-product.html"><img src="{{ asset('shop/images/books/4.jpg') }}" alt="product image"></a>
									<div class="hot__box color--2">
										<span class="hot-label">HOT</span>
									</div>
								</div>
								<div class="product__content content--center">
									<h4><a href="single-product.html">The Remainng</a></h4>
									<ul class="prize d-flex">
										<li>$35.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
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
							</div> -->
							<!-- Start Single Product -->
							<!-- Start Single Product -->
							<!-- <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/books/7.jpg') }}" alt="product image"></a>
									<a class="second__img animation1" href="single-product.html"><img src="{{ asset('shop/images/books/8.jpg') }}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">HOT</span>
									</div>
								</div>
								<div class="product__content content--center">
									<h4><a href="single-product.html">Lando</a></h4>
									<ul class="prize d-flex">
										<li>$35.00</li>
										<li class="old_prize">$50.00</li>
									</ul>
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
							</div> -->
							<!-- Start Single Product -->
							<!-- Start Single Product -->
							<!-- <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/books/9.jpg') }}" alt="product image"></a>
									<a class="second__img animation1" href="single-product.html"><img src="{{ asset('shop/images/books/10.jpg') }}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">HOT</span>
									</div>
								</div>
								<div class="product__content content--center">
									<h4><a href="single-product.html">Doctor Wldo</a></h4>
									<ul class="prize d-flex">
										<li>$35.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
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
							</div> -->
							<!-- Start Single Product -->
							<!-- Start Single Product -->
							<!-- <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/books/11.jpg') }}" alt="product image"></a>
									<a class="second__img animation1" href="single-product.html"><img src="{{ asset('shop/images/books/2.jpg') }}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALER</span>
									</div>
								</div>
								<div class="product__content content--center content--center">
									<h4><a href="single-product.html">Animals Life</a></h4>
									<ul class="prize d-flex">
										<li>$50.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
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
							</div> -->
							<!-- Start Single Product -->
							<!-- Start Single Product -->
							<!-- <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="single-product.html"><img src="{{ asset('shop/images/books/1.jpg') }}" alt="product image"></a>
									<a class="second__img animation1" href="single-product.html"><img src="{{ asset('shop/images/books/6.jpg') }}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALER</span>
									</div>
								</div>
								<div class="product__content content--center content--center">
									<h4><a href="single-product.html">Olio Madu</a></h4>
									<ul class="prize d-flex">
										<li>$50.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
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
							</div> -->
							<!-- Start Single Product -->
						</div>
					</div>
				</div>
		
			</div>
			<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
				<div class="shop__sidebar">
					<aside class="wedget__categories poroduct--cat">
						<h3 class="wedget__title">Product Categories</h3>
						<ul>
							@foreach($category_list as $cat)
							<li><a href="{{ asset('shop/'.$cat->category) }}">{{$cat->category}}</a></li>
							@endforeach
						</ul>
					</aside>
					<aside class="wedget__categories pro--range">
						<h3 class="wedget__title">Call Astrologer</h3>
						<div class="content-shopby">
						<img src="{{ asset('shop/images/about/contact.jpg') }}">
						</div>
					</aside>
					
					<!-- <aside class="wedget__categories poroduct--tag">
						<h3 class="wedget__title">People Also Searched For!</h3>
						<ul>
							<li><a href="#">Jupiter Gemstone</a></li>
							
							<li><a href="#">Moon Gemstone</a></li>
							
							
							<li><a href="#">Saturn Gemstone</a></li>
							
							<li><a href="#">Guru Yantra</a></li>
							
							<li><a href="#">Nau Mukhi Rudrakash</a></li>
							<li><a href="#">Coral/Moonga</a></li>
							
							<li><a href="#">Sphatik Mala</a></li>
						</ul>
					</aside> -->
					<aside class="wedget__categories sidebar--banner">
						<img src="{{ asset('shop/images/others/banner_left.jpg') }}" alt="banner images">
						<div class="text">
							<h2>new products</h2>
							<h6>save up to <br> <strong>40%</strong>off</h6>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End main Content -->
<!-- Start Search Popup -->
<div class="box-search-content search_active block-bg close__top">
	<form id="search_mini_form--2" class="minisearch" action="#">
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
@endsection