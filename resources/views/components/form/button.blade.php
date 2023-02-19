<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium']) }}>
    {{ $slot }}
</button>