<div class="lg:w-96 w-5/6">
    {{-- ISI ACTION KE URL CONTROLLER KALIAN --}}
    <form class="w-full" action="" enctype="multipart/form-data">
        @yield('method')
        @csrf
        {{-- <input type="text" name="id" disabled hidden value=""> --}}
        <div class="mb-5">
            <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Post</label>
            <input type="text" id="judul" name="judul" autocomplete="on"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="" required value="{{ isset($data)? old('judul', $data['judul']) : '' }}"/>
        </div>
        <div class="mb-5">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi Post</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TEXT EDITOR TOLONG DIURUS YA" ></textarea>
        </div>
        <div class="mb-5">
            <label for="flyer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">File</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:border-gray-600 dark:placeholder-gray-400 file:bg-hijau" name="file" type="file" id="file">
        </div>
        <button type="button" class="focus:outline-none md:text-white text-blue-500 md:bg-red-500 md:hover:bg-red-800 focus:ring-4 md:focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-4 w-full md:w-fit" onclick="confirm('kembali?')? previousPage() : null">Cancel</button>
        <button type="submit"
            class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>
</div>
