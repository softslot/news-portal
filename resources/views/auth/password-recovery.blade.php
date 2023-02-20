<x-guest-layout>

    <x-form.h1>Восстановление пароля</x-form.h1>

    <x-form method="POST" action="{{ route('password_recovery_process') }}">

        <div>
            <x-form.text-input name="email" placeholder="Email" />
            <x-form.input-error :messages="$errors->get('email')" />
        </div>

        <div>
            <x-form.link href="{{ route('login') }}">Вспомнил пароль</x-form.link>
        </div>

        <x-form.button>Восстановить</x-form.button>
    </x-form>

</x-guest-layout>