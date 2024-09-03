<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemesanan</title>
    <link rel="stylesheet" href="{{ asset('css/pemesanan.css') }}">
</head>
<body>
    <div class="header">
        <img src="{{ asset('images/logoevmo.png') }}" alt="Logo">
        <h2>DETAIL PEMESANAN</h2>
    </div>
    <div class="container">
        <div class="detail"><span>Nama Customer:</span> {{ $data[0]->pengguna->nama }}</div>
        <div class="detail"><span>Alamat:</span> {{ $data[0]->pengguna->alamat }}</div>
        <div class="detail"><span>Tanggal:</span> {{ $data[0]->tanggal }}</div>
        <div class="detail"><span>Jam:</span> 10.00 am (BELUM ADMBIL DARI DB BINGUNG)</div>
        <div class="detail"><span>Paket Pemesanan:</span> {{ $data[0]->katalog->judul }}</div>
        <div class="detail"><span>Deskripsi:</span> {{ $data[0]->katalog->deskripsi }}</div>
        <div class="detail"><span>Keterangan:</span> {{ $data[0]->dt_transaksi[0]->ket }}</div>
        <div class="detail"><span>Total Biaya:</span> Rp 20.000.000</div>
        <div class="detail"><span>Uang DP:</span> Rp 10.000.000</div>
        <div class="detail transfer-proof">
            <span>Bukti Transfer:</span>
            <img src="{{ asset('icon/icon _image_.png') }}" alt="Bukti Transfer">
            <a href="#">Lihat Bukti Transfer</a>
        </div>
    </div>
    <div class="actions">
        <a href="#" class="back">Kembali</a>
        <div class="center-buttons">
            <button class="accept">TERIMA</button>
            <button class="reject">TOLAK</button>
        </div>
    </div>
    @dd($data)
</body>
</html>
