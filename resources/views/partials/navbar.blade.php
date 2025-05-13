<div class="navbar bg-base-300 px-6 max-w-7xl mx-auto">
    <div class="navbar-start">
      <div class="dropdown">
        <div
          tabindex="0"
          role="button"
          class="btn btn-ghost btn-square rounded-button hover:bg-base-200 lg:hidden"
        >
          <x-heroicon-o-bars-3 class="size-5" />
        </div>
        <ul
          tabindex="0"
          class="menu menu-md dropdown-content bg-base-200 rounded-box z-1 mt-3 w-52 p-2 shadow"
        >
          <li class="text-base">
            <a href="{{ route('dashboard') }}" class={{ request()->routeIs('dashboard') ? "menu-active" : "" }} wire:navigate 
              ><x-heroicon-o-squares-2x2 class="size-5" />
              Dashboard</a
            >
          </li>
          <li class="text-base">
              <a href="{{ route('components') }}" class={{ request()->routeIs('components') ? "menu-active" : "" }} wire:navigate 
                  ><x-heroicon-o-puzzle-piece class="size-5" />
              Components</a
            >
          </li>
          <li class="text-base">
              <a href="{{ route('blank') }}" class={{ request()->routeIs('blank') ? "menu-active" : "" }} wire:navigate 
                  ><x-heroicon-o-document class="size-5" />
              Blank</a
            >
          </li>
          <li><div class="divider divider-end"></div></li>
          <li class="text-base">
            <a href="https://github.com/aalaap/laravel-livewire-daisyui-starter-kit" target="_blank"
              ><x-heroicon-o-code-bracket-square class="size-5" />
              Repository</a
            >
          </li>
          <li class="text-base">
            <a href="https://laravel.com/docs/starter-kits" target="_blank"
              ><x-heroicon-o-book-open class="size-5" />
              Documentation</a
            >
          </li>
        </ul>
      </div>

      <div
        class="flex aspect-square size-8 items-center justify-center rounded-box bg-accent text-accent-foreground mr-2"
      ><a href="{{ route('dashboard') }}">
          <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 40 42"
          class="size-5 fill-current"
        >
          <path
            fill="currentColor"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M17.2 5.633 8.6.855 0 5.633v26.51l16.2 9 16.2-9v-8.442l7.6-4.223V9.856l-8.6-4.777-8.6 4.777V18.3l-5.6 3.111V5.633ZM38 18.301l-5.6 3.11v-6.157l5.6-3.11V18.3Zm-1.06-7.856-5.54 3.078-5.54-3.079 5.54-3.078 5.54 3.079ZM24.8 18.3v-6.157l5.6 3.111v6.158L24.8 18.3Zm-1 1.732 5.54 3.078-13.14 7.302-5.54-3.078 13.14-7.3v-.002Zm-16.2 7.89 7.6 4.222V38.3L2 30.966V7.92l5.6 3.111v16.892ZM8.6 9.3 3.06 6.222 8.6 3.143l5.54 3.08L8.6 9.3Zm21.8 15.51-13.2 7.334V38.3l13.2-7.334v-6.156ZM9.6 11.034l5.6-3.11v14.6l-5.6 3.11v-14.6Z"
          ></path>
        </svg>
      </a>
      </div>

      <a href="{{ route('dashboard') }}" class="font-bold text-base md:text-xl text-nowrap">Starter Kit with daisyUI</a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        @include('partials.navbar.menu-main')
      </ul>
    </div>
    <div class="navbar-end">
      <!-- repository icon button -->
      <div class="tooltip tooltip-bottom" data-tip="Repository">
          <a href="https://github.com/aalaap/laravel-livewire-daisyui-starter-kit" target="_blank" class="btn btn-ghost btn-square rounded-button hover:bg-base-200 hidden lg:flex">
              <x-heroicon-o-code-bracket-square class="size-5" />
          </a>
      </div>

      <!-- documentation icon button -->
      <div class="tooltip tooltip-bottom" data-tip="Documentation">
          <a href="https://laravel.com/docs/starter-kits" target="_blank" class="btn btn-ghost btn-square rounded-button hover:bg-base-200 hidden lg:flex">
              <x-heroicon-o-book-open class="size-5"/>
          </a>
      </div>

      <!-- search icon button -->
      <div class="tooltip tooltip-bottom" data-tip="Search">
          <button class="btn btn-ghost btn-square rounded-button hover:bg-base-200">
              <x-heroicon-o-magnifying-glass class="size-5"/>
          </button>
      </div>  

      <!-- notifications button -->
      <div class="tooltip tooltip-bottom" data-tip="10 new notifications">
          <button class="btn btn-ghost btn-square rounded-button hover:bg-base-200">
          <div class="indicator">
              <x-heroicon-o-bell class="size-5"/>
              <span class="badge badge-xs badge-accent indicator-item"></span>
          </div>
          </button>
      </div>

      <div class="dropdown dropdown-end">
          
          <div class="tooltip tooltip-bottom" data-tip="{{ auth()->user()->name }}">
              <div
          tabindex="0"
          role="button"
          class=" btn btn-ghost btn-square rounded-box hover:bg-base-200 avatar avatar-placeholder "
        >
          <div class="w-8 rounded-box">
              <img src="{{ Avatar::create(auth()->user()->name)->setFontFamily($userFont)->toBase64() }}" />

            {{-- <div>
              <span class="text-base font-bold">{{ auth()->user()->initials() }}</span>
            </div> --}}

          </div>
      </div>      
          
        </div>
        
        @include('partials.navbar.user-dropdown')

      </div>
    </div>
  </div>