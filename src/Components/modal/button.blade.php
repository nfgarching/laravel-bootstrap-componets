@props([    
    'modid',
    'click' => '',
    'type' => "primary",
])

<button wire:click="{{ $click }}" wire:loading.attr="disabled" {{ $attributes->merge(['class' => 'btn btn-'.$type]) }} type="button"
    data-bs-toggle="modal" data-bs-target="#{{ $modid }}">
    {{ $slot }}
</button>
