
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
  <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Category</label>
            <input type="text" name="category" class="form-control" value="{{old('category') }}">
          </div>
        </div>
      </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection