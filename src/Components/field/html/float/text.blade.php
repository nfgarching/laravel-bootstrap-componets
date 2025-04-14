@props([
    'field' => '',
    'attri' => '',
    'class' => '',
    'label' => '',
    'value' => '',
    // text special
    'rows' => '5',
])

@php
    if ($label == '') {
        $label = ucfirst($field);
    }
    if ($slot->isNotEmpty()) {
        $value = $slot;
    }
    $class = 'form-control ' . $class;
@endphp

<div class="form-floating @error($field) is-invalid @enderror">

    <textarea 
        name="{{ $field }}" 
        {{ $attri }} 
        class="{{ $class }} @error($field) is-invalid @enderror"
        rows="{{ $rows }}"
        style="height: auto;">{{ $value }}</textarea>

    <label for="floatingInput-{{ $label }}">{{ $label }}</label>

    <div class="invalid-feedback">
        @error($field)
            {{ $message }}
        @enderror
    </div>

</div>
