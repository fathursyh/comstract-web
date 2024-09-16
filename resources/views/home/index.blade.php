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

    <section aria-label="features" class="flex flex-nowrap xl:flex-row flex-col items-center justify-evenly max-h-max h-96 w-full bg-ungu">
        <p>tes</p>
        <p>tes</p>
        <p>tes</p>
    </section>
@endsection
