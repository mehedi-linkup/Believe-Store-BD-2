@extends('layouts.website', ['pageName' => 'home'])
@section('title', 'Home')
@push('web-css')
<link rel="stylesheet" href="{{ asset('website/assets/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('website/assets/owl-carousel/owl.theme.default.min.css') }}">
@endpush

@section('web-content')
    @include('layouts.partials.web_slider')

    <section id="category-menu" class="category-menu section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="fs-2 fw-bold text-center text-uppercase text-white"><span class="section-border">Our Product
                            List</span></h2>
                </div>
            </div>
            <div class="row gy-3">
                @foreach ($category->take(8) as $item)
                    <div class="col-md-3 col-12 text-center">
                        <a href="{{ route('subcategory', $item->id) }}" class="filter-anchor">
                            <div class="filter-box">
                                <div class="img-box">
                                    <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="img-fluid" />
                                </div>
                                <h5 class="product-title mt-2">{{ Str::limit($item->name, 25, '') }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="our-service" class="our-service section-light section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <img src="{{ asset($content->about_image) }}" alt="" class="w-100 h-100">
                </div>
                <div class="col-md-4 col-12">
                    <img src="{{ asset($content->bg_image) }}" alt="" class="w-100 h-100">
                </div>
                <div class="col-md-4 col-12">
                    <div class="custom-card">
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

    <section id="what-we-do" class="what-we-do section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="grand-box">
                        <div class="inner-box">
                            <h3 class="card-title text-uppercase fw-bold mb-3">Who we are</h3>
                            <div style="max-height: 234px; overflow: auto;">
                                {!! $whatwe->description1 !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="grand-box">
                        <div class="inner-box">
                            <h3 class="card-title text-uppercase fw-bold mb-3">WHAT WE DO</h3>
                            <!-- <p class="card-semi-text w-75 mb-4">Pellentesque ut risus a odio posuere aliquet Pellentesque sapien erat .</p>
                      <ul class="mb-5">
                        <li><i class="fa-solid fa-circle-arrow-right"></i> <span>Sed massa tellus, aliquam rhoncus, venenatis quis.</span></li>
                        <li><i class="fa-solid fa-circle-arrow-right"></i> <span>Etiam enim. Suspendisse imperdiet cursus nisi.</span></li>
                      </ul> -->
                            <!-- <a href="" class="btn btn-orange text-uppercase rounded-pill">Read More</a> -->
                            <div>
                                {!! $whatwe->description2 !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="our-team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="fs-2 fw-bold text-center text-uppercase text-white"><span class="section-border">Meet our
                            Team</span></h2>
                </div>
            </div>
            <div class="row">
                @foreach ($management->take(4) as $item)
                    <div class="col-md-3 col-12">
                        <div class="team-box">
                            <div class="img-box">
                                <div class="icon-box">
                                    <ul class="link-icons justify-content-around">
                                        <li><a href="{{ $item->facebook }}" target="_blank"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="{{ $item->twitter }}" target="_blank"><i
                                                    class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="{{ $item->instagram }}" target="_blank"><i
                                                    class="fa-brands fa-instagram"></i></a></li>
                                        {{-- <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li> --}}
                                    </ul>
                                </div>
                                <img src="{{ asset('uploads/management/' . $item->image) }}" alt="{{ $item->name }}"
                                    class="img-fluid">
                            </div>
                            <h5 class="product-title text-center mt-4">{{ $item->name }}</h5>
                            <p class="text-designation text-center">{{ $item->designation }}</p>
                        </div>
                    </div>
                @endforeach
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
                <ul class="gallery">
                    @foreach ($gallery->take(15) as $item)
                        <li>
                            <a href="{{ asset('uploads/gallery/' . $item->image) }}" title="{{ $item->name }}"
                                class="image-link">
                                <img src="{{ asset('uploads/gallery/' . $item->image) }}" alt="">
                            </a>
                        </li>
                    @endforeach
                </ul>
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

                <div class="col-md-5 col-12">
                    <div>
                        <iframe width="100%" height="274" src="{{ $video[0]->link }}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="col-md-7 col-12 mt-md-0 mt-2">
                    <div class="row row-cols-md-3 row-cols-2 gx-1">
                        @for ($i = 1; $i < sizeof($video->take(7)); $i++)
                            <div class="col">
                                <iframe width="100%" height="135" src="{{ $video[$i]->link }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen=""></iframe>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news-event" class="news-event">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-12 ps-md-5 pe-md-5 section-padding">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <h2 class="fs-2 fw-bold text-center text-uppercase text-white"><span
                                    class="section-border">News & Offer</span></h2>
                        </div>
                    </div>
                    <div class="row gy-2 gy-md-0">
                        @foreach ($news->take(2) as $item)
                            @php
                                $monthNum = date('m', strtotime($item->created_at));
                                $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                $monthName = $dateObj->format('F');
                            @endphp
                            <div class="col-md-6 col-12">
                                <div class="full-box" style="height: 100%">
                                    <div class="image-card">
                                        <div class="post-date-box"> {{ date('d', strtotime($item->created_at)) }}
                                            <span>{{ $monthName }},
                                                {{ date('y', strtotime($item->created_at)) }}</span></div>
                                        <img src="{{ asset($item->image) }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-box">
                                        <h4><a href="{{ route('newsDetail', $item->id) }}">{{ $item->title }}</a></h4>
                                        <p>{{ Str::words($item->description, 15, '') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 col-12 pe-0 d-none d-md-block">
                    <img src="{{ asset('website/assets/image/section-background/' . $backimage->bgimage_news) }}"
                        alt="" class="cover-img w-100 h-100">
                </div>
            </div>
        </div>
    </section>

    <section id="partner" class="partner section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h2 class="fs-2 fw-bold text-center text-uppercase"><span class="section-border-black">Our Partners</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme">
                        @foreach ($partner as $item)
                        <div>
                            <div class="px-lg-3">
                                <a href="#!" class="text-decoration-none align-items-center">
                                    <div class="client-box">
                                        <div class="icon-box-client">
                                            <img src="{{ $item->image }}" alt=""
                                                class="partner-img">
                                        </div>
                                        <div class="client-title">{{ $item->name }}</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('web-js')
    <script src="{{ asset('website/assets/owl-carousel/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:3000,
            // nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
@endpush