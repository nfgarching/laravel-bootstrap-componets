@props([
    'field',
    'attri'    => '',
    'class'    => '',
    'fname'    => '',
    'label'    => '',
    'type'     => 'text',
    'value'    => '',
    'rows'     => '5',
    'token'    => rand(),
])

@php
    if ($label == '') {
        $label = ucfirst($field);
    }
    if (isset($this->form->$field)) {
        $field = 'form.' . $field;
    } elseif (isset($this->item[$field])) {
        $field = 'item.' . $field;
    }
    if ($slot->isNotEmpty())  {
        $value = $slot; 
    }
    $class = 'form-control ' . $class;
@endphp

<div class="form-floating @error($field) is-invalid @enderror">

    <textarea
        @if ($field) wire:model="{{ $field }}" @endif
        class="{{ $class }} @error($field) is-invalid @enderror"    
        rows="{{ $rows }}" style="height: auto;" 
        id="floatingInput-{{ $token }}"
        {{ $attri }}
    >{{ $value }}</textarea>

    <label for="floatingInput-{{ $token }}">{{ $label . ' - c:field.wire.blur - ' . date('H:i:s') }}</label>

    <div class="invalid-feedback">
        @error($field)
            {{ $message }}
        @enderror
    </div>

</div>
