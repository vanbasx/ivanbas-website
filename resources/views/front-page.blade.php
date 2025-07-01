@extends('layouts.app')

@section('content')
  <section class="pt-12 pb-20 max-md:pb-10 max-xl:pb-12 border-zinc-700 border-b">
    <div class="container">
      <svg class="mb-25 max-sm:mb-10 max-md:mb-15 max-xl:mb-20" id="hero-svg" viewBox="0 0 210 16" xmlns="http://www.w3.org/2000/svg">
        <foreignObject width="100%" height="100%">
          <h1 class="font-bold uppercase text-nowrap leading-none xl:tracking-tight">
            Ivan Bas <span class="font-light text-zinc-400">©</span> <br class="xl:hidden"> Web Developer
          </h1>
        </foreignObject>
      </svg>
      <ul class="max-sm:text-sm max-md:text-base/5 max-xl:text-lg/5 text-xl/6">
        <li>WooCommerce</li>
        <li>WordPress Development</li>
        <li>SEO Optimization</li>
      </ul>
    </div>
  </section>
  <section class="mb-30 max-sm:mb-24">
    <div class="container">
      <div class="max-sm:flex max-sm:justify-between gap-5 grid grid-cols-6 py-25 max-sm:py-10 max-xl:py-14">
        <h2 class="col-span-2 max-xl:col-span-4 max-sm:col-start-auto title">
          Selected Works
        </h2>
        <a href="/works" class="col-span-4 max-xl:col-span-2 w-fit h-fit text-zinc-400 hover:text-zinc-50 text-nowrap transition-colors duration-300 ease-in-out subtitle">
          [4] View all
        </a>
      </div>
      <div class="gap-5 grid grid-cols-2 max-xl:grid-cols-1">
        @for ($i = 0; $i < 2; $i++)
        <article class="group/card relative">
          <div class="bg-zinc-800/25 aspect-[16/10] max-md:aspect-[4/3] overflow-hidden">
            <img 
              class="group-hover/card:brightness-50 w-full h-full object-cover transition-all duration-400 ease-in-out"
              src="{{ Vite::asset('resources/images/test.webp') }}" 
              alt=""
            >
          </div>
          <div class="flex max-xl:justify-between gap-5 py-5 max-sm:py-3">
            <a href="" class="before:top-0 before:left-0 before:absolute before:w-full before:h-full subtitle">
              DZDZ
            </a>
            <span class="text-zinc-400 subtitle">
              Education
            </span>
            <span class="text-zinc-400 subtitle">
              2025
            </span>
          </div>
        </article>
        @endfor
      </div>
    </div>
  </section>
  <section class="mb-30 max-sm:mb-24">
    <div class="gap-5 grid grid-cols-6 container">
      <span class="col-span-2 uppercase subtitle">
        Wrocław, Poland
      </span>
      <span class="max-md:hidden col-span-1 text-zinc-400 subtitle">
        © 2025
      </span>
      <div class="col-span-3 max-md:col-span-4">
        <h3 class="mb-2.5 text-zinc-400 uppercase subtitle">
          Info
        </h3>
        <p class="text-pretty subtitle">
          I build high-performance, user-friendly WordPress solutions with a focus on clean, custom-coded architecture — not no-code shortcuts. I use the Roots stack (<x-link href="https://roots.io/bedrock/" blank="true">Bedrock</x-link>, <x-link href="https://roots.io/sage/" blank="true">Sage</x-link>) for a modern, scalable workflow and <x-link href="https://gsap.com/" blank="true">GSAP</x-link> for smooth, engaging UX. My approach to performance is based on proven optimization techniques I’ve refined through years of hands-on experience.
        </p>
      </div>
    </div>
  </section>
@endsection