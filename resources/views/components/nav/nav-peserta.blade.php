  <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">

    {{-- KASIH KESINI $data['angkatan'] BUAT BIKIN LIST DROPDOWNNYA --}}
    {{-- DEFAULT LIST : 2020 dan 2019 --}}
    @foreach ($data['angkatan']?? ['2020', '2019'] as $item)
    <li>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
        {{ $item }}
      </a>
    </li>
    @endforeach
  </ul>