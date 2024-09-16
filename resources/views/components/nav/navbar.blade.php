<nav
    class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 shadow-md lg:px-8 xl:px-6">
    <div class="h-full w-full flex flex-wrap items-center justify-between p-4">
        <a onclick="changeURL('/')" class="flex items-center space-x-3 rtl:space-x-reverse cursor-pointer">
            <img src='{{ URL::to('/') }}/assets/logo.png' class="max-w-xs h-8 md:h-14" alt="Flowbite Logo">
        </a>

        {{-- AKUN DAN LOGIN PC --}}
        <div class="xl:flex xl:order-2 space-x-3 xl:space-x-0 rtl:space-x-reverse hidden">
            {{-- VISITOR --}}
            {{-- @guest
                <button onclick="changeURL('/login')" 
                  class="flex items-center justify-between w-full py-2 px-3 text-blue-500 rounded hover:bg-gray-100 xl:hover:bg-transparent xl:border-0 xl:hover:text-green-700 xl:p-0 xl:w-auto dark:text-white xl:dark:hover:text-green-600 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 xl:dark:hover:bg-transparent">
                  Login Admin <img src="{{ URL::to('/') }}/assets/login.png" alt="" width="30px" class="xl:ms-2">
                </button>
            @endguest --}}
            {{-- ADMIN --}}
            {{-- @auth --}}
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownUser"
                    class="flex items-center justify-between w-full py-2 px-3 text-blue-500 rounded hover:bg-gray-100 xl:hover:bg-transparent xl:border-0 xl:hover:text-blue-700 xl:p-0 xl:w-auto dark:text-white xl:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 xl:dark:hover:bg-transparent">{{ $username?? 'Nama Panjang User' }} <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdownUser"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    @include('components.nav.nav-user')
                </div>
            {{-- @endauth --}}
          </div>
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only"></span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
            </button>
        <div class="items-center justify-between hidden w-full xl:flex xl:w-auto xl:order-1" id="navbar-dropdown">
            <ul id="navigasi"
                class="flex flex-col xl:flex-row p-4 xl:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 xl:space-x-8 rtl:space-x-reverse xl:mt-0 xl:border-0 xl:bg-white dark:bg-gray-800 xl:dark:bg-gray-900 dark:border-gray-700">
          
                <li>
                    <a href="/"
                        class="block py-2 px-3 rounded hover:bg-gray-100 xl:hover:bg-transparent xl:p-0 xl:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white xl:dark:hover:bg-transparent dark:border-gray-700 sm:text-xl lg:text-base" aria data-page=''>
                        Beranda</a>
                </li>
                <li>
                    <a href="/kegiatan"
                        class="block py-2 px-3 rounded hover:bg-gray-100 xl:hover:bg-transparent xl:hover:text-blue-700 xl:p-0 xl:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white xl:dark:hover:bg-transparent dark:border-gray-700 sm:text-xl lg:text-base" data-page='kegiatan'>Kegiatan</a>
                </li>
                <li>
                    <a href="/tentang-kami"
                        class="block py-2 px-3 rounded hover:bg-gray-100 xl:hover:bg-transparent xl:hover:text-blue-700 xl:p-0 xl:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white xl:dark:hover:bg-transparent dark:border-gray-700 sm:text-xl lg:text-base" data-page='tentang-kami'>Tentang
                        Kami</a>
                </li>
            {{-- CUMA MUNCUL BUAT ADMIN --}}    
            {{-- @auth --}}
                <li>
                    <button data-page="data-peserta" id="dropdownNavbarLink" data-dropdown-toggle="dropdownPeserta"
                        class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-gray-100 xl:hover:bg-transparent xl:border-0 xl:hover:text-blue-700 xl:p-0 xl:w-auto dark:text-white xl:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 xl:dark:hover:bg-transparent sm:text-xl lg:text-base">Data
                        Peserta <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownPeserta"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        @include('components.nav.nav-peserta')
                    </div>
                </li>
            {{-- @endauth --}}
                <li>
                    {{-- AKUN DAN LOGIN MOBILE --}}
                    @guest
                    <a href="/login"
                        class="xl:hidden flex items-center py-2 px-3 rounded hover:bg-gray-100 xl:hover:bg-transparent xl:hover:text-blue-700 xl:p-0 xl:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white xl:dark:hover:bg-transparent dark:border-gray-700 sm:text-xl lg:text-base" style="color: #00A859">
                        Login Admin
                    </a>
                    @endguest
                    {{-- @auth --}}
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                    class="xl:hidden flex items-center justify-between w-full py-2 px-3 text-[#00A859] rounded hover:bg-gray-100 xl:hover:bg-transparent xl:border-0 xl:hover:text-blue-700 xl:p-0 xl:w-auto dark:text-white xl:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 xl:dark:hover:bg-transparent sm:text-xl lg:text-base">{{ $data['username']?? 'Nama Panjang User' }} <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    @include('components.nav.nav-user')
                </div>
                {{-- @endauth --}}
                </li>
            </ul>
        </div>
    </div>
</nav>
