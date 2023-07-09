<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-2 col-md-4 col-6">
            <div class="footer-widget">
                <a href="index.html">
                    <img loading="prelaod" decoding="async" class="img-fluid" width="100%"
                        src="tlandingpage/images/logo.png" alt="Wallet">
                </a>
                <ul class="list-unstyled list-inline my-4 social-icons">
                    <li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black"
                            href="{{$getTentang->facebook??null}}"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item me-3"><a title="Explorer Twitter Profile" class="text-black"
                            href="{{$getTentang->twitter??null}}"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black"
                            href="{{$getTentang->instagram??null}}"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <ul class="list-unstyled list-inline mt-2 mb-0 text-start">
                    <li class="list-inline-item"><a class="text-secondary" href="privacy-policy.html">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item"><a class="text-secondary" href="terms.html">Terms &amp; Conditions</a>
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
                    <li class="mb-2"><a href="contact.html">Kontak</a>
                    </li>
                    <li class="mb-2"><a href="faq.html">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
