@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'fw-medium fs-5']) }}>
        {{ $status }}
    </div>
@endif
