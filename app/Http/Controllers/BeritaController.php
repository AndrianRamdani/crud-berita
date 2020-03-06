<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Tag;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::with('tag')->get();
        $tag = Tag::All();
        return view ('berita.index',compact('data','tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = Tag::all();
        return view('berita.create',compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->foto = $request->foto;
        $berita->tanggal = $request->tanggal;
        $berita->tag()->attach($request->tag);
        $berita->save();
        return redirect()->route('berita.index')
        ->with(['message' => 'Data Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show' ,compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $select = $berita->tag->pluck('id')->toArray();
        $tag = Tag::all();
        return view('berita.edit' ,compact('berita','select','tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::finOrfail($id);
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->foto = $request->foto;
        $berita->tanggal = $request->tanggal;
        $berita->save();
        $berita->tag()->sync($request->tag);
        return redirect()->route('berita.index')
        ->with(['message' => 'Data Berhasil Disimpan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita= Berita::findOrFail($id);
        $berita->tag()->detach($request->tag);
        $berita->delete();
        return redirect()->route('berita.index')
              ->with(['message' => 'Data Berhasil Dihapus']);
    }
}
