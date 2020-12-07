<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta http-equie="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF -Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- 配置文章自动title -->
  <title>@yield('title','LaraBBS') - Laravel 进阶</title>
<!-- style -->
<link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
  <div id="app" class="{{ route_class() }}-page">
    @include('layouts._header')
    <div class="container">
      @include('shared._messages')

      @yield('content')

    </div>
    @include('layouts._footer')
  </div>
<!-- script-->
  <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
