@extends('layouts.include.backend.master')

@section('content')

{{-- <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div>
</section> --}}
<?php //echo "<pre>";print_r($list);die;?>
  <section class="content">
    <div class="row">
      <div class="col-12">
        <!-- /.card -->

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
          <div class="card-body">
            <div>
              <a style="float: right;padding: 1px;" href="{{ route('admin.carat.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-square" aria-hidden="true"> </i>Add Carat</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Carat</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php $i=1;
                foreach($list as $val){
              ?>
              
              <tr>
                <td>{{$i}}</td>
                <td>{{$val->carat}}</td>
                <td>{{\Carbon\Carbon::parse($val->created_at)->format('d-m-Y')}}</td>
                <td>
                  <a class="btn btn-sm btn-danger" href="{{asset('/admin/carat/delete/'.$val->id.'')}}"><i class="fa fa-trash"></i></a>
                  <a class="btn btn-sm btn-info" href="{{asset('/admin/carat/edit/'.$val->id)}}"><i class="fa fa-edit"></i></a>             
                </td>
              </tr>
              
              <?php $i++;}?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
  @endsection

