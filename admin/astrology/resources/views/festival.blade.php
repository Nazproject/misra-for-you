@extends('layouts.include.frontend.master')
@section('title')
    {{ $title ?? 'Astrology' }}
@endsection
@section('content')
<style type="text/css">
    .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>

<div style="background-image: url({{ asset('frontend/images/ganesh3.jpg') }});">
<div class="container" style="background-color: #4a4a4a;">
    <div class="row">
        <div class="col-md-8 col-xs-12 m-t-40">
           <!-- <span class="text-primary font35"><img
                    src="images/leo-sign.png"
                    alt="logo missing"> Leo Horoscope </span>-->
                    <h3 style="color: orange;"> Hindu Festivals 2020 and Mahurat</h3>
                    <h4 style="color: white;">हिंदी में पढ़े</h4>
             
                      
                   
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
            <p style="color: white;">Hinduism is known for its rich cultural and religious bases in the entire world. Some of the Hindu festivals like Holi and Diwali are celebrated across the world by the people belonging to different religions and cultures. Indian festivals have gone through transformations through the timeline and have gained new importance and meanings. Festivals also strengthen the bond between people and are known to bring prosperity and in their lives. This is why, we have provided you a Hindu Panchang that gives you the detailed information about Hindu festivals that are celebrated in India as well as in different parts of the world.
The dates of these festivals are based on the dynamics and position of the Moon and the Sun in the celestial belt. The timings, auspicious mahurats and dates of these festivals may vary at different places depending on the difference in location and time zones. 
In Indian Hindu culture, festivals are known are Tyohar or Parva, and most of the festivals include the practice of fasting. These fasts are of different types, for on some Tyohars, on fasts for the whole day and on others one fasts until the moon appears in the sky.

            </p>
         <!--   <div class="row">
                <div class="col-xs-12 m-t-26">
                    <i class="fa fa-envelope header_icons" aria-hidden="true"></i>
                    <span class="text-info"> Send me horoscope by email</span>
                </div>
            </div>!-->
            <section class="hr_bottom_align">
                <div class="row">
                    <h3 style="color: orange; margin-left: 40px;"> Significance of Hindu Festivals </h3>
                    <p style="color: white; margin-left: 80px;" >In the Hindu culture, festivals carry a great deal of importance. These are the days when people from different backgrounds, classes, and cultures come together to celebrate the joys and philosophy of life. It is often seen that people from different parts of the world come to India to participate in festivals for the sake for taking back memories filled with colors, joy, music, togetherness and an idea of social sharing of happiness and acceptance. People gather to celebrate great deeds of Gods, Goddesses, Gurus, Saints and prophets. 
Hindu festivals symbolize the rich philosophy, spirituality and literature of the land. The process of celebration includes recitation of ancient japs, preparation of a variety of food items and worshipping of idols. The effect of this atmosphere proves to bring these positive aspects in the lives of the people – 
 

                    </p>
                   <ul style="color: orange;">
<li>   Festivals motivate people to share love, happiness and create a sense of togetherness. </li>
<li>  Teachings of the purpose and philosophy of life for the new generation.</li>
<li>  Teachings of the purpose and philosophy of life for the new generation.</li>
<li>  Provide a comfort from the hustle bustle and repetition of life.</li>
<li> Teachings to create a positive and peaceful lifestyle.</li>
<li> •  Moral, ethical and cultural values. </li>


</ul>
                </div>
                <hr>
                <div class="m-t-40 swiper-container single_swiper">
<h3 style="color: orange; margin-left: 40px;"> Significance of Mahurats in Hindu Culture  </h3>
                    <p style="color: white;">In Hinduism, consulting astrologers before doing an important task, ritual or taking a major life decision is considered as of great significance. The time when these important decisions are taken is called Mahurat. It is believed that to get the best out of something, it is necessary to do it at the right time. The Mahurats can be both favorable (choghadiya, hora) as well as unfavorable (rahu, kaal) based on the positions of the celestial bodies.
