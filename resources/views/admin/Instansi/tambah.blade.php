<x-app-layout>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Form Tambah Data</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{ route('Instansi.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Nama Instansi</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="nama_instansi">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Loket</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="loket">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Lantai</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="lantai">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Senin - Kamis</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="senin_kamis">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Jumat</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="jumat">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Whatsapp 1</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="wa1">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Whatsapp 2</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="wa2">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Website</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="website">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Gambar</label>
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
