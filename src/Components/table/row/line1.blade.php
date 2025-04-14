@props([
    'id' => '',
    'click' => null,
    'select' => '',
])

<tr {{ $attributes->merge(['class']) }}>
    <td>
        @if ($click)
            <input wire:click="{{ $click }}" class="form-check-input" type="checkbox"
                @if ($select) checked @endif>
        @else
            <input class="form-check-input" name="checks[]" value="{{ $id }}" type="checkbox">
        @endif
    </td>

    {{ $slot }}

    <td>
        <a class="btn-toggle nav-item" data-bs-toggle="collapse" data-bs-target="#collapse{{ $id }}"
            href="">
            <i class="bi bi-arrows-collapse"></i>
        </a>
    </td>
</tr>
