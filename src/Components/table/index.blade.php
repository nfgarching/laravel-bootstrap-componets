@props(['accordion' => 'accordionExample'])

<div class="table-responsive">
    <table {{ $attributes->merge(['class' => 'table']) }}>

        @if (isset($head))
            <thead>
                <tr>
                    {{ $head }}
                </tr>
            </thead>
        @endif

        <tbody class="accordion" id="{{ $accordion }}">
            {{ $slot }}
        </tbody>

    </table>
</div>
