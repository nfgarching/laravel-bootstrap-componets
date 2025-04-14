@props(['label' => ''])

<x-form.label :$label></x-form.label>

<div {!! $attributes->merge(['class' => 'input-group mb-0']) !!}>


    {!! $slot !!}

    {{-- @if ($hasErrorAndShow($name))
        <x-form.errors :name="$name" />
    @endif --}}
</div>
