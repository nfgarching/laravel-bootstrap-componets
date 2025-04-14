@props([
    'click' => 'click',
    'confirm' => '',
])

@php
    If( $confirm ) $confirm = "onclick=\"return confirm('$confirm')\"";
@endphp

<button wire:click="{{ $click }}" {{ $attributes->merge(['class' => 'dropdown-item text-truncate']) }} {!! $confirm !!} type="button">
    {{ $slot }}
</button>
