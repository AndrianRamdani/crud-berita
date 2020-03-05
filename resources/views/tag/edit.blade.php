@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Daftar Siswa</div>

                <div class="card-body">

                    <form action="{{route('tag.update', $tag->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                        <div class="col-md-4">
                                <label for="">Tag</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" value="{{$tag->tag}}" name="tag" required>
                            </div>
                            <!-- <div class="col-md-4">
                                <label for="">Slug</label>
                            </div>
                            <div class="col-md-10">
                                <input value="{{$tag->slug}}" class="form-control" name="slug" required>
                            </div> -->
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
