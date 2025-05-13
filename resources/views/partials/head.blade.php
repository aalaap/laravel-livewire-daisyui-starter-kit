<?


if (auth()->check()) {
    $userFont = explode("|", auth()->user()->settings()->get('font'))[1] ?? 'outfit';
} else {
    $userFont = 'outfit';
}

?><meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? 'Laravel' }}</title>

<link rel="preconnect" href="https://fonts.bunny.net">
<link
      href="https://fonts.bunny.net/css?family={{ $userFont }}:400,400i,700,700i"
      rel="stylesheet"
    />

@stack('head')

@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles