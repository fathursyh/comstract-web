@extends('layouts.main')

@section('content')
    <div class="flex flex-col px-10 items-center gap-4 mt-28 md:mt-36">
        <h1 class="md:mb-10 text-center text-2xl md:text-4xl font-bold text-hijau" style="font-family: Poppins"
            data-aos="fade-up">Kegiatan Kami</h1>
            {{-- LiMIT 8 POSTS --}}
        <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-x-4 gap-y-10 w-full py-4 place-items-center">
            @foreach ($collection ?? ['', '', '', '', '', '', ''] as $item)
                @include('components.cards.card', [
                    'data' => '',
                ])
            @endforeach
        </div>
        @include('components.paginations')
    </div>
@endsection
