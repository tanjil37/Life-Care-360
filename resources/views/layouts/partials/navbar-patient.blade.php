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
                    <li class="relative inline-block">
                        <!-- Dropdown Button -->
                        <button id="dropdownButton"
                            class="bg-red-600 text-white my-2 px-2 py-2 rounded-md hover:bg-red-400 focus:outline-none flex items-center transition duration-200">
                    <li class="nav-item">
                        <!-- Authentication check -->
                        @auth
                            <a class="nav-link" href="/dashboard"><span class="text-red-600">Dr.
                                </span>{{ Auth::user()->name }}</a>
                        @else
                            <div>Login</div>
                        @endauth
                    </li>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                    </button>
                    <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 hidden">
                        <a href="{{ route('login') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-150">Doctor
                            Login</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-150">User
                            Login</a>
                    </div>
                    </li>
                @endauth
                </li>

        </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const button = document.getElementById('dropdownButton');
        const menu = document.getElementById('dropdownMenu');

        button.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!button.contains(event.target) && !menu.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });
    });
</script>
