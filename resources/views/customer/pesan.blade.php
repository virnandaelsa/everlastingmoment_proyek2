@extends('layouts.app')

@section('content')
<div class="main-content">
    <form action="{{ route('pesan.store') }}" method="POST">
        @csrf
        @php
        foreach ($errors->all() as $message) {
            $messages[] = $message;
        }
        @endphp
        {{-- @if($errors->has('tanggal')) --}}
        {{-- {{dd($data2->katalog->detailPJ->pengguna->id_user)}} --}}
        <input type="text" style="visibility:hidden" name="id_user" value="{{auth()->user()->id_user}}">
        <input type="text" style="visibility:hidden" name="id_katalog" value="{{$data1->katalog->id_katalog}}">
        <input type="text" style="visibility:hidden" name="id_dt_katalog" value="{{$data1->id_dt_katalog}}">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="material-icons">close</i>
              </button>
            </div>
        @endif
            <div class="header">
                <h1>Detail Pesanan</h1>
                @php
                    $pp=$data2->katalog->detailPJ->pengguna->foto;
                    $gpaket=$data1->gambar;
                @endphp
                <img src='{{asset("/images/avatar/$pp")}}' alt="User Profile" class="profile-pic">
            </div>
            <div class="order-detail">
                <div class="order-header">
                    <img src='{{asset("/images/catalogs/$gpaket")}}' alt="Paket Make Up Arabian Look" class="package-img">
                    <div class="package-info">
                    <div class="vendor-info">{{$data2->katalog->detailPJ->nama_toko}}</div>
                        <h2>{{$data2->katalog->judul}}</h2>
                        <span>{{$data1->judul_variasi." | Biaya : Rp ".$data1->harga}},-</span>
                        <br><span>{{"PEMBAYARAN DP 50% -> Biaya : Rp ".$data1->harga/2}},-</span>
                        <div class="rating">
                            <p>⭐ 4.7 / 5</p>
                            <p>45 terpakai</p>
                        </div>
                    </div>
                </div>

                    <div class="order-details">
                        <div class="order-item">
                            <span class="label">Tanggal pelaksanaan acara:</span>
                            <input type="datetime-local" class="value datetime" name="tanggal">
                            @if($errors->has('tanggal')) {{($messages[0])}} @endif
                        </div>
                        <hr>
                        <div class="order-item">
                            <span class="label">Keterangan:</span>
                            <input type="text" class="value datetime" placeholder="Detail Pemesananan" name="keterangan" style="width:100%;">
                            @if($errors->has('tanggal')) {{($messages[1])}} @endif
                        </div>
                        <hr>
                        <div class="order-item">
                            <span class="label">Metode Pembayaran</span>
                            <span class="value">Segera lakukan DP sebesar 50% ( Rp {{$data1->harga/2}},-) apabila pesanan telah di validasi</span>
                            <span class="value">No. Rekening : </span>
                            <span class="value bank">
                                <select name="bank" id="bank">
                                    <option value="BRI">BANK BRI</option>
                                    <option value="Mandiri">BANK Mandiri</option>
                                    <option value="BCA">BANK BCA</option>
                                    <option value="BNI">BANK BNI</option>
                                </select>
                            </span>
                        </div>
                        <hr>
                        <div class="order-item">
                            <span class="label">Rincian Pesanan</span>
                            <div class="value">
                                <p>{{$data2->katalog->deskripsi}}</p>
                                {{-- <p>Biaya lengkap pengantin</p>
                                <p>Biaya Jasa</p>
                                <p>Down Payment</p>
                                <p>Total Pembayaran</p> --}}
                            </div>
                        </div>
                        <hr>
                        <div class="order-item">
                            <span class="label">Alamat Pemesan</span>
                            <span class="value">{{auth()->user()->nama}} | {{auth()->user()->no_telp}}<br>{{auth()->user()->alamat}}</span>
                            {{-- {{dd(auth()->user())}} --}}
                        </div>
                    </div>
            </div>
            <button class="order-button" type="submit">Buat Pesanan</button>
        </div>
    </form>
@endsection
