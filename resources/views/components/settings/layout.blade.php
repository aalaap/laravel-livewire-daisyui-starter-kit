<div class="flex items-start max-md:flex-col">
    <div class="mr-10 w-full pb-4 md:w-[220px]">
        <x-daisyui.navlist>
            <x-daisyui.navlist-item href="{{ route('settings.profile') }}" wire:navigate>
                {{ __('Profile') }}
            </x-daisyui.navlist-item>

            <x-daisyui.navlist-item href="{{ route('settings.password') }}" wire:navigate>
                {{ __('Password') }}
            </x-daisyui.navlist-item>

            <x-daisyui.navlist-item href="{{ route('settings.appearance') }}" wire:navigate>
                {{ __('Appearance') }}
            </x-daisyui.navlist-item>
        </x-daisyui.navlist>
    </div>

    <flux:separator class="md:hidden" />

    <div class="flex-1 self-stretch max-md:pt-6">
        <flux:heading>{{ $heading ?? '' }}</flux:heading>
        <flux:subheading>{{ $subheading ?? '' }}</flux:subheading>

        <div class="mt-5 w-full max-w-lg">
            {{ $slot }}
        </div>
    </div>
</div>
