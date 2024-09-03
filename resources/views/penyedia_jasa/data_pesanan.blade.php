@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F3F5F9;
        }

        .text-center {
            text-align: center;
        }


        .data-table {

            padding: 10px;
            border-radius: 8px;
            margin-top: 70px;
        }

        .data-table h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .data-table table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .data-table th, .data-table td {
            padding: 10px;
            text-align: left;
        }

        .data-table th {
            background-color: #6E9FC1;
            color: black;
        }

        .data-table td {
            background-color: rgba(110, 159, 193, 0.7); /* Warna latar belakang 70% opacity */
            border-bottom: 1px solid #ddd; /* Garis bawah setiap baris */
        }

        .data-table td:last-child {
            text-align: center;
        }
        /* Style untuk input pencarian */
        .search-container {
            margin-bottom: 10px;
            text-align: right;
        }
        /* Style untuk tombol kembali */
        .button-container {
            margin-top: 20px;
            text-align: right;
        }
        .button-container button {
            padding: 10px 20px;
            background-color: transparent;
            color: #337ab7;
            border: 2px solid #337ab7;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }

        .button-container button:hover {
            background-color: #337ab7;
            color: white;
        }
    </style>
</head>
<body>


<div class="content">
    <div class="data-table">
        <h1>DATA PESANAN MASUK</h1>
         <!-- Container untuk input pencarian -->
         <div class="search-container">
            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Cari...">
        </div>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Paket Pesanan</th>
                <th>Waktu</th>
                <th>Status</th>
                <th>Pembayaran</th>
                <th>Action</th>
            </tr>
            {{-- {{dd($data2)}} --}}
            @php
                $i = 0
            @endphp
            @foreach ($data as $item)

            <tr>
                <td>{{ $i+=1 }}</td>
                <td>{{ $item->pengguna->nama }}</td>
                <td>{{ ($item->dt_katalog) }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->status == 1 ? 'Pengajuan' : ($item->status == 2 ? 'Diterima' : 'Ditolak') }}</td>
                <td>Lunas</td>
                <td><a href="/pemesanan/{{ $item->id_transaksi }}"><img src="{{ asset('icon/actoin.png') }}" alt="Detail Pesanan" style="width: 30px;"></a></td>
            </tr>
            @endforeach

        </table>
        <!-- Container untuk tombol kembali -->
        <div class="button-container">
            <button onclick="goBack()">Kembali</button>
        </div>
    </div>
</div>

</body>
</html>
@endsection
