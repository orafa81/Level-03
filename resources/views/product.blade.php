@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="mb-4 p-3 bg-green-200 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <section class="bg-white dark:bg-rose-900">
        <div class=" max-w-screen-xl px-4 pt-10 pb-8 mx-auto">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mx-auto mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-xl xl:text-2xl dark:text-white">
                    Procure o carro que você quer!</h1>
                <form class="max-w-2xl mx-auto">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-rose-600 dark:placeholder-rose-500 dark:text-gray-600 dark:focus:ring-rose-600 dark:focus:border-rose-600"
                            placeholder="Search Mockups, Logos..." required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-rose-700 dark:hover:bg-rose-800 dark:focus:ring-rose-900">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{-- <section class="">
        <div class="grid grid-cols-3 max-w-screen-xl px-4 pt-20 pb-8 mx-auto sm:grid-cols lg:gap-4 xl:gap-4  lg:pt-28">
            <div class="max-w-sm bg-white rounded-lg shadow-sm dark:bg-white">
                <a href="#">
                    <img class="rounded-t-lg" src="../../../storage/imagens/chevroletonix2025-01.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-950">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-700">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-rose-900 focus:ring-4 focus:outline-none focus:ring-rose-400 dark:bg-rose-700 dark:hover:bg-rose-800 dark:focus:ring-rose-900">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white  rounded-lg shadow-sm dark:bg-white">
                <a href="#">
                    <img class="rounded-t-lg" src="../../../storage/imagens/chevroletonix2025-01.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-950">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-700">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-rose-900 focus:ring-4 focus:outline-none focus:ring-rose-400 dark:bg-rose-700 dark:hover:bg-rose-800 dark:focus:ring-rose-900">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white rounded-lg shadow-sm dark:bg-white">
                <a href="#">
                    <img class="rounded-t-lg" src="../../../storage/imagens/chevroletonix2025-01.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-950">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-800 dark:text-gray-700">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-rose-900 focus:ring-4 focus:outline-none focus:ring-rose-400 dark:bg-rose-700 dark:hover:bg-rose-800 dark:focus:ring-rose-900">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="max-w-screen-xl px-4 pt-20 pb-8 mx-auto ">
        <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
            <button aria-label="slide backward"
                class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                id="prev">
                <svg class="dark:text-gray-900" width="18" height="24" viewBox="0 0 8 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <div class="w-full relative flex items-center justify-center">

                <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                    <div id="slider"
                        class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                        <div class="flex flex-wrap flex-shrink-0 relative rounded-lg shadow-sm max-w-sm sm:w-auto">
                            <a href="#">
                                <img class="rounded-t-lg" src="../../../storage/imagens/chevroletonix2025-01.jpg"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-950">
                                        Noteworthy
                                        technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-800 dark:text-gray-700">Here are the biggest
                                    enterprise technology
                                    acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-rose-900 focus:ring-4 focus:outline-none focus:ring-rose-400 dark:bg-rose-700 dark:hover:bg-rose-800 dark:focus:ring-rose-900">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        
                        <div
                            class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                            <div class="h-56 w-full">
                                <a href="#">
                                    <img class="mx-auto h-full dark:hidden"
                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/macbook-pro-light.svg"
                                        alt="" />
                                    <img class="mx-auto hidden h-full dark:block"
                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/macbook-pro-dark.svg"
                                        alt="" />
                                </a>
                            </div>

                            <div class="pt-6">
                                <div class="mb-4 flex items-center justify-between gap-4">
                                    <span
                                        class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                        Up to 5% off </span>

                                    <div class="flex items-center justify-end gap-1">
                                        <button type="button" data-tooltip-target="tooltip-quick-look-6"
                                            class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only"> Quick look </span>
                                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-width="2"
                                                    d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                                <path stroke="currentColor" stroke-width="2"
                                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                        </button>
                                        <div id="tooltip-quick-look-6" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Quick look
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>

                                        <button type="button" data-tooltip-target="tooltip-add-to-favorites-6"
                                            class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only"> Add to Favorites </span>
                                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                                            </svg>
                                        </button>
                                        <div id="tooltip-add-to-favorites-6" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Add to favorites
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                    class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Apple
                                    MacBook PRO Laptop with M2 chip</a>

                                <div class="mt-2 flex items-center gap-2">
                                    <div class="flex items-center">
                                        <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                        </svg>

                                        <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                        </svg>

                                        <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                        </svg>

                                        <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                        </svg>

                                        <svg class="h-4 w-4 text-yellow-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                        </svg>
                                    </div>

                                    <p class="text-sm font-medium text-gray-900 dark:text-white">4.9</p>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">(1,076)</p>
                                </div>

                                <ul class="mt-2 flex items-center gap-4">
                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                        </svg>
                                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Fast Delivery</p>
                                    </li>

                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                        </svg>
                                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Best Price</p>
                                    </li>
                                </ul>

                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">$2,599
                                    </p>

                                    <button type="button"
                                        class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                        <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                        </svg>
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <script>
            let defaultTransform = 0;

            function goNext() {
                defaultTransform = defaultTransform - 398;
                var slider = document.getElementById("slider");
                if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
                slider.style.transform = "translateX(" + defaultTransform + "px)";
            }
            next.addEventListener("click", goNext);

            function goPrev() {
                var slider = document.getElementById("slider");
                if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
                else defaultTransform = defaultTransform + 398;
                slider.style.transform = "translateX(" + defaultTransform + "px)";
            }
            prev.addEventListener("click", goPrev);
        </script> 
    </section> --}}




    <section class="py-8 bg-white md:py-16 dark:bg-white antialiased">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <img class="w-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                        alt="" />
                    <img class="w-full hidden dark:block" src="../../../imagens/onix.png" alt="" />
                </div>

                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-gray-950">
                        {{ $product->mark }}, {{ $product->model }}, {{ $product->plate }}
                    </h1>
                    <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                        <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-gray-950">
                            R$ {{ $product->price }}
                        </p>

                        <div class="flex items-center gap-2 mt-2 sm:mt-0">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                            <p class="text-sm font-medium leading-none text-gray-500 dark:text-gray-600">
                                (5.0)
                            </p>
                            <a href="#"
                                class="text-sm font-medium leading-none text-gray-900 underline hover:no-underline dark:text-gray-900">
                                345 Reviews
                            </a>
                        </div>
                    </div>

                    <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                        <a href="#" title=""
                            class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-100 dark:bg-white dark:text-gray-950 dark:border-gray-200 dark:hover:text-rose-600 dark:hover:bg-gray-100"
                            role="button">
                            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                            </svg>
                            Adicionar os favoritos
                        </a>

                        <a href="#" title=""
                            class="text-white mt-4 sm:mt-0 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-800 flex items-center justify-center"
                            role="button">
                            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                            </svg>

                            Confirmar
                        </a>
                    </div>

                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                    <p class="mb-6 text-gray-500 dark:text-gray-500">
                        {{ $product->description }}
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white py-8 antialiased dark:bg-white md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="flex items-center gap-2">
                <h2 class="text-2xl font-semibold  dark:text-gray-900">Reviews</h2>

                <div class="mt-2 flex items-center gap-2 sm:mt-0">
                    <div class="flex items-center gap-0.5">
                        <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                        </svg>
                        <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                        </svg>
                        <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                        </svg>
                        <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                        </svg>
                        <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                        </svg>
                    </div>
                    <p class="text-sm font-medium leading-none  dark:text-gray-500">(4.6)</p>
                    <a href="#"
                        class="text-sm font-medium leading-none text-gray-900 underline hover:no-underline dark:text-gray-900">
                        645 Reviews </a>
                </div>
            </div>

            <div class="my-6 gap-8 sm:flex sm:items-start md:my-8">
                <div class="shrink-0 space-y-4">
                    <p class="text-2xl font-semibold leading-none  dark:text-gray-900">4.65 out of 5</p>
                    <button type="button" data-modal-target="review-modal" data-modal-toggle="review-modal"
                        class="mb-2 me-2 rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-rose-700 dark:hover:bg-rose-800 dark:focus:outline-none dark:focus:ring-rose-300">Write
                        a review</button>
                </div>

                <div class="mt-6 min-w-0 flex-1 space-y-3 sm:mt-0">
                    <div class="flex items-center gap-2">
                        <p class="w-2 shrink-0 text-start text-sm font-medium leading-none text-gray-900 dark:text-gray-900">5
                        </p>
                        <svg class="h-4 w-4 shrink-0 text-yellow-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                        </svg>
                        <div class="h-1.5 w-80 rounded-full bg-gray-200 dark:bg-gray-200">
                            <div class="h-1.5 rounded-full bg-yellow-300" style="width: 20%"></div>
                        </div>
                        <a href="#"
                            class="w-8 shrink-0 text-right text-sm font-medium leading-none text-rose-700 hover:underline dark:text-rose-700 sm:w-auto sm:text-left">239
                            <span class="hidden sm:inline">reviews</span></a>
                    </div>

                    <div class="flex items-center gap-2">
                        <p class="w-2 shrink-0 text-start text-sm font-medium leading-none text-gray-900 dark:text-gray-900">4
                        </p>
                        <svg class="h-4 w-4 shrink-0 text-yellow-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                        </svg>
                        <div class="h-1.5 w-80 rounded-full bg-gray-200 dark:bg-gray-200">
                            <div class="h-1.5 rounded-full bg-yellow-300" style="width: 60%"></div>
                        </div>
                        <a href="#"
                            class="w-8 shrink-0 text-right text-sm font-medium leading-none text-primary-700 hover:underline dark:text-rose-700 sm:w-auto sm:text-left">432
                            <span class="hidden sm:inline">reviews</span></a>
                    </div>

                    <div class="flex items-center gap-2">
                        <p class="w-2 shrink-0 text-start text-sm font-medium leading-none text-gray-900 dark:text-gray-900">3
                        </p>
                        <svg class="h-4 w-4 shrink-0 text-yellow-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                        </svg>
                        <div class="h-1.5 w-80 rounded-full bg-gray-200 dark:bg-gray-200">
                            <div class="h-1.5 rounded-full bg-yellow-300" style="width: 15%"></div>
                        </div>
                        <a href="#"
                            class="w-8 shrink-0 text-right text-sm font-medium leading-none text-primary-700 hover:underline dark:text-rose-700 sm:w-auto sm:text-left">53
                            <span class="hidden sm:inline">reviews</span></a>
                    </div>

                    <div class="flex items-center gap-2">
                        <p class="w-2 shrink-0 text-start text-sm font-medium leading-none text-gray-900 dark:text-gray-900">2
                        </p>
                        <svg class="h-4 w-4 shrink-0 text-yellow-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                        </svg>
                        <div class="h-1.5 w-80 rounded-full bg-gray-200 dark:bg-gray-200">
                            <div class="h-1.5 rounded-full bg-yellow-300" style="width: 5%"></div>
                        </div>
                        <a href="#"
                            class="w-8 shrink-0 text-right text-sm font-medium leading-none text-primary-700 hover:underline dark:text-rose-700 sm:w-auto sm:text-left">32
                            <span class="hidden sm:inline">reviews</span></a>
                    </div>

                    <div class="flex items-center gap-2">
                        <p class="w-2 shrink-0 text-start text-sm font-medium leading-none text-gray-900 dark:text-gray-900">1
                        </p>
                        <svg class="h-4 w-4 shrink-0 text-yellow-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                        </svg>
                        <div class="h-1.5 w-80 rounded-full bg-gray-200 dark:bg-gray-200">
                            <div class="h-1.5 rounded-full bg-yellow-300" style="width: 0%"></div>
                        </div>
                        <a href="#"
                            class="w-8 shrink-0 text-right text-sm font-medium leading-none text-primary-700 hover:underline dark:text-rose-700 sm:w-auto sm:text-left">13
                            <span class="hidden sm:inline">reviews</span></a>
                    </div>
                </div>
            </div>

            <div class="mt-6 divide-y divide-gray-200 dark:divide-gray-200">
                <div class="gap-3 pb-6 sm:flex sm:items-start">
                    <div class="shrink-0 space-y-2 sm:w-48 md:w-72">
                        <div class="flex items-center gap-0.5">
                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                        </div>

                        <div class="space-y-0.5">
                            <p class="text-base font-semibold text-gray-900 dark:text-gray-900">Micheal Gough</p>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-500">November 18 2023 at 15:35</p>
                        </div>

                        <div class="inline-flex items-center gap-1">
                            <svg class="h-5 w-5 text-rose-700 dark:text-rose-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-sm font-medium text-gray-900 dark:text-gray-900">Verified purchase</p>
                        </div>
                    </div>

                    <div class="mt-4 min-w-0 flex-1 space-y-4 sm:mt-0">
                        <p class="text-base font-normal text-gray-500 dark:text-gray-500">My old IMAC was from 2013. This
                            replacement was well needed. Very fast, and the colour matches my office set up perfectly. The
                            display is out of this world and I’m very happy with this purchase.</p>

                        <div class="flex items-center gap-4">
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-500">Was it helpful to you?</p>
                            <div class="flex items-center">
                                <input id="reviews-radio-1" type="radio" value="" name="reviews-radio"
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-rose-600 focus:ring-2 focus:ring-rose-500 dark:border-gray-300 dark:bg-gray-100 dark:text-rose-600 dark:focus:ring-2 dark:focus:ring-rose-500" />
                                <label for="reviews-radio-1"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900"> Yes: 3 </label>
                            </div>
                            <div class="flex items-center">
                                <input id="reviews-radio-2" type="radio" value="" name="reviews-radio"
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-300 dark:bg-gray-100 dark:text-rose-600 dark:focus:ring-2 dark:focus:ring-rose-500" />
                                <label for="reviews-radio-2"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">No: 0 </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gap-3 py-6 sm:flex sm:items-start">
                    <div class="shrink-0 space-y-2 sm:w-48 md:w-72">
                        <div class="flex items-center gap-0.5">
                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                        </div>

                        <div class="space-y-0.5">
                            <p class="text-base font-semibold text-gray-900 dark:text-gray-900">Jese Leos</p>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-500">November 18 2023 at 15:35</p>
                        </div>

                        <div class="inline-flex items-center gap-1">
                            <svg class="h-5 w-5 text-rose-700 dark:text-rose-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-sm font-medium text-gray-900 dark:text-gray-900">Verified purchase</p>
                        </div>
                    </div>

                    <div class="mt-4 min-w-0 flex-1 space-y-4 sm:mt-0">
                        <p class="text-base font-normal text-gray-500 dark:text-gray-500">It’s fancy, amazing keyboard,
                            matching accessories. Super fast, batteries last more than usual, everything runs perfect in
                            this computer. Highly recommend!</p>

                        <div class="flex gap-2">
                            <img class="h-32 w-20 rounded-lg object-cover"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-photo-1.jpg"
                                alt="" />
                            <img class="h-32 w-20 rounded-lg object-cover"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-photo-2.jpg"
                                alt="" />
                        </div>

                        <div class="flex items-center gap-4">
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-500">Was it helpful to you?</p>
                            <div class="flex items-center">
                                <input id="reviews-radio-3" type="radio" value="" name="reviews-radio-2"
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-rose-600 focus:ring-2 focus:ring-rose-500 dark:border-gray-300 dark:bg-gray-100 dark:text-rose-600 dark:focus:ring-2 dark:focus:ring-primary-600" />
                                <label for="reviews-radio-3"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900"> Yes: 1 </label>
                            </div>
                            <div class="flex items-center">
                                <input id="reviews-radio-4" type="radio" value="" name="reviews-radio-2"
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-300 dark:bg-gray-100 dark:text-rose-600 dark:focus:ring-2 dark:focus:ring-primary-600" />
                                <label for="reviews-radio-4"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">No: 0 </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gap-3 py-6 sm:flex sm:items-start">
                    <div class="shrink-0 space-y-2 sm:w-48 md:w-72">
                        <div class="flex items-center gap-0.5">
                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                        </div>

                        <div class="space-y-0.5">
                            <p class="text-base font-semibold text-gray-900 dark:text-gray-900">Bonnie Green</p>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-500">November 18 2023 at 15:35</p>
                        </div>

                        <div class="inline-flex items-center gap-1">
                            <svg class="h-5 w-5 text-primary-700 dark:text-rose-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-sm font-medium text-gray-900 dark:text-gray-900">Verified purchase</p>
                        </div>
                    </div>

                    <div class="mt-4 min-w-0 flex-1 space-y-4 sm:mt-0">
                        <p class="text-base font-normal text-gray-500 dark:text-gray-500">My old IMAC was from 2013. This
                            replacement was well needed. Very fast, and the colour matches my office set up perfectly. The
                            display is out of this world and I’m very happy with this purchase.</p>

                        <div class="flex items-center gap-4">
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-500">Was it helpful to you?</p>
                            <div class="flex items-center">
                                <input id="reviews-radio-5" type="radio" value="" name="reviews-radio-3"
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-300 dark:bg-gray-100 dark:focus:ring-2 dark:focus:ring-primary-600" />
                                <label for="reviews-radio-5"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900"> Yes: 0 </label>
                            </div>
                            <div class="flex items-center">
                                <input id="reviews-radio-6" type="radio" value="" name="reviews-radio-3"
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-300 dark:bg-gray-100 dark:focus:ring-2 dark:focus:ring-primary-600" />
                                <label for="reviews-radio-6"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">No: 0 </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gap-3 py-6 sm:flex sm:items-start">
                    <div class="shrink-0 space-y-2 sm:w-48 md:w-72">
                        <div class="flex items-center gap-0.5">
                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                        </div>

                        <div class="space-y-0.5">
                            <p class="text-base font-semibold text-gray-900 dark:text-gray-900">Roberta Casas</p>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-500">November 18 2023 at 15:35</p>
                        </div>

                        <div class="inline-flex items-center gap-1">
                            <svg class="h-5 w-5 text-primary-700 dark:text-rose-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-sm font-medium text-gray-900 dark:text-gray-900">Verified purchase</p>
                        </div>
                    </div>

                    <div class="mt-4 min-w-0 flex-1 space-y-4 sm:mt-0">
                        <p class="text-base font-normal text-gray-500 dark:text-gray-500">I have used earlier Mac computers
                            in my university work for a number of years and found them easy to use.The iMac 2021 is no
                            exception. It works straight out of the box giving superb definition from the HD screen.</p>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-500">Basic tools such as a browser
                            (Safari) and a mail client are included in the system. Microsoft Office apps can be downloaded
                            from the App Store though they may only work in read-only mode unless you take out a
                            subscription. The instruction manual that comes with it is the size of a piece of toilet paper
                            but the proper user guide is on-line.</p>

                        <div class="flex items-center gap-4">
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-500">Was it helpful to you?</p>
                            <div class="flex items-center">
                                <input id="reviews-radio-7" type="radio" value="" name="reviews-radio-4"
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-300 dark:bg-gray-100 dark:focus:ring-2 dark:focus:ring-primary-600" />
                                <label for="reviews-radio-7"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900"> Yes: 1 </label>
                            </div>
                            <div class="flex items-center">
                                <input id="reviews-radio-8" type="radio" value="" name="reviews-radio-4"
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-300 dark:bg-gray-100 dark:focus:ring-2 dark:focus:ring-primary-600" />
                                <label for="reviews-radio-8"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">No: 0 </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gap-3 py-6 sm:flex sm:items-start">
                    <div class="shrink-0 space-y-2 sm:w-48 md:w-72">
                        <div class="flex items-center gap-0.5">
                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>

                            <svg class="h-4 w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                        </div>

                        <div class="space-y-0.5">
                            <p class="text-base font-semibold text-gray-900 dark:text-gray-900">Neil Sims</p>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-500">November 18 2023 at 15:35</p>
                        </div>

                        <div class="inline-flex items-center gap-1">
                            <svg class="h-5 w-5 text-primary-700 dark:text-rose-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-sm font-medium text-gray-900 dark:text-gray-900">Verified purchase</p>
                        </div>
                    </div>

                    <div class="mt-4 min-w-0 flex-1 space-y-4 sm:mt-0">
                        <p class="text-base font-normal text-gray-500 dark:text-gray-500">I replaced my 11 year old iMac
                            with the new M1 Apple. I wanted to remain with Apple as my old one is still working perfectly
                            and all Apple products are so reliable. Setting up was simple and fast and transferring
                            everything from my previous iMac worked perfectly.</p>

                        <div class="flex items-center gap-4">
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-500">Was it helpful to you?</p>
                            <div class="flex items-center">
                                <input id="reviews-radio-9" type="radio" value="" name="reviews-radio-5"
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-300 dark:bg-gray-100 dark:focus:ring-2 dark:focus:ring-primary-600" />
                                <label for="reviews-radio-9"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900"> Yes: 1 </label>
                            </div>
                            <div class="flex items-center">
                                <input id="reviews-radio-10" type="radio" value="" name="reviews-radio-5"
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-300 dark:bg-gray-100 dark:focus:ring-2 dark:focus:ring-primary-600" />
                                <label for="reviews-radio-10"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">No: 0 </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 text-center">
                <button type="button"
                    class="mb-2 me-2 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-rose-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-200 dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100 dark:hover:text-rose-700 dark:focus:z-10 dark:focus:outline-none dark:focus:ring-4 dark:focus:ring-gray-100">View
                    more reviews</button>
            </div>
        </div>
    </section>

    <!-- Add review modal -->
    <div id="review-modal" tabindex="-1" aria-hidden="true"
        class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0 antialiased">
        <div class="relative max-h-full w-full max-w-2xl p-4">
            <!-- Modal content -->
            <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between rounded-t border-b border-gray-200 p-4 dark:border-gray-700 md:p-5">
                    <div>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-gray-900">Add a review for:</h3>
                        <a href="#" class="font-medium text-primary-700 hover:underline dark:text-rose-700">Apple
                            iMac 24" All-In-One Computer, Apple M1, 8GB RAM, 256GB SSD</a>
                    </div>
                    <button type="button"
                        class="absolute right-5 top-5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-500 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-gray-900"
                        data-modal-toggle="review-modal">
                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="mb-4 grid grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <div class="flex items-center">
                                <svg class="h-6 w-6 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="ms-2 h-6 w-6 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="ms-2 h-6 w-6 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="ms-2 h-6 w-6 text-gray-300 dark:text-gray-900" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="ms-2 h-6 w-6 text-gray-300 dark:text-gray-900" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <span class="ms-2 text-lg font-bold text-gray-900 dark:text-gray-900">3.0 out of 5</span>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="title"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-900">Review title</label>
                            <input type="text" name="title" id="title"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-300 dark:bg-gray-100 dark:text-gray-900 dark:placeholder:text-gray-500 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                required="" />
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-900">Review
                                description</label>
                            <textarea id="description" rows="6"
                                class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-300 dark:bg-gray-100 dark:text-gray-900 dark:placeholder:text-gray-500 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                required=""></textarea>
                            <p class="ms-auto text-xs text-gray-500 dark:text-gray-500">Problems with the product or
                                delivery? <a href="#"
                                    class="text-primary-600 hover:underline dark:text-rose-700">Send a report</a>.</p>
                        </div>
                        <div class="col-span-2">
                            <p class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-900">Add real photos of the
                                product to help other customers <span
                                    class="text-gray-500 dark:text-gray-500">(Optional)</span></p>
                            <div class="flex w-full items-center justify-center">
                                <label for="dropzone-file"
                                    class="dark:hover:bg-bray-800 flex h-52 w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100 dark:border-gray-300 dark:bg-gray-100 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center justify-center pb-6 pt-5">
                                        <svg class="mb-4 h-8 w-8 text-gray-500 dark:text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-500"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-500">SVG, PNG, JPG or GIF (MAX.
                                            800x400px)</p>
                                    </div>
                                    <input id="dropzone-file" type="file" class="hidden" />
                                </label>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="flex items-center">
                                <input id="review-checkbox" type="checkbox" value=""
                                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-300 dark:bg-gray-100 dark:focus:ring-2 dark:focus:ring-primary-600" />
                                <label for="review-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-500">By publishing this
                                    review you agree with the <a href="#"
                                        class="text-primary-600 hover:underline dark:text-rose-700">terms and
                                        conditions</a>.</label>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 pt-4 dark:border-gray-700 md:pt-5">
                        <button type="submit"
                            class="me-2 inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Add
                            review</button>
                        <button type="button" data-modal-toggle="review-modal"
                            class="me-2 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-100 dark:hover:text-gray-900 dark:focus:ring-gray-700">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
