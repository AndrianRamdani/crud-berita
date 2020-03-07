@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Daftar Siswa</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                        <div class="row">
                        <div class="col-md-6">
                                    <label for="">Nama</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" value="{{$profiel->akun->nama}}" class="form-control" name="nama" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tanggal Lahir</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="date" value="{{$profiel->tgl_lahir}}" class="form-control" name="tgl_lahir" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Alamat</label>
                                </div>
                                <div class="col-md-12">
                                    <textarea value="{{$profiel->alamat}}" class="form-control" name="alamat" readonly>
                                        {{$profiel->alamat}}
                                    </textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">No Telepon</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="number" value="{{$profiel->no_tlp}}" class="form-control" name="no_tlp" readonly>
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
