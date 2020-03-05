@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                    <form action="{{route('kategori.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Kategori</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class ="form-control" name="kategori" required>
                            </div>
                            <!-- <div class="col-md-4">
                                <label for="">Slug</label>
                            </div>
                            <div class="col-md-10">
                                <input  class ="form-control" name="slug" required>
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
