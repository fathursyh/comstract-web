<a href="{{ $edit }}">
    <img src="{{ asset('assets/edit.png') }}" alt="">
</a>
<form action="{{ $delete }}" method="post" class="inline">
    @method('delete')
    <button type="submit" onclick="return confirm('Hapus data?')">
        <img src="{{ asset('assets/erase.png') }}" alt="">
    </button>
</form>