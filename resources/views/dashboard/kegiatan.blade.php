@extends('layouts.table-layout')

@section('judul')
    Daftar Post Kegiatan
@endsection

@section('button')
    {{-- TOMBOL TAMBAH SERTIFIKASI BARU --}}
    @include('components.button.add', ['url' => '/dashboard/kegiatan/tambah'])
@endsection

@section('header1')
    judul post
@endsection

@section('header2')
    slugs
@endsection

@section('header3')
    diupdate
@endsection

@section('header4')
<th class="w-1/6 p-2 border border-gray-300 text-center">
    dibuat
</th>
@endsection
