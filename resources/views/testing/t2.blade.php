t2 PENGGUNA DAN PENGGUNA JASA
<br>
@foreach ($user as $data )
@if (isset($data->detailPJ))
nama_toko:{{ $data->detailPJ->nama_toko }}<br>
kategori:{{ $data->detailPJ->kategori }}<br>
bank:{{ $data->detailPJ->bank }}<br>
no_rek:{{ $data->detailPJ->no_rek }}<br>
@endif
{{ $data->nama }}<br>
{{ $data->no_telp }}<br>
alamat:{{ $data->alamat }}<br>
username:{{ $data->username }}<br>
password:{{ $data->password }}<br>
role:{{ $data->role }}<br>
<br>
@endforeach
{{dd($user)}}