<nav class="fixed-top navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img width="32" src="{{ asset('img/logo.svg') }}" alt="">
            <label class="brand-name">Vlad Kidanov</label>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <ion-icon name="menu-outline"></ion-icon>
        </button>
        <div class="collapse navbar-collapse text-end" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('resume') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('resume') }}">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('portfolio') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('portfolio') }}">Portfolio</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('blog') }}">Blog</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contacts') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('contacts') }}">Contacts</a>
                </li>

            </ul>

            <div id="theme_btn">
                <ion-icon class="light-icon" name="sunny-outline"></ion-icon>
                <ion-icon class="dark-icon" name="moon-outline"></ion-icon>
            </div>



        </div>
    </div>
</nav>
