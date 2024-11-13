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
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .account-header h2 {
        margin: 0;
    }
    .account-header img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }
    .account-details p {
        margin: 10px 0;
    }
    .account-details strong {
        display: inline-block;
        width: 150px;
    }
</style>
<div class="account-container">
    <div class="account-header">
        <h2>Informasi Akun</h2>
        <img src="{{ asset('images/avatar/3.jpg') }}" alt="User Profile">
    </div>
    <div class="account-details">
        <p><strong>Nama:</strong> {{ $user['nama'] }}</p>
        <p><strong>Username:</strong> {{ $user['username'] }}</p>
        <p><strong>Email:</strong> {{ $user['email'] }}</p>
        <p><strong>No. Telp:</strong> {{ $user['no_telp'] }}</p>
        <p><strong>Alamat:</strong> {{ $user['alamat'] }}</p>
        <p><strong>Role:</strong> {{ $user['role'] == 0 ? 'User' : 'Admin' }}</p>
    </div>
</div>
@endsection
