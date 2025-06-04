<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preload" href="@asset('resources/fonts/InterDisplay-Black.woff2')" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="@asset('resources/fonts/InterDisplay-Regular.woff2')" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="@asset('resources/fonts/InterDisplay-SemiBold.woff2')" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="@asset('resources/fonts/InterDisplay-Medium.woff2')" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="@asset('resources/fonts/InterDisplay-ExtraBold.woff2')" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="@asset('resources/fonts/InterDisplay-Bold.woff2')" as="font" type="font/woff2" crossorigin>

    <link rel="icon" href="@asset('resources/images/icons/favicons/favicon.svg')" type="image/svg+xml">
    <link rel="icon" href="@asset('resources/images/icons/favicons/favicon-32x32.png')" sizes="32x32">
    <link rel="icon" href="@asset('resources/images/icons/favicons/favicon-192x192.png')" sizes="192x192">
    <link rel="apple-touch-icon" href="@asset('resources/images/icons/favicons/apple-touch-icon-180x180.svg')">

  </head>

  <body @php(body_class('bg-zinc-100'))>
    @php(wp_body_open())

    <div id="app">
      @include('sections.header')

      <main>
        @yield('content')
      </main>

      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
