<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


   
     
        <!-- Styles -->
        <link href="{{asset('bootstrap/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('style.css')}}" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <div class="">
            @yield('content')
        </div>
    </body>
</html>
