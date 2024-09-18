@extends('layouts.main')

@section('content')
    <section class="splide">
        <div class="splide__track md:h-[100dvh] h-[38rem]">
            <div class="z-10 bg-gradient-to-r from-black via-neutral-950 absolute w-full h-full opacity-95"
                style="pointer-events: none">
            </div>
            <ul class="splide__list">
                @foreach ($posts as $item)
                    <li class="splide__slide" onclick="changeURL('{{ $item['link'] }}')">
                        <img src="{{ $item['url'] }}" alt=""
                            class="h-full w-auto lg:w-screen lg:h-full transition ease-in-out duration-500 lg:blur-sm hover:blur-none">
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section aria-label="features" id="features"
        class="flex flex-nowrap md:flex-row flex-col items-center justify-evenly md:h-96 h-fit py-14 pt-20 w-full bg-ungu gap-14 md:gap-0 overflow-y-hidden">
        <div class="flex flex-col gap-4 md:h-full max-w-40 items-center justify-center" data-aos='fade-up'>
            <img src="{{ asset('assets/bumi.png') }}" alt="" class="w-28">
            <p class="text-xl text-center text-white">Sertifkasi berstandar nasional dan internasional</p>
        </div>
        <div class="flex flex-col gap-4 md:h-full max-w-40 items-center justify-center" data-aos='fade-up'>
            <img src="{{ asset('assets/orang.png') }}" alt="" class="w-28">
            <p class="text-xl text-center text-white">Terbuka untuk masyarakat luas di bidang informatika</p>
        </div>
        <div class="flex flex-col gap-4 md:h-full max-w-40 items-center justify-center" data-aos='fade-up'>
            <img src="{{ asset('assets/salam.png') }}" alt="" class="w-28">
            <p class="text-xl text-center text-white">Sudah bekerjasama dengan BNSP dan Microsoft</p>
        </div>
    </section>

    <section class="w-1/2 bg-white dark:bg-gray-800 mx-auto py-40">
        <div class="flex justify-between">
            <div>
                <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">32.4k</h5>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Users this week</p>
            </div>
     
        </div>
        <div id="area-chart"></div>
        <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
            <div class="flex justify-between items-center pt-5">
                <!-- Button -->
                <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom"
                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                    type="button">
                    Last 7 days
                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="lastDaysdropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                7 days</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                30 days</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                90 days</a>
                        </li>
                    </ul>
                </div>
      
            </div>
        </div>
    </section>
@endsection
