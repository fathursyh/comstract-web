@extends('layouts.dashboard-layout')

@section('content')
    <div class=" w-full h-full flex justify-center items-center">
        @if (Request::is('dashboard/sertifikasi/edit/' . $id))
            @include('components.forms.sertifikasi_form')
        @else
            @include('components.forms.kegiatan_form')
        @endif
    </div>
@endsection