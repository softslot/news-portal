<x-guest-layout>
    <x-form.h1>Восстановление пароля</x-form.h1>
    <form class="space-y-5 mt-5" method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <x-form.text-input name="email" type="text" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-form.link href="{{ route('login') }}">Вспомнил пароль</x-form.link>
        </div>

        <x-form.button>Восстановить</x-form.button>
    </form>
</x-guest-layout>
