<div class="lg:w-96 w-5/6">
    {{-- ISI ACTION KE URL CONTROLLER KALIAN --}}
    <form class="w-full" action="" enctype="multipart/form-data">
        @yield('method')
        @csrf
        {{-- <input type="text" name="id" disabled hidden value=""> --}}
        <div class="mb-5">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sertifikasi</label>
            <input type="text" id="nama" name="nama" autocomplete="on"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="" required value="{{ isset($data)? old('nama', $data['nama']) : '' }}"/>
          </div>
          <div class="mb-5">
            <label for="batch" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batch</label>
            <select id="batch" name="batch" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option disabled selected>-- Pilih batch --</option>
                <?php 
                    $options = [1, 2, 3];
                    $batch = isset($data['batch']) ? old('batch', $data['batch']) : '';
                ?>
                @foreach ($options as $option)
                    @if ($batch == $option)
                        <option value="{{ $option }}" selected>{{ $option }}</option>
                        @else
                        <option value="{{ $option }}">{{ $option }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-5">
            <label for="mitra" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mitra</label>
            <input type="text" name="mitra" id="mitra" autocomplete="on"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" value="{{ isset($data)? old('mitra', $data['mitra']) : '' }}"/>
        </div>
        <div class="mb-5">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pelaksanaan</label>
            <input type="date" name="pelaksanaan date" id="date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" required />
        </div>
        <div class="mb-5">
            <label for="flyer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Flyer</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:border-gray-600 dark:placeholder-gray-400 file:bg-hijau" name="flyer" type="file" id="flyer">
        </div>
        <div class="mb-2 mt-7">
          <label class="inline-flex items-center mb-5 cursor-pointer">
            <?php 
                $oldCheck = $data['open']?? + 0 ?? 0;    
            ?>
            @if ($oldCheck == 1)
            <input type="checkbox" value="1" checked name="open" class="sr-only peer">
            @else
            <input type="checkbox" value="1" name="open" class="sr-only peer">
            @endif
            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-hijau"></div>
            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Open</span>
          </label>
        </div>
        <button type="button" class="focus:outline-none md:text-white text-blue-500 md:bg-red-500 md:hover:bg-red-800 focus:ring-4 md:focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-4 w-full md:w-fit" onclick="confirm('kembali?') ? previousPage() : null">Cancel</button>
        <button type="submit"
            class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>
</div>
