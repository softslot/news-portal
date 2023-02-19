<x-guest-layout>

    <x-form.h1>Регистрация</x-form.h1>

    <x-form method="POST" action="{{ route('register_process') }}">
        <div>
            <x-form.text-input name="name" placeholder="Имя" value="{{ old('name') }}" />
            <x-form.input-error :messages="$errors->get('name')" />
        </div>

        <div>
            <x-form.text-input name="email" placeholder="Email" value="{{ old('email') }}" />
            <x-form.input-error :messages="$errors->get('email')" />
        </div>

        <div>
            <x-form.text-input type="password" name="password" placeholder="Пароль" value="{{ old('password') }}" />
            <x-form.input-error :messages="$errors->get('password')" />
        </div>

        <div>
            <x-form.text-input type="password" name="password_confirmation" placeholder="Подтверждение пароля" value="{{ old('password_confirmation') }}" />
            <x-form.input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <div>
            <x-form.link href="{{ route('login') }}">Есть аккаунт?</x-form.link>
        </div>

        <x-form.button>Зарегистрироваться</x-form.button>
    </x-form>

</x-guest-layout>