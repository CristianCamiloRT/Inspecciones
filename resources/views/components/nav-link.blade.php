@props(['active'])

@php
$classes = ($active ?? false)
            ? 'sidebar-link'
            : 'sidebar-link';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
