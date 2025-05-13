<?php

use function Livewire\Volt\{state, dispatch};


state([
    'theme' => auth()->user()->settings()->get('theme'),
    'font' => auth()->user()->settings()->get('font')
]);
 
// TODO: ADD VALIDATION!!!

// $setTheme = fn () => auth()->user()->settings()->set('theme', $this->theme);
// $setFont = fn () => auth()->user()->settings()->set('font', $this->font);

$updateAppearance = function () {
    auth()->user()->settings()->set('theme', $this->theme);
    auth()->user()->settings()->set('font', $this->font);
    Session::flash('status', 'appearance-updated');
    // $this->dispatch('appearance-updated', );
};


?>

<div class="flex flex-col items-start">
    

    @include('partials.settings-heading')

    <x-settings.layout heading="{{ __('Appearance') }}" subheading="{{ __('Update the appearance settings for your account') }}">

    <div class="relative mb-5">
        <x-daisyui.heading class="mb-2">{{ __('Theme') }}</x-daisyui.heading>
        <x-daisyui.heading type="sub">{{ __('Set the color and element style') }}</x-daisyui.subheading>
    </div>

    

    <form wire:submit="updateAppearance">

        <div class="toast">
            @if (session()->has('status'))
                    <div class="alert alert-success" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 10000)">
                        {{ session('status') }}
                    </div>
                @endif
        </div>

    <p>Current theme: {{ $theme ?? 'light/dark (default)' }}</p>

    <fieldset class="fieldset mt-5 mb-5">
        <div class="rounded-box grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3">

            {!! join("", array_map(
                fn($theme) => '<div data-theme="' . $theme . '" class="border-base-content/20 hover:border-base-content/40 overflow-hidden rounded-box border outline-2 outline-offset-2 outline-transparent" data-act-class="outline-base-content!"><div class="bg-base-100 text-base-content w-full cursor-pointer"><div class="grid grid-cols-5 grid-rows-3"><div class="bg-base-200 col-start-1 row-span-2 row-start-1"></div> <div class="bg-base-300 col-start-1 row-start-3"></div> <div class="bg-base-100 col-span-4 col-start-2 row-span-3 row-start-1 flex flex-col gap-1 p-2 truncate"><div class="font-bold"><input type="radio" name="theme-radios" value="'.$theme.'" class="radio rounded-selector theme-controller" dont:wire:click="setTheme" wire:model="theme"/> ' . $theme . '</div> <div class="flex flex-wrap gap-1"><div class="bg-primary flex aspect-square w-5 items-center justify-center rounded-field lg:w-6"><div class="text-primary-content text-sm font-bold">A</div></div> <div class="bg-secondary flex aspect-square w-5 items-center justify-center rounded-field lg:w-6"><div class="text-secondary-content text-sm font-bold">A</div></div> <div class="bg-accent flex aspect-square w-5 items-center justify-center rounded-field lg:w-6"><div class="text-accent-content text-sm font-bold">A</div></div> <div class="bg-neutral flex aspect-square w-5 items-center justify-center rounded-field lg:w-6"><div class="text-neutral-content text-sm font-bold">A</div></div></div></div></div></div></div>',
                explode(" ", "light dark cupcake bumblebee emerald corporate synthwave retro cyberpunk valentine halloween garden forest aqua lofi pastel fantasy wireframe black luxury dracula cmyk autumn business acid lemonade night coffee winter dim nord sunset caramellatte abyss silk")
            )) !!}
        </div>
    </fieldset>

    <div class="relative mb-5">
        <x-daisyui.heading class="mb-2">{{ __('Font') }}</x-daisyui.heading>
        <x-daisyui.heading type="sub">{{ __('Set the overall UI font') }}</x-daisyui.subheading>
    </div>

    <p>Current font: {{ explode("|", $font)[0] ?? 'Outfit (default)' }}</p>

    <fieldset class="fieldset mt-5 mb-5" x-data="{ fontFamily: 'Outfit' }">
        {{-- <template x-effect="() => document.documentElement.style.fontFamily = fontFamily"> --}}
            <div class="rounded-box grid grid-cols-2 gap-4">
                {{-- <div>Outfit</div>
                <div>Inter</div>
                <div>Nunito</div>
                <div>Merriweather</div>
                <div><input type="radio" name="font-radios" value="Exo 2|exo-2" wire:click="setFont" wire:model="font">Exo 2</div>
                <div><input type="radio" name="font-radios" value="IBM Plex Mono|ibm-plex-mono"  wire:click="setFont" wire:model="font">IBM Plex Mono</div> --}}

                {{-- {!!
                    join("", array_map(
                        fn($font) => '<div><input type="radio" name="font-radios" value="'. $font.'" wire:click="setFont" wire:model="font">'.explode("|", $font)[0].'</div>',
                        explode(" % ", "Outfit|outfit % Inter|inter % Nunito|nunito % Merriweather|merriweather % Exo 2|exo-2 % IBM Plex Mono|ibm-plex-mono" )))

                    
                !!} --}}

                @foreach (explode(" % ", "Outfit|outfit % Instrument Sans|instrument-sans % Inter|inter % Work Sans|work-sans % Source Sans Pro|source-sans-pro % Bricolage Grotesque|bricolage-grotesque % Fredoka|fredoka % Arvo|arvo % Merriweather|merriweather % Exo|exo % IBM Plex Mono|ibm-plex-mono" ) as $fontEntry)

                    <div class="text-base"><input type="radio" name="font-radios" value="{{ $fontEntry }}" class="radio" dont:wire:click="setFont" wire:model="font" @click="document.documentElement.style.fontFamily = '{{ explode("|", $fontEntry)[0] }}'"> <span style="font-family: '{{ explode("|", $fontEntry)[0] }}'">{{ explode("|", $fontEntry)[0] }}</span></div>

                    @push('head')
                    <link href="https://fonts.bunny.net/css?family={{ explode("|", $fontEntry)[1] }}:400,400i,700,700i" rel="stylesheet" />
                    @endpush
                    
                @endforeach
            </div>
        {{-- </template> --}}
    </fieldset>

    <div class="flex items-center gap-4">
        <div class="flex items-center justify-end">
            <x-daisyui.button variant="primary" type="submit" class="w-full">
                <x-daisyui.loading-spinner/>
                {{ __('Save') }}
            </x-daisyui.button>
        </div>

        <x-action-message class="me-3" on="appearance-updated">
            {{ __('Saved.') }}
        </x-action-message>
    </div>
</form>

    </x-settings.layout>
</div>
