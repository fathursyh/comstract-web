@extends('layouts.detail-sertifikat-layout')

@section('content-sertifikasi')
<div class="h-full flex justify-center items-center">
    <div class="container flex lg:flex-row flex-col items-center gap-10 lg:gap-0 justify-evenly">
        <div class="w-72 h-40 bg-hijau grid place-items-center rounded font-bold cursor-pointer hover:scale-105">
            <h2 class="text-white text-2xl">MAHASISWA</h2>
        </div>
        <div class="w-72 h-40 bg-ungu grid place-items-center rounded font-bold cursor-pointer hover:scale-105">
            <h2 class="text-white text-2xl">UMUM</h2>
        </div>
    </div>
</div>
@endsection