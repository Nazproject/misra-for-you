@extends('layouts.include.frontend.master')
@section('title')
    {{ $title ?? 'Astrology' }}
@endsection
@section('content')
<section class="home_bg m-t-25" style="background-image: url({{asset('frontend/images/stars.jpg')}});">
    <div class="container">
        <div class="appointment">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <h4><b>Want to advertise with Mishra4You ? Please send your details</b></h4>
                    We will get back to your instantly !!! <strong style="font-size: 15px; color: orange;">Brand Your product and service</strong>
                </div>
                @if ($message = Session::get('success'))
                <script>alert('<?php echo $message;?>');</script>
                @endif
            </div>
            <form action="{{route('advertise.send')}}" method="POST">
            	@csrf
	            <div class="row">
	                <form action="#" class="m-t-40">
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label for="name">Full Name</label>
	                            <input type="text" class="form-control" name="full_name" placeholder="Full name" required>
	                            <span class="text-danger">{{ $errors->first('full_name') }}</span>
	                        </div>
	                       <!-- <div class="form-group">
	                            <label for="ap_date">Date of appointment</label>
	                            <input type="date" class="form-control" id="ap_date" required>
	                        </div> !-->
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label for="name">Email</label>
	                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
	                            <span class="text-danger">{{ $errors->first('email') }}</span>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label for="subject">Company/Agency Name</label>
	                            <input  class="form-control" name="company" id="company" placeholder="Company Name">
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label for="name">Website Url</label>
	                            <input type="text" class="form-control" name="web_url" placeholder="Website Url" required>
	                            <span class="text-danger">{{ $errors->first('web_url') }}</span>
	                        </div>
	                       <!-- <div class="form-group">
	                            <label for="name">Full Name</label>
	                            <input type="text" class="form-control" id="name" placeholder="Full name" required>
	                        </div>!-->
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label for="category">Advertisment Category</label>
	                            <select name="adv_category" class="form-control">
	                                <option value="Gemstone">Gemstone</option>
	                                <option value="Book">Book</option>
	                                <option value="Puja Samagri">Puja Samagri</option>
	                                <option value="Online Spiritual Course">Online Spiritual Course</option>
	                                 <option value="Personal Counselling">Personal Counselling</option>
	                                <option value="Contact Spiritual Expert">Contact Spiritual Expert</option>
	                                <option value="Others">Others</option>
	                            </select>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                         <div class="form-group">
	                            <label for="mobile">Mobile Number</label>
	                            <input type="text" class="form-control" name="mobile_no" placeholder="Mobile" required>
	                            <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
	                        </div>
	                       <!-- <div class="form-group">
	                            <label for="dob">DOB</label>
	                            <input type="date" class="form-control" id="dob" required>
	                        </div>-->
	                    </div>
	                    <div class="col-md-6">
	                       <div class="form-group">
	                            <label for="dob">Advertisement Start Date</label>
	                            <input type="date" class="form-control" name="start_date" required>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                       <div class="form-group">
	                            <label for="dob">Advertisement End Date</label>
	                            <input type="date" class="form-control" name="end_date" required>
	                        </div>
	                    </div>
	                    
	                    <div class="col-md-6">
	                        <div class="form-group">
	                             <label for="dob">Upload Brand Image</label>
	                            <input type="file" class="form-control" name="brand_image" id="fileToUpload">
	                        </div>
	                        <span class="text-danger">{{ $errors->first('brand_image') }}</span>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                             <label for="dob">Upload Product Image</label>
	                            <input type="file" class="form-control" name="product_image" id="fileToUpload">
	                            <span class="text-danger">{{ $errors->first('product_image') }}</span>
	                        </div>
	                    </div>
	                    <div class="col-md-12">
	                       <div class="form-group">
	                            <label for="dob">Send Us Message</label>
	                            <textarea rows="4" cols="50" name="note" placeholder="Enter a note"></textarea>
	                        </div>
	                    </div>
	                    <div class="col-md-12">
	                        <input type="submit" class="btn btn-primary" value="Submit">
	                    </div>
	                </form>
	            </div>
	        </form>
        </div>
    </div>
</section>
@endsection