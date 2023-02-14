<x-guest-layout>
    <x-form.h1>Регистрация</x-form.h1>
    <form method="POST" class="space-y-5 mt-5" action="{{ route('register') }}">
        @csrf

        <div>
            <x-form.text-input name="name" placeholder="Имя" value="{{ old('name') }}"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-form.text-input name="email" placeholder="Email" value="{{ old('email') }}"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-form.text-input name="password" type="password" placeholder="Пароль" value="{{ old('password') }}"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-form.text-input name="password_confirmation" type="password" placeholder="Подтверждение пароля" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div>
            <x-form.link href="{{ route('login') }}">Есть аккаунт?</x-form.link>
        </div>

        <x-form.button>Зарегистрироваться</x-form.button>
    </form>
</x-guest-layout>
