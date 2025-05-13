@props([
    'position' => 'bottom',
    'align' => 'start'
])

@unless(true)
<div class="
    dropdown
    dropdown-content
    dropdown-start
    dropdown-center
    dropdown-end
    dropdown-top
    dropdown-bottom
    dropdown-left
    dropdown-right
    dropdown-hover
    dropdown-open
"></div>
@endunless

<div {{ $attributes->merge([
        'class' => "dropdown dropdown-{$position} dropdown-{$align}"
    ]) }} {{ $attributes }}>
    <div tabindex="0" role="button" class="btn m-1">Click ⬆️</div>
    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
      <li><a>Item 1</a></li>
      <li><a>Item 2</a></li>
      <li class="menu-disabled"><div class="divider divider-end"></div></li>
      <li><a>Item 4</a></li>
    </ul>
</div>