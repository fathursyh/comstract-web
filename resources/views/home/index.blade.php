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
            <img src="{{ asset('assets/bumi.png') }}" alt="" class="md:w-28">
            <p class="md:text-xl text-center text-white">Sertifkasi berstandar nasional dan internasional</p>
        </div>
        <div class="flex flex-col gap-4 md:h-full max-w-40 items-center justify-center" data-aos='fade-up'>
            <img src="{{ asset('assets/orang.png') }}" alt="" class="md:w-28">
            <p class="md:text-xl text-center text-white">Terbuka untuk masyarakat luas di bidang informatika</p>
        </div>
        <div class="flex flex-col gap-4 md:h-full max-w-40 items-center justify-center" data-aos='fade-up'>
            <img src="{{ asset('assets/salam.png') }}" alt="" class="md:w-28">
            <p class="md:text-xl text-center text-white">Sudah bekerjasama dengan BNSP dan Microsoft</p>
        </div>
    </section>

    {{-- CHARTS --}}
    <section class="w-full bg-white dark:bg-gray-800 md:pt-52 pt-28 pb-32 flex flex-col items-center 2xl:shadow" data-aos="fade-left"  data-aos-anchor-placement="top-center">

        <div class="flex justify-center items-center pb-10 lg:pb-24 md:w-1/2">
            <h4 class="text-center text-2xl md:text-4xl font-bold text-hijau" style="font-family: Poppins">GRAFIK PESERTA</h4>
        </div>
            <div id="area-chart" class="lg:w-5/6 w-full shadow-md"></div>
    </section>
    
    {{-- SHORT PROFILE --}}
    <section class="flex flex-col items-center justify-center w-full max-h-max px-8 md:py-28 py-8 md:gap-28 gap-14 overflow-y-hidden" style="font-family: Poppins">
        <img src="{{ asset('assets/logo.png') }}" alt="" class="w-80 md:w-96" data-aos="fade-up">
        <div class="flex flex-col gap-5 lg:px-32" data-aos="fade-up">
            <p class="text-justify">ComSTraC merupakan pusat pelatihan yang disediakan untuk sertifikasi nasional (bekerjasama dengan BNSP) dan internasional (bekerjasama dengan Microsoft). <br><br>
    
                Pusat pelatihan ini diinisiasi untuk menjadi wadah peningkatan kualitas SDM, dan tidak hanya melayani sivitas akademika (mahasiswa, dosen dan karyawan) Universitas Pakuan tetapi juga terbuka untuk masyarakat luas yang berminat sertifikasi di bidang informatika.</p>

            <a href="tentang-kami" class="text-[#3059A9] font-medium self-end">Selengkapnya tentang kami <svg class="inline-block ms-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20px"><path style="fill:#3059A9" d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z"/></svg></a>
        </div>
    </section>
@endsection
