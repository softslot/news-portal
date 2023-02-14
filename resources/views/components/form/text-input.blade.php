@props([
    'disabled' => false,
    'name',
    'value',
    'type',
    'placeholder',
])

<input {{ $disabled ? 'disabled' : '' }}
    name="{{ $name }}"
    value="{{ $value ?? '' }}"
    type="{{ $type ?? 'text' }}"
    placeholder="{{ $placeholder ?? '' }}"
    class="w-full h-12 border border-gray-800 rounded px-3 @error($name) border-red-600 @enderror"
/>
