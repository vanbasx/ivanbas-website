<a
  ontouchstart
  href="mailto:hello@ivanbas.dev"
  class="group/button relative flex flex-col items-center bg-zinc-200/80 active:opacity-70 px-3 py-2.5 rounded-full overflow-hidden text-zinc-950 text-sm/5 transition-opacity duration-300 ease-in-out"
>
  <div class="flex items-center gap-1 font-bold uppercase tracking-wide transition-transform group-hover/button:-translate-y-10 duration-400 ease-in-out">
    <img src="{{ Vite::asset('resources/images/icons/telegramm.svg') }}" alt="" class="size-7">
    {{ $slot }}
  </div>
  <div class="absolute">
    <div class="flex items-center gap-1 font-bold uppercase tracking-wide transition-transform translate-y-10 group-hover/button:translate-y-0 duration-400 ease-in-out">
      <img src="{{ Vite::asset('resources/images/icons/telegramm.svg') }}" alt="" class="size-7">
      {{ $slot }}
    </div>
  </div>
</a>