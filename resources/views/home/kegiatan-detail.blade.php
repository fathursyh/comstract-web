@extends('layouts.main')

@section('content')
<div class="w-full min-h-[28rem] flex flex-col">
  <img class="lg:w-[80%] object-cover lg:object-contain h-[20rem] lg:h-[24rem] mx-auto" src="{{ $data['img']?? asset('assets/stok.png') }}" alt="image description">
  <h2 class="text-center font-bold text-xl lg:text-2xl bg-ungu 2xl:bg-transparent 2xl:text-ungu 2xl:border-b-2 border-unguTipis py-6 text-white" style="font-family: Poppins">{{ $data['judul']?? 'Ini Adalah Judul Dari Post Bisa Sepanjang Ini' }}</h2>
  <div class="w-full px-8 lg:px-36 2xl:px-40 py-5 text-justify 2xl:columns-2 2xl:gap-10">
        <p class="text-lg text-green-700 font-bold opacity-60 mb-2">{{ $data['date']?? 'Senin, 7 Desember 2024' }}</p>
        {!! $data['body'] ?? $body !!}
      </div>
      <p class="text-blue-700 text-center mt-4 hover:underline cursor-pointer" style="font-family: Poppins" onclick="history.back()">
          < Kembali
      </p>
    </div>
@endsection
