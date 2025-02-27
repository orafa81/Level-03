<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../../../js/jquery-3.6.0.min.js"></script>
    <script src="../../../js/jquery.mask.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>
        .imagem-fundo {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url('../../../imagens/chevroletonix2025-01.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="bg-white border-rose-300 dark:bg-rose-950">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    @guest
                        <div class="flex items-center space-x-6 rtl:space-x-reverse">
                            @if (Route::has('login'))
                                <a class="text-sm  text-rose-600 dark:text-rose-500 hover:underline"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                <a class="text-white bg-rose-700 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-800"
                                    href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                            @endif
                        </div>
                    @else
                        {{-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>


                        </li> --}}

                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="userMenuButton" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                            data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="../../../imagens/chevroletonix2025-01.jpg"
                                alt="user photo">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600"
                            id="userMenu">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                <span
                                    class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="{{ route('car.alugados') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Carros
                                        Alugados</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                                </li>
                                @if (Auth::user()->level == 20)
                                    <li>
                                        <a href="{{ route('locador.geral') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Central
                                            do Locador</a>
                                    </li>
                                @endif

                                <li>
                                    <a href="{{ route('logout') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const button = document.getElementById("userMenuButton");
                                const dropdown = document.getElementById("userMenu");

                                button.addEventListener("click", function() {
                                    if (dropdown.classList.contains("hidden")) {
                                        dropdown.classList.remove("hidden");
                                        dropdown.classList.add("opacity-0", "absolute", "translate-y-[140px]",
                                            "translate-x-[-120px]");
                                        setTimeout(() => {
                                            dropdown.classList.remove("opacity-0", "translate-y-[-10px]");
                                            dropdown.classList.add("opacity-100", "translate-y-0");
                                        }, 10);
                                    } else {
                                        dropdown.classList.remove("opacity-100", "translate-y-0");
                                        dropdown.classList.add("opacity-0", "translate-y-[-10px]");
                                        setTimeout(() => {
                                            dropdown.classList.add("hidden");
                                        }, 200);
                                    }
                                });

                                // Fecha o dropdown ao clicar fora dele
                                document.addEventListener("click", function(event) {
                                    if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                                        dropdown.classList.remove("opacity-100", "translate-y-0");
                                        dropdown.classList.add("opacity-0", "translate-y-[-10px]");
                                        setTimeout(() => {
                                            dropdown.classList.add("hidden");
                                        }, 200);
                                    }
                                });
                            });
                        </script>
                    @endguest

                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-user" id="navbarUserButton" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbarUser">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-rose-100 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-rose-900 md:dark:bg-rose-950 dark:border-rose-800">
                        <li>
                            <a href="/"
                                class="block py-2 px-3 text-rose-950 rounded-sm hover:bg-rose-200 md:hover:bg-transparent md:hover:text-pink-900 md:p-0 dark:text-white md:dark:hover:text-pink-700 dark:hover:bg-pink-900 dark:hover:text-white md:dark:hover:bg-transparent dark:border-pink-900"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-rose-950 rounded-sm hover:bg-rose-200 md:hover:bg-transparent md:hover:text-pink-900 md:p-0 dark:text-white md:dark:hover:text-pink-700 dark:hover:bg-pink-900 dark:hover:text-white md:dark:hover:bg-transparent dark:border-pink-900">Sobre</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-rose-950 rounded-sm hover:bg-rose-200 md:hover:bg-transparent md:hover:text-pink-900 md:p-0 dark:text-white md:dark:hover:text-pink-700 dark:hover:bg-pink-900 dark:hover:text-white md:dark:hover:bg-transparent dark:border-pink-900">Serviços</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-rose-950 rounded-sm hover:bg-rose-200 md:hover:bg-transparent md:hover:text-pink-900 md:p-0 dark:text-white md:dark:hover:text-pink-700 dark:hover:bg-pink-900 dark:hover:text-white md:dark:hover:bg-transparent dark:border-pink-900">Contato</a>
                        </li>
                    </ul>
                </div>

                <script>
                    const menuButton = document.getElementById("navbarUserButton");
                    const menu = document.getElementById("navbarUser");

                    menuButton.addEventListener("click", () => {
                        menu.classList.toggle("hidden");
                    });
                </script>
            </div>
        </nav>

    </div>


    <main class="">
        @if (session('success'))
            <div id="alert_msg"
                class="flex fixed top-10 right-4 items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-green-50 dark:text-green-800"
                role="alert">
                <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-green-50 dark:text-green-500 dark:hover:bg-green-200 dark:focus:ring-2 dark:focus:ring-green-400"
                    id="btnAlert" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>

            <script>
                const buttonAlert = document.getElementById("btnAlert");
                const alertM = document.getElementById("alert_msg");

                setTimeout(() => {
                    alertM.classList.add('hidden');
                }, 5000);

                buttonAlert.addEventListener("click", () => {

                    alertM.classList.toggle("hidden");

                });
            </script>
        @endif
        @yield('content')
    </main>

    <footer class="bg-white border-rose-300 dark:bg-rose-950">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                    href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>

</html>
