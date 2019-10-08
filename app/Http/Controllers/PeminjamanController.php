<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;
use App\Petugas;
use App\Peminjam;
use Session;
use auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('adminbackend.peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $petugas = Petugas::all();
        $peminjam = Peminjam::all();
        $peminjaman = Peminjaman::all();
        return view('adminbackend.peminjaman.create', compact('peminjaman', 'petugas', 'peminjam'));
        // compact peminjaman ini ngambilnya di $peminjaman
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjaman = new Peminjaman();
        $peminjaman->petugas_id = $request->petugas_nama;
        $peminjaman->peminjams_id = $request->peminjam_nama;
        $peminjaman->pjm_tgl = $request->pjm_tgl;
        $peminjaman->pjm_tglkembali = $request->pjm_tglkembali;

        $peminjaman->save();
        return redirect()->route('peminjaman.index')->with('success', 'berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id\
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $petugas = Petugas::all();
        $peminjam = Peminjam::all();
        $peminjaman = Peminjaman::all();
        return view('adminbackend.peminjaman.create', compact('petugas', 'peminjam', 'peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = Petugas::all();
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjam = Peminjam::all();
        return view('adminbackend.peminjaman.edit', compact('petugas', 'peminjaman', 'peminjam'));
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
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->petugas_id = $request->petugas_nama;
        $peminjaman->peminjams_id = $request->peminjam_nama;
        $peminjaman->pjm_tgl = $request->pjm_tgl;
        $peminjaman->pjm_tglkembali = $request->pjm_tglkembali;
        $peminjaman->save();
        return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrfail($id)->delete();
        return redirect()->route('peminjaman.index');
    }
}
