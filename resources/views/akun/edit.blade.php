@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Daftar Siswa</div>

                <div class="card-body">

                    <form action="{{route('akun.update', $akun->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                        <div class="col-md-6">
                                    <label for="">Nama</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" value="{{$item->nama}}" class="form-control" name="nama" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" value="{{$item->email}}" class="form-control" name="email" required>
                                </div>
                                {{-- <div class="col-md-6">
                                <label for="">Pengguna</label>
                                </div>
                                <div class="col-md-12">
                                <select name="id_profil"  class="form-control">
                                        @foreach ($data as $item)
                                            <option value=" {{$item->id}} "
                                            {{ $data->id == $profiel->id_profil ? "selected" : "" }}>
                                                {{$item->no_tlp}} </option>
                                        @endforeach
                                </select>
                                </div> --}}
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
