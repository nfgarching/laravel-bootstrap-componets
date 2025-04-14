@props([
    'field' => '',
    'attri' => '',
    'class' => '',
    'label' => 'field',
    'value' => '',
    'height' => '200px',
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

<div class="form-floating @error($field) is-invalid @enderror">

    <textarea class="{{ $class }} @error($field) is-invalid @enderror" {{ $attri }}
        placeholder="{{ $label }}" 
        name="{{ $field }}"
        style="height: {{ $height }}; font-size: 0.75rem;"
    >{{ $slot }}</textarea>

    <label for="floatingInput-{{ $label }}">{{ $label }}</label>

    <div class="invalid-feedback">
        @error($field)
            {{ $message }}
        @enderror
    </div>

</div>
