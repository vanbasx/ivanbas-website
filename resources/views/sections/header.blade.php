<header class="top-0 left-1/2 z-20 fixed p-5 w-240 max-lg:w-full -translate-x-1/2">
  <div class="bg-white shadow-xs border border-zinc-200 rounded-3xl">
    <div class="flex justify-between items-center p-5 w-full">
      {{-- Logo --}}
      <a href="{{ home_url('/') }}" class="flex items-center gap-1.5">
        <img src="{{ Vite::asset('resources/images/icons/logo.svg') }}" alt="Website logo white cube">
        <img 
          src="{{ Vite::asset('resources/images/icons/logo-text.svg') }}" 
          alt="Website logo text ivanbas" 
          class="max-sm:hidden"
        >
      </a>
      {{-- /Logo --}}

      {{-- Navigation --}}
      <nav class="max-md:hidden">
        <ul class="flex items-center gap-7">
          <li>
            <x-header-link href="#">
              About Me
            </x-header-link>
          </li>
          <li>
            <x-header-link href="#">
              Case Studies
            </x-header-link>
          </li>
          <li>
            <x-header-link href="#">
              Services
            </x-header-link>
          </li>
        </ul>
      </nav>
      {{-- /Navigation --}}

      {{-- Buttons --}}
      <div class="flex items-center gap-2">
        <a href="#" class="bg-zinc-100 rounded-full size-10">

        </a>
        <a href="#" class="bg-black px-5 py-2.5 rounded-full font-semibold text-white text-sm">
          Let’s work
        </a>
      </div>
      {{-- /Buttons --}}
    </div>
  </div>
</header>
