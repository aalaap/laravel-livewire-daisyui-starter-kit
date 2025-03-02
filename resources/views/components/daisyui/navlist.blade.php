<nav>
    <ul {{ $attributes->merge(['class' => 'menu bg-base-200 rounded-box w-full']) }}>
        {{ $slot }}
    </ul>
</nav>