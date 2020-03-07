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
                                    <input type="text" value="{{$akun->nama}}" class="form-control" name="nama" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" value="{{$akun->email}}" class="form-control" name="email" readonly>
                                </div>
                                {{-- <div class="col-md-6">
                                <label for="">Pengguna</label>
                                </div>
                                <div class="col-md-12">
                                <select name="id_profil"  class="form-control">
                                    @foreach ($profiel->no_tlp as $value)
                                        {{$value->no_tlp}}
                                    @endforeach
                                </select>
                                </div> --}}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
