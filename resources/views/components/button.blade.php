<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-theme-orange-500 no-underline rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-theme-orange-400 active:bg-theme-orange-500 focus:outline-none disabled:opacity-25 transition ease-in-out duration-150 no-underline']) }}>
    {{ $slot }}
</button>
