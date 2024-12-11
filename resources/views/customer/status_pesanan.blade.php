@extends('layouts.app')

@section('content')
<style>
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        border-radius: 10px;
    }
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .header h2 {
        margin: 0;
    }
    .header img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
    .order-section {
        margin-bottom: 20px;
    }
    .order-section h3 {
        margin-bottom: 10px;
        padding-bottom: 5px;
    }
    .order-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        border-radius: 5px;
        margin-bottom: 10px;
    }
    .order-item img {
        width: 80px;
        height: 80px;
        border-radius: 5px;
        margin-right: 20px;
    }
    .order-details {
        flex-grow: 1;
        border-top : none;
    }
    .order-details p {
        margin: 5px 0;
    }
    .order-button {
        padding: 5px 10px;
        background-color: #365B80;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        max-width: 100px;
        text-align: center; /* Center text in button */
    }
</style>
<div class="container">
    <div class="header">
        <h2>Pesanan Saya</h2>
        <img src="{{ asset('images/avatar/3.jpg') }}" alt="User Profile">
    </div>
    <div class="order-section">
        {{-- @dd($data) --}}
        <h3>Aktif</h3>
        @foreach ($data1 as $data)
        <div class="order-item">
            <img src="{{ asset('images/makeup_arabian_look.png') }}" alt="Paket Make Up">
            <div class="order-details">
                <p><strong>{{$data['katalog']['judul']}}</strong></p>
                <p>Rp 6.000.000</p>
                <p>{{($data['katalog']['detail_penjual_id'])}}</p>
            </div>
            <a href="/pelunasan" class="order-button-link">
                <button class="order-button">Pelunasan</button>
            </a>
        </div>
        @endforeach
    </div>
    <div class="order-section">
        <h3>Dikonfirmasi</h3>
        <div class="order-item">
            <img src="{{ asset('images/paket_dekorasi.png') }}" alt="Paket Dekorasi">
            <div class="order-details">
                <p><strong>Paket Dekorasi (gedung 2)</strong></p>
                <p>Rp. 17.000.000.00</p>
                <p>Dekorasi UtamaKita</p>
            </div>
            <a href=""class="order-button-link">
                <button class="order-button">Upload DP</button>
            </a>
        </div>
    </div>
    <div class="order-section">
        <h3>Selesai</h3>
        <div class="order-item">
            <img src="{{ asset('images/undangan_minimalis.png') }}" alt="Undangan Minimalis">
            <div class="order-details">
                <p><strong>Undangan Minimalis (desain 4)</strong></p>
                <p>Rp. 1.000.000</p>
                <p>Sayanda wedding</p>
            </div>
            <a href=""class="order-button-link">
                <button class="order-button">Review</button>
            </a>
        </div>
    </div>
    <div class="order-section">
        <h3>Dibatalkan</h3>
        <p>-</p>
    </div>
</div>
@endsection
