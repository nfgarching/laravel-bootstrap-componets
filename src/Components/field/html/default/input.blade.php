@props([
    'field' => '',
    'attri' => '',
    'class' => '',
    'label' => '',
    'value' => '',
    'placeholder' => '',
    // input special
    'datalist' => [],
    'type' => 'text',
])

@php
    if ($label) {
        $mb = 'mb-3';
    } else {
        $mb = 'mb-0';
    }
    if ($placeholder == '') {
        $placeholder = $label ? ucfirst($label) : ucfirst($field);
    }
    if ($slot->isNotEmpty()) {
        $value = $slot;
    }
    $class = 'form-control ' . $class;
@endphp


@if ($label)
    <div class="{{ $mb }}">

        <label class="form-label">{{ $label }}</label>
@endif

<input class="{{ $class }} @error($field) is-invalid @enderror" {{ $attri }} name="{{ $field }}"
    type="{{ $type }}" value="{{ $value }}" list="datalist-{{ $label }}"
    placeholder="{{ $placeholder }}">

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

@if ($label)
    </div>
@endif


{{-- 
    <x-field.label label="{{ $label }}" />
    <x-field.input field="{{ $field }}" />
    <x-field.input field="{{ $field }}" type="text" />
    <x-field.input field="{{ $field }}" type="email" />
    <x-field.input field="{{ $field }}" type="password" />
    <x-field.input field="{{ $field }}" type="number" />
    <x-field.input field="{{ $field }}" type="date" />
    <x-field.input field="{{ $field }}" type="datetime-local" />
    <x-field.input field="{{ $field }}" type="month" />
    <x-field.input field="{{ $field }}" type="time" />
    <x-field.input field="{{ $field }}" type="week" />
    <x-field.input field="{{ $field }}" type="url" />
    <x-field.input field="{{ $field }}" type="tel" /> --}}
{{--    
    <x-field.input field="{{ $field }}" type="color" />
    <x-field.input field="{{ $field }}" type="file" />
    <x-field.input field="{{ $field }}" type="hidden" />
    <x-field.input field="{{ $field }}" type="checkbox" />
    <x-field.input field="{{ $field }}" type="radio" />
    <x-field.input field="{{ $field }}" type="search" />
    <x-field.input field="{{ $field }}" type="range" />
    <x-field.input field="{{ $field }}" type="text" list="datalist_{{ $label }}" /> --}}
