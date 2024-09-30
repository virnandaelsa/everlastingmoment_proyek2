@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="form-title">Edit Katalog</h2>
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

        <form action="{{ route('catalog.update', $catalog->id_katalog) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="judul-jasa">Judul Jasa</label>
                <input type="text" class="form-control" id="judul-jasa" name="judul_jasa" value="{{ $catalog->judul }}" required>
            </div>

            <div class="form-group">
                <label for="deskripsi-jasa">Deskripsi Jasa</label>
                <input type="text" class="form-control" id="deskripsi_jasa" name="deskripsi_jasa" value="{{ $catalog->deskripsi }}" required>
            </div>

            <!-- <div class="add-service-btn" onclick="addServiceDetailGroup()">
                Tambah Variasi
                <img src="{{ asset('images/plus.png') }}" alt="Tambah Icon">
            </div> -->

            <div class="form-group">
                <label for="nomor-rekening">Nomor Rekening</label>
                <input type="text" class="form-control" id="nomor-rekening" name="nomor_rekening" value="{{ $catalog->nomor_rekening }}" readonly>
            </div>

            <button type="submit" class="btn btn-block">Update</button>
        </form>
    </div>
</div>

<script>
    function addServiceDetailGroup() {
        const serviceDetailGroup = document.querySelector('.service-detail-group');
        const newServiceDetailGroup = serviceDetailGroup.cloneNode(true);

        newServiceDetailGroup.querySelectorAll('input').forEach(input => {
            input.value = '';
        });

        document.getElementById('service-details-container').appendChild(newServiceDetailGroup);
    }

    function removeServiceDetailGroup(element) {
        const serviceDetailGroup = element.closest('.service-detail-group');
        serviceDetailGroup.remove();
    }
</script>

@endsection
