    <div class="penawaran my-4">
        {{-- @auth @if (auth()->user()->role==1) --}}
        @if($role==1)
        <h4 class="bold-text">Tambah Katalog Anda Sekarang!</h4>
        <a href="/tambah_katalog" class="btn btn-primary">TAMBAH KATALOG</a>
        @endif
        {{-- @endif @endauth --}}
    </div>
    {{-- @auth @if (auth()->user()->role==1) --}}
    @if($role==1)
    <div class="recommendations my-4">
        <h4 class="bold-text">KATALOG SAYA</h4>
        <div class="d-flex flex-wrap">
            @foreach ($data1 as $katalog)
            <div class="card">
                @php
                    if (isset($katalog->dt_katalog[0]->gambar)) {
                        $gambar = $katalog->dt_katalog[0]->gambar;
                    }
                    else {
                        $gambar=asset("images/logoevmo.png");
                    }
                @endphp
                <a href='{{ asset("images/catalogs/$gambar") }}'>
                    <img src='{{ asset("images/catalogs/$gambar") }}' onerror="this.onerror=null; this.src='{{ $gambar }}';" class="card-img-top" alt="MUA">
                </a>
                    {{-- <div class="card-body">
                    <h5 class="card-title">Wedding Make Up Paket</h5>
                    <p class="card-text">Rp. 5.000.000,00</p>
                    <div class="move-right">
                        <a href="/lihatjasa" class="">Lihat detail</a>
                    </div>
                </div> --}}
            </div>
            @endforeach
        </div>
    <div class="recommendations my-4">
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
    </div>
    @endif
    {{-- @endif @endauth --}}
