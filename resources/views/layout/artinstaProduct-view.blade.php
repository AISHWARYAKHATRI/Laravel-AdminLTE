@include('partials.artinstaHeader');
<div class="breadcrumbs">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" style="height: 30px">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('/artinsta') }}">Home</a></li>
              <li class="breadcrumb-item">Product</li>

            </ol>
          </nav>
    </div>
</div>

<main class="page-main">
    <div class="columns">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="main">
                        <div class="product-info-main">
                            <div class="page-title">
                                <h1 class="page-title">
                                    <span>{{ $product->productName }}</span>
                                </h1>
                            </div>
                            <div class="product-info-price">
                                <div class="">
                                    <div class="product-info">
                                        <strong class="type">SKU</strong>
                                        <div class="value">{{ $product->sku }}</div>
                                    </div>
                                    <div class="product-info-stock">
                                        <span> <i class="fa-solid fa-chevron-down"></i> IN STOCK</span>
                                    </div>  
                                    <div class="product-reviews-summary">
                                    <div class="my-3 review">
                                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-box my-3">
                                <span class="price">Rs {{ $product->price }}</span>
                                <span class="alert" role="alert">
                                    Notify me when the price drops
                                </span>
                            </div>
                            <div class="product-options-bottom p-0">
                                <div class="box-tocart">
                                    <div class="fieldset d-flex">
                                        <div class="qty d-flex align-items-center">
                                            <div class="select-wrapper">
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                  <option selected>1</option>
                                                  <option value="1">2</option>
                                                  <option value="2">3</option>
                                                  <option value="3">4</option>
                                                  <option value="3">5</option>
                                                  <option value="3">6</option>
                                                  <option value="3">7</option>
                                                  <option value="3">8</option>
                                                  <option value="3">9</option>
                                                  <option value="3">10</option>
                                                </select>
                                            </div>
                                                <div class="mx-1">
                                                <button type="button" class="btnn btn-sm tocart mx-1">Add to Cart</button>
                                                <button type="button" class="btnn btn-sm buyNow ">Buy Now</button>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overview">
                                <div>
                                    {{ $product->shortDesc }}
                                </div>
                            </div>
                            <div class="disclaimer">
                                <a href="#">Information & Disclaimer</a>
                            </div>
                            <div class="socialMedia my-5">
                                <!-- AddToAny BEGIN -->
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                    <a class="a2a_button_whatsapp"></a>
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_pinterest"></a>
                                    <a class="a2a_button_tumblr"></a>
                                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                    </div>
                                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                                    <!-- AddToAny END -->
                            </div>
                        </div>

                        <div class="product media">
                            <div class = "product-imgs">
                                <div class = "img-display">
                                    <div class = "img-showcase">
                                      <img src = "/public/Image/{{ $product->image }}" alt = "shoe image">
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="product info detailed">
                            <ul class="tabs-list">
                                <li>
                                    <a href="#" class="active" onclick="longDesc()">Details</a>
                                </li>
                            </ul>
                            <div class="longDesc" id="longDesc">
                                <div class="container my-5">
                                    {{ $product->longDesc }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function longDesc(){
        const desc = document.getElementById('longDesc');
        desc.classList.add('longDescblock');
    }
</script>

{{-- @include('partials.artinstaFooter'); --}}