Hindu Panchang specifies a time range during which the rituals and other religions practices are carried out in order to get maximum benefits and make positive changes in their lives. The mahurat is made of a combination of holy Vaar (Day), Nakshatra (Stars), Tithi (Date), Karan, Yog in the Panchang. 

                    </p>
                </div>
            </section>
            <div class="row m-t-26">
                 <h3 style="color: orange; margin-left: 40px;">Hindu Festivals: The Panchang and the Celestial Cycles </h3>
                <p style="color: white;  margin-left: 20px;">Most of the Hindu festivals are celebrated on the basis of lunar cycles, but there are some exceptions like Pongal, Vaisakhi and Sankranti, as these are celebrated according to the solar cycle. In most of the cases, the festivals are celebrated of the lunar phenomenon like New Moon, Full Moon or the after-Moon phase. The day of these festivals is same I every region of India but the date varies according to the type of calendar being used. According to the astrology, Hindu Panchang consists of five different aspects that decide the mahurat. Below is information regarding these limbs of the Panchang.
                    <ul style="color: orange;">
<li> Tithi: This limb of Panchang is what we call “Date”, a Lunar month in astrology is divided into two parts called Paksha. These Paksha are Krishna Paksha and Shukla Paksha. Each Paksha comprises 15 tithis each, and both of these come together to make a month of 30 days.</li>
<li>  Vaar: Also known as “Day”, a Hindu week consists of 7 Vaars. </li>
<li>  Yog: A Yog is also popularly known as “Luni-Solar Day”. Vedic astrology contains 27 Yogas and these carry great importance.</li>
<li> Karan: Karan or “Half-lunar Day” is a main limb of Vedic astrology. A month comprises 60 Karan out of these, seven are movable while four are fixed Karan.</li>
<li> Nakshatra: According to Hindu Astrology, there are 27 different constellations in the universe called Nakshatras. </li>
Each of them is described below in detail. Let’s check it out. 

</ul>

<hr>
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
            <img src="{{ asset('frontend/images/mishra4youTV.jpg') }}" style="height: 150px; width: 350px;">
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

        <div id="English" class="tabcontent">
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

        <div id="Hindi" class="tabcontent">
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

        <div id="Astrology 2020" class="tabcontent">
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
                 <li style="list-style-type: none;"><img src="{{ asset('frontend/images/gemstone1.jpg') }}" style="height: 150px; width: 350px;" ></li>  
                  <hr class="hr_margin">
                  <li style="list-style-type: none;"><img src="{{ asset('frontend/images/gemstone2.jpg') }}" style="height: 150px; width: 350px;" ></li>  
                  <hr class="hr_margin">
                  <li style="list-style-type: none;"><img src="{{ asset('frontend/images/gemstone3.jpg') }}" style="height: 150px; width: 350px;" ></li>  
                  <hr class="hr_margin">
                  <li style="list-style-type: none;"><img src="{{ asset('frontend/images/gemstone4.jpg') }}" style="height: 150px; width: 350px;" ></li>  
                  <hr class="hr_margin">
               </ul>
            </div>
        </div>
    </div>
</div>
</div>






