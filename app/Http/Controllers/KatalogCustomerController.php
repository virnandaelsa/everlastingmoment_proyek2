<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Catalog;
use App\Models\katalog;
use App\Models\detailPJ;
use App\Models\kategori;
use App\Models\transaksi;
use App\Models\dt_katalog;
use App\Models\dt_transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class KatalogCustomerController extends Controller
{
    public function index()
    {
        // $data = kategori::all();
        // $data1=[];
        // if (auth()->check()) {
        //     $a=auth()->user()->role; $b=auth()->user()->id_user;
        //     // dd(auth()->user());
        //     if($a==1){
        //         $pj=DB::table('detailPJ')->where('id_user',$b)->first()->id_detailPJ;
        //         $data1 = katalog::with("dt_katalog")->get()->where('id_detailPJ','==',$pj);
        //     }
        //     }
        //     $data2 = katalog::with("dt_katalog")->get();
        //     return view('customer.beranda', [
        //         'data' => $data,
        //         'data1' => $data1,
        //         'data2' => $data2,
        //         ] );

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'http://127.0.0.1:8000/api/katalog', [
            'headers' => [
                'Authorization' => 'Bearer ' . session("token")
            ]
        ]);
        // dd(session("token"));

        $semuaData = json_decode($response->getBody()->getContents(), true);
        // dd($semuaData);

        $data  = $semuaData["data"]["kategori"];
        $data1 = [];
        $data2 = $semuaData["data"]["detail_katalog"];
        $role  = $semuaData["data"]["role"];
        if ($role == 1) {
            $data1 = $semuaData["data"]["penjual"];
        }
        $user  = $semuaData["data"]["user"];

        return view('customer.beranda', [
            'data'  => $data,
            'data1' => $data1,
            'data2' => $data2,
            'role'  => $role,
            'user'  => $user
        ]);

    }
    public function lihatjasa($id)
    {
        // $data1 = katalog::with('dt_katalog')->find($id);
        // $data2 = katalog::with('detailPJ.pengguna')->find($id);
        // // dd($data1);
        // // dd($data2);
        // return view('customer.lihatjasa',
        //     [
        //     'data1' => $data1,
        //     'data2' => $data2,
        //     ]
        // );

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'http://127.0.0.1:8000/api/lihat-jasa/' . $id, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . session("token")
            ]
        ]);

        $semuaData = json_decode($response->getBody()->getContents(), true);

        $data1 = $semuaData["data"]["detail_katalog"];
        $data2 = $semuaData["data"]["detail_penjual"];
        $data3 = $semuaData["data"]["role"];
        $data4 = $semuaData["data"]["user"];

        return view('customer.lihatjasa', [
            'data1' => $data1,
            'data2' => $data2,
            'role'  => $data3,
            'user'  => $data4
        ]);

    }
    public function pesan($id)
    {
        // $data1 = dt_katalog::with('katalog')->find($id);
        // $data2 = dt_katalog::with('katalog.detailPJ.pengguna')->find($id);

        // dd($id);

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'http://127.0.0.1:8000/api/pesan/' . $id, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . session("token")
            ]
        ]);

        $semuaData = json_decode($response->getBody()->getContents(), true);
        // dd($semuaData);

        $data1 = $semuaData["data"]["katalog"];
        $data2 = $semuaData["data"]["detail_penjual"];
        $data3 = $semuaData["data"]["user"];

        return view('customer.pesan',
            [
            'data1' => $data1,
            'data2' => $data2,
            'user'  => $data3
            ]
        );
    }
    public function store_pesan(request $request)
    {
        $request->validate(
            [
                'tanggal' => 'required',
                'keterangan' => 'required|string',
            ]
        );
        // dd($request->tanggal.$request->keterangan);
        // return redirect()->back();
        // dd($request);
            // Menambahkan data ke tabel transaksi dan mendapatkan ID yang baru
            // $transaksiId = DB::table('transaksi')->insertGetId([
            //     'id_user' => $request->id_user,
            //     'id_katalog' => $request->id_katalog,
            //     'tanggal' => $request->tanggal,
            // ]);

            // Menambahkan data ke tabel detail_transaksi dengan ID dari tabel transaksi
        //     DB::table('dt_transaksi')->insert([
        //         'id_transaksi' => $transaksiId,
        //         'ket' => $request->keterangan,
        //         'bukti_tfDP'=>'',
        //         'bukti_tfPelunasan'=>'',
        //         'status_pembayaran'=>'1'
        //     ]);
        // return redirect("/pesan/$request->id_dt_katalog")->with('success', 'Transaksi telah ditambahkan silahkan menunggu konfirmasi penyedia jasa.');

        // $data1 = katalog::with('dt_katalog')->find($id);
        // $data2 = katalog::with('detailPJ.pengguna')->find($id);
        // dd($data2);
        // return view('customer.pesan',
        //     [
        //     'data1' => $data1,
        //     'data2' => $data2,
        //     ]
        // );

        // dd($request->all());

        $client = new \GuzzleHttp\Client();

        $multipartData = [
            [
                'name' => 'id_user',
                'contents' => $request->id_user,
            ],
            [
                'name' => 'id_katalog',
                'contents' => $request->id_katalog,
            ],
            [
                'name' => 'tanggal',
                'contents' => $request->tanggal,
            ],
            [
                'name' => 'keterangan',
                'contents' => $request->keterangan,
            ]
        ];

        $response = $client->request('POST', 'http://127.0.0.1:8000/api/pesan/store', [
            'headers' => [
                'Authorization' => 'Bearer ' . session("token")
            ],
            'multipart' => $multipartData
        ]);

        return redirect()->route('pesan', ['id' => $request->id_katalog])
                 ->with('success', 'Transaksi telah ditambahkan, silakan menunggu konfirmasi penyedia jasa.');
    }
    public function dp()
    {
        return view('customer.bukti_dp');
    }
    public function pelunasan()
    {
        return view('customer.pelunasan');
    }
    public function status_pesanan()
    {
        // $data1 = transaksi::with('dt_transaksi')->get()->where('id_user','=',auth()->user()->id_user)
        //                                                 ->where('status','=',1);
        // $data2 = transaksi::with('dt_transaksi')->get()->where('id_user','=',auth()->user()->id_user)
        //                                                 ->where('status','=',2);
        // $data3 = transaksi::with('dt_transaksi')->get()->where('id_user','=',auth()->user()->id_user)
        //                                                 ->where('status','=',3);
        // $data4 = transaksi::with('dt_transaksi')->get()->where('id_user','=',auth()->user()->id_user)
        //                                                 ->where('status','=',4);
        // dd($data4);
        // $data2;
        // foreach ($data1 as $data) {
        //     $eloq[]=1;
        // }
        // dd($eloq);

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'http://127.0.0.1:8000/api/pesan_status', [
            'headers' => [
                'Authorization' => 'Bearer ' . session("token")
            ]
        ]);

        $data1 = json_decode($response->getBody()->getContents(), true);

        dd($data1['data']['status_pesan']);

        return view('customer.status_pesanan',
        [
            'data1' => $data1['data']['status_pesan'],
            // 'data2' => $data2,
            ]
        );
    }
    public function wishlist()
    {
        return view('customer.wishlist');
    }

    public function login()
    {
        return view('auth.login');
    }
    public function registrasi()
    {
        return view('auth.registrasi');
    }
    public function tambah_katalog()
    {
        // $hehe = auth()->user()->id_user;
        // $data = DB::table('detailPJ')->where('id_user','=',$hehe)->get();
        // $user = DB::table('pengguna')->where('id_user','=',$hehe)->get();
        // // dd($data);

        // return view('penyedia_jasa.tambah_katalog',[
        //     'data' => $data,
        //     'user' => $user
        // ]);


        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'http://127.0.0.1:8000/api/katalog/create', [
            'headers' => [
                'Authorization' => 'Bearer ' . session("token")
            ]
        ]);

        $semuaData = json_decode($response->getBody()->getContents(), true);

        $data = $semuaData["data"]["penjual"];
        $user = $semuaData["data"]["users"];

        return view('penyedia_jasa.tambah_katalog',[
                'data' => $data,
                'user' => $user
            ]);
    }

    public function store_catalogs(Request $request)
    {
        // $request->validate([
        //     'judul_jasa' => 'required|string|max:255',
        //     'deskripsi_jasa' => 'required|string',
        //     'kategori_jasa' => 'required|string',
        //     'alamat' => 'required|string',
        //     'nomor_telepon' => 'required|string',
        //     // 'gambar_katalog' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     // 'metode_pembayaran' => 'required|string',
        //     'nomor_rekening' => 'required|string',
        // ]);

        // $user = auth()->user()->id_user;
        // $id_pj = DB::select("select * from detailPJ where id_user = $user");
        // $user = DB::table('detailPJ')->where('id_user',$user)->get();
        // $user = $user[0]->id_detailPJ;

        // $catalog = new Catalog();
        // $catalog->id_detailPJ = $id_pj[0]->id_detailPJ;
        // $catalog->judul = $request->judul_jasa;
        // $catalog->deskripsi = $request->deskripsi_jasa;
        // $catalog->save();

        // $dt_katalog = new dt_katalog();
        // $id_dt_katalog = DB::select("select id_katalog from katalog where id_detailPJ = $user order by created_at desc limit 1");
        // // dd($id_dt_katalog[0]);

        // // $catalog->kategori_jasa = $request->kategori_jasa;
        // // $catalog->alamat = $request->alamat;
        // // $catalog->nomor_telepon = $request->nomor_telepon;

        // if ($request->hasFile('gambar_jasa')) {
        //     // $image = $request->file('gambar_katalog');
        //     // $name = time().'.'.$image->getClientOriginalExtension();
        //     // $destinationPath = public_path('/images/catalogs');
        //     // $image->move($destinationPath, $name);

        //     $image = $request->file('gambar_jasa')[0];
        //     $name = time().'.'.$image->getClientOriginalExtension();
        //     $destinationPath = public_path('/images/catalogs');
        //     $image->move($destinationPath, $name);


        //     $dt_katalog->gambar = $name;
        //     $dt_katalog->judul_variasi = $request->judul_jasa_tawaran[0];
        //     $dt_katalog->harga = $request->biaya[0];
        //     $dt_katalog->id_katalog = $id_dt_katalog[0]->id_katalog;

        //     $dt_katalog->save();
        // }

        // // $catalog->metode_pembayaran = $request->metode_pembayaran;
        // // $catalog->nomor_rekening = $request->nomor_rekening;

        // return redirect()->route('catalog.create')->with('success', 'Catalog added successfully.');

        // dd($request->all());

        $client = new \GuzzleHttp\Client();

        $multipartData = [
            [
                'name'     => 'judul',
                'contents' => $request->judul_jasa
            ],
            [
                'name'     => 'deskripsi',
                'contents' => $request->deskripsi_jasa
            ],
            [
                'name'     => 'judul_variasi',
                'contents' => $request->judul_jasa_tawaran // array
            ],
            [
                'name'     => 'harga',
                'contents' => $request->biaya // array
            ]
        ];

        // Cek apakah ada file gambar
        if ($request->hasFile('gambar_jasa')) { //array
            $image = $request->file('gambar_jasa');

            // Pastikan itu adalah instance UploadedFile
            if ($image instanceof \Illuminate\Http\UploadedFile) {
                $multipartData[] = [
                    'name'     => 'gambar',  // Nama field di API
                    'contents' => fopen($image->getPathname(), 'r'),  // Buka file
                    'filename' => $image->getClientOriginalName()  // Nama asli file
                ];
            } else {
                return response()->json(['error' => 'File tidak valid'], 400);
            }
        } else {
            return response()->json(['error' => 'Tidak ada file yang diunggah'], 400);
        }

        // Kirim request
        try {
            $response = $client->request('POST', 'http://127.0.0.1:8000/api/katalog/store', [
                'headers' => [
                    'Authorization' => 'Bearer ' . session("token")
                ],
                'multipart' => $multipartData
            ]);

            // return json_decode($response->getBody()->getContents(), true);

            return redirect()->route('catalog.create')->with('success', 'Catalog added successfully.');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    public function edit_catalog($id_katalog)
    {
        // $catalog = Catalog::where("id_katalog", $id_katalog)->first();
        // $detail_katalog = dt_katalog::where('id_katalog', $id_katalog)->get();
        // // dd($detail_katalog);
        // return view('customer.editjasa', compact('catalog'));

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'http://127.0.0.1:8000/api/katalog/edit/' . $id_katalog, [
            'headers' => [
                'Authorization' => 'Bearer ' . session("token")
            ]
        ]);

        $semuaData = json_decode($response->getBody()->getContents(), true);

        $catalog = $semuaData['data']['katalog'];
        $detail_katalog = $semuaData['data']['detail_katalog'];

        return view('customer.editjasa', [
            'catalog' => $catalog,
            'detail_katalog' => $detail_katalog
        ]);

    }
    public function update_catalog(Request $request, $id_katalog)
    {
        // dd($id_katalog);
        // $request->validate([
        //     'judul_jasa' => 'required|string|max:255',
        //     'deskripsi_jasa' => 'required|string',
        // ]);

        // Update Katalog
        // $catalog = Catalog::find($id_katalog);
        // $catalog->judul = $request->judul_jasa;
        // $catalog->deskripsi = $request->deskripsi_jasa;
        // $catalog->save();

        // Update Detail Katalog
        // foreach ($request->judul_jasa_tawaran as $index => $judul) {
        //     $dt_katalog = dt_katalog::where('id_katalog', $id_dt_katalog)->skip($index)->first();
        //     if ($dt_katalog) {
        //         $dt_katalog->judul_variasi = $judul;
        //         $dt_katalog->harga = $request->biaya[$index];

        //         if (isset($request->gambar_jasa[$index])) {
        //             $image = $request->gambar_jasa[$index];
        //             $name = time() . '_' . $index . '.' . $image->getClientOriginalExtension();
        //             $destinationPath = public_path('/images/catalogs');
        //             $image->move($destinationPath, $name);
        //             $dt_katalog->gambar = $name;
        //         }

        //         $dt_katalog->save();
        //     }
        // }

        // dd($request->all());

        $client = new \GuzzleHttp\Client();

        $multipartData = [
            [
                'name'     => 'judul',
                'contents' => $request->judul_jasa
            ],
            [
                'name'     => 'deskripsi',
                'contents' => $request->deskripsi_jasa
            ],
            [
                'name'     => 'judul_variasi',
                'contents' => $request->judul_jasa_tawaran // array
            ],
            [
                'name'     => 'harga',
                'contents' => $request->biaya // array
            ]
        ];

        // Cek apakah ada file gambar
        if ($request->hasFile('gambar_jasa')) { //array
            $image = $request->file('gambar_jasa');

            // Pastikan itu adalah instance UploadedFile
            if ($image instanceof \Illuminate\Http\UploadedFile) {
                $multipartData[] = [
                    'name'     => 'gambar',  // Nama field di API
                    'contents' => fopen($image->getPathname(), 'r'),  // Buka file
                    'filename' => $image->getClientOriginalName()  // Nama asli file
                ];
            } else {
                return response()->json(['error' => 'File tidak valid'], 400);
            }
        } else {
            return response()->json(['error' => 'Tidak ada file yang diunggah'], 400);
        }

        // Kirim request
        try {
            $response = $client->request('POST', 'http://127.0.0.1:8000/api/katalog/update/'.$id_katalog, [
                'headers' => [
                    'Authorization' => 'Bearer ' . session("token")
                ],
                'multipart' => $multipartData
            ]);

            // return json_decode($response->getBody()->getContents(), true);

            return redirect()->route('lihatjasa', ['id' => $id_katalog])->with('success', 'Catalog updated successfully.');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }


    }

    public function destroy_catalog($id_katalog)
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'http://127.0.0.1:8000/api/katalog/delete/'.$id_katalog, [
            'headers' => [
                'Authorization' => 'Bearer ' . session("token")
            ]
        ]);

        // return json_decode($response->getBody()->getContents(), true);

        return redirect('/', );
    }

    public function store_administrasi(Request $request)
    {

        $request->validate([
            'namaToko' => 'required|string|max:255',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kategori' => 'required',
            'namaBank' => 'required',
            'fotoProfil' => 'required',
            'fotoSampul' => 'required',
            'no_rek' => 'required|string|unique:detailPJ',
        ],[
            'namaToko.required' => 'Nama harus diisi',
            'provinsi.required' => 'Email harus diisi',
            'alamat.required' => 'Alamat bekerja harus diisi',
            'kota.required' => 'No_tlp harus diisi',
            'namaBank.required' => 'Nama Bank harus diisi',
            'fotoProfil.required' => 'Foto Profil harus diisi',
            'fotoSampul.required' => 'Foto Sampul harus diisi',
            'no_rek.unique' => 'No Rekening sudah pernah di tambahkan',
            'kategori.required' => 'kategori harus diisi',
        ]);


        // $administrasi = new detailPJ();
        // $administrasi->id_user = auth()->user()->id_user;
        // $administrasi->nama_toko = $request->namaToko;
        // $administrasi->alamat = $request->alamat . " " . $request->kota . ", " . $request->provinsi;
        // $administrasi->kategori = $request->kategori;
        // $administrasi->bank = $request->namaBank;
        // $administrasi->no_rek = $request->no_rek;
        // $administrasi->profil_tk = $request->fotoProfil;
        // $administrasi->sampul_tk = $request->fotoSampul;

        // if ($request->hasFile("fotoProfil") || $request->hasFile("fotoSampul")) {
        //     $image = $request->file("fotoProfil");
        //     $name = time().'.'.$image->getClientOriginalExtension();
        //     $destinationPath = public_path('/images/penyedia_jasa/profil');
        //     $image->move($destinationPath, $name);
        //     $administrasi->profil_tk = $name;

        //     $image = $request->file("fotoSampul");
        //     $name = time().'.'.$image->getClientOriginalExtension();
        //     $destinationPath = public_path('/images/penyedia_jasa/sampult');
        //     $image->move($destinationPath, $name);
        //     $administrasi->sampul_tk = $name;

        // }

        // $administrasi->save();

        // $id = auth()->user()->id_user;
        // DB::update("update pengguna set role = 1 where id_user = $id");

        // return redirect("/")->with('success', 'Berhasil Menjadi Penyedia Jasa.');

        // dd($request->all());

        $client = new \GuzzleHttp\Client();

        $multipartData = [
            [
                'name' => 'nama_toko',
                'contents' => $request->namaToko
            ],
            [
                'name' => 'alamat',
                'contents' => $request->alamat . " " . $request->kota . ", " . $request->provinsi
            ],
            [
                'name' => 'kategori',
                'contents' => $request->kategori
            ],
            [
                'name' => 'bank',
                'contents' => $request->namaBank
            ],
            [
                'name' => 'no_rek',
                'contents' => $request->no_rek
            ]
        ];

        // Cek apakah ada file gambar
        if ($request->hasFile('fotoProfil')) { //array
            $image = $request->file('fotoProfil');

            // Pastikan itu adalah instance UploadedFile
            if ($image instanceof \Illuminate\Http\UploadedFile) {
                $multipartData[] = [
                    'name'     => 'fotoProfile',  // Nama field di API
                    'contents' => fopen($image->getPathname(), 'r'),  // Buka file
                    'filename' => $image->getClientOriginalName()  // Nama asli file
                ];
            } else {
                return response()->json(['error' => 'File tidak valid'], 400);
            }
        } else {
            return response()->json(['error' => 'Tidak ada file yang diunggah'], 400);
        }

        if ($request->hasFile('fotoSampul')) { //array
            $image = $request->file('fotoSampul');

            // Pastikan itu adalah instance UploadedFile
            if ($image instanceof \Illuminate\Http\UploadedFile) {
                $multipartData[] = [
                    'name'     => 'fotoSampul',  // Nama field di API
                    'contents' => fopen($image->getPathname(), 'r'),  // Buka file
                    'filename' => $image->getClientOriginalName()  // Nama asli file
                ];
            } else {
                return response()->json(['error' => 'File tidak valid'], 400);
            }
        } else {
            return response()->json(['error' => 'Tidak ada file yang diunggah'], 400);
        }

        try {
            $response = $client->request('POST', 'http://127.0.0.1:8000/api/penyedia_jasa/store', [
                'headers' => [
                    'Authorization' => 'Bearer ' . session("token")
                ],
                'multipart' => $multipartData
            ]);

            return redirect("/")->with('success', 'Berhasil Menjadi Penyedia Jasa.');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }


    public function lengkapi_administrasi()
    {
        return view('penyedia_jasa.lengkapi_administrasi');
    }

    public function pemesanan($id)
    {
        $data = transaksi::with('pengguna', 'katalog.detailPJ', 'katalog.dt_katalog','dt_transaksi')->where('id_transaksi',$id)->get();
        return view('penyedia_jasa.detail_pemesanan',[
            'data' => $data
        ]);
    }


    public function profilcust()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'http://127.0.0.1:8000/api/profile', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . session("token")
            ]
        ]);

        $semuaData = json_decode($response->getBody()->getContents(), true);

        return view('customer.profilcust', [
            'user' => $semuaData["data"]['profile'],
            'role' => $semuaData["data"]['profile']['role']
        ]);
    }

    public function datapesanan()
    {
        // $data = transaksi::with('pengguna', 'katalog.detailPJ', 'katalog.dt_katalog')->get();


        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'http://127.0.0.1:8000/api/pesan', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . session("token")
            ]
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        return view('penyedia_jasa.data_pesanan',[
            'data' => $data['data']['data_pesan'],
        ]);
    }

    public function review()
    {
        return view('customer.review');
    }

    public function helpcenter()
    {
        return view('auth.HelpCenter');
    }

    public function notifikasi()
    {
        return view('auth.notifikasi');
    }

    public function review_customer()
    {
        return view('penyedia_jasa.review_customer');
    }

    public function lihatjasa_pj()
    {
        return view('penyedia_jasa.lihatjasa');
    }
    public function dashboard()
    {
        return view('penyedia_jasa.dashboard');
    }

    public function info_akun()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'http://127.0.0.1:8000/api/account', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . session("token")
            ]
        ]);

        $semuaData = json_decode($response->getBody()->getContents(), true);

        return view('penyedia_jasa.profile', [
            'user' => $semuaData["data"]['account'],
            'role' => $semuaData["data"]['account']['role']
        ]);
    }
}

