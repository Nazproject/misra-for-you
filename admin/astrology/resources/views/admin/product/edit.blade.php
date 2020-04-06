
@extends('layouts.include.backend.master')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">{{$title}}</h3>
  </div>
  <div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
    @endif
  </div>
  <!-- form start -->
  <form action="{{asset('admin/product/update/'.$id.'')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <label>Title</label>
            <textarea class="form-control textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" rows="0" name="title" placeholder="Enter Product Title">{{$edit_product->title}}</textarea>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Astrological Planet</label>
            <select name="category_id" class="form-control">
              <option value="">Select Category</option>
              @foreach($category_list as $cat)
              <option value="{{$cat->id}}" <?php if($cat->id==$edit_product->category_id){echo "selected";}?>>{{$cat->category}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Carat</label>
            <select name="carat_id" class="form-control">
              <option value="">Select Carat</option>
              @foreach($carat_list as $cat)
              <option value="{{$cat->id}}" <?php if($cat->id==$edit_product->carat_id){echo "selected";}?>>{{$cat->carat}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Availability</label><br>
            <span style="margin-left: 10px;">
              <input type="radio" name="stock" <?php if($edit_product->stock==1){echo "checked";}?> value="1">
              <label style="padding-right: 20px;">In stock</label>
              <input type="radio" name="stock" <?php if($edit_product->stock==0){echo "checked";}?> value="0">
              <label style="padding-right: 20px;" >out of stock</label>
            </span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Selling type</label><br>
            <span style="margin-left: 10px;">
              <input type="radio" name="top_selling" <?php if($edit_product->top_selling==0){echo "checked";}?> value="0">
              <label style="padding-right: 20px;">Normal selling</label>
              <input type="radio" name="top_selling" <?php if($edit_product->top_selling==1){echo "checked";}?> value="1">
              <label style="padding-right: 20px;" >Top selling</label>
            </span>
          </div>
        </div>  
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Zodiac Sign</label>
            <select name="zodiac_sign" class="form-control">
              <option value="">Select Zodiac Sign</option>
              <option value="aries" <?php if($edit_product->zodiac_sign=="aries"){echo "selected";}?>>Aries</option>
              <option value="taurus" <?php if($edit_product->zodiac_sign=="taurus"){echo "selected";}?>>Taurus</option>
              <option value="gemini" <?php if($edit_product->zodiac_sign=="gemini"){echo "selected";}?>>Gemini</option>
              <option value="cancer" <?php if($edit_product->zodiac_sign=="cancer"){echo "selected";}?>>Cancer</option>
              <option value="leo" <?php if($edit_product->zodiac_sign=="leo"){echo "selected";}?>>Leo</option>
              <option value="virgo" <?php if($edit_product->zodiac_sign=="virgo"){echo "selected";}?>>Virgo</option>
              <option value="libra" <?php if($edit_product->zodiac_sign=="libra"){echo "selected";}?>>Libra</option>
              <option value="scorpio" <?php if($edit_product->zodiac_sign=="scorpio"){echo "selected";}?>>Scorpio</option>
              <option value="sagittarius" <?php if($edit_product->zodiac_sign=="sagittarius"){echo "selected";}?>>Sagittarius</option>
              <option value="capricorn" <?php if($edit_product->zodiac_sign=="capricorn"){echo "selected";}?>>Capricorn</option>
              <option value="aquarius" <?php if($edit_product->zodiac_sign=="aquarius"){echo "selected";}?>>Aquarius</option>
              <option value="pisces" <?php if($edit_product->zodiac_sign=="pisces"){echo "selected";}?>>Pisces</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Astrological Planet</label>
            <select name="planet" class="form-control">
              <option value="">Select Astrological Planet</option>
              <option value="Jupiter" <?php if($edit_product->planet=="Jupiter"){echo "selected";}?>>Jupiter</option>
              <option value="Mars" <?php if($edit_product->planet=="Mars"){echo "selected";}?>>Mars</option>
              <option value="Mercury" <?php if($edit_product->planet=="Mercury"){echo "selected";}?>>Mercury</option>
              <option value="Moon" <?php if($edit_product->planet=="Moon"){echo "selected";}?>>Moon</option>
              <option value="Saturn" <?php if($edit_product->planet=="Saturn"){echo "selected";}?>>Saturn</option>
              <option value="Sun" <?php if($edit_product->planet=="Sun"){echo "selected";}?>>Sun</option>
              <option value="Venus" <?php if($edit_product->planet=="Venus"){echo "selected";}?>>Venus</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Mrp price</label>
            <input type="text" id="mrp_gst" name="mrp_price" class="form-control" value="{{$edit_product->mrp_price}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>GST (in percentage)</label>
            <input type="text" id="tax" name="gst" class="form-control" value="{{$edit_product->gst}}">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Mrp price with gst</label>
            <input type="text" id="mrp" name="mrp_gst_price" class="form-control" value="{{$edit_product->mrp_gst_price}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Discount (in percentage)</label>
            <input type="text" name="discount" id="discount" class="form-control" value="{{$edit_product->discount}}">
          </div>
        </div> 
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{$edit_product->price}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Product Qty</label>
            <input type="text" name="product_count" class="form-control" value="{{$edit_product->product_count}}">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <div class="input-group">
            <input type="file" id="projectinput2" class="form-control" placeholder="Name"
            name="image">
            <input type="hidden" name="old_image" value="{{$edit_product->image}}">
            <img src="{{asset('/dist/img/product/'.$edit_product->image.'')}}" style="height: 100px;width: 150px;">
        </div>
      </div>
      <div class="form-group">
        <label>First Description</label>
        <textarea class="form-control textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" rows="3" name="first_description" placeholder="Enter Description">{{$edit_product->first_description}}</textarea>
      </div>
      <div class="form-group">
        <label>Second Description</label>
        <textarea class="form-control textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" rows="3" name="second_description" placeholder="Enter Description">{{$edit_product->second_description}}</textarea>
      </div>
      <div class="form-group">
        <label>FAQ</label>
        <textarea class="form-control textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" rows="3" name="faq" placeholder="Enter Description">{{$edit_product->faq}}</textarea>
      </div> 
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection