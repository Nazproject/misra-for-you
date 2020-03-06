@extends('layouts.include.frontend.master')

@section('content')
<!--=============== Body Section Start ===============-->
<!--=============== Revolution slider Start ===============-->
<section class="home_revolution_slider">
    <div class="tp-banner-container rev_slider_wrapper fullwidthbanner-container" data-alias="news-hero72">
        <div class="tp-banner-slider">
            <ul>
                <li data-index="rs-1" data-transition="random-premium" data-slotamount="default" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0">
                    <img src="{{ asset('frontend/images/astro_slider_bg1.jpg') }}" alt="image-missing" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" data-bgparallax="10" data-no-retina
                         data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100"
                         data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
                         data-offsetend="0 0">

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption home_subtitle sft tp-resizeme rs-parallaxlevel-7 hidden-xs"
                         data-x="center" data-hoffset="0"
                         data-y="-20" data-voffset="-140"
                         data-speed="1000"
                         data-start="3500"
                         data-easing="Power4.easeInOut"
                         data-endeasing="power1.easeIn"
                         data-splitin="words"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"

                         style="z-index: 3; white-space: nowrap;color: #ffffff;font-weight: 700;font-size:24px;font-family: 'hind', sans-serif; line-height: 30pt;">Welcome to
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin customout tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="20" data-voffset="-100"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000"
                         data-start="4500"
                         data-easing="Back.easeOut"
                         data-endspeed="300"
                         style="z-index: 4;color: #fff;font-size: 40px;font-weight: 700;font-family: 'montserrat', sans-serif;">The Best Astrology Template
                    </div>
                    <div class="tp-caption zoomIn"
                         data-x="center" data-hoffset="0"
                         data-y="-10"
                         data-speed="2500"
                         data-start="1000"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-endeasing="Power1.easeIn"
                         style="z-index: 11"><img src="{{ asset('frontend/images/sun.png') }}" alt="image-missing">
                    </div>
                    <div class="tp-caption lfb hidden-xs"
                         data-x="680" data-hoffset="0"
                         data-y="317"
                         data-speed="2500"
                         data-start="1500"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-endeasing="Power1.easeIn"
                         style="z-index: 11"><img src="{{ asset('frontend/images/4.png') }}" alt="image-missing">
                    </div>
                    <div class="tp-caption lfb hidden-xs"
                         data-x="390" data-hoffset="0"
                         data-y="300"
                         data-speed="2500"
                         data-start="2000"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-endeasing="Power1.easeIn"
                         style="z-index: 11"><img src="{{ asset('frontend/images/6.png') }}" alt="image-missing">
                    </div>
                    <div class="tp-caption lft hidden-xs"
                         data-x="760" data-hoffset="0"
                         data-y="315"
                         data-speed="2500"
                         data-start="2500"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-endeasing="Power1.easeIn"
                         style="z-index: 11"><img src="{{ asset('frontend/images/5.png') }}" alt="image-missing">
                    </div>
                    <div class="tp-caption lfr hidden-xs"
                         data-x="300" data-hoffset="0"
                         data-y="350"
                         data-speed="2500"
                         data-start="3000"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-endeasing="Power1.easeIn"
                         style="z-index: 11"><img src="{{ asset('frontend/images/2.png') }}" alt="image-missing">
                    </div>
                    <div class="tp-caption lft hidden-xs"
                         data-x="900" data-hoffset="0"
                         data-y="300"
                         data-speed="2500"
                         data-start="3000"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-endeasing="Power1.easeIn"
                         style="z-index: 11"><img src="{{ asset('frontend/images/8.png') }}" alt="image-missing">
                    </div>
                    <div class="tp-caption lfr hidden-xs"
                         data-x="50" data-hoffset="0"
                         data-y="290"
                         data-speed="2500"
                         data-start="1500"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-endeasing="Power1.easeIn"
                         style="z-index: 11"><img src="{{ asset('frontend/images/3.png') }}" alt="image-missing">
                    </div>
                    <div class="tp-caption lfr hidden-xs"
                         data-x="240" data-hoffset="0"
                         data-y="440"
                         data-speed="2500"
                         data-start="2000"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-endeasing="Power1.easeIn"
                         style="z-index: 11"><img src="{{ asset('frontend/images/7.png') }}" alt="image-missing">
                    </div>
                    <div class="tp-caption lfb hidden-md hidden-xs hidden-sm"
                         data-x="800" data-hoffset="0"
                         data-y="195"
                         data-speed="2500"
                         data-start="2500"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-endeasing="Power1.easeIn"
                         style="z-index: 11"><img src="{{ asset('frontend/images/6.png') }}" alt="image-missing">
                    </div>

                    <div class="tp-caption grey_heavy_72 sfr tp-resizeme rs-parallaxlevel-0 hidden-xs index_btn" data-x="center"
                         data-y="105" data-speed="2000" data-start="5500" data-easing="Power3.easeInOut"
                         data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                         style="z-index: 5;color: #fff;font-family: 'Montserrat',sans-serif;">

                        <a href="https://themeforest.net/checkout/from_item/18153621?license=regular&amp;size=source&amp;ref=lcrm" class="btn btn-danger btn-md text-center button_hover"

                           style="z-index: 5;font-size:18px;color: #111;padding:5px 15px;border-color: #fff;border-width: 3px;background-color: #fff;">Purchase Now</a>
                    </div>

                </li>
                <li data-index="rs-2" data-transition="random-premium" data-slotamount="default" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0">
                    <img src="{{ asset('frontend/images/astro_slider2.jpg') }}" alt="image-missing" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" data-bgparallax="10" data-no-retina
                         data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100"
                         data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
                         data-offsetend="0 0">

                    <!-- LAYER NR. 1 -->

                    <div class="tp-caption zoomIn"
                         data-x="center"
                         data-y="0"
                         data-speed="2500"
                         data-start="1000"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-endeasing="Power1.easeIn"
                         style="z-index: 11"><img src="{{ asset('frontend/images/leo-sign1.png') }}" alt="image-missing">
                    </div>

                    <div class="tp-caption home_title sfl tp-resizeme"
                         data-x="center"
                         data-y="50"
                         data-splitin="chars"
                         data-speed="300"
                         data-start="2000"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 3; color: #fff; font-size: 38px; letter-spacing: 2px; font-family: 'Montserrat',sans-serif; font-weight: 700;">Know Your Astrology
                    </div>
                    <div class="tp-caption skewfromleftshort hidden-xs"
                         data-x="center"
                         data-hoffset="0"
                         data-y="125"
                         data-speed="800"
                         data-start="5000"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6; color: #fff; font-size: 24px;">"The unreal has no existence; the real never ceases to be.
                    </div>

                    <div class="tp-caption skewfromrightshort hidden-xs"
                         data-x="center"
                         data-hoffset="0"
                         data-y="160"
                         data-speed="800"
                         data-start="5000"
                         data-splitin="chars"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6; color: #fff; font-size: 24px;">Knowers of truth have realized this."
                    </div>

                    <!-- LAYER NR. 2 -->

                    <div class="tp-caption lfb"
                         data-x="-105" data-hoffset="0"
                         data-y="345"
                         data-speed="2500"
                         data-start="3400"
                         data-easing="Power4.easeOut"
                         data-endspeed="400"
                         data-endeasing="Power1.easeIn"
                         style="z-index: 11"><img src="{{ asset('frontend/images/background.png') }}" alt="image-missing" width="1342">
                    </div>

                    <!-- LAYER NR. 3 -->

                    <div class="tp-caption grey_heavy_72 sfr tp-resizeme rs-parallaxlevel-0 hidden-xs" data-x="center"
                         data-y="240" data-speed="2000" data-start="5500" data-easing="Power3.easeInOut"
                         data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                         style="z-index: 5;color: #fff;font-family: 'Montserrat',sans-serif;">

                        <a href="https://themeforest.net/checkout/from_item/18153621?license=regular&amp;size=source&amp;ref=lcrm" class="btn btn-danger btn-md text-center button_hover"

                           style="z-index: 5;font-size:18px;color: #111;padding:5px 15px;border-color: #fff;border-width: 3px;background-color: #fff;">Purchase Now</a>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</section>
