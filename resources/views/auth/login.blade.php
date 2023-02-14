<x-guest-layout>
    <x-form.h1>Вход</x-form.h1>
    <form method="POST" action="{{ route('login') }}" class="space-y-5 mt-5">
        @csrf

        <div>
            <x-form.text-input name="email" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-form.text-input name="password" type="password" placeholder="Пароль" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div>
            <x-form.link href="{{ route('password.request') }}">Забыли пароль?</x-form.link>
        </div>

        <div>
            <x-form.link href="{{ route('register') }}">Регистрация</x-form.link>
        </div>

        <x-form.button>Войти</x-form.button>
    </form>
</x-guest-layout>
