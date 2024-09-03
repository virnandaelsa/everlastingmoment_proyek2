@extends('layouts.app')

@section('content')
<style>
    .search-bar {
        margin: 20px 0;
        text-align: center;
        position: relative;
    }

    .search-bar input[type="text"] {
        width: 50%;
        padding: 10px;
        border-radius: 20px;
        border: 1px solid #ccc;
    }

    .btn-signup, .btn-signin {
        padding: 10px 20px;
        background-color: #4682B4;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 10px;
    }

    .container {
        width: 90%;
        margin: auto;
    }

    .add-catalog {
        text-align: left;
        margin: 20px 0;
    }

    .add-catalog a.button-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4682B4;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
    }

    .catalog-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .catalog {
        display: flex;
        overflow: hidden;
        width: 70%;
    }

    .catalog img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        margin: 10px;
        transition: transform 0.3s ease;
    }

    .prev-btn, .next-btn {
        background-color: #4682B4;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        margin: 10px;
    }

    .reviews {
        display: flex;
        flex-wrap: wrap;
    }

    .review-card {
        flex: 1 0 45%;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 10px;
        margin: 10px;
        box-sizing: border-box;
        display: flex;
    }

    .review-card img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
        margin-right: 10px;
    }

    .review-card > div {
        flex: 1;
    }
</style>

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
            <img src="user-profile.jpg" alt="User Profile" class="profile-pic">
        </div>
    </div>

    <div class="add-catalog">
        <h4><strong>Tambah Katalog Anda Sekarang!</strong></h4>
        <a href="/tambah_katalog" class="button-link">Tambah Katalog</a>
    </div>

    <div class="catalog-container">
        <div class="catalog">
            <img src="catalog1.jpg" alt="Make Up 1">
            <img src="catalog2.jpg" alt="Make Up 2">
            <img src="catalog3.jpg" alt="Make Up 3">
            <img src="catalog4.jpg" alt="Make Up 4">
        </div>
        <div class="button-group">
            <button class="prev-btn">←</button>
            <button class="next-btn">→</button>
        </div>
    </div>

    <h2>Review Customer</h2>
    <div class="reviews">
        <div class="review-card">
            <img src="review1.jpg" alt="Review 1">
            <p>@pengguna_1</p>
            <p>Pelayanannya memuaskan. Hasil Make UP nya juga rapi. Pokoknya seneng banget dan puas banget pilih SerbaMUA. Alat Make Up nya juga bersih semua. Luv banget sama SerbaMUA...</p>
        </div>
        <div class="review-card">
            <img src="review2.jpg" alt="Review 2">
            <p>@pengguna_2</p>
            <p>Puas sama hasil make up nya. Cocok di muka aku. Cuman ngecrack lama-lama. Selebihnya oke banget.</p>
        </div>
    </div>
</div>

<script>
    const catalog = document.querySelector('.catalog');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    nextBtn.addEventListener('click', () => {
        catalog.scrollBy({
            left: 160, // 150px width + 10px margin
            behavior: 'smooth'
        });
    });

    prevBtn.addEventListener('click', () => {
        catalog.scrollBy({
            left: -160,
            behavior: 'smooth'
        });
    });
</script>

@endsection
