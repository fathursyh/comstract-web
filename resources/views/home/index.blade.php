@extends('layouts.main')

@section('content')

    {{-- HERO --}}
    {{-- <section class="splide">
        <div class="splide__track md:h-[100dvh] h-[42rem]">
            <div class="z-10 bg-gradient-to-r from-black via-neutral-950 absolute w-full h-full opacity-95">
                <div class="px-4 mx-auto w-full h-full text-center py-24 lg:py-56 flex flex-col justify-end">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Pelatihan sertifikasi bidang informatika</h1>
                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48" style="text-shadow: 2px 2px rgb(67, 67, 67)">Kami berfokus pada pelatihan sertifikasi dengan bekerjasama dengan berbagai mitra penyelenggara sertifikasi informatika</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                        <a href="/daftar-peserta" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-purple-500 hover:bg-purple-600">
                            Daftar Sertifikasi
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                            Pelajari lebih lanjut
                        </a>  
                    </div>
                </div>
            </div>
            <ul class="splide__list">
                @foreach ($posts as $item)
                    <li class="splide__slide">
                        <img src="{{ $item['url'] }}" alt=""
                            class="h-full w-auto lg:w-screen lg:h-full transition ease-in-out duration-500 lg:blur-sm hover:blur-none object-cover object-center">
                    </li>
                @endforeach
            </ul>
        </div>
    </section> --}}

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
    <section class="w-full bg-white dark:bg-gray-800 md:pt-52 pt-28 pb-32 flex flex-col items-center 2xl:shadow" data-aos="fade-up"  data-aos-anchor-placement="top-center">

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
