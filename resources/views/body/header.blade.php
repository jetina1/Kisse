<header class="header px-4 py-3 bg-primary text-white d-flex justify-content-between align-items-center">
    <h2 class="m-0">Welcome to Kise</h2>

    <!-- Navigation links -->
    <nav class="d-flex align-items-center">
        <a href="/" class="text-decoration-none text-white me-3">Home</a>
        <a href="/about" class="text-decoration-none text-white me-3">About</a>
        <a href="/contact" class="text-decoration-none text-white me-3">Contact</a>

        <!-- User profile dropdown -->
        <ul class="navbar-nav ml-auto d-flex align-items-center">
            @php
                // Check if the user is authenticated and use their profile image or a default image
                $profileImage = Auth::check() && Auth::user()->profile_image
                    ? Auth::user()->profile_image
                    : 'upload/default_images/no_image.jpg';
            @endphp

            <li class="nav-item dropdown no-arrow">
                @php
                    // Check if the user is authenticated and has a profile image, otherwise use a default image
                    $profileImage = Auth::check() && Auth::user()->profile_image
                        ? Auth::user()->profile_image
                        : 'default_images/no_image.jpg';
                @endphp

                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-white small">
                        {{ Auth::check() ? Auth::user()->name : 'Guest' }}
                    </span>
                    <!-- <img class="img-profile rounded-circle" src="{{ url('upload/admin_images/' . $profileImage) }}"
                        alt="User Profile" width="40"> -->
                </a>


                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    @if (Auth::check())
                        <!-- Authenticated User Profile Link -->
                        <a class="dropdown-item" href="{{ route('admin.profile', Auth::user()->id) }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                        </a>
                        <a class="dropdown-item" href="#"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display:none;">
                            @csrf
                        </form>
                    @else
                        <!-- Guest User Action (e.g., Login Link) -->
                        <a class="dropdown-item" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i> Login
                        </a>
                    @endif
                </div>
            </li>
        </ul>
    </nav>
</header>
<style>
    .header {
        background-color: #471e1e;
        /* Bootstrap primary color */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .header h2 {
        font-size: 1.8em;
        font-weight: bold;
        color: #ffffff;
    }

    nav a {
        color: #ffffff;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
    }

    nav a:hover {
        background-color: #0056b3;
        color: #ffffff;
    }

    .img-profile {
        width: 40px;
        height: 40px;
        margin-left: 10px;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .header {
            flex-direction: column;
            text-align: center;
        }

        nav {
            margin-top: 10px;
        }
    }
</style>