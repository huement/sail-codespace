<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ Str::of(Route::currentRouteName())->ucfirst() }} | Huement Admin</title>

  <!-- @TODO ADD DNS-PREFETCH FOR RELEVANT ITEMS (NOT FONTS)
  <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->

  <!-- Scripts -->
  @vite(['resources/sass/ui.scss', 'resources/sass/app.scss'])
  @stack('styles')
  @livewireStyles
</head>
<body class="font-sans antialiased app-layout {{ $bodyClass ?? '' }}">
  @include('layouts.app-navigation')

  <div class="container-fluid">
    <div class="row app-row">
      @include('layouts.app-sidebar')

      <main class="col-md-9 col-lg-10 app-layout-main">
        @if (isset($header))
        <header class="alert-header position-absolute top-100 start-50 translate-middle">
          <div class="alert alert-primary">
            {{ $header }}
          </div>
        </header>
        @endif

        @yield('content')
      </main>
    </div>
  </div>

  @livewireScripts
  @vite(['resources/js/app.js'])
  @stack('scripts')

</body>
</html>
