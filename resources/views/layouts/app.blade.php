<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content=" {{ csrf_token() }} ">

        <title> {{ config('app.name', 'My Portfolio') }} </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href=" {{ asset( 'css/app.css' ) }} ">

        


    </head>
    <body>
        <div class="container">
            @include('inc.navbar')
            
            @yield('content')

            @include('inc.footer')
        </div>
    <!-- Scripts -->
    @stack('scripts')
    </body>
</html>