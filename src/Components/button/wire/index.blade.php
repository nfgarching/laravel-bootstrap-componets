@props([
    'attri' => '',
    'click' => '',
    'label' => '',
    'type'  => 'primary',
    'tooltip' => '',
])

<button {{ $attributes->merge(['class' => 'btn btn-' . $type]) }} {{ $attri }}
    @if ($click) 
        wire:loading.attr="disabled" 
        wire:click="{{ $click }}" 
    @endif
    type="button"
    @if ($tooltip)
        data-bs-toggle="tooltip" data-bs-title="{{ $tooltip }}"
    @endif
>
    @if ($slot->isNotEmpty())
        {{ $slot }}
    @else
        @if ($label)
            {{ $label }}
        @else
            Speichern
        @endif
    @endif
</button>
