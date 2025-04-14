@props([
    'align' => 'right',
    'attri'  => '',
    'click'  => '',
    'close'  => 'true',
    'divid'  => rand(),
    'label'  => '',
    'option' => [],
    'toggle' => true,
    'type'   => 'outline-dark',
    'width' => 'auto',
])

@php
    // if ($label == 'field') {
    //     $label = ucfirst($field);
    // }
    // if (isset($this->form->$field)) {
    //     $field = 'form.' . $field;
    // } elseif (isset($this->item[$field])) {
    //     $field = 'item.' . $field;
    // }

    $class = 'btn btn-' . $type;
    if($toggle) $class .= ' dropdown-toggle';

    // switch ($align) {
    //     case 'left':
    //         $alignmentClasses = 'origin-top-left left-0';
    //         break;
    //     case 'top':
    //         $alignmentClasses = 'origin-top';
    //         break;
    //     case 'right':
    //     default:
    //         $alignmentClasses = 'origin-top-right right-0';
    //         break;
    // }

    // switch ($width) {
    //     case '48':
    //         $width = 'w-48';
    //         break;
    // }
@endphp


<div class="btn-group dropdown" role="group" id="{{ $divid }}">

    <button     
        {{ $attributes->merge(['class' => $class]) }} type="button"    
        data-bs-toggle="dropdown"
        data-bs-auto-close="{{ $close }}"
    >
        {{ $label }}
    </button>

    <ul class="dropdown-menu" style="width: {{ $width }};">

        @forelse($option as $key => $txt)
            {{-- <option value="{{ $key }}" @if ($isSelected($key)) selected="selected" @endif> --}}
            <li>
                <a href="{{ $key }}">
                    {{ $txt }}
                </a>
            </li>

        @empty

            {{ $slot }}

        @endforelse

    </ul>

</div>
