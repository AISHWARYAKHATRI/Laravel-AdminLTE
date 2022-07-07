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
          <h1>Brand Edit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('brand/show') }}">Home</a></li>
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
                <h3 class="card-title">Edit Brand</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('brand.update', ['brand' => $brand->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Brand Name</label>
                    <input type="text" class="form-control" value={{ $brand->brandName }} id="exampleInputEmail1" placeholder="Enter brand name" name="brandName">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectRounded0">Status</label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="status">
                      <option value="" selected disabled>--Select Status--</option>
                      <option value="active" {{ ($brand->status == "active" ? "selected" : "") }}>Active</option>
                      <option value="inactive" {{ ($brand->status == "inactive" ? "selected" : "") }}>Inactive</option>
                    </select>
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