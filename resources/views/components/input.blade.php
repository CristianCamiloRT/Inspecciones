@props([
    'disabled' => false,
    'placeholder' => ''
])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control', 'placeholder' => $placeholder]) !!}>
