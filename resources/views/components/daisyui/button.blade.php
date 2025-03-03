@props([
    'variant' => '',
    'type' => 'button'
])

<button {{ $attributes->merge([
    'class' => 'btn' . (empty($variant) ? '' : ' btn-' . $variant)
    ]) }}
    {{ $attributes }}
    type={{ $type }} >
    <span wire:loading.class='loading loading-spinner'></span>
    {{ $slot }}
</button>


