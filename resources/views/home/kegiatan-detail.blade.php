@extends('layouts.main')

@section('content')
<div class="lg:mt-[4rem] mt-[2rem] py-6 w-full min-h-[28rem] flex flex-col">
  <img class="lg:w-[80%] object-cover lg:object-contain h-[20rem] lg:h-[24rem] mx-auto" src="{{ $data['img']?? asset('assets/stok.png') }}" alt="image description">
  <h2 class="text-center font-bold text-xl lg:text-2xl bg-ungu py-6 text-white" style="font-family: Poppins">{{ $data['judul']?? 'Ini Adalah Judul Dari Post Bisa Sepanjang Ini' }}</h2>
      <div class="w-full px-8 lg:px-36 py-5 text-justify">
        <p class="text-lg text-green-700 font-bold opacity-60 mb-2">- {{ $data['date']?? '07-10-2024' }} -</p>
        {!! $data['body'] ?? $body !!}
        <p class="text-blue-700 text-center mt-4 underline cursor-pointer hover:scale-125" style="font-family: Poppins" onclick="history.back()">
            < Kembali
        </p>
      </div>
    </div>
@endsection
