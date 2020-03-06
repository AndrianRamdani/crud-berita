@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Daftar Siswa</div>

                <div class="card-body">

                    <form action="{{route('berita.update', $berita->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                        <div class="col-md-4">
                                <label for="">Judul Berita</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="{{$berita->judul}}" name="judul" required>
                            </div>
                            <div class="col-md-4">
                                <label for="">Deskripsi</label>
                            </div>
                            <div class="col-md-8">
                                <textarea value="{{$berita->deskripsi}}" name="deskripsi" required>
                            </div>
                            <div class="col-md-4">
                                <label for="">Foto</label>
                            </div>
                            <div class="col-md-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" value="{{$item->foto}}" id="customFile" name="foto">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Tag</label>
                            </div>
                            <div class="col-md-10">
                            <select class="form-control pilih-tag" id="js-multiple" multiple="multiple" name="tag_id[]">
                                    @foreach($tag as $data)
                                        <option value="{{$data->id}}"
                                            {{ $data->id == $berita->id_tag ? "selected" : "" }}>
                                            {{$data->tag}}
                                        </option>
                                        @endforeach
                            </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Tanggal</label>
                            </div>
                            <div class="col-md-10">
                                <input type="date" class="form-control" value="{{$item->tanggal}}" name="tanggal" required>
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

@push('script')
<script>
    $(document).ready(function()
    {
        $('#js-multiple').select2();
    });
</script>
@endpush
