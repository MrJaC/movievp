<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{ config('app.name')}}</title>

    @include('layouts.partials.header-scripts')
  </head>
  <body class="d-flex flex-column min-vh-100">
      @include('layouts.partials.menu')
      <!-- Content -->
    @yield('content')
      @include('layouts.partials.footer')
      <!-- End Content -->

    @include('layouts.partials.footer-scripts')
  </body>
</html>
