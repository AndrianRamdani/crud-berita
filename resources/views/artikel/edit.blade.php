@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Artikel</div>

                <div class="card-body">

                    <form action="{{route('artikel.update', $artikel->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Artikel</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" value="{{$artikel->artikel}}" name="artikel" required>
                            </div>
                            <div class="col-md-4">
                                <label for="">Kategori</label>
                            </div>
                            <div class="col-md-10">
                            <select name="kategori_id" class="form-control">
                                        @foreach ($errors as $item)
                                            <option value=" {{$item->id}} "
                                            {{ $item->id == $artikel->kategori_id ? "selected" : "" }}>
                                                {{$item->kategori}} </option>
                                        @endforeach
                                    </select>
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
