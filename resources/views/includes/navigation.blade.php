<nav class="fixed-top navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img width="32" src="{{ asset('img/logonew.svg') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
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
            <ion-icon class="light-btn" name="sunny-outline"></ion-icon>
            <ion-icon class="dark-btn" name="moon-outline"></ion-icon>
        </div>
    </div>
</nav>
