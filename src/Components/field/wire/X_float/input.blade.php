@props([
    'field',
    'attri'    => '',
    'class'    => '',
    'fname'    => '',
    'label'    => '',
    'value'    => '',
    'datalist' => [],
    'token'    => rand(),
    'type'     => 'text',
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

<input 
    @if ($field) wire:model="{{ $field }}" @endif
    class="{{ $class }} @error($field) is-invalid @enderror"
    @if ($datalist) list="datalist_{{ $token }}" @endif
    type="{{ $type }}" value="{{ $value }}"
    placeholder="{{ $label }}" 
    {{ $attri }}
>

<div class="invalid-feedback">
    @error($field)
        {{ $message }}
    @enderror
</div>
