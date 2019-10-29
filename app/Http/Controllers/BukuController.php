<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;
use App\Penerbit;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('adminbackend.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $kategori = Kategori::all();
        $penerbit = Penerbit::all();
        return view('adminbackend.buku.create', compact('buku', 'kategori', 'penerbit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = new Buku();
        $buku->id_kategori = $request->kt_nama;
        $buku->id_penerbit = $request->pb_nama;
        $buku->buku_judul = $request->buku_jdl;
        $buku->buku_jumhal = $request->jl_hl;
        $buku->buku_deskripsi = $request->buku_deskripsi;
        $buku->buku_pengarang = $request->pengarangyah;
        $buku->buku_tahun_terbit = $request->tahun;

        $buku->save();
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        $kategori = Kategori::all();
        $penerbit = Penerbit::all();
        return view('adminbackend.buku.show', compact('buku', 'kategori', 'penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $penerbit = Penerbit::all();
        $buku = Buku::findOrFail($id);
        return view('adminbackend.buku.edit', compact('kategori', 'penerbit', 'buku'));
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
        $buku = Buku::findOrFail($id);
        $buku->id_kategori = $request->kt_nama;
        $buku->id_penerbit = $request->pb_nama;
        $buku->buku_judul = $request->buku_jdl;
        $buku->buku_jumhal = $request->jl_hl;
        $buku->buku_deskripsi = $request->deskripsi;
        $buku->buku_pengarang = $request->pengarangyah;
        $buku->buku_tahun_terbit = $request->tahun;

        $buku->save();
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrfail($id)->delete();
        return redirect()->route('buku.index');
    }
}
