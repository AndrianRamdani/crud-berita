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
                <div class="card-header">Ini Halaman Daftar Berita</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                    <a href="{{ route('berita.create')}}" class="btn btn-primary">
                    Tambah
                    </a>
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Tag</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                           @foreach ($data as $item)
                            <tr>
                                <td>no++</td>
                                <td>{{$item->judul}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td>{{$item->foto}}</td>
                                <td>
                                    <ul>
                                        @foreach ($item->tag as $value)
                                            <li>{{$value->tag}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>{{$item->tanggal}}</td>
                                <td>
                                    <form action="{{route('berita.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-info" href="{{route('berita.show', $item->id)}} ">Lihat</a>
                                    <a class="btn btn-warning" href="{{route('berita.edit', $item->id)}} ">Edit</a>
                                    <button type="submit" class="btn btn-danger" >Delete</button>
                                    </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
