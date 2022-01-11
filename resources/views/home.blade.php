<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/test.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Home | Webnews</title>

</head>

<body>
    <style>
        body {
            background-image: url("../img/imagesite/background.png");
            background-repeat: repeat;
            padding-top: 2rem;
        }

    </style>
    @include('partials/navbar')

    {{-- menu atas --}}
    <div class="container mb-5">
        <div class="container userid mt-5">
            <div class="row justify-content-end">
                <div class="col-5 ">
                    <h6 style="float: left;">Selamat Datang, Tamu</h6>
                    <a href=""><img src="img/imagesite/Facebook.png" /></a>
                </div>
            </div>
        </div>
        <!-- Isi header logo menu-->
        <div class="container isi-situs">

            <div class="row justify-content-between">
                <div class="col-4">
                    <img class="logo" src="img/logoberita.png" />
                </div>
                <div class="col-6">
                    <img class="img-fluid" src="img/imagesite/iklan.jpg" />
                </div>
            </div>

            <!-- navigasi bar -->
            <div class="col-12">
                <div class="navbar nav-bottom mb-2 mt-2">
                    <div class="navbar-inner navigasibar">
                        <div class="container mt-2">
                            <ul class="nav justify-content-center" role="navigation">


                                <li class="dropdown">
                                    <a href="/category/kriminal" id="drop2" role="button"
                                        class="dropdown-toggle">Kriminal<b class="caret"></b></a>
                                    <ul class="dropdown-menu menudrop" role="menu" aria-labelledby="drop2">
                                        <li><a tabindex="-1" href="#">Kecelakaan</a></li>
                                        <li><a tabindex="-1" href="#">Pembunuhan</a></li>
                                        <li><a tabindex="-1" href="#">Perampokan</a></li>
                                        <li><a tabindex="-1" href="#">Asusila</a></li>
                                        <li><a tabindex="-1" href="#">Penganiayaan</a></li>
                                        <li><a tabindex="-1" href="#">Tindakan Kriminal Lain</a></li>


                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="/category/politik" id="drop2" role="button" class="dropdown-toggle">Politik
                                        dan Hukum<b class="caret"></b></a>
                                    <ul class="dropdown-menu menudrop" role="menu" aria-labelledby="drop2">
                                        <li><a tabindex="-1" href="#">Kasus Hukum</a></li>
                                        <li><a tabindex="-1" href="#">Partai Politik</a></li>
                                        <li><a tabindex="-1" href="#">Tokoh Politik</a></li>
                                        <li><a tabindex="-1" href="#">Pemilu</a></li>


                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="/category/teknologi" id="drop2" role="button" class="dropdown-toggle">Sains
                                        Teknologi<b class="caret"></b></a>
                                    <ul class="dropdown-menu menudrop" role="menu" aria-labelledby="drop2">
                                        <li><a tabindex="-1" href="#">Software</a></li>
                                        <li><a tabindex="-1" href="#">Hardware</a></li>
                                        <li><a tabindex="-1" href="#">Aplikasi</a></li>
                                        <li><a tabindex="-1" href="#">Smartphone</a></li>
                                        <li><a tabindex="-1" href="#">Game</a></li>
                                        <li><a tabindex="-1" href="#">IT Bussiness</a></li>
                                        <li><a tabindex="-1" href="#">Startup Company</a></li>
                                        <li><a tabindex="-1" href="#">Edukasi Alam</a></li>


                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="/category/infotainment" id="drop2" role="button"
                                        class="dropdown-toggle">Infotainment <b class="caret"></b></a>
                                    <ul class="dropdown-menu menudrop" role="menu" aria-labelledby="drop2">
                                        <li><a tabindex="-1" href="#">Selebritis</a></li>
                                        <li><a tabindex="-1" href="#">Film Terbaru</a></li>
                                        <li><a tabindex="-1" href="#">Tangga Lagu</a></li>
                                        <li><a tabindex="-1" href="#">Nyeleneh</a></li>


                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="/category/ekonomi" id="drop2" role="button"
                                        class="dropdown-toggle">Ekonomi<b class="caret"></b></a>
                                    <ul class="dropdown-menu menudrop" role="menu" aria-labelledby="drop2">
                                        <li><a tabindex="-1" href="#">Info Saham</a></li>
                                        <li><a tabindex="-1" href="#">Bisnis</a></li>
                                        <li><a tabindex="-1" href="#">Fiskal dan Moneter</a></li>
                                        <li><a tabindex="-1" href="#">Analisis</a></li>
                                        <li><a tabindex="-1" href="#">Sosok</a></li>
                                        <li><a tabindex="-1" href="#">Perencanaan Keuangan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="/category/olahraga" id="drop2" role="button"
                                        class="dropdown-toggle">Olahraga<b class="caret"></b></a>
                                    <ul class="dropdown-menu menudrop" role="menu" aria-labelledby="drop2">
                                        <li><a tabindex="-1" href="#">Persebaya</a></li>
                                        <li><a tabindex="-1" href="#">Football Indonesia</a></li>
                                        <li><a tabindex="-1" href="#">Football Internasional</a></li>
                                        <li><a tabindex="-1" href="#">Sosok</a></li>
                                        <li><a tabindex="-1" href="#">Trik dan Tips</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- navigasi bar -->


                {{-- konten isi --}}
                <div class="row mb-4">
                    <div class="col-3">
                        <div class="citizen">
                            <h5 class="judul">
                                <span class="icon-leaf"></span> Citizen Jurnalisme
                            </h5>
                            <div class="content">
                                <h6><a href="">Kriminal di Sekitar Wilayah Kampus</a></h6>
                                <p>by Andi - 19 Oktober 2019</p>
                            </div>
                            <div class="content">
                                <h6><a href="">Harga BBM Harap di Turunkan</a></h6>
                                <p>by Alif - 19 Oktober 2019</p>
                            </div>
                            <div class="content">
                                <h6><a href="">Kabar Sahabat dari Negeri Jiran</a></h6>
                                <p>by Mustafa - 19 Oktober 2019</p>
                            </div>
                            <div class="content">
                                <h6><a href="">Cara Berhemat ala mahasiswa</a></h6>
                                <p>by Saipul - 19 Oktober 2019</p>
                            </div>
                            <div class="content">
                                <h6><a href="">Kenakalan Remaja Hari ini</a></h6>
                                <p>by Putri - 19 Oktober 2019</p>
                            </div>
                            <div class="foot">
                                <center>
                                    <div class="btn-group">
                                        <button class="btn btn-small btn-info">Kirim Berita</button>
                                        <button class="btn btn-small">Lihat Semua</button>
                                    </div>
                                </center>
                            </div>

                        </div>

                    </div>


                    <div class="col-6 mb-">
                        <!-- konten slider-->
                        <div class="headline">
                            <p>
                                <strong>BERITA PILIHAN:</strong> Dari redaksi untuk Anda
                            </p>
                        </div>
                        <div class="slide">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/imagesite/slide/luca-farulli-master-multimedia.jpg"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block mb-2">
                                        </div>
                                        <h3><a href="http://www.mmm.unifi.it/primo-piano/intervista-con-luca-farulli">Luca
                                                Farulli interview</a></h3>
                                            <p>Luca Farulli, professor of Aesthetics at the Academy of Fine Arts of Venice,
                                            is the owner of the course of aesthetics of digital art and coordinator of
                                            the workshop for the Master of Arts and Multimedia <br /><a
                                                href="http://www.mmm.unifi.it/primo-piano/intervista-con-luca-farulli">
                                                &raquo; read more</a></p>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/imagesite/slide/diego-mencarelli-master-multimedia.jpg"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block mb-2">
                                        </div>
                                        <h3><a href="http://www.mmm.unifi.it/interviste/intervista-con-diego-mencarelli"
                                                title="This should be the title text">Diego Mencarelli interview</a>
                                        </h3>
                                        <p>Diego Mencarelli, new media consultant at Unicoop Tirreno, co-teaches a
                                            course on human-machine interface design, in particular the module dedicated
                                            to accessibility and web W3C standards <br /><a
                                                href="http://www.mmm.unifi.it/interviste/intervista-con-diego-mencarelli">&raquo;
                                                read more</a></p>
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="img/imagesite/slide/luca-bonacorsi-master-multimedia.jpg"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block mb-2">
                                        </div>
                                        <h3><a href="http://www.mmm.unifi.it/interviste/intervista-con-luca-bonacorsi">Luca
                                                Bonacorsi interview</a></h3>
                                        <p>Luca Bonacorsi, consultant and expert training certified Adobe / Macromedia,
                                            is professor of Rich Internet Applications II, a course designed to learn of
                                            Adobe Flex <br /><a
                                                href="http://www.mmm.unifi.it/interviste/intervista-con-luca-bonacorsi">&raquo;
                                                read more</a></p>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <!-- konten slider -->
                    </div>
                    <!-- konten iklan2 -->
                    <div class="col-3 iklan2">
                        <img class="img-fluid" src="/img/imagesite/iklan2.jpg">
                    </div>

                    <!-- konten iklan2 -->
                </div>
            </div>

            <div class="row isipilihan">
                <div class="col-3">
                    <div class="box__header mt-1">
                        <h4 class="box__title" style="color: rgb(125, 62, 243)">Berita Terpopuler</h4>
                    </div>
                    <div class="card" style="width: 16rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a class="list_berita" href="#">
                                    <i class="bi bi-hash">1 </i>
                                 Keren! Samsung Ungkap 4 Inovasi Layar Lipat Baru Di CES 2022
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a class="list_berita" href="#">
                                    <i class="bi bi-hash">2 </i>
                                Canggihnya Galaxy Watch 4, Bisa Hitung Komposisi Tubuh-Detak Jantung
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a class="list_berita" href="#">
                                    <i class="bi bi-hash">3 </i>
                                Produk Laptop Terbaru Dari Brand Asus Yang Multifungsi
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a class="list_berita" href="#">
                                    <i class="bi bi-hash">4 </i>
                                Produk Laptop Terbaru Dari Brand Asus Yang Multifungsi
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a class="list_berita" href="#">
                                    <i class="bi bi-hash">5 </i>
                                Produk Laptop Terbaru Dari Brand Asus Yang Multifungsi
                                </a>
                            </li>
                        </ul>
                            <div class="d-grid gap-2 mx-auto mt-4 mb-4">
                                <button class="button_list button2 rounded-3" type="button">Selengkapnya  <i class="bi bi-arrow-right"></i></button>
                            </div>
                    </div>
                </div>

                {{-- terbaru --}}
                <div class="col-5">
                    <div class="terbaru">
                        <h5 class="berita-baru">Berita Terbaru<a href="#"></a></h5>
                        <div class="konten-terbaru">
                            @foreach ($posts as $post)
                                <!-- foreach untuk melooping isi dari array didalam $posts sebagai single $post -->
                                <div class="isi-terbaru">
                                    <span class="date">Sabtu, 17/12/2021 14:41 WIB</span>
                                    <h4 class="judul-terbaru"><a
                                            href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                                    </h4>
                                    <img class="img-polaroid" src="img/imagesite/post/p10.png" />
                                    <p>{!! $post->excerpt !!}</p>
                                    <a href="/post/{{ $post->slug }}" class="lengkap">Selengkapnya &raquo;</a>
                                </div>
                            @endforeach

                            <a href="#" class="nextt">Berita Lainnya &raquo;</a>

                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="kriminal">
                        <h5 class="berita-baru2">Kriminal</h5>
                        <div class="konten-terbaru">
                            <div class="judul-artikel-ticker">
                                <h6 class="judul-terbaru"><a href="">Pencuri dan Perampok di Pasar Akhirnya
                                        Ditangkap</a></h6>
                            </div>
                            <div class="judul-artikel-ticker">
                                <h6 class="judul-terbaru"><a href="">Pembunuh Siswa SMA, Ditemukan Juga Tewas di
                                        Tempat</a></h6>
                            </div>
                            <div class="judul-artikel-ticker">
                                <h6 class="judul-terbaru"><a href="">Tragedi Berdarah di Pasar Dinoyo</a></h6>
                            </div>
                            <div class="judul-artikel-ticker">
                                <h6 class="judul-terbaru"><a href="">35 Narapidana Kabur dari Penjara di Kota
                                        Malang</a></h6>
                            </div>
                            <div class="judul-artikel-ticker">
                                <h6 class="judul-terbaru"><a href="">Aksi Jambret di Kawasan Lokasi Wisata Terus
                                        Meningkat</a></h6>
                            </div>
                            <a href="#" class="nextt">Berita Lainnya &raquo;</a>
                        </div>
                    </div>

                    <div class="galeria">
                        <h5 class="judul">Galeri Video <span class="icon-film"></span></h5>
                        <div class="content">
                            <iframe src="https://www.youtube.com/embed/s0dMTAQM4cw?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=http://youtubeembedcode.com" frameborder="0"
                                allowfullscreen=""></iframe>
                        </div>
                        <center><a href="">Lihat Semua</a></center>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @include('partials/footer')

            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>
            <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
            <script type="text/javascript" src="js/jquery.accessible-news-slider.js"></script>


            <script src="js/bootstrap-dropdown.js"></script>
            <script src="js/bootstrap-collapse.js"></script>
            <script src="js/ckeditor/ckeditor.js"></script>



</body>


</html>
