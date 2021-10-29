<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">Web Berita</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a>
                    {{-- ini merupakan operator pengujian ternari, cara bacanya apabila di title ada 'Home' nya, maka dikasih 'active' jika tidak maka '' --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Health' ? 'active' : '' }}" href="/health">Health</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Education' ? 'active' : '' }}" href="/education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Techno' ? 'active' : '' }}" href="/techno">Techno</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Food' ? 'active' : '' }}" href="/food">Food</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- ini berisi navbar --}}
