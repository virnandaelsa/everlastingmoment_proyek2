<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        body {
            background-image: url('{{ asset('images/backgroundlogin.png') }}');
            background-size: cover; /* Ensure the image covers the entire background */
            background-position: center; /* Center the image */
        }
    </style>
</head>
<body>
<div class="d-">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

<div class="container">
        <div class="left-panel">
            <div class="logo">
                <img src="{{ asset('images/logoevmo.png') }}" alt="Logo">
                <h1>everlasting<br>moments</h1>
            </div>
        </div>
        <div class="right-panel">

            <h2>Welcome!</h2>
            <form method="POST" action="/registrasi">
                @csrf
                <div class="input-group">
                    <input value="{{ old('nama') }}" type="text" name="nama" placeholder="nama" required>
                </div>
                <div class="input-group">
                    <input value="{{ old('no_telp') }}" type="tel" name="no_telp" placeholder="no. telepon" required>
                </div>
                <div class="input-group">
                    <input value="{{ old('alamat') }}" type="text" name="alamat" placeholder="alamat Kota Saja" required>
                </div>
                <div class="input-group">
                    <input value="{{ old('email') }}" type="email" name="email" placeholder="email" required>
                </div>
                <div class="input-group">
                    <input value="{{ old('username') }}" type="text" name="username" placeholder="username" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="password" required>
                </div>
                <button type="submit">SIGN UP</button>
                <p>Sudah punya akun? <a href="/login">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
