@props([
    'field' => '',
    'attri' => '',
    'class' => '',
    'label' => 'field',
    'type' => 'text',
    'value' => '',
    'rows' => '3',
    'token'    => rand(),
])

@php
    if ($label == 'field') {
        $label = ucfirst($field);
    }
    if (isset($this->form->$field)) {
        $field = 'form.' . $field;
    } elseif (isset($this->item[$field])) {
        $field = 'item.' . $field;
    }
    $class = 'form-control ' . $class;
@endphp

<div class="form-floating @error($field) is-invalid @enderror">

    <textarea wire:model.lazy="{{ $field }}" wire:dirty.class="bg-info"
        class="{{ $class }} @error($field) is-invalid @enderror"    
        rows="{{ $rows }}" style="height: auto;" 
        id="floatingInput-{{ $field }}"
        {{ $attri }}></textarea>

    <label for="floatingInput-{{ $field }}">{{ $label . ' - c:field.update - ' . date('H:i:s') }}</label>

    <div class="invalid-feedback">
        @error($field)
            {{ $message }}
        @enderror
    </div>

</div>
