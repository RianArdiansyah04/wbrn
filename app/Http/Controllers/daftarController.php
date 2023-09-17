<?php

namespace App\Http\Controllers;

use App\Models\daftar;
use Illuminate\Http\Request;

class daftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tabelpeserta')->with(['data' => daftar::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registrasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'notelp' => 'required',
            'pesan' => 'required',
        ]);

        $daftar = new daftar;
        $daftar->nama = $request->nama;
        $daftar->kelas = $request->kelas;
        $daftar->jurusan = $request->jurusan;
        $daftar->notelp = $request->notelp;
        $daftar->pesan = $request->pesan;
        $daftar->save();

        return to_route('registrasi.index')->with('success', 'Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit')->with(['data' => daftar::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'notelp' => 'required',
            'pesan' => 'required',
        ]);

        $registrasi = daftar::find($id);
        $registrasi->nama = $request->nama;
        $registrasi->kelas = $request->kelas;
        $registrasi->jurusan = $request->jurusan;
        $registrasi->notelp = $request->notelp;
        $registrasi->pesan = $request->pesan;
        $registrasi->save();

        return to_route('registrasi.index')->with('success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
