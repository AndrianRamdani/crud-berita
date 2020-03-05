<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Artikel::with('kategori')->get();
        return view ('artikel.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Kategori::all();
        return view('artikel.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel = new Artikel();
        $artikel->artikel = $request->artikel;
        $artikel->kategori_id = $request->kategori_id;
        $artikel->save();
        return redirect()->route('artikel.index')
        ->with(['message' => 'Data Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show' ,compact('artikel'));
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.edit' ,compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->artikel = $request->artikel;
        $artikel->kategori_id = $request->kategori_id;
        $artikel->save();
        return redirect()->route('artikel.index')
        ->with(['message' => 'Data Berhasil Disimpan']);
    }

    public function destroy($id)
    {
        $artikel= Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('artikel.index')
              ->with(['message' => 'Data Berhasil Dihapus']);
    }
}
