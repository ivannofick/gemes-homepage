<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/assets/css/custom-color.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Gemes</title>
  </head>
  <body class="dark:bg-zinc-800">
    @include('atoms.headers')
    <main class="p-4">
      @yield('contents')
    </main>
    @include('atoms.menu')
  </body>
</html>