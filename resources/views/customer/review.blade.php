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
        margin-top: 20px;
    }

    .product-image {
        width: 150px; /* Adjust the width as needed */
        height: auto;
        margin-right: 20px; /* Space between image and text */
        border-radius: 8px;
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

    /* Style untuk tombol kembali */
    .button-container {
            margin-top: 20px;
            text-align: right;
        }
        .button-container button {
            padding: 10px 20px;
            background-color: #337ab7;
            color: whithe;
            border: 2px solid #337ab7;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }

        .button-container button:hover {
            background-color: white;
            color: #337ab7;
        }

  </style>
</head>
<body>
  <div class="container">
    <h1>Review</h1>
    <img src="profile-pic.jpg" alt="Profile Picture" class="profile-pic">
  </div>

  <div class="review-container">
  <div class="produk">
    <img src="path/to/your/image.jpg" alt="Product Image" class="product-image">
        <div class="product-details">
            <h2>Paket Make Up Arabian Look</h2>
            <p>Rp. 6.000.000,00</p>
            <p>45 terpakai</p>
        </div>
    </div>



    <h3>Kualitas Jasa:</h3>
<form class="penilaian-jasa">
    <div class="penilaian-bintang">
        <input type="radio" id="bintang5" name="rating" value="5">
        <label for="bintang5" title="5 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>

        <input type="radio" id="bintang4" name="rating" value="4">
        <label for="bintang4" title="4 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>

        <input type="radio" id="bintang3" name="rating" value="3">
        <label for="bintang3" title="3 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>

        <input type="radio" id="bintang2" name="rating" value="2">
        <label for="bintang2" title="2 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>

        <input type="radio" id="bintang1" name="rating" value="1">
        <label for="bintang1" title="1 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>
    </div>
    <textarea name="komentar" placeholder="Tambahkan komentar Anda di sini..." rows="3" cols="100"></textarea>
    
</form>


    <h3>Ketepatan Jasa :</h3>
    <form class="penilaian-jasa">
    <div class="penilaian-bintang">
        <input type="radio" id="bintang5" name="rating" value="5">
        <label for="bintang5" title="5 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>

        <input type="radio" id="bintang4" name="rating" value="4">
        <label for="bintang4" title="4 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>

        <input type="radio" id="bintang3" name="rating" value="3">
        <label for="bintang3" title="3 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>

        <input type="radio" id="bintang2" name="rating" value="2">
        <label for="bintang2" title="2 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>

        <input type="radio" id="bintang1" name="rating" value="1">
        <label for="bintang1" title="1 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>
    </div>
    <textarea name="komentar" placeholder="Tambahkan komentar Anda di sini..." rows="3" cols="100"></textarea>
    
</form>

<h3>Pelayanan Jasa :</h3>
<form class="penilaian-jasa">
    <div class="penilaian-bintang">
        <input type="radio" id="bintang5" name="rating" value="5">
        <label for="bintang5" title="5 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>

        <input type="radio" id="bintang4" name="rating" value="4">
        <label for="bintang4" title="4 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>

        <input type="radio" id="bintang3" name="rating" value="3">
        <label for="bintang3" title="3 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>

        <input type="radio" id="bintang2" name="rating" value="2">
        <label for="bintang2" title="2 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>

        <input type="radio" id="bintang1" name="rating" value="1">
        <label for="bintang1" title="1 bintang">
            <img src="star-empty.png" alt="Bintang">
        </label>
    </div>
    <textarea name="komentar" placeholder="Tambahkan komentar Anda di sini..." rows="3" cols="100"></textarea>
    
</form>

    <h3>Foto Hasil :</h3>
    <input type="file" accept="image/*">

    <div class="button-container">
    <button class="button">Kirim</button>
    <div>
  </div>
</body>
</html>
@endsection