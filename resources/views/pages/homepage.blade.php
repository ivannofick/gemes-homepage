@extends('default')
@section('contents')
<link rel="stylesheet" href="{{ asset('/assets/css/custom-swipper-card.css') }}">

    <style>
        #mySwiper1 .swiper-slide {
            width: 60vw !important;
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
    <div class="mb-4 swipper-card">
        <div class="flex items-center justify-between text-gray-600">
            <div class="text-lg font-semibold leading-relaxed justify-items-start">Popular Games</div>
            <div class="text-right text-[13px] font-semibold justify-items-end">See All</div>
        </div>
        <div class="swiper swiper-cards swiper-3d swiper-initialized swiper-horizontal swiper-watch-progress" id="mySwiper3">
            <div class="swiper-wrapper" id="swiper-wrapper-eef3311dc445b9bd" aria-live="polite" style="cursor: grab;">
              <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="1 / 9" style="width: 240px; z-index: 9; transform: translate3d(0px, 0px, 0px) rotateZ(0deg) scale(1);">Slide 1<div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 0;"></div></div>
              <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 9" style="width: 240px; z-index: 8; transform: translate3d(calc(-240px + 7.25%), 0px, -100px) rotateZ(2deg) scale(1);">Slide 2<div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 1;"></div></div>
              <div class="swiper-slide" role="group" aria-label="3 / 9" style="width: 240px; z-index: 7; transform: translate3d(calc(-480px + 13%), 0px, -200px) rotateZ(4deg) scale(1);">Slide 3<div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 1;"></div></div>
              <div class="swiper-slide" role="group" aria-label="4 / 9" style="width: 240px; z-index: 6; transform: translate3d(calc(-720px + 17.25%), 0px, -300px) rotateZ(6deg) scale(1);">Slide 4<div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 1;"></div></div>
              <div class="swiper-slide" role="group" aria-label="5 / 9" style="width: 240px; z-index: 5; transform: translate3d(calc(-960px + 20%), 0px, -400px) rotateZ(8deg) scale(1);">Slide 5<div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 1;"></div></div>
              <div class="swiper-slide" role="group" aria-label="6 / 9" style="width: 240px; z-index: 4; transform: translate3d(calc(-1200px + 20%), 0px, -400px) rotateZ(8deg) scale(1);">Slide 6<div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 1;"></div></div>
              <div class="swiper-slide" role="group" aria-label="7 / 9" style="width: 240px; z-index: 3; transform: translate3d(calc(-1440px + 20%), 0px, -400px) rotateZ(8deg) scale(1);">Slide 7<div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 1;"></div></div>
              <div class="swiper-slide" role="group" aria-label="8 / 9" style="width: 240px; z-index: 2; transform: translate3d(calc(-1680px + 20%), 0px, -400px) rotateZ(8deg) scale(1);">Slide 8<div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 1;"></div></div>
              <div class="swiper-slide" role="group" aria-label="9 / 9" style="width: 240px; z-index: 1; transform: translate3d(calc(-1920px + 20%), 0px, -400px) rotateZ(8deg) scale(1);">Slide 9<div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 1;"></div></div>
            </div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
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

        new Swiper("#mySwiper3", {
            effect: "cards",
            grabCursor: true,
        });
    
    </script>
@endsection
