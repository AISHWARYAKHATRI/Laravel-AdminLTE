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
          <h1>Edit Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('product/show')}}">Home</a></li>
            <li class="breadcrumb-item active">Edit</li>
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
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('product.update', ['product' => $product->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$product->productName}}" placeholder="Enter product name" name="productName">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sku</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$product->sku}}"placeholder="Sku" name="sku">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$product->qty}}" placeholder="Enter quantity" name="qty">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$product->price}}" placeholder="Enter price" name="price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Weight</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$product->wt}}" placeholder="Enter weight" name="wt">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectRounded0">Brand</label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="brandID">
                      <option value="" selected disabled>--Select Brand--</option>
                      @foreach($brand as $status)
                      @if($status->status == "active")
                      <option value="{{ $status->id }}" {{ ($status->id == $product->brand->id ? "selected" : "") }}>{{ $status->brandName }}</option>
                      @endif
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$product->shortDesc}}" placeholder="Description" name="shortDesc">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">More Details</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$product->longDesc}}" placeholder="More Details" name="longDesc" style="height: 100px">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
  </section>
</div>
@include('partials.footer');

@include('partials.script');

