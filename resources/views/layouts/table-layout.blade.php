@extends('layouts.dashboard-layout')

@section('content')
    <?php
        $sertifikasi = Request::is('dashboard/sertifikasi');
    ?>

    <h1 class="md:text-4xl text-3xl font-bold text-hijau mt-10 mb-14 text-center">
        @yield('judul')
    </h1>

    <div class="mx-auto container relative p-2 rounded-lg overflow-x-auto lg:w-[95%] 2xl:w-3/4 mb-7">
        {{-- BUTTON --}}
        @yield('button')
        <table class="md:table-fixed table-auto w-full text-sm text-left rtl:text-right text-gray-800">
            <thead class="text-xs lg:text-sm text-gray-700 uppercase bg-unguTipis dark:bg-gray-700 dark:text-gray-400 ">
                <tr>
                    <th class="w-1/2 p-2 border border-gray-300 text-center">
                        @yield('header1')
                    </th>
                    <th class="w-1/6 p-2 border border-gray-300 text-center">
                        @yield('header2')
                    </th>
                    <th class="w-1/6 p-2 border border-gray-300 text-center">
                        @yield('header3')
                    </th>
                    @yield('header4')
                    <th class="w-1/6 p-2 border border-gray-300 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr class="hover:bg-gray-100">
                        <td class="p-4 border border-gray-300 cursor-pointer"
                            onclick="changeURL('/{{ $sertifikasi ? 'dashboard/sertifikasi/detail' : 'kegiatan' }}/{{ $item['id'] }}')">
                            {{ $sertifikasi ? $item['nama'] : $item['judul'] }}
                        </td>
                        <td class="p-4 border border-gray-300 text-center">
                            {{ $sertifikasi ? $item['batch'] : $item['slugs'] }}
                        </td>
                        <td class="p-4 border border-gray-300 text-center">
                            {{ $sertifikasi ? $item['tahun'] : $item['updatedAt'] }}
                        </td>
                        @if (!$sertifikasi)
                            <td class="p-4 border border-gray-300 text-center">
                                {{ $item['createdAt'] }}
                            </td>
                        @endif
                        <td class="p-4 border">
                            <div class="flex md:flex-row flex-col justify-center gap-4">
                                {{-- URL EDIT DELETE DISINI --}}
                                <?php 
                                    $edit = $sertifikasi ? '/dashboard/sertifikasi/edit/'.$item['id'] : '/dashboard/kegiatan/edit/'.$item['id'];
                                    $delete = $sertifikasi ? '/dashboard/sertifikasi/delete/'.$item['id'] : '/dashboard/kegiatan/delete/'.$item['id'];
                                ?>
                                @include('components.button.edit-delete', [
                                    'edit' => $edit,
                                    'delete' => $delete,
                                ])
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- PAGINATIONS --}}
       @include('components.paginations')
    </div>
@endsection
