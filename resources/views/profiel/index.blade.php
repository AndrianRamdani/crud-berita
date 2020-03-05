@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header">Profiel</div>
                <div class="card-body">
                    <a href="{{ route('profiel.create')}}" class="btn btn-primary">
                    Tambah
                    </a>
                    <table class="table">
                        <thead>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->akun->nama}}</td>
                                <td>{{$item->tgl_lahir}}</td>
                                <td> {{$item->alamat}} </td>
                                <td> {{$item->no_tlp}} </td>
                            <form action="{{route('profiel.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <td><a class="btn btn-primary" href="{{route('profiel.show', $item->id)}}">Lihat</a>|
                                <a class="btn btn-warning" href="{{route('profiel.edit', $item->id)}}">Edit</a>|
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                </tr>
                                </td>
                            </form>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
