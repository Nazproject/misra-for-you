<header id="wn__header" class="header__area header__absolute sticky__header" style="background-color: orange;">
	<div class="container-fluid" >
		<div class="row">
			<div class="col-md-6 col-sm-6 col-6 col-lg-2">
				<div class="logo">
					<a href="{{ asset('/') }}">
						<img src="{{ asset('shop/images/logo/logo2.png') }}" alt="logo images">
					</a>
				</div>
			</div>
			<div class="col-lg-8 d-none d-lg-block">
				<nav class="mainmenu__nav">
					<ul class="meninmenu d-flex justify-content-start">
						<!-- <li class="drop with--one--item"><a href="index.html">Home</a></li> -->
						<li class="drop"><a href="{{ asset('/shops') }}">Shop</a>
							<!--<div class="megamenu mega03">
								<ul class="item item03">
									<li class="title">Shop Layout</li>
									<li><a href="shop-grid.html">Shop Grid</a></li>
									<li><a href="single-product.html">Single Product</a></li>
								</ul>
								<ul class="item item03">
									<li class="title">Shop Page</li>
									<li><a href="my-account.html">My Account</a></li>
									<li><a href="cart.html">Cart Page</a></li>
									<li><a href="checkout.html">Checkout Page</a></li>
									<li><a href="wishlist.html">Wishlist Page</a></li>
									<li><a href="error404.html">404 Page</a></li>
									<li><a href="faq.html">Faq Page</a></li>
								</ul>
								<ul class="item item03">
									<li class="title">Bargain Books</li>
									<li><a href="shop-grid.html">Bargain Bestsellers</a></li>
									<li><a href="shop-grid.html">Activity Kits</a></li>
									<li><a href="shop-grid.html">B&N Classics</a></li>
									<li><a href="shop-grid.html">Books Under $5</a></li>
									<li><a href="shop-grid.html">Bargain Books</a></li>
								</ul>
							</div>-->
						</li>
								<li class="drop"><a href="#">Product Category</a>
							<div class="megamenu dropdown">
								<ul class="item item01">
									@foreach($category_list as $cat)
									<li><a href="{{ asset('/shop/'.$cat->cat_slug) }}">{{$cat->category}}</a></li>
									@endforeach
								</ul>
							</div>
						</li>
						<li class="drop"><a href="#">Astrologer Suggestion</a>
							
						</li>
						
					</ul>
				</nav>
			</div>
			<div class="col-md-6 col-sm-6 col-6 col-lg-2">
				<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
					
					<li class="wishlist"><a href="#"></a></li>
					<li class="shopcart"><a href="{{asset('/shop/checkout')}}"><span class="product_qun">
						<?php echo @$cart_items;?>
					</span></a>
						<!-- Start Shopping Cart -->
					<!--	<div class="block-minicart minicart__active">
							<div class="minicart-content-wrapper">
								<div class="micart__close">
									<span>close</span>
								</div>
								<div class="items-total d-flex justify-content-between">
									<span>3 items</span>
									<span>Cart Subtotal</span>
								</div>
								<div class="total_amount text-right">
									<span>$66.00</span>
								</div>
								<div class="mini_action checkout">
									<a class="checkout__btn" href="cart.html">Go to Checkout</a>
								</div>
								<div class="single__items">
									<div class="miniproduct">
										<div class="item01 d-flex">
											<div class="thumb">
												<a href="product-details.html"><img src="images/product/sm-img/1.jpg" alt="product images"></a>
											</div>
											<div class="content">
												<h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
												<span class="prize">$30.00</span>
												<div class="product_prize d-flex justify-content-between">
													<span class="qun">Qty: 01</span>
													<ul class="d-flex justify-content-end">
														<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
														<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item01 d-flex mt--20">
											<div class="thumb">
												<a href="product-details.html"><img src="images/product/sm-img/3.jpg" alt="product images"></a>
											</div>
											<div class="content">
												<h6><a href="product-details.html">Impulse Duffle</a></h6>
												<span class="prize">$40.00</span>
												<div class="product_prize d-flex justify-content-between">
													<span class="qun">Qty: 03</span>
													<ul class="d-flex justify-content-end">
														<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
														<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item01 d-flex mt--20">
											<div class="thumb">
												<a href="product-details.html"><img src="images/product/sm-img/2.jpg" alt="product images"></a>
											</div>
											<div class="content">
												<h6><a href="product-details.html">Compete Track Tote</a></h6>
												<span class="prize">$40.00</span>
												<div class="product_prize d-flex justify-content-between">
													<span class="qun">Qty: 03</span>
													<ul class="d-flex justify-content-end">
														<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
														<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="mini_action cart">
									<a class="cart__btn" href="cart.html">View and edit cart</a>
								</div>
							</div>
						</div>-->
						<!-- End Shopping Cart -->
					</li>
					<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
						<div class="searchbar__content setting__block">
							<div class="content-inner">
								<!--<div class="switcher-currency">
									<strong class="label switcher-label">
										<span>Currency</span>
									</strong>
									<div class="switcher-options">
										<div class="switcher-currency-trigger">
											<span class="currency-trigger">USD - US Dollar</span>
											<ul class="switcher-dropdown">
												<li>GBP - British Pound Sterling</li>
												<li>EUR - Euro</li>
											</ul>
										</div>
									</div>
								</div>-->
							<!--	<div class="switcher-currency">
									<strong class="label switcher-label">
										<span>Language</span>
									</strong>
									<div class="switcher-options">
										<div class="switcher-currency-trigger">
											<span class="currency-trigger">English01</span>
											<ul class="switcher-dropdown">
												<li>English02</li>
												<li>English03</li>
												<li>English04</li>
												<li>English05</li>
											</ul>
										</div>
									</div>
								</div>-->
							<!--	<div class="switcher-currency">
									<strong class="label switcher-label">
										<span>Select Store</span>
									</strong>
									<div class="switcher-options">
										<div class="switcher-currency-trigger">
											<span class="currency-trigger">Fashion Store</span>
											<ul class="switcher-dropdown">
												<li>Furniture</li>
												<li>Shoes</li>
												<li>Speaker Store</li>
												<li>Furniture</li>
											</ul>
										</div>
									</div>
								</div>-->
								<div class="switcher-currency">
									<strong class="label switcher-label">
										<span>My Account</span>
									</strong>
									<div class="switcher-options">
										<div class="switcher-currency-trigger">
											<div class="setting__menu">
												
												<span><a href="#">My Account</a></span>
												
												<span><a href="#">Sign In</a></span>
												<span><a href="#">Create An Account</a></span>
												<span><a href="#">My Wishlist</a></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- Start Mobile Menu -->
		<div class="row d-none">
			<div class="col-lg-12 d-none">
				<nav class="mobilemenu__nav">
					<ul class="meninmenu">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">Shop</a>
							
						</li>
						<li class="drop"><a href="#">Product Category</a>
							<div class="megamenu dropdown">
								<ul class="item item01">
									@foreach($category_list as $cat)
									<li><a href="#">{{$cat->category}}</a></li>
									@endforeach
									
								</ul>
							</div>
						</li>
						
						<li><a href="contact.html">Astrologer Suggestion</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- End Mobile Menu -->
        <div class="mobile-menu d-block d-lg-none">
        </div>
        <!-- Mobile Menu -->	
	</div>		
</header>