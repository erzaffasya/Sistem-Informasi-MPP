<x-guest-layout>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="text-primary text-uppercase fw-bold mb-3">Kontak Kami</p>
                        <h1>Kontak Kami</h1>
                        <p>Anda dapat menghubungi kami mengenai pelayanan terkait pada kontak berikut</p>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="shadow rounded p-5 bg-white">
                        <div class="row">   
                            <div class="col-lg-6 pe-0 me-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8795625288067!2d116.89192527445266!3d-1.242929135579187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df145d2ca07469f%3A0xbeaa42901e1bc977!2sMal%20Pelayanan%20Publik%20(MPP)%20Kota%20Balikpapan!5e0!3m2!1sid!2sid!4v1687807835052!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="col-lg-6 mt-5 mt-lg-0">
                                <div class="contact-info">
                                    <div class="block mt-0">
                                        <h4 class="h5">Hubungi Kami</h4>
                                        <div class="content">Customer Service
                                            <ul class="mb-0">
                                                <li>Customer Service 1 <br> 
                                                    <a class="link-success" href="https://wa.me/{{$profile->cs1}}">{{$profile->cs1}} (WA)</a></li>
                                                <li>Customer Service 2 <br>
                                                    <a class="link-success" href="https://wa.me/{{$profile->cs2}}">{{$profile->cs2}} (WA)</a></li>
                                            </ul>
                                            Senin - Kamis
                                            <br>{{ $profile->senin_kamis }}
                                            <br>Jumat
                                            <br>{{ $profile->jumat }}
                                        </div>
                                    </div>
                                    <div class="block mt-4">
                                        <h4 class="h5">Kantor DPMPTSP Balikpan</h4>
                                        <div class="content">{{ $profile->alamat }}</div>
                                    </div>
                                    
                                    <div class="block">
                                        <ul class="list-unstyled list-inline my-4 social-icons">
                                            <li class="list-inline-item me-3"><a title="Explorer Facebook Profile"
                                                    class="text-black" target="_blank" href="{{$profile->facebook}}"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="list-inline-item me-3"><a title="Explorer Twitter Profile"
                                                    class="text-black" target="_blank" href="{{$profile->youtube}}"><i
                                                        class="fab fa-youtube"></i></a>
                                            </li>
                                            <li class="list-inline-item me-3"><a title="Explorer Instagram Profile"
                                                    class="text-black" target="_blank" href="{{$profile->instagram}}"><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
