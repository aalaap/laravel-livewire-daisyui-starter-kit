@props([
    'size' => 'base',
    'level',
    'type'
])

@php
    $tag = isset($level) ? 'h'.$level : 'div';
    $font_weight = (isset($type) && $type == 'sub') ? '/70' : ' font-medium';
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
        font-medium
        text-base-content
        text-base-content/70
    "
></div>

@endunless

<{{ $tag }} {{ $attributes->merge(['class' => "text-{$size} text-base-content{$font_weight}"]) }} {{ $attributes }}>
    {{ $slot }}
</{{ $tag }}>