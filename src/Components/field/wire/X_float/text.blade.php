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

    'addon' => '',
 // 'addon' => '<i class="bi bi-card-text"></i>',
    'height' => '150px',
    'save' => 'save',
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

<div class="input-group flex-nowrap">

    @if ($addon)
        <span class="input-group-text">{!! $addon !!}</span>
    @endif

    <div class="form-floating @error($field) is-invalid @enderror">
        
        <textarea 
            wire:change="{{ $save }}" 
            wire:model="{{ $field }}"
            class="form-control @error($field) is-invalid @enderror" 
            id="floatingInput-{{ $field }}"
            placeholder="{{ $label }}" 
            style="height: 233px"></textarea>
        
        <label for="floatingInput-{{ $field }}">{{ $label }}</label>

        <div class="invalid-feedback">
            @error($field)
                {{ $message }}
            @enderror
        </div>

    </div>

</div>
