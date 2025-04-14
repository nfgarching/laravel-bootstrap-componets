@props([
    'field' => '',
    'attri' => '',
    'class' => '',
    'label' => 'field',
    'value' => '',
    'type' => 'text',
    'item' => '',
])

@php
    if ($item && !$value) {
        $value = $item->$field;
    }
    if ($label == 'field') {
        $label = ucfirst($field);
    }
    $class = 'form-control ' . $class;
@endphp

<input name="{{ $field }}" {{ $attri }} class="{{ $class }}
    @error($field) is-invalid @enderror"
    value="{{ $value }}" placeholder="{{ $label }}" type="{{ $type }}">

<div class="invalid-feedback">
    @error($field)
        {{ $message }}
    @enderror
</div>
