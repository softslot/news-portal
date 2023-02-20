<x-guest-layout>

    <x-form.h1>Вход</x-form.h1>

    <x-form method="POST" action="{{ route('login_process') }}">
        <div>
            <x-form.text-input name="email" placeholder="Email" value="{{ old('email') }}" />
            <x-form.input-error :messages="$errors->get('email')" />
        </div>

        <div>
            <x-form.text-input type="password" name="password" placeholder="Пароль" />
            <x-form.input-error :messages="$errors->get('password')" />
        </div>

        <div>
            <x-form.link href="{{ route('password_recovery') }}">Забыли пароль?</x-form.link>
        </div>

        <div>
            <x-form.link href="{{ route('register') }}">Регистрация</x-form.link>
        </div>

        <x-form.button>Войти</x-form.button>
    </x-form>

</x-guest-layout>