<section class="footer_bg" style="background-image: url({{ asset('frontend/images/section_background.jpg') }});">
    <div class="container footer_align">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
                <h5 style="color: #ff7801;">Horoscope</h5>
                <hr>
                <ul>
                    <li style="list-style-type: none; "><a href="#" style="color: white;">My Daily Horoscope </a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">My Weekly Horoscope</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">My Monthly Horoscope</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">My Love Horoscope</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">My Career Horoscope</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">My Wellness Horoscope</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">My Money Horoscope</a></li>
                    
                    <li style="list-style-type: none;"><a href="#" style="color: white;">My Love Compatibility</a></li>
                </ul>
                <h5 class="m-t-40" style="color: #ff7801;">Astrology Shop</h5>
                <hr>
               <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6" style="color: white;">
                    <img src="{{ asset('frontend/images/shop1.png') }}" style="height: 126px; width: 126px;">
                    <caption >Gemstones</caption>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6" style="color: white;">
                    <img src="{{ asset('frontend/images/shop2.png') }}" style="height: 126px; width: 126px;">
                    <caption >Rudraksh Mala</caption>
                </div>
               </div>

               <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6" style="color: white;">
                    <img src="{{ asset('frontend/images/shop3.png') }}" style="height: 126px; width: 126px;">
                    <caption >Ask A Question</caption>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6" style="color: white;">
                    <img src="{{ asset('frontend/images/shop4.png') }}" style="height: 126px; width: 126px;">
                    <caption> Yearly Books</caption>
                </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
                <h5 style="color: #ff7801;">Celebrity Horoscope</h5>
                <hr>
                 <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6" style="color: white;">
                    <img src="{{ asset('frontend/images/Celebrity1.jpg') }}" style="height: 126px; width: 126px;">
                    <caption>Amitabh </caption>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6" style="color: white;">
                    <img src="{{ asset('frontend/images/Celebrity2.jpg') }}" style="height: 126px; width: 126px;">
                    <caption>Narendra Modi</caption>
                </div>
               </div>

               <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6" style="color: white;">
                    <img src="{{ asset('frontend/images/celebrity3.jpg') }}" style="height: 126px; width: 126px;">
                    <caption >Virat Kohli</caption>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6" style="color: white;">
                    <img src="{{ asset('frontend/images/celebrity4.jpg') }}" style="height: 126px; width: 126px;">
                    <caption>Kapil Sharma</caption>
                </div>
               </div>
                <!--
                <ul>
                    <li style="list-style-type: none;"><a href="#">Amitabh Bachhan</a></li>
                    <li style="list-style-type: none;"><a href="#">Narendra Modi</a></li>
                    <li style="list-style-type: none;"><a href="#">Rahul Gandhi</a></li>
                    <li style="list-style-type: none;"><a href="#">Sachin Tendulkar</a></li>
                    <li style="list-style-type: none;"><a href="#">Virat Kohli</a></li>
                    <li style="list-style-type: none;"><a href="#">Donald Trump</a></li>
                    <li style="list-style-type: none;"><a href="#s">Anna Hazare</a></li>
                    <li style="list-style-type: none;"><a href="#s">Find More >>></a></li>
                </ul>
                !-->
                <h5 class="m-t-40" style="color: #ff7801;">Upcomming Festivals Date</h5>
                <hr>
                <ul>
                    <li style="list-style-type: none; "><a href="#" style="color: white;">Holi 2020 </a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">Chaitra Navratri 2020</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">Jagannath Rath Yatra 2020</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">Nag Panchami 2020</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">Raksha Bandhan 2020</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">Janamasthami 2020</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">Ganesh Chathurthi 2020</a></li>
                    
                    <li style="list-style-type: none;"><a href="#" style="color: white;">Sharad Navratri 2020</a></li>
                </ul>
                
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
                <h5 style="color: #ff7801;">ZODIAC SIGN FINDER</h5>
                <hr>
                <p class="p-t-5" style="color: white;">The Zodiac is made up of 12 Sun Signs. Your Date of Birth determines which one you are:</p>
                <div class="col-md-12 footer_select_section">
                    <select class="single form-control footer_select month">
                        <option value="">Choose</option>
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">July</option>
                        <option value="8">Aug</option>
                        <option value="9">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>
                    <div class="footer_select_section">
                        <select class="single form-control footer_select2 day">
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
                        <button class="btn btn-sm btn-primary clear_btn zodiacname" style="background-color: #ff7801;">Check</button>
                    </div>
                </div>

                <div class="row elements_inline">
                    <div class="col-md-12 select2_number">
                        <h5 class="m-t-40" style="color: #ff7801;">Forecast 2020</h5>
                        <hr>
                         <ul>
                    <li style="list-style-type: none; "><a href="#" style="color: white;">Horoscope 2020 </a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">Rashifal 2020</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">Numerology 2020</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">Grahan 2020</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">Calender 2020</a></li>
                    <li style="list-style-type: none;"><a href="#" style="color: white;">Lal Kitab Horoscope 2020</a></li>
                    
                </ul>
                    </div>
                </div>
                
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
                <h5 style="color: #ff7801;">ADVERTISEMENT</h5>
                <hr>
                <div class="row">
                    <div class="col-sm-12 m-t-10">
                        <img src="{{ asset('frontend/images/add.jpg') }}" alt="ad" class="img-responsive center-block"/>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-xs-6">
                        <img src="{{ asset('frontend/images/add2.jpg') }}" alt="ad" class="img-responsive center-block"/>
                    </div>
                    <div class="col-xs-6">
                        <img src="{{ asset('frontend/images/add3.jpg') }}" alt="ad" class="img-responsive center-block"/>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-xs-6">
                        <img src="{{ asset('frontend/images/add4.jpg') }}" alt="ad" class="img-responsive center-block"/>
                    </div>
                    <div class="col-xs-6">
                        <img src="{{ asset('frontend/images/add5.jpg') }}" alt="ad" class="img-responsive center-block"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="elements_desc">
            <hr>
        </div>
        <br>
        <a href="#" class="back-to-top">
            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
        </a>
    </div>
</section>
@endsection
@section('scripts')

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