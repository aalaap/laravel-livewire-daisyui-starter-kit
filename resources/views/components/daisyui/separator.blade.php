@props([
    'variant' => '',
    'direction' => 'vertical',
    'align' => ''
])

@push('tailwindcss-safelist')

<div class="
        divider-neutral
        divider-primary
        divider-secondary
        divider-accent
        divider-success
        divider-warning
        divider-info
        divider-error
        divider-vertical
        divider-horizontal
        divider-start
        divider-end
    ">
</div>

@endpush

<div 
    {{ $attributes->merge([
        'class' => 'divider' .
            (isset($variant) ? " divider-{$variant}" : '') .
            (isset($direction) ? " divider-{$direction}" : '') .
            (isset($align) ? " divider-{$align}" : '')  ]) }}
    {{ $attributes }}>{{ $slot }}</div>