<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FututreHospital') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal" rel="stylesheet">
    
    <!-- Styles -->
   
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" > 
 
    
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <div id="app">
        @include('inc.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

  
  

</body>
</html>
