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
                <div class="card-header">Ini Halaman Daftar Kategori</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                    <a href="{{ route('kategori.create')}}" class="btn btn-primary">
                    Tambah 
                    </a>
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @php  $no = 1; @endphp 
                           @foreach ($data as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->kategori}}</td>
                                <td>
                                    <form action="{{route('kategori.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-info" href="{{route('kategori.show', $item->id)}} ">Lihat</a>
                                    <a class="btn btn-warning" href="{{route('kategori.edit', $item->id)}} ">Edit</a>
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
