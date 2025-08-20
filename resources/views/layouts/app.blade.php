<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/head')
    <title>@yield('title', 'Khalifa Portfolio')</title>
  </head>

  <body>
    @include('partials.header')
    @include('partials.sidebar')

    <main class="main">
      @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.scripts')
  </body>
</html>
