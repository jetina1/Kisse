<header class="header px-4 py-3 bg-light text-dark d-flex justify-content-between align-items-center">
    <h2 class="m-0">Welcome to Kise</h2>

    <!-- Navigation links -->
    <nav class="d-flex align-items-center">
        <a href="/" class="text-decoration-none text-dark me-3">Home</a>
        <a href="/about" class="text-decoration-none text-dark me-3">About</a>
        <a href="/contact" class="text-decoration-none text-dark me-3">Contact</a>

        <!-- User profile dropdown -->
        <ul class="navbar-nav ml-auto d-flex align-items-center">
            @php
                $id = Auth::user()->id;
                $profileData = App\Models\User::find($id);
            @endphp

            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                    <img class="img-profile rounded-circle" src="{{ asset('backend/img/undraw_profile.svg') }}"
                        alt="User Profile" width="40">
                </a>

                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('admin.profile', Auth::user()->id) }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                    </a>
                    <a class="dropdown-item" href="#"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
</header>

<style>
    .header {
        background-color: blue;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .header h2 {
        font-size: 1.8em;
        font-weight: bold;
        color: #343a40;
    }

    nav a {
        color: #343a40;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
    }

    nav a:hover {
        background-color: #007bff;
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