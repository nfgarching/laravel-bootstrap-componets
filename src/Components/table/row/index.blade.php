@props([
    'value' => '',
])

<tr {{ $attributes->merge(['class' => '']) }}>
    @if ($value)
        {{ $value }}
    @else
        {{ $slot }}
    @endif
</tr>
