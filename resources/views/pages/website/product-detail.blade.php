@extends('layouts.website', ['pageName' => 'product'])
@section('title', 'Product Detail')
@push('web-css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
@endpush
@section('web-content')

<section id="product-background" class="product-background d-flex" style="background-image: url('{{ asset('/website/assets/image/section-background/'.$backimage->bgimage_other) }}')">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '';">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <span>&nbsp;/&nbsp;</span>
                        @isset($category)
                        <li class="breadcrumb-item"><a href="{{ route('subcategory', $category->id) }}">{{ $category->name }}</a></li>  
                        <span>&nbsp;/&nbsp;</span>
                        @endisset
                        @isset($subcategory)
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('product.subcate', $subcategory->id) }}">{{ $subcategory->name }}</a></li>
                        <span>&nbsp;/&nbsp;</span>
                        @endisset
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>

<section id="product-detail" class="product-detail section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="section-title fs-2 fw-bold text-center text-uppercase">Our Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="detail-img d-flex justify-content-center align-items-center">
                    <img src="{{ asset( $product->image ) }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="detail-product">
                    <div class="title"><strong>Product Name: </strong>{{ $product->name}}</div>
                    {{-- <div class="title"><strong>Product color available: </strong>Red, Green, Blue</div> --}}
                    <div class="title"><strong>Product Category: </strong>{{ $category->name }}</div>
                    <div class="title"><strong>Product Sub Category: </strong>{{ $subcategory->name }}</div>
                    <div class="title" style="color: #000; text-align: justify"><strong>Product Description: </strong>
                        {!! $product->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('web-js')
 <!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
@endpush