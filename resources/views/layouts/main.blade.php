<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{ config('app.name')}}</title>

    @include('layouts.partials.header-scripts')
  </head>
  <body>
    @yield('content')
    @include('layouts.partials.footer-scripts')
  </body>
</html>
