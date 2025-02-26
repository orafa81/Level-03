@extends('layouts.app')

@section('content')

    @if (!$alugados && count($alugados) > 0)
        <p>Este cliente não tem carros alugados no momento.</p>
    @else
        <section class="bg-white dark:bg-rose-900">
            <div class=" max-w-screen-xl px-4 pt-10 pb-8 mx-auto">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1
                        class="max-w-2xl mx-auto mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-xl xl:text-2xl dark:text-white">
                        Carros que aluguei</h1>
                    <form class="max-w-2xl mx-auto">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
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




        {{-- CARDS PRODUCTS --}}
        <section class="bg-gray-50 py-8 antialiased dark:bg-white md:py-12">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <!-- Heading & Filters -->

                <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-2 xl:grid-cols-3">
                    @foreach ($alugados as $item)
                        <div
                            class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-300 dark:bg-white">
                            <div class="h-56 w-full">

                                <img class="mx-auto h-full dark:hidden" src="../../../imagens/kwid.png" alt="" />
                                <img class="mx-auto hidden h-full dark:block" src="../../../imagens/onix.png"
                                    alt="" />

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
                                                    stroke-width="2"
                                                    d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
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

                                <a href="{{ route('product', $item->id) }}"
                                    class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-gray-950">
                                    {{ $item->car->mark }}, {{ $item->car->model }}, {{ $item->car->plate }}
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
                                    <p class="text-2xl font-extrabold leading-tight text-white  dark:text-gray-950 ">R$
                                        {{ $item->car->price }}</p>


                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                {{-- PAGINATE --}}
            </div>
    @endif
    </section>
@endsection
