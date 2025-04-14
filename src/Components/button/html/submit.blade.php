@props([
    'attri' => '',
    'label' => '',
    'type'  => 'primary',
    'tooltip' => '',
])

<button {{ $attributes->merge(['class' => 'btn btn-' . $type]) }} {{ $attri }}
    type="submit"
    @if ($tooltip)
        data-bs-toggle="tooltip" 
        data-bs-title="{{ $tooltip }}"
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
