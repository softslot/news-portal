<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased">
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>

        <div x-data="{ show: false }">
            <button @click="show = !show">Show</button>
            <h1 x-show="show">Alpine Js is working !</h1>
        </div>
        <hr>
    
        <div x-data>
            <button @click="alert('Alpine Js is working !')">Click</button>
        </div>
    </body>
</html>
