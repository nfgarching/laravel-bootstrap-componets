@props([
    'data' => [],
    'modalName' => '',
    'type' => 'primary',
    'tooltip' => '',
])

@php
    $arr = "";
    foreach ($data as $key => $val) {
        $arr .= "$key: '$val',";
    }
@endphp

<button x-data="" @click="$dispatch( '{{ $modalName }}', { data: { {{ $arr }} } })"
    {{ $attributes->merge(['class' => 'btn btn-' . $type]) }}
    @if ($tooltip)
        data-bs-toggle="tooltip"
        data-bs-title="{{ $tooltip }}"
    @endif
    type="button" 
>
    {{ $slot }}

</button>
