@extends('layouts.app')

@section('content')

<section class="bg-zinc-50">
  <div class="border-zinc-200 border-b h-15.5 max-sm:h-13.5"></div>

  <div class="mx-auto px-5 w-full max-w-330">
    <div class="px-2 py-30 max-sm:py-20 max-lg:py-24 border-x border-zinc-200">
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
        High-Quality
        <span class="relative">
          Websites
          <span class="right-0 bottom-0 absolute bg-[#FF4400] px-1 rounded-sm font-mono font-bold text-white max-md:text-sm text-base tracking-tight max-md:tracking-normal rotate-3">
            NO-FLUFF
          </span>
        </span>
        Made for Leaders
      </h1>
      {{-- /hero title --}}

      {{-- hero subtitle --}}
      <p class="mx-auto mb-8 max-md:mb-6 px-5 text-zinc-600 max-sm:text-base/6 text-lg/7 text-center text-pretty tracking-wide">
        I help founders ship faster, convert better, and raise more.
      </p>
      {{-- /hero subtitle --}}

      {{-- hero buttons --}}
      <div class="flex max-sm:flex-col items-center max-sm:items-stretch gap-3 mx-auto mb-12 max-sm:mb-8 max-sm:px-4 w-fit max-sm:w-full">
        <x-email-button>
          Send me a message
        </x-email-button>
        <a href="" class="bg-white px-7 py-3.5 border border-zinc-300 rounded-full font-bold text-zinc-950 text-sm/5 text-center uppercase tracking-wide">
          Explore my Works
        </a>
      </div>
      {{-- /hero buttons --}}

      {{-- hero slider --}}
      <div class="before:top-0 after:top-0 after:right-0 before:left-0 before:z-1 after:z-1 before:absolute after:absolute relative flex items-center before:bg-linear-to-r after:bg-linear-to-l before:from-zinc-50 after:from-zinc-50 before:to-zinc-50/0 after:to-zinc-50/0 mx-auto before:w-1/5 after:w-1/5 max-w-270 before:h-full after:h-full overflow-hidden">
        @for ($i = 0; $i < 2; $i++)
          <div class="flex items-center animate-marquee shrink-0" aria-hidden="true">
            <div class="pr-6 max-md:pr-3 h-45 shrink-0">
              <img class="border border-zinc-100 rounded-lg max-sm:rounded-md h-full object-cover" src="{{ Vite::asset('resources/images/h1.png') }}" alt="">
            </div>
            <div class="pr-6 max-md:pr-3 h-45 shrink-0">
              <img class="border border-zinc-100 rounded-lg max-sm:rounded-md h-full object-cover" src="{{ Vite::asset('resources/images/h2.png') }}" alt="">
            </div>
            <div class="pr-6 max-md:pr-3 h-45 shrink-0">
              <img class="border border-zinc-100 rounded-lg max-sm:rounded-md h-full object-cover" src="{{ Vite::asset('resources/images/h1.png') }}" alt="">
            </div>
            <div class="pr-6 max-md:pr-3 h-45 shrink-0">
              <img class="border border-zinc-100 rounded-lg max-sm:rounded-md h-full object-cover" src="{{ Vite::asset('resources/images/h5.png') }}" alt="">
            </div>
            <div class="pr-6 max-md:pr-3 h-45 shrink-0">
              <img class="border border-zinc-100 rounded-lg max-sm:rounded-md h-full object-cover" src="{{ Vite::asset('resources/images/h4.png') }}" alt="">
            </div>
          </div>
        @endfor
      </div>
      {{-- hero slider --}}


    </div>
  </div>

  <div class="border-y border-zinc-200 h-14"></div>
</section>

@endsection