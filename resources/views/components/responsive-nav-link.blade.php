@props(['active'])

@php
$classes = ($active ?? false)
            ? 'd-block border border-primary-subtle'
            : 'd-block border border-primary-subtle';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
