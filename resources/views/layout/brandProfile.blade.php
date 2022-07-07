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
            <li class="breadcrumb-item"><a href="{{ url('brand/show') }}">Home</a></li>
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
                    <div class="card" style="border-radius: 15px;">
                      <div class="col-12 bg-white px-3  pb-3">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Brand ID</p>
                            <p class="py-2 text-muted">{{$brand->id}}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Brand Name</p>
                            <p class="py-2 text-muted">{{ $brand->brandName }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="py-2">Status</p>
                            @if($brand->status == "active")
                            <p class="py-2 badge badge-primary">{{ $brand->status }}</p>
                            @else
                            <p class="py-2 badge badge-danger">{{ $brand->status }}</p>
                            @endif
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