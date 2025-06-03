@extends('layouts.app')

@section('content')

<section class="bg-zinc-50">
  <div class="border-zinc-200 border-b h-15.5"></div>

  <div class="mx-auto px-5 w-full max-w-330">
    <div class="py-30 border-x border-zinc-200">
      
      {{-- /label --}}
      <div class="flex items-center gap-1 bg-white shadow-xs mx-auto mb-3 px-3 py-1 rounded-full w-fit">
        <span class="relative flex size-2">
          <span class="inline-flex absolute bg-green-400/70 rounded-full w-full h-full animate-ping"></span>
          <span class="inline-flex relative bg-green-400 rounded-full size-2"></span>
        </span>
        <span class="font-medium text-zinc-600 text-xs tracking-wide">
          Available to work
        </span>
      </div>
      {{-- /label --}}

      {{-- hero title --}}
      <h1 class="mx-auto mb-3 font-black text-zinc-950 text-7xl/19 text-center uppercase text-balance tracking-tight">
        High Quality Builds for Ambitious Teams
      </h1>
      {{-- /hero title --}}

      {{-- hero subtitle --}}
      <p class="mx-auto mb-8 text-zinc-600 text-lg/7 text-center tracking-wide">
        I help founders ship faster, convert better, and raise more
      </p>
      {{-- /hero subtitle --}}

      {{-- hero buttons --}}
      <div class="flex items-center gap-3 mx-auto w-fit">
        <x-email-button>
          Book an intro call
        </x-email-button>
        <a href="" class="bg-white px-7 py-3.5 border border-zinc-300 rounded-full font-bold text-zinc-950 text-sm/5 uppercase tracking-wide">
          Explore my Works
        </a>
      </div>
      {{-- /hero buttons --}}

    </div>
  </div>

  <div class="border-y border-zinc-200 h-14"></div>
</section>

@endsection