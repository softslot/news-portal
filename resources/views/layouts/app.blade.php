<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
            <div class="mb-2 sm:mb-0 inner">
                <a href="#" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Laravel с нуля</a><br>
                <span class="text-xs text-grey-dark">Уроки от CutCode</span>
            </div>
    
            <div class="sm:mb-0 self-center">
                @guest
                    <a href="{{ route('login') }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Войти</a>
                @endguest
                    
                @auth
                    <a href="{{ route('logout') }}" data-method="post" csrf class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Выйти</a>
                @endauth
            </div>
        </nav>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
            {{ $slot }}
        </div>
    </body>
</html>