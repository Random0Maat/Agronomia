@props(['active'])

@php
$classes = ($active ?? false)
            ? 'd-flex justify-content-center px-1 pt-1 '
            : 'd-flex justify-content-center px-1 pt-1 ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
