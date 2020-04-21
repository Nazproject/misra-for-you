
<section class="backgroundclr">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 tpbanner_align">
                <a href="{{route('advertise')}}" class="header_border1 hidden-xs font12" style="color:white;">Advertise With Us</a>
                <div class="header_border hidden-xs font12" style="color:white;">Language:
                    <ul>
                        <li class="dropdown lang_dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:#ff7800;">EN <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Hindi</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <span class="header_border header_text hidden-xs font12" style="color:white;">Follow Us</span>
                <span class="head_icons"><a href="#"><i class="fa fa-facebook-square header_icons fa-lg"></i></a>
                      <a href="#"><i class="fa fa-twitter-square header_icons fa-lg"></i></a>
                      <a href="#"><i class="fa fa-google-plus-square header_icons fa-lg" aria-hidden="true"></i></a>
                </span>
            </div>
            
        </div>
    </div>
</section>
<div class="container">
    <div class="row text-right">
        <div class="col-md-5 col-sm-2"></div>
        <div class="col-md-7 col-sm-10 col-xs-12">
            <div class="clearfix visible-sm-block"></div>
            <div class="row">
                <div class="col-sm-2 col-xs-2 head_signs">
                    <a href="#">
                        <div class="bg-info header_bg center-block">
                            <img src="{{ asset('frontend/images/cancer.png') }}" alt="Image missing" style="margin-right: -2px;">
                        </div>
                        <div class="text-center info1 font13">{{__('msg.Rashifal')}}</div>
                    </a>
                </div>
                <div class="col-sm-2 col-xs-2 text-center head_signs">
                    <a href="#">
                        <div class="bg-info header_bg center-block">
                            <img src="{{ asset('frontend/images/kundli3.png') }}" alt="Image missing" style="width: 20px; height: 20px;">
                        </div>
                        <div class="text-center info1 font13 ">{{__('msg.Kundli')}}</div>
                    </a>
                </div>
                <!-- <div class="col-sm-2 col-xs-2 text-center head_signs">
                    <a href="{{asset('/horoscope')}}">
                        <div class="bg-info header_bg center-block">
                            <img src="{{ asset('frontend/images/leo.png') }}" alt="Image missing">
                        </div>
                        <div class="text-center info1 font13 ">Horoscope</div>
                    </a>
                </div> -->
                <!-- <div class="col-sm-2 col-xs-2 text-center head_signs">
                    <a href="#">
                        <div class="bg-info header_bg center-block">
                            <img src="{{ asset('frontend/images/lalkitab5.png') }}" alt="Image missing">
                        </div>
                        <div class="text-center info1 font13 ">Lal Kitab</div>
                    </a>
                </div> -->
                <div class="col-sm-2 col-xs-2 text-center head_signs">
                    <a href="#">
                        <div class="bg-info header_bg center-block">
                            <img src="{{ asset('frontend/images/calendar.png') }}" alt="Image missing">
                        </div>
                        <div class="text-center info1 font13 ">{{__('msg.Calender')}} 2020</div>
                    </a>
                </div>
                <div class="col-sm-2 col-xs-2 text-center head_signs">
                    <a href="#">
                        <div class="bg-info header_bg center-block">
                            <img src="{{ asset('frontend/images/panchang4.png') }}" alt="Image missing">
                        </div>
                        <div class="text-center info1 font13 ">{{__('msg.Panchang')}}</div>
                    </a>
                </div>
                <div class="col-sm-2 col-xs-2 text-center head_signs">
                    <a href="{{ asset('/shops') }}">
                        <div class="bg-info header_bg center-block">
                            <img src="{{ asset('frontend/images/shop5.png') }}" alt="Image missing">
                        </div>
                        <div class="text-center info1 font13 ">Shop</div>
                    </a>
                </div>
                <!-- <div class="col-sm-2 col-xs-2 text-center head_signs">
                    <a href="#">
                        <div class="bg-info header_bg center-block">
                            <img src="{{ asset('frontend/images/man-with-tie.png') }}" alt="Image missing">
                        </div>
                        <div class="text-center info1 font13 ">{{__('msg.Career')}}</div>
                    </a>
                </div> -->
                <div class="col-sm-2 col-xs-2 text-center head_signs">
                <ul class="navbar-nav ml-auto" style="margin-top: -28px;">
                  <li class="nav-item dropdown" style="list-style-type: none;" >
                    <a href="#" class="nav-link" data-toggle="dropdown">
                      <div class="user-panel d-flex">
                        <div class="image">
                          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" style="height: 45px; width: 45px;" class="img-circle" alt="User Image">
                          <span class="hidden-xs">{{ @Auth::user()->name }}</span>
                        </div>
                      </div>
                    </a>
                    <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"> -->
                      <!-- <a href="#" class="btn btn-default dropdown-item">
                        <i class="fas fa-users mr-2"></i>Profile
                      </a> -->
                      
                      <ul class="dropdown-menu" style="width: 30px !important;" data-dropdown-in="fadeInUp"
                                >
                        <li><a href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-lock mr-2"></i> Sign out</a></li>
                        <li><a href="#"><i class="fa fa-users mr-2"></i> Profile</a></li>
                    </ul>
                      <!-- <div class="dropdown-divider"></div>
                      <a href="{{ route('logout')}}" class="btn btn-default dropdown-item"
                         onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                         <i class="fas fa-lock mr-2"></i>Sign out
                      </a> -->
                      <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    <!-- </div> -->
                  </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<header>
    <nav class="navbar">
        <div class="container">
            <div class="row">
                
                <div class="navbar-header col-md-4 col-sm-5 col-xs-12 nav_head">
                    
                    <button type="button" class="navbar-toggle m-t-20 font18" data-toggle="collapse"
                            data-target="#myNavbar">
                        <span>
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                    </button>
                    <a href="{{ asset('/') }}">
                        <img src="{{ asset('frontend/images/logo6.png') }}" alt="logo missing" class="brand_name" style="height: 90px; width:90px;"> <span
                            class="text-info font42"></span>
                    </a>
                    <p class="brand_name text-primary font12 head_info" style="font-family: samarkan; font-size:16px; color: black;">MISHRA 4 YOU</p>

                </div>  
                <div class="navbar-collapse collapse col-md-8 col-sm-7 col-xs-12 nav navbar-right nav_menubar"
                     id="myNavbar">
                    <ul class="nav navbar-nav header_nav">
                        <li class="header_li active">
                            <a href="{{ asset('/') }}" class="text-info">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="header_li">
                            <a href="#" class="text-info">2020</a>
                        </li>
                        <li class="header_li">
                            <a href="#" class="text-info">{{__('msg.Gemstones')}} {{__('msg.Report')}}</a>
                        </li>


                        <li class="header_li">
                            <a href="#" class="text-info"><i class="fa fa-heart"></i>{{__('msg.Compatibility')}}</a>
                        </li>
                        <!-- <li class="header_li">
                            <a href="#" class="text-info">Lal Kitab</a>
                        </li> -->
                        <li class="header_li">
                            <a href="#" class="text-info">{{__('msg.Festivals')}}</a>
                        </li>
                        
                       
                        <!-- <li class="dropdown dropdown_modified">
                            <a data-toggle="dropdown" href="#" class="text-info dropdown-toggle">Pages <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu dropdown_mod" data-dropdown-in="fadeInUp"
                                data-dropdown-out="fadeOut">
                                <li><a href="#">Home Page2</a></li>
                                <li><a href="#">Blog Single Post</a></li>
                                <li><a href="#">Blog Category</a></li>
                                <li><a href="#">Signs Single Page</a></li>
                                <li><a href="#">Gemstones Single Page</a></li>
                                <li><a href="#">Love Compatibility Result</a></li>
                                <li><a href="#">Elements</a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown dropdown_modified">
                            <a data-toggle="dropdown" href="#" class="text-info dropdown-toggle">{{__('msg.Horoscope')}} <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu dropdown_mod" data-dropdown-in="fadeInUp"
                                data-dropdown-out="fadeOut">
                                <li><a href="{{asset('/horoscope/daily')}}">{{__('msg.Daily')}} {{__('msg.Horoscope')}}</a></li>
                                <li><a href="{{asset('/horoscope/weekly')}}">{{__('msg.Weekly')}} {{__('msg.Horoscope')}}</a></li>
                                <li><a href="{{asset('/horoscope/monthly')}}">{{__('msg.Monthly')}} {{__('msg.Horoscope')}}</a></li>
                                <li><a href="{{asset('/horoscope/yearly')}}">{{__('msg.Yearly')}} {{__('msg.Horoscope')}}</a></li>
                                
                                
                            </ul>
                        </li>
                        <li class="header_li">
                            <a href="#" class="text-info">{{__('msg.Misc')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>