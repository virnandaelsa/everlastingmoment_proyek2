<style>
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

<div class="container">
    <div class="left">
        <h1 class="judul">Everlasting Moments</h1>
        <p class="description">BUAT PERNIKAHAN IMPIAN ANDA MENJADI KENYATAAN</p>
        <button class="btn btn-primary">Tambah Katalog</button>
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
