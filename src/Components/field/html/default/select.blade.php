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
    // if (isset($this->form->$field)) {
    //     $field = 'form.' . $field;
    // } elseif (isset($this->item[$field])) {
    //     $field = 'item.' . $field;
    // }
    $class = 'form-control ' . $class;
    // echo $field, $value;
@endphp

<div>

    <select name="{{ $field }}" 
        autocomplete="off" {{ $attri }}
        class="{{ $class }} @error($field) is-invalid @enderror" 
        placeholder="{{ $label }}"
        type="{{ $type }}"
    >
        <option value="">{{ $label }}:</option>

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
