<!--=============== Footer Section Start ===============-->
<section class="footer_texture m-t-65">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12 footer_section_align">
                <span class="text-white font18">Get Your </span><span class="text-primary font24"> Daily Horoscope<span
                    class="text-white font18">,</span> Daily Careerscope</span><span
                    class="text-white font18"> and</span><span class="text-primary font24"> Daily Lovescope </span> <span
                    class="text-white font18">Directly In Your Inbox</span>
            </div>
            <div class="col-md-6 col-xs-12 footer_section_align">

                <form method="post" action="https://demo.lorvent.com/astrology/subscribe.php" id="subscribe">
                    <div class="form-group">

                        <div class="input-group label_align">

                            <input type="email" class="form-control input-lg input_email sub_input" placeholder="Email Address" name="email" id="email">

                            <span class="input-group-addon subscribe_align">
        <button type="submit" class="subscribe btn btn-sm ">
                        <span>
                            <img src="{{ asset('frontend/images/mail-sent.png') }}" alt="mailicon">
                        </span>
                            </button>
                        </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- <section class="footer_bg">
    <div class="container footer_align">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
                <h5>WESTERN ASTROLOGY</h5>
                <hr>
                <ul>
                    <li><a href="#">My Daily Horoscope </a></li>
                    <li><a href="#">My Weekly Horoscope</a></li>
                    <li><a href="#">My Monthly Horoscope</a></li>
                    <li><a href="#">My Love Horoscope</a></li>
                    <li><a href="#">My Career Horoscope</a></li>
                    <li><a href="#">My Wellness Horoscope</a></li>
                    <li><a href="#">My Money Horoscope</a></li>
                    <li><a href="#">My Food Horoscope</a></li>
                    <li><a href="#">My Pet Horoscope</a></li>
                    <li><a href="{{ asset('frontend/love_compatibility_result.html') }}">My Love Compatibility</a></li>
                </ul>
                <h5 class="m-t-40">EASTERN ASTROLOGY</h5>
                <hr>
                <ul>
                    <li><a href="#"> Chinese Horoscope</a></li>
                    <li><a href="#">Chinese Sign</a></li>
                    <li><a href="#">Chinese Compatibility</a></li>
                    <li><a href="#">Daily I Ching</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
                <h5>UNIQUE TAROT READINGS</h5>
                <hr>
                <ul>
                    <li><a href="{{ asset('frontend/games.html') }}">Daily Career Tarot</a></li>
                    <li><a href="{{ asset('frontend/games.html') }}">Instant Answer Tarot</a></li>
                    <li><a href="{{ asset('frontend/games.html') }}">Power Tarot</a></li>
                    <li><a href="{{ asset('frontend/games.html') }}">Angel Tarot Reading</a></li>
                    <li><a href="{{ asset('frontend/games.html') }}">Zen Tarot Reading</a></li>
                    <li><a href="{{ asset('frontend/games.html') }}">White Magic Tarot</a></li>
                    <li><a href="{{ asset('frontend/games.html') }}">Egyptian Tarot</a></li>
                </ul>
                <h5 class="m-t-40">FORECAST TAROT READING</h5>
                <hr>
                <ul>
                    <li><a href="{{ asset('frontend/signs_single_post.html') }}">Daily Tarot Reading</a></li>
                    <li><a href="{{ asset('frontend/signs_single_post.html') }}">Today / Tomorrow Tarot</a></li>
                    <li><a href="{{ asset('frontend/signs_single_post.html') }}">Weekly Tarot Reading</a></li>
                </ul>
                <h5 class="m-t-40">LOVE TAROT READING</h5>
                <hr>
                <ul>
                    <li><a href="{{ asset('frontend/love_compatibility.html') }}">Love Potential Tarot</a></li>
                    <li><a href="{{ asset('frontend/love_compatibility.html') }}">Breakup Tarot Reading</a></li>
                </ul>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
                <h5>ZODIAC SIGN FINDER</h5>
                <hr>
                <p class="p-t-5">The Zodiac is made up of 12 Sun Signs. Your Date of Birth determines which one you are:</p>
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
                        <button class="btn btn-sm btn-primary clear_btn zodiacname">Submit</button>
                    </div>
                </div>

                <div class="row elements_inline">
                    <div class="col-md-12 select2_number">
                        <h5 class="m-t-40">LOTTO NUMBER GENERATOR</h5>
                        <hr>
                        <span>Pick </span>
                        <span class="footer_select2_section footer_select_section">
                            <select class="footer_select3 foot_text_area var1">
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
                            </select>
                        </span>
                        <span> numbers, from 1</span>
                        <span>through </span>
                        <span class="footer_select_section footer_select2_section ">
                            <select class="footer_select3 var2">
                                <option>35</option>
                                <option>36</option>
                                <option>37</option>
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                                <option>42</option>
                                <option>43</option>
                                <option>44</option>
                                <option>45</option>
                                <option>46</option>
                                <option>47</option>
                                <option>48</option>
                                <option>49</option>
                                <option>50</option>
                                <option>51</option>
                                <option>52</option>
                                <option>53</option>
                                <option>54</option>
                           </select>
                        </span>
                        <p hidden class="pararesult"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <textarea disabled class="foot_text_area form-control result" rows="3"
                                  placeholder='Insert numbers with "," between'></textarea>
                        <button class="btn btn-primary clear_btn btn-sm go">Submit</button>
                        <button class="btn btn-sm btn-default clear_btn clear">Clear</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 m-t-40">
                <h5>ADVERTISEMENT</h5>
                <hr>
                <div class="row">
                    <div class="col-sm-12 m-t-10">
                        <img src="{{ asset('frontend/images/270.png') }}" alt="ad" class="img-responsive center-block"/>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-xs-6">
                        <img src="{{ asset('frontend/images/126.png') }}" alt="ad" class="img-responsive center-block"/>
                    </div>
                    <div class="col-xs-6">
                        <img src="{{ asset('frontend/images/126.png') }}" alt="ad" class="img-responsive center-block"/>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-xs-6">
                        <img src="{{ asset('frontend/images/126.png') }}" alt="ad" class="img-responsive center-block"/>
                    </div>
                    <div class="col-xs-6">
                        <img src="{{ asset('frontend/images/126.png') }}" alt="ad" class="img-responsive center-block"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="elements_desc">
            <hr>
        </div>
        <div class="row text-center">
            <p>made with &nbsp;<img src="{{ asset('frontend/images/heartf.png') }}" alt="heart loading"/>&nbsp; by
                <a href="https://themeforest.net/user/jyostna"
                   class="footer_color_variant">jyostna</a></p>
        </div>
        <a href="#" class="back-to-top">
            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
        </a>
    </div>
</section> -->
<!--=============== Footer Section End =============== -->