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
      @include('layouts.partials.menu')
      <!-- Content -->
      <div class="container">
    @yield('content')
      </div>
      <!-- End Content -->
    @include('layouts.partials.footer-scripts')
  </body>
</html>
