@props([
    'field' => '',
    'attri' => '',
    'class' => '',
    'label' => 'field',
    'type'  => 'text',
    'value' => '',
])

@php
    if ($label == 'field') {
        $label = ucfirst($field);
    }
    if (isset($this->form->$field)) {
        $field = 'form.' . $field;
        // echo $this->form->$field;
    }
    if (isset($this->item[$field])) {
        $field = 'item.' . $field;
        // dd($this->item[$field]);
    }
    $class = 'form-control ' . $class;
    // echo $field;
@endphp

<div class="form-floating @error($field) is-invalid @enderror">

    <input @if ($field) wire:model="{{ $field }}" @endif
        {{ $attri }}
        class="{{ $class }} @error($field) is-invalid @enderror"
        id="floatingInput-{{ $field }}"
        placeholder="{{ $label }}" 
        type="{{ $type }}" 
        value="{{ $value }}"
    >

    <label for="floatingInput-{{ $field }}">{{ $label }}</label>

    <div class="invalid-feedback">
        @error($field)
            {{ $message }}
        @enderror
    </div>

</div>
