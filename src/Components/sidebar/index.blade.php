@props([
    'type' => '',
])

<ul class="nav flex-column {{ $type }}">
    {{ $slot }}
</ul>