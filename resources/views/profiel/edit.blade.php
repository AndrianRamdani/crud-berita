@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profil</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{route('profiel.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nama</label>
                                </div>
                                <div class="col-md-12">
                                    <select name="akun_id" class="form-control" required>
                                        @foreach($akun as $data)
                                        <option value="{{$data->id}}">{{$data->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tanggal Lahir</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="date" value="{{$profiel->tgl_lahir}}" class="form-control" name="tgl_lahir" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Alamat</label>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" value="{{$profiel->alamat}}" name="alamat">
                                            {{$profiel->alamat}}
                                    </textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">No Telepon</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="number" value="{{$profiel->no_tlp}}" class="form-control" name="no_tlp" required>
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



