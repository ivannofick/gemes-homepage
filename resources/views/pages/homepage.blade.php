@extends('default')
@section('contents')
<style>
    .swiper-slide { width: 80% !important; }
</style>
    <div class="swiper" id="mySwiper1">
    <div class="swiper mySwiper">
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
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            spaceBetween: 30,
            initialSlide: 1,
            centeredSlides: true,
        });

    </script>
@endsection
