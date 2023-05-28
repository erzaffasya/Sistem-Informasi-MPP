<x-app-layout>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Form Tambah Data</h5>
            <a href="{{route('filosofi-detail')}}" class="text-muted float-end">Tambah Filoso Detail</small>
        </div>
        <div class="card-body">
            <form action="{{ route('Tentang.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Sejarah</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Tentang->sejarah ?? null }}" name="sejarah">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Sejarah Foto</label>
                    <input class="form-control" type="file" name="sejarah_foto" id="formFile">
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Filosofi</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Tentang->filosofi ?? null }}" name="filosofi">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Filosofi Foto</label>
                    <input class="form-control" type="file" name="filosofi_foto" id="formFile">
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Inovasi Judul</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Tentang->inovasi_judul ?? null }}" name="inovasi_judul">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Inovasi Detail</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Tentang->inovasi_detail ?? null }}" name="inovasi_detail">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Inovasi Video</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Tentang->inovasi_video ?? null }}" name="inovasi_video">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
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
