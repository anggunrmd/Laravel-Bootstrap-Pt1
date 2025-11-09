<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // Tampilkan form & daftar mahasiswa
    public function index()
    {
        $mahasiswas = Mahasiswa::all();  // ambil semua data
        return view('form_tabel', compact('mahasiswas'));
    }


    // Simpan data mahasiswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|unique:mahasiswas,nim',
            'jurusan' => 'required|string|max:255',
        ]);

        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
        ]);

        return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }
}
