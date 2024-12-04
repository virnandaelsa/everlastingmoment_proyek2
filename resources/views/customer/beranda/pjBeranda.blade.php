<style>

body, html {
        margin: 0;
        padding: 0;
        width: 100%;
    }

    /* Full-width Banner */
    .banner {
    margin: 0; /* Hilangkan margin */
    padding: 0; /* Hilangkan padding */
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100vw; /* Lebar penuh viewport */
    max-width: 100%; /* Batasi lebar maksimal */
    height: 500px; /* Sesuaikan tinggi */
    background-color: #d3cfcf; /* Warna background */
    position: relative;
}

    /* Bagian Kiri */
    .banner .left {
        width: 50%;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center; /* Vertically center the content */
        align-items: center; /* Horizontally center the content */
        color: #333;
        position: relative;
        z-index: 1;
        text-align: center; /* Ensure the text is centered */
    }

    .banner .judul {
        font-family: 'Georgia', serif;
        font-size: 2.5rem;
        color: #000;
    }

    .banner .description {
        font-family: 'Arial', sans-serif;
        font-size: 1.2rem;
        color: #000;
    }

    .banner .btn-primary {
        font-size: 16px;
        border-radius: 10px;
        background-color: #1F4E79;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .banner .btn-primary:hover {
        background-color: #163B5C;
    }

    /* Bagian Kanan dengan Carousel */
    .banner .right {
        width: 50%; /* Setengah bagian dari banner */
        height: 100%;
        position: relative;
        background-color: #988D8F; /* Warna background di belakang carousel */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .banner .carousel-inner img {
        max-width: 80%; /* Ukuran gambar diperkecil */
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: block; /* Pastikan gambar tidak melampaui container */
        margin: 0 auto;
    }


    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%; /* Circular buttons */
        padding: 10px; /* Increase padding for larger buttons */
        width: 40px; /* Size of the icon button */
        height: 40px; /* Size of the icon button */
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px solid rgba(0, 0, 0, 0.5); /* Optional border for visibility */
    }

    @media (max-width: 768px) {
        .banner {
            flex-direction: column;
            height: auto;
        }
        .banner .left, .banner .right {
            width: 100%;
        }
        .banner .carousel-inner img {
            width: 90%;
        }
    }

    .header-row{
        margin-top: 20px;
        display: flex;
        justify-content: center; /* Horizontal alignment */
        align-items: center; /* Vertical alignment */
        text-align: center;
    }

</style>

<div class="banner">
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
        <h4 class="bold-text">KATALOG SAYA</h6>
    </div>
    <div class="d-flex flex-wrap">
    @foreach($data1 as $katalog)
        <div class="card">
            <?php
                if (isset($katalog['detail_katalog'][0]['gambar'])) {
                    # code...
                    $gambar = $katalog['detail_katalog'][0]['gambar'];
                }
                else {
                    $gambar=asset("images/logoevmo.png");
                }
                if (isset($katalog['detail_katalog'][0]['harga'])) {
                    # code...
                    $harga = $katalog['detail_katalog'][0]['harga'];
                }
                else {
                    # code...
                    $harga='';
                }
            ?>
            <img src="{{'http://127.0.0.1:8000/images/gambar_detail_katalog/'. $gambar}}" onerror="this.onerror=null; this.src='{{ $gambar }}';"
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
