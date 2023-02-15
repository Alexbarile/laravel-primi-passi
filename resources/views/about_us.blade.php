<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('app.css') }}">
        <title>Laravel | About Us</title>      
    </head>
    <body>
        <div class="bg-red">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>{{$name}}</h1>
                    </div>
                    <div class="col">
                        <a href="{{ route('homepage') }}">Homepage</a>
                        <a href="{{ route('contact') }}">Contatti</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>