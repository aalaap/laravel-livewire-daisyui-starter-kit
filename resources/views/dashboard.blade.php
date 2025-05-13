<x-layouts.app>

    <x-daisyui.heading level="1" size="xl">Dashboard</x-daisyui.heading>
    <x-daisyui.heading level="1" size="xl" type="sub">Placeholder boxes to lay out your KPIs and widgets.</x-daisyui.heading>
    <x-daisyui.separator/>

    <div class="flex h-max w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-neutral" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-neutral" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-neutral" />
            </div>
        </div>
        <div class="relative aspect-[calc(4*3+1)/4] h-max flex-1 overflow-hidden rounded-xl border border-neutral-200">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-neutral" />
        </div>
    </div>

    {{-- <div class="grid grid-cols-3 gap-4 w-full h-max">
        <div class="bg-blue-200 p-6 rounded-lg grow">Box 1</div>
        <div class="bg-green-200 p-6 rounded-lg">Box 2</div>
        <div class="bg-yellow-200 p-6 rounded-lg">Box 3</div>
        <div class="col-span-3 bg-red-200 p-6 rounded-lg grow">Full Width Box</div>
    </div> --}}

    {{-- <div class="flex">
        hello

    </div> --}}

</x-layouts.app>
