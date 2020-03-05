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
                            <div class="col-md-4">
                                <label for="">Judul Berita</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="{{$berita->judul}}" name="judul" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="">Deskripsi</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="{{$berita->deskripsi}}" name="deskripsi" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="">Foto</label>
                            </div>
                            <div class="col-md-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" value="{{$item->foto}}" id="customFile" name="foto" readonly>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Tag</label>
                            </div>
                            <div class="col-md-10">
                            <select class="form-control pilih-tag" multiple name="tag_id[]">
                                    @foreach ($berita->tag as $item)
                                        <li>{{$item->tag}}</li>
                                    @endforeach
                            </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Tanggal</label>
                            </div>
                            <div class="col-md-10">
                                <input type="date" class="form-control" value="{{$item->tanggal}}" name="tanggal" readonly>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
