<!doctype html>
<html lang="en" data-bs-theme="auto">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title> @yield("title") </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">
    <link rel="stylesheet" href={{ mix('assets/css/app.css') }} >

    <!-- Custom styles for this template -->
  </head>
  <body class="bg-body-tertiary">
    {{-- MENU --}}
    @include("components.menu")
    {{-- MAIN --}}
    <main class="container">
      @yield("content")
    </main>
    {{-- FOOTER --}}
    @include("components.footer")

    <script src={{ mix('/assets/js/app.js') }}></script>
  </body>
</html>
