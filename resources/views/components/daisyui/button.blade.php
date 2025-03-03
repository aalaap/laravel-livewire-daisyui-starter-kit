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
        btn-warning
    ">
</div>

@endunless


<button {{ $attributes->merge([
    'class' => 'btn' . (empty($variant) ? '' : ' btn-' . $variant)
    ]) }}
    {{ $attributes }}
    type={{ $type }} >
    <span wire:loading.class='loading loading-spinner'></span>
    {{ $slot }}
</button>

