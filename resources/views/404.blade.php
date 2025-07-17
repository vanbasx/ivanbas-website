@extends('layouts.app')

@section('content')
  <section class="flex justify-center items-center h-full">
    <div class="py-20 container">
      <div class="overflow-clip">
        <x-responsive-text
          id="hero-title"
          class="mb-15 max-sm:mb-5 max-md:mb-10"
          desktop="0 0 187 16"
          mobile="0 0 195 16"
        >
          <h1 class="font-bold uppercase text-nowrap leading-none xl:tracking-tight">
            404 — Page not found
          </h1>
        </x-responsive-text>
      </div>
      <div class="overflow-clip">
        <p id="subtitle" class="text-center subtitle">
          This web-page was deleted or never came to be. <x-link href="/">Click to go home.</x-link>
        </p>
      </div>
    </div>
  </section>
@endsection
