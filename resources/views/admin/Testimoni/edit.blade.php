<x-app-layout>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Form Tambah Data</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{ route('Testimoni.update', $Testimoni->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">judul</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Testimoni->judul }}" name="judul">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">jabatan</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Testimoni->jabatan }}" name="jabatan">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">perusahaan</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Testimoni->perusahaan }}" name="perusahaan">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">isi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="isi" rows="3">{{ $Testimoni->isi }}</textarea>
                </div>
                <select class="form-select mb-3" name="status" id="exampleFormControlSelect1"
                    aria-label="Default select example">
                    <option @if ($Testimoni->status == true) selected @endif value="1">Aktif</option>
                    <option @if ($Testimoni->status == false) selected @endif  value="0">Tidak Aktif</option>
                </select>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">gambar</label>
                    <input class="form-control" type="file" name="gambar" id="formFile">
                </div>

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
