<div class="sidebar col-sm-4 col-md-6 col-lg-8">
    <div class="text-center">
        <img src="{{ asset('images/logoevmo.png') }}" alt="Logo" class="img-fluid" style="width: 150px;">
    </div>
    {{-- @auth
        @if (auth()->user()->role == 1)
            sidebar untuk penyedia jasa
        @else
            customer biasa aja ini
        @endif --}}
        <div class="d-flex flex-column align-items-center">
            <div class="p-2">
                <a href="/"><img src="{{ asset('icon/bxs_home.png') }}" alt="home" class="img-fluid" style="width: 30px;"></a>
            </div>
            {{-- @if (auth()->user()->role == 1) --}}
            {{-- @if($role==1) --}}
                <div class="p-2">
                    <a href="/datapesanan"><img src="{{ asset('icon/icon-park-solid_transaction.png') }}" alt="Detail Pesanan" class="img-fluid" style="width: 30px;"></a>
                </div>
            {{-- @else --}}
            <div class="p-2">
                <a href="/status_pemesanan"><img src="{{ asset('icon/icon-park-solid_transaction.png') }}" alt="Detail Pesanan" class="img-fluid" style="width: 30px;"></a>
            </div>
            {{-- @endif --}}
            {{-- <div class="p-2">
                <a href="/notifikasi"><img src="{{ asset('icon/iconamoon_notification-fill.png') }}" alt="Notification" class="img-fluid" style="width: 30px;"></a>
            </div> --}}
            <div class="p-2">
                <a href="/profilcust"><img src="{{ asset('icon/iconamoon_profile-fill.png') }}" alt="Profil" class="img-fluid" style="width: 30px;"></a>
            </div>
            <div class="p-2">
                <a href="https://wa.me"><img src="{{ asset('icon/ri_whatsapp-fill.png') }}" alt="WhatsApp" class="img-fluid" style="width: 30px;"></a>
            </div>
            <div class="p-2">
                <a href="/helpcenter"><img src="{{ asset('icon/ic_baseline-help.png') }}" alt="Help Center" class="img-fluid" style="width: 30px;"></a>
            </div>
        </div>
    {{-- @else
        KOSONG AJA YA
    @endauth --}}
</div>
