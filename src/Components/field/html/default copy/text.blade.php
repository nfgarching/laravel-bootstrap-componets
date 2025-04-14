@props([
    'field' => '',
    'attri' => '',
    'class' => '',
    'label' => 'field',
    'value' => '',
    'item' => '',
    'rows' => '10',
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

<textarea class="{{ $class }}@error($field) is-invalid @enderror" name="{{ $field }}" {{ $attri }}
    rows="{{ $rows }}" placeholder="{{ $label }}">{{ $value }}</textarea>

<div class="invalid-feedback">
    @error($field)
        {{ $message }}
    @enderror
</div>
