@props([
    'attri' => '',
    'label' => '',
    'type' => 'primary',
    'tooltip' => '',
    // link special
    'href' => '',
])

<a {{ $attributes->merge(['class' => 'btn btn-' . $type]) }} {{ $attri }}
    @if ($href) href="{{ $href }}" @endif
    @if ($tooltip) data-bs-toggle="tooltip"
        data-bs-title="{{ $tooltip }}" @endif
    role="button">
    @if ($slot->isNotEmpty())
        {{ $slot }}
    @else
        @if ($label)
            {{ $label }}
        @else
            Link öffnen
        @endif
    @endif
</a>
