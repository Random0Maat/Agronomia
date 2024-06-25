@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-primary focus:border border-primary-subtle shadow-sm bg-body-tertiary rounded']) !!}>
