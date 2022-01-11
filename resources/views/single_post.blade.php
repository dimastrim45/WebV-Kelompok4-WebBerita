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
    <title>WebNews | Single Post</title>

</head>

<body>
    <style>
        body {
            background-image: url("../img/imagesite/background.png");
            background-repeat: repeat;
            padding-top: 2rem;
        }

    </style>
    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="css/style.css">
    @include('partials/navbar')

    {{-- isi post --}}
    <div class="container pt-5 mb-4">
        <div class="row ">
            <div class="col-9">
                <div class="container isi-situs single">
                    <div class="post_1" id="article">
                        <h6 class="cat_post text-hide">Kategori : <a href="#"
                                style="color: rgb(33, 111, 199)">{{ $post->category->name }}</a></h6>
                        <h1 class="judul_article text-center mt-4 mb-3" id="articletitle">{{ $post->title }}</h1>
                        <div class="time_publish">
                            <time class="time"
                                style="display:inline-block; color :#999!important">{{ $post->created_at }}</time>
                            <div class="credit">
                                <h6>
                                    <div id="penulis">Penulis:
                                        <a href="#">{{ $post->user->name }}</a>
                                    </div>
                                    <div id="editor">Editor:
                                        <a href="#">{{ $post->user->name }}</a>
                                    </div>
                                </h6>
                            </div>
                        </div>
                        <hr>
                        <div class="article_con">
                            <div class="artimg pb-20 mb-4">
                                <img class="imgfull img-fluid rounded mx-auto d-block" href="" src="img/comp1.jpg">
                            </div>
                            <div class="body_content">
                                {!! $post->body !!}
                            </div>
                            <div class="iklan_single">
                                <hr>
                                <h2 class="iklantitle">IKLAN UNTUK ANDA</h2>
                                <hr>
                                <div class="row  justify-content-center">
                                    <div class="card_ads" style="width: 16rem;">
                                        <img src="/img/laptop.jpg" class="card-img-top" alt="...">
                                        <a herf="" class="card-title">Laptop murah dikelasnya dengan harga
                                            terjangkau..!</a>
                                    </div>
                                    <div class="card_ads" style="width: 16rem;">
                                        <img src="/img/laptop.jpg" class="card-img-top" alt="...">
                                        <a herf="" class="card-title">Laptop murah dikelasnya dengan harga
                                            terjangkau..!</a>
                                    </div>
                                    <div class="card_ads" style="width: 16rem;">
                                        <img src="/img/laptop.jpg" class="card-img-top" alt="...">
                                        <a herf="" class="card-title">Laptop murah dikelasnya dengan harga
                                            terjangkau..!</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3 ">
                <a href="#" class="ads" style="font-size: 12px">iklan by tech</a>
                <div class="card" style="width: 18rem;">
                    <img src="/img/laptop.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a herf="" class="card-title">Laptop murah dikelasnya dengan harga terjangkau..!</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/laptop.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a herf="" class="card-title">Laptop murah dikelasnya dengan harga terjangkau..!</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/laptop.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a herf="" class="card-title">Laptop murah dikelasnya dengan harga terjangkau..!</a>
                    </div>
                </div>

                <div class="box__header mt-5">
                    <h3 class="box__title" style="color: rgb(125, 62, 243)">Berita Terpopuler</h3>
                </div>
                <div class="card" style="width: 18rem;">
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
                        <button class="button_list button2 rounded-3" type="button">Selengkapnya <i
                                class="bi bi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>

@include('partials/footer')
</body>

</html>
