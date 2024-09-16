@extends('layouts.table-layout')

@section('judul')
    Sertifikasi
@endsection

@section('button')
    {{-- TOMBOL TAMBAH SERTIFIKASI BARU --}}
    @include('components.button.add', ['url' => '/dashboard/sertifikasi/tambah'])
@endsection

@section('header1')
    nama program
@endsection

@section('header2')
    batch
@endsection

@section('header3')
    tahun
@endsection

