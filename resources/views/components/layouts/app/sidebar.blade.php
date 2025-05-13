<?

$userTheme = auth()->user()->settings()->get('theme');
$userFont = explode("|", auth()->user()->settings()->get('font'))[0] ?? 'Outfit';

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="{{ $userTheme }}" style="font-family: '{{ $userFont }}'">
    <head>
        @include('partials.head')
    </head>

    <body class="w-screen h-screen flex bg-base-100">

        <!-- Sidebar -->
    <aside
    class="bg-base-300 text-base-content p-6 xborder-r-1 xborder-neutral w-64 hidden lg:block flex flex-col h-full fixed z-9999"
  >
    <!-- <div class="p-4">
      <h2 class="text-xl font-bold mb-4">Dashboard</h2>
      <ul>
        <li class="mb-2">
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Home</a>
        </li>
        <li class="mb-2">
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Analytics</a>
        </li>
        <li class="mb-2">
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Settings</a>
        </li>
      </ul>
    </div> -->
    <div class="flex flex-col h-full">
      <div class="flex-none">
        <h1 class="text-lg font-bold mb-2 flex items-stretch">
          <div
            class="flex aspect-square size-8 items-center justify-center rounded-box bg-accent text-accent-foreground"
          >
          <a href="{{ route('dashboard') }}">
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

          <span class="self-center ml-2">Starter Kit with daisyUI</span>
        </h1>

        <h2 class="text-md font-bold mt-6 mb-2">Platform</h2>
        <ul class="menu rounded-box w-full xxw-56">
          @include('partials.navbar.menu-main')
        </ul>
      </div>
      <div class="flex-1"></div>
      <div class="flex-none">
        <h2 class="text-md font-bold mb-2">Links</h2>

        <ul class="menu rounded-box w-full xxw-56 mb-2">
          <li>
            <a href="https://github.com/aalaap/laravel-livewire-daisyui-starter-kit" target="_blank" class="">
                <x-heroicon-o-code-bracket-square class="size-5" /> Repository
            </a>
          </li>
          <li>
            <a href="https://laravel.com/docs/starter-kits" target="_blank" class="">
                <x-heroicon-o-book-open class="size-5"/> Documentation
            </a>
          </li>
        </ul>

        <div
          class="dropdown dropdown-start dropdown-top flex items-stretch  rounded-box"
        >
          
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
      
          <div class="w-full text-md self-center ml-2">Aalaap Ghag</div>
          <div class="self-center">
            <!-- up down chevron thing -->
          </div>

          @include('partials.navbar.user-dropdown')

        </div>
      </div>
    </div>
  </aside>
    
    <main class="flex-grow flex flex-col lg:pl-64 bg-base-100 text-base-content">

        <!-- existing header goes here... -->
        <header class="bg-base-300 shadow-sm lg:hidden">
            @include('partials.navbar')
        </header>

        <div class="p-6 @container">
            {{ $slot }}
        </div>
    </main>

    {{-- @include('partials.footer') --}}

    @livewireScripts
</body>
</html>
