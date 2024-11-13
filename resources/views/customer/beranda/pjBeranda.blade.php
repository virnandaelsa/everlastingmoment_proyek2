<style>
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    .container {
      display: flex;
      height: 50vh;
      width: 100%;
    }

    

    .right {
      width: 50%;
      background-color: #e0e0e0;
      padding: 10px 30px ;
    }

    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .left {
        background-color: #f5f5f5;
        width: 50%;
        padding: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start; /* Menyelaraskan konten ke kiri */
        text-align: left; /* Memastikan teks diratakan ke kiri */
        gap: 20px; /* Menambahkan jarak antar elemen */
    }

    .title {
        font-size: 20px; /* Ukuran font besar untuk judul */
        font-weight: bold; /* Menebalkan teks judul */
        margin-bottom: 20px; /* Jarak bawah */
        color: #333; /* Warna teks */
        justify-content: center;
    }

    .description {
        font-size: 18px;
        margin-bottom: 30px; /* Jarak bawah */
        color: #666; /* Warna teks lebih terang */
        justify-content: center;
    }

    button.btn-primary {
        font-size: 16px; /* Ukuran font tombol */
        padding: 12px 24px; /* Menambahkan padding di tombol */
        border-radius: 8px; /* Membuat sudut tombol lebih melengkung */
        background-color: #365B80; /* Warna latar tombol */
        color: white; /* Warna teks tombol */
        cursor: pointer; /* Mengubah kursor ketika tombol dihover */
        transition: background-color 0.3s ease; /* Efek transisi ketika tombol dihover */
        justify-content: center;
    }

    button.btn-primary:hover {
        background-color: #2c4765; /* Warna latar tombol saat dihover */
    }

    .header-row {
        display: flex; /* Use flexbox to align items in a row */
        justify-content: space-between; /* Space out the items to the left and right */
        align-items: center; /* Vertically center the items */
        margin: 20px;
    }

    .bold-text {
        margin: 0; /* Remove any margin to keep it flush with the left */
    }

    .btn-primary {
        background-color: #365B80; /* Set the background color (green) */
        color: white; /* Set the text color */
        border-color: #365B80; /* Set the border color to match the background */
        margin: 20px;
    }

</style>
<div class="penawaran my-4">
    {{-- @auth @if (auth()->user()->role==1) --}}
    @if($role==1)
    <h4 class="bold-text">Tambah Katalog Anda Sekarang!</h4>
    <a href="/tambah_katalog" class="btn btn-primary">TAMBAH KATALOG</a>
    @endif
    {{-- @endif @endauth --}}
</div>

<div class="container">
    <div class="left">
      <h1 class="title"  >Everlasting Moments</h1>
      <p class="description">BUAT PERNIKAHAN IMPIAN ANDA MENJADI KENYATAAN</p>
      <button class="btn btn-primary">Tambah Katalog</button>
    </div>
    <div class="right">
        <img src="{{ asset('images/wedding dekor.jpeg') }}" alt="Wedding photo">
    </div>
  </div>

{{-- @auth @if (auth()->user()->role==1) --}}
@if($role==1)
<div class="recommendations my-4">
    <div class="header-row">
        <h6 class="bold-text">KATALOG SAYA</h6>
        <a href="/tambah_katalog" class="btn btn-primary">TAMBAH KATALOG</a>
    </div>
    <div class="d-flex flex-wrap">
    @foreach($data1 as $katalog)
        <div class="card">
            <?php
                if (isset($katalog->dt_katalog[0]->gambar)) {
                    $gambar = $katalog->dt_katalog[0]->gambar;
                }
                else {
                    $gambar=asset("images/logoevmo.png");
                }
                if (isset($katalog->dt_katalog[0]->harga)) {
                    $harga = $katalog->dt_katalog[0]->harga;
                }
                else {
                    $harga='';
                }
            ?>
            <img src="{{filter_var(asset("images/catalogs/$gambar"), FILTER_VALIDATE_URL)}}" onerror="this.onerror=null; this.src='{{ $gambar }}';"
                class="card-img-top" alt="{{$gambar}}" style="width: 300px; height:150px">
            <div class="card-body">
                <h5 class="card-title">{{$katalog['judul']}}</h5>
                <p class="card-text">{{$harga}}</p>
                <div class="move-right">
                    <a href="/lihatjasa/{{$katalog['id_katalog']}}" class="">Lihat detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
<!-- <div class="recommendations my-4">
    <h4 class="bold-text">REVIEW</h4>
    <div class="d-flex flex-wrap">

        @foreach($data1 as $katalog)
        <div class="card">
            <?php
                if (isset($katalog->dt_katalog[0]->gambar)) {
                    $gambar = $katalog->dt_katalog[0]->gambar;
                }
                else {
                    $gambar=asset("images/logoevmo.png");
                }
                if (isset($katalog->dt_katalog[0]->harga)) {
                    $harga = $katalog->dt_katalog[0]->harga;
                }
                else {
                    $harga='';
                }
            ?>
            <img src="{{filter_var(asset("images/catalogs/$gambar"), FILTER_VALIDATE_URL)}}" onerror="this.onerror=null; this.src='{{ $gambar }}';"
                class="card-img-top" alt="{{$gambar}}" style="width: 300px; height:150px">
            <div class="card-body">
                <h5 class="card-title">{{$katalog['judul']}}</h5>
                <p class="card-text">{{$harga}}</p>
                <div class="move-right">
                    <a href="/lihatjasa/{{$katalog['id_katalog']}}" class="">Lihat detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> -->
@endif
{{-- @endif @endauth --}}
