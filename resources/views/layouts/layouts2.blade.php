<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FutureHospital') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    <link href="{{ asset('css/navstyle.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/loginstyle.css') }}" rel="stylesheet"> 

 
    <!-- Meta tag Keywords -->
	
	<meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
   
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <section id="banner" class="banner">
        <div class="bg-color">
    <div id="app">




      @include('inc.navbar')




        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>
  
</section>
</body>
</html>
