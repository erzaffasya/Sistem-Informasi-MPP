<x-app-layout>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Form Tambah Data</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{ route('Layanan.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Nama Layanan</label>
                    <select class="form-select" name="nama_layanan_id" id="exampleFormControlSelect1"
                        aria-label="Default select example">
                        @foreach ($namaLayanan as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_layanan }}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text" class="form-control" id="basic-default-fullname" name="nama_layanan"> --}}
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3"></textarea>
                </div>
                <input type="hidden" class="form-control" id="basic-default-fullname" value="{{ $id }}"
                    name="instansi_id">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @push('scripts')
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
                toolbar_mode: 'floating',
            });
        </script>
    @endpush
</x-app-layout>
