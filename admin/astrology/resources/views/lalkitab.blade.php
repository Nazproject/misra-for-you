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
                    <h3 style="color: orange;"> Lal Kitab</h3>
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
            <p style="color: white;">Vedic Astrology has the answer to almost all your problems. Be it the tension in your life, your family, relation or your job. One of the most important branches of this Astrology is Lal Kitab. If you’re not familiar with the term Lal Kitab, let us find out what it is?

            </p>
         <!--   <div class="row">
                <div class="col-xs-12 m-t-26">
                    <i class="fa fa-envelope header_icons" aria-hidden="true"></i>
                    <span class="text-info"> Send me horoscope by email</span>
                </div>
            </div>!-->
            <section class="hr_bottom_align">
                <div class="row">
                    <p style="color: white; margin-left: 80px;" >What is a Lal Kitab?
Lal Kitab is a collection of 5 books which introduce us to a new style of horoscopic analysis allowing us with a quick solution and affordable remedies. The books are written in ancient Urdu language between 1939 and 1952. Although the authorship of the books is disputed, the deeper resources show that these books were compiled by Pt. Roop Chand Joshi. As we discussed above, the books are written in Urdu and not in the verses of Sanskrit. In this book, astrological calculations are based on a permanent master planet. Here, Aries Zodiac Sign has been assigned the first house, Taurus the second house and in a similar manner all the 12 quarters are filled up. The Lal Kitab is of much importance as it mentions the measures which are pretty easy to perform even for a normal person. With the help of these remedies, anyone gets rid of the problems and defects they are currently facing in their life. 

                    </p>
                </div>
                <hr>
                <div class="m-t-40 swiper-container single_swiper">
                    <p style="color: white;">What are the features of Lal Kitab?
Lal Kitab aimed to make Astrology and Horoscope reading simpler. It is so simple that a normal person can examine his/her situation by comparing the circumstances around him. Through this, he will be able to produce results easily. The rules of Lal Kitab are different from the Vedic Astrology. For example: If a person is born in Zodiac Sign Taurus, his birth chart will be written accordingly. But, on the other hand, that’s not the case for Lal Kitab. Here, every house has a specific position and sequence like the first house will be written in Aries, followed by Taurus and so on. 

                    </p>
                </div>
            </section>
            <div class="row m-t-26">
                <p style="color: white;  margin-left: 20px;">In this book, the most important terms for you are:
                    <ul style="color: orange;">
<li>  Pakka Ghar or Permanent Home</li>
<li>  Soya Hua Grah or Position of the Sleeping Planet</li>
<li> Soya Hua Ghar or Sleeping Position of the House</li>
<li>  Sathi Grah or Companion Planets</li>
<li> Dharmik Teva or Religious Teva</li>
Each of them is described below in detail. Let’s check it out. 

</ul>

<hr>
                </p>

            </div>
            <div class="row m-t-40">
                <h3 style="color: orange; margin-left: 40px;"> Pakka Ghar</h3>
                <p style="color: white;  margin-left: 20px;">
Unlike Vedic Astrology, every house does not have a fixed nature in this book. Here, Aries has been given the first house, Taurus the second followed by Gemini, Cancer, Leo, Virgo, Libra, Scorpio, Sagittarius, Capricorn, Aquarius, and Pisces. 
Since the lord of the Aries is Mangal, that’s why the Pakka Ghar of Mars will be the first house. The permanent House of the Moon is the fourth one, while the Ninth and Tenth houses are occupied by Jupiter. The eleventh house is considered as the permanent home of the Saturn according to the Lal Kitab.</p><hr>
<h3 style="color: orange;  margin-left: 40px;">Soya Hua Grah Or Sleeping Position of the Planet</h3> 
<p style="color: white;  margin-left: 20px;">
The Planets except those who have been already assigned a Pakka Grah or a permanent home are known as the Soya Hua Grah or in the Sleeping Position. They are known as the Soya Hua Grah or in the sleeping position because their effects are purely limited. Their effects are only due to the location of the house. 
Consider a situation for a Kundali where Venus has been assigned the fourth quote or position, and the tenth position is empty. In such a case, the seventh sight of Venus will be directly on the tenth house. But since its empty, its effects will be only limited to the fourth house and it will conduce accordingly.
<h3 style="color: orange;  margin-left: 40px;"> Soya Hua Ghar or Sleeping Position of the House </h3>
 <p style="color: white;  margin-left: 20px;">
If a house is empty in a Lal Kitab Kundali or is out of sight of any other planet, it is considered as Soya Hua Ghar or Sleeping Position. This means that the planet can’t be of any help unless it is awakened up by some remedies. Following are some remedies that are mentioned in the Lal Kitab for the awakening of Soya Hua Ghar:
<ul style="color: orange;">
<li>  Mars remedies should be followed to awaken the first house.</li>
<li>  Moon remedies should be followed to awaken the Second house.</li>
<li> Mercury remedies should be used to awaken the third house.</li>
<li> Moon remedies should be followed to awaken the fourth house.</li>
<li> Sun remedies should be used to awaken the fifth house.</li>
<li>  Rahu remedies should be used to awaken the sixth house.</li>
<li>  Venus remedies should be followed to awaken the seventh house.</li>
<li>  Moon remedies should be used to awaken the eighth house.</li>
<li> Jupiter remedies should be used to awaken the ninth house.</li>
<li>  Saturn remedies should be used to awaken the tenth house.</li>
<li> Jupiter remedies should be followed to awaken the eleventh house.</li>
<li> Ketu remedies should be followed to awaken the twelfth house.</li>
</ul>
</p>
<h3 style="color: orange;  margin-left: 40px;">  Sathi Planets or Companion Planets </h3>
<p style="color: white;  margin-left: 20px;">
According to the Lal Kitab, the Sathi Grah or the Companion Planets are those which sit in one another’s Pakka Ghar or Permanent Home position. In such a case, these planets do not have a bad effect on each other. This interchanging of positions conduces a good effect, unlike Vedic Astrology where some Planets are enemies to one another.</p> 
<h3 style="color: orange;  margin-left: 40px;"> Dharmik Teva or the Religious Teva</h3>
<p style="color: white;  margin-left: 20px;">
According to the book, if the planet Saturn and Jupiter form a sum in the Kundali, then this condition is known as the Dharmi or the Righteous Teva. This is considered a good omen and such a situation eliminate all the difficulties in one’s life. 
Moreover, if these two planets sum up in the sixth, ninth or the eleventh house, it brings good effects to one’s life. 
Other than the above-mentioned terms, we have the Blind Planet or Blind Teva which is known as Andha Teva and Minor Teva or Nabalig Teva.
Apart from that, the book covers the following types of debts:</p>
<ul style="color: orange;">
<li>  The Debt of Father or Pitr Rin</li>
<li>  The Debt of Mother or Matr Rin</li>
<li>  The Debt of Brother or Bhratra Rin</li>
<li> The Debt of Sister or Bahin Rin</li>
<li>  The Debt of Daughter or Putri Rin</li>
<li>  The Debt of Woman or Stree Rin</li>
<li>  The Debt of Cruelty or Nirdayi Rin</li>
<li>  The Debt of Unborn or Ajanma Rin</li>
<li>   The Debt of Self or Swa Rin</li>
<li>  The Debt of Divine or Daiviya Rin</li>

</ul>
 



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