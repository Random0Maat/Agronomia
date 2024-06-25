@props(['value'])

<label {{ $attributes->merge(['class' => 'd-block fw-medium fs-5 text-opacity-50 p-0']) }}>
    {{ $value ?? $slot }}
</label>
