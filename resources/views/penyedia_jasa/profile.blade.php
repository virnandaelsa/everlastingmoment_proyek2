@extends('layouts.app')

@section('content')
<style>
    h3 {

        font-weight: 600; /* Ketebalan font */
        margin-bottom: 20px; /* Jarak antara heading dan card */
        margin-left: 170px; /* Pusatkan heading di atas card */
    }
    .account-container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 10px;
        background-color: #f9f9f9;
    }
    .account-header {
        margin-top: 20px;
        display: flex;
        align-items: center;
        text-align: left;
        gap: 30px;
    }

    .account-header img {
        margin-left: 50px;
        width: 120px; /* Sesuaikan ukuran */
        height: 120px; /* Pastikan tinggi dan lebar sama untuk bentuk lingkaran */
        border-radius: 50%; /* Membuat gambar menjadi lingkaran */
        object-fit: cover; /* Memastikan gambar memenuhi lingkaran tanpa terdistorsi */
        border: 2px solid #365B80;  /* Agar gambar berbentuk lingkaran */
    }
    .account-header span {
        font-size: 22px; /* Sesuaikan ukuran teks */
        font-weight: 550; /* Menambahkan ketebalan pada teks */
    }
    .account-details{
        margin-top: 40px;
    }

    .account-details p {
        margin: 10px 0;
        font-size: 20px;
    }
    .account-details span {
        display: inline-block;
        width: 200px;
        font-size: 20px;
        margin-left: 50px;
        font-weight: 550;
    }
</style>
<h3>Informasi Akun</h3>
<div class="account-container">
    <div class="account-header">
        <img src="{{ asset('images/avatar/3.jpg') }}" alt="User Profile">
        <span>{{ $user['nama'] }}</span>
    </div>
    <div class="account-details">
        <p><span>Nama</span>        :  {{ $user['nama'] }}</p>
        <p><span>Username</span>    :  {{ $user['username'] }}</p>
        <p><span>Email</span>       :  {{ $user['email'] }}</p>
        <p><span>Nomor Telepon</span>    :  {{ $user['no_telp'] }}</p>
        <p><span>Alamat</span>      :  {{ $user['alamat'] }}</p>
        <p><span>Role</span>        :  {{ $user['role'] == 0 ? 'User' : 'Admin' }}</p>
        {{-- <button type="button" class="btn btn-primary" style="margin-top: 10px;">Simpan</button> --}}
    </div>
</div>
@endsection
