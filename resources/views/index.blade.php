<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('app.css') }}">
        <title>Laravel | Homepage</title>      
    </head>
    <body>
        <div class="bg-beige">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Hello Laravel</h1>
                    </div>
                    <div class="col">
                        <a href="{{ route('contact') }}">Contatti</a>
                        <a href="{{ route('about-us') }}">Su di noi</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>