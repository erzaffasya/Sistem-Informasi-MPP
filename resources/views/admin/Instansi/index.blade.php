<x-app-layout>
    <div class="card">
        <h5 class="card-header">Instansi Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>#</th>
                        <th>Nama Instansi</th>
                        <th>Gambar</th>
                        <th>Lantai</th>
                        <th>Loket</th>
                        <th>Senin - Kamis</th>
                        <th>Jumat</th>
                        <th>Kontak</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Instansi as $item)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $item->nama_instansi }} </td>
                            <td> 
                            <img src="{{ $item->gambar }}" height="70">    
                            </td>                            
                            <td> {{ $item->lantai }} </td>                            
                            <td> {{ $item->loket }} </td>
                            <td> {{ $item->senin_kamis }} </td>
                            <td> {{ $item->jumat }} </td>
                            <td> {{ $item->kontak }} </td>
                            <td> {!! \Illuminate\Support\Str::limit($item->deskripsi, $limit = 150, $end = '...') !!} </td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow "
                                        data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu " data-popper-placement="bottom-start"
                                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 27px);">
                                        <a class="dropdown-item" href="{{route('Instansi.show',$item->id)}}"><i
                                            class="bx bx-edit-alt me-1"></i> Detail</a>
                                        <a class="dropdown-item" href="{{route('Instansi.edit',$item->id)}}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <form action="{{ route('Instansi.destroy', $item->id) }}" method="post">
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
