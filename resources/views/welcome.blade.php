<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col bg-base-300">
        <header class="w-full lg:max-w-xl max-w-[400px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline btn-primary">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full lg:grow lg:max-w-xl starting:opacity-0">

            <div class="card lg:card-side bg-base-100 shadow-sm">
                <figure class="w-full lg:max-w-1/2">
                    <img src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                        alt="Placeholder image of a cassette tape" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Let's get started</h2>
                    <p>Laravel has an incredibly rich ecosystem.</p>

                    <p>We suggest starting with the following.</p>

                    <ul class="list bg-base-200 rounded-box shadow-md">
                        <li class="list-row">
                            <div>Read the <a href="https://laravel.com/docs" target="_blank">Laravel documentation</a></div>
                        </li>
                        <li class="list-row">
                            <div>Watch video tutorials at <a href="https://laracasts.com" target="_blank">Laracasts</a></div>
                        </li>
                        <li class="list-row">
                            <div>Check out daisyUI <a href="https://daisyui.com/components/list/" target="_blank">components</a></div>
                        </li>    
                    </ul>

                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">
                            <a href="https://cloud.laravel.com">Deploy now</a>
                        </button>
                    </div>
                </div>
              </div>

        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
