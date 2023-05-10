<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!--styles-->
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  @yield('css')
  <script src="{{ asset('js/index.js') }}" defer></script>
</head>
<body>
  @include('partials.header')
  <div class="container">
    @yield('content')
  </div>
</body>
</html>