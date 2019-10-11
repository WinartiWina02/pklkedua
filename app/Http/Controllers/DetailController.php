<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Buku;
use App\Peminjam;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = Detail::all();
        return view('adminbackend.detail.index', compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detail = Detail::all();
        $buku = Buku::all();
        $peminjam = Peminjam::all();
        return view('adminbackend.detail.create', compact('detail', 'buku', 'peminjam'));
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
        $detail = new detail();
        $detail->peminjams_id = $request->peminjam_nama;
        $detail->id_buku = $request->buku_judul;
        $detail->detail_tgl_kembali = $request->kembali;
        $detail->detail_denda = $request->detail;
        $detail->detail_status_kembali = $request->status;


        $detail->save();

        return redirect()->route('detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Detail::findOrfail($id)->delete();
        return redirect()->route('detail.index');
    }
}
