<button {{ $attributes->merge(['type' => 'submit', 'class' => 'border border-success rounded fw-semibold text-white bg-dark ']) }}>
    {{ $slot }}
</button>
