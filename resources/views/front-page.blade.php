@extends('layouts.app')

@section('content')
  <section class="mb-25 max-sm:mb-10 max-xl:mb-14 pt-13 pb-18 max-md:pb-10 max-xl:pb-12 border-zinc-300 border-b">
    <div class="container">
      <svg class="mb-25 max-sm:mb-10 max-md:mb-15 max-xl:mb-20" id="hero-svg" viewBox="0 0 206 16" xmlns="http://www.w3.org/2000/svg">
        <foreignObject width="100%" height="100%">
          <h1 class="font-bold uppercase text-nowrap leading-none xl:tracking-tight">
            Ivan Bas <span class="font-light text-zinc-600">©</span> <br class="xl:hidden"> WP Developer
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
  <section class="mb-25">
    <div class="container">
      <div class="max-sm:flex gap-5 grid grid-cols-6 mb-25 max-sm:mb-10 max-xl:mb-14">
        <h2 class="col-span-2 max-xl:col-span-4 max-sm:col-start-auto title">
          Selected Works
        </h2>
        <div class="col-span-4 max-xl:col-span-2">
          <a href="#" class="text-zinc-600 max-sm:text-sm max-xl:text-base text-xl/6 text-nowrap">
            [4] View all
          </a>
        </div>
      </div>
      <div class="gap-5 grid grid-cols-2 max-xl:grid-cols-1">
        @for ($i = 0; $i < 2; $i++)
        <article class="pb-10 max-sm:pb-5">
          <div class="bg-zinc-200 mb-5 max-sm:mb-3 w-full aspect-[16/10] max-md:aspect-[4/3]">
            
          </div>
          <div class="flex max-xl:justify-between gap-5">
            <a href="" class="text-zinc-900 max-sm:text-sm max-xl:text-base text-xl/6">
              DZDZ
            </a>
            <span class="text-zinc-600 max-sm:text-sm max-xl:text-base text-xl/6">
              Education
            </span>
            <span class="text-zinc-600 max-sm:text-sm max-xl:text-base text-xl/6">
              2024
            </span>
          </div>
        </article>
        @endfor
      </div>
    </div>
  </section>
@endsection