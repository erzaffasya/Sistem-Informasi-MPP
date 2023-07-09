<x-guest-layout>
    <section class="section pb-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7">
                    <div class="section-title">
                        <p class="text-primary text-uppercase fw-bold mb-3">Tentang MPP</p>
                        <h2 class="h1 mb-4">Sejarah Mal Pelayanan Publik Balikpapan</h2>
                        <div class="content pe-0 pe-lg-5">
                           {{$tentang->sejarah}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <img loading="lazy" decoding="async" src="{{$tentang->sejarah_foto}}"
                        alt="Business Loans &lt;br&gt; For Daily Expenses" class="rounded w-100"
                        style="height: 350px; object-fit:cover;">
                </div>
            </div>
        </div>
    </section>

    <section class="about-section section bg-blues2 bg-img-overlay item1-img py-5 position-relative overflow-hidden">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid w-100" src="tlandingpage/images/maklumat.png" alt="Wallet" style="border-radius: 8px;">
                </div>
                <div class="col-lg-5">
                    <div class="section-title">
                        <p class="text-white text-uppercase fw-bold mb-1">MPP Balikpapan</p>
                        <h2 class="text-white">Maklumat Pelayanan</h2>
                    </div>
                    <p class="lead text-white text-capitalize">Ditandatangani oleh sejumlah instansi, dinas, dan kantor
                        yang berkomitmen menyediakan layanan di mal pelayanan publik kota balikpapan</p>
                </div>
            </div>
        </div>
        <div class="has-shapes">
            <svg class="shape shape-left text-light" width="381" height="443" viewBox="0 0 381 443" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M334.266 499.007C330.108 469.108 304.151 446.496 276.261 435.921C248.372 425.346 218.077 424.035 188.666 419.32C159.254 414.589 128.795 405.375 108.664 383.129C72.8533 343.535 83.3445 282.01 77.7634 228.587C69.3017 147.754 15.4873 73.3967 -58.0001 40.9907"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M349.584 485.51C345.427 455.611 319.469 433 291.58 422.425C263.69 411.85 233.395 410.538 203.984 405.823C174.573 401.092 144.114 391.878 123.982 369.632C88.1716 330.038 98.6628 268.513 93.0817 215.09C84.62 134.258 30.8056 59.8999 -42.6819 27.494"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M364.904 472.013C360.747 442.114 334.789 419.503 306.9 408.928C279.011 398.352 248.716 397.041 219.304 392.326C189.893 387.595 159.434 378.381 139.303 356.135C103.492 316.541 113.983 255.016 108.402 201.593C99.9403 120.76 46.1259 46.4028 -27.3616 13.9969"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M380.24 458.516C376.083 428.617 350.125 406.006 322.236 395.431C294.347 384.856 264.051 383.544 234.64 378.829C205.229 374.098 174.77 364.884 154.639 342.638C118.828 303.044 129.319 241.519 123.738 188.096C115.276 107.264 61.4619 32.906 -12.0255 0.500103"
                    stroke="currentColor" stroke-miterlimit="10" />
            </svg>
            <svg class="shape shape-right text-light" width="406" height="433" viewBox="0 0 406 433"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M101.974 -86.77C128.962 -74.8992 143.467 -43.2447 146.175 -12.7857C148.883 17.6734 142.273 48.1263 139.087 78.5816C135.916 109.041 136.681 141.702 152.351 167.47C180.247 213.314 240.712 218.81 289.413 238.184C363.095 267.516 418.962 340.253 430.36 421.687"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M118.607 -98.5031C145.596 -86.6323 160.101 -54.9778 162.809 -24.5188C165.517 5.94031 158.907 36.3933 155.72 66.8486C152.549 97.3082 153.314 129.969 168.985 155.737C196.881 201.581 257.346 207.077 306.047 226.451C379.729 255.783 435.596 328.52 446.994 409.954"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M135.241 -110.238C162.23 -98.3675 176.735 -66.7131 179.443 -36.254C182.151 -5.79492 175.541 24.6581 172.354 55.1134C169.183 85.573 169.948 118.234 185.619 144.002C213.515 189.846 273.98 195.342 322.681 214.716C396.363 244.048 452.23 316.785 463.627 398.219"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M151.879 -121.989C178.867 -110.118 193.373 -78.4638 196.081 -48.0047C198.789 -17.5457 192.179 12.9074 188.992 43.3627C185.821 73.8223 186.586 106.483 202.256 132.251C230.153 178.095 290.618 183.591 339.318 202.965C413.001 232.297 468.867 305.034 480.265 386.468"
                    stroke="currentColor" stroke-miterlimit="10" />
            </svg>
        </div>
    </section>

    <section class="section py-5 core-value bg-tertiary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row position-relative gy-4">
                        @foreach ($filosofi as $item)
                        <div class="icon-box-item col-md-6">
                            <div class="block bg-white shadow-lg rounded py-3 px-3 h-100">
                                <div class="icon rounded-number">{{$loop->iteration}}</div>
                                <h3 class="mb-1">{{$item->judul}}</h3>
                                <p class="mb-0 text-capitalize">{!!$item->deskripsi!!}</p>
                            </div>
                        </div>
                        @endforeach

                        <div class="has-shapes">
                            <svg class="shape shape-1 text-primary" width="71" height="71"
                                viewBox="0 0 119 119" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.50598 89.8686C8.17023 89.3091 7.83449 88.6376 7.49875 88.078L66.0305 0.336418C66.7019 0.448334 67.3734 0.560249 68.0449 0.560249L8.50598 89.8686Z"
                                    fill="currentColor" />
                                <path
                                    d="M5.03787 83.2646C4.70213 82.5932 4.47829 81.9217 4.14255 81.2502L58.3096 -0.00032826C59.093 -0.000328191 59.7645 -0.000328132 60.5479 -0.000328064L5.03787 83.2646Z"
                                    fill="currentColor" />
                                <path
                                    d="M16.9007 100.613C16.453 100.165 16.0053 99.7175 15.5577 99.2698L79.4613 3.47031C80.0209 3.69414 80.6924 3.91795 81.252 4.14178L16.9007 100.613Z"
                                    fill="currentColor" />
                                <path
                                    d="M12.5352 95.5762C12.0876 95.0166 11.7518 94.5689 11.3042 94.0094L72.9695 1.45541C73.641 1.56732 74.2006 1.79115 74.8721 1.90306L12.5352 95.5762Z"
                                    fill="currentColor" />
                                <path
                                    d="M0.00101471 55.5103C0.11293 54.1673 0.224831 52.9362 0.336747 51.5932L29.6586 7.72242C30.7777 7.05093 31.8969 6.49136 33.1279 5.93178L0.00101471 55.5103Z"
                                    fill="currentColor" />
                                <path
                                    d="M26.1887 108.334C25.9649 108.223 25.7411 107.999 25.5172 107.887L91.2115 9.40136C91.4353 9.51328 91.6592 9.7371 91.883 9.84901C92.2188 10.0728 92.4426 10.2967 92.7783 10.4086L27.084 108.894C26.8602 108.67 26.5245 108.558 26.1887 108.334Z"
                                    fill="currentColor" />
                                <path
                                    d="M114.042 81.0269C112.587 84.7201 110.685 88.4133 108.334 91.8827C105.984 95.3521 103.41 98.4857 100.5 101.396L114.042 81.0269Z"
                                    fill="currentColor" />
                                <path
                                    d="M0.335842 66.7012C0.223927 65.6939 0.112026 64.7986 0.000110881 63.7914L40.7373 2.79753C41.6326 2.46179 42.6398 2.23796 43.5352 2.01413L0.335842 66.7012Z"
                                    fill="currentColor" />
                                <path
                                    d="M2.23929 75.6538C2.01546 74.8704 1.79162 74.087 1.56779 73.3036L50.0271 0.558655C50.8105 0.446747 51.7059 0.334824 52.4893 0.222908L2.23929 75.6538Z"
                                    fill="currentColor" />
                                <path
                                    d="M32.793 112.139C32.2335 111.915 31.6739 111.58 31.1143 111.244L96.4728 13.206C96.9205 13.6537 97.4801 13.9894 97.9277 14.4371L32.793 112.139Z"
                                    fill="currentColor" />
                                <path
                                    d="M77.7822 115.161C76.8868 115.497 75.8796 115.72 74.9843 116.056L117.848 51.8168C117.96 52.824 118.072 53.7193 118.184 54.7266L77.7822 115.161Z"
                                    fill="currentColor" />
                                <path
                                    d="M68.493 117.512C67.7096 117.624 66.8143 117.736 66.0309 117.848L116.057 42.8644C116.281 43.6478 116.505 44.4312 116.729 45.3265L68.493 117.512Z"
                                    fill="currentColor" />
                                <path
                                    d="M60.0992 118.294C59.3158 118.294 58.6443 118.294 57.8609 118.294L113.259 35.2533C113.595 35.9248 113.819 36.5963 114.154 37.2678L60.0992 118.294Z"
                                    fill="currentColor" />
                                <path
                                    d="M21.8245 105.087C21.3768 104.64 20.8172 104.304 20.3696 103.856L85.6162 6.15427C86.1758 6.37809 86.7354 6.71384 87.2949 7.04959L21.8245 105.087Z"
                                    fill="currentColor" />
                                <path
                                    d="M89.0856 110.124C87.9665 110.795 86.7354 111.467 85.6162 112.026L118.184 63.1194C118.072 64.4624 117.96 65.8054 117.736 67.0364L89.0856 110.124Z"
                                    fill="currentColor" />
                                <path
                                    d="M3.69339 38.2759C5.2602 34.135 7.27468 30.1061 9.84873 26.189C12.4228 22.3839 15.3326 18.9145 18.5781 15.8928L3.69339 38.2759Z"
                                    fill="currentColor" />
                                <path
                                    d="M52.49 117.848C51.8185 117.736 51.147 117.736 50.4755 117.624L109.791 28.5392C110.126 29.0988 110.462 29.7703 110.798 30.3299L52.49 117.848Z"
                                    fill="currentColor" />
                                <path
                                    d="M38.9475 114.712C38.388 114.489 37.7165 114.265 37.1569 114.041L101.396 17.6818C101.844 18.1295 102.292 18.5771 102.739 19.0248L38.9475 114.712Z"
                                    fill="currentColor" />
                                <path
                                    d="M45.4392 116.728C44.7677 116.616 44.2081 116.392 43.5366 116.28L105.873 22.8306C106.321 23.3902 106.657 23.8378 107.105 24.3974L45.4392 116.728Z"
                                    fill="currentColor" />
                            </svg>
                            <svg class="shape shape-2 text-primary" width="100" height="100"
                                viewBox="0 0 119 119" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.50598 89.8686C8.17023 89.3091 7.83449 88.6376 7.49875 88.078L66.0305 0.336418C66.7019 0.448334 67.3734 0.560249 68.0449 0.560249L8.50598 89.8686Z"
                                    fill="currentColor" />
                                <path
                                    d="M5.03787 83.2646C4.70213 82.5932 4.47829 81.9217 4.14255 81.2502L58.3096 -0.00032826C59.093 -0.000328191 59.7645 -0.000328132 60.5479 -0.000328064L5.03787 83.2646Z"
                                    fill="currentColor" />
                                <path
                                    d="M16.9007 100.613C16.453 100.165 16.0053 99.7175 15.5577 99.2698L79.4613 3.47031C80.0209 3.69414 80.6924 3.91795 81.252 4.14178L16.9007 100.613Z"
                                    fill="currentColor" />
                                <path
                                    d="M12.5352 95.5762C12.0876 95.0166 11.7518 94.5689 11.3042 94.0094L72.9695 1.45541C73.641 1.56732 74.2006 1.79115 74.8721 1.90306L12.5352 95.5762Z"
                                    fill="currentColor" />
                                <path
                                    d="M0.00101471 55.5103C0.11293 54.1673 0.224831 52.9362 0.336747 51.5932L29.6586 7.72242C30.7777 7.05093 31.8969 6.49136 33.1279 5.93178L0.00101471 55.5103Z"
                                    fill="currentColor" />
                                <path
                                    d="M26.1887 108.334C25.9649 108.223 25.7411 107.999 25.5172 107.887L91.2115 9.40136C91.4353 9.51328 91.6592 9.7371 91.883 9.84901C92.2188 10.0728 92.4426 10.2967 92.7783 10.4086L27.084 108.894C26.8602 108.67 26.5245 108.558 26.1887 108.334Z"
                                    fill="currentColor" />
                                <path
                                    d="M114.042 81.0269C112.587 84.7201 110.685 88.4133 108.334 91.8827C105.984 95.3521 103.41 98.4857 100.5 101.396L114.042 81.0269Z"
                                    fill="currentColor" />
                                <path
                                    d="M0.335842 66.7012C0.223927 65.6939 0.112026 64.7986 0.000110881 63.7914L40.7373 2.79753C41.6326 2.46179 42.6398 2.23796 43.5352 2.01413L0.335842 66.7012Z"
                                    fill="currentColor" />
                                <path
                                    d="M2.23929 75.6538C2.01546 74.8704 1.79162 74.087 1.56779 73.3036L50.0271 0.558655C50.8105 0.446747 51.7059 0.334824 52.4893 0.222908L2.23929 75.6538Z"
                                    fill="currentColor" />
                                <path
                                    d="M32.793 112.139C32.2335 111.915 31.6739 111.58 31.1143 111.244L96.4728 13.206C96.9205 13.6537 97.4801 13.9894 97.9277 14.4371L32.793 112.139Z"
                                    fill="currentColor" />
                                <path
                                    d="M77.7822 115.161C76.8868 115.497 75.8796 115.72 74.9843 116.056L117.848 51.8168C117.96 52.824 118.072 53.7193 118.184 54.7266L77.7822 115.161Z"
                                    fill="currentColor" />
                                <path
                                    d="M68.493 117.512C67.7096 117.624 66.8143 117.736 66.0309 117.848L116.057 42.8644C116.281 43.6478 116.505 44.4312 116.729 45.3265L68.493 117.512Z"
                                    fill="currentColor" />
                                <path
                                    d="M60.0992 118.294C59.3158 118.294 58.6443 118.294 57.8609 118.294L113.259 35.2533C113.595 35.9248 113.819 36.5963 114.154 37.2678L60.0992 118.294Z"
                                    fill="currentColor" />
                                <path
                                    d="M21.8245 105.087C21.3768 104.64 20.8172 104.304 20.3696 103.856L85.6162 6.15427C86.1758 6.37809 86.7354 6.71384 87.2949 7.04959L21.8245 105.087Z"
                                    fill="currentColor" />
                                <path
                                    d="M89.0856 110.124C87.9665 110.795 86.7354 111.467 85.6162 112.026L118.184 63.1194C118.072 64.4624 117.96 65.8054 117.736 67.0364L89.0856 110.124Z"
                                    fill="currentColor" />
                                <path
                                    d="M3.69339 38.2759C5.2602 34.135 7.27468 30.1061 9.84873 26.189C12.4228 22.3839 15.3326 18.9145 18.5781 15.8928L3.69339 38.2759Z"
                                    fill="currentColor" />
                                <path
                                    d="M52.49 117.848C51.8185 117.736 51.147 117.736 50.4755 117.624L109.791 28.5392C110.126 29.0988 110.462 29.7703 110.798 30.3299L52.49 117.848Z"
                                    fill="currentColor" />
                                <path
                                    d="M38.9475 114.712C38.388 114.489 37.7165 114.265 37.1569 114.041L101.396 17.6818C101.844 18.1295 102.292 18.5771 102.739 19.0248L38.9475 114.712Z"
                                    fill="currentColor" />
                                <path
                                    d="M45.4392 116.728C44.7677 116.616 44.2081 116.392 43.5366 116.28L105.873 22.8306C106.321 23.3902 106.657 23.8378 107.105 24.3974L45.4392 116.728Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="section-title ps-0 ps-lg-5">
                        <p class="text-primary text-uppercase fw-bold mb-0">Penjelasan</p>
                        <h2 class="h1">Filosofi Logo MPP Balikpapan</h2>
                        <div class="content">
                            <img class="img-fluid mb-3 mt-4" width="250" src="{{$tentang->filosofi_foto}}" alt="Wallet">
                            <p class="text-capitalize">
                                {{$tentang->filosofi}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section py-5">
        <div class="container">
            <div class="section-title text-center mb-2">
                <p class="text-primary text-uppercase fw-bold mb-0">Inovasi MPP</p>
                <h1>{{$tentang->inovasi_judul}}</h1>
                <p class="mb-2">{{$tentang->inovasi_detail}}</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-9">
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                        <iframe src="{{$tentang->inovasi_video}}"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;"
                            allowfullscreen title="YouTube Video"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
