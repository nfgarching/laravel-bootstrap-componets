@props([
    'id'     => rand(),
    'action' => '',
    'method' => 'POST',
])

<form action="{{ $action }}" method="POST" id="{{ $id }}">
    @unless (in_array($method, ['GET', 'HEAD', 'OPTIONS']))
        @csrf
    @endunless
    @method($method)   

    {{ $slot }}

</form>
