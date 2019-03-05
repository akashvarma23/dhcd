<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield("title")  {{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{URL::to('favicon.png')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{URL::to('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{URL::to('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{URL::to('css/style.css')}}" rel="stylesheet">

    @yield("css")
    @yield("js-head")

</head>
<body>
    <div id="app">

        <main class="py-4">
            @includeIf('partial.session')
            @includeIf('partial.validator') 
            @yield('content')
        </main>
    </div>

      <script src="{{URL::to('lib/jquery/jquery.min.js')}}"></script>
      <script src="{{URL::to('lib/jquery/jquery-migrate.min.js')}}"></script>
      <script src="{{URL::to('lib/superfish/hoverIntent.js')}}"></script>
      <script src="{{URL::to('lib/superfish/superfish.min.js')}}"></script>
      <script src="{{URL::to('lib/tether/js/tether.min.js')}}"></script>
      <script src="{{URL::to('lib/stellar/stellar.min.js')}}"></script>
      <script src="{{URL::to('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{URL::to('lib/counterup/counterup.min.js')}}"></script>
      <script src="{{URL::to('lib/waypoints/waypoints.min.js')}}"></script>
      <script src="{{URL::to('lib/easing/easing.js')}}"></script>
      <script src="{{URL::to('lib/stickyjs/sticky.js')}}"></script>
      <script src="{{URL::to('lib/parallax/parallax.js')}}"></script>
      <script src="{{URL::to('lib/lockfixed/lockfixed.min.js')}}"></script>

      <!-- Template Specisifc Custom Javascript File -->
      <script src="js/custom.js"></script>
    @yield("js-body")
</body>
</html>
