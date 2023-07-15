<nav class="navbar fixed-top bg-white navbar-expand-xl navbar-light text-center shadow-sm py-1">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{asset('tlandingpage/images/logo.png')}}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}"> <a class="nav-link"
                        href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item {{ request()->routeIs('tentang') ? 'active' : '' }}"> <a class="nav-link"
                        href="{{ route('tentang') }}">Tentang</a>
                </li>
                <li class="nav-item {{ request()->routeIs('berita') ? 'active' : '' }}"> <a class="nav-link"
                        href="{{ route('berita') }}">Berita</a>
                </li>
                {{-- <li class="nav-item {{ request()->routeIs('layanan') ? 'active' : '' }}"> <a class="nav-link"
                        href="{{ route('layanan') }}">Layanan</a>
                </li> --}}
                <li class="nav-item {{ request()->routeIs('kontak') ? 'active' : '' }}"> <a class="nav-link"
                        href="{{ route('kontak') }}">Kontak</a>
                </li>
            </ul>
            <!-- account btn -->
            @if (session()->has('loginMpp'))
                <p class="mb-0 me-4">NIK <b>{{ Session::get('loginMpp') }}</b></p>
                <a href="{{route('logout-mpp')}}" class="btn btn-danger">Logout</a>
            @else
                <a data-bs-toggle="modal" data-bs-target="#modallogin" class="btn btn-outline-primary">Masuk</a>
                <a href="{{route('regis')}}" class="btn btn-primary ms-2 ms-lg-3">Daftar</a>
            @endif
        </div>
    </div>
</nav>
    <!-- Modal -->
    <div class="modal fade" id="modallogin" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-5">
                        <img loading="prelaod" decoding="async" class="img-fluid" width="60%"
                            src="tlandingpage/images/logo.png" alt="Wallet">
                        <h4 class="title mt-4" id="exampleModalLabel">Selamat Datang</h4>
                        <h5 class="subtitle fw-normal text-secondary" id="exampleModalLabel">Masukkan data akun anda
                            dengan benar</h5>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('login-mpp') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">NIK</label>
                                    <input name="username" type="text" class="form-control input-md"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                                    <input type="password" name="password" class="form-control input-md"
                                        id="exampleInputPassword1">
                                    <div id="emailHelp" class="form-text">Lupa password akun ? <a href="{{route('lupa-password')}}">Klik
                                            disini</a></div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mb-3">MASUK AKUN</button>
                                <a href="{{route('regis')}}" class="btn btn-outline-primary w-100 mb-3">DAFTAR AKUN</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>