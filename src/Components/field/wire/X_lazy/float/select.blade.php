@props([
    'field',
    'attri'  => '',
    'class'  => '',
    'label'  => 'field',
    'type'   => 'text',
    'value'  => '',
    'option' => [],
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

    <select wire:model.lazy="{{ $field }}" wire:dirty.class="bg-info"
        class="{{ $class }} @error($field) is-invalid @enderror"    
        type="{{ $type }}" value="{{ $value }}"
        id="floatingInput-{{ $field }}"
        {{ $attri }}
    >

        <option>---</option>

        @forelse($option as $key => $txt)
            {{-- <option value="{{ $key }}" @if ($isSelected($key)) selected="selected" @endif> --}}
            <option value="{{ $key }}">
                {{ $txt }}
            </option>
        @empty
            {{ $slot }}
        @endforelse

    </select>

    <label for="floatingInput-{{ $label }}">{{ $label . ' - c:field.update - ' . date('H:i:s') }}</label>

    <div class="invalid-feedback">
        @error($field)
            {{ $message }}
        @enderror
    </div>

</div>
