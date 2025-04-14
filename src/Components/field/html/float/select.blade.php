@props([
    'field',
    'attri' => '',
    'class' => '',
    'label' => '',
    'value' => '',
    // select special
    'option' => [],
    'size' => '',
])

@php
    if ($label == '') {
        $label = ucfirst($field);
    }
    if ($slot->isNotEmpty()) {
        $value = $slot;
    }
    $class = 'form-control ' . $class;
@endphp

<div class="form-floating @error($field) is-invalid @enderror">

    <select 
        class="{{ $class }} @error($field) is-invalid @enderror" 
        {{ $attri }}
        autocomplete="off" 
        name="{{ $field }}" 
        size="{{ $size }}"
    >

        <option value="">---</option>

        @forelse($option as $key => $txt)
            <option {{ $key == $value ? 'selected' : '' }} value="{{ $key }}">
                {{ $txt }}
            </option>
        @empty
            {{ $slot }}
        @endforelse

    </select>

    <label>{{ $label }}</label>

    <div class="invalid-feedback">
        @error($field)
            {{ $message }}
        @enderror
    </div>

</div>