<!--=============== Revolution slider Start ===============-->
<section class="home_bg">
    <div class="container">
        <div class="row home_alignment">
            <div class="col-md-12 text-center">
                <div class="bg-white button_margin pic_margin">
                    <h1 class="text-primary font35 home_padding">Free
                        Daily Horoscopes</h1>
                    <div class="home_head center-block"></div>
                    <p class="elements_desc">What kind of day will it be for you today? Use your free horoscope to plan your day, every day -
                        instantly!</p>
                    <div class="row home_align">
                        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="sign_circle bg-aries">
                                <img src="{{ asset('frontend/images/aries-sign.png') }}" alt="image-missing" class="rotate">
                            </div>
                            <a href="signs_single_post.html" class="main">
                                <div class="sign_card text-center signs_bg">
                                    <span class="text-aries signs_clr font16">Aries</span><br>
                                    <span class="signtext_clr font12">Mar 21 - Apr 19</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="sign_circle bg-taurus">
                                <img src="{{ asset('frontend/images/taurus.png') }}" alt="image-missing" class="rotate">
                            </div>
                            <a href="signs_single_post.html" class="main">
                                <div class="sign_card text-center signs_bg">
                                    <span class="text-taurus signs_clr font16">Taurus</span><br>
                                    <span class="signtext_clr font12">Apr 20 - May 20</span>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="sign_circle bg-gemini">
                                <img src="{{ asset('frontend/images/gemini.png') }}" alt="image-missing" class="rotate">
                            </div>
                            <a href="signs_single_post.html" class="main">
                                <div class="sign_card text-center signs_bg">
                                    <span class="text-gemini signs_clr font16">Gemini</span><br>
                                    <span class="signtext_clr font12">May 21 - Jun 20</span>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="sign_circle bg-cancer">
                                <img src="{{ asset('frontend/images/cancer.png') }}" alt="image-missing" class="rotate">
                            </div>
                            <a href="signs_single_post.html" class="main">
                                <div class="sign_card text-center signs_bg">
                                    <span class="text-cancer signs_clr font16">Cancer</span><br>
                                    <span class="signtext_clr font12">Jun 21 - Jul 22</span>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="sign_circle bg-leo">
                                <img src="{{ asset('frontend/images/leo.png') }}" alt="image-missing" class="rotate">
                            </div>
                            <a href="signs_single_post.html" class="main">
                                <div class="sign_card text-center signs_bg">
                                    <span class="text-leo signs_clr font16">Leo</span><br>
                                    <span class="signtext_clr font12">Jul 23 - Aug 22</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="sign_circle bg-virgo">
                                <img src="{{ asset('frontend/images/virgo.png') }}" alt="image-missing" class="rotate">
                            </div>
                            <a href="signs_single_post.html" class="main">
                                <div class="sign_card text-center signs_bg">
                                    <span class="text-virgo signs_clr font16">Virgo</span><br>
                                    <span class="signtext_clr font12">Aug 23 - Sep 22</span>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="sign_circle bg-libra">
                                <img src="{{ asset('frontend/images/libra.png') }}" alt="image-missing" class="rotate">
                            </div>
                            <a href="signs_single_post.html" class="main">
                                <div class="sign_card text-center signs_bg">
                                    <span class="text-libra signs_clr font16">Libra</span><br>
                                    <span class="signtext_clr font12">Sep 23 - Oct 22</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="sign_circle bg-scorpio">
                                <img src="{{ asset('frontend/images/scorpio.png') }}" alt="image-missing" class="rotate">
                            </div>
                            <a href="signs_single_post.html" class="main">
                                <div class="sign_card text-center signs_bg">
                                    <span class="text-scorpio signs_clr font16">Scorpio</span><br>
                                    <span class="signtext_clr font12">Oct 23 - Nov 21</span>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="sign_circle bg-sagittarius">
                                <img src="{{ asset('frontend/images/sagittarius.png') }}" alt="image-missing" class="rotate">
                            </div>
                            <a href="signs_single_post.html" class="main">
                                <div class="sign_card text-center signs_bg">
                                    <span class="text-sagittarius signs_clr font16">Sagittarius</span><br>
                                    <span class="signtext_clr font12">Nov 22 - Dec 21</span>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="sign_circle bg-capricorn">
                                <img src="{{ asset('frontend/cimages/capricorn.png') }}" alt="image-missing" class="rotate">
                            </div>
                            <a href="signs_single_post.html" class="main">
                                <div class="sign_card text-center signs_bg">
                                    <span class="text-capricorn signs_clr font16">Capricorn</span><br>
                                    <span class="signtext_clr font12">Dec 22 - Jan 19</span>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="sign_circle bg-aquarius">
                                <img src="{{ asset('frontend/images/aquarius.png') }}" alt="image-missing" class="rotate">
                            </div>
                            <a href="signs_single_post.html" class="main">
                                <div class="sign_card text-center signs_bg">
                                    <span class="text-aquarius signs_clr font16">Aquarius</span><br>
                                    <span class="signtext_clr font12">Jan 20 - Feb 18</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInDown pic_margin" data-wow-duration="1s"
                             data-wow-delay="0.2s">
                            <div class="sign_circle bg-pisces">
                                <img src="{{ asset('frontend/images/pisces.png') }}" alt="image-missing" class="rotate">
                            </div>
                            <a href="signs_single_post.html" class="main">
                                <div class="sign_card text-center signs_bg">
                                    <span class="text-pisces signs_clr font16">Pisces</span><br>
                                    <span class="signtext_clr font12">Feb 19 - Mar 20</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="bg-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 home_margin">
                <h2 class="text-white font35">We Reveal Your
                    Life Partner</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-3 elements_desc">
                        <label class="text-white font18" for="name">I am a:</label>
                        <input type="text" id="name" class="bg-white form-control"
                               placeholder="Woman looking for a man">
                    </div>
                    <div class="col-md-2 col-sm-2 elements_desc">
                        <label class="text-white font18" for="zip">Near ZIP:</label>
                        <input type="text" id="zip" class="bg-white form-control">
                    </div>
                    <div class="col-md-2 home_dob col-sm-3 elements_desc">
                        <label class="text-white font18">My Birthday:</label>
                        <select class="home_select form-control bg-white">
                            <option value="">Choose</option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-2 home_dob elements_desc home_date">
                        <!--<label></label>-->
                        <select class="home_select1 form-control bg-white">
                            <option value="">Choose</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-2 home_dob elements_desc home_date">
                        <!--<label></label>-->
                        <select class="home_select2 form-control bg-white">
                            <option value="">Choose</option>
                            <option>1990</option>
                            <option>1991</option>
                            <option>1992</option>
                            <option>1993</option>
                            <option>1994</option>
                            <option>1995</option>
                            <option>1996</option>
                            <option>1997</option>
                            <option>1998</option>
                            <option>1999</option>
                            <option>2000</option>
                            <option>2001</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="btn_adjust">
                            <a href="{{ asset('frontend/index-2.html') }}" class="btn btn-info btn-md btn_align">Show My Matches
                                <i class="fa fa-search btn_icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 m-t-40">
                <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">Top Stories</h1>
                <hr class="hr_margin">
                <div class="row common_margin">
                    <div class="col-xs-12 font16">
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                            <i class="fa fa-circle text-libra font14" aria-hidden="true"></i> &nbsp;
                            <span class="text-libra">Libra</span>:
                            <span class="text-info">Signs a Libra hates you</span>
                        </p>
                        <hr class="hr_margin">
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="fa fa-circle text-taurus font14" aria-hidden="true"></i> &nbsp;
                            <span class="text-taurus">Taurus</span>:
                            <span class="text-info">Ease Taurus's Financial Stress</span>
                        </p>
                        <hr class="hr_margin">
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="fa fa-circle text-gemini font14" aria-hidden="true"></i> &nbsp;
                            <span class="text-gemini">Gemini</span>:
                            <span class="text-info">Summer Love for Gemini</span>
                        </p>
                        <hr class="hr_margin">
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                            <i class="fa fa-circle text-aries font14" aria-hidden="true"></i> &nbsp;
                            <span class="text-aries">Aries</span>:
                            <span class="text-info">Aries Should Explore</span>
                        </p>
                        <hr class="hr_margin">
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="fa fa-circle text-cancer font14" aria-hidden="true"></i> &nbsp;
                            <span class="text-cancer">Cancer</span>:
                            <span class="text-info">The Smartest Investments</span>
                        </p>
                        <hr class="hr_margin">
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s">
                            <i class="fa fa-circle text-virgo font14" aria-hidden="true"></i> &nbsp;
                            <span class="text-virgo">Virgo</span>:
                            <span class="text-info">Virgo's Own Mistakes</span>
                        </p>
                        <hr class="hr_margin">
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
                            <i class="fa fa-circle text-sagittarius font14" aria-hidden="true"></i> &nbsp;
                            <span class="text-sagittarius">Sagittarius</span>:
                            <span class="text-info">Always Aiming High</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 m-t-40">
                <h1 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">Card of the Day</h1>
                <hr>
                <div class="row common_margin">
                    <div class="col-md-4 col-sm-3 col-xs-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                        <img src="{{ asset('frontend/images/card.jpg') }}" class="img-responsive p-t-5" alt="card missing"/>
                    </div>
                    <div class="col-md-8 col-sm-9 col-xs-8 games_content_align">
                        <h4 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">THE CHARIOT</h4>
                        <p class="text-info wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s"> As a priest,
                            the Pope or the best Hierophant, represents all those
                            traditional values and morals of development. He is the wisely teacher / counselor
                            guiding the ones who won’t give up or the ones who are not the...
                        </p>
                        <a href="{{ asset('frontend/signs_single_post.html') }}" class="text-primary home_view">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 m-t-40">
                <div>
                    <h1 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s">Popular Quizes</h1>
                </div>
                <div class="arrows_align">
                    <a href="#"><i class="fa fa-long-arrow-left previous-arrow text-info" aria-hidden="true"></i></a>
                    &nbsp;&nbsp;<a href="#"><i class="fa fa-long-arrow-right next-arrow text-info" aria-hidden="true"></i></a>
                </div>
                <hr class="hr_margin">
                <div class="row common_margin">
                    <div class="col-xs-12 first-set">
                        <div class="swiper-container love-swiper">
                            <div class="swiper-wrapper">
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
                                <div class="swiper-slide">
                                    <p class="font16">
                                        <a href="#" class="text-info color-info">What Sign Should You Date?</a><br>
                                        <small class="text-cancer font13">12 Questions</small>
                                    </p>
                                    <hr class="hr_margin">
                                    <p class="font16">
                                        <a href="#" class="text-info color-info">What intuitive power do You Have?</a><br>
                                        <small class="text-cancer font13">8 Questions</small>
                                    </p>

                                    <hr class="hr_margin">
                                    <p class="font16">
                                        <a href="#" class="text-info color-info">What element are you?</a><br>
                                        <small class="text-cancer font13">10 Questions</small>
                                    </p>
                                    <hr class="hr_margin">
                                    <p class="font16">
                                        <a href="#" class="text-info color-info">What's your real top priority in life?</a><br>
                                        <small class="text-cancer font13">15 Questions</small>
                                    </p>
                                    <hr class="hr_margin">
                                    <p class="font16">
                                        <a href="#" class="text-info color-info">What's In Your Immediate Future?</a><br>
                                        <small class="text-cancer font13">11 Questions</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sign_single button_margin">
    <div class="container">
        <div class="row btn_footer">
            <div class="home_margin">
                <div class="col-xs-9">
                    <h4 class="text-white">Today's Deal</h4>
                    <h1 class="font35 text-white games_content_align m-b-25">July Premium Horoscope</h1>
                    <p class="text-white btn_footer"> Things are ready to boil over in at least one area you've
                        wanted more action! That means well-needed changes. Get advice on how to handle heightened
                        situations in
                        your life with help from your July Premium Horoscope...</p>
                    <a href="#" class="btn btn-primary btn-lg">Get This Reading For Free</a>
                </div>
                <div class="col-xs-3 home_circle">
                    <p class="text-white text-center font35 free">Free Deal</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 m-t-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                <h1 class="text-primary text-center">Magic Love Ball</h1>
                <hr>
                <p class="text-info">Need quick, fun answers and advice about your love life? Ask the Magic Love
                    Ball...
                </p>
                <img src="{{ asset('frontend/images/home_pic1.png') }}" class="img-responsive" alt="Image missing"/>
            </div>
            <div class="col-md-4 m-t-40 button_margin wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                <h1 class="text-primary text-center">What 2016 Brings You</h1>
                <hr>
                <p class="text-info">Discover what 2016 holds for you & what should you start planning for:</p>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="footer_text_height">
                            <li><a href="{{ asset('frontend/signs_single_post.html') }}" class="text-info">Aries</a></li>
                            <li><a href="{{ asset('frontend/signs_single_post.html') }}" class="text-info">Taurus</a></li>
                            <li><a href="{{ asset('frontend/signs_single_post.html') }}" class="text-info">Gemini</a></li>
                            <li><a href="{{ asset('frontend/signs_single_post.html') }}" class="text-info">Cancer</a></li>
                            <li><a href="{{ asset('frontend/signs_single_post.html') }}" class="text-info">Leo</a></li>
                            <li><a href="{{ asset('frontend/signs_single_post.html') }}" class="text-info">Virgo</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="footer_text_height">
                            <li><a href="{{ asset('frontend/signs_single_post.html') }}" class="text-info">Libra</a></li>
                            <li><a href="{{ asset('frontend/signs_single_post.html') }}" class="text-info">Scorpio</a></li>
                            <li><a href="{{ asset('frontend/signs_single_post.html') }}" class="text-info">Sagittarius</a></li>
                            <li><a href="{{ asset('frontend/signs_single_post.html') }}" class="text-info">Capricorn</a></li>
                            <li><a href="{{ asset('frontend/signs_single_post.html') }}" class="text-info">Aquarius</a></li>
                            <li><a href="{{ asset('frontend/signs_single_post.html') }}" class="text-info">Pisces</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 m-t-40 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s">
                <h1 class="text-primary text-center">Do You Two Match Up?</h1>
                <hr>
                <p class="text-info">Are your Sun Signs a perfect match, or will it take effort to make it work?</p>
                <a href="love_compatibility.html">
                    <img src="{{ asset('frontend/images/home_pic.png') }}" class="img-responsive home_pic1" alt="Image missing"/>
                    <div class="blog_text blog_text1"></div>
                    <span class="text_image text-white">Read more</span></a>
            </div>
        </div>
    </div>
</section>
@endsection
