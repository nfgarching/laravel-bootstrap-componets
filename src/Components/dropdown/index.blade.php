@props([
    'align' => 'right',
    'attri'  => '',
    'click'  => '',
    'close'  => 'false',
    'divid'  => rand(),
    'label'  => '<span class="bi bi-plus"></span>',
    'option' => [],
    'toggle' => false,
    'type'   => 'outline-primary',
    'width' => '400px',
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

<div {{ $attributes->merge(['class' => 'dropdown']) }} id="{{ $divid }}">

    <button 
        {{ $attributes->merge(['class' => $class]) }} type="button"
        data-bs-toggle="dropdown"
        data-bs-auto-close="{{ $close }}"
    >
        {!! $label !!}
    </button>

    <div class="dropdown-menu dropdown-menu-dark" style="width: {{ $width }};">

        {{ $slot }}

    </div>

</div>
