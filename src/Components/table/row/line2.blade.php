@props([
    'id' => '',
    'accordion' => 'accordionExample',
])

<tr></tr>
<tr id="collapse{{ $id }}" class="accordion-collapse collapse" data-bs-parent="#{{ $accordion }}">
    <td></td>
    {{ $slot }}
</tr>
