@extends('layouts.include.frontend.master')
@section('content')

<section class="home_bg" style="background-image: url({{asset('frontend/images/astro_slider2.jpg')}});">
    <div class="container">
        <div class="india_vasthu">
            <div class="row">
                <div class="col-md-8">
                    <h4><b>What is vasthu?</b></h4>
                    <p>Vasthu shastra is a traditional science of architecture, mostly believed by hindu community.
                        Vasthu Shasthra is a sanskrith word, vas means live, stay, reside, vasthu means foundation of house or land or building or any place, shasthra is nothing but knowledge script. Vasthu shasthra means script of  architectural science.
                    <br/>
                        Vasthu shasthra tells how a  construction should be  planned to channelise positive energy in and around the construction. A good implementation of vasthu will bring peace and prosperity to the people in the construction.
                    <br/>Initially vasthu shastra was used to construct temples, later people started using vasthu shastra for every construction like homes, offices, hotels, etc. Many modern constructions are also build according  to the vasthu shasthra. Vasthu shastra is also providing guidelines to the modern architects in building construction according to the vasthu and modern designs. </p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('frontend/images/Vastu-01.jpg')}}" alt="mahavasthu_astrology" class="img-responsive">
                </div>
            </div>
            <div class="row">
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
            </div>
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
            <h2 class="m-b-25" style="color: black;"><b>Explore More In "your Horoscope"</b></h2>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/Finance.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">Aries Finance Horoscope 2020</h4>
                   <button align="center" style="border:1px solid black; background-color: yellow; color:black;">Read More</button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/Education.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">Aries Education Horoscope 2020</h4>
                    <button align="center" style="border:1px solid black; background-color: yellow; color:black;">Read More</button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/Ascendant.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">Ascendant Horoscope 2020 </h4>
                     <button align="center" style="border:1px solid black; background-color: yellow; color:black;">Read More</button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/wealth.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">Stock Market Predictions 2020</h4>
                    <button align="center" style="border:1px solid black; background-color: yellow; color:black;">Read More</button>
                </div>
            </div>
        </div>
         <div class="row">
            
            
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/job.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">Aries Career Horoscope 2020</h4>
                    <button align="center" style="border:1px solid black; background-color: yellow; color:black;">Read More</button>
                </div>

            </div>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/love.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">Aries Love Horoscope 2020</h4>
                   <button align="center" style="border:1px solid black; background-color: yellow; color:black;">Read More</button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/personalized-horoscope.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">Personalized Horoscope 2020</h4>
                    <button align="center" style="border:1px solid black; background-color: yellow; color:black;">Read More</button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 m-t-40">
                <div class="expert">
                    <img src="{{asset('frontend/images/Health.png')}}" alt="vasthu pandit" class="img-responsive">
                    <h4 style="color: black;">AAries Health Horoscope 2020</h4>
                    <button align="center" style="border:1px solid black; background-color: yellow; color:black;">Read More</button>
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
                <h4><b>Online vasthu</b></h4>
                <h4>Are you busy with your programs? Are you away from our office? </h4>
                    <p>No worries, we can help you online, fill your details and provide us your construction sketch and our team will respond you in a very quick time. </p>
                </div>
                <div class="col-md-6">
                    <div class="uploadform">
                        <form action="#">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Phone number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


