<head>
    <style>
        .custom-bg {
            background-color: #F3F5F9 !important;

        }

        .navbar-light .navbar-nav .nav-link,
        .navbar-light .navbar-text {
            color: #343a40;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        .small-padding .nav-link {
            padding: 5px 10px !important; /* Mengatur padding lebih kecil */
        }

        .navbar-brand {
            margin-right: 30px; /* Menambahkan spasi lebih besar antara logo dan item navbar */
        }

        .navbar-nav .nav-link {
            margin-left: 10px; /* Menambahkan spasi antar link navbar */
            font-weight: bold; /* Membuat teks menjadi tebal */
        }

        .search-bar input {
            padding: 10px 15px; /* Adjust the internal padding for a larger input field */
            margin-right: 10px; /* Space to the right of the input field */
            border-radius: 4px; /* Rounded corners */
            border: 1px solid #ccc; /* Border color */
            font-size: 16px; /* Adjust the font size inside the input */
            min-width: 700px; /* Set a specific width (optional) */
        }


        .search-bar button {
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        .btn-signup, .btn-signin {
            padding: 8px 20px; /* Menyesuaikan padding */
            min-width: 80px;
            margin-left: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-signup:hover, .btn-signin:hover {
            background-color: #0056b3;
        }

        .top-bar {
            display: flex;
            align-items: center;
        }

        .profile-link {
            display: inline-block;
            margin-right: 20px; /* Jarak antara foto profil dan item Home */
        }

        .profile-photo {
            width: 40px; /* Ukuran foto kecil */
            height: 40px;
            border-radius: 50%; /* Membuat lingkaran */
            object-fit: cover;
        }

        .navbar-brand {
            margin-right: 15px; /* Mengurangi spasi antara logo dan item navbar */
        }
    </style>
</head>
<header class="navbar navbar-expand-lg navbar-light custom-bg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logoevmo.png') }}" alt="Logo" class="img-fluid" style="width: 80px;">
        </a>

        @if($role == 0 || $role == 1)
        <div class="navbar-nav d-flex flex-row align-items-center small-padding">
            <div class="navbar-nav" style="margin-right: 200px">
                <a class="nav-link" href="/">Home</a>

                @if($role == 1)
                    {{-- Navbar link for service providers --}}
                    <a class="nav-link" href="/datapesanan">Pesanan</a>
                @else
                    {{-- Navbar link for regular customers --}}
                    <a class="nav-link" href="/status_pemesanan">Pesanan</a>
                @endif

                <a class="nav-link" href="/profilcust">Profil</a>
            </div>

            <div class="top-bar">
                <div class="search-bar">
                    <input type="text" placeholder="Jasa Make Up Pengantin">
                </div>
            </div>

            @php
                $fotoPath = "http://127.0.0.1:8000/images/foto_users/" . $user['foto'];
            @endphp

            <!-- menampilkan foto profill belum api  -->
            @isset($user)
                <li>
                    <a href="{{ route('profile') }}" class="profile-link">
                        @if (isset($user['foto']))
                            <img src="{{ $fotoPath }}" alt="Profile" class="profile-photo">
                        @else
                            <img src="{{ asset('images/avatar/3.jpg') }}" alt="Profile" class="profile-photo">
                        @endif
                    </a>
                </li>
            @endisset
        </div>
        @else

        {{-- Display this if user is not authenticated --}}
        <span class="navbar-text ms-auto">Silakan login untuk melihat menu.</span>

        {{-- Display this if user is not authenticated --}}
        <!-- ini belum di filter role nya -->
        @auth
        @else
        <a href="/registrasi" class="btn-signup">SIGN UP</a>
        <a href="/login" class="btn-signin">SIGN IN</a>
        @endauth

        @endif
    </div>
</header>
