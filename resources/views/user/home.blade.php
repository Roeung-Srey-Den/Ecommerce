@extends('user.layouts.master')

@section('content')

    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
      <div class="container py-2">
        <div class="row g-5 align-items-center">

              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <!-- Our Products & Services Start-->
    <div class="container-fluid products">
        <div class="container">
            <div class="tab-class text-center text-white">
                <div class="row g-4  bg-gradient-succes">
                    <div class="col-lg-4 text-start">
                        <h1 class="text-white">Our Products & Services</h1>
                        @foreach ($category as $item)

                            <div class="d-flex justify-content-between products-name">
                                <a class=" text-white" href="{{ route('shopList', $item->id) }}"><i class="text-white fa-solid fa-arrow-right"></i> {{ $item->name }}</a>

                            </div>

                        @endforeach
                    </div>
                    <div class="col-lg-4 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <img src="{{ asset('customer/img/apple.png') }}"
                                    class="img-fluid bg-light rounded"
                                    style="width: 100%; height: 400px; object-fit: cover;">
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                            <img src="{{ asset('customer/img/addidas.jpg') }}"
                                    class="img-fluid bg-secondary rounded"
                                    style="width: 100%; height: 400px; ">
                            </li>
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Our Products & Services End-->

    <!-- Bestsaler Product Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h1 class="display-4 text-white">Bestseller Products</h1>
                <p class="text-white">Check out our top 3 best-selling products, loved by customers!</p>
            </div>
        </div>
    </div>
    <!-- Bestsaler Product End -->

 <!-- Our Products & Services Start-->
    <div class="container-fluid products">
        <div class="container">
            <div class="tab-class text-center text-white">
                <div class="row g-4  bg-gradient-succes">

                </div>
                <div class="tab-content" >
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @php
                                        $count = 1;
                                    @endphp
                                    @foreach ($products as $item)
                                        @if ($count <= 4)
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="rounded position-relative products-item" style="background: linear-gradient(135deg, #ffd700, #191970);">
                                                    <div class="products-img">
                                                        <a href="{{ route('shopDetails', $item->id) }}">
                                                            <img style="height:250px"
                                                                src="{{ asset('productImages/' . $item->image) }}"
                                                                class="img-fluid w-100 rounded-top" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                        style="top: 10px; left: 10px;">{{ $item->category_name }}</div>
                                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                        <h4 class="text-white">{{ $item->name }}</h4>
                                                        <p>{{ Str::words($item->description, 10, '...') }}</p>
                                                        <div class="d-flex justify-content-center flex-lg-wrap">
                                                            <p class="text-white fs-5 fw-bold mb-2"> {{ $item->price }}
                                                                $</p>
                                                                
                                                        </div>
                                                        <form action="{{ route('addToCart') }}" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="productID" value="{{ $item->id }}">
                                                                    <input type="hidden" name="qty" value="1"> <!-- Default quantity -->
                                                                    <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary">
                                                                        <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                                                                    </button>
                                                                </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @php
                                            $count++;

                                        @endphp
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Our Products & Services End-->
 
@endsection
