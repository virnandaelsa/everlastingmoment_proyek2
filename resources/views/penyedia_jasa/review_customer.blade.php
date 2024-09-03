@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Review</title>
  <style>
    body {
      font-family: sans-serif;
    }
    .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
    }
    .logo {
      width: 50px;
    }
    .profile-pic {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }
    .review-container {
      padding: 20px;
      /* border: 1px solid #ccc; */
      border-radius: 5px;
      margin-left:70px;
    }
    .service-rating {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    .service-description {
      margin-bottom: 10px;
    }
    .button {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .produk {
        display: flex;
        align-items: center;
        padding: 20px;
        /* background-color: #F3F5F9; */
        border-radius: 8px;
    }

    .product-image {
        width: 150px; /* Adjust the width as needed */
        height: auto;
        margin-right: 20px; /* Space between image and text */
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1); 
    }

    .product-details {
        display: flex;
        flex-direction: column;
    }

    .product-details h2 {
        margin: 0;
        font-size: 24px;
        color: #000;
    }

    .product-details h3 {
        margin: 10px 0;
        font-size: 18px;
        color: black;
    }

    .product-details p {
        margin: 5px 0;
        color: #333;
    }
    .product-details span {
        font-size: 20px; /* Ukuran font bintang */
        color: #FFD700;
    }
    .card {
        border-radius: 8px; /* Radius sudut card */
        box-shadow: 0 0 10px rgba(0,0,0,0.1); 
        margin-bottom: 10px;
        padding: 15px;
    }
    .circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-left: 15px;
            background: black;
            overflow: hidden;
            display: flex;
            justify-content: left;
            align-items: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.1); 
        }
        .circle img {
            width: 100%;
            height: auto;
        }
        .review1 {
            display: flex;
        }
        .review1 a {
            display: flex;
            color: black;
            margin: 0 0 0 10px;
            font-weight: bold;
            align-items: center;
        }
    .rating {
      font-size: 20px; /* Ukuran font bintang */
      color: #FFD700; /* Warna bintang (kuning) */
      display: flex;
      align-items: center;
      margin-top: 10px;
      margin-left: 10px;
    }
    .rating span {
      margin-right: 1px; /* Jarak antar bintang */
    }
    .review-text {
        margin: 5px, 20px;
        margin-top: 5px;
        margin-left: 20px;
        margin-right: 20px;
        color: black;
        font-weight: normal;
    }

  </style>
</head>
<body>
  <div class="container">
    <h1>Review Customer</h1>
    <img src="profile-pic.jpg" alt="Profile Picture" class="profile-pic">
  </div>

  <div class="review-container">
  <div class="produk">
    <img src="E\KMIPN\O.png" alt="Product Image" class="product-image">
        <div class="product-details">
            <h2>Paket Make Up Arabian Look</h2>
            <p>Rp. 6.000.000,00</p>
            <p><span>&#9733;</span> 4.7/5</p>
            <p>45 terpakai</p>
        </div>
    </div>

    <div class="card">
        <div class="review1">
            <div class="circle">
                <img src="{{ asset('images/your-image.jpg') }}" alt="Rounded Image">
            </div>
            <a>pengguna1</a>
        </div>
            <div class="rating">
                    <span>&#9733;</span> <!-- Bintang Unicode -->
                    <span>&#9733;</span> <!-- Bintang Unicode -->
                    <span>&#9733;</span> <!-- Bintang Unicode -->
                    <span>&#9733;</span> <!-- Bintang Unicode -->
                    <span>&#9733;</span> <!-- Bintang Unicode -->
            </div>
            <p class="review-text">Pelayanannya memuaskan. Hasil Make UP nya juga rapi. Pokoknya seneng banget dan puas banget pilih SerbaMUA. Alat Make Up nya juga bersih semua. Luv banget sama SerbaMUA....</p>
    </div>

    <div class="card">
        <div class="review1">
            <div class="circle">
                <img src="{{ asset('images/your-image.jpg') }}" alt="Rounded Image">
            </div>
            <a>pengguna2</a>
        </div>
            <div class="rating">
                    <span>&#9733;</span> <!-- Bintang Unicode -->
                    <span>&#9733;</span> <!-- Bintang Unicode -->
                    <span>&#9733;</span> <!-- Bintang Unicode -->
                    <span>&#9733;</span> <!-- Bintang Unicode -->
                    <span>&#9733;</span> <!-- Bintang Unicode -->
            </div>
            <p class="review-text">Pelayanannya memuaskan. Hasil Make UP nya juga rapi. Pokoknya seneng banget dan puas banget pilih SerbaMUA. Alat Make Up nya juga bersih semua. Luv banget sama SerbaMUA....</p>
    </div>


@endsection