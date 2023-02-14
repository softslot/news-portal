<a {{ $attributes->merge([
        'href' => '#',
        'class' => 'font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2'
    ]) }}>{{ $slot }}</a>