<div class="flex items-start max-md:flex-col">
    <div class="mr-10 w-full pb-4 md:w-[220px]">
        <x-daisyui.navlist>
            {{-- wire:navigate here seems to cause problems with theme changing --}}
            <x-daisyui.navlist-item href="{{ route('settings.profile') }}"  wire:current="menu-active" class="text-base">
            {{ __('Profile') }}
            </x-daisyui.navlist-item>

            <x-daisyui.navlist-item href="{{ route('settings.password') }}" wire:current="menu-active" class="text-base">
                {{ __('Password') }}
            </x-daisyui.navlist-item>

            <x-daisyui.navlist-item href="{{ route('settings.appearance') }}" wire:current="menu-active" class="text-base">
                {{ __('Appearance') }}
            </x-daisyui.navlist-item>
        </x-daisyui.navlist>
    </div>

    <x-daisyui.separator class="md:hidden"></x-daisyui.separator>

    <div class="flex-1 self-stretch max-md:pt-6">
        <x-daisyui.heading class="mb-2">{{ $heading ?? ''}}</x-daisyui.heading>
        <x-daisyui.heading type="sub">{{ $subheading ?? ''}}</x-daisyui.heading>

        <div class="mt-5 w-full max-w-lg">
            {{ $slot }}
        </div>
    </div>
</div>
