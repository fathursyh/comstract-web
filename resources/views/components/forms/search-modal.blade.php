<div id="search-modal" class="hidden overflow-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="p-4 w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-center justify-center p-4 md:p-5 border-b rounded-t dark:border-gray-600 bg-ungu">
              <h3 class="text-xl font-semibold text-white">
                  Cari Peserta
              </h3>
              <button type="button" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="search-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 space-y-4 md:px-20 md:py-10">
            <form action="" method="POST">
              @csrf
              <input type="search" autocomplete="off" name="search" placeholder="Nama peserta" id="search" class="w-full" data-autofocus>
              <br>
              <ul class="mt-4 w-48 text-sm font-medium text-gray-900" id="listSearch">
              </ul>
            </form>
          </div>
      </div>
  </div>
</div>
