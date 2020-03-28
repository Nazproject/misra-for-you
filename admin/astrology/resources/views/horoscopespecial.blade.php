@extends('layouts.include.frontend.master')
@section('title')
    {{$title}}
@endsection
@section('content')

<section class="index_center card_text" style="background-image: url({{asset('frontend/images/body_image.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="m-t-20 bg-white breadcrumb text-center">
                    <li>
                        <a href="index-2.html" class="font13">Home</a>
                    </li>
                    <li>
                        <img src="{{asset('frontend/images/right-arrow1.png')}}" alt="arrow" class="blog_right_arrow">
                    </li>
                    <li>
                        <a href="blog.html" class="font13 text-info">{{$slug}}</a>
                    </li>
                    <li>
                        <img src="{{asset('frontend/images/right-arrow1.png')}}" alt="arrow" class="blog_right_arrow">
                    </li>
                    <li>
                        <span class="active text-primary font13">{{$special}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--=============== Header Section End ===============-->
<!--=============== Body Section Start ===============-->
<div class="container">
    <div class="row">
        <div class="col-md-8 m-t-26 hr_bottom_align">
            <h1 class="text-primary" style="color: black;">{{ucfirst($slug)}} <?php if($special=="stock_market"){echo "Stock Market Predictions";}else{echo ucfirst($special)." Horoscope";}?> {{date('Y')}}</h1>
            <hr>
            <div class="row">
                <div class="col-sm-4 col-xs-5 m-t-40">
                    <img src="{{asset('dist/img/horoscope/'.@$list->filename.'')}}" alt="image loading" class="img-responsive">
                    <h1 class="text_primary m-t-40" style="color: black;">Mishra4You Shop</h1>
                    <hr>
                    <div class="row wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="col-sm-6 m-t-20">
                            <img src="{{asset('frontend/images/add6.jpg')}}" alt="image loading" class="img-responsive"/>
                            <a href="#">
                               
                            </a>
                        </div>
                        <div class="col-sm-6 m-t-20">
                            <img src="{{asset('frontend/images/add7.jpg')}}" alt="image loading" class="img-responsive"/>
                            <a href="#">
                               
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 m-t-20">
                            <img src="{{asset('frontend/images/add8.jpg')}}" alt="image loading" class="img-responsive"/>
                            <a href="#">
                               
                            </a>
                        </div>
                        <div class="col-sm-6 m-t-20">
                            <img src="{{asset('frontend/images/add9.jpg')}}" alt="image loading" class="img-responsive"/>
                            <a href="#">
                                
                            </a>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-12 blog_margin_list1">
                            <img src="{{asset('frontend/images/add10.jpg')}}" alt="blog" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 blog_single_para content_margin">
                	{!! @$list->$special !!}
                    <!-- <span class="text-info font30 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
                        HEADING-1
                    </span>
                    <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">The second real is the
                        so-called astral plane. This is where human spirits abide in between
                        lifetimes, the spirit world. This is the realm a medium usually connects to, whether it is
                        directly or through a spirit guide. Because the spirits in this realm aren't limited by the
                        three-dimensional existence in the time-space continuum.</p>
                    <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">Nevertheless, the information
                        found here is usually of a human nature.</p> 
                    <h4 class="text-primary content_margin wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" style="color: black;">
                        HEADING-2
                    </h4>
                    <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">The third realm lies beyond
                        the astral and could be called the spiritual plane. Its various
                        layers are the abode of nature spirits, enlightened beings, angels, and other divine messengers.
                        This is the realm a channelling.</p>
                    <h4 class="text-primary content_margin wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" style="color: black;">
                        HEADING-3
                    </h4>
                    <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">The lowest or densest layer
                        is the physical plane. This is where humans spend their lives in
                        material bodies endowed with the physical senses of perception. Here, we are going through prep
                        school, as it were. We're learning all kinds of lessons to develop our soul.</p>
                    <h4 class="text-primary content_margin wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s" style="color: black;">
                        HEADING-4
                    </h4>
                    <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">Have you ever wondered about
                        what might be the difference between a medium and a channelling
                        medium? In popular modern language, there seems to be no difference between "medium" and
                        "channel." </p>
                    <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">After all, what else is a
                        medium but a channel of info. Yet, there is quite a difference between
                        the two. According to many traditions, there are various levels of existence, although the
                        numbers given often vary. One thing all these traditions agree on, however, is that there are
                        three basic realms. For simplicity's sake, you can imagine them like the layers of an
                        onion. </p>
                    <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">Sometimes, you may get
                        answers that don't seem to make immediate sense. Don't dismiss them; let
                        them sink in for a while. After all, the reasoning comes from the outer reaches of the universe
                        and is designed to help you find a mode of existence you perhaps couldn't even envision before!
                        The more you think about the reading, the more it will apply to your life!</p> -->
                    <hr class="content_margin">
                   
                </div>
            </div>
        </div>
          <div class="col-md-4 col-xs-12 m-t-40" style="background-color: white;">
            <div class="row">
                <div class="col-xs-12">
                    <h5 class="text-center bg-info text-white right_sidebar_dimension font14">Mishra4You TV</h5>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 font16 games_align">
            <img src="{{asset('frontend/images/mishra4youTV.jpg')}}" style="height: 150px; width: 350px;">
            <center>
            <button>Subscribe</button></center>
                    <hr class="hr_margin">
                </div>
            </div>
           <section>
            <h4>Mishra4You Astrology</h4>
               <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'English')">English</button>
  <button class="tablinks" onclick="openCity(event, 'Hindi')">Hindi</button>
  <button class="tablinks" onclick="openCity(event, 'Astrology 2020')">Astrology 2020</button>
