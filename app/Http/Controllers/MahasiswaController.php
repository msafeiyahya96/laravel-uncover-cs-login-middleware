<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function login() {
        return view('form_login');
    }

    public function prosesLogin(Request $request) {
        $request->validate([
            'username'  => 'required'
        ]);

        $validUsername  = ['muhammad', 'safei', 'yahya'];

        if (in_array($request->username, $validUsername)) {
            session(['username' => $request->username]);
            return redirect('/daftar-mahasiswa');
        } else {
            return back()->withInput()->with('pesan', "Username tidak valid!");
        }
    }

    public function logout() {
        session()->forget('username');
        return redirect('/login')->with('pesan', 'Logout Berhasil');
    }
    
    public function daftarMahasiswa() {
        return view('halaman', ['judul' => "Daftar Mahasiswa"]);
    }

    public function tabelMahasiswa() {
        return view('halaman', ['judul' => "Tabel Mahasiswa"]);
    }

    public function blogMahasiswa() {
        return view('halaman', ['judul' => "Blog Mahasiswa"]);
    }

}
