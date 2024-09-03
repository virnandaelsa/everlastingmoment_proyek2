t1 ONLY PENGGUNA JASA
<br>
@foreach ($user as $data )
nama_toko:{{ $data->nama_toko }}<br>
kategori:{{ $data->kategori }}<br>
bank:{{ $data->bank }}<br>
no_rek:{{ $data->no_rek }}<br>
{{ $data->pengguna->nama }}<br>
{{ $data->pengguna->no_telp }}<br>
alamat:{{ $data->pengguna->alamat }}<br>
username:{{ $data->pengguna->username }}<br>
password:{{ $data->pengguna->password }}<br>
role:{{ $data->pengguna->role }}<br>
@endforeach
{{dd($user)}}