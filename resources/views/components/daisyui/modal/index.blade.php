@props([ 'name' ])

<input type="checkbox" id="modal_{{ $name }}" class="modal-toggle" />
<div role="dialog" class="modal">
    <div {{ $attributes->merge([
        'class' => 'modal-box'
        ]) }}
        {{ $attributes }}>
        {{ $slot }}
    </div>

    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</div>