</div>

<div id="English" class="tabcontent" style="display: none;">
  <ul>
      <li style="list-style-type: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <hr class="hr_margin">
  </ul>
</div>

<div id="Hindi" class="tabcontent" style="display: none;">
  <ul>
      <li style="list-style-type: none;">स्थिति विनिमय आवश्यकत होसके सके। तरहथा। अर्थपुर्ण विचरविमर्श दारी बनाना</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">स्थिति विनिमय आवश्यकत होसके सके। तरहथा। अर्थपुर्ण विचरविमर्श दारी बनाना</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">स्थिति विनिमय आवश्यकत होसके सके। तरहथा। अर्थपुर्ण विचरविमर्श दारी बनाना</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">स्थिति विनिमय आवश्यकत होसके सके। तरहथा। अर्थपुर्ण विचरविमर्श दारी बनाना</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">स्थिति विनिमय आवश्यकत होसके सके। तरहथा। अर्थपुर्ण विचरविमर्श दारी बनाना</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">स्थिति विनिमय आवश्यकत होसके सके। तरहथा। अर्थपुर्ण विचरविमर्श दारी बनाना</li>
      <hr class="hr_margin">
  </ul> 
</div>

<div id="Astrology 2020" class="tabcontent" style="display: none;">
 <ul>
      <li style="list-style-type: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <hr class="hr_margin">
      <li style="list-style-type: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <hr class="hr_margin">
  </ul>
</div>

           </section>
         <!--   <div>
                <h1 class="aries_color  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">Popular Quizes</h1>
            </div>!
            <div class="arrows_align">
                <a href="#">
                    <i class="fa fa-long-arrow-left previous-arrow text-info" aria-hidden="true"></i>
                </a> &nbsp;&nbsp;
                <a href="#">
                    <i class="fa fa-long-arrow-right next-arrow text-info" aria-hidden="true"></i>
                </a>
            </div>
            <hr class="hr_margin">
            <div class="row common_margin">
                <div class="col-xs-12 first-set">
                    <div class="swiper-container love-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                                <p class="font16 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <a href="#" class="text-info color-info">What Sign Should You Date?</a><br>
                                    <small class="text-cancer font13">10 Questions</small>
                                </p>
                                <hr class="hr_margin">
                                <p class="font16 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <a href="#" class="text-info color-info">What intuitive power do You Have?</a><br>
                                    <small class="text-cancer font13">12 Questions</small>
                                </p>

                                <hr class="hr_margin">
                                <p class="font16 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <a href="#" class="text-info color-info">What element are you?</a><br>
                                    <small class="text-cancer font13">8 Questions</small>
                                </p>
                                <hr class="hr_margin">

                                <p class="font16 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <a href="#" class="text-info color-info">What's your real top priority in life?</a><br>
                                    <small class="text-cancer font13">11 Questions</small>
                                </p>
                                <hr class="hr_margin">
                                <p class="font16 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">
                                    <a href="#" class="text-info color-info">What's In Your Immediate Future?</a><br>
                                    <small class="text-cancer font13">15 Questions</small>
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <p class="font16 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <a href="#" class="text-info color-info">What Sign Should You Date?</a><br>
                                    <small class="text-cancer font13">10 Questions</small>
                                </p>
                                <hr class="hr_margin">
                                <p class="font16 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <a href="#" class="text-info color-info">What intuitive power do You Have?</a><br>
                                    <small class="text-cancer font13">12 Questions</small>
                                </p>

                                <hr class="hr_margin">
                                <p class="font16 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <a href="#" class="text-info color-info">What element are you?</a><br>
                                    <small class="text-cancer font13">8 Questions</small>
                                </p>
                                <hr class="hr_margin">

                                <p class="font16 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <a href="#" class="text-info color-info">What's your real top priority in life?</a><br>
                                    <small class="text-cancer font13">11 Questions</small>
                                </p>
                                <hr class="hr_margin">
                                <p class="font16 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">
                                    <a href="#" class="text-info color-info">What's In Your Immediate Future?</a><br>
                                    <small class="text-cancer font13">15 Questions</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>!-->
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="aries_color  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s">
                        Buy Gemstones
                    </h1>
                    <hr class="hr_margin">
                </div>
            </div>
            <div class="row common_margin">
               <ul>
                 <li style="list-style-type: none;"><img src="{{asset('frontend/images/gemstone1.jpg')}}" style="height: 150px; width: 350px;" ></li>  
                  <hr class="hr_margin">
                  <li style="list-style-type: none;"><img src="{{asset('frontend/images/gemstone2.jpg')}}" style="height: 150px; width: 350px;" ></li>  
                  <hr class="hr_margin">
                  <li style="list-style-type: none;"><img src="{{asset('frontend/images/gemstone3.jpg')}}" style="height: 150px; width: 350px;" ></li>  
                  <hr class="hr_margin">
                  <li style="list-style-type: none;"><img src="{{asset('frontend/images/gemstone4.jpg')}}" style="height: 150px; width: 350px;" ></li>  
                  <hr class="hr_margin">
               </ul>
            </div>
        </div>
    </div>
</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
@endsection