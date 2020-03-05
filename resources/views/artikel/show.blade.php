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
                                <label for="">Artikel</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="{{$artikel->artikel}}" name="artikel" class="form-control"  readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="">Kategori</label>
                            </div>
                            <div class="col-md-8">
                            <input name="kategori_id"value="{{$artikel->kategori->kategori}}" class="form-control" readonly>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
