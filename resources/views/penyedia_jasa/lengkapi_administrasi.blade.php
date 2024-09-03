<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Administrasi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/data.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="header text-center bg-dark text-white py-3">
    <img src="{{ asset('images/logoevmo.png') }}" alt="Logo" class="img-fluid" style="max-width: 150px;">
</div>
<div class="container mt-5">
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

    <h1 class="text-center mb-4">FORM ADMINISTRASI</h1>
    <form method="POST" enctype="multipart/form-data" action="{{ route('sfa') }}">
        @csrf
        <div class="form-group">
            <label for="namaToko">Nama Toko:</label>
            <input type="text" class="form-control" id="namaToko" name="namaToko" required>
        </div>
        
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
        </div>

        <div class="form-group">
            <label for="provinsi">Provinsi:</label>
            <select id="provinsi" name="provinsi" required>
                <option value="Jawa Timur">Pilih Provinsi</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kota">Kota / Kabupaten:</label>
            <select id="kota" name="kota" required>
                <option value="Kediri">Pilih Kota / Kabupaten</option>
            </select>
        </div>

        <div class="form-group">
            <label>Kategori:</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="makeUpArtist" name="kategori" value="Make Up Artist" required>
                <label class="form-check-label" for="makeUpArtist">Make Up Artist</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="fotografi" name="kategori" value="Fotografi & Vidografi" required>
                <label class="form-check-label" for="fotografi">Fotografi & Vidografi</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="dekorasi" name="kategori" value="Dekorasi" required>
                <label class="form-check-label" for="dekorasi">Dekorasi</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="percetakan" name="kategori" value="Percetakan Undangan" required>
                <label class="form-check-label" for="percetakan">Percetakan Undangan</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="soundSystem" name="kategori" value="Sound System" required>
                <label class="form-check-label" for="soundSystem">Sound System</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="sovenir" name="kategori" value="Sovenir" required>
                <label class="form-check-label" for="sovenir">Sovenir</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="catering" name="kategori" value="Catering" required>
                <label class="form-check-label" for="catering">Catering</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="weddingOrganizer" name="kategori" value="Wedding Organizer" required>
                <label class="form-check-label" for="weddingOrganizer">Wedding Organizer</label>
            </div>
        </div>

        <div class="form-group">
            <label for="namaBank">Nama Bank:</label>
            <select class="form-control" id="namaBank" name="namaBank" required>
                <option value="">Pilih Nama Bank</option>
                <option value="BRI">BANK BRI</option>
                <option value="Mandiri">BANK Mandiri</option>
                <option value="BCA">BANK BCA</option>
                <option value="BNI">BANK BNI</option>
            </select>
        </div>

        <div class="form-group">
            <label for="noRekening">No Rekening:</label>
            <input type="text" class="form-control" id="noRekening" name="no_rek" required>
        </div>

        <div class="form-group">
            <label for="fotoProfil">Upload Foto Profil Toko:</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="fotoProfil" name="fotoProfil" accept="image/*" required>
                <label class="custom-file-label" for="fotoProfil">Choose file</label>
            </div>
        </div>

        <div class="form-group">
            <label for="fotoSampul">Upload Foto Sampul Toko:</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="fotoSampul" name="fotoSampul" accept="image/*" required>
                <label class="custom-file-label" for="fotoSampul">Choose file</label>
            </div>
        </div>

        <button type="submit" class="btn btn-success">SUBMIT</button>
        <button type="button" class="btn btn-secondary" onclick="goBack()">KEMBALI</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function goBack() {
        window.history.back();
    }

    // Custom file input label update
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
</body>
</html>
