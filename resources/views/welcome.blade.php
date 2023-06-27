<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
  <meta charset="utf-8">
  <title>Home | Mal Pelayanan Publik Kota Balikpapan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
  <meta name="description" content="This is meta description">
  <meta name="author" content="Themefisher">
  <link rel="shortcut icon" href="tlandingpage/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="tlandingpage/images/favicon.ico" type="image/x-icon">

  <!-- # Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- # CSS Plugins -->
  <link rel="stylesheet" href="{{asset('tlandingpage/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('tlandingpage/plugins/font-awesome/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('tlandingpage/plugins/font-awesome/brands.css')}}">
  <link rel="stylesheet" href="{{asset('tlandingpage/plugins/font-awesome/solid.css')}}">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- # Main Style Sheet -->
  <link rel="stylesheet" href="{{asset('tlandingpage/css/style.css')}}">
</head>

<body>

  <!-- navigation -->
  <header class="navigation bg-tertiary">
    <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{asset('tlandingpage/images/logo.png')}}" alt="Wallet">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
            class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item"> <a class="nav-link" href="index.html">Beranda</a>
            </li>
            <li class="nav-item "> <a class="nav-link" href="about.html">Tentang</a>
            </li>
            <li class="nav-item "> <a class="nav-link" href="blog.html">Berita</a>
            </li>
            {{-- <li class="nav-item "> <a class="nav-link" href="#layanan-mpp">Layanan</a> --}}
            </li>
            <li class="nav-item "> <a class="nav-link" href="#kontak-mpp">Kontak</a>
            </li>
            <!-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lainnya</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item " href="blog.html">Blog</a>
							</li>
							<li><a class="dropdown-item " href="blog-details.html">Blog Details</a>
							</li>
							<li><a class="dropdown-item ">Service Details</a>
							</li>
							<li><a class="dropdown-item " href="faq.html">FAQ&#39;s</a>
							</li>
							<li><a class="dropdown-item " href="legal.html">Legal</a>
							</li>
							<li><a class="dropdown-item " href="terms.html">Terms &amp; Condition</a>
							</li>
							<li><a class="dropdown-item " href="privacy-policy.html">Privacy &amp; Policy</a>
							</li>
						</ul>
					</li> -->
          </ul>
          <!-- account btn -->
          <a href="#!" class="btn btn-outline-primary">Masuk</a>
          <a href="#!" class="btn btn-primary ms-2 ms-lg-3">Daftar</a>
        </div>
      </div>
    </nav>
  </header>
  <!-- /navigation -->

  <div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h4 class="modal-title" id="exampleModalLabel">How much do you need?</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="#!" method="post">
            <div class="row">
              <div class="col-lg-6 mb-4 pb-2">
                <div class="form-group">
                  <label for="loan_amount" class="form-label">Amount</label>
                  <input type="number" class="form-control shadow-none" id="loan_amount" placeholder="ex: 25000">
                </div>
              </div>
              <div class="col-lg-6 mb-4 pb-2">
                <div class="form-group">
                  <label for="loan_how_long_for" class="form-label">How long for?</label>
                  <input type="number" class="form-control shadow-none" id="loan_how_long_for" placeholder="ex: 12">
                </div>
              </div>
              <div class="col-lg-12 mb-4 pb-2">
                <div class="form-group">
                  <label for="loan_repayment" class="form-label">Repayment</label>
                  <input type="number" class="form-control shadow-none" id="loan_repayment" disabled>
                </div>
              </div>
              <div class="col-lg-6 mb-4 pb-2">
                <div class="form-group">
                  <label for="loan_full_name" class="form-label">Full Name</label>
                  <input type="text" class="form-control shadow-none" id="loan_full_name">
                </div>
              </div>
              <div class="col-lg-6 mb-4 pb-2">
                <div class="form-group">
                  <label for="loan_email_address" class="form-label">Email address</label>
                  <input type="email" class="form-control shadow-none" id="loan_email_address">
                </div>
              </div>
              <div class="col-lg-12">
                <button type="submit" class="btn btn-primary w-100">Get Your Loan Now</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="modallayanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="section-title text-left mb-0 pb-2">
                <p class="text-primary text-uppercase fw-bold mb-3">Layanan</p>
                <h4>BPJS KESEHATAN</h4>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="accordion shadow rounded py-5 px-0 px-lg-4 bg-white position-relative" id="accordionFAQ">
                <div class="accordion-item p-1 mb-2">
                  <h2 class="accordion-header accordion-button h5 border-0 active"
                    id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
                    aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">
                    Jenis Layanan
                  </h2>
                  <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
                    class="accordion-collapse collapse border-0 show"
                    aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body py-0 content">
                      <ul>
                        <li>Pendaftaran / Registrasi Peserta Baru</li>
                        <li>Perubahan Data / Identitas Peserta</li>
                        <li>Penambahan / Pengurangan anggota keluarga</li>
                        <li>Pemberian Informasi dan Penanganan Pengaduan</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item p-1 mb-2">
                  <h2 class="accordion-header accordion-button h5 border-0 "
                    id="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" aria-expanded="false"
                    aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1">Persyaratan
                  </h2>
                  <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1"
                    class="accordion-collapse collapse border-0 "
                    aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body py-0 content">Peraturan Menteri PANRB Nomor 23 Tahun 2017 tentang
                      Penyelenggaraan Mal Pelayanan Publik.</div>
                  </div>
                </div>
                <div class="accordion-item p-1 mb-2">
                  <h2 class="accordion-header accordion-button h5 border-0 "
                    id="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd" aria-expanded="false"
                    aria-controls="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd">Sistem, Mekanisme, dan Prosedur
                  </h2>
                  <div id="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd"
                    class="accordion-collapse collapse border-0 "
                    aria-labelledby="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body py-0 content">Untuk meningkatkan kualitas pelayanan publik dan
                      mengintegrasikan berbagai layanan meliputi Instansi Pusat, Instansi Daerah, BUMN, BUMD, Swasta dan
                      layanan pendukung lainnya dalam satu lokasi yang sama sehingga dapat memberikan pelayanan publik
                      menjadi semakin cepat, terjangkau, mudah, aman dan nyaman.</div>
                  </div>
                </div>
                <div class="accordion-item p-1 mb-2">
                  <h2 class="accordion-header accordion-button h5 border-0 "
                    id="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" aria-expanded="false"
                    aria-controls="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3">Jangka Waktu Pelayanan
                  </h2>
                  <div id="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3"
                    class="accordion-collapse collapse border-0 "
                    aria-labelledby="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body py-0 content">Biaya
                    </div>
                  </div>
                </div>
                <div class="accordion-item p-1 mb-2">
                  <h2 class="accordion-header accordion-button h5 border-0 "
                    id="heading-8fe6730e26db16f15763887c30a614caa075f518" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-8fe6730e26db16f15763887c30a614caa075f518" aria-expanded="false"
                    aria-controls="collapse-8fe6730e26db16f15763887c30a614caa075f518">Penanganan pengaduan, saran, dan
                    masukan
                  </h2>
                  <div id="collapse-8fe6730e26db16f15763887c30a614caa075f518"
                    class="accordion-collapse collapse border-0 "
                    aria-labelledby="heading-8fe6730e26db16f15763887c30a614caa075f518" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body py-0 content">Terletak di Dinas Penanaman Modal dan Pelayanan Terpadu
                      Satu
                      Pintu (DPMPTSP) Kota Balikpapan yang beralamat di Jl. Ruhui Rahayu 1 No.9 Sepinggan Baru,
                      Balikpapan
                      Selatan, Kota Balikpapan</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <section class="banner bg-tertiary position-relative overflow-hidden pt-5 pb-0">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-12 mb-5 mb-3">
        <div class="text-center">
          <p class="text-primary text-uppercase fw-bold mb-2 fs-3">ONE STOP SERVICE AREA</p>
          <h1 class="text-capitalize mb-2"><span class="text-uppercase">Mal Pelayanan Publik</span><br><span
              class="fs-1">Kota Balikpapan</span></h1>
          <p class="fs-5 mb-4">Dapatkan berbagai macam pelayanan publik dinas, kantor, instansi secara cepat dan mudah
            hanya dalam 1 tempat</p>
          <!-- <a type="button"
          class="btn btn-lg btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#applyLoan">Ambil Antrian<span style="font-size: 14px;" class="ms-2 fas fa-arrow-right"></span>
        </a> -->
        </div>
      </div>
      <div class="col-lg-12" style="position: relative;">
        <img src="{{asset('tlandingpage/images/rahmad.png')}}"
          style="width: 320px; position: absolute; left: 0; bottom: 0;z-index: 99!important;">
        <img src="{{asset('tlandingpage/images/budi.png')}}" style="width: 320px; position: absolute; right: 0; bottom: 0;z-index: 99!important;">
        <div class="text-center">
          <img loading="lazy" decoding="async" src="{{asset('tlandingpage/images/mpp2.png')}}" alt="banner image" width="80%">
        </div>
      </div>
    </div>
    <div class="has-shapes">
      <svg class="shape shape-left text-light" viewBox="0 0 192 752" fill="none" xmlns="http://www.w3.org/2000/svg">
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
      <svg class="shape shape-right text-light" viewBox="0 0 731 746" fill="none" xmlns="http://www.w3.org/2000/svg">
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

  <section class="section py-0 mb-5 rounded-lg" style="position: relative; top: -70px; z-index: 99;">
    <div class="container rounded-lg">
      <div class="row">
        <div class="col-9">
          <div class="bg-white rounded-lg">
            <nav>
              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <button class="nav-link fs-4 active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                  type="button" role="tab" aria-controls="nav-home" aria-selected="true">Cek Antrian</button>
                <button class="nav-link fs-4" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                  type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Ambil Antrian</button>
              </div>
            </nav>
            <div class="tab-content px-5 py-4" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <label for="inputState" class="form-label fs-5">Pilih Instansi</label>
                    <select id="inputState" class="form-select form-select-lg text-secondary">
                      <option selected>Instansi</option>
                      <option>BPJS</option>
                    </select>
                  </div>
                  <div class="col-md-4 d-flex align-items-end">
                    <button type="button" class="btn btn-primary w-100">CEK ANTRIAN LAYANAN</button>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="notices info text-center">
                  <p class="mb-0 fs-4 fw-bold text-warning text-uppercase">Maaf, Anda Belum Login</p>
                  <p class="fs-6">Untuk mengakses ambil antrian online anda harus masuk akun terlebih dahulu </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3 bg-primary rounded">
          <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
            <p class="h4 text-white fw-semibold text-uppercase mb-0">Nilai SKM</p>
            <p class="display-2 fw-bold text-white mb-0">{{$skm->nilai}}</p>
            <p class="h5 text-white fw-normal mb-0 text-lowercase">( Sangat Baik )</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section py-0" style="position: relative; top: -50px; z-index: 99;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <a href="https://s.id/siapditempa-android">
            <div class="bg-white difference-of-us-item p-3 rounded mr-0 me-lg-4">
              <div>
                <div class="text-center">
                  <h4 class="mb-1">ANTRIAN ONLINE</h4>
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
                  <h4 class="mb-1">TRACKING LAYANAN</h4>
                  <p class="text-secondary">Ketahui status layanan/permohonan</p>
                  <button class="btn btn-danger w-100"> KUNJUNGI</button>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="https://skm-mpp.balikpapan.go.id">
            <div class="bg-white difference-of-us-item p-3 rounded mr-0 me-lg-4">
              <div>
                <div class="text-center">
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




  <section class="section">
    <div class="container">
      <div class="row justify-content-around align-items-center">
        <div class="col-lg-6">
          <div class="section-title">
            <p class="text-primary text-uppercase fw-bold mb-3">Tentang Mal Pelayanan Publik Balikpapan</p>
            <h1>Berbagai Pelayanan Dalam 1 Tempat</h1>
            <p>
              MPP dirancang oleh KEMEPAN RB sebagai bagian dari perbaikan menyeluruh dan transformasi tata kelola
              pelayanan publik. Menggabungkan berbagai jenis pelayanan pada satu tempat, penyederhaan dan prosedur serta
              integrasi pelayanan pada Mal Pelayanan Publik akan memudahkan akses masyarakat dalam mendapat berbagai
              jenis pelayanan, serta meningkatkan kepercayaan masyarakat kepada penyelenggara pelayanan publik.
            </p>
            <div class="content">
              <ul>
                <li>Transparansi Pelayanan</li>
                <li>Efisiensi Pelayanan</li>
                <li>Kenyamanan Pelayanan</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0">
          <div class="has-video-popup position-relative">
            <img loading="lazy" decoding="async" src="{{asset('tlandingpage/images/pelayanan.jpg')}}" alt="video thumb" class="rounded-lg w-100"
              style="object-fit: cover; height: 400px; object-position: left;">
            <button type="button" class="video-play-btn border-0 bg-transparent" data-bs-toggle="modal"
              data-src="https://www.youtube.com/embed/9rQcOeBRQkI?VQ=HD720" data-bs-target="#videoModal">
              <svg class="text-primary" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="45" cy="45" r="45" fill="currentColor" fill-opacity="0.4" />
                <circle cx="44.9995" cy="45" r="37.437" fill="currentColor" />
                <path d="M58.2354 44.9999L38.3824 56.462L38.3824 33.5378L58.2354 44.9999Z" fill="white" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade rounded overflow-hidden" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content border-0">
        <div class="text-center p-3">
          <button type="button" class="bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close"><i
              class="fas fa-times"></i>
          </button>
        </div>
        <div class="modal-body p-0">
          <div class="ratio ratio-16x9 rounded-bottom overflow-hidden">
            <iframe src="" id="showVideo" allowscriptaccess="always" allow="autoplay" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="homepage_tab position-relative">
    <div class="section container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <p class="text-primary text-uppercase fw-bold mb-3">Fasilitas Mal Pelayanan Publik Balikpapan</p>
            <h1>Beberapa Fasilitas yang Tersedia</h1>
          </div>
        </div>
        <div class="col-lg-11">
          <ul class="payment_info_tab nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
            <li class="nav-item m-2" role="presentation"> <a
                class="nav-link btn btn-outline-primary effect-none text-dark active"
                id="pills-how-much-can-i-recive-tab" data-bs-toggle="pill" href="#tab-ruangbermain" role="tab"
                aria-controls="tab-ruangbermain" aria-selected="true">Ruang Bermain Anak</a>
            </li>
            <li class="nav-item m-2" role="presentation"> <a
                class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-much-does-it-costs-tab"
                data-bs-toggle="pill" href="#tab-ruangmenyusui" role="tab" aria-controls="tab-ruangmenyusui"
                aria-selected="true">Ruang Menyusui</a>
            </li>
            <li class="nav-item m-2" role="presentation"> <a
                class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-do-i-repay-tab"
                data-bs-toggle="pill" href="#tab-pedulidisabilitas" role="tab" aria-controls="tab-pedulidisabilitas"
                aria-selected="true">Peduli Disabilitas</a>
            </li>
            <li class="nav-item m-2" role="presentation"> <a
                class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-do-i-repay-tab"
                data-bs-toggle="pill" href="#tab-perbankan" role="tab" aria-controls="tab-perbankan"
                aria-selected="true">Perbankan</a>
            </li>
            <li class="nav-item m-2" role="presentation"> <a
                class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-do-i-repay-tab"
                data-bs-toggle="pill" href="#tab-layananmandiri" role="tab" aria-controls="tab-layananmandiri"
                aria-selected="true">Layanan Mandiri</a>
            </li>
            <li class="nav-item m-2" role="presentation"> <a
                class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-do-i-repay-tab"
                data-bs-toggle="pill" href="#tab-perpustakaan" role="tab" aria-controls="tab-perpustakaan"
                aria-selected="true">Perpustakaan</a>
            </li>
            <li class="nav-item m-2" role="presentation"> <a
                class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-do-i-repay-tab"
                data-bs-toggle="pill" href="#tab-koperasi" role="tab" aria-controls="tab-koperasi"
                aria-selected="true">Koperasi</a>
            </li>
            <li class="nav-item m-2" role="presentation"> <a
                class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-do-i-repay-tab"
                data-bs-toggle="pill" href="#tab-ruangkesehatan" role="tab" aria-controls="tab-ruangkesehatan"
                aria-selected="true">Ruang Kesehatan</a>
            </li>
            <li class="nav-item m-2" role="presentation"> <a
                class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-do-i-repay-tab"
                data-bs-toggle="pill" href="#tab-virtualmpp" role="tab" aria-controls="tab-virtualmpp"
                aria-selected="true">Virtual MPP</a>
            </li>
            <li class="nav-item m-2" role="presentation"> <a
                class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-do-i-repay-tab"
                data-bs-toggle="pill" href="#tab-balainikah" role="tab" aria-controls="tab-balainikah"
                aria-selected="true">Balai Nikah</a>
            </li>
            <li class="nav-item m-2" role="presentation"> <a
                class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-do-i-repay-tab"
                data-bs-toggle="pill" href="#tab-layananinformasi" role="tab" aria-controls="tab-layananinformasi"
                aria-selected="true">Layanan Informasi</a>
            </li>
          </ul>
          <div class="rounded shadow bg-white p-5 tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="tab-ruangbermain" role="tabpanel"
              aria-labelledby="pills-how-much-can-i-recive-tab">
              <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-0">
                  <div class="content-block">
                    <h3 class="mb-4">Ruang Bermain Anak</h3>
                    <div class="content">
                      <p>Fasilitas bagi masyarakat khususnya yang mengajak anak-anak kecil ketika mengurus administrasi
                        atau pelayanan lain, untuk dapat memanfaatkan ruang bermain sembari menunggu mendapatkan
                        pelayanan</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                  <div class="image-block text-center">
                    <img loading="lazy" decoding="async" src="{{asset('tlandingpage/images/fasilitas/ruangbermain.jpg')}}"
                      alt="How Much Can I Recive?" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="tab-ruangmenyusui" role="tabpanel"
              aria-labelledby="pills-how-much-does-it-costs-tab">
              <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-0">
                  <div class="content-block">
                    <h3 class="mb-4">Ruang Menyusui</h3>
                    <div class="content">
                      <p>Mal Pelayanan Publik Kota Balikpapan menyediakan Ruang Menyusui yang cukup nyaman bagi para ibu
                        yang membutuhkan area privasi untuk memberikan asi kepada balitanya. Dalam ruangan tersebut
                        terdapat ruangan kecil dan tertutup</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                  <div class="image-block text-center">
                    <img loading="lazy" decoding="async" src="{{asset('tlandingpage/images/fasilitas/ruangmenyusui.jpg')}}"
                      alt="How Much Does It Costs?" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="tab-pedulidisabilitas" role="tabpanel"
              aria-labelledby="pills-how-much-does-it-costs-tab">
              <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-0">
                  <div class="content-block">
                    <h3 class="mb-4">Peduli Disabilitas</h3>
                    <div class="content">
                      <p>Mal Pelayanan Publik Kota Balikpapan menyediakan fasilitas untuk penyandang disabilitas guna
                        memberikan kemudahan dan kenyamanan masayarakat dalam berurusan di MPP kota Balikpapan ini.
                        Fasilitas ini juga disediakan untuk masayarakat yang sedang sakit atau sudah lansia.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                  <div class="image-block text-center">
                    <img loading="lazy" decoding="async" src="{{asset('tlandingpage/images/fasilitas/pedulidisabilitas.jpg')}}"
                      alt="How Much Does It Costs?" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="tab-perbankan" role="tabpanel"
              aria-labelledby="pills-how-much-does-it-costs-tab">
              <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-0">
                  <div class="content-block">
                    <h3 class="mb-4">Perbankan</h3>
                    <div class="content">
                      <p>Mal Pelayanan Publik Kota Balikpapan menyediakan fasilitas perbankan untuk memudahkan masyakat
                        menyelesaikan proses pembanyaran, baik itu untuk pembayaran retribusi, pajak ataupun sekedar
                        melakukan transaksi perbankan lainnya.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                  <div class="image-block text-center">
                    <img loading="lazy" decoding="async" src="{{asset('tlandingpage/images/fasilitas/perbankan.jpg')}}"
                      alt="How Much Does It Costs?" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="tab-layananmandiri" role="tabpanel"
              aria-labelledby="pills-how-much-does-it-costs-tab">
              <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-0">
                  <div class="content-block">
                    <h3 class="mb-4">Layanan Mandiri</h3>
                    <div class="content">
                      <p>Mal Pelayanan Publik Kota Balikpapan menyediakan fasilitas Layanan Mandiri, dimana masayarakat
                        dapat menggunakan perangkat komputer yang disediakan untuk mengakses atau melakukan permohonan
                        perizinan secara online.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                  <div class="image-block text-center">
                    <img loading="lazy" decoding="async" src="{{asset('tlandingpage/images/fasilitas/layananmandiri.jpg')}}"
                      alt="How Much Does It Costs?" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="tab-perpustakaan" role="tabpanel"
              aria-labelledby="pills-how-much-does-it-costs-tab">
              <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-0">
                  <div class="content-block">
                    <h3 class="mb-4">Perpustakaan</h3>
                    <div class="content">
                      <p>Mal Pelayanan Publik Kota Balikpapan menyediakan fasilitas perpustakaan/Library dan digital
                        library untuk pengunjung MPP, fasilitas ini diharapkan dapat menghilangkan kebosanan ketika
                        menunggu antrian pelayanan di MPP Kota Balikpapan.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                  <div class="image-block text-center">
                    <img loading="lazy" decoding="async" src="{{asset('tlandingpage/images/fasilitas/perpustakaan.jpg')}}"
                      alt="How Much Does It Costs?" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="tab-koperasi" role="tabpanel"
              aria-labelledby="pills-how-much-does-it-costs-tab">
              <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-0">
                  <div class="content-block">
                    <h3 class="mb-4">Koperasi</h3>
                    <div class="content">
                      <p>Mal Pelayanan Publik Kota Balikpapan menyediakan fasilitas Koperasi untuk pengunjung MPP kota
                        Balikpapan, fasilitas ini diharapkan dapat menyediakan kebutuhan pengunjung dalam pengurusan di
                        pelayanan di MPP Kota Balikpapan.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                  <div class="image-block text-center">
                    <img loading="lazy" decoding="async" src="{{asset('tlandingpage/images/fasilitas/koperasi.png')}}"
                      alt="How Much Does It Costs?" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="tab-ruangkesehatan" role="tabpanel"
              aria-labelledby="pills-how-much-does-it-costs-tab">
              <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-0">
                  <div class="content-block">
                    <h3 class="mb-4">Ruang Kesehatan</h3>
                    <div class="content">
                      <p>Mal Pelayanan Publik Kota Balikpapan menyediakan fasilitas klinik kesehatan untuk pengunjung.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                  <div class="image-block text-center">
                    <img loading="lazy" decoding="async" src="{{asset('tlandingpage/images/fasilitas/ruangkesehatan.JPG')}}"
                      alt="How Much Does It Costs?" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="tab-virtualmpp" role="tabpanel"
              aria-labelledby="pills-how-much-does-it-costs-tab">
              <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-0">
                  <div class="content-block">
                    <h3 class="mb-4">Virtual MPP</h3>
                    <div class="content">
                      <p>Mal Pelayanan Publik Kota Balikpapan menyediakan Fasilitas Virtual yang dimana
                        masyarakat/pemohon dapat melakukan pelayanan secara online tanpa harus datang ke gedung Mal
                        Pelayanan Publik</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                  <div class="image-block text-center">
                    <img loading="lazy" decoding="async" src="tlandingpage/images/fasilitas/virtualmpp.jpeg"
                      alt="How Much Does It Costs?" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="tab-balainikah" role="tabpanel"
              aria-labelledby="pills-how-much-does-it-costs-tab">
              <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-0">
                  <div class="content-block">
                    <h3 class="mb-4">Balai Nikah</h3>
                    <div class="content">
                      <p>Mal Pelayanan Publik Kota Balikpapan menyediakan fasilitas Balai Nikah yang juga termasuk dalam
                        layanan Kementerian Agama Balikpapan sehingga masyarakat dapat menyelenggarakan akad nikah
                        gratis di Mal Pelayanan Publik Kota Balikpapan</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                  <div class="image-block text-center">
                    <img loading="lazy" decoding="async" src="tlandingpage/images/fasilitas/balainikah.jpg"
                      alt="How Much Does It Costs?" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="tab-layananinformasi" role="tabpanel"
              aria-labelledby="pills-how-much-does-it-costs-tab">
              <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-0">
                  <div class="content-block">
                    <h3 class="mb-4">Layanan Informasi</h3>
                    <div class="content">
                      <p>Mal Pelayanan Publik Kota Balikpapan menyediakan fasilitas layanan informasi yang berisi
                        gerai-gerai pelayanan yang tersedia beserta informasi jenis layanan dan jadwal pelayanannya
                        serta dokumen-dokumen laporan oleh DPMPTSP Kota Balikpapan</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                  <div class="image-block text-center">
                    <img loading="lazy" decoding="async" src="tlandingpage/images/fasilitas/layananinformasi.jpg"
                      alt="How Much Does It Costs?" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="has-shapes">
        <svg class="shape shape-left text-light" width="290" height="709" viewBox="0 0 290 709" fill="none"
          xmlns="http://www.w3.org/2000/svg">
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
        <svg class="shape shape-right text-light" width="474" height="511" viewBox="0 0 474 511" fill="none"
          xmlns="http://www.w3.org/2000/svg">
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

  <section class="section" id="layanan-mpp">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9">
          <div class="section-title text-center">
            <p class="text-primary text-uppercase fw-bold mb-3">Layanan MPP Balikpapan</p>
            <h1>Loket Pelayanan MPP Balikpapan</h1>
            <p>Tedapat 25 Loket Pelayanan Instansi, Kantor, dan Dinas</p>
          </div>
        </div>
      </div>
      <div class="slick-layanan">
        <div>
          <div class="row">
            <div class="col-md-4 service-item">
              <a href="#" data-bs-toggle="modal" data-bs-target="#modallayanan" class="text-black">
                <div class="block">
                  <img src="tlandingpage/images/logo1.png" class="img-fluid mb-1" width="75px">
                  <h3 class="mb-3 service-title">BPJS Kesehatan</h3>
                  <div class="content">
                    <p class="mb-1">Lantai 3 Loket 2</p>
                    <p class="mb-0">Jenis Layanan</p>
                    <ul>
                      <li class="fs-6">Layanan Administrasi Kepesertaaan JKN-KIS</li>
                      <li class="fs-6">Layanan Informasi dan Pengaduan terkait JKN-KIS</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 service-item">
              <a class="text-black">
                <div class="block">
                  <img src="tlandingpage/images/logo2.png" class="img-fluid mb-1" width="75px">
                  <h3 class="mb-3 service-title">IMIGRASI</h3>
                  <div class="content">
                    <p class="mb-1">Lantai 2 Loket 21</p>
                    <p class="mb-0">Jenis Layanan</p>
                    <ul>
                      <li class="fs-6">Layanan Paspor Baru</li>
                      <li class="fs-6">Layanan Pergantian/Habis Berlaku Paspor</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 service-item">
              <a class="text-black">
                <div class="block">
                  <img src="tlandingpage/images/logo3.png" class="img-fluid mb-1" width="75px">
                  <h3 class="mb-3 service-title">BNN</h3>
                  <div class="content">
                    <p class="mb-1">Lantai 3 Loket 2</p>
                    <p class="mb-0">Jenis Layanan</p>
                    <ul>
                      <li class="fs-6">Layanan Informasi Tes Urin</li>
                      <li class="fs-6">Layanan Pelaporan Penyalahguna Narkoba</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 service-item">
              <a class="text-black">
                <div class="block">
                  <img src="tlandingpage/images/logo4.png" class="img-fluid mb-1" width="75px">
                  <h3 class="mb-3 service-title">Bank Kaltimtara</h3>
                  <div class="content">
                    <p class="mb-1">Lantai 1 Loket 7</p>
                    <p class="mb-0">Jenis Layanan</p>
                    <ul>
                      <li class="fs-6">Layanan Perbankan</li>
                      <li class="fs-6">Layanan Pembuatan Kartu ATM</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 service-item">
              <a class="text-black">
                <div class="block">
                  <img src="tlandingpage/images/logo5.png" class="img-fluid mb-1" width="75px">
                  <h3 class="mb-3 service-title">PLN</h3>
                  <div class="content">
                    <p class="mb-1">Lantai 2 Loket 12</p>
                    <p class="mb-0">Jenis Layanan</p>
                    <ul>
                      <li class="fs-6">Pembayaran Rekening Listrik</li>
                      <li class="fs-6">Pemasangan Baru</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 service-item">
              <a class="text-black">
                <div class="block">
                  <img src="tlandingpage/images/logo6.png" class="img-fluid mb-1" width="75px">
                  <h3 class="mb-3 service-title">Polresta</h3>
                  <div class="content">
                    <p class="mb-1">Lantai 1 Loket 9</p>
                    <p class="mb-0">Jenis Layanan</p>
                    <ul>
                      <li class="fs-6">Layanan Informasi</li>
                      <li class="fs-6">Layanan Pengaduan</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-md-4 service-item">
              <a class="text-black">
                <div class="block">
                  <img src="tlandingpage/images/logo1.png" class="img-fluid mb-1" width="75px">
                  <h3 class="mb-3 service-title">BPJS Kesehatan</h3>
                  <div class="content">
                    <p class="mb-1">Lantai 3 Loket 2</p>
                    <p class="mb-0">Jenis Layanan</p>
                    <ul>
                      <li class="fs-6">Layanan Administrasi Kepesertaaan JKN-KIS</li>
                      <li class="fs-6">Layanan Informasi dan Pengaduan terkait JKN-KIS</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 service-item">
              <a class="text-black">
                <div class="block">
                  <img src="tlandingpage/images/logo2.png" class="img-fluid mb-1" width="75px">
                  <h3 class="mb-3 service-title">IMIGRASI</h3>
                  <div class="content">
                    <p class="mb-1">Lantai 2 Loket 21</p>
                    <p class="mb-0">Jenis Layanan</p>
                    <ul>
                      <li class="fs-6">Layanan Paspor Baru</li>
                      <li class="fs-6">Layanan Pergantian/Habis Berlaku Paspor</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 service-item">
              <a class="text-black">
                <div class="block">
                  <img src="tlandingpage/images/logo3.png" class="img-fluid mb-1" width="75px">
                  <h3 class="mb-3 service-title">BNN</h3>
                  <div class="content">
                    <p class="mb-1">Lantai 3 Loket 2</p>
                    <p class="mb-0">Jenis Layanan</p>
                    <ul>
                      <li class="fs-6">Layanan Informasi Tes Urin</li>
                      <li class="fs-6">Layanan Pelaporan Penyalahguna Narkoba</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 service-item">
              <a class="text-black">
                <div class="block">
                  <img src="tlandingpage/images/logo4.png" class="img-fluid mb-1" width="75px">
                  <h3 class="mb-3 service-title">Bank Kaltimtara</h3>
                  <div class="content">
                    <p class="mb-1">Lantai 1 Loket 7</p>
                    <p class="mb-0">Jenis Layanan</p>
                    <ul>
                      <li class="fs-6">Layanan Perbankan</li>
                      <li class="fs-6">Layanan Pembuatan Kartu ATM</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 service-item">
              <a class="text-black">
                <div class="block">
                  <img src="tlandingpage/images/logo5.png" class="img-fluid mb-1" width="75px">
                  <h3 class="mb-3 service-title">PLN</h3>
                  <div class="content">
                    <p class="mb-1">Lantai 2 Loket 12</p>
                    <p class="mb-0">Jenis Layanan</p>
                    <ul>
                      <li class="fs-6">Pembayaran Rekening Listrik</li>
                      <li class="fs-6">Pemasangan Baru</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 service-item">
              <a class="text-black">
                <div class="block">
                  <img src="tlandingpage/images/logo6.png" class="img-fluid mb-1" width="75px">
                  <h3 class="mb-3 service-title">Polresta</h3>
                  <div class="content">
                    <p class="mb-1">Lantai 1 Loket 9</p>
                    <p class="mb-0">Jenis Layanan</p>
                    <ul>
                      <li class="fs-6">Layanan Informasi</li>
                      <li class="fs-6">Layanan Pengaduan</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="about-section section bg-blues position-relative overflow-hidden">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="section-title">
            <p class="text-white text-uppercase fw-bold mb-3">APLIKASI ANTRIAN MPP BALIKPAPAN</p>
            <h1 class="text-white">Ambil Antrian Kapan Saja Dimana Saja</h1>
            <a href="https://drive.google.com/file/d/1G3p897tpI5Ty_b9CRq-qfaszXriz3EDu/view" class="mt-5">
              <!-- <img src="tlandingpage/images/playstore.png" class="img-fluid" width="200px"> -->
              <button class="btn btn-lg btn-light">DOWNLOAD SEKARANG</button>
            </a>
          </div>
        </div>
        <div class="col-lg-5 text-center text-lg-end">
          <img src="tlandingpage/images/apps.png" alt="About Ourselves" class="img-fluid">
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
      <svg class="shape shape-right text-light" width="406" height="433" viewBox="0 0 406 433" fill="none"
        xmlns="http://www.w3.org/2000/svg">
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

  <section class="section loan-steps">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9">
          <div class="section-title text-center">
            <p class="text-primary text-uppercase fw-bold mb-3">Mekanisme Pelayanan</p>
            <h1>Urus Kebutuhan Dengan 5 Langkah Mudah di MPP Balikpapan</h1>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="row justify-content-center">
            <div class="step-item col">
              <div class="text-center">
                <p class="count">01</p>
                <h3 class="mb-3">Pendaftaran Online</h3>
                <p class="mb-0">Pengguna layanan melakukan pendaftaran secara daring atau online</p>
              </div>
            </div>
            <div class="step-item col">
              <div class="text-center">
                <p class="count">02</p>
                <h3 class="mb-3">Mengunjungi MPP</h3>
                <p class="mb-0">Pengguna layanan mengunjungi MPP Balikpapan menunjukkan bukti pendaftaran</p>
              </div>
            </div>
            <div class="step-item col">
              <div class="text-center">
                <p class="count">03</p>
                <h3 class="mb-3">Menuju Loket</h3>
                <p class="mb-0">Pengguna layanan menuju loket pelayanan sesuai kebutuhan dan mengisi identitas</p>
              </div>
            </div>
            <div class="step-item col">
              <div class="text-center">
                <p class="count">04</p>
                <h3 class="mb-3">Pelayanan</h3>
                <p class="mb-0">Pengguna menerima layanan dari petugas sesuai permohonan</p>
              </div>
            </div>
            <div class="step-item col">
              <div class="text-center">
                <p class="count">05</p>
                <h3 class="mb-3">Mengisi Survey</h3>
                <p class="mb-0">Pengguna layanan mengisi survey kepuasan masyarakat layanan selesai</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="beritasection">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="me-lg-4">
            <div class="row gy-5">
              <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="text-left">
                    <p class="text-primary text-uppercase fw-bold mb-3">Berita MPP Balikpapan</p>
                    <h1>Kabar terbaru saat ini</h1>
                  </div>
                  <div>
                    <a type="button" class="btn btn-primary" href="#" data-bs-toggle="modal"
                      data-bs-target="#applyLoan">Berita Lainnya<span style="font-size: 14px;"
                        class="ms-2 fas fa-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4" data-aos="fade">
                <article class="blog-post">
                  <div class="post-slider slider-sm rounded">
                    <img loading="lazy" decoding="async" src="tlandingpage/images/berita1.jpg" alt="Post Thumbnail"
                      style="height: 250px; widows: 100%; object-fit: cover;">
                  </div>
                  <div class="pt-4">
                    <p class="mb-3">14 Mar, 2020</p>
                    <h2 class="h4"><a class="text-black" href="blog-details.html">Kunjungan Ke MPP Kota Balikpapan tahun
                        2022</a></h2>
                    <p>It’s no secret that the digital industry is booming. From exciting startups to global …</p> <a
                      href="blog-details.html" class="text-primary fw-bold"
                      aria-label="Read the full article by clicking here">Read More</a>
                  </div>
                </article>
              </div>
              <div class="col-md-4" data-aos="fade">
                <article class="blog-post">
                  <div class="post-slider slider-sm rounded">
                    <img loading="lazy" decoding="async" src="tlandingpage/images/berita2.jpg" alt="Post Thumbnail"
                      style="height: 250px; widows: 100%; object-fit: cover;">
                  </div>
                  <div class="pt-4">
                    <p class="mb-3">20 Oktober, 2022</p>
                    <h2 class="h4"><a class="text-black" href="blog-details.html">Telah dilaksanakan Pernikahan di MPP
                        Balikpapan</a></h2>
                    <p>It’s no secret that the digital industry is booming. From exciting startups to global …</p> <a
                      href="blog-details.html" class="text-primary fw-bold"
                      aria-label="Read the full article by clicking here">Read More</a>
                  </div>
                </article>
              </div>
              <div class="col-md-4" data-aos="fade">
                <article class="blog-post">
                  <div class="post-slider slider-sm rounded">
                    <img loading="lazy" decoding="async" src="tlandingpage/images/berita3.jpeg" alt="Post Thumbnail" width="420"
                      height="280" style="height: 250px; widows: 100%; object-fit: cover;">
                  </div>
                  <div class="pt-4">
                    <p class="mb-3">22 September, 2022</p>
                    <h2 class="h4"><a class="text-black" href="blog-details.html">Implementasi Sistem di MPP
                        Balikpapan</a></h2>
                    <p>It’s no secret that the digital industry is booming. From exciting startups to global …</p> <a
                      href="blog-details.html" class="text-primary fw-bold"
                      aria-label="Read the full article by clicking here">Read More</a>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section testimonials overflow-hidden bg-tertiary">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-title text-center">
            <p class="text-primary text-uppercase fw-bold mb-3">TESTIMONIAL TENTang mpp balikpapan</p>
            <h1 class="mb-4">Apa kata mereka ?</h1>
            <!-- <p class="lead mb-0">Yang telah</p> -->
          </div>
        </div>
      </div>
      <div class="row position-relative">
        <div class="col-lg-4 col-md-6 pt-1">
          <div class="shadow rounded bg-white p-4 mt-4">
            <div class="content mb-3">Terima Kasih MPP Kota Balikpapan, saya tidak perlu mondar-mandir untuk mengurus
              beberapa berkas</div>
            <div class="d-block d-sm-flex align-items-center">
              <div class="mt-3 mt-sm-0">
                <h4 class="h5 mb-0">Indra Lukman</h4>
                <p class="mb-0">Wiraswasta</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pt-1">
          <div class="shadow rounded bg-white p-4 mt-4">
            <div class="content mb-3">Mau umroh jadi lebih mudah karena bisa sekalian urus paspor di gedung yang sama
              dan diwaktu yang sama</div>
            <div class="d-block d-sm-flex align-items-center">
              <div class="mt-3 mt-sm-0">
                <h4 class="h5 mb-0">Nurwahidatul</h4>
                <p class="mb-0">Ibu Rumah Tangga</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pt-1">
          <div class="shadow rounded bg-white p-4 mt-4">
            <div class="content mb-3">MPP Sangat memudahkan urusan bulanan saya seperti membayar air dan listrik di
              waktu yang sama</div>
            <div class="d-block d-sm-flex align-items-center">
              <div class="mt-3 mt-sm-0">
                <h4 class="h5 mb-0">Abdul Kadir</h4>
                <p class="mb-0">Wirausaha</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="has-shapes">
      <svg class="shape shape-left text-light" width="290" height="709" viewBox="0 0 290 709" fill="none"
        xmlns="http://www.w3.org/2000/svg">
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
      <svg class="shape shape-right text-light" width="731" height="429" viewBox="0 0 731 429" fill="none"
        xmlns="http://www.w3.org/2000/svg">
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

  <section class="section" id="kontak-mpp">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title text-center mb-5 pb-2">
            <p class="text-primary text-uppercase fw-bold mb-3">Kontak Kami</p>
            <h1>Pertanyaan-Pertanyaan terkait MPP Balikpapan</h1>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="accordion shadow rounded py-5 px-0 px-lg-4 bg-white position-relative" id="accordionFAQ">
            <div class="accordion-item p-1 mb-2">
              <h2 class="accordion-header accordion-button h5 border-0 active"
                id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
                aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">
                Apa itu Mal Pelayanan Publik ?
              </h2>
              <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
                class="accordion-collapse collapse border-0 show"
                aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" data-bs-parent="#accordionFAQ">
                <div class="accordion-body py-0 content">Mal Pelayanan Publik (MPP) adalah tempat berlangsungnya
                  kegiatan penyelenggaraan pelayanan publik atas barang, jasa dan/atau pelayanan administrasi yang
                  merupakan perluasan fungsi pelayanan terpadu daerah serta pelayanan Badan Usaha Milik Negara/ Badan
                  Usaha Milik Daerah/ Swasta dalam rangka menyediakan pelayanan yang cepat, mudah, terjangkau, aman dan
                  nyaman dengan mengintegrasikan sistem pelayanan publik dimana pelayanan satusama lain terdapat
                  keterkaitan dalam satu lokasi atau gedung tertentu yang dikombinasikandengan kegiatan jasa dan ekonomi
                  lainnya.</div>
              </div>
            </div>
            <div class="accordion-item p-1 mb-2">
              <h2 class="accordion-header accordion-button h5 border-0 "
                id="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" aria-expanded="false"
                aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1">Dasar Hukum Penyelenggaraan Mal
                Pelayanan Publik ?
              </h2>
              <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" class="accordion-collapse collapse border-0 "
                aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" data-bs-parent="#accordionFAQ">
                <div class="accordion-body py-0 content">Peraturan Menteri PANRB Nomor 23 Tahun 2017 tentang
                  Penyelenggaraan Mal Pelayanan Publik.</div>
              </div>
            </div>
            <div class="accordion-item p-1 mb-2">
              <h2 class="accordion-header accordion-button h5 border-0 "
                id="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd" aria-expanded="false"
                aria-controls="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd">Maksud Penyelenggaraan Mal Pelayanan
                Publik ?
              </h2>
              <div id="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd" class="accordion-collapse collapse border-0 "
                aria-labelledby="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd" data-bs-parent="#accordionFAQ">
                <div class="accordion-body py-0 content">Untuk meningkatkan kualitas pelayanan publik dan
                  mengintegrasikan berbagai layanan meliputi Instansi Pusat, Instansi Daerah, BUMN, BUMD, Swasta dan
                  layanan pendukung lainnya dalam satu lokasi yang sama sehingga dapat memberikan pelayanan publik
                  menjadi semakin cepat, terjangkau, mudah, aman dan nyaman.</div>
              </div>
            </div>
            <div class="accordion-item p-1 mb-2">
              <h2 class="accordion-header accordion-button h5 border-0 "
                id="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" aria-expanded="false"
                aria-controls="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3">Apa Saja Fasilitas di Mal Pelayanan
                Publik Kota Balikpapan ?
              </h2>
              <div id="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" class="accordion-collapse collapse border-0 "
                aria-labelledby="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" data-bs-parent="#accordionFAQ">
                <div class="accordion-body py-0 content">Berbagai fasilitas yang tersedia di mal pelayanan publik kota
                  balikpapan meliputi ruang bermain anak, ruang menyusui, peduli disabilitas, perbankan, layanan
                  mandiri, perpustakaan, koperasi, ruang kesehatan, virtual mpp, balai nikah, dan masih banyak lainnya
                </div>
              </div>
            </div>
            <div class="accordion-item p-1 mb-2">
              <h2 class="accordion-header accordion-button h5 border-0 "
                id="heading-8fe6730e26db16f15763887c30a614caa075f518" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-8fe6730e26db16f15763887c30a614caa075f518" aria-expanded="false"
                aria-controls="collapse-8fe6730e26db16f15763887c30a614caa075f518">Dimana Lokasi Mal Pelayanan Publik
                Kota Balikpapan berada ?
              </h2>
              <div id="collapse-8fe6730e26db16f15763887c30a614caa075f518" class="accordion-collapse collapse border-0 "
                aria-labelledby="heading-8fe6730e26db16f15763887c30a614caa075f518" data-bs-parent="#accordionFAQ">
                <div class="accordion-body py-0 content">Terletak di Dinas Penanaman Modal dan Pelayanan Terpadu Satu
                  Pintu (DPMPTSP) Kota Balikpapan yang beralamat di Jl. Ruhui Rahayu 1 No.9 Sepinggan Baru, Balikpapan
                  Selatan, Kota Balikpapan</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="shadow rounded py-5 px-4 ms-0 ms-lg-4 bg-white position-relative">
            <div class="block mx-0 mx-lg-3 mt-0">
              <h4 class="h5">Masih memiliki Pertanyaan?</h4>
              <div class="content">Tidak perlu ragu hubungi kami
                <!-- <br> <a href="tel:+3301563965">+3301563965</a> -->
                <ul>
                  <li>Customer Service 1 <br> 0815-450000-10</li>
                  <li>Customer Service 2 <br> 0815-450000-12</li>
                </ul>
              </div>
            </div>
            <div class="block mx-0 mx-lg-3 mt-4">
              <h4 class="h5">Kantor DPMPTSP Balikpan</h4>
              <div class="content">Jl Ruhui Rahayu 1.
                <br>RT.08 NO.9 Sepinggan Baru,
                <br>Balikpapan Selatan
              </div>
            </div>
            <div class="block mx-0 mx-lg-3 mt-4">
              <h4 class="h5">Jadwal Pelayanan</h4>
              <div class="content">
                <p class="mb-0">Senin-Kamis
                  <br>08.15-14.00 WITA
                </p>
                <p class="mb-0">Jum'at
                  <br>08.15-11.00 WITA
                </p>
              </div>
            </div>
            <div class="block mx-0 mx-lg-3 mt-4">
              <h4 class="h5">Pengaduan Masyarakat</h4>
              <a href="https://www.lapor.go.id/">
                <figure class="py-2">
                  <img src="https://kemensos.go.id/uploads/topics/16551961877203.png" alt="" width="80%">
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
              style="font-style: italic;">"ONE STOP SERVICE AREA"</span></p>
        </div>
      </div>
    </section>
  </div>

  <footer class="section-sm bg-tertiary">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-2 col-md-4 col-6 mb-4">
          <div class="footer-widget">
            <h5 class="mb-4 text-primary font-secondary">Link Terkait</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a>Pemkot Balikpapan</a>
              </li>
              <li class="mb-2"><a>DPMPTSP Balikpapan</a>
              </li>
              <li class="mb-2"><a>Antrian MPP</a>
              </li>
              <li class="mb-2"><a>SKM MPP</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 mb-4">
          <div class="footer-widget">
            <h5 class="mb-4 text-primary font-secondary">Informasi</h5>
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
        <div class="col-lg-2 col-md-4 col-6 mb-4">
          <div class="footer-widget">
            <h5 class="mb-4 text-primary font-secondary">Lainnya</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="contact.html">Kontak</a>
              </li>
              <li class="mb-2"><a href="faq.html">FAQ</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 newsletter-form">
          <div style="background-color: #F4F4F4; padding: 35px;">
            <h5 class="mb-4 text-primary font-secondary">Subscribe</h5>
            <div class="pe-0 pe-xl-5">
              <form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank">
                <div class="input-group mb-3">
                  <input type="text" class="form-control shadow-none bg-white border-end-0" placeholder="Email address">
                  <span class="input-group-text border-0 p-0">
                    <button class="input-group-text border-0 bg-primary" type="submit" name="subscribe"
                      aria-label="Subscribe for Newsletter"><i class="fas fa-arrow-right"></i></button>
                  </span>
                </div>
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
                </div>
              </form>
            </div>
            <!-- p class="mb-0">Lorem ipsum dolor sit amet, rdghds consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p> -->
          </div>
        </div>
      </div>
      <div class="row align-items-center mt-5 text-center text-md-start">
        <div class="col-lg-4">
          <a href="index.html">
            <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="tlandingpage/images/logo.png" alt="Wallet">
          </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
          <ul class="list-unstyled list-inline mb-0 text-lg-center">
            <li class="list-inline-item me-4"><a class="text-black" href="privacy-policy.html">Privacy Policy</a>
            </li>
            <li class="list-inline-item me-4"><a class="text-black" href="terms.html">Terms &amp; Conditions</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 text-md-end mt-4 mt-md-0">
          <ul class="list-unstyled list-inline mb-0 social-icons">
            <li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black"
                href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="list-inline-item me-3"><a title="Explorer Twitter Profile" class="text-black"
                href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black"
                href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <!-- # JS Plugins -->
  <script src="{{asset('tlandingpage/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('plugins/slick/slick.min.js')}}"></script>
  <script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
    integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{asset('plugins/scrollmenu/scrollmenu.min.js')}}"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- Main Script -->
  <script src="{{asset('tlandingpage/js/script.js')}}"></script>

</body>

</html>