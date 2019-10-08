<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjam;
use File;
use Session;
use auth;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjam = Peminjam::orderBy('created_at', 'desc')->get();
        return view('adminbackend.peminjam.index', compact('peminjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjam = Peminjam::all();
        return view('adminbackend.peminjam.create', compact('peminjam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjam = new peminjam();
        $peminjam->peminjam_nama = $request->nm_pm;
        $peminjam->alamat = $request->al_pm;
        $peminjam->peminjam_telp = $request->nomor;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $Path = public_path() . '/assets/img/peminjam/';
            $filename = '-'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $peminjam->foto = $filename;
        }
        $peminjam->save();

        return redirect()->route('peminjam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjam = Peminjam::findOrFail($id);
        return view('adminbackend.peminjam.show', compact('peminjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjam = Peminjam::findOrFail($id);
        return view('adminbackend.peminjam.edit', compact('peminjam'));
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
        $peminjam = Peminjam::findOrFail($id);
        $peminjam->peminjam_nama = $request->peminjam_nm;
        $peminjam->alamat = $request->peminjam_al;
        $peminjam->peminjam_telp = $request->peminjam_tp;

        if ($request->hasFile('foto')) {
            $file  = $request->file('foto');
            $Path = public_path() . '/assets/img/peminjam/';
            $filename = '-'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $peminjam->foto = $filename;
        }
        $peminjam->save();
        return redirect()->route('peminjam.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjam = Peminjam::findOrfail($id)->delete();
        return redirect()->route('peminjam.index');
    }
}
