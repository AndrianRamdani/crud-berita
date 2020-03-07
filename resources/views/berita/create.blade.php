@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Berita</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                    <form action="{{route('berita.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Judul Berita</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="judul" required>
                            </div>
                            <div class="col-md-4">
                                <label for="">Deskripsi</label>
                            </div>
                            <div class="col-md-10">
                                <textarea  class="form-control" name="deskripsi" required></textarea>
                            </div>
                            {{-- <div class="col-md-4">
                                <label for="">Foto</label>
                            </div>
                            <div class="col-md-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="foto">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div> --}}
                            <div class="col-md-4">
                                <label for="">Tag</label>
                            </div>
                            <div class="col-md-10">
                            <select class="form-control pilih-tag" id="js-multiple"  multiple name="tag[]">
                                    @foreach ($tag  as $item)
                                        <option value="{{$item->id}}">{{$item->tag}}</option>
                                    @endforeach
                            </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Tanggal</label>
                            </div>
                            <div class="col-md-10">
                                <input type="date" class="form-control" name="tanggal" required>
                            </div>
                        </div>
                        <br>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script type="text/javascript">
    $(document).ready(function()
    {
        $('.pilih-tag').select2();
    });
</script>
@endpush
