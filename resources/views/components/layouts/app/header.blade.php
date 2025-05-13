<?

$userTheme = auth()->user()->settings()->get('theme');
$userFont = explode("|", auth()->user()->settings()->get('font'))[0] ?? 'Outfit';

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="{{ $userTheme }}" style="font-family: '{{ $userFont }}'">
    <head>
        @include('partials.head')
    </head>
    <body class="w-full h-dvh flex flex-col bg-base-100">

        <header class="bg-base-300 shadow-sm">
            @include('partials.navbar')
        </header>

        <main class="h-max w-full max-w-7xl mx-auto flex-grow my-6 px-6">
            
        {{ $slot }}
        </main>

        @include('partials.footer')

        @livewireScripts
    </body>
</html>
