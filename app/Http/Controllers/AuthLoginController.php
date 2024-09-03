<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|unique:pengguna',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required||max:14|unique:pengguna',
            'username' => 'required|string|unique:pengguna',
            'password' => 'required|string|min:8',
        ], [
            'nama.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'alamat.required' => 'Alamat bekerja harus diisi',
            'no_tlp.required' => 'No_tlp harus diisi',
            'username.required' => 'Username harus diisi',
            'password.min' => 'Password minimal 8',
        ]);

        // Hash password
        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = new User();
        $user->nama = $validatedData['nama'];
        $user->email = $validatedData['email'];
        $user->alamat = $validatedData['alamat'];
        $user->no_telp = $validatedData['no_telp'];
        $user->username = $validatedData['username'];
        $user->password = $validatedData['password'];
        $succ = $user->save();

        // Redirect kembali ke halaman kelola karyawan dengan pesan sukses
        if ($succ){
            return redirect('/login')->with('success', 'Berhasil Melakukan pendaftaran');
        } else {
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function auth(Request $request)
    {
        $credential = $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        if(Auth::Attempt($credential)){
            $request->session()->regenerate();
            return redirect("/");
        }

        return back()->with('loginError', 'Login Gagal');
    }

    /**
     * Display the specified resource.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
