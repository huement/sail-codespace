<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ Meta::get('title') }} | {{ config('app.name', 'Huement') }}</title>
  {!! Meta::tag('description') !!}
  {!! Meta::tag('image') !!}

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">

  <!-- Scripts -->
  @vite(['resources/sass/ui.scss', 'resources/sass/website.scss'])
  @stack('styles')
</head>
<body class="font-sans antialiased website-layout {{ $bodyClass ?? '' }}" data-bs-theme="dark">

  @include('layouts.website-navigation', ['headerBackground' => $headerBackground ?? ''])

  <main>
    @yield('content')

    @hasSection('advert')
    @yield('advert')
    @endif
  </main>

  @include('layouts.website-footer', ['directory' => $directory ?? []])

  @vite(['resources/js/website.js'])
  @stack('scripts')

  @hasSection('seo')
  @yield('seo')
  @endif
</body>
</html>
