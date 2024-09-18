@extends('layouts.main')

@section('content')

    {{-- HERO --}}
    <section class="splide cursor-pointer">
        <div class="splide__track md:h-[100dvh] h-[42rem]">
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

    {{-- FEATURES --}}
    <section aria-label="features" id="features"
        class="flex flex-nowrap md:flex-row flex-col items-center justify-evenly md:h-[50vh] h-fit py-14 pt-20 w-full bg-ungu gap-14 md:gap-0 overflow-y-hidden">
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

    {{-- CHARTS --}}
    <section class="w-full bg-white dark:bg-gray-800 md:pt-52 pt-28 pb-32 flex flex-col items-center shadow-lg" data-aos="fade-left"  data-aos-anchor-placement="top-center">

        <div class="flex justify-center items-center pb-10 lg:pb-24 md:w-1/2">
            <h4 class="text-center text-2xl lg:text-4xl font-bold text-ungu" style="font-family: Poppins">PESERTA COMSTRACT</h4>
        </div>
            <div id="area-chart" class="lg:w-5/6 w-full"></div>
    </section>
@endsection
