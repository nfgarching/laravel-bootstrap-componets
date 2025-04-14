@props([
    'field' => '',
    'attri' => '',
    'class' => '',
    'label' => 'field',
    'value' => '',
    'item' => '',
    'type' => 'text',
])


@php

    if ($item && !$value) {
        // dump($item);
        // dump($field);
        // dump($item->$field);
        $value = $item->$field;
    }

    if ($label == 'field') {
        $label = ucfirst($field);
    }

    // if (isset($this->form->$field)) {
    //     $field = 'form.' . $field;
    // echo $this->form->$field;
    // }
    // if (isset($this->item[$field])) {
    //     $field = 'item.' . $field;
    //     // echo $this->item[$field];
    // }
    $class = 'form-control ' . $class;
    // echo $field;
    // dump('Change Components/field/index => Components/field/input');
@endphp

<input class="{{ $class }}@error($field) is-invalid @enderror" 
    name="{{ $field }}" {{ $attri }}
    value="{{ $value }}" placeholder="{{ $label }}" type="{{ $type }}">

<div class="invalid-feedback">
    @error($field)
        {{ $message }}
    @enderror
</div>
