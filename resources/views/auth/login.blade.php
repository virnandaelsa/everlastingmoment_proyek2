<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    <div class="container">
        <div class="left-panel">
            <div class="logo">
                <img src="{{ asset('images/logoevmo.png') }}" alt="Logo">
                <h1>everlasting<br>moments</h1>
            </div>
        </div>
        <div class="right-panel">
            @if (session('loginError'))
            <div class="alert alert-success" style="color: red">
                {{session('loginError')}}
              </button>
            </div>
            @endif
            <h2>Welcome!</h2>
            <form method="POST" action="/login">
                @csrf
                <div class="input-group">
                    <input name="username" type="text" placeholder="username" required>
                </div>
                <div class="input-group">
                    <input name="password" type="password" placeholder="password" required>
                </div>
                <button type="submit">SIGN IN</button>
                <p>Belum punya akun? <a href="/registrasi">Daftar</a></p>
            </form>
        </div>
    </div>
</body>
</html>
