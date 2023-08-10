@props(['disabled' => false, 'options' => [], 'selected' => null])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-select']) !!}>
    @foreach ($options as $value => $label)
        <option value="{{ $value }}" {{ $value == $selected ? 'selected' : '' }}>
            {{ $label }}
        </option>
    @endforeach
</select>
