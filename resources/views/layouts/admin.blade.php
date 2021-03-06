<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  @livewireStyles

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100" x-data="{ openMenu: true }">
    <header>
      <div class="bg-white shadow-md relative z-50">
        @livewire('admin.navigation')
      </div>
    </header>

    <!-- Page Content -->
    <main class="flex flex-row">
      @livewire('admin.menu')
      <div class="flex flex-col w-full">
        {{ $slot }}
      </div>
    </main>
  </div>
  @livewireScripts
</body>

</html>