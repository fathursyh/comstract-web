@extends('layouts.dashboard-layout')

@section('content')
    <h1 class="md:text-4xl text-2xl font-bold text-hijau mt-10 mb-14 text-center">{{ $sertifikasi->nama ?? 'Nama sertifikasi yang dipilih sepanjang ini' }}</h1>
    @php
        $sertifikasi = $sertifikasi->id ?? 1;
    @endphp
    <div class="mx-auto container relative p-2 overflow-x-auto lg:w-[95%] 2xl:w-3/4 mb-7">
      @include('components.nav.breadcrumbs', [
        'first_menu' => ['sertifikasi', '/dashboard/sertifikasi'],
        'second_menu' => ['detail', "/dashboard/sertifikasi/detail/$sertifikasi"],
        'third_menu' => $third_menu ?? null
      ])
      <div class="h-[60vh]">
        @yield('content-sertifikasi')
      </div>
    </div>
@endsection