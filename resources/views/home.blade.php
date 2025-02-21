@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="mb-4 p-3 bg-green-200 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <section class="bg-white dark:bg-rose-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                    Building digital <br>products & brands.</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">This free
                    and open-source landing page template was built using the utility classes from <a
                        href="https://tailwindcss.com" class="hover:underline">Tailwind CSS</a> and based on the components
                    from the <a href="https://flowbite.com/docs/getting-started/introduction/"
                        class="hover:underline">Flowbite Library</a> and the <a href="https://flowbite.com/blocks/"
                        class="hover:underline">Blocks System</a>.</p>

                <form class="max-w-xl">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-rose-600 focus:border-rose-600 dark:bg-white dark:border-rose-600 dark:placeholder-rose-500 dark:text-gray-600 dark:focus:ring-rose-600 dark:focus:border-rose-600"
                            placeholder="Search Mockups, Logos..." required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-rose-800 hover:bg-rose-900 focus:ring-4 focus:outline-none focus:ring-rose-400 font-medium rounded-lg text-sm px-4 py-2 dark:bg-rose-700 dark:hover:bg-rose-800 dark:focus:ring-rose-900">Search</button>
                    </div>
                </form>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="../../../storage/imagens/kwid.png" alt="car image">
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
                                            class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
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




    {{-- CARDS PRODUCTS --}}
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-50 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <div>
                    <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-rose-800 sm:text-2xl">Carros Disponiveis
                    </h2>
                </div>
            </div>
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-2 xl:grid-cols-3">
                @foreach ($list as $item)
                    <div
                        class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-300 dark:bg-white">
                        <div class="h-56 w-full">
                            <a href="#">
                                <img class="mx-auto h-full dark:hidden" src="../../../storage/imagens/kwid.png"
                                    alt="" />
                                <img class="mx-auto hidden h-full dark:block" src="../../../storage/imagens/onix.png"
                                    alt="" />
                            </a>
                        </div>
                        <div class="pt-6">
                            <div class="mb-4 flex items-center justify-between gap-4">
                                <span
                                    class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                    Up to 35% off </span>

                                <div class="flex items-center justify-end gap-1">
                                    <button type="button" data-tooltip-target="tooltip-quick-look"
                                        class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only"> Quick look </span>
                                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2"
                                                d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                            <path stroke="currentColor" stroke-width="2"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </button>
                                    <div id="tooltip-quick-look" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                        data-popper-placement="top">
                                        Quick look
                                        <div class="tooltip-arrow" data-popper-arrow=""></div>
                                    </div>

                                    <button type="button" data-tooltip-target="tooltip-add-to-favorites"
                                        class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only"> Add to Favorites </span>
                                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                                        </svg>
                                    </button>
                                    <div id="tooltip-add-to-favorites" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                        data-popper-placement="top">
                                        Add to favorites
                                        <div class="tooltip-arrow" data-popper-arrow=""></div>
                                    </div>
                                </div>
                            </div>

                            <a href="#"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-gray-950">
                                {{ $item->mark }}, {{ $item->model }}, {{ $item->plate }}
                            </a>

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

                                <p class="text-sm font-medium text-gray-900 dark:text-gray-900">5.0</p>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-600">(455)</p>
                            </div>

                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-600" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-600">Fast Delivery</p>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-600" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                            d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-600">Best Price</p>
                                </li>
                            </ul>

                            <div class="mt-4 flex items-center justify-between gap-4">
                                <p class="text-2xl font-extrabold leading-tight text-white  dark:text-gray-950 ">R$ {{$item->price}}</p>

                                <button type="button"
                                    class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-rose-800 focus:outline-none focus:ring-4  focus:ring-rose-300 dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-800">
                                    <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                    </svg>
                                    Alugue já
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="w-full text-center">
                <button type="button"
                    class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-rose-100 dark:border-rose-600 dark:bg-rose-800 dark:text-white dark:hover:bg-rose-700 dark:hover:text-white dark:focus:ring-rose-700">Show
                    more</button>
            </div>
        </div>
        <!-- Filter modal -->
        <form action="#" method="get" id="filterModal" tabindex="-1" aria-hidden="true"
            class="fixed left-0 right-0 top-0 z-50 hidden h-modal w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
            <div class="relative h-full w-full max-w-xl md:h-auto">
                <!-- Modal content -->
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between rounded-t p-4 md:p-5">
                        <h3 class="text-lg font-normal text-gray-500 dark:text-gray-400">Filters</h3>
                        <button type="button"
                            class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="filterModal">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="px-4 md:px-5">
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="-mb-px flex flex-wrap text-center text-sm font-medium" id="myTab"
                                data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="mr-1" role="presentation">
                                    <button class="inline-block pb-2 pr-1" id="brand-tab" data-tabs-target="#brand"
                                        type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Brand</button>
                                </li>
                                <li class="mr-1" role="presentation">
                                    <button
                                        class="inline-block px-2 pb-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                                        id="advanced-filers-tab" data-tabs-target="#advanced-filters" type="button"
                                        role="tab" aria-controls="advanced-filters" aria-selected="false">Advanced
                                        Filters</button>
                                </li>
                            </ul>
                        </div>
                        <div id="myTabContent">
                            <div class="grid grid-cols-2 gap-4 md:grid-cols-3" id="brand" role="tabpanel"
                                aria-labelledby="brand-tab">
                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium uppercase text-black dark:text-white">A</h5>

                                    <div class="flex items-center">
                                        <input id="apple" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="apple"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Apple (56)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="asus" type="checkbox" value="" checked
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="asus"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Asus (97)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="acer" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="acer"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Acer (234)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="allview" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="allview"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Allview
                                            (45) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="atari" type="checkbox" value="" checked
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="asus"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Atari (176)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="amd" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="amd"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> AMD (49)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="aruba" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="aruba"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Aruba (16)
                                        </label>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium uppercase text-black dark:text-white">B</h5>

                                    <div class="flex items-center">
                                        <input id="beats" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="beats"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Beats (56)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="bose" type="checkbox" value="" checked
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="bose"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Bose (97)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="benq" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="benq"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> BenQ (45)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="bosch" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="bosch"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Bosch (176)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="brother" type="checkbox" value="" checked
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="brother"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Brother
                                            (176) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="biostar" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="biostar"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Biostar
                                            (49) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="braun" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="braun"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Braun (16)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="blaupunkt" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="blaupunkt"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Blaupunkt
                                            (45) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="benq2" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="benq2"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> BenQ (23)
                                        </label>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium uppercase text-black dark:text-white">C</h5>

                                    <div class="flex items-center">
                                        <input id="canon" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="canon"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Canon (49)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="cisco" type="checkbox" value="" checked
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="cisco"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Cisco (97)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="cowon" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="cowon"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Cowon (234)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="clevo" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="clevo"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Clevo (45)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="corsair" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="corsair"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Corsair
                                            (15) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="csl" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="csl"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Canon (49)
                                        </label>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium uppercase text-black dark:text-white">D</h5>

                                    <div class="flex items-center">
                                        <input id="dell" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="dell"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Dell (56)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="dogfish" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="dogfish"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Dogfish
                                            (24) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="dyson" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="dyson"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Dyson (234)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="dobe" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="dobe"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Dobe (5)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="digitus" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="digitus"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Digitus (1)
                                        </label>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium uppercase text-black dark:text-white">E</h5>

                                    <div class="flex items-center">
                                        <input id="emetec" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="emetec"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Emetec (56)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="extreme" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="extreme"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Extreme
                                            (10) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="elgato" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="elgato"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Elgato
                                            (234) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="emerson" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="emerson"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Emerson
                                            (45) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="emi" type="checkbox" value="" checked
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="emi"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> EMI (176)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="fugoo" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="fugoo"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Fugoo (49)
                                        </label>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <h5 class="text-lg font-medium uppercase text-black dark:text-white">F</h5>

                                    <div class="flex items-center">
                                        <input id="fujitsu" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="fujitsu"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Fujitsu
                                            (97) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="fitbit" type="checkbox" value="" checked
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="fitbit"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Fitbit (56)
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="foxconn" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="foxconn"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Foxconn
                                            (234) </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="floston" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                        <label for="floston"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Floston
                                            (45) </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4" id="advanced-filters" role="tabpanel"
                            aria-labelledby="advanced-filters-tab">
                            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label for="min-price"
                                            class="block text-sm font-medium text-gray-900 dark:text-white"> Min Price
                                        </label>
                                        <input id="min-price" type="range" min="0" max="7000"
                                            value="300" step="1"
                                            class="h-2 w-full cursor-pointer appearance-none rounded-lg bg-gray-200 dark:bg-gray-700" />
                                    </div>

                                    <div>
                                        <label for="max-price"
                                            class="block text-sm font-medium text-gray-900 dark:text-white"> Max Price
                                        </label>
                                        <input id="max-price" type="range" min="0" max="7000"
                                            value="3500" step="1"
                                            class="h-2 w-full cursor-pointer appearance-none rounded-lg bg-gray-200 dark:bg-gray-700" />
                                    </div>

                                    <div class="col-span-2 flex items-center justify-between space-x-2">
                                        <input type="number" id="min-price-input" value="300" min="0"
                                            max="7000"
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500 "
                                            placeholder="" required />

                                        <div class="shrink-0 text-sm font-medium dark:text-gray-300">to</div>

                                        <input type="number" id="max-price-input" value="3500" min="0"
                                            max="7000"
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                            placeholder="" required />
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div>
                                        <label for="min-delivery-time"
                                            class="block text-sm font-medium text-gray-900 dark:text-white"> Min Delivery
                                            Time (Days) </label>

                                        <input id="min-delivery-time" type="range" min="3" max="50"
                                            value="30" step="1"
                                            class="h-2 w-full cursor-pointer appearance-none rounded-lg bg-gray-200 dark:bg-gray-700" />
                                    </div>

                                    <input type="number" id="min-delivery-time-input" value="30" min="3"
                                        max="50"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500 "
                                        placeholder="" required />
                                </div>
                            </div>

                            <div>
                                <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Condition</h6>

                                <ul
                                    class="flex w-full items-center rounded-lg border border-gray-200 bg-white text-sm font-medium text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                                    <li class="w-full border-r border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input id="condition-all" type="radio" value="" name="list-radio"
                                                checked
                                                class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600" />
                                            <label for="condition-all"
                                                class="ml-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                All </label>
                                        </div>
                                    </li>
                                    <li class="w-full border-r border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input id="condition-new" type="radio" value="" name="list-radio"
                                                class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600" />
                                            <label for="condition-new"
                                                class="ml-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                New </label>
                                        </div>
                                    </li>
                                    <li class="w-full">
                                        <div class="flex items-center pl-3">
                                            <input id="condition-used" type="radio" value="" name="list-radio"
                                                class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600" />
                                            <label for="condition-used"
                                                class="ml-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                Used </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                                <div>
                                    <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Colour</h6>
                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <input id="blue" type="checkbox" value=""
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                            <label for="blue"
                                                class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-primary-600"></div>
                                                Blue
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="gray" type="checkbox" value=""
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                            <label for="gray"
                                                class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-gray-400"></div>
                                                Gray
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="green" type="checkbox" value="" checked
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                            <label for="green"
                                                class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-green-400"></div>
                                                Green
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="pink" type="checkbox" value=""
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                            <label for="pink"
                                                class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-pink-400"></div>
                                                Pink
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="red" type="checkbox" value="" checked
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                            <label for="red"
                                                class="ml-2 flex items-center text-sm font-medium text-gray-900 dark:text-gray-300">
                                                <div class="mr-2 h-3.5 w-3.5 rounded-full bg-red-500"></div>
                                                Red
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Rating</h6>
                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <input id="five-stars" type="radio" value="" name="rating"
                                                class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                                            <label for="five-stars" class="ml-2 flex items-center">
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>First star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Second star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Third star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fourth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fifth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="four-stars" type="radio" value="" name="rating"
                                                class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                                            <label for="four-stars" class="ml-2 flex items-center">
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>First star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Second star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Third star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fourth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fifth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="three-stars" type="radio" value="" name="rating" checked
                                                class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                                            <label for="three-stars" class="ml-2 flex items-center">
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>First star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Second star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Third star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fourth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fifth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="two-stars" type="radio" value="" name="rating"
                                                class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                                            <label for="two-stars" class="ml-2 flex items-center">
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>First star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Second star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Third star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fourth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fifth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="one-star" type="radio" value="" name="rating"
                                                class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                                            <label for="one-star" class="ml-2 flex items-center">
                                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>First star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Second star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Third star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fourth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="h-5 w-5 text-gray-300 dark:text-gray-500"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fifth star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Weight</h6>

                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <input id="under-1-kg" type="checkbox" value=""
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                            <label for="under-1-kg"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Under 1
                                                kg </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="1-1-5-kg" type="checkbox" value="" checked
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                            <label for="1-1-5-kg"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> 1-1,5
                                                kg </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="1-5-2-kg" type="checkbox" value=""
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                            <label for="1-5-2-kg"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> 1,5-2
                                                kg </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="2-5-3-kg" type="checkbox" value=""
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                            <label for="2-5-3-kg"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> 2,5-3
                                                kg </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="over-3-kg" type="checkbox" value=""
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                            <label for="over-3-kg"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Over 3
                                                kg </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h6 class="mb-2 text-sm font-medium text-black dark:text-white">Delivery type</h6>

                                <ul class="grid grid-cols-2 gap-4">
                                    <li>
                                        <input type="radio" id="delivery-usa" name="delivery" value="delivery-usa"
                                            class="peer hidden" checked />
                                        <label for="delivery-usa"
                                            class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-primary-600 peer-checked:text-primary-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-primary-500 md:p-5">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">USA</div>
                                                <div class="w-full">Delivery only for USA</div>
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="delivery-europe" name="delivery"
                                            value="delivery-europe" class="peer hidden" />
                                        <label for="delivery-europe"
                                            class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-primary-600 peer-checked:text-primary-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-primary-500 md:p-5">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">Europe</div>
                                                <div class="w-full">Delivery only for USA</div>
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="delivery-asia" name="delivery" value="delivery-asia"
                                            class="peer hidden" checked />
                                        <label for="delivery-asia"
                                            class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-primary-600 peer-checked:text-primary-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-primary-500 md:p-5">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">Asia</div>
                                                <div class="w-full">Delivery only for Asia</div>
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="delivery-australia" name="delivery"
                                            value="delivery-australia" class="peer hidden" />
                                        <label for="delivery-australia"
                                            class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-primary-600 peer-checked:text-primary-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-primary-500 md:p-5">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">Australia</div>
                                                <div class="w-full">Delivery only for Australia</div>
                                            </div>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="flex items-center space-x-4 rounded-b p-4 dark:border-gray-600 md:p-5">
                        <button type="submit"
                            class="rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-700 dark:hover:bg-primary-800 dark:focus:ring-primary-800">Show
                            50 results</button>
                        <button type="reset"
                            class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </section>












    <section class="bg-white dark:bg-rose-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">

            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                    Building digital <br>products & brands.</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">This
                    free
                    and open-source landing page template was built using the utility classes from <a
                        href="https://tailwindcss.com" class="hover:underline">Tailwind CSS</a> and based on the
                    components
                    from the <a href="https://flowbite.com/docs/getting-started/introduction/"
                        class="hover:underline">Flowbite Library</a> and the <a href="https://flowbite.com/blocks/"
                        class="hover:underline">Blocks System</a>.</p>

                <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <a href="https://github.com/themesberg/landwind"
                        class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 496 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                        </svg> View on GitHub
                    </a>
                    <a href="https://www.figma.com/community/file/1125744163617429490"
                        class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <svg class="w-4 h-4 mr-2" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 200 300" width="1667" height="2500">
                            <style type="text/css">
                                .st0 {
                                    fill: #0acf83
                                }

                                .st1 {
                                    fill: #a259ff
                                }

                                .st2 {
                                    fill: #f24e1e
                                }

                                .st3 {
                                    fill: #ff7262
                                }

                                .st4 {
                                    fill: #1abcfe
                                }
                            </style>
                            <title>Figma.logo</title>
                            <desc>Created using Figma</desc>
                            <path id="path0_fill" class="st0"
                                d="M50 300c27.6 0 50-22.4 50-50v-50H50c-27.6 0-50 22.4-50 50s22.4 50 50 50z" />
                            <path id="path1_fill" class="st1"
                                d="M0 150c0-27.6 22.4-50 50-50h50v100H50c-27.6 0-50-22.4-50-50z" />
                            <path id="path1_fill_1_" class="st2"
                                d="M0 50C0 22.4 22.4 0 50 0h50v100H50C22.4 100 0 77.6 0 50z" />
                            <path id="path2_fill" class="st3"
                                d="M100 0h50c27.6 0 50 22.4 50 50s-22.4 50-50 50h-50V0z" />
                            <path id="path3_fill" class="st4"
                                d="M200 150c0 27.6-22.4 50-50 50s-50-22.4-50-50 22.4-50 50-50 50 22.4 50 50z" />
                        </svg> Get Figma file
                    </a>
                </div>

            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="../../../storage/imagens/hilux.png" alt="car image">
            </div>
        </div>
    </section>
@endsection
