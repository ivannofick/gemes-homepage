@extends('default')
@section('contents')
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
            slidesPerView: 2,
            spaceBetween: 30,
            initialSlide: 1,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endsection
