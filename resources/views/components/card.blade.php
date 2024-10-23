<div {{ $attributes->class([
        'bg-gray-50',
        'border',
        'border-gray-200',
        'rounded',
        !$attributes->has('class') ? 'p-6' : '' // Apply p-6 only if no padding class is passed
    ]) }}>
    {{ $slot }}
</div>