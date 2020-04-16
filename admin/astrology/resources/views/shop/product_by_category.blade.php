@extends('shop.commons.master')
@section('title')
    {{ $title ?? 'Astrology' }}
@endsection
@section('content')
<br><br>
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
<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
                        <div class="shop__sidebar">
                            <aside class="wedget__categories poroduct--cat">
                                <h3 class="wedget__title">Product Categories</h3>
                                <ul>
                                    @foreach($category_list as $cat)
                                    <li><a href="{{ asset('/shop/'.$cat->cat_slug) }}">{{$cat->category}} </a></li>
                                    @endforeach       
                                </ul>
                            </aside>
                            <aside class="wedget__categories pro--range">
                                <h3 class="wedget__title">Call Astrologer</h3>
                                <div class="content-shopby">
                                <img src="{{asset('/shop/images/about/contact.jpg') }}">
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
                                <img src="{{asset('/shop/images/others/banner_left.jpg') }}" alt="banner images">
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
                                    <!-- <div class="shop__list nav justify-content-center" role="tablist">
                                        <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
                                    </div> -->
                                    <p>Category Name ({{$cat_name}})</p>
                                    <!-- <div class="orderby__wrapper">
                                        <span>Recomendation</span>
                                        <select class="shot__byselect" >
                                            <option disabled="Select One" selected>Select One</option>
                                            <option>As Per Zodiac Sign</option>
                                            <option>As Per Astrological Planet</option>
                                            
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                        </div>
    @foreach($product_list as $product)                    
      <div class="p-float">
        <div class="p-float-in">
        <img class="p-img" src="{{ asset('dist/img/product/'.$product->image) }}"/>
        <div class="p-name" style="display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$product->title}}</div>
        <div class="p-price">₹{{$product->price}}</div>
        <!-- <div class="p-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div> -->
        <a class="p-add" href="{{asset('/shop/'.$product->cat_slug.'/'.$product->slug) }}">Buy Now</a>
        </div>
      </div>
    @endforeach
    <h2> Recommendation As Per Zodiac Sign</h2>
    @foreach($product_list as $product)                    
      <div class="p-float">
        <div class="p-float-in">
        <div class="p-name"><?php $zod=json_decode(@$product->zodiac_sign, true); echo @$zod[0];?></div>    
        <img class="p-img" src="{{ asset('dist/img/product/'.$product->image) }}"/>
        <div class="p-name" style="display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$product->title}}</div>
        <div class="p-price">${{$product->price}}</div>
        <!-- <div class="p-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div> -->
        <a class="p-add" href="{{asset('/shop/'.$product->cat_slug.'/'.$product->slug) }}">Buy Now</a>
        </div>
      </div>
    @endforeach
  <h2>Recommendation As Per Astrological Planet</h2>
    @foreach($product_list as $product)                    
      <div class="p-float">
        <div class="p-float-in">
        <div class="p-name">{{$product->planet}}</div>    
        <img class="p-img" src="{{ asset('dist/img/product/'.$product->image) }}"/>
        <div class="p-name" style="display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$product->title}}</div>
        <div class="p-price">${{$product->price}}</div>
        <!-- <div class="p-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div> -->
        <a class="p-add" href="{{asset('/shop/'.$product->cat_slug.'/'.$product->slug) }}">Buy Now</a>
        </div>
      </div>
    @endforeach
            </div>
        </div>
    </div>
</div>    
@endsection