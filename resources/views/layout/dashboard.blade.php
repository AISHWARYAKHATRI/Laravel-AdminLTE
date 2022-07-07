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
{{-- @foreach($product as $product) --}}
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product Details</h1>
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
              <a href="{{ route('product.create') }}" class="btn btn-primary float-right">Add</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr no.</th>
                  <th>Brand</th>
                  <th>Product Name</th>
                  <th>Sku</th>
                  <th>Quantity</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @php
                  $i = 1;
                  @endphp
                  @foreach($product as $prod)
                  <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $prod->brand->brandName }}</td>
                  <td>{{ $prod->productName }}</td>
                  <td>{{ $prod->sku }}</td>
                  <td>{{ $prod->qty }}</td>
                  <td>
                    <div>
                    <a href="{{ route('product.profile', ['product' => $prod->id]) }}"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{ route('product.edit', ['product' => $prod->id, 'brandID' => $prod->brandID ])}}"><i class="fa-solid fa-pencil"></i></a>
                    <a href="{{ route('product.destroy', ['product' => $prod->id]) }}" onclick="return confirm('Are you sure you want to delete?')"><i class="fa-solid fa-trash-can"></i></a>
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
{{-- @endforeach --}}
@include('partials.footer');

@include('partials.script');