<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-2 col-md-4 col-6">
            <div class="footer-widget">
                <a href="#">
                    <img loading="prelaod" decoding="async" class="img-fluid" width="100%"
                        src="tlandingpage/images/logo.png" alt="Wallet">
                </a>
                <ul class="list-unstyled list-inline my-4 social-icons">
                    <li class="list-inline-item me-3"><a title="Explorer Facebook Profile" target="_blank" class="text-black"
                            href="{{$getProfile->facebook??null}}"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item me-3"><a title="Explorer Youtube Profile" class="text-black" target="_blank"
                            href="{{$getProfile->youtube??null}}"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black" target="_blank"
                            href="{{$getProfile->instagram??null}}"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="footer-widget">
                <h5 class="mb-2 text-primary font-secondary">Link Terkait</h5>
                <ul class="list-unstyled">
                    @foreach ($getLinkTerkait as $item)
                        <li class="mb-2"><a target="_blank" href="{{ $item->link }}">{{ $item->judul }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="footer-widget">
                <h5 class="mb-2 text-primary font-secondary">Informasi</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#!">Fasilitas</a>
                    </li>
                    <li class="mb-2"><a href="#!">Layanan</a>
                    </li>
                    <li class="mb-2"><a href="#!">Berita</a>
                    </li>
                    <li class="mb-2"><a href="#!">Testimoni</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="footer-widget">
                <h5 class="mb-2 text-primary font-secondary">Lainnya</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#!">Kontak</a>
                    </li>
                    <li class="mb-2"><a href="#!">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
