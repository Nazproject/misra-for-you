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
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <label>Title</label>
            <textarea class="form-control" style="width: 100%; height: 50px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" rows="0" name="title" placeholder="Enter Product Title">{{old('title') }}</textarea>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control">
              <option value="">Select Category</option>
              @foreach($category_list as $cat)
              <option value="{{$cat->id}}">{{$cat->category}}</option>
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
              <option value="{{$cat->id}}">{{$cat->carat}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Availability</label><br>
            <span style="margin-left: 10px;">
              <input type="radio" name="stock" checked="checked" value="1">
              <label style="padding-right: 20px;">In stock</label>
              <input type="radio" name="stock" value="0">
              <label style="padding-right: 20px;" >out of stock</label>
            </span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Selling type</label><br>
            <span style="margin-left: 10px;">
              <input type="radio" name="top_selling" checked="checked" value="0">
              <label style="padding-right: 20px;">Normal selling</label>
              <input type="radio" name="top_selling" value="1">
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
              <option value="aries">Aries</option>
              <option value="taurus">Taurus</option>
              <option value="gemini">Gemini</option>
              <option value="cancer">Cancer</option>
              <option value="leo">Leo</option>
              <option value="virgo">Virgo</option>
              <option value="libra">Libra</option>
              <option value="scorpio">Scorpio</option>
              <option value="sagittarius">Sagittarius</option>
              <option value="capricorn">Capricorn</option>
              <option value="aquarius">Aquarius</option>
              <option value="pisces">Pisces</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Astrological Planet</label>
            <select name="planet" class="form-control">
              <option value="">Select Astrological Planet</option>
              <option value="Jupiter">Jupiter</option>
              <option value="Mars">Mars</option>
              <option value="Mercury">Mercury</option>
              <option value="Moon">Moon</option>
              <option value="Saturn">Saturn</option>
              <option value="Sun">Sun</option>
              <option value="Venus">Venus</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Mrp price</label>
            <input type="text" id="mrp_gst" name="mrp_price" class="form-control" value="{{old('mrp_price') }}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>GST (in percentage)</label>
            <input type="text" id="tax" name="gst" class="form-control" value="{{old('gst') }}">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Mrp price with gst</label>
            <input type="text" id="mrp" name="mrp_gst_price" class="form-control" value="{{old('mrp_gst_price') }}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Discount (in percentage)</label>
            <input type="text" name="discount" id="discount" class="form-control" value="{{old('discount') }}">
          </div>
        </div> 
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{old('price') }}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Product Qty</label>
            <input type="text" name="product_count" class="form-control" value="{{old('product_count') }}">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <div class="input-group">
            <input type="file" id="projectinput2" class="form-control" placeholder="Name"
            name="image">
        </div>
      </div>
      <div class="form-group">
        <label>First Description</label>
        <textarea class="form-control textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" rows="3" name="first_description" placeholder="Enter Description">{{old('first_description') }}</textarea>
      </div>
      <div class="form-group">
        <label>Second Description</label>
        <textarea class="form-control textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" rows="3" name="second_description" placeholder="Enter Description">{{old('second_description') }}</textarea>
      </div>
      <div class="form-group">
        <label>FAQ</label>
        <textarea class="form-control textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" rows="3" name="faq" placeholder="Enter Description">{{old('faq') }}</textarea>
      </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(document).on("change keyup blur", "#tax", function() {
    var main = $('#mrp_gst').val();
    var disc = $('#tax').val();
    var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
    var mult = main * dec; // gives the value for subtract from main value
    var discont = parseInt(main) + parseInt(mult);
    var con=0;
    $('#mrp').val(discont);
    $('#discount').val(con);
    $('#price').val(con);
    
});
$(document).on("change keyup blur", "#discount", function() {
    var main = $('#mrp').val();
    var disc = $('#discount').val();
    var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
    var mult = main * dec; // gives the value for subtract from main value
    var discont = main - mult;
    $('#price').val(discont);
});
</script>