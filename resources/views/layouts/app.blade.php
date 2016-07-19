<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alluring Labs</title>

  @stack('seo')

  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/css/app.css" media="screen" charset="utf-8">
  <script src="https://use.fontawesome.com/0e7548fbf5.js"></script>
</head>
<body id="app-layout">

  @include('layouts.header')

  <main id="main-content">
    @yield('main')
  </main>

  @include('layouts.footer')

  <script src="/js/app.js"></script>
</body>
</html>
