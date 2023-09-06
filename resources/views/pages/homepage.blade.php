@extends('default')
@section('contents')
    <style>
        .swiper-slide {
            width: 80% !important;
        }
    </style>
    <div class="swiper mb-4" id="mySwiper1">
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
