
<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden focus:outline-none focus:ring-2 focus:ring-gray-200">
  <span class="sr-only">Open sidebar</span>
  <svg class="w-10 h-10" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
  <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
  </svg>
</button>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 md:w-72 w-60 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
  <div class="h-full px-3 py-2 overflow-y-auto bg-unguTipis flex flex-wrap justify-center items-center">
     <ul class="space-y-2 font-medium" id="side-nav">
      {{-- LOGO DASHBOARD --}}
      <li class="mb-6">
        <a href="/">
          <img src="{{ asset('/assets/logo.png') }}" class="h-10 md:h-12 me-3 cursor-pointer" alt="Flowbite Logo"/>
        </a>
      </li>
        <li>
           <a data-nav="" href="/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100  group">
              <img class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true"
              src="{{ asset('assets/dash/sertifikasi.png') }}">
              <span class="ms-3">Sertifikasi</span>
           </a>
        </li>
        <li>
           <a data-nav="kegiatan" href="/dashboard/kegiatan" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100  group">
            <img class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true"
            src="{{ asset('assets/dash/kegiatan.png') }}">
              <span class="flex-1 ms-3 whitespace-nowrap">Kegiatan</span>
           </a>
        </li>
        <li>
           <a data-nav="profile" href="/dashboard/profile" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100  group">
            <img class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true"
            src="{{ asset('assets/dash/profile.png') }}">
              <span class="flex-1 ms-3 whitespace-nowrap">Comstract Profile</span>
           </a>
        </li>
        <li>
           <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100  group">
            <img class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true"
            src="{{ asset('assets/dash/beranda.png') }}">
              <span class="flex-1 ms-3 whitespace-nowrap">Beranda</span>
           </a>
        </li>

     </ul>
  </div>
</aside>
