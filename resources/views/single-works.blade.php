@extends('layouts.app')

@section('content')
  <section class="mb-15 max-sm:mb-10 pt-12 max-sm:pt-5">
    <div class="gap-5 grid lg:grid-cols-6 container">
      <div class="col-span-3 overflow-clip">
        <h1 id="hero-title" class="font-bold max-xs:text-3xl max-xl:text-4xl/12 text-5xl/14 uppercase tracking-tight max-xs:fond-semibold">
          {{ the_title() }}
        </h1>
      </div>
      <div class="col-span-3 overflow-clip">
        <div id="about" class="gap-5 grid grid-cols-3">
          <div class="subtitle">
            <p class="font-semibold uppercase">Release</p>
            <p class="text-zinc-400 max-sm:text-sm max-xl:text-base text-lg">
              {{ get_the_date('Y/m')}}
            </p>
          </div>
          <div class="subtitle">
            <p class="font-semibold uppercase">Industry</p>
            <p class="text-zinc-400 max-sm:text-sm max-xl:text-base text-lg">
              {{ get_field('industry') }}
            </p>
          </div>
          <div class="subtitle">
            <p class="font-semibold uppercase">Duration</p>
            <p class="text-zinc-400 max-sm:text-sm max-xl:text-base text-lg">
              {{ get_field('duration') }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mb-15 max-sm:mb-10 overflow-clip">
    <div id="images" class="gap-5 max-xl:gap-1 grid xl:grid-cols-2 container">
      <picture>
        <source
          type="image/avif"
          srcset="{{ get_field('image_1')['sizes']['mobile'] }}"
          media="(max-width: 500px)"
        />
        <img 
          class="w-full h-full object-cover aspect-video"
          src="{{ get_field('image_1')['url'] }}" 
          alt=""
          loading="lazy"
        >
      </picture>
      <picture>
        <source
          type="image/avif"
          srcset="{{ get_field('image_2')['sizes']['mobile'] }}"
          media="(max-width: 500px)"
        />
        <img 
          class="w-full h-full object-cover aspect-video"
          src="{{ get_field('image_2')['url'] }}" 
          alt=""
          loading="lazy"
        >
      </picture>
    </div>
  </section>
  <section class="mb-15 max-sm:mb-10 overflow-clip">
    <div id="info" class="gap-5 grid grid-cols-6 container">
      <a href="{{ get_field('website_link') }}" target="_blank" class="col-span-3 max-md:col-span-2 w-fit underline uppercase subtitle">
        View Website
      </a>
      <div class="col-span-3 max-md:col-span-4">
        <h2 class="mb-2.5 text-zinc-400 uppercase subtitle">
          Info
        </h2>
        <p class="text-pretty subtitle">
          {{ get_field('info') }}
        </p>
      </div>
    </div>
  </section>
@endsection