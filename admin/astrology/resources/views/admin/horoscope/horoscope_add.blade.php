
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

        <img src="images/{{ Session::get('image') }}">

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
  <form action="{{asset('admin/horoscope/store/'.$slug.'')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <input type="hidden" name="category" value="{{$slug}}">
      <div class="form-group">
        <label>Title</label>
        <textarea class="form-control" rows="1" name="title" placeholder="Enter Title"></textarea>
      </div>
      <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" rows="3" name="description" placeholder="Enter Description"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <div class="input-group">
            <input type="file" id="projectinput2" class="form-control" placeholder="Name"
            name="filename">
        </div>
      </div>
      <div>
        <span style="margin-left: 10px;">
          <input type="radio" name="types" value="daily">
          <label style="padding-right: 20px;">Daily</label>
          <input type="radio" name="types" checked="" value="weekly">
          <label style="padding-right: 20px;" >Weekly</label>
          <input type="radio" name="types" checked="" value="monthly">
          <label style="padding-right: 20px;" >Monthly </label>
          <input type="radio" name="types" checked="" value="yearly">
          <label style="padding-right: 20px;">Yearly </label>
        </span>
      </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection