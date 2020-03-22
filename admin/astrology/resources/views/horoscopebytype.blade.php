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
                    <li><a href="signs.html" class="font13 text-info">{{$type}}</a>
                    </li>
                    <!--<li>
                        <img src="{{asset('frontend/images/right-arrow1.png')}}" alt="arrow" class="blog_right_arrow">
                    </li>
                     <li><span class="active text-primary font13"></span>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!--=============== Header Section End ===============-->
<!--=============== Body Section Start ===============-->
<div class="container" style="background-image: url({{asset('frontend/images/astro_slider6.jpg')}});">
    <div class="row">
        <div class="col-md-8 col-xs-12 m-t-40">
           <!-- <span class="text-primary font35"><img
                    src="images/leo-sign.png"
                    alt="logo missing"> Leo Horoscope </span>-->
                    <h3 style="color: white;"> Daily Astrology For All Zodiac Signs</h3>
                    <h4 style="color: white;">हिंदी में पढ़े - आज का राशिफल</h4>
                   <div class="row games_thumnail">

                    <a href="horoscope.html">
                        <div class="col-sm-3 col-xs-3 m-t-40">
                            <img src="{{asset('frontend/images/Aries1.jpg')}}" class="img-responsive center-block" alt="loading">
                        </div>
                    </a>

                    <a href="horoscope.html">


                        <div class="col-sm-3 col-xs-3 m-t-40">
                            <img src="{{asset('frontend/images/Taurus1.jpg')}}" class="img-responsive center-block" alt="loading">
                        </div>
                    </a>

                    <a href="horoscope.html">

                              <div class="col-sm-3 col-xs-3 m-t-40">
                            <img src="{{asset('frontend/images/Gemini1.jpg')}}" class="img-responsive center-block" alt="loading">
                        </div>
                    </a>


                    <a href="horoscope.html">
                         <div class="col-sm-3 col-xs-3 m-t-40">
                            <img src="{{asset('frontend/images/Cancer1.jpg')}}" class="img-responsive center-block" alt="loading">
                        </div>
                    </a>




                    </div>
                      <div class="row games_thumnail">
                        <a href="horoscope.html">
                        <div class="col-sm-3 col-xs-3 m-t-40">
                            <img src="{{asset('frontend/images/Leo1.jpg')}}" class="img-responsive center-block" alt="loading">
                        </div>
                    </a>

                    <a href="horoscope.html">
                        <div class="col-sm-3 col-xs-3 m-t-40">
                            <img src="{{asset('frontend/images/Virgo1.jpg')}}" class="img-responsive center-block" alt="loading">
                        </div>
                    </a>

                    <a href="horoscope.html">
                         <div class="col-sm-3 col-xs-3 m-t-40">
                            <img src="{{asset('frontend/images/Libra1.jpg')}}" class="img-responsive center-block" alt="loading">
                        </div>
                    </a>

                    <a href="horoscope.html">
                         <div class="col-sm-3 col-xs-3 m-t-40">
                            <img src="{{asset('frontend/images/Scorpio1.jpg')}}" class="img-responsive center-block" alt="loading">
                        </div>

                    </a>


                    </div>
                    <div class="row games_thumnail">
                        <a href="horoscope.html">
                        <div class="col-sm-3 col-xs-3 m-t-40">
                            <img src="{{asset('frontend/images/Sagittarius1.jpg')}}" class="img-responsive center-block" alt="loading">
                        </div>
                    </a>
                    <a href="horoscope.html">
                        <div class="col-sm-3 col-xs-3 m-t-40">
                            <img src="{{asset('frontend/images/Capricorn1.jpg')}}" class="img-responsive center-block" alt="loading">
                        </div>
                    </a>

                    <a href="horoscope.html">
                            <div class="col-sm-3 col-xs-3 m-t-40">
                            <img src="{{asset('frontend/images/Aquarius1.jpg')}}" class="img-responsive center-block" alt="loading">
                        </div>
                    </a>

                    <a href="horoscope.html">
                         <div class="col-sm-3 col-xs-3 m-t-40">
                            <img src="{{asset('frontend/images/Pisces1.jpg')}}" class="img-responsive center-block" alt="loading">
                        </div>
                    </a>
                    </div>
       <!--  <div class="clearfix visible-xs-block"></div>
            <span class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">(July 23 - August 22)</span>
            <div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs elements_desc signsingle_nav" role="tablist">
                        <li class="active">
                            <a href="#tab1" role="tab" data-toggle="tab"><span class="font14 blog_pre">Yesterday</span></a>
                        </li>
                        <li>
                            <a href="#tab2" role="tab" data-toggle="tab"><span class="font14">Today</span></a>
                        </li>
                        <li>
                            <a href="#tab3" role="tab" data-toggle="tab"><span class="font14">Tomorrow</span></a>
                        </li>
                        <li>
                            <a href="#tab4" role="tab" data-toggle="tab"><span class="font14">This Week</span></a>
                        </li>
                        <li>
                            <a href="#tab5" role="tab" data-toggle="tab" class="tab_active"><span class="font14">This Month</span></a>
                        </li>
                        <li>
                            <a href="#tab6" role="tab" data-toggle="tab"><span class="font14">Daily Overview</span></a>
                        </li>
                        <li>
                            <a href="#tab7" role="tab" data-toggle="tab"><span class="font14">2017</span></a>
                        </li>
                    </ul>
                    <div class="tab-content tab_singlepost">
                        <div class="tab-pane active" id="tab1">
                            <div class="row">
                                <div class="col-xs-6 text-primary elements_desc">Tuesday, July 5th, 2016</div>
                                <div class="col-xs-6 text-right elements_desc">
                                    <a href="#">
                                        <i class="fa fa-facebook-square header_icons fa-lg"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter-square header_icons fa-lg"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus-square header_icons fa-lg" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="elements_desc">
                                        You'll find that things are slipping nicely into place for you today, Leo. Your
                                        persuasive
                                        manner
                                        and gentle nudges are just enough to get people where you want them. Control is
                                        all yours if you
                                        want it. Remember that you need to be willing to accept the blame for failure as
                                        well as praise
                                        for
                                        success. Any risks you take today, however, are likely to work out in your
                                        favor.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <div class="row">
                                <div class="col-xs-6 text-primary elements_desc">Wednesday, July 6th, 2016</div>
                                <div class="col-xs-6 text-right elements_desc">
                                    <a href="#"><i class="fa fa-facebook-square header_icons fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square header_icons fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus-square header_icons fa-lg"
                                                   aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="elements_desc">
                                        Vero voluptas voluptatum. Aperiam asperiores autem deserunt doloremque incidunt
                                        laudantium minima modi, placeat quam quisquam saepe similique tempore
                                        voluptates?
                                        Accusamus laboriosam nam officiis quam sunt?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3">
                            <div class="row">
                                <div class="col-xs-6 text-primary elements_desc">Thursday, July 7th, 2016</div>
                                <div class="col-xs-6 text-right elements_desc"><a href="#"><i
                                        class="fa fa-facebook-square header_icons fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square header_icons fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus-square header_icons fa-lg"
                                                   aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="elements_desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes,
                                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                        pretium
                                        quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel,
                                        aliquet
                                        nec, vulputate
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab4">
                            <div class="row">
                                <div class="col-xs-6 text-primary elements_desc">Wednesday, July 6th, 2016</div>
                                <div class="col-xs-6 text-right elements_desc"><a href="#"><i
                                        class="fa fa-facebook-square header_icons fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square header_icons fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus-square header_icons fa-lg"
                                                   aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="elements_desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes,
                                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                        pretium
                                        quis, sem. Nulla consequat massa
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab5">
                            <div class="row">
                                <div class="col-xs-6 text-primary elements_desc">Wednesday, July 6th, 2016</div>
                                <div class="col-xs-6 text-right elements_desc"><a href="#"><i
                                        class="fa fa-facebook-square header_icons fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square header_icons fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus-square header_icons fa-lg"
                                                   aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="elements_desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes,
                                        nascetur ridiculus mus. Donec quam felis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6">
                            <div class="row">
                                <div class="col-xs-6 text-primary elements_desc">Wednesday, July 6th, 2016</div>
                                <div class="col-xs-6 text-right elements_desc"><a href="#"><i
                                        class="fa fa-facebook-square header_icons fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square header_icons fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus-square header_icons fa-lg"
                                                   aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="elements_desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes,
                                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                        pretium
                                        quis, sem. Nulla consequat massa quis enim. Donec pede justo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab7">
                            <div class="row">
                                <div class="col-xs-6 text-primary elements_desc">Wednesday, July 6th, 2016</div>
                                <div class="col-xs-6 text-right elements_desc"><a href="#"><i
                                        class="fa fa-facebook-square header_icons fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square header_icons fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus-square header_icons fa-lg"
                                                   aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="elements_desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes,
                                        nascetur ridiculus mus. Donec quam felis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>!-->
            <p style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

            </p>
         <!--   <div class="row">
                <div class="col-xs-12 m-t-26">
                    <i class="fa fa-envelope header_icons" aria-hidden="true"></i>
                    <span class="text-info"> Send me horoscope by email</span>
                </div>
            </div>!-->
            <section class="hr_bottom_align">
                <div class="row">
                    <p style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    </p>
                </div>
                <hr>
                <div class="m-t-40 swiper-container single_swiper">
                    <p style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    </p>
                </div>
            </section>
            <div class="row m-t-26">
                <p style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                </p>
            </div>
            <div class="row m-t-40">
                <p style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                </p>
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
<!--=============== Body Section End ===============-->
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