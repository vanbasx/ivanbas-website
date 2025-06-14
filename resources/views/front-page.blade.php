@extends('layouts.app')

@section('content')

<section class="bg-zinc-50 border-zinc-200 border-b">
  <div class="border-zinc-200 border-b h-15.5 max-sm:h-13.5" aria-hidden="true"></div>
  <div class="mx-auto px-5 w-full max-w-330">
    <div class="relative px-2 py-30 max-sm:py-20 max-lg:py-24 border-x border-zinc-200">
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
      {{-- hero title --}}
      <h1 class="mx-auto mb-3 max-sm:mb-2.5 max-w-4xl max-sm:font-extrabold font-black text-zinc-950 max-sm:text-[40px]/11 max-md:text-5xl/12 max-lg:text-6xl/17 text-7xl/19 text-center uppercase text-balance tracking-tight">
        High-Quality Websites Made for Leaders
      </h1>
      {{-- hero subtitle --}}
      <p class="mx-auto mb-6 px-5 text-zinc-600 max-sm:text-base/6 text-lg/7 text-center text-pretty tracking-wide">
        I help founders ship faster, convert better, and raise more.
      </p>
      {{-- hero buttons --}}
      <div class="flex max-sm:flex-col items-center max-sm:items-stretch gap-3 mx-auto mb-12 max-sm:mb-8 max-sm:px-4 w-fit max-sm:w-full">
        <x-buttons.email>
          Send me a message
        </x-buttons.email>
        <a href="" class="bg-white px-7 py-3.5 border border-zinc-300 rounded-full font-bold text-zinc-950 text-sm/5 text-center uppercase tracking-wide">
          Explore my Works
        </a>
      </div>
      {{-- hero marquee --}}
      <div class="before:top-0 after:top-0 after:right-0 before:left-0 before:z-1 after:z-1 before:absolute after:absolute relative flex items-center before:bg-linear-to-r after:bg-linear-to-l before:from-zinc-50 after:from-zinc-50 before:to-zinc-50/0 after:to-zinc-50/0 mx-auto before:w-1/5 after:w-1/5 max-w-270 before:h-full after:h-full overflow-hidden select-none">
        @for ($i = 0; $i < 2; $i++)
          <div class="flex items-center animate-marquee will-change-transform shrink-0" aria-hidden="true">
            <div class="pr-6 max-md:pr-3 h-45 shrink-0">
              <img class="border border-zinc-100 rounded-lg max-sm:rounded-md h-full object-cover" src="{{ Vite::asset('resources/images/example1.webp') }}" alt="">
            </div>
            <div class="pr-6 max-md:pr-3 h-45 shrink-0">
              <img class="border border-zinc-100 rounded-lg max-sm:rounded-md h-full object-cover" src="{{ Vite::asset('resources/images/example2.webp') }}" alt="">
            </div>
            <div class="pr-6 max-md:pr-3 h-45 shrink-0">
              <img class="border border-zinc-100 rounded-lg max-sm:rounded-md h-full object-cover" src="{{ Vite::asset('resources/images/example3.webp') }}" alt="">
            </div>
            <div class="pr-6 max-md:pr-3 h-45 shrink-0">
              <img class="border border-zinc-100 rounded-lg max-sm:rounded-md h-full object-cover" src="{{ Vite::asset('resources/images/example4.webp') }}" alt="">
            </div>
            <div class="pr-6 max-md:pr-3 h-45 shrink-0">
              <img class="border border-zinc-100 rounded-lg max-sm:rounded-md h-full object-cover" src="{{ Vite::asset('resources/images/example5.webp') }}" alt="">
            </div>
          </div>
        @endfor
      </div>
      {{-- ruler --}}
      <div class="top-0 left-0 absolute flex flex-col justify-around h-full -translate-x-full select-none" aria-hidden="true">
        @for ($i = 50; $i < 550; $i += 50)
          <div class="before:top-1/2 before:right-0.5 before:absolute relative before:bg-zinc-300 w-5 before:w-1 before:h-px before:-translate-y-1/2">
            <div class="pb-1 font-mono text-[8px] text-zinc-400 text-center -rotate-90">{{ $i }}</div>
          </div>
        @endfor
      </div>
    </div>
  </div>
</section>

