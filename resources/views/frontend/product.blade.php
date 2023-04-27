@extends('frontend.main')
@section('content')

  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
      </div>
      <div class="row">
        @foreach($products as $product)
          <div class="col-sm-6 col-lg-4">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('storage/'.$product->image) }}" alt="">
                <a href="" class="add_cart_btn">
                  <span>
                    Add To Cart
                  </span>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  {{ $product->title}}
                </h5>
                <div class="product_info">
                  <h5>
                    <span>$</span> {{ $product->price}}
                  </h5>
                  <div class="star_container">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- end product section -->
  @endsection