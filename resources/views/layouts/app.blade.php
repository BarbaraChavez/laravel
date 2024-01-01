<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ config('app.name', 'Sistema de contas de jogos') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="dark:bg-gray-900 antialiased vsc-initialized" cz-shortcut-listen="true">
    <div id="app" class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900">
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800 dark:border-gray-700 flex justify-between items-center flex-wrap sm:flex-nowrap md:justify-start md:space-x-5 md:flex-nowrap md:px-10 md:py-0 md:flex md:items-center">
  <div class="container flex flex-wrap justify-between items-center mx-auto md:flex-nowrap"> 
    <a href="{{ url('/') }}" class="flex items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name', 'Sistema de contas de jogos') }}</span>
    </a>
    <button data-collapse-toggle="navbarSupportedContent" type="button" class="inline-flex items-center p-2 text-sm text-white rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-600" aria-controls="navbarSupportedContent" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm1 7a1 1 0 100 2h12a1 1 0 100-2H4zm0 5a1 1 0 100 2h12a1 1 0 100-2H4z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbarSupportedContent">
      <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
        @guest
         

          @if (Route::has('register'))
            <li>
              <a href="{{ route('register') }}" class="block py-2 pr-4 pl-3 text-gray-700 rounded md:bg-transparent text-white md:p-0 dark:text-white">{{ __('Register') }}</a>
            </li>
          @endif
        @else
        <div class="flex items-center">
          <li class="relative">
            <button type="button" class="flex items-center text-gray-700 rounded md:bg-transparent text-white md:p-0 dark:text-white" data-dropdown-toggle="dropdownExample">
              <span class="mr-1">Jean</span>
              <i class="fas fa-angle-down"></i>
            </button>
          </li>
          <button id="darkModeToggle" data-tooltip-target="tooltip-toggle" type="button" class="text-gray-500 inline-flex items-center justify-center dark:text-gray-400 hover:bg-gray-100 w-10 h-10 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
            <svg id="theme-toggle-dark-icon" class="hidden w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
              <path d="M17.8 13.75a1 1 0 0 0-.859-.5A7.488 7.488 0 0 1 10.52 2a1 1 0 0 0 0-.969A1.035 1.035 0 0 0 9.687.5h-.113a9.5 9.5 0 1 0 8.222 14.247 1 1 0 0 0 .004-.997Z"></path>
            </svg>
            <svg id="theme-toggle-light-icon" class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Zm0-11a1 1 0 0 0 1-1V1a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1Zm0 12a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1ZM4.343 5.757a1 1 0 0 0 1.414-1.414L4.343 2.929a1 1 0 0 0-1.414 1.414l1.414 1.414Zm11.314 8.486a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM4 10a1 1 0 0 0-1-1H1a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1Zm15-1h-2a1 1 0 1 0 0 2h2a1 1 0 0 0 0-2ZM4.343 14.243l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414a1 1 0 0 0-1.414-1.414ZM14.95 6.05a1 1 0 0 0 .707-.293l1.414-1.414a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 .707 1.707Z"></path>
            </svg>
            <span class="sr-only">Toggle dark mode</span>
          </button>
        </div>

  <div id="dropdownExample" class="hidden absolute right-0 mt-2 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-placement="bottom-start">
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
      <li>
        <a href="https://claigames.store/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout <i class="fas fa-sign-out-alt"></i></a>
      </li>
    </ul>
  </div>
  <form id="logout-form" action="https://claigames.store/logout" method="POST" class="hidden">
    @csrf
  </form>
</li>


        @endguest
      </ul>
    </div>
  </div>
</nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @stack('scripts')
</body> 
</html>
