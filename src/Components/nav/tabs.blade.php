@props([
    'tabs' => ['<i class="bi bi-bullseye"></i>'],
    'show' => '0',
])
@php
    // dd($tabs);
@endphp

<ul class="nav nav-tabs" role="tablist">
    @foreach ($tabs as $key => $val)
        @if ($val)
            <li class="nav-item" role="presentation">
                <button class="nav-link @if ($show == $key) active @endif" data-bs-toggle="tab"
                    data-bs-target="#{{ $key }}" type="button" role="tab">{!! $val !!}</button>
            </li>
        @endif
    @endforeach
</ul>

{{ $slot }}
