@extends('layouts.website', ['pageName' => 'about'])
@section('title', 'About')
@section('web-content')
<section id="product-background" class="product-background d-flex" style="background-image: url('{{ asset('/website/assets/image/section-background/'.$backimage->bgimage_other) }}')">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '';">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                      <span>&nbsp;/&nbsp;</span>
                      <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>
<section id="our-service" class="our-service section-light section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-card">
                    <div class="img-box w-50 d-flex float-start pe-2">
                        <img src="{{ asset($content->about_image) }}" alt="" class="img-fluid w-50 pe-2">
                        <img src="{{ asset($content->bg_image) }}" alt="" class="img-fluid w-50 pe-2">
                    </div>
                    <h2 class="welcome-title fs-3 fw-bold text-uppercase">Welcome To @isset($content->name)
                            {{ $content->name }}
                        @endisset
                    </h2>
                    {{-- <p class="semi-title">Customize any case with our premium marble design which has a matching POP as well! Customization available for 300+ phone cases! Customizing cases has never been easier.</p> --}}
                    <div class="description">{!! $content->about !!}</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection