@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Daftar Siswa</div>

                <div class="card-body">

                    <form action="{{route('profiel.update', $profiel->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nama</label>
                                </div>
                                <div class="col-md-12">
                                    <select name="nama_id" class="form-control" required>
                                        @foreach($data->profil as $data)
                                        <option value="{{$data->profil->id}}"
                                            {{ $item->id == $akun->nama_id ? "selected" : "" }}>
                                            {{$data ?? ''->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tanggal Lahir</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="date" value="{{$item->tgl_lahir}}" class="form-control" name="tgl_lahir" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Alamat</label>
                                </div>
                                <div class="col-md-12">
                                    <textarea value="{{$item->alamat}}" class="form-control" name="alamat">

                                    </textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">No Telepon</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="number" value="{{$item->no_tlp}}" class="form-control" name="no_tlp" required>
                                </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
