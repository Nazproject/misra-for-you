@extends('layouts.include.frontend.master')
@section('title')
    {{@$title}}
@endsection
@section('content')

<section class="home_bg" style="background-image: url({{asset('frontend/images/astro_slider2.jpg')}});">
    <div class="container">
        <div class="india_vasthu">
            <div class="row">
                <div class="col-md-8">
                    <h4>{!! @$list->title !!}</h4>
                    <p>{!! @$list->description !!}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('dist/img/horoscope/'.@$list->filename.'')}}" alt="mahavasthu_astrology" width="250" height="250" style="margin-top: 50px;" class="img-responsive">
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-12">
                <h4 class="m-t-40"><b>Our consulting services</b></h4>
                </div>
                <div class="col-md-4">
                    <div class="side">
                        <h4>Home vasthu</h4>
                        <p>Home is the place where people spend 70% of their life time, so home is the best place to  plan according to the vasthu. Having home according to the vasthu can lead to peaceful life. We plan all the houses structures according to the vasthu.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="side">
                        <h4>Business vasthu</h4>
                        <p>A peaceful atmosphere, a positive energy will lead to work with a positive zeal. Business places are the second place where people spend  most of their time. So business places should be constructed according to the vasthu. Let us plan a beautiful office for your organisational growth.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="side">
                        <h4>Vasthu sketches</h4>
                        <p>We also deal with vasthu sketches, you provide us your requirements of your plot or construction, our team will work on your construction and provide you the best plans with neat sketches. We work on complete vasthu plan according to the modern world. </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!--end of vasthu shastra section-->

<!--start of vasthu experts-->

<section class="vasthu_experts">
    <div class="container">
        <div class="row">
            <div class="compass">
            <img src="{{asset('frontend/images/compass.png')}}" alt="compass">
            </div>
            <h2 class="m-b-25" style="color: black;"><b>Explore More In "{{ucfirst($slug)}} Horoscope {{date('Y')}}"</b></h2>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/Finance.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">{{ucfirst($slug)}} Finance Horoscope {{date('Y')}}</h4>
                   <a align="center" href="{{asset('/zodiac/finance/'.$slug.'/'.$type)}}" style="border:1px solid black; background-color: yellow; color:black;">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/Education.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">{{ucfirst($slug)}} Education Horoscope {{date('Y')}}</h4>
                    <a align="center" href="{{asset('/zodiac/education/'.$slug.'/'.$type)}}" style="border:1px solid black; background-color: yellow; color:black;">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/Ascendant.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">{{ucfirst($slug)}} Ascendant Horoscope {{date('Y')}}</h4>
                     <a align="center" href="{{asset('/zodiac/ascendant/'.$slug.'/'.$type)}}" style="border:1px solid black; background-color: yellow; color:black;">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/wealth.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">{{ucfirst($slug)}} Stock Market Predictions {{date('Y')}}</h4>
                    <a align="center" href="{{asset('/zodiac/stock_market/'.$slug.'/'.$type)}}" style="border:1px solid black; background-color: yellow; color:black;">Read More</a>
                </div>
            </div>
        </div>
         <div class="row">
            
            
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/job.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">{{ucfirst($slug)}} Career Horoscope {{date('Y')}}</h4>
                    <a align="center" href="{{asset('/zodiac/career/'.$slug.'/'.$type)}}" style="border:1px solid black; background-color: yellow; color:black;">Read More</a>
                </div>

            </div>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/love.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">{{ucfirst($slug)}} Love Horoscope {{date('Y')}}</h4>
                   <a align="center" href="{{asset('/zodiac/love/'.$slug.'/'.$type)}}" style="border:1px solid black; background-color: yellow; color:black;">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/personalized-horoscope.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">{{ucfirst($slug)}} Personalized Horoscope {{date('Y')}}</h4>
                    <a align="center" href="{{asset('/zodiac/personalized/'.$slug.'/'.$type)}}" style="border:1px solid black; background-color: yellow; color:black;">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/Health.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">{{ucfirst($slug)}} Health Horoscope {{date('Y')}}</h4>
                    <a align="center" href="{{asset('/zodiac/health/'.$slug.'/'.$type)}}" style="border:1px solid black; background-color: yellow; color:black;">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end of vasthu shastra-->

<!--start of vasthu online-->

<section class="home_bg" style="background-image: url({{asset('frontend/images/astro_slider2.jpg')}});">
    <div class="container">
        <div class="vasthu_online">
            <div class="row">
                <div class="col-md-6">
                <h4><b>Get Your Horoscope In your Inbox!</b></h4>
                <h4>Are you busy with your programs? Are you away from our office? </h4>
                    <p>No worries, we can help you online, fill your details and we will send you your zodiac sign reading in your inbox!!!</p>
                </div>
                <div>
                    @if ($message = Session::get('success'))
                    <script>alert('<?php echo $message;?>');</script>
                    @endif
                    <!-- @if (count($errors) > 0)
                    <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.
                      <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                      </ul>
                    </div>
                    @endif -->
                </div>
                <form action="{{asset('/message')}}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <div class="uploadform">
                            <form action="#">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" value="{{old('title') }}" class="form-control" placeholder="First name">
                                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name" value="{{old('title') }}" class="form-control" placeholder="Last name">
                                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" value="{{old('title') }}" class="form-control"  placeholder="Email">
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" value="{{old('title') }}" class="form-control"  placeholder="Phone number">
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="zodiac_sign">
                                            <option value="" >Select Zodiac Sign</option>
                                            <option value="aquarius" >Aquarius</option>
                                            <option value="pisces" >Pisces</option>
                                            <option value="aries" >Aries</option>
                                            <option value="gemini" >Gemini</option>
                                            <option value="cancer" >Cancer</option>
                                            <option value="leo" >Leo</option>
                                            <option value="virgo" >Virgo</option>
                                            <option value="libra" >Libra</option>
                                            <option value="scorpio" >Scorpio</option>
                                            <option value="sagittarius" >Sagittarius</option>
                                            <option value="Capricorn" >Capricorn</option>
                                            <option value="Taurus" >Taurus</option>
                                        </select>
                                        <span class="text-danger">{{ $errors->first('zodiac_sign') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="content_type">
                                            <option value="daily" >Daily</option>
                                            <option value="weekly" >Weekly</option>
                                            <option value="monthly" >Monthly</option>
                                            <option value="yearly" >Yearly</option>
                                        </select>
                                        <span class="text-danger">{{ $errors->first('content_type') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="note" rows="2" placeholder="Send your query to the astrologer"></textarea>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control">
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Send">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</section>

@endsection


