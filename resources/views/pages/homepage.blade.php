@extends('default')
@section('contents')
<link rel="stylesheet" href="{{ asset('/assets/css/custom-swipper-card.css') }}">

    <style>
        #mySwiper1 .swiper-slide {
            width: 69vw !important;
            margin-right: 15px !important;
        }
        #mySwiper2 .swiper-slide {
            width: 40vw !important;
            margin-right: 11px !important;
        }
    </style>
    <div class="mb-4">
        <div class="swiper" id="mySwiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/football.svg') }}" alt="..." class="w-full" width="300" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/football.svg') }}" alt="..." class="w-full" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/football.svg') }}" alt="..." class="w-full" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/football.svg') }}" alt="..." class="w-full" />
                </div>
    
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div class="flex items-center justify-between text-gray-600">
            <div class="text-lg font-semibold leading-relaxed justify-items-start">Free Games</div>
            <div class="text-right text-[13px] font-semibold justify-items-end">See All</div>
        </div>
        <div class="swiper" id="mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/match-week.svg') }}" alt="..." class="w-full" width="300" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/match-week.svg') }}" alt="..." class="w-full" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/match-week.svg') }}" alt="..." class="w-full" />
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/match-week.svg') }}" alt="..." class="w-full" />
                </div>
    
            </div>
    
        </div>
    </div>
    <script>
        new Swiper("#mySwiper1", {
            slidesPerView: "auto",
            spaceBetween: 30,
            initialSlide: 1,
            centeredSlides: true,
        });
        new Swiper("#mySwiper2", {
            slidesPerView: "auto",
            spaceBetween: 30,
            initialSlide: 1,
            centeredSlides: true,
        });
    
    </script>
@endsection
