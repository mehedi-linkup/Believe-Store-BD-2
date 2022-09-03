@extends('layouts.website', ['pageName' => 'video'])
@section('title', 'Video')
@section('web-content')
<section id="product-background" class="product-background d-flex" style="background-image: url('{{ asset('/website/assets/image/section-background/'.$backimage->bgimage_other) }}')">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '';">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                      <span>&nbsp;/&nbsp;</span>
                      <li class="breadcrumb-item active" aria-current="page">Video</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>
<section id="video-gallery" class="video-gallery section-padding">
    <div class="container">
        <div class="row">
            <h2 class="fs-2 fw-bold text-center text-uppercase"><span class="section-border-black">Video
                    Gallery</span></h2>
        </div>
        <div class="row">

            @foreach ($video as $item)
            <div class="col-md-4 col-12">
                <div>
                    <iframe width="100%" height="200px" src="{{ $item->link }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen=""></iframe>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection