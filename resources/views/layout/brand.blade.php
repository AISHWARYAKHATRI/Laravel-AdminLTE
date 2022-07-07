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
          <h1>Brand</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="{{ url('brand/create') }}" class="btn btn-primary float-right">Add</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Brand Id</th>
                  <th>Brand Name</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @php 
                  $i = 1;
                  @endphp
                  @foreach($brand as $brands)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $brands->brandName }}</td>
                  <td>{{ $brands->status }}</td>
                  <td>
                    <div>
                    <a href="{{ route('brand.profile', ['brand' => $brands->id]) }}"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{ route('brand.edit', ['brand' => $brands->id]) }}"><i class="fa-solid fa-pencil"></i></a>
                    <a href="{{ route('brand.destroy', ['brand' => $brands->id]) }}" onclick="return confirm('Are you sure you want to delete?')"><i class="fa-solid fa-trash-can"></i></a>
                  </div>
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@include('partials.footer');

@include('partials.script');