@extends('layouts.app')

@section('content')
  <section class="pt-12 max-sm:pt-5">
    <div class="container">
      <x-responsive-text 
        desktop="0 0 128 16"
        mobile="0 0 133 16"
      >
        <h1 class="font-bold uppercase text-nowrap leading-none xl:tracking-tight">
          Archive Works
        </h1>
      </x-responsive-text>
    </div>
  </section>
  <section class="my-30 max-sm:my-24">
    <div class="container">
      <div class="gap-5 grid grid-cols-2 max-xl:grid-cols-1">
        {{-- Show cases --}}
        @if (have_posts())
          @while (have_posts()) @php(the_post())
            @include('partials.work')
          @endwhile
          @php(wp_reset_postdata())
        @endif
        {{-- /Show cases --}}
      </div>
    </div>
  </section>
@endsection
