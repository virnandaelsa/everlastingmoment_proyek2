{{-- @dd() --}}

@extends('layouts.app')

@section('content')
<style>
    body, html {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        height: 100%; /* Ensures the body takes full height */
    }

    .content {
        display: flex;
        width: 90%;
        align-items: flex-start; /* Aligns the content to the top */
        height: 100%; /* Ensures the content div takes full height */
        padding-top: 20px; /* Optional padding for spacing */
    }

    .profile-info {
        padding: 10px;
        border-radius: 8px;
        /* Remove margin-top to ensure it sticks to the top */
    }

    .profile-info ul {
        list-style: none;
        padding: 0;
    }

    .profile-info li {
        margin-bottom: 10px;
        border-bottom: 1px solid #ddd; /* Garis bawah setiap item dalam profile-info */
        padding-bottom: 15px; /* Ruang antara garis bawah dan teks */
    }

    .profile-info a {
        text-decoration: none;
        color: #000; /* Default link color (blue) */
    }

    .profile-info a:hover {
        color: #666; /* Gray color on hover */
    }

    .pro {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .profile {
        display: flex;
        align-items: center;
    }

    .profile-pic {
        width: 120px; /* Sesuaikan ukuran */
        height: 120px; /* Pastikan tinggi dan lebar sama untuk bentuk lingkaran */
        border-radius: 50%; /* Membuat gambar menjadi lingkaran */
        object-fit: cover; /* Memastikan gambar memenuhi lingkaran tanpa terdistorsi */
        border: 2px solid #365B80; /* Border opsional */
        margin-left: 40px;
    }

    .user-info {
        display: flex;
        flex-direction: column;
    }

    .username, .name {
        margin-left: 20px;
    }
    .username{
        font-size: 25px;
        font-weight: 500;
    }
    .name{
        font-size: 26px;
        font-style: italic;
    }

    .info {
        margin-top: 30px; /* Mengatur margin atas */
        margin-left: 30px;
        width: 1230px;
    }

    .info ul {
        list-style-type: none; /* Menghilangkan bullet points pada list */
        padding: 0; /* Menghilangkan padding default pada list */
        margin: 0; /* Menghilangkan margin default pada list */
    }

    .info ul li {
        font-size: 18px; /* Memperbesar ukuran teks */
        border-bottom: 2px solid #ccc; /* Garis bawah pada setiap item */
        padding: 12px 0; /* Jarak antara teks dan garis bawah */
        width: 100%; /* Menjadikan item selebar card */
        margin-bottom: 8px; /* Jarak antar item */
    }

    .info ul li:last-child {
        border-bottom: none; /* Menghapus garis bawah pada item terakhir */
    }
</style>

<div class="content">
    <div class="profile-info">
        <div class="pro">
            <div class="profile">
                <img class="profile-pic" src='{{asset("images/avatar/3.jpg")}}' alt="Profile Picture">
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
                    <li><a href="/wishlist">Wishlist</a></li>
                    <li><a href="/administrasi">Daftar Sebagai Penyedia Jasa</a></li>
                @elseif ($user['role'] == 1)
                <li><a href="/datapesanan">Data Pemesanan</a></li>
                    <li><a href="/tambah_katalog">Tambah Katalog</a></li>
                    <li><a href="/">Katalog Saya</a></li>
                @endif
                <li>
                    <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>

    </div>
</div>
@endsection
