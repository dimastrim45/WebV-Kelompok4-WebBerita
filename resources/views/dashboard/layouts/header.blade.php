<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Dasboard Admin</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav">
        <ul class="nav">
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><span data-feather="user"></span>
                    Dimas</a></li>
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button class="nav-link px-3 bg-dark border-0">Logout
                        <span data-feather="log-out"></span></button>
                </form>
            </li>
        </ul>

    </div>
</header>
