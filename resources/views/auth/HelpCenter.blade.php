@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ho+j7jyWK8fNQe+Ae7/jPizFez+NhhdFqt5g5FaT+1xCKi6Yc2jEdpwqd8tB5T1r" crossorigin="anonymous">

<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

.container {
  margin-top: 75px;
  padding: 20px;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  font-weight: bold;
}

.search-bar {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    width: 100%;
    justify-content: flex-start;
}

.search-icon {
    margin-right: 10px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}


.buttons {
  display: flex;
  justify-content: space-around;
  margin-bottom: 40px;
  margin-top: 50px;
}

button {
  padding: 10px 20px;
  background-color: #365B80;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.accordion{
    margin: 10px;
    justify-content: center;
}
.accordion-item {
    margin-bottom: 10px;
}

.accordion-header {
    /* background-color: #f8f9fa; */
    border-bottom: 1px solid #ddd;
    border-radius: 5px;
}

.accordion-header-content {
    display: flex;
    padding: 10px;
    cursor: pointer;
    justify-content: space-between; /* Memposisikan elemen secara horizontal dengan jarak di antara */
    align-items: center; /* Mengatur agar elemen berada di tengah secara vertikal */

}

.accordion-header-content[aria-expanded="true"] .arrow {
    transform: rotate(180deg); /* Mengubah rotasi ikon saat elemen terbuka */
}

.accordion-body {
    padding: 10px;
    border: 1px solid #ddd;
    border-top: none;
    border-radius: 0 0 5px 5px;
    /* background-color: #fff; */
}

.centered-text {
  display: block; /* Membuat tautan menjadi blok untuk dapat menerapkan margin kiri dan kanan secara otomatis */
  text-align: center; /* Mengatur teks menjadi rata tengah */
  font-weight: bold; /* Mengatur teks menjadi tebal */
  text-decoration: none; /* Menghapus garis bawah default dari tautan */
  padding: 5px; /* Memberikan ruang di sekitar teks */
  color: #000; /* Warna teks */
}

.costom-text {
  font-size: 14px; /* Ukuran font kecil */
  color: #888; /* Warna abu-abu */
  text-align: center;
}

.container1 {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
}

.box {
  width: 320px;
  height: 100px;
  border: 1px solid black;
  margin: 10px;
  text-align: center;
  font-size: 20px;
  padding: 10px;
}

.arrow {
    margin-left: 10px; /* Memberikan jarak antara teks dan ikon panah */
    transition: transform 0.3s ease; /* Efek transisi untuk animasi ikon */
}

.pro {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.profile {
    margin-right: 10px; /* Anda dapat menyesuaikan nilai ini */
}

.profile-img {
    border-radius: 50%;
    width: 40px;
    height: 40px;
}



</style>
</head>
<body>
  <div class="container">
    <div class="pro">
    <div class="profile">
    <img class="profile" src="profile.jpg" alt="Profile Picture">
    </div>
    </div>
    
  
    <h1>Hello, Ada yang bisa kami bantu?</h1>
    <div class="search-bar">
      <i class="search-icon fas fa-search"></i>
      <input type="text" placeholder="Ada yang bisa di bantu?">
    </div>
    <div class="buttons">
        <button>Pertanyaan Umum</button>
      
      <button>Penyedia Jasa</button>
      <button>Customer</button>
    </div>

    <div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h5 class="accordion-header" id="headingOne">
            <div class="accordion-header-content" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Bagaimana cara mendaftar sebagai penyedia jasa?
            <i class="arrow fas fa-chevron-down"></i>
            </div>
        </h5>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <strong>Caranya sebagai berikut </strong> 
            ............ 
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h5 class="accordion-header" id="headingTwo">
            <div class="accordion-header-content" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Bagaimana cara mengatur ulang password akun EVMO jika lupa pasword?
            <i class="arrow fas fa-chevron-down"></i>
            </div>
        </h5>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <strong>Caranya sebagai berikut </strong> 
            ............
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h5 class="accordion-header" id="headingThree">
            <div class="accordion-header-content" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Mengapa saya tidak bisa mendaftar dengan no.handpone saya?
            <i class="arrow fas fa-chevron-down"></i>
            </div>
        </h5>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Karena </strong> 
                ............
            </div>
        </div>
    </div>
</div>

<div class="ket">
    <p class="centered-text">Masih ada yang ingin ditanyakan?</p>
    <p class="costom-text">Jika tidak menemukan jawaban di FAQ kami, silahkan hubungi kami. 
    <br>Kami akan segera memberikan jawaban! </p>
</div>

<div class="container1">
  <div class="box">
    <strong>+62 823-4567-8901</strong>
    
    <br>
    Kami senang membantu
  </div>
  <div class="box">
    <strong>everlastingmoment@gmail.com</strong>
    
    <br>
    Kami senang membantu
  </div>
</div>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

      <script>
    const questions = document.querySelectorAll('.question');

    questions.forEach(question => {
        question.addEventListener('click', () => {
            question.classList.toggle('active');
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#accordionPanelsStayOpenExample .accordion-collapse').collapse({
            toggle: false
        });
    });
</script>


@endsection