@extends('layouts.detail-sertifikat-layout')


@php
    $third_menu = 'mahasiswa';
    $id_sertifikat = $sertifikat ?? 1;
    $data = ['tes'];
    // $data = null;
@endphp
@section('content-sertifikasi')


    <div class="mt-4 flex flex-col gap-4 min-h-[40vh]">
        <h2 class="text-center text-lg font-bold text-hijau">Peserta Mahasiswa</h2>
        @if ($data != null)
        <div class="mx-auto container relative p-2 rounded-lg overflow-x-auto lg:w-[95%] 2xl:w-3/4 mb-7">
            @include('components.button.add', ['url' => $id_sertifikat . '/tambah'])
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
                    @foreach ($data_peserta ?? ['tes', 'tes', 'tes'] as $peserta)
                    <div data-popover id="popover-click{{ $loop->iteration }}" role="tooltip" class="absolute z-50 invisible inline-block w-44 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                            <h3 class="font-semibold text-gray-900 dark:text-white text-center">Actions</h3>
                        </div>
                        <div class="px-3 py-2 flex flex-row justify-evenly items-center">
                            @php
                                $npm = $peserta->npm ?? '0651234224';
                                $edit = '/dashboard/sertifikasi/detail/' . $id_sertifikat . '/' . $npm ?? '1';
                                $delete = '/dashboard/sertifikasi/detail/' . $id_sertifikat . '/' . $npm ?? '1';
                            @endphp
                            @include('components.button.edit-delete', [
                                'edit' => $edit . '/edit',
                                'delete' => $delete . '/delete',
                                'id' => $id_sertifikat
                            ])
                         <form action="{{ "/dashboard/sertifikat/detail/$id_sertifikat/$npm/gantiStatusKelulusan" }}" method="post" class="inline">
                            @method('patch')
                            <input type="text" hidden value="{{ $npm }}" name="npm">
                            <button type="submit" onclick="return confirm('ganti status kelulusan?')">
                                @if ($peserta->status?? 0 === 0)
                                <img src="{{ asset('assets/checklist.png') }}" alt="" width="44px">
                                @else
                                <img src="{{ asset('assets/remove.png') }}" alt="" width="44px">
                                @endif
                            </button>
                        </form>
                        </div>
                    </div>
                        <tr class="hover:bg-gray-100">
                            <td class="p-4 border border-gray-300 cursor-pointer">
                                {{ $loop->iteration }}
                            </td>
                            <td class="p-4 border border-gray-300 cursor-pointer">
                                {{ $peserta->npm ?? '06512424242' }}
                            </td>
                            <td class="p-4 border border-gray-300 cursor-pointer text-blue-500 text-left" data-popover-target="popover-click{{ $loop->iteration }}" data-popover-trigger="click" data-popover-placement="right">
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
        <div class="text-center my-auto">
            <h3 class="">Data peserta tidak tersedia.</h3>
            <a href="{{ $id_sertifikat ?? 1 }}/tambah" class="text-blue-700 underline">Tambah peserta</a>
        </div>
        @endif
    </div>

@endsection