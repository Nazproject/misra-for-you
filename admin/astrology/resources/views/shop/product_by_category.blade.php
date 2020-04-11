@extends('shop.commons.master')
@section('title')
    {{ $title ?? 'Astrology' }}
@endsection
@section('content')

<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
				<div class="shop__sidebar">
					<aside class="wedget__categories poroduct--cat">
						<h3 class="wedget__title">Product Categories</h3>
						<ul>
							<li><a href="#">Gemstones <span>(3)</span></a></li>
							<li><a href="#">Rudraraksh <span>(4)</span></a></li>
							<li><a href="#">Yantra <span>(6)</span></a></li>
							<li><a href="#">Navgraha Yantra <span>(7)</span></a></li>
							<li><a href="#">Mala <span>(8)</span></a></li>
							<li><a href="#">Jadi <span>(9)</span></a></li>
							<li><a href="#">Feng Shui <span>(13)</span></a></li>
							<li><a href="#">Romance <span>(20)</span></a></li>
							<li><a href="#">Misc<span>(22)</span></a></li>
							
						</ul>
					</aside>
					<aside class="wedget__categories pro--range">
						<h3 class="wedget__title">Call Astrologer</h3>
						<div class="content-shopby">
						<img src="images/about/contact.jpg">
						</div>
					</aside>
					<aside class="wedget__categories poroduct--tag">
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
					</aside>
					<aside class="wedget__categories sidebar--banner">
						<img src="images/others/banner_left.jpg" alt="banner images">
						<div class="text">
							<h2>new products</h2>
							<h6>save up to <br> <strong>40%</strong>off</h6>
						</div>
					</aside>
				</div>
			</div>
			<div class="col-lg-9 col-12 order-1 order-lg-2">
				<div class="row">
					<div class="col-lg-12">
						<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
							<div class="shop__list nav justify-content-center" role="tablist">
	                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
	                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
	                        </div>
	                        <p>Category Name (Mala)</p>
	                        <div class="orderby__wrapper">
	                        	<span>Recomendation</span>
	                        	<select class="shot__byselect" >
	                        		<option disabled="Select One" selected>Select One</option>
	                        		<option>As Per Zodiac Sign</option>
	                        		<option>As Per Astrological Planet</option>
	                        		
	                        	</select>
	                        </div>
                        </div>
					</div>
				</div>
				<div class="tab__container">
    				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
    					<div class="row">
    						<!-- Start Single Product -->
    						@foreach($product_list as $product)
        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
	        					<div class="product__thumb">
									<a class="first__img" href="{{asset('/shop/'.$product->category.'/'.encrypt($product->id).'?prod='.$product->title.'') }}"><img src="{{ asset('dist/img/product/'.$product->image) }}" alt="product image"></a>
									<a class="second__img animation1" href="{{asset('/shop/'.$product->category.'/'.encrypt($product->id).'?prod='.$product->title.'') }}"><img src="images/books/2.jpg" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALLER</span>
									</div>
								</div>
								<div class="product__content content--center">
									<h4><a href="{{asset('/shop/'.$product->category.'/'.encrypt($product->id).'?prod='.$product->title.'') }}">robin parrish</a></h4>
									<ul class="prize d-flex">
										<li>${{$product->mrp_price}}</li>
										<li class="old_prize">${{$product->price}}</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="{{asset('/shop/'.$product->category.'/'.encrypt($product->id).'?prod='.$product->title.'') }}"><i class="bi bi-shopping-bag4"></i></a></li>
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
        					<!-- End Single Product -->
    						
    					</div>
    					<ul class="wn__pagination">
    						<li class="active"><a href="#">1</a></li>
    						<li><a href="#">2</a></li>
    						<li><a href="#">3</a></li>
    						<li><a href="#">4</a></li>
    						<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
    					</ul>
    				</div>
    				<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
    					<div class="list__view__wrapper">
    						<!-- Start Single Product -->
    						<div class="list__view">
    							<div class="thumb">
    								<a class="first__img" href="single-product.html"><img src="images/product/1.jpg" alt="product images"></a>
    								<a class="second__img animation1" href="single-product.html"><img src="images/product/2.jpg" alt="product images"></a>
    							</div>
    							<div class="content">
    								<h2><a href="single-product.html">Ali Smith</a></h2>
    								<ul class="rating d-flex">
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li><i class="fa fa-star-o"></i></li>
    									<li><i class="fa fa-star-o"></i></li>
    								</ul>
    								<ul class="prize__box">
    									<li>$111.00</li>
    									<li class="old__prize">$220.00</li>
    								</ul>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
    								<ul class="cart__action d-flex">
    									<li class="cart"><a href="cart.html">Add to cart</a></li>
    									<li class="wishlist"><a href="cart.html"></a></li>
    									<li class="compare"><a href="cart.html"></a></li>
    								</ul>

    							</div>
    						</div>
    						<!-- End Single Product -->
    						<!-- Start Single Product -->
    						<div class="list__view mt--40">
    							<div class="thumb">
    								<a class="first__img" href="single-product.html"><img src="images/product/2.jpg" alt="product images"></a>
    								<a class="second__img animation1" href="single-product.html"><img src="images/product/4.jpg" alt="product images"></a>
    							</div>
    							<div class="content">
    								<h2><a href="single-product.html">Blood In Water</a></h2>
    								<ul class="rating d-flex">
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li><i class="fa fa-star-o"></i></li>
    									<li><i class="fa fa-star-o"></i></li>
    								</ul>
    								<ul class="prize__box">
    									<li>$111.00</li>
    									<li class="old__prize">$220.00</li>
    								</ul>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
    								<ul class="cart__action d-flex">
    									<li class="cart"><a href="cart.html">Add to cart</a></li>
    									<li class="wishlist"><a href="cart.html"></a></li>
    									<li class="compare"><a href="cart.html"></a></li>
    								</ul>

    							</div>
    						</div>
    						<!-- End Single Product -->
    						<!-- Start Single Product -->
    						<div class="list__view mt--40">
    							<div class="thumb">
    								<a class="first__img" href="single-product.html"><img src="images/product/3.jpg" alt="product images"></a>
    								<a class="second__img animation1" href="single-product.html"><img src="images/product/6.jpg" alt="product images"></a>
    							</div>
    							<div class="content">
    								<h2><a href="single-product.html">Madeness Overated</a></h2>
    								<ul class="rating d-flex">
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li><i class="fa fa-star-o"></i></li>
    									<li><i class="fa fa-star-o"></i></li>
    								</ul>
    								<ul class="prize__box">
    									<li>$111.00</li>
    									<li class="old__prize">$220.00</li>
    								</ul>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
    								<ul class="cart__action d-flex">
    									<li class="cart"><a href="cart.html">Add to cart</a></li>
    									<li class="wishlist"><a href="cart.html"></a></li>
    									<li class="compare"><a href="cart.html"></a></li>
    								</ul>

    							</div>
    						</div>
    						<!-- End Single Product -->
    						<!-- Start Single Product -->
    						<div class="list__view mt--40">
    							<div class="thumb">
    								<a class="first__img" href="single-product.html"><img src="images/product/4.jpg" alt="product images"></a>
    								<a class="second__img animation1" href="single-product.html"><img src="images/product/6.jpg" alt="product images"></a>
    							</div>
    							<div class="content">
    								<h2><a href="single-product.html">Watching You</a></h2>
    								<ul class="rating d-flex">
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li><i class="fa fa-star-o"></i></li>
    									<li><i class="fa fa-star-o"></i></li>
    								</ul>
    								<ul class="prize__box">
    									<li>$111.00</li>
    									<li class="old__prize">$220.00</li>
    								</ul>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
    								<ul class="cart__action d-flex">
    									<li class="cart"><a href="cart.html">Add to cart</a></li>
    									<li class="wishlist"><a href="cart.html"></a></li>
    									<li class="compare"><a href="cart.html"></a></li>
    								</ul>

    							</div>
    						</div>
    						<!-- End Single Product -->
    						<!-- Start Single Product -->
    						<div class="list__view mt--40">
    							<div class="thumb">
    								<a class="first__img" href="single-product.html"><img src="images/product/5.jpg" alt="product images"></a>
    								<a class="second__img animation1" href="single-product.html"><img src="images/product/9.jpg" alt="product images"></a>
    							</div>
    							<div class="content">
    								<h2><a href="single-product.html">Court Wings Run</a></h2>
    								<ul class="rating d-flex">
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li class="on"><i class="fa fa-star-o"></i></li>
    									<li><i class="fa fa-star-o"></i></li>
    									<li><i class="fa fa-star-o"></i></li>
    								</ul>
    								<ul class="prize__box">
    									<li>$111.00</li>
    									<li class="old__prize">$220.00</li>
    								</ul>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
    								<ul class="cart__action d-flex">
    									<li class="cart"><a href="cart.html">Add to cart</a></li>
    									<li class="wishlist"><a href="cart.html"></a></li>
    									<li class="compare"><a href="cart.html"></a></li>
    								</ul>
    							</div>
    						</div>
    						<!-- End Single Product -->
    					</div>
    				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection