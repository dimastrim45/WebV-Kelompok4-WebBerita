<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My Css -->

    <link rel="stylesheet" href="/css/style.css">
    <title>web</title>
</head>

<body>

    @include('partials/navbar')
    <!-- About Card -->

    <section id="About">
        <div class="container" >
            <div class="row text-center">
                <div class="col mb-5">
                    <h2> About Me </h2>
                </div>
            </div>
            <div class=""></div>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="img/dimas.jpg" class="card-img-top" alt="user1">
                        <div class="card-body">
                            <h5>
                                <p> Nama : Dimas Tri Martono</p>
                                <p> NPM : 06.2019.1.07146 </p>
                                <p> ITATS 2019</p>
                            </h5>
                            <a href="mailto: dimastm45@gmail.com?subject=titel"><img src="img/mail.png" alt="mail" style="width: 50px">
                            </a>
                            <a href="https://github.com/dimastrim45">
                                <img src="img/git.png" alt="git" style="width:50px">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card ">
                        <img src="img/riski.jpg" class="card-img-top" alt="user2">
                        <div class="card-body">
                            <h5>
                                <p> Nama : Risky Ade Sucahyo</p>
                                <p> NPM : 06.2019.1.07208 </p>
                                <p> ITATS 2019</p>
                            </h5>
                            <a href="mailto: riskyadesucahyo@gmail.com?subject=titel"><img src="img/mail.png" alt="mail" style="width: 50px">
                            </a>
                            <a href="https://github.com/risky-ade">
                                <img src="img/git.png" alt="git" style="width:50px">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="img/andre.jpg" class="card-img-top" alt="user3">
                        <div class="card-body">
                            <h5>
                                <p> Nama : Andre Setiawan</p>
                                <p> NPM : 06.2019.1.07114 </p>
                                <p> ITATS 2019</p>
                            </h5>
                            <!--  gmail link -->
                            <a href="mailto: andreitats.smt5@gmail.com?subject=titel"><img src="img/mail.png" alt="mail" style="width: 50px"></a>
                            </a>
                            <a href="https://github.com/andre-setiawan9999">
                                <img src="img/git.png" alt="git" style="width:50px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    @include('partials/footer')

</body>

</html>
