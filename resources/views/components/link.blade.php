@props([
  'href' => null,
  'blank' => false,
])

<a 
  href="{{ $href }}" 
  @if($blank) target="_blank" @endif 
  class="inline-block bg-zinc-900 hover:opacity-50 active:opacity-50 px-0.5 text-zinc-50 decoration-1 underline transition-opacity"
>
  {!! $slot !!}
</a>
