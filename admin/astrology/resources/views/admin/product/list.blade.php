@extends('layouts.include.backend.master')

@section('content')

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
              <a style="float: right;padding: 1px;" href="{{ route('admin.product.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-square" aria-hidden="true"> </i>Add Product</a>
            </div>
            <table id="example1" class="table table-bordered table-striped table-responsive">
              <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Mrp price</th>
                <th>GST</th>
                <th>GST rice</th>
                <th>Discount</th>
                <th>Price</th>
                <th>Planet</th>
                <th>Zodiac sign</th>
                <th>Stock</th>
                <th>Count</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php $i=1;
                foreach($list as $val){
              ?>
              <tr>
                <td>{{$i}}</td>
                <td>{{$val->title}}</td>
                <td>{{$val->category}}</td>
                <td>{{$val->mrp_price}}</td>
                <td>{{$val->gst}}</td>
                <td>{{$val->mrp_gst_price}}</td>
                <td>{{$val->discount}}</td>
                <td>{{$val->price}}</td>
                <td>{{$val->planet}}</td>
                <td>{{$val->zodiac_sign}}</td>
                <td><?php if($val->stock==1){echo "In Stock";}else{echo "Out Of Stock";}?></td>
                <td>{{$val->product_count}}</td>
                <td><img src="{{asset('/dist/img/product/'.$val->image.'')}}" style="height: 50px;width: 50px;"></td>
                <td>
                  <a class="btn btn-sm btn-danger" href="{{asset('/admin/product/delete/'.$val->id.'')}}"><i class="fa fa-trash"></i></a>
                  <a class="btn btn-sm btn-info" href="{{asset('/admin/product/edit/'.$val->id)}}"><i class="fa fa-edit"></i></a>             
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

