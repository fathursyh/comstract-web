@extends('layouts.main')

@section('content')
    <div class="flex flex-col lg:px-20 items-center gap-4 mt-28 md:mt-36">
        <h1 class="md:mb-10 text-center text-2xl md:text-4xl font-bold text-hijau" style="font-family: Poppins">
            {{ $angkatan ?? '20XX' }}
        </h1>
        <div class="container mx-auto lg:w-[95%] 2xl:w-3/4">
            <table class="md:table-fixed table-auto w-full text-sm text-left rtl:text-right text-gray-800">
                <thead class="text-xs lg:text-sm text-gray-700 uppercase bg-unguTipis dark:bg-gray-700 dark:text-gray-400 ">
                    <tr>
                        <th class="w-1/6 p-2 border border-gray-300 text-center">No</th>
                        <th class="w-1/3 p-2 border border-gray-300 text-center">NPM</th>
                        <th class="w-3/5 p-2 border border-gray-300 text-center">nama mahasiswa</th>
                        <th class="w-1/6 p-2 border border-gray-300 text-center">jumlah sertifikat</th>
                        <th class="w-1/2 p-2 border border-gray-300 text-center">email</th>
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
                            <td class="p-4 border border-gray-300 cursor-pointer">
                                {{ $peserta->nama ?? 'Naufal Alwi Pratama' }}
                            </td>
                            <td class="text-center p-4 border border-gray-300 cursor-pointer {{ ($peserta->jumlah ?? 0 == 2)?  'bg-red-200' : 'bg-green-200' }}">
                                {{ $peserta->jumlah ?? 0 }}
                            </td>
                            <td class="p-4 border border-gray-300 cursor-pointer">
                                {{ $peserta->email ?? 'naufal@gmail.com' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- PAGINATIONS --}}
        @include('components.paginations')
    </div>
@endsection
