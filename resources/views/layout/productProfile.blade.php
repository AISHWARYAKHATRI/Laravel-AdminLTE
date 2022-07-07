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
          <h1>Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('product/show') }}">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
            <!-- general form elements -->
            <section>
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <div class="card py-5" style="border-radius: 15px;">
                      <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light mx-auto my-2"
                        data-mdb-ripple-color="light">
                        <img src="/public/Image/{{ $product->image }}"
                          style="border-top-left-radius: 15px; border-top-right-radius: 15px" class="img-fluid"
                          alt="Laptop" width="200" height="200"/>
                        <a href="#!">
                          <div class="mask"></div>
                        </a>
                      </div>
                      <div class="col-12 bg-white px-3 mt-4  pb-3">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Product Name</p>
                            <p class="py-2 text-muted">{{$product->productName}}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Brand</p>
                            <p class="py-2 text-muted">{{ $product->brand->brandName }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">SKU</p>
                            <p class="py-2 text-muted">{{ $product->sku }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Price</p>
                            <p class="py-2 text-muted">Rs {{ $product->price }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Quantity</p>
                            <p class="py-2 text-muted">{{ $product->qty }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Weight</p>
                          <p class="py-2 text-muted">{{ $product->wt }}</p>
                      </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Description</p>
                          <p class="py-2 text-muted">{{ $product->shortDesc }}</p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between">
                        <p class="py-2">More Details</p>
                        <p class="py-2 text-muted">{{ $product->longDesc }}</p>
                    </div>
                    </div>
                    </div>
              </div>
            </section>
            <!-- /.card -->
  </section>
  
</div>
@include('partials.footer');

@include('partials.script');