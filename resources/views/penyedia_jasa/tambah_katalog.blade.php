{{-- @dd($user) --}}
@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #F3F5F9;
        }
        .container{
            margin-top: 20px;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: 50px auto;
        }
        .form-title {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }
        .form-group label {
            font-weight: bold;
        }
        .file-input-wrapper {
            display: flex;
            align-items: center;
        }
        .file-input-wrapper img {
            max-width: 50px;
            margin-right: 10px;
        }
        .add-service-btn {
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-top: 10px;
            color: #007bff;
        }
        .add-service-btn img {
            max-width: 20px;
            margin-left: 10px;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
            margin-bottom: 20px;
        }
        .top-bar img {
            max-height: 50px;
        }
        .btn-block {
            background-color: #365B80;
            color: #ffff;
            padding: 10px 0;
        }
        .btn-back {
            background-color: #6c757d;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .service-detail-group {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .remove-service-btn {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: #dc3545;
            margin-top: 10px;
        }
        .remove-service-btn img {
            max-width: 20px;
            margin-left: 10px;
        }
    </style>
    {{-- @dd($data) --}}

    <h2 class="form-title">Tambah Katalog</h2>
    <div class="form-container">
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

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('catalog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul-jasa">Judul jasa</label>
                <input type="text" class="form-control" id="judul-jasa" name="judul_jasa" required placeholder="Judul jasa">
            </div>
            <div class="form-group">
                <label for="deskripsi-jasa">Deskripsi jasa</label>
                <input type="text" class="form-control" id="deskripsi_jasa" name="deskripsi_jasa" required placeholder="Deskripsi jasa">
            </div>
            <div class="form-group">
                <label for="kategori-jasa">Kategori jasa</label>
                <input class="form-control" id="kategori-jasa" name="kategori_jasa" value="{{ $data['kategori'] }}" readonly></input>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $user['alamat'] }}" placeholder="Alamat" readonly>
            </div>
            <div class="form-group">
                <label for="nomor-telepon">Nomor telepon</label>
                <input type="text" class="form-control" id="nomor-telepon" value="{{ $user['no_telp'] }}" name="nomor_telepon"  readonly placeholder="Nomor telepon">
            </div>
            {{-- <div class="form-group">
                <label for="gambar-katalog">Gambar katalog jasa</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="gambar-katalog" name="gambar_katalog" required>
                    <label class="custom-file-label" for="gambar-katalog">Choose file</label>
                </div>
            </div> --}}

            <div class="tax-warning" id="tax-warning" >
                * Setiap transaksi dikenakan pajak 2,5% 
            </div>

            <div id="service-details-container">
                <div class="service-detail-group">
                    <div class="form-group">
                        <label for="judul-jasa-tawaran">Judul variasi</label>
                        <input type="text" class="form-control" id="judul-jasa-tawaran" name="judul_jasa_tawaran" placeholder="Judul Jasa">
                    </div>
                    <div class="form-group">
                        <label for="biaya">Harga</label>
                        <input type="text" class="form-control" id="biaya" name="biaya" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label for="gambar-jasa">Gambar jasa</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar-jasa" name="gambar_jasa" max="5" >
                            <label class="custom-file-label" for="gambar-jasa">Choose file</label>
                        </div>
                    </div>
                    <div class="remove-service-btn" onclick="removeServiceDetailGroup(this)">
                        Hapus Variasi
                        <img src="{{ asset('images/hps.png') }}" alt="Hapus Icon">
                    </div>
                    <hr>
                </div>
            </div>
            <div class="add-service-btn" onclick="addServiceDetailGroup()">
                Tambah Variasi
                <img src="{{ asset('images/plus.png') }}" alt="Tambah Icon">
            </div>

            <div class="form-group">
                <label for="kategori-jasa">BANK</label>
                <input class="form-control" id="kategori-jasa" value="{{ $data['bank'] }}" name="kategori_jasa" readonly>
                    <!-- Tambahkan opsi lain sesuai kebutuhan -->
                </input>
            </div>
            <div class="form-group">
                <label for="nomor-rekening">Nomor rekening</label>
                <input type="text" value="{{ $data['no_rek'] }}" class="form-control" id="nomor-rekening" name="nomor_rekening" placeholder="Nomor rekening" readonly>
            </div>
            <button type="submit" class="btn btn-block">KIRIM</button>
        </form>
    </div>

    
    <div class="container">
        <a href="/" class="btn-back mb-3">Kembali</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init();
        });

        function addServiceDetailGroup() {
            const serviceDetailGroup = document.querySelector('.service-detail-group');
            const newServiceDetailGroup = serviceDetailGroup.cloneNode(true);

            // Kosongkan nilai input pada grup yang dikloning
            newServiceDetailGroup.querySelectorAll('input').forEach(input => {
                input.value = '';
            });

            // Hapus tombol hapus pada grup pertama jika hanya ada satu grup
            if (document.querySelectorAll('.service-detail-group').length === 1) {
                serviceDetailGroup.querySelector('.remove-service-btn').remove();
            }

            document.getElementById('service-details-container').appendChild(newServiceDetailGroup);
            bsCustomFileInput.init();
        }

        function removeServiceDetailGroup(element) {
            const serviceDetailGroup = element.closest('.service-detail-group');
            serviceDetailGroup.remove();
        }

        document.addEventListener('DOMContentLoaded', (event) => {
        document.getElementById('tax-warning').innerHTML += '!';
        });


    </script>
@endsection
