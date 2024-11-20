@extends('layouts.app')

@section('content')
        <div class="main-content">
        <div class="top-bar">
            <div class="search-bar">
                <input type="text" placeholder="Jasa Make Up Pengantin">
                <img src="profile-pic.jpg" alt="Profile Picture" class="profile-pic">
            </div>
        </div>
        <div class="package">
            <div class="package row">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="makeup1.jpg" alt="Makeup Package 1">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="makeup2.jpg" alt="Makeup Package 2">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="makeup3.jpg" alt="Makeup Package 3">
                            </div>
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
                        <img src="makeup1.jpg" alt="Makeup 1" class="thumbnail active" data-target="#carouselExampleIndicators" data-slide-to="0">
                        <img src="makeup2.jpg" alt="Makeup 2" class="thumbnail" data-target="#carouselExampleIndicators" data-slide-to="1">
                        <img src="makeup3.jpg" alt="Makeup 3" class="thumbnail" data-target="#carouselExampleIndicators" data-slide-to="2">
                    </div>
                </div>
                <div class="col-md-6 package-info">
                    <h1>Paket Make Up Arabian Look</h1>
                    <p>SeMUA Evelyn</p>
                    <p>Rp. 3.000.000,00 - Rp. 6.000.000,00</p>
                    <div class="rating">
                        <span>⭐ 4.7 / 5</span>
                        <span>45 terpakai</span>
                    </div>
                </div>
            </div>
        <hr>
        <div class="description">
            <h2>Deskripsi</h2>
            <p>Arabian look identik dengan riasan di bagian mata dengan ciri penggunaan bulu mata yang tebal dan menggunakan model smokey eyes. Arabian makeup menggunakan eyeshadow yang lebih dari satu warna karena memanfaatkan style bold make up.</p>
            <p>Paket 1:</p>
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
            </ul>
        </div>
        <hr>
        <div class="categories">
            <h2>Kategori :</h2>
            <p>Make Up Artist</p>
        </div>
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
