@props([
    'startTime' => microtime(true),
])

@if ($startTime != 0)
    <div class="container">
        <p class="small text-muted" style="font-size:8pt;">
            @php
                // echo date('H:i:s') . ' - Query took ' . number_format(microtime(true) - $startTime, 4) . ' seconds to execute.';
                echo 'Query took ' . number_format(microtime(true) - $startTime, 4) . ' seconds to execute.';
            @endphp
        </p>
    </div>
@endif
