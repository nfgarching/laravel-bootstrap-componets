<form class="input-group input-group-sm" method="GET">

    {{ $slot }}

    <button type="submit" class="btn btn-outline-success" type="button">
        <i class="bi bi-search"></i>
    </button>
    <x-button.link href="{{ url()->current() }}" type="outline-danger">
        <i class="bi bi-x-circle"></i>
    </x-button.link>

</form>
