@props([
    'field',
    'attri'    => '',
    'class'    => '',
    'label'    => '',
    'token'    => rand(),
    'value'    => '',
    'option'   => [],
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
    $class = 'form-control ' . $class;
    // echo $field, $value;
@endphp

<div class="form-floating @error($field) is-invalid @enderror">

    <select wire:model="{{ $field }}"
        autocomplete="off" {{ $attri }}
        class="{{ $class }} @error($field) is-invalid @enderror"    
        type="{{ $type }}" value="{{ $value }}"
        id="floatingInput-{{ $token }}"
    >
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

    <label for="floatingInput-{{ $token }}">{{ $label . ' - c:field.wire.blur - ' . date('H:i:s') }}</label>

    <div class="invalid-feedback">
        @error($field)
            {{ $message }}
        @enderror
    </div>

</div>
