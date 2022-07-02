<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    
    public function index()
    {
        return view('pendaftaran.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn'              => 'required|unique:pendaftaran|integer',
            'nama'              => 'required',
            'nama_ibu'          => 'required',
            'asal_sekolah'      => 'required',
            'daftar_sekolah'    => 'required',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required',
            'alamat'            => 'required',
        ]);
        
        Pendaftaran::create([
            'nisn'              => $request->nisn,
            'nama'              => $request->nama,
            'nama_ibu'          => $request->nama_ibu,
            'asal_sekolah'      => $request->asal_sekolah,
            'daftar_sekolah'    => $request->daftar_sekolah,
            'tempat_lahir'      => $request->tempat_lahir,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'alamat'            => $request->alamat,
        ]);

        return redirect()->route('pendaftaran')->with('sukses', 'Data Anda Berhasil Terkirim.');
    }
}
