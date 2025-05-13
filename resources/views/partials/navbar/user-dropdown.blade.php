<ul
          tabindex="0"
          class="menu menu-md dropdown-content bg-base-300 rounded-box z-1 mt-3 w-52 p-2 shadow"
        >
          <li class="text-base font-bold">
            <a class="justify-between">
              {{ auth()->user()->email }}
              {{-- <span class="badge">New</span> --}}
            </a>
          </li>
          <li class="text-base"><a href="/settings/profile"><x-heroicon-o-cog class="size-5"/> {{ __('Settings') }}</a></li>
          <li x-data="{}"  class="text-base">
              {{-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> --}}
              <a href="{{ route('logout') }}" x-on:click.prevent="$refs.logoutForm.submit()">
                  <x-heroicon-o-arrow-right-start-on-rectangle class="size-5" /> {{ __('Log Out') }}
              </a>
              <form x-ref="logoutForm" id="logout-form" method="POST" action="{{ route('logout') }}" xclass="hidden">
                  @csrf
                  {{-- <button class="btn btn-link"></button> --}}

                  
              </form>
          </li>
        </ul>