@extends('layouts.website', ['pageName' => 'gallery'])
@section('title', 'Gallery')

@section('web-content')

<section id="product-background" class="product-background d-flex" style="background-image: url('{{ asset('/website/assets/image/section-background/'.$backimage->bgimage_other) }}')">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '';">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                      <span>&nbsp;/&nbsp;</span>
                      <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="our-gallery section-padding">
    <div class="container">
        <div class="row">
            <h2 class="fs-2 fw-bold text-center text-uppercase"><span class="section-border-black">Best Selling
                    Products</span></h2>
        </div>
        <div class="row">
            @foreach ($gallery as $item)
            <div class="col-lg-3 p-0">
                <a href="{{ asset('uploads/gallery/' . $item->image) }}" title="{{ $item->name }}"
                    class="image-link">
                    <img src="{{ asset('uploads/gallery/' . $item->image) }}" alt="" class="img-fluid">
                </a>

            </div>
            @endforeach           
        </div>
    </div>
</section>

@endsection