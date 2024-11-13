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

<div class="category my-4">
    <h4 class="bold-text" style="margin-bottom: 10px">Kategori</h4>
    <div class="d-flex flex-wrap justify-content-start" style="margin-left: -50px">
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
    <h4 class="bold-text">Rekomendasi</h4>
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
