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
                    <h3 style="color: orange;"> Calender-2020</h3>
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
            <p style="color: white;">India is a country that is famous all over the world for the unity it possesses in spite of its diverse culture. It is a country that celebrates almost every major festival that exists in this world. Festivals of Hinduism, Islam, Christianity, Sikhism, Buddhism and what not. 
In India, every festival is celebrated with a great deal of excitement and enthusiasm. But, with so many festivals, it is no surprise that it becomes kind of difficult to keep track of every festival. In order to make it easier for you, we have brought Indian calendar of the year 2020
In this calendar, every necessary information about important festivals and government holidays is provided for you.


            </p>
         <!--   <div class="row">
                <div class="col-xs-12 m-t-26">
                    <i class="fa fa-envelope header_icons" aria-hidden="true"></i>
                    <span class="text-info"> Send me horoscope by email</span>
                </div>
            </div>!-->
            <section class="hr_bottom_align">
                <div class="row">
                    <p style="color: white; margin-left: 80px;" >Origin of the Indian Calendar 
Shalivahanan Shaka Calendar or Indian National calendar is one of the most popular and widely used calendars along with the Gregorian Calendar. It is used for many purposes including news broadcasting. In a survey conducted by Calendar Reform Committee in 1950s, it was revealed that around 30 different types of calendars were being used to decide the dates of different festivals of Hindu, Jain and Buddhist communities. The study also concluded that all of these calendars were based on principles that were derived on the basis of ancient astronomical practices, beliefs and customs of these religions. At the same time, a different Islamic calendar was being used by Muslims, and the state for using Gregorian Calendar for official administrative purposes. 
After the survey, the committee in the year 1957 C.E finalised a formal and structured lunisolar calendar which was declared as the National Calendar of India. The leap years in The National Calendar of India corresponded with the leap years of the Gregorian Calendar.
Even after so many attempts to create a binary and uniform platform, it is still observed that different variations and types of calendars are used by the people, while on the other hand, Government still uses the Gregorian calendar to decide holidays on the basis of beliefs and traditions of different regions and religions.
Hindu astrologers use Panchang or Panchangam, which is basically a Hindu calendar. It is used to fix marriages and also for different astrological and Horoscope purposes.

                    </p>
                </div>
                <hr>
               
            </section>
            <div class="row m-t-26">
                <p style="color: white;  margin-left: 20px;">
                    Structure of Indian Calendar
The Indian National Calendar or the Shaka Calendar is designed on the basis of luni-solar calendar as per time. It is divided into 12 months and 365 days like the Gregorian calendar. The first month of Indian National Calendar is called Chaitra and the last month is named Phalgun. Below are the names of the months in the calendar.

                    <ul style="color: orange;">
<li>  Chaitra</li>
<li>  Vaishakha</li>
<li> Jyeshtha</li>
<li>  Ashadha</li>
<li> Shravana</li>
<li>  Bhadra</li>
<li>  Ashwin</li>
<li> Kartika</li>
<li>   Agrahayana</li>
<li> Pausha</li>
<li>   Magha</li>
<li> Phalguna</li>

</ul>

<hr>
                </p>

            </div>
            <div class="row m-t-40">
                
                <p style="color: white;  margin-left: 20px;">
