@extends('layouts.app')

@section('content')
  <section class="mb-15 max-sm:mb-10 pt-12 max-sm:pt-5">
    <div class="gap-5 grid lg:grid-cols-6 container">
      <h1 class="col-span-3 font-bold max-xs:text-3xl max-xl:text-4xl/12 text-5xl/14 uppercase tracking-tight max-xs:fond-semibold">
        {{ the_title() }}
      </h1>
      <div class="gap-5 grid grid-cols-3 col-span-3">
        <div class="subtitle">
          <p class="font-semibold uppercase">release</p>
          <p class="text-zinc-400 max-sm:text-sm max-xl:text-base text-lg">{{ get_the_date('Y/m')}}</p>
        </div>
        <div class="subtitle">
          <p class="font-semibold uppercase">Industry</p>
          <p class="text-zinc-400 max-sm:text-sm max-xl:text-base text-lg">Education</p>
        </div>
        <div class="subtitle">
          <p class="font-semibold uppercase">Duration</p>
          <p class="text-zinc-400 max-sm:text-sm max-xl:text-base text-lg">4 Weeks</p>
        </div>
      </div>
    </div>
  </section>
  <section class="mb-15 max-sm:mb-10">
    <div class="gap-5 max-xl:gap-1 grid xl:grid-cols-2 container">
      <img src="{{ the_post_thumbnail_url() }}" alt="" class="w-full h-full object-cover aspect-video">
      <img src="{{ the_post_thumbnail_url() }}" alt="" class="w-full h-full object-cover aspect-video">
    </div>
  </section>
  <section class="mb-15 max-sm:mb-10">
    <div class="gap-5 grid grid-cols-6 container">
      <a href="" class="col-span-3 max-md:col-span-2 w-fit underline uppercase subtitle">
        View Website
      </a>
      <div class="col-span-3 max-md:col-span-4">
        <h2 class="mb-2.5 text-zinc-400 uppercase subtitle">
          Info
        </h2>
        <p class="text-pretty subtitle">
          Developed a modern website for a Polish high school, from design to deployment. Built on a custom WordPress theme with <x-link>TailwindCSS</x-link>. Created custom Gutenberg blocks for Courses and Blog for flexible content management. Integrated <x-link>ACF</x-link> for structured data and Contact Form for feedback. Implemented basic SEO to enhance search visibility. The site reflects the institution’s brand identity and needs.
        </p>
      </div>
    </div>
  </section>
  <div class="container">
    {!! the_content() !!}
  </div>
@endsection