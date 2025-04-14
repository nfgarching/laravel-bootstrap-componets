@props([
    'field',
    'attri' => '',
    'class' => '',
    'dirty' => 'bg-info',
    'fname' => '',
    'label' => '',
    'modifier' => '',
    'token' => rand(),
    'value' => '',
    // select special
    'option' => [],
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
    $class = 'form-select ' . $class;
@endphp

<select autocomplete="off" {{ $attri }}
    @switch($modifier)
        @case('blur')
            wire:model.blur="{{ $field }}"                
            @break
        @case('change')
            wire:model.change="{{ $field }}"                
            @break
        @case('lazy')
            wire:model.lazy="{{ $field }}"                
            @break
        @case('live')
            wire:model.live="{{ $field }}"                
            @break
        @default
            wire:model="{{ $field }}"                
    @endswitch
    @if ($dirty) wire:dirty.class="{{ $dirty }}" @endif
    class="{{ $class }} @error($field) is-invalid @enderror" id="field-{{ $token }}"
    placeholder="{{ $label }}" value="{{ $value }}">

    <option>---</option>

    @forelse($option as $key => $txt)
        {{-- <option value="{{ $key }}" @if ($isSelected($key)) selected="selected" @endif> --}}
        {{-- <option value="{{ $key }}"> --}}
        <option {{ $key == $value ? 'selected' : '' }} value="{{ $key }}">
            {{ $txt }}
        </option>
    @empty
        {{ $slot }}
    @endforelse

</select>

<div class="invalid-feedback">
    @error($field)
        {{ $message }}
    @enderror
</div>
