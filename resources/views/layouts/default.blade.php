<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'Weibo App')</title>

  <!-- Fonts -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">


</head>

<body>
  <div id="app" class="wb-miniblog">

    @include('layouts._header')

    <div class="container content">
      @yield('content')
    </div>

    @include('layouts._footer')
  </div>
</body>

</html>
