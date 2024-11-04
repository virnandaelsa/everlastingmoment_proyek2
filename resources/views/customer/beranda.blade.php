@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Opsional: Tambahkan beberapa gaya pada tombol */
        .tombol-gambar {
            display: inline-block;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .gambar img {
            display: block;
            width: 50px;
            /* Sesuaikan lebar sesuai kebutuhan */
            height: auto;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: right;
            align-items: right;
        }

        .popup {
            background: #F3F5F9;
            padding: 20px;
            border-radius: 10px;
            width: 550px;
            max-width: 100%;
        }

        .popup h2 {
            margin-top: 0;
        }

        .filter-section {
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .filter-section h3 {
            margin: 10px 0;
        }

        .filter-section .checkbox-group,
        .filter-section .checkbox2,
        .filter-section .range-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .filter-section .checkbox-group label,
        .filter-section .checkbox2 label,
        .filter-section .range-buttons label {
            flex: 1 1 15%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background: #4d8fba;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            border: 1px solid transparent;
        }

        .filter-section .checkbox-group input[type="checkbox"],
        .filter-section .checkbox2 input[type="checkbox"],
        .filter-section .range-buttons input[type="checkbox"] {
            display: none;
        }

        .filter-section .checkbox-group input[type="checkbox"]:checked+label,
        .filter-section .checkbox2 input[type="checkbox"]:checked+label,
        .filter-section .range-buttons input[type="checkbox"]:checked+label {
            background: white;
            color: #4d8fba;
            border: 1px solid #2a5f8e;
        }

        .filter-section button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            background: #4d8fba;
            border: none;
            color: white;
            cursor: pointer;
        }


        .filter-section input {
            width: calc(50% - 20px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .filter-section1 input {
            width: calc(100% - 10px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .filter-section input::placeholder {
            color: #ccc;
        }

        .filter-section .range-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;

        }

        .filter-section .range-buttons button {
            flex: 1;
        }


        .apply-button {
            text-align: center;
        }

        .apply-button button {
            padding: 10px 20px;
            background: white;
            border: none;
            color: #4d8fba;
            cursor: pointer;
            border: 1px solid #ccc;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        /* Media query untuk hp */
        @media (max-width: 480px) {
            .popup {
                width: 95%;
                /* Sesuaikan width untuk hp */
            }

            .filter-section .checkbox-group label,
            .filter-section .checkbox2 label,
            .filter-section .range-buttons label {
                flex: 1 1 100%;
                /* Sesuaikan lebar label untuk hp */
            }

            .gambar img {
                width: 30px;
                /* Sesuaikan lebar gambar untuk hp */
            }
        }

        /* Media query untuk laptop */
        @media (min-width: 769px) {
            .popup {
                width: 550px;
                /* Kembali ke ukuran asli untuk laptop */
            }

            .filter-section .checkbox-group label,
            .filter-section .checkbox2 label,
            .filter-section .range-buttons label {
                flex: 1 1 15%;
                /* Kembali ke ukuran asli untuk laptop */
            }
        }

    </style>
</head>
    <div class="content">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="material-icons">close</i>
              </button>
            </div>
        @endif
        <div class="top-bar">
            <div class="search-bar">
                <input type="text" placeholder="Jasa Make Up Pengantin">
                @auth
                @else
                <a href="/registrasi" class="btn-signup">SIGN UP</a>
                <a href="/login" class="btn-signin">SIGN IN</a>
                @endauth
                <button onclick="showPopup()">
                    <img src="{{ asset('images/filter.png') }}" alt="Gambar Tombol">
                </button>
            </div>
        </div>
        @auth
            @if (auth()->user()->role==1)
                @include('customer.beranda.pjBeranda')
            @endif
        @endauth
        @auth
            @if (auth()->user()->role==0)
                @include('customer.beranda.isiBeranda')
            @endif
        @endauth
        @guest
            @include('customer.beranda.isiBeranda')
        @endguest
    </div>
{{-- </div> --}}

<div class="overlay" id="filterPopup">
    <div class="popup">
        <button class="close-button" onclick="hidePopup()">&times;</button>
        <div class="filter-section">
            <h3>Lokasi</h3>
            <div class="filter-section1">
                <input type="text" placeholder="Provinsi/Kota">
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="jabodetabek" name="lokasi" value="Jabodetabek">
                <label for="jabodetabek">Jabodetabek</label>
                <input type="checkbox" id="jakarta" name="lokasi" value="DKI Jakarta">
                <label for="jakarta">DKI Jakarta</label>
                <input type="checkbox" id="jabar" name="lokasi" value="Jawa Barat">
                <label for="jabar">Jawa Barat</label>
                <input type="checkbox" id="jatim" name="lokasi" value="Jawa Timur">
                <label for="jatim">Jawa Timur</label>
            </div>
        </div>
        <div class="filter-section1">
            <input type="text" placeholder="Tema">
        </div>
        <div class="filter-section1">
            <input type="text" placeholder="Lain - Lain">
        </div>
        <div class="filter-section">
            <h3>Batas Harga (Rp)</h3>
            <input type="text" placeholder="MIN"> -
            <input type="text" placeholder="MAX">
            <div class="range-buttons">
                <input type="checkbox" id="range1" name="harga" value="0-75RB">
                <label for="range1">1jt-5jt</label>
                <input type="checkbox" id="range2" name="harga" value="75RB-150RB">
                <label for="range2">5jt-10jt</label>
                <input type="checkbox" id="range3" name="harga" value="150RB-200RB">
                <label for="range3">10jt-20jt</label>
            </div>
        </div>
        <div class="filter-section">
            <h3>Rating</h3>
            <div class="checkbox2">
                <input type="checkbox" id="star5" name="bintang" value="5">
                <label for="star5">Bintang 5</label>
                <input type="checkbox" id="star4" name="bintang" value="4">
                <label for="star4">Bintang 4</label>
                <input type="checkbox" id="star3" name="bintang" value="3">
                <label for="star3">Bintang 3</label>
                <input type="checkbox" id="star2" name="bintang" value="2">
                <label for="star2">Bintang 2</label>
                <input type="checkbox" id="star1" name="bintang" value="1">
                <label for="star1">Bintang 1</label>
            </div>
        </div>
        <div class="apply-button">
            <button onclick="hidePopup()">Pakai</button>
        </div>
    </div>
</div>

<script>
    function showPopup() {
        document.getElementById('filterPopup').style.display = 'flex';
    }

    function hidePopup() {
        document.getElementById('filterPopup').style.display = 'none';
    }
</script>
@endsection
