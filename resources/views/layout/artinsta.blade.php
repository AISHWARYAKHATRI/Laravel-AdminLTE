@include('partials.artinstaHeader');
<div class="breadcrumbs">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" style="height: 30px">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Home</li>
            </ol>
          </nav>
    </div>
</div>
<section style="background-color: #eee;">
    <div class="text-center container py-5">
      <h4 class="mt-4 mb-5"><strong>Bestsellers</strong></h4>
      <div class="row">
       
@foreach($product as $prod)
        <div class="col-lg-3 col-md-12 mb-3">
          <div class="card" style="height: 488.8px">
            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
              data-mdb-ripple-color="light">
              <img src="/public/Image/{{$prod->image}}"
                class="w-100" width="100%" height="auto" />
              <a href="{{ url('artinsta/'.$prod->id.'/product') }}">
                <div class="mask">
                  <div class="d-flex justify-content-start align-items-end h-100">
                    <h5><span class="badge bg-primary ms-2">New</span></h5>
                  </div>
                </div>
                <div class="hover-overlay">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <a href="{{ url('artinsta/$prod->id/product') }}" class="text-reset">
                <h5 class="card-title mb-3">{{$prod->productName}}</h5>
              </a>
              <a href="" class="text-reset">
                <p>{{$prod->brand->brandName}}</p>
              </a>
              <h6 class="mb-3">Rs{{$prod->price}}</h6>
            </div>
          </div>
        </div>
@endforeach
</div>
</div>
    </div>
  </section>
{{-- @include('partials.artinstaFooter'); --}}