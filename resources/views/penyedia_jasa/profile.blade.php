@extends('layouts.app')

@section('content')
<style>
    .account-container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #f9f9f9;
    }
    .account-header {
    text-align: left; /* Agar gambar dan teks berada di tengah */
}

.account-header h3 {
    margin-bottom: 10px; /* Jarak antara judul dan gambar */
}

.account-header img {
    display: block; /* Mengatur gambar menjadi block untuk kontrol posisi yang lebih baik */
    margin: 0 auto; /* Agar gambar tetap di tengah */
    width: 120px; /* Sesuaikan ukuran */
        height: 120px; /* Pastikan tinggi dan lebar sama untuk bentuk lingkaran */
        border-radius: 50%; /* Membuat gambar menjadi lingkaran */
        object-fit: cover; /* Memastikan gambar memenuhi lingkaran tanpa terdistorsi */
        border: 2px solid #365B80;  /* Agar gambar berbentuk lingkaran */
}
    .account-details{
        margin-top: 30px;
    }

    .account-details p {
        margin: 10px 0;
        font-size: 20px;
    }
    .account-details strong {
        display: inline-block;
        width: 150px;
        font-size: 20px;
    }
</style>
<div class="account-container">
    <div class="account-header">
        <h2>Informasi Akun</h2>
        <img src="{{ asset('images/avatar/3.jpg') }}" alt="User Profile">
    </div>
    <div class="account-details">
        <p><strong>Nama</strong>        : {{ $user['nama'] }}</p>
        <p><strong>Username</strong>    : {{ $user['username'] }}</p>
        <p><strong>Email</strong>       : {{ $user['email'] }}</p>
        <p><strong>No. Telp</strong>    : {{ $user['no_telp'] }}</p>
        <p><strong>Alamat</strong>      : {{ $user['alamat'] }}</p>
        <p><strong>Role</strong>        : {{ $user['role'] == 0 ? 'User' : 'Admin' }}</p>
        <button type="button" class="btn btn-primary" style="margin-top: 10px;">Simpan</button>
    </div>
</div>
@endsection
