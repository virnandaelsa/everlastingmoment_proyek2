@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #f2f2f2;
}
.container{
    margin-top: 55px;
    margin-left: 10px;
}
.notification {
  display: flex;
  align-items: center; /* Memposisikan isi notifikasi secara vertikal */
  width: 700px;
  background: #E9EEF2;
  height: auto;
  margin-top: 15px;
  border: 3px solid #ccc;
  padding: 20px;
}

.notification-content {
  display: flex;
  align-items: center; /* Memposisikan gambar dan teks secara vertikal di dalam notifikasi */
}

.notification img {
  max-width: 100px; /* Atur lebar maksimum gambar */
  margin-right: 10px; /* Beri jarak antara gambar dan teks */
}

.notification-text {
  flex: 1; /* Membuat teks notifikasi mengisi sisa ruang yang tersedia */
}

.pro {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.profile {
    margin-right: 10px; /* Anda dapat menyesuaikan nilai ini */
}

.profile-img {
    border-radius: 50%;
    width: 40px;
    height: 40px;
}
</style>
</head>
<body>

<div class="container">

<div class="pro">
    <div class="profile">
        <img class="profile" src="profile.jpg" alt="Profile Picture">
    </div>
    </div>
    <h1><strong>Notifikasi</strong></h1>
  <div class="row">
    <div class="col-1">
      <!-- Tempatkan gambar di sini jika diperlukan -->
    </div>
    <div class="col-2">
      <div class="notification">
        <div class="notification-content">
          <img src="makeup1" alt="makeup1">
          <div class="notification-text">
            <div class="notification-title">Pesanan anda telah di verifikasi</div>
            <div class="notification-description">Silahkan melakukan pembayaran dengan DP (Down Payment) 50%</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Menambahkan notifikasi lainnya di sini -->
</div>

</body>
</html>

@endsection