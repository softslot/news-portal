<x-app-layout>
    @auth
        <div>Привет {{ auth()->user()->name }}</div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Выйти</button>
        </form>
    @endauth
    
    @guest
        <div>Привет Гость</div>
        <a href="{{ route('login') }}">Войти</a>
    @endguest
</x-app-layout>
