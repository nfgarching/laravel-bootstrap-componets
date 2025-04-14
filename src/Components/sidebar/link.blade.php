@props([
    'label' => '',
    // sidebar.link special
    'href' => '',
    'route' => '',
])

@php
    if ($slot->isNotEmpty()) {
        $label = $slot;
    } else {
        if ($label == '') {
            if ($route) {
                $label = ucfirst($route);
            } elseif ($href) {
                $label = ucfirst($href);
            } else {
                $label = '- no-link -';
            }
        }
    }
    $classes = request()->routeIs($route) ? 'nav-link active' : 'nav-link';
@endphp

<li class="nav-item">

    @if (Route::has($route))
        <a {{ $attributes->merge(['class' => $classes]) }} href="{{ route($route) }}">
            {{ $label }}
        </a>
    @elseif ($href)
        <a {{ $attributes->merge(['class' => $classes]) }} href="{{ $href }}">
            {{ $label }}
        </a>
    @else
        <a {{ $attributes->merge(['class' => $classes . ' disabled']) }}>
            {{ $label }}
        </a>
    @endif

</li>
