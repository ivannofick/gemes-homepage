<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Gemes</title>
  </head>
  <body>
    <!-- Header -->
    <header class="bg-blue-500 p-4">
      <h1 class="text-white text-2xl text-center">Your Mobile App</h1>
    </header>
    <!-- Content -->
    <main class="p-4">
      @yield('contents')
    </main>
    @include('atoms.menu')
  </body>
</html>