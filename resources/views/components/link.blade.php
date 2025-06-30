@props([
  'href' => null,
])

<a href="{{ $href }}" class="inline-block bg-zinc-900 hover:opacity-50 px-0.5 text-zinc-50 decoration-1 underline transition-opacity duration-300 ease-in-out">
  {!! $slot !!}
</a>