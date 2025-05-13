<li>
    <a href="{{ route('dashboard') }}" class={{ request()->routeIs('dashboard') ? "menu-active" : "" }} wire:navigate 
      ><x-heroicon-o-squares-2x2 class="size-5"/>
      Dashboard</a
    >
  </li>
  <li>
    <a href="{{ route('components') }}" class={{ request()->routeIs('components') ? "menu-active" : "" }} wire:navigate 
      ><x-heroicon-o-puzzle-piece class="size-5"/>
      Components</a
    >
  </li>
  <li>
    <a href="{{ route('blank') }}" class={{ request()->routeIs('blank') ? "menu-active" : "" }} wire:navigate 
        ><x-heroicon-o-document class="size-5"/>
      Blank</a
    >
  </li>