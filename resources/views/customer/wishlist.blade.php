@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }
        .header {
            width: 1000px;
            display: flex;
            justify-content: space-between;
            margin-left: 85px; 
        }
        .header img {
            height: 50px;
        }
        .profile {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
        .wishlist-container {
            width: 100%;
            max-width: 800px;
            margin-left: 80px;
            margin-top: 30px;
        }
        .wishlist-item {
            display: flex;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .wishlist-item img {
            border-radius: 8px;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 20px;
        }
        .wishlist-item .details {
            flex-grow: 1;
        }
        .wishlist-item .details h3 {
            margin: 0;
            font-size: 18px;
        }
        .wishlist-item .details p {
            margin: 5px 0;
            color: #777;
        }
        .wishlist-item .details span {
            font-size: 16px;
            color: #000;
        }
        .wishlist-item .order-btn {
            padding: 10px;
            background-color: #365B80;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 14px;
        }
        .wishlist-item .order-btn:hover {
            background-color: #337ab7;
            color: white;
        }
        .pro {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .profile-wrapper {
            margin-right: 10px;
        }
        .profile-img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
    </style>
    <div class="header">
        <h1>Wishlist Saya</h1>
        <div class="pro">
            <div class="profile-wrapper">
                <img class="profile-img" src="/images/profile.jpg" alt="Profile Picture">
            </div>
        </div>
    </div>
    <div class="wishlist-container">
        <div class="wishlist-item">
            <img src="sunda_siger.jpg" alt="Paket Sunda Siger">
            <div class="details">
                <h3>Paket Sunda Siger (paket 2)</h3>
                <p>SeMUA Evelyn</p>
                <span>Rp. 8.000.000,00</span>
            </div>
            <button class="order-btn">Pesan</button>
        </div>
        <div class="wishlist-item">
            <img src="jawa_pengantin.jpg" alt="Paket Pengantin Jawa">
            <div class="details">
                <h3>Paket Pengantin Jawa (paket lengkap)</h3>
                <p>Lita Wedding</p>
                <span>Rp. 7.500.000,00</span>
            </div>
            <button class="order-btn">Pesan</button>
        </div>
        <div class="wishlist-item">
            <img src="dekorasi_rumahan.jpg" alt="Dekorasi Rumahan">
            <div class="details">
                <h3>Dekorasi Rumahan (paket 3)</h3>
                <p>SwaraDekor</p>
                <span>Rp. 25.000.000,00</span>
            </div>
            <button class="order-btn">Pesan</button>
        </div>
    </div>
@endsection
