<x-app-layout>
    <div class="card">
        <h5 class="card-header">Testimoni Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>#</th>
                        <th>Judul</th>
                        <th>Perusahaan</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Testimoni as $item)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $item->judul }} </td>
                            <td> {{ $item->perusahaan }} </td>
                            <td> {{ $item->jabatan }} </td>
                            <td>
                                @if ($item->status == true)
                                    Aktif
                                @else
                                    Tidak Aktif
                                @endif
                            </td>
                            <td>
                                <img src="{{ $item->gambar }}" height="70">
                            </td>
                            <td> {!! \Illuminate\Support\Str::limit($item->isi, $limit = 150, $end = '...') !!} </td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow "
                                        data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu " data-popper-placement="bottom-start"
                                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 27px);">
                                        <a class="dropdown-item" href="{{ route('Testimoni.edit', $item->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <form action="{{ route('Testimoni.destroy', $item->id) }}" method="post">
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
</x-app-layout>
