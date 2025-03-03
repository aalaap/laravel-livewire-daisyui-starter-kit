@props([
    'variant' => '',
    'href' => '#'
])

@unless(true)

<div
    class="
        link
        link-primary
    ">
</div>

@endunless


<a
    href="{{ $href }}" 
    {{ $attributes->merge(['class' => 'link' . (empty($variant) ? '' : ' link-' . $variant)]) }}
    {{ $attributes }}
>
    {{ $slot }}
</a>