@extends('layouts.app')

@section('content')
  <section class="pt-12 pb-20 max-md:pb-10 max-xl:pb-12 border-zinc-700 border-b">
    <div class="container">
      <x-responsive-text 
        class="mb-25 max-sm:mb-10 max-md:mb-15 max-xl:mb-20"
        desktop="0 0 210 16"
        mobile="0 0 123 32"
      >
        <h1 class="font-bold uppercase text-nowrap leading-none xl:tracking-tight">
          Ivan Bas <span class="font-light text-zinc-400">©</span> <br class="xl:hidden"> WP Developer
        </h1>
      </x-responsive-text>
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
        <a href="/works" class="col-span-4 max-xl:col-span-2 w-fit h-fit text-zinc-400 hover:text-zinc-50 active:text-zinc-50 text-nowrap transition-colors subtitle">
          [4] View all
        </a>
      </div>
      <div class="gap-5 grid grid-cols-2 max-xl:grid-cols-1">
        {{-- Show cases --}}
        @if ($works->have_posts())
          @while ($works->have_posts()) @php($works->the_post())
            @include('partials.work')
          @endwhile
          @php(wp_reset_postdata())
        @endif
        {{-- /Show cases --}}
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
          I build high-performance, user-friendly WordPress solutions with a focus on clean, custom-coded architecture — not no-code shortcuts. I use the Roots stack (<x-link href="https://roots.io/bedrock/" blank="true">Bedrock</x-link>, <x-link href="https://roots.io/sage/" blank="true">Sage</x-link>) with <x-link href="https://tailwindcss.com/" blank="true">TailwindCSS</x-link> for a modern, scalable workflow and <x-link href="https://gsap.com/" blank="true">GSAP</x-link> for smooth, engaging UX. My approach to performance is based on proven optimization techniques I’ve refined through years of hands-on experience.
        </p>
      </div>
    </div>
  </section>
@endsection