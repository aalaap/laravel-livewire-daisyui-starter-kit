@props([
    'size' => 'base',
    'level',
    'type'
])

@php
    $tag = isset($level) ? 'h'.$level : 'div';
    $font_weight = (isset($type) && $type == 'sub') ? 'font-bold' : ' font-black';
@endphp

@unless(true)

<div
    class="
        text-xs
        text-sm
        text-base
        text-lg
        text-xl
        text-2xl
        text-3xl
        font-medium
        font-bold
        font-black
        text-base-content
        text-base-content/70
    "
></div>

@endunless

<{{ $tag }} {{ $attributes->merge(['class' => "text-{$size} text-base-content{$font_weight}"]) }} {{ $attributes }}>
    {{ $slot }}
</{{ $tag }}>