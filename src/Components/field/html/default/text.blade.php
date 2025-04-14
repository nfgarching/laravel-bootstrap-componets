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

<textarea 
    name="{{ $field }}" 
    class="{{ $class }} @error($field) is-invalid @enderror" 
    placeholder="{{ $label }}"
    rows="{{ $rows }}" 
    {{ $attri }}
>@if ($slot->isNotEmpty()) {{ $slot }} @else {{ $value }} @endif

</textarea>

<div class="invalid-feedback">
    @error($field)
        {{ $message }}
    @enderror
</div>
