@extends('layouts.app')

@section('content')

<section class="bg-zinc-50">
  <div class="border-zinc-200 border-b h-15.5"></div>

  <div class="mx-auto px-5 w-full max-w-330">
    <div class="px-2 py-30 border-x border-zinc-200">
      
      {{-- /label --}}
      <div class="flex items-center gap-1 bg-white shadow-xs mx-auto mb-3 px-3 py-1 rounded-full w-fit">
        <span class="relative flex size-2.5">
          <span class="inline-flex absolute bg-green-400/70 rounded-full w-full h-full animate-ping"></span>
          <span class="inline-flex relative bg-green-400 rounded-full size-2.5"></span>
        </span>
        <span class="font-medium text-zinc-600 text-xs tracking-wide">
          Available to work
        </span>
      </div>
      {{-- /label --}}

      {{-- hero title --}}
      <h1 class="mx-auto mb-3 max-sm:mb-2.5 max-w-4xl max-sm:font-extrabold font-black text-zinc-950 max-sm:text-[40px]/11 max-md:text-5xl/12 max-lg:text-6xl/17 text-7xl/19 text-center uppercase text-balance tracking-tight">
        High quality websites made for leaders
      </h1>
      {{-- /hero title --}}

      {{-- hero subtitle --}}
      <p class="mx-auto mb-8 max-sm:mb-6 px-5 text-zinc-600 max-sm:text-base/6 text-lg/7 text-center text-pretty tracking-wide">
        I help founders ship faster, convert better, and raise more.
      </p>
      {{-- /hero subtitle --}}

      {{-- hero buttons --}}
      <div class="flex max-sm:flex-col items-center max-sm:items-stretch gap-3 mx-auto max-sm:px-4 w-fit max-sm:w-full">
        <x-email-button>
          Send me a message
        </x-email-button>
        <a href="" class="bg-white px-7 py-3.5 border border-zinc-300 rounded-full font-bold text-zinc-950 text-sm/5 text-center uppercase tracking-wide">
          Explore my Works
        </a>
      </div>
      {{-- /hero buttons --}}

    </div>
  </div>

  <div class="border-y border-zinc-200 h-14"></div>
</section>

@endsection