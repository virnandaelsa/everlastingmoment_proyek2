@extends('layouts.app')

@section('content')
<div class="main-content col-sm-9 col-md-10 col-lg-11">
            <div class="header">
                <h1>Detail Pesanan</h1>
                <img src="user-profile.jpg" alt="User Profile" class="profile-pic">
            </div>
            <div class="order-detail">
                <div class="order-header">
                    <img src="makeup-package.jpg" alt="Paket Make Up Arabian Look" class="package-img">
                    <div class="package-info">
                    <div class="vendor-info">SeMUA Evelyn</div>
                        <h2>Paket Make Up Arabian Look (paket 1)</h2>
                        <p>Rp. 6.000.000.00</p>
                    </div>
                    
                </div>
                <div class="order-details">
                    <div class="order-item">
                        <span class="label">Tanggal/Jam:</span>
                    </div>
                    <hr>
                    <div class="order-item">
                        <span class="label">Keterangan:</span>
                    </div>
                    <hr>
                    <div class="order-item">
                        <span class="label">Metode Pembayaran : </span>
                        <span class="value">Segera lakukan DP apabila pesanan telah di validasi</span>
                        <p>No. Rekening: <span class="account-number"></span></p>
                    </div>
                    <hr>
                    <div class="order-item">
                        <span class="label">Total Pembayaran : </span>
                    </div>
                    <hr>
                    <div class="order-item">
                        <span class="label">Alamat</span>
                        <span class="value">Cila Anastasya | (+62) 851-2345-6789<br>Desa Tales, Dusun Karanglo, Kecamatan Ngadiluwih, Kabupaten Kediri<br>Jalan Kenanga Nomor 256</span>
                    </div>
                    <hr>
                    <div class="upload-section">
                <label for="upload-bukti">Upload bukti: <input type="file" id="upload-bukti" name="upload-bukti"> </label>
                    <div class="button-wrapper">
                        <button type="button">Kirim</button>
                    </div>
            </div> 
                </div>
            </div>
            
        </div>
@endsection