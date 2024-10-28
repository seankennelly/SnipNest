@props(['flexible' => false])

<div {{ $attributes->class([
        'bg-gray-50',
        'border',
        'border-gray-200',
        'rounded',
        $flexible ? 'flex items-center' : '', // Conditionally add flex classes
        !$attributes->has('class') ? 'p-4' : '' // Apply p-4 only if no padding class is passed
    ]) }}>
    {{ $slot }}
</div>