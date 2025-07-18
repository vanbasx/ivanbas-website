<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preload" href="{{ Vite::asset('resources/fonts/InterDisplay-Light.woff2') }}" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="{{ Vite::asset('resources/fonts/InterDisplay-Regular.woff2') }}" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="{{ Vite::asset('resources/fonts/InterDisplay-SemiBold.woff2') }}" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="{{ Vite::asset('resources/fonts/InterDisplay-Bold.woff2') }}" as="font" type="font/woff2" crossorigin="">
  </head>

  <body @php(body_class('bg-black text-white overflow-x-hidden'))>
    @php(wp_body_open())

    <div id="app">
      @include('sections.header')
      <div id="wrapper">
        <main id="main" class="mt-16 max-sm:mt-15">
          @yield('content')
        </main>

        @include('sections.footer')
      </div>
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>