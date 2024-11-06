<head>
    <style>
        .custom-bg {
    background-color: #f8f9fa !important;
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
    margin-right: 15px; /* Mengurangi spasi antara logo dan item navbar */
}

    </style>
</head>
<header class="navbar navbar-expand-lg navbar-light custom-bg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logoevmo.png') }}" alt="Logo" class="img-fluid" style="width: 80px;">
        </a>

        @auth
        <div class="navbar-nav ms-auto d-flex flex-row align-items-center small-padding">
            <a class="nav-link" href="/">Home</a>

            @if (auth()->user()->role == 1)
                {{-- Navbar link for service providers --}}
                <a class="nav-link" href="/datapesanan">Pesanan</a>
            @else
                {{-- Navbar link for regular customers --}}
                <a class="nav-link" href="/status_pemesanan">Pesanan</a>
            @endif

            <a class="nav-link" href="/profilcust">Profil</a>
        </div>
        @else
            {{-- Display this if user is not authenticated --}}
            <span class="navbar-text ms-auto">Silakan login untuk melihat menu.</span>
        @endauth
    </div>
</header>
