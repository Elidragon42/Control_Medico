<!DOCTYPE html>
<html lang="es" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('css')
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/342c8d4321.js" crossorigin="anonymous"></script>
</head>

<body class="h-full">

    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-full px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-14 w-14" src="{{ asset('images/Logo Mefasa 80px.png') }}" alt="logo mefasa">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="{{ route('consultas.index') }}"
                                    class="{{Route::currentRouteName() == 'consultas.index' ? 'bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium' :  'text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium' }}" aria-current="page">Tabla</a>
                                <a href="{{ route('procedimientos.index') }}"
                                class="{{Route::currentRouteName() == 'procedimientos.index' ? 'bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium' :  'text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium' }}">Procedimientos</a>
                                

                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <div>
                            <h1 class="text-white">{{Auth::user()->name}}</h1>
                            </div>

                            <div id="dropdownButton" class="relative ml-3">
                                <div>
                                    <button type="button"
                                        class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Abrir menu de Usuario</span>

                                        @if (Auth::check() && Auth::user()->admin)
                                            <i class="fa-solid fa-user-tie w-8 h-8 pt-4 rounded-full fa-xl"
                                                style="color: #fff"></i>
                                        @else
                                            <i class="fa-solid fa-user-doctor w-8 h-8 pt-4 rounded-full fa-xl"
                                                style="color: #fff"></i>
                                        @endif

                                    </button>
                                </div>

                                <!--
                  Dropdown menu, show/hide based on menu state.
  
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                                <div id="dropdownMenu"
                                    class="absolute overflow-hidden hidden right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white  shadow-lg ring-1 ring-black ring-opacity-5 border-2 border-white focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">

                                    @if (Auth::check() && Auth::user()->admin)

                                        <a href="{{ route('login.cerrar') }}"
                                            class="block w-full px-2 py-2 text-sm text-gray-700 hover:bg-gray-800 hover:text-white"
                                            role="menuitem" tabindex="-1" id="user-menu-item-2">Cerrar sesion</a>

                                            <a href="{{ route('login.registrarse') }}"
                                        class="block w-full px-2 py-2 text-sm text-gray-700 hover:bg-gray-800 hover:text-white"
                                        role="menuitem" tabindex="-1" id="user-menu-item-2">Añadir usuario nuevo</a>
                                    @else
                                        <a href="{{ route('login.cerrar') }}"
                                            class="block w-full px-2 py-2 text-sm text-gray-700 hover:bg-gray-800 hover:text-white"
                                            role="menuitem" tabindex="-1" id="user-menu-item-2">Cerrar sesion</a>
                                    @endif


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <button type="button"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <a href="{{ route('consultas.index') }}" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                        aria-current="page">Tabla</a>
                    <a href="{{ route('procedimientos.index') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Procedimientos</a>
                </div>
        </nav>


        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="inline pr-24 text-3xl font-bold tracking-tight text-gray-900">@yield('subtitle')</h1>
                @yield('boton1')
                @yield('boton2')
            </div>
        </header>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                @yield('content')
            </div>
        </main>
    </div>



    <script src="{{ asset('js/DropDownHeader.js') }}"></script>
    <script src="https://kit.fontawesome.com/342c8d4321.js" crossorigin="anonymous"></script>
    @yield('script')
    <footer class="bg-gray-900 text-white py-4 px-8">
        <div class="mx-auto max-w-7xl flex justify-between items-center">
            <div>
                <p class="font-bold">Información de contacto:</p>
                <p>Agua Prieta: <a href="tel:6331160250">633-116-0250</a></p>
                <p>Cumpas: <a href="tel:6343460208">634-346-0208</a></p>
            </div>
            <div>
                <p class="font-bold">Direcciones:</p>
                <p>Agua Prieta: Calle 7 Avenida Anáhuac Agua Prieta Sonora, México.</p>
                <p>Cumpas: Calle 15 Avenida Emiliano Zapata Cumpas Sonora, México.</p>
            </div>
        </div>
    </footer>
    
</body>

</html>
