<form {{ $attributes->merge(['method' => 'GET', 'action' => '', 'class' => 'space-y-5 mt-5']) }}>
    @csrf
    {{ $slot }}
</form>