@extends('layouts.detail-sertifikat-layout')

@section('content-sertifikasi')
    <div class="h-full flex justify-center items-center">   
        @php
            $id = $sertifikasi->id ?? 1;
        @endphp

        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg" src="{{ $sertifikasi->flyer ?? asset('assets/stok.png') }}" alt="" />
            <div class="p-5">

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span class="font-bold">Mitra :</span>
                    {{ $sertifikasi->mitra ?? 'Tidak ada mitra.' }}
                </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span class="font-bold">Batch :</span>
                    {{ $sertifikasi->batch ?? '0' }}
                </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span class="font-bold">Tanggal :</span>
                    {{ $sertifikasi->tanggal ?? 'Senin, 20 Oktober 2024' }}
                </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span class="font-bold">Status :</span>
                    {{ $sertifikasi->open ?? 1 == 1 ? 'Buka' : 'Tutup' }}
                </p>
                <div class="flex justify-evenly mt-4">
                    <a href="{{ url()->query('/dashboard/sertifikasi/detail/' . $id, ['peserta' => 'mahasiswa']) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau rounded-lg ">
                        Mahasiswa
                    </a>
                    <a href="{{ url()->query('/dashboard/sertifikasi/detail/' . $id, ['peserta' => 'umum']) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-ungu rounded-lg ">
                        Umum
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
