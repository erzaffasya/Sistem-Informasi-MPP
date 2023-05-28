<x-app-layout>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Form Tambah Data</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{ route('tambah-filosofi-detail') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">judul</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Profile->judul ?? null }}" name="judul">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">deskripsi</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Profile->deskripsi ?? null }}" name="deskripsi">
                </div> 
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">urut</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $Profile->urut ?? null }}" name="urut">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Filosofi Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>#</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Urut</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($FilosofiDetail as $item)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $item->judul }} </td>
                            <td>{!! $item->deskripsi !!}</td>
                            <td>{{ $item->urut }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow "
                                        data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu " data-popper-placement="bottom-start"
                                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 27px);">
                                        
                                        <form action="{{ route('delete-filosofi-detail', $item->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf

                                            <button class="dropdown-item" type="SUBMIT"><i
                                                    class="bx bx-trash me-1"></i> Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
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
