<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\detailPJ;
use App\Models\katalog;
use App\Models\dt_katalog;
use App\Models\transaksi;
use App\Models\dt_transaksi;
use App\Models\review;

class TestingController extends Controller
{
    public function t1()
    {
        $user = detailPJ::with('pengguna')->get();
        return view('testing.t1', [
            'user' => $user
            ] );
    }
    public function t2()
    {
        // $user = User::all();
        $user = User::with('detailPJ')->get();
        return view('testing.t2', [
            'user' => $user
            ] );
    }
    public function t3()
    {
        $data1 = katalog::with('detailPJ')->get();
        $data2 = dt_katalog::with('katalog')->get();
        $data3 = katalog::with('dt_katalog')->get();
        return view('testing.t3', [
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3
            ] );
    }
    public function t4()
    {
        $data1 = detailPJ::with('katalog.dt_katalog')->get();
        $data2 = dt_katalog::with('katalog')->get();
        $data3 = katalog::with('dt_katalog')->get();
        return view('testing.t4', [
            'data1' => $data1,
            // 'data2' => $data2,
            // 'data3' => $data3
            'pageTitle' => 'Katalog'
            ] );
    }
    public function t5()
    {
        $data1 = katalog::with('transaksi.dt_transaksi')->get();
        $data2 = transaksi::with('katalog.transaksi.dt_transaksi')->get();
        $data3 = katalog::with('dt_katalog')->get();
        return view('testing.t4', [
            'data1' => $data1,
            // 'data2' => $data2,
            // 'data3' => $data3
            'pageTitle' => 'Transaksi'
            ] );
    }
    public function t6()
    {
        $data1 = katalog::with('transaksi.review')->get();
        $data2 = transaksi::with('katalog.transaksi.dt_transaksi')->get();
        $data3 = katalog::with('dt_katalog')->get();
        return view('testing.t4', [
            'data1' => $data1,
            // 'data2' => $data2,
            // 'data3' => $data3,
            'pageTitle' => 'Review'
            ] );
    }
    public function t7()
    {
        $data1 = User::with('detailPJ.katalog.transaksi.dt_transaksi')->get();
        $data2 = transaksi::with('katalog.transaksi.dt_transaksi')->get();
        $data3 = katalog::with('dt_katalog')->get();
        return view('testing.t4', [
            'data1' => $data1,
            // 'data2' => $data2,
            // 'data3' => $data3
            ] );
    }
}
