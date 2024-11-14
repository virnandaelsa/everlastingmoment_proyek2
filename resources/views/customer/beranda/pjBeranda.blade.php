<style>
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    .container {
      display: flex;
      height: 100%;
      width: 100%;
    }

    

    .right {
      width: 50%;
      height: 100%;
      background-color: #988D8F;
      padding: 20px 60px ;
    }

    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .left {
        background-color: #CFCDD4;
        width: 50%;
        padding: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center; /* Menyelaraskan konten di tengah vertikal */
        align-items: center; /* Menyelaraskan konten di tengah horizontal */
        text-align: center; /* Teks diratakan ke tengah */
    }


    .judul {
        font-size: 20px; /* Ukuran font besar untuk judul */
        font-weight: bold; /* Menebalkan teks judul */
        margin-bottom: 10px; /* Jarak bawah */
        color: #333; /* Warna teks */
        justify-content: center;
    }

    .description {
        font-size: 18px;
        margin-bottom: 10px; /* Jarak bawah */
        color: #666; /* Warna teks lebih terang */
        justify-content: center;
    }

    button.btn-primary {
        font-size: 16px; /* Ukuran font tombol */
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
        margin-left: 30px; /* Remove any margin to keep it flush with the left */
    }

    .btn-primary {
        background-color: #365B80; /* Set the background color (green) */
        color: white; /* Set the text color */
        border-color: #365B80; /* Set the border color to match the background */
        margin-left: 30px;
    }

</style>
<div class="penawaran my-4">
    {{-- @auth @if (auth()->user()->role==1) --}}
    @if($role==1)
    <h4 class="bold-text">Tambah Katalog Anda Sekarang!</h4>
    <button class="btn btn-primary" onclick="window.location.href='/tambah_katalog'">Tambah Katalog</button>
    @endif
    {{-- @endif @endauth --}}
</div>

<div class="container">
    <div class="left">
        <h1 class="judul">Everlasting Moments</h1>
        <p class="description">BUAT PERNIKAHAN IMPIAN ANDA MENJADI KENYATAAN</p>
        <button class="btn btn-primary" onclick="window.location.href='/tambah_katalog'">Tambah Katalog</button>
    </div>
    <div class="right">
        <!-- Carousel Bootstrap -->
        <div id="weddingCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('images/wedding dekor.jpg') }}" class="d-block w-100" alt="Wedding Dekor 1">
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/wedding dekor 2.jpg') }}" class="d-block w-100" alt="Wedding Dekor 2">
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/wedding dekor 3.jpg') }}" class="d-block w-100" alt="Wedding Dekor 3">
                </div>
            </div>
            <!-- Kontrol Carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#weddingCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#weddingCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>


{{-- @auth @if (auth()->user()->role==1) --}}
@if($role==1)
<div class="recommendations my-4">
    <div class="header-row">
        <h6 class="bold-text">KATALOG SAYA</h6>
        <button class="btn btn-primary" onclick="window.location.href='/tambah_katalog'">Tambah Katalog</button>
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
