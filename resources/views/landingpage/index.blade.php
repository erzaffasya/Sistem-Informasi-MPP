<x-guest-layout>
    <!-- Modal -->
    @foreach ($dataLayanan as $item)
        <div class="modal fade" id="modallayanan-{{ $item['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel"x
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Informasi Layanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{$item['gambar']}}" class="d-inline-block mb-2" width="100%">
                            </div>
                            <div class="col-9">
                                <div class="section-title text-left mb-0 pb-2">
                                    <p class="text-primary text-uppercase fw-bold mb-0 fs-5">Layanan</p>
                                    <h4 class="fs-2">{{ $item['nama_instansi'] }}</h4>
                                    <div class="mt-4 d-flex">
                                        <div class="me-4">
                                            <h4 class="h5">Jadwal Pelayanan</h4>
                                            <div class="content d-flex">
                                                <p class="mb-0 me-4">Senin-Kamis
                                                    <br>{{ $item['senin_kamis']}}
                                                </p>
                                                <p class="mb-0 me-4">Jum'at
                                                    <br>{{ $item['jumat']}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="me-4">
                                            <h4 class="h5">Kontak</h4>
                                            <div class="content d-flex">
                                                <p class="mb-0 me-4">Whatsapp
                                                    <br>{{ $item['kontak']}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="accordion shadow rounded py-2 px-2 bg-white position-relative"
                                    id="accordionFAQ">
                                    @foreach ($item['data'] as $data)
                                        <div class="accordion-item p-1 mb-2">
                                            <h2 class="accordion-header accordion-button h5 border-0"
                                                id="heading-{{ $item['id'] }}-{{ $data['id'] }}" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse-{{ $item['id'] }}-{{ $data['id'] }}"
                                                aria-expanded="true"
                                                aria-controls="collapse-{{ $item['id'] }}-{{ $data['id'] }}">
                                                {{ $data['nama_layanan']['nama_layanan'] }}
                                            </h2>
                                            <div id="collapse-{{ $item['id'] }}-{{ $data['id'] }}"
                                                class="accordion-collapse collapse border-0 "
                                                aria-labelledby="heading-{{ $item['id'] }}-{{ $data['id'] }}"
                                                data-bs-parent="#accordionFAQ">
                                                <div class="accordion-body py-0 content">
                                                    {!! $data['deskripsi'] !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <section class="banner position-relative overflow-hidden pt-6 pb-0">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12 mb-5 mb-3">
                <div class="text-center">
                    <p class="text-dark text-uppercase fw-bold mb-1 fs-4 mt-4">MAL PELAYANAN PUBLIK KOTA BALIKPAPAN</p>
                    <div id="wrap-text-animate" class="text-dark fs-1">
                        URUS BERMACAM PELAYANAN PUBLIK
                        <div id="flip-animate">
                            <div>
                                <div>KTP</div>
                            </div>
                            <div>
                                <div>BPJS</div>
                            </div>
                            <div>
                                <div>LISTRIK</div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <p class="text-primary text-uppercase fw-bold mb-1 fs-3">{{ $profile->slogan }}</p>
                    {{-- <h1 class="text-capitalize mb-2"><span class="text-uppercase">Mal Pelayanan Publik</span><br><span
                            class="fs-1">Kota Balikpapan</span></h1> --}}
                    {{-- <p class="fs-5 mb-0">Dapatkan berbagai macam pelayanan publik dinas, kantor, instansi secara cepat
                        dan mudah
                        hanya dalam 1 tempat</p> --}}
                </div>
            </div>
            <div class="col-lg-12" style="position: relative;">
                <div class="text-center">
                    <img loading="lazy" decoding="async" src="tlandingpage/images/mpp2.png" alt="banner image"
                        width="80%">
                </div>
            </div>
        </div>
        <div class="has-shapes">
            <svg class="shape shape-left text-light" viewBox="0 0 192 752" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M-30.883 0C-41.3436 36.4248 -22.7145 75.8085 4.29154 102.398C31.2976 128.987 65.8677 146.199 97.6457 166.87C129.424 187.542 160.139 213.902 172.162 249.847C193.542 313.799 149.886 378.897 129.069 443.036C97.5623 540.079 122.109 653.229 191 728.495"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M-55.5959 7.52271C-66.0565 43.9475 -47.4274 83.3312 -20.4214 109.92C6.58466 136.51 41.1549 153.722 72.9328 174.393C104.711 195.064 135.426 221.425 147.449 257.37C168.829 321.322 125.174 386.42 104.356 450.559C72.8494 547.601 97.3965 660.752 166.287 736.018"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M-80.3302 15.0449C-90.7909 51.4697 -72.1617 90.8535 -45.1557 117.443C-18.1497 144.032 16.4205 161.244 48.1984 181.915C79.9763 202.587 110.691 228.947 122.715 264.892C144.095 328.844 100.439 393.942 79.622 458.081C48.115 555.123 72.6622 668.274 141.552 743.54"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M-105.045 22.5676C-115.506 58.9924 -96.8766 98.3762 -69.8706 124.965C-42.8646 151.555 -8.29436 168.767 23.4835 189.438C55.2615 210.109 85.9766 236.469 98.0001 272.415C119.38 336.367 75.7243 401.464 54.9072 465.604C23.4002 562.646 47.9473 675.796 116.838 751.063"
                    stroke="currentColor" stroke-miterlimit="10" />
            </svg>
            <svg class="shape shape-right text-light" viewBox="0 0 731 746" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.1794 745.14C1.80036 707.275 -5.75764 666.015 8.73984 629.537C27.748 581.745 80.4729 554.968 131.538 548.843C182.604 542.703 234.032 552.841 285.323 556.748C336.615 560.64 391.543 557.276 433.828 527.964C492.452 487.323 511.701 408.123 564.607 360.255C608.718 320.353 675.307 307.183 731.29 327.323"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M51.0253 745.14C41.2045 709.326 34.0538 670.284 47.7668 635.783C65.7491 590.571 115.623 565.242 163.928 559.449C212.248 553.641 260.884 563.235 309.4 566.931C357.916 570.627 409.887 567.429 449.879 539.701C505.35 501.247 523.543 426.331 573.598 381.059C615.326 343.314 678.324 330.853 731.275 349.906"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M89.8715 745.14C80.6239 711.363 73.8654 674.568 86.8091 642.028C103.766 599.396 150.788 575.515 196.347 570.054C241.906 564.578 287.767 573.629 333.523 577.099C379.278 580.584 428.277 577.567 465.976 551.423C518.279 515.172 535.431 444.525 582.62 401.832C621.964 366.229 681.356 354.493 731.291 372.46"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M128.718 745.14C120.029 713.414 113.678 678.838 125.837 648.274C141.768 608.221 185.939 585.788 228.737 580.659C271.536 575.515 314.621 584.008 357.6 587.282C400.58 590.556 446.607 587.719 482.028 563.16C531.163 529.111 547.275 462.733 591.612 422.635C628.572 389.19 684.375 378.162 731.276 395.043"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M167.564 745.14C159.432 715.451 153.504 683.107 164.863 654.519C179.753 617.046 221.088 596.062 261.126 591.265C301.164 586.452 341.473 594.402 381.677 597.465C421.88 600.527 464.95 597.872 498.094 574.896C544.061 543.035 559.146 480.942 600.617 443.423C635.194 412.135 687.406 401.817 731.276 417.612"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M817.266 289.466C813.108 259.989 787.151 237.697 759.261 227.271C731.372 216.846 701.077 215.553 671.666 210.904C642.254 206.24 611.795 197.156 591.664 175.224C555.853 136.189 566.345 75.5336 560.763 22.8649C552.302 -56.8256 498.487 -130.133 425 -162.081"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M832.584 276.159C828.427 246.683 802.469 224.391 774.58 213.965C746.69 203.539 716.395 202.246 686.984 197.598C657.573 192.934 627.114 183.85 606.982 161.918C571.172 122.883 581.663 62.2275 576.082 9.55873C567.62 -70.1318 513.806 -143.439 440.318 -175.387"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M847.904 262.853C843.747 233.376 817.789 211.084 789.9 200.659C762.011 190.233 731.716 188.94 702.304 184.292C672.893 179.627 642.434 170.544 622.303 148.612C586.492 109.577 596.983 48.9211 591.402 -3.74766C582.94 -83.4382 529.126 -156.746 455.638 -188.694"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M863.24 249.547C859.083 220.07 833.125 197.778 805.236 187.353C777.347 176.927 747.051 175.634 717.64 170.986C688.229 166.321 657.77 157.237 637.639 135.306C601.828 96.2707 612.319 35.6149 606.738 -17.0538C598.276 -96.7443 544.462 -170.052 470.974 -202"
                    stroke="currentColor" stroke-miterlimit="10" />
            </svg>
        </div>
    </section>

    <section id="card-antrian" class="section py-0 mb-5 rounded-lg"
        style="position: relative; top: -70px; z-index: 99;">
        <div class="container rounded-lg">
            <div class="row">
                <div class="col-9">
                    <div class="bg-white rounded-lg shadow-sm">
                        <nav id="tab-antrian">
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <button class="nav-link fs-4 active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab"
                                    aria-controls="nav-home" aria-selected="true">Cek Antrian</button>
                                <button class="nav-link fs-4" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab"
                                    aria-controls="nav-profile" aria-selected="false">Ambil Antrian</button>
                            </div>
                        </nav>
                        <div class="tab-content px-5 py-4" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <form method="post" data-action="{{ route('get-kuota') }}" id="add-user-form">
                                    @csrf
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <label for="inputState" class="form-label fs-5">Pilih Instansi</label>
                                            <select name="instansi_id" id="inputState"
                                                class="form-select form-select-lg text-secondary">
                                                @foreach ($instansi as $item)
                                                    <option value="{{ $item->id_instansi_mpp }}">
                                                        {{ $item->nama_instansi }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 d-flex align-items-end">
                                            @if (session()->has('loginMpp'))
                                                <button type="submit" class="btn btn-primary w-100">CEK ANTRIAN
                                                    LAYANAN</button>
                                            @else
                                                <a data-bs-toggle="modal" data-bs-target="#modallogin"
                                                    class="btn btn-primary w-100">CEK ANTRIAN LAYANAN</a>
                                            @endif

                                        </div>
                                    </div>
                                </form>
                            </div>
                            @push('scripts')
                                <script>
                                    $(document).ready(function() {

                                        var form = '#add-user-form';

                                        $(form).on('submit', function(event) {
                                            event.preventDefault();

                                            var url = $(this).attr('data-action');
                                            console.log(url, 'url ni')
                                            $.ajax({
                                                url: url,
                                                method: 'POST',
                                                data: new FormData(this),
                                                dataType: 'JSON',
                                                contentType: false,
                                                cache: false,
                                                processData: false,
                                                success: function(response) {
                                                    // $(form).trigger("reset");
                                                    // alert('Antrian menunggu ' + response.antrianmenunggu)
                                                    swal.fire(
                                                        // response.nama,
                                                        'Cek Antrian',
                                                        '<h3 class="mb-0">' + response.nama + '</h3> <br>' +
                                                        '<h4 class="mb-0 mt-0 fw-normal"> Antrian Menunggu <b>' +
                                                        response.antrianmenunggu + '</b></h4> ' +
                                                        '<h4 class="mb-0 mt-0 fw-normal"> Antrian Saat Ini <b>' +
                                                        response.antriansaatini + '</b></h4> ',
                                                        "success",
                                                    );

                                                },
                                                error: function(response) {}
                                            });
                                        });

                                        // Batas 
                                        var formAntrian = '#ambilAntrian';

                                        $(formAntrian).on('submit', function(event) {
                                            event.preventDefault();

                                            var url = $(this).attr('data-action');
                                            console.log(url, 'url ni')
                                            $.ajax({
                                                url: url,
                                                method: 'POST',
                                                data: new FormData(this),
                                                dataType: 'JSON',
                                                contentType: false,
                                                cache: false,
                                                processData: false,
                                                success: function(response) {
                                                    // $(form).trigger("reset");
                                                    // alert('Antrian menunggu ' + response.antrianmenunggu)
                                                    if (response.status == 'failed') {
                                                        swal.fire(
                                                            // response.nama,
                                                            'Ambil Antrian',
                                                            response.pesan,
                                                            "error",
                                                        )
                                                    } else {
                                                        swal.fire(
                                                            // response.nama,
                                                            'Cek Antrian',
                                                            '<h3 class="mb-0">' + response.data.tblantriangroup_nama +
                                                            '</h3> <br>' +
                                                            '<h4 class="mb-0 mt-0 fw-normal"> Nomor Antrian <b>' +
                                                            response.data.noantrian + '</b></h4> ' +
                                                            '<h4 class="mb-0 mt-0 fw-normal"> Antrian Menunggu <b>' +
                                                            response.data.antriantunggu + '</b></h4> ',
                                                            "success",
                                                        ).then((result) => {
                                                            if (result.value) {
                                                                window.location.reload(); // Reload the current page
                                                            }
                                                        });
                                                    }
                                                },
                                                error: function(response) {
                                                    swal.fire(
                                                        // response.nama,
                                                        'Ambil Antrian',
                                                        '<h3 class="mb-0">' + response.pesan + '</h3> <br>',
                                                        "error",
                                                    );
                                                }
                                            });
                                        });

                                    });
                                </script>
                            @endpush

                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                @if (session()->has('loginMpp'))
                                    <form method="post" data-action="{{ route('ambil-antrian') }}"
                                        id="ambilAntrian">
                                        @csrf
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <label for="inputState" class="form-label fs-5">Pilih Instansi</label>
                                                <select name="instansi_id" id="inputState"
                                                    class="form-select form-select-lg text-secondary">
                                                    @foreach ($instansi as $item)
                                                        <option value="{{ $item->id_instansi_mpp }}">
                                                            {{ $item->nama_instansi }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-end">
                                                <button type="submit" class="btn btn-primary w-100">Ambil
                                                    Antrian</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <div class="notices info text-center">
                                        <p class="mb-0 fs-4 fw-bold text-warning text-uppercase">Maaf, Anda Belum Login
                                        </p>

                                        <p class="fs-6">Untuk mengakses ambil antrian online anda harus
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modallogin"
                                                class="text-black">
                                                Masuk Akun
                                            </a>terlebih
                                            dahulu
                                        </p>
                                    </div>
                                @endif

                                @if ($antrianTerakhir != null)
                                    <div class="row py-3">
                                        <div class="col-8">
                                            <table class="table table-borderless text-dark">
                                                <tbody>
                                                    <tr class="mb-1">
                                                        <td>NIK</td>
                                                        <td>:</td>
                                                        <td>{{ $antrianTerakhir->nik }}</td>
                                                    </tr>
                                                    <tr class="mb-1">
                                                        <td>Nama Penerima</td>
                                                        <td>:</td>
                                                        <td>{{ $antrianTerakhir->nama_penerima }}</td>
                                                    </tr>
                                                    <tr class="mb-1">
                                                        <td>Tanggal</td>
                                                        <td>:</td>
                                                        <td>{{ $antrianTerakhir->tgl }}</td>
                                                    </tr>
                                                    <tr class="mb-1">
                                                        <td>Jam</td>
                                                        <td>:</td>
                                                        <td>{{ $antrianTerakhir->jam }}</td>
                                                    </tr>
                                                    <tr class="mb-1">
                                                        <td>Nama Instansi</td>
                                                        <td>:</td>
                                                        <td>{{ $antrianTerakhir->nama_instansi }}</td>
                                                    </tr>
                                                    <tr class="mb-1">
                                                        <td>Nama loket</td>
                                                        <td>:</td>
                                                        <td>{{ $antrianTerakhir->nama_loket }}</td>
                                                    </tr>
                                                    <tr class="mb-1">
                                                        <td>Status Antrian</td>
                                                        <td>:</td>
                                                        <td>{{ $antrianTerakhir->stsantrian }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-4 bg-danger rounded">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                                                <p class="h4 text-white fw-semibold text-uppercase mb-0">No. Antrian
                                                    Anda
                                                </p>
                                                <p class="display-2 fw-bold text-white mb-0">
                                                    {{ $antrianTerakhir->noantrian }}</p>
                                                <a href="{{ route('cetak-antrian') }}" target="_blank"
                                                    class="btn btn-light w-100 mt-2">Cetak Antrian</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 bg-primary rounded">
                    <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                        <p class="h4 text-white fw-semibold text-uppercase mb-0">Nilai SKM</p>
                        <p class="display-2 fw-bold text-white mb-0">{{ $skm->nilai }}</p>

                        <!-- <a href="#!" class="btn btn-outline-primary">Masuk</a> -->
                        <!-- <p class="h5 text-white fw-normal mb-0 text-lowercase">( Sangat Baik )</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section py-0" style="position: relative; top: -50px; z-index: 99;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="https://play.google.com/store/apps/details?id=dmi.mpp.balikpapan&pli=1" target="_blank">
                        <div class="bg-white difference-of-us-item p-3 rounded mr-0 me-lg-4">
                            <div>
                                <div class="text-center">
                                    <figure class="mb-4">
                                        <img src="tlandingpage/images/layanan3.png" alt="" width="45%">
                                    </figure>
                                    <h4 class="mb-1">APLIKASI ANTRIAN ONLINE</h4>
                                    <p class="text-secondary">Ambil antrian online dengan mudah</p>
                                    <button class="btn btn-primary w-100"> KUNJUNGI</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="https://layanan-mpp.balikpapan.go.id/tracking">
                        <div class="bg-white difference-of-us-item p-3 rounded mr-0 me-lg-4">
                            <div>
                                <div class="text-center">
                                    <figure class="mb-4">
                                        <img src="tlandingpage/images/layanan.png" alt="" width="45%">
                                    </figure>
                                    <h4 class="mb-1">TRACKING LAYANAN</h4>
                                    <p class="text-secondary">Ketahui status layanan/permohonan</p>
                                    <button class="btn btn-danger w-100"> KUNJUNGI</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    @if (session()->has('loginMpp'))
                        <a href="https://skm-mpp.balikpapan.go.id/">
                        @else
                            <a data-bs-toggle="modal" data-bs-target="#modallogin">
                    @endif
                    <div class="bg-white difference-of-us-item p-3 rounded mr-0 me-lg-4">
                        <div>
                            <div class="text-center">
                                <figure class="mb-4">
                                    <img src="tlandingpage/images/layanan2.png" alt="" width="45%">
                                </figure>
                                <h4 class="mb-4">SURVEY KEPUASAN MASYARAKAT</h4>

                                <button class="btn btn-success w-100"> KUNJUNGI</button>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-primary py-4">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-lg-6">
                    <div class="section-title text-white">
                        <p class="text-uppercase fw-bold mb-1 fs-5 opacity-75">Tentang Mal Pelayanan Publik
                            Balikpapan</p>
                        <h1 class="text-white">Berbagai Pelayanan Dalam 1 Tempat</h1>
                        <p class="">
                            {!! $profile->deskripsi !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="has-video-popup position-relative">
                        <img loading="lazy" decoding="async" src="tlandingpage/images/pelayanan.jpg"
                            alt="video thumb" class="rounded-lg w-100"
                            style="object-fit: cover; height: 400px; object-position: left;">
                        <button type="button" class="video-play-btn border-0 bg-transparent" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/9rQcOeBRQkI?VQ=HD720"
                            data-bs-target="#videoModal">
                            <svg class="text-primary" viewBox="0 0 90 90" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="45" cy="45" r="45" fill="currentColor"
                                    fill-opacity="0.4" />
                                <circle cx="44.9995" cy="45" r="37.437" fill="currentColor" />
                                <path d="M58.2354 44.9999L38.3824 56.462L38.3824 33.5378L58.2354 44.9999Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade rounded overflow-hidden" id="videoModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="text-center p-3">
                    <button type="button" class="bg-transparent border-0" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9 rounded-bottom overflow-hidden">
                        <iframe src="{{ $profile->video }}" id="showVideo" allowscriptaccess="always"
                            allow="autoplay" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section homepage_tab position-relative py-4">
        <div class="py-4 container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <p class="text-primary text-uppercase fw-bold mb-0 fs-4">Fasilitas Mal Pelayanan Publik
                            Balikpapan</p>
                        <h1>Beberapa Fasilitas yang Tersedia</h1>
                    </div>
                </div>
                <div class="col-lg-11">
                    <ul class="payment_info_tab nav nav-pills justify-content-center mb-4" id="pills-tab"
                        role="tablist">
                        @foreach ($fasilitas as $item)
                            <li class="nav-item m-2" role="presentation">
                                <a class="nav-link btn btn-outline-primary effect-none text-dark @if ($loop->index == 0) active @endif "
                                    id="pills-how-do-i-repay-tab" data-bs-toggle="pill"
                                    href="#{{ preg_replace('/\s+/', '', $item->judul) }}" role="tab"
                                    aria-controls="{{ preg_replace('/\s+/', '', $item->judul) }}"
                                    aria-selected="true">{{ $item->judul }} </a>
                            </li>
                        @endforeach


                    </ul>
                    <div class="rounded shadow bg-white p-3 tab-content" id="pills-tabContent">

                        @foreach ($fasilitas as $item)
                            <div class="tab-pane fade @if ($loop->index == 0) show active @endif"
                                id="{{ preg_replace('/\s+/', '', $item->judul) }}" role="tabpanel"
                                aria-labelledby="pills-how-much-does-it-costs-tab">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-1 order-md-0">
                                        <div class="content-block">
                                            <h3 class="mb-4">{{ $item->judul }}</h3>
                                            <div class="content">
                                                <p>{!! $item->isi !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                                        <div class="image-block text-center">
                                            <img loading="lazy" decoding="async" src="{{ url($item->gambar) }}"
                                                alt="How Much Does It Costs?" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="has-shapes">
                <svg class="shape shape-left text-light" width="290" height="709" viewBox="0 0 290 709"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M-119.511 58.4275C-120.188 96.3185 -92.0001 129.539 -59.0325 148.232C-26.0649 166.926 11.7821 174.604 47.8274 186.346C83.8726 198.088 120.364 215.601 141.281 247.209C178.484 303.449 153.165 377.627 149.657 444.969C144.34 546.859 197.336 649.801 283.36 704.673"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M-141.434 72.0899C-142.111 109.981 -113.923 143.201 -80.9554 161.895C-47.9878 180.588 -10.1407 188.267 25.9045 200.009C61.9497 211.751 98.4408 229.263 119.358 260.872C156.561 317.111 131.242 391.29 127.734 458.631C122.417 560.522 175.414 663.463 261.437 718.335"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M-163.379 85.7578C-164.056 123.649 -135.868 156.869 -102.901 175.563C-69.9331 194.256 -32.086 201.934 3.9592 213.677C40.0044 225.419 76.4955 242.931 97.4127 274.54C134.616 330.779 109.296 404.957 105.789 472.299C100.472 574.19 153.468 677.131 239.492 732.003"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M-185.305 99.4208C-185.982 137.312 -157.794 170.532 -124.826 189.226C-91.8589 207.919 -54.0118 215.597 -17.9666 227.34C18.0787 239.082 54.5697 256.594 75.4869 288.203C112.69 344.442 87.3706 418.62 83.8633 485.962C78.5463 587.852 131.542 690.794 217.566 745.666"
                        stroke="currentColor" stroke-miterlimit="10" />
                </svg>
                <svg class="shape shape-right text-light" width="474" height="511" viewBox="0 0 474 511"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M601.776 325.899C579.043 348.894 552.727 371.275 520.74 375.956C478.826 382.079 438.015 355.5 412.619 321.6C387.211 287.707 373.264 246.852 354.93 208.66C336.584 170.473 311.566 132.682 273.247 114.593C220.12 89.5159 155.704 108.4 99.7772 90.3769C53.1531 75.3464 16.3392 33.2759 7.65012 -14.947"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M585.78 298.192C564.28 319.945 539.378 341.122 509.124 345.548C469.472 351.341 430.868 326.199 406.845 294.131C382.805 262.059 369.62 223.419 352.278 187.293C334.936 151.168 311.254 115.417 275.009 98.311C224.74 74.582 163.815 92.4554 110.913 75.3971C66.8087 61.1784 31.979 21.3767 23.7639 -24.2362"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M569.783 270.486C549.5 290.99 526.04 310.962 497.501 315.13C460.111 320.592 423.715 296.887 401.059 266.641C378.392 236.402 365.963 199.965 349.596 165.901C333.24 131.832 310.911 98.1265 276.74 82.0034C229.347 59.6271 171.895 76.4848 122.013 60.4086C80.419 47.0077 47.5905 9.47947 39.8431 -33.5342"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M553.787 242.779C534.737 262.041 512.691 280.809 485.884 284.722C450.757 289.853 416.568 267.586 395.286 239.173C373.993 210.766 362.308 176.538 346.945 144.535C331.581 112.533 310.605 80.8723 278.502 65.7217C233.984 44.6979 180.006 60.54 133.149 45.4289C94.0746 32.8398 63.2303 -2.41965 55.9568 -42.8233"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M537.791 215.073C519.964 233.098 499.336 250.645 474.269 254.315C441.41 259.126 409.422 238.286 389.513 211.704C369.594 185.13 358.665 153.106 344.294 123.17C329.923 93.2337 310.293 63.6078 280.258 49.4296C238.605 29.7646 188.105 44.5741 144.268 30.4451C107.714 18.6677 78.8538 -14.3229 72.0543 -52.1165"
                        stroke="currentColor" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    </section>

    <section class="section bg-primary py-4" id="layanan-mpp">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <h1 class=" text-white">Loket Pelayanan MPP Balikpapan</h1>
                        <p class=" text-white">Tedapat {{ $instansi->count() }} Loket Pelayanan Instansi, Kantor, dan
                            Dinas</p>
                    </div>
                </div>
            </div>
            <div class="slick-layanan h-100">
                @foreach ($instansi as $item)
                    <div class="bg-white py-1 rounded mx-3">
                        <div class="wrapper-layanan block text-center px-3 py-3">
                            <div>
                                <img src="{{ $item->gambar }}" class="d-inline-block mb-2" width="150px">
                                <h3 class="mb-0 service-title">{{ $item->nama_instansi }}</h3>
                                <p class="mb-3 text-secondary">Lantai 3 Loket 2</p>
                            </div>
                            <div class="content">
                                <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#modallayanan-{{ $item->id }}"
                                    class="btn btn-outline-primary w-100 mt-2">DETAIL LAYANAN</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="about-section section position-relative pt-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <p class="text-primary text-uppercase fw-bold mb-2 fs-4">KAPAN SAJA DIMANA SAJA</p>
                        <h1 class="text-dark">Mudah Ambil Antrian Loket MPP</h1>
                        <p class="text-secondary fs-5 opacity-75">Antrian online tersedia melalui 2 cara berikut</p>
                    </div>
                    <div class="d-flex">
                        <div class="me-3">
                            <a href="https://play.google.com/store/apps/details?id=dmi.mpp.balikpapan&pli=1"
                                target="_blank">
                                <img src="tlandingpage/images/playstore.png" class="img-fluid" width="170px">
                            </a>
                        </div>
                        <div>
                            <a href="#card-antrian" class="btn btn-lg btn-primary">MELALUI WEBSITE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center text-lg-end">
                    <img src="tlandingpage/images/hpgambar.png" alt="About Ourselves" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container mt-3" style="left: 0; right: 0;">
            <div class="row justify-content-center gx-5">
                <div class="icon-box-item col-lg-4 col-md-6">
                    <div class="block bg-white text-center" style="border: 1px solid rgba(0,0,0,0.07)">
                        <h1 class="mb-2 text-primary display-4 fw-bold">31</h1>
                        <p class="mb-0 fs-5 fw-bold text-dark">JUMLAH INSTANSI</p>
                    </div>
                </div>
                <div class="icon-box-item col-lg-4 col-md-6">
                    <div class="block bg-white text-center" style="border: 1px solid rgba(0,0,0,0.07)">
                        <h1 class="mb-2 text-primary display-4 fw-bold">120</h1>
                        <p class="mb-0 fs-5 fw-bold text-dark">JUMLAH LAYANAN</p>
                    </div>
                </div>
                <div class="icon-box-item col-lg-4 col-md-6">
                    <div class="block bg-white text-center" style="border: 1px solid rgba(0,0,0,0.07)">
                        <h1 class="mb-2 text-primary display-4 fw-bold">40</h1>
                        <p class="mb-0 fs-5 fw-bold text-dark">KUNJUNGAN HARI INI</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section loan-steps py-4 bg-tertiary">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <p class="text-primary text-uppercase fw-bold mb-0 fs-4">Mekanisme Pelayanan</p>
                        <h1>Urus Kebutuhan Dengan 5 Langkah Mudah di MPP Balikpapan</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        @foreach ($mekanisme as $item)
                            <div class="step-item col">
                                <div class="text-center">
                                    <p class="count">{{ $loop->iteration }}</p>
                                    <h3 class="mb-3">{{ $item->judul }}</h3>
                                    <p class="mb-0">{!! $item->isi !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section py-4 mb-4" id="beritasection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="me-lg-4">
                        <div class="row gy-2">
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-left">
                                        <p class="text-primary text-uppercase fw-bold mb-1 fs-4">Berita MPP Balikpapan
                                        </p>
                                        <h1>Kabar terbaru saat ini</h1>
                                    </div>
                                    <div>
                                        <a type="button" class="btn btn-primary" href="{{ route('berita') }}"
                                            data-bs-toggle="modal" data-bs-target="#applyLoan">Berita Lainnya<span
                                                style="font-size: 14px;" class="ms-2 fas fa-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            @foreach ($berita as $item)
                                <div class="col-md-4" data-aos="fade">
                                    <article class="card blog-post h-100 shadow">
                                        <img class="card-img-top mb-0" loading="lazy" decoding="async"
                                            src="{{ url($item->gambar) }}" alt="Post Thumbnail" width="420"
                                            height="280" style="height: 250px; widows: 100%; object-fit: cover;">
                                        <div class="card-body">
                                            <p class="mb-3">{{ $item->created_at->format('d M, Y') }}</p>
                                            <h2 class="h4"><a class="text-black"
                                                    href="{{ url('berita/' . $item->slug) }}">{!! substr_replace($item->judul, '...', 60) !!}</a>
                                            </h2>
                                            {!! substr_replace($item->isi, '...', 150) !!}
                                            <a href="{{ url('berita/' . $item->slug) }}" class="text-primary fw-bold"
                                                aria-label="Read the full article by clicking here">Read More</a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section testimonials overflow-hidden pt-4 pb-5 bg-tertiary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="text-primary text-uppercase fw-bold mb-1 fs-4">TESTIMONIAL TENTang mpp balikpapan
                        </p>
                        <h1 class="mb-4">Apa kata mereka ?</h1>
                    </div>
                </div>
            </div>
            <div class="slick-testimoni row position-relative">
                @foreach ($testimoni as $item)
                    <div class="col mx-2 pt-1">
                        <div class="wrapper-layanan shadow rounded bg-white p-4 mt-4">
                            <div class="content">{!! $item->isi !!}</div>
                            <div class="d-block d-sm-flex align-items-center">
                                <div class="mt-3 mt-sm-0">
                                    <h4 class="h5 mb-0">{{ $item->judul }}</h4>
                                    <p class="mb-0">{{ $item->jabatan }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            <form method="POST" action="{{ route('tambah-testimoni') }}" class="row justify-content-center mt-5">
                {{-- <form method="POST" action="{{ route('tambah-testimoni') }}"> --}}
                    @csrf
                    <div class="col-md-6">
                        <div class="form-floating mb-2">
                            <textarea class="form-control" name="isi" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Testimoni Anda</label>
                        </div>
                        @if (session()->has('loginMpp'))
                            <button type="submit" class="btn btn-primary w-100">Tambah Testimoni</button>
                        @else
                            <a data-bs-toggle="modal" data-bs-target="#modallogin"
                                class="btn btn-primary w-100">Tambah
                                Testimoni</a>
                        @endif

                    </div>
                {{-- </form> --}}
            </form>
        </div>
        <div class="has-shapes">
            <svg class="shape shape-left text-light" width="290" height="709" viewBox="0 0 290 709"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M-119.511 58.4275C-120.188 96.3185 -92.0001 129.539 -59.0325 148.232C-26.0649 166.926 11.7821 174.604 47.8274 186.346C83.8726 198.088 120.364 215.601 141.281 247.209C178.484 303.449 153.165 377.627 149.657 444.969C144.34 546.859 197.336 649.801 283.36 704.673"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M-141.434 72.0899C-142.111 109.981 -113.923 143.201 -80.9554 161.895C-47.9878 180.588 -10.1407 188.267 25.9045 200.009C61.9497 211.751 98.4408 229.263 119.358 260.872C156.561 317.111 131.242 391.29 127.734 458.631C122.417 560.522 175.414 663.463 261.437 718.335"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M-163.379 85.7578C-164.056 123.649 -135.868 156.869 -102.901 175.563C-69.9331 194.256 -32.086 201.934 3.9592 213.677C40.0044 225.419 76.4955 242.931 97.4127 274.54C134.616 330.779 109.296 404.957 105.789 472.299C100.472 574.19 153.468 677.131 239.492 732.003"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M-185.305 99.4208C-185.982 137.312 -157.794 170.532 -124.826 189.226C-91.8589 207.919 -54.0118 215.597 -17.9666 227.34C18.0787 239.082 54.5697 256.594 75.4869 288.203C112.69 344.442 87.3706 418.62 83.8633 485.962C78.5463 587.852 131.542 690.794 217.566 745.666"
                    stroke="currentColor" stroke-miterlimit="10" />
            </svg>
            <svg class="shape shape-right text-light" width="731" height="429" viewBox="0 0 731 429"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.1794 428.14C1.80036 390.275 -5.75764 349.015 8.73984 312.537C27.748 264.745 80.4729 237.968 131.538 231.843C182.604 225.703 234.032 235.841 285.323 239.748C336.615 243.64 391.543 240.276 433.828 210.964C492.452 170.323 511.701 91.1227 564.607 43.2553C608.718 3.35334 675.307 -9.81661 731.29 10.323"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M51.0253 428.14C41.2045 392.326 34.0538 353.284 47.7668 318.783C65.7491 273.571 115.623 248.242 163.928 242.449C212.248 236.641 260.884 246.235 309.4 249.931C357.916 253.627 409.887 250.429 449.879 222.701C505.35 184.248 523.543 109.331 573.598 64.0588C615.326 26.3141 678.324 13.8532 731.275 32.9066"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M89.8715 428.14C80.6239 394.363 73.8654 357.568 86.8091 325.028C103.766 282.396 150.788 258.515 196.347 253.054C241.906 247.578 287.767 256.629 333.523 260.099C379.278 263.584 428.277 260.567 465.976 234.423C518.279 198.172 535.431 127.525 582.62 84.8317C621.964 49.2292 681.356 37.4924 731.291 55.4596"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M128.718 428.14C120.029 396.414 113.678 361.838 125.837 331.274C141.768 291.221 185.939 268.788 228.737 263.659C271.536 258.515 314.621 267.008 357.6 270.282C400.58 273.556 446.607 270.719 482.028 246.16C531.163 212.111 547.275 145.733 591.612 105.635C628.572 72.19 684.375 61.1622 731.276 78.0432"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M167.564 428.14C159.432 398.451 153.504 366.107 164.863 337.519C179.753 300.046 221.088 279.062 261.126 274.265C301.164 269.452 341.473 277.402 381.677 280.465C421.88 283.527 464.95 280.872 498.094 257.896C544.061 226.035 559.146 163.942 600.617 126.423C635.194 95.1355 687.406 84.8167 731.276 100.612"
                    stroke="currentColor" stroke-miterlimit="10" />
            </svg>
        </div>
    </section>

    <section class="section py-4">
        <div class="container">
            <div class="section-title text-center mb-3 pb-2">
                <p class="text-primary text-uppercase fw-bold mb-1 fs-4">STATISTIK KUNJUNGAN MPP BALIKPAPAN</p>
            </div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-harian-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-harian" type="button" role="tab" aria-controls="pills-harian"
                        aria-selected="true">KUNJUNGAN HARIAN</button>
                </li>
                {{-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-bulanan-tab" data-bs-toggle="pill" data-bs-target="#pills-bulanan" type="button" role="tab" aria-controls="pills-bulanan" aria-selected="false">KUNJUNGAN BULANAN</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-instansi-tab" data-bs-toggle="pill" data-bs-target="#pills-instansi" type="button" role="tab" aria-controls="pills-instansi" aria-selected="false">KUNJUGAN PER INSTANSI</button>
                </li> --}}
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-harian" role="tabpanel"
                    aria-labelledby="pills-harian-tab">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="tab-pane fade" id="pills-bulanan" role="tabpanel" aria-labelledby="pills-bulanan-tab">
                    ...
                </div>
                <div class="tab-pane fade" id="pills-instansi" role="tabpanel" aria-labelledby="pills-instansi-tab">
                    ...
                </div>
            </div>
        </div>
    </section>

    <section class="section py-4" id="kontak-mpp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-3 pb-2">
                        <p class="text-primary text-uppercase fw-bold mb-1 fs-4">Kontak Kami</p>
                        <h1>Pertanyaan-Pertanyaan terkait MPP Balikpapan</h1>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="accordion shadow rounded py-5 px-0 px-lg-4 bg-white position-relative" id="dropfaq">
                        @foreach ($faq as $item)
                            <div class="accordion-item p-1 mb-2">
                                <h2 class="accordion-header accordion-button h5 border-0"
                                    id="heading-{{ $item->id }}" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-{{ $item->id }}" aria-expanded="true"
                                    aria-controls="collapse-{{ $item->id }}">
                                    {{ $item->judul }}
                                </h2>
                                <div id="collapse-{{ $item->id }}" class="accordion-collapse collapse border-0"
                                    aria-labelledby="heading-{{ $item->id }}" data-bs-parent="#dropfaq">
                                    <div class="accordion-body py-0 content">{!! $item->isi !!}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="shadow rounded py-5 px-4 ms-0 ms-lg-4 bg-white position-relative">
                        <div class="block mx-0 mx-lg-3 mt-0">
                            <h4 class="h5">Masih memiliki Pertanyaan?</h4>
                            <div class="content">Tidak perlu ragu hubungi kami
                                <!-- <br> <a href="tel:+3301563965">+3301563965</a> -->
                                <ul>
                                    <li>Customer Service 1 <br>
                                        <a class="link-success"
                                            href="https://wa.me/{{ $profile->cs1 }}">{{ $profile->cs1 }} (WA)</a>
                                    </li>
                                    <li>Customer Service 2 <br>
                                        <a class="link-success"
                                            href="https://wa.me/{{ $profile->cs2 }}">{{ $profile->cs2 }} (WA)</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="block mx-0 mx-lg-3 mt-4">
                            <h4 class="h5">Kantor DPMPTSP Balikpan</h4>
                            <div class="content">{{ $profile->alamat }}
                            </div>
                        </div>
                        <div class="block mx-0 mx-lg-3 mt-4">
                            <h4 class="h5">Jadwal Pelayanan</h4>
                            <div class="content">
                                <p class="mb-0">Senin-Kamis
                                    <br>{{ $profile->senin_kamis }}
                                </p>
                                <p class="mb-0">Jum'at
                                    <br>{{ $profile->jumat }}
                                </p>
                            </div>
                        </div>
                        <div class="block mx-0 mx-lg-3 mt-4">
                            <h4 class="h5">Pengaduan Masyarakat</h4>
                            <a href="https://www.lapor.go.id/">
                                <figure class="py-2">
                                    <img src="https://kemensos.go.id/uploads/topics/16551961877203.png" alt=""
                                        width="80%">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="position: relative; overflow:visible;">
        <section class="banner bg-blues2 position-relative overflow-hidden pt-5 pb-0">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 mb-5 mb-3 text-center">
                    <h1 class="text-white text-uppercase fw-bold mb-1">MAL PELAYANAN PUBLIK KOTA BALIKPAPAN</h1>
                    <p class="text-capitalize mb-2 fw-bold text-white fs-2"><span class="text-uppercase"
                            style="font-style: italic;">"{{ $profile->slogan }}"</span></p>
                </div>
            </div>
        </section>
    </div>

    @push('scripts')
        <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                        'Oktober', 'November', 'Desember'
                    ],
                    datasets: [{
                        label: 'Kunjungan Harian',
                        data: [{{ $arrayStatistik }}],
                        borderWidth: 3
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endpush
</x-guest-layout>
