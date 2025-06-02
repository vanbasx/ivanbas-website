@props([
    'href' => '#',
])

<a
  ontouchstart
  href="{{ $href }}"
  class="font-semibold text-zinc-500 hover:text-zinc-950 active:text-zinc-950 text-sm uppercase tracking-wide duration-300 ease-in-out"
>
    {{ $slot }}
</a>