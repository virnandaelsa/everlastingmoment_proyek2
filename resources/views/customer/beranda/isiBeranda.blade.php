<style>
    body, html {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Full-width Banner */
    .banner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100vw; /* Lebar penuh layar */
        height: 500px; /* Sesuaikan tinggi dengan desain */
        background-color: #d3cfcf; /* Warna background utama */
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

</style>

<div class="penawaran my-4">
    {{-- <h4 class="bold-text">Penawaran hari Ini!!!</h4>
    <p>Diskon 50%</p> --}}
    {{-- <div class="d-flex flex-wrap">
        <div class="card">
            <img style="width:50px" src="{{ asset('images/categories/Beautician.png') }}" class="card-img-top" alt="MUA">
            <div class="card-body">
                <h5 class="card-title">Wedding Make Up Paket</h5>
                <p class="card-text">Rp. 5.000.000,00</p>
                <div class="move-right">
                    <a href="/lihatjasa" class="">Lihat detail</a>
                </div>
            </div>
        </div>
    </div> --}}
</div>

<div class="banner">
    <div class="left">
        <h1 class="judul">Everlasting Moments</h1>
        <p class="description">BUAT PERNIKAHAN IMPIAN ANDA MENJADI KENYATAAN</p>
        <button class="btn btn-primary">Tambah Katalog</button>
    </div>
    <div class="right">
        <div id="weddingCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/wedding dekor.jpg') }}" class="d-block w-100" alt="Wedding Dekor 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/wedding dekor 2.jpg') }}" class="d-block w-100" alt="Wedding Dekor 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/wedding dekor 3.jpg') }}" class="d-block w-100" alt="Wedding Dekor 3">
                </div>
            </div>
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


<div class="category my-4">
    <h4 class="bold-text" style="margin-bottom: 10px margin-left: 50px">Kategori</h4>
    <div class="d-flex flex-wrap justify-content-start" style="margin-left: 50px">
    {{-- @foreach ([
            ['name' => 'MUA', 'image' => 'Beautician.png'],
            ['name' => 'Dekorasi', 'image' => 'Beautiful Wedding Ribbon.png'],
            ['name' => 'Sound Systems', 'image' => 'Subwoofer.png'],
            ['name' => 'Cathering', 'image' => 'Buffet Breakfast.png'],
            ['name' => 'Wedding Organizer', 'image' => 'Tasklist.png'],
            ['name' => 'Photography', 'image' => 'SLR Camera.png'],
            ['name' => 'Undangan', 'image' => 'Letter.png'],
            ['name' => 'Souvenir', 'image' => 'Favorite Package.png']
        ] as $category) --}}
        @foreach ($data as $category)
        <div class="category-item p-2">
                <div class="text-center">
                    <img class="category-icon" src="{{ asset('images/categories/' . $category['gambar_kategori']) }}" alt="{{ $category['judul_kategori'] }}">
                    {{-- <!-- <img class="category-icon" src="{{ asset('images/categories/' . $category['image']) }}" alt="{{ $category['name'] }}"> --> --}}
                </div>
                <p>{{ $category['judul_kategori'] }}</p>
                {{-- <!-- <p>{{ $category['name'] }}</p> --> --}}
            </div>
        @endforeach
    {{-- @endforeach --}}
    </div>
</div>



<div class="recommendations my-4">
    <h4 class="bold-text" style="text-align: center;">Rekomendasi</h4>
    <div class="d-flex flex-wrap">
        {{-- <div class="card">
            <img style="width: 300px; height:150px" src="{{ asset('images/categories/Beautician.png') }}" class="card-img-top" alt="MUA">
            <div class="card-body">
                <h5 class="card-title">Wedding Make Up Paket</h5>
                <p class="card-text">Rp. 5.000.000,00</p>
                <div class="move-right">
                    <a href="/lihatjasa" class="">Lihat detail</a>
                </div>
            </div>
        </div> --}}
        @foreach($data2 as $katalog)
        <div class="card">
            <?php
                if (isset($katalog->dt_katalog[0]->gambar)) {
                    # code...
                    $gambar = $katalog->dt_katalog[0]->gambar;
                }
                else {
                    $gambar=asset("images/logoevmo.png");
                }
                if (isset($katalog->dt_katalog[0]->harga)) {
                    # code...
                    $harga = $katalog->dt_katalog[0]->harga;
                }
                else {
                    # code...
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
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
