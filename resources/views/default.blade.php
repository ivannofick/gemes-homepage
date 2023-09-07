<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/assets/css/custom-color.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="{{ asset('/assets/js/flwbt.1.8.1.min.js') }}"></script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <title>Gemes</title>
</head>

<body class="dark:bg-zinc-800">
  <div class="flex item-center justify-center">
    <div class="w-screen md:w-[768px]">
        @include('atoms.headers')
        <main class="p-4 mb-20">
            @yield('contents')
        </main>
        @include('atoms.menu')
    </div>

  </div>
</body>

</html>
