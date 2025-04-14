@props([
    'field',
    'attri' => '',
    'class' => '',
    'label' => 'field',
    'value' => '',
    'item' => '',
    'type' => 'text',
    'option' => [],
])

@php

    if ($item && !$value) {
        // dump($item);
        // dump($field);
        // dump($item->$field);
        $value = $item->$field;
    }

    if ($label == 'field') {
        $label = ucfirst($field);
    }

    // if ($label == 'field') {
    //     $label = ucfirst($field);
    // }
    // if (isset($this->form->$field)) {
    //     $field = 'form.' . $field;
    // } elseif (isset($this->item[$field])) {
    //     $field = 'item.' . $field;
    // }
    $class = 'form-control ' . $class;
    // echo $field, $value;
@endphp

<div>

    <select name="{{ $field }}" autocomplete="off" {{ $attri }}
        class="{{ $class }} 
        @error($field) is-invalid @enderror" placeholder="{{ $label }}"
        type="{{ $type }}">

        <option value="">---</option>

        @forelse($option as $key => $txt)
            {{-- <option value="{{ $key }}" @if ($key == $value) selected="selected" @endif> --}}
            {{-- <option @if ($key == $value) selected="selected" @endif value="{{ $key }}"> --}}
            {{-- <option value="{{ $key }}"> --}}

            <option {{ $key == $value ? 'selected' : '' }} value="{{ $key }}">
                {{ $txt }}
                {{-- {{ $txt . " - $key - $value" }} --}}
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

</div>
