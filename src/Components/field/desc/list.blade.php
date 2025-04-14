@props(['item' => []])

<br>

<x-desc.group class="small">

    @forelse ($item as $key => $val)
        @if (is_array($val))
            keyID: {{ $key }}
            <x-desc.list :item="$val" />
        @else
            <x-desc :label="$key" :value="$val" />
        @endif
    @empty
        {{ $slot }}
    @endforelse

</x-desc.group>
