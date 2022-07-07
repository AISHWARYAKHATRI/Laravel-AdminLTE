<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ArtInsta | Dashboard</title>
@include('partials.css');  
</head>
  @include('partials.header')
  @include('partials.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product Addition</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('product/show')}}">Home</a></li>
            <li class="breadcrumb-item active">Product Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row mx-5">
        <div class="col mx-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter product name" name="productName">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sku</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sku" name="sku">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Product image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Product image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter quantity" name="qty">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter price" name="price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Weight</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter weight" name="wt">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectRounded0">Brand</label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="brandID">
                      <option value="" selected disabled>--Select Brand--</option>
                      @foreach($brand as $status)
                      @if($status->status == "active")
                      <option value="{{ $status->id }}">{{ $status->brandName }}</option>
                      @endif
                      @endforeach
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input tpye="text" class="form-control" id="exampleInputEmail1" placeholder="Description" name="shortDesc">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">More Details</label>
                    <input tpye="text" class="form-control" id="exampleInputEmail1" placeholder="More Details" name="longDesc" style="height: 100px">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
  </section>
</div>
@include('partials.footer');

@include('partials.script');

{{-- php artisan make:migration add_product_id_to_ --}}