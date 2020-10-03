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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="/" class="navbar-brand">Weibo App</a>
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item"><a href="/help" class="nav-link"></a></li>
        <li class="nav-item"><a href="#" class="nav-link">登录</a></li>
      </ul>
    </div>
  </nav>

  <div class="container content">
    @yield('content')
  </div>
</body>

</html>
