@props([
    'field',
    'attri' => '',
    'class' => '',
    'label' => 'field',
    'value' => '',
    // input special
    'datalist' => [],
    'type' => 'text',
])

@php
    if ($label == 'field') {
        $label = ucfirst($field);
    }
    if ($slot->isNotEmpty()) {
        $value = $slot;
    }
    $class = 'form-control ' . $class;
@endphp

<div class="form-floating @error($field) is-invalid @enderror">

    <input class="{{ $class }} @error($field) is-invalid @enderror" {{ $attri }}
        name="{{ $field }}"
        type="{{ $type }}"
        value="{{ $slot }}"
        list="datalist-{{ $label }}"
    >

    @if ($label)
        <label>{{ $label }}</label>
    @endif

    @if ($datalist)
        <datalist id="datalist-{{ $label }}">
            @forelse($datalist as $txt)
                <option>
                    {{ $txt }}
                </option>
            @empty
            @endforelse
        </datalist>
    @endif

    <div class="invalid-feedback">
        @error($field)
            {{ $message }}
        @enderror
    </div>

</div>
