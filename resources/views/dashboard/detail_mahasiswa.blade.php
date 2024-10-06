@extends('layouts.detail-sertifikat-layout')


@php
    $third_menu = 'mahasiswa';
    $data = ['tes'];
@endphp
@section('content-sertifikasi')
    <div class="mt-4 flex flex-col gap-4 min-h-[40vh]">
        <h2 class="text-center text-lg font-bold text-hijau">Peserta Mahasiswa</h2>
        @if (isset($data))
        <div class="mx-auto container relative p-2 rounded-lg overflow-x-auto lg:w-[95%] 2xl:w-3/4 mb-7">
            @include('components.button.add', ['url' => $id_sertifikat ?? 1 . '/tambah'])
            <table class="md:table-fixed table-auto w-full text-sm text-center rtl:text-right text-gray-800">
                <thead class="text-xs lg:text-sm text-gray-700 uppercase bg-unguTipis dark:bg-gray-700 dark:text-gray-400 ">
                    <tr>
                        <th class="w-1/6 p-2 border border-gray-300 text-center">No</th>
                        <th class="w-1/3 p-2 border border-gray-300 text-center">NPM</th>
                        <th class="w-5/12 p-2 border border-gray-300 text-center">nama peserta</th>
                        <th class="w-1/3 p-2 border border-gray-300 text-center">jenis kelamin</th>
                        <th class="w-1/2 p-2 border border-gray-300 text-center">email</th>
                        <th class="w-1/3 p-2 border border-gray-300 text-center">status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_peserta ?? ['tes', 'tes', '', ''] as $peserta)
                        <tr class="hover:bg-gray-100" onclick="changeURL('/data-peserta/{{ $angkatan ?? '20XX' }}/{{ $peserta->npm ?? '0651241422' }}')">
                            <td class="p-4 border border-gray-300 cursor-pointer">
                                {{ $loop->iteration }}
                            </td>
                            <td class="p-4 border border-gray-300 cursor-pointer">
                                {{ $peserta->npm ?? '06512424242' }}
                            </td>
                            <td class="p-4 border border-gray-300 cursor-pointer text-left">
                                {{ $peserta->nama ?? 'Naufal Alwi Pratama' }}
                            </td>
                            <td class="p-4 border border-gray-300 cursor-pointer">
                                {{ ($peserta->kelamin ?? 'l' === 'l') ? 'Perempuan' : 'Laki-laki' }}
                            </td>
                            <td class="p-4 border border-gray-300 cursor-pointer">
                                {{ $peserta->email ?? 'naufal@gmail.com' }}
                            </td>
                            <td class="p-4 border border-gray-300 cursor-pointer {{ ($peserta->status ?? 0 === 0) ? 'text-red-500' : 'text-green-500' }}">
                                {{ ($peserta->status ?? 0 === 0) ? 'Tidak lulus' : 'Lulus' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
            <h3 class="text-center my-auto">Data peserta tidak tersedia. <span class="text-blue-700 underline"><a href="{{ $id_sertifikat ?? 1 }}/tambah">Tambah peserta</a></span></h3>
        @endif
    </div>

@endsection