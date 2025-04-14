@props([
    'field',
    'attri'    => '',
    'class'    => '',
    'label'    => 'field',
    'type'     => 'text',
    'value'    => '',
    'datalist' => [],
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
    // dump($field);
@endphp

<div class="form-floating @error($field) is-invalid @enderror">

    <input wire:model.lazy="{{ $field }}" wire:dirty.class="bg-info"
        id="floatingInput-{{ $token }}"
        class="{{ $class }} @error($field) is-invalid @enderror"    
        @if ($datalist) list="datalist_{{ $token }}" @endif
        type="{{ $type }}" value="{{ $value }}"
        {{ $attri }}
    >

    @if ($datalist)
        <datalist id="datalist_{{ $token }}">
            @forelse($datalist as $txt)
                <option>
                    {{ $txt }}
                </option>
            @empty
            @endforelse
        </datalist>
    @endif

    <label for="floatingInput-{{ $token }}">{{ $label . ' - c:field.update - ' . date('H:i:s') }}</label>

    <div class="invalid-feedback">
        @error($field)
            {{ $message }}
        @enderror
    </div>

</div>
