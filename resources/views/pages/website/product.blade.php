@extends('layouts.website', ['pageName' => 'product'])
@section('title', 'Product-all')
@section('web-content')

<section id="product-background" class="product-background d-flex" style="background-image: url('{{ asset('/website/assets/image/section-background/'.$backimage->bgimage_other) }}')">
  <div class="container align-self-center">
      <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
              <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '';">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <span>&nbsp;/&nbsp;</span>
                    <li class="breadcrumb-item active" aria-current="page">All Product</li>
                  </ol>
                </nav>
          </div>
      </div>
  </div>
</section>

<section id="category-menu" class="category-menu section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12">
          <h2 class="section-title fs-2 fw-bold text-center text-uppercase text-white">Our Products</h2>
        </div>
      </div>
      <div class="row gy-3">
        @foreach($product as $item)
        <div class="col-md-3 col-12 text-center">
          <a href="{{ route('productDetail', $item->id) }}" class="filter-anchor">
            <div class="filter-box">
              <div class="img-box">
                <img src="{{ asset( $item->image ) }}" alt="{{ $item->name }}" class="img-fluid"/>
              </div>
              <h5 class="product-title mt-2">{{ $item->name }}</h5>
              <div class="py-2">
                <a class="btn btn-sm btn-danger" href="{{ $messenger->link }}">Order Now </a>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @endsection
  