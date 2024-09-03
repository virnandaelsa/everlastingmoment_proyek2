@extends('layouts.app')

@section('content')
        <div class="main-content">
        <div class="top-bar">
            <div class="search-bar">
                <input type="text" placeholder="Jasa Make Up Pengantin">
                @auth
                @else
                <a href="/registrasi" class="btn-signup">SIGN UP</a>
                <a href="/login" class="btn-signin">SIGN IN</a>
                @endauth
            </div>
        </div>
            <div class="package col-lg-12 col-sm-8">
            <div class="package row">
            <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php $i=0?>
                        @foreach ($data1->dt_katalog as $gambar )
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class=" {{$i==0?'active':''}}"></li>
                        <?php $i++ ?>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                    <?php $i=0?>
                        @foreach ($data1->dt_katalog as $gambar )
                        <?php $img=$gambar->gambar; ?>
                            <div class="carousel-item {{$i==0?'active':''}}">
                                <img class="d-block w-100" style="height:200px;" 
                                    src='{{ asset("images/catalogs/$img") }}' alt="{{"image"}}">
                            </div>
                        <?php $i++ ?>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="thumbnails mt-3">
                    <?php $i=0?>
                        @foreach ($data1->dt_katalog as $gambar )
                        <?php $img=$gambar->gambar; ?>
                            <img src='{{ asset("images/catalogs/$img") }}' alt="{{"gambar"}}" class="thumbnail {{$i==0?'':''}}" 
                                    data-target="#carouselExampleIndicators" data-slide-to="{{$i}}">
                        <?php $i++ ?>
                        @endforeach
                </div>
            </div>
            <div class="col-md-6 package-info">
                <h1>{{$data2->judul}}</h1>
                <p>{{($data2->detailPJ->nama_toko)}}</p>
                <p>{{($data2->detailPJ->kategori)}}</p>
                @foreach ($data1->dt_katalog as $data)
                    <p class="text-dark">{{$data->judul_variasi}} : Rp {{$data->harga}},- </p>
                @endforeach
                <div class="rating">
                    <span>⭐ 4.7 / 5</span>
                    <span>45 terpakai</span>
                </div>
            </div>
        </div>
        <hr>
        <div class="description">
            <h2>Deskripsi</h2>
            <p>{{$data1->deskripsi}}</p>
            {{-- <p>Arabian look identik dengan riasan di bagian mata dengan ciri penggunaan bulu mata yang tebal dan menggunakan model smokey eyes. Arabian makeup menggunakan eyeshadow yang lebih dari satu warna karena memanfaatkan style bold make up.</p> --}}
            {{-- <p>Paket 1:</p>
            <ul>
                <li>Make up pengantin wanita (beserta hairdo/hijabdo) dan pengantin pria</li>
                <li>Make up 4 orang tua (2 wanita dan 2 pria)</li>
                <li>Make up 4 terima tamu</li>
            </ul>
            <p>Paket 2:</p>
            <ul>
                <li>Make up pengantin wanita (beserta hairdo/hijabdo) dan pengantin pria</li>
                <li>Make up 4 orang tua (2 wanita dan 2 pria)</li>
            </ul>
            <p>Paket 3:</p>
            <ul>
                <li>Make up pengantin wanita (beserta hairdo/hijabdo) dan pengantin pria</li>
            </ul> --}}
        </div>
        <hr>
        <div class="categories">
            <h2>Kategori : </h2>
            <p>{{$data2->detailPJ->kategori}}</p>
    </div>
    @php
        $url = explode('/', "$_SERVER[REQUEST_URI]");
        $url = end($url);
    @endphp
    @auth
        @if (auth()->user()->role==1)
        @else
        <div class="footer">
            <a href="https://wa.me/{{$data2->detailPJ->pengguna->no_telp}}"><button class="chat">Chat</button></a>
            @foreach ($data1->dt_katalog as $data)
                <a href="/pesan/{{$data->id_dt_katalog}}"><button class="order">Pesan ({{$data->judul_variasi}})</button></a>
            @endforeach
        </div>
        @endif
    @else
    <div class="footer">
        <a href="https://wa.me/{{$data2->detailPJ->pengguna->no_telp}}"><button class="chat">Chat</button></a>
        <a href="/pesan/{{$url}}"><button class="order">Pesan</button></a>        
    </div>
    @endauth
    </div>

    <script>
        function changeSlide(image) {
            document.getElementById('slide-img').src = image;
            var thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach(function(thumbnail) {
                thumbnail.classList.remove('active');
            });
            event.target.classList.add('active');
        }
    </script>
@endsection