<section class="py-28 max-sm:py-16 max-lg:py-20">
  <div class="mx-auto px-2.5 max-w-295">
    {{-- about suptitle --}}
    <span class="mb-2.5 suptitle">
      About me
    </span>
    {{-- about title --}}
    <h2 class="mx-auto mb-10 max-md:mb-6 max-w-md title">
      Choose quality and see the results
    </h2>
    {{-- about cards --}}
    <div class="gap-4 grid grid-cols-3 max-lg:grid-cols-1 max-lg:mx-auto mb-12 max-sm:mb-8 max-lg:max-w-lg">
      <article class="bg-white p-5 pb-8 border border-zinc-200 border-dashed rounded-xl">
        <img src="{{ Vite::asset('resources/images/icons/star.svg') }}" alt="" class="mb-2.5 select-none">
        <p class="mb-2.5 font-semibold text-zinc-950 text-xl/6">
          Animation expert
        </p>
        <p class="text-[15px]/5.5 text-zinc-600 text-pretty tracking-wide">
          I use a powerful combination of Rive and no-code to engage your users with fluid animations that enhance the experience.
        </p>
      </article>

      <article class="bg-white p-5 pb-8 border border-zinc-200 border-dashed rounded-xl">
        <img src="{{ Vite::asset('resources/images/icons/seo.svg') }}" alt="" class="mb-2.5 select-none">
        <p class="mb-2.5 font-semibold text-zinc-950 text-xl/6">
          SEO for growth
        </p>
        <p class="text-[15px]/5.5 text-zinc-600 text-pretty tracking-wide">
          My clients see an average 40% increase in conversions and have secured over $100M in funding after working with us.
        </p>
      </article>

      <article class="bg-white p-5 pb-8 border border-zinc-200 border-dashed rounded-xl">
        <img src="{{ Vite::asset('resources/images/icons/timer.svg') }}" alt="" class="mb-2.5 select-none">
        <p class="mb-2.5 font-semibold text-zinc-950 text-xl/6">
          Launch fast, grow faster
        </p>
        <p class="text-[15px]/5.5 text-zinc-600 text-pretty tracking-wide">
          I'am a middle-level developer which means I'm good and fast. I’ll revamp your website in 4-12 weeks on average.
        </p>
      </article>
    </div>
    {{-- about buttons --}}
    <div class="flex max-sm:flex-col items-center max-sm:items-stretch gap-3 mx-auto max-sm:px-4 w-fit max-sm:w-full">
      <x-buttons.email>
        Let’s work now
      </x-buttons.email>
      <x-buttons.telegramm>
        Send message
      </x-buttons.telegramm>
    </div>
  </div>
</section>
<div class="bg-zinc-50 border-y border-zinc-200 h-14" aria-hidden="true"></div>

<section class="py-28 max-sm:py-16 max-lg:py-20">
  <div class="mx-auto px-2.5 max-w-275 max-lg:max-w-140">
    {{-- cases suptitle --}}
    <span class="mb-2.5 suptitle">
      Case Studies
    </span>
    {{-- cases title --}}
    <h3 class="mx-auto mb-10 max-md:mb-6 max-w-md title">
      Explore my works
    </h3>
    <div class="gap-5 grid grid-cols-2 max-lg:grid-cols-1">
      <article class="relative bg-white shadow-xs p-4 max-sm:p-2 rounded-[28px] max-sm:rounded-[18px]">
        <div class="before:top-0 before:left-0 before:absolute relative before:bg-gradient-to-b before:from-50% before:from-black/0 before:to-black/15 mb-4 max-sm:mb-2 rounded-2xl max-sm:rounded-[12px] w-full before:w-full before:h-full aspect-7/5 overflow-hidden select-none">
          <img src="{{ Vite::asset('resources/images/example1.webp') }}" alt="" class="w-full h-full object-cover">
          <span class="bottom-4 left-4 z-1 absolute px-3 py-1 border border-white rounded-full font-medium text-white text-xs/4 tracking-wide">
            B2B
          </span>
        </div>
        <a href="#" class="block before:top-0 before:left-0 px-3 py-2 max-sm:py-3 before:w-full before:h-full font-medium text-zinc-950 max-sm:text-lg/6 text-xl/7 text-pretty"> 
          Modernizing the Online Identity of a Manufacturing Company
        </a>
      </article>
    </div>
</section>

@endsection