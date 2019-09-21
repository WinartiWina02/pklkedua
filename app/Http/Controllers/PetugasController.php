<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;
use Session;
use auth;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::orderBy('created_at', 'desc')->get();
        return view('adminbackend.petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $petugas = Petugas::all();
        return view('adminbackend.petugas.create', compact('petugas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $petugas = new petugas();
        $petugas->petugas_nama = $request->petugas_nm;

        $petugas->save();

        return redirect()->route('petugas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('adminbackend.petugas.show', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('adminbackend.petugas.edit', compact('petugas'));
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

        $petugas = Petugas::findOrFail($id);
        $petugas->petugas_nama = $request->petugas_nm;
        $petugas->save();
        return redirect()->route('petugas.index');
        $response = [
            'success' => true,
            'data' => $petugas,
            'message' => 'Berhasil Dirubah!'
        ];
        // return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugas = Petugas::findOrfail($id)->delete();
        return redirect()->route('petugas.index');
    }
}
