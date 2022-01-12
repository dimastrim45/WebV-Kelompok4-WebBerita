<link rel="stylesheet" href="css/style.css">
<nav class="navbar mb-5 navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand pb-0" href="/"><img src="{{ $url=asset('img/logoberita.png') }}" alt="webnews" width="70">WebNEWS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form class="d-flex pull-right">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <form action="/login">
            <input type="submit" class="btn btn-primary" value="Login">
        </form>
        <form action="/dashboard">
            <input type="submit" class="btn btn-primary" value="Upload">
        </form>
    </div>
</nav>
