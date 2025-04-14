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

<div class="form-floating @error($field) is-invalid @enderror">

    <input
        @if ($field) wire:model="{{ $field }}" @endif
        class="{{ $class }} @error($field) is-invalid @enderror"
        @if ($datalist) list="datalist_{{ $token }}" @endif
        type="{{ $type }}" value="{{ $value }}"
        id="floatingInput-{{ $token }}"
        {{ $attri }}
    >

    @if ($datalist)
        <datalist id="datalist-{{ $token }}">
            @forelse($datalist as $txt)
                <option>
                    {{ $txt }}
                </option>
            @empty
            @endforelse
        </datalist>
    @endif

    <label for="floatingInput-{{ $token }}">{{ $label . ' - c:field.wire.blur - ' . date('H:i:s') }}</label>

    <div class="invalid-feedback">
        @error($field)
            {{ $message }}
        @enderror
    </div>

</div>
