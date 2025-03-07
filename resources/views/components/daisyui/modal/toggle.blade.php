@props([
    'name',
    'variant' => ''
])

<label
    for="modal_{{ $name }}"
    {{ $attributes->merge([
    'class' => 'btn' . (empty($variant) ? '' : ' btn-' . $variant)
    ]) }}
    {{ $attributes }}>
    {{ $slot }}
</label>
