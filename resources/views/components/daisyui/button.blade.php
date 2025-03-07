@props([
    'variant' => '',
    'type' => 'button'
])

@unless(true)

<div
    class="
        btn
        btn-neutral
        btn-primary
        btn-secondary
        btn-accent
        btn-info
        btn-success
        btn-warning
        btn-error
    ">
</div>

@endunless


<button {{ $attributes->merge([
    'class' => 'btn' . (empty($variant) ? '' : ' btn-' . $variant)
    ]) }}
    {{ $attributes }}
    type={{ $type }} >
    {{ $slot }}
</button>

