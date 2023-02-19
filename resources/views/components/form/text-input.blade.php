@props([
    'disabled' => false,
    'borderRed' => $errors->has($name ?? '') ? 'border-red-600' : '',
])

<input  {!! $attributes->merge([
            'type' => 'text',
            'name' => '',
            'value' => '',
            'placeholder' => '',
            'class' => 'w-full h-12 border border-gray-800 rounded px-3 '. $borderRed,
        ]) !!}  {{ $disabled ? 'disabled' : '' }} />