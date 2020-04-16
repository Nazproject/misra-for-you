@extends('shop.commons.master')
@section('title')
    {{ $title ?? 'Astrology' }}
@endsection
@section('content')
<style>
       /* Float container */
      #p-float {
        max-width: 1200px;
        margin: 0 auto;
        /* Clearfix */
        overflow: auto;
      }
      #p-float::after {
        /* Clearfix */
        content: "";
        clear: both;
        display: table;
      }
      /* Product items */
      div.p-float {
        float: left;
        width: 25%;
      }
      div.p-float-in {
        box-sizing: border-box;
        margin: 5px; 
        padding: 10px;
        border: 1px solid #f2dcdc;
        background: #fff7f7;
      }
      img.p-img {
        width: 100%;
        height: auto;
      }
      div.p-name {
        font-weight: bold;
        font-size: 1.1em;
      }
      div.p-price {
        color: #f44242;
      }
      div.p-desc {
        color: #888;
        font-size: 0.9em;
      }
      button.p-add {
        background: #f46b41;
        color: #fff;
        border: none;
        width: 100%;
        padding: 10px;
        margin: 10px 5px 5px 5px;
        font-size: 1.1em;
        font-weight: bold;
        cursor: pointer;
      }
      /* Responsive */
      @media only screen and (max-width: 1024px) {
        div.p-float { width: 33%; }
      }
      @media only screen and (max-width: 600px) {
        div.p-float { width: 50%; }
      }
      /* [DOES NOT MATTER] */
      html, body {
        padding: 0;
        margin: 0;
        font-family: arial, sans-serif;
      }
 </style>
<br>
<br>
<br>
<br>
<h2 align="center" style="color:#f46b41;">Mishra 4 You Shop</h2>

@foreach($product_list as $product)	
  	<div class="p-float">
  		<div class="p-float-in">
  			<div>
  				<img class="p-img" style="height: 180px;width: 100%;" src="{{ asset('dist/img/product/'.$product->image) }}"/>
  			</div>
			
		    <div class="p-name" style="display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$product->title}}</div>
		    <div class="p-price">₹{{$product->price}}</div>
		    <!-- <div class="p-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div> -->
		    <a class="p-add" href="{{asset('/shop/'.$product->category.'/'.$product->slug) }}">Buy Now</a>
		</div>
  	</div>
@endforeach 
<br> 	
<br> 
<br> 
<br> 
<br> 

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
		@foreach($product_list as $product)	
		<div class="product product__style--3">
			<div class="product__thumb">
				<a class="first__img" href="single-product.html"><img style="height: 180px;width: 100%;" src="{{ asset('dist/img/product/'.$product->image) }}" alt="product image"></a>
			</div>
			<div class="product__content content--center">
				<div class="action">
					<div class="actions_inner">
						<ul class="add_to_links">
							<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
							<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
							
						</ul>
					</div>
				</div>
				
			</div>
		</div>
		@endforeach
		<!-- Single product end -->
	</div>
</section>
	<!-- Best Sale Area Area -->


@endsection