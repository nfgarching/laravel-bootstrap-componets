@props([
    'label' => '',
    'value' => '',
])

<dt class="col-3 text-truncate" style="text-align:right">{{ $label }}</dt>
<dd class="col-9 text-truncate">
    @if ($value)
        {{ Str::limit($value, 75) }}
    @else
        {{ $slot }} &nbsp;
    @endif
</dd>
