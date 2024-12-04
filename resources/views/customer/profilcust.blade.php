{{-- @dd() --}}

@extends('layouts.app')

@section('content')
<style>
body, html {
    font-family: 'Poppins', Arial, sans-serif; /* Gunakan font modern */
    margin: 0;
    padding: 0;
    background-color: #f8f9fa; /* Warna latar belakang lembut */
    height: 100%; /* Pastikan body mengambil tinggi penuh */
}

.content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 40px 20px; /* Tambahkan ruang di sekitar konten */
    min-height: 100vh; /* Pastikan konten memenuhi layar */
}

.profile-info {
    background-color: #fff; /* Latar belakang putih agar kontras */
    padding: 30px;
    border-radius: 15px; /* Sudut melengkung */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Bayangan lebih halus */
    max-width: 900px; /* Batasi lebar maksimum */
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 30px; /* Spasi antar elemen */
}

.profile {
    display: flex;
    align-items: center;
    gap: 25px;
}

.profile-pic {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #365B80;
    transition: transform 0.3s ease; /* Animasi ketika hover */
}

.profile-pic:hover {
    transform: scale(1.1); /* Perbesar gambar saat hover */
}

.user-info {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.username {
    font-size: 26px;
    font-weight: 600;
    color: #365B80; /* Warna teks biru gelap */
    margin-bottom: 8px;
}

.name {
    font-size: 20px;
    color: #6c757d; /* Warna teks abu-abu */
    font-style: italic;
}

.info ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.info ul li {
    font-size: 18px;
    padding: 15px;
    border-radius: 10px;
    background-color: #f1f3f5; /* Latar belakang abu-abu lembut */
    margin-bottom: 15px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    display: flex;
    align-items: center;
    gap: 15px;
}

.info ul li:hover {
    background-color: #365B80; /* Warna latar belakang berubah saat hover */
    color: #fff; /* Teks menjadi putih */
    transform: translateY(-5px); /* Efek mengangkat sedikit */
}

.info ul li a {
    text-decoration: none;
    color: inherit; /* Gunakan warna teks default */
    width: 100%;
    display: block;
}

.info ul li a:hover {
    text-decoration: underline; /* Garis bawah saat hover pada link */
}

button {
    padding: 12px 25px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    background-color: #dc3545; /* Warna merah */
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 20px;
    width: auto;
}

button:hover {
    background-color: #c82333; /* Merah gelap saat hover */
}

@media (max-width: 768px) {
    .profile-info {
        padding: 20px;
    }

    .profile {
        flex-direction: column;
        align-items: center;
    }

    .profile-pic {
        margin-bottom: 15px;
    }

    .username, .name {
        text-align: center;
    }

    .info ul li {
        font-size: 16px;
    }

    button {
        font-size: 14px;
        padding: 10px 20px;
    }
}

</style>

<div class="content">
    <div class="profile-info">
        <div class="pro">
            <div class="profile">
                @php
                    $fotoPath = "http://127.0.0.1:8000/images/foto_users/" . $user['foto'];
                @endphp
                @if (isset($user['foto']))
                    <img class="profile-pic" src='{{$fotoPath}}' alt="Profile Picture">
                @else
                    <img src="{{ asset('images/avatar/3.jpg') }}" alt="Profile" class="profile-pic">
                @endif
                <div class="user-info">
                    <div class="username">{{ $user['username'] }}</div>
                    <div class="name">{{ $user['nama'] }}</div>
                </div>
            </div>
        </div>
        <div class="info"> <!-- Perbaiki kesalahan penulisan class -->
            <ul>
                <li><a href="/account">Informasi Akun</a></li>
                @if ($user['role'] == 0)
                    <li><a href="/status_pemesanan">Pesanan Saya</a></li>
                    <li><a href="{{route('administrasi')}}">Daftar Sebagai Penyedia Jasa</a></li>
                @elseif ($user['role'] == 1)
                <li><a href="/datapesanan">Data Pemesanan</a></li>
                    <li><a href="/tambah_katalog">Tambah Katalog</a></li>
                    <li><a href="/">Katalog Saya</a></li>
                @endif
                    <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Keluar</button>
                    </form>
            </ul>
        </div>

    </div>
</div>
@endsection