It is undoubtedly an advanced version of still existing Indian Solar Calendars. The principle unit of this calendar is the civil day and the era is identified as the Saka era. It is designed in a way that it corresponds the tropical year, also known as Sayana year and not with the traditionally known Sidereal or Nirayana year. 
The religious holidays in this calendar are decided on the basis of lunisolar calendar which focuses on the positions of Sun and the Moon. Most of the festivals occur on the Lunar tithi (date) while the rest are decided on the basis of Solar tithis. 
While predicting possible future, and deciding mahurats according to the Vedia Astrology, Lunar calendar is considered as the main element by astrologers. While on the other hand, a Solar Calendar tells the apparent position of the sun in the universe at different points of time. An excellent example of Solar calendar is the Gregorian calendar, which is one of the most popular calendars in the world.
.</p><hr>
<h3 style="color: orange;  margin-left: 40px;">Indian Solar Calendar </h3> 
<p style="color: white;  margin-left: 20px;">
In the reference table provided below, we have the months of Indian calendar and their respective Gregorian dates. These days are decided on the basis of the position of the sun, as in the Gregorian calendar.
<table style="border:1px solid white; border-collapse: collapse; color:orange; width:100%; margin-left: 20px;">
     <tr>
    <th style="border:1px solid white; border-collapse: collapse;">S. No</th>
    <th style="border:1px solid white; border-collapse: collapse;">Indian Religious Calendar (Solar Month)</th> 
    <th style="border:1px solid white; border-collapse: collapse;">Approx. Gregorian Dates</th>
  </tr>
  <tr>
    <td style="border:1px solid white; border-collapse: collapse;">1 </td>
    <td style="border:1px solid white; border-collapse: collapse;">Chaitra </td>
    <td style="border:1px solid white; border-collapse: collapse;">March 14</td>
  </tr>
  <tr>
    <td style="border:1px solid white; border-collapse: collapse;">2</td>
    <td style="border:1px solid white; border-collapse: collapse;">Vaishaka        </td>
    <td style="border:1px solid white; border-collapse: collapse;">April 13 </td>
  </tr>
  <tr>
    <td style="border:1px solid white; border-collapse: collapse;">3</td>
    <td style="border:1px solid white; border-collapse: collapse;">Jyeshtha     </td>
    
    <td style="border:1px solid white; border-collapse: collapse;">May 14 </td>
    
  </tr>
  <tr>
    <td style="border:1px solid white; border-collapse: collapse;">4</td>
    <td style="border:1px solid white; border-collapse: collapse;">Ashadha    </td>
    
    <td style="border:1px solid white; border-collapse: collapse;"> June 14</td>
    
  </tr>
  <tr>
    <td style="border:1px solid white; border-collapse: collapse;">5</td>
    <td style="border:1px solid white; border-collapse: collapse;">Shravana  </td>
    
    <td style="border:1px solid white; border-collapse: collapse;">July 16</td>
    
  </tr>
  <tr>
    <td style="border:1px solid white; border-collapse: collapse;">6</td>
    <td style="border:1px solid white; border-collapse: collapse;">Bhadrapada    </td>
    
    <td style="border:1px solid white; border-collapse: collapse;"> August 16</td>
    
  </tr>
  <tr>
    <td style="border:1px solid white; border-collapse: collapse;">7</td>
    <td style="border:1px solid white; border-collapse: collapse;">Ashwin    </td>
    
    <td style="border:1px solid white; border-collapse: collapse;"> September 16</td>
    
  </tr>
  <tr>
    <td style="border:1px solid white; border-collapse: collapse;">8</td>
    <td style="border:1px solid white; border-collapse: collapse;">Kartika  </td>
    
    <td style="border:1px solid white; border-collapse: collapse;">  October 17</td>
    
  </tr>
  <tr>
    <td style="border:1px solid white; border-collapse: collapse;">9</td>
    <td style="border:1px solid white; border-collapse: collapse;">Margashirsha     </td>
    
    <td style="border:1px solid white; border-collapse: collapse;">  November 16</td>
    
  </tr>
  <tr>
    <td style="border:1px solid white; border-collapse: collapse;">10</td>
    <td style="border:1px solid white; border-collapse: collapse;">Pausa     </td>
    
    <td style="border:1px solid white; border-collapse: collapse;"> December 15</td>
    
  </tr>
  <tr>
    <td style="border:1px solid white; border-collapse: collapse;">11</td>
    <td style="border:1px solid white; border-collapse: collapse;">Magha     </td>
    
    <td style="border:1px solid white; border-collapse: collapse;"> January 14</td>
    
  </tr>
  <tr>
    <td style="border:1px solid white; border-collapse: collapse;">12</td>
    <td style="border:1px solid white; border-collapse: collapse;">Phalguna  </td>
    
    <td style="border:1px solid white; border-collapse: collapse;"> February 12</td>
    
  </tr>

</table>
<h3 style="color: orange;  margin-left: 40px;"> Types of Calendars  </h3>
 <p style="color: white;  margin-left: 20px;">
There are three types of affiliated calendars in India- 
<ul style="color: orange;">
<li>  The Solar Calendars: This type of calendar is designed of the basis of the motion of the sun on yearly basis, both the sidereal and tropical. Some famous examples of this type of calendar are, Gregorian, Roman, French and Indian Solar calendars that are very popular in the regions of Tripura, Haryana, Kerela, Assam, Bengal, Kerela, Punjab, Orrisa and Tamil Nadu. Solar calendars have no concepts of days, so days are summed up to form leap years in it. The Indian National Calendar also belongs to the same category. </li>
<li>   The Lunar Calendars: These types of calendars solely depend on the phases of the moon. The Islamic calendar, also known as Islamic Hejira Calendar is one of the most famous examples of lunar calendars. It has 12 months and two months of this calendar cover the time period between two new moons. Each month is this type of calendar is almost 29.5 days long. </li>
<li>•   The Lunisolar Calendar: This type of calendar depends on both, the yearly motion of the sun and monthly phases of the moon. Some popular examples of this type of calendars are Jews and Babylonian calendars and also Indian calendars used in parts of Gujrat, Bihar, Karnataka, Andhra Pradesh, Uttar Pradesh, Rajasthan, Maharashtra, and Madhya Pradesh.</li>

</ul>
</p>
<h3 style="color: orange;  margin-left: 40px;">  Adoption and Official Usage   </h3>
<p style="color: white;  margin-left: 20px;">
As we have already mentioned, the Indian Calendar was officially adopted by the Calendar Reform Committee in 1957, and it was considered as an important and integral part of Nautical Almanac and Indian Ephemeris. It was the first Prime Minister of India, Pandit Jawaharlal Nehru who voiced the requirement and importance of a unified calendar in India. He said that – 
“They (different calendars) represent past political divisions in the country. Now that we have attained Independence, it is obviously desirable that there should be certain uniformity in the calendar for our civic, social, and other purposes, and this should be done on a scientific approach to this problem.”
While making this calendar, it was made prior that it must be free of any kind of religious and regional conflict, which existed in different regional calendars of India. After a survey and proper research, the committee introduced Saka calendar and it was made official on March 22 of the year 1957, according to the Indian calendar, this date is Chaitra 1 of 1879. 
</p> 
<h3 style="color: orange;  margin-left: 40px;"> Significance of Saka Calendar </h3>
<p style="color: white;  margin-left: 20px;">
The Saka calendar is a tribute to the ancient innovation and ideas of Indian people as it projects the beliefs, cultures and traditions of this great nation. It is followed Internationally by Indians and Hindus living in different countries of the world. Some most popular uses of the Saka calendar are – 
</p>
<ul style="color: orange;">
<li>  Gazette of India </li>
<li>  All India Radio Broadcasts </li>
<li> By the Government of India in official and administrative purposes  </li>


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