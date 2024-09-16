@extends('layouts.dashboard-layout')

@section('content')
    <?php
    $newData = [];
    foreach ($data as $item) {
        $newData[] = array_values($item);
    }
    ?>

    <h1 class="text-4xl font-bold text-hijau my-10 lg:my-20 text-center">
        @yield('judul')
    </h1>
    <div class="w-full lg:px-40 flex justify-end">
        @yield('button')
    </div>
    <div class="mx-auto container relative p-2 shadow-md rounded-lg overflow-x-auto lg:w-4/5 mb-7">
        <table class="table-fixed w-full text-sm text-left rtl:text-right text-gray-800">
            <thead class="text-xs text-gray-700 uppercase bg-unguTipis dark:bg-gray-700 dark:text-gray-400 ">
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
                            onclick="changeURL('/dashboard/sertifikasi/:id')">
                            {{ $item[0] }}
                        </td>
                        <td class="p-4 border border-gray-300 text-center">
                            {{ $item[1] }}
                        </td>
                        <td class="p-4 border border-gray-300 text-center">
                            {{ $item[2] }}
                        </td>
                        @if (isset($item[3]))
                            <td class="p-4 border border-gray-300">
                                {{ $item[3] }}
                            </td>
                        @endif
                        <td class="p-4 border">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
