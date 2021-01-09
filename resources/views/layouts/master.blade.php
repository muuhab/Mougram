<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">



        <title>@yield('title')</title>
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> --}}
        <link href="{{asset('offline/boot/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('offline/fontawesome-free-5.11.2-web/css/all.css')}}" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">


    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            
            @yield('content')
        </div>
        @yield('footer')
        <script src="{{URL::to('/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{URL::to('/offline/fontawesome-free-5.11.2-web/js/fontawesome.min.js')}}"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.3/jquery.timeago.js"></script> --}}
        {{-- <script src="https://kit.fontawesome.com/c66570e5b2.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> --}}


        <script src="{{URL::to('/js/jquery.timeago.js')}}"></script>
        <script src="{{URL::to('/js/ap.js')}}"></script>
        <script src="{{URL::to('/offline/boot/js/bootstrap.min.js')}}"></script>
    
    </body>
</html>
