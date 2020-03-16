
@extends('layouts.include.backend.master')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">{{$title}}</h3>
    <div>
      <span style="float: right;padding: 1px;">
        <a type="button" href="{{asset('admin/horoscope/Aries')}}" class="btn btn-info btn-xs">Aries</a>
        <a type="button" href="{{asset('admin/horoscope/Taurus')}}" class="btn btn-info btn-xs">Taurus</a>
        <a type="button" href="{{asset('admin/horoscope/Gemini')}}" class="btn btn-info btn-xs">Gemini</a>
        <a type="button" href="{{asset('admin/horoscope/Cancer')}}" class="btn btn-info btn-xs">Cancer</a>
        <a type="button" href="{{asset('admin/horoscope/Leo')}}" class="btn btn-info btn-xs">Leo</a>
        <a type="button" href="{{asset('admin/horoscope/Virgo')}}" class="btn btn-info btn-xs">Virgo</a>
        <a type="button" href="{{asset('admin/horoscope/Libra')}}" class="btn btn-info btn-xs">Libra</a>
        <a type="button" href="{{asset('admin/horoscope/Scorpio')}}" class="btn btn-info btn-xs">Scorpio</a>
        <a type="button" href="{{asset('admin/horoscope/Sagittarius')}}" class="btn btn-info btn-xs">Sagittarius</a>
        <a type="button" href="{{asset('admin/horoscope/Capricorn')}}" class="btn btn-info btn-xs">Capricorn</a>
        <a type="button" href="{{asset('admin/horoscope/Aquarius')}}" class="btn btn-info btn-xs">Aquarius</a>
        <a type="button" href="{{asset('admin/horoscope/Pisces')}}" class="btn btn-info btn-xs">Pisces</a>
      </span>
    </div>
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
  <form action="{{asset('admin/horoscope/update/'.$slug.'')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <input type="hidden" name="category" value="{{$slug}}">
      <input type="hidden" name="id" value="{{$horoscope->id}}"> 
      <div class="form-group">
        <label>Title</label>
        <textarea class="form-control" rows="1" name="title" placeholder="Enter Title">{{$horoscope->title}}</textarea>
      </div>
      <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" rows="3" name="description" placeholder="Enter Description">{{$horoscope->description}}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <div class="input-group">
            <input type="file" id="projectinput2" class="form-control" placeholder=""
            name="filename">
            <input type="hidden" name="old_image" value="{{$horoscope->filename}}">
            <img src="{{asset('dist/img/horoscope/'.$horoscope->filename.'')}}" style="width:100px; height: 100px;">
        </div>
      </div>
      <div>
        <span style="margin-left: 10px;">
          <input type="radio" name="types" value="daily" <?php if ($horoscope->types=="daily"){echo "checked";} ?>>

          <label style="padding-right: 20px;">Daily</label>
          <input type="radio" name="types" value="weekly" <?php if ($horoscope->types=="weekly"){echo "checked";} ?>>
          <label style="padding-right: 20px;" >Weekly</label>
          <input type="radio" name="types" value="monthly" <?php if ($horoscope->types=="monthly"){echo "checked";} ?>>
          <label style="padding-right: 20px;" >Monthly </label>
          <input type="radio" name="types" value="yearly" <?php if ($horoscope->types=="yearly"){echo "checked";} ?>>
          <label style="padding-right: 20px;">Yearly </label>
        </span>
      </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection