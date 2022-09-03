@extends('layouts.website', ['pageName' => 'product-subcate'])
@section('web-content')

<section id="product-background" class="product-background d-flex" style="background-image: url('{{ asset('/website/assets/image/section-background/'.$backimage->bgimage_other) }}')">
  <div class="container align-self-center">
      <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
              <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '';">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <span>&nbsp;/&nbsp;</span>
                    <li class="breadcrumb-item"><a href="{{ route('subcategory', $category->id) }}">{{ $category->name }}</a></li>
                    <span>&nbsp;/&nbsp;</span>
                    <li class="breadcrumb-item active" aria-current="page">{{ $subcategory->name }}</li>
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
          <h2 class="section-title fs-2 fw-bold text-center text-uppercase text-white">{{ $subcategory->name }}</h2>
        </div>
      </div>
      {{-- <div id="fb-root"></div> --}}
      <!-- Your share button code -->
      {{-- <div class="fb-share-button" data-href="http://website.factorybelievestore.com/product/32" data-layout="button_count">button</div> --}}
      <div class="row gy-3">
        @foreach($product as $item)
        <div class="col-md-3 col-12 text-center">
          <div class="filter-anchor">
            <div class="filter-box">
              <div class="img-box">
                <img src="{{ asset( $item->image ) }}" alt="{{ $item->name }}" class="img-fluid"/>
              </div>
              <h5 class="product-title mt-2">{{ $item->name }}</h5>
              <a class="btn btn-sm btn-warning" href="{{ $messenger->link }}">Order Now</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @endsection
  @push('web-js')
  {{-- <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script> --}}
  @endpush
  