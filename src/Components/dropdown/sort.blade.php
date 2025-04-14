@props([
    'field',
    'label' => 'field',
    'wire',
])

@php
    if( $label == 'field' ) $label = ucfirst( $field );
    // echo $this->item[$field];
    // $field = 'item.'.$field; echo $field;
    // echo $this->item['zeile1'];
    // echo $this->item->zeile1;
@endphp

<li>
    <a wire:click.prevent="sortBy('{{ $field }}')" {{ $attributes->merge(['class' => 'dropdown-item']) }}>
        @if ( $wire->sortField == $field )
            @if ( $wire->sortAsc )
                <i class="bi bi-sort-up"></i>
            @else
                <i class="bi bi-sort-down"></i>
            @endif
            {{ $label }}
        @else
            <i class="bi bi-dash"></i>
            {{ $label }}
        @endif
    </a>
</li>
