@extends('layouts.header')
    <section id="info" class="border-separation pb-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 display-flex nav-news font-size-14">
                    <img src="public/assets/images/icon_tag.png" class="mr-3" />
                    <div class="nav_info">Gratis Ebook 9 Cara Menggunakan Domain [x] </div>
                </div>    
                <div class="col-md-6 pt-3">
                    <div class="row package-contact">
                        <div class="col-4 nav-info-text"><i class="bi bi-telephone-fill nav-icon"></i> 0274-5305505</div>
                        <div class="col-4 nav-info-text"><i class="bi bi-chat-square-text-fill nav-icon"></i>Live Chat</div>
                        <div class="col-4 nav-info-text"><i class="bi bi-person-circle nav-icon"></i>Member Area</div>
                    </div>
                </div>   
            </div> 
        </div>
    </section>
    <section id="info" class="border-separation">
        <nav class="navbar navbar-expand-lg container">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="public/assets/images/logo.png" width="250" class="mr-3" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Hosting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Domain</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Server</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Website</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Afiliasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pembayaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section id="about" class="border-separation">
        <div class="container mb-4">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <h1 class="mt-5 title">PHP Hosting</h1>
                    <h3 class="sub-title">Cepat, handal, penuh dengan modul PHP yang Anda Butuhkan</h3>
                    <div class="mt-4">
                        <table class="width-100 font-size-20 font-roboto-light" cellpadding="8" cellspacing="8">
                            <tr>
                                <td width="5%" class="vertical-align-top"><i class="bi bi-check-circle-fill check-icon"></i></td>
                                <td>Solusi PHP untuk performa query yang lebih cepat.</td>
                            </tr>
                            <tr>
                                <td width="5%" class="vertical-align-top"><i class="bi bi-check-circle-fill check-icon"></i></td>
                                <td>Konsumsi memori yang lebih rendah.</td>
                            </tr>
                            <tr>
                                <td width="5%" class="vertical-align-top"><i class="bi bi-check-circle-fill check-icon"></i></td>
                                <td>Support PHP 53, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</td>
                            </tr>
                            <tr>
                                <td width="5%" class="vertical-align-top"><i class="bi bi-check-circle-fill check-icon"></i></td>
                                <td>Fitur enkripsi lonCube dan Zend Guard Loaders</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <img src="public/assets/svg/illustration banner PHP hosting-01.svg" class="mr-3 p-4" /> 
                </div>
            </div>
        </div>
    </section>
    <section id="featured" class="container">
        <div class="row mt-5 text-center">
            <div class="col mt-3">
                <div class="featured-img">
                    <img src="public/assets/images/zendguard.png" /> 
                </div>
                <p class="feature-text">PHP Zend Guard Loader</p>
            </div>
            <div class="col mt-3">
                <div class="featured-img">
                    <img src="public/assets/images/compooser.png" /> 
                </div>
                <p class="feature-text">PHP Composer</p>
            </div>
            <div class="col mt-3">
                <div class="featured-img">
                    <img src="public/assets/images/ioncube.png" /> 
                </div>
                <p class="feature-text">PHP ionCube Loader</p>
            </div>
        </div>
    </section>
    <section id="package" class="mt-5">
        <div class="container text-center">
            <h1 class="title-package font-roboto-montserrat-bold">Paket Hosting Singapura yang Tepat</h1>
            <p class="sub-title-package">Diskon 40% + Domain dan SSL Gratis Untuk Anda</p>
            <div class="row mt-5 p-2">
                @foreach ($package as $package)
                    @if($package["active"] == true)
                        <div class="col-md-3 p-0 text-center" id="list_package">
                            <img src="public/assets/images/ribbon.png" class="package-ribbon" />
                            <div class="package-container-active">
                                <div class="background-primary text-white">
                                    <p class="title-package-name pb-2">{{ $package["package_name"] }}</p>
                                    <p class="font-size-20 mb-0"><strike>Rp {{ $package["discount_price"] }}</strike></p>
                                    <div class="display-inline-flex">
                                        <div class="package-sub-title">Rp</div> 
                                        <font class="font-size-72 font-weight-700">{{ explode(".", $package["price"])[0] }}</font>
                                        <div class="package-sub-title"><b>.{{ explode(".", $package["price"])[1] }}</b>/bln</div>
                                    </div>
                                </div>
                                <p class="border-separation pb-2 font-size-18 pt-1 package-sub-container-active"><b>{{ $package["user"] }}</b> Pengguna Terdaftar</p>
                                <ul class="no-bullet font-size-16">
                                    @foreach($package["features"] as $features)
                                        @if(str_contains($features, "RESOURCE"))
                                            <li class="font-weight-700 pt-2">{{ $features }}</li>
                                        @else
                                            <li class="pt-2">
                                                @php
                                                    $list_feature = explode(" ", $features);
                                                    $counter = 0;
                                                @endphp
                                                
                                                @foreach($list_feature as $data)
                                                    @if($counter == 0)
                                                        <b>{{ $data }}</b>
                                                    @elseif($counter == 1 && ($data == "Gratis" || $data == "SSL" || $data == "Auto" ))
                                                        <b>{{ $data }}</b>
                                                    @else
                                                        {{ $data }}
                                                    @endif
                                                    @php
                                                        $counter++;
                                                    @endphp
                                                @endforeach
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                <button class="button-secondary mt-3 mb-4"> Pilih Sekarang</button>
                            </div>
                        </div>
                    @else
                        <div class="col-md-3 p-0 text-center" id="list_package">
                            <div class="package-container">
                                <p class="title-package-name border-separation pb-2">{{ $package["package_name"] }}</p>
                                <p class="font-size-20 mb-0"><strike>Rp {{ $package["discount_price"] }}</strike></p>
                                <div class="display-inline-flex">
                                    <div class="package-sub-title">Rp</div> 
                                    <font class="font-size-72 font-weight-700">{{ explode(".", $package["price"])[0] }}</font>
                                    <div class="package-sub-title"><b>.{{ explode(".", $package["price"])[1] }}</b>/bln</div>
                                </div>
                                <div class="border-separation"></div>
                                <p class="mt-2 border-separation pb-2 font-size-18"><b>{{ $package["user"] }}</b> Pengguna Terdaftar</p>
                                <ul class="no-bullet font-size-16">
                                    @foreach($package["features"] as $features)
                                        @if(str_contains($features, "RESOURCE"))
                                            <li class="font-weight-700 pt-2">{{ $features }}</li>
                                        @else
                                            <li class="pt-2">
                                                @php
                                                    $list_feature = explode(" ", $features);
                                                    $counter = 0;
                                                @endphp
                                                
                                                @foreach($list_feature as $data)
                                                    @if($counter == 0)
                                                        <b>{{ $data }}</b>
                                                    @elseif($counter == 1 && ($data == "Gratis" || $data == "SSL" || $data == "Auto" ))
                                                        <b>{{ $data }}</b>
                                                    @else
                                                        {{ $data }}
                                                    @endif
                                                    @php
                                                        $counter++;
                                                    @endphp
                                                @endforeach
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                <button class="button-primary mt-3 mb-4"> Pilih Sekarang</button>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <section id="server">
        <div class="container mt-5 pt-5">
            <h1 class="text-center sub-title">Powerful dengan Limit PHP yang Lebih Besar</h1>
            <div class="row mt-5">
                <div class="col-md-6">
                    <table class="table table-striped border">
                        <tr>
                            <td width="10%" class="text-center"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td>max execution time 300s</td>
                        </tr>
                        <tr>
                            <td width="10%" class="text-center"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td>max execution time 300s</td>
                        </tr>
                        <tr>
                            <td width="10%" class="text-center"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td>php memory limit 1024 MB</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-striped border">
                        <tr>
                            <td width="10%" class="text-center"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td>post max size 128 MB</td>
                        </tr>
                        <tr>
                            <td width="10%" class="text-center"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td>upload max file size 128 MB</td>
                        </tr>
                        <tr>
                            <td width="10%" class="text-center"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td>max input var 2500</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <hr class="separation-half" />
    <section id="featured" class="container">
        <h2 class="text-center sub-title mt-5">Semua Paket Hosting Sudah Termasuk</h2>
        <div class="row mt-5">
            <div class="col-md-4 mt-2 mb-2 text-center">
                <img src="public/assets/svg/icon PHP Hosting_PHP Semua Versi.svg" class="width-30 p-3" />
                <h5 class="font-size-24"><b>PHP Semua Versi</b></h5>
                <p class="font-size-18">Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka anda!</p>
            </div>
            <div class="col-md-4 mt-2 mb-2 text-center">
                <img src="public/assets/svg/icon PHP Hosting_My SQL.svg" class="width-30 p-3" />
                <h5 class="font-size-24"><b>MySQL Versi 5.6</b></h5>
                <p class="font-size-18">Nimati MySQL versi terbaru, tercepat dan kaya akan fitur</p>
            </div>
            <div class="col-md-4 mt-2 mb-2 text-center">
                <img src="public/assets/svg/icon PHP Hosting_CPanel.svg" class="width-30 p-3" />
                <h5 class="font-size-24"><b>Panel Hosting cPanel</b></h5>
                <p class="font-size-18">Kelola website dengan panel canggih yang familiar di hati Anda</p>
            </div>
            <div class="col-md-4 mt-2 mb-2 text-center">
                <img src="public/assets/svg/icon PHP Hosting_garansi uptime.svg" class="width-30 p-3" />
                <h5 class="font-size-24"><b>Garansi Uptime 99.9%</b></h5>
                <p class="font-size-18">Data center ang mendukung kelangsngan website Anda 24/7</p>
            </div>
            <div class="col-md-4 mt-2 mb-2 text-center">
                <img src="public/assets/svg/icon PHP Hosting_InnoDB.svg" class="width-30 p-3" />
                <h5 class="font-size-24"><b>Database InnoDB Unlimited</b></h5>
                <p class="font-size-18">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda</p>
            </div>
            <div class="col-md-4 mt-2 mb-2 text-center">
                <img src="public/assets/svg/icon PHP Hosting_My SQL remote.svg" class="width-30 p-3" />
                <h5 class="font-size-24"><b>Wildcard Remote MySQL</b></h5>
                <p class="font-size-18">Mendukung s/d 25 max_user_connections dan 100 max_connections</p>
            </div>
        </div>
    </section>
    <hr class="separation-half" />
    <section id="laravel" class="border-separation pb-5">
        <div class="container mt-5">
            <h2 class="text-center sub-title mt-5">Mendukung Penuh Framework Laravel</h2>
            <div class="row mt-4">
                <div class="col-md-7">
                    <p class="font-size-26">Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framwork favorit Ana</p>
                    <table class="font-size-20">
                        <tr>
                            <td width="5%" class="vertical-align-top"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td>Install Laravel 1 klik dengan Softaculous Installer.</td>
                        </tr>
                        <tr>
                            <td width="5%" class="vertical-align-top"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td>Mendukung extensi PHP MCrypt, phar, mbstring, json, dan fileinfo.</td>
                        </tr>
                        <tr>
                            <td width="5%" class="vertical-align-top"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td>Tersedia Composer dan SSH untuk menginstall packages pilihan Anda</td>
                        </tr>
                    </table>
                    <p class="mt-4">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
                    <button class="button-secondary mt-3">Pilih Hosting Anda</button>
                </div>
                <div class="col-md-5">
                <img src="public/assets/svg/illustration banner support laravel hosting.svg" class="img-laravel" />
                </div>
            </div>
        </div>
    </section>
    <section id="module" class="container mt-5 display-desktop">
        <h2 class="text-center sub-title mt-5">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h2>
        <div class="row mt-5">
            @foreach($modules as $module)
            <div class="col-3">{{ $module }}</div>
            @endforeach
        </div>
        <center class="mt-5">
            <button class="button-primary">Selengkapnya</button>
        </center>
    </section>
    <section id="help" class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-5">
                <h2 class="sub-title-help mt-5 width-80">Linux Hosting yang Stabil dengan Teknologi LVE</h2>
                <p class="font-size-18 mt-4">SuperMicro <b>Intel Xeon 24 Cores</b> server dengan RAM 128 GB dan teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengna <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching. Apache load balancer berbasis LiteSPeed Tecnologies <b>CageFS</b> security, <b>Raid-10</b> protection dan ato backup untuk keamanan website PHP Anda</p>
                <button class="button-secondary mt-4 mb-4"> Pilih Hosting Anda</button>
            </div>
            <div class="col-md-7">
                <img src="public/assets/images/Image support.png" class="img-help" />
            </div>
        </div>
    </section>
    <section id="share">
        <div class="bg-light p-4 mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 font-size-20 font-weight-600">Bagikan jika Anda menyukai halaman ini </div>
                    <div class="col-md-6 mt-3"><img src="public/assets/images/share.png" width="100%" /></div>
                </div>
            </div>
        </div>
        <div class="background-primary help-container text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="font-size-36">Perlu <b>BANTUAN</b> Hubungi Kami : <b>0274-5305505</b></h3> 
                    </div>
                    <div class="col-md-3 mt-3">
                        <button class="button-white font-size-22">
                            <i class="bi bi-chat-square-text-fill icon-live-chat"></i>
                            Live Chat
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@extends('layouts.footer')