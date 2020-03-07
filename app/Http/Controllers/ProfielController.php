<?php

namespace App\Http\Controllers;

use App\Akun;
use App\Profiel;
use Illuminate\Http\Request;

class ProfielController extends Controller
{

    public function index()
    {
        $data = Profiel::with('akun')->get();
        return view('profiel.index', compact('data'));
    }

    public function create()
    {
        $profiel = Profiel::all();
        $akun = Akun::all();
        return view('profiel.create',compact('akun'));
    }

    public function store(Request $request)
    {
        $profiel = new Profiel();
        $profiel->akun_id= $request->akun_id;
        $profiel->tgl_lahir = $request->tgl_lahir;
        $profiel->alamat = $request->alamat;
        $profiel->no_tlp = $request->no_tlp;
        $profiel->save();
        return redirect()->route('profiel.index')->with(['message' => 'Data profiel Berhasil disimpan']);
    }

    public function show($id)
    {
        $profiel = Profiel::findOrFail($id);
        return view('profiel.show', compact('profiel'));
    }

    public function edit($id)
    {
        $profiel = Profiel::findOrFail($id);
        $akun = Akun::all();
        return view('profiel.edit', compact('profiel','akun'));
    }

    public function update(Request $request, $edit)
    {

        $profiel = Profiel::findOrFail($id);
        $profiel->nama_id = $request->nama_id;
        $profiel->tgl_lahir = $request->tgl_lahir;
        $profiel->alamat = $request->alamat;
        $profiel->save();
        return redirect()->route('profiel.index')->with(['message' => 'Data profiel Berhasil disimpan']);
    }

    public function destroy($id)
    {

        $profiel = Profiel::findOrFail($id);
        $profiel->delete();
        return redirect()->route('profiel.index')->with(['message' => 'Data profiel Berhasil dihapus']);
    }
}
