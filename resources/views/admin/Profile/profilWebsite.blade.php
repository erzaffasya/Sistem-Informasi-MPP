<x-app-layout>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Form Tambah Data</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{ route('Profile.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Logo</label>
                    <input class="form-control" type="file" name="logo" id="formFile">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Slogan</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Profile->slogan ?? null }}" name="slogan">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">visi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="visi" rows="3">{{ $Profile->visi ?? null }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">misi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="misi" rows="3">{{ $Profile->misi ?? null }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3">{{ $Profile->deskripsi ?? null }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">video</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Profile->video ?? null }}" name="video">
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
