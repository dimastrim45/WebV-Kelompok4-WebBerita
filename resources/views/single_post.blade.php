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
    @include('partials/navbar')

    {{-- isi post --}}
    <div class="container pt-5 mb-4">
        <div class="row ">
        <div class="col-9">
            <div class="container isi-situs single">
            <div class="post_1" id="article">
                <h6 class="cat_post text-hide">Kategori : <a href="#"style="color: rgb(33, 111, 199)">Teknologi</a></h6>
                <h1 class="judul_article text-center mt-4 mb-3" id="articletitle">Setup Komputer Yang Keren Dan Clean Yang Dapat Kamu Coba</h1>
                <div class="time_publish">
                    <time class="time" style="display:inline-block; color :#999!important">Kamis, 6 Januari 2022 21:19 WIB</time>
                    <div class="credit">
					<h6>
                        <div id="penulis">Penulis:
                            <a href="#">Andre Styawan</a>
                    	</div>
						<div id="editor">Editor:
                            <a href="#">Dimas</a>
                        </div>
					</h6>
			        </div>
                </div>
                <hr>
                <div class="article_con">
                    <div class="artimg pb-20 mb-4">
                        <img class="imgfull img-fluid rounded mx-auto d-block" href="" src="img/comp1.jpg" >
                    </div>
                <div class="body_content">
                    <p><strong>Komputer - </strong>lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque consequat, magna sed dictum sagittis, magna orci ultrices dui, eget interdum magna felis eu justo. Suspendisse pulvinar lobortis orci. Nunc justo nisl, ullamcorper ac velit quis, efficitur laoreet ligula. Donec nisi metus, maximus in magna eget, lacinia semper augue. Ut et sodales orci, sit amet efficitur mauris. Phasellus fringilla augue ex, vitae varius risus vehicula sit amet. Aliquam lobortis justo ut tempus vulputate. Aliquam neque lacus, vulputate non massa ut, viverra congue justo. Donec vulputate mollis porttitor. Cras semper mauris et congue laoreet. Curabitur pretium nisl a ligula dignissim dictum. Nam dapibus maximus enim eu posuere. Sed eu tincidunt ipsum.</p>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla et interdum urna. Mauris bibendum nisl vitae enim tristique, eget ultrices ipsum convallis. Sed tincidunt mattis odio sit amet vulputate. Phasellus vitae nisl commodo elit tincidunt ultricies sed vitae nibh. Duis aliquet mauris et diam pellentesque suscipit. Phasellus blandit lacus dolor, eget hendrerit ante vehicula quis. Vestibulum vestibulum felis sit amet tellus vestibulum molestie. Nam faucibus ut ipsum a convallis. Nunc fermentum semper justo gravida egestas. Vestibulum quis maximus nulla, tristique hendrerit eros. Quisque at orci ut ligula faucibus scelerisque. Ut et libero auctor, aliquet sapien at, tincidunt mauris. Aenean lacinia eros lectus.</p>
                    <p>Suspendisse dolor arcu, sodales in ex nec, imperdiet aliquet enim. Ut sagittis pellentesque tincidunt. Etiam vitae nunc a quam viverra pellentesque. Donec quis aliquet sem. Etiam et velit eu eros fringilla gravida. Suspendisse dignissim nulla vitae nunc tempus luctus. In hac habitasse platea dictumst. Fusce malesuada purus quis nunc dapibus, non lobortis nisl hendrerit. Fusce pretium metus lorem. Suspendisse eu volutpat massa, at porta felis. Curabitur nec neque ac magna feugiat condimentum. Etiam molestie tellus et tellus efficitur hendrerit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut lobortis nec mauris sit amet tristique.
                    </p>
                </div>
                <div class="iklan_single">
                    <hr>
                    <h2 class="iklantitle">IKLAN UNTUK ANDA</h2>
                    <hr>
                    <div class="row  justify-content-center">
                        <div class="card_ads" style="width: 18rem;">
                            <img src="/img/laptop.jpg" class="card-img-top" alt="...">
                            <a herf="" class="card-title">Laptop murah dikelasnya dengan harga terjangkau..!</a>
                        </div>
                        <div class="card_ads" style="width: 18rem;">
                            <img src="/img/laptop.jpg" class="card-img-top" alt="...">
                            <a herf="" class="card-title">Laptop murah dikelasnya dengan harga terjangkau..!</a>
                        </div>
                        <div class="card_ads" style="width: 18rem;">
                            <img src="/img/laptop.jpg" class="card-img-top" alt="...">
                            <a herf="" class="card-title">Laptop murah dikelasnya dengan harga terjangkau..!</a>
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
                                <button class="button_list button2 rounded-3" type="button">Selengkapnya  <i class="bi bi-arrow-right"></i></button>
                            </div>
                    </div>
            </div>
        </div>

    </div>




            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>
             <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
            <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>

@include('partials/footer')
</body>

</html>
