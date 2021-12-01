<nav class="fixed-top navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img width="32" src="{{ asset('img/logo.svg') }}" alt="">
            <label class="brand-name">Vlad Kidanov</label>
        </a>
        <button id="menuToggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list"
                 viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>

        <div class="collapse navbar-collapse text-end" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="">
                    <a class=" {{ request()->is('about') ? 'active' : '' }}" {{ request()->is('about') ? 'aria-current="page"' : '' }} href="{{ route('about') }}">About</a>
                </li>
                <li class="">
                    <a class=" {{ request()->is('portfolio') ? 'active' : '' }}" {{ request()->is('portfolio') ? 'aria-current="page"' : '' }} href="{{ route('portfolio') }}">Portfolio</a>
                </li>
                <li class="">
                    <a class=" {{ request()->is('contact') ? 'active' : '' }}" {{ request()->is('contact') ? 'aria-current="page"' : '' }} href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
