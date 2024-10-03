@extends('layouts.main')

@section('content')
    <div class="flex flex-col lg:px-20 px-8 items-center mt-4 gap-3 lg:gap-0 md:mt-14">
        <h1 class="md:mb-10 text-center text-2xl md:text-4xl font-bold text-hijau" style="font-family: Poppins">
            Kegiatan Kami
        </h1>
            {{-- LiMIT 8 POSTS --}}
        <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-x-4 gap-y-10 w-full py-4 place-items-center">
            @foreach ($posts ?? ['', '', '', '', '', '', ''] as $post)
                @include('components.cards.card', [
                    'data' => '',
                ])
            @endforeach
        </div>
        @include('components.paginations')
    </div>
@endsection
