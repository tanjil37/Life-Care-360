<nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
    <div class="container">
        <!-- Brand and Home on the left -->
        <a class="navbar-brand" href="/">
            <img class="w-10" src="/assets/images/icon.jpeg" alt="">
            <strong>Life Care 360</strong>
        </a>

        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Other items on the right -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#booking">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reviews">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/doctors">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bloodFlow">Blood flow</a>
                </li>
                <li class="nav-item">
                    <!-- Authentication check -->
                    @auth
                        <a class="nav-link" href="/dashboard"><span class="text-red-600">Dr.
                            </span>{{ Auth::user()->name }}</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</nav>
