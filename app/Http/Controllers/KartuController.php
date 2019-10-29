<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kartu;
use App\Petugas;
use App\Peminjam;

class KartuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartu = Kartu::all();
        return view('adminbackend.kartu.index', compact('kartu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kartu = Kartu::all();
        $peminjam = Peminjam::all();
        $petugas = Petugas::all();
        return view('adminbackend.kartu.create', compact('kartu', 'peminjam', 'petugas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kartu = new Kartu();
        $kartu->id_petugas = $request->nama_petugas;
        $kartu->id_peminjam = $request->peminjam_nama;
        $kartu->kartu_tgl_pembuatan = $request->kartu_tgl_pembuatan;
        $kartu->kartu_tgl_akhir = $request->kartu_tgl_akhir;
        $kartu->kartu_status_aktif = $request->kartu_status_aktif;

        $kartu->save();
        return redirect()->route('kartu.index')->with('success', 'berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kartu = Kartu::findOrFail($id);
        $peminjam = Peminjam::all();
        $petugas = Petugas::all();
        return view('adminbackend.kartu.show', compact('kartu', 'peminjam', 'petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kartu = Kartu::findOrFail($id);
        $peminjam = Peminjam::all();
        $petugas = Petugas::all();
        return view('adminbackend.kartu.edit', compact('kartu', 'peminjam', 'petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kartu = Kartu::findOrFail($id);
        $kartu->id_petugas = $request->nama_petugas;
        $kartu->id_peminjam = $request->peminjam_nama;
        $kartu->kartu_tgl_pembuatan = $request->kartu_tgl_pembuatan;
        $kartu->kartu_tgl_akhir = $request->kartu_tgl_akhir;
        $kartu->kartu_status_aktif = $request->kartu_status_aktif;

        $kartu->save();
        return redirect()->route('kartu.index')->with('success', 'berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kartu = Kartu::findOrfail($id)->delete();
        return redirect()->route('kartu.index');
    }
}
