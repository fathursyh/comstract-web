@extends('layouts.dashboard-layout')

@section('content')
    <?php
    $newData = [];
    foreach ($data as $item) {
        $newData[] = array_values($item);
    }
    ?>

    <h1 class="text-4xl font-bold text-hijau mt-10 mb-14 text-center">
        @yield('judul')
    </h1>

    <div class="mx-auto container relative p-2 rounded-lg overflow-x-auto lg:w-4/5 mb-7">
        {{-- BUTTON --}}
        @yield('button')
        <table class="table-fixed w-full text-sm text-left rtl:text-right text-gray-800">
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
                @foreach ($newData as $item)
                    <tr class="hover:bg-gray-100">
                        <td class="p-4 border border-gray-300 cursor-pointer"
                            onclick="changeURL('/{{ Request::is('dashboard/sertifikasi') ? 'dashboard/sertifikasi' : 'kegiatan' }}/{{ $item[0] }}')">
                            {{ $item[1] }}
                        </td>
                        <td class="p-4 border border-gray-300 text-center">
                            {{ $item[2] }}
                        </td>
                        <td class="p-4 border border-gray-300 text-center">
                            {{ $item[3] }}
                        </td>
                        @if (isset($item[4]))
                            <td class="p-4 border border-gray-300 text-center">
                                {{ $item[4] }}
                            </td>
                        @endif
                        <td class="p-4 border">
                            <div class="flex md:flex-row flex-col justify-center gap-4">
                                {{-- URL EDIT DELETE DISINI --}}
                                <?php 
                                    $edit = (Request::is('dashboard/sertifikasi')) ? '/dashboard/sertifikasi/edit/'.$item[0] : '/dashboard/kegiatan/edit/'.$item[0];
                                    $delete = (Request::is('dashboard/sertifikasi')) ? '/dashboard/sertifikasi/delete/'.$item[0] : '/dashboard/kegiatan/delete/'.$item[0];
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
        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between py-4" aria-label="Table navigation">
            <ul class="flex -space-x-px rtl:space-x-reverse text-sm h-8 ms-auto">
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
