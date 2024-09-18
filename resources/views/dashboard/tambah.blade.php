@extends('layouts.dashboard-layout')

@section('content')
    <div class=" w-full h-full flex justify-center items-center">
        @if (Request::is('dashboard/sertifikasi/tambah'))
            @include('components.forms.sertifikasi_form', ['method'=>'post'])
        @else
            @include('components.forms.kegiatan_form', ['method'=>'post'])
        @endif
    </div>
@endsection