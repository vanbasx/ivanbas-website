@extends('layouts.app')

@section('content')
  <section class="pt-12">
    <div class="container">
      <x-responsive-text 
        class="mb-25 max-sm:mb-10 max-md:mb-15 max-xl:mb-20"
        desktop="0 0 128 16"
        mobile="0 0 133 16"
      >
        <h1 class="font-bold uppercase text-nowrap leading-none xl:tracking-tight">
          Archive Works
        </h1>
      </x-responsive-text>
    </div>
  </section>
@endsection
