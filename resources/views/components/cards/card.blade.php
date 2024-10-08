<div class="max-w-[20rem] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="{{ $data['link'] ?? '/kegiatan/slugs-url-mantap' }}">
      <img class="rounded-t-lg" src="{{ $data['img'] ?? asset('assets/stok.png') }}" alt="" />
  </a>
  <div class="p-5">
    <p class="text-blue-700 opacity-75 font-medium text-sm" style="font-family: Poppins">{{ $data['date']?? '07-10-2024' }}</p>
      <a href="{{ $data['link'] ?? '/kegiatan/slugs-url-mantap' }}">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
      </a>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
      <a href="{{ $data['link'] ?? '/kegiatan/slugs-url-mantap' }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
          Lebih lanjut
           <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
          </svg>
      </a>
  </div>
</div>
